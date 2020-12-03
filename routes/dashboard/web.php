<?php

use App\Award;
use App\Setting;

Route::group(
    [        
        'prefix' => '',
        // 'prefix' => LaravelLocalization::setLocale(),
        // 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    
    function(){
        app()->setLocale('ar');
        Route::prefix('AdminPanel')->name('dashboard.')->group(function(){
           
            Auth::routes(['register' => false]);
            
            //Password reset link request routes...
            // Route::get('password/email', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.email');
            // Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');



            Route::middleware(['auth'])->group(function(){
                //Route::get('/','DashboardController@index')->name('index');
                Route::get('/', function () {
                    return view('dashboard.index');
                });
                Route::get('basic_settings','SettingController@index')->name('basic_settings');
                Route::put('/setting/edit','SettingController@update_edit')->name('setting.update_edit');
                Route::get('/delete_image/{setting}','SettingController@delete_setting_image')->name('setting.delete_image');

                Route::get('view_settings','SettingController@view_settings')->name('view_settings');



                Route::resource('services', 'ServiceController');
                Route::resource('members' , 'TeamController');
                Route::resource('videos'  , 'VideoController');
                Route::resource('images'  , 'ImageController');
                Route::resource('courses'  , 'CourseController');


            });
        });//end of dashboard routes
});

