
<?php $__env->startSection('meta_title', 'Login – Accrosian'); ?>

<?php $__env->startSection('content'); ?>

<section style="min-height:85vh;display:flex;align-items:center;justify-content:center;padding:80px 20px;
background:linear-gradient(135deg,#0b1026,#1a237e);">

    <div style="width:100%;max-width:460px;
background:linear-gradient(145deg,#0b1026,#121a40);
border-radius:20px;
box-shadow:0 25px 80px rgba(0,0,0,0.6), 0 0 40px rgba(232,117,10,0.2);
border:1px solid rgba(255,255,255,0.05);
padding:10px;margin-top:70px;">

        ```
        <!-- HEADER -->
        <div style="text-align:center;margin-bottom:30px;">
            <h1 style="font-family:var(--font-display);
    font-size:1.9rem;
    font-weight:800;
    color:var(--white);
    letter-spacing:0.5px;">
                Welcome Back
            </h1>

            <p style="color:var(--text-light);margin-top:6px;font-size:0.9rem">
                Sign in to your Accrosian account
            </p>
        </div>

        <!-- FORM CARD -->
        <div style="
background:rgba(10,15,40,0.9);
border:1px solid rgba(255,255,255,0.08);
border-radius:16px;
padding:36px;
backdrop-filter: blur(10px);
box-shadow: inset 0 0 20px rgba(255,255,255,0.02);">

            <?php if($errors->any()): ?>
            <div style="background:rgba(239,68,68,0.1);
    border:1px solid rgba(239,68,68,0.3);
    border-radius:8px;
    padding:14px;
    margin-bottom:20px;
    color:#ef4444;
    font-size:0.9rem">
                <?php echo e($errors->first()); ?>

            </div>
            <?php endif; ?>

            <form action="<?php echo e(route('login')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <!-- EMAIL -->
                <div style="margin-bottom:20px">
                    <label style="display:block;font-size:0.9rem;font-weight:600;color:var(--white);margin-bottom:8px">
                        Email Address
                    </label>

                    <input type="email" name="email" value="<?php echo e(old('email')); ?>" required placeholder="you@example.com"
                        style="width:100%;
            background:rgba(255,255,255,0.03);
            border:1px solid rgba(255,255,255,0.08);
            border-radius:10px;
            padding:13px 16px;
            color:white;
            font-size:0.95rem;
            outline:none;
            transition:all 0.3s ease;"
                        onfocus="this.style.borderColor='#e8750a';this.style.boxShadow='0 0 10px rgba(232,117,10,0.4)'"
                        onblur="this.style.borderColor='rgba(255,255,255,0.08)';this.style.boxShadow='none'">
                </div>

                <!-- PASSWORD -->
                <div style="margin-bottom:20px">
                    <label style="display:block;font-size:0.9rem;font-weight:600;color:var(--white);margin-bottom:8px">
                        Password
                    </label>

                    <input type="password" name="password" required placeholder="••••••••" style="width:100%;
            background:rgba(255,255,255,0.03);
            border:1px solid rgba(255,255,255,0.08);
            border-radius:10px;
            padding:13px 16px;
            color:white;
            font-size:0.95rem;
            outline:none;
            transition:all 0.3s ease;"
                        onfocus="this.style.borderColor='#e8750a';this.style.boxShadow='0 0 10px rgba(232,117,10,0.4)'"
                        onblur="this.style.borderColor='rgba(255,255,255,0.08)';this.style.boxShadow='none'">
                </div>

                <!-- REMEMBER + FORGOT -->
                <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:24px">
                    <label style="display:flex;align-items:center;gap:8px;color:var(--text-light);font-size:0.85rem">
                        <input type="checkbox" name="remember" style="accent-color:#e8750a">
                        Remember me
                    </label>

                    <a href="<?php echo e(route('password.request')); ?>"
                        style="color:#ff8c1a;font-size:0.85rem;text-decoration:none">
                        Forgot password?
                    </a>
                </div>

                <!-- BUTTON -->
                <button type="submit" style="
        width:100%;
        padding:14px;
        font-size:1rem;
        border:none;
        border-radius:50px;
        background:linear-gradient(135deg,#ff8c1a,#e8750a);
        color:white;
        font-weight:600;
        cursor:pointer;
        box-shadow:0 10px 30px rgba(232,117,10,0.4);
        transition:all 0.3s ease;"
                    onmouseover="this.style.transform='translateY(-3px) scale(1.02)';this.style.boxShadow='0 20px 50px rgba(232,117,10,0.6)'"
                    onmouseout="this.style.transform='none';this.style.boxShadow='0 10px 30px rgba(232,117,10,0.4)'">
                    Sign In
                </button>
            </form>
        </div>

        <!-- FOOTER -->
        <p style="text-align:center;margin-top:22px;color:var(--text-light);font-size:0.9rem">
            Don't have an account?
            <a href="<?php echo e(route('register')); ?>" style="color:#ff8c1a;font-weight:600;text-decoration:none">
                Create one
            </a>
        </p>
        ```

    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppNew\htdocs\accroNew\resources\views/auth/login.blade.php ENDPATH**/ ?>