<?php

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

Route::get('/', 'PagesController@home')->name('home');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/contact', 'PagesController@contact')->name('contact');
Route::post('/contact', function () {

    $data = request()->all();

    echo"Email= " . $data['email'] . '<br>';
    echo"Subject= " . $data['subject'] . '<br>';
    echo"Message= " . $data['body'];

})->name('contact');
Route::get('/signup', function () {
    return view('pages.signup');
})->name('signup');
Route::post('/signup', function () {

    $data = request()->all();

    echo"Name=" . $data['name'] . '<br>';
    echo"Email= " . $data['email'] . '<br>';
    echo"Password= " . $data['password'] . '<br>';
    echo"Confirm The Password= " . $data['password'];


})->name('signup');

Route::get('/signin', function () {
    return view('pages.signin');
})->name('signin');

Route::get('/logout', function () {
    return view('pages.logout');
})->name('logout');

Route::get('/viewmessages', function () {
    return view('pages.viewmessages');
})->name('viewmessages');
Route::get('/bootstrapcard', function () {
    return view('pages.bootstrapcard');
});
Route::get('/thankyou', function () {
    return view('pages.thankyou');
});


