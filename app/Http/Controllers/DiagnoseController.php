<?php

namespace App\Http\Controllers;

use App\Models\Diagnose;
use App\Http\Requests\StoreDiagnoseRequest;
use App\Http\Requests\UpdateDiagnoseRequest;

class DiagnoseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreDiagnoseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Diagnose $diagnose)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diagnose $diagnose)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDiagnoseRequest $request, Diagnose $diagnose)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diagnose $diagnose)
    {
        //
    }
}
