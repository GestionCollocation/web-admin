<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SreachController;
use App\Http\Controllers\PosteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
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


Route::get('/annonces', function () {
    return view('annonces');
});

Route::get('/apropos', function () {
    return view('apropos');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/connecter', function () {
    return view('connecter');
});


Route::get('/CreerPoste', function () {
    return view('CreerPoste');
});
Route::get('/create', function () {
    return view('create');
});
Route::get('/test', function () {
    return view('test');
});

Route::get('/users', function () {
    return view('admin.users');
});
Route::get('/bienImmobilier', function () {
    return view('admin.bienImmobilier');
});
Route::get('/admin/annonce', function () {
    return view('admin.annonce');
});

Route::get('/admin/profile', function () {
    return view('admin.profile');
});
Auth::routes();



// profile 
// Route::get('/profile', function () {
//     return view('profile');
// });

Route::get('/editprofile', function () {
    return view('editprofile');
});
// ----------------------------------------------------------------------

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/annonces','App\Http\Controllers\PosteController@index')->name('post')->middleware("auth");;
Route::get('/posts/trashed','App\Http\Controllers\PosteController@postesTrashed')->name('post.trashed');

Route::get('/CreerPoste','App\Http\Controllers\PosteController@create')->name('post.create')->middleware("auth");
Route::post('/posts/store/{bienImm}','App\Http\Controllers\PosteController@store')->name('post.store');
Route::get('/posts/show/{id_1},{id_2}','App\Http\Controllers\PosteController@show')->name('post.show');
Route::get('/posts/edit/{id}','App\Http\Controllers\PosteController@edit')->name('post.edit');
Route::post('/posts/update/{id}','App\Http\Controllers\PosteController@update')->name('post.update');
Route::get('/posts/destroy/{id}','App\Http\Controllers\PosteController@destroy')->name('post.destroy');// soft  delete
Route::get('/posts/hdelete/{id}','App\Http\Controllers\PosteController@hdelete')->name('post.hdelete');
Route::get('/posts/restore/{id}','App\Http\Controllers\PosteController@restore')->name('post.restore');


// -----------------bien immobilier-------------------
Route::get('create','App\Http\Controllers\BienImmobilierController@create')->middleware("auth");
Route::post('store','App\Http\Controllers\BienImmobilierController@store');
Route::resource('acceuil','App\Http\Controllers\BienImmobilierController');
Route::get('acceuil/cherche','App\Http\Controllers\BienImmobilierController@cherche')->name('acceuil.cherche');



//Route::get('annonces-details/{id}','App\Http\Controllers\BienImmobilierController@show');
Route::post('acceuil/fetch','App\Http\Controllers\BienImmobilierController@fetch')->name('acceuil.fetch');
// Route::get('acceuil','App\Http\Controllers\BienImmobilierController@nouveau')->name('acceuil.nouveau');

Route::get('/','App\Http\Controllers\BienImmobilierController@index')->name('acceuil');



//------------------------------Partage-----------------------------------
Route::get('/posts/partage/{id}','App\Http\Controllers\PosteController@partage')->name('post.partage');


// --------------------------Profile------------------------
// Route::get('/enregistrer','ProfileController@enregistrer');
// Route::get('/listprofil','ProfileController@listprofil');
// Route::post('/edit/{id}','ProfileController@edit')->name('edit');
// Route::put('/update/{id}','ProfileController@update')->name('update');
Route::put('/update/{id}','App\Http\Controllers\UserController@update')->name('update');
Route::put('/update_photo/{id}','App\Http\Controllers\UserController@update_photo')->name('update_photo');
Route::get('profile','App\Http\Controllers\BienImmobilierController@index_1')->name('profile.index_1');
Route::get('profile/show1/{id}','App\Http\Controllers\BienImmobilierController@show_1')->name('profile.show_1');

Route::get('profile/index2','App\Http\Controllers\PosteController@index_2')->name('profile.index_2');
Route::get('profile/edit2/{id}','App\Http\Controllers\PosteController@edit')->name('profile.edit2');
Route::post('profile/update2/{id}','App\Http\Controllers\PostController@update')->name('profile.update2');

Route::get('profile/edit/{id}','App\Http\Controllers\BienImmobilierController@edit')->name('profile.edit');
Route::post('profile/update/{id}','App\Http\Controllers\BienImmobilierController@update')->name('profile.update');
Route::get('profile/delete/{id}','App\Http\Controllers\BienImmobilierController@destroy')->name('profile.destroy');


Route::get('profile/utilisateur/{id}','App\Http\Controllers\ProfileController@show')->name('profile.user');

// Messages routes
Route::get('/inbox', [App\Http\Controllers\HomeController::class, 'inbox'])->name('inbox')->middleware("auth");;

Route::get('/contacts','App\Http\Controllers\ContactsController@get');

Route::get('/conversation/{id}',[App\Http\Controllers\ContactsController::class,'getMessages']);

Route::post('/conversation/send','App\Http\Controllers\ContactsController@send');
Route::get('/conversation/send/{id}','App\Http\Controllers\ContactsController@sendDefault')->name('send.default');

Route::post('/conversation/delete','App\Http\Controllers\ContactsController@deleteMessage');

Route::get('/sreach',[App\Http\Controllers\BienImmobilierController::class,'rechercher'])->name('acceuil.recherche');

Route::get('/sreach/Post','App\Http\Controllers\PosteController@search')->name('web.search');


// les routes de commentaires 
 

Route::post('/comments/{post}','App\Http\Controllers\CommentsController@store')->name('comments.store');
Route::post('/comments/reponse/{comments}','App\Http\Controllers\CommentsController@repondre')->name('comments.reponse');
 Route::get('/post/destroy/{id}','App\Http\Controllers\CommentsController@destroy')->name('comments.destroy');
 
Route::post('/comments/updateps/{id}','App\Http\Controllers\CommentsController@update')->name('comments.update');

// ADMIN 
Route::get('/dashboard', [App\Http\Controllers\PosteController::class, 'indexAdmin'])->name('admin.home')->middleware('is_admin');
//supprimer utilisateur par admin
Route::get('/user/destroy/{id}','App\Http\Controllers\UserController@destroy')->name('user.destroy');
// supprimer Bien Immobiler par admin
Route::get('/bi/destroy/{id}','App\Http\Controllers\BienImmobilierController@destroy')->name('bi.destroy');