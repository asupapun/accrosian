<div style="display:grid;grid-template-columns:1fr 340px;gap:24px">
    <div>
        <div class="admin-card">
            <h3 class="admin-card-title" style="margin-bottom:20px">Service Details</h3>

            @if($errors->any())
            <div class="alert alert-error">
                @foreach($errors->all() as $e)<div>• {{ $e }}</div>@endforeach
            </div>
            @endif

            <div class="form-row">
                <div class="form-field">
                    <label>Title *</label>
                    <input type="text" name="title" value="{{ old('title', $service->title ?? '') }}" required
                        placeholder="e.g. Web Development" />
                </div>
                <div class="form-field">
                    <label>Slug</label>
                    <input type="text" name="slug" value="{{ old('slug', $service->slug ?? '') }}"
                        placeholder="auto-generated" />
                    <span class="hint">Leave blank to auto-generate from title</span>
                </div>
            </div>

            <div class="form-row">
                <div class="form-field">
                    <label>Icon (emoji)</label>
                    <input type="text" name="icon" value="{{ old('icon', $service->icon ?? '') }}" placeholder="🌐"
                        maxlength="10" />
                </div>
                <div class="form-field">
                    <label>Sort Order</label>
                    <input type="number" name="sort_order" value="{{ old('sort_order', $service->sort_order ?? 0) }}"
                        min="0" />
                </div>
            </div>
            <div class="form-field">
                <label>
                    Category
                    <span style="font-size:0.78rem;color:var(--muted);font-weight:400">
                        (groups services in navbar)
                    </span>
                </label>
                <input type="text" name="category" value="{{ old('category', $service->category ?? 'Tech Solution') }}"
                    placeholder="e.g. Tech Solution, Growth Marketing, Design Studio..." list="categoryOptions"
                    autocomplete="off" />
                <datalist id="categoryOptions">
                    @php
                    $existingCats = \App\Models\Service::select('category')
                    ->distinct()
                    ->whereNotNull('category')
                    ->where('category','!=','')
                    ->orderBy('category')
                    ->pluck('category');
                    @endphp
                    @foreach($existingCats as $ec)
                    <option value="{{ $ec }}">
                        @endforeach
                    <option value="Tech Solution">
                    <option value="Growth Marketing">
                    <option value="Design Studio">
                    <option value="Consulting">
                    <option value="Other">
                </datalist>
                <span class="hint">
                    Type any group name. Services with the same category appear together under "What We Do" in the
                    navbar.
                </span>
            </div>

            <div class="form-field">
                <label>Short Description (HTML)</label>
                <textarea name="short_description" rows="3"
                    placeholder="Brief summary shown in cards...">{{ old('short_description', $service->short_description ?? '') }}</textarea>
                <span class="hint">Supports HTML tags: &lt;h2&gt;, &lt;p&gt;, &lt;ul&gt;, &lt;li&gt;, etc.</span>
            </div>

            <div class="form-field">
                <label>Full Description (HTML)</label>
                <textarea name="full_description" rows="10"
                    placeholder="Full HTML content for service detail page...">{{ old('full_description', $service->full_description ?? '') }}</textarea>
                <span class="hint">Supports HTML tags: &lt;h2&gt;, &lt;p&gt;, &lt;ul&gt;, &lt;li&gt;, etc.</span>
            </div>
        </div>

        <div class="admin-card">
            <h3 class="admin-card-title" style="margin-bottom:20px">SEO Settings</h3>
            <div class="form-field">
                <label>Meta Title</label>
                <input type="text" name="meta_title" value="{{ old('meta_title', $service->meta_title ?? '') }}"
                    placeholder="SEO page title (55–65 chars recommended)" />
            </div>
            <div class="form-field">
                <label>Meta Description</label>
                <textarea name="meta_description" rows="3"
                    placeholder="SEO description (120–160 chars recommended)">{{ old('meta_description', $service->meta_description ?? '') }}</textarea>
            </div>
            <div class="form-field">
                <label>Meta Keywords</label>
                <input type="text" name="meta_keywords"
                    value="{{ old('meta_keywords', $service->meta_keywords ?? '') }}"
                    placeholder="keyword1, keyword2, keyword3" />
            </div>
        </div>
    </div>

    <div>
        <div class="admin-card">
            <h3 class="admin-card-title" style="margin-bottom:16px">Publish</h3>
            <div class="toggle-wrap" style="margin-bottom:16px">
                <label class="toggle">
                    <input type="checkbox" name="status" value="1"
                        {{ old('status', $service->status ?? true) ? 'checked' : '' }}>
                    <span class="toggle-slider"></span>
                </label>
                <span style="font-size:0.9rem;color:var(--text-light)">Active (visible on site)</span>
            </div>
            <div style="display:flex;gap:8px;flex-wrap:wrap">
                <button type="submit" class="btn-admin btn-admin-primary"><i class="fas fa-save"></i> Save
                    Service</button>
                <a href="{{ route('admin.services.index') }}" class="btn-admin btn-admin-outline">Cancel</a>
            </div>
        </div>

        {{-- HERO / BANNER IMAGE --}}
        <div class="admin-card">
            <h3 class="admin-card-title" style="margin-bottom:16px">Hero Background Image</h3>
            @if(isset($service) && $service && $service->hero_image && str_starts_with($service->hero_image,
            'services/'))
            <div style="margin-bottom:12px">
                <img src="{{ asset('storage/'.$service->hero_image) }}"
                    style="width:100%;border-radius:8px;object-fit:cover;max-height:160px" />
                <p style="font-size:0.75rem;color:var(--muted);margin-top:4px">Current hero image</p>
            </div>
            @endif
            <div class="form-field">
                <label>Upload Hero Image</label>
                <input type="file" name="hero_image" accept="image/jpg,image/jpeg,image/png,image/webp" />
                <span class="hint">Used as the full-width banner background. JPG, PNG, WebP. Max 2MB.</span>
            </div>
        </div>

        <div class="admin-card">
            <h3 class="admin-card-title" style="margin-bottom:16px">Content Section Image</h3>
            @if(isset($service) && $service && $service->image)
            <div style="margin-bottom:12px">
                @if(str_starts_with($service->image,'assets/'))
                <img src="{{ asset($service->image) }}"
                    style="width:100%;border-radius:8px;object-fit:cover;max-height:160px" />
                @else
                <img src="{{ asset('storage/'.$service->image) }}"
                    style="width:100%;border-radius:8px;object-fit:cover;max-height:160px" />
                @endif
                <p style="font-size:0.75rem;color:var(--muted);margin-top:4px">Current content image</p>
            </div>
            @endif
            <div class="form-field">
                <label>Upload Content Image</label>
                <input type="file" name="image" accept="image/jpg,image/jpeg,image/png,image/webp,image/svg+xml" />
                <span class="hint">Shown beside the description text. JPG, PNG, WebP. Max 2MB.</span>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
function previewImg(input, previewId) {
    const preview = document.getElementById(previewId);
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = e => {
            preview.style.display = 'block';
            preview.querySelector('img').src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endpush