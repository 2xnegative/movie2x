<?php

// Auth::routes();

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 *  Sitemap default SEO
 *  #List XML
 *  - Index Show Category XML (post, category_movie, tag)
 */
    Route::get('/sitemap.xml', 'SitemapController@index')->name('sitemap.index');
    Route::get('/sitemap-post.xml', 'SitemapController@post')->name('sitemap.post');
    Route::get('/sitemap-category.xml', 'SitemapController@category')->name('sitemap.category');
    Route::get('/sitemap-tag-movie.xml', 'SitemapController@tag')->name('sitemap.tag');


// -----------------------------
//      Install ติดตั้ง
// -----------------------------
    Route::get('/install', 'InstallController@index')->name('install');
    Route::post('/install', 'InstallController@store')->name('install.submit');
    Route::get('/how', 'InstallController@index')->name('how');
    Route::get('/support', 'InstallController@index')->name('support');


##################################################


// -----------------------------
//      Movie Resource
// -----------------------------
//  Index หน้าแรก
    Route::get('/', 'MovieController@index')->name('home');
//  แสดงหนังรูปแบบอื่นๆ
    Route::get('top-imdb', 'MovieController@top_imdb')->name('top_imdb');
    Route::get('คนชอบมากที่สุด', 'MovieController@much_like')->name('much_like');
    Route::get('movie-year/{year}', 'MovieController@movie_year')->name('movie_year');
    Route::get('tag/{title}', 'MovieController@movie_tag')->name('movie_tag');
//  Category แสดงหมวดหมู่
    Route::get('category/{title}/', 'MovieController@category')->name('category');
    // Route::get('av/{id}/{title?}', 'MovieController@category_av')->name('category_av');
    // Route::get('series/{id}/{title?}', 'MovieController@category_series')->name('category_series');
//  Movie แสดงหนัง
    // Route::get('movie/{id}', 'MovieController@movie')->name('movie'); //แบบเก่า
    Route::get('/{title}/', 'MovieController@movie')->name('movie'); // แบบ Slug 
    // Route::get('smart/{id}', 'MovieController@movie_smart')->name('movie_smart'); // เลือกตอน smart_tv
    //  Search ค้นหา
    Route::get('/s/search', 'MovieController@search')->name('search');
//  About เกี่ยวกับ
    Route::get('/about/{id}', 'MovieController@about')->name('about');

//  Streaming
    Route::get('/streaming/{url}', 'MovieController@streaming')->name('streaming');
    Route::get('/file/{file}/index.m3u8', 'MovieController@streaming_file_m3u8')->name('streaming.file');

//  จำนวนคลิ๊กโฆษณา
    Route::get('/ads/redirect/{id}', 'MovieController@ads_redirect')->name('ads_redirect');

//  Movie แสดงหนังทั้งหมด
    Route::get('movies', 'MovieController@movies')->name('movies');

//  Collection
    Route::get('collection/{type?}', 'HomeController@collection')->name('collection');
    Route::post('/collect/{id}/{type}', 'HomeController@collectDelete')->name('member.delete.collection');



