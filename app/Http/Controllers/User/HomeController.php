<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        // create visit
        Visit::Create([
            'ip_address' => FacadesRequest::ip(),
            'visit_date' => Carbon::now(),
        ]);

        return view('pages.user.home');
    }
}
