<?php

namespace App\Exports;

use App\Models\Order;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class HistoriExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Order::with(['user', 'buku'])->get();
    }

    public function headings(): array
    {
        return [
            'No',
            'Peminjam',
            'Order No',
            'Judul  ',
            'Alamat Rak',
            'Order dari',
            'Order Sampai',
            'Status'
        ];
    }

}
