<?php

namespace App\Services;

use Kreait\Firebase\Factory;
use Kreait\Firebase\Contract\Storage as FirebaseStorage;
use Kreait\Firebase\Contract\Firestore;
use Illuminate\Http\UploadedFile;

class FirebaseService
{
    protected FirebaseStorage $storage;
    protected Firestore $firestore;

    public function __construct()
    {
        $factory = (new Factory)->withServiceAccount(config('firebase.credentials.file'));

        $this->storage = $factory->createStorage();
        $this->firestore = $factory->createFirestore();
    }

    /**
     * Upload a file (image, video, document, etc.) to Firebase Storage.
     *
     * @param UploadedFile $file
     * @param string $folder
     * @return string Public URL to the uploaded file
     */
    public function uploadFile(UploadedFile $file, string $folder = 'uploads'): string
    {
        $bucket = $this->storage->getBucket();

        $filename = $folder . '/' . uniqid() . '_' . $file->getClientOriginalName();

        $bucket->upload(
            file_get_contents($file),
            ['name' => $filename]
        );

        return "https://firebasestorage.googleapis.com/v0/b/{$bucket->name()}/o/" . urlencode($filename) . "?alt=media";
    }

    /**
     * Store a notification in Firebase Firestore.
     *
     * @param string $userId
     * @param string $title
     * @param string $body
     * @return array The stored notification data
     */
    public function storeNotification(string $userId, string $title, string $body): array
    {
        $database = $this->firestore->database();

        $notificationData = [
            'user_id'   => $userId,
            'title'     => $title,
            'body'      => $body,
            'read'      => false,
            'timestamp' => now()->toIso8601String(),
        ];

        $database
            ->collection('notifications')
            ->add($notificationData);

        return $notificationData;
    }
}
