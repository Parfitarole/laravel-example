<?php

use Illuminate\Support\Facades\Route;

// Displays the home page
Route::get('/', 'HomeController@index');

// Displays the log-in page
Route::get('/log-in', 'AccountController@logIn');

// Displays the sign-up page
Route::get('/sign-up', 'AccountController@signUp');

// Post form data from the sign-up page to the signUpAction method in the AccountController
Route::post('/sign-up-action', 'AccountController@signUpAction');

// Post form data from the log-in page to the logInAction method in the AccountController
Route::post('/log-in-action', 'AccountController@logInAction');

// Group of all routes you must be logged in to visit
Route::group(['middleware' => ['AuthCheck']], function() {
    // Displays the users account settings Page
    Route::get('/account', 'AccountController@index');

    // Displays the users feed Page
    Route::get('/feed', 'UserController@feed');

    // Follows User
    Route::get('/follow/{UserFollowingId}', 'UserController@followAction');

    // Unfollow User
    Route::get('/unfollow/{UserFollowingId}', 'UserController@UnFollowAction');

    // Calls the logOut Method in the AccountController
    Route::get('/log-out-action', 'AccountController@logOutAction');

    // Displays the users public profile
    Route::get('/user/{AccountId}', 'UserController@index');

    // Displays the individual user's post page
    Route::get('user/{AccountId}/post/{postId}', 'UserController@post');

    // Post form data from the post pop up to the postAction method in the UserController
    Route::post('/post', 'UserController@postAction');

    // Calls the deletePostAction method in the UserController to delete a post
    Route::post('/delete-post', 'UserController@deletePostAction');

    // Post form data from the post page to the commentAction method in the UserController
    Route::post('/comment', 'UserController@commentAction');

    // Calls the deleteCommentAction method in the UserController to delete a post
    Route::post('/delete-comment', 'UserController@deleteCommentAction');

    // Displays the users messages page
    Route::get('/messages', 'UserController@messages');

    // Post form data from the message page to the sendMessageAction method in the UserController
    Route::post('/send-message', 'UserController@sendMessageAction');

    // Calls the deleteMessageAction method in the UserController to delete a post
    Route::post('/delete-message', 'UserController@deleteMessageAction');
});
