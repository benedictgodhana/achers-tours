<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Models\Blog;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\EnquiryController;
use App\Models\Destination;
use App\Models\Package;
use App\Models\Tour;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::resource('packages', PackageController::class)->middleware('auth');


// Tour routes
Route::resource('tours', TourController::class)->middleware('auth');


Route::resource('destinations', DestinationController::class)->middleware('auth');


Route::resource('users', UserController::class)->middleware(['auth', 'verified']);

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

    Route::middleware(['auth'])->group(function () {
        Route::resource('blogs', BlogController::class);
    });

    Route::get('/', function () {
        // Fetch all blogs from the database


        // Pass the blogs to the 'welcome' view
        return view('welcome');
    });



Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog', function () {

    $blogs = Blog::all();

    return view('Blog', compact('blogs'));
});


Route::get('/about', function () {
    return view('About');
});



Route::get('/contact', function () {
    return view('Contact');
});


Route::post('/send-enquiry', [EnquiryController::class, 'sendEnquiry'])->name('send.enquiry');



Route::get('/destination', function () {
    $destinations = Destination::all();
    return view('Destination', compact('destinations'));
});



Route::get('/tour', function () {
    $tours = Tour::all();
    return view('Tour', compact('tours'));
});

Route::get('/tour/{id}', function ($id) {
    $destination = Destination::findOrFail($id); // Ensure you get the destination
    $tours = Tour::where('destination_id', $id)->get();

    return view('tour', compact('destination', 'tours'));
});



Route::get('/destination/{id}', function ($id) {
    $destination = Destination::findOrFail($id); // Ensure you get the destination
    $tours = Tour::where('destination_id', $id)->get();

    return view('Destination.show', compact('destination', 'tours'));
});



Route::get('/package/{id}', function ($id) {
    $tours = Tour::findOrFail($id); // Ensure you get the destination
    $packages = Package::where('tour_id', $id)->get();

    return view('package', compact('tours', 'packages'));
});



Route::get('/users/export-excel', [UserController::class, 'exportExcel'])->name('users.export');
Route::get('/users/print-pdf', [UserController::class, 'printPdf'])->name('users.print.pdf');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
