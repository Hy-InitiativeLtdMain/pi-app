<?php

namespace App\Services\Media;


class CloudinaryService
{
    public function store($file, $folder="product_images")
    {
        $imageUrl = cloudinary()->upload(
            $file->getRealPath(),
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

    public function storeFiles($file, $folder="product_files"){
        $fileURL =cloudinary()->uploadFile(
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
