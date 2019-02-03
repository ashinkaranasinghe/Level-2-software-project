<?php


Route::get('/login', function () {
    return view('loginform');
});

Route::get('/executive_control', function () {
    return view('executivepage');
});

Route::get('/create_admin', function () {
    return view('addadmin');
});

Route::get('/remove_admin', function () {
    return view('removeadmin');
});

Route::get('/admin_control', function () {
    return view('adminpage');
});

Route::get('/create_user', function () {
    return view('adduser');
});

Route::get('/remove_user', function () {
    return view('removeuser');
});

Route::get('/change_admin_pass', function () {
    return view('change_admin');
});

Route::get('/create_emp_step1', function () {
    return view('regempbasic');
});

Route::get('/create_emp_step2', function () {
    return view('regempbasic2');
});

Route::get('/create_emp_step3', function () {
    return view('regempfinance');
});

Route::get('/create_emp_step4', function () {
    return view('regempofficial');
});

Route::get('/remove_emp', function () {
    return view('removeuser');
});

Route::get('/chande_emp_pass', function () {
    return view('changeemp');
});

Route::get('/user_page', function () {
    return view('userpage');
});

Route::get('create_admin', function () {
    return view('addadmin');
});

Route::get('remove_admin', function () {
    return view('removeadmin');
});

Route::get('add_users', function () {
    return view('adduser');
});

Route::get('remove_users', function () {
    return view('removeuser');
});

Route::get('change_admins', function () {
    return view('change_admin');
});

Route::get('add_emp', function () {
    return view('regempbasic');
});

Route::get('remove_emp', function () {
    return view('removemp');
});

Route::get('change_emp', function () {
    return view('changeemp');
});

Route::get('base2', function () {
    return view('regempbasic2');
});

Route::get('office', function () {
    return view('regempofficial');
});

Route::get('finance', function () {
    return view('regempfinance');
});

Route::get('logs', function () {
    return view('userpage');
});


