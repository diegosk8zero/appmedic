<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Http\Requests\StoreClinicRequest;
use App\Http\Requests\UpdateClinicRequest;

class ClinicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('clinics.index', ['clinics' => Clinic::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clinics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClinicRequest $request)
    {
        $clinic = Clinic::create(
                [
                    'name' => $request->input('name'), 
                    'email' => $request->input('email'), 
                    'phone' => $request->input('phone'), 
                    'phone_2' => $request->input('phone_2'), 
                    'adress' => $request->input('adress'),	
                    'description' => $request->input('description')
                ]
            );
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Clinic $clinic)
    {

        return view('clinics.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clinic $clinic)
    {
        
        return view('clinics.edit', ['clinic' => $clinic]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClinicRequest $request, Clinic $clinic)
    {
        //
        $request->all();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clinic $clinic)
    {
        //
    }
}
