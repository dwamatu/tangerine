<?php



Route::group(['middleware'=> ['web']],function (){
    Route::get('/', function () {
        return view('welcome');
    })->name('home');
    Route::get('/php', function () {
        return phpinfo();
    });
    Route::get('/addclient', function () {
        return view('addclient');
    })->name('add.client');
    Route::get('/test', ['uses' => 'SiteController@getTest', 'as' => 'test', 'middleware' => 'auth']);
    Route::post('/signup', ['uses' => 'UserController@postSignUp', 'as' => 'signup']);
    Route::post('/signin', ['uses' => 'UserController@postSignIn', 'as' => 'signin']);
    Route::get('/logout', ['uses' => 'UserController@getLogout', 'as' => 'logout']);
    Route::get('/dashboard', ['uses' => 'SiteController@getDashboard', 'as' => 'dashboard', 'middleware' => 'auth']);
    Route::get('/users', ['uses' => 'UserController@userDash', 'as' => 'users'/*, 'middleware' => 'auth'*/]);
    Route::get('/clientdashboard', ['uses' => 'ClientController@getClientDashboard', 'as' => 'client.dashboard', 'middleware' => 'auth']);
    Route::post('/createsite', ['uses' => 'SiteController@siteCreateSite', 'as' => 'site.create']);
    Route::post('/editsite', ['uses' => 'SiteController@siteEditSite', 'as' => 'edit.site']);
    Route::post('/createclient', ['uses' => 'ClientController@clientCreateClient', 'as' => 'create.client']);
    Route::get('/paste', ['uses' => 'SiteController@index', 'as' => 'paste.sites']);
    Route::get('/getLandmarkData', ['uses' => 'SiteController@getLandmarks', 'as' => 'getLandmarks']);
    Route::get('/getClients', ['uses' => 'ClientController@getClients', 'as' => 'getClients']);
    Route::get('/clientsearch/{term}', ['uses' => 'SearchController@clientSearch', 'as' => 'client.search']);
//   Transactions
    Route::post('/savetransaction', ['uses' => 'TransactionController@transactionCreateTransaction', 'as' => 'save.transaction']);
    Route::get('/transactions', ['uses' => 'TransactionController@getTransactions', 'as' => 'transaction', 'middleware' => 'auth']);
// Query SItes
    Route::get('/getOpen', ['uses' => 'SiteController@getOpen', 'as' => 'open.sites']);
    Route::get('/getClosed', ['uses' => 'SiteController@getClosed', 'as' => 'closed.sites']);
    Route::get('/getBooked', ['uses' => 'SiteController@getBooked', 'as' => 'booked.sites']);
});