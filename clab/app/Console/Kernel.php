<?php
namespace App\Console;

require_once 'phpQuery-onefile.php';

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
date_default_timezone_set('Asia/Tokyo');

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        $schedule->call(function()
        {
            $today = date("Y-m",strtotime('-1 week', time())); 
            $content = [];  
            $url = 'https://www.xvideos.com/best/'.$today;
            $html = file_get_contents($url);
            $doc = phpQuery::newDocument($html);
            for($k = 0;$k < count($doc['.thumb-block']);$k++){
                $temp = $doc['.thumb-block:eq('.$k.')']->attr('id');
                $array = explode('_',$temp);
                $title = $doc['.thumb-block:eq('.$k.') > p > a']->attr('title');
                $content = '<iframe src="https://flashservice.xvideos.com/embedframe/'. $array[1] .'" frameborder="0" width="100%" height="100%" scrolling="no" allowfullscreen="allowfullscreen"></iframe>';
                $movie = new Movie;
                $movie->title = $title;
                $movie->elem = $content;
                $movie->site = "xvideo";
                $movie->save();

        // title,element(iframe~),from
            }
        })->daily();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
