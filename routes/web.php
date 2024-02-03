<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    //dispatch the Mail sending Job so that we can directly send Mails with help of database
    //basically start the email sending Job
    dispatch(new \App\Jobs\SendEmailJob());

    return view('welcome');
});
