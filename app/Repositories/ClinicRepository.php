<?php

namespace App\Repositories;

use App\Models\Clinic;
use App\Repositories\Contracts\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class ClinicRepository extends BaseRepository implements BaseRepositoryInterface
{
    public function __construct(Clinic $model)
    {
        parent::__construct($model);
    }

    /**
     * Retorna todas as clínicas ordenadas por data de criação.
     */
    public function all()
    {
        return $this->model->orderBy('created_at', 'desc')->get();
    }

    /**
     * Busca clínica pelo nome.
     */
    public function find($id)
    {
        return $this->model->where('id', $id)->get();
    }

    /**
     * Criando uma clinica.
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * Atualiza os dados da clínica pelo ID.
     */
    public function update($id, array $data)
    {
        
        return $this->model->update($id, $data);
    }

    /**
     * Deleta uma clínica pelo ID.
     */
    public function deleteClinic($id)
    {
        return $this->model->delete($id);
    }
}
