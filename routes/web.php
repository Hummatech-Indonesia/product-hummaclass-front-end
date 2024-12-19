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

Route::get('/', fn() => view('user.pages.welcome'));

Route::get('submission-tasks/download/{id}', [SubmissionTask::class, 'downloadSubmissionTask'])->name('submission-task.download');

Route::get('invoice/{ref}', [UserCheckoutController::class, 'downloadInvoice'])->name('invoice');

Route::get('login', [App\Http\Controllers\AuthController::class, 'login'])->name('login')->middleware('login_middleware');
Route::get('register', [App\Http\Controllers\AuthController::class, 'register'])->name('register')->middleware('login_middleware');

Route::get('landing-dashboard', [LandingController::class, 'getDashboard']);
Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
Route::get('save-token', [App\Http\Controllers\AuthController::class, 'saveToken'])->name('save-token');
Route::get('save-token-google/{data}', [App\Http\Controllers\AuthController::class, 'saveTokenGoogle'])->name('save-token-google');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('{type}/pre-download-certificate/{course?}', fn($type, $course) => view('user.pages.courses.widgets.certificate.pre-download-certificate', compact('type', 'course')))->name('pre-download-certificate.index')->middleware('auth_custom');

// ================== USER ==================

Route::prefix('courses')->name('courses.')->group(function () {
    Route::resource('courses', CourseController::class)->only(['index', 'show']);
    Route::middleware(['auth_custom'])->group(function () {
        Route::get('courses-lesson/{id}', [CourseController::class, 'courseLesson'])->name('course-lesson.index')->middleware('coursePayment');
        Route::get('quizz/{id}', [CourseController::class, 'showQuiz'])->name('quizz.index');
    });

    Route::get('task-detail', fn() => view('user.pages.courses.widgets.details.detail-task'))->name('detail-task.index');

    // Route::get('print-certificate/{id}', function ($id) {
    // => view('user.pages.courses.widgets.certificate.print-certificate', compact('id'));
    // })->name('print-certificate.index');


    Route::get('download-certificate', fn() => view('user.pages.courses.widgets.certificate.download-certificate'))->name('download-certificate.index');
});

Route::middleware(['auth_custom'])->group(function () {

    Route::middleware(['guest'])->group(function () {
        Route::prefix('dashboard')->name('dashboard.')->group(function () {
            Route::prefix('users')->name('users.')->group(function () {
                Route::get('', [StudentDashboardController::class, 'index'])->name('dashboard');
                Route::get('profile', [ProfileController::class, 'index'])->name('profile');
                Route::get('courses', [CourseController::class, 'student'])->name('courses');

                Route::get('events', fn() => view('user.pages.dashboard.student.events'))->name('events');

                Route::get('reviews', fn() => view('user.pages.dashboard.student.reviews.index'))->name('reviews');

                Route::get('history-transaction/{id}', fn($id) => view('user.pages.dashboard.student.history-transaction.index'))->name('history-transaction');

                Route::get('settings', fn() => view('user.pages.dashboard.student.settings'))->name('settings.index');
            });
        });


        Route::get('print-certificate/{id?}/{type}', fn($id, $type) => view('user.pages.courses.widgets.certificate.print-certificate', compact('type', 'id')))->name('print-certificate.index');

        // quiz
        Route::get('quiz-question/{id}', fn($id) => view('user.pages.question-quiz.index', compact('id')))->name('quetion-quiz.index');
        Route::get('finish-quiz/{id?}', fn($id) => view('user.pages.question-quiz.test-finish', compact('id')))->name('finish-quiz');

        // test
        Route::get('pre-test/{id}', fn($id) => view('user.pages.pre-test.index', compact('id')))->name('pre.test.index');
        Route::get('post-test/{id}', fn($id) => view('user.pages.post-test.index', compact('id')))->name('post.test.index');
        Route::get('finished-test/{id?}', fn($id) => view('user.pages.pre-post-test.test-finish', compact('id')))->name('pre.test.finish');
        Route::get('test-result', fn() => view('user.pages.question-quiz.test-results'))->name('test-result.index');

        // discussion
        Route::get('discussion-forum/{id?}', fn($id) => view('user.pages.courses.discussion-forum.index', compact('id')))->name('discussion-forum.index');
        Route::get('discussion-forum/modul/{id?}', fn($id) => view('user.pages.courses.discussion-forum.discussion-forum', compact('id')))->name('discussion-forum.modul');

        // task
        Route::get('task-execution', fn() => view('user.pages.courses.task-execution.index'))->name('task-execution.index');
        Route::get('upload-task/{id?}', fn($id) => view('user.pages.courses.task-execution.upload-task', compact('id')))->name('upload-task.index');
    });
    Route::get('detail/test', fn() => view('admin.pages.courses.test.index'));
});

Route::prefix('password')->name('password.')->group(function () {
    Route::get('email', [ResetPasswordController::class, 'email'])->name('send-email');
    Route::get('reset', [ResetPasswordController::class, 'reset'])->name('reset-password');
});

// Landing
Route::get('contacts', fn() => view('user.pages.contacts.index'))->name('contacts.index');

Route::get('404', fn() => view('user.errors.404'))->name('404.index');

Route::get('list-mentors', fn() => view('user.pages.list-mentors.index'))->name('list-mentors.index');

Route::get('learning-path', fn() => view('user.pages.learning-path.index'))->name('learning-path.index');

