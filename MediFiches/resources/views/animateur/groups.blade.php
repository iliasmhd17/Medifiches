<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion des groupes') }}
        </h2>
    </x-slot>

    <div
        style="background-image: url('{{ asset('images/medi-banner.png') }}'); background-size: cover; background-position: center; height: 100vh; position: relative; background-attachment: fixed; margin: 0;">
        <div class="container" style="padding-top: 5rem; display: flex; justify-content: center; align-items: center;">

            <!-- Form Column -->
            <div class="col-md-5">
                <form action="{{ route('create_group') }}" method="post">
                    @csrf
                    <div class="bg-white p-4 rounded shadow">
                        <h3 class="font-bold mb-3 text-center">Ajouter un Groupe</h3>
                        <div class="mb-3">
                            <x-label for="name" value="Nom du groupe" />
                            <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" />
                        </div>
                        <div class="text-center">
                            <button class="btn btn-outline-primary" type="submit">{{ __('Ajouter le groupe') }}</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-1"></div>

            <div class="col-md-5 overflow-auto" style="background-color: white; padding: 1rem; height: 80vh; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <h3 class="font-bold mb-3 text-center">Liste des Groupes</h3>
    <ul class="list-group">
        @forelse ($groups as $group)
        <li class="list-group-item d-flex justify-content-between">
            <span class="groupName">{{ $group->name }}</span>
            <div class="editMode" hidden>
                <form action="{{ route('edit_group') }}" method="post" class="editGroupForm">
                    @csrf
                    <input type="hidden" name="originalName" value="{{ $group->name }}">
                    <input type="text" class="form-control editInput" name="newName" value="{{ $group->name }}">
                    <x-button class="save">Sauvegarder</x-button>
                    <x-button class="cancel">Annuler</x-button>
                </form>
            </div>
            <div class="edit">
                <form action="{{ route('delete_group') }}" method="post" class="deleteGroupForm">
                    @csrf
                    <input type="hidden" name="originalName" value="{{ $group->name }}">
                    <x-button type="button" class="editBtn">Modifier</x-button>
                    <x-button type="button" class="delete">Supprimer</x-button>
                </form>
            </div>
        </li>
        @empty
        <li class="list-group-item text-center">Aucun groupe</li>
        @endforelse
    </ul>
</div>

<script>
    $(document).ready(() => {
        $(".editBtn").on('click', function () {
            const listItem = $(this).closest('li');
            listItem.find('.groupName').hide();
            listItem.find('.editInput').val(listItem.find('.groupName').text());
            listItem.find('.editMode').removeAttr('hidden');
            listItem.find('.edit').attr('hidden', 'hidden');
        });

        $(".cancel").on('click', function () {
            const listItem = $(this).closest('li');
            listItem.find('.groupName').show();
            listItem.find('.editMode').attr('hidden', 'hidden');
            listItem.find('.edit').removeAttr('hidden');
        });

        $(".save").on('click', function () {
            const form = $(this).closest('form');
            form.submit();
        });

        $(".delete").on('click', function () {
            const form = $(this).closest('form');
            form.submit();
        });
    });
</script>

</x-app-layout>