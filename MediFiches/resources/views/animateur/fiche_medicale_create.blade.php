<x-app-layout>
    <div class="postition-relative">
        <div class="container mt-5 position-absolute bg-white" id="consult">
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Créez une fiche médicale') }}
                </h2>
            </x-slot>
            
            <x-validation-errors class="mb-4" />
            <form action="{{ route('create.record') }}" method="post">
                @csrf
                <div>
                    <x-label for="national_number" value="{{ __('No. de registre nationale') }}" />
                    <x-input id="national_number" class="block mt-1 w-full" type="text" name="national_number" :value="old('national_number')" required autofocus autocomplete="national_number" />
                </div>
                <div>
                    <x-label for="last_name" value="{{ __('Nom') }}" />
                    <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autocomplete="last_name" />
                </div>
                <div>
                    <x-label for="first_name" value="{{ __('Prénom') }}" />
                    <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autocomplete="first_name" />
                </div>
                <div>
                    <x-label for="birth_date" value="{{ __('Date de naissance') }}" />
                    <x-input id="birth_date" class="block mt-1 w-full" type="date" name="birth_date" :value="old('birth_date')" required autocomplete="birth_date" />
                </div>
                <div>
                    <x-label for="can_participer" value="{{ __('Peut participer') }}" />
                    <x-input id="can_participer" class="block mt-1 w-full" type="checkbox" name="can_participate" />
                </div>
                <div>
                    <x-label for="medical_record" value="{{ __('Médecin traitant') }}" />
                    <x-input id="medical_record" class="block mt-1 w-full" type="text" name="medical_record" :value="old('medical_record')" placeholder="Entrez le médecin..." />
                </div>
                <div>
                    <x-label for="tetanos" value="{{ __('Vaccin du tétanos fait ?') }}" />
                    <x-input id="tetanos" class="block mt-1 w-full" type="checkbox" name="tetanos_protected" />
                </div>
                <div>
                    <x-label for="Email" value="{{ __('Email') }}" />
                    <x-input id="Email" class="block mt-1 w-full" type="email" name="Email" :value="old('Email')" placeholder="Entrez un email..." />
                </div>
                <div>
                    <x-label for="medic" value="{{ __('Médicaments') }}" />
                    <x-input id="medic" class="block mt-1 w-full" type="text" name="medecins" :value="old('medecine')" placeholder="Entrez le(s) médicament(s)..." />
                </div>
                <div>
                    <x-label for="qMedic" value="{{ __('Quantité de médicaments') }}" />
                    <x-input id="qMedic" class="block mt-1 w-full" type="text" name="quantity_medecine" :value="old('quantity_medecine')" placeholder="Entrez la / les quantité(s)..." />
                </div>
                <div>
                    <x-label for="fMedic" value="{{ __('Indiquez la fréquence') }}" />
                    <x-input id="fMedic" class="block mt-1 w-full" type="text" name="time_medecine" :value="old('time_medecine')" placeholder="Entrez la / les fréquence(s)..." />
                </div>
                <div>
                    <x-label for="allergies" value="{{ __('Allergies') }}" />
                    <x-input id="allergies" class="block mt-1 w-full" type="text" name="allergies" :value="old('allergies')" placeholder="Entrez les allergies..." />
                </div>
                <div>
                    <x-label for="consequences" value="{{ __('Indiquez les conséquences') }}" />
                    <x-input id="consequences" class="block mt-1 w-full" type="text" name="allergies_consequences" :value="old('allergies_consequences')" placeholder="Entrez les conséquences..." />
                </div>
                <div>
                    <x-label for="street" value="{{ __('Rue') }}" />
                    <x-input id="street" class="block mt-1 w-full" type="text" name="street" :value="old('street')" placeholder="Entrez votre rue" />
                </div>
                <div>
                    <x-label for="no" value="{{ __('Numéro') }}" />
                    <x-input id="no" class="block mt-1 w-full" type="number" name="no" :value="old('no')" placeholder="Entrez votre numéro" />
                </div>
                <div>
                    <x-label for="mailbox" value="{{ __('Boite') }}" />
                    <x-input id="mailbox" class="block mt-1 w-full" type="number" name="mailbox" :value="old('mailbox')" placeholder="Entrez votre boite" />
                </div>
                <div>
                    <x-label for="country" value="{{ __('Pays') }}" />
                    <x-input id="country" class="block mt-1 w-full" type="text" name="country" :value="old('country')" placeholder="Entrez votre pays" />
                </div>
                <div>
                    <x-label for="city" value="{{ __('Ville') }}" />
                    <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" placeholder="Entrez votre ville" />
                </div>
                <div>
                    <!-- <x-label for="city" value="{{ __('Ville') }}" /> -->
                    <x-input id="city" class="block mt-1 w-full" type="text" name="additional_infos" placeholder="Entrez votre ville" />
                </div>
                <button class="btn btn-primary" type="submit">{{ __('Envoyer') }}</button>
            </form>
        </div>
    </div>
</x-app-layout>
