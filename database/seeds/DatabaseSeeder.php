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
        App\Category::create(['category_name' => 'การ์ตูน']);
        App\Category::create(['category_name' => 'วรรณกรรม นวนิยาย']);
        App\Category::create(['category_name' => 'นิตยสาร']);
        App\Category::create(['category_name' => 'หนังสือต่างประเทศ']);

        App\Promotion::create([
          'id' => '1421',
          'title' => 'เช่า5เล่มลด10%',
          'description' => 'เช่าหนังสือของร้านทุกประเภทตั้งแต่5เล่มขึ้นไปได้รับส่วนลดทันที15%',
          'expired_date' => '20 พ.ค. 2560'
        ]);
        App\Promotion::create([
          'id' => '1422',
          'title' => 'เช่านวนิยาย ลดราคา 15%',
          'description' => 'เช่าหนังสือประเภทนวนิยายได้รับส่วนลดทันที5%',
          'expired_date' => '25 มิ.ย. 2560'
        ]);
        App\Promotion::create([
          'id' => '1423',
          'title' => 'เช่าหนังสือ10เล่มขึ้นไปได้สิทธิ์เช่าฟรีอีก1เล่ม',
          'description' => 'เช่าหนังสือของทางร้านทุกประเภทตั้งแต่10เล่มขึ้นไปในการเช่า1ครั้งได้สิทธิ์เช่าฟรีทันทีอีก1เล่ม',
          'expired_date' => '17 พ.ย. 2560'
        ]);


        $category = App\Category::where('category_name', '=', 'วรรณกรรม นวนิยาย')->first();
        if (!is_null($category)) {
            $category->books()->saveMany([
                            new App\Book([
                    'book_name' => "รักเปื้อนร้าย",
                    'status' => "available",
                    'price' => 50.00,
                    'author' =>"-",
                    'year' =>'25 เม.ย. 2560',
                    'pageSize' =>"90 หน้า",
                    'publishComp' =>'เข็มเขียน',
                    'img' =>'1.jpg'
                ]),

                            new App\Book([
                    'book_name' => "เจาะจิตฆาตกร เล่ม 1 ตอน ผ่าปมวิปริต",
                    'status' => "available",
                    'price' => 295.00,
                    'author' =>"-",
                    'year' =>'16 ก.พ. 2560',
                    'pageSize' =>"426 หน้า",
                    'publishComp' =>'นานมีบุ๊คส์ จำกัด',
                    'img' =>'2.jpg'
                ]),

                            new App\Book([
                    'book_name' => "นิยายสั้นสุดมันส์ เรื่องสั้นอันตราย",
                    'status' => "available",
                    'price' => 50.00,
                    'author' =>"ล. วิลิศมาหรา",
                    'year' =>'6 ก.ค. 2558',
                    'pageSize' =>"75 หน้า",
                    'publishComp' =>'ล. วิลิศมาหรา',
                    'img' =>'3.png'
                ]),
                            new App\Book([
                    'book_name' => "แดนรักมาเฟียเถื่อน",
                    'status' => "available",
                    'price' => 279.00,
                    'author' =>"-",
                    'year' =>'5 พ.ค. 2560',
                    'pageSize' =>"364 หน้า",
                    'publishComp' =>'วรัมพร',
                    'img' =>'4.jpg'
                ]),
                            new App\Book([
                    'book_name' => "พระพรหมแสนซน",
                    'status' => "available",
                    'price' => 250.00,
                    'author' =>"-",
                    'year' =>'24 ม.ค. 2560',
                    'pageSize' =>"603 หน้า",
                    'publishComp' =>'รัชนีกานต์',
                    'img' =>'5.jpg'
                ]),
                            new App\Book([
                    'book_name' => "นิยายสั้นสุดมันส์ เรื่องสั้นอันตราย2",
                    'status' => "available",
                    'price' => 50.00,
                    'author' =>"ล. วิลิศมาหรา",
                    'year' =>'6 ก.ค. 2558',
                    'pageSize' =>"50 หน้า",
                    'publishComp' =>'ล. วิลิศมาหรา',
                    'img' =>'6.png'
                ]),
                            new App\Book([
                    'book_name' => "เรื่องของฟ้าวลี สาวน้อยบนตึก",
                    'status' => "available",
                    'price' => 50.00,
                    'author' =>"-",
                    'year' =>'16 ม.ค. 2560',
                    'pageSize' =>"169 หน้า",
                    'publishComp' =>'บ้านวารสาร',
                    'img' =>'7.jpg'
                ]),
                            new App\Book([
                    'book_name' => "บัญชารักเทพบุตรเถื่อน",
                    'status' => "available",
                    'price' => 289.00,
                    'author' =>"-",
                    'year' =>'5 พ.ค. 2560',
                    'pageSize' =>"447 หน้า",
                    'publishComp' =>'วรัมพร',
                    'img' =>'8.jpg'
                ]),
                            new App\Book([
                    'book_name' => "สงครามลิขิตรัก",
                    'status' => "available",
                    'price' => 350.00,
                    'author' =>"ธุวดารา",
                    'year' =>'4 พ.ค. 2560',
                    'pageSize' =>"468 หน้า",
                    'publishComp' =>'ลัลล์ลลิล',
                    'img' =>'9.jpg'
                ]),
                            new App\Book([
                    'book_name' => "ซีรี่ย์รักชุด อสูรปองรัก",
                    'status' => "available",
                    'price' => 99.00,
                    'author' =>"คีตะธารา",
                    'year' =>'2 พ.ค. 2560',
                    'pageSize' =>"189 หน้า",
                    'publishComp' =>'-',
                    'img' =>'10.jpg'
                ]),
                            new App\Book([
                    'book_name' => "ภูผาไอยรา",
                    'status' => "available",
                    'price' => 150.00,
                    'author' =>"ธุวดารา",
                    'year' =>'1 พ.ค. 2560',
                    'pageSize' =>"225 หน้า",
                    'publishComp' =>'ลัลล์ลลิล',
                    'img' =>'11.jpg'
                ]),
                            new App\Book([
                    'book_name' => "กลลวงจอมพยัคฆ์",
                    'status' => "available",
                    'price' => 249.00,
                    'author' =>"นรีรัตน์",
                    'year' =>'6 เม.ย. 2560',
                    'pageSize' =>"457 หน้า",
                    'publishComp' =>'-',
                    'img' =>'12.jpg'
                ]),
                            new App\Book([
                    'book_name' => "เนเมียวสีหบดี",
                    'status' => "available",
                    'price' => 93.00,
                    'author' =>"กุดารัศมี",
                    'year' =>'25 เม.ย. 2560',
                    'pageSize' =>"189 หน้า",
                    'publishComp' =>'กุดารัศมี',
                    'img' =>'13.jpg'
                ]),

            ]);

        }


        $category = App\Category::where('category_name', '=', 'นิตยสาร')->first();
        if (!is_null($category)) {
            $category->books()->saveMany([
                            new App\Book([
                    'book_name' => "เคหการเกษตร ฉบับ พฤษภาคม 2560",
                    'status' => "available",
                    'price' => 70.00,
                    'author' =>"-",
                    'year' =>'27 เม.ย. 2560',
                    'pageSize' =>"143 หน้า",
                    'publishComp' =>'เคหะการเกษตร',
                    'img' =>'14.jpg'
                ]),

                            new App\Book([
                    'book_name' => "นิตยสาร IMpossible no.2",
                    'status' => "available",
                    'price' => 95.00,
                    'author' =>"-",
                    'year' =>'27 ก.พ. 2560',
                    'pageSize' =>"45 หน้า",
                    'publishComp' =>'อิม',
                    'img' =>'15.jpg'
                ]),

                            new App\Book([
                    'book_name' => "Mellow ISSUE 13",
                    'status' => "available",
                    'price' => 50.00,
                    'author' =>"-",
                    'year' =>'5 ก.ค. 2559',
                    'pageSize' =>"44 หน้า",
                    'publishComp' =>'เมลโล่',
                    'img' =>'16.jpg'
                ]),
                            new App\Book([
                    'book_name' => "หมอชาวบ้าน พฤษภาคม 2560 Vol.457",
                    'status' => "available",
                    'price' => 55.00,
                    'author' =>"-",
                    'year' =>'28 เม.ย. 2560',
                    'pageSize' =>"95 หน้า",
                    'publishComp' =>'สำนักพิมพ์หมอชาวบ้าน',
                    'img' =>'17.jpg'
                ]),
                            new App\Book([
                    'book_name' => "SciMag ฉบับสิงหาคม 2559",
                    'status' => "available",
                    'price' => 80.00,
                    'author' =>"-",
                    'year' =>'4 ส.ค. 2559',
                    'pageSize' =>"42 หน้า",
                    'publishComp' =>'ซายแมก',
                    'img' =>'18.jpg'

            ]),
        ]);

        }


    }
}
