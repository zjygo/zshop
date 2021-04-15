<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ZBrandTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('z_brand')->delete();
        
        \DB::table('z_brand')->insert(array (
            0 => 
            array (
                'id' => 1001000,
                'name' => 'MUJI制造商',
                'desc' => '严选精选了MUJI制造商和生产原料，
用几乎零利润的价格，剔除品牌溢价，
让用户享受原品牌的品质生活。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/1541445967645114dd75f6b0edc4762d.png',
                'sort_order' => 2,
                'floor_price' => '12.90',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            1 => 
            array (
                'id' => 1001002,
                'name' => '内野制造商',
                'desc' => '严选从世界各地挑选毛巾，最终选择了为日本内野代工的工厂，追求毛巾的柔软度与功能性。品质比肩商场几百元的毛巾。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/8ca3ce091504f8aa1fba3fdbb7a6e351.png',
                'sort_order' => 10,
                'floor_price' => '29.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            2 => 
            array (
                'id' => 1001003,
                'name' => 'Adidas制造商',
                'desc' => '严选找到为Adidas等品牌制造商，
选取优质原材料，与厂方一起设计，
为你提供好的理想的运动装备。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/335334d0deaff6dc3376334822ab3a2f.png',
                'sort_order' => 30,
                'floor_price' => '49.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            3 => 
            array (
                'id' => 1001007,
                'name' => '优衣库制造商',
                'desc' => '严选找到日本知名服装UNIQLO的制造商，
选取优质长绒棉和精梳工艺，
与厂方一起设计，为你提供理想的棉袜。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/0d72832e37e7e3ea391b519abbbc95a3.png',
                'sort_order' => 12,
                'floor_price' => '29.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            4 => 
            array (
                'id' => 1001008,
                'name' => '膳魔师制造商',
                'desc' => '严选深入保温行业内部，
找到德国膳魔师制造商的代工厂。
同样的品质，却有更优的价格。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/5fd51e29b9459dae7df8040c8219f241.png',
                'sort_order' => 40,
                'floor_price' => '45.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            5 => 
            array (
                'id' => 1001010,
                'name' => '星巴克制造商',
                'desc' => '严选寻访全国保温杯制造企业，
最终找到高端咖啡品牌星巴克的制造商，
专注保温杯生产20年，品质与颜值兼备。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/5668bc50f2f2e551891044525710dc84.png',
                'sort_order' => 34,
                'floor_price' => '39.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            6 => 
            array (
                'id' => 1001012,
                'name' => 'Wedgwood制造商',
                'desc' => '严选寻访英国皇室御用陶瓷Wedgwood制造商，
制模到成品，历经25道工序、7次检验、3次烧制，
你看不见的地方，我们也在坚持。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/68940e8e23f96dbeb3548d943d83d5e4.png',
                'sort_order' => 21,
                'floor_price' => '39.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            7 => 
            array (
                'id' => 1001013,
                'name' => 'Royal Doulton制造商',
                'desc' => '严选深入英国最大骨瓷品牌Royal Doulton制造商， 
顶级英国瓷器的代名词，广受世界皇室喜爱。
每件瓷器，都有自己的故事。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/0de643a02043fd9680b11e21c452adaa.png',
                'sort_order' => 47,
                'floor_price' => '24.90',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            8 => 
            array (
                'id' => 1001015,
                'name' => '日本KEYUCA制造商',
                'desc' => 'KEYUCA是日本餐具及料理用具品牌，
遵循极简原木风，高端餐具体验。
严选的餐具正是来自这一品牌制造商。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/9b85b45f23da558be101dbcc273b1d6d.png',
                'sort_order' => 49,
                'floor_price' => '14.90',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            9 => 
            array (
                'id' => 1001016,
                'name' => '爱慕制造商',
                'desc' => '150家样品比对筛选，20家工厂深入走访，
严选最终选定高端内衣爱慕制造商，
20年品质保证，为你打造天然舒适的衣物。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/5104f84110eac111968c63c18ebd62c0.png',
                'sort_order' => 9,
                'floor_price' => '35.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            10 => 
            array (
                'id' => 1001020,
                'name' => 'Ralph Lauren制造商',
                'desc' => '我们与Ralph Lauren Home的制造商成功接洽，掌握先进的生产设备，传承品牌工艺和工序。追求生活品质的你，值得拥有。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/9df78eb751eae2546bd3ee7e61c9b854.png',
                'sort_order' => 20,
                'floor_price' => '29.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            11 => 
            array (
                'id' => 1001037,
                'name' => '新秀丽制造商',
                'desc' => '严选为制作品质与颜值兼具的箱包，
选定新秀丽、CK、Ricardo等品牌合作的制造商，
拥有国内先进流水线20余条，实力保障品质。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/80dce660938931956ee9a3a2b111bd37.jpg',
                'sort_order' => 5,
                'floor_price' => '59.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            12 => 
            array (
                'id' => 1001038,
                'name' => 'Coach制造商',
                'desc' => '严选为制作高品质高颜值皮具配件，
由Coach、MK等品牌制造商生产，
由严选360度全程监制，给你带来优质皮具。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/1b1cc16135fd8467d40983f75f644127.png',
                'sort_order' => 3,
                'floor_price' => '49.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            13 => 
            array (
                'id' => 1001039,
                'name' => 'MK制造商',
                'desc' => '严选为制造高品质的皮具，
选择Michael Kors品牌合作的制造工厂，
18年专业皮具生产经验，手工至美，品质保证。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/fc9cd1309374f7707855de80522fb310.jpg',
                'sort_order' => 17,
                'floor_price' => '79.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            14 => 
            array (
                'id' => 1001045,
                'name' => '罗莱制造商',
                'desc' => '严选团队为打造吸湿透气柔软的蚕丝被，
从蚕茧原材到温感性能，多次甄选测试
选择罗莱制造商工厂，手工处理，优质舒适。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/14122a41a4985d23e1a172302ee818e9.png',
                'sort_order' => 45,
                'floor_price' => '699.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            15 => 
            array (
                'id' => 1003000,
                'name' => 'Carters制造商',
                'desc' => '来自Carters大牌代工厂生产，
严选纯天然材料，无荧光不添加，
ITS安心标志权威检测，安全护航。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/efe9131599ced0297213e6ec67eb2174.png',
                'sort_order' => 41,
                'floor_price' => '19.90',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            16 => 
            array (
                'id' => 1005001,
                'name' => 'Goody制造商',
                'desc' => '严选深入美国百年发饰品牌Goody制造商，
确保每把梳子做工精湛，养护头皮。
戴安娜王妃的最爱，你也能拥有。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/7c918f37de108f3687d69b39daab34eb.png',
                'sort_order' => 48,
                'floor_price' => '39.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            17 => 
            array (
                'id' => 1006000,
                'name' => '范思哲制造商',
                'desc' => '严选找寻意大利奢侈品牌范思哲Versace的制造商，
致力于为用户带来精致、优雅、时尚的皮包，
传承独特美感，体验品质生活。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/c80ae035387495a61a4515906205efff.png',
                'sort_order' => 18,
                'floor_price' => '99.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            18 => 
            array (
                'id' => 1008000,
                'name' => 'WPC制造商',
                'desc' => '严选寻找日本雨伞品牌W.P.C制造商，
采用严谨工艺以及环保材料，
沉淀15年行业经验，打造精致雨具。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/c4e97cc87186ce17f9316f3ba39e220c.png',
                'sort_order' => 22,
                'floor_price' => '59.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            19 => 
            array (
                'id' => 1010001,
                'name' => '竹宝堂制造商',
                'desc' => '严选走访河北、安徽等制刷基地，
选定竹宝堂、丝芙兰等品牌的制造商，
严格把关生产与质检，与您一同追求美的生活。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/61b0b7ae4f0163422009defbceaa41ad.jpg',
                'sort_order' => 39,
                'floor_price' => '29.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            20 => 
            array (
                'id' => 1010002,
                'name' => '资生堂制造商',
                'desc' => '发现美，成为美，是女性一生的追求。
严选找寻资生堂代工厂，打造天然美妆产品，
致力于带来更多美的体验和享受。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/5449236b80d1e678dedee2f626cd67c4.png',
                'sort_order' => 19,
                'floor_price' => '29.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            21 => 
            array (
                'id' => 1015000,
                'name' => 'NITORI制造商',
                'desc' => '宠物是人类最温情的陪伴，
严选找寻日本最大家居品牌NITORI制造商，
每一个脚印，都是为了更好地关怀你的TA',
                'pic_url' => 'http://yanxuan.nosdn.127.net/6f3d310601b18610553c675e0e14d107.png',
                'sort_order' => 43,
                'floor_price' => '69.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            22 => 
            array (
                'id' => 1016002,
                'name' => 'HUGO BOSS制造商',
                'desc' => '严选深入德国知名奢侈品HUGO BOSS的制造商，
开发睡衣、睡袍、休闲裤等轻奢品质家居服，
希望你在家的每一天都优雅精致。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/70ada9877b2efa82227437af3231fe50.png',
                'sort_order' => 11,
                'floor_price' => '45.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            23 => 
            array (
                'id' => 1018000,
                'name' => 'Sperry制造商',
                'desc' => '严选团队对比多家硫化鞋制造商产品质量，
走访多个制鞋工厂，最终选定Sperry品牌制造商，
为你提供一双舒适有型的高品质帆布鞋。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/2eb12d84037346441088267432da31c4.png',
                'sort_order' => 32,
                'floor_price' => '199.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            24 => 
            array (
                'id' => 1021000,
                'name' => 'Marc Jacobs制造商',
                'desc' => '严选寻访独立设计品牌Marc Jacobs的制造商，
严格选材，细究纺织与生产的细节，多次打磨，
初心不忘，为你带来优雅高档的服饰配件。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/c8dac4eb1a458d778420ba520edab3d0.png',
                'sort_order' => 24,
                'floor_price' => '69.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            25 => 
            array (
                'id' => 1022000,
                'name' => 'UGG制造商',
                'desc' => '为寻找优质的皮毛一体雪地靴，
严选走访多家雪地靴制造商，对比工艺，
甄选UGG认可的代工厂，只为足下的优雅舒适。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/4d2a3dea7e0172ae48e8161f04cfa045.jpg',
                'sort_order' => 29,
                'floor_price' => '59.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            26 => 
            array (
                'id' => 1022001,
                'name' => 'Palladium制造商',
                'desc' => '严选探访多个制鞋大厂，选定Palladium制造商，
对比工艺选材，找到传承多年的制鞋配方，
只为制作一款高品质休闲鞋。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/3480f2a4026c60eb4921f0aa3facbde8.png',
                'sort_order' => 31,
                'floor_price' => '249.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            27 => 
            array (
                'id' => 1023000,
                'name' => 'PetitBateau小帆船制造商',
                'desc' => '为打造适合宝宝的婴童服装，
严选团队寻找PetitBateau小帆船的品牌制造商，
无荧光剂，国家A类标准，让宝宝穿的放心。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/1a11438598f1bb52b1741e123b523cb5.jpg',
                'sort_order' => 25,
                'floor_price' => '36.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            28 => 
            array (
                'id' => 1024000,
                'name' => 'WMF制造商',
                'desc' => '严选找寻德国百年高端厨具WMF的制造商，
选择拥有14年经验的不锈钢生产工厂，
为你甄选事半功倍的优质厨具。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/2018e9ac91ec37d9aaf437a1fd5d7070.png',
                'sort_order' => 8,
                'floor_price' => '9.90',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            29 => 
            array (
                'id' => 1024001,
                'name' => 'OBH制造商',
                'desc' => '严选寻找OBH品牌的制造商，打造精致厨具，
韩国独资工厂制造，严格质检，品质雕琢
力求为消费者带来全新的烹饪体验。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/bf3499ac17a11ffb9bb7caa47ebef2dd.png',
                'sort_order' => 42,
                'floor_price' => '39.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            30 => 
            array (
                'id' => 1024003,
                'name' => 'Stoneline制造商',
                'desc' => '严选找寻德国经典品牌Stoneline的制造商，
追踪工艺，考量细节，亲自试用，
为你甄选出最合心意的锅具和陶瓷刀，下厨如神。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/3a44ae7db86f3f9b6e542720c54cc349.png',
                'sort_order' => 28,
                'floor_price' => '9.90',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            31 => 
            array (
                'id' => 1024006,
                'name' => 'KitchenAid制造商',
                'desc' => '严选寻访KitchenAid品牌的制造商，
采用德国LFGB认证食品级专用不锈钢，
欧式简约设计，可靠安心，尽享下厨乐趣。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/e11385bf29d1b3949435b80fcd000948.png',
                'sort_order' => 46,
                'floor_price' => '98.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            32 => 
            array (
                'id' => 1025000,
                'name' => 'Timberland制造商',
                'desc' => '为制作优质时尚的工装鞋靴，
严选团队深入探访国内外制靴大厂，选择Timberland制造商，
工厂拥有15年制鞋历史，专业品质有保证。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/6dcadb0791b33aa9fd00380b44fa6645.png',
                'sort_order' => 37,
                'floor_price' => '359.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            33 => 
            array (
                'id' => 1025001,
                'name' => 'Kenneth Cole制造商',
                'desc' => '为出品优质格调的商务鞋靴，
严选团队选择Kenneth Cole品牌合作的制造商，
一切努力，只为打造高品质鞋靴。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/236322546c6860e1662ab147d6b0ba2f.jpg',
                'sort_order' => 7,
                'floor_price' => '349.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            34 => 
            array (
                'id' => 1026000,
                'name' => 'CK制造商',
                'desc' => '严选寻访Calvin Klein品牌的制造商，
深入世界领带第一生产地，设计与品质并重，
致力于给消费者带来优质典雅的服饰用品。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/658f09b7ec522d31742b47b914d64338.png',
                'sort_order' => 1,
                'floor_price' => '39.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            35 => 
            array (
                'id' => 1026001,
                'name' => 'Under Armour制造商',
                'desc' => '严选为甄选优质好袜，走访东北、新疆等产袜基地，
最终选定Under Armour品牌的合作制造商，
从原料、工艺、品质多维度筛选监制，保证好品质。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/4e93ea29b1d06fabfd24ba68a9b20a34.jpg',
                'sort_order' => 35,
                'floor_price' => '39.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            36 => 
            array (
                'id' => 1028000,
                'name' => 'Gucci制造商',
                'desc' => '严选为设计一款优雅时尚的品质礼帽，
找寻拥有10来年经验的大型毛毡帽厂商合作，
坚持打造好设计、好工艺、好材质的潮流礼帽。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/278869cad9bf5411ffc18982686b88fb.jpg',
                'sort_order' => 23,
                'floor_price' => '59.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            37 => 
            array (
                'id' => 1028003,
                'name' => 'Burberry制造商',
                'desc' => '为打造时尚舒适的童装系列，
严选选择Burberry制造商，优化版型配色
英伦风情融入经典格纹，百搭优雅气质款。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/07af01e281c7e0b912d162d611e22c32.jpg',
                'sort_order' => 4,
                'floor_price' => '99.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            38 => 
            array (
                'id' => 1033003,
                'name' => 'Armani制造商',
                'desc' => '严选团队携手国际标准化专业生产厂家，
厂家长期为Armani、Alexander wang等知名品牌代工，
专业进口设备，精密质量把控，精于品质居家体验。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/981e06f0f46f5f1f041d7de3dd3202e6.jpg',
                'sort_order' => 26,
                'floor_price' => '199.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            39 => 
            array (
                'id' => 1033004,
                'name' => '爱马仕集团制造商',
                'desc' => '严选采用欧洲一线品牌爱马仕的御用香料供应商，
经过反复配比改良、试香调香、选品定样，
为你带来独特馥郁的散香体验。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/d98470dd728fb5a91f7aceade07572b5.png',
                'sort_order' => 33,
                'floor_price' => '19.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            40 => 
            array (
                'id' => 1034001,
                'name' => 'Alexander McQueen制造商',
                'desc' => '为制造精致实用的高品质包包，
严选团队选择Alexander McQueen制造商，
严格筛选，带来轻奢优雅体验。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/db7ee9667d84cbce573688297586699c.jpg',
                'sort_order' => 16,
                'floor_price' => '69.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            41 => 
            array (
                'id' => 1037000,
                'name' => '厚木ATSUGI制造商',
                'desc' => '严选考究袜子品质，层层把关原料生产，
携手12年行业生产资质的厚木品牌制造商，
带来轻盈优雅，舒适显瘦的袜子系列。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/7df55c408dbac6085ed6c30836c828ac.jpg',
                'sort_order' => 27,
                'floor_price' => '29.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            42 => 
            array (
                'id' => 1038000,
                'name' => 'Birkenstock集团制造商',
                'desc' => '为打造一双舒适的软木拖鞋，
严选团队寻找BIRKENSTOCK集团旗下产品制造商，
360度全程监制，舒适随脚，百搭文艺。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/05a2ecffb60b77e4c165bd8492e5c22a.jpg',
                'sort_order' => 14,
                'floor_price' => '59.90',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            43 => 
            array (
                'id' => 1038001,
                'name' => 'Nine West制造商',
                'desc' => '为打造一双优雅舒适的高跟鞋，
严选选择美国Nine West玖熙品牌的制造商，
让美丽绽放在足尖。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/ad4df7848ce450f00483c2d5e9f2bfa7.png',
                'sort_order' => 13,
                'floor_price' => '219.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            44 => 
            array (
                'id' => 1039000,
                'name' => 'TEFAL制造商',
                'desc' => '严选对标国际品质，致力于高品质生活好物，
执着寻求优质厨房电器供应商，
携手WMF、Tefal制造商，打造高品质厨具。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/2b7a07e25a3f3be886a7fb90ba975bb7.png',
                'sort_order' => 44,
                'floor_price' => '259.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            45 => 
            array (
                'id' => 1039001,
                'name' => '京瓷制造商',
                'desc' => '严选想为你的厨房生活，带来新鲜感和活力，
深入全国各地，选择日本京瓷等品牌代工厂，
打造钻石系列厨具，颜值与品质兼具。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/3dda530605e3ab1c82d5ed30f2489473.png',
                'sort_order' => 38,
                'floor_price' => '89.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            46 => 
            array (
                'id' => 1040000,
                'name' => 'Tescom制造商',
                'desc' => '严选为打造时尚健康的个护电器，
选择Tescom品牌制造商，全球最大个护电器工厂之一，
拥有20年经验，出口180多个国家，品质有保障。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/c17cd65971189fdc28f5bd6b78f657a7.png',
                'sort_order' => 15,
                'floor_price' => '59.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            47 => 
            array (
                'id' => 1041000,
                'name' => 'BCBG制造商',
                'desc' => '严选从产品源头开始，每道工序质量把关，
选择美国知名品牌BCBG的制造商合作，
严谨匠心，致力于优质柔滑的睡衣穿搭产品。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/b9072023afd3621714fd5c49f140fca8.png',
                'sort_order' => 36,
                'floor_price' => '99.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            48 => 
            array (
                'id' => 1046000,
                'name' => 'Police制造商',
                'desc' => '严选团队选定Police品牌制造商合作，
有11年眼镜生产资质，兼顾品质与品味，
为你带来专业时尚的墨镜。',
                'pic_url' => 'http://yanxuan.nosdn.127.net/66e2cb956a9dd1efc7732bea278e901e.png',
                'sort_order' => 6,
                'floor_price' => '109.00',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
        ));
        
        
    }
}