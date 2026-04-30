<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\{HomeController, AboutController, ServiceController, PortfolioController, BlogController, ContactController};
use App\Http\Controllers\Auth\{LoginController, RegisterController, ForgotPasswordController};
use App\Http\Controllers\Admin\{DashboardController, ServiceController as AdminServiceController, PortfolioController as AdminPortfolioController, BlogPostController, ContactSubmissionController, SettingsController, UserController, PageController};
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Frontend\StudentController;
use App\Http\Controllers\Admin\StudentRegistrationController;
/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/{service:slug}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
// Frontend
Route::get('/student-registration', [StudentController::class, 'index'])->name('student.register');
Route::post('/student-registration', [StudentController::class, 'store'])->name('student.register.store');
Route::get('/airs', [App\Http\Controllers\Frontend\AirsController::class, 'index'])->name('airs');
Route::get('/industries/banking', function () {
    return view('frontend.banking');
})->name('industries.banking');
/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

    Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

});

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {

    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Services CRUD
    Route::resource('services', AdminServiceController::class)->except(['show']);

    // Portfolio CRUD
    Route::resource('portfolio', AdminPortfolioController::class)->except(['show']);

    // Blog CRUD (bound by 'blog')
    Route::get('blog', [BlogPostController::class, 'index'])->name('blog.index');
    Route::get('blog/create', [BlogPostController::class, 'create'])->name('blog.create');
    Route::post('blog', [BlogPostController::class, 'store'])->name('blog.store');
    Route::get('blog/{blog}/edit', [BlogPostController::class, 'edit'])->name('blog.edit');
    Route::put('blog/{blog}', [BlogPostController::class, 'update'])->name('blog.update');
    Route::delete('blog/{blog}', [BlogPostController::class, 'destroy'])->name('blog.destroy');

    // Contact Submissions
    Route::get('contact', [ContactSubmissionController::class, 'index'])->name('contact.index');
    Route::get('contact/{contact}', [ContactSubmissionController::class, 'show'])->name('contact.show');
    Route::patch('contact/{contact}/status', [ContactSubmissionController::class, 'updateStatus'])->name('contact.status');
    Route::delete('contact/{contact}', [ContactSubmissionController::class, 'destroy'])->name('contact.destroy');

    // Settings
    Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::put('settings', [SettingsController::class, 'update'])->name('settings.update');

    // Users
    Route::resource('users', UserController::class)->except(['show']);

    // Pages
    Route::get('pages', [PageController::class, 'index'])->name('pages.index');
    Route::get('pages/{page}/edit', [PageController::class, 'edit'])->name('pages.edit');
    Route::put('pages/{page}', [PageController::class, 'update'])->name('pages.update');

    // Student Registrations
Route::get('students', [StudentRegistrationController::class, 'index'])->name('students.index');
Route::get('students/{student}', [StudentRegistrationController::class, 'show'])->name('students.show');
Route::patch('students/{student}/status', [StudentRegistrationController::class, 'updateStatus'])->name('students.status');
Route::delete('students/{student}', [StudentRegistrationController::class, 'destroy'])->name('students.destroy');
});