<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Guest\BlogController;
use App\Http\Controllers\Guest\EventController;
use App\Http\Controllers\Admin\ModuleController;
use App\Http\Controllers\UserCheckoutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminEventController;
use App\Http\Controllers\Admin\AdminCourseController;
use App\Http\Controllers\Admin\AdminModuleController;
use App\Http\Controllers\Admin\AdminPointExchangeController;
use App\Http\Controllers\Admin\AdminSubModuleController;
use App\Http\Controllers\Password\ResetPasswordController;
use App\Http\Controllers\Student\Profile\ProfileController;
use App\Http\Controllers\dashboard\StudentDashboardController;
use App\Http\Controllers\SubmissionTask;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.pages.welcome');
});

Route::get('submission-tasks/download/{id}', [SubmissionTask::class, 'downloadSubmissionTask'])->name('submission-task.download');

Route::get('invoice/{ref}', [UserCheckoutController::class, 'downloadInvoice'])->name('invoice');

Route::get('login', [App\Http\Controllers\AuthController::class, 'login'])->name('login')->middleware('login_middleware');
Route::get('register', [App\Http\Controllers\AuthController::class, 'register'])->name('register')->middleware('login_middleware');

Route::get('landing-dashboard', [LandingController::class, 'getDashboard']);
Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
Route::get('save-token', [App\Http\Controllers\AuthController::class, 'saveToken'])->name('save-token');
Route::get('save-token-google', [App\Http\Controllers\AuthController::class, 'saveTokenGoogle'])->name('save-token-google');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ================== USER ==================

Route::prefix('courses')->name('courses.')->group(function () {
    Route::resource('courses', CourseController::class)->only(['index', 'show']);

    Route::middleware(['auth_custom'])->group(function () {
        Route::get('courses-lesson/{id}', [CourseController::class, 'courseLesson'])->name('course-lesson.index')->middleware('coursePayment');
        Route::get('quizz/{id}', [CourseController::class, 'showQuiz'])->name('quizz.index');
    });

    Route::get('task-detail', function () {
        return view('user.pages.courses.widgets.details.detail-task');
    })->name('detail-task.index');

    Route::get('print-certificate/{course}', function ($course) {
        return view('user.pages.courses.widgets.certificate.print-certificate', compact('course'));
    })->name('print-certificate.index');

    Route::get('pre-download-certificate/{course?}', function ($course) {
        return view('user.pages.courses.widgets.certificate.pre-download-certificate', compact('course'));
    })->name('pre-download-certificate.index');

    Route::get('download-certificate', function () {
        return view('user.pages.courses.widgets.certificate.download-certificate');
    })->name('download-certificate.index');
});


Route::middleware(['auth_custom', 'guest'])->prefix('dashboard')->name('dashboard.')->group(function () {
    Route::prefix('users')->name('users.')->group(function () {
        Route::get('', [StudentDashboardController::class, 'index'])->name('dashboard');
        Route::get('profile', [ProfileController::class, 'index'])->name('profile');
        Route::get('courses', [CourseController::class, 'student'])->name('courses');

        Route::get('events', function () {
            return view('user.pages.dashboard.student.events');
        })->name('events');

        Route::get('reviews', function () {
            return view('user.pages.dashboard.student.reviews.index');
        })->name('reviews');

        Route::get('history-transaction/{id}', function ($id) {
            return view('user.pages.dashboard.student.history-transaction.index');
        })->name('history-transaction');

        Route::get('settings', function () {
            return view('user.pages.dashboard.student.settings');
        })->name('settings.index');
    });
});

Route::prefix('password')->name('password.')->group(function () {
    Route::get('email', [ResetPasswordController::class, 'email'])->name('send-email');
    Route::get('reset', [ResetPasswordController::class, 'reset'])->name('reset-password');
});

