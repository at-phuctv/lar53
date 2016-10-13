<?php

namespace App\Libs\Traits;

trait ContentUploadTrait
{

    /**
     * Upload photo
     *
     * @param object $photo input photo
     *
     * @return string
     */
    public static function upload($photo)
    {
        $destinationPath = public_path(config('define.upload'));
        $imgName = time() . '_' . $photo->getClientOriginalName();
        $photo->move($destinationPath, $imgName);
        return $imgName;
    }
}
