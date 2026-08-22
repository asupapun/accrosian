<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Setting;

class SsmdelController extends Controller
{
    public function index()
    {
        $setting = Setting::first();

        return view('frontend.ssmdel', compact('setting'));
    }
}