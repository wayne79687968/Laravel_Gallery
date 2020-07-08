<?php
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'AdminController@index')->name('admin.index');

    Route::get('gallery', 'PhotoController@index')->name('admin.gallery');
    //show photo upload page
    Route::get('gallery/upload','PhotoController@store')->name('admin.gallery.create');
    //upload photo
    Route::post('gallery/upload','PhotoController@upload')->name('admin.gallery.upload');
    //Fetch
    Route::get('gallery/fetch', 'PhotoController@fetch')->name('admin.gallery.fetch');
    //Delete
    Route::get('gallery/delete', 'PhotoController@delete')->name('admin.gallery.delete');
});

