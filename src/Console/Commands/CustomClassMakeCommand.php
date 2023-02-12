<?php

namespace AjayKushwaha25\CustomMakeCommand\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class CustomClassMakeCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'custom:class {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new custom class';

    /**
     * The filesystem instance.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * Create a new command instance.
     *
     * @param  \Illuminate\Filesystem\Filesystem  $files
     * @return void
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();

        $this->files = $files;
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $name = $this->argument('name');
        $dirInput = $this->ask('What should be the directory of the class? (This will a folder inside app directory)');
        $stub = $this->files->get(__DIR__ . '/stubs/custom-class.stub');

        // Replace the placeholder with the actual class name and namespace
        $stub = str_replace('{{ class_name }}', $name, $stub);
        $stub = str_replace('{{ namespace }}', ucwords($dirInput), $stub);

        // Write the class to a file
        $dir_path = app_path($dirInput);
        $file_path = app_path("{$dirInput}/{$name}.php");

        if ($this->files->exists($file_path)) {
            return $this->error('The class already exists.');
        }

        if (!$this->files->exists($dir_path)) {
            $this->files->makeDirectory($dir_path, 0755, true);
        }

        $this->files->put($file_path, $stub);

        $this->info("The class {$name} has been created successfully at {$file_path}");

    }
}
