<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the home page.
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Display the about me page.
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Display the skills page.
     */
    public function skills()
    {
        return view('skills');
    }

    /**
     * Display the projects page.
     */
    public function projects()
    {
        return view('projects');
    }

    /**
     * Display the resume download page.
     */
    public function resume()
    {
        return view('resume');
    }

    /**
     * Display the contact form page.
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Handle contact form submission.
     */
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // TODO: send email or store message.
        return back()->with('status', 'Thank you for reaching out! I will get back to you soon.');
    }
}
