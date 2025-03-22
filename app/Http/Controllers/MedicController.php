<?php

namespace App\Http\Controllers;

use App\Models\Medic;
use App\Models\Clinic;
use App\Http\Requests\StoreMedicRequest;
use App\Http\Requests\UpdateMedicRequest;

class MedicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('medics.index', ['medics' => Medic::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('medics.create', ['clinics' => Clinic::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMedicRequest $request)
    {
        //
        $medic = Medic::create([

            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'phone_2' => $request->input('phone_2'),
            'certification' => $request->input('certification'),
            'birth' => $request->input('birth'),
            'description' => $request->input('description'),
            'clinic_id' => $request->input('clinic_id')

            ]);

        return redirect()->route('medic.index')->with('success_update', 'Medico cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Medic $medic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medic $medic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMedicRequest $request, Medic $medic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medic $medic)
    {
        //
    }
}
