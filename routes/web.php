<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Artisan;
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
    return view('emails.index');
});

///emails
// Route::get('/send-email', [MailController::class, 'sendEmail']);
///
Route::post('/post-email-data', [MailController::class, 'sendEmail']);


// clear cache
// THIS WILL SOLVE ERROR: There is no existing directory at /storage/logs and its not buildable: Permission denied
Route::get('/reset', function (){
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
});
