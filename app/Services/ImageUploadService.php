<?php

namespace App\Services;

class ImageUploadService
{

    public function handleUploadedImage($image)
    {

        $domain = config('app.url');
        $link   = $domain . '/uploads/' . $image->getClientOriginalName();

        if (!is_null($image)) {
            $image->move(base_path('/public/uploads'), $link);
        }
        return $link;
    }
}
