<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Setting;

class SsmhydController extends Controller
{
    public function index()
    {
        $setting = Setting::first();

        return view('frontend.ssmhyd', compact('setting'));
    }
}