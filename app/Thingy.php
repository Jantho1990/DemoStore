<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thingy extends Model
{
    protected $fillable = [
        'name',
        'type',
        'entity_id',
        'integer_value',
        'unsigned_integer_value',
        'string_value',
        'text_value',
        'long_text_value',
        'boolean_value',
        'date_value',
        'time_value',
        'date_time_value',
        'decimal_value',
        'float_value',
        'double_value',
        'json_value',
        'enum_value',
        'increment_value'
    ];

    public function entities()
    {
        return $this->belongsTo('App\Entity');
    }
}
