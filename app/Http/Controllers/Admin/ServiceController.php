<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('sort_order')->get();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'             => 'required|string|max:255',
            'slug'              => 'nullable|string|max:255|unique:services,slug',
            'category'          => 'nullable|string|max:100',
            'short_description' => 'nullable|string',
            'full_description'  => 'nullable|string',
            'icon'              => 'nullable|string|max:10',
            'image'             => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:10048',
            'hero_image'        => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:10048',
            'meta_title'        => 'nullable|string|max:255',
            'meta_description'  => 'nullable|string',
            'meta_keywords'     => 'nullable|string',
            'status'            => 'boolean',
            'sort_order'        => 'nullable|integer',
        ]);

        $data['slug']   = $data['slug'] ?? Str::slug($data['title']);
        $data['status'] = $request->boolean('status');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('services', 'public');
        }
        if ($request->hasFile('hero_image')) {
            $data['hero_image'] = $request->file('hero_image')->store('services', 'public');
        }

        Service::create($data);
        return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $data = $request->validate([
            'title'             => 'required|string|max:255',
            'slug'              => 'nullable|string|max:255|unique:services,slug,' . $service->id,
            'category'          => 'nullable|string|max:100',
            'short_description' => 'nullable|string',
            'full_description'  => 'nullable|string',
            'icon'              => 'nullable|string|max:10',
            'image'             => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:10048',
            'hero_image'        => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:10048',
            'meta_title'        => 'nullable|string|max:255',
            'meta_description'  => 'nullable|string',
            'meta_keywords'     => 'nullable|string',
            'status'            => 'boolean',
            'sort_order'        => 'nullable|integer',
        ]);

        $data['slug']   = $data['slug'] ?? Str::slug($data['title']);
        $data['status'] = $request->boolean('status');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('services', 'public');
        }
        if ($request->hasFile('hero_image')) {
            if ($service->hero_image) {
                Storage::disk('public')->delete($service->hero_image);
            }
          $data['hero_image'] = $request->file('hero_image')->store('services', 'public');
        }
        
        $service->update($data);
        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Service deleted.');
    }
}