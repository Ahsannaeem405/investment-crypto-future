<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
use App\Http\Controllers\userController;




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
    return view('auth.login');
});
Route::get('/migrate', function () {
    $run = Artisan::call('migrate:fresh --seed');
    return 'Completedd';
});
Route::prefix('/admins')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/index', [admin::class ,'index']);
   

                        
    // Route::view('/user', 'admin.user');
    //Route::view('/currency', 'admin.currency');
    Route::get('/withdraw', [admin::class ,'withdraw'])->name('admin.withdraw');
    // Route::view('/deposit', 'admin.deposit');
    Route::view('/settings', 'admin.password-settings')->name('admin.settings');
    Route::view('/profile', 'admin.profile-settings')->name('admin.profile-settings');
    Route::get('/referral', [admin::class ,'referral_profit'])->name('admin.referral-profit');
   
    Route::get('/user', [admin::class, 'user']);
    Route::post('/add_profit', [admin::class, 'add_referral_profit'])->name('admins.profit');
    Route::post('/update_profit', [admin::class, 'update_referral_profit'])->name('admins.update_profit');
    Route::get('/currency', [admin::class, 'currency']);
    Route::post('/update_addess', [admin::class, 'update_addess']);
    Route::post('/update_user', [admin::class, 'update_user']);
    Route::any('/delete/{id}', [admin::class, 'delete']);
    Route::any('/deposit', [admin::class, 'deposit'])->name('admin.deposit');
    Route::post('/update_information', [admin::class, 'update_information'])->name('admins.update_information');
    Route::post('/change_password', [admin::class, 'change_password'])->name('admins.change_password');
    // Route::any('/change-password', [admin::class, 'change_password']);
    
    Route::any('/approve/{amount}/{c_id}/{user_id}/{id}', [admin::class, 'approve']);
    Route::any('/reject/{id}', [admin::class, 'reject']);

    Route::any('/witd_approve/{amount}/{c_id}/{user_id}/{id}', [admin::class, 'witd_approve']);
    Route::any('/witd_reject/{id}', [admin::class, 'witd_reject']);

    Route::any('/deposit_report', [admin::class, 'deposit_report']);
    Route::get('/withdraw_report', [admin::class ,'withdraw_report']);

    
    


    

    

});
Route::prefix('/user')->middleware(['auth', 'user'])->group(function () {
  
    Route::get('/index', [userController::class ,'index']);
    Route::view('/profit', 'user.profit');
    Route::any('/deposit', [userController::class, 'deposit']);
    Route::any('/withdraw', [userController::class, 'withdraw'])->name('user.withdraw');
    Route::any('/withdraw_saved', [userController::class, 'withdraw_saved']);
    
    Route::any('/see-profits/{id}', [userController::class, 'see_profit'])->name('user.see_profit');
    Route::view('/referrals','user.referrals')->name('user.referrals');
    //Route::view('/withdraw','user.withdraw')->name('user.withdraw');
    // Route::view('/referrals','user.referrals')->name('user.referrals');
    Route::get('/referrals', [userController::class, 'referrals'])->name('user.referrals');
    Route::any('/add_deposit', [userController::class, 'add_deposit']);
    Route::view('/settings', 'user.password-settings')->name('user.settings');
    Route::get('/profile', [userController::class, 'profile'])->name('user.profile-settings');
    Route::post('/update_information', [admin::class, 'update_information'])->name('user.update_information');
    Route::post('/change_password', [admin::class, 'change_password'])->name('user.change_password');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
