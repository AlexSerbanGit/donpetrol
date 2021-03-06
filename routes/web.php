<?php
use App\Order;
use Carbon\Carbon;

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

// Route::get('/', 'PublicController@choose')->name('Don petrol');

Route::group([
    'middleware' => 'language',
], function(){

    Route::get('/', function(){
        return redirect('/menu');
    })->name('Don petrol');

    // auth routes 
    Auth::routes(['reset' => false]);

    // home page route
    Route::get('/home', 'HomeController@index')->name('Home');

    Route::group(['middleware' => ['auth', 'admin']], function(){

        // orders page
        Route::get('/orders', 'OrdersController@orders')->name('Orders');

        // categories page route
        Route::get('/categories', 'CategoriesController@index')->name('Categories');

        // specific category page
        Route::get('/category/{category_id}', 'CategoriesController@category')->name('Category page');

        // add category route
        Route::post('/add_category', 'CategoriesController@add')->name('Add category');

        // edit category route
        Route::post('/edit_category/{category_id}', 'CategoriesController@edit')->name('Edit category');

        // delete category route
        Route::get('/delete_category/{category_id}', 'CategoriesController@delete')->name('Delete category');

        // products page route
        Route::get('/products', 'ProductsController@index')->name('Products');

        // add product route
        Route::post('/add_product', 'ProductsController@add')->name('Add product');

        // edit product route
        Route::post('/edit_product/{category_id}', 'ProductsController@edit')->name('Edit product');

        // delete product route
        Route::get('/delete_product/{category_id}', 'ProductsController@delete')->name('Delete product');

        // order page route
        Route::get('/order', 'OrdersController@index')->name('Order');

        Route::get('/delete_order/{order_id}', 'OrdersController@deleteOrder')->name('Delete order');

        // Print order route
        Route::get('/print_order/{order_id}', 'OrdersController@print')->name('Print order route');

        // Schedule page route
        Route::get('/schedule', 'ScheduleController@index')->name('Schedule');

        // edit date route
        Route::post('/edit_date/{date_id}', 'ScheduleController@edit')->name('Edit date');

    });

    // Take away option
    Route::get('/eat_in', 'PublicController@eatIn');

    // Eat in option
    Route::get('/take_away', 'PublicController@takeAway');

    // unset order type
    Route::get('/unset', 'PublicController@unsetType');

    // Route send post request to external soap api 
    Route::get('/soap_post', 'PublicController@soap');  

    // Menu route
    Route::get('/menu', 'PublicController@menu')->name('Menu');

    // add to cart route
    Route::post('/add_to_cart/{product_id}', 'OrdersController@add')->name('Add to cart');

    // edit product quantity
    Route::post('/edit_product_quantity/{product_id}', 'OrdersController@edit')->name('Edit product quantity');

    // remove product from cart
    Route::get('/remove_product_from_cart/{product_id}', 'OrdersController@delete')->name('Remove product from cart');

    // cheeckout page
    Route::get('/checkout', 'OrdersController@checkout')->name('Checkout');

    // empty cart when user logs in 
    Route::get('/empty_cart', 'OrdersController@emptyCart');

    // send order route
    Route::post('/send_order', 'OrdersController@send')->name('Send order')->middleware('auth');

    // Payment route test
    Route::get('/mollie', 'PublicController@payTest');

    // Payment success route
    Route::get('/payment_success/{order_secret}', 'PublicController@paymentSuccess')->name('Order');

    // Service closed route
    Route::get('/service_closed', 'PublicController@closed')->name('Service closed');

    Route::get('/cron_job', 'OrdersController@cron');

});

Route::get('/set_lang/{language}', function ($language) {

    if ($language == 'en' || $language == 'ro' || $language == 'nl-be') {
        Session::put('language', $language);
        return redirect()->back()->with('info', 'Langauge changed');
    }

});

// Reset session
Route::get('/drop', function() {
    Session::flush(); // removes all session data
    return redirect()->back()->with('success', 'Session deleted');
});

// Refresh database
Route::get('/dbb', function() {
    Artisan::call('migrate:fresh --seed');
});