<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Setting;

class SsmmumController extends Controller
{
    public function index()
    {
        $setting = Setting::first();

        return view('frontend.ssmmum', compact('setting'));
    }
}