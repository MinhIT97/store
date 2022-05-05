<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProductExports implements FromCollection, WithMapping, WithHeadings
{
    use Exportable;

    public function __construct(Collection $products)
    {
        $this->products = $products;
    }

    public function collection()
    {
        return $this->products;
    }

    public function map($products): array
    {
        return [
            $products->id,
            $products->name,
            $products->quantity,
            $products->getStatus(),
            $products->content,
            $products->price,
            $products->type,
            $products->orderItems()->sum('quantity'),
            $products->created_at,

        ];
    }

    public function headings(): array
    {
        return [
            'id',
            'name',
            'quantity',
            'status',
            'content',
            'price',
            'type',
            'orders',
            'created_at',
        ];
    }
}