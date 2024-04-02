<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use DrewRoberts\Media\Models\Image;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke(Request $request)
    {
        // $image = Image::find(43)->url;
        $image = url('img/og-tardie.png');

        return view('pages.about', [
            'title' => 'About $TaRDie on Solana',
            'description' => 'Find out more about $TaRDie on Solana. Not just a memecoin. Its a lifestyle. 💅 Pink Lambo giveaway at 69 million',
            'canonical' => route('about'),
            'ogimage' => $image === null ? url('img/og-tardie.png') : $image,
        ]);
    }
}