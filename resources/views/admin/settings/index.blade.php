@extends('layouts.admin')
@section('admin_title', 'Site Settings')

@section('admin_content')
<div class="breadcrumb"><a href="{{ route('admin.dashboard') }}">Dashboard</a><span>/</span> Settings</div>

<form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')

    <div style="display:grid;grid-template-columns:1fr 1fr;gap:24px">

        {{-- LEFT --}}
        <div>
            <div class="admin-card">
                <h3 class="admin-card-title" style="margin-bottom:20px">🌐 General Settings</h3>
                <div class="form-field"><label>Site Name *</label><input type="text" name="site_name"
                        value="{{ old('site_name', $setting->site_name) }}" required /></div>
                <div class="form-field"><label>Site Title (Browser Tab)</label><input type="text" name="site_title"
                        value="{{ old('site_title', $setting->site_title) }}" /></div>
                <div class="form-field"><label>Footer Text</label><input type="text" name="footer_text"
                        value="{{ old('footer_text', $setting->footer_text) }}"
                        placeholder="© 2025 Accrosian. All rights reserved." /></div>
                <div class="form-field"><label>Google Analytics Code</label><textarea name="google_analytics" rows="4"
                        placeholder="Paste GA4 script tag here...">{{ old('google_analytics', $setting->google_analytics) }}</textarea>
                </div>
            </div>

            <div class="admin-card">
                <h3 class="admin-card-title" style="margin-bottom:20px">📞 Contact Info</h3>
                <div class="form-field"><label>Contact Email</label><input type="email" name="contact_email"
                        value="{{ old('contact_email', $setting->contact_email) }}" /></div>
                <div class="form-field"><label>Phone Number</label><input type="text" name="contact_phone"
                        value="{{ old('contact_phone', $setting->contact_phone) }}" /></div>
                <div class="form-field"><label>Address</label><textarea name="address"
                        rows="3">{{ old('address', !! $setting->address !!) }}</textarea></div>
            </div>

            <div class="admin-card">
                <h3 class="admin-card-title" style="margin-bottom:20px">📱 Social Media</h3>
                @foreach([['facebook','Facebook URL','fab fa-facebook-f'],['instagram','Instagram URL','fab
                fa-instagram'],['linkedin','LinkedIn URL','fab fa-linkedin-in'],['twitter','Twitter / X URL','fab
                fa-x-twitter']] as $s)
                <div class="form-field">
                    <label><i class="{{ $s[2] }}" style="margin-right:6px;color:var(--orange)"></i> {{ $s[1] }}</label>
                    <input type="url" name="{{ $s[0] }}" value="{{ old($s[0], $setting->{$s[0]}) }}"
                        placeholder="https://{{ $s[0] }}.com/accrosian" />
                </div>
                @endforeach
            </div>
        </div>

        {{-- RIGHT --}}
        <div>
            <div class="admin-card">
                <h3 class="admin-card-title" style="margin-bottom:20px">🎨 Branding</h3>

                <div class="form-field">
                    <label>Logo</label>
                    @if($setting->logo)
                    <div
                        style="margin-bottom:8px;padding:12px;background:var(--surface);border-radius:8px;display:inline-block">
                        <img src="{{ asset('storage/'.$setting->logo) }}" style="height:48px;border-radius:6px"
                            alt="Logo" />
                    </div>
                    @else
                    <div
                        style="margin-bottom:8px;padding:12px;background:var(--surface);border-radius:8px;display:inline-block">
                        <img src="{{ asset('assets/images/logo2.png') }}" style="height:48px;border-radius:6px"
                            alt="Logo" />
                    </div>
                    @endif
                    <input type="file" name="logo" accept="image/*" />
                    <span class="hint">PNG, SVG recommended. Transparent background.</span>
                </div>

                <div class="form-field">
                    <label>Favicon</label>
                    @if($setting->favicon)
                    <div
                        style="margin-bottom:8px;padding:12px;background:var(--surface);border-radius:8px;display:inline-block">
                        <img src="{{ asset('storage/'.$setting->favicon) }}" style="height:32px" alt="Favicon" />
                    </div>
                    @endif
                    <input type="file" name="favicon" accept="image/png,image/ico,image/svg+xml" />
                    <span class="hint">PNG or ICO, 32×32 or 64×64px recommended.</span>
                </div>

                <div class="form-field">
                    <label>Open Graph Image (social share)</label>
                    @if($setting->og_image)
                    <img src="{{ asset('storage/'.$setting->og_image) }}"
                        style="width:100%;border-radius:8px;max-height:120px;object-fit:cover;margin-bottom:8px" />
                    @endif
                    <input type="file" name="og_image" accept="image/*" />
                    <span class="hint">1200×630px recommended.</span>
                </div>
            </div>

            <div class="admin-card">
                <h3 class="admin-card-title" style="margin-bottom:20px">🔍 Default SEO</h3>
                <div class="form-field"><label>Default Meta Title</label><input type="text" name="meta_title"
                        value="{{ old('meta_title', $setting->meta_title) }}" placeholder="Homepage meta title" /></div>
                <div class="form-field"><label>Default Meta Description</label><textarea name="meta_description"
                        rows="3"
                        placeholder="Homepage meta description...">{{ old('meta_description', $setting->meta_description) }}</textarea>
                </div>
                <div class="form-field"><label>Default Meta Keywords</label><input type="text" name="meta_keywords"
                        value="{{ old('meta_keywords', $setting->meta_keywords) }}"
                        placeholder="keyword1, keyword2, keyword3" /></div>
            </div>

            <div class="admin-card">
                <button type="submit" class="btn-admin btn-admin-primary"
                    style="width:100%;justify-content:center;padding:14px;font-size:1rem">
                    <i class="fas fa-save"></i> Save All Settings
                </button>
            </div>
        </div>

    </div>
</form>
@endsection