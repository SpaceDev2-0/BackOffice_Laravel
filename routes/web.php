<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrotinetteController;
use App\Http\Controllers\CategorieTController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\AccessoireController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryAController;
use App\Http\Controllers\PostController;

use App\Http\Controllers\VeloController;
use App\Http\Controllers\BaladeController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\ReservationEvenementController;
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

	
	// Routes evenements et reservations evenement
	
Route::get('/evenement/all', [EvenementController::class, 'AllEvenement'])->name('all.evenement');
Route::post('/evenement/add', [EvenementController::class, 'AddEvenement'])->name('store.evenement');
Route::get('/evenement/create', function () {
    return view('Evenement.BackOffice.AddEvenement');
});
Route::delete('/evenement/delete/{id}',[EvenementController::class,'destroy']);
Route::get('/evenement/edit/{id}',[EvenementController::class,'edit']);
Route::put('/evenement/update/{id}',[EvenementController::class,'update']);
Route::get('/reservationevenement/all', [ReservationEvenementController::class, 'AllReservationEvenement'])->name('all.reservationevenement');
Route::post('/reservationevenement/add', [ReservationEvenementController::class, 'AddReservationEvenement'])->name('store.reservationevenement');
Route::get('/reservationevenement/create', [ReservationEvenementController::class, 'createReservationEvent']);
Route::delete('/reservationevenement/delete/{id}',[ReservationEvenementController::class,'destroy']);
Route::get('/reservationevenement/edit/{id}',[ReservationEvenementController::class,'edit']);
Route::put('/reservationevenement/update/{id}',[ReservationEvenementController::class,'update']);

Route::get('/Post/all', [PostController::class, 'AllPost'])->name('AllPost');
Route::Post('/Post/add', [PostController::class, 'AddPost'])->name('posts.store');
Route::get('/Post/create', [PostController::class, 'CreatePost'])->name('posts.create');

Route::delete('/Post/delete/{id}',[PostController::class,'destroy']);

Route::get('/post/edit/{id}',[PostController::class,'edit']);
Route::put('/Post/update/{id}',[PostController::class,'update']);
Route::get('/categorya/all', [CategoryAController::class, 'Allcategoryarticle'])->name('Allcategoryarticle');
Route::Post('/categorya/add', [CategoryAController::class, 'Addcategorya'])->name('categoryas.store');
Route::get('/categorya/create', [CategoryAController::class, 'Createcategorya'])->name('categoryas.create');
Route::delete('/categorya/delete/{id}',[CategoryAController::class,'destroy']);

Route::get('/categorya/edit/{id}',[CategoryAController::class,'edit']);
Route::put('/categorya/update/{id}',[CategoryAController::class,'update']);

});