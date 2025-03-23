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
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSicknessRequest $request)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSicknessRequest $request, Sickness $sickness)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sickness $sickness)
    {
        //
    }
}
