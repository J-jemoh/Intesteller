<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;
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
Route::get('/dashboard', function () {
    return view('dashboard');

})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
