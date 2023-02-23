<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'selamat datang';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function about()
    {
        return 'Nama : Marsa Mawaddah Herawati <br> Nim : 2141720257';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function articles($id)
    {
        return '“Halaman Artikel dengan ID';
    }

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
