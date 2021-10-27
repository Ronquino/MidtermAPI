<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class schedule
 * @package App\Models
 * @version October 26, 2021, 7:12 pm UTC
 *
 * @property string $Fastcat
 * @property string $Time
 * @property string $Date
 */
class schedule extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'schedule';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Fastcat',
        'Time',
        'Date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Fastcat' => 'string',
        'Time' => 'string',
        'Date' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Fastcat' => 'nullable|string|max:255',
        'Time' => 'nullable|string|max:255',
        'Date' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
