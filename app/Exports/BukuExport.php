<?php

namespace App\Exports;


use App\Models\Buku;
use App\Models\User;
use App\Models\Order;


use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class BukuExport implements FromView
{
    public function view(): View
    {
        $items = Buku::with(['kategori'])->get();
        return view('pages.admin.buku.excell.index', [
            'items' => $items
        ]);
    }


}

