<?php

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Support\Str;

trait QueryTrait
{
    public function getLimitName($limit)
    {
        return Str::limit($this->name, $limit);
    }
    public function getLImitTitle($limit)
    {
        return Str::limit($this->title, $limit);
    }
    public function getDate()
    {
        return Carbon::parse($this->created_at)->format('d/m/Y');
    }
    public function getLimitDescription($limit)
    {
        return Str::limit($this->description, $limit);
    }
}
