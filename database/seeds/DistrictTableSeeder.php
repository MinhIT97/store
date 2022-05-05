<?php

use App\Entities\District;
use Illuminate\Database\Seeder;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        District::updateOrCreate([
            'name' => 'Ba Đình',
        ], [
            'name'        => 'Ba Đình',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 02 08N, 105 49 38E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Hoàn Kiếm',
        ], [
            'name'        => 'Hoàn Kiếm',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 01 53N, 105 51 09E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Tây Hồ',
        ], [
            'name'        => 'Tây Hồ',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 04 10N, 105 49 07E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Long Biên',
        ], [
            'name'        => 'Long Biên',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 02 21N, 105 53 07E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Cầu Giấy',
        ], [
            'name'        => 'Cầu Giấy',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 01 52N, 105 47 20E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Đống Đa',
        ], [
            'name'        => 'Đống Đa',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 00 56N, 105 49 06E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Hai Bà Trưng',
        ], [
            'name'        => 'Hai Bà Trưng',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 00 27N, 105 51 35E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Hoàng Mai',
        ], [
            'name'        => 'Hoàng Mai',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 58 33N, 105 51 22E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Thanh Xuân',
        ], [
            'name'        => 'Thanh Xuân',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 59 44N, 105 48 56E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Sóc Sơn',
        ], [
            'name'        => 'Sóc Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 16 55N, 105 49 46E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Đông Anh',
        ], [
            'name'        => 'Đông Anh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 08 16N, 105 49 38E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Gia Lâm',
        ], [
            'name'        => 'Gia Lâm',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 01 28N, 105 56 54E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Từ Liêm',
        ], [
            'name'        => 'Từ Liêm',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 02 39N, 105 45 32E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Thanh Trì',
        ], [
            'name'        => 'Thanh Trì',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 56 32N, 105 50 55E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Mê Linh',
        ], [
            'name'        => 'Mê Linh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 10 53N, 105 42 05E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Hà Đông',
        ], [
            'name'        => 'Hà Đông',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 57 25N, 105 45 21E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Sơn Tây',
        ], [
            'name'        => 'Sơn Tây',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 05 51N, 105 28 27E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Ba Vì',
        ], [
            'name'        => 'Ba Vì',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 09 40N, 105 22 43E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Phúc Thọ',
        ], [
            'name'        => 'Phúc Thọ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 06 32N, 105 34 52E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Đan Phượng',
        ], [
            'name'        => 'Đan Phượng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 07 13N, 105 40 49E',
            'province_id' => 1,
        ]);

        District::updateOrCreate([
            'name' => 'Hoài Đức',
        ], [
            'name'        => 'Hoài Đức',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 01 25N, 105 42 03E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Quốc Oai',
        ], [
            'name'        => 'Quốc Oai',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 58 45N, 105 36 43E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Thạch Thất',
        ], [
            'name'        => 'Thạch Thất',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 02 17N, 105 33 05E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Chương Mỹ',
        ], [
            'name'        => 'Chương Mỹ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 52 46N, 105 39 01E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Thanh Oai',
        ], [
            'name'        => 'Thanh Oai',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 51 44N, 105 46 18E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Thường Tín',
        ], [
            'name'        => 'Thường Tín',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 49 59N, 105 22 19E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Phú Xuyên',
        ], [
            'name'        => 'Phú Xuyên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 43 37N, 105 53 43E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Ứng Hòa',
        ], [
            'name'        => 'Ứng Hòa',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 42 41N, 105 47 58E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => 'Mỹ Đức',
        ], [
            'name'        => 'Mỹ Đức',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 41 53N, 105 43 31E',
            'province_id' => 1,
        ]);
        District::updateOrCreate([
            'name' => ' Hà Giang',
        ], [
            'name'        => ' Hà Giang',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 46 23N, 105 02 39E',
            'province_id' => 2,
        ]);
        District::updateOrCreate([
            'name' => ' Đồng Văn',
        ], [
            'name'        => ' Đồng Văn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '23 14 34N, 105 15 48E',
            'province_id' => 2,
        ]);
        District::updateOrCreate([
            'name' => ' Mèo Vạc',
        ], [
            'name'        => ' Mèo Vạc',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '23 09 10N, 105 26 38E',
            'province_id' => 2,
        ]);
        District::updateOrCreate([
            'name' => ' Yên Minh',
        ], [
            'name'        => ' Yên Minh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '23 04 20N, 105 10 13E',
            'province_id' => 2,
        ]);
        District::updateOrCreate([
            'name' => ' Quản Bạ',
        ], [
            'name'        => ' Quản Bạ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '23 04 03N, 104 58 05E',
            'province_id' => 2,
        ]);
        District::updateOrCreate([
            'name' => ' Vị Xuyên',
        ], [
            'name'        => ' Vị Xuyên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 45 50N, 104 56 26E',
            'province_id' => 2,
        ]);
        District::updateOrCreate([
            'name' => ' Bắc Mê',
        ], [
            'name'        => ' Bắc Mê',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 45 48N, 105 16 26E',
            'province_id' => 2,
        ]);
        District::updateOrCreate([
            'name' => ' Hoàng Su Phì',
        ], [
            'name'        => ' Hoàng Su Phì',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 41 37N, 104 40 06E',
            'province_id' => 2,
        ]);
        District::updateOrCreate([
            'name' => ' Xín Mần',
        ], [
            'name'        => ' Xín Mần',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 38 05N, 104 28 35E',
            'province_id' => 2,
        ]);
        District::updateOrCreate([
            'name' => ' Bắc Quang',
        ], [
            'name'        => ' Bắc Quang',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 23 42N, 104 55 06E',
            'province_id' => 2,
        ]);
        District::updateOrCreate([
            'name' => ' Quang Bình',
        ], [
            'name'        => ' Quang Bình',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 23 07N, 104 37 11E',
            'province_id' => 2,
        ]);
        District::updateOrCreate([
            'name' => 'Cao Bằng',
        ], [
            'name'        => 'Cao Bằng',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 39 20N, 106 15 20E',
            'province_id' => 3,
        ]);
        District::updateOrCreate([
            'name' => 'Bảo Lâm',
        ], [
            'name'        => 'Bảo Lâm',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 52 37N, 105 27 28E',
            'province_id' => 3,
        ]);
        District::updateOrCreate([
            'name' => 'Bảo Lạc',
        ], [
            'name'        => 'Bảo Lạc',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 52 31N, 105 42 41E',
            'province_id' => 3,
        ]);
        District::updateOrCreate([
            'name' => 'Thông Nông',
        ], [
            'name'        => 'Thông Nông',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 49 09N, 105 57 05E',
            'province_id' => 3,
        ]);
        District::updateOrCreate([
            'name' => 'Hà Quảng',
        ], [
            'name'        => 'Hà Quảng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 53 42N, 106 06 32E',
            'province_id' => 3,
        ]);
        District::updateOrCreate([
            'name' => 'Trà Lĩnh',
        ], [
            'name'        => 'Trà Lĩnh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 48 14N, 106 19 47E',
            'province_id' => 3,
        ]);
        District::updateOrCreate([
            'name' => 'Trùng Khánh',
        ], [
            'name'        => 'Trùng Khánh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 49 31N, 106 33 58E',
            'province_id' => 3,
        ]);
        District::updateOrCreate([
            'name' => 'Hạ Lang',
        ], [
            'name'        => 'Hạ Lang',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 42 37N, 106 41 42E',
            'province_id' => 3,
        ]);
        District::updateOrCreate([
            'name' => 'Quảng Uyên',
        ], [
            'name'        => 'Quảng Uyên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 40 15N, 106 27 42E',
            'province_id' => 3,
        ]);
        District::updateOrCreate([
            'name' => 'Phục Hoà',
        ], [
            'name'        => 'Phục Hoà',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 33 52N, 106 30 02E',
            'province_id' => 3,
        ]);
        District::updateOrCreate([
            'name' => 'Hoà An',
        ], [
            'name'        => 'Hoà An',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 41 20N, 106 02 05E',
            'province_id' => 3,
        ]);
        District::updateOrCreate([
            'name' => 'Nguyên Bình',
        ], [
            'name'        => 'Nguyên Bình',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 38 52N, 105 57 02E',
            'province_id' => 3,
        ]);
        District::updateOrCreate([
            'name' => 'Thạch An',
        ], [
            'name'        => 'Thạch An',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 28 51N, 106 19 51E',
            'province_id' => 3,
        ]);
        District::updateOrCreate([
            'name' => 'Bắc Kạn',
        ], [
            'name'        => 'Bắc Kạn',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 08 00N, 105 51 10E',
            'province_id' => 4,
        ]);
        District::updateOrCreate([
            'name' => 'Pác Nặm',
        ], [
            'name'        => 'Pác Nặm',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 35 46N, 105 40 25E',
            'province_id' => 4,
        ]);
        District::updateOrCreate([
            'name' => 'Ba Bể',
        ], [
            'name'        => 'Ba Bể',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 23 54N, 105 43 30E',
            'province_id' => 4,
        ]);
        District::updateOrCreate([
            'name' => 'Ngân Sơn',
        ], [
            'name'        => 'Ngân Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 25 50N, 106 01 00E',
            'province_id' => 4,
        ]);
        District::updateOrCreate([
            'name' => 'Bạch Thông',
        ], [
            'name'        => 'Bạch Thông',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 12 04N, 105 51 01E',
            'province_id' => 4,
        ]);
        District::updateOrCreate([
            'name' => 'Chợ Đồn',
        ], [
            'name'        => 'Chợ Đồn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 11 18N, 105 34 43E',
            'province_id' => 4,
        ]);
        District::updateOrCreate([
            'name' => 'Chợ Mới',
        ], [
            'name'        => 'Chợ Mới',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 57 56N, 105 51 29E',
            'province_id' => 4,
        ]);
        District::updateOrCreate([
            'name' => 'Na Rì',
        ], [
            'name'        => 'Na Rì',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 09 48N, 106 05 09E',
            'province_id' => 4,
        ]);
        District::updateOrCreate([
            'name' => 'Tuyên Quang',
        ], [
            'name'        => 'Tuyên Quang',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 49 40N, 105 13 12E',
            'province_id' => 5,
        ]);
        District::updateOrCreate([
            'name' => 'Nà Hang',
        ], [
            'name'        => 'Nà Hang',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 28 34N, 105 21 03E',
            'province_id' => 5,
        ]);
        District::updateOrCreate([
            'name' => 'Chiêm Hóa',
        ], [
            'name'        => 'Chiêm Hóa',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 12 49N, 105 14 32E',
            'province_id' => 5,
        ]);
        District::updateOrCreate([
            'name' => 'Hàm Yên',
        ], [
            'name'        => 'Hàm Yên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 05 46N, 105 00 13E',
            'province_id' => 5,
        ]);
        District::updateOrCreate([
            'name' => 'Yên Sơn',
        ], [
            'name'        => 'Yên Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 51 53N, 105 18 14E',
            'province_id' => 5,
        ]);
        District::updateOrCreate([
            'name' => 'Sơn Dương',
        ], [
            'name'        => 'Sơn Dương',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 40 22N, 105 22 57E',
            'province_id' => 5,
        ]);
        District::updateOrCreate([
            'name' => 'Lào Cai',
        ], [
            'name'        => 'Lào Cai',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 25 07N, 103 58 43E',
            'province_id' => 6,
        ]);
        District::updateOrCreate([
            'name' => 'Bát Xát',
        ], [
            'name'        => 'Bát Xát',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 35 50N, 103 44 49E',
            'province_id' => 6,
        ]);
        District::updateOrCreate([
            'name' => 'Mường Khương',
        ], [
            'name'        => 'Mường Khương',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 41 05N, 104 08 26E',
            'province_id' => 6,
        ]);
        District::updateOrCreate([
            'name' => 'Si Ma Cai',
        ], [
            'name'        => 'Si Ma Cai',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 39 46N, 104 16 05E',
            'province_id' => 6,
        ]);
        District::updateOrCreate([
            'name' => 'Bắc Hà',
        ], [
            'name'        => 'Bắc Hà',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 30 08N, 104 18 54E',
            'province_id' => 6,
        ]);
        District::updateOrCreate([
            'name' => 'Bảo Thắng',
        ], [
            'name'        => 'Bảo Thắng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 22 47N, 104 10 00E',
            'province_id' => 6,
        ]);
        District::updateOrCreate([
            'name' => 'Bảo Yên',
        ], [
            'name'        => 'Bảo Yên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 17 38N, 104 25 02E',
            'province_id' => 6,
        ]);
        District::updateOrCreate([
            'name' => 'Sa Pa',
        ], [
            'name'        => 'Sa Pa',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 18 54N, 103 54 18E',
            'province_id' => 6,
        ]);
        District::updateOrCreate([
            'name' => 'Văn Bàn',
        ], [
            'name'        => 'Văn Bàn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 03 48N, 104 10 59E',
            'province_id' => 6,
        ]);
        District::updateOrCreate([
            'name' => 'Điện Biên Phủ',
        ], [
            'name'        => 'Điện Biên Phủ',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 24 52N, 103 02 31E',
            'province_id' => 7,
        ]);
        District::updateOrCreate([
            'name' => 'Mường Lay',
        ], [
            'name'        => 'Mường Lay',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 01 47N, 103 07 10E',
            'province_id' => 7,
        ]);
        District::updateOrCreate([
            'name' => 'Mường Nhé',
        ], [
            'name'        => 'Mường Nhé',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 06 11N, 102 30 54E',
            'province_id' => 7,
        ]);
        District::updateOrCreate([
            'name' => 'Mường Chà',
        ], [
            'name'        => 'Mường Chà',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 50 31N, 103 03 15E',
            'province_id' => 7,
        ]);
        District::updateOrCreate([
            'name' => 'Tủa Chùa',
        ], [
            'name'        => 'Tủa Chùa',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 58 19N, 103 23 01E',
            'province_id' => 7,
        ]);
        District::updateOrCreate([
            'name' => 'Tuần Giáo',
        ], [
            'name'        => 'Tuần Giáo',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 38 03N, 103 21 06E',
            'province_id' => 7,
        ]);
        District::updateOrCreate([
            'name' => 'Điện Biên',
        ], [
            'name'        => 'Điện Biên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 15 19N, 103 03 19E',
            'province_id' => 7,
        ]);
        District::updateOrCreate([
            'name' => 'Điện Biên Đông',
        ], [
            'name'        => 'Điện Biên Đông',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 14 07N, 103 15 19E',
            'province_id' => 7,
        ]);
        District::updateOrCreate([
            'name' => 'Mường Ảng',
        ], [
            'name'        => 'Mường Ảng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 7,
        ]);
        District::updateOrCreate([
            'name' => 'Lai Châu',
        ], [
            'name'        => 'Lai Châu',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 23 15N, 103 24 22E',
            'province_id' => 8,
        ]);
        District::updateOrCreate([
            'name' => 'Tam Đường',
        ], [
            'name'        => 'Tam Đường',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 20 16N, 103 32 53E',
            'province_id' => 8,
        ]);
        District::updateOrCreate([
            'name' => 'Mường Tè',
        ], [
            'name'        => 'Mường Tè',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 24 16N, 102 43 11E',
            'province_id' => 8,
        ]);
        District::updateOrCreate([
            'name' => 'Sìn Hồ',
        ], [
            'name'        => 'Sìn Hồ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 17 21N, 103 18 12E',
            'province_id' => 8,
        ]);
        District::updateOrCreate([
            'name' => 'Phong Thổ',
        ], [
            'name'        => 'Phong Thổ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 38 24N, 103 22 38E',
            'province_id' => 8,
        ]);
        District::updateOrCreate([
            'name' => 'Than Uyên',
        ], [
            'name'        => 'Than Uyên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 59 35N, 103 45 30E',
            'province_id' => 8,
        ]);
        District::updateOrCreate([
            'name' => 'Tân Uyên',
        ], [
            'name'        => 'Tân Uyên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 8,
        ]);
        District::updateOrCreate([
            'name' => 'Sơn La',
        ], [
            'name'        => 'Sơn La',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 20 39N, 103 54 52E',
            'province_id' => 9,
        ]);
        District::updateOrCreate([
            'name' => 'Quỳnh Nhai',
        ], [
            'name'        => 'Quỳnh Nhai',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 46 34N, 103 39 02E',
            'province_id' => 9,
        ]);
        District::updateOrCreate([
            'name' => 'Thuận Châu',
        ], [
            'name'        => 'Thuận Châu',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 24 54N, 103 39 46E',
            'province_id' => 9,
        ]);
        District::updateOrCreate([
            'name' => 'Mường La',
        ], [
            'name'        => 'Mường La',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 31 38N, 104 02 48E',
            'province_id' => 9,
        ]);
        District::updateOrCreate([
            'name' => 'Bắc Yên',
        ], [
            'name'        => 'Bắc Yên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 13 23N, 104 22 09E',
            'province_id' => 9,
        ]);
        District::updateOrCreate([
            'name' => 'Phù Yên',
        ], [
            'name'        => 'Phù Yên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 13 33N, 104 41 51E',
            'province_id' => 9,
        ]);
        District::updateOrCreate([
            'name' => 'Mộc Châu',
        ], [
            'name'        => 'Mộc Châu',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 49 21N, 104 43 10E',
            'province_id' => 9,
        ]);
        District::updateOrCreate([
            'name' => 'Yên Châu',
        ], [
            'name'        => 'Yên Châu',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 59 33N, 104 19 51E',
            'province_id' => 9,
        ]);
        District::updateOrCreate([
            'name' => 'Mai Sơn',
        ], [
            'name'        => 'Mai Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 10 08N, 103 59 36E',
            'province_id' => 9,
        ]);
        District::updateOrCreate([
            'name' => 'Sông Mã',
        ], [
            'name'        => 'Sông Mã',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 06 04N, 103 43 56E',
            'province_id' => 9,
        ]);
        District::updateOrCreate([
            'name' => 'Sốp Cộp',
        ], [
            'name'        => 'Sốp Cộp',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 52 46N, 103 30 38E',
            'province_id' => 9,
        ]);
        District::updateOrCreate([
            'name' => 'Yên Bái',
        ], [
            'name'        => 'Yên Bái',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 44 28N, 104 53 42E',
            'province_id' => 10,
        ]);
        District::updateOrCreate([
            'name' => 'Nghĩa Lộ',
        ], [
            'name'        => 'Nghĩa Lộ',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 35 58N, 104 29 22E',
            'province_id' => 10,
        ]);
        District::updateOrCreate([
            'name' => 'Lục Yên',
        ], [
            'name'        => 'Lục Yên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 06 44N, 104 43 12E',
            'province_id' => 10,
        ]);
        District::updateOrCreate([
            'name' => 'Văn Yên',
        ], [
            'name'        => 'Văn Yên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 55 55N, 104 33 51E',
            'province_id' => 10,
        ]);
        District::updateOrCreate([
            'name' => 'Mù Cang Chải',
        ], [
            'name'        => 'Mù Cang Chải',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 48 22N, 104 09 01E',
            'province_id' => 10,
        ]);
        District::updateOrCreate([
            'name' => 'Trấn Yên',
        ], [
            'name'        => 'Trấn Yên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 42 20N, 104 48 56E',
            'province_id' => 10,
        ]);
        District::updateOrCreate([
            'name' => 'Trạm Tấu',
        ], [
            'name'        => 'Trạm Tấu',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 30 40N, 104 28 03E',
            'province_id' => 10,
        ]);
        District::updateOrCreate([
            'name' => 'Văn Chấn',
        ], [
            'name'        => 'Văn Chấn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 34 15N, 104 35 19E',
            'province_id' => 10,
        ]);
        District::updateOrCreate([
            'name' => 'Yên Bình',
        ], [
            'name'        => 'Yên Bình',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 52 24N, 104 55 16E',
            'province_id' => 10,
        ]);
        District::updateOrCreate([
            'name' => 'Hòa Bình',
        ], [
            'name'        => 'Hòa Bình',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 50 36N, 105 19 20E',
            'province_id' => 11,
        ]);
        District::updateOrCreate([
            'name' => 'Đà Bắc',
        ], [
            'name'        => 'Đà Bắc',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 55 58N, 105 04 52E',
            'province_id' => 11,
        ]);
        District::updateOrCreate([
            'name' => 'Kỳ Sơn',
        ], [
            'name'        => 'Kỳ Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 54 06N, 105 23 18E',
            'province_id' => 11,
        ]);
        District::updateOrCreate([
            'name' => 'Lương Sơn',
        ], [
            'name'        => 'Lương Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 53 16N, 105 30 55E',
            'province_id' => 11,
        ]);
        District::updateOrCreate([
            'name' => 'Kim Bôi',
        ], [
            'name'        => 'Kim Bôi',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 40 34N, 105 32 15E',
            'province_id' => 11,
        ]);
        District::updateOrCreate([
            'name' => 'Cao Phong',
        ], [
            'name'        => 'Cao Phong',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 41 23N, 105 17 48E',
            'province_id' => 11,
        ]);
        District::updateOrCreate([
            'name' => 'Tân Lạc',
        ], [
            'name'        => 'Tân Lạc',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 36 44N, 105 15 03E',
            'province_id' => 11,
        ]);
        District::updateOrCreate([
            'name' => 'Mai Châu',
        ], [
            'name'        => 'Mai Châu',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 40 56N, 104 59 46E',
            'province_id' => 11,
        ]);
        District::updateOrCreate([
            'name' => 'Lạc Sơn',
        ], [
            'name'        => 'Lạc Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 29 59N, 105 24 57E',
            'province_id' => 11,
        ]);
        District::updateOrCreate([
            'name' => 'Yên Thủy',
        ], [
            'name'        => 'Yên Thủy',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 25 42N, 105 37 59E',
            'province_id' => 11,
        ]);
        District::updateOrCreate([
            'name' => 'Lạc Thủy',
        ], [
            'name'        => 'Lạc Thủy',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 29 12N, 105 44 06E',
            'province_id' => 11,
        ]);
        District::updateOrCreate([
            'name' => 'Thái Nguyên',
        ], [
            'name'        => 'Thái Nguyên',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 33 20N, 105 48 26E',
            'province_id' => 12,
        ]);
        District::updateOrCreate([
            'name' => 'Sông Công',
        ], [
            'name'        => 'Sông Công',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 29 14N, 105 48 47E',
            'province_id' => 12,
        ]);
        District::updateOrCreate([
            'name' => 'Định Hóa',
        ], [
            'name'        => 'Định Hóa',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 53 50N, 105 38 01E',
            'province_id' => 12,
        ]);
        District::updateOrCreate([
            'name' => 'Phú Lương',
        ], [
            'name'        => 'Phú Lương',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 45 57N, 105 43 22E',
            'province_id' => 12,
        ]);
        District::updateOrCreate([
            'name' => 'Đồng Hỷ',
        ], [
            'name'        => 'Đồng Hỷ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 41 10N, 105 55 43E',
            'province_id' => 12,
        ]);
        District::updateOrCreate([
            'name' => 'Võ Nhai',
        ], [
            'name'        => 'Võ Nhai',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 47 14N, 106 02 29E',
            'province_id' => 12,
        ]);
        District::updateOrCreate([
            'name' => 'Đại Từ',
        ], [
            'name'        => 'Đại Từ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 36 17N, 105 37 28E',
            'province_id' => 12,
        ]);
        District::updateOrCreate([
            'name' => 'Phổ Yên',
        ], [
            'name'        => 'Phổ Yên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 27 08N, 105 45 19E',
            'province_id' => 12,
        ]);
        District::updateOrCreate([
            'name' => 'Phú Bình',
        ], [
            'name'        => 'Phú Bình',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 29 36N, 105 57 42E',
            'province_id' => 12,
        ]);
        District::updateOrCreate([
            'name' => 'Lạng Sơn',
        ], [
            'name'        => 'Lạng Sơn',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 51 19N, 106 44 50E',
            'province_id' => 13,
        ]);
        District::updateOrCreate([
            'name' => 'Tràng Định',
        ], [
            'name'        => 'Tràng Định',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 18 09N, 106 26 32E',
            'province_id' => 13,
        ]);
        District::updateOrCreate([
            'name' => 'Bình Gia',
        ], [
            'name'        => 'Bình Gia',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 03 56N, 106 19 01E',
            'province_id' => 13,
        ]);
        District::updateOrCreate([
            'name' => 'Văn Lãng',
        ], [
            'name'        => 'Văn Lãng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '22 01 59N, 106 34 17E',
            'province_id' => 13,
        ]);
        District::updateOrCreate([
            'name' => 'Cao Lộc',
        ], [
            'name'        => 'Cao Lộc',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 53 05N, 106 50 34E',
            'province_id' => 13,
        ]);
        District::updateOrCreate([
            'name' => 'Văn Quan',
        ], [
            'name'        => 'Văn Quan',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 51 04N, 106 33 04E',
            'province_id' => 13,
        ]);
        District::updateOrCreate([
            'name' => 'Bắc Sơn',
        ], [
            'name'        => 'Bắc Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 48 57N, 106 15 28E',
            'province_id' => 13,
        ]);
        District::updateOrCreate([
            'name' => 'Hữu Lũng',
        ], [
            'name'        => 'Hữu Lũng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 34 33N, 106 20 33E',
            'province_id' => 13,
        ]);
        District::updateOrCreate([
            'name' => 'Chi Lăng',
        ], [
            'name'        => 'Chi Lăng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 40 05N, 106 37 24E',
            'province_id' => 13,
        ]);
        District::updateOrCreate([
            'name' => 'Lộc Bình',
        ], [
            'name'        => 'Lộc Bình',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 40 41N, 106 58 12E',
            'province_id' => 13,
        ]);
        District::updateOrCreate([
            'name' => 'Đình Lập',
        ], [
            'name'        => 'Đình Lập',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 32 07N, 107 07 25E',
            'province_id' => 13,
        ]);
        District::updateOrCreate([
            'name' => 'Hạ Long',
        ], [
            'name'        => 'Hạ Long',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 52 24N, 107 05 23E',
            'province_id' => 14,
        ]);
        District::updateOrCreate([
            'name' => 'Móng Cái',
        ], [
            'name'        => 'Móng Cái',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 26 31N, 107 55 09E',
            'province_id' => 14,
        ]);
        District::updateOrCreate([
            'name' => 'Cẩm Phả',
        ], [
            'name'        => 'Cẩm Phả',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 03 42N, 107 17 22E',
            'province_id' => 14,
        ]);
        District::updateOrCreate([
            'name' => 'Uông Bí',
        ], [
            'name'        => 'Uông Bí',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 04 33N, 106 45 07E',
            'province_id' => 14,
        ]);
        District::updateOrCreate([
            'name' => 'Bình Liêu',
        ], [
            'name'        => 'Bình Liêu',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 33 07N, 107 26 24E',
            'province_id' => 14,
        ]);
        District::updateOrCreate([
            'name' => 'Tiên Yên',
        ], [
            'name'        => 'Tiên Yên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 22 24N, 107 22 50E',
            'province_id' => 14,
        ]);
        District::updateOrCreate([
            'name' => 'Đầm Hà',
        ], [
            'name'        => 'Đầm Hà',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 21 23N, 107 34 32E',
            'province_id' => 14,
        ]);
        District::updateOrCreate([
            'name' => 'Hải Hà',
        ], [
            'name'        => 'Hải Hà',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 25 50N, 107 41 26E',
            'province_id' => 14,
        ]);
        District::updateOrCreate([
            'name' => 'Ba Chẽ',
        ], [
            'name'        => 'Ba Chẽ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 15 40N, 107 09 52E',
            'province_id' => 14,
        ]);
        District::updateOrCreate([
            'name' => 'Vân Đồn',
        ], [
            'name'        => 'Vân Đồn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 56 17N, 107 28 02E',
            'province_id' => 14,
        ]);
        District::updateOrCreate([
            'name' => 'Hoành Bồ',
        ], [
            'name'        => 'Hoành Bồ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 06 30N, 107 02 43E',
            'province_id' => 14,
        ]);
        District::updateOrCreate([
            'name' => 'Đông Triều',
        ], [
            'name'        => 'Đông Triều',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 07 10N, 106 34 36E',
            'province_id' => 14,
        ]);
        District::updateOrCreate([
            'name' => 'Yên Hưng',
        ], [
            'name'        => 'Yên Hưng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 55 40N, 106 51 05E',
            'province_id' => 14,
        ]);
        District::updateOrCreate([
            'name' => 'Cô Tô',
        ], [
            'name'        => 'Cô Tô',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 05 01N, 107 49 10E',
            'province_id' => 14,
        ]);
        District::updateOrCreate([
            'name' => 'Bắc Giang',
        ], [
            'name'        => 'Bắc Giang',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 17 36N, 106 11 18E',
            'province_id' => 15,
        ]);
        District::updateOrCreate([
            'name' => 'Yên Thế',
        ], [
            'name'        => 'Yên Thế',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 31 29N, 106 09 27E',
            'province_id' => 15,
        ]);
        District::updateOrCreate([
            'name' => 'Tân Yên',
        ], [
            'name'        => 'Tân Yên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 23 23N, 106 05 55E',
            'province_id' => 15,
        ]);
        District::updateOrCreate([
            'name' => 'Lạng Giang',
        ], [
            'name'        => 'Lạng Giang',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 21 58N, 106 15 21E',
            'province_id' => 15,
        ]);
        District::updateOrCreate([
            'name' => 'Lục Nam',
        ], [
            'name'        => 'Lục Nam',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 18 16N, 106 29 24E',
            'province_id' => 15,
        ]);
        District::updateOrCreate([
            'name' => 'Lục Ngạn',
        ], [
            'name'        => 'Lục Ngạn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 26 15N, 106 39 09E',
            'province_id' => 15,
        ]);
        District::updateOrCreate([
            'name' => 'Sơn Động',
        ], [
            'name'        => 'Sơn Động',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 19 42N, 106 51 09E',
            'province_id' => 15,
        ]);
        District::updateOrCreate([
            'name' => 'Yên Dũng',
        ], [
            'name'        => 'Yên Dũng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 12 22N, 106 14 12E',
            'province_id' => 15,
        ]);
        District::updateOrCreate([
            'name' => 'Việt Yên',
        ], [
            'name'        => 'Việt Yên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 16 16N, 106 04 59E',
            'province_id' => 15,
        ]);
        District::updateOrCreate([
            'name' => 'Hiệp Hòa',
        ], [
            'name'        => 'Hiệp Hòa',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 15 51N, 105 57 30E',
            'province_id' => 15,
        ]);
        District::updateOrCreate([
            'name' => 'Việt Trì',
        ], [
            'name'        => 'Việt Trì',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 19 01N, 105 23 35E',
            'province_id' => 16,
        ]);
        District::updateOrCreate([
            'name' => 'Phú Thọ',
        ], [
            'name'        => 'Phú Thọ',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 24 54N, 105 13 46E',
            'province_id' => 16,
        ]);
        District::updateOrCreate([
            'name' => 'Đoan Hùng',
        ], [
            'name'        => 'Đoan Hùng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 36 56N, 105 08 42E',
            'province_id' => 16,
        ]);
        District::updateOrCreate([
            'name' => 'Hạ Hoà',
        ], [
            'name'        => 'Hạ Hoà',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 35 13N, 105 00 22E',
            'province_id' => 16,
        ]);
        District::updateOrCreate([
            'name' => 'Thanh Ba',
        ], [
            'name'        => 'Thanh Ba',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 27 04N, 105 09 10E',
            'province_id' => 16,
        ]);
        District::updateOrCreate([
            'name' => 'Phù Ninh',
        ], [
            'name'        => 'Phù Ninh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 26 59N, 105 18 13E',
            'province_id' => 16,
        ]);
        District::updateOrCreate([
            'name' => 'Yên Lập',
        ], [
            'name'        => 'Yên Lập',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 22 21N, 105 01 25E',
            'province_id' => 16,
        ]);
        District::updateOrCreate([
            'name' => 'Cẩm Khê',
        ], [
            'name'        => 'Cẩm Khê',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 23 04N, 105 05 25E',
            'province_id' => 16,
        ]);
        District::updateOrCreate([
            'name' => 'Tam Nông',
        ], [
            'name'        => 'Tam Nông',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 18 24N, 105 14 59E',
            'province_id' => 16,
        ]);
        District::updateOrCreate([
            'name' => 'Lâm Thao',
        ], [
            'name'        => 'Lâm Thao',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 19 37N, 105 18 09E',
            'province_id' => 16,
        ]);
        District::updateOrCreate([
            'name' => 'Thanh Sơn',
        ], [
            'name'        => 'Thanh Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 08 32N, 105 04 40E',
            'province_id' => 16,
        ]);
        District::updateOrCreate([
            'name' => 'Thanh Thuỷ',
        ], [
            'name'        => 'Thanh Thuỷ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 07 26N, 105 17 18E',
            'province_id' => 16,
        ]);
        District::updateOrCreate([
            'name' => 'Tân Sơn',
        ], [
            'name'        => 'Tân Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 16,
        ]);
        District::updateOrCreate([
            'name' => 'Vĩnh Yên',
        ], [
            'name'        => 'Vĩnh Yên',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 18 26N, 105 35 33E',
            'province_id' => 17,
        ]);
        District::updateOrCreate([
            'name' => 'Phúc Yên',
        ], [
            'name'        => 'Phúc Yên',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 18 55N, 105 43 54E',
            'province_id' => 17,
        ]);
        District::updateOrCreate([
            'name' => 'Lập Thạch',
        ], [
            'name'        => 'Lập Thạch',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 24 45N, 105 25 39E',
            'province_id' => 17,
        ]);
        District::updateOrCreate([
            'name' => 'Tam Dương',
        ], [
            'name'        => 'Tam Dương',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 21 40N, 105 33 36E',
            'province_id' => 17,
        ]);
        District::updateOrCreate([
            'name' => 'Tam Đảo',
        ], [
            'name'        => 'Tam Đảo',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 27 34N, 105 35 09E',
            'province_id' => 17,
        ]);
        District::updateOrCreate([
            'name' => 'Bình Xuyên',
        ], [
            'name'        => 'Bình Xuyên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 19 48N, 105 39 43E',
            'province_id' => 17,
        ]);
        District::updateOrCreate([
            'name' => 'Yên Lạc',
        ], [
            'name'        => 'Yên Lạc',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 13 17N, 105 34 44E',
            'province_id' => 17,
        ]);
        District::updateOrCreate([
            'name' => 'Vĩnh Tường',
        ], [
            'name'        => 'Vĩnh Tường',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 14 58N, 105 29 37E',
            'province_id' => 17,
        ]);
        District::updateOrCreate([
            'name' => 'Sông Lô',
        ], [
            'name'        => 'Sông Lô',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 17,
        ]);
        District::updateOrCreate([
            'name' => 'Bắc Ninh',
        ], [
            'name'        => 'Bắc Ninh',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 10 48N, 106 03 58E',
            'province_id' => 18,
        ]);
        District::updateOrCreate([
            'name' => 'Yên Phong',
        ], [
            'name'        => 'Yên Phong',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 12 40N, 105 59 36E',
            'province_id' => 18,
        ]);
        District::updateOrCreate([
            'name' => 'Quế Võ',
        ], [
            'name'        => 'Quế Võ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 08 44N, 106 11 06E',
            'province_id' => 18,
        ]);
        District::updateOrCreate([
            'name' => 'Tiên Du',
        ], [
            'name'        => 'Tiên Du',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 07 37N, 106 02 19E',
            'province_id' => 18,
        ]);
        District::updateOrCreate([
            'name' => 'Từ Sơn',
        ], [
            'name'        => 'Từ Sơn',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 07 12N, 105 57 26E',
            'province_id' => 18,
        ]);
        District::updateOrCreate([
            'name' => 'Thuận Thành',
        ], [
            'name'        => 'Thuận Thành',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 02 24N, 106 04 10E',
            'province_id' => 18,
        ]);
        District::updateOrCreate([
            'name' => 'Gia Bình',
        ], [
            'name'        => 'Gia Bình',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 03 55N, 106 12 53E',
            'province_id' => 18,
        ]);
        District::updateOrCreate([
            'name' => 'Lương Tài',
        ], [
            'name'        => 'Lương Tài',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 01 33N, 106 13 28E',
            'province_id' => 18,
        ]);
        District::updateOrCreate([
            'name' => 'Hải Dương',
        ], [
            'name'        => 'Hải Dương',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 56 14N, 106 18 21E',
            'province_id' => 19,
        ]);
        District::updateOrCreate([
            'name' => 'Chí Linh',
        ], [
            'name'        => 'Chí Linh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 07 47N, 106 23 46E',
            'province_id' => 19,
        ]);
        District::updateOrCreate([
            'name' => 'Nam Sách',
        ], [
            'name'        => 'Nam Sách',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 00 15N, 106 20 26E',
            'province_id' => 19,
        ]);
        District::updateOrCreate([
            'name' => 'Kinh Môn',
        ], [
            'name'        => 'Kinh Môn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 00 04N, 106 30 23E',
            'province_id' => 19,
        ]);
        District::updateOrCreate([
            'name' => 'Kim Thành',
        ], [
            'name'        => 'Kim Thành',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 55 40N, 106 30 33E',
            'province_id' => 19,
        ]);
        District::updateOrCreate([
            'name' => 'Thanh Hà',
        ], [
            'name'        => 'Thanh Hà',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 53 19N, 106 25 43E',
            'province_id' => 19,
        ]);
        District::updateOrCreate([
            'name' => 'Cẩm Giàng',
        ], [
            'name'        => 'Cẩm Giàng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 57 05N, 106 12 29E',
            'province_id' => 19,
        ]);
        District::updateOrCreate([
            'name' => 'Bình Giang',
        ], [
            'name'        => 'Bình Giang',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 52 36N, 106 11 24E',
            'province_id' => 19,
        ]);
        District::updateOrCreate([
            'name' => 'Gia Lộc',
        ], [
            'name'        => 'Gia Lộc',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 51 01N, 106 17 34E',
            'province_id' => 19,
        ]);
        District::updateOrCreate([
            'name' => 'Tứ Kỳ',
        ], [
            'name'        => 'Tứ Kỳ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 49 05N, 106 24 05E',
            'province_id' => 19,
        ]);
        District::updateOrCreate([
            'name' => 'Ninh Giang',
        ], [
            'name'        => 'Ninh Giang',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 45 13N, 106 20 09E',
            'province_id' => 19,
        ]);
        District::updateOrCreate([
            'name' => 'Thanh Miện',
        ], [
            'name'        => 'Thanh Miện',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 46 02N, 106 12 26E',
            'province_id' => 19,
        ]);
        District::updateOrCreate([
            'name' => 'Hồng Bàng',
        ], [
            'name'        => 'Hồng Bàng',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 52 37N, 106 38 32E',
            'province_id' => 20,
        ]);
        District::updateOrCreate([
            'name' => 'Ngô Quyền',
        ], [
            'name'        => 'Ngô Quyền',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 51 13N, 106 41 57E',
            'province_id' => 20,
        ]);
        District::updateOrCreate([
            'name' => 'Lê Chân',
        ], [
            'name'        => 'Lê Chân',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 50 12N, 106 40 30E',
            'province_id' => 20,
        ]);
        District::updateOrCreate([
            'name' => 'Hải An',
        ], [
            'name'        => 'Hải An',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 49 38N, 106 45 57E',
            'province_id' => 20,
        ]);
        District::updateOrCreate([
            'name' => 'Kiến An',
        ], [
            'name'        => 'Kiến An',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 48 26N, 106 38 03E',
            'province_id' => 20,
        ]);
        District::updateOrCreate([
            'name' => 'Đồ Sơn',
        ], [
            'name'        => 'Đồ Sơn',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 42 41N, 106 44 54E',
            'province_id' => 20,
        ]);
        District::updateOrCreate([
            'name' => 'Kinh Dương',
        ], [
            'name'        => 'Kinh Dương',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 20,
        ]);
        District::updateOrCreate([
            'name' => 'Thuỷ Nguyên',
        ], [
            'name'        => 'Thuỷ Nguyên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 56 36N, 106 39 38E',
            'province_id' => 20,
        ]);
        District::updateOrCreate([
            'name' => 'An Dương',
        ], [
            'name'        => 'An Dương',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 53 06N, 106 35 36E',
            'province_id' => 20,
        ]);
        District::updateOrCreate([
            'name' => 'An Lão',
        ], [
            'name'        => 'An Lão',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 47 54N, 106 33 19E',
            'province_id' => 20,
        ]);
        District::updateOrCreate([
            'name' => 'Kiến Thụy',
        ], [
            'name'        => 'Kiến Thụy',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 45 13N, 106 41 47E',
            'province_id' => 20,
        ]);
        District::updateOrCreate([
            'name' => 'Tiên Lãng',
        ], [
            'name'        => 'Tiên Lãng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 42 23N, 106 36 03E',
            'province_id' => 20,
        ]);
        District::updateOrCreate([
            'name' => 'Vĩnh Bảo',
        ], [
            'name'        => 'Vĩnh Bảo',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 40 56N, 106 29 57E',
            'province_id' => 20,
        ]);
        District::updateOrCreate([
            'name' => 'Cát Hải',
        ], [
            'name'        => 'Cát Hải',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 47 09N, 106 58 07E',
            'province_id' => 20,
        ]);
        District::updateOrCreate([
            'name' => 'Bạch Long Vĩ',
        ], [
            'name'        => 'Bạch Long Vĩ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 08 41N, 107 42 51E',
            'province_id' => 20,
        ]);
        District::updateOrCreate([
            'name' => 'Hưng Yên',
        ], [
            'name'        => 'Hưng Yên',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 39 38N, 106 03 08E',
            'province_id' => 21,
        ]);
        District::updateOrCreate([
            'name' => 'Văn Lâm',
        ], [
            'name'        => 'Văn Lâm',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 58 31N, 106 02 51E',
            'province_id' => 21,
        ]);
        District::updateOrCreate([
            'name' => 'Văn Giang',
        ], [
            'name'        => 'Văn Giang',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 55 51N, 105 57 14E',
            'province_id' => 21,
        ]);
        District::updateOrCreate([
            'name' => 'Yên Mỹ',
        ], [
            'name'        => 'Yên Mỹ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 53 45N, 106 01 21E',
            'province_id' => 21,
        ]);
        District::updateOrCreate([
            'name' => 'Mỹ Hào',
        ], [
            'name'        => 'Mỹ Hào',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 55 35N, 106 05 34E',
            'province_id' => 21,
        ]);
        District::updateOrCreate([
            'name' => 'Ân Thi',
        ], [
            'name'        => 'Ân Thi',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 48 49N, 106 05 30E',
            'province_id' => 21,
        ]);
        District::updateOrCreate([
            'name' => 'Khoái Châu',
        ], [
            'name'        => 'Khoái Châu',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 49 53N, 105 58 28E',
            'province_id' => 21,
        ]);
        District::updateOrCreate([
            'name' => 'Kim Động',
        ], [
            'name'        => 'Kim Động',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 44 47N, 106 01 47E',
            'province_id' => 21,
        ]);
        District::updateOrCreate([
            'name' => 'Tiên Lữ',
        ], [
            'name'        => 'Tiên Lữ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 40 05N, 106 07 59E',
            'province_id' => 21,
        ]);
        District::updateOrCreate([
            'name' => 'Phù Cừ',
        ], [
            'name'        => 'Phù Cừ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 42 51N, 106 11 30E',
            'province_id' => 21,
        ]);
        District::updateOrCreate([
            'name' => 'Thái Bình',
        ], [
            'name'        => 'Thái Bình',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 26 45N, 106 19 56E',
            'province_id' => 22,
        ]);
        District::updateOrCreate([
            'name' => 'Quỳnh Phụ',
        ], [
            'name'        => 'Quỳnh Phụ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 38 57N, 106 21 16E',
            'province_id' => 22,
        ]);
        District::updateOrCreate([
            'name' => 'Hưng Hà',
        ], [
            'name'        => 'Hưng Hà',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 35 38N, 106 12 42E',
            'province_id' => 22,
        ]);
        District::updateOrCreate([
            'name' => 'Đông Hưng',
        ], [
            'name'        => 'Đông Hưng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 32 50N, 106 20 15E',
            'province_id' => 22,
        ]);
        District::updateOrCreate([
            'name' => 'Thái Thụy',
        ], [
            'name'        => 'Thái Thụy',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 32 33N, 106 32 32E',
            'province_id' => 22,
        ]);
        District::updateOrCreate([
            'name' => 'Tiền Hải',
        ], [
            'name'        => 'Tiền Hải',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 21 05N, 106 32 45E',
            'province_id' => 22,
        ]);
        District::updateOrCreate([
            'name' => 'Kiến Xương',
        ], [
            'name'        => 'Kiến Xương',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 23 52N, 106 25 22E',
            'province_id' => 22,
        ]);
        District::updateOrCreate([
            'name' => 'Vũ Thư',
        ], [
            'name'        => 'Vũ Thư',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 25 29N, 106 16 43E',
            'province_id' => 22,
        ]);
        District::updateOrCreate([
            'name' => 'Phủ Lý',
        ], [
            'name'        => 'Phủ Lý',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 32 19N, 105 54 55E',
            'province_id' => 23,
        ]);
        District::updateOrCreate([
            'name' => 'Duy Tiên',
        ], [
            'name'        => 'Duy Tiên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 37 33N, 105 58 01E',
            'province_id' => 23,
        ]);
        District::updateOrCreate([
            'name' => 'Kim Bảng',
        ], [
            'name'        => 'Kim Bảng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 34 19N, 105 50 41E',
            'province_id' => 23,
        ]);
        District::updateOrCreate([
            'name' => 'Thanh Liêm',
        ], [
            'name'        => 'Thanh Liêm',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 27 31N, 105 55 09E',
            'province_id' => 23,
        ]);
        District::updateOrCreate([
            'name' => 'Bình Lục',
        ], [
            'name'        => 'Bình Lục',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 29 23N, 106 02 52E',
            'province_id' => 23,
        ]);
        District::updateOrCreate([
            'name' => 'Lý Nhân',
        ], [
            'name'        => 'Lý Nhân',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 32 55N, 106 04 48E',
            'province_id' => 23,
        ]);
        District::updateOrCreate([
            'name' => 'Nam Định',
        ], [
            'name'        => 'Nam Định',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 25 07N, 106 09 54E',
            'province_id' => 24,
        ]);
        District::updateOrCreate([
            'name' => 'Mỹ Lộc',
        ], [
            'name'        => 'Mỹ Lộc',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 27 21N, 106 07 56E',
            'province_id' => 24,
        ]);
        District::updateOrCreate([
            'name' => 'Vụ Bản',
        ], [
            'name'        => 'Vụ Bản',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 22 57N, 106 05 35E',
            'province_id' => 24,
        ]);
        District::updateOrCreate([
            'name' => 'Ý Yên',
        ], [
            'name'        => 'Ý Yên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 19 48N, 106 01 55E',
            'province_id' => 24,
        ]);
        District::updateOrCreate([
            'name' => 'Nghĩa Hưng',
        ], [
            'name'        => 'Nghĩa Hưng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 05 37N, 106 08 59E',
            'province_id' => 24,
        ]);
        District::updateOrCreate([
            'name' => 'Nam Trực',
        ], [
            'name'        => 'Nam Trực',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 20 08N, 106 12 54E',
            'province_id' => 24,
        ]);
        District::updateOrCreate([
            'name' => 'Trực Ninh',
        ], [
            'name'        => 'Trực Ninh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 14 42N, 106 12 45E',
            'province_id' => 24,
        ]);
        District::updateOrCreate([
            'name' => 'Xuân Trường',
        ], [
            'name'        => 'Xuân Trường',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 17 53N, 106 21 43E',
            'province_id' => 24,
        ]);
        District::updateOrCreate([
            'name' => 'Giao Thủy',
        ], [
            'name'        => 'Giao Thủy',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 14 45N, 106 28 39E',
            'province_id' => 24,
        ]);
        District::updateOrCreate([
            'name' => 'Hải Hậu',
        ], [
            'name'        => 'Hải Hậu',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 06 26N, 106 16 29E',
            'province_id' => 24,
        ]);
        District::updateOrCreate([
            'name' => 'Ninh Bình',
        ], [
            'name'        => 'Ninh Bình',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 14 45N, 105 58 24E',
            'province_id' => 25,
        ]);
        District::updateOrCreate([
            'name' => 'Tam Điệp',
        ], [
            'name'        => 'Tam Điệp',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 09 42N, 103 52 43E',
            'province_id' => 25,
        ]);
        District::updateOrCreate([
            'name' => 'Nho Quan',
        ], [
            'name'        => 'Nho Quan',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 18 46N, 105 42 48E',
            'province_id' => 25,
        ]);
        District::updateOrCreate([
            'name' => 'Gia Viễn',
        ], [
            'name'        => 'Gia Viễn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 19 50N, 105 52 20E',
            'province_id' => 25,
        ]);
        District::updateOrCreate([
            'name' => 'Hoa Lư',
        ], [
            'name'        => 'Hoa Lư',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 15 04N, 105 55 52E',
            'province_id' => 25,
        ]);
        District::updateOrCreate([
            'name' => 'Yên Khánh',
        ], [
            'name'        => 'Yên Khánh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 11 26N, 106 04 33E',
            'province_id' => 25,
        ]);
        District::updateOrCreate([
            'name' => 'Kim Sơn',
        ], [
            'name'        => 'Kim Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 02 07N, 106 05 27E',
            'province_id' => 25,
        ]);
        District::updateOrCreate([
            'name' => 'Yên Mô',
        ], [
            'name'        => 'Yên Mô',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 07 45N, 105 59 45E',
            'province_id' => 25,
        ]);
        District::updateOrCreate([
            'name' => 'Thanh Hóa',
        ], [
            'name'        => 'Thanh Hóa',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '19 48 26N, 105 47 37E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Bỉm Sơn',
        ], [
            'name'        => 'Bỉm Sơn',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 05 21N, 105 51 48E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Sầm Sơn',
        ], [
            'name'        => 'Sầm Sơn',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '19 45 11N, 105 54 03E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Mường Lát',
        ], [
            'name'        => 'Mường Lát',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 30 42N, 104 37 27E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Quan Hóa',
        ], [
            'name'        => 'Quan Hóa',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 29 15N, 104 56 35E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Bá Thước',
        ], [
            'name'        => 'Bá Thước',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 22 48N, 105 14 50E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Quan Sơn',
        ], [
            'name'        => 'Quan Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 15 17N, 104 51 58E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Lang Chánh',
        ], [
            'name'        => 'Lang Chánh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 08 58N, 105 07 40E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Ngọc Lặc',
        ], [
            'name'        => 'Ngọc Lặc',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 04 08N, 105 22 39E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Cẩm Thủy',
        ], [
            'name'        => 'Cẩm Thủy',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 12 20N, 105 27 22E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Thạch Thành',
        ], [
            'name'        => 'Thạch Thành',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '21 12 41N, 105 36 38E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Hà Trung',
        ], [
            'name'        => 'Hà Trung',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 03 20N, 105 51 20E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Vĩnh Lộc',
        ], [
            'name'        => 'Vĩnh Lộc',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 02 29N, 105 39 28E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Yên Định',
        ], [
            'name'        => 'Yên Định',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 00 31N, 105 37 44E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Thọ Xuân',
        ], [
            'name'        => 'Thọ Xuân',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '19 55 39N, 105 29 14E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Thường Xuân',
        ], [
            'name'        => 'Thường Xuân',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '19 54 55N, 105 10 46E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Triệu Sơn',
        ], [
            'name'        => 'Triệu Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '19 48 11N, 105 34 03E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Thiệu Hoá',
        ], [
            'name'        => 'Thiệu Hoá',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '19 53 56N, 105 40 57E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Hoằng Hóa',
        ], [
            'name'        => 'Hoằng Hóa',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '19 51 59N, 105 51 34E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Hậu Lộc',
        ], [
            'name'        => 'Hậu Lộc',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '19 56 02N, 105 53 19E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Nga Sơn',
        ], [
            'name'        => 'Nga Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 00 16N, 105 59 26E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Như Xuân',
        ], [
            'name'        => 'Như Xuân',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '19 5 55N, 105 20 22E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Như Thanh',
        ], [
            'name'        => 'Như Thanh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '19 35 19N, 105 33 09E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Nông Cống',
        ], [
            'name'        => 'Nông Cống',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '19 36 58N, 105 40 54E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Đông Sơn',
        ], [
            'name'        => 'Đông Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '19 47 44N, 105 42 19E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Quảng Xương',
        ], [
            'name'        => 'Quảng Xương',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '19 40 53N, 105 48 01E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Tĩnh Gia',
        ], [
            'name'        => 'Tĩnh Gia',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '19 27 13N, 105 43 38E',
            'province_id' => 26,
        ]);
        District::updateOrCreate([
            'name' => 'Vinh',
        ], [
            'name'        => 'Vinh',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '18 41 06N, 105 42 05E',
            'province_id' => 27,
        ]);
        District::updateOrCreate([
            'name' => 'Cửa Lò',
        ], [
            'name'        => 'Cửa Lò',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '18 47 26N, 105 43 31E',
            'province_id' => 27,
        ]);
        District::updateOrCreate([
            'name' => 'Thái Hoà',
        ], [
            'name'        => 'Thái Hoà',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 27,
        ]);
        District::updateOrCreate([
            'name' => 'Quế Phong',
        ], [
            'name'        => 'Quế Phong',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '19 42 25N, 104 54 21E',
            'province_id' => 27,
        ]);
        District::updateOrCreate([
            'name' => 'Quỳ Châu',
        ], [
            'name'        => 'Quỳ Châu',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '19 32 16N, 105 03 18E',
            'province_id' => 27,
        ]);
        District::updateOrCreate([
            'name' => 'Kỳ Sơn',
        ], [
            'name'        => 'Kỳ Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '19 24 36N, 104 09 45E',
            'province_id' => 27,
        ]);
        District::updateOrCreate([
            'name' => 'Tương Dương',
        ], [
            'name'        => 'Tương Dương',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '19 19 15N, 104 35 41E',
            'province_id' => 27,
        ]);
        District::updateOrCreate([
            'name' => 'Nghĩa Đàn',
        ], [
            'name'        => 'Nghĩa Đàn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '19 21 19N, 105 26 33E',
            'province_id' => 27,
        ]);
        District::updateOrCreate([
            'name' => 'Quỳ Hợp',
        ], [
            'name'        => 'Quỳ Hợp',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '19 19 24N, 105 09 12E',
            'province_id' => 27,
        ]);
        District::updateOrCreate([
            'name' => 'Quỳnh Lưu',
        ], [
            'name'        => 'Quỳnh Lưu',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '19 14 01N, 105 37 00E',
            'province_id' => 27,
        ]);
        District::updateOrCreate([
            'name' => 'Con Cuông',
        ], [
            'name'        => 'Con Cuông',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '19 03 50N, 107 47 15E',
            'province_id' => 27,
        ]);
        District::updateOrCreate([
            'name' => 'Tân Kỳ',
        ], [
            'name'        => 'Tân Kỳ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '19 06 11N, 105 14 14E',
            'province_id' => 27,
        ]);
        District::updateOrCreate([
            'name' => 'Anh Sơn',
        ], [
            'name'        => 'Anh Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '18 58 04N, 105 04 30E',
            'province_id' => 27,
        ]);
        District::updateOrCreate([
            'name' => 'Diễn Châu',
        ], [
            'name'        => 'Diễn Châu',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '19 01 20N, 105 34 13E',
            'province_id' => 27,
        ]);
        District::updateOrCreate([
            'name' => 'Yên Thành',
        ], [
            'name'        => 'Yên Thành',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '19 01 25N, 105 26 17E',
            'province_id' => 27,
        ]);
        District::updateOrCreate([
            'name' => 'Đô Lương',
        ], [
            'name'        => 'Đô Lương',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '18 55 00N, 105 21 03E',
            'province_id' => 27,
        ]);
        District::updateOrCreate([
            'name' => 'Thanh Chương',
        ], [
            'name'        => 'Thanh Chương',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '18 44 11N, 105 12 59E',
            'province_id' => 27,
        ]);
        District::updateOrCreate([
            'name' => 'Nghi Lộc',
        ], [
            'name'        => 'Nghi Lộc',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '18 47 41N, 105 31 30E',
            'province_id' => 27,
        ]);
        District::updateOrCreate([
            'name' => 'Nam Đàn',
        ], [
            'name'        => 'Nam Đàn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '18 40 28N, 105 30 32E',
            'province_id' => 27,
        ]);
        District::updateOrCreate([
            'name' => 'Hưng Nguyên',
        ], [
            'name'        => 'Hưng Nguyên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '18 41 13N, 105 37 41E',
            'province_id' => 27,
        ]);
        District::updateOrCreate([
            'name' => 'Hà Tĩnh',
        ], [
            'name'        => 'Hà Tĩnh',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '18 21 20N, 105 54 00E',
            'province_id' => 28,
        ]);
        District::updateOrCreate([
            'name' => 'Hồng Lĩnh',
        ], [
            'name'        => 'Hồng Lĩnh',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '18 32 05N, 105 42 40E',
            'province_id' => 28,
        ]);
        District::updateOrCreate([
            'name' => 'Hương Sơn',
        ], [
            'name'        => 'Hương Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '18 26 47N, 105 19 36E',
            'province_id' => 28,
        ]);
        District::updateOrCreate([
            'name' => 'Đức Thọ',
        ], [
            'name'        => 'Đức Thọ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '18 29 23N, 105 36 39E',
            'province_id' => 28,
        ]);
        District::updateOrCreate([
            'name' => 'Vũ Quang',
        ], [
            'name'        => 'Vũ Quang',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '18 19 30N, 105 26 38E',
            'province_id' => 28,
        ]);
        District::updateOrCreate([
            'name' => 'Nghi Xuân',
        ], [
            'name'        => 'Nghi Xuân',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '18 38 46N, 105 46 17E',
            'province_id' => 28,
        ]);
        District::updateOrCreate([
            'name' => 'Can Lộc',
        ], [
            'name'        => 'Can Lộc',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '18 26 39N, 105 46 13E',
            'province_id' => 28,
        ]);
        District::updateOrCreate([
            'name' => 'Hương Khê',
        ], [
            'name'        => 'Hương Khê',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '18 11 36N, 105 41 24E',
            'province_id' => 28,
        ]);
        District::updateOrCreate([
            'name' => 'Thạch Hà',
        ], [
            'name'        => 'Thạch Hà',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '18 19 29N, 105 52 43E',
            'province_id' => 28,
        ]);
        District::updateOrCreate([
            'name' => 'Cẩm Xuyên',
        ], [
            'name'        => 'Cẩm Xuyên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '18 11 32N, 106 00 04E',
            'province_id' => 28,
        ]);
        District::updateOrCreate([
            'name' => 'Kỳ Anh',
        ], [
            'name'        => 'Kỳ Anh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '18 05 15N, 106 15 49E',
            'province_id' => 28,
        ]);
        District::updateOrCreate([
            'name' => 'Lộc Hà',
        ], [
            'name'        => 'Lộc Hà',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 28,
        ]);
        District::updateOrCreate([
            'name' => 'Đồng Hới',
        ], [
            'name'        => 'Đồng Hới',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '17 26 53N, 106 35 15E',
            'province_id' => 29,
        ]);
        District::updateOrCreate([
            'name' => 'Minh Hóa',
        ], [
            'name'        => 'Minh Hóa',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '17 44 03N, 105 51 45E',
            'province_id' => 29,
        ]);
        District::updateOrCreate([
            'name' => 'Tuyên Hóa',
        ], [
            'name'        => 'Tuyên Hóa',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '17 54 04N, 105 58 17E',
            'province_id' => 29,
        ]);
        District::updateOrCreate([
            'name' => 'Quảng Trạch',
        ], [
            'name'        => 'Quảng Trạch',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '17 50 04N, 106 22 24E',
            'province_id' => 29,
        ]);
        District::updateOrCreate([
            'name' => 'Bố Trạch',
        ], [
            'name'        => 'Bố Trạch',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '17 29 13N, 106 06 54E',
            'province_id' => 29,
        ]);
        District::updateOrCreate([
            'name' => 'Quảng Ninh',
        ], [
            'name'        => 'Quảng Ninh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '17 15 15N, 106 32 31E',
            'province_id' => 29,
        ]);
        District::updateOrCreate([
            'name' => 'Lệ Thủy',
        ], [
            'name'        => 'Lệ Thủy',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '17 07 35N, 106 41 47E',
            'province_id' => 29,
        ]);
        District::updateOrCreate([
            'name' => 'Đông Hà',
        ], [
            'name'        => 'Đông Hà',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '16 48 12N, 107 05 12E',
            'province_id' => 30,
        ]);
        District::updateOrCreate([
            'name' => 'Quảng Trị',
        ], [
            'name'        => 'Quảng Trị',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '16 44 37N, 107 11 20E',
            'province_id' => 30,
        ]);
        District::updateOrCreate([
            'name' => 'Vĩnh Linh',
        ], [
            'name'        => 'Vĩnh Linh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '17 01 35N, 106 53 49E',
            'province_id' => 30,
        ]);
        District::updateOrCreate([
            'name' => 'Hướng Hóa',
        ], [
            'name'        => 'Hướng Hóa',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '16 42 19N, 106 40 14E',
            'province_id' => 30,
        ]);
        District::updateOrCreate([
            'name' => 'Gio Linh',
        ], [
            'name'        => 'Gio Linh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '16 54 49N, 106 56 16E',
            'province_id' => 30,
        ]);
        District::updateOrCreate([
            'name' => 'Đa Krông',
        ], [
            'name'        => 'Đa Krông',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '16 33 58N, 106 55 49E',
            'province_id' => 30,
        ]);
        District::updateOrCreate([
            'name' => 'Cam Lộ',
        ], [
            'name'        => 'Cam Lộ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '16 47 09N, 106 57 52E',
            'province_id' => 30,
        ]);
        District::updateOrCreate([
            'name' => 'Triệu Phong',
        ], [
            'name'        => 'Triệu Phong',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '16 46 32N, 107 09 12E',
            'province_id' => 30,
        ]);
        District::updateOrCreate([
            'name' => 'Hải Lăng',
        ], [
            'name'        => 'Hải Lăng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '16 41 07N, 107 13 34E',
            'province_id' => 30,
        ]);
        District::updateOrCreate([
            'name' => 'Cồn Cỏ',
        ], [
            'name'        => 'Cồn Cỏ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '19 09 39N, 107 19 58E',
            'province_id' => 30,
        ]);
        District::updateOrCreate([
            'name' => 'Huế',
        ], [
            'name'        => 'Huế',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '16 27 16N, 107 34 29E',
            'province_id' => 31,
        ]);
        District::updateOrCreate([
            'name' => 'Phong Điền',
        ], [
            'name'        => 'Phong Điền',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '16 32 42N, 106 16 37E',
            'province_id' => 31,
        ]);
        District::updateOrCreate([
            'name' => 'Quảng Điền',
        ], [
            'name'        => 'Quảng Điền',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '16 35 21N, 107 29 31E',
            'province_id' => 31,
        ]);
        District::updateOrCreate([
            'name' => 'Phú Vang',
        ], [
            'name'        => 'Phú Vang',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '16 27 20N, 107 42 28E',
            'province_id' => 31,
        ]);
        District::updateOrCreate([
            'name' => 'Hương Thủy',
        ], [
            'name'        => 'Hương Thủy',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '16 19 27N, 107 37 26E',
            'province_id' => 31,
        ]);
        District::updateOrCreate([
            'name' => 'Hương Trà',
        ], [
            'name'        => 'Hương Trà',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '16 25 49N, 107 28 37E',
            'province_id' => 31,
        ]);
        District::updateOrCreate([
            'name' => 'A Lưới',
        ], [
            'name'        => 'A Lưới',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '16 13 59N, 107 16 12E',
            'province_id' => 31,
        ]);
        District::updateOrCreate([
            'name' => 'Phú Lộc',
        ], [
            'name'        => 'Phú Lộc',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '16 17 16N, 107 55 25E',
            'province_id' => 31,
        ]);
        District::updateOrCreate([
            'name' => 'Nam Đông',
        ], [
            'name'        => 'Nam Đông',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '16 07 11N, 107 41 25E',
            'province_id' => 31,
        ]);
        District::updateOrCreate([
            'name' => 'Liên Chiểu',
        ], [
            'name'        => 'Liên Chiểu',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '16 07 26N, 108 07 04E',
            'province_id' => 32,
        ]);
        District::updateOrCreate([
            'name' => 'Thanh Khê',
        ], [
            'name'        => 'Thanh Khê',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '16 03 28N, 108 11 00E',
            'province_id' => 32,
        ]);
        District::updateOrCreate([
            'name' => 'Hải Châu',
        ], [
            'name'        => 'Hải Châu',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '16 03 38N, 108 11 46E',
            'province_id' => 32,
        ]);
        District::updateOrCreate([
            'name' => 'Sơn Trà',
        ], [
            'name'        => 'Sơn Trà',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '16 06 13N, 108 16 26E',
            'province_id' => 32,
        ]);
        District::updateOrCreate([
            'name' => 'Ngũ Hành Sơn',
        ], [
            'name'        => 'Ngũ Hành Sơn',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '16 00 30N, 108 15 09E',
            'province_id' => 32,
        ]);
        District::updateOrCreate([
            'name' => 'Cẩm Lệ',
        ], [
            'name'        => 'Cẩm Lệ',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 32,
        ]);
        District::updateOrCreate([
            'name' => 'Hoà Vang',
        ], [
            'name'        => 'Hoà Vang',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '16 03 59N, 108 01 57E',
            'province_id' => 32,
        ]);
        District::updateOrCreate([
            'name' => 'Hoàng Sa',
        ], [
            'name'        => 'Hoàng Sa',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '16 21 36N, 111 57 01E',
            'province_id' => 32,
        ]);
        District::updateOrCreate([
            'name' => 'Tam Kỳ',
        ], [
            'name'        => 'Tam Kỳ',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '15 34 37N, 108 29 52E',
            'province_id' => 33,
        ]);
        District::updateOrCreate([
            'name' => 'Hội An',
        ], [
            'name'        => 'Hội An',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '15 53 20N, 108 20 42E',
            'province_id' => 33,
        ]);
        District::updateOrCreate([
            'name' => 'Tây Giang',
        ], [
            'name'        => 'Tây Giang',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '15 53 46N, 107 25 52E',
            'province_id' => 33,
        ]);
        District::updateOrCreate([
            'name' => 'Đông Giang',
        ], [
            'name'        => 'Đông Giang',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '15 54 44N, 107 47 06E',
            'province_id' => 33,
        ]);
        District::updateOrCreate([
            'name' => 'Đại Lộc',
        ], [
            'name'        => 'Đại Lộc',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '15 50 10N, 107 58 27E',
            'province_id' => 33,
        ]);
        District::updateOrCreate([
            'name' => 'Điện Bàn',
        ], [
            'name'        => 'Điện Bàn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '15 54 15N, 108 13 38E',
            'province_id' => 33,
        ]);
        District::updateOrCreate([
            'name' => 'Duy Xuyên',
        ], [
            'name'        => 'Duy Xuyên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '15 47 58N, 108 13 27E',
            'province_id' => 33,
        ]);
        District::updateOrCreate([
            'name' => 'Quế Sơn',
        ], [
            'name'        => 'Quế Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '15 41 03N, 108 05 34E',
            'province_id' => 33,
        ]);
        District::updateOrCreate([
            'name' => 'Nam Giang',
        ], [
            'name'        => 'Nam Giang',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '15 36 37N, 107 33 52E',
            'province_id' => 33,
        ]);
        District::updateOrCreate([
            'name' => 'Phước Sơn',
        ], [
            'name'        => 'Phước Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '15 23 17N, 107 50 22E',
            'province_id' => 33,
        ]);
        District::updateOrCreate([
            'name' => 'Hiệp Đức',
        ], [
            'name'        => 'Hiệp Đức',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '15 31 09N, 108 05 56E',
            'province_id' => 33,
        ]);
        District::updateOrCreate([
            'name' => 'Thăng Bình',
        ], [
            'name'        => 'Thăng Bình',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '15 42 29N, 108 22 04E',
            'province_id' => 33,
        ]);
        District::updateOrCreate([
            'name' => 'Tiên Phước',
        ], [
            'name'        => 'Tiên Phước',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '15 29 30N, 108 15 28E',
            'province_id' => 33,
        ]);
        District::updateOrCreate([
            'name' => 'Bắc Trà My',
        ], [
            'name'        => 'Bắc Trà My',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '15 08 00N, 108 05 32E',
            'province_id' => 33,
        ]);
        District::updateOrCreate([
            'name' => 'Nam Trà My',
        ], [
            'name'        => 'Nam Trà My',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '15 16 40N, 108 12 15E',
            'province_id' => 33,
        ]);
        District::updateOrCreate([
            'name' => 'Núi Thành',
        ], [
            'name'        => 'Núi Thành',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '15 26 53N, 108 34 49E',
            'province_id' => 33,
        ]);
        District::updateOrCreate([
            'name' => 'Phú Ninh',
        ], [
            'name'        => 'Phú Ninh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '15 30 43N, 108 24 43E',
            'province_id' => 33,
        ]);
        District::updateOrCreate([
            'name' => 'Nông Sơn',
        ], [
            'name'        => 'Nông Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 33,
        ]);
        District::updateOrCreate([
            'name' => 'Quảng Ngãi',
        ], [
            'name'        => 'Quảng Ngãi',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '15 07 17N, 108 48 24E',
            'province_id' => 34,
        ]);
        District::updateOrCreate([
            'name' => 'Bình Sơn',
        ], [
            'name'        => 'Bình Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '15 18 45N, 108 45 35E',
            'province_id' => 34,
        ]);
        District::updateOrCreate([
            'name' => 'Trà Bồng',
        ], [
            'name'        => 'Trà Bồng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '15 13 30N, 108 29 57E',
            'province_id' => 34,
        ]);
        District::updateOrCreate([
            'name' => 'Tây Trà',
        ], [
            'name'        => 'Tây Trà',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '15 11 13N, 108 22 23E',
            'province_id' => 34,
        ]);
        District::updateOrCreate([
            'name' => 'Sơn Tịnh',
        ], [
            'name'        => 'Sơn Tịnh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '15 11 49N, 108 45 03E',
            'province_id' => 34,
        ]);
        District::updateOrCreate([
            'name' => 'Tư Nghĩa',
        ], [
            'name'        => 'Tư Nghĩa',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '15 05 25N, 108 45 23E',
            'province_id' => 34,
        ]);
        District::updateOrCreate([
            'name' => 'Sơn Hà',
        ], [
            'name'        => 'Sơn Hà',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '14 58 35N, 108 29 09E',
            'province_id' => 34,
        ]);
        District::updateOrCreate([
            'name' => 'Sơn Tây',
        ], [
            'name'        => 'Sơn Tây',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '14 58 11N, 108 21 22E',
            'province_id' => 34,
        ]);
        District::updateOrCreate([
            'name' => 'Minh Long',
        ], [
            'name'        => 'Minh Long',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '14 56 49N, 108 40 19E',
            'province_id' => 34,
        ]);
        District::updateOrCreate([
            'name' => 'Nghĩa Hành',
        ], [
            'name'        => 'Nghĩa Hành',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '14 58 06N, 108 46 05E',
            'province_id' => 34,
        ]);
        District::updateOrCreate([
            'name' => 'Mộ Đức',
        ], [
            'name'        => 'Mộ Đức',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 59 13N, 108 52 21E',
            'province_id' => 34,
        ]);
        District::updateOrCreate([
            'name' => 'Đức Phổ',
        ], [
            'name'        => 'Đức Phổ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '14 44 59N, 108 56 58E',
            'province_id' => 34,
        ]);
        District::updateOrCreate([
            'name' => 'Ba Tơ',
        ], [
            'name'        => 'Ba Tơ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '14 42 52N, 108 43 44E',
            'province_id' => 34,
        ]);
        District::updateOrCreate([
            'name' => 'Lý Sơn',
        ], [
            'name'        => 'Lý Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '15 22 50N, 109 06 56E',
            'province_id' => 34,
        ]);
        District::updateOrCreate([
            'name' => 'Qui Nhơn',
        ], [
            'name'        => 'Qui Nhơn',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '13 47 15N, 109 12 48E',
            'province_id' => 35,
        ]);
        District::updateOrCreate([
            'name' => 'An Lão',
        ], [
            'name'        => 'An Lão',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '14 32 10N, 108 47 52E',
            'province_id' => 35,
        ]);
        District::updateOrCreate([
            'name' => 'Hoài Nhơn',
        ], [
            'name'        => 'Hoài Nhơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '14 30 56N, 109 01 56E',
            'province_id' => 35,
        ]);
        District::updateOrCreate([
            'name' => 'Hoài Ân',
        ], [
            'name'        => 'Hoài Ân',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '14 20 51N, 108 54 04E',
            'province_id' => 35,
        ]);
        District::updateOrCreate([
            'name' => 'Phù Mỹ',
        ], [
            'name'        => 'Phù Mỹ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '14 14 41N, 109 05 43E',
            'province_id' => 35,
        ]);
        District::updateOrCreate([
            'name' => 'Vĩnh Thạnh',
        ], [
            'name'        => 'Vĩnh Thạnh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '14 14 26N, 108 44 08E',
            'province_id' => 35,
        ]);
        District::updateOrCreate([
            'name' => 'Tây Sơn',
        ], [
            'name'        => 'Tây Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '13 56 47N, 108 53 06E',
            'province_id' => 35,
        ]);
        District::updateOrCreate([
            'name' => 'Phù Cát',
        ], [
            'name'        => 'Phù Cát',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '14 03 48N, 109 03 57E',
            'province_id' => 35,
        ]);
        District::updateOrCreate([
            'name' => 'An Nhơn',
        ], [
            'name'        => 'An Nhơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '13 51 28N, 109 04 02E',
            'province_id' => 35,
        ]);
        District::updateOrCreate([
            'name' => 'Tuy Phước',
        ], [
            'name'        => 'Tuy Phước',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '13 46 30N, 109 05 38E',
            'province_id' => 35,
        ]);
        District::updateOrCreate([
            'name' => 'Vân Canh',
        ], [
            'name'        => 'Vân Canh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '13 40 35N, 108 57 52E',
            'province_id' => 35,
        ]);
        District::updateOrCreate([
            'name' => 'Tuy Hòa',
        ], [
            'name'        => 'Tuy Hòa',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '13 05 42N, 109 15 50E',
            'province_id' => 36,
        ]);
        District::updateOrCreate([
            'name' => 'Sông Cầu',
        ], [
            'name'        => 'Sông Cầu',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '13 31 40N, 109 12 39E',
            'province_id' => 36,
        ]);
        District::updateOrCreate([
            'name' => 'Đồng Xuân',
        ], [
            'name'        => 'Đồng Xuân',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '13 24 59N, 108 56 46E',
            'province_id' => 36,
        ]);
        District::updateOrCreate([
            'name' => 'Tuy An',
        ], [
            'name'        => 'Tuy An',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '13 15 19N, 109 12 21E',
            'province_id' => 36,
        ]);
        District::updateOrCreate([
            'name' => 'Sơn Hòa',
        ], [
            'name'        => 'Sơn Hòa',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '13 12 16N, 108 57 17E',
            'province_id' => 36,
        ]);
        District::updateOrCreate([
            'name' => 'Sông Hinh',
        ], [
            'name'        => 'Sông Hinh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '12 54 19N, 108 53 38E',
            'province_id' => 36,
        ]);
        District::updateOrCreate([
            'name' => 'Tây Hoà',
        ], [
            'name'        => 'Tây Hoà',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 36,
        ]);
        District::updateOrCreate([
            'name' => 'Phú Hoà',
        ], [
            'name'        => 'Phú Hoà',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '13 04 07N, 109 11 24E',
            'province_id' => 36,
        ]);
        District::updateOrCreate([
            'name' => 'Đông Hoà',
        ], [
            'name'        => 'Đông Hoà',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 36,
        ]);
        District::updateOrCreate([
            'name' => 'Nha Trang',
        ], [
            'name'        => 'Nha Trang',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '12 15 40N, 109 10 40E',
            'province_id' => 37,
        ]);
        District::updateOrCreate([
            'name' => 'Cam Ranh',
        ], [
            'name'        => 'Cam Ranh',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 59 05N, 108 08 17E',
            'province_id' => 37,
        ]);
        District::updateOrCreate([
            'name' => 'Cam Lâm',
        ], [
            'name'        => 'Cam Lâm',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 37,
        ]);
        District::updateOrCreate([
            'name' => 'Vạn Ninh',
        ], [
            'name'        => 'Vạn Ninh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '12 43 10N, 109 11 18E',
            'province_id' => 37,
        ]);
        District::updateOrCreate([
            'name' => 'Ninh Hòa',
        ], [
            'name'        => 'Ninh Hòa',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '12 32 54N, 109 06 11E',
            'province_id' => 37,
        ]);
        District::updateOrCreate([
            'name' => 'Khánh Vĩnh',
        ], [
            'name'        => 'Khánh Vĩnh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '12 17 50N, 108 51 56E',
            'province_id' => 37,
        ]);
        District::updateOrCreate([
            'name' => 'Diên Khánh',
        ], [
            'name'        => 'Diên Khánh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '12 13 19N, 109 02 16E',
            'province_id' => 37,
        ]);
        District::updateOrCreate([
            'name' => 'Khánh Sơn',
        ], [
            'name'        => 'Khánh Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '12 02 17N, 108 53 47E',
            'province_id' => 37,
        ]);
        District::updateOrCreate([
            'name' => 'Trường Sa',
        ], [
            'name'        => 'Trường Sa',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 07 27N, 114 15 00E',
            'province_id' => 37,
        ]);
        District::updateOrCreate([
            'name' => 'Phan Rang-Tháp Chàm',
        ], [
            'name'        => 'Phan Rang-Tháp Chàm',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 36 11N, 108 58 34E',
            'province_id' => 38,
        ]);
        District::updateOrCreate([
            'name' => 'Bác Ái',
        ], [
            'name'        => 'Bác Ái',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 54 45N, 108 51 29E',
            'province_id' => 38,
        ]);
        District::updateOrCreate([
            'name' => 'Ninh Sơn',
        ], [
            'name'        => 'Ninh Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 42 36N, 108 44 55E',
            'province_id' => 38,
        ]);
        District::updateOrCreate([
            'name' => 'Ninh Hải',
        ], [
            'name'        => 'Ninh Hải',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 42 46N, 109 05 41E',
            'province_id' => 38,
        ]);
        District::updateOrCreate([
            'name' => 'Ninh Phước',
        ], [
            'name'        => 'Ninh Phước',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 28 56N, 108 50 34E',
            'province_id' => 38,
        ]);
        District::updateOrCreate([
            'name' => 'Thuận Bắc',
        ], [
            'name'        => 'Thuận Bắc',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 38,
        ]);
        District::updateOrCreate([
            'name' => 'Thuận Nam',
        ], [
            'name'        => 'Thuận Nam',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 38,
        ]);
        District::updateOrCreate([
            'name' => 'Phan Thiết',
        ], [
            'name'        => 'Phan Thiết',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 54 16N, 108 03 44E',
            'province_id' => 39,
        ]);
        District::updateOrCreate([
            'name' => 'La Gi',
        ], [
            'name'        => 'La Gi',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 39,
        ]);
        District::updateOrCreate([
            'name' => 'Tuy Phong',
        ], [
            'name'        => 'Tuy Phong',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 20 26N, 108 41 15E',
            'province_id' => 39,
        ]);
        District::updateOrCreate([
            'name' => 'Bắc Bình',
        ], [
            'name'        => 'Bắc Bình',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 15 52N, 108 21 33E',
            'province_id' => 39,
        ]);
        District::updateOrCreate([
            'name' => 'Hàm Thuận Bắc',
        ], [
            'name'        => 'Hàm Thuận Bắc',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 09 18N, 108 03 07E',
            'province_id' => 39,
        ]);
        District::updateOrCreate([
            'name' => 'Hàm Thuận Nam',
        ], [
            'name'        => 'Hàm Thuận Nam',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 56 20N, 107 54 38E',
            'province_id' => 39,
        ]);
        District::updateOrCreate([
            'name' => 'Tánh Linh',
        ], [
            'name'        => 'Tánh Linh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 08 26N, 107 41 22E',
            'province_id' => 39,
        ]);
        District::updateOrCreate([
            'name' => 'Đức Linh',
        ], [
            'name'        => 'Đức Linh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 11 43N, 107 31 34E',
            'province_id' => 39,
        ]);
        District::updateOrCreate([
            'name' => 'Hàm Tân',
        ], [
            'name'        => 'Hàm Tân',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 44 41N, 107 41 33E',
            'province_id' => 39,
        ]);
        District::updateOrCreate([
            'name' => 'Phú Quí',
        ], [
            'name'        => 'Phú Quí',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 33 13N, 108 57 46E',
            'province_id' => 39,
        ]);
        District::updateOrCreate([
            'name' => 'Kon Tum',
        ], [
            'name'        => 'Kon Tum',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '14 20 32N, 107 58 04E',
            'province_id' => 40,
        ]);
        District::updateOrCreate([
            'name' => 'Đắk Glei',
        ], [
            'name'        => 'Đắk Glei',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '15 08 13N, 107 44 03E',
            'province_id' => 40,
        ]);
        District::updateOrCreate([
            'name' => 'Ngọc Hồi',
        ], [
            'name'        => 'Ngọc Hồi',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '14 44 23N, 107 38 49E',
            'province_id' => 40,
        ]);
        District::updateOrCreate([
            'name' => 'Đắk Tô',
        ], [
            'name'        => 'Đắk Tô',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '14 46 49N, 107 55 36E',
            'province_id' => 40,
        ]);
        District::updateOrCreate([
            'name' => 'Kon Plông',
        ], [
            'name'        => 'Kon Plông',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '14 48 13N, 108 20 05E',
            'province_id' => 40,
        ]);
        District::updateOrCreate([
            'name' => 'Kon Rẫy',
        ], [
            'name'        => 'Kon Rẫy',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '14 32 56N, 108 13 09E',
            'province_id' => 40,
        ]);
        District::updateOrCreate([
            'name' => 'Đắk Hà',
        ], [
            'name'        => 'Đắk Hà',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '14 36 50N, 107 59 55E',
            'province_id' => 40,
        ]);
        District::updateOrCreate([
            'name' => 'Sa Thầy',
        ], [
            'name'        => 'Sa Thầy',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '14 16 02N, 107 36 30E',
            'province_id' => 40,
        ]);
        District::updateOrCreate([
            'name' => 'Tu Mơ Rông',
        ], [
            'name'        => 'Tu Mơ Rông',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 40,
        ]);
        District::updateOrCreate([
            'name' => 'Pleiku',
        ], [
            'name'        => 'Pleiku',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '13 57 42N, 107 58 03E',
            'province_id' => 41,
        ]);
        District::updateOrCreate([
            'name' => 'An Khê',
        ], [
            'name'        => 'An Khê',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '14 01 24N, 108 41 29E',
            'province_id' => 41,
        ]);
        District::updateOrCreate([
            'name' => 'Ayun Pa',
        ], [
            'name'        => 'Ayun Pa',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 41,
        ]);
        District::updateOrCreate([
            'name' => 'Kbang',
        ], [
            'name'        => 'Kbang',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '14 18 08N, 108 29 17E',
            'province_id' => 41,
        ]);
        District::updateOrCreate([
            'name' => 'Đăk Đoa',
        ], [
            'name'        => 'Đăk Đoa',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '14 07 02N, 108 09 36E',
            'province_id' => 41,
        ]);
        District::updateOrCreate([
            'name' => 'Chư Păh',
        ], [
            'name'        => 'Chư Păh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '14 13 30N, 107 56 33E',
            'province_id' => 41,
        ]);
        District::updateOrCreate([
            'name' => 'Ia Grai',
        ], [
            'name'        => 'Ia Grai',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '13 59 25N, 107 43 16E',
            'province_id' => 41,
        ]);
        District::updateOrCreate([
            'name' => 'Mang Yang',
        ], [
            'name'        => 'Mang Yang',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '13 57 26N, 108 18 37E',
            'province_id' => 41,
        ]);
        District::updateOrCreate([
            'name' => 'Kông Chro',
        ], [
            'name'        => 'Kông Chro',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '13 45 47N, 108 36 04E',
            'province_id' => 41,
        ]);
        District::updateOrCreate([
            'name' => 'Đức Cơ',
        ], [
            'name'        => 'Đức Cơ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '13 46 16N, 107 38 26E',
            'province_id' => 41,
        ]);
        District::updateOrCreate([
            'name' => 'Chư Prông',
        ], [
            'name'        => 'Chư Prông',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '13 35 39N, 107 47 36E',
            'province_id' => 41,
        ]);
        District::updateOrCreate([
            'name' => 'Chư Sê',
        ], [
            'name'        => 'Chư Sê',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '13 37 04N, 108 06 56E',
            'province_id' => 41,
        ]);
        District::updateOrCreate([
            'name' => 'Đăk Pơ',
        ], [
            'name'        => 'Đăk Pơ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '13 55 47N, 108 36 16E',
            'province_id' => 41,
        ]);
        District::updateOrCreate([
            'name' => 'Ia Pa',
        ], [
            'name'        => 'Ia Pa',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '13 31 37N, 108 30 34E',
            'province_id' => 41,
        ]);
        District::updateOrCreate([
            'name' => 'Krông Pa',
        ], [
            'name'        => 'Krông Pa',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '13 14 13N, 108 39 12E',
            'province_id' => 41,
        ]);
        District::updateOrCreate([
            'name' => 'Phú Thiện',
        ], [
            'name'        => 'Phú Thiện',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 41,
        ]);
        District::updateOrCreate([
            'name' => 'Chư Pưh',
        ], [
            'name'        => 'Chư Pưh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 41,
        ]);
        District::updateOrCreate([
            'name' => 'Buôn Ma Thuột',
        ], [
            'name'        => 'Buôn Ma Thuột',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '12 39 43N, 108 10 40E',
            'province_id' => 42,
        ]);
        District::updateOrCreate([
            'name' => 'Buôn Hồ',
        ], [
            'name'        => 'Buôn Hồ',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 42,
        ]);
        District::updateOrCreate([
            'name' => "Ea H'leo",
        ], [
            'name'        => "Ea H'leo",
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '13 13 52N, 108 12 30E',
            'province_id' => 42,
        ]);
        District::updateOrCreate([
            'name' => 'Ea Súp',
        ], [
            'name'        => 'Ea Súp',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '13 10 59N, 107 46 49E',
            'province_id' => 42,
        ]);
        District::updateOrCreate([
            'name' => 'Buôn Đôn',
        ], [
            'name'        => 'Buôn Đôn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '12 52 45N, 107 45 20E',
            'province_id' => 42,
        ]);
        District::updateOrCreate([
            'name' => "Cư M'gar",
        ], [
            'name'        => "Cư M'gar",
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '12 53 47N, 108 04 16E',
            'province_id' => 42,
        ]);
        District::updateOrCreate([
            'name' => 'Krông Búk',
        ], [
            'name'        => 'Krông Búk',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '12 56 27N, 108 13 54E',
            'province_id' => 42,
        ]);
        District::updateOrCreate([
            'name' => 'Krông Năng',
        ], [
            'name'        => 'Krông Năng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '12 59 41N, 108 23 42E',
            'province_id' => 42,
        ]);
        District::updateOrCreate([
            'name' => 'Ea Kar',
        ], [
            'name'        => 'Ea Kar',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '12 48 17N, 108 32 42E',
            'province_id' => 42,
        ]);
        District::updateOrCreate([
            'name' => "M'đrắk",
        ], [
            'name'        => "M'đrắk",
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '12 42 14N, 108 47 09E',
            'province_id' => 42,
        ]);
        District::updateOrCreate([
            'name' => 'Krông Bông',
        ], [
            'name'        => 'Krông Bông',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '12 27 08N, 108 27 01E',
            'province_id' => 42,
        ]);
        District::updateOrCreate([
            'name' => 'Krông Pắc',
        ], [
            'name'        => 'Krông Pắc',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '12 41 20N, 108 18 42E',
            'province_id' => 42,
        ]);
        District::updateOrCreate([
            'name' => 'Krông A Na',
        ], [
            'name'        => 'Krông A Na',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '12 31 51N, 108 05 03E',
            'province_id' => 42,
        ]);
        District::updateOrCreate([
            'name' => 'Lắk',
        ], [
            'name'        => 'Lắk',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '12 19 20N, 108 12 17E',
            'province_id' => 42,
        ]);
        District::updateOrCreate([
            'name' => 'Cư Kuin',
        ], [
            'name'        => 'Cư Kuin',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 42,
        ]);
        District::updateOrCreate([
            'name' => 'Gia Nghĩa',
        ], [
            'name'        => 'Gia Nghĩa',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 43,
        ]);
        District::updateOrCreate([
            'name' => 'Đắk Glong',
        ], [
            'name'        => 'Đắk Glong',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '12 01 53N, 107 50 37E',
            'province_id' => 43,
        ]);
        District::updateOrCreate([
            'name' => 'Cư Jút',
        ], [
            'name'        => 'Cư Jút',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '12 40 56N, 107 44 44E',
            'province_id' => 43,
        ]);
        District::updateOrCreate([
            'name' => 'Đắk Mil',
        ], [
            'name'        => 'Đắk Mil',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '12 31 08N, 107 42 24E',
            'province_id' => 43,
        ]);
        District::updateOrCreate([
            'name' => 'Krông Nô',
        ], [
            'name'        => 'Krông Nô',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '12 22 16N, 107 53 49E',
            'province_id' => 43,
        ]);
        District::updateOrCreate([
            'name' => 'Đắk Song',
        ], [
            'name'        => 'Đắk Song',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '12 14 04N, 107 36 30E',
            'province_id' => 43,
        ]);
        District::updateOrCreate([
            'name' => "Đắk R'lấp",
        ], [
            'name'        => "Đắk R'lấp",
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '12 02 30N, 107 25 59E',
            'province_id' => 43,
        ]);
        District::updateOrCreate([
            'name' => 'Tuy Đức',
        ], [
            'name'        => 'Tuy Đức',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 43,
        ]);
        District::updateOrCreate([
            'name' => 'Đà Lạt',
        ], [
            'name'        => 'Đà Lạt',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 54 33N, 108 27 08E',
            'province_id' => 44,
        ]);
        District::updateOrCreate([
            'name' => 'Bảo Lộc',
        ], [
            'name'        => 'Bảo Lộc',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 32 48N, 107 47 37E',
            'province_id' => 44,
        ]);
        District::updateOrCreate([
            'name' => 'Đam Rông',
        ], [
            'name'        => 'Đam Rông',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '12 02 35N, 108 10 26E',
            'province_id' => 44,
        ]);
        District::updateOrCreate([
            'name' => 'Lạc Dương',
        ], [
            'name'        => 'Lạc Dương',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '12 08 30N, 108 27 48E',
            'province_id' => 44,
        ]);
        District::updateOrCreate([
            'name' => 'Lâm Hà',
        ], [
            'name'        => 'Lâm Hà',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 55 26N, 108 11 31E',
            'province_id' => 44,
        ]);
        District::updateOrCreate([
            'name' => 'Đơn Dương',
        ], [
            'name'        => 'Đơn Dương',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 48 26N, 108 32 48E',
            'province_id' => 44,
        ]);
        District::updateOrCreate([
            'name' => 'Đức Trọng',
        ], [
            'name'        => 'Đức Trọng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 41 50N, 108 18 58E',
            'province_id' => 44,
        ]);
        District::updateOrCreate([
            'name' => 'Di Linh',
        ], [
            'name'        => 'Di Linh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 31 10N, 108 05 23E',
            'province_id' => 44,
        ]);
        District::updateOrCreate([
            'name' => 'Bảo Lâm',
        ], [
            'name'        => 'Bảo Lâm',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 38 31N, 107 43 25E',
            'province_id' => 44,
        ]);
        District::updateOrCreate([
            'name' => 'Đạ Huoai',
        ], [
            'name'        => 'Đạ Huoai',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 27 11N, 107 38 08E',
            'province_id' => 44,
        ]);
        District::updateOrCreate([
            'name' => 'Đạ Tẻh',
        ], [
            'name'        => 'Đạ Tẻh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 33 46N, 107 32 00E',
            'province_id' => 44,
        ]);
        District::updateOrCreate([
            'name' => 'Cát Tiên',
        ], [
            'name'        => 'Cát Tiên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 39 38N, 107 23 27E',
            'province_id' => 44,
        ]);
        District::updateOrCreate([
            'name' => 'Phước Long',
        ], [
            'name'        => 'Phước Long',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 45,
        ]);
        District::updateOrCreate([
            'name' => 'Đồng Xoài',
        ], [
            'name'        => 'Đồng Xoài',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 31 01N, 106 50 21E',
            'province_id' => 45,
        ]);
        District::updateOrCreate([
            'name' => 'Bình Long',
        ], [
            'name'        => 'Bình Long',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 45,
        ]);
        District::updateOrCreate([
            'name' => 'Bù Gia Mập',
        ], [
            'name'        => 'Bù Gia Mập',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 56 57N, 106 59 21E',
            'province_id' => 45,
        ]);
        District::updateOrCreate([
            'name' => 'Lộc Ninh',
        ], [
            'name'        => 'Lộc Ninh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 49 28N, 106 35 11E',
            'province_id' => 45,
        ]);
        District::updateOrCreate([
            'name' => 'Bù Đốp',
        ], [
            'name'        => 'Bù Đốp',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 59 08N, 106 49 54E',
            'province_id' => 45,
        ]);
        District::updateOrCreate([
            'name' => 'Hớn Quản',
        ], [
            'name'        => 'Hớn Quản',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 37 37N, 106 36 02E',
            'province_id' => 45,
        ]);
        District::updateOrCreate([
            'name' => 'Đồng Phù',
        ], [
            'name'        => 'Đồng Phù',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 28 45N, 106 57 07E',
            'province_id' => 45,
        ]);
        District::updateOrCreate([
            'name' => 'Bù Đăng',
        ], [
            'name'        => 'Bù Đăng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 46 09N, 107 14 14E',
            'province_id' => 45,
        ]);
        District::updateOrCreate([
            'name' => 'Chơn Thành',
        ], [
            'name'        => 'Chơn Thành',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 28 45N, 106 39 26E',
            'province_id' => 45,
        ]);
        District::updateOrCreate([
            'name' => 'Tây Ninh',
        ], [
            'name'        => 'Tây Ninh',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 21 59N, 106 07 47E',
            'province_id' => 46,
        ]);
        District::updateOrCreate([
            'name' => 'Tân Biên',
        ], [
            'name'        => 'Tân Biên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 35 14N, 105 57 53E',
            'province_id' => 46,
        ]);
        District::updateOrCreate([
            'name' => 'Tân Châu',
        ], [
            'name'        => 'Tân Châu',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 34 49N, 106 17 48E',
            'province_id' => 46,
        ]);
        District::updateOrCreate([
            'name' => 'Dương Minh Châu',
        ], [
            'name'        => 'Dương Minh Châu',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 22 04N, 106 16 58E',
            'province_id' => 46,
        ]);
        District::updateOrCreate([
            'name' => 'Châu Thành',
        ], [
            'name'        => 'Châu Thành',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 19 02N, 106 00 15E',
            'province_id' => 46,
        ]);
        District::updateOrCreate([
            'name' => 'Hòa Thành',
        ], [
            'name'        => 'Hòa Thành',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 15 31N, 106 08 44E',
            'province_id' => 46,
        ]);
        District::updateOrCreate([
            'name' => 'Gò Dầu',
        ], [
            'name'        => 'Gò Dầu',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 09 39N, 106 14 42E',
            'province_id' => 46,
        ]);
        District::updateOrCreate([
            'name' => 'Bến Cầu',
        ], [
            'name'        => 'Bến Cầu',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 07 50N, 106 08 25E',
            'province_id' => 46,
        ]);
        District::updateOrCreate([
            'name' => 'Trảng Bàng',
        ], [
            'name'        => 'Trảng Bàng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 06 18N, 106 23 12E',
            'province_id' => 46,
        ]);
        District::updateOrCreate([
            'name' => 'Thủ Dầu Một',
        ], [
            'name'        => 'Thủ Dầu Một',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 00 01N, 106 38 56E',
            'province_id' => 47,
        ]);
        District::updateOrCreate([
            'name' => 'Dầu Tiếng',
        ], [
            'name'        => 'Dầu Tiếng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 19 07N, 106 26 59E',
            'province_id' => 47,
        ]);
        District::updateOrCreate([
            'name' => 'Bến Cát',
        ], [
            'name'        => 'Bến Cát',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 12 42N, 106 36 28E',
            'province_id' => 47,
        ]);
        District::updateOrCreate([
            'name' => 'Phú Giáo',
        ], [
            'name'        => 'Phú Giáo',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 20 21N, 106 47 48E',
            'province_id' => 47,
        ]);
        District::updateOrCreate([
            'name' => 'Tân Uyên',
        ], [
            'name'        => 'Tân Uyên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 06 31N, 106 49 02E',
            'province_id' => 47,
        ]);
        District::updateOrCreate([
            'name' => 'Dĩ An',
        ], [
            'name'        => 'Dĩ An',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 55 03N, 106 47 09E',
            'province_id' => 47,
        ]);
        District::updateOrCreate([
            'name' => 'Thuận An',
        ], [
            'name'        => 'Thuận An',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 55 58N, 106 41 59E',
            'province_id' => 47,
        ]);
        District::updateOrCreate([
            'name' => 'Biên Hòa',
        ], [
            'name'        => 'Biên Hòa',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 56 31N, 106 50 50E',
            'province_id' => 48,
        ]);
        District::updateOrCreate([
            'name' => 'Long Khánh',
        ], [
            'name'        => 'Long Khánh',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 56 24N, 107 14 29E',
            'province_id' => 48,
        ]);
        District::updateOrCreate([
            'name' => 'Tân Phú',
        ], [
            'name'        => 'Tân Phú',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 22 51N, 107 21 35E',
            'province_id' => 48,
        ]);
        District::updateOrCreate([
            'name' => 'Vĩnh Cửu',
        ], [
            'name'        => 'Vĩnh Cửu',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 14 31N, 107 00 06E',
            'province_id' => 48,
        ]);
        District::updateOrCreate([
            'name' => 'Định Quán',
        ], [
            'name'        => 'Định Quán',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 12 41N, 107 17 03E',
            'province_id' => 48,
        ]);
        District::updateOrCreate([
            'name' => 'Trảng Bom',
        ], [
            'name'        => 'Trảng Bom',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 58 39N, 107 00 52E',
            'province_id' => 48,
        ]);
        District::updateOrCreate([
            'name' => 'Thống Nhất',
        ], [
            'name'        => 'Thống Nhất',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 58 29N, 107 09 26E',
            'province_id' => 48,
        ]);
        District::updateOrCreate([
            'name' => 'Cẩm Mỹ',
        ], [
            'name'        => 'Cẩm Mỹ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 47 05N, 107 14 36E',
            'province_id' => 48,
        ]);
        District::updateOrCreate([
            'name' => 'Long Thành',
        ], [
            'name'        => 'Long Thành',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 47 38N, 106 59 42E',
            'province_id' => 48,
        ]);
        District::updateOrCreate([
            'name' => 'Xuân Lộc',
        ], [
            'name'        => 'Xuân Lộc',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 55 39N, 107 24 21E',
            'province_id' => 48,
        ]);
        District::updateOrCreate([
            'name' => 'Nhơn Trạch',
        ], [
            'name'        => 'Nhơn Trạch',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 39 18N, 106 53 18E',
            'province_id' => 48,
        ]);
        District::updateOrCreate([
            'name' => 'Vũng Tầu',
        ], [
            'name'        => 'Vũng Tầu',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 24 08N, 107 07 05E',
            'province_id' => 49,
        ]);
        District::updateOrCreate([
            'name' => 'Bà Rịa',
        ], [
            'name'        => 'Bà Rịa',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 30 33N, 107 10 47E',
            'province_id' => 49,
        ]);
        District::updateOrCreate([
            'name' => 'Châu Đức',
        ], [
            'name'        => 'Châu Đức',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 39 23N, 107 15 08E',
            'province_id' => 49,
        ]);
        District::updateOrCreate([
            'name' => 'Xuyên Mộc',
        ], [
            'name'        => 'Xuyên Mộc',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 37 46N, 107 29 39E',
            'province_id' => 49,
        ]);
        District::updateOrCreate([
            'name' => 'Long Điền',
        ], [
            'name'        => 'Long Điền',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 26 47N, 107 12 53E',
            'province_id' => 49,
        ]);
        District::updateOrCreate([
            'name' => 'Đất Đỏ',
        ], [
            'name'        => 'Đất Đỏ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 28 40N, 107 18 27E',
            'province_id' => 49,
        ]);
        District::updateOrCreate([
            'name' => 'Tân Thành',
        ], [
            'name'        => 'Tân Thành',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 34 50N, 107 05 06E',
            'province_id' => 49,
        ]);
        District::updateOrCreate([
            'name' => 'Côn Đảo',
        ], [
            'name'        => 'Côn Đảo',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '8 42 25N, 106 36 05E',
            'province_id' => 49,
        ]);
        District::updateOrCreate([
            'name' => '1',
        ], [
            'name'        => '1',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 46 34N, 106 41 45E',
            'province_id' => 50,
        ]);
        District::updateOrCreate([
            'name' => '12',
        ], [
            'name'        => '12',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 51 43N, 106 39 32E',
            'province_id' => 50,
        ]);
        District::updateOrCreate([
            'name' => 'Thủ Đức',
        ], [
            'name'        => 'Thủ Đức',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 51 20N, 106 45 05E',
            'province_id' => 50,
        ]);
        District::updateOrCreate([
            'name' => '9',
        ], [
            'name'        => '9',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 49 49N, 106 49 03E',
            'province_id' => 50,
        ]);
        District::updateOrCreate([
            'name' => 'Gò Vấp',
        ], [
            'name'        => 'Gò Vấp',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 50 12N, 106 39 52E',
            'province_id' => 50,
        ]);
        District::updateOrCreate([
            'name' => 'Bình Thạnh',
        ], [
            'name'        => 'Bình Thạnh',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 48 46N, 106 42 57E',
            'province_id' => 50,
        ]);
        District::updateOrCreate([
            'name' => 'Tân Bình',
        ], [
            'name'        => 'Tân Bình',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 48 13N, 106 39 03E',
            'province_id' => 50,
        ]);
        District::updateOrCreate([
            'name' => 'Tân Phú',
        ], [
            'name'        => 'Tân Phú',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 47 32N, 106 37 31E',
            'province_id' => 50,
        ]);
        District::updateOrCreate([
            'name' => 'Phú Nhuận',
        ], [
            'name'        => 'Phú Nhuận',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 48 06N, 106 40 39E',
            'province_id' => 50,
        ]);
        District::updateOrCreate([
            'name' => '2',
        ], [
            'name'        => '2',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 46 51N, 106 45 25E',
            'province_id' => 50,
        ]);
        District::updateOrCreate([
            'name' => '3',
        ], [
            'name'        => '3',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 46 48N, 106 40 46E',
            'province_id' => 50,
        ]);
        District::updateOrCreate([
            'name' => '10',
        ], [
            'name'        => '10',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 46 25N, 106 40 02E',
            'province_id' => 50,
        ]);
        District::updateOrCreate([
            'name' => '11',
        ], [
            'name'        => '11',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 46 01N, 106 38 44E',
            'province_id' => 50,
        ]);
        District::updateOrCreate([
            'name' => '4',
        ], [
            'name'        => '4',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 45 42N, 106 42 09E',
            'province_id' => 50,
        ]);
        District::updateOrCreate([
            'name' => '5',
        ], [
            'name'        => '5',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 45 24N, 106 40 00E',
            'province_id' => 50,
        ]);
        District::updateOrCreate([
            'name' => '6',
        ], [
            'name'        => '6',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 44 46N, 106 38 10E',
            'province_id' => 50,
        ]);
        District::updateOrCreate([
            'name' => '8',
        ], [
            'name'        => '8',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 43 24N, 106 37 40E',
            'province_id' => 50,
        ]);
        District::updateOrCreate([
            'name' => 'Bình Tân',
        ], [
            'name'        => 'Bình Tân',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 46 16N, 106 35 26E',
            'province_id' => 50,
        ]);
        District::updateOrCreate([
            'name' => '7',
        ], [
            'name'        => '7',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 44 19N, 106 43 35E',
            'province_id' => 50,
        ]);
        District::updateOrCreate([
            'name' => 'Củ Chi',
        ], [
            'name'        => 'Củ Chi',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '11 02 17N, 106 30 20E',
            'province_id' => 50,
        ]);
        District::updateOrCreate([
            'name' => 'Hóc Môn',
        ], [
            'name'        => 'Hóc Môn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 52 42N, 106 35 33E',
            'province_id' => 50,
        ]);
        District::updateOrCreate([
            'name' => 'Bình Chánh',
        ], [
            'name'        => 'Bình Chánh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 45 01N, 106 30 45E',
            'province_id' => 50,
        ]);
        District::updateOrCreate([
            'name' => 'Nhà Bè',
        ], [
            'name'        => 'Nhà Bè',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 39 06N, 106 43 35E',
            'province_id' => 50,
        ]);
        District::updateOrCreate([
            'name' => 'Cần Giờ',
        ], [
            'name'        => 'Cần Giờ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 30 43N, 106 52 50E',
            'province_id' => 50,
        ]);
        District::updateOrCreate([
            'name' => 'Tân An',
        ], [
            'name'        => 'Tân An',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 31 36N, 106 24 06E',
            'province_id' => 51,
        ]);
        District::updateOrCreate([
            'name' => 'Tân Hưng',
        ], [
            'name'        => 'Tân Hưng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 49 05N, 105 39 26E',
            'province_id' => 51,
        ]);
        District::updateOrCreate([
            'name' => 'Vĩnh Hưng',
        ], [
            'name'        => 'Vĩnh Hưng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 52 54N, 105 45 58E',
            'province_id' => 51,
        ]);
        District::updateOrCreate([
            'name' => 'Mộc Hóa',
        ], [
            'name'        => 'Mộc Hóa',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 47 09N, 105 57 56E',
            'province_id' => 51,
        ]);
        District::updateOrCreate([
            'name' => 'Tân Thạnh',
        ], [
            'name'        => 'Tân Thạnh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 37 44N, 105 57 07E',
            'province_id' => 51,
        ]);
        District::updateOrCreate([
            'name' => 'Thạnh Hóa',
        ], [
            'name'        => 'Thạnh Hóa',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 41 37N, 106 11 08E',
            'province_id' => 51,
        ]);
        District::updateOrCreate([
            'name' => 'Đức Huệ',
        ], [
            'name'        => 'Đức Huệ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 51 57N, 106 15 48E',
            'province_id' => 51,
        ]);
        District::updateOrCreate([
            'name' => 'Đức Hòa',
        ], [
            'name'        => 'Đức Hòa',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 53 04N, 106 23 58E',
            'province_id' => 51,
        ]);
        District::updateOrCreate([
            'name' => 'Bến Lức',
        ], [
            'name'        => 'Bến Lức',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 41 40N, 106 26 28E',
            'province_id' => 51,
        ]);
        District::updateOrCreate([
            'name' => 'Thủ Thừa',
        ], [
            'name'        => 'Thủ Thừa',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 39 41N, 106 20 12E',
            'province_id' => 51,
        ]);
        District::updateOrCreate([
            'name' => 'Tân Trụ',
        ], [
            'name'        => 'Tân Trụ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 31 47N, 106 30 06E',
            'province_id' => 51,
        ]);
        District::updateOrCreate([
            'name' => 'Cần Đước',
        ], [
            'name'        => 'Cần Đước',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 32 21N, 106 36 33E',
            'province_id' => 51,
        ]);
        District::updateOrCreate([
            'name' => 'Cần Giuộc',
        ], [
            'name'        => 'Cần Giuộc',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 34 43N, 106 38 35E',
            'province_id' => 51,
        ]);
        District::updateOrCreate([
            'name' => 'Châu Thành',
        ], [
            'name'        => 'Châu Thành',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 27 52N, 106 30 00E',
            'province_id' => 51,
        ]);
        District::updateOrCreate([
            'name' => 'Mỹ Tho',
        ], [
            'name'        => 'Mỹ Tho',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 22 14N, 106 21 52E',
            'province_id' => 52,
        ]);
        District::updateOrCreate([
            'name' => 'Gò Công',
        ], [
            'name'        => 'Gò Công',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 21 55N, 106 40 24E',
            'province_id' => 52,
        ]);
        District::updateOrCreate([
            'name' => 'Tân Phước',
        ], [
            'name'        => 'Tân Phước',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 30 36N, 106 13 02E',
            'province_id' => 52,
        ]);
        District::updateOrCreate([
            'name' => 'Cái Bè',
        ], [
            'name'        => 'Cái Bè',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 24 21N, 105 56 01E',
            'province_id' => 52,
        ]);
        District::updateOrCreate([
            'name' => 'Cai Lậy',
        ], [
            'name'        => 'Cai Lậy',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 24 20N, 106 06 05E',
            'province_id' => 52,
        ]);
        District::updateOrCreate([
            'name' => 'Châu Thành',
        ], [
            'name'        => 'Châu Thành',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '20 25 21N, 106 16 57E',
            'province_id' => 52,
        ]);
        District::updateOrCreate([
            'name' => 'Chợ Gạo',
        ], [
            'name'        => 'Chợ Gạo',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 23 45N, 106 26 53E',
            'province_id' => 52,
        ]);
        District::updateOrCreate([
            'name' => 'Gò Công Tây',
        ], [
            'name'        => 'Gò Công Tây',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 19 55N, 106 35 02E',
            'province_id' => 52,
        ]);
        District::updateOrCreate([
            'name' => 'Gò Công Đông',
        ], [
            'name'        => 'Gò Công Đông',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 20 42N, 106 42 54E',
            'province_id' => 52,
        ]);
        District::updateOrCreate([
            'name' => 'Tân Phú Đông',
        ], [
            'name'        => 'Tân Phú Đông',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 52,
        ]);
        District::updateOrCreate([
            'name' => 'Bến Tre',
        ], [
            'name'        => 'Bến Tre',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 14 17N, 106 22 26E',
            'province_id' => 53,
        ]);
        District::updateOrCreate([
            'name' => 'Châu Thành',
        ], [
            'name'        => 'Châu Thành',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 17 24N, 106 17 45E',
            'province_id' => 53,
        ]);
        District::updateOrCreate([
            'name' => 'Chợ Lách',
        ], [
            'name'        => 'Chợ Lách',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 13 26N, 106 09 08E',
            'province_id' => 53,
        ]);
        District::updateOrCreate([
            'name' => 'Mỏ Cày Nam',
        ], [
            'name'        => 'Mỏ Cày Nam',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 06 56N, 106 19 40E',
            'province_id' => 53,
        ]);
        District::updateOrCreate([
            'name' => 'Giồng Trôm',
        ], [
            'name'        => 'Giồng Trôm',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 08 46N, 106 28 12E',
            'province_id' => 53,
        ]);
        District::updateOrCreate([
            'name' => 'Bình Đại',
        ], [
            'name'        => 'Bình Đại',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 09 56N, 106 37 46E',
            'province_id' => 53,
        ]);
        District::updateOrCreate([
            'name' => 'Ba Tri',
        ], [
            'name'        => 'Ba Tri',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 04 08N, 106 35 10E',
            'province_id' => 53,
        ]);
        District::updateOrCreate([
            'name' => 'Thạnh Phú',
        ], [
            'name'        => 'Thạnh Phú',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 55 53N, 106 32 45E',
            'province_id' => 53,
        ]);
        District::updateOrCreate([
            'name' => 'Mỏ Cày Bắc',
        ], [
            'name'        => 'Mỏ Cày Bắc',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 53,
        ]);
        District::updateOrCreate([
            'name' => 'Trà Vinh',
        ], [
            'name'        => 'Trà Vinh',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 57 09N, 106 20 39E',
            'province_id' => 54,
        ]);
        District::updateOrCreate([
            'name' => 'Càng Long',
        ], [
            'name'        => 'Càng Long',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 58 18N, 106 12 52E',
            'province_id' => 54,
        ]);
        District::updateOrCreate([
            'name' => 'Cầu Kè',
        ], [
            'name'        => 'Cầu Kè',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 51 23N, 106 03 33E',
            'province_id' => 54,
        ]);
        District::updateOrCreate([
            'name' => 'Tiểu Cần',
        ], [
            'name'        => 'Tiểu Cần',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 48 37N, 106 12 06E',
            'province_id' => 54,
        ]);
        District::updateOrCreate([
            'name' => 'Châu Thành',
        ], [
            'name'        => 'Châu Thành',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 52 57N, 106 24 12E',
            'province_id' => 54,
        ]);
        District::updateOrCreate([
            'name' => 'Cầu Ngang',
        ], [
            'name'        => 'Cầu Ngang',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 47 14N, 106 29 19E',
            'province_id' => 54,
        ]);
        District::updateOrCreate([
            'name' => 'Trà Cú',
        ], [
            'name'        => 'Trà Cú',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 42 06N, 106 16 24E',
            'province_id' => 54,
        ]);
        District::updateOrCreate([
            'name' => 'Duyên Hải',
        ], [
            'name'        => 'Duyên Hải',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 39 58N, 106 26 23E',
            'province_id' => 54,
        ]);
        District::updateOrCreate([
            'name' => 'Vĩnh Long',
        ], [
            'name'        => 'Vĩnh Long',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 15 09N, 105 56 08E',
            'province_id' => 55,
        ]);
        District::updateOrCreate([
            'name' => 'Long Hồ',
        ], [
            'name'        => 'Long Hồ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 13 58N, 105 55 47E',
            'province_id' => 55,
        ]);
        District::updateOrCreate([
            'name' => 'Mang Thít',
        ], [
            'name'        => 'Mang Thít',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 10 58N, 106 05 13E',
            'province_id' => 55,
        ]);
        District::updateOrCreate([
            'name' => 'Vũng Liêm',
        ], [
            'name'        => 'Vũng Liêm',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 03 32N, 106 10 35E',
            'province_id' => 55,
        ]);
        District::updateOrCreate([
            'name' => 'Tam Bình',
        ], [
            'name'        => 'Tam Bình',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 03 58N, 105 58 03E',
            'province_id' => 55,
        ]);
        District::updateOrCreate([
            'name' => 'Bình Minh',
        ], [
            'name'        => 'Bình Minh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 05 45N, 105 47 21E',
            'province_id' => 55,
        ]);
        District::updateOrCreate([
            'name' => 'Trà Ôn',
        ], [
            'name'        => 'Trà Ôn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 59 20N, 105 57 56E',
            'province_id' => 55,
        ]);
        District::updateOrCreate([
            'name' => 'Bình Tân',
        ], [
            'name'        => 'Bình Tân',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 55,
        ]);
        District::updateOrCreate([
            'name' => 'Cao Lãnh',
        ], [
            'name'        => 'Cao Lãnh',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 27 38N, 105 37 21E',
            'province_id' => 56,
        ]);
        District::updateOrCreate([
            'name' => 'Sa Đéc',
        ], [
            'name'        => 'Sa Đéc',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 19 22N, 105 44 31E',
            'province_id' => 56,
        ]);
        District::updateOrCreate([
            'name' => 'Hồng Ngự',
        ], [
            'name'        => 'Hồng Ngự',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 56,
        ]);
        District::updateOrCreate([
            'name' => 'Tân Hồng',
        ], [
            'name'        => 'Tân Hồng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 52 48N, 105 29 21E',
            'province_id' => 56,
        ]);
        District::updateOrCreate([
            'name' => 'Hồng Ngự',
        ], [
            'name'        => 'Hồng Ngự',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 48 13N, 105 19 00E',
            'province_id' => 56,
        ]);
        District::updateOrCreate([
            'name' => 'Tam Nông',
        ], [
            'name'        => 'Tam Nông',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 44 06N, 105 30 58E',
            'province_id' => 56,
        ]);
        District::updateOrCreate([
            'name' => 'Tháp Mười',
        ], [
            'name'        => 'Tháp Mười',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 33 36N, 105 47 13E',
            'province_id' => 56,
        ]);
        District::updateOrCreate([
            'name' => 'Cao Lãnh',
        ], [
            'name'        => 'Cao Lãnh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 29 03N, 105 41 40E',
            'province_id' => 56,
        ]);
        District::updateOrCreate([
            'name' => 'Thanh Bình',
        ], [
            'name'        => 'Thanh Bình',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 36 38N, 105 28 51E',
            'province_id' => 56,
        ]);
        District::updateOrCreate([
            'name' => 'Lấp Vò',
        ], [
            'name'        => 'Lấp Vò',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 21 27N, 105 36 06E',
            'province_id' => 56,
        ]);
        District::updateOrCreate([
            'name' => 'Lai Vung',
        ], [
            'name'        => 'Lai Vung',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 14 43N, 105 38 40E',
            'province_id' => 56,
        ]);
        District::updateOrCreate([
            'name' => 'Châu Thành',
        ], [
            'name'        => 'Châu Thành',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 13 27N, 105 48 38E',
            'province_id' => 56,
        ]);
        District::updateOrCreate([
            'name' => 'Long Xuyên',
        ], [
            'name'        => 'Long Xuyên',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 22 22N, 105 25 33E',
            'province_id' => 57,
        ]);
        District::updateOrCreate([
            'name' => 'Châu Đốc',
        ], [
            'name'        => 'Châu Đốc',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 41 20N, 105 05 15E',
            'province_id' => 57,
        ]);
        District::updateOrCreate([
            'name' => 'An Phú',
        ], [
            'name'        => 'An Phú',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 50 12N, 105 05 33E',
            'province_id' => 57,
        ]);
        District::updateOrCreate([
            'name' => 'Tân Châu',
        ], [
            'name'        => 'Tân Châu',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 49 11N, 105 11 18E',
            'province_id' => 57,
        ]);
        District::updateOrCreate([
            'name' => 'Phú Tân',
        ], [
            'name'        => 'Phú Tân',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 40 26N, 105 14 40E',
            'province_id' => 57,
        ]);
        District::updateOrCreate([
            'name' => 'Châu Phú',
        ], [
            'name'        => 'Châu Phú',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 34 12N, 105 12 13E',
            'province_id' => 57,
        ]);
        District::updateOrCreate([
            'name' => 'Tịnh Biên',
        ], [
            'name'        => 'Tịnh Biên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 33 30N, 105 00 17E',
            'province_id' => 57,
        ]);
        District::updateOrCreate([
            'name' => 'Tri Tôn',
        ], [
            'name'        => 'Tri Tôn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 24 41N, 104 56 58E',
            'province_id' => 57,
        ]);
        District::updateOrCreate([
            'name' => 'Châu Thành',
        ], [
            'name'        => 'Châu Thành',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 25 39N, 105 15 31E',
            'province_id' => 57,
        ]);
        District::updateOrCreate([
            'name' => 'Chợ Mới',
        ], [
            'name'        => 'Chợ Mới',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 27 23N, 105 26 57E',
            'province_id' => 57,
        ]);
        District::updateOrCreate([
            'name' => 'Thoại Sơn',
        ], [
            'name'        => 'Thoại Sơn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 16 45N, 105 15 59E',
            'province_id' => 57,
        ]);
        District::updateOrCreate([
            'name' => 'Rạch Giá',
        ], [
            'name'        => 'Rạch Giá',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 01 35N, 105 06 20E',
            'province_id' => 58,
        ]);
        District::updateOrCreate([
            'name' => 'Hà Tiên',
        ], [
            'name'        => 'Hà Tiên',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 22 54N, 104 30 10E',
            'province_id' => 58,
        ]);
        District::updateOrCreate([
            'name' => 'Kiên Lương',
        ], [
            'name'        => 'Kiên Lương',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 20 21N, 104 39 46E',
            'province_id' => 58,
        ]);
        District::updateOrCreate([
            'name' => 'Hòn Đất',
        ], [
            'name'        => 'Hòn Đất',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 14 20N, 104 55 57E',
            'province_id' => 58,
        ]);
        District::updateOrCreate([
            'name' => 'Tân Hiệp',
        ], [
            'name'        => 'Tân Hiệp',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 05 18N, 105 14 04E',
            'province_id' => 58,
        ]);
        District::updateOrCreate([
            'name' => 'Châu Thành',
        ], [
            'name'        => 'Châu Thành',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 57 37N, 105 10 16E',
            'province_id' => 58,
        ]);
        District::updateOrCreate([
            'name' => 'Giồng Giềng',
        ], [
            'name'        => 'Giồng Giềng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 56 05N, 105 22 06E',
            'province_id' => 58,
        ]);
        District::updateOrCreate([
            'name' => 'Gò Quao',
        ], [
            'name'        => 'Gò Quao',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 43 17N, 105 17 06E',
            'province_id' => 58,
        ]);
        District::updateOrCreate([
            'name' => 'An Biên',
        ], [
            'name'        => 'An Biên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 48 37N, 105 03 18E',
            'province_id' => 58,
        ]);
        District::updateOrCreate([
            'name' => 'An Minh',
        ], [
            'name'        => 'An Minh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 40 24N, 104 59 05E',
            'province_id' => 58,
        ]);
        District::updateOrCreate([
            'name' => 'Vĩnh Thuận',
        ], [
            'name'        => 'Vĩnh Thuận',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 33 25N, 105 11 30E',
            'province_id' => 58,
        ]);
        District::updateOrCreate([
            'name' => 'Phú Quốc',
        ], [
            'name'        => 'Phú Quốc',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 13 44N, 103 57 25E',
            'province_id' => 58,
        ]);
        District::updateOrCreate([
            'name' => 'Kiên Hải',
        ], [
            'name'        => 'Kiên Hải',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 48 31N, 104 37 48E',
            'province_id' => 58,
        ]);
        District::updateOrCreate([
            'name' => 'U Minh Thượng',
        ], [
            'name'        => 'U Minh Thượng',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 58,
        ]);
        District::updateOrCreate([
            'name' => 'Giang Thành',
        ], [
            'name'        => 'Giang Thành',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 58,
        ]);
        District::updateOrCreate([
            'name' => 'Ninh Kiều',
        ], [
            'name'        => 'Ninh Kiều',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 01 58N, 105 45 34E',
            'province_id' => 59,
        ]);
        District::updateOrCreate([
            'name' => 'Ô Môn',
        ], [
            'name'        => 'Ô Môn',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 07 28N, 105 37 51E',
            'province_id' => 59,
        ]);
        District::updateOrCreate([
            'name' => 'Bình Thuỷ',
        ], [
            'name'        => 'Bình Thuỷ',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 03 42N, 105 43 17E',
            'province_id' => 59,
        ]);
        District::updateOrCreate([
            'name' => 'Cái Răng',
        ], [
            'name'        => 'Cái Răng',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 59 57N, 105 46 56E',
            'province_id' => 59,
        ]);
        District::updateOrCreate([
            'name' => 'Thốt Nốt',
        ], [
            'name'        => 'Thốt Nốt',
            'type'        => District::TYPE_TOWNSHIP,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 14 23N, 105 32 02E',
            'province_id' => 59,
        ]);
        District::updateOrCreate([
            'name' => 'Vĩnh Thạnh',
        ], [
            'name'        => 'Vĩnh Thạnh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 11 35N, 105 22 45E',
            'province_id' => 59,
        ]);
        District::updateOrCreate([
            'name' => 'Cờ Đỏ',
        ], [
            'name'        => 'Cờ Đỏ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '10 02 48N, 105 29 46E',
            'province_id' => 59,
        ]);
        District::updateOrCreate([
            'name' => 'Phong Điền',
        ], [
            'name'        => 'Phong Điền',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 59 57N, 105 39 35E',
            'province_id' => 59,
        ]);
        District::updateOrCreate([
            'name' => 'Thới Lai',
        ], [
            'name'        => 'Thới Lai',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 59,
        ]);
        District::updateOrCreate([
            'name' => 'Vị Thanh',
        ], [
            'name'        => 'Vị Thanh',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 45 15N, 105 24 50E',
            'province_id' => 60,
        ]);
        District::updateOrCreate([
            'name' => 'Ngã Bảy',
        ], [
            'name'        => 'Ngã Bảy',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 60,
        ]);
        District::updateOrCreate([
            'name' => 'Châu Thành A',
        ], [
            'name'        => 'Châu Thành A',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 55 50N, 105 38 31E',
            'province_id' => 60,
        ]);
        District::updateOrCreate([
            'name' => 'Châu Thành',
        ], [
            'name'        => 'Châu Thành',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 55 22N, 105 48 37E',
            'province_id' => 60,
        ]);
        District::updateOrCreate([
            'name' => 'Phụng Hiệp',
        ], [
            'name'        => 'Phụng Hiệp',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 47 20N, 105 43 29E',
            'province_id' => 60,
        ]);
        District::updateOrCreate([
            'name' => 'Vị Thuỷ',
        ], [
            'name'        => 'Vị Thuỷ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 48 05N, 105 32 13E',
            'province_id' => 60,
        ]);
        District::updateOrCreate([
            'name' => 'Long Mỹ',
        ], [
            'name'        => 'Long Mỹ',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 40 47N, 105 30 53E',
            'province_id' => 60,
        ]);
        District::updateOrCreate([
            'name' => 'Sóc Trăng',
        ], [
            'name'        => 'Sóc Trăng',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 36 39N, 105 59 00E',
            'province_id' => 61,
        ]);
        District::updateOrCreate([
            'name' => 'Châu Thành',
        ], [
            'name'        => 'Châu Thành',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 61,
        ]);
        District::updateOrCreate([
            'name' => 'Kế Sách',
        ], [
            'name'        => 'Kế Sách',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 49 30N, 105 57 25E',
            'province_id' => 61,
        ]);
        District::updateOrCreate([
            'name' => 'Mỹ Tú',
        ], [
            'name'        => 'Mỹ Tú',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 38 21N, 105 49 52E',
            'province_id' => 61,
        ]);
        District::updateOrCreate([
            'name' => 'Cù Lao Dung',
        ], [
            'name'        => 'Cù Lao Dung',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 37 36N, 106 12 13E',
            'province_id' => 61,
        ]);
        District::updateOrCreate([
            'name' => 'Long Phú',
        ], [
            'name'        => 'Long Phú',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 34 38N, 106 06 07E',
            'province_id' => 61,
        ]);
        District::updateOrCreate([
            'name' => 'Mỹ Xuyên',
        ], [
            'name'        => 'Mỹ Xuyên',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 28 16N, 105 55 51E',
            'province_id' => 61,
        ]);
        District::updateOrCreate([
            'name' => 'Ngã Năm',
        ], [
            'name'        => 'Ngã Năm',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 31 38N, 105 37 22E',
            'province_id' => 61,
        ]);
        District::updateOrCreate([
            'name' => 'Thạnh Trị',
        ], [
            'name'        => 'Thạnh Trị',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 28 05N, 105 43 02E',
            'province_id' => 61,
        ]);
        District::updateOrCreate([
            'name' => 'Vĩnh Châu',
        ], [
            'name'        => 'Vĩnh Châu',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 20 50N, 105 59 58E',
            'province_id' => 61,
        ]);
        District::updateOrCreate([
            'name' => 'Trần Đề',
        ], [
            'name'        => 'Trần Đề',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 61,
        ]);
        District::updateOrCreate([
            'name' => 'Bạc Liêu',
        ], [
            'name'        => 'Bạc Liêu',
            'type'        => District::TYPE_TOWN,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 16 05N, 105 45 08E',
            'province_id' => 62,
        ]);
        District::updateOrCreate([
            'name' => 'Hồng Dân',
        ], [
            'name'        => 'Hồng Dân',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 30 37N, 105 24 25E',
            'province_id' => 62,
        ]);
        District::updateOrCreate([
            'name' => 'Phước Long',
        ], [
            'name'        => 'Phước Long',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 23 13N, 105 24 41E',
            'province_id' => 62,
        ]);
        District::updateOrCreate([
            'name' => 'Vĩnh Lợi',
        ], [
            'name'        => 'Vĩnh Lợi',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 16 51N, 105 40 54E',
            'province_id' => 62,
        ]);
        District::updateOrCreate([
            'name' => 'Giá Rai',
        ], [
            'name'        => 'Giá Rai',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 15 51N, 105 23 18E',
            'province_id' => 62,
        ]);
        District::updateOrCreate([
            'name' => 'Đông Hải',
        ], [
            'name'        => 'Đông Hải',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 08 11N, 105 24 42E',
            'province_id' => 62,
        ]);
        District::updateOrCreate([
            'name' => 'Hoà Bình',
        ], [
            'name'        => 'Hoà Bình',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '',
            'province_id' => 62,
        ]);
        District::updateOrCreate([
            'name' => 'Cà Mau',
        ], [
            'name'        => 'Cà Mau',
            'type'        => District::TYPE_CITY,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 10 33N, 105 11 11E',
            'province_id' => 63,
        ]);
        District::updateOrCreate([
            'name' => 'U Minh',
        ], [
            'name'        => 'U Minh',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 22 30N, 104 57 00E',
            'province_id' => 63,
        ]);
        District::updateOrCreate([
            'name' => 'Thới Bình',
        ], [
            'name'        => 'Thới Bình',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 22 50N, 105 07 35E',
            'province_id' => 63,
        ]);
        District::updateOrCreate([
            'name' => 'Trần Văn Thời',
        ], [
            'name'        => 'Trần Văn Thời',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 07 36N, 104 57 27E',
            'province_id' => 63,
        ]);
        District::updateOrCreate([
            'name' => 'Cái Nước',
        ], [
            'name'        => 'Cái Nước',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '9 00 31N, 105 03 23E',
            'province_id' => 63,
        ]);
        District::updateOrCreate([
            'name' => 'Đầm Dơi',
        ], [
            'name'        => 'Đầm Dơi',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '8 57 48N, 105 13 56E',
            'province_id' => 63,
        ]);
        District::updateOrCreate([
            'name' => 'Năm Căn',
        ], [
            'name'        => 'Năm Căn',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '8 46 59N, 104 58 20E',
            'province_id' => 63,
        ]);
        District::updateOrCreate([
            'name' => 'Phú Tân',
        ], [
            'name'        => 'Phú Tân',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '8 52 47N, 104 53 35E',
            'province_id' => 63,
        ]);
        District::updateOrCreate([
            'name' => 'Ngọc Hiển',
        ], [
            'name'        => 'Ngọc Hiển',
            'type'        => District::TYPE_DISTRICT,
            'status'      => District::STATUS_ACTIVE,
            'location'    => '8 40 47N, 104 57 58E',
            'province_id' => 63,
        ]);
    }
}
