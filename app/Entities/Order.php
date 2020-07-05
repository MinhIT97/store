<?php

namespace App\Entities;

use App\Traits\QueryTrait;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Order.
 *
 * @package namespace App\Entities;
 */
class Order extends Model implements Transformable
{
    use TransformableTrait, QueryTrait;

    const PENDING    = 0; //đang chờ xửa lý
    const CANCELED   = 1; // hủy đơn hàng
    const RETURN     = 2; //khchs trả lại
    const FINISH     = 3; //hoàn thành
    const FAKEORDER  = 4; //đơn giả
    const FAIL       = 5; //thất bại
    const REFUSE     = 6; //khách từ chối
    const TRANSPORT  = 7; //đang vận chuyển
    const PROSESSING = 8; //đang được xử lý
    const PROSESSED  = 9; //đã dc xử lý

    protected $fillable = [
        "name",
        "slug",
        "total_price",
        "status",
        "user_id",
        "email",
        "phone",
        "address",
        'note',
    ];

    public function getStatus()
    {
        $status = $this->status;

        switch ($status) {
            case 1:
                return 'Canceled';
                break;
            case 2:
                return 'Return';
                break;
            case 3:
                return 'Finish';
                break;
            case 4:
                return 'Fake order';
                break;
            case 5:
                return 'Fail';
                break;
            case 6:
                return 'Refuse';
                break;
            case 7:
                return 'Transport';
                break;
            case 8:
                return 'Prosessing';
                break;
            case 9:
                return 'Prosessed';
                break;
            default:
                return 'Pending';
                break;
        }
    }
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'id')->with('product', 'size', 'color');
    }
    public function calculateTotal(): int
    {
        return $this->orderItems->sum('amount');
    }
}
