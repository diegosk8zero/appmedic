<?php

namespace App\Repositories;

use App\Models\Treatment;
use App\Repositories\Contracts\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class TreatmentRepository extends BaseRepository implements BaseRepositoryInterface
{
    public function __construct(Treatment $model)
    {
        parent::__construct($model);
    }

    /**
     * Retorna todas as tratamentos ordenadas por data de criação.
     */
    public function all()
    {
        return $this->model->orderBy('created_at', 'desc')->get();
    }

    /**
     * Busca tratamentos pelo nome.
     */
    public function find($id)
    {
        return $this->model->where('id', $id)->get();
    }

    /**
     * Criando um tratamento.
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * Atualiza os dados do tratamento pelo ID.
     */
    public function update($id, array $data)
    {
        
        return $this->model->update($id, $data);
    }

    /**
     * Deleta uma tratamentos pelo ID.
     */
    public function deleteClinic($id)
    {
        return $this->model->delete($id);
    }
}
