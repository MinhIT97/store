<?php

use App\Entities\Province;
use Illuminate\Database\Seeder;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::updateOrCreate([
            'name' => 'Hà Nội',
        ], [
            'name'   => 'Hà Nội',
            'type'   => Province::TYPE_CITY,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Hà Giang',
        ], [
            'name'   => 'Hà Giang',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Cao Bằng',
        ], [
            'name'   => 'Cao Bằng',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Bắc Kạn',
        ], [
            'name'   => 'Bắc Kạn',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Tuyên Quang',
        ], [
            'name'   => 'Tuyên Quang',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Lào Cai',
        ], [
            'name'   => 'Lào Cai',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Điện Biên',
        ], [
            'name'   => 'Điện Biên',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Lai Châu',
        ], [
            'name'   => 'Lai Châu',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Sơn La',
        ], [
            'name'   => 'Sơn La',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Yên Bái',
        ], [
            'name'   => 'Yên Bái',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Hòa Bình',
        ], [
            'name'   => 'Hòa Bình',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Thái Nguyên',
        ], [
            'name'   => 'Thái Nguyên',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Lạng Sơn',
        ], [
            'name'   => 'Lạng Sơn',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Quảng Ninh',
        ], [
            'name'   => 'Quảng Ninh',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Bắc Giang',
        ], [
            'name'   => 'Bắc Giang',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Phú Thọ',
        ], [
            'name'   => 'Phú Thọ',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Vĩnh Phúc',
        ], [
            'name'   => 'Vĩnh Phúc',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Bắc Ninh',
        ], [
            'name'   => 'Bắc Ninh',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Hải Dương',
        ], [
            'name'   => 'Hải Dương',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Hải Phòng',
        ], [
            'name'   => 'Hải Phòng',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Hưng Yên',
        ], [
            'name'   => 'Hưng Yên',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Thái Bình',
        ], [
            'name'   => 'Thái Bình',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Hà Nam',
        ], [
            'name'   => 'Hà Nam',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Nam Định',
        ], [
            'name'   => 'Nam Định',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Ninh Bình',
        ], [
            'name'   => 'Ninh Bình',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Thanh Hóa',
        ], [
            'name'   => 'Thanh Hóa',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Nghệ An',
        ], [
            'name'   => 'Nghệ An',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Hà Tĩnh',
        ], [
            'name'   => 'Hà Tĩnh',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Quảng Bình',
        ], [
            'name'   => 'Quảng Bình',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Quảng Trị',
        ], [
            'name'   => 'Quảng Trị',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Thừa Thiên Huế',
        ], [
            'name'   => 'Thừa Thiên Huế',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Đà Nẵng',
        ], [
            'name'   => 'Đà Nẵng',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Quảng Nam',
        ], [
            'name'   => 'Quảng Nam',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Quảng Ngãi',
        ], [
            'name'   => 'Quảng Ngãi',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Bình Định',
        ], [
            'name'   => 'Bình Định',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Phú Yên',
        ], [
            'name'   => 'Phú Yên',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Khánh Hòa',
        ], [
            'name'   => 'Khánh Hòa',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Ninh Thuận',
        ], [
            'name'   => 'Ninh Thuận',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Bình Thuận',
        ], [
            'name'   => 'Bình Thuận',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Kon Tum',
        ], [
            'name'   => 'Kon Tum',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Gia Lai',
        ], [
            'name'   => 'Gia Lai',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Đắk Lắk',
        ], [
            'name'   => 'Đắk Lắk',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Đắk Nông',
        ], [
            'name'   => 'Đắk Nông',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Lâm Đồng',
        ], [
            'name'   => 'Lâm Đồng',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Bình Phước',
        ], [
            'name'   => 'Bình Phước',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Tây Ninh',
        ], [
            'name'   => 'Tây Ninh',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Bình Dương',
        ], [
            'name'   => 'Bình Dương',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Đồng Nai',
        ], [
            'name'   => 'Đồng Nai',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Bà Rịa - Vũng Tàu',
        ], [
            'name'   => 'Bà Rịa - Vũng Tàu',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Hồ Chí Minh',
        ], [
            'name'   => 'Hồ Chí Minh',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Long An',
        ], [
            'name'   => 'Long An',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Tiền Giang',
        ], [
            'name'   => 'Tiền Giang',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Bến Tre',
        ], [
            'name'   => 'Bến Tre',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Trà Vinh',
        ], [
            'name'   => 'Trà Vinh',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Vĩnh Long',
        ], [
            'name'   => 'Vĩnh Long',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Đồng Tháp',
        ], [
            'name'   => 'Đồng Tháp',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'An Giang',
        ], [
            'name'   => 'An Giang',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Kiên Giang',
        ], [
            'name'   => 'Kiên Giang',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Cần Thơ',
        ], [
            'name'   => 'Cần Thơ',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Hậu Giang',
        ], [
            'name'   => 'Hậu Giang',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Sóc Trăng',
        ], [
            'name'   => 'Sóc Trăng',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Bạc Liêu',
        ], [
            'name'   => 'Bạc Liêu',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
        Province::updateOrCreate([
            'name' => 'Cà Mau',
        ], [
            'name'   => 'Cà Mau',
            'type'   => Province::TYPE_PROVINCIAL,
            'status' => Province::STATUS_ACTIVE,
        ]);
    }
}
