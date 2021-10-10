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
                <table id="commandes" class="table table-bordered">
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
                                <td class="table-secondary">{{$commande->nom_complet}}</td>
                                <td class="table-secondary">{{ date_format($commande->date_commande, 'd/m/Y')}}</td>
                                <td class="table-secondary">{{$commande->numero}}</td>
                                <td class="table-secondary">@php echo $commande->articles @endphp</td>
                                <td class="table-secondary">{{$commande->montant}}</td>
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
            $('#commandes').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
</x-app-layout>
