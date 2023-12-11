<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\invoiceController;
use App\Models\testimoni;
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
    $testimonials = testimoni::all();
    return view('/before_login/index', compact('testimonials'));
});


use App\Http\Controllers\Controller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchGameController;
use App\Http\Controllers\Topup_Controller;
use App\Http\Controllers\Auth_Controller;
use App\Http\Controllers\User_Controller;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Http\Controllers\ItemController;

Route::get('/api/items', [ItemController::class, 'index']);
Route::get('/about', [Controller::class, 'aboutctrl'])->name('about');
Route::get('/login', [Controller::class, 'loginctrl'])->name('login');
Route::get('/index', [Controller::class, 'indexctrl'])->name('index');
Route::get('/aboutlogged', [Controller::class, 'aboutlogctrl'])->name('aboutlogged');

Route::get('/widget', [Controller::class, 'widgetctrl'])->name('widget');
Route::get('/testimonialupdate', [Controller::class, 'testi_up_ctrl'])->name('testimonialupdate');
Route::get('/testimonialadd', [Controller::class, 'testi_add_ctrl'])->name('testimonialadd');
Route::get('/signupadmin', [Controller::class, 'signadmctrl'])->name('signupadmin');
Route::get('/dashboard', [Controller::class, 'dashboardctrl'])->name('dashboard');
Route::get('/dashboardadmin', [Controller::class, 'dashminctrl'])->name('dashboardadmin');
Route::get('/datatablemember', [Controller::class, 'datamembctrl'])->name('datatablemember');
Route::get('/datatablepaymentall', [Controller::class, 'paymentallctrl'])->name('datatablepaymentall');
Route::get('/datatablepaymenmobile', [Controller::class, 'paymentmblctrl'])->name('datatablepaymentmobile');
Route::get('/datatablepaymentpc', [Controller::class, 'paymentpcctrl'])->name('datatablepaymentpc');
Route::get('/datatabletestimonial', [Controller::class, 'testictrl'])->name('datatabletestimonial');


//register
Route::get('/signup', [RegisterController::class, 'loginctrl'])->name('signup');
Route::post('/signup', [RegisterController::class, 'loginform'])->name('user_login');

//login
Route::get('/login', [LoginController::class, 'loginctrl'])->name('login');
Route::post('/login', [LoginController::class, 'loginform'])->name('login_form');

// Setting update
Route::get('/setting', [Controller::class, 'settingctrl'])->name('setting');
Route::post('/setting', [UserController::class, 'update'])->name('user.update');


//logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//top up gi
Route::get('/topupGI', [Topup_Controller::class, 'topupGIctrl'])->name('topupGI');
Route::post('/topuppp', [Topup_Controller::class, 'topupformGI'])->name('topup_form');

//topup hsr
Route::get('/topupHSR', [Topup_Controller::class, 'topupHSRctrl'])->name('topupHSR');
Route::post('/topuppp', [Topup_Controller::class, 'topupformHSR'])->name('topup_form');

//top up ml
Route::get('/topupML', [Topup_Controller::class, 'topupMLctrl'])->name('topupML');
Route::post('/topuppp', [Topup_Controller::class, 'topupformML'])->name('topup_form');

//top up tof
Route::get('/topupTOF', [Topup_Controller::class, 'topupTOFctrl'])->name('topupTOF');
Route::post('/topuppp', [Topup_Controller::class, 'topupformTOF'])->name('topup_form');

//contact
Route::get('/contactlogged', [ContactController::class, 'contactlogctrl'])->name('contactlogged');
Route::post('/contactlogged', [ContactController::class, 'contact_loggedform'])->name('contactlogged_form');

//contact logged
Route::get('/contact', [ContactController::class, 'contactctrl'])->name('contact');
Route::post('/contact', [ContactController::class, 'contactform'])->name('contact_form');

//invoice
Route::get('/invoice', [invoiceController::class, 'invoicectrl'])->name('invoice');



//Serching Game
// Route::get('/search/game', [SearchGameController::class, 'search'])->name('search.game');
// Route::get('/games/{id_typegame}', [SearchGameController::class, 'show'])->name('game.show');
