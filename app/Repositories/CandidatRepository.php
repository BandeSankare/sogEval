<?php

namespace App\Repositories;

use App\Models\Candidat;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CandidatRepository
 * @package App\Repositories
 * @version July 16, 2018, 2:17 pm UTC
 *
 * @method Candidat findWithoutFail($id, $columns = ['*'])
 * @method Candidat find($id, $columns = ['*'])
 * @method Candidat first($columns = ['*'])
*/
class CandidatRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nomComplet',
        'date_naiss',
        'adresse',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Candidat::class;
    }
}
