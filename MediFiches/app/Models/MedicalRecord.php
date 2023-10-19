<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    use HasFactory;

    /*Precise ce model utilise quel base de donné
    Donc quand on créé une instance de ce model, cela créé une ligne dans la table*/
    protected $table = 'medical_cards';
    
    //sinon laravel cherche a inserer updated_at ... qui ne sont pas dans la table
    public $timestamps = false;

    public static function getMedicalRecord($id)
    {
        return self::where('national_number', $id)->first();
    }

    public static function deleteMedicalRecord($id)
    {
        return self::where('national_number', $id)->delete();
    }

    public static function addMedicalRecord($data)
    {
        // Créé une nouvelle instance du modèle MedicalRecod
        $medicalRecord = new self;

        $medicalRecord->national_number = $data['national_number'];
        $medicalRecord->can_participate = $data['can_participate'];
        $medicalRecord->medical_record = $data['medical_record'];
        $medicalRecord->tetanos_protected = $data['tetanos_protected'];
        $medicalRecord->allergies = $data['allergies'];
        $medicalRecord->allergies_consequences = $data['allergies_consequences'];
        $medicalRecord->medecins = $data['medecins'];
        $medicalRecord->quantity_medecine = $data['quantity_medecine'];
        $medicalRecord->time_medecine = $data['time_medecine'];
        $medicalRecord->birth_date = $data['birth_date'];
        $medicalRecord->additional_infos = $data['additional_infos'];
        $medicalRecord->street = $data['street'];
        $medicalRecord->no = $data['no'];
        $medicalRecord->mailbox = $data['mailbox'];
        $medicalRecord->city = $data['city'];
        $medicalRecord->country = $data['country'];

        // Enregistre le nouveau dossier médical dans la base de données
        $medicalRecord->save();


        return $medicalRecord;
    }

    //$data est un tableau clé valeur contenant les atttribut à changer pour une ligne dans la table
    public static function updateMedicalRecord($id, $data)
    {
        return self::where('national_number', $id)->update($data);
    }
}

