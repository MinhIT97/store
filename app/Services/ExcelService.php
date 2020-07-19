<?php

namespace App\Services;

class ExcelService
{
    public static function FiledSearchExcel($url, $query)
    {
        if (count($url) > 1) {
            $url = explode('&', $url[1]);
            $url = collect($url)->map(function ($item, $key) {
                if ($item === "from=" || $item === "to=" || $item === "search=") {
                    return null;
                } else {
                    return $item;
                }
            });
            $arrayKey   = [];
            $arrayValue = [];
            foreach ($url as $key => $value) {

                if ($value) {
                    $field = explode('=', $value);

                    array_push($arrayValue, $field[1]);
                    array_push($arrayKey, $field[0]);
                }
            }
            $search = array_combine($arrayKey, $arrayValue);

            if (count($search)) {
                $query = $query->where(function ($q) use ($search) {
                    foreach ($search as $key => $field) {
                        if ($key === "from") {
                            $q = $q->whereDate('created_at', '>=', $field);
                        }
                        if ($key === "to") {
                            $q = $q->whereDate('created_at', '<=', $field);
                        }
                        if ($key === "search") {
                            foreach (['name', 'price', 'status'] as $key => $fie) {
                                $q = $q->orWhere($fie, 'like', "%{$field}%");
                            }
                        }
                    }
                });
            }
        }

        return $query;
    }
}
