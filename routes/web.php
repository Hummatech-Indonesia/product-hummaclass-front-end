<?php

use App\Http\Controllers\Admin\AdminCourseController;
use App\Http\Controllers\Admin\AdminSubModuleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ModuleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\dashboard\StudentDashboardController;
use App\Http\Controllers\Password\ResetPasswordController;
use App\Http\Controllers\Student\Profile\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.pages.welcome');
});

Route::get('login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');

Route::get('register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');


Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
Route::get('save-token', [App\Http\Controllers\AuthController::class, 'saveToken'])->name('save-token');
Route::get('save-token-google', [App\Http\Controllers\AuthController::class, 'saveTokenGoogle'])->name('save-token-google');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ================== USER ==================

Route::prefix('courses')->name('courses.')->group(function () {

    Route::resource('courses', CourseController::class)->only(['index', 'show']);
    Route::get('courses-lesson/{id}', [CourseController::class, 'courseLesson'])->name('course-lesson.index');
});

Route::middleware(['auth_custom', 'guest'])->prefix('dashboard')->name('dashboard.')->group(function () {
    Route::prefix('users')->name('users.')->group(function () {
        Route::get('', [StudentDashboardController::class, 'index'])->name('dashboard');
        Route::get('profile', [ProfileController::class, 'index'])->name('profile');
        Route::get('courses', [CourseController::class, 'student'])->name('courses');

        Route::get('settings', function () {
            return view('user.pages.dashboard.student.settings');
        })->name('settings.index');
    });
});

Route::prefix('password')->name('password.')->group(function () {
    Route::get('email', [ResetPasswordController::class, 'email'])->name('send-email');
    Route::get('reset', [ResetPasswordController::class, 'reset'])->name('reset-password');
});

Route::prefix('events')->name('events.')->group(function () {
    Route::get('events', function () {
        return view('user.pages.events.index');
    })->name('index');

    Route::get('events-detail', function () {
        return view('user.pages.events.detail-events');
    })->name('detail.event');
});

Route::prefix('news')->name('news.')->group(function () {
    Route::get('news', function () {
        return view('user.pages.news.index');
    })->name('index');
    Route::get('detail-news', function () {
        return view('user.pages.news.detail-news');
    })->name('detail.news');
});

Route::get('contacts', function () {
    return view('user.pages.contacts.index');
})->name('contacts.index');

Route::get('404', function () {
    return view('user.errors.404');
})->name('404.index');

Route::get('list-mentors', function () {
    return view('user.pages.list-mentors.index');
})->name('list-mentors.index');

Route::get('learning-path', function(){
    return view('user.pages.learning-path.index');
})->name('learning-path.index');

// ================== ADMIN ==================


Route::middleware(['auth_custom', 'admin'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('home', function () {
        return view('admin.index');
    })->name('home');

    Route::get('categories', function () {
        return view('admin.pages.categories.index');
    })->name('categories.index');

    Route::get('module-questions', function () {
        return view('admin.pages.courses.modules.module-questions.index');
    });
    Route::get('module-questions-create', function () {
        return view('admin.pages.courses.modules.module-questions.create');
    });

    Route::resources([
        'categories' => CategoryController::class,
        'courses' => AdminCourseController::class,
        'users' => UserController::class,
        'modules' => ModuleController::class,
        'sub-modules' => AdminSubModuleController::class
    ]);


    Route::get('courses/detail', function () {
        return view('admin.pages.courses.detail');
    });

    Route::get('courses/detail/edit', function () {
        return view('admin.pages.courses.edit');
    });

    Route::get('courses/detail-2', function () {
        return view('admin.pages.courses.panes.moduls.detail-2');
    });

    Route::get('detail-users', function () {
        return view('admin.pages.users.detail-users');
    })->name('detail-users.index');

    Route::get('create-modul/{id}', [ModuleController::class, 'create'])->name('create.moduls.index');

    Route::get('create-materi/{id}', [AdminSubModuleController::class, 'create'])->name('create-materi.index');

    Route::get('create-task', function () {
        return view('admin.pages.courses.panes.moduls.create-task');
    })->name('create-task.index');

    Route::get('question-bank', function () {
        return view('admin.pages.question-bank.index');
    })->name('question-bank.index');

    Route::get('profile', function(){
        return view('admin.pages.profile.index');
    })->name('profile.index');

    Route::get('profile-update', function(){
        return view('admin.pages.profile.panes.tab-update-profile');
    })->name('profile-update.php');
});
