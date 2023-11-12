<?php
namespace App\Forms;

class RecordForm
{
    public static function rules()
    {
        return [
            'national_number' => ['required', 'string', 'regex:/^[0-9]{11}$/', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'birth_date' => ['required', 'date'],
            'can_participate' => ['boolean'],
            'medical_record' => ['nullable', 'string', 'max:255'],
            'tetanos_protected' => ['boolean'],
            'email' => ['required', 'email', 'max:255'],
            'medecins' => ['nullable', 'string', 'max:255'],
            'quantity_medecine' => ['nullable', 'string', 'max:255'],
            'time_medecine' => ['nullable', 'string', 'max:255'],
            'allergies' => ['nullable', 'string', 'max:255'],
            'allergies_consequences' => ['nullable', 'string', 'max:255'],
            'street' => ['required', 'string', 'max:255'],
            'no' => ['required', 'string'],
            'postal_code' => ['required', 'int'],
            'country' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'additional_infos' => ['nullable', 'string', 'max:255'],
        ];
    }

    public static function getFormFields(){
        $formFields = [
            ['name' => 'national_number', 'label' => 'No. de registre nationale', 'type' => 'text', 'required' => true],
            ['name' => 'last_name', 'label' => 'Nom', 'type' => 'text', 'required' => true],
            ['name' => 'first_name', 'label' => 'Prénom', 'type' => 'text', 'required' => true],
            ['name' => 'birth_date', 'label' => 'Date de naissance', 'type' => 'date', 'required' => true],
            ['name' => 'can_participate', 'label' => 'Peut participer', 'type' => 'checkbox', 'required' => false],
            ['name' => 'medical_record', 'label' => 'Médecin traitant', 'type' => 'text', 'required' => false, 'placeholder' => 'Entrez le médecin...'],
            ['name' => 'tetanos_protected', 'label' => 'Vaccin du tétanos fait ?', 'type' => 'checkbox', 'required' => false],
            ['name' => 'email', 'label' => 'Email', 'type' => 'email', 'required' => true, 'placeholder' => 'Entrez un email...'],
            ['name' => 'medecins', 'label' => 'Médicaments', 'type' => 'text', 'required' => false, 'placeholder' => 'Entrez le(s) médicament(s)...'],
            ['name' => 'quantity_medecine', 'label' => 'Quantité de médicaments', 'type' => 'text', 'required' => false, 'placeholder' => 'Entrez la / les quantité(s)...'],
            ['name' => 'time_medecine', 'label' => 'Indiquez la fréquence', 'type' => 'time', 'required' => false, 'placeholder' => 'Entrez la / les fréquence(s)...'],
            ['name' => 'allergies', 'label' => 'Allergies', 'type' => 'text', 'required' => false, 'placeholder' => 'Entrez les allergies...'],
            ['name' => 'allergies_consequences', 'label' => 'Indiquez les conséquences', 'type' => 'text', 'required' => false, 'placeholder' => 'Entrez les conséquences...'],
            ['name' => 'street', 'label' => 'Rue', 'type' => 'text', 'required' => true, 'placeholder' => 'Entrez votre rue'],
            ['name' => 'no', 'label' => 'Numéro', 'type' => 'text', 'required' => true, 'placeholder' => 'Entrez votre numéro'],
            ['name' => 'postal_code', 'label' => 'Code Postal', 'type' => 'number', 'required' => true, 'placeholder' => 'Entrez votre code postal'],
            ['name' => 'country', 'label' => 'Pays', 'type' => 'text', 'required' => true, 'placeholder' => 'Entrez votre pays'],
            ['name' => 'city', 'label' => 'Ville', 'type' => 'text', 'required' => true, 'placeholder' => 'Entrez votre ville'],
            ['name' => 'additional_infos', 'label' => 'Informations additionnelles', 'type' => 'text', 'required' => false, 'placeholder' => 'Entrez des informations supplémentaires'],
        ];
        return $formFields;        
    }
}

?>