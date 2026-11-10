<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;

class ChirpController extends Controller
{
    /**
     * Display all chirps on the home page.
     */
    public function index()
    {
        // Get the latest 50 chirps with their users
        $chirps = Chirp::with('user')
            ->latest()
            ->take(50)
            ->get();

        // Send the chirps to the home page
        return view('home', ['chirps' => $chirps]);
    }

    /**
     * Show the form for creating a new chirp.
     */
    public function create()
    {
        //
    }

    /**
     * Store a new chirp.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display a specific chirp.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing a chirp.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update a chirp.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Delete a chirp.
     */
    public function destroy(string $id)
    {
        //
    }
}