<?php

namespace App\Exports;


use App\Models\Order;
use App\Models\User;
use App\Models\Buku;


use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class HistoriExport implements FromView
{
    public function view(): View
    {
         $items = Order::with(['user', 'buku'])->get();
        return view('pages.admin.report.excell.index', [
            'items' => $items
        ]);
    }
}

