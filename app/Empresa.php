<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 *
 * @property $id
 * @property $Nit
 * @property $Nombre
 * @property $Telefono
 * @property $Email
 * @property $Direccion
 * @property $Logos
 *
 * @property Caja[] $cajas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empresa extends Model
{
    
    static $rules = [
		'Nit' => 'required',
		'Nombre' => 'required',
		'Telefono' => 'required',
		'Email' => 'required',
		'Direccion' => 'required',
		'Logos' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nit','Nombre','Telefono','Email','Direccion','Logos'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cajas()
    {
        return $this->hasMany('App\Caja', 'id_empresa', 'id');
    }
    

}
