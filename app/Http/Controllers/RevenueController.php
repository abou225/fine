<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RevenueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $revenues = Auth::user()->revenues;
        return view('revenues.index', compact('revenues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('revenues.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'description' => 'required',
            'revenue_date' => 'required|date'
        ]);

        Auth::user()->revenues()->create($request->all());
        return redirect()->route('revenues.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('revenues.show', compact('revenue'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('revenues.edit', compact('revenue'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'description' => 'required',
            'revenue_date' => 'required|date'
        ]);

        $revenue->update($request->all());
        return redirect()->route('revenues.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $revenue->delete();
        return redirect()->route('revenues.index');
    }
}
