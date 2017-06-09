<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Aya;

class QuranClean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quran:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cleaning Quran Text';

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
        $ayas = Aya::all();
        $update_count = 0;

        $bar = $this->output->createProgressBar(count($ayas));
        foreach ($ayas as $i => $aya) {
            $text = $this->ayaText($aya);
            $cleaned = $this->clean($text);
            if ($cleaned != $text) {
                $aya->texts()->create([
                    'text' => $cleaned,
                ]);
                $update_count++;
            }
            $bar->advance();
        }
        $bar->finish();
        $this->line('');
        $this->info($update_count . ' records updated!');
    }

    private function ayaText(Aya $aya) {
        $texts = $aya->texts()->orderBy('created_at', 'desc')->get();
        if (!count($texts)) {
            return $aya->text;
        }
        return $texts->first()->text;
    }

    private function clean($text) {
        $search = [
            'ۙ',
        ];
        $replace = [
            '',
        ];
        $text = str_replace($search, $replace, $text);
        return $text;
    }
}
