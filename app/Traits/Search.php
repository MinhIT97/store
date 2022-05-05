<?php

namespace App\Traits;

use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

trait Search
{
    public function applySearchFromRequest($query, array $fields, Request $request, $relations = [])
    {
        if ($request->has('search')) {
            $search = $request->get('search');
            if (count($fields)) {
                $query = $query->where(function ($q) use ($fields, $search, $relations) {
                    foreach ($fields as $key => $field) {
                        $q = $q->orWhere($field, 'like', "%{$search}%");
                    }
                    $q = $this->applySearchWithRelationsFromRequest($q, $search, $relations);
                });
            }
        }
        return $query;
    }

    public function applyOrderByFromRequest($query, Request $request)
    {
        if ($request->has('order_by')) {
            $orderBy = (array) json_decode($request->get('order_by'));
            if (count($orderBy) > 0) {
                foreach ($orderBy as $key => $value) {
                    $query = $query->orderBy($key, $value);
                }
            }
        } else {
            $query = $query->orderBy('id', 'desc');
        }
        return $query;
    }

    public function applyConstraintsFromRequest($query, Request $request)
    {
        if ($request->has('constraints')) {
            $constraints = (array) json_decode($request->get('constraints'));
            if (count($constraints)) {
                $query = $query->where($constraints);
            }
        }
        return $query;
    }

    private function applySearchWithRelationsFromRequest($query, $search, $relations)
    {
        if (count($relations)) {
            foreach ($relations as $key => $value) {
                $query = $query->orWhereHas($key, function ($q) use ($value, $search) {
                    if (count($value)) {
                        $q->where(function ($query) use ($value, $search) {
                            foreach ($value as $item) {
                                $query->orWhere($item, 'like', "%{$search}%");
                            }
                        });
                    }
                });
            }
        }
        return $query;
    }

    // public function field($request)
    // {
    //     if ($request->has('field')) {
    //         if ($request->field === 'updated') {
    //             $field = 'updated_at';
    //         } elseif ($request->field === 'published') {
    //             $field = 'published_date';
    //         } elseif ($request->field === 'created') {
    //             $field = 'created_at';
    //         }
    //         return $field;
    //     } else {
    //         throw new Exception('field requied');
    //     }
    // }


    public function getFromDate($request, $query)
    {

        if ($request->get('from') != null) {
            $form_date = $this->fomatDate($request->from);
            $query     = $query->whereDate('created_at', '>=', $form_date);
        }
        return $query;
    }

    public function getToDate($request, $query)
    {
        if ($request->get('to') != null) {
            $to_date = $this->fomatDate($request->to);
            $query   = $query->whereDate('created_at', '<=', $to_date);
        }
        return $query;
    }
    public function fomatDate($date)
    {
        $fomatDate = Carbon::createFromFormat('Y-m-d', $date);
        return $fomatDate;
    }
}
