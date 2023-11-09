<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class Repository extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository {name} {diretory?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new repository class';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $name = $this->argument('name');
        $folder = app_path('Repository');
        
        if(! is_dir($folder)){
            mkdir($folder, 0755, true);
        }

        $file = $folder . '/' . $name . '.php';

        $content = <<<EOF
        <?php
            
            namespace App\Repository;

            use Illuminate\Database\Eloquent\Model;

            class {$name} extends Model
            {
                //
            }
            
        EOF;

        file_put_contents($file, $content);
        $this->info("created successfully");
    }
}
