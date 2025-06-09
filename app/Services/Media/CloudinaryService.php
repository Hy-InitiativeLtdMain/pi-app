<?php

namespace App\Services\Media;


class CloudinaryService
{
    public function store($image, $folder="product_images")
    {
        $imageUrl = cloudinary()->upload(
            $image->getRealPath(),
            [
                'folder' => $folder,
                "resource_type" => "auto",
                'transformation' => [
                    'quality' => 'auto',
                    'fetch_format' => 'auto'
                ]
            ]
        );
        return [
            $imageUrl->getSecurePath(),
            $imageUrl->getPublicId(),
        ];
    }

    public function delete($url_id)
    {
        return cloudinary()->UploadApi()->destroy($url_id);
    }

    public function storeFiles($file, $folder = "product_files")
    {
        $fileURL = cloudinary()->uploadLarge(
            $file->getRealPath(),
            [
                'folder' => $folder,
                "resource_type" => "auto",
            ]
        );

        return [
            $fileURL->getSecurePath(),
            $fileURL->getPublicId(),
        ];
    }
}
