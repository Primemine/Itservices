<?php
use App\Post;
use App\Servirce;
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

/*
 * for fallback route
 */
Route::fallback(function () {
    return view('error');
});

Route::get('/', function () {
        $services=Servirce::all();//orderBy('created_at','desc')->take(6)->get();
        $post=Post::orderBy('created_at','desc')->take(4)->get();
        return view('welcome')->with([
            'services'=>$services,
            'post'=>$post,
    ]);
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('contacts',"VisitorController");

Route::get('pages/{id}','PagesController@show')->name('pages/show');
Route::get('pages/articles','PagesController@articles')->name('pages.articles');
//Route::get('pages/recent_post','PagesController@post')->name('pages.recent_post');

Route::group(["middleware"=>['auth'=>"admin"]], function (){
            Route::get('admin/index','AdminController@index')->name('admin/index');
            Route::get('admin/service','AdminController@service')->name('admin/service');
            Route::get('admin/service_view','AdminController@list')->name('admin/service_view');
            Route::get('admin/users','AdminController@users')->name('admin/users');
            Route::post('admin/service_view','AdminController@store')->name('admin/service_view');
            Route::post('admin/comment','AdminController@comment');//->name('admin/service_view');
            Route::delete('admin/service_view/{id}','AdminController@destroy')->name('admin/service_view/{id}');
            /*
             * resource
             */
            Route::resource('posts','PostsController');
});

Route::resource('contacts','VisitorsController');
