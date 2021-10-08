<?php

namespace App\Exports;

use App\Repositories\ClientRepository;
use Illuminate\Support\Facades\App;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithProperties;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\BeforeWriting;
use Maatwebsite\Excel\Events\BeforeSheet;
use Maatwebsite\Excel\Events\AfterSheet;

class ClientsExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $client = App::make(ClientRepository::class);
        return $client->getClientsDetails();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            [
                'Liste des clients', '', ''
            ],
            [],
            [
                'Prénom',
                'Nom',
                'Email',
                'Téléphone',
                'Nombre de commandes',
            ]
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('1')->getFont()->setBold(true);
        $sheet->mergeCells('A1:E1');
        $sheet->getStyle('3')->getFont()->setBold(true);
    }
}
