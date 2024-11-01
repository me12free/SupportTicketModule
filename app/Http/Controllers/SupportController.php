<?php

namespace App\Http\Controllers;

use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function store(Request $request)
{
    // Validate the request
    $request->validate([
        'issue' => 'required|string|max:1000',
        'phone_number' => 'required|string|max:20', // Validation for phone_number
        'country_code' => 'required|string|max:5', // Validation for country_code
    ]);

    // Create a new support entry
    Support::create([
        'issue' => $request->input('issue'),
        'phone_number' => $request->input('phone_number'), // Correctly map to phone_number
        'country_code' => $request->input('country_code'), // Map to country_code
    ]);

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Support message saved successfully.');
}
}
