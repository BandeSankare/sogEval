<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Candidat
 * @package App\Models
 * @version July 16, 2018, 2:17 pm UTC
 *
 * @property string nomComplet
 * @property date date_naiss
 * @property string adresse
 * @property string description
 */
class Candidat extends Model
{
    use SoftDeletes;

    public $table = 'candidat';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nomComplet',
        'date_naiss',
        'adresse',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nomComplet' => 'string',
        'date_naiss' => 'date',
        'adresse' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
