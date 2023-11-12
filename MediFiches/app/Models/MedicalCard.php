<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class MedicalCard extends Model
{
    protected $primaryKey = 'national_number';
    protected $fillable = [
        'national_number',
        'first_name',
        'last_name',
        'email',
        'can_participate',
        'medical_record',
        'tetanos_protected',
        'allergies',
        'allergies_consequences',
        'medecins',
        'quantity_medecine',
        'time_medecine',
        'birth_date',
        'additional_infos',
        'street',
        'no',
        'postal_code',
        'country',
        'city',
    ];
    protected $casts = [
        'can_participate' => 'boolean',
        'tetanos_protected' => 'boolean',
    ];

    public static function createMedicalCard($data)
    {
        $medicalCard = new self;
        $medicalCard->national_number = $data['national_number'];
        $medicalCard->fill($data);
        $medicalCard->save();
        return $medicalCard;
        //return self::create($data);
    }

    public static function updateMedicalCard($id, $data)
    {
        $medicalCard = self::find($id);
        if ($medicalCard) {
            $medicalCard->update($data);
            return $medicalCard;
        }
        return null;
    }

    public static function deleteMedicalCard($id)
    {
        $medicalCard = self::find($id);
        if ($medicalCard) {
            $medicalCard->delete();
            return true;
        }
        return false;
    }

    public static function getAllMedicalCards()
    {
        return self::all();
    }

    public static function getMedicalCardById($id)
    {
        return self::find($id);
    }
}
