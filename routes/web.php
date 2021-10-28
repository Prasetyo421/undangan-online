<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuestBookController;
use App\Http\Controllers\InvitationsController;
use App\Http\Controllers\TestimoniController;
use App\Models\Invitations;
use App\Models\Testimoni;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::post('/invitation/update_is_active', [InvitationsController::class, 'isActive']);
Route::resource('invitation', InvitationsController::class);
Route::resource('guest-book', GuestBookController::class);
Route::resource('testimoni', TestimoniController::class);

Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('dashboard/invitation', [DashboardController::class, 'invitation'])->middleware('auth');
Route::get('dashboard/show/{invitation}', [DashboardController::class, 'show'])->middleware('auth');

Route::get('/test', function () {
    // return view('test.index');
    // return view('dashboard.layouts.main');
    return view('design.design2');
});

require __DIR__ . '/auth.php';
