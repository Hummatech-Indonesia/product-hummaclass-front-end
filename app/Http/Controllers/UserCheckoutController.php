<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($slug)
    {
        return view('user.pages.checkout.index', compact('slug'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $reference)
    {
        // return view('user.pages.checkout.finish', compact('method', 'id'));
        return view('user.pages.checkout.detail', compact('reference'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
