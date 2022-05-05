<?php

use App\Entities\Option;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class OptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now= Carbon::now();
        Option::insert([
            [
                'label' => 'title',
                'key' => 'title',
                'value' => 'store',
                'created_at'=>$now,
            ],
            [
                'label' => 'Store 1',
                'key' => 'store-1',
                'value' => 'Hải Phòng',
                'created_at'=>$now,
            ],
            [

                'label' => 'Store 2',
                'key'  => 'store-2',
                'value' => 'Hà Nội',
                'created_at'=>$now,
            ],
            [
                'label' => 'Store 3',
                'key'  => 'store-3',
                'value' => 'Hồ Chí Minh',
                'created_at'=>$now,
            ],
            [
                'label' => 'email',
                'key'  => 'email',
                'value' => 'cskh@store.com',
                'created_at'=>$now,
            ],
            [
                'label' => 'company-phone',
                'key'  => 'company-phone',
                'value' => '0986082324',
                'created_at'=>$now,
            ],

            [
                'label' => 'Mua hàng',
                'key'  => 'mua-hang',
                'value' => '<ul class="list-unstyled">
                <li>
                    <h3>Mua hàng</h3>
                </li>
                <li><a href="">Thời trang nam</a></li>
                <li><a href="">Thời trang nữ</a></li>
                <li><a href="">Thời trang unisex</a></li>
                </ul>',
                'created_at'=>$now,
            ],
            [
                'label' => 'Dịch vụ khách hàng',
                'key'  => 'dich-vu-khach-hang',
                'value' => '<ul class="list-unstyled">
                <li>
                    <h3>Dịch vụ khách hàng</h3>
                </li>
                <li><a href="">Tài khoản</a></li>
                <li><a href="">Chính sách vận chuyển</a></li>
                <li><a href="">Chính sách đổi</a></li>
                <li><a href="">Câu hỏi thường gặp</a></li>
                <li><a href="">Chính sách bảo mật</a></li>
                <li><a href="">Chính sách thanh toán</a></li>
                </ul>',
                'created_at'=>$now,
            ],
            [
                'label' => '#Mshop',
                'key'  => 'mshop',
                'value' => '<ul class="list-unstyled">
                <li>
                    <h3>#Mshop</h3>
                </li>
                <li><a href="">Blog</a></li>
                <li><a href="/pages/tuyen-dung">Tuyển dụng</a></li>
                </ul>',
                'created_at'=>$now,
            ],

        ]);
    }
}
