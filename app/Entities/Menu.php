<?php

namespace App\Entities;

use App\Traits\QueryTrait;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Menu.
 *
 * @package namespace App\Entities;
 */
class Menu extends Model implements Transformable
{
    use TransformableTrait, QueryTrait;

    const PENĐING  = 0;
    const PUBLISHED = 1;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "label",
        "link",
        "parent_id",
        "order_by",
    ];

    public function scopePublished($query)
    {
        $query->where('status', self::PUBLISHED);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class)->orderBy('order_by', 'desc');
    }

    public function menus()
    {
        return $this->hasMany(Menu::class, 'parent_id')->orderBy('order_by', 'desc')->with('menus');
    }
    public function renderSubmenu()
    {

        $item_id      = $this->id;
        $item_menu_id = $this->menu_id;

        $getSub = $this->menus;
        $html   = '';

        if ($getSub->isNotEmpty()) {
            $html = '<ul class="sub-menu dropdown-menu  sub-menu-' . $item_id . '    ">';

            foreach ($getSub as $item) {
                $html .= '<li id="item-menus-' . $item->id . '" class ="item dropdown-item">';
                $html .= '<a href="' . $item->link . '">';
                $html .= $item->label;
                $html .= '</a>';
                $html .= $item->renderSubmenu();
                $html .= '</li>';
            }
            $html .= '</ul>';
            return $html;
        }
    }
}
