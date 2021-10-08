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

                <div class="btn-group pull-right m--margin-left-5" role="group" aria-label="Default button group">
                    <a href="{{ url('exportToExcel')}}"
                       class="btn btn-primary m-btn--icon " target="_blank">
                        <span><i class="fa fa-file-pdf fa-2x"></i>
                            <span>Exporter Toutes Les informations</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table table-striped- table-bordered table-hover table-checkable">
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
                                <td>{{$client->prenom}}</td>
                                <td>{{$client->nom}}</td>
                                <td>{{$client->email}}</td>
                                <td>{{$client->telephone}}</td>
                                <td>{{$client->commandes_count}}</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>

                </table>
            </div>
        </div>

    </div>
</x-app-layout>
