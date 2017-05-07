<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	App\Category::create(['name' => 'วรรณกรรม นวนิยาย']);
        App\Category::create(['name' => 'นิตยสาร']);
        App\Category::create(['name' => 'การ์ตูน']);


        $category = App\Category::where('name', '=', 'วรรณกรรม นวนิยาย')->first();
        if (!is_null($category)) {
            $category->books()->saveMany([
                           	new App\Title([
                    'name' => "รักเปื้อนร้าย",
                    'status' => "available",
                    'price' => 50.00,
                    'author' =>"-",
                    'year' =>'25 เม.ย. 2560',
                    'pageSize' =>"90 หน้า",
                    'publishComp' =>'เข็มเขียน'
                ]),

                            new App\Title([
                    'name' => "เจาะจิตฆาตกร เล่ม 1 ตอน ผ่าปมวิปริต",
                    'status' => "available",
                    'price' => 295.00,
                    'author' =>"-",
                    'year' =>'16 ก.พ. 2560',
                    'pageSize' =>"426 หน้า",
                    'publishComp' =>'นานมีบุ๊คส์ จำกัด'
                ]),

                            new App\Title([
                    'name' => "นิยายสั้นสุดมันส์ เรื่องสั้นอันตราย",
                    'status' => "available",
                    'price' => 50.00,
                    'author' =>"ล. วิลิศมาหรา",
                    'year' =>'6 ก.ค. 2558',
                    'pageSize' =>"75 หน้า",
                    'publishComp' =>'ล. วิลิศมาหรา'
                ]),
                            new App\Title([
                    'name' => "แดนรักมาเฟียเถื่อน",
                    'status' => "available",
                    'price' => 279.00,
                    'author' =>"-",
                    'year' =>'5 พ.ค. 2560',
                    'pageSize' =>"364 หน้า",
                    'publishComp' =>'วรัมพร'
                ]),
                            new App\Title([
                    'name' => "พระพรหมแสนซน",
                    'status' => "available",
                    'price' => 250.00,
                    'author' =>"-",
                    'year' =>'24 ม.ค. 2560',
                    'pageSize' =>"603 หน้า",
                    'publishComp' =>'รัชนีกานต์'
                ]),
                            new App\Title([
                    'name' => "นิยายสั้นสุดมันส์ เรื่องสั้นอันตราย2",
                    'status' => "available",
                    'price' => 50.00,
                    'author' =>"ล. วิลิศมาหรา",
                    'year' =>'6 ก.ค. 2558',
                    'pageSize' =>"50 หน้า",
                    'publishComp' =>'ล. วิลิศมาหรา'
                ]),
                            new App\Title([
                    'name' => "เรื่องของฟ้าวลี สาวน้อยบนตึก",
                    'status' => "available",
                    'price' => 50.00,
                    'author' =>"-",
                    'year' =>'16 ม.ค. 2560',
                    'pageSize' =>"169 หน้า",
                    'publishComp' =>'บ้านวารสาร'
                ]),
                            new App\Title([
                    'name' => "บัญชารักเทพบุตรเถื่อน",
                    'status' => "available",
                    'price' => 289.00,
                    'author' =>"-",
                    'year' =>'5 พ.ค. 2560',
                    'pageSize' =>"447 หน้า",
                    'publishComp' =>'วรัมพร'
                ]),
                            new App\Title([
                    'name' => "สงครามลิขิตรัก",
                    'status' => "available",
                    'price' => 350.00,
                    'author' =>"ธุวดารา",
                    'year' =>'4 พ.ค. 2560',
                    'pageSize' =>"468 หน้า",
                    'publishComp' =>'ลัลล์ลลิล'
                ]),
                            new App\Title([
                    'name' => "ซีรี่ย์รักชุด อสูรปองรัก",
                    'status' => "available",
                    'price' => 99.00,
                    'author' =>"คีตะธารา",
                    'year' =>'2 พ.ค. 2560',
                    'pageSize' =>"189 หน้า",
                    'publishComp' =>'-'
                ]),
                            new App\Title([
                    'name' => "ภูผาไอยรา",
                    'status' => "available",
                    'price' => 150.00,
                    'author' =>"ธุวดารา",
                    'year' =>'1 พ.ค. 2560',
                    'pageSize' =>"225 หน้า",
                    'publishComp' =>'ลัลล์ลลิล'
                ]),
                            new App\Title([
                    'name' => "กลลวงจอมพยัคฆ์",
                    'status' => "available",
                    'price' => 249.00,
                    'author' =>"นรีรัตน์",
                    'year' =>'6 เม.ย. 2560',
                    'pageSize' =>"457 หน้า",
                    'publishComp' =>'-'
                ]),
                            new App\Title([
                    'name' => "เนเมียวสีหบดี",
                    'status' => "available",
                    'price' => 93.00,
                    'author' =>"กุดารัศมี",
                    'year' =>'25 เม.ย. 2560',
                    'pageSize' =>"189 หน้า",
                    'publishComp' =>'กุดารัศมี'
                ]),

            ]);

    	}


        $category = App\Category::where('name', '=', 'นิตยสาร')->first();
        if (!is_null($category)) {
            $category->books()->saveMany([
                            new App\Title([
                    'name' => "เคหการเกษตร ฉบับ พฤษภาคม 2560",
                    'status' => "available",
                    'price' => 70.00,
                    'author' =>"-",
                    'year' =>'27 เม.ย. 2560',
                    'pageSize' =>"143 หน้า",
                    'publishComp' =>'เคหะการเกษตร'
                ]),

                            new App\Title([
                    'name' => "นิตยสาร IMpossible no.2",
                    'status' => "available",
                    'price' => 95.00,
                    'author' =>"-",
                    'year' =>'27 ก.พ. 2560',
                    'pageSize' =>"45 หน้า",
                    'publishComp' =>'อิม'
                ]),

                            new App\Title([
                    'name' => "Mellow ISSUE 13",
                    'status' => "available",
                    'price' => 50.00,
                    'author' =>"-",
                    'year' =>'5 ก.ค. 2559',
                    'pageSize' =>"44 หน้า",
                    'publishComp' =>'เมลโล่'
                ]),
                            new App\Title([
                    'name' => "หมอชาวบ้าน พฤษภาคม 2560 Vol.457",
                    'status' => "available",
                    'price' => 55.00,
                    'author' =>"-",
                    'year' =>'28 เม.ย. 2560',
                    'pageSize' =>"95 หน้า",
                    'publishComp' =>'สำนักพิมพ์หมอชาวบ้าน'
                ]),
                            new App\Title([
                    'name' => "SciMag ฉบับสิงหาคม 2559",
                    'status' => "available",
                    'price' => 80.00,
                    'author' =>"-",
                    'year' =>'4 ส.ค. 2559',
                    'pageSize' =>"42 หน้า",
                    'publishComp' =>'ซายแมก'

            ]),
        ]);

        }
	}
}