// -----------------------------
//      TOPUP ระบบเติมเงิน
// -----------------------------
    // Route::get('/member', 'HomeController@index')->name('member');
    // Route::get('/topup', 'HomeController@topup')->name('topup');
    // Route::post('/topup', 'HomeController@topupSubmit')->name('topupSubmit');
    // Route::get('/pincode', 'HomeController@pincode')->name('pincode');
    // Route::post('/pincode', 'HomeController@pincodeSubmit')->name('pincodeSubmit');
    // Route::get('/tmpay', 'TmpayController@tmpay')->name('tmpay');
    Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    // Route::get('/login', 'MovieController@index')->name('home.login');

    Route::group(['middleware'=>'web'], function(){
        Route::auth();
        Route::prefix('dashboard')->group(function() {
        Route::get('/', 'AdminController@index')->name('admin.home');
        Route::get('help', 'AdminController@help')->name('admin.help');

            // -----------------------------
            //      AdminMovie Resource
            // -----------------------------
            Route::resource('movie', 'AdminMovieController', ['names' => [
                'index' => 'admin.movie',
                'create' => 'admin.movie.create',
                'store' => 'admin.movie.store',
                'show' => 'admin.movie.show',
                'edit' => 'admin.movie.edit',
                'update' => 'admin.movie.update',
                'destroy' => 'admin.movie.destroy'
                ]]);

            Route::get('movies', 'AdminMovieController@movies')->name('admin.movie.movies');
            Route::post('searchmovie/{title?}', 'AdminMovieController@movies_search')->name('admin.movie.movies_search');
            Route::get('moviesnew', 'AdminMovieController@movies_new')->name('admin.movie.movies.new');
            Route::get('av', 'AdminMovieController@av')->name('admin.movie.av');
            Route::get('series', 'AdminMovieController@series')->name('admin.movie.series');
            Route::get('seriesonair', 'AdminMovieController@series_onair')->name('admin.movie.series.onair');
            Route::get('seriescomplete', 'AdminMovieController@series_complete')->name('admin.movie.series.complete');
            Route::get('animeonair', 'AdminMovieController@anime_onair')->name('admin.movie.anime.onair');
            Route::get('animecomplete', 'AdminMovieController@anime_complete')->name('admin.movie.anime.complete');

            // -----------------------------
            //      Tv Resource
            // -----------------------------
            Route::resource('tv', 'AdminTvController', ['names' => [
                'index' => 'admin.tv',
                'create' => 'admin.tv.create',
                'store' => 'admin.tv.store',
                'show' => 'admin.tv.show',
                'edit' => 'admin.tv.edit',
                'update' => 'admin.tv.update',
                'destroy' => 'admin.tv.destroy'
                ]]);

            // -----------------------------
            //      Pincode Resource
            // -----------------------------
            Route::resource('pincode', 'AdminPincodeController', ['names' => [
                'index' => 'admin.pincode',
                'create' => 'admin.pincode.create',
                'store' => 'admin.pincode.store',
                'show' => 'admin.pincode.show',
                'edit' => 'admin.pincode.edit',
                'update' => 'admin.pincode.update',
                'destroy' => 'admin.pincode.destroy'
                ]]);

            // -----------------------------
            //      Tv Category Resource
            // -----------------------------
            Route::resource('tvcategory', 'AdminTvCategoryController', ['names' => [
                'index' => 'admin.tvcategory',
                'create' => 'admin.tvcategory.create',
                'store' => 'admin.tvcategory.store',
                'show' => 'admin.tvcategory.show',
                'edit' => 'admin.tvcategory.edit',
                'update' => 'admin.tvcategory.update',
                'destroy' => 'admin.tvcategory.destroy'
                ]]);

            // -----------------------------
            //      Request Resource
            // -----------------------------
            Route::resource('request', 'AdminRequestController', ['names' => [
                'index' => 'admin.request',
                'create' => 'admin.request.create',
                'store' => 'admin.request.store',
                'show' => 'admin.request.show',
                'edit' => 'admin.request.edit',
                'update' => 'admin.request.update',
                'destroy' => 'admin.request.destroy'
                ]]);
            
            // -----------------------------
            //      MovieContact แจ้งหนังเสีย
            // -----------------------------
            Route::resource('moviecontact', 'AdminMoviecontactController', ['names' => [
                'index' => 'admin.moviecontact',
                'create' => 'admin.moviecontact.create',
                'store' => 'admin.moviecontact.store',
                'show' => 'admin.moviecontact.show',
                'edit' => 'admin.moviecontact.edit',
                'update' => 'admin.moviecontact.update',
                'destroy' => 'admin.moviecontact.destroy'
                ]]);



            // -----------------------------
            //      Category Resource
            // -----------------------------
            Route::resource('category', 'AdminCategoryController', ['names' => [
                'index' => 'admin.category',
                'create' => 'admin.category.create',
                'store' => 'admin.category.store',
                'show' => 'admin.category.show',
                'edit' => 'admin.category.edit',
                'editsplit' => 'admin.category.editsplit',
                'update' => 'admin.category.update',
                'destroy' => 'admin.category.destroy'
                ]]);

            Route::get('categorysplit/create', 'AdminCategoryController@createsplit')->name('admin.category.createsplit');
            Route::get('categorysplit/edit', 'AdminCategoryController@editsplit')->name('admin.category.editsplit');

            // -----------------------------
            //      Member Resource
            //      ยังไม่เปิดให้เพิ่มสมาชิก
            // -----------------------------
            Route::resource('member', 'AdminMemberController', ['names' => [
                'index' => 'admin.member',
                'create' => 'admin.member.create',
                'store' => 'admin.member.store',
                'show' => 'admin.member.show',
                'edit' => 'admin.member.edit',
                'update' => 'admin.member.update',
                'destroy' => 'admin.member.destroy'
                ]]);


            // -----------------------------
            //      Topup Resource
            //      ระบบเติมเงิน ยังไม่สมบูรณ์
            // -----------------------------
            Route::resource('topup', 'AdminTopupController', ['names' => [
                'index' => 'admin.topup',
                'create' => 'admin.topup.create',
                'store' => 'admin.topup.store',
                'show' => 'admin.topup.show',
                'edit' => 'admin.topup.edit',
                'update' => 'admin.topup.update',
                'destroy' => 'admin.topup.destroy'
                ]]);
            
            // -----------------------------
            //      Point Resource
            //      ระบบเติมเงิน ยังไม่สมบูรณ์
            // -----------------------------
            Route::resource('point', 'AdminPointController', ['names' => [
                'index' => 'admin.point',
                'create' => 'admin.point.create',
                'store' => 'admin.point.store',
                'show' => 'admin.point.show',
                'edit' => 'admin.point.edit',
                'update' => 'admin.point.update',
                'destroy' => 'admin.point.destroy'
                ]]);

            // -----------------------------
            //      Setting Resource
            // -----------------------------
            Route::resource('setting', 'AdminSettingController', ['names' => [
                'index' => 'admin.setting',
                'create' => 'admin.setting.create',
                'store' => 'admin.setting.store',
                'show' => 'admin.setting.show',
                'edit' => 'admin.setting.edit',
                'update' => 'admin.setting.update',
                'destroy' => 'admin.setting.destroy'
                ]]);

            // -----------------------------
            //      Setting Resource
            // -----------------------------
            Route::resource('seo', 'AdminSeoController', ['names' => [
                'index' => 'admin.seo',
                'create' => 'admin.seo.create',
                'store' => 'admin.seo.store',
                'show' => 'admin.seo.show',
                'edit' => 'admin.seo.edit',
                'update' => 'admin.seo.update',
                'destroy' => 'admin.seo.destroy'
                ]]);

            // -----------------------------
            //      Setting Resource
            // -----------------------------
            Route::resource('settingindex', 'AdminSettingindexController', ['names' => [
                'index' => 'admin.setting.index',
                'create' => 'admin.setting.index.create',
                'store' => 'admin.setting.index.store',
                'show' => 'admin.setting.index.show',
                'edit' => 'admin.setting.index.edit',
                'update' => 'admin.setting.index.update',
                'destroy' => 'admin.setting.index.destroy'
                ]]);

            // -----------------------------
            //      Banner Resource
            // -----------------------------
            Route::resource('banner', 'AdminBannerController', ['names' => [
                'index' => 'admin.banner',
                'create' => 'admin.banner.create',
                'store' => 'admin.banner.store',
                'show' => 'admin.banner.show',
                'edit' => 'admin.banner.edit',
                'update' => 'admin.banner.update',
                'destroy' => 'admin.banner.destroy'
                ]]);

            // -----------------------------
            //      Menu Resource
            // -----------------------------
            Route::resource('menu', 'AdminMenuController', ['names' => [
                'index' => 'admin.menu',
                'create' => 'admin.menu.create',
                'store' => 'admin.menu.store',
                'edit' => 'admin.menu.edit',
                'update' => 'admin.menu.update',
                'destroy' => 'admin.menu.destroy'
                ]]);


            // -----------------------------
            //      Menu About
            // -----------------------------
            Route::resource('about', 'AdminAboutController', ['names' => [
                'index' => 'admin.about',
                'create' => 'admin.about.create',
                'store' => 'admin.about.store',
                'edit' => 'admin.about.edit',
                'update' => 'admin.about.update',
                'destroy' => 'admin.about.destroy'
                ]]);

        });
    });
