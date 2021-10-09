<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Commandes') }}
        </h2>
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Commandes') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table table-striped- table-bordered table-hover table-checkable">
                    <thead>
                    <tr>
                        <th>Client</th>
                        <th>Date de la commande</th>
                        <th>Numéro de commande</th>
                        <th>Articles</th>
                        <th>Prix total de la commande</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($commandes) && $commandes != null)
                        @foreach($commandes as $commande)
                            <tr>
                                <td>{{$commande->nom_complet}}</td>
                                <td>{{$commande->date_commande}}</td>
                                <td>{{$commande->numero}}</td>
                                <td>{{$commande->articles}}</td>
                                <td>{{$commande->montant}}</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>

                </table>
            </div>
        </div>

    </div>
</x-app-layout>
