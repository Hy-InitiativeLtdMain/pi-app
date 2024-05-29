<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use Aws\S3\PostObjectV4;
use Aws\S3\S3Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class VimeoManager extends Controller
{
    public function generatePresignedUrl(Request $request)
    {

        $request->validate([
            'size' => [
                'required',
                'numeric',
            ],

        ]);

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/vnd.vimeo.*+json;version=3.4'
        ])
            ->withToken(env("VIMEO_ACCESS"))
            ->post(env("VIMEO_HOST") . 'me/videos', [
                'upload' => [
                    'approach' => 'tus',
                    'size' => $request->input('size')
                ],
            ]);
        return response()->json($response->json(), 200);
    }
}
