<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\addController;
use App\Http\Controllers\posController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\yearController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\videoController;
use App\Http\Controllers\actionController;
use App\Http\Controllers\leaderController;
use App\Http\Controllers\facultyController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\ministryController;


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



Route::get('about-us',function(){
    return view('home/about-us');
});

Route::get('admin',function(){
    return view('admin/login');
})->middleware('back2admin');

Route::get('admin-home',function(){
    return view('admin/admin');
})->middleware('checkadmin');

// HOME CONTROLLER 
Route::get('/', [homeController::class, 'index']);

// VIDEO CONTROLLER
Route::get('/video-player/{id?}', [videoController::class, 'videoPlayer']);

//LOGIN CONTROLLER
Route::post('/login', [loginController::class, 'login']);

//LOGOUT
Route::get('logout', function() {
    if(session()->has('user_id')) {
        session()->pull('user_id');
        session()->pull('email');
        session()->pull('username');

        return redirect('admin');
    }
});


// ADD MININSTRY, FACULTY, DURATION CONTROLLER
Route::post('/add_ministry', [ministryController::class, 'add_ministry'])->middleware('checkadmin');
Route::get('/delete-ministry/{id?}', [ministryController::class, 'delete_ministry'])->middleware('checkadmin');
Route::get('/ministry', [ministryController::class, 'index'])->middleware('checkadmin');
Route::get('/edit-ministry/{id?}', [ministryController::class, 'get_ministry_to_edit'])->middleware('checkadmin');
Route::post('/update-ministry', [ministryController::class, 'update_ministry'])->middleware('checkadmin');

Route::get('/faculty', [facultyController::class, 'index'])->middleware('checkadmin');
Route::get('/delete-faculty/{id?}', [facultyController::class, 'delete_faculty'])->middleware('checkadmin');
Route::get('/edit-faculty/{id?}', [facultyController::class, 'get_faculty_to_edit'])->middleware('checkadmin');
Route::post('/add-faculty', [facultyController::class, 'add_faculty'])->middleware('checkadmin');
Route::post('/update-faculty', [facultyController::class, 'update_year'])->middleware('checkadmin');

Route::get('/year', [yearController::class, 'index'])->middleware('checkadmin');
Route::get('/delete-year/{id?}', [yearController::class, 'delete_year'])->middleware('checkadmin');
Route::get('/edit-year/{id?}', [yearController::class, 'get_year_to_edit'])->middleware('checkadmin');
Route::post('/add-year', [yearController::class, 'add_year'])->middleware('checkadmin');
Route::post('/update-year', [yearController::class, 'update_year'])->middleware('checkadmin');

Route::get('/position', [posController::class, 'index'])->middleware('checkadmin');
Route::post('/pos_post', [posController::class, 'add_position'])->middleware('checkadmin');
Route::post('/update-pos', [posController::class, 'update_position'])->middleware('checkadmin');
Route::get('/delete-pos/{id?}', [posController::class, 'delete_position'])->middleware('checkadmin');
Route::get('/edit-pos/{id?}', [posController::class, 'get_position_to_edit'])->middleware('checkadmin');


//ADD EVENT CONTROLLER
Route::get('/event', [eventController::class, 'index'])->middleware('checkadmin');
Route::post('/addevent', [eventController::class, 'event'])->middleware('checkadmin');
Route::get('/delete-event/{id?}', [eventController::class, 'delete_event'])->middleware('checkadmin');
Route::get('/edit-event/{id?}', [eventController::class, 'edit_event'])->middleware('checkadmin');
Route::post('/update-event', [eventController::class, 'update_event'])->middleware('checkadmin');

//NEWS CONTROLLER
Route::get('/news', [newsController::class, 'index'])->middleware('checkadmin');
Route::post('/addnews', [newsController::class, 'add_news'])->middleware('checkadmin');
Route::get('/edit-news/{id?}', [newsController::class, 'get_news_data_to_edit'])->middleware('checkadmin');
Route::post('/update-news/{id?}', [newsController::class, 'update_news'])->middleware('checkadmin');
Route::get('/delete-news/{id?}', [newsController::class, 'delete_news'])->middleware('checkadmin');


//GALLERY CONTROLLER
Route::get('/ourgallery', [galleryController::class, 'index']);
Route::get('/galleryForm', [galleryController::class, 'getForm'])->middleware('checkadmin');
Route::get('/view/{id?}', [galleryController::class, 'view_image']);
Route::get('/admin-view/{id?}', [galleryController::class, 'admin_view_image'])->middleware('checkadmin');
Route::post('/add-to-gallery', [galleryController::class, 'addToGallery'])->middleware('checkadmin');
Route::get('/delete-image/{id?}', [galleryController::class, 'delete_image'])->middleware('checkadmin');
Route::post('/update-gallery/{id?}', [galleryController::class, 'update_gallery'])->middleware('checkadmin');
Route::get('/get-gallery-details/{id?}', [galleryController::class, 'get_gallery_to_edit'])->middleware('checkadmin');



// REGISTER LEADER CONTROLLER
Route::get('/leader-form/{year_id?}', [leaderController::class, 'index'])->middleware('checkadmin');
Route::get('/leaders/{id?}',[leaderController::class, 'leader_index']);
Route::post('/register-leader', [leaderController::class, 'Register_Leader'])->name('Leader_Registration')->middleware('checkadmin');





