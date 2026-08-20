@extends('layouts.app')

@section('meta_title', $page->meta_title ?? 'Blog – Tech Insights & News')
@section('meta_description', $page->meta_description ?? 'Stay updated with the latest technology insights and news from
the Accrosian team.')

@section('content')

<section class="page-hero">
    @if($page && $page->banner_image)
    <img src="{{ asset('storage/'.$page->banner_image) }}" alt="Blog" class="page-hero-image" />
    @else
    <img src="{{ asset('assets/images/hero-bg-img-2.png') }}" alt="Blog" class="page-hero-image" />
    @endif
    <div class="hero-bg-effects">
        <div class="hero-orb hero-orb-1" style="opacity:0.08"></div>
        <div class="hero-grid"></div>
    </div>
    <div class="container page-hero-inner">
        <h1 class="page-hero-title">Our <span class="text-gradient">Blog</span></h1>
        <p class="page-hero-sub">Insights, tutorials, and news from the Accrosian engineering team.</p>
        <a style="margin-top:30px" href="{{ route('contact') }}" class="btn btn-primary">Get a Quote</a>
    </div>
</section>

<section style="padding:100px 0">
    <div class="container">
        @forelse($posts as $post)
        <article
            style="background:var(--navy-light);border:1px solid var(--border);border-radius:16px;overflow:hidden;display:grid;grid-template-columns:360px 1fr;gap:0;margin-bottom:32px;transition:transform 0.3s,box-shadow 0.3s"
            class="reveal blog-list-card">
            <div style="overflow:hidden;height:260px">
                <img src="{{ $post->image_url }}" alt="{{ $post->title }}"
                    style="width:100%;height:100%;object-fit:cover;transition:transform 0.4s" />
            </div>
            <div style="padding:40px">
                <div style="display:flex;gap:16px;align-items:center;margin-bottom:16px">
                    <span
                        style="background:var(--navy);color:var(--white);padding:4px 12px;border-radius:50px;font-size:0.8rem;font-weight:600">Tech
                        Insights</span>
                    <span
                        style="color:var(--white);font-size:0.85rem">{{ $post->published_at?->format('M d, Y') }}</span>
                    <span style="color:var(--white);font-size:0.85rem">{{ $post->read_time }}</span>
                </div>
                <h2 style="font-size:1.4rem;font-weight:700;color:var(--white);margin-bottom:12px;line-height:1.4">
                    <a href="{{ route('blog.show', $post->slug) }}"
                        style="color:inherit;text-decoration:none;transition:color 0.3s">{{ $post->title }}</a>
                </h2>
                <p style="color:var(--white);line-height:1.7;margin-bottom:24px">
                    {{ Str::limit($post->excerpt, 180) }}</p>
                <a href="{{ route('blog.show', $post->slug) }}" class="btn btn-outline btn-sm"
                    style="display:inline-flex;align-items:center;gap:8px">
                    Read Full Article
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </article>
        @empty
        <div style="text-align:center;padding:80px;color:var(--text-light)">
            <div style="font-size:3rem;margin-bottom:16px">✍️</div>
            <h3>No Posts Yet</h3>
            <p style="margin-top:8px">Stay tuned great content is on the way!</p>
        </div>
        @endforelse

        @if($posts->hasPages())
        <div style="margin-top:48px">{{ $posts->links() }}</div>
        @endif
    </div>
</section>

@endsection

@push('scripts')
<style>
.blog-list-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
}

@media(max-width:768px) {
    .blog-list-card {
        grid-template-columns: 1fr !important;
    }
}
</style>
@endpush