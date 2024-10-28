<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Destination; // Import the Destination model
use App\Models\Tour;        // Import the Tour model
use App\Models\Package;     // Import the Package model
use App\Models\Blog;        // Import the Blog model
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch all users and counts of other entities
        $usersCount = User::count();  // Count of users
        $destinationsCount = Destination::count();  // Count of destinations
        $toursCount = Tour::count();   // Count of tours
        $packagesCount = Package::count(); // Count of packages
        $blogsCount = Blog::count();    // Count of blogs

        return view('dashboard', compact('usersCount', 'destinationsCount', 'toursCount', 'packagesCount', 'blogsCount'));
    }
}
