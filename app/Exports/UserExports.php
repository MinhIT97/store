<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UserExports implements FromCollection, WithMapping, WithHeadings
{
    use Exportable;

    public function __construct(Collection $users)
    {
        $this->users = $users;
    }

    public function collection()
    {
        return $this->users;
    }

    public function map($users): array
    {
        return [
            $users->id,
            $users->name,
            $users->email,
            $users->phone,
            $users->getProvince(),
            $users->getDistrict(),
            $users->created_at,

        ];
    }

    public function headings(): array
    {
        return [
            'id',
            'name',
            'email',
            'status',
            'phone',
            'province',
            'district',
            'created_at',
        ];
    }
}
