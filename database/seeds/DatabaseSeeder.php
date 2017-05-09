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

        App\Category::create(['name' => 'การ์ตูน']);
        App\Category::create(['name' => 'วรรณกรรม นวนิยาย']);
        App\Category::create(['name' => 'นิตยสาร']);
        App\Category::create(['name' => 'หนังสือต่างประเทศ']);

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




        $category = App\Category::where('name', '=', 'วรรณกรรม นวนิยาย')->first();
        if (!is_null($category)) {
            $category->books()->saveMany([
                            new App\Book([
                    'name' => "รักเปื้อนร้าย",
                    'status' => "available",
                    'price' => 50.00,
                    'author' =>"-",
                    'year' =>'25 เม.ย. 2560',
                    'pageSize' =>"90 หน้า",
                    'publishComp' =>'เข็มเขียน',
                    'img' =>'1.jpg'
                ]),

                            new App\Book([
                    'name' => "เจาะจิตฆาตกร เล่ม 1 ตอน ผ่าปมวิปริต",
                    'status' => "available",
                    'price' => 295.00,
                    'author' =>"-",
                    'year' =>'16 ก.พ. 2560',
                    'pageSize' =>"426 หน้า",
                    'publishComp' =>'นานมีบุ๊คส์ จำกัด',
                    'img' =>'2.jpg'
                ]),

                            new App\Book([
                    'name' => "นิยายสั้นสุดมันส์ เรื่องสั้นอันตราย",
                    'status' => "available",
                    'price' => 50.00,
                    'author' =>"ล. วิลิศมาหรา",
                    'year' =>'6 ก.ค. 2558',
                    'pageSize' =>"75 หน้า",
                    'publishComp' =>'ล. วิลิศมาหรา',
                    'img' =>'3.png'
                ]),
                            new App\Book([
                    'name' => "แดนรักมาเฟียเถื่อน",
                    'status' => "available",
                    'price' => 279.00,
                    'author' =>"-",
                    'year' =>'5 พ.ค. 2560',
                    'pageSize' =>"364 หน้า",
                    'publishComp' =>'วรัมพร',
                    'img' =>'4.jpg'
                ]),
                            new App\Book([
                    'name' => "พระพรหมแสนซน",
                    'status' => "available",
                    'price' => 250.00,
                    'author' =>"-",
                    'year' =>'24 ม.ค. 2560',
                    'pageSize' =>"603 หน้า",
                    'publishComp' =>'รัชนีกานต์',
                    'img' =>'5.jpg'
                ]),
                            new App\Book([
                    'name' => "นิยายสั้นสุดมันส์ เรื่องสั้นอันตราย2",
                    'status' => "available",
                    'price' => 50.00,
                    'author' =>"ล. วิลิศมาหรา",
                    'year' =>'6 ก.ค. 2558',
                    'pageSize' =>"50 หน้า",
                    'publishComp' =>'ล. วิลิศมาหรา',
                    'img' =>'6.png'
                ]),
                            new App\Book([
                    'name' => "เรื่องของฟ้าวลี สาวน้อยบนตึก",
                    'status' => "available",
                    'price' => 50.00,
                    'author' =>"-",
                    'year' =>'16 ม.ค. 2560',
                    'pageSize' =>"169 หน้า",
                    'publishComp' =>'บ้านวารสาร',
                    'img' =>'7.jpg'
                ]),
                            new App\Book([
                    'name' => "บัญชารักเทพบุตรเถื่อน",
                    'status' => "available",
                    'price' => 289.00,
                    'author' =>"-",
                    'year' =>'5 พ.ค. 2560',
                    'pageSize' =>"447 หน้า",
                    'publishComp' =>'วรัมพร',
                    'img' =>'8.jpg'
                ]),
                            new App\Book([
                    'name' => "สงครามลิขิตรัก",
                    'status' => "available",
                    'price' => 350.00,
                    'author' =>"ธุวดารา",
                    'year' =>'4 พ.ค. 2560',
                    'pageSize' =>"468 หน้า",
                    'publishComp' =>'ลัลล์ลลิล',
                    'img' =>'9.jpg'
                ]),
                            new App\Book([
                    'name' => "ซีรี่ย์รักชุด อสูรปองรัก",
                    'status' => "available",
                    'price' => 99.00,
                    'author' =>"คีตะธารา",
                    'year' =>'2 พ.ค. 2560',
                    'pageSize' =>"189 หน้า",
                    'publishComp' =>'-',
                    'img' =>'10.jpg'
                ]),
                            new App\Book([
                    'name' => "ภูผาไอยรา",
                    'status' => "available",
                    'price' => 150.00,
                    'author' =>"ธุวดารา",
                    'year' =>'1 พ.ค. 2560',
                    'pageSize' =>"225 หน้า",
                    'publishComp' =>'ลัลล์ลลิล',
                    'img' =>'11.jpg'
                ]),
                            new App\Book([
                    'name' => "กลลวงจอมพยัคฆ์",
                    'status' => "available",
                    'price' => 249.00,
                    'author' =>"นรีรัตน์",
                    'year' =>'6 เม.ย. 2560',
                    'pageSize' =>"457 หน้า",
                    'publishComp' =>'-',
                    'img' =>'12.jpg'
                ]),
                            new App\Book([
                    'name' => "เนเมียวสีหบดี",
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


 
        $category = App\Category::where('name', '=', 'นิตยสาร')->first();
        if (!is_null($category)) {
            $category->books()->saveMany([
                            new App\Book([
                    'name' => "เคหการเกษตร ฉบับ พฤษภาคม 2560",
                    'status' => "available",
                    'price' => 70.00,
                    'author' =>"-",
                    'year' =>'27 เม.ย. 2560',
                    'pageSize' =>"143 หน้า",
                    'publishComp' =>'เคหะการเกษตร',
                    'img' =>'14.jpg'
                ]),

                            new App\Book([
                    'name' => "นิตยสาร IMpossible no.2",
                    'status' => "available",
                    'price' => 95.00,
                    'author' =>"-",
                    'year' =>'27 ก.พ. 2560',
                    'pageSize' =>"45 หน้า",
                    'publishComp' =>'อิม',
                    'img' =>'15.jpg'
                ]),

                            new App\Book([
                    'name' => "Mellow ISSUE 13",
                    'status' => "available",
                    'price' => 50.00,
                    'author' =>"-",
                    'year' =>'5 ก.ค. 2559',
                    'pageSize' =>"44 หน้า",
                    'publishComp' =>'เมลโล่',
                    'img' =>'16.jpg'
                ]),
                            new App\Book([
                    'name' => "หมอชาวบ้าน พฤษภาคม 2560 Vol.457",
                    'status' => "available",
                    'price' => 55.00,
                    'author' =>"-",
                    'year' =>'28 เม.ย. 2560',
                    'pageSize' =>"95 หน้า",
                    'publishComp' =>'สำนักพิมพ์หมอชาวบ้าน',
                    'img' =>'17.jpg'
                ]),
                            new App\Book([
                    'name' => "SciMag ฉบับสิงหาคม 2559",
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

        $category = App\Category::where('name', '=', 'การ์ตูน')->first();
        if (!is_null($category)) {
            $category->books()->saveMany([
                            new App\Book([
                    'name' => "ก้าวแรกสู่สังเวียน เล่ม 74",
                    'status' => "available",
                    'price' => 59.00,
                    'author' =>" โจจิ โมริคาว่า",
                    'year' =>'25 เม.ย. 2560',
                    'pageSize' =>"90 หน้า",
                    'publishComp' =>'Kodansha Ltd.',
                    'img' =>'19.jpg'
                ]),

                            new App\Book([
                    'name' => "มังกรอหังการ ภาค สงครามจงหยวน เล่ม 15",
                    'status' => "available",
                    'price' => 59.00,
                    'author' =>" YOSHITO YAMAHARA",
                    'year' =>'12 ส.ค. 2560',
                    'pageSize' =>"-",
                    'publishComp' =>'Kodansha Ltd.',
                    'img' =>'20.jpg'
                ]),

                            new App\Book([
                    'name' => "ยอดยุทธ์บุรุษเหล็ก เล่ม 54",
                    'status' => "available",
                    'price' => 50.00,
                    'author' =>"ซิวฝูหลง",
                    'year' =>'5 ก.ค. 2558',
                    'pageSize' =>"-",
                    'publishComp' =>' Dark Comic & Toys Limited',
                    'img' =>'21.jpg'
                ]),
                            new App\Book([
                    'name' => "
ไฮคิว! Haikyu คู่ตบฟ้าประทาน ฮินาตะกับคาเงยามะ หนังสือ การ์ตูน ญี่ปุ่น Haikyu smm sic สยามอินเตอร์",
                    'status' => "available",
                    'price' => 713.00,
                    'author' =>"ทีมงานอี.คิว.พลัส จีเนียส",
                    'year' =>'24 พ.ค. 2560',
                    'pageSize' =>"181 หน้า",
                    'publishComp' =>' E.Q.Plus Genius',
                    'img' =>'22.jpg'
                ]),
                            new App\Book([
                    'name' => "SMM หนังสือการ์ตูน เซียวซิวจุ้ย ยอดยุทธ์ผู้พิชิต เล่ม 1 - 10(จบ)",
                    'status' => "available",
                    'price' => 902.00,
                    'author' =>"-",
                    'year' =>'24 ม.ค. 2560',
                    'pageSize' =>"603 หน้า",
                    'publishComp' =>'Siam inter multimedia co.,ltd.-C200042',
                    'img' =>'23.png'
                ]),
                            new App\Book([
                    'name' => " หนังสือการ์ตูน My Hero Academia เล่ม 1 - 7",
                    'status' => "available",
                    'price' => 333.00,
                    'author' =>"-",
                    'year' =>'6 ก.ค. 2558',
                    'pageSize' =>"50 หน้า",
                    'publishComp' =>'สยามอินเตอร์มัลติมีเดีย จำกัด (มหาชน)',
                    'img' =>'24.png'
                ]),
                            new App\Book([
                    'name' => "KOBATO. โคบาโตะ 6 (เล่มจบ)",
                    'status' => "available",
                    'price' => 55.00,
                    'author' =>"CLAMP",
                    'year' =>'1 เม.ย. 2559',
                    'pageSize' =>"181 หน้า",
                    'publishComp' =>'บงกช คอมมิคส์',
                    'img' =>'25.jpg'
                ]),
 

            ]);

        }

        $category = App\Category::where('name', '=', 'หนังสือต่างประเทศ')->first();
        if (!is_null($category)) {
            $category->books()->saveMany([
                            new App\Book([
                    'name' => "culture and etiquette book",
                    'status' => "available",
                    'price' => 450.00,
                    'author' =>"-",
                    'year' =>'20 ก.ค. 2559',
                    'pageSize' =>"540 หน้า",
                    'publishComp' =>'-',
                    'img' =>'26.jpg'
                ]),

                            new App\Book([
                    'name' => "outsider art",
                    'status' => "available",
                    'price' => 200.00,
                    'author' =>"-",
                    'year' =>'14 ธ.ค. 2554',
                    'pageSize' =>"46 หน้า",
                    'publishComp' =>'ภาพวาดกีฬาปีนผา',
                    'img' =>'27.jpg'
                ]),

                            new App\Book([
                    'name' => "GREAT LEADERS, GREAT SPEECHES",
                    'status' => "available",
                    'price' => 300.00,
                    'author' =>"ดร.ธีรวิทย์ ภิญโญณัฐกานต์",
                    'year' =>'17 เม.ย. 2555',
                    'pageSize' =>"184 หน้า",
                    'publishComp' =>' Dark Comic & Toys Limited',
                    'img' =>'28.jpg'
                ]),
                            new App\Book([
                    'name' => "A History of Freedom of Thought",
                    'status' => "available",
                    'price' => 600.00,
                    'author' =>"J. B. BURY",
                    'year' =>'17 ม.ค. 2555',
                    'pageSize' =>"181 หน้า",
                    'publishComp' =>'kanomdesign Studio',
                    'img' =>'29.png'
                ]),
                            new App\Book([
                    'name' => "5 Simple Tips to Boost Your Sales in the Jewelry Business",
                    'status' => "available",
                    'price' => 119.00,
                    'author' =>"-",
                    'year' =>'16 ต.ค. 2555',
                    'pageSize' =>"64 หน้า",
                    'publishComp' =>'อินฟินิตี้แอนด์บียอนด์',
                    'img' =>'30.jpg'
                ]),
 

            ]);

        }

    }
}
