<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormField extends Model
{
    // use HasFactory;
    protected $table = 'FormField';

    protected $fillable = [
        'name',
        'label',
        'type',
        'order',
        'placeholder',
        'isTextArea',
        'isCustomField',
    ];

    public static function getFields()
    {
        return self::orderBy('order')->get();
    }

    public static function createField($data)
    {
        self::where('order', '>=', $data['order'])->increment('order');
        $data['isCustomField'] = 1;
        return self::create($data);
    }
}
