<?php

namespace App\Http\Controllers;

use App\Models\Tweet;

use Illuminate\Http\Request;

class TweetController extends Controller
{
    //
    public function store()
    {
        request()->validate([
            'tweet' => 'required|max:255'
        ]);

        $tweet = Tweet::create([
            'content' => request()->get('tweet', '')
        ]);

        return back();
    }

    public function destroy($id)
    {
        Tweet::destroy($id);

        return back();
    }
}