Route::prefix('news')->name('news.')->group(function () {
    Route::get('news', function () {
        return view('user.pages.news.index');
    })->name('index');

    Route::get('detail-news/{id}', function () {
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

Route::get('learning-path', function () {
    return view('user.pages.learning-path.index');
})->name('learning-path.index');

Route::get('quiz-question/{id}', function ($id) {
    return view('user.pages.question-quiz.index', compact('id'));
})->name('quetion-quiz.index');

Route::get('pre-test/{id}', function ($id) {
    return view('user.pages.pre-test.index', compact('id'));
})->name('pre.test.index');

Route::get('post-test/{id}', function ($id) {
    return view('user.pages.post-test.index', compact('id'));
})->name('post.test.index');

Route::get('finished-test/{id?}', function ($id) {
    return view('user.pages.pre-post-test.test-finish', compact('id'));
})->name('pre.test.finish');

Route::get('quiz-setting/{id}', function ($id) {
    return view('admin.pages.courses.panes.moduls.setting-quiz', compact('id'));
})->name('quetion-quiz.setting')->middleware('auth_custom');

Route::get('finish-quiz/{id?}', function ($id) {
    return view('user.pages.question-quiz.test-finish', compact('id'));
})->name('finish-quiz');

Route::get('test-result', function () {
    return view('user.pages.question-quiz.test-results');
})->name('test-result.index');

Route::resources([
    'blogs' => BlogController::class,
]);
Route::resource('events', EventController::class)->except('show');
Route::get('events/{id?}', [EventController::class, 'show'])->name('events.show');
Route::get('faqs', function () {
    return view('user.pages.faqs.index');
})->name('faqs.index');

Route::get('discussion-forum/{id?}', function ($id) {
    return view('user.pages.courses.discussion-forum.index', compact('id'));
})->name('discussion-forum.index');

Route::get('discussion-forum/modul', function () {
    return view('user.pages.courses.discussion-forum.discussion-forum');
})->name('discussion-forum.modul');

Route::get('task-execution', function () {
    return view('user.pages.courses.task-execution.index');
})->name('task-execution.index');

Route::get('upload-task/{id}', function ($id) {
    return view('user.pages.courses.task-execution.upload-task', compact('id'));
})->name('upload-task.index');

Route::get('point-exchange', function () {
    return view('user.pages.points-exchange.index');
})->name('point-exchange.index');


// ================== ADMIN ==================

Route::middleware(['auth_custom', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('home', function () {
        return view('admin.index');
    })->name('home');

    Route::get('history-transactions', function () {
        return view('admin.pages.history-transactions.index');
    })->name('history.transaction');

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
        'courses' => AdminCourseController::class,
        'users' => AdminUserController::class,
        'modules' => AdminModuleController::class,
        'news' => AdminBlogController::class,
        'events' => AdminEventController::class,
        'point-exchange' => AdminPointExchangeController::class,
    ]);

    Route::get('courses/detail-test/{id}', [AdminCourseController::class, 'DetailTest'])->name('courses.test.index');

    Route::get('courses/setting-test/{id}', function($id){
        return view('admin.pages.courses.panes.test.setting-test');
    })->name('course.setting-test.index');

    Route::get('courses/detail-collect-task/{id}', function ($id) {
        return view('admin.pages.courses.panes.moduls.detail-tab-collect', compact('id'));
    })->name('courses.detail-tab-collect.index');

    Route::get('create-quiz/{id}', function (string $id) {
        return view('admin.pages.courses.panes.moduls.create-quiz', compact('id'));
    })->name('create-quiz.index');

    Route::get('sub-modules/{id}', [AdminSubModuleController::class, 'show'])->name('sub-modules.show');
    Route::get('create-materi/{id}', [AdminSubModuleController::class, 'create'])->name('create-materi.index');
    Route::get('edit-materi/{id}/edit', [AdminSubModuleController::class, 'edit'])->name('edit-materi.index');

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

    Route::get('create-modul/{id}', [AdminModuleController::class, 'create'])->name('create.moduls.index');

    Route::get('create-task/{id}', function (string $id) {
        return view('admin.pages.courses.panes.moduls.create-task', compact('id'));
    })->name('create-task.index');

    Route::get('edit-task/{id}', function (string $id) {
        return view('admin.pages.courses.panes.moduls.edit-task', compact('id'));
    })->name('edit-task.index');

    Route::get('detail-task/{id}', function ($id) {
        return view('admin.pages.courses.panes.moduls.detail-task', compact('id'));
    })->name('detail-task.blade.php');

    Route::get('fill-task-manual', function () {
        return view('admin.pages.courses.create-fill-manual');
    })->name('fill-manual.index');

    Route::get('question-bank', function () {
        return view('admin.pages.question-bank.index');
    })->name('question-bank.index');

    Route::get('list-question-bank', function () {
        return view('admin.pages.question-bank.list-question-bank');
    })->name('list-question-bank.index');

    Route::get('detail-question-detail', function () {
        return view('admin.pages.question-bank.detail-question-bank');
    })->name('detail-question.index');

    Route::get('profile', function () {
        return view('admin.pages.profile.index');
    })->name('profile.index');

    Route::get('profile-update', function () {
        return view('admin.pages.profile.panes.tab-update-profile');
    })->name('profile-update.php');


    Route::prefix('configuration')->name('configuration.')->group(function () {
        Route::get('footer', function () {
            return view('admin.pages.configuration.footer');
        })->name('footer.index');

        Route::get('faq', function () {
            return view('admin.pages.configuration.faq');
        })->name('faq.index');
    });

});

Route::get('detail/test', function () {
    return view('admin.pages.courses.test.index');
});

Route::get('courses/detail/test', function () {
    return view('admin.pages.point-exchange.detail');
});

// Load additional routes
require_once('features/user/checkout.php');