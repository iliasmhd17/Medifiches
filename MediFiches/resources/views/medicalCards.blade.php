<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Liste de toutes les fiches médicales') }}
            </h2>
            <h3 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Total : ') . $nbFiches }}
            </h3>
        </div>
    </x-slot>
        <div class="container-fluid mt-5 position-absolute text-white d-flex align-items-center justify-content-center" id="consult">
            <div class="row row-cols-1 row-cols-md-3 w-100">
                @foreach ($data as $row)
                <div class="col-md-4 mb-4">
                    <div class="card border-secondary h-100 w-100">
                        <div class="card-header" style="color: #000; font-size: 1.25rem; font-weight: bold;">
                            {{ $row->first_name }} {{ $row->last_name }}
                        </div>
                        <div class="card-body text-secondary">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="card-text mb-2 text-left">Numéro-National:</p>
                                    <p class="card-text mb-2 text-left">Médecin:</p>
                                    <p class="card-text mb-2 text-left">Allergie:</p>
                                    <p class="card-text mb-2 text-left">Consequences:</p>
                                    <p class="card-text mb-2 text-left">Dernière mise à jour:</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="card-text mb-2">{{ $row->national_number }}</p>
                                    <p class="card-text mb-2">{{ $row->medical_record }}</p>
                                    <p class="card-text mb-2">{{ $row->allergies }}</p>
                                    <p class="card-text mb-2">{{ $row->allergies_consequences }}</p>
                                    <p class="card-text mb-2">{{ Carbon\Carbon::parse($row->updated_at)->isoFormat('D MMMM YYYY', 'fr')  }}</p>
                                </div>
                            </div>
                            <a href="/fiches/details/{{ $row->national_number }}" class="btn btn-secondary">Détails</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

