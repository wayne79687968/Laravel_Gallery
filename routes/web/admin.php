<?php

Route::get('admin', function(){
    return view('admin.index');
})->name('admin.index');
