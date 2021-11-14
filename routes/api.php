<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\movie;
use GuzzleHttp\Client;
use App\Collection;
use App\Request as req;
use App\Setting;
use App\User as user;
use App\Tv as tv;
use App\Pincode as pin;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('v1/program', 'ApiController@program');

Route::post('v1/admin/verify', 'ApiController@verify');

Route::post('v1/loginexpire', 'ApiController@login_expire');

Route::post('v1/admin/pincode', 'ApiController@admin_pin');

Route::post('v1/register/pincode/', 'ApiController@register_pin');

Route::get('v1/admin/end/{token}', 'ApiController@admin_end');

Route::get('v1/user/{token}/{user}/{password}/{admin?}', 'ApiController@user');

Route::get('v1/tvall/{token}', 'ApiController@tvall');

Route::get('v1/movieall/{token}', 'ApiController@movieall');

Route::get('v1/movie/{token}', 'ApiController@movie');

Route::get('v1/anime/{token}', 'ApiController@anime');

Route::get('v1/av/{token}', 'ApiController@av');

Route::get('v1/series/{token}', 'ApiController@series');

Route::get('v1/request/{title}', 'ApiController@request');

Route::get('v1/moviecontact/{movieid}/', 'ApiController@moviecontact');

Route::get('v1/collector/{id}/{movie}/{type}', 'ApiController@collector');

Route::get('v1/loadmovie/{id?}/{ep?}/{player?}', 'ApiController@loadmovie');

Route::get('v1/useronline', 'ApiController@useronline');

Route::get('v1/get/token/wmsauth/{ip}', 'ApiController@get_token');


// Route::get('v1/monthly{pingcode}', 'ApiController@monthly');

Route::get('v1/checkregister/{username}', function(Request $request){
    $check = user::where('email',$request->username)->first();
    if($check){
        return response()->json(['status' => '1']);
    }
    else
    {
        return response()->json(['status' => '0']);
    }
});



/**
 *  Cron Join Update Movie
 * 
 */
Route::get('v1/update/{token_hash}', 'ApiController@api');
Route::get('v1/update-category/{token_hash}', 'ApiController@api_category');
Route::get('v1/movie/{token}', 'ApiController@movie_api');
Route::get('v1/movie-category/{token}', 'ApiController@movie_category_api');

