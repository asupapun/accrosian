<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Setting;

class EducationController extends Controller
{
    public function index()
    {
        $setting = Setting::first();

        return view('frontend.education', compact('setting'));
    }
}