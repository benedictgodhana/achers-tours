<?php

namespace App\Http\Controllers;

use App\Models\Log; // Import the Log model

class LogController extends Controller
{
    /**
     * Display the application logs from the database.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function viewLogs()
    {
        $logs = Log::latest()->paginate(10); // Fetch logs and paginate them, 10 logs per page

        return view('logs.index', compact('logs')); // Pass logs to the view
    }

}
