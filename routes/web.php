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


    // These are blog routes
    Route::get('/blogs/create', 'App\Http\Controllers\BlogPagesController@create')->name('admin.blogs.create');
    Route::put('/blogs/create', 'App\Http\Controllers\BlogPagesController@store')->name('admin.blogs.store');
    Route::get('/blogs/list', 'App\Http\Controllers\BlogPagesController@list')->name('admin.blogs.list');
    Route::get('/blogs/edit/{id}', 'App\Http\Controllers\BlogPagesController@edit')->name('admin.blogs.edit');
    Route::post('/blogs/update/{id}', 'App\Http\Controllers\BlogPagesController@update')->name('admin.blogs.update');
    Route::delete('/blogs/destroy/{id}', 'App\Http\Controllers\BlogPagesController@destroy')->name('admin.blogs.destroy');

    // Restore Sliders Lists //
    Route::get('/blogs/restoreList', 'App\Http\Controllers\BlogPagesController@restoreList')->name('admin.blogs.restoreList');
      // Restore Sliders Lists //
      Route::get('/blogs/destroyList/{id}', 'App\Http\Controllers\BlogPagesController@restoreData')->name('admin.blogs.restoreData');

  

    
    

});





Route::get('login-with-github', 'App\Http\Controllers\SocialPagesController@loginWithGithub')->name('loginWithGithub');
Route::get('github-callback-url', 'App\Http\Controllers\SocialPagesController@GithubCallBack')->name('GithubCallBack');


Route::get('login-with-google', 'App\Http\Controllers\SocialPagesController@loginWithGoogle')->name('loginWithGoogle');
Route::get('callback-url', 'App\Http\Controllers\SocialPagesController@GoogleCallBack')->name('GoogleCallBack');


Route::get('login-with-linkedin', 'App\Http\Controllers\LinkedinPagesController@linkedinRedirect')->name('loginWithLinkedin');
Route::get('callback-url-linkedin', 'App\Http\Controllers\LinkedinPagesController@linkedinCallback')->name('LinkedinCallBack');


Route::get('login-with-facebook', 'App\Http\Controllers\SocialPagesController@loginWithFacebook')->name('loginWithFacebook');
// Auth::routes();

Route::get('/homeAdmin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Authentication Routes...
Route::get('/loginAdmin', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('loginadmin');
Route::post('/loginAdmin', 'App\Http\Controllers\Auth\LoginController@login')->name('loginadmin');
Route::post('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('/registerAdmin', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('registeradmin');
Route::post('registerAdmin', 'App\Http\Controllers\Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'App\Http\Controllers\Auth\ResetPasswordController@reset');


// This is allpost Route Url Start
Route::get('/blog', 'App\Http\Controllers\PagesController@index')->name('blog');
// This is allpost Route Url End



// This is singlepost Route Url Start
Route::get('/allpost/singlePost/{id}/{category}', 'App\Http\Controllers\PagesController@allpost')->name('allpost');
// This is singlepost Route Url End





// This is startups Route Url Start
Route::get('/startups', 'App\Http\Controllers\PagesController@startups')->name('startups');
// This is startups Route Url End

// This is health Route Url Start
Route::get('/health', 'App\Http\Controllers\PagesController@health')->name('health');
// This is health Route Url End


// This is law Route Url Start
Route::get('/law', 'App\Http\Controllers\PagesController@law')->name('law');
// This is law Route Url End

// This is lifestyle Route Url Start
Route::get('/lifestyle', 'App\Http\Controllers\PagesController@lifestyle')->name('lifestyle');
// This is lifestyle Route Url End

// This is review Route Url Start
Route::get('/review', 'App\Http\Controllers\PagesController@review')->name('review');
// This is review Route Url End


// This is howto Route Url Start
Route::get('/howto', 'App\Http\Controllers\PagesController@howto')->name('howto');
// This is howto Route Url End

// This is brandstories Route Url Start
Route::get('/brandstories', 'App\Http\Controllers\PagesController@brandstories')->name('brandstories');
// This is brandstories Route Url End


// This is food Route Url Start
Route::get('/food', 'App\Http\Controllers\PagesController@food')->name('food');
// This is food Route Url End

// This is travel Route Url Start
Route::get('/travel', 'App\Http\Controllers\PagesController@travel')->name('travel');
// This is travel Route Url End


// This is career Route Url Start
Route::get('/career', 'App\Http\Controllers\PagesController@career')->name('career');
// This is career Route Url End

// This is education Route Url Start
Route::get('/education', 'App\Http\Controllers\PagesController@education')->name('education');
// This is education Route Url End
