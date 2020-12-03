<?php

Route::get('change_language/{locale}',function($locale){
    
    app()->setLocale($locale);
    session()->put('locale',$locale);
    // dd(LaravelLocalization::getCurrentLocaleDirection());
    return redirect()->back();

})->name('change_language');


Route::group(
    ['middleware' => [ 'change_lang' ]],function(){
    
    
    Route::name('frontend.')->group(function(){
        
        Route::get('/','HomeController@index')->name('index');
        Route::get('/services','HomeController@services')->name('services.index');
        Route::get('/team','HomeController@team')->name('team.index');
        Route::get('/gallery','HomeController@gallery')->name('gallery.index');
        Route::get('/courses','HomeController@courses')->name('courses.index');
        Route::get('/courses/{course}','HomeController@show_course')->name('courses.show');

        Route::get('/about_us','HomeController@about_us')->name('about_us');

        Route::post('/send_contact_message','HomeController@send_contact_message')->name('send_contact_message');

        Route::get('/contact','HomeController@contact')->name('contact');
        Route::get('/appointments','HomeController@appointments')->name('appointments');
        Route::post('/save_appointment','HomeController@save_appointment')->name('save_appointment');


    });//end of frontend routes

});


