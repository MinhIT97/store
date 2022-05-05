<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Province;

/**
 * Class ProvinceTransformer.
 *
 * @package namespace App\Transformers;
 */
class ProvinceTransformer extends TransformerAbstract
{
    /**
     * Transform the Province entity.
     *
     * @param \App\Entities\Province $model
     *
     * @return array
     */
    public function transform(Province $model)
    {
        return [
            'id'         => (int) $model->id,
            'name'       => $model->name,
            'type'       => $model->type,
            'order'      => $model->order,
            'status'     => $model->status,
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
    public function includeDistricts(Province $model)
    {
        return $this->collection($model->districts, new DistrictTransformer());
    }
}
