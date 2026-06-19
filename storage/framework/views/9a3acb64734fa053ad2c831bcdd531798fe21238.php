<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <a href="<?php echo e(route('home')); ?>" class="footer-logo">
                    <?php if(isset($setting) && $setting->footer_logo): ?>
                    <img src="<?php echo e(asset('storage/'.$setting->footer_logo)); ?>"
                        alt="<?php echo e($setting->site_name ?? 'Accrosian'); ?>" />
                    <?php elseif(isset($setting) && $setting->logo): ?>
                    <img src="<?php echo e(asset('storage/'.$setting->logo)); ?>" alt="<?php echo e($setting->site_name ?? 'Accrosian'); ?>" />
                    <?php else: ?>
                    <img src="<?php echo e(asset('assets/images/logo2.png')); ?>" alt="Accrosian" />
                    <?php endif; ?>
                    <!-- <span class="footer-logo-text">Accr<span>o</span>sian</span> -->
                </a>
                <p class="footer-tagline">
                    Turning ideas into reality through innovative software solutions
                    that drive growth and digital transformation.
                </p>
                <div class="social-links">
                    <?php if(isset($setting) && $setting->linkedin): ?>
                    <a href="<?php echo e($setting->linkedin); ?>" class="social-link" title="LinkedIn" target="_blank"
                        rel="noopener">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <?php endif; ?>
                    <?php if(isset($setting) && $setting->twitter): ?>
                    <a href="<?php echo e($setting->twitter); ?>" class="social-link" title="Twitter" target="_blank"
                        rel="noopener">
                        <i class="fab fa-x-twitter"></i>
                    </a>
                    <?php endif; ?>
                    <?php if(isset($setting) && $setting->instagram): ?>
                    <a href="<?php echo e($setting->instagram); ?>" class="social-link" title="Instagram" target="_blank"
                        rel="noopener">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <?php endif; ?>
                    <?php if(isset($setting) && $setting->facebook): ?>
                    <a href="<?php echo e($setting->facebook); ?>" class="social-link" title="Facebook" target="_blank"
                        rel="noopener">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="footer-services">
                <h4 class="footer-col-title">Services</h4>

                <?php
                $footerServices = \App\Models\Service::active()
                ->orderBy('sort_order')
                ->take(6)
                ->get();
                ?>

                <ul class="footer-services-list">
                    <?php $__currentLoopData = $footerServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $svc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="<?php echo e(route('services.show', $svc->slug)); ?>">
                            <?php echo e($svc->title); ?>

                        </a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>

                <a href="<?php echo e(route('services')); ?>" class="footer-view-all">
                    All Services →
                </a>
            </div>

            <div>
                <h4 class="footer-col-title">Company</h4>
                <ul class="footer-services-list">
                    <li><a href="<?php echo e(route('about')); ?>">About Us</a></li>
                    <li><a href="<?php echo e(route('portfolio')); ?>">Portfolio</a></li>
                    <li><a href="<?php echo e(route('blog')); ?>">Blog</a></li>
                    <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
                    <!-- <li><a href="<?php echo e(route('login')); ?>">Client Login</a></li> -->
                    <!-- <li><a href="<?php echo e(route('student.register')); ?>" style="color:var(--orange);font-weight:600">🎓
                            StudentRegistration</a></li> -->
                </ul>
            </div>

            <div>
                <h4 class="footer-col-title">Contact Us</h4>
                <div class="footer-contact">
                    <?php if(isset($setting) && $setting->address): ?>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">📍</div>
                        <div class="footer-contact-text"><?php echo e($setting->address); ?></div>
                    </div>
                    <?php endif; ?>
                    <?php if(isset($setting) && $setting->contact_phone): ?>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">📞</div>
                        <div class="footer-contact-text">
                            <a href="tel:<?php echo e($setting->contact_phone); ?>"><?php echo e($setting->contact_phone); ?></a>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if(isset($setting) && $setting->contact_email): ?>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">✉️</div>
                        <div class="footer-contact-text">
                            <a href="mailto:<?php echo e($setting->contact_email); ?>"><?php echo e($setting->contact_email); ?></a>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">🕐</div>
                        <div class="footer-contact-text">Mon – Fri: 9:00 AM – 6:00 PM IST</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p class="footer-copy">
                <?php echo isset($setting) && $setting->footer_text ? $setting->footer_text : '© '.date('Y').'
                <span>Accrosian</span>. All rights reserved.'; ?>

            </p>
            <p class="footer-copy">Made with ❤️ in <span>India</span></p>
        </div>
    </div>
</footer><?php /**PATH C:\xamppNew\htdocs\accroNew\resources\views/partials/footer.blade.php ENDPATH**/ ?>