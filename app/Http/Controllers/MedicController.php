<?php

namespace App\Http\Controllers;

use App\Models\Medic;
use App\Models\Clinic;
use App\Models\Sickness;
use App\Models\Treatment;
use App\Http\Requests\StoreMedicRequest;
use App\Http\Requests\UpdateMedicRequest;
use App\Repositories\Interfaces\MedicRepositoryInterface;

class MedicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //repository for medics
    private $medicRepository;

    public function __construct(MedicRepositoryInterface $medicRepository)
    {
        $this->medicRepository = $medicRepository;
    }


    public function index()
    {
        $medics = $this->medicRepository->all();
        return view('medics.index', ['medics' => $medics]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('medics.create', 
                        [
                            'clinics' => Clinic::all(),

                        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMedicRequest $request)
    {
     
        if (Medic::create($request->all())) {
            return redirect()->route('medic.index')->with('success', 'Medico cadastrado com sucesso!');
        }else{
            return redirect()->route('medic.index')->with('error', 'Error por favor intentar novamente.');
        }    
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Medic $medic)
    {
        return view('medics.show', ['medic' => $medic]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medic $medic)
    {
        return view('medics.edit', ['medic' => $medic, 'clinics' => Clinic::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMedicRequest $request, Medic $medic)
    {
            //$this->medicRepository->update($medic->id, $request->all());

            

            

            $medic->name = $request->name;
            $medic->email = $request->email;
            $medic->phone = $request->phone;
            $medic->phone_2 = $request->phone_2;
            $medic->certification = $request->certification;
            $medic->description = $request->description;
            $medic->status = $request->status;

            //dd($medic, $request->all(), $request->name);

            if ($medic->save()) {
                return redirect()->route('medic.index')->with('success_update', 'Medico alterado com sucesso!');
            }else{
                return redirect()->route('medic.index')->with('error_update', 'Error por favor intentar novamente.');
            }

            
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medic $medic)
    {
        //
    }
}
