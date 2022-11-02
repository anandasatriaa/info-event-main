<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontsite\DetailEventController;
use App\Http\Controllers\Frontsite\LandingController;
use App\Http\Controllers\Frontsite\AddEventController;
use App\Http\Controllers\Frontsite\SuccessAddController;
use App\Http\Controllers\Frontsite\EventController;
use App\Http\Controllers\Frontsite\ReqEventController;

// backsite 
use App\Http\Controllers\Backsite\DashboardController;
use App\Http\Controllers\Backsite\PermissionController;
use App\Http\Controllers\Backsite\RoleController;
use App\Http\Controllers\Backsite\UserController;
use App\Http\Controllers\Backsite\TypeUserController;
use App\Http\Controllers\Backsite\ReportEventController;
use App\Http\Controllers\Backsite\RequestEventController;
use App\Http\Controllers\Backsite\CategoryController;

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

Route::resource('/',LandingController::class); 
Route::resource('Event',EventController::class); 




Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {

    // Detail event   
    Route::get('Detail-Event/Event/{id}', [DetailEventController::class, 'detailevent'])->name('detail-event.event');
    Route::resource('Detail-Event', DetailEventController::class);
   
    //add event
    Route::get('Event/added-success',[ReqEventController::class, 'store'])->name('Add-Event.store');
    Route::resource('Add-Event', ReqEventController::class);
    // sucess
    Route::resource('added-success', SuccessAddController::class);
    // Route::get('added-success/{id}', SuccessAddController::class, 'show')->name('added-success.show');
});

Route::group(['prefix' => 'backsite', 'as' => 'backsite.', 'middleware' => ['auth:sanctum', 'verified']], function () {

    // dashboard
    Route::resource('dashboard', DashboardController::class);

    // permission
    Route::resource('permission', PermissionController::class);

    // role
    Route::resource('role', RoleController::class);

    // user
    Route::resource('user', UserController::class);

    // type user
    Route::resource('type_user', TypeUserController::class);

    // event backsite
    Route::resource('event', ReportEventController::class);

    // request event backsite
    Route::resource('request-event', RequestEventController::class);
    // category backsite
    Route::resource('category', CategoryController::class);

});
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
