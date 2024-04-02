<?php

namespace App\Http\Controllers\Pages;

use App\Models\Meme;
use App\Models\MemeType;
use App\Http\Controllers\Controller;
use DrewRoberts\Media\Models\Image;
use Illuminate\Http\Request;

class MemesController extends Controller
{
    public function index()
    {
        // $image = Image::find(43)->url;
        $image = url('img/og-tardie.png');

        return view('pages.memes', [
            'title' => 'Memes for $TaRDie on Solana',
            'description' => 'Find out more about $TaRDie on Solana. Not just a memecoin. Its a lifestyle. 💅 Pink Lambo giveaway at 69 million',
            'canonical' => route('memes'),
            'ogimage' => $image === null ? url('img/og-tardie.png') : $image,
            'memeTypes' => MemeType::all(),
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(MemeType $memeType, Meme $meme)
    {
        // $image = Image::find(43)->url;
        $image = url('img/og-tardie.png');

        return view('pages.meme', [
            'meme' => $meme,
            'title' => $meme->title,
            'description' => $meme->description,
            'image' => $meme->image->url . $meme->meme_image_type,
            'image_name' => $meme->image->filename . $meme->meme_image_type,
            'content' => $meme->content,
            'canonical' => env('APP_URL') . $meme->getPathAttribute(),
            'ogimage' => env('APP_URL') . '/img/og-tardie.png',
        ]);
    }

    public function edit(Meme $meme)
    {
        //
    }

    public function update(Request $request, Meme $meme)
    {
        //
    }

    public function destroy(Meme $meme)
    {
        //
    }
}
