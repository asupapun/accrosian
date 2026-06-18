<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $setting = Setting::firstOrCreate(['id' => 1]);
        return view('admin.settings.index', compact('setting'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'site_name'        => 'required|string|max:255',
            'site_title'       => 'required|string|max:255',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords'    => 'nullable|string',
            'footer_text'      => 'nullable|string',
            'contact_email'    => 'nullable|email|max:255',
            'contact_phone'    => 'nullable|string|max:50',
            'address'          => 'nullable|string',
            'facebook'         => 'nullable|url|max:255',
            'instagram'        => 'nullable|url|max:255',
            'linkedin'         => 'nullable|url|max:255',
            'twitter'          => 'nullable|url|max:255',
            'google_analytics' => 'nullable|string',
            'logo'             => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:2048',
            'favicon'          => 'nullable|image|mimes:jpg,jpeg,png,ico,svg|max:512',
            'og_image'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $setting = Setting::firstOrCreate(['id' => 1]);
        $data    = $request->except(['_token', '_method', 'logo', 'favicon', 'og_image']);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('branding', 'public');
        }
        if ($request->hasFile('favicon')) {
            $data['favicon'] = $request->file('favicon')->store('branding', 'public');
        }
        if ($request->hasFile('og_image')) {
            $data['og_image'] = $request->file('og_image')->store('branding', 'public');
        }

        $setting->update($data);

        cache()->forget('site_setting');

        return back()->with('success', 'Settings saved successfully.');
    }
}