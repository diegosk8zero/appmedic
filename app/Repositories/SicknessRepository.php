<?php

namespace App\Repositories;

use App\Models\Sickness;
use App\Repositories\Contracts\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class SicknessRepository extends BaseRepository implements BaseRepositoryInterface
{
    public function __construct(Sickness $model)
    {
        parent::__construct($model);
    }

    /**
     * Retorna todas as doencas ordenadas por data de criação.
     */
    public function all()
    {
        return $this->model->orderBy('created_at', 'desc')->get();
    }

    /**
     * Busca doencas pelo nome.
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
     * Atualiza os dados da doencas pelo ID.
     */
    public function update($id, array $data)
    {
        
        return $this->model->update($id, $data);
    }

    /**
     * Deleta uma doencas pelo ID.
     */
    public function deleteClinic($id)
    {
        return $this->model->delete($id);
    }
}
