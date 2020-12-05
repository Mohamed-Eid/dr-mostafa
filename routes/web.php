<?php

Route::get('change_language/{locale}',function($locale){
    
    app()->setLocale($locale);
    session()->put('locale',$locale);
    // dd(LaravelLocalization::getCurrentLocaleDirection());
    return redirect()->back();

})->name('change_language');


Route::get('make_permissions',function(){

    // //users
    // \App\Permission::create(['name'=>'create_users','display_name'=>'إضافه مستخدمين','description'=>'']);
    // \App\Permission::create(['name'=>'read_users','display_name'=>'قراءة مستخدمين','description'=>'']);
    // \App\Permission::create(['name'=>'update_users','display_name'=>'تعديل مستخدمين','description'=>'']);
    // \App\Permission::create(['name'=>'delete_users','display_name'=>'حذف مستخدمين','description'=>'']);

    // //settings
    // \App\Permission::create(['name'=>'update_settings','display_name'=>'تعديل إعدادات الموقع','description'=>'']);
    
    // //view settings
    // \App\Permission::create(['name'=>'update_view_settings','display_name'=>'تعديل إعدادات الظهور','description'=>'']);

    // //team

    // \App\Permission::create(['name'=>'create_members','display_name'=>'إضافة عضو فريق عمل','description'=>'']);
    // \App\Permission::create(['name'=>'read_members','display_name'=>'قراءة اعضاء فريق عمل','description'=>'']);
    // \App\Permission::create(['name'=>'update_members','display_name'=>'تعديل عضو فريق عمل','description'=>'']);
    // \App\Permission::create(['name'=>'delete_members','display_name'=>'حذف عضو فريق عمل','description'=>'']);
    
    // //services
    // \App\Permission::create(['name'=>'create_services','display_name'=>'إضافه خدمات','description'=>'']);
    // \App\Permission::create(['name'=>'read_services','display_name'=>'قراءة خدمات','description'=>'']);
    // \App\Permission::create(['name'=>'update_services','display_name'=>'تعديل خدمات','description'=>'']);
    // \App\Permission::create(['name'=>'delete_services','display_name'=>'حذف خدمات','description'=>'']);

    // //videos
    // \App\Permission::create(['name'=>'create_videos','display_name'=>'إضافه فيديوهات','description'=>'']);
    // \App\Permission::create(['name'=>'read_videos','display_name'=>'قراءة فيديوهات','description'=>'']);
    // \App\Permission::create(['name'=>'update_videos','display_name'=>'تعديل فيديوهات','description'=>'']);
    // \App\Permission::create(['name'=>'delete_videos','display_name'=>'حذف فيديوهات','description'=>'']);

    // //images
    // \App\Permission::create(['name'=>'create_images','display_name'=>'إضافه صور','description'=>'']);
    // \App\Permission::create(['name'=>'read_images','display_name'=>'قراءة صور','description'=>'']);
    // \App\Permission::create(['name'=>'update_images','display_name'=>'تعديل صور','description'=>'']);
    // \App\Permission::create(['name'=>'delete_images','display_name'=>'حذف صور','description'=>'']);

    // //courses
    // \App\Permission::create(['name'=>'create_courses','display_name'=>'إضافه كورسات','description'=>'']);
    // \App\Permission::create(['name'=>'read_courses','display_name'=>'قراءة كورسات','description'=>'']);
    // \App\Permission::create(['name'=>'update_courses','display_name'=>'تعديل كورسات','description'=>'']);
    // \App\Permission::create(['name'=>'delete_courses','display_name'=>'حذف كورسات','description'=>'']);

    // //appointments
    // \App\Permission::create(['name'=>'read_appointments','display_name'=>'قراءة حجوزات','description'=>'']);
    // \App\Permission::create(['name'=>'delete_appointments','display_name'=>'حذف حجوزات','description'=>'']);
    
    // //contact us messages
    // \App\Permission::create(['name'=>'read_contact','display_name'=>'قراءة رسائل بريديه','description'=>'']);
    // \App\Permission::create(['name'=>'delete_contact','display_name'=>'حذف رسائل بريديه','description'=>'']);

    //roles
    // \App\Permission::create(['name'=>'create_roles','display_name'=>'إضافه صلاحيات','description'=>'']);
    // \App\Permission::create(['name'=>'read_roles','display_name'=>'قراءة صلاحيات','description'=>'']);
    // \App\Permission::create(['name'=>'update_roles','display_name'=>'تعديل صلاحيات','description'=>'']);
    // \App\Permission::create(['name'=>'delete_roles','display_name'=>'حذف صلاحيات','description'=>'']);

    dd('done');
});

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


