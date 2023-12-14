<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdditionalField extends Model
{
    protected $table = 'additional_field';
    protected $fillable = [
        'medical_card',
        'field_name',
        'field_value',
    ];

    public static function getFields($medical_card)
    {
        $fields = DB::table('additional_field')
        ->where('medical_card', $medical_card)
        ->get(['field_name', 'field_value']);

        return $fields;
    }
    public static function getField($medical_card, $field_name)
    {
        return  self::where('medical_card', $medical_card)
        ->where('field_name', $field_name)->first(['field_name', 'field_value']);
    }

    public static function insert($data)
    {
        return self::create($data);
    }

    public static function deleteField($medical_card, $field_name)
    {
        $field = self::where('medical_card', $medical_card)
            ::where('field_name', $field_name)->first();

        if ($field) {
            $field->delete();
            return true;
        }
        return false;
    }
    public static function deleteAll($medical_card)
    {
        $fields = self::getFields($medical_card);
        foreach($fields as $field)
        {
            $field->delete();
        }
    }
    public static function updateField($medical_card, $field_name, $data)
    {
        $field = self::getField($medical_card, $field_name);

        if($field)
        {
            $field->update($data);
            return true;
        }
        return false;
    }
}
