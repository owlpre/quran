<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Quran as QuranModel;
use App\Aya;
use App\Sura;
use Storage;

class Quran extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quran';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync from data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $sura_ars = Storage::get('/data/suras-ar.txt');
        $sura_ars = explode(PHP_EOL, $sura_ars);
        $data = Storage::get('/data/arrays.xml');
        $data = xml2array(simplexml_load_string($data));
        $sura_names = xml2array($data['string-array'][27])['item'];
        $sura_artis = xml2array($data['string-array'][26])['item'];
        $sura_count = count($sura_names);

        for ($i=1; $i <= $sura_count; $i++) { 
            $sura = Sura::updateOrCreate([
                'id' => $i,
                'name' => trim($sura_names[$i - 1], '"'),
                'arti' => trim($sura_artis[$i - 1], '"'),
                'ar' => $sura_ars[$i - 1],
            ]);
        }

        $ayas = QuranModel::all();
        $bar = $this->output->createProgressBar(count($ayas));
        foreach ($ayas as $i => $aya) {
            $sura = Sura::findOrFail($aya->sura);
            $aya = $sura->ayas()->updateOrCreate(
                [
                    'aya_id' => $aya->aya,
                    'text' => $aya->text,
                ]
            );
            $bar->advance();
        }
        $bar->finish();
    }
}
