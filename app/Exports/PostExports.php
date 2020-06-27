<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PostExports implements FromCollection, WithMapping, WithHeadings
{
    use Exportable;

    public function __construct(Collection $posts)
    {
        $this->posts = $posts;
    }

    public function collection()
    {
        return $this->posts;
    }

    public function map($posts): array
    {
        return [
            $posts->id,
            $posts->title,
            $posts->content,
            $posts->description,
            $posts->created_at,

        ];
    }

    public function headings(): array
    {
        return [
            'id',
            'title',
            'content',
            'description',
            'created_at',
        ];
    }
}
