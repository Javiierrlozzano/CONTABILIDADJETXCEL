<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Codigo
 *
 * @property $id
 * @property $Codigo
 * @property $Descripcion
 * @property $Estado
 *
 * @property Movimiento[] $movimientos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Codigo extends Model
{
    
    static $rules = [
		'Codigo' => 'required',
		'Descripcion' => 'required',
		'Estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Codigo','Descripcion','Estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movimientos()
    {
        return $this->hasMany('App\Movimiento', 'id_Codigos', 'id');
    }
    

}
