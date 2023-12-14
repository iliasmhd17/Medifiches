<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Champs Customisés') }}
        </h2>
    </x-slot>

    <div class="py-12 flex items-start justify-center h-screen overflow-hidden bg-gray-100">
        <div class="flex w-full justify-center absolute b-0 overflow-y-scroll">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lgoverflow-y-scroll h-3/5">
                <x-button id="modal_launch_btn">Ajouter Un Champ</x-button>
                <!-- The Modal -->
                <div id="form_modal" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="modal_close_btn">&times;</span>
                        <form action="{{route('add_custom_field')}}" method="POST">
                            @csrf
                            <div>
                                <x-label for="name" value="{{ __('Nom du champ') }}" />
                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            </div>
                            <div>
                                <x-label for="label" value="{{ __('Label du champ') }}" />
                                <x-input id="label" class="block mt-1 w-full" type="text" name="label" :value="old('label')" required autocomplete="label" />
                            </div>
                            <div>
                                <x-label for="type" value="{{ __('Type du champ') }}" />
                                <select name="type" id="type">
                                    @foreach ($types as $type)
                                    <option value="{{$type}}" selected>{{$type}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <x-label for="order" value="{{ __('Ordre') }}" />
                                <x-input id="order" class="block mt-1 w-full" type="number" name="order" :value="old('order')" required value="{{$default_order}}" />
                            </div>
                            <div>
                                <x-label for="placeholder" value="{{ __('Placeholder') }}" />
                                <x-input id="placeholder" class="block mt-1 w-full" type="text" name="text" :value="old('text')" required autocomplete="placeholder" />
                            </div>
                            <div class="block mt-4">
                                <label for="isTextArea" class="flex items-center">
                                    <x-checkbox id="isTextArea" name="isTextArea" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __('TextArea ?') }}</span>
                                </label>
                            </div>
                            <x-button class="ml-4">
                                {{ __('Creer') }}
                            </x-button>
                        </form>
                    </div>

                </div>

                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Nom</th>
                            <th scope="col" class="px-6 py-3">Label</th>
                            <th scope="col" class="px-6 py-3">Type</th>
                            <th scope="col" class="px-6 py-3">Ordre</th>
                            <th scope="col" class="px-6 py-3">Placeholder</th>
                            <th scope="col" class="px-6 py-3">TextArea ?</th>
                            <th scope="col" class="px-6 py-3">Actions</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($fields as $field)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                {{-- @foreach ($field as $field_property)
                                    @if ($field_property == 0)
                                        <td class="px-6 py-4">non</td>
                                    @elseif($field_property == 1)
                                        <td class="px-6 py-4">oui</td>
                                    @else
                                        <td class="px-6 py-4">{{ $field_property }}</td>
                                    @endif
                                @endforeach --}}
                                <td class="px-6 py-4">{{ $field['name'] }}</td>
                                <td class="px-6 py-4">{{ $field['label'] }}</td>
                                <td class="px-6 py-4">{{ $field['type'] }}</td>
                                <td class="px-6 py-4">{{ $field['order'] }}</td>
                                <td class="px-6 py-4">{{ $field['placeholder'] }}</td>
                                <td class="px-6 py-4">{{ $field['isTextArea'] ? 'oui' : 'non' }}</td>
                                <td class="flex align-center">
                                    <div>
                                        <form action="" method="post">
                                            <input type="hidden" name="name" value="{{$field['name']}}">
                                            <x-button class="ml-4">
                                                <i class="fa fa-angle-up"></i>
                                            </x-button>
                                        </form>
                                        <form action="" method="post">
                                            <input type="hidden" name="name" value="{{$field['name']}}">
                                            <x-button class="ml-4">
                                                <i class="fa fa-angle-down"></i>
                                            </x-button>
                                        </form>
                                    </div>
                                    <div>
                                        @if ($field['isCustomField'])
                                        <form action="" method="post">
                                            <input type="hidden" name="name" value="{{$field['name']}}">
                                            <x-button class="ml-4">
                                                <i class="fa fa-trash" style="color: #ff0000;"></i>
                                            </x-button>
                                        </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script>
        // Get the modal
        var modal = document.getElementById("form_modal");

        // Get the button that opens the modal
        var btn = document.getElementById("modal_launch_btn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("modal_close_btn")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .modal_close_btn {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .modal_close_btn:hover,
        .modal_close_btn:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</x-app-layout>
