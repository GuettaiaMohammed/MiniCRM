<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class ImageService
{
    public function upload($file, $folder = 'images')
    {
        $logo_name = time() . '.' . $file->extension();
        $path = $file->storeAs($folder, $logo_name, 'public');
        return $path;
    }

    public function delete($path)
    {
        if (Storage::exists('/public/' . $path)) {
            Storage::delete('/public/' . $path);
        }
    }
}
