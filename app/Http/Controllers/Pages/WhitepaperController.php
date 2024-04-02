<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use DrewRoberts\Media\Models\Image;
use Illuminate\Http\Request;

class WhitepaperController extends Controller
{
    public function __invoke(Request $request)
    {
        // $image = Image::find(43)->url;
        $image = url('img/og-tardie.png');

        return view('pages.whitepaper', [
            'title' => 'Whitepaper for $TaRDie on Solana',
            'description' => 'View the Whitepaper for $TaRDie on Solana. Get all the juicy details about the roadmap & plans for TaRDie bArbIE..',
            'canonical' => route('whitepaper'),
            'ogimage' => $image === null ? url('img/og-tardie.png') : $image,
        ]);
    }
}