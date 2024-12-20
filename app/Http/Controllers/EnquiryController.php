<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquiryMail;
use App\Mail\EnquiryAcknowledgmentMail;
use App\Models\Inquiry;
use Exception;
use Illuminate\Support\Facades\Log;

class EnquiryController extends Controller
{
    public function sendEnquiry(Request $request)
    {
        // Validate form inputs
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|digits_between:10,15', // Allow international numbers
            'subject' => 'required|string|max:255',
            'package_details' => 'required|string',
            'package_id' => 'required|exists:packages,id', // Ensure package exists
        ]);

        try {
            // Save the enquiry to the database
            $inquiry = Inquiry::create([
                'package_id' => $request->input('package_id'),
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'subject' => $request->input('subject'),
                'package_details' => $request->input('package_details'),
                'phone' => $request->input('phone'),
            ]);

            // Send enquiry email to the admin
            Mail::to('bdhadho@strathmore.edu')->send(new EnquiryMail($validated));

            // Send acknowledgment email to the enquirer
            Mail::to($validated['email'])->send(new EnquiryAcknowledgmentMail($validated));

            return redirect()->back()->with('success', 'Your enquiry has been successfully sent, and a confirmation email has been sent to your email address!');
        } catch (Exception $e) {
            // Log the error with context for easier debugging
            Log::error('Enquiry submission failed', [
                'error' => $e->getMessage(),
                'data' => $validated,
            ]);

            return redirect()->back()->with('error', 'There was an issue processing your enquiry. Please try again later.');
        }
    }

}
