<?php

namespace App\Repositories;

use App\Models\Medic;
use App\Repositories\Interfaces\MedicRepositoryInterface;
use Illuminate\Support\Collection;

class MedicRepository implements MedicRepositoryInterface
{
    public function all(): Collection
    {
        return Medic::all();
    }

    public function find(int $id): ?Medic
    {
        return Medic::find($id);
    }

    public function create(array $data): Medic
    {
        dd($data);
        return Medic::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $medic = Medic::find($id);
        
        if (!$medic) {
            return false;
        }
        return $medic->update($data);
    }

    public function delete(int $id): bool
    {
        $medic = Medic::find($id);
        if (!$medic) {
            return false;
        }
        return $medic->delete();
    }
}
