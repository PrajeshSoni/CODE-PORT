<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrolleruserController;
use App\Http\Controllers\feedbackcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\Registerusercontrolletr;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SubcourseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
});


route::get("/user/profile", [UserController::class, 'profile'])->name('users.profile');

route::get("/tag/create", [TagController::class, 'create'])->name('tag.create');
route::post("/tag/store", [TagController::class, 'store'])->name('tag.store');
route::get("/tag/index", [TagController::class, 'index'])->name('tag.index');
route::get("/tag/delete/{id?}", [TagController::class, 'delete'])->name('tag.delete');
route::get("/tag/edit/{id?}", [TagController::class, 'edit'])->name('tag.edit');
route::post("/tag/update", [TagController::class, 'update'])->name('tag.update');
Route::get('tag/change', [TagController::class, 'change'])->name('changeLang');
route::get("/tag/show", [TagController::class, 'showtag'])->name('tag.show');



route::get("/question/create", [QuestionController::class, 'create'])->name('question.create');
route::post("/question/store", [QuestionController::class, 'store'])->name('question.store');
route::get("/question/index", [QuestionController::class, 'index'])->name('question.index');
route::get("/question/delete/{id?}", [QuestionController::class, 'delete'])->name('question.delete');
route::get("/question/edit/{id?}", [QuestionController::class, 'edit'])->name('question.edit');
route::post("/question/update", [QuestionController::class, 'update'])->name('question.update');
Route::get('tag/change', [QuestionController::class, 'change'])->name('changeLang');
route::get("/question/show/{id?}", [QuestionController::class, 'show'])->name('question.show');



route::get("/reply/index/{id?}", [ReplyController::class, 'index'])->name('reply.index');
route::post("/reply/store", [ReplyController::class, 'store'])->name('reply.store');
route::get("/reply/show", [ReplyController::class, 'show'])->name('reply.show');
route::get("/reply/delete/{id?}", [ReplyController::class, 'delete'])->name('reply.delete');

// currses  routes
route::get("/courses/index", [CourseController::class, 'index'])->name('courses.index');
route::get("/courses/create", [CourseController::class, 'create'])->name('courses.create');
route::post("/courses/store", [CourseController::class, 'store'])->name('courses.store');
route::get("/courses/edit/{id?}", [CourseController::class, 'edit'])->name('courses.edit');
route::post("/courses/update", [CourseController::class, 'update'])->name('courses.update');
route::post("/courses/delete/{id?}", [CourseController::class, 'destroy'])->name('courses.delete');
route::get("/courses/show/{id?}", [CourseController::class, 'show'])->name('courses.show');

//subcourses routes
route::get("/subcourses/index", [SubcourseController::class, 'index'])->name('subcourses.index');
route::get("/subcourses/create/{id?}", [SubcourseController::class, 'create'])->name('subcourses.create');
route::post("/subcourses/store", [SubcourseController::class, 'store'])->name('subcourses.store');
route::get("/subcourses/edit/{id?}", [SubcourseController::class, 'edit'])->name('subcourses.edit');
route::put("/subcourse/update{id?}", [SubcourseController::class, 'update'])->name('subcourse.update');
route::delete("/subcourse/delete/{id?}", [SubcourseController::class, 'destroy'])->name('subcourse.delete');
route::get("/subcourses/show/{id?}", [SubcourseController::class, 'show'])->name('subcourses.show');


// enrollers routes
route::get("/enrollers/index", [EnrolleruserController::class, 'index'])->name('enrollers.index');
route::get("/enrollers/create", [EnrolleruserController::class, 'create'])->name('enrollers.create');
Route::post('/enrolleruser/store/{id?}', [EnrolleruserController::class, 'store'])->name('enrollers.store');
route::get("/enrollers/edit/{id?}", [EnrolleruserController::class, 'edit'])->name('enrollers.edit');
route::post("/enrollers/update", [EnrolleruserController::class, 'update'])->name('enrollers.update');
route::post("/enrollers/delete/{id?}", [EnrolleruserController::class, 'destroy'])->name('enrollers.delete');
route::get("/enrollers/show/{id?}", [EnrolleruserController::class, 'show'])->name('enrollers.show');
route::post("/enroller/store", [EnrolleruserController::class, 'store'])->name('enroller.store');


route::get("/code/about", [HomeController::class, 'About'])->name('code.about');
route::get("/code/contact", [HomeController::class, 'contact'])->name('code.contact');


Route::get('lang/home', [LangController::class, 'index']);
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');

route::get("/feedback/index", [feedbackcontroller::class, 'index'])->name('feedback.index');
route::get("/feedback/create", [feedbackcontroller::class, 'create'])->name('feedback.create');
route::post("/feedback/store", [feedbackcontroller::class, 'store'])->name('feedback.store');
route::get("/feedback/edit/{id?}", [feedbackcontroller::class, 'edit'])->name('feedback.edit');
route::put("/feedback/update/{id?}", [feedbackcontroller::class, 'update'])->name('feedback.update');
route::get("/feedback/delete/{id?}", [feedbackcontroller::class, 'delete'])->name('feedback.delete');
route::get("/feedback/show/{id?}", [feedbackcontroller::class, 'show'])->name('feedback.show');
Route::delete("/feedback/destroy/{id?}", [feedbackcontroller::class, 'destroy'])->name('feedback.destroy');

Route::get('send-mail', function () {

    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];

    Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\MyTestMail($details));

    dd("Email is Sent.");
});
