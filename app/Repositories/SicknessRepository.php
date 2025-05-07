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
        dd($data);
        return $this->model->create($data);
    }

    /**
     * Atualiza os dados da doencas pelo ID.
     */
    public function update($id, array $data)
    {
        $sickness = $this->model->find($id);
        return $sickness->update($data);
    }

    /**
     * Deleta uma doencas pelo ID.
     */
    public function delete($id)
    {
        $sickness = $this->model->find($id);
        return $sickness->delete($id);
    }
}
