<?php
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'HomeController@index');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => ['web']], function () {
    Route::Auth();
});


/***************    Membres routes  **********************************/
Route::group(['prefix' => 'membres', 'middleware' => 'web'], function() {

    # Admin Dashboard
    Route::get('dashboard', 'Admin\DashboardController@index');


});


/***************    Admin routes  **********************************/
Route::group(['prefix' => 'admin', 'middleware' => 'web'], function() {

     Route::get('configuration', 'Admin\ConfigurationController@index');
    Route::get('configuration/saving', 'Admin\ConfigurationController@saving');
    Route::post('configuration', 'Admin\ConfigurationController@configStore');

});

Route::group(
    ['prefix' => 'entrust', 'middleware' => 'web'],
    function () {
        Route::get('users', ['uses' => 'Entrust\UsersController@index', 'as' => 'entrust-gui::users.index']);
        Route::get('users/create', ['uses' => 'Entrust\UsersController@create', 'as' => 'entrust-gui::users.create']);
        Route::post('users', ['uses' => 'Entrust\UsersController@store', 'as' => 'entrust-gui::users.store']);
        Route::get('users/{id}/edit', ['uses' => 'Entrust\UsersController@edit', 'as' => 'entrust-gui::users.edit']);
        Route::put('users/{id}', ['uses' => 'Entrust\UsersController@update', 'as' => 'entrust-gui::users.update']);
        Route::delete('users/{id}', ['uses' => 'Entrust\UsersController@destroy', 'as' => 'entrust-gui::users.destroy']);

        Route::get('roles', ['uses' => 'Entrust\RolesController@index', 'as' => 'entrust-gui::roles.index']);
        Route::get('roles/create', ['uses' => 'Entrust\RolesController@create', 'as' => 'entrust-gui::roles.create']);
        Route::post('roles', ['uses' => 'Entrust\RolesController@store', 'as' => 'entrust-gui::roles.store']);
        Route::get('roles/{id}/edit', ['uses' => 'Entrust\RolesController@edit', 'as' => 'entrust-gui::roles.edit']);
        Route::put('roles/{id}', ['uses' => 'Entrust\RolesController@update', 'as' => 'entrust-gui::roles.update']);
        Route::delete('roles/{id}', ['uses' => 'Entrust\RolesController@destroy', 'as' => 'entrust-gui::roles.destroy']);

        Route::get('permissions', ['uses' => 'Entrust\PermissionsController@index', 'as' => 'entrust-gui::permissions.index']);
        Route::get(
            'permissions/create',
            [
                'uses' => 'Entrust\PermissionsController@create',
                'as' => 'entrust-gui::permissions.create'
            ]
        );
        Route::post('permissions', ['uses' => 'Entrust\PermissionsController@store', 'as' => 'entrust-gui::permissions.store']);
        Route::get(
            'permissions/{id}/edit',
            [
                'uses' => 'Entrust\PermissionsController@edit',
                'as' => 'entrust-gui::permissions.edit'
            ]
        );
        Route::put(
            'permissions/{id}',
            [
                'uses' => 'Entrust\PermissionsController@update',
                'as' => 'entrust-gui::permissions.update'
            ]
        );
        Route::delete(
            'permissions/{id}',
            [
                'uses' => 'Entrust\PermissionsController@destroy',
                'as' => 'entrust-gui::permissions.destroy'
            ]
        );

    }
);