<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
  \UniSharp\LaravelFilemanager\Lfm::routes();
});


// Front Routes
 Route::get('/','HomeController@index')->name('home');
 Route::get('contact','HomeController@contact')->name('contact');
 Route::get('terms-of-use','HomeController@terms')->name('terms');
 Route::get('payment-method','HomeController@payment_method')->name('payment-method');
 Route::get('shipping-guide','HomeController@shipping_guide')->name('shipping-guide');
 Route::get('location','HomeController@location')->name('location');
 Route::get('estimated-delivery','HomeController@estimated_delivery')->name('estimated-delivery');
 Route::get('shipping-policy','HomeController@shipping_policy')->name('shipping-policy');
 Route::get('return-policy','HomeController@return_policy')->name('return-policy');
 Route::get('contact/submit','HomeController@contact_submit')->name('contact_submit');
 
 Route::get('checker','TestController@index');


 Route::get('videos','HomeController@videos')->name('videos');
 Route::get('videos/category','HomeController@videos_category')->name('videos.category');


 Route::get('blogs/search/category/','HomeController@blogs_category_search')->name('blogs.categry.search'); 
 Route::get('blogs/category/{slug}','HomeController@blogs_category')->name('blogs.category');
 Route::get('blogs','HomeController@blogs')->name('blogs');
 Route::get('blog/{id}','HomeController@blog')->name('blog');
 
 Route::get('isnaaf','HomeController@tweets')->name('tweets');
 Route::get('isnaaf/{id}','HomeController@tweet')->name('tweet');
 
 Route::get('review/add','HomeController@review_add')->name('review.add');


 Route::get('authors/search','HomeController@authors_search')->name('authors.search');
 Route::get('authors','HomeController@authors')->name('authors');
 Route::get('author/{id}','HomeController@author')->name('author');
 Route::get('pdf/{item}','HomeController@item_pdf')->name('item.pdf');
 Route::get('book/{id}','HomeController@books_category')->name('item.category');
 Route::get('books','HomeController@books')->name('books');
 Route::get('books/search','HomeController@books_search')->name('books.search');
 Route::get('magazines','HomeController@magazines')->name('magazines');
 Route::get('magazines/search','HomeController@magazines_search')->name('magazines.search');
 Route::get('shop/{slug}','HomeController@item')->name('item');

 
 Route::get('wish','WishController@index')->name('wish'); 
 Route::get('wish/add/{id}','WishController@add_to_wish')->name('wish.add');
 Route::get('wish/remove/{id}', 'WishController@remove')->name('wish.remove'); 
 
 
//Cart

 Route::get('cart','CartController@cart')->name('cart');
 Route::get('cart/add/{id}','CartController@add_to_cart')->name('cart.add');
 Route::get('cart/increament/{id}', 'CartController@increament')->name('cart.increament');
 Route::get('cart/decreament/{id}', 'CartController@decreament')->name('cart.decreament');
 Route::get('cart/remove/{id}', 'CartController@remove')->name('cart.remove');
 Route::get('cart/qty', 'CartController@add_with_qty')->name('cart.qty');
 Route::get('cartget_ajax', 'CartController@cartget_ajax')->name('cartget_ajax');
 
 


 Route::get('checkout', 'CheckoutController@checkout')->name('checkout');
 Route::post('checkout/submit', 'CheckoutController@checkout_submit')->name('checkout.submit');
 Route::get('thank-you', 'HomeController@thankyou')->name('thankyou');
 
 Route::get('cash-on-delivery', 'CheckoutController@cash_on_delivery')->name('cash_on_delivery');
 Route::get('paypal', 'CheckoutController@paypal')->name('paypal');
 Route::get('paypal/process', 'CheckoutController@process_paypal')->name('process.paypal');
 Route::get('paypal/cancel', 'CheckoutController@cancel_paypal')->name('cancel.paypal');
 

 //stripe 
 Route::get('stripe','CheckoutController@stripe')->name('stripe');
 Route::post('stripe-payment','CheckoutController@afterpayment')->name('checkout.credit-card');
 Route::get('order/tracking/{id}', 'CheckoutController@tracking')->name('order.track');
 
 Route::get('blog','HomeController@blog_page')->name('blog_page'); 
 Route::get('blog/detail/{id}','HomeController@blog_detail')->name('blog_detail'); 
 Route::get('review/add/{id}','HomeController@comment')->name('item.review'); 
 
 
 Route::get('/logout', 'HomeController@logout')->name('logout');
 Route::get('login','HomeController@login')->name('login');
 Route::get('login_ajax','HomeController@login_ajax')->name('login_ajax');
 Route::get('register_ajax','HomeController@register_ajax')->name('register_ajax');
 Route::get('login_submit','HomeController@login_submit')->name('login_submit');
 Route::get('register','HomeController@register')->name('register');
 Route::get('register_submit','HomeController@register_submit')->name('register_submit');
 Route::get('news_submit','HomeController@news_submit')->name('news_submit');

 

 //Admin Panel
 Route::get('/admin/settings','AdminController@get_settings');
 Route::get('/admin/login', 'AdminController@login')->name('admin.login');
 Route::get('/admin/login/submit', 'AdminController@login_submit')->name('admin.login.submit');


