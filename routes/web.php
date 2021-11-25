<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserAccountController;
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

// Route::get('/',function(){
// 	return view('Frontend.index');
// });
 //Frontend pages route
 Route::get('/',[PagesController::class,'index'])->name('homepage');
 Route::get('/about-us',[PagesController::class,'aboutus'])->name('about-us');
 Route::get('/our-services',[PagesController::class,'services'])->name('services');
 Route::get('/contact-us',[PagesController::class,'contactus'])->name('contactus');
 Route::post('/contact-us',[ContactController::class,'savecontact'])->name('savecontact');

 //logged in users route
 Route::name('user.')->prefix('user')->middleware(['auth'])->group(function () {
   Route::get('/my-account',[UserAccountController::class,'myaccount'])->name('account');
});
 //dashboard
Route::get('/dashboard', function () {
    return view('dashboard');

})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
