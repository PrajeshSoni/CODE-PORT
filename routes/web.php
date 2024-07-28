<?php

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




route::get("/code/about", [HomeController::class, 'About'])->name('code.about');
route::get("/code/contact", [HomeController::class, 'contact'])->name('code.contact');


Route::get('lang/home', [LangController::class, 'index']);
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');


route::get("/feedback/create", [feedbackcontroller::class, 'create'])->name('feedback.create');
route::post("/feedback/store", [feedbackcontroller::class, 'store'])->name('feedback.store');




Route::get('send-mail', function () {

    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];

    Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\MyTestMail($details));

    dd("Email is Sent.");
});
