<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use App\Mail\ContactFormSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Exception;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        try {
            // Validate the request
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'mobile' => 'required|string|max:20',
                'email' => 'required|email|max:255',
                'message' => 'required|string',
            ]);

            // Create the submission
            $submission = ContactSubmission::create($validated);

            // Send email
            Mail::to('muchelemaurice@gmail.com')->send(new ContactFormSubmission($submission));

            // If we've made it this far, everything worked
            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Validation failed
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput()
                ->with('error', 'There was a problem with your submission. Please check the form and try again.');
        } catch (\Illuminate\Database\QueryException $e) {
            // Database error
            Log::error('Database error: ' . $e->getMessage());
            return $this->handleError('There was a problem saving your submission. Please try again later.');
        } catch (TransportExceptionInterface $e) {
            // Email sending failed
            Log::error('Email sending failed: ' . $e->getMessage());

            // The submission was saved, so we don't want to lose it
            // We could implement a queue here to retry sending the email later
            return redirect()->back()
                ->with('warning', 'Your message was received, but we encountered an error sending a confirmation. Our team will contact you soon.');
        } catch (Exception $e) {
            // Catch any other exceptions
            Log::error('Unexpected error: ' . $e->getMessage());
            return $this->handleError('An unexpected error occurred. Please try again later.');
        }
    }

    private function handleError($message)
    {
        return redirect()->back()
            ->with('error', $message)
            ->withInput();
    }
}
