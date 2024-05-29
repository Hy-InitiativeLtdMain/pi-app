<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use Aws\S3\PostObjectV4;
use Aws\S3\S3Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class AwsManager extends Controller
{
    public function generatePresignedUrl(Request $request)
    {
        $request->validate([
            'filename' => [
                'required',
                'string',
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^\S*$/u', $value)) {
                        $fail('The ' . $attribute . ' is invalid.');
                    }
                },
            ],
            'directory' => [
                'required',
                'string',
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^\S*$/u', $value)) {
                        $fail('The ' . $attribute . ' is invalid.');
                    }
                },
            ],
        ]);
        $filename =  Str::random(10) . '-' . $request->filename;
        $directory = $request->directory;
        $s3 = config('filesystems.disks.s3');
        $client = new S3Client([
            'version' => 'latest',
            'region' => $s3['region'],
            'credentials' => [
                'key' => $s3['key'],
                'secret' => $s3['secret'],
            ]
        ]);
        $bucket = $s3['bucket'];
        $prefix = $directory . '/';
        $acl = 'public-read';
        $expires = '+30 minutes';
        $formInputs = [
            'acl' => $acl,
            'key' => $prefix . $filename,
        ];
        $options = [
            ['acl' => $acl],
            ['bucket' => $bucket],
            ['starts-with', '$key', $prefix],
        ];
        $postObject = new PostObjectV4($client, $bucket, $formInputs, $options, $expires);
        $attributes = $postObject->getFormAttributes();
        $inputs = $postObject->getFormInputs();
        return response()->json([
            'attributes' => $attributes,
            'inputs' => $inputs,
            'url' => $attributes['action'] . '/' . $directory . '/' . $filename
        ], 200);
    }
}
