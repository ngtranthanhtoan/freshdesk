<?php

use Illuminate\Http\Request ;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('freshdesk/test/package', function() {
    dd(\App\Model\User::find(1)) ;
});
