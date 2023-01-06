<?php

namespace App\Exports;

use App\Models\Order;

use Maatwebsite\Excel\Concerns\FromCollection;

class HistoriExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Order::with(['user', 'buku'])->get();
    }
}
