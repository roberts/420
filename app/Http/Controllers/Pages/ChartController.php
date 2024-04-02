<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use DrewRoberts\Media\Models\Image;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function __invoke(Request $request)
    {
        // $image = Image::find(43)->url;
        $image = url('img/og-tardie.png');

        return view('pages.chart', [
            'title' => 'Chart for $TaRDie on Solana',
            'description' => 'View the DexScreener chart for $TaRDie on Solana. Look nowhere else for live updates on Robert trading activity..',
            'canonical' => route('chart'),
            'ogimage' => $image === null ? url('img/og-tardie.png') : $image,
        ]);
    }
}