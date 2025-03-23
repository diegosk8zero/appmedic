<?php

namespace App\Repositories\Interfaces;

use App\Models\Medic;
use Illuminate\Support\Collection;

interface MedicRepositoryInterface
{
    public function all(): Collection;
    public function find(int $id): ?Medic;
    public function create(array $data): Medic;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
}
