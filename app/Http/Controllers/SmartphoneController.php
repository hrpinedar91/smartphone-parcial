<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Smartphone;

class SmartphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('smartphones.index', ['smartphones' => Smartphone::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('smartphones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $smartphone = new Smartphone(request()->all());
        $smartphone->save();
        return redirect()->route('smartphones.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Smartphone $smartphone)
    {
        //
        return view('smartphones.show', ['smartphone' => $smartphone]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Smartphone $smartphone)
    {
        //
        return view('smartphones.edit', ['smartphone' => $smartphone]);
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
    public function destroy(Smartphone $smartphone)
    {
        //
        $smartphone->delete();
        return redirect()->route('smartphones.index');
    }
}
