<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrotinetteController;
use App\Http\Controllers\CategorieTController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\AccessoireController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VeloController;
use App\Http\Controllers\BaladeController;
use App\Http\Controllers\ParticipantController;
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
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
// Route::resource('trotinettes', TrotinetteController::class);
// Route::resource('categoriets', CategorieTController::class);
Route::group(['middleware' => 'auth'], function () {
	Route::resource('trotinettes', TrotinetteController::class);
	Route::resource('categoriets', CategorieTController::class);
	Route::resource('locations', LocationController::class);
	Route::resource('accessoires', AccessoireController::class);
	Route::resource('category', CategoryController::class);
	Route::resource('velo', VeloController::class);


	


Route::get('/balade/all', [BaladeController::class, 'AllBalade'])->name('all.balade');

Route::post('/balade/add', [BaladeController::class, 'AddBalade'])->name('store.balade');
Route::get('/balade/create', function () {
    return view('Balade.BackOffice.AddBalade');
});
Route::delete('/balade/delete/{id}',[BaladeController::class,'destroy']);

Route::get('/balade/edit/{id}',[BaladeController::class,'edit']);
Route::put('/balade/update/{id}',[BaladeController::class,'update']);



Route::get('/participant/all', [ParticipantController::class, 'AllParticipant'])->name('all.participant');

Route::post('/participant/add', [ParticipantController::class, 'AddParticipant'])->name('store.participant');
Route::get('/participant/create', [ParticipantController::class, 'createParticipant']);



Route::delete('/participant/delete/{id}',[ParticipantController::class,'destroy']);

Route::get('/participant/edit/{id}',[ParticipantController::class,'edit']);
Route::put('/participant/update/{id}',[ParticipantController::class,'update']);



	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
	// Route::resource('trotinettes', 'App\Http\Controllers\TrotinetteController', ['except' => ['show']]);
	// Route::resource('categoriets', 'App\Http\Controllers\CategorieTController', ['except' => ['show']]);
});