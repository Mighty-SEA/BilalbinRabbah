<?php

namespace App\Http\Controllers;

use App\Models\Landing;
use App\Models\Murid;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $muridlulus = Landing::where('kelas', '7')->count();
        $muridterdaftar = Landing::count();

        return view('landingpages.index', compact('muridlulus', 'muridterdaftar'));
    }
}
