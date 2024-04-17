<?php

namespace App\Http\Controllers;

use App\Models\Tweet;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {

        return view('dashboard', [
            'tweets' => Tweet::orderBy('created_at', 'desc')->paginate(10),
        ]);
    }

    public function profile()
    {
        return view('profile');
    }

    public function bookmarks()
    {
        return view('bookmarks');
    }
}
