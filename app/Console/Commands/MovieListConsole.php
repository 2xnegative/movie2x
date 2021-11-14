<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MovieListConsole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'movies:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List Movie of the System';

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
        $movies = \App\movie::all();
        $headers = ['#','title'];
        $this->table($headers,$movies);
    }
}
