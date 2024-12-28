<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\InformationCategoryController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\TestimonialController;
// Models
use App\Models\Blog;
use App\Models\Destination;
use App\Models\InformationCategory;
use App\Models\Package;
use App\Models\Testimonial;
use App\Models\Tour;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

// Authentication Routes
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Public Routes
Route::get('/', function () {
    $categories = InformationCategory::all(); // Fetch all categories from the categories table
    $destinations = Destination::select('id', 'name', 'image')
    ->withCount('tours') // Ensure tour counts are included
    ->distinct() // Prevent duplicate rows
    ->paginate(3); // Paginate with 3 items per page

    $tours = Tour::with('destination')->get();
    $blogs = Blog::with('category')->paginate(3); // Fetch blogs with pagination, 3 blogs per page
    $testimonials = Testimonial::where('is_approved', 1) // Fetch approved testimonials only
    ->distinct('id') // Select only unique entries based on the ID
    ->paginate(3); // Paginate with 10 testimonials per page




    return view('welcome', [
        'destinations' => $destinations,
        'tours' => $tours,
        'blogs' => $blogs,
        'categories' => $categories,
        'testimonials'=>$testimonials
    ]);
});

Route::get('/no-blogs', function () {

    $categories = InformationCategory::all(); // Fetch all categories from the categories table

    return view('no-blogs',compact('categories'));
})->name('noBlogsPage');



Route::get('/tour/{id}', [TourController::class, 'tourMore'])->name('Tour.show');

Route::get('/about', function () {
    $blogs = Blog::latest()->take(3)->get();
    $categories = InformationCategory::all(); // Fetch all categories from the categories table

    $testimonials = Testimonial::where('is_approved', 1)->get(); // Filter approved testimonials

    return view('About', compact('blogs','categories','testimonials'));
});


Route::get('/contact', function () {
    $blogs = Blog::all();
    $categories = InformationCategory::all(); // Fetch all categories from the categories table


    return view('Contact', compact('blogs','categories'));
});

Route::get('category/{id}', [BlogController::class, 'categoryPage'])->name('category.show');


Route::get('/faqs', function () {
    $blogs = Blog::latest()->take(3)->get();
    $categories = InformationCategory::all(); // Fetch all categories from the categories table


    return view('FAQs', compact('blogs','categories'));
});

Route::post('/send-email', [ContactController::class, 'sendEmail']);
Route::post('/send-quote-request', [QuoteController::class, 'sendQuoteRequest']);

Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::post('/blog/{blog}/comments', [BlogController::class, 'storeComment'])->name('blog.comments.store');
Route::get('/blogs/category/{category}', [BlogController::class, 'category'])->name('blogs.category');

// Destination Routes
Route::get('/destination', function (Request $request) {
    $destinations = Destination::all();
    $categories = InformationCategory::all(); // Fetch all categories from the categories table

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

    $blogs = Blog::latest()->take(3)->get();

    // Load the view with all destinations and all tours initially
    return view('Destination', compact('destinations', 'tours', 'blogs','categories'));
});

Route::get('/destination/{id}', function ($id) {
    $destination = Destination::findOrFail($id); // Ensure you get the destination
    $tours = Tour::where('destination_id', $id)->get();

    return view('Destination.show', compact('destination', 'tours'));
});

// web.php (or appropriate routes file)
Route::post('/send-enquiry', [EnquiryController::class, 'sendEnquiry'])->name('send.enquiry');

Route::get('/packages/details/{id}', [PackageController::class, 'details'])->name('package.details');


// Tour Routes
Route::get('/tour', function () {
    $tours = Tour::all();
    return view('tour.index', compact('tours'));
});

Route::get('/tour/{id}', function ($id) {
    $destination = Destination::findOrFail($id); // Ensure you get the destination
    $tours = Tour::where('destination_id', $id)->get();
    $blogs = Blog::latest()->take(3)->get();

    $categories = InformationCategory::all(); // Fetch all categories from the categories table

    return view('tour', compact('destination', 'tours', 'blogs','categories'));
});

Route::get('/destination/{id}', [DestinationController::class, 'showDestinations'])->name('destinationsAll.show');


Route::post('/send-enquiry', [EnquiryController::class, 'sendEnquiry'])->name('send.enquiry');
Route::get('/package/{id}', function ($id) {
    $tour = Tour::with('packages')->findOrFail($id); // Eager load packages
    $blogs = Blog::all(); // Optionally fetch blogs if needed
    $categories = InformationCategory::all(); // Fetch all categories from the categories table


    return view('package', compact('tour', 'blogs','categories'));
});

// Authenticated Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('logs/{log}', [LogController::class, 'show'])->name('logs.show');


    Route::get('/logs', [LogController::class, 'viewLogs'])->name('logs.index');
    Route::resource('users', UserController::class);
    Route::get('/users/export-excel', [UserController::class, 'exportExcel'])->name('users.export');
    Route::get('/users/print-pdf', [UserController::class, 'printPdf'])->name('users.print.pdf');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('packages', PackageController::class); // CRUD for packages
    Route::resource('tours', TourController::class); // CRUD for tours
    Route::resource('destinations', DestinationController::class); // CRUD for destinations

    Route::resource('blogs', BlogController::class); // CRUD for blogs
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('/password-update', [UserController::class, 'updatePassword'])->name('password.change');
    Route::resource('comments', CommentController::class);

    Route::get('/information-categories', [InformationCategoryController::class, 'index'])->name('information_categories.index');
    Route::get('/information-categories/create', [InformationCategoryController::class, 'create'])->name('categories.create');
    Route::post('/information-categories', [InformationCategoryController::class, 'store'])->name('categories.store');
    Route::get('/information-categories/{id}', [InformationCategoryController::class, 'show'])->name('categories.show');
    Route::get('/information-categories/{id}/edit', [InformationCategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/information-categories/{id}', [InformationCategoryController::class, 'update'])->name('categories.update');
    Route::delete('/information-categories/{id}', [InformationCategoryController::class, 'destroy'])->name('categories.destroy');

    Route::group(['prefix' => 'ckeditor', 'as' => 'ckeditor.'], function () {
        Route::get('image_browser', 'CKEditorController@imageBrowser')->name('image_browser');  // Browse images
        Route::post('image_upload', 'CKEditorController@imageUpload')->name('image_upload');   // Upload images
    });
    Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('testimonials.create');
    Route::prefix('testimonials')->group(function () {
        Route::get('/', [TestimonialController::class, 'index'])->name('testimonials.index');        // List all testimonials
        Route::post('/', [TestimonialController::class, 'store'])->name('testimonials.store');      // Store a new testimonial
        Route::get('{id}', [TestimonialController::class, 'show'])->name('testimonials.show');     // Show a specific testimonial
        Route::put('{testimonial}', [TestimonialController::class, 'update'])->name('testimonials.update');
        Route::get('edit/{id}', [TestimonialController::class, 'edit'])->name('testimonials.edit');
        Route::delete('{id}', [TestimonialController::class, 'destroy'])->name('testimonials.destroy'); // Delete a testimonial
    });


});

require __DIR__ . '/auth.php';

