<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about');
// });




Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/login-check', [LoginController::class, 'loginCheck'])->name('loginCheck');
// Route::get('/registration', [LoginController::class, 'registration'])->name('registration');
// Route::post('/do-registration', [LoginController::class, 'doRegistration'])->name('doRegistration');


Route::group(['middleware'=>['auth','CheckAdmin'],'prefix'=>'admin'],function(){


        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

        Route::get('/dashboard',[DashboardController::class,'viewDashboard'])->name('dashboard');
        Route::get('/dashboard/adminadd',[DashboardController::class,'adminadd'])->name('admin.add');

        
        Route::get('/about',[AboutUsController::class,'index'])->name('about');

        //User
        Route::get('/user',[DashboardController::class,'user'])->name('user.list');
        //vat_cal
        Route::get('/vat_cal;',[DashboardController::class,'vat_cal'])->name('vat_cal.list');
});
