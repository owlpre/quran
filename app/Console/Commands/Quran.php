<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Quran as QuranModel;
use App\Aya;
use App\Sura;

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
    protected $description = 'Sync from Andi\'s data';

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
        $this->info('sync quran\'s data');
        $ayas = QuranModel::all();
        foreach ($ayas as $i => $aya) {
            $sura = Sura::updateOrCreate([
                'id' => $aya->sura,
            ]);
            $aya = $sura->ayas()->updateOrCreate(
                [
                    'id' => $aya->aya,
                ]
                , [
                    'text' => $aya->text,
                ]
            );
            $this->line('sura ' . $sura->id . ' aya ' . $aya->id);
        }
    }
}
