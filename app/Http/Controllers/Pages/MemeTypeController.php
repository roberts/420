<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use DrewRoberts\Media\Models\Image;
use Illuminate\Http\Request;
use App\Models\MemeType;

class MemeTypeController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(MemeType $memeType)
    {
        // $image = Image::find(43)->url;
        $image = url('img/og-tardie.png');

        return view('pages.memetype', [
            'memeType' => $memeType,
            'memes' => $memeType->memes,
            'title' => $memeType->title,
            'description' => $memeType->description,
            'image' => $image,
            'content' => $memeType->content,
            'canonical' => env('APP_URL') . $memeType->getPathAttribute(),
            'ogimage' => env('APP_URL') . '/img/og-tardie.png',
        ]);
    }

    public function edit(MemeType $memeType)
    {
        //
    }

    public function update(MemeType $memeType)
    {
        //
    }

    public function destroy(MemeType $memeType)
    {
        //
    }
}
