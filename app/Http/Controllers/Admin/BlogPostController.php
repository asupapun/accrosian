<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::latest()->get();
        return view('admin.blog.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'           => 'required|string|max:255',
            'slug'            => 'nullable|string|max:255|unique:blog_posts,slug',
            'excerpt'         => 'nullable|string',
            'content'         => 'nullable|string',
            'featured_image'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:9048',
            'meta_title'      => 'nullable|string|max:255',
            'meta_description'=> 'nullable|string',
            'meta_keywords'   => 'nullable|string',
            'status'          => 'boolean',
            'published_at'    => 'nullable|date',
        ]);

        $data['slug']   = $data['slug'] ?? Str::slug($data['title']);
        $data['status'] = $request->boolean('status');
        if (empty($data['published_at']) && $data['status']) {
            $data['published_at'] = now();
        }

        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $request->file('featured_image')->store('blog', 'public');
        }

        BlogPost::create($data);
        return redirect()->route('admin.blog.index')->with('success', 'Blog post created.');
    }

    public function edit(BlogPost $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, BlogPost $blog)
    {
        $data = $request->validate([
            'title'           => 'required|string|max:255',
            'slug'            => 'nullable|string|max:255|unique:blog_posts,slug,' . $blog->id,
            'excerpt'         => 'nullable|string',
            'content'         => 'nullable|string',
            'featured_image'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:9048',
            'meta_title'      => 'nullable|string|max:255',
            'meta_description'=> 'nullable|string',
            'meta_keywords'   => 'nullable|string',
            'status'          => 'boolean',
            'published_at'    => 'nullable|date',
        ]);

        $data['slug']   = $data['slug'] ?? Str::slug($data['title']);
        $data['status'] = $request->boolean('status');
        if (empty($data['published_at']) && $data['status'] && !$blog->published_at) {
            $data['published_at'] = now();
        }

        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $request->file('featured_image')->store('blog', 'public');
        }

        $blog->update($data);
        return redirect()->route('admin.blog.index')->with('success', 'Blog post updated.');
    }

    public function destroy(BlogPost $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Blog post deleted.');
    }
}