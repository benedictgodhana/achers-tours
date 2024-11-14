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
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\QuoteController;
use App\Models\Destination;
use App\Models\Package;
use App\Models\Tour;
use Illuminate\Http\Request;

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

// In routes/web.php
Route::post('/send-quote-request', [QuoteController::class, 'sendQuoteRequest']);

Route::resource('users', UserController::class)->middleware(['auth', 'verified']);

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

    Route::middleware(['auth'])->group(function () {
        Route::resource('blogs', BlogController::class);
    });

    Route::get('/', function () {
        // Fetch all destinations along with their associated tours count
        $destinations = Destination::withCount('tours')->get();

        // Fetch all tours along with their associated destination
        $tours = Tour::with('destination')->get();

        $blogs = Blog::latest()->take(3)->get();

        // Pass the destinations and tours to the view
        return view('welcome', ['destinations' => $destinations, 'tours' => $tours,'blogs' => $blogs]);
    });


    Route::post('/send-email', [ContactController::class, 'sendEmail']);
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog', function () {
    // Paginate blog posts, 6 per page
    $blogs = Blog::paginate(6);

    return view('Blog', compact('blogs'));
});


Route::get('/about', function () {
    return view('About');
});



Route::get('/contact', function () {
    return view('Contact');
});


Route::post('/send-enquiry', [EnquiryController::class, 'sendEnquiry'])->name('send.enquiry');


Route::get('/destination', function (Request $request) {
    $destinations = Destination::all();
    $tours = Tour::all(); // Fetch all tours initially

    // Check if the request is an AJAX request for filtered tours
    if ($request->ajax()) {
        $query = Tour::query();

        // Filter by destination ID if provided
        if ($request->has('destination_id') && $request->input('destination_id') !== null) {
            $query->where('destination_id', $request->input('destination_id'));
        }

        // Filter by search query if provided
        if ($request->has('search') && $request->input('search') !== null) {
            $query->where('name', 'like', '%' . $request->input('search') . '%');
        }

        $tours = $query->get(); // Return filtered tours as JSON for AJAX response
        return response()->json($tours);
    }

    // Load the view with all destinations and all tours initially
    return view('Destination', compact('destinations', 'tours'));
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
