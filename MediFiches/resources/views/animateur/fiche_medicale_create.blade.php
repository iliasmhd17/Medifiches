<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créez une fiche médicale') }}
        </h2>
    </x-slot>

    <div style="background-image: url('{{ asset('images/medi-banner.png') }}'); background-size: cover; background-position: center; height: 100vh; position: relative; background-attachment: fixed; margin: 0;">
        <div class="container" style="padding-top: 5rem;">
            <form action="{{ route('create_record') }}" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="bg-white p-4">

                            <x-validation-errors class="mb-4" />
                            @csrf

                            @php
                                $halfCount = count($formFields) / 2;
                            @endphp

                            @foreach($formFields as $index => $field)
                                @if ($field['name'] === 'email')
                                    <div class="mb-3">
                                        <x-label for="{{ $field['name'] }}" value="{{ __($field['label']) }}" />
                                        <x-input id="{{ $field['name'] }}" class="block mt-1 w-full" type="{{ $field['type'] }}" name="{{ $field['name'] }}" :value="old(''.$field['name'], Auth::user()->email)" readonly/>
                                    </div>
                                @elseif($index < $halfCount)
                                    <div class="mb-3">
                                        <x-label for="{{ $field['name'] }}" value="{{ __($field['label']) }}" />
                                        @if($field['type'] === 'checkbox')
                                            <x-input id="{{ $field['name'] }}" class="block mt-1" type="{{ $field['type'] }}" name="{{ $field['name'] }}" :value="old(''.$field['name'], $field['type'] === 'checkbox' ? '1' : '0')"/>
                                        @else
                                            <x-input id="{{ $field['name'] }}" class="block mt-1 w-full" type="{{ $field['type'] }}" name="{{ $field['name'] }}" :value="old(''.$field['name'])" required autofocus autocomplete="{{ $field['name'] }}" placeholder="{{ __($field['placeholder'] ?? '') }}" />
                                        @endif
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-white p-4">
                            @foreach($formFields as $index => $field)
                                @if($index >= $halfCount)
                                    <div class="mb-3">
                                        <x-label for="{{ $field['name'] }}" value="{{ __($field['label']) }}" />
                                        @if($field['type'] === 'checkbox')
                                            <x-input id="{{ $field['name'] }}" class="block mt-1" type="{{ $field['type'] }}" name="{{ $field['name'] }}" :value="old(''.$field['name'])"/>
                                        @else
                                            <x-input id="{{ $field['name'] }}" class="block mt-1 w-full" type="{{ $field['type'] }}" name="{{ $field['name'] }}" :value="old(''.$field['name'])" required autofocus autocomplete="{{ $field['name'] }}" placeholder="{{ __($field['placeholder'] ?? '') }}" />
                                        @endif
                                    </div>
                                @endif
                            @endforeach
                            <button class="btn btn-outline-primary" type="submit">{{ __('Envoyer') }}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