//Dashboard 
Route::get('dashboard/profile','DashboardController@index')->name('dashboard');
Route::post('dashboard/profile/{id}','DashboardController@profile_update')->name('profile.update');
Route::get('dashboard/orders','DashboardController@orders')->name('orders');





//access_admin_panel
Route::prefix('admin')->middleware(['auth','can:access_admin_panel'])->namespace('Admin')->name('admin.')->group(function () {

        Route::get('/home', 'DashboardController@index')->name('home');
        Route::get('users','UserController@index')->name('users.index');
        Route::get('users/create','UserController@Create')->name('users.create');
        Route::post('users/store/','UserController@store')->name('users.store');
        Route::get('users/edit/{id}','UserController@edit')->name('users.edit');
        Route::post('users/update/{id}','UserController@update')->name('users.update');
        Route::get('users/delete/{id}','UserController@delete')->name('users.delete');
        Route::get('profile/{id}','ProfileController@profile')->name('users.profile');
        Route::post('profile/update/{id}','ProfileController@update')->name('users.profile.update');
          
        //Roles
        Route::get('users/permissions/{id}','UserController@permissions')->name('users.permissions');
        Route::post('users/addpermission/{id}','UserController@addpermission')->name('users.addpermission');
         
        //Roles
        Route::resource('roles', 'RoleController');
         
        //Permissions
        Route::resource('permissions', 'PermissionController');
        
    
       //Categories
         Route::get('categories','CategoryController@index')->name('categories.index');
         Route::get('categories/create','CategoryController@create')->name('categories.create');
         Route::post('categories/store','CategoryController@store')->name('categories.store');
         Route::get('categories/edit/{id}','CategoryController@edit')->name('categories.edit');
         Route::post('categories/update/{id}','CategoryController@update')->name('categories.update');
         Route::get('categories/delete/{id}','CategoryController@delete')->name('categories.delete');
         
       //Books
         Route::get('books/create','BookController@create')->name('books.create');
         Route::get('books','BookController@index')->name('books.index');
         Route::post('books/store','BookController@store')->name('books.store');
         Route::get('books/edit/{id}','BookController@edit')->name('books.edit');
         Route::post('books/update/{id}','BookController@update')->name('books.update');
         Route::get('books/delete/{id}','BookController@delete')->name('books.delete');
        
       //Magzines
         Route::get('magazines/create','MagazineController@create')->name('magazines.create');
         Route::get('magazines','MagazineController@index')->name('magazines.index');
         Route::post('magazines/store','MagazineController@store')->name('magazines.store');
         Route::get('magazines/edit/{id}','MagazineController@edit')->name('magazines.edit');
         Route::post('magazines/update/{id}','MagazineController@update')->name('magazines.update');
         Route::get('magazines/delete/{id}','MagazineController@delete')->name('magazines.delete');

         //Authors
         Route::get('authors/create','AuthorController@create')->name('authors.create');
         Route::get('authors','AuthorController@index')->name('authors.index');
         Route::post('authors/store','AuthorController@store')->name('authors.store');
         Route::get('authors/edit/{id}','AuthorController@edit')->name('authors.edit');
         Route::post('authors/update/{id}','AuthorController@update')->name('authors.update');
         Route::get('authors/delete/{id}','AuthorController@delete')->name('authors.delete');

         //Video Category
         Route::get('video-categories/create','VideoCategoryController@create')->name('video-categories.create');
         Route::get('video-categories','VideoCategoryController@index')->name('video-categories.index');
         Route::post('video-categories/store','VideoCategoryController@store')->name('video-categories.store');
         Route::get('video-categories/edit/{id}','VideoCategoryController@edit')->name('video-categories.edit');
         Route::post('video-categories/update/{id}','VideoCategoryController@update')->name('video-categories.update');
         Route::get('video-categories/delete/{id}','VideoCategoryController@delete')->name('video-categories.delete');

          //Videos
          Route::get('videos','VideoController@index')->name('videos.index');
          Route::get('videos/create','VideoController@create')->name('videos.create');
          Route::post('videos/store','VideoController@store')->name('videos.store');
          Route::get('videos/edit/{id}','VideoController@edit')->name('videos.edit');
          Route::post('videos/update/{id}','VideoController@update')->name('videos.update');
          Route::get('videos/delete/{id}','VideoController@delete')->name('videos.delete');


        //Blog Category
         Route::get('blog-categories/create','BlogCategoryController@create')->name('blog-categories.create');
         Route::get('blog-categories','BlogCategoryController@index')->name('blog-categories.index');
         Route::post('blog-categories/store','BlogCategoryController@store')->name('blog-categories.store');
         Route::get('blog-categories/edit/{id}','BlogCategoryController@edit')->name('blog-categories.edit');
         Route::post('blog-categories/update/{id}','BlogCategoryController@update')->name('blog-categories.update');
         Route::get('blog-categories/delete/{id}','BlogCategoryController@delete')->name('blog-categories.delete');

         //Blog
         Route::get('blogs/create','BlogController@create')->name('blogs.create');
         Route::get('blogs','BlogController@index')->name('blogs.index');
         Route::post('blogs/store','BlogController@store')->name('blogs.store');
         Route::get('blogs/edit/{id}','BlogController@edit')->name('blogs.edit');
         Route::post('blogs/update/{id}','BlogController@update')->name('blogs.update');
         Route::get('blogs/delete/{id}','BlogController@delete')->name('blogs.delete');
         
        //  Isnaaf
         Route::get('tweets/create','TweetsController@create')->name('tweet.create');
         Route::get('tweets','TweetsController@index')->name('tweet.index');
         Route::post('tweets/store','TweetsController@store')->name('tweet.store');
         Route::get('tweets/edit/{id}','TweetsController@edit')->name('tweet.edit');
         Route::post('tweets/update/{id}','TweetsController@update')->name('tweet.update');
         Route::get('tweets/delete/{id}','TweetsController@delete')->name('tweet.delete');


        //Reviews
          Route::get('reviews','ReviewController@index')->name('reviews.index');
          Route::get('reviews/delete/{id}','ReviewController@delete')->name('reviews.delete');
          Route::get('reviews/type/{id}','ReviewController@type')->name('reviews.types');
          Route::get('reviews/{id}/status/{status}','ReviewController@status')->name('reviews.status');

          
        //Order
          Route::get('orders','OrderController@index')->name('orders.index');
          Route::get('orders/edit/{id}','OrderController@edit')->name('orders.edit');
          Route::post('orders/update/{id}','OrderController@update')->name('orders.update');
          Route::get('orders/delete/{id}','OrderController@delete')->name('orders.delete');
          Route::get('orders/search','OrderController@search')->name('orders.search');
          Route::get('orders/{id}/status/{status}','OrderController@status')->name('orders.status');
          

        //Payments
          Route::get('payments/create','PaymentController@create')->name('payments.create');
          Route::post('payments/store','PaymentController@store')->name('payments.store');
          Route::get('payments/manage','PaymentController@index')->name('payments.index');
          Route::get('payments/manage/view/{id}','PaymentController@view')->name('payments.view');
          Route::get('payments/manage/edit/{id}','PaymentController@edit')->name('payments.edit');
          Route::post('payments/manage/update/{id}','PaymentController@update')->name('payments.update');
          Route::get('payments/manage/delete/{id}','PaymentController@delete')->name('payments.delete');
          Route::get('payments/manage/search','PaymentController@search')->name('payments.search');
         
         
        //Contacts     
        Route::get('contacts','ContactController@index')->name('contacts.index');
        Route::get('contacts/delete/{id}','ContactController@delete')->name('contacts.delete');
         
         
         
         
         
        //Blogs 

        //Settings
        Route::get('settings/all','SettingController@all')->name('settings.index');
        Route::post('settings/create','SettingController@store')->name('settings.store');
        Route::get('settings/delete/{id}','SettingController@delete')->name('settings.delete');
        Route::post('settings/update','SettingController@setting_update')->name('settings.update');
        Route::post('settings/update1','SettingController@setting_update1')->name('settings.update1');
        Route::get('settings/general','SettingController@general')->name('settings.general');
        Route::get('settings/customizations','SettingController@customizations')->name('settings.customizations');
          
         //Modules
         Route::get('modules','Blog\ModuleController@index')->name('modules.index');
         Route::get('modules/create','Blog\ModuleController@create')->name('modules.create');
         Route::post('modules/store','Blog\ModuleController@store')->name('modules.store');
         Route::get('modules/edit/{id}','Blog\ModuleController@edit')->name('modules.edit');
         Route::post('modules/update/{id}','Blog\ModuleController@update')->name('modules.update');
         Route::get('modules/delete/{id}','Blog\ModuleController@delete')->name('modules.delete');
         
        //Posts
         Route::get('posts/{slug}','Blog\PostController@index')->name('posts.index');
         Route::get('posts/{slug}/create','Blog\PostController@create')->name('posts.create');
         Route::post('posts/store/{slug}','Blog\PostController@store')->name('posts.store');
         
         Route::get('posts/edit/{id}','Blog\PostController@edit')->name('posts.edit');
         Route::post('posts/update/{id}','Blog\PostController@update')->name('posts.update');
         Route::get('posts/delete/{id}','Blog\PostController@delete')->name('posts.delete');
   

        Route::get('filemanager','SettingController@filemanager')->name('filemanager.index');
        
        
        // News Later
          Route::get('news_later','News_LaterController@index')->name('news_later');
          Route::get('news_later/delete/{id}','News_LaterController@delete')->name('news.delete');

   });


// Auth::routes();
