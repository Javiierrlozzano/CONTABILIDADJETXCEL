<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Movimiento
 *
 * @property $id
 * @property $id_Caja
 * @property $id_Codigos
 * @property $id_Usuario
 * @property $Tipo
 * @property $Valor
 *
 * @property Caja $caja
 * @property Codigo $codigo
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Movimiento extends Model
{
    
    static $rules = [
		'id_Caja' => 'required',
		'id_Codigos' => 'required',
		'id_Usuario' => 'required',
		'Tipo' => 'required',
		'Valor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_Caja','id_Codigos','id_Usuario','Tipo','Valor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function caja()
    {
        return $this->hasOne('App\Caja', 'id', 'id_Caja');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function codigo()
    {
        return $this->hasOne('App\Codigo', 'id', 'id_Codigos');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Usuario', 'id', 'id_Usuario');
    }
    

}
