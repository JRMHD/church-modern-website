<?php

namespace App\Http\Controllers;

use App\Models\PrayerRequest;
use App\Mail\PrayerRequestSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;

class PrayerRequestController extends Controller
{
    public function submit(Request $request)
    {
        try {
            $validated = $request->validate([
                'fullname' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'mobile' => 'required|string|max:20',
                'address' => 'required|string|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
            ]);

            $prayerRequest = PrayerRequest::create($validated);

            Mail::to('muchelemaurice@gmail.com')->send(new PrayerRequestSubmission($prayerRequest));

            return redirect()->back()->with('success', 'Your prayer request has been submitted successfully!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput()
                ->with('error', 'There was a problem with your submission. Please check the form and try again.');
        } catch (Exception $e) {
            return redirect()->back()
                ->with('error', 'An unexpected error occurred. Please try again later.')
                ->withInput();
        }
    }
}
