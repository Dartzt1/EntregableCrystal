<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ClearOldImages extends Command
{
    protected $signature = 'clear:old-images';
    protected $description = 'Delete old images from storage/images';

    public function handle()
    {
        $directory = storage_path('app/public/images');

        // Verifica si el directorio existe antes de intentar eliminar archivos
        if (File::isDirectory($directory)) {
            // Elimina todos los archivos que tengan más de 1 día de antigüedad
            File::deleteDirectory($directory, true);

            $this->info('Old images deleted successfully.');
        } else {
            $this->info('Directory not found.');
        }
    }
}
