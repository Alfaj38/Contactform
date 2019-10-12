<?php
/**
 * Created by IntelliJ IDEA.
 * User: Mamun
 * Date: 10/12/2019
 * Time: 9:44 PM
 */
Route::group(['namespace' => 'Alfaj\Contactform\Http\Controllers', 'middleware' => ['web']], function(){
    Route::get('contact', 'ContactFormController@index');
    Route::post('contact', 'ContactFormController@sendMail')->name('contact');
});
