<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomMailExampleController;

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



// Route::get('/login', function () {
//     return view('auth\login');
// })->name('login');

// Route::get('/register', function () {
//     return view('auth\register');
// })->name('register');

Route::get('/',[Homecontroller::class,'index']);
Route::middleware([
    'auth:sanctum',
    // config('jetstream.auth_session'),
    'verified',
])-> get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');



Route::get('/home' ,[Homecontroller::class,'redirect'])->middleware('auth','verified');
Route::get('/add_doctor_view',[Admincontroller::class,'addview']);
Route::post('/upload_doctor',[Admincontroller::class,'upload']);
Route::get('/showappointment',[Admincontroller::class,'showappointment']);
Route::get('/aboutus',[Homecontroller::class,('aboutus')]);
Route::get('/aservices',[Homecontroller::class,('aservices')]);
Route::get('/doctors',[Homecontroller::class,('doctors')]);
Route::get('/contact',[Homecontroller::class,('contacts')]);
Route::get('/detail',[Homecontroller::class,('detail')]);
Route::get('/details/{id}',[Homecontroller::class,('details')]);
Route::get('/profile/{id}',[Homecontroller::class,('profile')]);
Route::get('/news',[Admincontroller::class,('news')]);
Route::post('/upload_news',[Admincontroller::class,('new')]);
Route::get('/shownews',[Admincontroller::class,'shownews']);
Route::get('/updatenews/{id}', [AdminController::class, 'updatenews']);
Route::post('/editnews/{id}', [AdminController::class, 'editnews']);
Route::get('/deletenews/{id}', [AdminController::class, 'deletenews']);
Route::get('/deletedetail/{id}', [AdminController::class, 'deletedetail']);
Route::get('/updatedetail/{id}', [AdminController::class, 'updatedetail']);
Route::post('/editdetail/{id}', [AdminController::class, 'editdetail']);
Route::post('/contact',[Homecontroller::class,('contact')]);
Route::get('/footer',[Homecontroller::class,('footer')]);
Route::post('/feedback',[Homecontroller::class,('feedback')]);
Route::post('/appointment', [HomeController::class, 'appointment'])->name('appointment');
Route::get('/myappointment', [HomeController::class, 'myappointment']);
Route::get('/cancelappointment/{id}', [HomeController::class, 'cancelappointment']);
Route::get('/latestnews', [HomeController::class, 'latestnews']);
Route::get('/usernews/{id}', [HomeController::class, 'usernews']);
Route::get('/approved/{id}', [AdminController::class, 'approved']);
Route::get('/cancelled/{id}', [AdminController::class, 'cancelled']);
Route::get('/viewemail/{id}', [AdminController::class, 'viewemail']);
Route::post('/sendemail/{id}', [AdminController::class, 'sendemail']);
Route::get('/showdoctor', [AdminController::class, 'showdoctor']);
Route::get('/delete/{id}', [AdminController::class, 'delete']);
Route::get('/update/{id}', [AdminController::class, 'updatedoctor']);
Route::post('/editdoctor/{id}', [AdminController::class, 'editdoctor']);
Route::get('/services', [AdminController::class, 'services']);
Route::post('/upload_services', [AdminController::class, 'service']);
Route::get('/detail', [AdminController::class, 'detail']);
Route::post('/upload_details', [AdminController::class, 'upload_details']);
Route::get('/showdetails', [AdminController::class, 'showdetails']);


Route::get('/send/mail',[CustomMailExampleController::class,'sendTestMail']);


