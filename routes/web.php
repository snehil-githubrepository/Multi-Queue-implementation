<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    //dispatching and now Redis is handling everything for us and sending Mails which is now going to be super fast
    //This is even faster than database. 
    //Now, We can even cache queries in Redis that will increase performance and response time mainly 
    dispatch(new \App\Jobs\SendEmailJob());

    return view('welcome');
});


// Basically for production there is supervisor configuration for redis , it will handle all the queue here and it will 
//keep on running jobs in backend and we dont have to run command multiple times
//this actually will make it easier and we don't have to use the command 
// php artisan queue:listen if we configure supervisor correctly. 

//So basically we can manage this listening thing through supervisor on the production server
