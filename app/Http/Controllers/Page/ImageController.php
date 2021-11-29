<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Filesystem\Filesystem;
use League\Glide\Responses\LaravelResponseFactory;
use League\Glide\ServerFactory;

/**
 * Class ImageController
 * @package App\Http\Controllers\Page
 *
 * I use it to convert images to .webp if browser supports it.
 */
class ImageController extends Controller
{
    public function show(Filesystem $filesystem, $path)
    {
        $server = ServerFactory::create([
            'response'           => new LaravelResponseFactory(app('request')),
            'source'             => $filesystem->getDriver(),
            'source_path_prefix' => 'public',
            'cache'              => $filesystem->getDriver(),
            'cache_path_prefix'  => '.cache',
            'base_url'           => 'images',
        ]);

        return $server->getImageResponse($path, request()->all());
    }
}
