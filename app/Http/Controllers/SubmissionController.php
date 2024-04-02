<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
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
        // Form validation
        $this->validate($request, [
        'solana'  => 'required',
        'handle' => 'required'
        ]);

        // Twitter handles are no longer than 15 characters, but need to trim for people putting in @ sign and https://x.com/ etc

        //  Store submission in database
        Submission::create($request->all());
        return redirect(route('confirmation'))->with( ['solana' => $request->solana, 'handle' => $request->handle] );
    }

    public function confirmation(Request $request)
    {
        // $image = Image::find(43)->url;
        $image = url('img/og-tardie.png');

        return view('pages.submissions.confirmation', [
            'title' => '$TaRDie Submission',
            'description' => 'Not just a memecoin. Its a lifestyle. 💅 Pink Lambo giveaway at 69 million',
            'canonical' => route('confirmation'),
            'ogimage' => url('img/og-tardie.png'),
            'solana' => session('solana') === null ? 'Solana-Address-Here' : session('solana'),
            'handle' => session('handle') === null ? '@DrewRoberts' : '@'.session('handle'),
            'xlink' => session('handle') === null ? 'https://x.com/DrewRoberts' : 'https://x.com/'.session('handle'),
        ]);
    }

    public function show(Submission $submission)
    {
        //
    }

    public function edit(Submission $submission)
    {
        //
    }

    public function update(Request $request, Submission $submission)
    {
        //
    }

    public function destroy(Submission $submission)
    {
        //
    }
}
