<nav class="navbar" id="navbar">
    <div class="nav-inner">
        <a href="<?php echo e(route('home')); ?>" class="nav-logo">
            <?php if(isset($setting) && $setting->logo): ?>
            <img src="<?php echo e(asset('storage/' . $setting->logo)); ?>" alt="<?php echo e($setting->site_name ?? 'Accrosian'); ?> Logo" />
            <?php else: ?>
            <img src="<?php echo e(asset('assets/images/logo2.png')); ?>" alt="Accrosian Logo" />
            <?php endif; ?>
            <!-- <span class="nav-logo-text">Accr<span>o</span>sian</span> -->
        </a>
        <ul class="nav-menu">
            <li><a href="<?php echo e(route('home')); ?>" class="<?php echo e(request()->routeIs('home') ? 'active' : ''); ?>">Home</a></li>
            
            <li class="nav-dropdown mega">
                <a href="<?php echo e(route('services')); ?>"
                    class="<?php echo e(request()->routeIs('services*') ? 'active' : ''); ?>">Services</a>
                <div class="mega-menu">
                    <div class="mega-inner">

                        
                        <div class="mega-category">
                            <div class="mega-cat-label">What We Offer</div>
                            <div class="mega-cat-title">Our Services</div>
                            <div class="mega-cat-desc">Explore the full range of solutions we deliver for growing
                                businesses.</div>
                            <a href="<?php echo e(route('services')); ?>" class="mega-cat-cta">View All Services →</a>
                        </div>

                        
                        <?php
                        $navServices = \App\Models\Service::active()
                        ->orderBy('category')
                        ->orderBy('sort_order')
                        ->get()
                        ->groupBy('category');
                        ?>

                        <div class="mega-cols">
                            <?php $__currentLoopData = $navServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category => $services): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="mega-col">
                                <div class="mega-col-title"><?php echo e($category); ?></div>
                                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $svc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('services.show', $svc->slug)); ?>">
                                    <span class="svc-icon"><?php echo e($svc->icon); ?></span>
                                    <?php echo e($svc->title); ?>

                                </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                    </div>
                </div>
            </li>

             <li class="nav-dropdown">
                <a href="#">Our Company</a>
                <div class="simple-dropdown">
                    <a href="<?php echo e(route('about')); ?>">About Us</a>
                    <a href="<?php echo e(route('portfolio')); ?>">Portfolio</a>
                    <a href="<?php echo e(route('blog')); ?>" class="<?php echo e(request()->routeIs('blog*') ? 'active' : ''); ?>">Blog</a>
                    <a href="<?php echo e(route('contact')); ?>">Contact</a>
                    <a href="<?php echo e(route('student.register')); ?>">Student Registration</a>
                    <a href="<?php echo e(route('airs')); ?>">AIRS Program</a>
                </div>
            </li>

            <li class="nav-dropdown">
                <a href="#">Industries</a>
                <div class="simple-dropdown">
                    <a href="<?php echo e(route('industries.banking')); ?>">Banking</a>
                    <a href="<?php echo e(route('industries.medinfo')); ?>">Media & Information</a>
                    <a href="<?php echo e(route('industries.education')); ?>">Education</a>
                    <a href="<?php echo e(route('industries.energy')); ?>">Energy Resources and Utilities</a>
                    <a href="<?php echo e(route('industries.healthcare')); ?>">Healthcare</a>
                </div>
            </li>
        </ul>
        <?php if(auth()->guard()->check()): ?>
        <div style="display:flex;align-items:center;gap:8px;margin-left:8px;">
            <?php if(auth()->user()->role === 'admin'): ?>
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-primary btn-sm nav-cta">Admin</a>
            <?php endif; ?>
            <form action="<?php echo e(route('logout')); ?>" method="POST" style="margin:0;">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-primary btn-sm nav-cta">Logout</button>
            </form>
        </div>
        <?php endif; ?>
        <div class="hamburger" id="hamburger"><span></span><span></span><span></span></div>
    </div>
</nav><?php /**PATH C:\xamppNew\htdocs\accroNew\resources\views/partials/navbar.blade.php ENDPATH**/ ?>