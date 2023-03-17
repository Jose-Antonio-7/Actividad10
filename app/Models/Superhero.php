<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Superhero
 *
 * @property $id
 * @property $realname
 * @property $superheroname
 * @property $photo
 * @property $information
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Superhero extends Model
{

    use SoftDeletes;
    
    static $rules = [
		'realname' => 'required',
		'superheroname' => 'required',
		'photo' => 'required',
		'information' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['realname','superheroname','photo','information'];



}