Route::resources([
    'news' => BlogController::class,
]);
Route::resource('events', EventController::class)->except('show');
Route::get('events/{id?}', [EventController::class, 'show'])->name('events.show');
Route::get('faqs', fn() => view('user.pages.faqs.index'))->name('faqs.index');

Route::get('point-exchange', fn() => view('user.pages.points-exchange.index'))->name('point-exchange.index');




// ================== ADMIN ==================

Route::middleware(['auth_custom', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('home', fn() => view('admin.index'))->name('home');

    Route::get('history-transactions', fn() => view('admin.pages.history-transactions.index'))->name('history.transaction');

    Route::get('categories', fn() => view('admin.pages.categories.index'))->name('categories.index');

    Route::resources([
        'courses' => AdminCourseController::class,
        'users' => AdminUserController::class,
        'modules' => AdminModuleController::class,
        'news' => AdminBlogController::class,
        'events' => AdminEventController::class,
        'point-exchange' => AdminPointExchangeController::class,
    ]);

    Route::get('create-rewards', fn() => view('admin.pages.point-exchange.create-rewards'))->name('create-rewards.index');
    Route::get('edit-rewards/{id}', fn($id) => view('admin.pages.point-exchange.edit-rewards', compact('id')))->name('edit-rewards.index');
    Route::get('confirmation-point-exchange', fn() => view('admin.pages.point-exchange.confirmation-point-exchange'))->name('confirmation-point-exchange.index');

    // events
    Route::get('events-participant-detail/{id}', fn(string $id) => view('admin.pages.events.widgets.detail-participant', compact('id')))->name('event-participant');
    Route::get('courses/detail-test/{id}', [AdminCourseController::class, 'DetailTest'])->name('courses.test.index');

    // courses
    Route::get('courses/setting-test/{id}', fn($id) => view('admin.pages.courses.panes.test.setting-test', compact('id')))->name('course.setting-test.index');
    Route::get('courses/detail-collect-task/{id}', fn($id) => view('admin.pages.courses.panes.moduls.detail-tab-collect', compact('id')))->name('courses.detail-tab-collect.index');
    Route::get('courses/detail', fn() => view('admin.pages.courses.detail'));
    Route::get('courses/detail/edit', fn() => view('admin.pages.courses.edit'));
    Route::get('courses/detail-2', fn() => view('admin.pages.courses.panes.moduls.detail-2'));

    // material
    Route::get('sub-modules/{id}', [AdminSubModuleController::class, 'show'])->name('sub-modules.show');
    Route::get('create-materi/{id}', [AdminSubModuleController::class, 'create'])->name('create-materi.index');
    Route::get('edit-materi/{id}/edit', [AdminSubModuleController::class, 'edit'])->name('edit-materi.index');

    Route::get('detail-users', fn() => view('admin.pages.users.detail-users'))->name('detail-users.index');

    // quiz
    Route::get('create-quiz/{id}', fn(string $id) => view('admin.pages.courses.panes.moduls.create-quiz', compact('id')))->name('create-quiz.index');
    Route::get('quiz-setting/{id}', fn($id) => view('admin.pages.courses.panes.moduls.setting-quiz', compact('id')))->name('quetion-quiz.setting');

    // modules
    Route::get('module-questions', fn() => view('admin.pages.courses.modules.module-questions.index'));
    Route::get('module-questions-create', fn() => view('admin.pages.courses.modules.module-questions.create'));
    Route::get('create-modul/{id}', [AdminModuleController::class, 'create'])->name('create.moduls.index');


    // task
    Route::get('create-task/{id}', fn(string $id) => view('admin.pages.courses.panes.moduls.create-task', compact('id')))->name('create-task.index');
    Route::get('edit-task/{id}', fn(string $id) => view('admin.pages.courses.panes.moduls.edit-task', compact('id')))->name('edit-task.index');
    Route::get('detail-task/{id}', fn($id) => view('admin.pages.courses.panes.moduls.detail-task', compact('id')))->name('detail-task.blade.php');
    Route::get('fill-task-manual', fn() => view('admin.pages.courses.create-fill-manual'))->name('fill-manual.index');


    // question
    Route::get('question-bank', fn() => view('admin.pages.question-bank.index'))->name('question-bank.index');
    Route::get('list-question-bank', fn() => view('admin.pages.question-bank.list-question-bank'))->name('list-question-bank.index');
    Route::get('detail-question-detail', fn() => view('admin.pages.question-bank.detail-question-bank'))->name('detail-question.index');


    // profile
    Route::get('profile', fn() => view('admin.pages.profile.index'))->name('profile.index');
    Route::get('profile-update', fn() => view('admin.pages.profile.panes.tab-update-profile'))->name('profile-update.php');

    Route::prefix('configuration')->name('configuration.')->group(function () {
        Route::get('footer', fn() => view('admin.pages.configuration.footer'))->name('footer.index');
        Route::get('superior-feature', fn() => view('admin.pages.configuration.superior-feature'))->name('superior-feature.index');
        Route::get('header', fn() => view('admin.pages.configuration.header'))->name('header.index');
        Route::get('faq', fn() => view('admin.pages.configuration.faq'))->name('faq.index');
    });
});
Route::get('point-exchange-detail/{id}', fn($id) => view('user.pages.points-exchange.detail-point-exchange', compact('id')))->name('detail-point-exchange.index');

// Load additional routes
require_once('features/user/checkout.php');
