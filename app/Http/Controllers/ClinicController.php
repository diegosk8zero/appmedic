<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Http\Requests\StoreClinicRequest;
use App\Http\Requests\UpdateClinicRequest;
use App\Repositories\ClinicRepository;

class ClinicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $clinicRepository;

    public function __construct(ClinicRepository $clinicRepository)
    {
        $this->clinicRepository = $clinicRepository;
    }


    public function index()
    {
        $clinics = $this->clinicRepository->all();
        return view('clinics.index', ['clinics' => $clinics]);
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

        $data = $request->all();

        $this->clinicRepository->create($data);
        return redirect()->route('clinic.index')->with('success', 'Clínica cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Clinic $clinic)
    {
       
        return view('clinics.show', ['clinic' => $clinic]);
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
        $this->clinicRepository->update($clinic->id, $request->all());
        return redirect()->route('clinic.index')->with('success_update', 'Clínica atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clinic $clinic)
    {
        //
    }
}
