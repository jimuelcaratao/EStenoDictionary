<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Word;
use Illuminate\Http\Request;

class Gregg1Controller extends Controller
{
    public function index()
    {

        $gregg1_arr = Word::where('category_name', 'Gregg 1')->get();

        // dd($gregg1_arr);
        return view('pages.user.gregg1', [
            'gregg1_arr' => $gregg1_arr,
        ]);
    }
}
