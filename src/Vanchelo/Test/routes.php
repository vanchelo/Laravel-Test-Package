<?php

Route::group(['namespace' => 'Vanchelo\Test\Controllers'], function ($route)
{
    $route->get('page', 'PageController@index');
});
