<?php

// app/Helpers/ImageHelper.php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;

class ImageHelper
{
    /**
     * Store an image file
     *
     * @param UploadedFile $image
     * @param string $directory
     * @return string
     */
    public static function storeImage(UploadedFile $image, string $directory): string
    {
        $newImageName = time() . '-' . $image->getClientOriginalName();
        $image->storeAs($directory, $newImageName, 'public');
        return $newImageName;
    }
}
