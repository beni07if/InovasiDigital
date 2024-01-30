<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebpageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('webpage.index');
    }
    public function about()
    {
        return view('webpage.about');
    }
    public function solution()
    {
        return view('webpage.solutions.solution');
    }
    public function event()
    {
        return view('webpage.events.event');
    }
    public function singleBlog()
    {
        return view('webpage.events.singleBlog');
    }
    public function career()
    {
        return view('webpage.career');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
