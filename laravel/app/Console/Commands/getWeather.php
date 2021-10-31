<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class getWeather extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'weather:get {city}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'GET Weather';

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
     * @return int
     */
    public function handle()
    {
        $apiKey = "f51d24962c2f4f81dd3ec5d6847f1c8b";
        $city = $this->argument('city');

        $weather = Http::get("https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey");
        echo $weather . PHP_EOL;
        //return $weather;
    }
}
