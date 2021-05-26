<?php

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

// This is main Home page Route Url Start
Route::get('/', 'App\Http\Controllers\PagesController@index')->name('homepage');

Route::get('/home', function () {
   dd(\Illuminate\Support\Facades\Auth::user());
})->middleware(['auth','verified']);

Route::prefix('admin')->group(function(){
    Route::get('/dashboard', 'App\Http\Controllers\HomeController@dashboard')->name('admin.dashboard');

    
    // These are slider routes
    Route::get('/sliders/create', 'App\Http\Controllers\SliderPagesController@create')->name('admin.sliders.create');
    Route::put('/sliders/create', 'App\Http\Controllers\SliderPagesController@store')->name('admin.sliders.store');
    Route::get('/sliders/list', 'App\Http\Controllers\SliderPagesController@list')->name('admin.sliders.list');
    Route::get('/sliders/edit/{id}', 'App\Http\Controllers\SliderPagesController@edit')->name('admin.sliders.edit');
    Route::post('/sliders/update/{id}', 'App\Http\Controllers\SliderPagesController@update')->name('admin.sliders.update');
    Route::delete('/sliders/destroy/{id}', 'App\Http\Controllers\SliderPagesController@destroy')->name('admin.sliders.destroy');
    // Restore Sliders Lists //
    Route::get('/sliders/restoreList', 'App\Http\Controllers\SliderPagesController@restoreList')->name('admin.sliders.restoreList');
      // Restore Sliders Lists //
      Route::get('/sliders/destroyList/{id}', 'App\Http\Controllers\SliderPagesController@restoreData')->name('admin.sliders.restoreData');

    // // These are Terms & Conditions routes
    // Route::get('/terms/create', 'App\Http\Controllers\TermsConditionsPagesController@create')->name('admin.terms.create');
    // Route::put('/terms/create', 'App\Http\Controllers\TermsConditionsPagesController@store')->name('admin.terms.store');
    // Route::get('/terms/list', 'App\Http\Controllers\TermsConditionsPagesController@list')->name('admin.terms.list');
    // Route::get('/terms/edit/{id}', 'App\Http\Controllers\TermsConditionsPagesController@edit')->name('admin.terms.edit');
    // Route::post('/terms/update/{id}', 'App\Http\Controllers\TermsConditionsPagesController@update')->name('admin.terms.update');
    // Route::delete('/terms/destroy/{id}', 'App\Http\Controllers\TermsConditionsPagesController@destroy')->name('admin.terms.destroy');

    //  // These are FAQ  routes
    //  Route::get('/faqs/create', 'App\Http\Controllers\FAQPagesController@create')->name('admin.faqs.create');
    //  Route::put('/faqs/create', 'App\Http\Controllers\FAQPagesController@store')->name('admin.faqs.store');
    //  Route::get('/faqs/list', 'App\Http\Controllers\FAQPagesController@list')->name('admin.faqs.list');
    //  Route::get('/faqs/edit/{id}', 'App\Http\Controllers\FAQPagesController@edit')->name('admin.faqs.edit');
    //  Route::post('/faqs/update/{id}', 'App\Http\Controllers\FAQPagesController@update')->name('admin.faqs.update');
    //  Route::delete('/faqs/destroy/{id}', 'App\Http\Controllers\FAQPagesController@destroy')->name('admin.faqs.destroy');



    //   // These are About Us routes
    //   Route::get('/abouts/create', 'App\Http\Controllers\AboutusPagesController@create')->name('admin.abouts.create');
    //   Route::put('/abouts/create', 'App\Http\Controllers\AboutusPagesController@store')->name('admin.abouts.store');
    //   Route::get('/abouts/list', 'App\Http\Controllers\AboutusPagesController@list')->name('admin.abouts.list');
    //   Route::get('/abouts/edit/{id}', 'App\Http\Controllers\AboutusPagesController@edit')->name('admin.abouts.edit');
    //   Route::post('/abouts/update/{id}', 'App\Http\Controllers\AboutusPagesController@update')->name('admin.abouts.update');
    //   Route::delete('/abouts/destroy/{id}', 'App\Http\Controllers\AboutusPagesController@destroy')->name('admin.abouts.destroy');


  

    
    

});





Route::get('login-with-github', 'App\Http\Controllers\SocialPagesController@loginWithGithub')->name('loginWithGithub');
Route::get('github-callback-url', 'App\Http\Controllers\SocialPagesController@GithubCallBack')->name('GithubCallBack');


Route::get('login-with-google', 'App\Http\Controllers\SocialPagesController@loginWithGoogle')->name('loginWithGoogle');
Route::get('callback-url', 'App\Http\Controllers\SocialPagesController@GoogleCallBack')->name('GoogleCallBack');


Route::get('login-with-linkedin', 'App\Http\Controllers\LinkedinPagesController@linkedinRedirect')->name('loginWithLinkedin');
Route::get('callback-url-linkedin', 'App\Http\Controllers\LinkedinPagesController@linkedinCallback')->name('LinkedinCallBack');


Route::get('login-with-facebook', 'App\Http\Controllers\SocialPagesController@loginWithFacebook')->name('loginWithFacebook');