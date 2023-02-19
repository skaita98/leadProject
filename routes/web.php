<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LeadController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // routes/web.php

Route::get('/leads/create', [LeadController::class, 'create'])->name('leads.create');
Route::post('leads', [LeadController::class, 'store'])->name('leads.store');
Route::get('lead', [LeadController::class, 'index'])->name('lead.index');
Route::put('/update/{id}', [LeadController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [LeadController::class, 'delete'])->name('delete');




// Route::get('/', 'LeadController@index');
 
// Route::get('/', 'LeadController@getLead');
 
// Route::post('/save', 'LeadController@save');
 
// Route::patch('/update/{id}', ['as' => 'member.update', 'uses' => 'LeadController@update']);
 
// Route::delete('/delete/{id}', ['as' => 'member.delete', 'uses' => 'LeadController@delete']);


});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

require __DIR__.'/auth.php';
