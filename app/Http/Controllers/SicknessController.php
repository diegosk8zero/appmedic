<?php

namespace App\Http\Controllers;

use App\Models\Sickness;
use App\Http\Requests\StoreSicknessRequest;
use App\Http\Requests\UpdateSicknessRequest;
use App\Repositories\SicknessRepository;

class SicknessController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $sicknessRepository;

    public function __construct(SicknessRepository $sicknessRepository)
    {
        $this->sicknessRepository = $sicknessRepository;
    }


    public function index()
    {
        $sicknesses = $this->sicknessRepository->all();
        return view('sicknesses.index', ['sicknesses' => $sicknesses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('sicknesses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSicknessRequest $request)
    {
        //
        $data = $request->all();
        $this->sicknessRepository->create($data);
        return redirect()->route('sickness.index')->with('success', 'Enfermidad cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sickness $sickness)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sickness $sickness)
    {
        //
        return view('sicknesses.edit', ['sickness' => $sickness]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSicknessRequest $request, Sickness $sickness)
    {
        //
        $data = $request->all();
        $this->sicknessRepository->update( $sickness->id, $data);
        return redirect()->route('sickness.index')->with('success', 'Alterado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sickness $sickness)
    {
        if ($this->sicknessRepository->delete( $sickness->id)) {
            return redirect()->route('sickness.index')->with('success_delete', 'Deletado com sucesso');
        }
        
    }
}
