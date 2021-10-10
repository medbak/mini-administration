<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="row">
                </div>

                <div class="row">
                    <div class="col-md-12 bg-light text-right" style="margin-bottom:5px;">
                        <x-jet-button class="ml-4">
                            <a href="{{ route('exportToExcel') }}">Exporter Toutes Les informations</a>
                        </x-jet-button>
                    </div>
                </div>

                <table id="clients" class="table  table-bordered">
                    <thead>
                    <tr>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Commandes</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($clients) && $clients != null)
                        @foreach($clients as $client)
                            <tr>
                                <td class="table-secondary">{{$client->prenom}}</td>
                                <td class="table-secondary">{{$client->nom}}</td>
                                <td class="table-secondary">{{$client->email}}</td>
                                <td class="table-secondary">{{$client->telephone}}</td>
                                <td class="table-secondary">{{$client->commandes_count}}</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>

                </table>
            </div>
        </div>

    </div>

    <script>
        $(document).ready(function () {
            $('#clients').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
</x-app-layout>
