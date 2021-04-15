<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ZRegionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('z_region')->delete();
        
        \DB::table('z_region')->insert(array (
            0 => 
            array (
                'id' => 1,
                'pid' => 0,
                'name' => '北京市',
                'type' => 1,
                'code' => 110000,
            ),
            1 => 
            array (
                'id' => 2,
                'pid' => 0,
                'name' => '天津市',
                'type' => 1,
                'code' => 120000,
            ),
            2 => 
            array (
                'id' => 3,
                'pid' => 0,
                'name' => '河北省',
                'type' => 1,
                'code' => 130000,
            ),
            3 => 
            array (
                'id' => 4,
                'pid' => 0,
                'name' => '山西省',
                'type' => 1,
                'code' => 140000,
            ),
            4 => 
            array (
                'id' => 5,
                'pid' => 0,
                'name' => '内蒙古自治区',
                'type' => 1,
                'code' => 150000,
            ),
            5 => 
            array (
                'id' => 6,
                'pid' => 0,
                'name' => '辽宁省',
                'type' => 1,
                'code' => 210000,
            ),
            6 => 
            array (
                'id' => 7,
                'pid' => 0,
                'name' => '吉林省',
                'type' => 1,
                'code' => 220000,
            ),
            7 => 
            array (
                'id' => 8,
                'pid' => 0,
                'name' => '黑龙江省',
                'type' => 1,
                'code' => 230000,
            ),
            8 => 
            array (
                'id' => 9,
                'pid' => 0,
                'name' => '上海市',
                'type' => 1,
                'code' => 310000,
            ),
            9 => 
            array (
                'id' => 10,
                'pid' => 0,
                'name' => '江苏省',
                'type' => 1,
                'code' => 320000,
            ),
            10 => 
            array (
                'id' => 11,
                'pid' => 0,
                'name' => '浙江省',
                'type' => 1,
                'code' => 330000,
            ),
            11 => 
            array (
                'id' => 12,
                'pid' => 0,
                'name' => '安徽省',
                'type' => 1,
                'code' => 340000,
            ),
            12 => 
            array (
                'id' => 13,
                'pid' => 0,
                'name' => '福建省',
                'type' => 1,
                'code' => 350000,
            ),
            13 => 
            array (
                'id' => 14,
                'pid' => 0,
                'name' => '江西省',
                'type' => 1,
                'code' => 360000,
            ),
            14 => 
            array (
                'id' => 15,
                'pid' => 0,
                'name' => '山东省',
                'type' => 1,
                'code' => 370000,
            ),
            15 => 
            array (
                'id' => 16,
                'pid' => 0,
                'name' => '河南省',
                'type' => 1,
                'code' => 410000,
            ),
            16 => 
            array (
                'id' => 17,
                'pid' => 0,
                'name' => '湖北省',
                'type' => 1,
                'code' => 420000,
            ),
            17 => 
            array (
                'id' => 18,
                'pid' => 0,
                'name' => '湖南省',
                'type' => 1,
                'code' => 430000,
            ),
            18 => 
            array (
                'id' => 19,
                'pid' => 0,
                'name' => '广东省',
                'type' => 1,
                'code' => 440000,
            ),
            19 => 
            array (
                'id' => 20,
                'pid' => 0,
                'name' => '广西壮族自治区',
                'type' => 1,
                'code' => 450000,
            ),
            20 => 
            array (
                'id' => 21,
                'pid' => 0,
                'name' => '海南省',
                'type' => 1,
                'code' => 460000,
            ),
            21 => 
            array (
                'id' => 22,
                'pid' => 0,
                'name' => '重庆市',
                'type' => 1,
                'code' => 500000,
            ),
            22 => 
            array (
                'id' => 23,
                'pid' => 0,
                'name' => '四川省',
                'type' => 1,
                'code' => 510000,
            ),
            23 => 
            array (
                'id' => 24,
                'pid' => 0,
                'name' => '贵州省',
                'type' => 1,
                'code' => 520000,
            ),
            24 => 
            array (
                'id' => 25,
                'pid' => 0,
                'name' => '云南省',
                'type' => 1,
                'code' => 530000,
            ),
            25 => 
            array (
                'id' => 26,
                'pid' => 0,
                'name' => '西藏自治区',
                'type' => 1,
                'code' => 540000,
            ),
            26 => 
            array (
                'id' => 27,
                'pid' => 0,
                'name' => '陕西省',
                'type' => 1,
                'code' => 610000,
            ),
            27 => 
            array (
                'id' => 28,
                'pid' => 0,
                'name' => '甘肃省',
                'type' => 1,
                'code' => 620000,
            ),
            28 => 
            array (
                'id' => 29,
                'pid' => 0,
                'name' => '青海省',
                'type' => 1,
                'code' => 630000,
            ),
            29 => 
            array (
                'id' => 30,
                'pid' => 0,
                'name' => '宁夏回族自治区',
                'type' => 1,
                'code' => 640000,
            ),
            30 => 
            array (
                'id' => 31,
                'pid' => 0,
                'name' => '新疆维吾尔自治区',
                'type' => 1,
                'code' => 650000,
            ),
            31 => 
            array (
                'id' => 32,
                'pid' => 1,
                'name' => '市辖区',
                'type' => 2,
                'code' => 110100,
            ),
            32 => 
            array (
                'id' => 33,
                'pid' => 2,
                'name' => '市辖区',
                'type' => 2,
                'code' => 120100,
            ),
            33 => 
            array (
                'id' => 34,
                'pid' => 3,
                'name' => '石家庄市',
                'type' => 2,
                'code' => 130100,
            ),
            34 => 
            array (
                'id' => 35,
                'pid' => 3,
                'name' => '唐山市',
                'type' => 2,
                'code' => 130200,
            ),
            35 => 
            array (
                'id' => 36,
                'pid' => 3,
                'name' => '秦皇岛市',
                'type' => 2,
                'code' => 130300,
            ),
            36 => 
            array (
                'id' => 37,
                'pid' => 3,
                'name' => '邯郸市',
                'type' => 2,
                'code' => 130400,
            ),
            37 => 
            array (
                'id' => 38,
                'pid' => 3,
                'name' => '邢台市',
                'type' => 2,
                'code' => 130500,
            ),
            38 => 
            array (
                'id' => 39,
                'pid' => 3,
                'name' => '保定市',
                'type' => 2,
                'code' => 130600,
            ),
            39 => 
            array (
                'id' => 40,
                'pid' => 3,
                'name' => '张家口市',
                'type' => 2,
                'code' => 130700,
            ),
            40 => 
            array (
                'id' => 41,
                'pid' => 3,
                'name' => '承德市',
                'type' => 2,
                'code' => 130800,
            ),
            41 => 
            array (
                'id' => 42,
                'pid' => 3,
                'name' => '沧州市',
                'type' => 2,
                'code' => 130900,
            ),
            42 => 
            array (
                'id' => 43,
                'pid' => 3,
                'name' => '廊坊市',
                'type' => 2,
                'code' => 131000,
            ),
            43 => 
            array (
                'id' => 44,
                'pid' => 3,
                'name' => '衡水市',
                'type' => 2,
                'code' => 131100,
            ),
            44 => 
            array (
                'id' => 45,
                'pid' => 3,
                'name' => '省直辖县级行政区划',
                'type' => 2,
                'code' => 139000,
            ),
            45 => 
            array (
                'id' => 46,
                'pid' => 4,
                'name' => '太原市',
                'type' => 2,
                'code' => 140100,
            ),
            46 => 
            array (
                'id' => 47,
                'pid' => 4,
                'name' => '大同市',
                'type' => 2,
                'code' => 140200,
            ),
            47 => 
            array (
                'id' => 48,
                'pid' => 4,
                'name' => '阳泉市',
                'type' => 2,
                'code' => 140300,
            ),
            48 => 
            array (
                'id' => 49,
                'pid' => 4,
                'name' => '长治市',
                'type' => 2,
                'code' => 140400,
            ),
            49 => 
            array (
                'id' => 50,
                'pid' => 4,
                'name' => '晋城市',
                'type' => 2,
                'code' => 140500,
            ),
            50 => 
            array (
                'id' => 51,
                'pid' => 4,
                'name' => '朔州市',
                'type' => 2,
                'code' => 140600,
            ),
            51 => 
            array (
                'id' => 52,
                'pid' => 4,
                'name' => '晋中市',
                'type' => 2,
                'code' => 140700,
            ),
            52 => 
            array (
                'id' => 53,
                'pid' => 4,
                'name' => '运城市',
                'type' => 2,
                'code' => 140800,
            ),
            53 => 
            array (
                'id' => 54,
                'pid' => 4,
                'name' => '忻州市',
                'type' => 2,
                'code' => 140900,
            ),
            54 => 
            array (
                'id' => 55,
                'pid' => 4,
                'name' => '临汾市',
                'type' => 2,
                'code' => 141000,
            ),
            55 => 
            array (
                'id' => 56,
                'pid' => 4,
                'name' => '吕梁市',
                'type' => 2,
                'code' => 141100,
            ),
            56 => 
            array (
                'id' => 57,
                'pid' => 5,
                'name' => '呼和浩特市',
                'type' => 2,
                'code' => 150100,
            ),
            57 => 
            array (
                'id' => 58,
                'pid' => 5,
                'name' => '包头市',
                'type' => 2,
                'code' => 150200,
            ),
            58 => 
            array (
                'id' => 59,
                'pid' => 5,
                'name' => '乌海市',
                'type' => 2,
                'code' => 150300,
            ),
            59 => 
            array (
                'id' => 60,
                'pid' => 5,
                'name' => '赤峰市',
                'type' => 2,
                'code' => 150400,
            ),
            60 => 
            array (
                'id' => 61,
                'pid' => 5,
                'name' => '通辽市',
                'type' => 2,
                'code' => 150500,
            ),
            61 => 
            array (
                'id' => 62,
                'pid' => 5,
                'name' => '鄂尔多斯市',
                'type' => 2,
                'code' => 150600,
            ),
            62 => 
            array (
                'id' => 63,
                'pid' => 5,
                'name' => '呼伦贝尔市',
                'type' => 2,
                'code' => 150700,
            ),
            63 => 
            array (
                'id' => 64,
                'pid' => 5,
                'name' => '巴彦淖尔市',
                'type' => 2,
                'code' => 150800,
            ),
            64 => 
            array (
                'id' => 65,
                'pid' => 5,
                'name' => '乌兰察布市',
                'type' => 2,
                'code' => 150900,
            ),
            65 => 
            array (
                'id' => 66,
                'pid' => 5,
                'name' => '兴安盟',
                'type' => 2,
                'code' => 152200,
            ),
            66 => 
            array (
                'id' => 67,
                'pid' => 5,
                'name' => '锡林郭勒盟',
                'type' => 2,
                'code' => 152500,
            ),
            67 => 
            array (
                'id' => 68,
                'pid' => 5,
                'name' => '阿拉善盟',
                'type' => 2,
                'code' => 152900,
            ),
            68 => 
            array (
                'id' => 69,
                'pid' => 6,
                'name' => '沈阳市',
                'type' => 2,
                'code' => 210100,
            ),
            69 => 
            array (
                'id' => 70,
                'pid' => 6,
                'name' => '大连市',
                'type' => 2,
                'code' => 210200,
            ),
            70 => 
            array (
                'id' => 71,
                'pid' => 6,
                'name' => '鞍山市',
                'type' => 2,
                'code' => 210300,
            ),
            71 => 
            array (
                'id' => 72,
                'pid' => 6,
                'name' => '抚顺市',
                'type' => 2,
                'code' => 210400,
            ),
            72 => 
            array (
                'id' => 73,
                'pid' => 6,
                'name' => '本溪市',
                'type' => 2,
                'code' => 210500,
            ),
            73 => 
            array (
                'id' => 74,
                'pid' => 6,
                'name' => '丹东市',
                'type' => 2,
                'code' => 210600,
            ),
            74 => 
            array (
                'id' => 75,
                'pid' => 6,
                'name' => '锦州市',
                'type' => 2,
                'code' => 210700,
            ),
            75 => 
            array (
                'id' => 76,
                'pid' => 6,
                'name' => '营口市',
                'type' => 2,
                'code' => 210800,
            ),
            76 => 
            array (
                'id' => 77,
                'pid' => 6,
                'name' => '阜新市',
                'type' => 2,
                'code' => 210900,
            ),
            77 => 
            array (
                'id' => 78,
                'pid' => 6,
                'name' => '辽阳市',
                'type' => 2,
                'code' => 211000,
            ),
            78 => 
            array (
                'id' => 79,
                'pid' => 6,
                'name' => '盘锦市',
                'type' => 2,
                'code' => 211100,
            ),
            79 => 
            array (
                'id' => 80,
                'pid' => 6,
                'name' => '铁岭市',
                'type' => 2,
                'code' => 211200,
            ),
            80 => 
            array (
                'id' => 81,
                'pid' => 6,
                'name' => '朝阳市',
                'type' => 2,
                'code' => 211300,
            ),
            81 => 
            array (
                'id' => 82,
                'pid' => 6,
                'name' => '葫芦岛市',
                'type' => 2,
                'code' => 211400,
            ),
            82 => 
            array (
                'id' => 83,
                'pid' => 7,
                'name' => '长春市',
                'type' => 2,
                'code' => 220100,
            ),
            83 => 
            array (
                'id' => 84,
                'pid' => 7,
                'name' => '吉林市',
                'type' => 2,
                'code' => 220200,
            ),
            84 => 
            array (
                'id' => 85,
                'pid' => 7,
                'name' => '四平市',
                'type' => 2,
                'code' => 220300,
            ),
            85 => 
            array (
                'id' => 86,
                'pid' => 7,
                'name' => '辽源市',
                'type' => 2,
                'code' => 220400,
            ),
            86 => 
            array (
                'id' => 87,
                'pid' => 7,
                'name' => '通化市',
                'type' => 2,
                'code' => 220500,
            ),
            87 => 
            array (
                'id' => 88,
                'pid' => 7,
                'name' => '白山市',
                'type' => 2,
                'code' => 220600,
            ),
            88 => 
            array (
                'id' => 89,
                'pid' => 7,
                'name' => '松原市',
                'type' => 2,
                'code' => 220700,
            ),
            89 => 
            array (
                'id' => 90,
                'pid' => 7,
                'name' => '白城市',
                'type' => 2,
                'code' => 220800,
            ),
            90 => 
            array (
                'id' => 91,
                'pid' => 7,
                'name' => '延边朝鲜族自治州',
                'type' => 2,
                'code' => 222400,
            ),
            91 => 
            array (
                'id' => 92,
                'pid' => 8,
                'name' => '哈尔滨市',
                'type' => 2,
                'code' => 230100,
            ),
            92 => 
            array (
                'id' => 93,
                'pid' => 8,
                'name' => '齐齐哈尔市',
                'type' => 2,
                'code' => 230200,
            ),
            93 => 
            array (
                'id' => 94,
                'pid' => 8,
                'name' => '鸡西市',
                'type' => 2,
                'code' => 230300,
            ),
            94 => 
            array (
                'id' => 95,
                'pid' => 8,
                'name' => '鹤岗市',
                'type' => 2,
                'code' => 230400,
            ),
            95 => 
            array (
                'id' => 96,
                'pid' => 8,
                'name' => '双鸭山市',
                'type' => 2,
                'code' => 230500,
            ),
            96 => 
            array (
                'id' => 97,
                'pid' => 8,
                'name' => '大庆市',
                'type' => 2,
                'code' => 230600,
            ),
            97 => 
            array (
                'id' => 98,
                'pid' => 8,
                'name' => '伊春市',
                'type' => 2,
                'code' => 230700,
            ),
            98 => 
            array (
                'id' => 99,
                'pid' => 8,
                'name' => '佳木斯市',
                'type' => 2,
                'code' => 230800,
            ),
            99 => 
            array (
                'id' => 100,
                'pid' => 8,
                'name' => '七台河市',
                'type' => 2,
                'code' => 230900,
            ),
            100 => 
            array (
                'id' => 101,
                'pid' => 8,
                'name' => '牡丹江市',
                'type' => 2,
                'code' => 231000,
            ),
            101 => 
            array (
                'id' => 102,
                'pid' => 8,
                'name' => '黑河市',
                'type' => 2,
                'code' => 231100,
            ),
            102 => 
            array (
                'id' => 103,
                'pid' => 8,
                'name' => '绥化市',
                'type' => 2,
                'code' => 231200,
            ),
            103 => 
            array (
                'id' => 104,
                'pid' => 8,
                'name' => '大兴安岭地区',
                'type' => 2,
                'code' => 232700,
            ),
            104 => 
            array (
                'id' => 105,
                'pid' => 9,
                'name' => '市辖区',
                'type' => 2,
                'code' => 310100,
            ),
            105 => 
            array (
                'id' => 106,
                'pid' => 10,
                'name' => '南京市',
                'type' => 2,
                'code' => 320100,
            ),
            106 => 
            array (
                'id' => 107,
                'pid' => 10,
                'name' => '无锡市',
                'type' => 2,
                'code' => 320200,
            ),
            107 => 
            array (
                'id' => 108,
                'pid' => 10,
                'name' => '徐州市',
                'type' => 2,
                'code' => 320300,
            ),
            108 => 
            array (
                'id' => 109,
                'pid' => 10,
                'name' => '常州市',
                'type' => 2,
                'code' => 320400,
            ),
            109 => 
            array (
                'id' => 110,
                'pid' => 10,
                'name' => '苏州市',
                'type' => 2,
                'code' => 320500,
            ),
            110 => 
            array (
                'id' => 111,
                'pid' => 10,
                'name' => '南通市',
                'type' => 2,
                'code' => 320600,
            ),
            111 => 
            array (
                'id' => 112,
                'pid' => 10,
                'name' => '连云港市',
                'type' => 2,
                'code' => 320700,
            ),
            112 => 
            array (
                'id' => 113,
                'pid' => 10,
                'name' => '淮安市',
                'type' => 2,
                'code' => 320800,
            ),
            113 => 
            array (
                'id' => 114,
                'pid' => 10,
                'name' => '盐城市',
                'type' => 2,
                'code' => 320900,
            ),
            114 => 
            array (
                'id' => 115,
                'pid' => 10,
                'name' => '扬州市',
                'type' => 2,
                'code' => 321000,
            ),
            115 => 
            array (
                'id' => 116,
                'pid' => 10,
                'name' => '镇江市',
                'type' => 2,
                'code' => 321100,
            ),
            116 => 
            array (
                'id' => 117,
                'pid' => 10,
                'name' => '泰州市',
                'type' => 2,
                'code' => 321200,
            ),
            117 => 
            array (
                'id' => 118,
                'pid' => 10,
                'name' => '宿迁市',
                'type' => 2,
                'code' => 321300,
            ),
            118 => 
            array (
                'id' => 119,
                'pid' => 11,
                'name' => '杭州市',
                'type' => 2,
                'code' => 330100,
            ),
            119 => 
            array (
                'id' => 120,
                'pid' => 11,
                'name' => '宁波市',
                'type' => 2,
                'code' => 330200,
            ),
            120 => 
            array (
                'id' => 121,
                'pid' => 11,
                'name' => '温州市',
                'type' => 2,
                'code' => 330300,
            ),
            121 => 
            array (
                'id' => 122,
                'pid' => 11,
                'name' => '嘉兴市',
                'type' => 2,
                'code' => 330400,
            ),
            122 => 
            array (
                'id' => 123,
                'pid' => 11,
                'name' => '湖州市',
                'type' => 2,
                'code' => 330500,
            ),
            123 => 
            array (
                'id' => 124,
                'pid' => 11,
                'name' => '绍兴市',
                'type' => 2,
                'code' => 330600,
            ),
            124 => 
            array (
                'id' => 125,
                'pid' => 11,
                'name' => '金华市',
                'type' => 2,
                'code' => 330700,
            ),
            125 => 
            array (
                'id' => 126,
                'pid' => 11,
                'name' => '衢州市',
                'type' => 2,
                'code' => 330800,
            ),
            126 => 
            array (
                'id' => 127,
                'pid' => 11,
                'name' => '舟山市',
                'type' => 2,
                'code' => 330900,
            ),
            127 => 
            array (
                'id' => 128,
                'pid' => 11,
                'name' => '台州市',
                'type' => 2,
                'code' => 331000,
            ),
            128 => 
            array (
                'id' => 129,
                'pid' => 11,
                'name' => '丽水市',
                'type' => 2,
                'code' => 331100,
            ),
            129 => 
            array (
                'id' => 130,
                'pid' => 12,
                'name' => '合肥市',
                'type' => 2,
                'code' => 340100,
            ),
            130 => 
            array (
                'id' => 131,
                'pid' => 12,
                'name' => '芜湖市',
                'type' => 2,
                'code' => 340200,
            ),
            131 => 
            array (
                'id' => 132,
                'pid' => 12,
                'name' => '蚌埠市',
                'type' => 2,
                'code' => 340300,
            ),
            132 => 
            array (
                'id' => 133,
                'pid' => 12,
                'name' => '淮南市',
                'type' => 2,
                'code' => 340400,
            ),
            133 => 
            array (
                'id' => 134,
                'pid' => 12,
                'name' => '马鞍山市',
                'type' => 2,
                'code' => 340500,
            ),
            134 => 
            array (
                'id' => 135,
                'pid' => 12,
                'name' => '淮北市',
                'type' => 2,
                'code' => 340600,
            ),
            135 => 
            array (
                'id' => 136,
                'pid' => 12,
                'name' => '铜陵市',
                'type' => 2,
                'code' => 340700,
            ),
            136 => 
            array (
                'id' => 137,
                'pid' => 12,
                'name' => '安庆市',
                'type' => 2,
                'code' => 340800,
            ),
            137 => 
            array (
                'id' => 138,
                'pid' => 12,
                'name' => '黄山市',
                'type' => 2,
                'code' => 341000,
            ),
            138 => 
            array (
                'id' => 139,
                'pid' => 12,
                'name' => '滁州市',
                'type' => 2,
                'code' => 341100,
            ),
            139 => 
            array (
                'id' => 140,
                'pid' => 12,
                'name' => '阜阳市',
                'type' => 2,
                'code' => 341200,
            ),
            140 => 
            array (
                'id' => 141,
                'pid' => 12,
                'name' => '宿州市',
                'type' => 2,
                'code' => 341300,
            ),
            141 => 
            array (
                'id' => 142,
                'pid' => 12,
                'name' => '六安市',
                'type' => 2,
                'code' => 341500,
            ),
            142 => 
            array (
                'id' => 143,
                'pid' => 12,
                'name' => '亳州市',
                'type' => 2,
                'code' => 341600,
            ),
            143 => 
            array (
                'id' => 144,
                'pid' => 12,
                'name' => '池州市',
                'type' => 2,
                'code' => 341700,
            ),
            144 => 
            array (
                'id' => 145,
                'pid' => 12,
                'name' => '宣城市',
                'type' => 2,
                'code' => 341800,
            ),
            145 => 
            array (
                'id' => 146,
                'pid' => 13,
                'name' => '福州市',
                'type' => 2,
                'code' => 350100,
            ),
            146 => 
            array (
                'id' => 147,
                'pid' => 13,
                'name' => '厦门市',
                'type' => 2,
                'code' => 350200,
            ),
            147 => 
            array (
                'id' => 148,
                'pid' => 13,
                'name' => '莆田市',
                'type' => 2,
                'code' => 350300,
            ),
            148 => 
            array (
                'id' => 149,
                'pid' => 13,
                'name' => '三明市',
                'type' => 2,
                'code' => 350400,
            ),
            149 => 
            array (
                'id' => 150,
                'pid' => 13,
                'name' => '泉州市',
                'type' => 2,
                'code' => 350500,
            ),
            150 => 
            array (
                'id' => 151,
                'pid' => 13,
                'name' => '漳州市',
                'type' => 2,
                'code' => 350600,
            ),
            151 => 
            array (
                'id' => 152,
                'pid' => 13,
                'name' => '南平市',
                'type' => 2,
                'code' => 350700,
            ),
            152 => 
            array (
                'id' => 153,
                'pid' => 13,
                'name' => '龙岩市',
                'type' => 2,
                'code' => 350800,
            ),
            153 => 
            array (
                'id' => 154,
                'pid' => 13,
                'name' => '宁德市',
                'type' => 2,
                'code' => 350900,
            ),
            154 => 
            array (
                'id' => 155,
                'pid' => 14,
                'name' => '南昌市',
                'type' => 2,
                'code' => 360100,
            ),
            155 => 
            array (
                'id' => 156,
                'pid' => 14,
                'name' => '景德镇市',
                'type' => 2,
                'code' => 360200,
            ),
            156 => 
            array (
                'id' => 157,
                'pid' => 14,
                'name' => '萍乡市',
                'type' => 2,
                'code' => 360300,
            ),
            157 => 
            array (
                'id' => 158,
                'pid' => 14,
                'name' => '九江市',
                'type' => 2,
                'code' => 360400,
            ),
            158 => 
            array (
                'id' => 159,
                'pid' => 14,
                'name' => '新余市',
                'type' => 2,
                'code' => 360500,
            ),
            159 => 
            array (
                'id' => 160,
                'pid' => 14,
                'name' => '鹰潭市',
                'type' => 2,
                'code' => 360600,
            ),
            160 => 
            array (
                'id' => 161,
                'pid' => 14,
                'name' => '赣州市',
                'type' => 2,
                'code' => 360700,
            ),
            161 => 
            array (
                'id' => 162,
                'pid' => 14,
                'name' => '吉安市',
                'type' => 2,
                'code' => 360800,
            ),
            162 => 
            array (
                'id' => 163,
                'pid' => 14,
                'name' => '宜春市',
                'type' => 2,
                'code' => 360900,
            ),
            163 => 
            array (
                'id' => 164,
                'pid' => 14,
                'name' => '抚州市',
                'type' => 2,
                'code' => 361000,
            ),
            164 => 
            array (
                'id' => 165,
                'pid' => 14,
                'name' => '上饶市',
                'type' => 2,
                'code' => 361100,
            ),
            165 => 
            array (
                'id' => 166,
                'pid' => 15,
                'name' => '济南市',
                'type' => 2,
                'code' => 370100,
            ),
            166 => 
            array (
                'id' => 167,
                'pid' => 15,
                'name' => '青岛市',
                'type' => 2,
                'code' => 370200,
            ),
            167 => 
            array (
                'id' => 168,
                'pid' => 15,
                'name' => '淄博市',
                'type' => 2,
                'code' => 370300,
            ),
            168 => 
            array (
                'id' => 169,
                'pid' => 15,
                'name' => '枣庄市',
                'type' => 2,
                'code' => 370400,
            ),
            169 => 
            array (
                'id' => 170,
                'pid' => 15,
                'name' => '东营市',
                'type' => 2,
                'code' => 370500,
            ),
            170 => 
            array (
                'id' => 171,
                'pid' => 15,
                'name' => '烟台市',
                'type' => 2,
                'code' => 370600,
            ),
            171 => 
            array (
                'id' => 172,
                'pid' => 15,
                'name' => '潍坊市',
                'type' => 2,
                'code' => 370700,
            ),
            172 => 
            array (
                'id' => 173,
                'pid' => 15,
                'name' => '济宁市',
                'type' => 2,
                'code' => 370800,
            ),
            173 => 
            array (
                'id' => 174,
                'pid' => 15,
                'name' => '泰安市',
                'type' => 2,
                'code' => 370900,
            ),
            174 => 
            array (
                'id' => 175,
                'pid' => 15,
                'name' => '威海市',
                'type' => 2,
                'code' => 371000,
            ),
            175 => 
            array (
                'id' => 176,
                'pid' => 15,
                'name' => '日照市',
                'type' => 2,
                'code' => 371100,
            ),
            176 => 
            array (
                'id' => 177,
                'pid' => 15,
                'name' => '莱芜市',
                'type' => 2,
                'code' => 371200,
            ),
            177 => 
            array (
                'id' => 178,
                'pid' => 15,
                'name' => '临沂市',
                'type' => 2,
                'code' => 371300,
            ),
            178 => 
            array (
                'id' => 179,
                'pid' => 15,
                'name' => '德州市',
                'type' => 2,
                'code' => 371400,
            ),
            179 => 
            array (
                'id' => 180,
                'pid' => 15,
                'name' => '聊城市',
                'type' => 2,
                'code' => 371500,
            ),
            180 => 
            array (
                'id' => 181,
                'pid' => 15,
                'name' => '滨州市',
                'type' => 2,
                'code' => 371600,
            ),
            181 => 
            array (
                'id' => 182,
                'pid' => 15,
                'name' => '菏泽市',
                'type' => 2,
                'code' => 371700,
            ),
            182 => 
            array (
                'id' => 183,
                'pid' => 16,
                'name' => '郑州市',
                'type' => 2,
                'code' => 410100,
            ),
            183 => 
            array (
                'id' => 184,
                'pid' => 16,
                'name' => '开封市',
                'type' => 2,
                'code' => 410200,
            ),
            184 => 
            array (
                'id' => 185,
                'pid' => 16,
                'name' => '洛阳市',
                'type' => 2,
                'code' => 410300,
            ),
            185 => 
            array (
                'id' => 186,
                'pid' => 16,
                'name' => '平顶山市',
                'type' => 2,
                'code' => 410400,
            ),
            186 => 
            array (
                'id' => 187,
                'pid' => 16,
                'name' => '安阳市',
                'type' => 2,
                'code' => 410500,
            ),
            187 => 
            array (
                'id' => 188,
                'pid' => 16,
                'name' => '鹤壁市',
                'type' => 2,
                'code' => 410600,
            ),
            188 => 
            array (
                'id' => 189,
                'pid' => 16,
                'name' => '新乡市',
                'type' => 2,
                'code' => 410700,
            ),
            189 => 
            array (
                'id' => 190,
                'pid' => 16,
                'name' => '焦作市',
                'type' => 2,
                'code' => 410800,
            ),
            190 => 
            array (
                'id' => 191,
                'pid' => 16,
                'name' => '濮阳市',
                'type' => 2,
                'code' => 410900,
            ),
            191 => 
            array (
                'id' => 192,
                'pid' => 16,
                'name' => '许昌市',
                'type' => 2,
                'code' => 411000,
            ),
            192 => 
            array (
                'id' => 193,
                'pid' => 16,
                'name' => '漯河市',
                'type' => 2,
                'code' => 411100,
            ),
            193 => 
            array (
                'id' => 194,
                'pid' => 16,
                'name' => '三门峡市',
                'type' => 2,
                'code' => 411200,
            ),
            194 => 
            array (
                'id' => 195,
                'pid' => 16,
                'name' => '南阳市',
                'type' => 2,
                'code' => 411300,
            ),
            195 => 
            array (
                'id' => 196,
                'pid' => 16,
                'name' => '商丘市',
                'type' => 2,
                'code' => 411400,
            ),
            196 => 
            array (
                'id' => 197,
                'pid' => 16,
                'name' => '信阳市',
                'type' => 2,
                'code' => 411500,
            ),
            197 => 
            array (
                'id' => 198,
                'pid' => 16,
                'name' => '周口市',
                'type' => 2,
                'code' => 411600,
            ),
            198 => 
            array (
                'id' => 199,
                'pid' => 16,
                'name' => '驻马店市',
                'type' => 2,
                'code' => 411700,
            ),
            199 => 
            array (
                'id' => 200,
                'pid' => 16,
                'name' => '省直辖县级行政区划',
                'type' => 2,
                'code' => 419000,
            ),
            200 => 
            array (
                'id' => 201,
                'pid' => 17,
                'name' => '武汉市',
                'type' => 2,
                'code' => 420100,
            ),
            201 => 
            array (
                'id' => 202,
                'pid' => 17,
                'name' => '黄石市',
                'type' => 2,
                'code' => 420200,
            ),
            202 => 
            array (
                'id' => 203,
                'pid' => 17,
                'name' => '十堰市',
                'type' => 2,
                'code' => 420300,
            ),
            203 => 
            array (
                'id' => 204,
                'pid' => 17,
                'name' => '宜昌市',
                'type' => 2,
                'code' => 420500,
            ),
            204 => 
            array (
                'id' => 205,
                'pid' => 17,
                'name' => '襄阳市',
                'type' => 2,
                'code' => 420600,
            ),
            205 => 
            array (
                'id' => 206,
                'pid' => 17,
                'name' => '鄂州市',
                'type' => 2,
                'code' => 420700,
            ),
            206 => 
            array (
                'id' => 207,
                'pid' => 17,
                'name' => '荆门市',
                'type' => 2,
                'code' => 420800,
            ),
            207 => 
            array (
                'id' => 208,
                'pid' => 17,
                'name' => '孝感市',
                'type' => 2,
                'code' => 420900,
            ),
            208 => 
            array (
                'id' => 209,
                'pid' => 17,
                'name' => '荆州市',
                'type' => 2,
                'code' => 421000,
            ),
            209 => 
            array (
                'id' => 210,
                'pid' => 17,
                'name' => '黄冈市',
                'type' => 2,
                'code' => 421100,
            ),
            210 => 
            array (
                'id' => 211,
                'pid' => 17,
                'name' => '咸宁市',
                'type' => 2,
                'code' => 421200,
            ),
            211 => 
            array (
                'id' => 212,
                'pid' => 17,
                'name' => '随州市',
                'type' => 2,
                'code' => 421300,
            ),
            212 => 
            array (
                'id' => 213,
                'pid' => 17,
                'name' => '恩施土家族苗族自治州',
                'type' => 2,
                'code' => 422800,
            ),
            213 => 
            array (
                'id' => 214,
                'pid' => 17,
                'name' => '省直辖县级行政区划',
                'type' => 2,
                'code' => 429000,
            ),
            214 => 
            array (
                'id' => 215,
                'pid' => 18,
                'name' => '长沙市',
                'type' => 2,
                'code' => 430100,
            ),
            215 => 
            array (
                'id' => 216,
                'pid' => 18,
                'name' => '株洲市',
                'type' => 2,
                'code' => 430200,
            ),
            216 => 
            array (
                'id' => 217,
                'pid' => 18,
                'name' => '湘潭市',
                'type' => 2,
                'code' => 430300,
            ),
            217 => 
            array (
                'id' => 218,
                'pid' => 18,
                'name' => '衡阳市',
                'type' => 2,
                'code' => 430400,
            ),
            218 => 
            array (
                'id' => 219,
                'pid' => 18,
                'name' => '邵阳市',
                'type' => 2,
                'code' => 430500,
            ),
            219 => 
            array (
                'id' => 220,
                'pid' => 18,
                'name' => '岳阳市',
                'type' => 2,
                'code' => 430600,
            ),
            220 => 
            array (
                'id' => 221,
                'pid' => 18,
                'name' => '常德市',
                'type' => 2,
                'code' => 430700,
            ),
            221 => 
            array (
                'id' => 222,
                'pid' => 18,
                'name' => '张家界市',
                'type' => 2,
                'code' => 430800,
            ),
            222 => 
            array (
                'id' => 223,
                'pid' => 18,
                'name' => '益阳市',
                'type' => 2,
                'code' => 430900,
            ),
            223 => 
            array (
                'id' => 224,
                'pid' => 18,
                'name' => '郴州市',
                'type' => 2,
                'code' => 431000,
            ),
            224 => 
            array (
                'id' => 225,
                'pid' => 18,
                'name' => '永州市',
                'type' => 2,
                'code' => 431100,
            ),
            225 => 
            array (
                'id' => 226,
                'pid' => 18,
                'name' => '怀化市',
                'type' => 2,
                'code' => 431200,
            ),
            226 => 
            array (
                'id' => 227,
                'pid' => 18,
                'name' => '娄底市',
                'type' => 2,
                'code' => 431300,
            ),
            227 => 
            array (
                'id' => 228,
                'pid' => 18,
                'name' => '湘西土家族苗族自治州',
                'type' => 2,
                'code' => 433100,
            ),
            228 => 
            array (
                'id' => 229,
                'pid' => 19,
                'name' => '广州市',
                'type' => 2,
                'code' => 440100,
            ),
            229 => 
            array (
                'id' => 230,
                'pid' => 19,
                'name' => '韶关市',
                'type' => 2,
                'code' => 440200,
            ),
            230 => 
            array (
                'id' => 231,
                'pid' => 19,
                'name' => '深圳市',
                'type' => 2,
                'code' => 440300,
            ),
            231 => 
            array (
                'id' => 232,
                'pid' => 19,
                'name' => '珠海市',
                'type' => 2,
                'code' => 440400,
            ),
            232 => 
            array (
                'id' => 233,
                'pid' => 19,
                'name' => '汕头市',
                'type' => 2,
                'code' => 440500,
            ),
            233 => 
            array (
                'id' => 234,
                'pid' => 19,
                'name' => '佛山市',
                'type' => 2,
                'code' => 440600,
            ),
            234 => 
            array (
                'id' => 235,
                'pid' => 19,
                'name' => '江门市',
                'type' => 2,
                'code' => 440700,
            ),
            235 => 
            array (
                'id' => 236,
                'pid' => 19,
                'name' => '湛江市',
                'type' => 2,
                'code' => 440800,
            ),
            236 => 
            array (
                'id' => 237,
                'pid' => 19,
                'name' => '茂名市',
                'type' => 2,
                'code' => 440900,
            ),
            237 => 
            array (
                'id' => 238,
                'pid' => 19,
                'name' => '肇庆市',
                'type' => 2,
                'code' => 441200,
            ),
            238 => 
            array (
                'id' => 239,
                'pid' => 19,
                'name' => '惠州市',
                'type' => 2,
                'code' => 441300,
            ),
            239 => 
            array (
                'id' => 240,
                'pid' => 19,
                'name' => '梅州市',
                'type' => 2,
                'code' => 441400,
            ),
            240 => 
            array (
                'id' => 241,
                'pid' => 19,
                'name' => '汕尾市',
                'type' => 2,
                'code' => 441500,
            ),
            241 => 
            array (
                'id' => 242,
                'pid' => 19,
                'name' => '河源市',
                'type' => 2,
                'code' => 441600,
            ),
            242 => 
            array (
                'id' => 243,
                'pid' => 19,
                'name' => '阳江市',
                'type' => 2,
                'code' => 441700,
            ),
            243 => 
            array (
                'id' => 244,
                'pid' => 19,
                'name' => '清远市',
                'type' => 2,
                'code' => 441800,
            ),
            244 => 
            array (
                'id' => 245,
                'pid' => 19,
                'name' => '东莞市',
                'type' => 2,
                'code' => 441900,
            ),
            245 => 
            array (
                'id' => 246,
                'pid' => 19,
                'name' => '中山市',
                'type' => 2,
                'code' => 442000,
            ),
            246 => 
            array (
                'id' => 247,
                'pid' => 19,
                'name' => '潮州市',
                'type' => 2,
                'code' => 445100,
            ),
            247 => 
            array (
                'id' => 248,
                'pid' => 19,
                'name' => '揭阳市',
                'type' => 2,
                'code' => 445200,
            ),
            248 => 
            array (
                'id' => 249,
                'pid' => 19,
                'name' => '云浮市',
                'type' => 2,
                'code' => 445300,
            ),
            249 => 
            array (
                'id' => 250,
                'pid' => 20,
                'name' => '南宁市',
                'type' => 2,
                'code' => 450100,
            ),
            250 => 
            array (
                'id' => 251,
                'pid' => 20,
                'name' => '柳州市',
                'type' => 2,
                'code' => 450200,
            ),
            251 => 
            array (
                'id' => 252,
                'pid' => 20,
                'name' => '桂林市',
                'type' => 2,
                'code' => 450300,
            ),
            252 => 
            array (
                'id' => 253,
                'pid' => 20,
                'name' => '梧州市',
                'type' => 2,
                'code' => 450400,
            ),
            253 => 
            array (
                'id' => 254,
                'pid' => 20,
                'name' => '北海市',
                'type' => 2,
                'code' => 450500,
            ),
            254 => 
            array (
                'id' => 255,
                'pid' => 20,
                'name' => '防城港市',
                'type' => 2,
                'code' => 450600,
            ),
            255 => 
            array (
                'id' => 256,
                'pid' => 20,
                'name' => '钦州市',
                'type' => 2,
                'code' => 450700,
            ),
            256 => 
            array (
                'id' => 257,
                'pid' => 20,
                'name' => '贵港市',
                'type' => 2,
                'code' => 450800,
            ),
            257 => 
            array (
                'id' => 258,
                'pid' => 20,
                'name' => '玉林市',
                'type' => 2,
                'code' => 450900,
            ),
            258 => 
            array (
                'id' => 259,
                'pid' => 20,
                'name' => '百色市',
                'type' => 2,
                'code' => 451000,
            ),
            259 => 
            array (
                'id' => 260,
                'pid' => 20,
                'name' => '贺州市',
                'type' => 2,
                'code' => 451100,
            ),
            260 => 
            array (
                'id' => 261,
                'pid' => 20,
                'name' => '河池市',
                'type' => 2,
                'code' => 451200,
            ),
            261 => 
            array (
                'id' => 262,
                'pid' => 20,
                'name' => '来宾市',
                'type' => 2,
                'code' => 451300,
            ),
            262 => 
            array (
                'id' => 263,
                'pid' => 20,
                'name' => '崇左市',
                'type' => 2,
                'code' => 451400,
            ),
            263 => 
            array (
                'id' => 264,
                'pid' => 21,
                'name' => '海口市',
                'type' => 2,
                'code' => 460100,
            ),
            264 => 
            array (
                'id' => 265,
                'pid' => 21,
                'name' => '三亚市',
                'type' => 2,
                'code' => 460200,
            ),
            265 => 
            array (
                'id' => 266,
                'pid' => 21,
                'name' => '三沙市',
                'type' => 2,
                'code' => 460300,
            ),
            266 => 
            array (
                'id' => 267,
                'pid' => 21,
                'name' => '儋州市',
                'type' => 2,
                'code' => 460400,
            ),
            267 => 
            array (
                'id' => 268,
                'pid' => 21,
                'name' => '省直辖县级行政区划',
                'type' => 2,
                'code' => 469000,
            ),
            268 => 
            array (
                'id' => 269,
                'pid' => 22,
                'name' => '市辖区',
                'type' => 2,
                'code' => 500100,
            ),
            269 => 
            array (
                'id' => 270,
                'pid' => 22,
                'name' => '县',
                'type' => 2,
                'code' => 500200,
            ),
            270 => 
            array (
                'id' => 271,
                'pid' => 23,
                'name' => '成都市',
                'type' => 2,
                'code' => 510100,
            ),
            271 => 
            array (
                'id' => 272,
                'pid' => 23,
                'name' => '自贡市',
                'type' => 2,
                'code' => 510300,
            ),
            272 => 
            array (
                'id' => 273,
                'pid' => 23,
                'name' => '攀枝花市',
                'type' => 2,
                'code' => 510400,
            ),
            273 => 
            array (
                'id' => 274,
                'pid' => 23,
                'name' => '泸州市',
                'type' => 2,
                'code' => 510500,
            ),
            274 => 
            array (
                'id' => 275,
                'pid' => 23,
                'name' => '德阳市',
                'type' => 2,
                'code' => 510600,
            ),
            275 => 
            array (
                'id' => 276,
                'pid' => 23,
                'name' => '绵阳市',
                'type' => 2,
                'code' => 510700,
            ),
            276 => 
            array (
                'id' => 277,
                'pid' => 23,
                'name' => '广元市',
                'type' => 2,
                'code' => 510800,
            ),
            277 => 
            array (
                'id' => 278,
                'pid' => 23,
                'name' => '遂宁市',
                'type' => 2,
                'code' => 510900,
            ),
            278 => 
            array (
                'id' => 279,
                'pid' => 23,
                'name' => '内江市',
                'type' => 2,
                'code' => 511000,
            ),
            279 => 
            array (
                'id' => 280,
                'pid' => 23,
                'name' => '乐山市',
                'type' => 2,
                'code' => 511100,
            ),
            280 => 
            array (
                'id' => 281,
                'pid' => 23,
                'name' => '南充市',
                'type' => 2,
                'code' => 511300,
            ),
            281 => 
            array (
                'id' => 282,
                'pid' => 23,
                'name' => '眉山市',
                'type' => 2,
                'code' => 511400,
            ),
            282 => 
            array (
                'id' => 283,
                'pid' => 23,
                'name' => '宜宾市',
                'type' => 2,
                'code' => 511500,
            ),
            283 => 
            array (
                'id' => 284,
                'pid' => 23,
                'name' => '广安市',
                'type' => 2,
                'code' => 511600,
            ),
            284 => 
            array (
                'id' => 285,
                'pid' => 23,
                'name' => '达州市',
                'type' => 2,
                'code' => 511700,
            ),
            285 => 
            array (
                'id' => 286,
                'pid' => 23,
                'name' => '雅安市',
                'type' => 2,
                'code' => 511800,
            ),
            286 => 
            array (
                'id' => 287,
                'pid' => 23,
                'name' => '巴中市',
                'type' => 2,
                'code' => 511900,
            ),
            287 => 
            array (
                'id' => 288,
                'pid' => 23,
                'name' => '资阳市',
                'type' => 2,
                'code' => 512000,
            ),
            288 => 
            array (
                'id' => 289,
                'pid' => 23,
                'name' => '阿坝藏族羌族自治州',
                'type' => 2,
                'code' => 513200,
            ),
            289 => 
            array (
                'id' => 290,
                'pid' => 23,
                'name' => '甘孜藏族自治州',
                'type' => 2,
                'code' => 513300,
            ),
            290 => 
            array (
                'id' => 291,
                'pid' => 23,
                'name' => '凉山彝族自治州',
                'type' => 2,
                'code' => 513400,
            ),
            291 => 
            array (
                'id' => 292,
                'pid' => 24,
                'name' => '贵阳市',
                'type' => 2,
                'code' => 520100,
            ),
            292 => 
            array (
                'id' => 293,
                'pid' => 24,
                'name' => '六盘水市',
                'type' => 2,
                'code' => 520200,
            ),
            293 => 
            array (
                'id' => 294,
                'pid' => 24,
                'name' => '遵义市',
                'type' => 2,
                'code' => 520300,
            ),
            294 => 
            array (
                'id' => 295,
                'pid' => 24,
                'name' => '安顺市',
                'type' => 2,
                'code' => 520400,
            ),
            295 => 
            array (
                'id' => 296,
                'pid' => 24,
                'name' => '毕节市',
                'type' => 2,
                'code' => 520500,
            ),
            296 => 
            array (
                'id' => 297,
                'pid' => 24,
                'name' => '铜仁市',
                'type' => 2,
                'code' => 520600,
            ),
            297 => 
            array (
                'id' => 298,
                'pid' => 24,
                'name' => '黔西南布依族苗族自治州',
                'type' => 2,
                'code' => 522300,
            ),
            298 => 
            array (
                'id' => 299,
                'pid' => 24,
                'name' => '黔东南苗族侗族自治州',
                'type' => 2,
                'code' => 522600,
            ),
            299 => 
            array (
                'id' => 300,
                'pid' => 24,
                'name' => '黔南布依族苗族自治州',
                'type' => 2,
                'code' => 522700,
            ),
            300 => 
            array (
                'id' => 301,
                'pid' => 25,
                'name' => '昆明市',
                'type' => 2,
                'code' => 530100,
            ),
            301 => 
            array (
                'id' => 302,
                'pid' => 25,
                'name' => '曲靖市',
                'type' => 2,
                'code' => 530300,
            ),
            302 => 
            array (
                'id' => 303,
                'pid' => 25,
                'name' => '玉溪市',
                'type' => 2,
                'code' => 530400,
            ),
            303 => 
            array (
                'id' => 304,
                'pid' => 25,
                'name' => '保山市',
                'type' => 2,
                'code' => 530500,
            ),
            304 => 
            array (
                'id' => 305,
                'pid' => 25,
                'name' => '昭通市',
                'type' => 2,
                'code' => 530600,
            ),
            305 => 
            array (
                'id' => 306,
                'pid' => 25,
                'name' => '丽江市',
                'type' => 2,
                'code' => 530700,
            ),
            306 => 
            array (
                'id' => 307,
                'pid' => 25,
                'name' => '普洱市',
                'type' => 2,
                'code' => 530800,
            ),
            307 => 
            array (
                'id' => 308,
                'pid' => 25,
                'name' => '临沧市',
                'type' => 2,
                'code' => 530900,
            ),
            308 => 
            array (
                'id' => 309,
                'pid' => 25,
                'name' => '楚雄彝族自治州',
                'type' => 2,
                'code' => 532300,
            ),
            309 => 
            array (
                'id' => 310,
                'pid' => 25,
                'name' => '红河哈尼族彝族自治州',
                'type' => 2,
                'code' => 532500,
            ),
            310 => 
            array (
                'id' => 311,
                'pid' => 25,
                'name' => '文山壮族苗族自治州',
                'type' => 2,
                'code' => 532600,
            ),
            311 => 
            array (
                'id' => 312,
                'pid' => 25,
                'name' => '西双版纳傣族自治州',
                'type' => 2,
                'code' => 532800,
            ),
            312 => 
            array (
                'id' => 313,
                'pid' => 25,
                'name' => '大理白族自治州',
                'type' => 2,
                'code' => 532900,
            ),
            313 => 
            array (
                'id' => 314,
                'pid' => 25,
                'name' => '德宏傣族景颇族自治州',
                'type' => 2,
                'code' => 533100,
            ),
            314 => 
            array (
                'id' => 315,
                'pid' => 25,
                'name' => '怒江傈僳族自治州',
                'type' => 2,
                'code' => 533300,
            ),
            315 => 
            array (
                'id' => 316,
                'pid' => 25,
                'name' => '迪庆藏族自治州',
                'type' => 2,
                'code' => 533400,
            ),
            316 => 
            array (
                'id' => 317,
                'pid' => 26,
                'name' => '拉萨市',
                'type' => 2,
                'code' => 540100,
            ),
            317 => 
            array (
                'id' => 318,
                'pid' => 26,
                'name' => '日喀则市',
                'type' => 2,
                'code' => 540200,
            ),
            318 => 
            array (
                'id' => 319,
                'pid' => 26,
                'name' => '昌都市',
                'type' => 2,
                'code' => 540300,
            ),
            319 => 
            array (
                'id' => 320,
                'pid' => 26,
                'name' => '林芝市',
                'type' => 2,
                'code' => 540400,
            ),
            320 => 
            array (
                'id' => 321,
                'pid' => 26,
                'name' => '山南市',
                'type' => 2,
                'code' => 540500,
            ),
            321 => 
            array (
                'id' => 322,
                'pid' => 26,
                'name' => '那曲地区',
                'type' => 2,
                'code' => 542400,
            ),
            322 => 
            array (
                'id' => 323,
                'pid' => 26,
                'name' => '阿里地区',
                'type' => 2,
                'code' => 542500,
            ),
            323 => 
            array (
                'id' => 324,
                'pid' => 27,
                'name' => '西安市',
                'type' => 2,
                'code' => 610100,
            ),
            324 => 
            array (
                'id' => 325,
                'pid' => 27,
                'name' => '铜川市',
                'type' => 2,
                'code' => 610200,
            ),
            325 => 
            array (
                'id' => 326,
                'pid' => 27,
                'name' => '宝鸡市',
                'type' => 2,
                'code' => 610300,
            ),
            326 => 
            array (
                'id' => 327,
                'pid' => 27,
                'name' => '咸阳市',
                'type' => 2,
                'code' => 610400,
            ),
            327 => 
            array (
                'id' => 328,
                'pid' => 27,
                'name' => '渭南市',
                'type' => 2,
                'code' => 610500,
            ),
            328 => 
            array (
                'id' => 329,
                'pid' => 27,
                'name' => '延安市',
                'type' => 2,
                'code' => 610600,
            ),
            329 => 
            array (
                'id' => 330,
                'pid' => 27,
                'name' => '汉中市',
                'type' => 2,
                'code' => 610700,
            ),
            330 => 
            array (
                'id' => 331,
                'pid' => 27,
                'name' => '榆林市',
                'type' => 2,
                'code' => 610800,
            ),
            331 => 
            array (
                'id' => 332,
                'pid' => 27,
                'name' => '安康市',
                'type' => 2,
                'code' => 610900,
            ),
            332 => 
            array (
                'id' => 333,
                'pid' => 27,
                'name' => '商洛市',
                'type' => 2,
                'code' => 611000,
            ),
            333 => 
            array (
                'id' => 334,
                'pid' => 28,
                'name' => '兰州市',
                'type' => 2,
                'code' => 620100,
            ),
            334 => 
            array (
                'id' => 335,
                'pid' => 28,
                'name' => '嘉峪关市',
                'type' => 2,
                'code' => 620200,
            ),
            335 => 
            array (
                'id' => 336,
                'pid' => 28,
                'name' => '金昌市',
                'type' => 2,
                'code' => 620300,
            ),
            336 => 
            array (
                'id' => 337,
                'pid' => 28,
                'name' => '白银市',
                'type' => 2,
                'code' => 620400,
            ),
            337 => 
            array (
                'id' => 338,
                'pid' => 28,
                'name' => '天水市',
                'type' => 2,
                'code' => 620500,
            ),
            338 => 
            array (
                'id' => 339,
                'pid' => 28,
                'name' => '武威市',
                'type' => 2,
                'code' => 620600,
            ),
            339 => 
            array (
                'id' => 340,
                'pid' => 28,
                'name' => '张掖市',
                'type' => 2,
                'code' => 620700,
            ),
            340 => 
            array (
                'id' => 341,
                'pid' => 28,
                'name' => '平凉市',
                'type' => 2,
                'code' => 620800,
            ),
            341 => 
            array (
                'id' => 342,
                'pid' => 28,
                'name' => '酒泉市',
                'type' => 2,
                'code' => 620900,
            ),
            342 => 
            array (
                'id' => 343,
                'pid' => 28,
                'name' => '庆阳市',
                'type' => 2,
                'code' => 621000,
            ),
            343 => 
            array (
                'id' => 344,
                'pid' => 28,
                'name' => '定西市',
                'type' => 2,
                'code' => 621100,
            ),
            344 => 
            array (
                'id' => 345,
                'pid' => 28,
                'name' => '陇南市',
                'type' => 2,
                'code' => 621200,
            ),
            345 => 
            array (
                'id' => 346,
                'pid' => 28,
                'name' => '临夏回族自治州',
                'type' => 2,
                'code' => 622900,
            ),
            346 => 
            array (
                'id' => 347,
                'pid' => 28,
                'name' => '甘南藏族自治州',
                'type' => 2,
                'code' => 623000,
            ),
            347 => 
            array (
                'id' => 348,
                'pid' => 29,
                'name' => '西宁市',
                'type' => 2,
                'code' => 630100,
            ),
            348 => 
            array (
                'id' => 349,
                'pid' => 29,
                'name' => '海东市',
                'type' => 2,
                'code' => 630200,
            ),
            349 => 
            array (
                'id' => 350,
                'pid' => 29,
                'name' => '海北藏族自治州',
                'type' => 2,
                'code' => 632200,
            ),
            350 => 
            array (
                'id' => 351,
                'pid' => 29,
                'name' => '黄南藏族自治州',
                'type' => 2,
                'code' => 632300,
            ),
            351 => 
            array (
                'id' => 352,
                'pid' => 29,
                'name' => '海南藏族自治州',
                'type' => 2,
                'code' => 632500,
            ),
            352 => 
            array (
                'id' => 353,
                'pid' => 29,
                'name' => '果洛藏族自治州',
                'type' => 2,
                'code' => 632600,
            ),
            353 => 
            array (
                'id' => 354,
                'pid' => 29,
                'name' => '玉树藏族自治州',
                'type' => 2,
                'code' => 632700,
            ),
            354 => 
            array (
                'id' => 355,
                'pid' => 29,
                'name' => '海西蒙古族藏族自治州',
                'type' => 2,
                'code' => 632800,
            ),
            355 => 
            array (
                'id' => 356,
                'pid' => 30,
                'name' => '银川市',
                'type' => 2,
                'code' => 640100,
            ),
            356 => 
            array (
                'id' => 357,
                'pid' => 30,
                'name' => '石嘴山市',
                'type' => 2,
                'code' => 640200,
            ),
            357 => 
            array (
                'id' => 358,
                'pid' => 30,
                'name' => '吴忠市',
                'type' => 2,
                'code' => 640300,
            ),
            358 => 
            array (
                'id' => 359,
                'pid' => 30,
                'name' => '固原市',
                'type' => 2,
                'code' => 640400,
            ),
            359 => 
            array (
                'id' => 360,
                'pid' => 30,
                'name' => '中卫市',
                'type' => 2,
                'code' => 640500,
            ),
            360 => 
            array (
                'id' => 361,
                'pid' => 31,
                'name' => '乌鲁木齐市',
                'type' => 2,
                'code' => 650100,
            ),
            361 => 
            array (
                'id' => 362,
                'pid' => 31,
                'name' => '克拉玛依市',
                'type' => 2,
                'code' => 650200,
            ),
            362 => 
            array (
                'id' => 363,
                'pid' => 31,
                'name' => '吐鲁番市',
                'type' => 2,
                'code' => 650400,
            ),
            363 => 
            array (
                'id' => 364,
                'pid' => 31,
                'name' => '哈密市',
                'type' => 2,
                'code' => 650500,
            ),
            364 => 
            array (
                'id' => 365,
                'pid' => 31,
                'name' => '昌吉回族自治州',
                'type' => 2,
                'code' => 652300,
            ),
            365 => 
            array (
                'id' => 366,
                'pid' => 31,
                'name' => '博尔塔拉蒙古自治州',
                'type' => 2,
                'code' => 652700,
            ),
            366 => 
            array (
                'id' => 367,
                'pid' => 31,
                'name' => '巴音郭楞蒙古自治州',
                'type' => 2,
                'code' => 652800,
            ),
            367 => 
            array (
                'id' => 368,
                'pid' => 31,
                'name' => '阿克苏地区',
                'type' => 2,
                'code' => 652900,
            ),
            368 => 
            array (
                'id' => 369,
                'pid' => 31,
                'name' => '克孜勒苏柯尔克孜自治州',
                'type' => 2,
                'code' => 653000,
            ),
            369 => 
            array (
                'id' => 370,
                'pid' => 31,
                'name' => '喀什地区',
                'type' => 2,
                'code' => 653100,
            ),
            370 => 
            array (
                'id' => 371,
                'pid' => 31,
                'name' => '和田地区',
                'type' => 2,
                'code' => 653200,
            ),
            371 => 
            array (
                'id' => 372,
                'pid' => 31,
                'name' => '伊犁哈萨克自治州',
                'type' => 2,
                'code' => 654000,
            ),
            372 => 
            array (
                'id' => 373,
                'pid' => 31,
                'name' => '塔城地区',
                'type' => 2,
                'code' => 654200,
            ),
            373 => 
            array (
                'id' => 374,
                'pid' => 31,
                'name' => '阿勒泰地区',
                'type' => 2,
                'code' => 654300,
            ),
            374 => 
            array (
                'id' => 375,
                'pid' => 31,
                'name' => '自治区直辖县级行政区划',
                'type' => 2,
                'code' => 659000,
            ),
            375 => 
            array (
                'id' => 376,
                'pid' => 32,
                'name' => '东城区',
                'type' => 3,
                'code' => 110101,
            ),
            376 => 
            array (
                'id' => 377,
                'pid' => 32,
                'name' => '西城区',
                'type' => 3,
                'code' => 110102,
            ),
            377 => 
            array (
                'id' => 378,
                'pid' => 32,
                'name' => '朝阳区',
                'type' => 3,
                'code' => 110105,
            ),
            378 => 
            array (
                'id' => 379,
                'pid' => 32,
                'name' => '丰台区',
                'type' => 3,
                'code' => 110106,
            ),
            379 => 
            array (
                'id' => 380,
                'pid' => 32,
                'name' => '石景山区',
                'type' => 3,
                'code' => 110107,
            ),
            380 => 
            array (
                'id' => 381,
                'pid' => 32,
                'name' => '海淀区',
                'type' => 3,
                'code' => 110108,
            ),
            381 => 
            array (
                'id' => 382,
                'pid' => 32,
                'name' => '门头沟区',
                'type' => 3,
                'code' => 110109,
            ),
            382 => 
            array (
                'id' => 383,
                'pid' => 32,
                'name' => '房山区',
                'type' => 3,
                'code' => 110111,
            ),
            383 => 
            array (
                'id' => 384,
                'pid' => 32,
                'name' => '通州区',
                'type' => 3,
                'code' => 110112,
            ),
            384 => 
            array (
                'id' => 385,
                'pid' => 32,
                'name' => '顺义区',
                'type' => 3,
                'code' => 110113,
            ),
            385 => 
            array (
                'id' => 386,
                'pid' => 32,
                'name' => '昌平区',
                'type' => 3,
                'code' => 110114,
            ),
            386 => 
            array (
                'id' => 387,
                'pid' => 32,
                'name' => '大兴区',
                'type' => 3,
                'code' => 110115,
            ),
            387 => 
            array (
                'id' => 388,
                'pid' => 32,
                'name' => '怀柔区',
                'type' => 3,
                'code' => 110116,
            ),
            388 => 
            array (
                'id' => 389,
                'pid' => 32,
                'name' => '平谷区',
                'type' => 3,
                'code' => 110117,
            ),
            389 => 
            array (
                'id' => 390,
                'pid' => 32,
                'name' => '密云区',
                'type' => 3,
                'code' => 110118,
            ),
            390 => 
            array (
                'id' => 391,
                'pid' => 32,
                'name' => '延庆区',
                'type' => 3,
                'code' => 110119,
            ),
            391 => 
            array (
                'id' => 392,
                'pid' => 33,
                'name' => '和平区',
                'type' => 3,
                'code' => 120101,
            ),
            392 => 
            array (
                'id' => 393,
                'pid' => 33,
                'name' => '河东区',
                'type' => 3,
                'code' => 120102,
            ),
            393 => 
            array (
                'id' => 394,
                'pid' => 33,
                'name' => '河西区',
                'type' => 3,
                'code' => 120103,
            ),
            394 => 
            array (
                'id' => 395,
                'pid' => 33,
                'name' => '南开区',
                'type' => 3,
                'code' => 120104,
            ),
            395 => 
            array (
                'id' => 396,
                'pid' => 33,
                'name' => '河北区',
                'type' => 3,
                'code' => 120105,
            ),
            396 => 
            array (
                'id' => 397,
                'pid' => 33,
                'name' => '红桥区',
                'type' => 3,
                'code' => 120106,
            ),
            397 => 
            array (
                'id' => 398,
                'pid' => 33,
                'name' => '东丽区',
                'type' => 3,
                'code' => 120110,
            ),
            398 => 
            array (
                'id' => 399,
                'pid' => 33,
                'name' => '西青区',
                'type' => 3,
                'code' => 120111,
            ),
            399 => 
            array (
                'id' => 400,
                'pid' => 33,
                'name' => '津南区',
                'type' => 3,
                'code' => 120112,
            ),
            400 => 
            array (
                'id' => 401,
                'pid' => 33,
                'name' => '北辰区',
                'type' => 3,
                'code' => 120113,
            ),
            401 => 
            array (
                'id' => 402,
                'pid' => 33,
                'name' => '武清区',
                'type' => 3,
                'code' => 120114,
            ),
            402 => 
            array (
                'id' => 403,
                'pid' => 33,
                'name' => '宝坻区',
                'type' => 3,
                'code' => 120115,
            ),
            403 => 
            array (
                'id' => 404,
                'pid' => 33,
                'name' => '滨海新区',
                'type' => 3,
                'code' => 120116,
            ),
            404 => 
            array (
                'id' => 405,
                'pid' => 33,
                'name' => '宁河区',
                'type' => 3,
                'code' => 120117,
            ),
            405 => 
            array (
                'id' => 406,
                'pid' => 33,
                'name' => '静海区',
                'type' => 3,
                'code' => 120118,
            ),
            406 => 
            array (
                'id' => 407,
                'pid' => 33,
                'name' => '蓟州区',
                'type' => 3,
                'code' => 120119,
            ),
            407 => 
            array (
                'id' => 408,
                'pid' => 34,
                'name' => '长安区',
                'type' => 3,
                'code' => 130102,
            ),
            408 => 
            array (
                'id' => 409,
                'pid' => 34,
                'name' => '桥西区',
                'type' => 3,
                'code' => 130104,
            ),
            409 => 
            array (
                'id' => 410,
                'pid' => 34,
                'name' => '新华区',
                'type' => 3,
                'code' => 130105,
            ),
            410 => 
            array (
                'id' => 411,
                'pid' => 34,
                'name' => '井陉矿区',
                'type' => 3,
                'code' => 130107,
            ),
            411 => 
            array (
                'id' => 412,
                'pid' => 34,
                'name' => '裕华区',
                'type' => 3,
                'code' => 130108,
            ),
            412 => 
            array (
                'id' => 413,
                'pid' => 34,
                'name' => '藁城区',
                'type' => 3,
                'code' => 130109,
            ),
            413 => 
            array (
                'id' => 414,
                'pid' => 34,
                'name' => '鹿泉区',
                'type' => 3,
                'code' => 130110,
            ),
            414 => 
            array (
                'id' => 415,
                'pid' => 34,
                'name' => '栾城区',
                'type' => 3,
                'code' => 130111,
            ),
            415 => 
            array (
                'id' => 416,
                'pid' => 34,
                'name' => '井陉县',
                'type' => 3,
                'code' => 130121,
            ),
            416 => 
            array (
                'id' => 417,
                'pid' => 34,
                'name' => '正定县',
                'type' => 3,
                'code' => 130123,
            ),
            417 => 
            array (
                'id' => 418,
                'pid' => 34,
                'name' => '行唐县',
                'type' => 3,
                'code' => 130125,
            ),
            418 => 
            array (
                'id' => 419,
                'pid' => 34,
                'name' => '灵寿县',
                'type' => 3,
                'code' => 130126,
            ),
            419 => 
            array (
                'id' => 420,
                'pid' => 34,
                'name' => '高邑县',
                'type' => 3,
                'code' => 130127,
            ),
            420 => 
            array (
                'id' => 421,
                'pid' => 34,
                'name' => '深泽县',
                'type' => 3,
                'code' => 130128,
            ),
            421 => 
            array (
                'id' => 422,
                'pid' => 34,
                'name' => '赞皇县',
                'type' => 3,
                'code' => 130129,
            ),
            422 => 
            array (
                'id' => 423,
                'pid' => 34,
                'name' => '无极县',
                'type' => 3,
                'code' => 130130,
            ),
            423 => 
            array (
                'id' => 424,
                'pid' => 34,
                'name' => '平山县',
                'type' => 3,
                'code' => 130131,
            ),
            424 => 
            array (
                'id' => 425,
                'pid' => 34,
                'name' => '元氏县',
                'type' => 3,
                'code' => 130132,
            ),
            425 => 
            array (
                'id' => 426,
                'pid' => 34,
                'name' => '赵县',
                'type' => 3,
                'code' => 130133,
            ),
            426 => 
            array (
                'id' => 427,
                'pid' => 34,
                'name' => '晋州市',
                'type' => 3,
                'code' => 130183,
            ),
            427 => 
            array (
                'id' => 428,
                'pid' => 34,
                'name' => '新乐市',
                'type' => 3,
                'code' => 130184,
            ),
            428 => 
            array (
                'id' => 429,
                'pid' => 35,
                'name' => '路南区',
                'type' => 3,
                'code' => 130202,
            ),
            429 => 
            array (
                'id' => 430,
                'pid' => 35,
                'name' => '路北区',
                'type' => 3,
                'code' => 130203,
            ),
            430 => 
            array (
                'id' => 431,
                'pid' => 35,
                'name' => '古冶区',
                'type' => 3,
                'code' => 130204,
            ),
            431 => 
            array (
                'id' => 432,
                'pid' => 35,
                'name' => '开平区',
                'type' => 3,
                'code' => 130205,
            ),
            432 => 
            array (
                'id' => 433,
                'pid' => 35,
                'name' => '丰南区',
                'type' => 3,
                'code' => 130207,
            ),
            433 => 
            array (
                'id' => 434,
                'pid' => 35,
                'name' => '丰润区',
                'type' => 3,
                'code' => 130208,
            ),
            434 => 
            array (
                'id' => 435,
                'pid' => 35,
                'name' => '曹妃甸区',
                'type' => 3,
                'code' => 130209,
            ),
            435 => 
            array (
                'id' => 436,
                'pid' => 35,
                'name' => '滦县',
                'type' => 3,
                'code' => 130223,
            ),
            436 => 
            array (
                'id' => 437,
                'pid' => 35,
                'name' => '滦南县',
                'type' => 3,
                'code' => 130224,
            ),
            437 => 
            array (
                'id' => 438,
                'pid' => 35,
                'name' => '乐亭县',
                'type' => 3,
                'code' => 130225,
            ),
            438 => 
            array (
                'id' => 439,
                'pid' => 35,
                'name' => '迁西县',
                'type' => 3,
                'code' => 130227,
            ),
            439 => 
            array (
                'id' => 440,
                'pid' => 35,
                'name' => '玉田县',
                'type' => 3,
                'code' => 130229,
            ),
            440 => 
            array (
                'id' => 441,
                'pid' => 35,
                'name' => '遵化市',
                'type' => 3,
                'code' => 130281,
            ),
            441 => 
            array (
                'id' => 442,
                'pid' => 35,
                'name' => '迁安市',
                'type' => 3,
                'code' => 130283,
            ),
            442 => 
            array (
                'id' => 443,
                'pid' => 36,
                'name' => '海港区',
                'type' => 3,
                'code' => 130302,
            ),
            443 => 
            array (
                'id' => 444,
                'pid' => 36,
                'name' => '山海关区',
                'type' => 3,
                'code' => 130303,
            ),
            444 => 
            array (
                'id' => 445,
                'pid' => 36,
                'name' => '北戴河区',
                'type' => 3,
                'code' => 130304,
            ),
            445 => 
            array (
                'id' => 446,
                'pid' => 36,
                'name' => '抚宁区',
                'type' => 3,
                'code' => 130306,
            ),
            446 => 
            array (
                'id' => 447,
                'pid' => 36,
                'name' => '青龙满族自治县',
                'type' => 3,
                'code' => 130321,
            ),
            447 => 
            array (
                'id' => 448,
                'pid' => 36,
                'name' => '昌黎县',
                'type' => 3,
                'code' => 130322,
            ),
            448 => 
            array (
                'id' => 449,
                'pid' => 36,
                'name' => '卢龙县',
                'type' => 3,
                'code' => 130324,
            ),
            449 => 
            array (
                'id' => 450,
                'pid' => 37,
                'name' => '邯山区',
                'type' => 3,
                'code' => 130402,
            ),
            450 => 
            array (
                'id' => 451,
                'pid' => 37,
                'name' => '丛台区',
                'type' => 3,
                'code' => 130403,
            ),
            451 => 
            array (
                'id' => 452,
                'pid' => 37,
                'name' => '复兴区',
                'type' => 3,
                'code' => 130404,
            ),
            452 => 
            array (
                'id' => 453,
                'pid' => 37,
                'name' => '峰峰矿区',
                'type' => 3,
                'code' => 130406,
            ),
            453 => 
            array (
                'id' => 454,
                'pid' => 37,
                'name' => '邯郸县',
                'type' => 3,
                'code' => 130421,
            ),
            454 => 
            array (
                'id' => 455,
                'pid' => 37,
                'name' => '临漳县',
                'type' => 3,
                'code' => 130423,
            ),
            455 => 
            array (
                'id' => 456,
                'pid' => 37,
                'name' => '成安县',
                'type' => 3,
                'code' => 130424,
            ),
            456 => 
            array (
                'id' => 457,
                'pid' => 37,
                'name' => '大名县',
                'type' => 3,
                'code' => 130425,
            ),
            457 => 
            array (
                'id' => 458,
                'pid' => 37,
                'name' => '涉县',
                'type' => 3,
                'code' => 130426,
            ),
            458 => 
            array (
                'id' => 459,
                'pid' => 37,
                'name' => '磁县',
                'type' => 3,
                'code' => 130427,
            ),
            459 => 
            array (
                'id' => 460,
                'pid' => 37,
                'name' => '肥乡县',
                'type' => 3,
                'code' => 130428,
            ),
            460 => 
            array (
                'id' => 461,
                'pid' => 37,
                'name' => '永年县',
                'type' => 3,
                'code' => 130429,
            ),
            461 => 
            array (
                'id' => 462,
                'pid' => 37,
                'name' => '邱县',
                'type' => 3,
                'code' => 130430,
            ),
            462 => 
            array (
                'id' => 463,
                'pid' => 37,
                'name' => '鸡泽县',
                'type' => 3,
                'code' => 130431,
            ),
            463 => 
            array (
                'id' => 464,
                'pid' => 37,
                'name' => '广平县',
                'type' => 3,
                'code' => 130432,
            ),
            464 => 
            array (
                'id' => 465,
                'pid' => 37,
                'name' => '馆陶县',
                'type' => 3,
                'code' => 130433,
            ),
            465 => 
            array (
                'id' => 466,
                'pid' => 37,
                'name' => '魏县',
                'type' => 3,
                'code' => 130434,
            ),
            466 => 
            array (
                'id' => 467,
                'pid' => 37,
                'name' => '曲周县',
                'type' => 3,
                'code' => 130435,
            ),
            467 => 
            array (
                'id' => 468,
                'pid' => 37,
                'name' => '武安市',
                'type' => 3,
                'code' => 130481,
            ),
            468 => 
            array (
                'id' => 469,
                'pid' => 38,
                'name' => '桥东区',
                'type' => 3,
                'code' => 130502,
            ),
            469 => 
            array (
                'id' => 470,
                'pid' => 38,
                'name' => '桥西区',
                'type' => 3,
                'code' => 130503,
            ),
            470 => 
            array (
                'id' => 471,
                'pid' => 38,
                'name' => '邢台县',
                'type' => 3,
                'code' => 130521,
            ),
            471 => 
            array (
                'id' => 472,
                'pid' => 38,
                'name' => '临城县',
                'type' => 3,
                'code' => 130522,
            ),
            472 => 
            array (
                'id' => 473,
                'pid' => 38,
                'name' => '内丘县',
                'type' => 3,
                'code' => 130523,
            ),
            473 => 
            array (
                'id' => 474,
                'pid' => 38,
                'name' => '柏乡县',
                'type' => 3,
                'code' => 130524,
            ),
            474 => 
            array (
                'id' => 475,
                'pid' => 38,
                'name' => '隆尧县',
                'type' => 3,
                'code' => 130525,
            ),
            475 => 
            array (
                'id' => 476,
                'pid' => 38,
                'name' => '任县',
                'type' => 3,
                'code' => 130526,
            ),
            476 => 
            array (
                'id' => 477,
                'pid' => 38,
                'name' => '南和县',
                'type' => 3,
                'code' => 130527,
            ),
            477 => 
            array (
                'id' => 478,
                'pid' => 38,
                'name' => '宁晋县',
                'type' => 3,
                'code' => 130528,
            ),
            478 => 
            array (
                'id' => 479,
                'pid' => 38,
                'name' => '巨鹿县',
                'type' => 3,
                'code' => 130529,
            ),
            479 => 
            array (
                'id' => 480,
                'pid' => 38,
                'name' => '新河县',
                'type' => 3,
                'code' => 130530,
            ),
            480 => 
            array (
                'id' => 481,
                'pid' => 38,
                'name' => '广宗县',
                'type' => 3,
                'code' => 130531,
            ),
            481 => 
            array (
                'id' => 482,
                'pid' => 38,
                'name' => '平乡县',
                'type' => 3,
                'code' => 130532,
            ),
            482 => 
            array (
                'id' => 483,
                'pid' => 38,
                'name' => '威县',
                'type' => 3,
                'code' => 130533,
            ),
            483 => 
            array (
                'id' => 484,
                'pid' => 38,
                'name' => '清河县',
                'type' => 3,
                'code' => 130534,
            ),
            484 => 
            array (
                'id' => 485,
                'pid' => 38,
                'name' => '临西县',
                'type' => 3,
                'code' => 130535,
            ),
            485 => 
            array (
                'id' => 486,
                'pid' => 38,
                'name' => '南宫市',
                'type' => 3,
                'code' => 130581,
            ),
            486 => 
            array (
                'id' => 487,
                'pid' => 38,
                'name' => '沙河市',
                'type' => 3,
                'code' => 130582,
            ),
            487 => 
            array (
                'id' => 488,
                'pid' => 39,
                'name' => '竞秀区',
                'type' => 3,
                'code' => 130602,
            ),
            488 => 
            array (
                'id' => 489,
                'pid' => 39,
                'name' => '莲池区',
                'type' => 3,
                'code' => 130606,
            ),
            489 => 
            array (
                'id' => 490,
                'pid' => 39,
                'name' => '满城区',
                'type' => 3,
                'code' => 130607,
            ),
            490 => 
            array (
                'id' => 491,
                'pid' => 39,
                'name' => '清苑区',
                'type' => 3,
                'code' => 130608,
            ),
            491 => 
            array (
                'id' => 492,
                'pid' => 39,
                'name' => '徐水区',
                'type' => 3,
                'code' => 130609,
            ),
            492 => 
            array (
                'id' => 493,
                'pid' => 39,
                'name' => '涞水县',
                'type' => 3,
                'code' => 130623,
            ),
            493 => 
            array (
                'id' => 494,
                'pid' => 39,
                'name' => '阜平县',
                'type' => 3,
                'code' => 130624,
            ),
            494 => 
            array (
                'id' => 495,
                'pid' => 39,
                'name' => '定兴县',
                'type' => 3,
                'code' => 130626,
            ),
            495 => 
            array (
                'id' => 496,
                'pid' => 39,
                'name' => '唐县',
                'type' => 3,
                'code' => 130627,
            ),
            496 => 
            array (
                'id' => 497,
                'pid' => 39,
                'name' => '高阳县',
                'type' => 3,
                'code' => 130628,
            ),
            497 => 
            array (
                'id' => 498,
                'pid' => 39,
                'name' => '容城县',
                'type' => 3,
                'code' => 130629,
            ),
            498 => 
            array (
                'id' => 499,
                'pid' => 39,
                'name' => '涞源县',
                'type' => 3,
                'code' => 130630,
            ),
            499 => 
            array (
                'id' => 500,
                'pid' => 39,
                'name' => '望都县',
                'type' => 3,
                'code' => 130631,
            ),
        ));
        \DB::table('z_region')->insert(array (
            0 => 
            array (
                'id' => 501,
                'pid' => 39,
                'name' => '安新县',
                'type' => 3,
                'code' => 130632,
            ),
            1 => 
            array (
                'id' => 502,
                'pid' => 39,
                'name' => '易县',
                'type' => 3,
                'code' => 130633,
            ),
            2 => 
            array (
                'id' => 503,
                'pid' => 39,
                'name' => '曲阳县',
                'type' => 3,
                'code' => 130634,
            ),
            3 => 
            array (
                'id' => 504,
                'pid' => 39,
                'name' => '蠡县',
                'type' => 3,
                'code' => 130635,
            ),
            4 => 
            array (
                'id' => 505,
                'pid' => 39,
                'name' => '顺平县',
                'type' => 3,
                'code' => 130636,
            ),
            5 => 
            array (
                'id' => 506,
                'pid' => 39,
                'name' => '博野县',
                'type' => 3,
                'code' => 130637,
            ),
            6 => 
            array (
                'id' => 507,
                'pid' => 39,
                'name' => '雄县',
                'type' => 3,
                'code' => 130638,
            ),
            7 => 
            array (
                'id' => 508,
                'pid' => 39,
                'name' => '涿州市',
                'type' => 3,
                'code' => 130681,
            ),
            8 => 
            array (
                'id' => 509,
                'pid' => 39,
                'name' => '安国市',
                'type' => 3,
                'code' => 130683,
            ),
            9 => 
            array (
                'id' => 510,
                'pid' => 39,
                'name' => '高碑店市',
                'type' => 3,
                'code' => 130684,
            ),
            10 => 
            array (
                'id' => 511,
                'pid' => 40,
                'name' => '桥东区',
                'type' => 3,
                'code' => 130702,
            ),
            11 => 
            array (
                'id' => 512,
                'pid' => 40,
                'name' => '桥西区',
                'type' => 3,
                'code' => 130703,
            ),
            12 => 
            array (
                'id' => 513,
                'pid' => 40,
                'name' => '宣化区',
                'type' => 3,
                'code' => 130705,
            ),
            13 => 
            array (
                'id' => 514,
                'pid' => 40,
                'name' => '下花园区',
                'type' => 3,
                'code' => 130706,
            ),
            14 => 
            array (
                'id' => 515,
                'pid' => 40,
                'name' => '万全区',
                'type' => 3,
                'code' => 130708,
            ),
            15 => 
            array (
                'id' => 516,
                'pid' => 40,
                'name' => '崇礼区',
                'type' => 3,
                'code' => 130709,
            ),
            16 => 
            array (
                'id' => 517,
                'pid' => 40,
                'name' => '张北县',
                'type' => 3,
                'code' => 130722,
            ),
            17 => 
            array (
                'id' => 518,
                'pid' => 40,
                'name' => '康保县',
                'type' => 3,
                'code' => 130723,
            ),
            18 => 
            array (
                'id' => 519,
                'pid' => 40,
                'name' => '沽源县',
                'type' => 3,
                'code' => 130724,
            ),
            19 => 
            array (
                'id' => 520,
                'pid' => 40,
                'name' => '尚义县',
                'type' => 3,
                'code' => 130725,
            ),
            20 => 
            array (
                'id' => 521,
                'pid' => 40,
                'name' => '蔚县',
                'type' => 3,
                'code' => 130726,
            ),
            21 => 
            array (
                'id' => 522,
                'pid' => 40,
                'name' => '阳原县',
                'type' => 3,
                'code' => 130727,
            ),
            22 => 
            array (
                'id' => 523,
                'pid' => 40,
                'name' => '怀安县',
                'type' => 3,
                'code' => 130728,
            ),
            23 => 
            array (
                'id' => 524,
                'pid' => 40,
                'name' => '怀来县',
                'type' => 3,
                'code' => 130730,
            ),
            24 => 
            array (
                'id' => 525,
                'pid' => 40,
                'name' => '涿鹿县',
                'type' => 3,
                'code' => 130731,
            ),
            25 => 
            array (
                'id' => 526,
                'pid' => 40,
                'name' => '赤城县',
                'type' => 3,
                'code' => 130732,
            ),
            26 => 
            array (
                'id' => 527,
                'pid' => 41,
                'name' => '双桥区',
                'type' => 3,
                'code' => 130802,
            ),
            27 => 
            array (
                'id' => 528,
                'pid' => 41,
                'name' => '双滦区',
                'type' => 3,
                'code' => 130803,
            ),
            28 => 
            array (
                'id' => 529,
                'pid' => 41,
                'name' => '鹰手营子矿区',
                'type' => 3,
                'code' => 130804,
            ),
            29 => 
            array (
                'id' => 530,
                'pid' => 41,
                'name' => '承德县',
                'type' => 3,
                'code' => 130821,
            ),
            30 => 
            array (
                'id' => 531,
                'pid' => 41,
                'name' => '兴隆县',
                'type' => 3,
                'code' => 130822,
            ),
            31 => 
            array (
                'id' => 532,
                'pid' => 41,
                'name' => '平泉县',
                'type' => 3,
                'code' => 130823,
            ),
            32 => 
            array (
                'id' => 533,
                'pid' => 41,
                'name' => '滦平县',
                'type' => 3,
                'code' => 130824,
            ),
            33 => 
            array (
                'id' => 534,
                'pid' => 41,
                'name' => '隆化县',
                'type' => 3,
                'code' => 130825,
            ),
            34 => 
            array (
                'id' => 535,
                'pid' => 41,
                'name' => '丰宁满族自治县',
                'type' => 3,
                'code' => 130826,
            ),
            35 => 
            array (
                'id' => 536,
                'pid' => 41,
                'name' => '宽城满族自治县',
                'type' => 3,
                'code' => 130827,
            ),
            36 => 
            array (
                'id' => 537,
                'pid' => 41,
                'name' => '围场满族蒙古族自治县',
                'type' => 3,
                'code' => 130828,
            ),
            37 => 
            array (
                'id' => 538,
                'pid' => 42,
                'name' => '新华区',
                'type' => 3,
                'code' => 130902,
            ),
            38 => 
            array (
                'id' => 539,
                'pid' => 42,
                'name' => '运河区',
                'type' => 3,
                'code' => 130903,
            ),
            39 => 
            array (
                'id' => 540,
                'pid' => 42,
                'name' => '沧县',
                'type' => 3,
                'code' => 130921,
            ),
            40 => 
            array (
                'id' => 541,
                'pid' => 42,
                'name' => '青县',
                'type' => 3,
                'code' => 130922,
            ),
            41 => 
            array (
                'id' => 542,
                'pid' => 42,
                'name' => '东光县',
                'type' => 3,
                'code' => 130923,
            ),
            42 => 
            array (
                'id' => 543,
                'pid' => 42,
                'name' => '海兴县',
                'type' => 3,
                'code' => 130924,
            ),
            43 => 
            array (
                'id' => 544,
                'pid' => 42,
                'name' => '盐山县',
                'type' => 3,
                'code' => 130925,
            ),
            44 => 
            array (
                'id' => 545,
                'pid' => 42,
                'name' => '肃宁县',
                'type' => 3,
                'code' => 130926,
            ),
            45 => 
            array (
                'id' => 546,
                'pid' => 42,
                'name' => '南皮县',
                'type' => 3,
                'code' => 130927,
            ),
            46 => 
            array (
                'id' => 547,
                'pid' => 42,
                'name' => '吴桥县',
                'type' => 3,
                'code' => 130928,
            ),
            47 => 
            array (
                'id' => 548,
                'pid' => 42,
                'name' => '献县',
                'type' => 3,
                'code' => 130929,
            ),
            48 => 
            array (
                'id' => 549,
                'pid' => 42,
                'name' => '孟村回族自治县',
                'type' => 3,
                'code' => 130930,
            ),
            49 => 
            array (
                'id' => 550,
                'pid' => 42,
                'name' => '泊头市',
                'type' => 3,
                'code' => 130981,
            ),
            50 => 
            array (
                'id' => 551,
                'pid' => 42,
                'name' => '任丘市',
                'type' => 3,
                'code' => 130982,
            ),
            51 => 
            array (
                'id' => 552,
                'pid' => 42,
                'name' => '黄骅市',
                'type' => 3,
                'code' => 130983,
            ),
            52 => 
            array (
                'id' => 553,
                'pid' => 42,
                'name' => '河间市',
                'type' => 3,
                'code' => 130984,
            ),
            53 => 
            array (
                'id' => 554,
                'pid' => 43,
                'name' => '安次区',
                'type' => 3,
                'code' => 131002,
            ),
            54 => 
            array (
                'id' => 555,
                'pid' => 43,
                'name' => '广阳区',
                'type' => 3,
                'code' => 131003,
            ),
            55 => 
            array (
                'id' => 556,
                'pid' => 43,
                'name' => '固安县',
                'type' => 3,
                'code' => 131022,
            ),
            56 => 
            array (
                'id' => 557,
                'pid' => 43,
                'name' => '永清县',
                'type' => 3,
                'code' => 131023,
            ),
            57 => 
            array (
                'id' => 558,
                'pid' => 43,
                'name' => '香河县',
                'type' => 3,
                'code' => 131024,
            ),
            58 => 
            array (
                'id' => 559,
                'pid' => 43,
                'name' => '大城县',
                'type' => 3,
                'code' => 131025,
            ),
            59 => 
            array (
                'id' => 560,
                'pid' => 43,
                'name' => '文安县',
                'type' => 3,
                'code' => 131026,
            ),
            60 => 
            array (
                'id' => 561,
                'pid' => 43,
                'name' => '大厂回族自治县',
                'type' => 3,
                'code' => 131028,
            ),
            61 => 
            array (
                'id' => 562,
                'pid' => 43,
                'name' => '霸州市',
                'type' => 3,
                'code' => 131081,
            ),
            62 => 
            array (
                'id' => 563,
                'pid' => 43,
                'name' => '三河市',
                'type' => 3,
                'code' => 131082,
            ),
            63 => 
            array (
                'id' => 564,
                'pid' => 44,
                'name' => '桃城区',
                'type' => 3,
                'code' => 131102,
            ),
            64 => 
            array (
                'id' => 565,
                'pid' => 44,
                'name' => '冀州区',
                'type' => 3,
                'code' => 131103,
            ),
            65 => 
            array (
                'id' => 566,
                'pid' => 44,
                'name' => '枣强县',
                'type' => 3,
                'code' => 131121,
            ),
            66 => 
            array (
                'id' => 567,
                'pid' => 44,
                'name' => '武邑县',
                'type' => 3,
                'code' => 131122,
            ),
            67 => 
            array (
                'id' => 568,
                'pid' => 44,
                'name' => '武强县',
                'type' => 3,
                'code' => 131123,
            ),
            68 => 
            array (
                'id' => 569,
                'pid' => 44,
                'name' => '饶阳县',
                'type' => 3,
                'code' => 131124,
            ),
            69 => 
            array (
                'id' => 570,
                'pid' => 44,
                'name' => '安平县',
                'type' => 3,
                'code' => 131125,
            ),
            70 => 
            array (
                'id' => 571,
                'pid' => 44,
                'name' => '故城县',
                'type' => 3,
                'code' => 131126,
            ),
            71 => 
            array (
                'id' => 572,
                'pid' => 44,
                'name' => '景县',
                'type' => 3,
                'code' => 131127,
            ),
            72 => 
            array (
                'id' => 573,
                'pid' => 44,
                'name' => '阜城县',
                'type' => 3,
                'code' => 131128,
            ),
            73 => 
            array (
                'id' => 574,
                'pid' => 44,
                'name' => '深州市',
                'type' => 3,
                'code' => 131182,
            ),
            74 => 
            array (
                'id' => 575,
                'pid' => 45,
                'name' => '定州市',
                'type' => 3,
                'code' => 139001,
            ),
            75 => 
            array (
                'id' => 576,
                'pid' => 45,
                'name' => '辛集市',
                'type' => 3,
                'code' => 139002,
            ),
            76 => 
            array (
                'id' => 577,
                'pid' => 46,
                'name' => '小店区',
                'type' => 3,
                'code' => 140105,
            ),
            77 => 
            array (
                'id' => 578,
                'pid' => 46,
                'name' => '迎泽区',
                'type' => 3,
                'code' => 140106,
            ),
            78 => 
            array (
                'id' => 579,
                'pid' => 46,
                'name' => '杏花岭区',
                'type' => 3,
                'code' => 140107,
            ),
            79 => 
            array (
                'id' => 580,
                'pid' => 46,
                'name' => '尖草坪区',
                'type' => 3,
                'code' => 140108,
            ),
            80 => 
            array (
                'id' => 581,
                'pid' => 46,
                'name' => '万柏林区',
                'type' => 3,
                'code' => 140109,
            ),
            81 => 
            array (
                'id' => 582,
                'pid' => 46,
                'name' => '晋源区',
                'type' => 3,
                'code' => 140110,
            ),
            82 => 
            array (
                'id' => 583,
                'pid' => 46,
                'name' => '清徐县',
                'type' => 3,
                'code' => 140121,
            ),
            83 => 
            array (
                'id' => 584,
                'pid' => 46,
                'name' => '阳曲县',
                'type' => 3,
                'code' => 140122,
            ),
            84 => 
            array (
                'id' => 585,
                'pid' => 46,
                'name' => '娄烦县',
                'type' => 3,
                'code' => 140123,
            ),
            85 => 
            array (
                'id' => 586,
                'pid' => 46,
                'name' => '古交市',
                'type' => 3,
                'code' => 140181,
            ),
            86 => 
            array (
                'id' => 587,
                'pid' => 47,
                'name' => '城区',
                'type' => 3,
                'code' => 140202,
            ),
            87 => 
            array (
                'id' => 588,
                'pid' => 47,
                'name' => '矿区',
                'type' => 3,
                'code' => 140203,
            ),
            88 => 
            array (
                'id' => 589,
                'pid' => 47,
                'name' => '南郊区',
                'type' => 3,
                'code' => 140211,
            ),
            89 => 
            array (
                'id' => 590,
                'pid' => 47,
                'name' => '新荣区',
                'type' => 3,
                'code' => 140212,
            ),
            90 => 
            array (
                'id' => 591,
                'pid' => 47,
                'name' => '阳高县',
                'type' => 3,
                'code' => 140221,
            ),
            91 => 
            array (
                'id' => 592,
                'pid' => 47,
                'name' => '天镇县',
                'type' => 3,
                'code' => 140222,
            ),
            92 => 
            array (
                'id' => 593,
                'pid' => 47,
                'name' => '广灵县',
                'type' => 3,
                'code' => 140223,
            ),
            93 => 
            array (
                'id' => 594,
                'pid' => 47,
                'name' => '灵丘县',
                'type' => 3,
                'code' => 140224,
            ),
            94 => 
            array (
                'id' => 595,
                'pid' => 47,
                'name' => '浑源县',
                'type' => 3,
                'code' => 140225,
            ),
            95 => 
            array (
                'id' => 596,
                'pid' => 47,
                'name' => '左云县',
                'type' => 3,
                'code' => 140226,
            ),
            96 => 
            array (
                'id' => 597,
                'pid' => 47,
                'name' => '大同县',
                'type' => 3,
                'code' => 140227,
            ),
            97 => 
            array (
                'id' => 598,
                'pid' => 48,
                'name' => '城区',
                'type' => 3,
                'code' => 140302,
            ),
            98 => 
            array (
                'id' => 599,
                'pid' => 48,
                'name' => '矿区',
                'type' => 3,
                'code' => 140303,
            ),
            99 => 
            array (
                'id' => 600,
                'pid' => 48,
                'name' => '郊区',
                'type' => 3,
                'code' => 140311,
            ),
            100 => 
            array (
                'id' => 601,
                'pid' => 48,
                'name' => '平定县',
                'type' => 3,
                'code' => 140321,
            ),
            101 => 
            array (
                'id' => 602,
                'pid' => 48,
                'name' => '盂县',
                'type' => 3,
                'code' => 140322,
            ),
            102 => 
            array (
                'id' => 603,
                'pid' => 49,
                'name' => '城区',
                'type' => 3,
                'code' => 140402,
            ),
            103 => 
            array (
                'id' => 604,
                'pid' => 49,
                'name' => '郊区',
                'type' => 3,
                'code' => 140411,
            ),
            104 => 
            array (
                'id' => 605,
                'pid' => 49,
                'name' => '长治县',
                'type' => 3,
                'code' => 140421,
            ),
            105 => 
            array (
                'id' => 606,
                'pid' => 49,
                'name' => '襄垣县',
                'type' => 3,
                'code' => 140423,
            ),
            106 => 
            array (
                'id' => 607,
                'pid' => 49,
                'name' => '屯留县',
                'type' => 3,
                'code' => 140424,
            ),
            107 => 
            array (
                'id' => 608,
                'pid' => 49,
                'name' => '平顺县',
                'type' => 3,
                'code' => 140425,
            ),
            108 => 
            array (
                'id' => 609,
                'pid' => 49,
                'name' => '黎城县',
                'type' => 3,
                'code' => 140426,
            ),
            109 => 
            array (
                'id' => 610,
                'pid' => 49,
                'name' => '壶关县',
                'type' => 3,
                'code' => 140427,
            ),
            110 => 
            array (
                'id' => 611,
                'pid' => 49,
                'name' => '长子县',
                'type' => 3,
                'code' => 140428,
            ),
            111 => 
            array (
                'id' => 612,
                'pid' => 49,
                'name' => '武乡县',
                'type' => 3,
                'code' => 140429,
            ),
            112 => 
            array (
                'id' => 613,
                'pid' => 49,
                'name' => '沁县',
                'type' => 3,
                'code' => 140430,
            ),
            113 => 
            array (
                'id' => 614,
                'pid' => 49,
                'name' => '沁源县',
                'type' => 3,
                'code' => 140431,
            ),
            114 => 
            array (
                'id' => 615,
                'pid' => 49,
                'name' => '潞城市',
                'type' => 3,
                'code' => 140481,
            ),
            115 => 
            array (
                'id' => 616,
                'pid' => 50,
                'name' => '城区',
                'type' => 3,
                'code' => 140502,
            ),
            116 => 
            array (
                'id' => 617,
                'pid' => 50,
                'name' => '沁水县',
                'type' => 3,
                'code' => 140521,
            ),
            117 => 
            array (
                'id' => 618,
                'pid' => 50,
                'name' => '阳城县',
                'type' => 3,
                'code' => 140522,
            ),
            118 => 
            array (
                'id' => 619,
                'pid' => 50,
                'name' => '陵川县',
                'type' => 3,
                'code' => 140524,
            ),
            119 => 
            array (
                'id' => 620,
                'pid' => 50,
                'name' => '泽州县',
                'type' => 3,
                'code' => 140525,
            ),
            120 => 
            array (
                'id' => 621,
                'pid' => 50,
                'name' => '高平市',
                'type' => 3,
                'code' => 140581,
            ),
            121 => 
            array (
                'id' => 622,
                'pid' => 51,
                'name' => '朔城区',
                'type' => 3,
                'code' => 140602,
            ),
            122 => 
            array (
                'id' => 623,
                'pid' => 51,
                'name' => '平鲁区',
                'type' => 3,
                'code' => 140603,
            ),
            123 => 
            array (
                'id' => 624,
                'pid' => 51,
                'name' => '山阴县',
                'type' => 3,
                'code' => 140621,
            ),
            124 => 
            array (
                'id' => 625,
                'pid' => 51,
                'name' => '应县',
                'type' => 3,
                'code' => 140622,
            ),
            125 => 
            array (
                'id' => 626,
                'pid' => 51,
                'name' => '右玉县',
                'type' => 3,
                'code' => 140623,
            ),
            126 => 
            array (
                'id' => 627,
                'pid' => 51,
                'name' => '怀仁县',
                'type' => 3,
                'code' => 140624,
            ),
            127 => 
            array (
                'id' => 628,
                'pid' => 52,
                'name' => '榆次区',
                'type' => 3,
                'code' => 140702,
            ),
            128 => 
            array (
                'id' => 629,
                'pid' => 52,
                'name' => '榆社县',
                'type' => 3,
                'code' => 140721,
            ),
            129 => 
            array (
                'id' => 630,
                'pid' => 52,
                'name' => '左权县',
                'type' => 3,
                'code' => 140722,
            ),
            130 => 
            array (
                'id' => 631,
                'pid' => 52,
                'name' => '和顺县',
                'type' => 3,
                'code' => 140723,
            ),
            131 => 
            array (
                'id' => 632,
                'pid' => 52,
                'name' => '昔阳县',
                'type' => 3,
                'code' => 140724,
            ),
            132 => 
            array (
                'id' => 633,
                'pid' => 52,
                'name' => '寿阳县',
                'type' => 3,
                'code' => 140725,
            ),
            133 => 
            array (
                'id' => 634,
                'pid' => 52,
                'name' => '太谷县',
                'type' => 3,
                'code' => 140726,
            ),
            134 => 
            array (
                'id' => 635,
                'pid' => 52,
                'name' => '祁县',
                'type' => 3,
                'code' => 140727,
            ),
            135 => 
            array (
                'id' => 636,
                'pid' => 52,
                'name' => '平遥县',
                'type' => 3,
                'code' => 140728,
            ),
            136 => 
            array (
                'id' => 637,
                'pid' => 52,
                'name' => '灵石县',
                'type' => 3,
                'code' => 140729,
            ),
            137 => 
            array (
                'id' => 638,
                'pid' => 52,
                'name' => '介休市',
                'type' => 3,
                'code' => 140781,
            ),
            138 => 
            array (
                'id' => 639,
                'pid' => 53,
                'name' => '盐湖区',
                'type' => 3,
                'code' => 140802,
            ),
            139 => 
            array (
                'id' => 640,
                'pid' => 53,
                'name' => '临猗县',
                'type' => 3,
                'code' => 140821,
            ),
            140 => 
            array (
                'id' => 641,
                'pid' => 53,
                'name' => '万荣县',
                'type' => 3,
                'code' => 140822,
            ),
            141 => 
            array (
                'id' => 642,
                'pid' => 53,
                'name' => '闻喜县',
                'type' => 3,
                'code' => 140823,
            ),
            142 => 
            array (
                'id' => 643,
                'pid' => 53,
                'name' => '稷山县',
                'type' => 3,
                'code' => 140824,
            ),
            143 => 
            array (
                'id' => 644,
                'pid' => 53,
                'name' => '新绛县',
                'type' => 3,
                'code' => 140825,
            ),
            144 => 
            array (
                'id' => 645,
                'pid' => 53,
                'name' => '绛县',
                'type' => 3,
                'code' => 140826,
            ),
            145 => 
            array (
                'id' => 646,
                'pid' => 53,
                'name' => '垣曲县',
                'type' => 3,
                'code' => 140827,
            ),
            146 => 
            array (
                'id' => 647,
                'pid' => 53,
                'name' => '夏县',
                'type' => 3,
                'code' => 140828,
            ),
            147 => 
            array (
                'id' => 648,
                'pid' => 53,
                'name' => '平陆县',
                'type' => 3,
                'code' => 140829,
            ),
            148 => 
            array (
                'id' => 649,
                'pid' => 53,
                'name' => '芮城县',
                'type' => 3,
                'code' => 140830,
            ),
            149 => 
            array (
                'id' => 650,
                'pid' => 53,
                'name' => '永济市',
                'type' => 3,
                'code' => 140881,
            ),
            150 => 
            array (
                'id' => 651,
                'pid' => 53,
                'name' => '河津市',
                'type' => 3,
                'code' => 140882,
            ),
            151 => 
            array (
                'id' => 652,
                'pid' => 54,
                'name' => '忻府区',
                'type' => 3,
                'code' => 140902,
            ),
            152 => 
            array (
                'id' => 653,
                'pid' => 54,
                'name' => '定襄县',
                'type' => 3,
                'code' => 140921,
            ),
            153 => 
            array (
                'id' => 654,
                'pid' => 54,
                'name' => '五台县',
                'type' => 3,
                'code' => 140922,
            ),
            154 => 
            array (
                'id' => 655,
                'pid' => 54,
                'name' => '代县',
                'type' => 3,
                'code' => 140923,
            ),
            155 => 
            array (
                'id' => 656,
                'pid' => 54,
                'name' => '繁峙县',
                'type' => 3,
                'code' => 140924,
            ),
            156 => 
            array (
                'id' => 657,
                'pid' => 54,
                'name' => '宁武县',
                'type' => 3,
                'code' => 140925,
            ),
            157 => 
            array (
                'id' => 658,
                'pid' => 54,
                'name' => '静乐县',
                'type' => 3,
                'code' => 140926,
            ),
            158 => 
            array (
                'id' => 659,
                'pid' => 54,
                'name' => '神池县',
                'type' => 3,
                'code' => 140927,
            ),
            159 => 
            array (
                'id' => 660,
                'pid' => 54,
                'name' => '五寨县',
                'type' => 3,
                'code' => 140928,
            ),
            160 => 
            array (
                'id' => 661,
                'pid' => 54,
                'name' => '岢岚县',
                'type' => 3,
                'code' => 140929,
            ),
            161 => 
            array (
                'id' => 662,
                'pid' => 54,
                'name' => '河曲县',
                'type' => 3,
                'code' => 140930,
            ),
            162 => 
            array (
                'id' => 663,
                'pid' => 54,
                'name' => '保德县',
                'type' => 3,
                'code' => 140931,
            ),
            163 => 
            array (
                'id' => 664,
                'pid' => 54,
                'name' => '偏关县',
                'type' => 3,
                'code' => 140932,
            ),
            164 => 
            array (
                'id' => 665,
                'pid' => 54,
                'name' => '原平市',
                'type' => 3,
                'code' => 140981,
            ),
            165 => 
            array (
                'id' => 666,
                'pid' => 55,
                'name' => '尧都区',
                'type' => 3,
                'code' => 141002,
            ),
            166 => 
            array (
                'id' => 667,
                'pid' => 55,
                'name' => '曲沃县',
                'type' => 3,
                'code' => 141021,
            ),
            167 => 
            array (
                'id' => 668,
                'pid' => 55,
                'name' => '翼城县',
                'type' => 3,
                'code' => 141022,
            ),
            168 => 
            array (
                'id' => 669,
                'pid' => 55,
                'name' => '襄汾县',
                'type' => 3,
                'code' => 141023,
            ),
            169 => 
            array (
                'id' => 670,
                'pid' => 55,
                'name' => '洪洞县',
                'type' => 3,
                'code' => 141024,
            ),
            170 => 
            array (
                'id' => 671,
                'pid' => 55,
                'name' => '古县',
                'type' => 3,
                'code' => 141025,
            ),
            171 => 
            array (
                'id' => 672,
                'pid' => 55,
                'name' => '安泽县',
                'type' => 3,
                'code' => 141026,
            ),
            172 => 
            array (
                'id' => 673,
                'pid' => 55,
                'name' => '浮山县',
                'type' => 3,
                'code' => 141027,
            ),
            173 => 
            array (
                'id' => 674,
                'pid' => 55,
                'name' => '吉县',
                'type' => 3,
                'code' => 141028,
            ),
            174 => 
            array (
                'id' => 675,
                'pid' => 55,
                'name' => '乡宁县',
                'type' => 3,
                'code' => 141029,
            ),
            175 => 
            array (
                'id' => 676,
                'pid' => 55,
                'name' => '大宁县',
                'type' => 3,
                'code' => 141030,
            ),
            176 => 
            array (
                'id' => 677,
                'pid' => 55,
                'name' => '隰县',
                'type' => 3,
                'code' => 141031,
            ),
            177 => 
            array (
                'id' => 678,
                'pid' => 55,
                'name' => '永和县',
                'type' => 3,
                'code' => 141032,
            ),
            178 => 
            array (
                'id' => 679,
                'pid' => 55,
                'name' => '蒲县',
                'type' => 3,
                'code' => 141033,
            ),
            179 => 
            array (
                'id' => 680,
                'pid' => 55,
                'name' => '汾西县',
                'type' => 3,
                'code' => 141034,
            ),
            180 => 
            array (
                'id' => 681,
                'pid' => 55,
                'name' => '侯马市',
                'type' => 3,
                'code' => 141081,
            ),
            181 => 
            array (
                'id' => 682,
                'pid' => 55,
                'name' => '霍州市',
                'type' => 3,
                'code' => 141082,
            ),
            182 => 
            array (
                'id' => 683,
                'pid' => 56,
                'name' => '离石区',
                'type' => 3,
                'code' => 141102,
            ),
            183 => 
            array (
                'id' => 684,
                'pid' => 56,
                'name' => '文水县',
                'type' => 3,
                'code' => 141121,
            ),
            184 => 
            array (
                'id' => 685,
                'pid' => 56,
                'name' => '交城县',
                'type' => 3,
                'code' => 141122,
            ),
            185 => 
            array (
                'id' => 686,
                'pid' => 56,
                'name' => '兴县',
                'type' => 3,
                'code' => 141123,
            ),
            186 => 
            array (
                'id' => 687,
                'pid' => 56,
                'name' => '临县',
                'type' => 3,
                'code' => 141124,
            ),
            187 => 
            array (
                'id' => 688,
                'pid' => 56,
                'name' => '柳林县',
                'type' => 3,
                'code' => 141125,
            ),
            188 => 
            array (
                'id' => 689,
                'pid' => 56,
                'name' => '石楼县',
                'type' => 3,
                'code' => 141126,
            ),
            189 => 
            array (
                'id' => 690,
                'pid' => 56,
                'name' => '岚县',
                'type' => 3,
                'code' => 141127,
            ),
            190 => 
            array (
                'id' => 691,
                'pid' => 56,
                'name' => '方山县',
                'type' => 3,
                'code' => 141128,
            ),
            191 => 
            array (
                'id' => 692,
                'pid' => 56,
                'name' => '中阳县',
                'type' => 3,
                'code' => 141129,
            ),
            192 => 
            array (
                'id' => 693,
                'pid' => 56,
                'name' => '交口县',
                'type' => 3,
                'code' => 141130,
            ),
            193 => 
            array (
                'id' => 694,
                'pid' => 56,
                'name' => '孝义市',
                'type' => 3,
                'code' => 141181,
            ),
            194 => 
            array (
                'id' => 695,
                'pid' => 56,
                'name' => '汾阳市',
                'type' => 3,
                'code' => 141182,
            ),
            195 => 
            array (
                'id' => 696,
                'pid' => 57,
                'name' => '新城区',
                'type' => 3,
                'code' => 150102,
            ),
            196 => 
            array (
                'id' => 697,
                'pid' => 57,
                'name' => '回民区',
                'type' => 3,
                'code' => 150103,
            ),
            197 => 
            array (
                'id' => 698,
                'pid' => 57,
                'name' => '玉泉区',
                'type' => 3,
                'code' => 150104,
            ),
            198 => 
            array (
                'id' => 699,
                'pid' => 57,
                'name' => '赛罕区',
                'type' => 3,
                'code' => 150105,
            ),
            199 => 
            array (
                'id' => 700,
                'pid' => 57,
                'name' => '土默特左旗',
                'type' => 3,
                'code' => 150121,
            ),
            200 => 
            array (
                'id' => 701,
                'pid' => 57,
                'name' => '托克托县',
                'type' => 3,
                'code' => 150122,
            ),
            201 => 
            array (
                'id' => 702,
                'pid' => 57,
                'name' => '和林格尔县',
                'type' => 3,
                'code' => 150123,
            ),
            202 => 
            array (
                'id' => 703,
                'pid' => 57,
                'name' => '清水河县',
                'type' => 3,
                'code' => 150124,
            ),
            203 => 
            array (
                'id' => 704,
                'pid' => 57,
                'name' => '武川县',
                'type' => 3,
                'code' => 150125,
            ),
            204 => 
            array (
                'id' => 705,
                'pid' => 58,
                'name' => '东河区',
                'type' => 3,
                'code' => 150202,
            ),
            205 => 
            array (
                'id' => 706,
                'pid' => 58,
                'name' => '昆都仑区',
                'type' => 3,
                'code' => 150203,
            ),
            206 => 
            array (
                'id' => 707,
                'pid' => 58,
                'name' => '青山区',
                'type' => 3,
                'code' => 150204,
            ),
            207 => 
            array (
                'id' => 708,
                'pid' => 58,
                'name' => '石拐区',
                'type' => 3,
                'code' => 150205,
            ),
            208 => 
            array (
                'id' => 709,
                'pid' => 58,
                'name' => '白云鄂博矿区',
                'type' => 3,
                'code' => 150206,
            ),
            209 => 
            array (
                'id' => 710,
                'pid' => 58,
                'name' => '九原区',
                'type' => 3,
                'code' => 150207,
            ),
            210 => 
            array (
                'id' => 711,
                'pid' => 58,
                'name' => '土默特右旗',
                'type' => 3,
                'code' => 150221,
            ),
            211 => 
            array (
                'id' => 712,
                'pid' => 58,
                'name' => '固阳县',
                'type' => 3,
                'code' => 150222,
            ),
            212 => 
            array (
                'id' => 713,
                'pid' => 58,
                'name' => '达尔罕茂明安联合旗',
                'type' => 3,
                'code' => 150223,
            ),
            213 => 
            array (
                'id' => 714,
                'pid' => 59,
                'name' => '海勃湾区',
                'type' => 3,
                'code' => 150302,
            ),
            214 => 
            array (
                'id' => 715,
                'pid' => 59,
                'name' => '海南区',
                'type' => 3,
                'code' => 150303,
            ),
            215 => 
            array (
                'id' => 716,
                'pid' => 59,
                'name' => '乌达区',
                'type' => 3,
                'code' => 150304,
            ),
            216 => 
            array (
                'id' => 717,
                'pid' => 60,
                'name' => '红山区',
                'type' => 3,
                'code' => 150402,
            ),
            217 => 
            array (
                'id' => 718,
                'pid' => 60,
                'name' => '元宝山区',
                'type' => 3,
                'code' => 150403,
            ),
            218 => 
            array (
                'id' => 719,
                'pid' => 60,
                'name' => '松山区',
                'type' => 3,
                'code' => 150404,
            ),
            219 => 
            array (
                'id' => 720,
                'pid' => 60,
                'name' => '阿鲁科尔沁旗',
                'type' => 3,
                'code' => 150421,
            ),
            220 => 
            array (
                'id' => 721,
                'pid' => 60,
                'name' => '巴林左旗',
                'type' => 3,
                'code' => 150422,
            ),
            221 => 
            array (
                'id' => 722,
                'pid' => 60,
                'name' => '巴林右旗',
                'type' => 3,
                'code' => 150423,
            ),
            222 => 
            array (
                'id' => 723,
                'pid' => 60,
                'name' => '林西县',
                'type' => 3,
                'code' => 150424,
            ),
            223 => 
            array (
                'id' => 724,
                'pid' => 60,
                'name' => '克什克腾旗',
                'type' => 3,
                'code' => 150425,
            ),
            224 => 
            array (
                'id' => 725,
                'pid' => 60,
                'name' => '翁牛特旗',
                'type' => 3,
                'code' => 150426,
            ),
            225 => 
            array (
                'id' => 726,
                'pid' => 60,
                'name' => '喀喇沁旗',
                'type' => 3,
                'code' => 150428,
            ),
            226 => 
            array (
                'id' => 727,
                'pid' => 60,
                'name' => '宁城县',
                'type' => 3,
                'code' => 150429,
            ),
            227 => 
            array (
                'id' => 728,
                'pid' => 60,
                'name' => '敖汉旗',
                'type' => 3,
                'code' => 150430,
            ),
            228 => 
            array (
                'id' => 729,
                'pid' => 61,
                'name' => '科尔沁区',
                'type' => 3,
                'code' => 150502,
            ),
            229 => 
            array (
                'id' => 730,
                'pid' => 61,
                'name' => '科尔沁左翼中旗',
                'type' => 3,
                'code' => 150521,
            ),
            230 => 
            array (
                'id' => 731,
                'pid' => 61,
                'name' => '科尔沁左翼后旗',
                'type' => 3,
                'code' => 150522,
            ),
            231 => 
            array (
                'id' => 732,
                'pid' => 61,
                'name' => '开鲁县',
                'type' => 3,
                'code' => 150523,
            ),
            232 => 
            array (
                'id' => 733,
                'pid' => 61,
                'name' => '库伦旗',
                'type' => 3,
                'code' => 150524,
            ),
            233 => 
            array (
                'id' => 734,
                'pid' => 61,
                'name' => '奈曼旗',
                'type' => 3,
                'code' => 150525,
            ),
            234 => 
            array (
                'id' => 735,
                'pid' => 61,
                'name' => '扎鲁特旗',
                'type' => 3,
                'code' => 150526,
            ),
            235 => 
            array (
                'id' => 736,
                'pid' => 61,
                'name' => '霍林郭勒市',
                'type' => 3,
                'code' => 150581,
            ),
            236 => 
            array (
                'id' => 737,
                'pid' => 62,
                'name' => '东胜区',
                'type' => 3,
                'code' => 150602,
            ),
            237 => 
            array (
                'id' => 738,
                'pid' => 62,
                'name' => '康巴什区',
                'type' => 3,
                'code' => 150603,
            ),
            238 => 
            array (
                'id' => 739,
                'pid' => 62,
                'name' => '达拉特旗',
                'type' => 3,
                'code' => 150621,
            ),
            239 => 
            array (
                'id' => 740,
                'pid' => 62,
                'name' => '准格尔旗',
                'type' => 3,
                'code' => 150622,
            ),
            240 => 
            array (
                'id' => 741,
                'pid' => 62,
                'name' => '鄂托克前旗',
                'type' => 3,
                'code' => 150623,
            ),
            241 => 
            array (
                'id' => 742,
                'pid' => 62,
                'name' => '鄂托克旗',
                'type' => 3,
                'code' => 150624,
            ),
            242 => 
            array (
                'id' => 743,
                'pid' => 62,
                'name' => '杭锦旗',
                'type' => 3,
                'code' => 150625,
            ),
            243 => 
            array (
                'id' => 744,
                'pid' => 62,
                'name' => '乌审旗',
                'type' => 3,
                'code' => 150626,
            ),
            244 => 
            array (
                'id' => 745,
                'pid' => 62,
                'name' => '伊金霍洛旗',
                'type' => 3,
                'code' => 150627,
            ),
            245 => 
            array (
                'id' => 746,
                'pid' => 63,
                'name' => '海拉尔区',
                'type' => 3,
                'code' => 150702,
            ),
            246 => 
            array (
                'id' => 747,
                'pid' => 63,
                'name' => '扎赉诺尔区',
                'type' => 3,
                'code' => 150703,
            ),
            247 => 
            array (
                'id' => 748,
                'pid' => 63,
                'name' => '阿荣旗',
                'type' => 3,
                'code' => 150721,
            ),
            248 => 
            array (
                'id' => 749,
                'pid' => 63,
                'name' => '莫力达瓦达斡尔族自治旗',
                'type' => 3,
                'code' => 150722,
            ),
            249 => 
            array (
                'id' => 750,
                'pid' => 63,
                'name' => '鄂伦春自治旗',
                'type' => 3,
                'code' => 150723,
            ),
            250 => 
            array (
                'id' => 751,
                'pid' => 63,
                'name' => '鄂温克族自治旗',
                'type' => 3,
                'code' => 150724,
            ),
            251 => 
            array (
                'id' => 752,
                'pid' => 63,
                'name' => '陈巴尔虎旗',
                'type' => 3,
                'code' => 150725,
            ),
            252 => 
            array (
                'id' => 753,
                'pid' => 63,
                'name' => '新巴尔虎左旗',
                'type' => 3,
                'code' => 150726,
            ),
            253 => 
            array (
                'id' => 754,
                'pid' => 63,
                'name' => '新巴尔虎右旗',
                'type' => 3,
                'code' => 150727,
            ),
            254 => 
            array (
                'id' => 755,
                'pid' => 63,
                'name' => '满洲里市',
                'type' => 3,
                'code' => 150781,
            ),
            255 => 
            array (
                'id' => 756,
                'pid' => 63,
                'name' => '牙克石市',
                'type' => 3,
                'code' => 150782,
            ),
            256 => 
            array (
                'id' => 757,
                'pid' => 63,
                'name' => '扎兰屯市',
                'type' => 3,
                'code' => 150783,
            ),
            257 => 
            array (
                'id' => 758,
                'pid' => 63,
                'name' => '额尔古纳市',
                'type' => 3,
                'code' => 150784,
            ),
            258 => 
            array (
                'id' => 759,
                'pid' => 63,
                'name' => '根河市',
                'type' => 3,
                'code' => 150785,
            ),
            259 => 
            array (
                'id' => 760,
                'pid' => 64,
                'name' => '临河区',
                'type' => 3,
                'code' => 150802,
            ),
            260 => 
            array (
                'id' => 761,
                'pid' => 64,
                'name' => '五原县',
                'type' => 3,
                'code' => 150821,
            ),
            261 => 
            array (
                'id' => 762,
                'pid' => 64,
                'name' => '磴口县',
                'type' => 3,
                'code' => 150822,
            ),
            262 => 
            array (
                'id' => 763,
                'pid' => 64,
                'name' => '乌拉特前旗',
                'type' => 3,
                'code' => 150823,
            ),
            263 => 
            array (
                'id' => 764,
                'pid' => 64,
                'name' => '乌拉特中旗',
                'type' => 3,
                'code' => 150824,
            ),
            264 => 
            array (
                'id' => 765,
                'pid' => 64,
                'name' => '乌拉特后旗',
                'type' => 3,
                'code' => 150825,
            ),
            265 => 
            array (
                'id' => 766,
                'pid' => 64,
                'name' => '杭锦后旗',
                'type' => 3,
                'code' => 150826,
            ),
            266 => 
            array (
                'id' => 767,
                'pid' => 65,
                'name' => '集宁区',
                'type' => 3,
                'code' => 150902,
            ),
            267 => 
            array (
                'id' => 768,
                'pid' => 65,
                'name' => '卓资县',
                'type' => 3,
                'code' => 150921,
            ),
            268 => 
            array (
                'id' => 769,
                'pid' => 65,
                'name' => '化德县',
                'type' => 3,
                'code' => 150922,
            ),
            269 => 
            array (
                'id' => 770,
                'pid' => 65,
                'name' => '商都县',
                'type' => 3,
                'code' => 150923,
            ),
            270 => 
            array (
                'id' => 771,
                'pid' => 65,
                'name' => '兴和县',
                'type' => 3,
                'code' => 150924,
            ),
            271 => 
            array (
                'id' => 772,
                'pid' => 65,
                'name' => '凉城县',
                'type' => 3,
                'code' => 150925,
            ),
            272 => 
            array (
                'id' => 773,
                'pid' => 65,
                'name' => '察哈尔右翼前旗',
                'type' => 3,
                'code' => 150926,
            ),
            273 => 
            array (
                'id' => 774,
                'pid' => 65,
                'name' => '察哈尔右翼中旗',
                'type' => 3,
                'code' => 150927,
            ),
            274 => 
            array (
                'id' => 775,
                'pid' => 65,
                'name' => '察哈尔右翼后旗',
                'type' => 3,
                'code' => 150928,
            ),
            275 => 
            array (
                'id' => 776,
                'pid' => 65,
                'name' => '四子王旗',
                'type' => 3,
                'code' => 150929,
            ),
            276 => 
            array (
                'id' => 777,
                'pid' => 65,
                'name' => '丰镇市',
                'type' => 3,
                'code' => 150981,
            ),
            277 => 
            array (
                'id' => 778,
                'pid' => 66,
                'name' => '乌兰浩特市',
                'type' => 3,
                'code' => 152201,
            ),
            278 => 
            array (
                'id' => 779,
                'pid' => 66,
                'name' => '阿尔山市',
                'type' => 3,
                'code' => 152202,
            ),
            279 => 
            array (
                'id' => 780,
                'pid' => 66,
                'name' => '科尔沁右翼前旗',
                'type' => 3,
                'code' => 152221,
            ),
            280 => 
            array (
                'id' => 781,
                'pid' => 66,
                'name' => '科尔沁右翼中旗',
                'type' => 3,
                'code' => 152222,
            ),
            281 => 
            array (
                'id' => 782,
                'pid' => 66,
                'name' => '扎赉特旗',
                'type' => 3,
                'code' => 152223,
            ),
            282 => 
            array (
                'id' => 783,
                'pid' => 66,
                'name' => '突泉县',
                'type' => 3,
                'code' => 152224,
            ),
            283 => 
            array (
                'id' => 784,
                'pid' => 67,
                'name' => '二连浩特市',
                'type' => 3,
                'code' => 152501,
            ),
            284 => 
            array (
                'id' => 785,
                'pid' => 67,
                'name' => '锡林浩特市',
                'type' => 3,
                'code' => 152502,
            ),
            285 => 
            array (
                'id' => 786,
                'pid' => 67,
                'name' => '阿巴嘎旗',
                'type' => 3,
                'code' => 152522,
            ),
            286 => 
            array (
                'id' => 787,
                'pid' => 67,
                'name' => '苏尼特左旗',
                'type' => 3,
                'code' => 152523,
            ),
            287 => 
            array (
                'id' => 788,
                'pid' => 67,
                'name' => '苏尼特右旗',
                'type' => 3,
                'code' => 152524,
            ),
            288 => 
            array (
                'id' => 789,
                'pid' => 67,
                'name' => '东乌珠穆沁旗',
                'type' => 3,
                'code' => 152525,
            ),
            289 => 
            array (
                'id' => 790,
                'pid' => 67,
                'name' => '西乌珠穆沁旗',
                'type' => 3,
                'code' => 152526,
            ),
            290 => 
            array (
                'id' => 791,
                'pid' => 67,
                'name' => '太仆寺旗',
                'type' => 3,
                'code' => 152527,
            ),
            291 => 
            array (
                'id' => 792,
                'pid' => 67,
                'name' => '镶黄旗',
                'type' => 3,
                'code' => 152528,
            ),
            292 => 
            array (
                'id' => 793,
                'pid' => 67,
                'name' => '正镶白旗',
                'type' => 3,
                'code' => 152529,
            ),
            293 => 
            array (
                'id' => 794,
                'pid' => 67,
                'name' => '正蓝旗',
                'type' => 3,
                'code' => 152530,
            ),
            294 => 
            array (
                'id' => 795,
                'pid' => 67,
                'name' => '多伦县',
                'type' => 3,
                'code' => 152531,
            ),
            295 => 
            array (
                'id' => 796,
                'pid' => 68,
                'name' => '阿拉善左旗',
                'type' => 3,
                'code' => 152921,
            ),
            296 => 
            array (
                'id' => 797,
                'pid' => 68,
                'name' => '阿拉善右旗',
                'type' => 3,
                'code' => 152922,
            ),
            297 => 
            array (
                'id' => 798,
                'pid' => 68,
                'name' => '额济纳旗',
                'type' => 3,
                'code' => 152923,
            ),
            298 => 
            array (
                'id' => 799,
                'pid' => 69,
                'name' => '和平区',
                'type' => 3,
                'code' => 210102,
            ),
            299 => 
            array (
                'id' => 800,
                'pid' => 69,
                'name' => '沈河区',
                'type' => 3,
                'code' => 210103,
            ),
            300 => 
            array (
                'id' => 801,
                'pid' => 69,
                'name' => '大东区',
                'type' => 3,
                'code' => 210104,
            ),
            301 => 
            array (
                'id' => 802,
                'pid' => 69,
                'name' => '皇姑区',
                'type' => 3,
                'code' => 210105,
            ),
            302 => 
            array (
                'id' => 803,
                'pid' => 69,
                'name' => '铁西区',
                'type' => 3,
                'code' => 210106,
            ),
            303 => 
            array (
                'id' => 804,
                'pid' => 69,
                'name' => '苏家屯区',
                'type' => 3,
                'code' => 210111,
            ),
            304 => 
            array (
                'id' => 805,
                'pid' => 69,
                'name' => '浑南区',
                'type' => 3,
                'code' => 210112,
            ),
            305 => 
            array (
                'id' => 806,
                'pid' => 69,
                'name' => '沈北新区',
                'type' => 3,
                'code' => 210113,
            ),
            306 => 
            array (
                'id' => 807,
                'pid' => 69,
                'name' => '于洪区',
                'type' => 3,
                'code' => 210114,
            ),
            307 => 
            array (
                'id' => 808,
                'pid' => 69,
                'name' => '辽中区',
                'type' => 3,
                'code' => 210115,
            ),
            308 => 
            array (
                'id' => 809,
                'pid' => 69,
                'name' => '康平县',
                'type' => 3,
                'code' => 210123,
            ),
            309 => 
            array (
                'id' => 810,
                'pid' => 69,
                'name' => '法库县',
                'type' => 3,
                'code' => 210124,
            ),
            310 => 
            array (
                'id' => 811,
                'pid' => 69,
                'name' => '新民市',
                'type' => 3,
                'code' => 210181,
            ),
            311 => 
            array (
                'id' => 812,
                'pid' => 70,
                'name' => '中山区',
                'type' => 3,
                'code' => 210202,
            ),
            312 => 
            array (
                'id' => 813,
                'pid' => 70,
                'name' => '西岗区',
                'type' => 3,
                'code' => 210203,
            ),
            313 => 
            array (
                'id' => 814,
                'pid' => 70,
                'name' => '沙河口区',
                'type' => 3,
                'code' => 210204,
            ),
            314 => 
            array (
                'id' => 815,
                'pid' => 70,
                'name' => '甘井子区',
                'type' => 3,
                'code' => 210211,
            ),
            315 => 
            array (
                'id' => 816,
                'pid' => 70,
                'name' => '旅顺口区',
                'type' => 3,
                'code' => 210212,
            ),
            316 => 
            array (
                'id' => 817,
                'pid' => 70,
                'name' => '金州区',
                'type' => 3,
                'code' => 210213,
            ),
            317 => 
            array (
                'id' => 818,
                'pid' => 70,
                'name' => '普兰店区',
                'type' => 3,
                'code' => 210214,
            ),
            318 => 
            array (
                'id' => 819,
                'pid' => 70,
                'name' => '长海县',
                'type' => 3,
                'code' => 210224,
            ),
            319 => 
            array (
                'id' => 820,
                'pid' => 70,
                'name' => '瓦房店市',
                'type' => 3,
                'code' => 210281,
            ),
            320 => 
            array (
                'id' => 821,
                'pid' => 70,
                'name' => '庄河市',
                'type' => 3,
                'code' => 210283,
            ),
            321 => 
            array (
                'id' => 822,
                'pid' => 71,
                'name' => '铁东区',
                'type' => 3,
                'code' => 210302,
            ),
            322 => 
            array (
                'id' => 823,
                'pid' => 71,
                'name' => '铁西区',
                'type' => 3,
                'code' => 210303,
            ),
            323 => 
            array (
                'id' => 824,
                'pid' => 71,
                'name' => '立山区',
                'type' => 3,
                'code' => 210304,
            ),
            324 => 
            array (
                'id' => 825,
                'pid' => 71,
                'name' => '千山区',
                'type' => 3,
                'code' => 210311,
            ),
            325 => 
            array (
                'id' => 826,
                'pid' => 71,
                'name' => '台安县',
                'type' => 3,
                'code' => 210321,
            ),
            326 => 
            array (
                'id' => 827,
                'pid' => 71,
                'name' => '岫岩满族自治县',
                'type' => 3,
                'code' => 210323,
            ),
            327 => 
            array (
                'id' => 828,
                'pid' => 71,
                'name' => '海城市',
                'type' => 3,
                'code' => 210381,
            ),
            328 => 
            array (
                'id' => 829,
                'pid' => 72,
                'name' => '新抚区',
                'type' => 3,
                'code' => 210402,
            ),
            329 => 
            array (
                'id' => 830,
                'pid' => 72,
                'name' => '东洲区',
                'type' => 3,
                'code' => 210403,
            ),
            330 => 
            array (
                'id' => 831,
                'pid' => 72,
                'name' => '望花区',
                'type' => 3,
                'code' => 210404,
            ),
            331 => 
            array (
                'id' => 832,
                'pid' => 72,
                'name' => '顺城区',
                'type' => 3,
                'code' => 210411,
            ),
            332 => 
            array (
                'id' => 833,
                'pid' => 72,
                'name' => '抚顺县',
                'type' => 3,
                'code' => 210421,
            ),
            333 => 
            array (
                'id' => 834,
                'pid' => 72,
                'name' => '新宾满族自治县',
                'type' => 3,
                'code' => 210422,
            ),
            334 => 
            array (
                'id' => 835,
                'pid' => 72,
                'name' => '清原满族自治县',
                'type' => 3,
                'code' => 210423,
            ),
            335 => 
            array (
                'id' => 836,
                'pid' => 73,
                'name' => '平山区',
                'type' => 3,
                'code' => 210502,
            ),
            336 => 
            array (
                'id' => 837,
                'pid' => 73,
                'name' => '溪湖区',
                'type' => 3,
                'code' => 210503,
            ),
            337 => 
            array (
                'id' => 838,
                'pid' => 73,
                'name' => '明山区',
                'type' => 3,
                'code' => 210504,
            ),
            338 => 
            array (
                'id' => 839,
                'pid' => 73,
                'name' => '南芬区',
                'type' => 3,
                'code' => 210505,
            ),
            339 => 
            array (
                'id' => 840,
                'pid' => 73,
                'name' => '本溪满族自治县',
                'type' => 3,
                'code' => 210521,
            ),
            340 => 
            array (
                'id' => 841,
                'pid' => 73,
                'name' => '桓仁满族自治县',
                'type' => 3,
                'code' => 210522,
            ),
            341 => 
            array (
                'id' => 842,
                'pid' => 74,
                'name' => '元宝区',
                'type' => 3,
                'code' => 210602,
            ),
            342 => 
            array (
                'id' => 843,
                'pid' => 74,
                'name' => '振兴区',
                'type' => 3,
                'code' => 210603,
            ),
            343 => 
            array (
                'id' => 844,
                'pid' => 74,
                'name' => '振安区',
                'type' => 3,
                'code' => 210604,
            ),
            344 => 
            array (
                'id' => 845,
                'pid' => 74,
                'name' => '宽甸满族自治县',
                'type' => 3,
                'code' => 210624,
            ),
            345 => 
            array (
                'id' => 846,
                'pid' => 74,
                'name' => '东港市',
                'type' => 3,
                'code' => 210681,
            ),
            346 => 
            array (
                'id' => 847,
                'pid' => 74,
                'name' => '凤城市',
                'type' => 3,
                'code' => 210682,
            ),
            347 => 
            array (
                'id' => 848,
                'pid' => 75,
                'name' => '古塔区',
                'type' => 3,
                'code' => 210702,
            ),
            348 => 
            array (
                'id' => 849,
                'pid' => 75,
                'name' => '凌河区',
                'type' => 3,
                'code' => 210703,
            ),
            349 => 
            array (
                'id' => 850,
                'pid' => 75,
                'name' => '太和区',
                'type' => 3,
                'code' => 210711,
            ),
            350 => 
            array (
                'id' => 851,
                'pid' => 75,
                'name' => '黑山县',
                'type' => 3,
                'code' => 210726,
            ),
            351 => 
            array (
                'id' => 852,
                'pid' => 75,
                'name' => '义县',
                'type' => 3,
                'code' => 210727,
            ),
            352 => 
            array (
                'id' => 853,
                'pid' => 75,
                'name' => '凌海市',
                'type' => 3,
                'code' => 210781,
            ),
            353 => 
            array (
                'id' => 854,
                'pid' => 75,
                'name' => '北镇市',
                'type' => 3,
                'code' => 210782,
            ),
            354 => 
            array (
                'id' => 855,
                'pid' => 76,
                'name' => '站前区',
                'type' => 3,
                'code' => 210802,
            ),
            355 => 
            array (
                'id' => 856,
                'pid' => 76,
                'name' => '西市区',
                'type' => 3,
                'code' => 210803,
            ),
            356 => 
            array (
                'id' => 857,
                'pid' => 76,
                'name' => '鲅鱼圈区',
                'type' => 3,
                'code' => 210804,
            ),
            357 => 
            array (
                'id' => 858,
                'pid' => 76,
                'name' => '老边区',
                'type' => 3,
                'code' => 210811,
            ),
            358 => 
            array (
                'id' => 859,
                'pid' => 76,
                'name' => '盖州市',
                'type' => 3,
                'code' => 210881,
            ),
            359 => 
            array (
                'id' => 860,
                'pid' => 76,
                'name' => '大石桥市',
                'type' => 3,
                'code' => 210882,
            ),
            360 => 
            array (
                'id' => 861,
                'pid' => 77,
                'name' => '海州区',
                'type' => 3,
                'code' => 210902,
            ),
            361 => 
            array (
                'id' => 862,
                'pid' => 77,
                'name' => '新邱区',
                'type' => 3,
                'code' => 210903,
            ),
            362 => 
            array (
                'id' => 863,
                'pid' => 77,
                'name' => '太平区',
                'type' => 3,
                'code' => 210904,
            ),
            363 => 
            array (
                'id' => 864,
                'pid' => 77,
                'name' => '清河门区',
                'type' => 3,
                'code' => 210905,
            ),
            364 => 
            array (
                'id' => 865,
                'pid' => 77,
                'name' => '细河区',
                'type' => 3,
                'code' => 210911,
            ),
            365 => 
            array (
                'id' => 866,
                'pid' => 77,
                'name' => '阜新蒙古族自治县',
                'type' => 3,
                'code' => 210921,
            ),
            366 => 
            array (
                'id' => 867,
                'pid' => 77,
                'name' => '彰武县',
                'type' => 3,
                'code' => 210922,
            ),
            367 => 
            array (
                'id' => 868,
                'pid' => 78,
                'name' => '白塔区',
                'type' => 3,
                'code' => 211002,
            ),
            368 => 
            array (
                'id' => 869,
                'pid' => 78,
                'name' => '文圣区',
                'type' => 3,
                'code' => 211003,
            ),
            369 => 
            array (
                'id' => 870,
                'pid' => 78,
                'name' => '宏伟区',
                'type' => 3,
                'code' => 211004,
            ),
            370 => 
            array (
                'id' => 871,
                'pid' => 78,
                'name' => '弓长岭区',
                'type' => 3,
                'code' => 211005,
            ),
            371 => 
            array (
                'id' => 872,
                'pid' => 78,
                'name' => '太子河区',
                'type' => 3,
                'code' => 211011,
            ),
            372 => 
            array (
                'id' => 873,
                'pid' => 78,
                'name' => '辽阳县',
                'type' => 3,
                'code' => 211021,
            ),
            373 => 
            array (
                'id' => 874,
                'pid' => 78,
                'name' => '灯塔市',
                'type' => 3,
                'code' => 211081,
            ),
            374 => 
            array (
                'id' => 875,
                'pid' => 79,
                'name' => '双台子区',
                'type' => 3,
                'code' => 211102,
            ),
            375 => 
            array (
                'id' => 876,
                'pid' => 79,
                'name' => '兴隆台区',
                'type' => 3,
                'code' => 211103,
            ),
            376 => 
            array (
                'id' => 877,
                'pid' => 79,
                'name' => '大洼区',
                'type' => 3,
                'code' => 211104,
            ),
            377 => 
            array (
                'id' => 878,
                'pid' => 79,
                'name' => '盘山县',
                'type' => 3,
                'code' => 211122,
            ),
            378 => 
            array (
                'id' => 879,
                'pid' => 80,
                'name' => '银州区',
                'type' => 3,
                'code' => 211202,
            ),
            379 => 
            array (
                'id' => 880,
                'pid' => 80,
                'name' => '清河区',
                'type' => 3,
                'code' => 211204,
            ),
            380 => 
            array (
                'id' => 881,
                'pid' => 80,
                'name' => '铁岭县',
                'type' => 3,
                'code' => 211221,
            ),
            381 => 
            array (
                'id' => 882,
                'pid' => 80,
                'name' => '西丰县',
                'type' => 3,
                'code' => 211223,
            ),
            382 => 
            array (
                'id' => 883,
                'pid' => 80,
                'name' => '昌图县',
                'type' => 3,
                'code' => 211224,
            ),
            383 => 
            array (
                'id' => 884,
                'pid' => 80,
                'name' => '调兵山市',
                'type' => 3,
                'code' => 211281,
            ),
            384 => 
            array (
                'id' => 885,
                'pid' => 80,
                'name' => '开原市',
                'type' => 3,
                'code' => 211282,
            ),
            385 => 
            array (
                'id' => 886,
                'pid' => 81,
                'name' => '双塔区',
                'type' => 3,
                'code' => 211302,
            ),
            386 => 
            array (
                'id' => 887,
                'pid' => 81,
                'name' => '龙城区',
                'type' => 3,
                'code' => 211303,
            ),
            387 => 
            array (
                'id' => 888,
                'pid' => 81,
                'name' => '朝阳县',
                'type' => 3,
                'code' => 211321,
            ),
            388 => 
            array (
                'id' => 889,
                'pid' => 81,
                'name' => '建平县',
                'type' => 3,
                'code' => 211322,
            ),
            389 => 
            array (
                'id' => 890,
                'pid' => 81,
                'name' => '喀喇沁左翼蒙古族自治县',
                'type' => 3,
                'code' => 211324,
            ),
            390 => 
            array (
                'id' => 891,
                'pid' => 81,
                'name' => '北票市',
                'type' => 3,
                'code' => 211381,
            ),
            391 => 
            array (
                'id' => 892,
                'pid' => 81,
                'name' => '凌源市',
                'type' => 3,
                'code' => 211382,
            ),
            392 => 
            array (
                'id' => 893,
                'pid' => 82,
                'name' => '连山区',
                'type' => 3,
                'code' => 211402,
            ),
            393 => 
            array (
                'id' => 894,
                'pid' => 82,
                'name' => '龙港区',
                'type' => 3,
                'code' => 211403,
            ),
            394 => 
            array (
                'id' => 895,
                'pid' => 82,
                'name' => '南票区',
                'type' => 3,
                'code' => 211404,
            ),
            395 => 
            array (
                'id' => 896,
                'pid' => 82,
                'name' => '绥中县',
                'type' => 3,
                'code' => 211421,
            ),
            396 => 
            array (
                'id' => 897,
                'pid' => 82,
                'name' => '建昌县',
                'type' => 3,
                'code' => 211422,
            ),
            397 => 
            array (
                'id' => 898,
                'pid' => 82,
                'name' => '兴城市',
                'type' => 3,
                'code' => 211481,
            ),
            398 => 
            array (
                'id' => 899,
                'pid' => 83,
                'name' => '南关区',
                'type' => 3,
                'code' => 220102,
            ),
            399 => 
            array (
                'id' => 900,
                'pid' => 83,
                'name' => '宽城区',
                'type' => 3,
                'code' => 220103,
            ),
            400 => 
            array (
                'id' => 901,
                'pid' => 83,
                'name' => '朝阳区',
                'type' => 3,
                'code' => 220104,
            ),
            401 => 
            array (
                'id' => 902,
                'pid' => 83,
                'name' => '二道区',
                'type' => 3,
                'code' => 220105,
            ),
            402 => 
            array (
                'id' => 903,
                'pid' => 83,
                'name' => '绿园区',
                'type' => 3,
                'code' => 220106,
            ),
            403 => 
            array (
                'id' => 904,
                'pid' => 83,
                'name' => '双阳区',
                'type' => 3,
                'code' => 220112,
            ),
            404 => 
            array (
                'id' => 905,
                'pid' => 83,
                'name' => '九台区',
                'type' => 3,
                'code' => 220113,
            ),
            405 => 
            array (
                'id' => 906,
                'pid' => 83,
                'name' => '农安县',
                'type' => 3,
                'code' => 220122,
            ),
            406 => 
            array (
                'id' => 907,
                'pid' => 83,
                'name' => '榆树市',
                'type' => 3,
                'code' => 220182,
            ),
            407 => 
            array (
                'id' => 908,
                'pid' => 83,
                'name' => '德惠市',
                'type' => 3,
                'code' => 220183,
            ),
            408 => 
            array (
                'id' => 909,
                'pid' => 84,
                'name' => '昌邑区',
                'type' => 3,
                'code' => 220202,
            ),
            409 => 
            array (
                'id' => 910,
                'pid' => 84,
                'name' => '龙潭区',
                'type' => 3,
                'code' => 220203,
            ),
            410 => 
            array (
                'id' => 911,
                'pid' => 84,
                'name' => '船营区',
                'type' => 3,
                'code' => 220204,
            ),
            411 => 
            array (
                'id' => 912,
                'pid' => 84,
                'name' => '丰满区',
                'type' => 3,
                'code' => 220211,
            ),
            412 => 
            array (
                'id' => 913,
                'pid' => 84,
                'name' => '永吉县',
                'type' => 3,
                'code' => 220221,
            ),
            413 => 
            array (
                'id' => 914,
                'pid' => 84,
                'name' => '蛟河市',
                'type' => 3,
                'code' => 220281,
            ),
            414 => 
            array (
                'id' => 915,
                'pid' => 84,
                'name' => '桦甸市',
                'type' => 3,
                'code' => 220282,
            ),
            415 => 
            array (
                'id' => 916,
                'pid' => 84,
                'name' => '舒兰市',
                'type' => 3,
                'code' => 220283,
            ),
            416 => 
            array (
                'id' => 917,
                'pid' => 84,
                'name' => '磐石市',
                'type' => 3,
                'code' => 220284,
            ),
            417 => 
            array (
                'id' => 918,
                'pid' => 85,
                'name' => '铁西区',
                'type' => 3,
                'code' => 220302,
            ),
            418 => 
            array (
                'id' => 919,
                'pid' => 85,
                'name' => '铁东区',
                'type' => 3,
                'code' => 220303,
            ),
            419 => 
            array (
                'id' => 920,
                'pid' => 85,
                'name' => '梨树县',
                'type' => 3,
                'code' => 220322,
            ),
            420 => 
            array (
                'id' => 921,
                'pid' => 85,
                'name' => '伊通满族自治县',
                'type' => 3,
                'code' => 220323,
            ),
            421 => 
            array (
                'id' => 922,
                'pid' => 85,
                'name' => '公主岭市',
                'type' => 3,
                'code' => 220381,
            ),
            422 => 
            array (
                'id' => 923,
                'pid' => 85,
                'name' => '双辽市',
                'type' => 3,
                'code' => 220382,
            ),
            423 => 
            array (
                'id' => 924,
                'pid' => 86,
                'name' => '龙山区',
                'type' => 3,
                'code' => 220402,
            ),
            424 => 
            array (
                'id' => 925,
                'pid' => 86,
                'name' => '西安区',
                'type' => 3,
                'code' => 220403,
            ),
            425 => 
            array (
                'id' => 926,
                'pid' => 86,
                'name' => '东丰县',
                'type' => 3,
                'code' => 220421,
            ),
            426 => 
            array (
                'id' => 927,
                'pid' => 86,
                'name' => '东辽县',
                'type' => 3,
                'code' => 220422,
            ),
            427 => 
            array (
                'id' => 928,
                'pid' => 87,
                'name' => '东昌区',
                'type' => 3,
                'code' => 220502,
            ),
            428 => 
            array (
                'id' => 929,
                'pid' => 87,
                'name' => '二道江区',
                'type' => 3,
                'code' => 220503,
            ),
            429 => 
            array (
                'id' => 930,
                'pid' => 87,
                'name' => '通化县',
                'type' => 3,
                'code' => 220521,
            ),
            430 => 
            array (
                'id' => 931,
                'pid' => 87,
                'name' => '辉南县',
                'type' => 3,
                'code' => 220523,
            ),
            431 => 
            array (
                'id' => 932,
                'pid' => 87,
                'name' => '柳河县',
                'type' => 3,
                'code' => 220524,
            ),
            432 => 
            array (
                'id' => 933,
                'pid' => 87,
                'name' => '梅河口市',
                'type' => 3,
                'code' => 220581,
            ),
            433 => 
            array (
                'id' => 934,
                'pid' => 87,
                'name' => '集安市',
                'type' => 3,
                'code' => 220582,
            ),
            434 => 
            array (
                'id' => 935,
                'pid' => 88,
                'name' => '浑江区',
                'type' => 3,
                'code' => 220602,
            ),
            435 => 
            array (
                'id' => 936,
                'pid' => 88,
                'name' => '江源区',
                'type' => 3,
                'code' => 220605,
            ),
            436 => 
            array (
                'id' => 937,
                'pid' => 88,
                'name' => '抚松县',
                'type' => 3,
                'code' => 220621,
            ),
            437 => 
            array (
                'id' => 938,
                'pid' => 88,
                'name' => '靖宇县',
                'type' => 3,
                'code' => 220622,
            ),
            438 => 
            array (
                'id' => 939,
                'pid' => 88,
                'name' => '长白朝鲜族自治县',
                'type' => 3,
                'code' => 220623,
            ),
            439 => 
            array (
                'id' => 940,
                'pid' => 88,
                'name' => '临江市',
                'type' => 3,
                'code' => 220681,
            ),
            440 => 
            array (
                'id' => 941,
                'pid' => 89,
                'name' => '宁江区',
                'type' => 3,
                'code' => 220702,
            ),
            441 => 
            array (
                'id' => 942,
                'pid' => 89,
                'name' => '前郭尔罗斯蒙古族自治县',
                'type' => 3,
                'code' => 220721,
            ),
            442 => 
            array (
                'id' => 943,
                'pid' => 89,
                'name' => '长岭县',
                'type' => 3,
                'code' => 220722,
            ),
            443 => 
            array (
                'id' => 944,
                'pid' => 89,
                'name' => '乾安县',
                'type' => 3,
                'code' => 220723,
            ),
            444 => 
            array (
                'id' => 945,
                'pid' => 89,
                'name' => '扶余市',
                'type' => 3,
                'code' => 220781,
            ),
            445 => 
            array (
                'id' => 946,
                'pid' => 90,
                'name' => '洮北区',
                'type' => 3,
                'code' => 220802,
            ),
            446 => 
            array (
                'id' => 947,
                'pid' => 90,
                'name' => '镇赉县',
                'type' => 3,
                'code' => 220821,
            ),
            447 => 
            array (
                'id' => 948,
                'pid' => 90,
                'name' => '通榆县',
                'type' => 3,
                'code' => 220822,
            ),
            448 => 
            array (
                'id' => 949,
                'pid' => 90,
                'name' => '洮南市',
                'type' => 3,
                'code' => 220881,
            ),
            449 => 
            array (
                'id' => 950,
                'pid' => 90,
                'name' => '大安市',
                'type' => 3,
                'code' => 220882,
            ),
            450 => 
            array (
                'id' => 951,
                'pid' => 91,
                'name' => '延吉市',
                'type' => 3,
                'code' => 222401,
            ),
            451 => 
            array (
                'id' => 952,
                'pid' => 91,
                'name' => '图们市',
                'type' => 3,
                'code' => 222402,
            ),
            452 => 
            array (
                'id' => 953,
                'pid' => 91,
                'name' => '敦化市',
                'type' => 3,
                'code' => 222403,
            ),
            453 => 
            array (
                'id' => 954,
                'pid' => 91,
                'name' => '珲春市',
                'type' => 3,
                'code' => 222404,
            ),
            454 => 
            array (
                'id' => 955,
                'pid' => 91,
                'name' => '龙井市',
                'type' => 3,
                'code' => 222405,
            ),
            455 => 
            array (
                'id' => 956,
                'pid' => 91,
                'name' => '和龙市',
                'type' => 3,
                'code' => 222406,
            ),
            456 => 
            array (
                'id' => 957,
                'pid' => 91,
                'name' => '汪清县',
                'type' => 3,
                'code' => 222424,
            ),
            457 => 
            array (
                'id' => 958,
                'pid' => 91,
                'name' => '安图县',
                'type' => 3,
                'code' => 222426,
            ),
            458 => 
            array (
                'id' => 959,
                'pid' => 92,
                'name' => '道里区',
                'type' => 3,
                'code' => 230102,
            ),
            459 => 
            array (
                'id' => 960,
                'pid' => 92,
                'name' => '南岗区',
                'type' => 3,
                'code' => 230103,
            ),
            460 => 
            array (
                'id' => 961,
                'pid' => 92,
                'name' => '道外区',
                'type' => 3,
                'code' => 230104,
            ),
            461 => 
            array (
                'id' => 962,
                'pid' => 92,
                'name' => '平房区',
                'type' => 3,
                'code' => 230108,
            ),
            462 => 
            array (
                'id' => 963,
                'pid' => 92,
                'name' => '松北区',
                'type' => 3,
                'code' => 230109,
            ),
            463 => 
            array (
                'id' => 964,
                'pid' => 92,
                'name' => '香坊区',
                'type' => 3,
                'code' => 230110,
            ),
            464 => 
            array (
                'id' => 965,
                'pid' => 92,
                'name' => '呼兰区',
                'type' => 3,
                'code' => 230111,
            ),
            465 => 
            array (
                'id' => 966,
                'pid' => 92,
                'name' => '阿城区',
                'type' => 3,
                'code' => 230112,
            ),
            466 => 
            array (
                'id' => 967,
                'pid' => 92,
                'name' => '双城区',
                'type' => 3,
                'code' => 230113,
            ),
            467 => 
            array (
                'id' => 968,
                'pid' => 92,
                'name' => '依兰县',
                'type' => 3,
                'code' => 230123,
            ),
            468 => 
            array (
                'id' => 969,
                'pid' => 92,
                'name' => '方正县',
                'type' => 3,
                'code' => 230124,
            ),
            469 => 
            array (
                'id' => 970,
                'pid' => 92,
                'name' => '宾县',
                'type' => 3,
                'code' => 230125,
            ),
            470 => 
            array (
                'id' => 971,
                'pid' => 92,
                'name' => '巴彦县',
                'type' => 3,
                'code' => 230126,
            ),
            471 => 
            array (
                'id' => 972,
                'pid' => 92,
                'name' => '木兰县',
                'type' => 3,
                'code' => 230127,
            ),
            472 => 
            array (
                'id' => 973,
                'pid' => 92,
                'name' => '通河县',
                'type' => 3,
                'code' => 230128,
            ),
            473 => 
            array (
                'id' => 974,
                'pid' => 92,
                'name' => '延寿县',
                'type' => 3,
                'code' => 230129,
            ),
            474 => 
            array (
                'id' => 975,
                'pid' => 92,
                'name' => '尚志市',
                'type' => 3,
                'code' => 230183,
            ),
            475 => 
            array (
                'id' => 976,
                'pid' => 92,
                'name' => '五常市',
                'type' => 3,
                'code' => 230184,
            ),
            476 => 
            array (
                'id' => 977,
                'pid' => 93,
                'name' => '龙沙区',
                'type' => 3,
                'code' => 230202,
            ),
            477 => 
            array (
                'id' => 978,
                'pid' => 93,
                'name' => '建华区',
                'type' => 3,
                'code' => 230203,
            ),
            478 => 
            array (
                'id' => 979,
                'pid' => 93,
                'name' => '铁锋区',
                'type' => 3,
                'code' => 230204,
            ),
            479 => 
            array (
                'id' => 980,
                'pid' => 93,
                'name' => '昂昂溪区',
                'type' => 3,
                'code' => 230205,
            ),
            480 => 
            array (
                'id' => 981,
                'pid' => 93,
                'name' => '富拉尔基区',
                'type' => 3,
                'code' => 230206,
            ),
            481 => 
            array (
                'id' => 982,
                'pid' => 93,
                'name' => '碾子山区',
                'type' => 3,
                'code' => 230207,
            ),
            482 => 
            array (
                'id' => 983,
                'pid' => 93,
                'name' => '梅里斯达斡尔族区',
                'type' => 3,
                'code' => 230208,
            ),
            483 => 
            array (
                'id' => 984,
                'pid' => 93,
                'name' => '龙江县',
                'type' => 3,
                'code' => 230221,
            ),
            484 => 
            array (
                'id' => 985,
                'pid' => 93,
                'name' => '依安县',
                'type' => 3,
                'code' => 230223,
            ),
            485 => 
            array (
                'id' => 986,
                'pid' => 93,
                'name' => '泰来县',
                'type' => 3,
                'code' => 230224,
            ),
            486 => 
            array (
                'id' => 987,
                'pid' => 93,
                'name' => '甘南县',
                'type' => 3,
                'code' => 230225,
            ),
            487 => 
            array (
                'id' => 988,
                'pid' => 93,
                'name' => '富裕县',
                'type' => 3,
                'code' => 230227,
            ),
            488 => 
            array (
                'id' => 989,
                'pid' => 93,
                'name' => '克山县',
                'type' => 3,
                'code' => 230229,
            ),
            489 => 
            array (
                'id' => 990,
                'pid' => 93,
                'name' => '克东县',
                'type' => 3,
                'code' => 230230,
            ),
            490 => 
            array (
                'id' => 991,
                'pid' => 93,
                'name' => '拜泉县',
                'type' => 3,
                'code' => 230231,
            ),
            491 => 
            array (
                'id' => 992,
                'pid' => 93,
                'name' => '讷河市',
                'type' => 3,
                'code' => 230281,
            ),
            492 => 
            array (
                'id' => 993,
                'pid' => 94,
                'name' => '鸡冠区',
                'type' => 3,
                'code' => 230302,
            ),
            493 => 
            array (
                'id' => 994,
                'pid' => 94,
                'name' => '恒山区',
                'type' => 3,
                'code' => 230303,
            ),
            494 => 
            array (
                'id' => 995,
                'pid' => 94,
                'name' => '滴道区',
                'type' => 3,
                'code' => 230304,
            ),
            495 => 
            array (
                'id' => 996,
                'pid' => 94,
                'name' => '梨树区',
                'type' => 3,
                'code' => 230305,
            ),
            496 => 
            array (
                'id' => 997,
                'pid' => 94,
                'name' => '城子河区',
                'type' => 3,
                'code' => 230306,
            ),
            497 => 
            array (
                'id' => 998,
                'pid' => 94,
                'name' => '麻山区',
                'type' => 3,
                'code' => 230307,
            ),
            498 => 
            array (
                'id' => 999,
                'pid' => 94,
                'name' => '鸡东县',
                'type' => 3,
                'code' => 230321,
            ),
            499 => 
            array (
                'id' => 1000,
                'pid' => 94,
                'name' => '虎林市',
                'type' => 3,
                'code' => 230381,
            ),
        ));
        \DB::table('z_region')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'pid' => 94,
                'name' => '密山市',
                'type' => 3,
                'code' => 230382,
            ),
            1 => 
            array (
                'id' => 1002,
                'pid' => 95,
                'name' => '向阳区',
                'type' => 3,
                'code' => 230402,
            ),
            2 => 
            array (
                'id' => 1003,
                'pid' => 95,
                'name' => '工农区',
                'type' => 3,
                'code' => 230403,
            ),
            3 => 
            array (
                'id' => 1004,
                'pid' => 95,
                'name' => '南山区',
                'type' => 3,
                'code' => 230404,
            ),
            4 => 
            array (
                'id' => 1005,
                'pid' => 95,
                'name' => '兴安区',
                'type' => 3,
                'code' => 230405,
            ),
            5 => 
            array (
                'id' => 1006,
                'pid' => 95,
                'name' => '东山区',
                'type' => 3,
                'code' => 230406,
            ),
            6 => 
            array (
                'id' => 1007,
                'pid' => 95,
                'name' => '兴山区',
                'type' => 3,
                'code' => 230407,
            ),
            7 => 
            array (
                'id' => 1008,
                'pid' => 95,
                'name' => '萝北县',
                'type' => 3,
                'code' => 230421,
            ),
            8 => 
            array (
                'id' => 1009,
                'pid' => 95,
                'name' => '绥滨县',
                'type' => 3,
                'code' => 230422,
            ),
            9 => 
            array (
                'id' => 1010,
                'pid' => 96,
                'name' => '尖山区',
                'type' => 3,
                'code' => 230502,
            ),
            10 => 
            array (
                'id' => 1011,
                'pid' => 96,
                'name' => '岭东区',
                'type' => 3,
                'code' => 230503,
            ),
            11 => 
            array (
                'id' => 1012,
                'pid' => 96,
                'name' => '四方台区',
                'type' => 3,
                'code' => 230505,
            ),
            12 => 
            array (
                'id' => 1013,
                'pid' => 96,
                'name' => '宝山区',
                'type' => 3,
                'code' => 230506,
            ),
            13 => 
            array (
                'id' => 1014,
                'pid' => 96,
                'name' => '集贤县',
                'type' => 3,
                'code' => 230521,
            ),
            14 => 
            array (
                'id' => 1015,
                'pid' => 96,
                'name' => '友谊县',
                'type' => 3,
                'code' => 230522,
            ),
            15 => 
            array (
                'id' => 1016,
                'pid' => 96,
                'name' => '宝清县',
                'type' => 3,
                'code' => 230523,
            ),
            16 => 
            array (
                'id' => 1017,
                'pid' => 96,
                'name' => '饶河县',
                'type' => 3,
                'code' => 230524,
            ),
            17 => 
            array (
                'id' => 1018,
                'pid' => 97,
                'name' => '萨尔图区',
                'type' => 3,
                'code' => 230602,
            ),
            18 => 
            array (
                'id' => 1019,
                'pid' => 97,
                'name' => '龙凤区',
                'type' => 3,
                'code' => 230603,
            ),
            19 => 
            array (
                'id' => 1020,
                'pid' => 97,
                'name' => '让胡路区',
                'type' => 3,
                'code' => 230604,
            ),
            20 => 
            array (
                'id' => 1021,
                'pid' => 97,
                'name' => '红岗区',
                'type' => 3,
                'code' => 230605,
            ),
            21 => 
            array (
                'id' => 1022,
                'pid' => 97,
                'name' => '大同区',
                'type' => 3,
                'code' => 230606,
            ),
            22 => 
            array (
                'id' => 1023,
                'pid' => 97,
                'name' => '肇州县',
                'type' => 3,
                'code' => 230621,
            ),
            23 => 
            array (
                'id' => 1024,
                'pid' => 97,
                'name' => '肇源县',
                'type' => 3,
                'code' => 230622,
            ),
            24 => 
            array (
                'id' => 1025,
                'pid' => 97,
                'name' => '林甸县',
                'type' => 3,
                'code' => 230623,
            ),
            25 => 
            array (
                'id' => 1026,
                'pid' => 97,
                'name' => '杜尔伯特蒙古族自治县',
                'type' => 3,
                'code' => 230624,
            ),
            26 => 
            array (
                'id' => 1027,
                'pid' => 98,
                'name' => '伊春区',
                'type' => 3,
                'code' => 230702,
            ),
            27 => 
            array (
                'id' => 1028,
                'pid' => 98,
                'name' => '南岔区',
                'type' => 3,
                'code' => 230703,
            ),
            28 => 
            array (
                'id' => 1029,
                'pid' => 98,
                'name' => '友好区',
                'type' => 3,
                'code' => 230704,
            ),
            29 => 
            array (
                'id' => 1030,
                'pid' => 98,
                'name' => '西林区',
                'type' => 3,
                'code' => 230705,
            ),
            30 => 
            array (
                'id' => 1031,
                'pid' => 98,
                'name' => '翠峦区',
                'type' => 3,
                'code' => 230706,
            ),
            31 => 
            array (
                'id' => 1032,
                'pid' => 98,
                'name' => '新青区',
                'type' => 3,
                'code' => 230707,
            ),
            32 => 
            array (
                'id' => 1033,
                'pid' => 98,
                'name' => '美溪区',
                'type' => 3,
                'code' => 230708,
            ),
            33 => 
            array (
                'id' => 1034,
                'pid' => 98,
                'name' => '金山屯区',
                'type' => 3,
                'code' => 230709,
            ),
            34 => 
            array (
                'id' => 1035,
                'pid' => 98,
                'name' => '五营区',
                'type' => 3,
                'code' => 230710,
            ),
            35 => 
            array (
                'id' => 1036,
                'pid' => 98,
                'name' => '乌马河区',
                'type' => 3,
                'code' => 230711,
            ),
            36 => 
            array (
                'id' => 1037,
                'pid' => 98,
                'name' => '汤旺河区',
                'type' => 3,
                'code' => 230712,
            ),
            37 => 
            array (
                'id' => 1038,
                'pid' => 98,
                'name' => '带岭区',
                'type' => 3,
                'code' => 230713,
            ),
            38 => 
            array (
                'id' => 1039,
                'pid' => 98,
                'name' => '乌伊岭区',
                'type' => 3,
                'code' => 230714,
            ),
            39 => 
            array (
                'id' => 1040,
                'pid' => 98,
                'name' => '红星区',
                'type' => 3,
                'code' => 230715,
            ),
            40 => 
            array (
                'id' => 1041,
                'pid' => 98,
                'name' => '上甘岭区',
                'type' => 3,
                'code' => 230716,
            ),
            41 => 
            array (
                'id' => 1042,
                'pid' => 98,
                'name' => '嘉荫县',
                'type' => 3,
                'code' => 230722,
            ),
            42 => 
            array (
                'id' => 1043,
                'pid' => 98,
                'name' => '铁力市',
                'type' => 3,
                'code' => 230781,
            ),
            43 => 
            array (
                'id' => 1044,
                'pid' => 99,
                'name' => '向阳区',
                'type' => 3,
                'code' => 230803,
            ),
            44 => 
            array (
                'id' => 1045,
                'pid' => 99,
                'name' => '前进区',
                'type' => 3,
                'code' => 230804,
            ),
            45 => 
            array (
                'id' => 1046,
                'pid' => 99,
                'name' => '东风区',
                'type' => 3,
                'code' => 230805,
            ),
            46 => 
            array (
                'id' => 1047,
                'pid' => 99,
                'name' => '郊区',
                'type' => 3,
                'code' => 230811,
            ),
            47 => 
            array (
                'id' => 1048,
                'pid' => 99,
                'name' => '桦南县',
                'type' => 3,
                'code' => 230822,
            ),
            48 => 
            array (
                'id' => 1049,
                'pid' => 99,
                'name' => '桦川县',
                'type' => 3,
                'code' => 230826,
            ),
            49 => 
            array (
                'id' => 1050,
                'pid' => 99,
                'name' => '汤原县',
                'type' => 3,
                'code' => 230828,
            ),
            50 => 
            array (
                'id' => 1051,
                'pid' => 99,
                'name' => '同江市',
                'type' => 3,
                'code' => 230881,
            ),
            51 => 
            array (
                'id' => 1052,
                'pid' => 99,
                'name' => '富锦市',
                'type' => 3,
                'code' => 230882,
            ),
            52 => 
            array (
                'id' => 1053,
                'pid' => 99,
                'name' => '抚远市',
                'type' => 3,
                'code' => 230883,
            ),
            53 => 
            array (
                'id' => 1054,
                'pid' => 100,
                'name' => '新兴区',
                'type' => 3,
                'code' => 230902,
            ),
            54 => 
            array (
                'id' => 1055,
                'pid' => 100,
                'name' => '桃山区',
                'type' => 3,
                'code' => 230903,
            ),
            55 => 
            array (
                'id' => 1056,
                'pid' => 100,
                'name' => '茄子河区',
                'type' => 3,
                'code' => 230904,
            ),
            56 => 
            array (
                'id' => 1057,
                'pid' => 100,
                'name' => '勃利县',
                'type' => 3,
                'code' => 230921,
            ),
            57 => 
            array (
                'id' => 1058,
                'pid' => 101,
                'name' => '东安区',
                'type' => 3,
                'code' => 231002,
            ),
            58 => 
            array (
                'id' => 1059,
                'pid' => 101,
                'name' => '阳明区',
                'type' => 3,
                'code' => 231003,
            ),
            59 => 
            array (
                'id' => 1060,
                'pid' => 101,
                'name' => '爱民区',
                'type' => 3,
                'code' => 231004,
            ),
            60 => 
            array (
                'id' => 1061,
                'pid' => 101,
                'name' => '西安区',
                'type' => 3,
                'code' => 231005,
            ),
            61 => 
            array (
                'id' => 1062,
                'pid' => 101,
                'name' => '林口县',
                'type' => 3,
                'code' => 231025,
            ),
            62 => 
            array (
                'id' => 1063,
                'pid' => 101,
                'name' => '绥芬河市',
                'type' => 3,
                'code' => 231081,
            ),
            63 => 
            array (
                'id' => 1064,
                'pid' => 101,
                'name' => '海林市',
                'type' => 3,
                'code' => 231083,
            ),
            64 => 
            array (
                'id' => 1065,
                'pid' => 101,
                'name' => '宁安市',
                'type' => 3,
                'code' => 231084,
            ),
            65 => 
            array (
                'id' => 1066,
                'pid' => 101,
                'name' => '穆棱市',
                'type' => 3,
                'code' => 231085,
            ),
            66 => 
            array (
                'id' => 1067,
                'pid' => 101,
                'name' => '东宁市',
                'type' => 3,
                'code' => 231086,
            ),
            67 => 
            array (
                'id' => 1068,
                'pid' => 102,
                'name' => '爱辉区',
                'type' => 3,
                'code' => 231102,
            ),
            68 => 
            array (
                'id' => 1069,
                'pid' => 102,
                'name' => '嫩江县',
                'type' => 3,
                'code' => 231121,
            ),
            69 => 
            array (
                'id' => 1070,
                'pid' => 102,
                'name' => '逊克县',
                'type' => 3,
                'code' => 231123,
            ),
            70 => 
            array (
                'id' => 1071,
                'pid' => 102,
                'name' => '孙吴县',
                'type' => 3,
                'code' => 231124,
            ),
            71 => 
            array (
                'id' => 1072,
                'pid' => 102,
                'name' => '北安市',
                'type' => 3,
                'code' => 231181,
            ),
            72 => 
            array (
                'id' => 1073,
                'pid' => 102,
                'name' => '五大连池市',
                'type' => 3,
                'code' => 231182,
            ),
            73 => 
            array (
                'id' => 1074,
                'pid' => 103,
                'name' => '北林区',
                'type' => 3,
                'code' => 231202,
            ),
            74 => 
            array (
                'id' => 1075,
                'pid' => 103,
                'name' => '望奎县',
                'type' => 3,
                'code' => 231221,
            ),
            75 => 
            array (
                'id' => 1076,
                'pid' => 103,
                'name' => '兰西县',
                'type' => 3,
                'code' => 231222,
            ),
            76 => 
            array (
                'id' => 1077,
                'pid' => 103,
                'name' => '青冈县',
                'type' => 3,
                'code' => 231223,
            ),
            77 => 
            array (
                'id' => 1078,
                'pid' => 103,
                'name' => '庆安县',
                'type' => 3,
                'code' => 231224,
            ),
            78 => 
            array (
                'id' => 1079,
                'pid' => 103,
                'name' => '明水县',
                'type' => 3,
                'code' => 231225,
            ),
            79 => 
            array (
                'id' => 1080,
                'pid' => 103,
                'name' => '绥棱县',
                'type' => 3,
                'code' => 231226,
            ),
            80 => 
            array (
                'id' => 1081,
                'pid' => 103,
                'name' => '安达市',
                'type' => 3,
                'code' => 231281,
            ),
            81 => 
            array (
                'id' => 1082,
                'pid' => 103,
                'name' => '肇东市',
                'type' => 3,
                'code' => 231282,
            ),
            82 => 
            array (
                'id' => 1083,
                'pid' => 103,
                'name' => '海伦市',
                'type' => 3,
                'code' => 231283,
            ),
            83 => 
            array (
                'id' => 1084,
                'pid' => 104,
                'name' => '呼玛县',
                'type' => 3,
                'code' => 232721,
            ),
            84 => 
            array (
                'id' => 1085,
                'pid' => 104,
                'name' => '塔河县',
                'type' => 3,
                'code' => 232722,
            ),
            85 => 
            array (
                'id' => 1086,
                'pid' => 104,
                'name' => '漠河县',
                'type' => 3,
                'code' => 232723,
            ),
            86 => 
            array (
                'id' => 1087,
                'pid' => 105,
                'name' => '黄浦区',
                'type' => 3,
                'code' => 310101,
            ),
            87 => 
            array (
                'id' => 1088,
                'pid' => 105,
                'name' => '徐汇区',
                'type' => 3,
                'code' => 310104,
            ),
            88 => 
            array (
                'id' => 1089,
                'pid' => 105,
                'name' => '长宁区',
                'type' => 3,
                'code' => 310105,
            ),
            89 => 
            array (
                'id' => 1090,
                'pid' => 105,
                'name' => '静安区',
                'type' => 3,
                'code' => 310106,
            ),
            90 => 
            array (
                'id' => 1091,
                'pid' => 105,
                'name' => '普陀区',
                'type' => 3,
                'code' => 310107,
            ),
            91 => 
            array (
                'id' => 1092,
                'pid' => 105,
                'name' => '虹口区',
                'type' => 3,
                'code' => 310109,
            ),
            92 => 
            array (
                'id' => 1093,
                'pid' => 105,
                'name' => '杨浦区',
                'type' => 3,
                'code' => 310110,
            ),
            93 => 
            array (
                'id' => 1094,
                'pid' => 105,
                'name' => '闵行区',
                'type' => 3,
                'code' => 310112,
            ),
            94 => 
            array (
                'id' => 1095,
                'pid' => 105,
                'name' => '宝山区',
                'type' => 3,
                'code' => 310113,
            ),
            95 => 
            array (
                'id' => 1096,
                'pid' => 105,
                'name' => '嘉定区',
                'type' => 3,
                'code' => 310114,
            ),
            96 => 
            array (
                'id' => 1097,
                'pid' => 105,
                'name' => '浦东新区',
                'type' => 3,
                'code' => 310115,
            ),
            97 => 
            array (
                'id' => 1098,
                'pid' => 105,
                'name' => '金山区',
                'type' => 3,
                'code' => 310116,
            ),
            98 => 
            array (
                'id' => 1099,
                'pid' => 105,
                'name' => '松江区',
                'type' => 3,
                'code' => 310117,
            ),
            99 => 
            array (
                'id' => 1100,
                'pid' => 105,
                'name' => '青浦区',
                'type' => 3,
                'code' => 310118,
            ),
            100 => 
            array (
                'id' => 1101,
                'pid' => 105,
                'name' => '奉贤区',
                'type' => 3,
                'code' => 310120,
            ),
            101 => 
            array (
                'id' => 1102,
                'pid' => 105,
                'name' => '崇明区',
                'type' => 3,
                'code' => 310151,
            ),
            102 => 
            array (
                'id' => 1103,
                'pid' => 106,
                'name' => '玄武区',
                'type' => 3,
                'code' => 320102,
            ),
            103 => 
            array (
                'id' => 1104,
                'pid' => 106,
                'name' => '秦淮区',
                'type' => 3,
                'code' => 320104,
            ),
            104 => 
            array (
                'id' => 1105,
                'pid' => 106,
                'name' => '建邺区',
                'type' => 3,
                'code' => 320105,
            ),
            105 => 
            array (
                'id' => 1106,
                'pid' => 106,
                'name' => '鼓楼区',
                'type' => 3,
                'code' => 320106,
            ),
            106 => 
            array (
                'id' => 1107,
                'pid' => 106,
                'name' => '浦口区',
                'type' => 3,
                'code' => 320111,
            ),
            107 => 
            array (
                'id' => 1108,
                'pid' => 106,
                'name' => '栖霞区',
                'type' => 3,
                'code' => 320113,
            ),
            108 => 
            array (
                'id' => 1109,
                'pid' => 106,
                'name' => '雨花台区',
                'type' => 3,
                'code' => 320114,
            ),
            109 => 
            array (
                'id' => 1110,
                'pid' => 106,
                'name' => '江宁区',
                'type' => 3,
                'code' => 320115,
            ),
            110 => 
            array (
                'id' => 1111,
                'pid' => 106,
                'name' => '六合区',
                'type' => 3,
                'code' => 320116,
            ),
            111 => 
            array (
                'id' => 1112,
                'pid' => 106,
                'name' => '溧水区',
                'type' => 3,
                'code' => 320117,
            ),
            112 => 
            array (
                'id' => 1113,
                'pid' => 106,
                'name' => '高淳区',
                'type' => 3,
                'code' => 320118,
            ),
            113 => 
            array (
                'id' => 1114,
                'pid' => 107,
                'name' => '锡山区',
                'type' => 3,
                'code' => 320205,
            ),
            114 => 
            array (
                'id' => 1115,
                'pid' => 107,
                'name' => '惠山区',
                'type' => 3,
                'code' => 320206,
            ),
            115 => 
            array (
                'id' => 1116,
                'pid' => 107,
                'name' => '滨湖区',
                'type' => 3,
                'code' => 320211,
            ),
            116 => 
            array (
                'id' => 1117,
                'pid' => 107,
                'name' => '梁溪区',
                'type' => 3,
                'code' => 320213,
            ),
            117 => 
            array (
                'id' => 1118,
                'pid' => 107,
                'name' => '新吴区',
                'type' => 3,
                'code' => 320214,
            ),
            118 => 
            array (
                'id' => 1119,
                'pid' => 107,
                'name' => '江阴市',
                'type' => 3,
                'code' => 320281,
            ),
            119 => 
            array (
                'id' => 1120,
                'pid' => 107,
                'name' => '宜兴市',
                'type' => 3,
                'code' => 320282,
            ),
            120 => 
            array (
                'id' => 1121,
                'pid' => 108,
                'name' => '鼓楼区',
                'type' => 3,
                'code' => 320302,
            ),
            121 => 
            array (
                'id' => 1122,
                'pid' => 108,
                'name' => '云龙区',
                'type' => 3,
                'code' => 320303,
            ),
            122 => 
            array (
                'id' => 1123,
                'pid' => 108,
                'name' => '贾汪区',
                'type' => 3,
                'code' => 320305,
            ),
            123 => 
            array (
                'id' => 1124,
                'pid' => 108,
                'name' => '泉山区',
                'type' => 3,
                'code' => 320311,
            ),
            124 => 
            array (
                'id' => 1125,
                'pid' => 108,
                'name' => '铜山区',
                'type' => 3,
                'code' => 320312,
            ),
            125 => 
            array (
                'id' => 1126,
                'pid' => 108,
                'name' => '丰县',
                'type' => 3,
                'code' => 320321,
            ),
            126 => 
            array (
                'id' => 1127,
                'pid' => 108,
                'name' => '沛县',
                'type' => 3,
                'code' => 320322,
            ),
            127 => 
            array (
                'id' => 1128,
                'pid' => 108,
                'name' => '睢宁县',
                'type' => 3,
                'code' => 320324,
            ),
            128 => 
            array (
                'id' => 1129,
                'pid' => 108,
                'name' => '新沂市',
                'type' => 3,
                'code' => 320381,
            ),
            129 => 
            array (
                'id' => 1130,
                'pid' => 108,
                'name' => '邳州市',
                'type' => 3,
                'code' => 320382,
            ),
            130 => 
            array (
                'id' => 1131,
                'pid' => 109,
                'name' => '天宁区',
                'type' => 3,
                'code' => 320402,
            ),
            131 => 
            array (
                'id' => 1132,
                'pid' => 109,
                'name' => '钟楼区',
                'type' => 3,
                'code' => 320404,
            ),
            132 => 
            array (
                'id' => 1133,
                'pid' => 109,
                'name' => '新北区',
                'type' => 3,
                'code' => 320411,
            ),
            133 => 
            array (
                'id' => 1134,
                'pid' => 109,
                'name' => '武进区',
                'type' => 3,
                'code' => 320412,
            ),
            134 => 
            array (
                'id' => 1135,
                'pid' => 109,
                'name' => '金坛区',
                'type' => 3,
                'code' => 320413,
            ),
            135 => 
            array (
                'id' => 1136,
                'pid' => 109,
                'name' => '溧阳市',
                'type' => 3,
                'code' => 320481,
            ),
            136 => 
            array (
                'id' => 1137,
                'pid' => 110,
                'name' => '虎丘区',
                'type' => 3,
                'code' => 320505,
            ),
            137 => 
            array (
                'id' => 1138,
                'pid' => 110,
                'name' => '吴中区',
                'type' => 3,
                'code' => 320506,
            ),
            138 => 
            array (
                'id' => 1139,
                'pid' => 110,
                'name' => '相城区',
                'type' => 3,
                'code' => 320507,
            ),
            139 => 
            array (
                'id' => 1140,
                'pid' => 110,
                'name' => '姑苏区',
                'type' => 3,
                'code' => 320508,
            ),
            140 => 
            array (
                'id' => 1141,
                'pid' => 110,
                'name' => '吴江区',
                'type' => 3,
                'code' => 320509,
            ),
            141 => 
            array (
                'id' => 1142,
                'pid' => 110,
                'name' => '常熟市',
                'type' => 3,
                'code' => 320581,
            ),
            142 => 
            array (
                'id' => 1143,
                'pid' => 110,
                'name' => '张家港市',
                'type' => 3,
                'code' => 320582,
            ),
            143 => 
            array (
                'id' => 1144,
                'pid' => 110,
                'name' => '昆山市',
                'type' => 3,
                'code' => 320583,
            ),
            144 => 
            array (
                'id' => 1145,
                'pid' => 110,
                'name' => '太仓市',
                'type' => 3,
                'code' => 320585,
            ),
            145 => 
            array (
                'id' => 1146,
                'pid' => 111,
                'name' => '崇川区',
                'type' => 3,
                'code' => 320602,
            ),
            146 => 
            array (
                'id' => 1147,
                'pid' => 111,
                'name' => '港闸区',
                'type' => 3,
                'code' => 320611,
            ),
            147 => 
            array (
                'id' => 1148,
                'pid' => 111,
                'name' => '通州区',
                'type' => 3,
                'code' => 320612,
            ),
            148 => 
            array (
                'id' => 1149,
                'pid' => 111,
                'name' => '海安县',
                'type' => 3,
                'code' => 320621,
            ),
            149 => 
            array (
                'id' => 1150,
                'pid' => 111,
                'name' => '如东县',
                'type' => 3,
                'code' => 320623,
            ),
            150 => 
            array (
                'id' => 1151,
                'pid' => 111,
                'name' => '启东市',
                'type' => 3,
                'code' => 320681,
            ),
            151 => 
            array (
                'id' => 1152,
                'pid' => 111,
                'name' => '如皋市',
                'type' => 3,
                'code' => 320682,
            ),
            152 => 
            array (
                'id' => 1153,
                'pid' => 111,
                'name' => '海门市',
                'type' => 3,
                'code' => 320684,
            ),
            153 => 
            array (
                'id' => 1154,
                'pid' => 112,
                'name' => '连云区',
                'type' => 3,
                'code' => 320703,
            ),
            154 => 
            array (
                'id' => 1155,
                'pid' => 112,
                'name' => '海州区',
                'type' => 3,
                'code' => 320706,
            ),
            155 => 
            array (
                'id' => 1156,
                'pid' => 112,
                'name' => '赣榆区',
                'type' => 3,
                'code' => 320707,
            ),
            156 => 
            array (
                'id' => 1157,
                'pid' => 112,
                'name' => '东海县',
                'type' => 3,
                'code' => 320722,
            ),
            157 => 
            array (
                'id' => 1158,
                'pid' => 112,
                'name' => '灌云县',
                'type' => 3,
                'code' => 320723,
            ),
            158 => 
            array (
                'id' => 1159,
                'pid' => 112,
                'name' => '灌南县',
                'type' => 3,
                'code' => 320724,
            ),
            159 => 
            array (
                'id' => 1160,
                'pid' => 113,
                'name' => '淮安区',
                'type' => 3,
                'code' => 320803,
            ),
            160 => 
            array (
                'id' => 1161,
                'pid' => 113,
                'name' => '淮阴区',
                'type' => 3,
                'code' => 320804,
            ),
            161 => 
            array (
                'id' => 1162,
                'pid' => 113,
                'name' => '清江浦区',
                'type' => 3,
                'code' => 320812,
            ),
            162 => 
            array (
                'id' => 1163,
                'pid' => 113,
                'name' => '洪泽区',
                'type' => 3,
                'code' => 320813,
            ),
            163 => 
            array (
                'id' => 1164,
                'pid' => 113,
                'name' => '涟水县',
                'type' => 3,
                'code' => 320826,
            ),
            164 => 
            array (
                'id' => 1165,
                'pid' => 113,
                'name' => '盱眙县',
                'type' => 3,
                'code' => 320830,
            ),
            165 => 
            array (
                'id' => 1166,
                'pid' => 113,
                'name' => '金湖县',
                'type' => 3,
                'code' => 320831,
            ),
            166 => 
            array (
                'id' => 1167,
                'pid' => 114,
                'name' => '亭湖区',
                'type' => 3,
                'code' => 320902,
            ),
            167 => 
            array (
                'id' => 1168,
                'pid' => 114,
                'name' => '盐都区',
                'type' => 3,
                'code' => 320903,
            ),
            168 => 
            array (
                'id' => 1169,
                'pid' => 114,
                'name' => '大丰区',
                'type' => 3,
                'code' => 320904,
            ),
            169 => 
            array (
                'id' => 1170,
                'pid' => 114,
                'name' => '响水县',
                'type' => 3,
                'code' => 320921,
            ),
            170 => 
            array (
                'id' => 1171,
                'pid' => 114,
                'name' => '滨海县',
                'type' => 3,
                'code' => 320922,
            ),
            171 => 
            array (
                'id' => 1172,
                'pid' => 114,
                'name' => '阜宁县',
                'type' => 3,
                'code' => 320923,
            ),
            172 => 
            array (
                'id' => 1173,
                'pid' => 114,
                'name' => '射阳县',
                'type' => 3,
                'code' => 320924,
            ),
            173 => 
            array (
                'id' => 1174,
                'pid' => 114,
                'name' => '建湖县',
                'type' => 3,
                'code' => 320925,
            ),
            174 => 
            array (
                'id' => 1175,
                'pid' => 114,
                'name' => '东台市',
                'type' => 3,
                'code' => 320981,
            ),
            175 => 
            array (
                'id' => 1176,
                'pid' => 115,
                'name' => '广陵区',
                'type' => 3,
                'code' => 321002,
            ),
            176 => 
            array (
                'id' => 1177,
                'pid' => 115,
                'name' => '邗江区',
                'type' => 3,
                'code' => 321003,
            ),
            177 => 
            array (
                'id' => 1178,
                'pid' => 115,
                'name' => '江都区',
                'type' => 3,
                'code' => 321012,
            ),
            178 => 
            array (
                'id' => 1179,
                'pid' => 115,
                'name' => '宝应县',
                'type' => 3,
                'code' => 321023,
            ),
            179 => 
            array (
                'id' => 1180,
                'pid' => 115,
                'name' => '仪征市',
                'type' => 3,
                'code' => 321081,
            ),
            180 => 
            array (
                'id' => 1181,
                'pid' => 115,
                'name' => '高邮市',
                'type' => 3,
                'code' => 321084,
            ),
            181 => 
            array (
                'id' => 1182,
                'pid' => 116,
                'name' => '京口区',
                'type' => 3,
                'code' => 321102,
            ),
            182 => 
            array (
                'id' => 1183,
                'pid' => 116,
                'name' => '润州区',
                'type' => 3,
                'code' => 321111,
            ),
            183 => 
            array (
                'id' => 1184,
                'pid' => 116,
                'name' => '丹徒区',
                'type' => 3,
                'code' => 321112,
            ),
            184 => 
            array (
                'id' => 1185,
                'pid' => 116,
                'name' => '丹阳市',
                'type' => 3,
                'code' => 321181,
            ),
            185 => 
            array (
                'id' => 1186,
                'pid' => 116,
                'name' => '扬中市',
                'type' => 3,
                'code' => 321182,
            ),
            186 => 
            array (
                'id' => 1187,
                'pid' => 116,
                'name' => '句容市',
                'type' => 3,
                'code' => 321183,
            ),
            187 => 
            array (
                'id' => 1188,
                'pid' => 117,
                'name' => '海陵区',
                'type' => 3,
                'code' => 321202,
            ),
            188 => 
            array (
                'id' => 1189,
                'pid' => 117,
                'name' => '高港区',
                'type' => 3,
                'code' => 321203,
            ),
            189 => 
            array (
                'id' => 1190,
                'pid' => 117,
                'name' => '姜堰区',
                'type' => 3,
                'code' => 321204,
            ),
            190 => 
            array (
                'id' => 1191,
                'pid' => 117,
                'name' => '兴化市',
                'type' => 3,
                'code' => 321281,
            ),
            191 => 
            array (
                'id' => 1192,
                'pid' => 117,
                'name' => '靖江市',
                'type' => 3,
                'code' => 321282,
            ),
            192 => 
            array (
                'id' => 1193,
                'pid' => 117,
                'name' => '泰兴市',
                'type' => 3,
                'code' => 321283,
            ),
            193 => 
            array (
                'id' => 1194,
                'pid' => 118,
                'name' => '宿城区',
                'type' => 3,
                'code' => 321302,
            ),
            194 => 
            array (
                'id' => 1195,
                'pid' => 118,
                'name' => '宿豫区',
                'type' => 3,
                'code' => 321311,
            ),
            195 => 
            array (
                'id' => 1196,
                'pid' => 118,
                'name' => '沭阳县',
                'type' => 3,
                'code' => 321322,
            ),
            196 => 
            array (
                'id' => 1197,
                'pid' => 118,
                'name' => '泗阳县',
                'type' => 3,
                'code' => 321323,
            ),
            197 => 
            array (
                'id' => 1198,
                'pid' => 118,
                'name' => '泗洪县',
                'type' => 3,
                'code' => 321324,
            ),
            198 => 
            array (
                'id' => 1199,
                'pid' => 119,
                'name' => '上城区',
                'type' => 3,
                'code' => 330102,
            ),
            199 => 
            array (
                'id' => 1200,
                'pid' => 119,
                'name' => '下城区',
                'type' => 3,
                'code' => 330103,
            ),
            200 => 
            array (
                'id' => 1201,
                'pid' => 119,
                'name' => '江干区',
                'type' => 3,
                'code' => 330104,
            ),
            201 => 
            array (
                'id' => 1202,
                'pid' => 119,
                'name' => '拱墅区',
                'type' => 3,
                'code' => 330105,
            ),
            202 => 
            array (
                'id' => 1203,
                'pid' => 119,
                'name' => '西湖区',
                'type' => 3,
                'code' => 330106,
            ),
            203 => 
            array (
                'id' => 1204,
                'pid' => 119,
                'name' => '滨江区',
                'type' => 3,
                'code' => 330108,
            ),
            204 => 
            array (
                'id' => 1205,
                'pid' => 119,
                'name' => '萧山区',
                'type' => 3,
                'code' => 330109,
            ),
            205 => 
            array (
                'id' => 1206,
                'pid' => 119,
                'name' => '余杭区',
                'type' => 3,
                'code' => 330110,
            ),
            206 => 
            array (
                'id' => 1207,
                'pid' => 119,
                'name' => '富阳区',
                'type' => 3,
                'code' => 330111,
            ),
            207 => 
            array (
                'id' => 1208,
                'pid' => 119,
                'name' => '桐庐县',
                'type' => 3,
                'code' => 330122,
            ),
            208 => 
            array (
                'id' => 1209,
                'pid' => 119,
                'name' => '淳安县',
                'type' => 3,
                'code' => 330127,
            ),
            209 => 
            array (
                'id' => 1210,
                'pid' => 119,
                'name' => '建德市',
                'type' => 3,
                'code' => 330182,
            ),
            210 => 
            array (
                'id' => 1211,
                'pid' => 119,
                'name' => '临安市',
                'type' => 3,
                'code' => 330185,
            ),
            211 => 
            array (
                'id' => 1212,
                'pid' => 120,
                'name' => '海曙区',
                'type' => 3,
                'code' => 330203,
            ),
            212 => 
            array (
                'id' => 1213,
                'pid' => 120,
                'name' => '江东区',
                'type' => 3,
                'code' => 330204,
            ),
            213 => 
            array (
                'id' => 1214,
                'pid' => 120,
                'name' => '江北区',
                'type' => 3,
                'code' => 330205,
            ),
            214 => 
            array (
                'id' => 1215,
                'pid' => 120,
                'name' => '北仑区',
                'type' => 3,
                'code' => 330206,
            ),
            215 => 
            array (
                'id' => 1216,
                'pid' => 120,
                'name' => '镇海区',
                'type' => 3,
                'code' => 330211,
            ),
            216 => 
            array (
                'id' => 1217,
                'pid' => 120,
                'name' => '鄞州区',
                'type' => 3,
                'code' => 330212,
            ),
            217 => 
            array (
                'id' => 1218,
                'pid' => 120,
                'name' => '象山县',
                'type' => 3,
                'code' => 330225,
            ),
            218 => 
            array (
                'id' => 1219,
                'pid' => 120,
                'name' => '宁海县',
                'type' => 3,
                'code' => 330226,
            ),
            219 => 
            array (
                'id' => 1220,
                'pid' => 120,
                'name' => '余姚市',
                'type' => 3,
                'code' => 330281,
            ),
            220 => 
            array (
                'id' => 1221,
                'pid' => 120,
                'name' => '慈溪市',
                'type' => 3,
                'code' => 330282,
            ),
            221 => 
            array (
                'id' => 1222,
                'pid' => 120,
                'name' => '奉化市',
                'type' => 3,
                'code' => 330283,
            ),
            222 => 
            array (
                'id' => 1223,
                'pid' => 121,
                'name' => '鹿城区',
                'type' => 3,
                'code' => 330302,
            ),
            223 => 
            array (
                'id' => 1224,
                'pid' => 121,
                'name' => '龙湾区',
                'type' => 3,
                'code' => 330303,
            ),
            224 => 
            array (
                'id' => 1225,
                'pid' => 121,
                'name' => '瓯海区',
                'type' => 3,
                'code' => 330304,
            ),
            225 => 
            array (
                'id' => 1226,
                'pid' => 121,
                'name' => '洞头区',
                'type' => 3,
                'code' => 330305,
            ),
            226 => 
            array (
                'id' => 1227,
                'pid' => 121,
                'name' => '永嘉县',
                'type' => 3,
                'code' => 330324,
            ),
            227 => 
            array (
                'id' => 1228,
                'pid' => 121,
                'name' => '平阳县',
                'type' => 3,
                'code' => 330326,
            ),
            228 => 
            array (
                'id' => 1229,
                'pid' => 121,
                'name' => '苍南县',
                'type' => 3,
                'code' => 330327,
            ),
            229 => 
            array (
                'id' => 1230,
                'pid' => 121,
                'name' => '文成县',
                'type' => 3,
                'code' => 330328,
            ),
            230 => 
            array (
                'id' => 1231,
                'pid' => 121,
                'name' => '泰顺县',
                'type' => 3,
                'code' => 330329,
            ),
            231 => 
            array (
                'id' => 1232,
                'pid' => 121,
                'name' => '瑞安市',
                'type' => 3,
                'code' => 330381,
            ),
            232 => 
            array (
                'id' => 1233,
                'pid' => 121,
                'name' => '乐清市',
                'type' => 3,
                'code' => 330382,
            ),
            233 => 
            array (
                'id' => 1234,
                'pid' => 122,
                'name' => '南湖区',
                'type' => 3,
                'code' => 330402,
            ),
            234 => 
            array (
                'id' => 1235,
                'pid' => 122,
                'name' => '秀洲区',
                'type' => 3,
                'code' => 330411,
            ),
            235 => 
            array (
                'id' => 1236,
                'pid' => 122,
                'name' => '嘉善县',
                'type' => 3,
                'code' => 330421,
            ),
            236 => 
            array (
                'id' => 1237,
                'pid' => 122,
                'name' => '海盐县',
                'type' => 3,
                'code' => 330424,
            ),
            237 => 
            array (
                'id' => 1238,
                'pid' => 122,
                'name' => '海宁市',
                'type' => 3,
                'code' => 330481,
            ),
            238 => 
            array (
                'id' => 1239,
                'pid' => 122,
                'name' => '平湖市',
                'type' => 3,
                'code' => 330482,
            ),
            239 => 
            array (
                'id' => 1240,
                'pid' => 122,
                'name' => '桐乡市',
                'type' => 3,
                'code' => 330483,
            ),
            240 => 
            array (
                'id' => 1241,
                'pid' => 123,
                'name' => '吴兴区',
                'type' => 3,
                'code' => 330502,
            ),
            241 => 
            array (
                'id' => 1242,
                'pid' => 123,
                'name' => '南浔区',
                'type' => 3,
                'code' => 330503,
            ),
            242 => 
            array (
                'id' => 1243,
                'pid' => 123,
                'name' => '德清县',
                'type' => 3,
                'code' => 330521,
            ),
            243 => 
            array (
                'id' => 1244,
                'pid' => 123,
                'name' => '长兴县',
                'type' => 3,
                'code' => 330522,
            ),
            244 => 
            array (
                'id' => 1245,
                'pid' => 123,
                'name' => '安吉县',
                'type' => 3,
                'code' => 330523,
            ),
            245 => 
            array (
                'id' => 1246,
                'pid' => 124,
                'name' => '越城区',
                'type' => 3,
                'code' => 330602,
            ),
            246 => 
            array (
                'id' => 1247,
                'pid' => 124,
                'name' => '柯桥区',
                'type' => 3,
                'code' => 330603,
            ),
            247 => 
            array (
                'id' => 1248,
                'pid' => 124,
                'name' => '上虞区',
                'type' => 3,
                'code' => 330604,
            ),
            248 => 
            array (
                'id' => 1249,
                'pid' => 124,
                'name' => '新昌县',
                'type' => 3,
                'code' => 330624,
            ),
            249 => 
            array (
                'id' => 1250,
                'pid' => 124,
                'name' => '诸暨市',
                'type' => 3,
                'code' => 330681,
            ),
            250 => 
            array (
                'id' => 1251,
                'pid' => 124,
                'name' => '嵊州市',
                'type' => 3,
                'code' => 330683,
            ),
            251 => 
            array (
                'id' => 1252,
                'pid' => 125,
                'name' => '婺城区',
                'type' => 3,
                'code' => 330702,
            ),
            252 => 
            array (
                'id' => 1253,
                'pid' => 125,
                'name' => '金东区',
                'type' => 3,
                'code' => 330703,
            ),
            253 => 
            array (
                'id' => 1254,
                'pid' => 125,
                'name' => '武义县',
                'type' => 3,
                'code' => 330723,
            ),
            254 => 
            array (
                'id' => 1255,
                'pid' => 125,
                'name' => '浦江县',
                'type' => 3,
                'code' => 330726,
            ),
            255 => 
            array (
                'id' => 1256,
                'pid' => 125,
                'name' => '磐安县',
                'type' => 3,
                'code' => 330727,
            ),
            256 => 
            array (
                'id' => 1257,
                'pid' => 125,
                'name' => '兰溪市',
                'type' => 3,
                'code' => 330781,
            ),
            257 => 
            array (
                'id' => 1258,
                'pid' => 125,
                'name' => '义乌市',
                'type' => 3,
                'code' => 330782,
            ),
            258 => 
            array (
                'id' => 1259,
                'pid' => 125,
                'name' => '东阳市',
                'type' => 3,
                'code' => 330783,
            ),
            259 => 
            array (
                'id' => 1260,
                'pid' => 125,
                'name' => '永康市',
                'type' => 3,
                'code' => 330784,
            ),
            260 => 
            array (
                'id' => 1261,
                'pid' => 126,
                'name' => '柯城区',
                'type' => 3,
                'code' => 330802,
            ),
            261 => 
            array (
                'id' => 1262,
                'pid' => 126,
                'name' => '衢江区',
                'type' => 3,
                'code' => 330803,
            ),
            262 => 
            array (
                'id' => 1263,
                'pid' => 126,
                'name' => '常山县',
                'type' => 3,
                'code' => 330822,
            ),
            263 => 
            array (
                'id' => 1264,
                'pid' => 126,
                'name' => '开化县',
                'type' => 3,
                'code' => 330824,
            ),
            264 => 
            array (
                'id' => 1265,
                'pid' => 126,
                'name' => '龙游县',
                'type' => 3,
                'code' => 330825,
            ),
            265 => 
            array (
                'id' => 1266,
                'pid' => 126,
                'name' => '江山市',
                'type' => 3,
                'code' => 330881,
            ),
            266 => 
            array (
                'id' => 1267,
                'pid' => 127,
                'name' => '定海区',
                'type' => 3,
                'code' => 330902,
            ),
            267 => 
            array (
                'id' => 1268,
                'pid' => 127,
                'name' => '普陀区',
                'type' => 3,
                'code' => 330903,
            ),
            268 => 
            array (
                'id' => 1269,
                'pid' => 127,
                'name' => '岱山县',
                'type' => 3,
                'code' => 330921,
            ),
            269 => 
            array (
                'id' => 1270,
                'pid' => 127,
                'name' => '嵊泗县',
                'type' => 3,
                'code' => 330922,
            ),
            270 => 
            array (
                'id' => 1271,
                'pid' => 128,
                'name' => '椒江区',
                'type' => 3,
                'code' => 331002,
            ),
            271 => 
            array (
                'id' => 1272,
                'pid' => 128,
                'name' => '黄岩区',
                'type' => 3,
                'code' => 331003,
            ),
            272 => 
            array (
                'id' => 1273,
                'pid' => 128,
                'name' => '路桥区',
                'type' => 3,
                'code' => 331004,
            ),
            273 => 
            array (
                'id' => 1274,
                'pid' => 128,
                'name' => '玉环县',
                'type' => 3,
                'code' => 331021,
            ),
            274 => 
            array (
                'id' => 1275,
                'pid' => 128,
                'name' => '三门县',
                'type' => 3,
                'code' => 331022,
            ),
            275 => 
            array (
                'id' => 1276,
                'pid' => 128,
                'name' => '天台县',
                'type' => 3,
                'code' => 331023,
            ),
            276 => 
            array (
                'id' => 1277,
                'pid' => 128,
                'name' => '仙居县',
                'type' => 3,
                'code' => 331024,
            ),
            277 => 
            array (
                'id' => 1278,
                'pid' => 128,
                'name' => '温岭市',
                'type' => 3,
                'code' => 331081,
            ),
            278 => 
            array (
                'id' => 1279,
                'pid' => 128,
                'name' => '临海市',
                'type' => 3,
                'code' => 331082,
            ),
            279 => 
            array (
                'id' => 1280,
                'pid' => 129,
                'name' => '莲都区',
                'type' => 3,
                'code' => 331102,
            ),
            280 => 
            array (
                'id' => 1281,
                'pid' => 129,
                'name' => '青田县',
                'type' => 3,
                'code' => 331121,
            ),
            281 => 
            array (
                'id' => 1282,
                'pid' => 129,
                'name' => '缙云县',
                'type' => 3,
                'code' => 331122,
            ),
            282 => 
            array (
                'id' => 1283,
                'pid' => 129,
                'name' => '遂昌县',
                'type' => 3,
                'code' => 331123,
            ),
            283 => 
            array (
                'id' => 1284,
                'pid' => 129,
                'name' => '松阳县',
                'type' => 3,
                'code' => 331124,
            ),
            284 => 
            array (
                'id' => 1285,
                'pid' => 129,
                'name' => '云和县',
                'type' => 3,
                'code' => 331125,
            ),
            285 => 
            array (
                'id' => 1286,
                'pid' => 129,
                'name' => '庆元县',
                'type' => 3,
                'code' => 331126,
            ),
            286 => 
            array (
                'id' => 1287,
                'pid' => 129,
                'name' => '景宁畲族自治县',
                'type' => 3,
                'code' => 331127,
            ),
            287 => 
            array (
                'id' => 1288,
                'pid' => 129,
                'name' => '龙泉市',
                'type' => 3,
                'code' => 331181,
            ),
            288 => 
            array (
                'id' => 1289,
                'pid' => 130,
                'name' => '瑶海区',
                'type' => 3,
                'code' => 340102,
            ),
            289 => 
            array (
                'id' => 1290,
                'pid' => 130,
                'name' => '庐阳区',
                'type' => 3,
                'code' => 340103,
            ),
            290 => 
            array (
                'id' => 1291,
                'pid' => 130,
                'name' => '蜀山区',
                'type' => 3,
                'code' => 340104,
            ),
            291 => 
            array (
                'id' => 1292,
                'pid' => 130,
                'name' => '包河区',
                'type' => 3,
                'code' => 340111,
            ),
            292 => 
            array (
                'id' => 1293,
                'pid' => 130,
                'name' => '长丰县',
                'type' => 3,
                'code' => 340121,
            ),
            293 => 
            array (
                'id' => 1294,
                'pid' => 130,
                'name' => '肥东县',
                'type' => 3,
                'code' => 340122,
            ),
            294 => 
            array (
                'id' => 1295,
                'pid' => 130,
                'name' => '肥西县',
                'type' => 3,
                'code' => 340123,
            ),
            295 => 
            array (
                'id' => 1296,
                'pid' => 130,
                'name' => '庐江县',
                'type' => 3,
                'code' => 340124,
            ),
            296 => 
            array (
                'id' => 1297,
                'pid' => 130,
                'name' => '巢湖市',
                'type' => 3,
                'code' => 340181,
            ),
            297 => 
            array (
                'id' => 1298,
                'pid' => 131,
                'name' => '镜湖区',
                'type' => 3,
                'code' => 340202,
            ),
            298 => 
            array (
                'id' => 1299,
                'pid' => 131,
                'name' => '弋江区',
                'type' => 3,
                'code' => 340203,
            ),
            299 => 
            array (
                'id' => 1300,
                'pid' => 131,
                'name' => '鸠江区',
                'type' => 3,
                'code' => 340207,
            ),
            300 => 
            array (
                'id' => 1301,
                'pid' => 131,
                'name' => '三山区',
                'type' => 3,
                'code' => 340208,
            ),
            301 => 
            array (
                'id' => 1302,
                'pid' => 131,
                'name' => '芜湖县',
                'type' => 3,
                'code' => 340221,
            ),
            302 => 
            array (
                'id' => 1303,
                'pid' => 131,
                'name' => '繁昌县',
                'type' => 3,
                'code' => 340222,
            ),
            303 => 
            array (
                'id' => 1304,
                'pid' => 131,
                'name' => '南陵县',
                'type' => 3,
                'code' => 340223,
            ),
            304 => 
            array (
                'id' => 1305,
                'pid' => 131,
                'name' => '无为县',
                'type' => 3,
                'code' => 340225,
            ),
            305 => 
            array (
                'id' => 1306,
                'pid' => 132,
                'name' => '龙子湖区',
                'type' => 3,
                'code' => 340302,
            ),
            306 => 
            array (
                'id' => 1307,
                'pid' => 132,
                'name' => '蚌山区',
                'type' => 3,
                'code' => 340303,
            ),
            307 => 
            array (
                'id' => 1308,
                'pid' => 132,
                'name' => '禹会区',
                'type' => 3,
                'code' => 340304,
            ),
            308 => 
            array (
                'id' => 1309,
                'pid' => 132,
                'name' => '淮上区',
                'type' => 3,
                'code' => 340311,
            ),
            309 => 
            array (
                'id' => 1310,
                'pid' => 132,
                'name' => '怀远县',
                'type' => 3,
                'code' => 340321,
            ),
            310 => 
            array (
                'id' => 1311,
                'pid' => 132,
                'name' => '五河县',
                'type' => 3,
                'code' => 340322,
            ),
            311 => 
            array (
                'id' => 1312,
                'pid' => 132,
                'name' => '固镇县',
                'type' => 3,
                'code' => 340323,
            ),
            312 => 
            array (
                'id' => 1313,
                'pid' => 133,
                'name' => '大通区',
                'type' => 3,
                'code' => 340402,
            ),
            313 => 
            array (
                'id' => 1314,
                'pid' => 133,
                'name' => '田家庵区',
                'type' => 3,
                'code' => 340403,
            ),
            314 => 
            array (
                'id' => 1315,
                'pid' => 133,
                'name' => '谢家集区',
                'type' => 3,
                'code' => 340404,
            ),
            315 => 
            array (
                'id' => 1316,
                'pid' => 133,
                'name' => '八公山区',
                'type' => 3,
                'code' => 340405,
            ),
            316 => 
            array (
                'id' => 1317,
                'pid' => 133,
                'name' => '潘集区',
                'type' => 3,
                'code' => 340406,
            ),
            317 => 
            array (
                'id' => 1318,
                'pid' => 133,
                'name' => '凤台县',
                'type' => 3,
                'code' => 340421,
            ),
            318 => 
            array (
                'id' => 1319,
                'pid' => 133,
                'name' => '寿县',
                'type' => 3,
                'code' => 340422,
            ),
            319 => 
            array (
                'id' => 1320,
                'pid' => 134,
                'name' => '花山区',
                'type' => 3,
                'code' => 340503,
            ),
            320 => 
            array (
                'id' => 1321,
                'pid' => 134,
                'name' => '雨山区',
                'type' => 3,
                'code' => 340504,
            ),
            321 => 
            array (
                'id' => 1322,
                'pid' => 134,
                'name' => '博望区',
                'type' => 3,
                'code' => 340506,
            ),
            322 => 
            array (
                'id' => 1323,
                'pid' => 134,
                'name' => '当涂县',
                'type' => 3,
                'code' => 340521,
            ),
            323 => 
            array (
                'id' => 1324,
                'pid' => 134,
                'name' => '含山县',
                'type' => 3,
                'code' => 340522,
            ),
            324 => 
            array (
                'id' => 1325,
                'pid' => 134,
                'name' => '和县',
                'type' => 3,
                'code' => 340523,
            ),
            325 => 
            array (
                'id' => 1326,
                'pid' => 135,
                'name' => '杜集区',
                'type' => 3,
                'code' => 340602,
            ),
            326 => 
            array (
                'id' => 1327,
                'pid' => 135,
                'name' => '相山区',
                'type' => 3,
                'code' => 340603,
            ),
            327 => 
            array (
                'id' => 1328,
                'pid' => 135,
                'name' => '烈山区',
                'type' => 3,
                'code' => 340604,
            ),
            328 => 
            array (
                'id' => 1329,
                'pid' => 135,
                'name' => '濉溪县',
                'type' => 3,
                'code' => 340621,
            ),
            329 => 
            array (
                'id' => 1330,
                'pid' => 136,
                'name' => '铜官区',
                'type' => 3,
                'code' => 340705,
            ),
            330 => 
            array (
                'id' => 1331,
                'pid' => 136,
                'name' => '义安区',
                'type' => 3,
                'code' => 340706,
            ),
            331 => 
            array (
                'id' => 1332,
                'pid' => 136,
                'name' => '郊区',
                'type' => 3,
                'code' => 340711,
            ),
            332 => 
            array (
                'id' => 1333,
                'pid' => 136,
                'name' => '枞阳县',
                'type' => 3,
                'code' => 340722,
            ),
            333 => 
            array (
                'id' => 1334,
                'pid' => 137,
                'name' => '迎江区',
                'type' => 3,
                'code' => 340802,
            ),
            334 => 
            array (
                'id' => 1335,
                'pid' => 137,
                'name' => '大观区',
                'type' => 3,
                'code' => 340803,
            ),
            335 => 
            array (
                'id' => 1336,
                'pid' => 137,
                'name' => '宜秀区',
                'type' => 3,
                'code' => 340811,
            ),
            336 => 
            array (
                'id' => 1337,
                'pid' => 137,
                'name' => '怀宁县',
                'type' => 3,
                'code' => 340822,
            ),
            337 => 
            array (
                'id' => 1338,
                'pid' => 137,
                'name' => '潜山县',
                'type' => 3,
                'code' => 340824,
            ),
            338 => 
            array (
                'id' => 1339,
                'pid' => 137,
                'name' => '太湖县',
                'type' => 3,
                'code' => 340825,
            ),
            339 => 
            array (
                'id' => 1340,
                'pid' => 137,
                'name' => '宿松县',
                'type' => 3,
                'code' => 340826,
            ),
            340 => 
            array (
                'id' => 1341,
                'pid' => 137,
                'name' => '望江县',
                'type' => 3,
                'code' => 340827,
            ),
            341 => 
            array (
                'id' => 1342,
                'pid' => 137,
                'name' => '岳西县',
                'type' => 3,
                'code' => 340828,
            ),
            342 => 
            array (
                'id' => 1343,
                'pid' => 137,
                'name' => '桐城市',
                'type' => 3,
                'code' => 340881,
            ),
            343 => 
            array (
                'id' => 1344,
                'pid' => 138,
                'name' => '屯溪区',
                'type' => 3,
                'code' => 341002,
            ),
            344 => 
            array (
                'id' => 1345,
                'pid' => 138,
                'name' => '黄山区',
                'type' => 3,
                'code' => 341003,
            ),
            345 => 
            array (
                'id' => 1346,
                'pid' => 138,
                'name' => '徽州区',
                'type' => 3,
                'code' => 341004,
            ),
            346 => 
            array (
                'id' => 1347,
                'pid' => 138,
                'name' => '歙县',
                'type' => 3,
                'code' => 341021,
            ),
            347 => 
            array (
                'id' => 1348,
                'pid' => 138,
                'name' => '休宁县',
                'type' => 3,
                'code' => 341022,
            ),
            348 => 
            array (
                'id' => 1349,
                'pid' => 138,
                'name' => '黟县',
                'type' => 3,
                'code' => 341023,
            ),
            349 => 
            array (
                'id' => 1350,
                'pid' => 138,
                'name' => '祁门县',
                'type' => 3,
                'code' => 341024,
            ),
            350 => 
            array (
                'id' => 1351,
                'pid' => 139,
                'name' => '琅琊区',
                'type' => 3,
                'code' => 341102,
            ),
            351 => 
            array (
                'id' => 1352,
                'pid' => 139,
                'name' => '南谯区',
                'type' => 3,
                'code' => 341103,
            ),
            352 => 
            array (
                'id' => 1353,
                'pid' => 139,
                'name' => '来安县',
                'type' => 3,
                'code' => 341122,
            ),
            353 => 
            array (
                'id' => 1354,
                'pid' => 139,
                'name' => '全椒县',
                'type' => 3,
                'code' => 341124,
            ),
            354 => 
            array (
                'id' => 1355,
                'pid' => 139,
                'name' => '定远县',
                'type' => 3,
                'code' => 341125,
            ),
            355 => 
            array (
                'id' => 1356,
                'pid' => 139,
                'name' => '凤阳县',
                'type' => 3,
                'code' => 341126,
            ),
            356 => 
            array (
                'id' => 1357,
                'pid' => 139,
                'name' => '天长市',
                'type' => 3,
                'code' => 341181,
            ),
            357 => 
            array (
                'id' => 1358,
                'pid' => 139,
                'name' => '明光市',
                'type' => 3,
                'code' => 341182,
            ),
            358 => 
            array (
                'id' => 1359,
                'pid' => 140,
                'name' => '颍州区',
                'type' => 3,
                'code' => 341202,
            ),
            359 => 
            array (
                'id' => 1360,
                'pid' => 140,
                'name' => '颍东区',
                'type' => 3,
                'code' => 341203,
            ),
            360 => 
            array (
                'id' => 1361,
                'pid' => 140,
                'name' => '颍泉区',
                'type' => 3,
                'code' => 341204,
            ),
            361 => 
            array (
                'id' => 1362,
                'pid' => 140,
                'name' => '临泉县',
                'type' => 3,
                'code' => 341221,
            ),
            362 => 
            array (
                'id' => 1363,
                'pid' => 140,
                'name' => '太和县',
                'type' => 3,
                'code' => 341222,
            ),
            363 => 
            array (
                'id' => 1364,
                'pid' => 140,
                'name' => '阜南县',
                'type' => 3,
                'code' => 341225,
            ),
            364 => 
            array (
                'id' => 1365,
                'pid' => 140,
                'name' => '颍上县',
                'type' => 3,
                'code' => 341226,
            ),
            365 => 
            array (
                'id' => 1366,
                'pid' => 140,
                'name' => '界首市',
                'type' => 3,
                'code' => 341282,
            ),
            366 => 
            array (
                'id' => 1367,
                'pid' => 141,
                'name' => '埇桥区',
                'type' => 3,
                'code' => 341302,
            ),
            367 => 
            array (
                'id' => 1368,
                'pid' => 141,
                'name' => '砀山县',
                'type' => 3,
                'code' => 341321,
            ),
            368 => 
            array (
                'id' => 1369,
                'pid' => 141,
                'name' => '萧县',
                'type' => 3,
                'code' => 341322,
            ),
            369 => 
            array (
                'id' => 1370,
                'pid' => 141,
                'name' => '灵璧县',
                'type' => 3,
                'code' => 341323,
            ),
            370 => 
            array (
                'id' => 1371,
                'pid' => 141,
                'name' => '泗县',
                'type' => 3,
                'code' => 341324,
            ),
            371 => 
            array (
                'id' => 1372,
                'pid' => 142,
                'name' => '金安区',
                'type' => 3,
                'code' => 341502,
            ),
            372 => 
            array (
                'id' => 1373,
                'pid' => 142,
                'name' => '裕安区',
                'type' => 3,
                'code' => 341503,
            ),
            373 => 
            array (
                'id' => 1374,
                'pid' => 142,
                'name' => '叶集区',
                'type' => 3,
                'code' => 341504,
            ),
            374 => 
            array (
                'id' => 1375,
                'pid' => 142,
                'name' => '霍邱县',
                'type' => 3,
                'code' => 341522,
            ),
            375 => 
            array (
                'id' => 1376,
                'pid' => 142,
                'name' => '舒城县',
                'type' => 3,
                'code' => 341523,
            ),
            376 => 
            array (
                'id' => 1377,
                'pid' => 142,
                'name' => '金寨县',
                'type' => 3,
                'code' => 341524,
            ),
            377 => 
            array (
                'id' => 1378,
                'pid' => 142,
                'name' => '霍山县',
                'type' => 3,
                'code' => 341525,
            ),
            378 => 
            array (
                'id' => 1379,
                'pid' => 143,
                'name' => '谯城区',
                'type' => 3,
                'code' => 341602,
            ),
            379 => 
            array (
                'id' => 1380,
                'pid' => 143,
                'name' => '涡阳县',
                'type' => 3,
                'code' => 341621,
            ),
            380 => 
            array (
                'id' => 1381,
                'pid' => 143,
                'name' => '蒙城县',
                'type' => 3,
                'code' => 341622,
            ),
            381 => 
            array (
                'id' => 1382,
                'pid' => 143,
                'name' => '利辛县',
                'type' => 3,
                'code' => 341623,
            ),
            382 => 
            array (
                'id' => 1383,
                'pid' => 144,
                'name' => '贵池区',
                'type' => 3,
                'code' => 341702,
            ),
            383 => 
            array (
                'id' => 1384,
                'pid' => 144,
                'name' => '东至县',
                'type' => 3,
                'code' => 341721,
            ),
            384 => 
            array (
                'id' => 1385,
                'pid' => 144,
                'name' => '石台县',
                'type' => 3,
                'code' => 341722,
            ),
            385 => 
            array (
                'id' => 1386,
                'pid' => 144,
                'name' => '青阳县',
                'type' => 3,
                'code' => 341723,
            ),
            386 => 
            array (
                'id' => 1387,
                'pid' => 145,
                'name' => '宣州区',
                'type' => 3,
                'code' => 341802,
            ),
            387 => 
            array (
                'id' => 1388,
                'pid' => 145,
                'name' => '郎溪县',
                'type' => 3,
                'code' => 341821,
            ),
            388 => 
            array (
                'id' => 1389,
                'pid' => 145,
                'name' => '广德县',
                'type' => 3,
                'code' => 341822,
            ),
            389 => 
            array (
                'id' => 1390,
                'pid' => 145,
                'name' => '泾县',
                'type' => 3,
                'code' => 341823,
            ),
            390 => 
            array (
                'id' => 1391,
                'pid' => 145,
                'name' => '绩溪县',
                'type' => 3,
                'code' => 341824,
            ),
            391 => 
            array (
                'id' => 1392,
                'pid' => 145,
                'name' => '旌德县',
                'type' => 3,
                'code' => 341825,
            ),
            392 => 
            array (
                'id' => 1393,
                'pid' => 145,
                'name' => '宁国市',
                'type' => 3,
                'code' => 341881,
            ),
            393 => 
            array (
                'id' => 1394,
                'pid' => 146,
                'name' => '鼓楼区',
                'type' => 3,
                'code' => 350102,
            ),
            394 => 
            array (
                'id' => 1395,
                'pid' => 146,
                'name' => '台江区',
                'type' => 3,
                'code' => 350103,
            ),
            395 => 
            array (
                'id' => 1396,
                'pid' => 146,
                'name' => '仓山区',
                'type' => 3,
                'code' => 350104,
            ),
            396 => 
            array (
                'id' => 1397,
                'pid' => 146,
                'name' => '马尾区',
                'type' => 3,
                'code' => 350105,
            ),
            397 => 
            array (
                'id' => 1398,
                'pid' => 146,
                'name' => '晋安区',
                'type' => 3,
                'code' => 350111,
            ),
            398 => 
            array (
                'id' => 1399,
                'pid' => 146,
                'name' => '闽侯县',
                'type' => 3,
                'code' => 350121,
            ),
            399 => 
            array (
                'id' => 1400,
                'pid' => 146,
                'name' => '连江县',
                'type' => 3,
                'code' => 350122,
            ),
            400 => 
            array (
                'id' => 1401,
                'pid' => 146,
                'name' => '罗源县',
                'type' => 3,
                'code' => 350123,
            ),
            401 => 
            array (
                'id' => 1402,
                'pid' => 146,
                'name' => '闽清县',
                'type' => 3,
                'code' => 350124,
            ),
            402 => 
            array (
                'id' => 1403,
                'pid' => 146,
                'name' => '永泰县',
                'type' => 3,
                'code' => 350125,
            ),
            403 => 
            array (
                'id' => 1404,
                'pid' => 146,
                'name' => '平潭县',
                'type' => 3,
                'code' => 350128,
            ),
            404 => 
            array (
                'id' => 1405,
                'pid' => 146,
                'name' => '福清市',
                'type' => 3,
                'code' => 350181,
            ),
            405 => 
            array (
                'id' => 1406,
                'pid' => 146,
                'name' => '长乐市',
                'type' => 3,
                'code' => 350182,
            ),
            406 => 
            array (
                'id' => 1407,
                'pid' => 147,
                'name' => '思明区',
                'type' => 3,
                'code' => 350203,
            ),
            407 => 
            array (
                'id' => 1408,
                'pid' => 147,
                'name' => '海沧区',
                'type' => 3,
                'code' => 350205,
            ),
            408 => 
            array (
                'id' => 1409,
                'pid' => 147,
                'name' => '湖里区',
                'type' => 3,
                'code' => 350206,
            ),
            409 => 
            array (
                'id' => 1410,
                'pid' => 147,
                'name' => '集美区',
                'type' => 3,
                'code' => 350211,
            ),
            410 => 
            array (
                'id' => 1411,
                'pid' => 147,
                'name' => '同安区',
                'type' => 3,
                'code' => 350212,
            ),
            411 => 
            array (
                'id' => 1412,
                'pid' => 147,
                'name' => '翔安区',
                'type' => 3,
                'code' => 350213,
            ),
            412 => 
            array (
                'id' => 1413,
                'pid' => 148,
                'name' => '城厢区',
                'type' => 3,
                'code' => 350302,
            ),
            413 => 
            array (
                'id' => 1414,
                'pid' => 148,
                'name' => '涵江区',
                'type' => 3,
                'code' => 350303,
            ),
            414 => 
            array (
                'id' => 1415,
                'pid' => 148,
                'name' => '荔城区',
                'type' => 3,
                'code' => 350304,
            ),
            415 => 
            array (
                'id' => 1416,
                'pid' => 148,
                'name' => '秀屿区',
                'type' => 3,
                'code' => 350305,
            ),
            416 => 
            array (
                'id' => 1417,
                'pid' => 148,
                'name' => '仙游县',
                'type' => 3,
                'code' => 350322,
            ),
            417 => 
            array (
                'id' => 1418,
                'pid' => 149,
                'name' => '梅列区',
                'type' => 3,
                'code' => 350402,
            ),
            418 => 
            array (
                'id' => 1419,
                'pid' => 149,
                'name' => '三元区',
                'type' => 3,
                'code' => 350403,
            ),
            419 => 
            array (
                'id' => 1420,
                'pid' => 149,
                'name' => '明溪县',
                'type' => 3,
                'code' => 350421,
            ),
            420 => 
            array (
                'id' => 1421,
                'pid' => 149,
                'name' => '清流县',
                'type' => 3,
                'code' => 350423,
            ),
            421 => 
            array (
                'id' => 1422,
                'pid' => 149,
                'name' => '宁化县',
                'type' => 3,
                'code' => 350424,
            ),
            422 => 
            array (
                'id' => 1423,
                'pid' => 149,
                'name' => '大田县',
                'type' => 3,
                'code' => 350425,
            ),
            423 => 
            array (
                'id' => 1424,
                'pid' => 149,
                'name' => '尤溪县',
                'type' => 3,
                'code' => 350426,
            ),
            424 => 
            array (
                'id' => 1425,
                'pid' => 149,
                'name' => '沙县',
                'type' => 3,
                'code' => 350427,
            ),
            425 => 
            array (
                'id' => 1426,
                'pid' => 149,
                'name' => '将乐县',
                'type' => 3,
                'code' => 350428,
            ),
            426 => 
            array (
                'id' => 1427,
                'pid' => 149,
                'name' => '泰宁县',
                'type' => 3,
                'code' => 350429,
            ),
            427 => 
            array (
                'id' => 1428,
                'pid' => 149,
                'name' => '建宁县',
                'type' => 3,
                'code' => 350430,
            ),
            428 => 
            array (
                'id' => 1429,
                'pid' => 149,
                'name' => '永安市',
                'type' => 3,
                'code' => 350481,
            ),
            429 => 
            array (
                'id' => 1430,
                'pid' => 150,
                'name' => '鲤城区',
                'type' => 3,
                'code' => 350502,
            ),
            430 => 
            array (
                'id' => 1431,
                'pid' => 150,
                'name' => '丰泽区',
                'type' => 3,
                'code' => 350503,
            ),
            431 => 
            array (
                'id' => 1432,
                'pid' => 150,
                'name' => '洛江区',
                'type' => 3,
                'code' => 350504,
            ),
            432 => 
            array (
                'id' => 1433,
                'pid' => 150,
                'name' => '泉港区',
                'type' => 3,
                'code' => 350505,
            ),
            433 => 
            array (
                'id' => 1434,
                'pid' => 150,
                'name' => '惠安县',
                'type' => 3,
                'code' => 350521,
            ),
            434 => 
            array (
                'id' => 1435,
                'pid' => 150,
                'name' => '安溪县',
                'type' => 3,
                'code' => 350524,
            ),
            435 => 
            array (
                'id' => 1436,
                'pid' => 150,
                'name' => '永春县',
                'type' => 3,
                'code' => 350525,
            ),
            436 => 
            array (
                'id' => 1437,
                'pid' => 150,
                'name' => '德化县',
                'type' => 3,
                'code' => 350526,
            ),
            437 => 
            array (
                'id' => 1438,
                'pid' => 150,
                'name' => '金门县',
                'type' => 3,
                'code' => 350527,
            ),
            438 => 
            array (
                'id' => 1439,
                'pid' => 150,
                'name' => '石狮市',
                'type' => 3,
                'code' => 350581,
            ),
            439 => 
            array (
                'id' => 1440,
                'pid' => 150,
                'name' => '晋江市',
                'type' => 3,
                'code' => 350582,
            ),
            440 => 
            array (
                'id' => 1441,
                'pid' => 150,
                'name' => '南安市',
                'type' => 3,
                'code' => 350583,
            ),
            441 => 
            array (
                'id' => 1442,
                'pid' => 151,
                'name' => '芗城区',
                'type' => 3,
                'code' => 350602,
            ),
            442 => 
            array (
                'id' => 1443,
                'pid' => 151,
                'name' => '龙文区',
                'type' => 3,
                'code' => 350603,
            ),
            443 => 
            array (
                'id' => 1444,
                'pid' => 151,
                'name' => '云霄县',
                'type' => 3,
                'code' => 350622,
            ),
            444 => 
            array (
                'id' => 1445,
                'pid' => 151,
                'name' => '漳浦县',
                'type' => 3,
                'code' => 350623,
            ),
            445 => 
            array (
                'id' => 1446,
                'pid' => 151,
                'name' => '诏安县',
                'type' => 3,
                'code' => 350624,
            ),
            446 => 
            array (
                'id' => 1447,
                'pid' => 151,
                'name' => '长泰县',
                'type' => 3,
                'code' => 350625,
            ),
            447 => 
            array (
                'id' => 1448,
                'pid' => 151,
                'name' => '东山县',
                'type' => 3,
                'code' => 350626,
            ),
            448 => 
            array (
                'id' => 1449,
                'pid' => 151,
                'name' => '南靖县',
                'type' => 3,
                'code' => 350627,
            ),
            449 => 
            array (
                'id' => 1450,
                'pid' => 151,
                'name' => '平和县',
                'type' => 3,
                'code' => 350628,
            ),
            450 => 
            array (
                'id' => 1451,
                'pid' => 151,
                'name' => '华安县',
                'type' => 3,
                'code' => 350629,
            ),
            451 => 
            array (
                'id' => 1452,
                'pid' => 151,
                'name' => '龙海市',
                'type' => 3,
                'code' => 350681,
            ),
            452 => 
            array (
                'id' => 1453,
                'pid' => 152,
                'name' => '延平区',
                'type' => 3,
                'code' => 350702,
            ),
            453 => 
            array (
                'id' => 1454,
                'pid' => 152,
                'name' => '建阳区',
                'type' => 3,
                'code' => 350703,
            ),
            454 => 
            array (
                'id' => 1455,
                'pid' => 152,
                'name' => '顺昌县',
                'type' => 3,
                'code' => 350721,
            ),
            455 => 
            array (
                'id' => 1456,
                'pid' => 152,
                'name' => '浦城县',
                'type' => 3,
                'code' => 350722,
            ),
            456 => 
            array (
                'id' => 1457,
                'pid' => 152,
                'name' => '光泽县',
                'type' => 3,
                'code' => 350723,
            ),
            457 => 
            array (
                'id' => 1458,
                'pid' => 152,
                'name' => '松溪县',
                'type' => 3,
                'code' => 350724,
            ),
            458 => 
            array (
                'id' => 1459,
                'pid' => 152,
                'name' => '政和县',
                'type' => 3,
                'code' => 350725,
            ),
            459 => 
            array (
                'id' => 1460,
                'pid' => 152,
                'name' => '邵武市',
                'type' => 3,
                'code' => 350781,
            ),
            460 => 
            array (
                'id' => 1461,
                'pid' => 152,
                'name' => '武夷山市',
                'type' => 3,
                'code' => 350782,
            ),
            461 => 
            array (
                'id' => 1462,
                'pid' => 152,
                'name' => '建瓯市',
                'type' => 3,
                'code' => 350783,
            ),
            462 => 
            array (
                'id' => 1463,
                'pid' => 153,
                'name' => '新罗区',
                'type' => 3,
                'code' => 350802,
            ),
            463 => 
            array (
                'id' => 1464,
                'pid' => 153,
                'name' => '永定区',
                'type' => 3,
                'code' => 350803,
            ),
            464 => 
            array (
                'id' => 1465,
                'pid' => 153,
                'name' => '长汀县',
                'type' => 3,
                'code' => 350821,
            ),
            465 => 
            array (
                'id' => 1466,
                'pid' => 153,
                'name' => '上杭县',
                'type' => 3,
                'code' => 350823,
            ),
            466 => 
            array (
                'id' => 1467,
                'pid' => 153,
                'name' => '武平县',
                'type' => 3,
                'code' => 350824,
            ),
            467 => 
            array (
                'id' => 1468,
                'pid' => 153,
                'name' => '连城县',
                'type' => 3,
                'code' => 350825,
            ),
            468 => 
            array (
                'id' => 1469,
                'pid' => 153,
                'name' => '漳平市',
                'type' => 3,
                'code' => 350881,
            ),
            469 => 
            array (
                'id' => 1470,
                'pid' => 154,
                'name' => '蕉城区',
                'type' => 3,
                'code' => 350902,
            ),
            470 => 
            array (
                'id' => 1471,
                'pid' => 154,
                'name' => '霞浦县',
                'type' => 3,
                'code' => 350921,
            ),
            471 => 
            array (
                'id' => 1472,
                'pid' => 154,
                'name' => '古田县',
                'type' => 3,
                'code' => 350922,
            ),
            472 => 
            array (
                'id' => 1473,
                'pid' => 154,
                'name' => '屏南县',
                'type' => 3,
                'code' => 350923,
            ),
            473 => 
            array (
                'id' => 1474,
                'pid' => 154,
                'name' => '寿宁县',
                'type' => 3,
                'code' => 350924,
            ),
            474 => 
            array (
                'id' => 1475,
                'pid' => 154,
                'name' => '周宁县',
                'type' => 3,
                'code' => 350925,
            ),
            475 => 
            array (
                'id' => 1476,
                'pid' => 154,
                'name' => '柘荣县',
                'type' => 3,
                'code' => 350926,
            ),
            476 => 
            array (
                'id' => 1477,
                'pid' => 154,
                'name' => '福安市',
                'type' => 3,
                'code' => 350981,
            ),
            477 => 
            array (
                'id' => 1478,
                'pid' => 154,
                'name' => '福鼎市',
                'type' => 3,
                'code' => 350982,
            ),
            478 => 
            array (
                'id' => 1479,
                'pid' => 155,
                'name' => '东湖区',
                'type' => 3,
                'code' => 360102,
            ),
            479 => 
            array (
                'id' => 1480,
                'pid' => 155,
                'name' => '西湖区',
                'type' => 3,
                'code' => 360103,
            ),
            480 => 
            array (
                'id' => 1481,
                'pid' => 155,
                'name' => '青云谱区',
                'type' => 3,
                'code' => 360104,
            ),
            481 => 
            array (
                'id' => 1482,
                'pid' => 155,
                'name' => '湾里区',
                'type' => 3,
                'code' => 360105,
            ),
            482 => 
            array (
                'id' => 1483,
                'pid' => 155,
                'name' => '青山湖区',
                'type' => 3,
                'code' => 360111,
            ),
            483 => 
            array (
                'id' => 1484,
                'pid' => 155,
                'name' => '新建区',
                'type' => 3,
                'code' => 360112,
            ),
            484 => 
            array (
                'id' => 1485,
                'pid' => 155,
                'name' => '南昌县',
                'type' => 3,
                'code' => 360121,
            ),
            485 => 
            array (
                'id' => 1486,
                'pid' => 155,
                'name' => '安义县',
                'type' => 3,
                'code' => 360123,
            ),
            486 => 
            array (
                'id' => 1487,
                'pid' => 155,
                'name' => '进贤县',
                'type' => 3,
                'code' => 360124,
            ),
            487 => 
            array (
                'id' => 1488,
                'pid' => 156,
                'name' => '昌江区',
                'type' => 3,
                'code' => 360202,
            ),
            488 => 
            array (
                'id' => 1489,
                'pid' => 156,
                'name' => '珠山区',
                'type' => 3,
                'code' => 360203,
            ),
            489 => 
            array (
                'id' => 1490,
                'pid' => 156,
                'name' => '浮梁县',
                'type' => 3,
                'code' => 360222,
            ),
            490 => 
            array (
                'id' => 1491,
                'pid' => 156,
                'name' => '乐平市',
                'type' => 3,
                'code' => 360281,
            ),
            491 => 
            array (
                'id' => 1492,
                'pid' => 157,
                'name' => '安源区',
                'type' => 3,
                'code' => 360302,
            ),
            492 => 
            array (
                'id' => 1493,
                'pid' => 157,
                'name' => '湘东区',
                'type' => 3,
                'code' => 360313,
            ),
            493 => 
            array (
                'id' => 1494,
                'pid' => 157,
                'name' => '莲花县',
                'type' => 3,
                'code' => 360321,
            ),
            494 => 
            array (
                'id' => 1495,
                'pid' => 157,
                'name' => '上栗县',
                'type' => 3,
                'code' => 360322,
            ),
            495 => 
            array (
                'id' => 1496,
                'pid' => 157,
                'name' => '芦溪县',
                'type' => 3,
                'code' => 360323,
            ),
            496 => 
            array (
                'id' => 1497,
                'pid' => 158,
                'name' => '濂溪区',
                'type' => 3,
                'code' => 360402,
            ),
            497 => 
            array (
                'id' => 1498,
                'pid' => 158,
                'name' => '浔阳区',
                'type' => 3,
                'code' => 360403,
            ),
            498 => 
            array (
                'id' => 1499,
                'pid' => 158,
                'name' => '九江县',
                'type' => 3,
                'code' => 360421,
            ),
            499 => 
            array (
                'id' => 1500,
                'pid' => 158,
                'name' => '武宁县',
                'type' => 3,
                'code' => 360423,
            ),
        ));
        \DB::table('z_region')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'pid' => 158,
                'name' => '修水县',
                'type' => 3,
                'code' => 360424,
            ),
            1 => 
            array (
                'id' => 1502,
                'pid' => 158,
                'name' => '永修县',
                'type' => 3,
                'code' => 360425,
            ),
            2 => 
            array (
                'id' => 1503,
                'pid' => 158,
                'name' => '德安县',
                'type' => 3,
                'code' => 360426,
            ),
            3 => 
            array (
                'id' => 1504,
                'pid' => 158,
                'name' => '都昌县',
                'type' => 3,
                'code' => 360428,
            ),
            4 => 
            array (
                'id' => 1505,
                'pid' => 158,
                'name' => '湖口县',
                'type' => 3,
                'code' => 360429,
            ),
            5 => 
            array (
                'id' => 1506,
                'pid' => 158,
                'name' => '彭泽县',
                'type' => 3,
                'code' => 360430,
            ),
            6 => 
            array (
                'id' => 1507,
                'pid' => 158,
                'name' => '瑞昌市',
                'type' => 3,
                'code' => 360481,
            ),
            7 => 
            array (
                'id' => 1508,
                'pid' => 158,
                'name' => '共青城市',
                'type' => 3,
                'code' => 360482,
            ),
            8 => 
            array (
                'id' => 1509,
                'pid' => 158,
                'name' => '庐山市',
                'type' => 3,
                'code' => 360483,
            ),
            9 => 
            array (
                'id' => 1510,
                'pid' => 159,
                'name' => '渝水区',
                'type' => 3,
                'code' => 360502,
            ),
            10 => 
            array (
                'id' => 1511,
                'pid' => 159,
                'name' => '分宜县',
                'type' => 3,
                'code' => 360521,
            ),
            11 => 
            array (
                'id' => 1512,
                'pid' => 160,
                'name' => '月湖区',
                'type' => 3,
                'code' => 360602,
            ),
            12 => 
            array (
                'id' => 1513,
                'pid' => 160,
                'name' => '余江县',
                'type' => 3,
                'code' => 360622,
            ),
            13 => 
            array (
                'id' => 1514,
                'pid' => 160,
                'name' => '贵溪市',
                'type' => 3,
                'code' => 360681,
            ),
            14 => 
            array (
                'id' => 1515,
                'pid' => 161,
                'name' => '章贡区',
                'type' => 3,
                'code' => 360702,
            ),
            15 => 
            array (
                'id' => 1516,
                'pid' => 161,
                'name' => '南康区',
                'type' => 3,
                'code' => 360703,
            ),
            16 => 
            array (
                'id' => 1517,
                'pid' => 161,
                'name' => '赣县',
                'type' => 3,
                'code' => 360721,
            ),
            17 => 
            array (
                'id' => 1518,
                'pid' => 161,
                'name' => '信丰县',
                'type' => 3,
                'code' => 360722,
            ),
            18 => 
            array (
                'id' => 1519,
                'pid' => 161,
                'name' => '大余县',
                'type' => 3,
                'code' => 360723,
            ),
            19 => 
            array (
                'id' => 1520,
                'pid' => 161,
                'name' => '上犹县',
                'type' => 3,
                'code' => 360724,
            ),
            20 => 
            array (
                'id' => 1521,
                'pid' => 161,
                'name' => '崇义县',
                'type' => 3,
                'code' => 360725,
            ),
            21 => 
            array (
                'id' => 1522,
                'pid' => 161,
                'name' => '安远县',
                'type' => 3,
                'code' => 360726,
            ),
            22 => 
            array (
                'id' => 1523,
                'pid' => 161,
                'name' => '龙南县',
                'type' => 3,
                'code' => 360727,
            ),
            23 => 
            array (
                'id' => 1524,
                'pid' => 161,
                'name' => '定南县',
                'type' => 3,
                'code' => 360728,
            ),
            24 => 
            array (
                'id' => 1525,
                'pid' => 161,
                'name' => '全南县',
                'type' => 3,
                'code' => 360729,
            ),
            25 => 
            array (
                'id' => 1526,
                'pid' => 161,
                'name' => '宁都县',
                'type' => 3,
                'code' => 360730,
            ),
            26 => 
            array (
                'id' => 1527,
                'pid' => 161,
                'name' => '于都县',
                'type' => 3,
                'code' => 360731,
            ),
            27 => 
            array (
                'id' => 1528,
                'pid' => 161,
                'name' => '兴国县',
                'type' => 3,
                'code' => 360732,
            ),
            28 => 
            array (
                'id' => 1529,
                'pid' => 161,
                'name' => '会昌县',
                'type' => 3,
                'code' => 360733,
            ),
            29 => 
            array (
                'id' => 1530,
                'pid' => 161,
                'name' => '寻乌县',
                'type' => 3,
                'code' => 360734,
            ),
            30 => 
            array (
                'id' => 1531,
                'pid' => 161,
                'name' => '石城县',
                'type' => 3,
                'code' => 360735,
            ),
            31 => 
            array (
                'id' => 1532,
                'pid' => 161,
                'name' => '瑞金市',
                'type' => 3,
                'code' => 360781,
            ),
            32 => 
            array (
                'id' => 1533,
                'pid' => 162,
                'name' => '吉州区',
                'type' => 3,
                'code' => 360802,
            ),
            33 => 
            array (
                'id' => 1534,
                'pid' => 162,
                'name' => '青原区',
                'type' => 3,
                'code' => 360803,
            ),
            34 => 
            array (
                'id' => 1535,
                'pid' => 162,
                'name' => '吉安县',
                'type' => 3,
                'code' => 360821,
            ),
            35 => 
            array (
                'id' => 1536,
                'pid' => 162,
                'name' => '吉水县',
                'type' => 3,
                'code' => 360822,
            ),
            36 => 
            array (
                'id' => 1537,
                'pid' => 162,
                'name' => '峡江县',
                'type' => 3,
                'code' => 360823,
            ),
            37 => 
            array (
                'id' => 1538,
                'pid' => 162,
                'name' => '新干县',
                'type' => 3,
                'code' => 360824,
            ),
            38 => 
            array (
                'id' => 1539,
                'pid' => 162,
                'name' => '永丰县',
                'type' => 3,
                'code' => 360825,
            ),
            39 => 
            array (
                'id' => 1540,
                'pid' => 162,
                'name' => '泰和县',
                'type' => 3,
                'code' => 360826,
            ),
            40 => 
            array (
                'id' => 1541,
                'pid' => 162,
                'name' => '遂川县',
                'type' => 3,
                'code' => 360827,
            ),
            41 => 
            array (
                'id' => 1542,
                'pid' => 162,
                'name' => '万安县',
                'type' => 3,
                'code' => 360828,
            ),
            42 => 
            array (
                'id' => 1543,
                'pid' => 162,
                'name' => '安福县',
                'type' => 3,
                'code' => 360829,
            ),
            43 => 
            array (
                'id' => 1544,
                'pid' => 162,
                'name' => '永新县',
                'type' => 3,
                'code' => 360830,
            ),
            44 => 
            array (
                'id' => 1545,
                'pid' => 162,
                'name' => '井冈山市',
                'type' => 3,
                'code' => 360881,
            ),
            45 => 
            array (
                'id' => 1546,
                'pid' => 163,
                'name' => '袁州区',
                'type' => 3,
                'code' => 360902,
            ),
            46 => 
            array (
                'id' => 1547,
                'pid' => 163,
                'name' => '奉新县',
                'type' => 3,
                'code' => 360921,
            ),
            47 => 
            array (
                'id' => 1548,
                'pid' => 163,
                'name' => '万载县',
                'type' => 3,
                'code' => 360922,
            ),
            48 => 
            array (
                'id' => 1549,
                'pid' => 163,
                'name' => '上高县',
                'type' => 3,
                'code' => 360923,
            ),
            49 => 
            array (
                'id' => 1550,
                'pid' => 163,
                'name' => '宜丰县',
                'type' => 3,
                'code' => 360924,
            ),
            50 => 
            array (
                'id' => 1551,
                'pid' => 163,
                'name' => '靖安县',
                'type' => 3,
                'code' => 360925,
            ),
            51 => 
            array (
                'id' => 1552,
                'pid' => 163,
                'name' => '铜鼓县',
                'type' => 3,
                'code' => 360926,
            ),
            52 => 
            array (
                'id' => 1553,
                'pid' => 163,
                'name' => '丰城市',
                'type' => 3,
                'code' => 360981,
            ),
            53 => 
            array (
                'id' => 1554,
                'pid' => 163,
                'name' => '樟树市',
                'type' => 3,
                'code' => 360982,
            ),
            54 => 
            array (
                'id' => 1555,
                'pid' => 163,
                'name' => '高安市',
                'type' => 3,
                'code' => 360983,
            ),
            55 => 
            array (
                'id' => 1556,
                'pid' => 164,
                'name' => '临川区',
                'type' => 3,
                'code' => 361002,
            ),
            56 => 
            array (
                'id' => 1557,
                'pid' => 164,
                'name' => '南城县',
                'type' => 3,
                'code' => 361021,
            ),
            57 => 
            array (
                'id' => 1558,
                'pid' => 164,
                'name' => '黎川县',
                'type' => 3,
                'code' => 361022,
            ),
            58 => 
            array (
                'id' => 1559,
                'pid' => 164,
                'name' => '南丰县',
                'type' => 3,
                'code' => 361023,
            ),
            59 => 
            array (
                'id' => 1560,
                'pid' => 164,
                'name' => '崇仁县',
                'type' => 3,
                'code' => 361024,
            ),
            60 => 
            array (
                'id' => 1561,
                'pid' => 164,
                'name' => '乐安县',
                'type' => 3,
                'code' => 361025,
            ),
            61 => 
            array (
                'id' => 1562,
                'pid' => 164,
                'name' => '宜黄县',
                'type' => 3,
                'code' => 361026,
            ),
            62 => 
            array (
                'id' => 1563,
                'pid' => 164,
                'name' => '金溪县',
                'type' => 3,
                'code' => 361027,
            ),
            63 => 
            array (
                'id' => 1564,
                'pid' => 164,
                'name' => '资溪县',
                'type' => 3,
                'code' => 361028,
            ),
            64 => 
            array (
                'id' => 1565,
                'pid' => 164,
                'name' => '东乡县',
                'type' => 3,
                'code' => 361029,
            ),
            65 => 
            array (
                'id' => 1566,
                'pid' => 164,
                'name' => '广昌县',
                'type' => 3,
                'code' => 361030,
            ),
            66 => 
            array (
                'id' => 1567,
                'pid' => 165,
                'name' => '信州区',
                'type' => 3,
                'code' => 361102,
            ),
            67 => 
            array (
                'id' => 1568,
                'pid' => 165,
                'name' => '广丰区',
                'type' => 3,
                'code' => 361103,
            ),
            68 => 
            array (
                'id' => 1569,
                'pid' => 165,
                'name' => '上饶县',
                'type' => 3,
                'code' => 361121,
            ),
            69 => 
            array (
                'id' => 1570,
                'pid' => 165,
                'name' => '玉山县',
                'type' => 3,
                'code' => 361123,
            ),
            70 => 
            array (
                'id' => 1571,
                'pid' => 165,
                'name' => '铅山县',
                'type' => 3,
                'code' => 361124,
            ),
            71 => 
            array (
                'id' => 1572,
                'pid' => 165,
                'name' => '横峰县',
                'type' => 3,
                'code' => 361125,
            ),
            72 => 
            array (
                'id' => 1573,
                'pid' => 165,
                'name' => '弋阳县',
                'type' => 3,
                'code' => 361126,
            ),
            73 => 
            array (
                'id' => 1574,
                'pid' => 165,
                'name' => '余干县',
                'type' => 3,
                'code' => 361127,
            ),
            74 => 
            array (
                'id' => 1575,
                'pid' => 165,
                'name' => '鄱阳县',
                'type' => 3,
                'code' => 361128,
            ),
            75 => 
            array (
                'id' => 1576,
                'pid' => 165,
                'name' => '万年县',
                'type' => 3,
                'code' => 361129,
            ),
            76 => 
            array (
                'id' => 1577,
                'pid' => 165,
                'name' => '婺源县',
                'type' => 3,
                'code' => 361130,
            ),
            77 => 
            array (
                'id' => 1578,
                'pid' => 165,
                'name' => '德兴市',
                'type' => 3,
                'code' => 361181,
            ),
            78 => 
            array (
                'id' => 1579,
                'pid' => 166,
                'name' => '历下区',
                'type' => 3,
                'code' => 370102,
            ),
            79 => 
            array (
                'id' => 1580,
                'pid' => 166,
                'name' => '市中区',
                'type' => 3,
                'code' => 370103,
            ),
            80 => 
            array (
                'id' => 1581,
                'pid' => 166,
                'name' => '槐荫区',
                'type' => 3,
                'code' => 370104,
            ),
            81 => 
            array (
                'id' => 1582,
                'pid' => 166,
                'name' => '天桥区',
                'type' => 3,
                'code' => 370105,
            ),
            82 => 
            array (
                'id' => 1583,
                'pid' => 166,
                'name' => '历城区',
                'type' => 3,
                'code' => 370112,
            ),
            83 => 
            array (
                'id' => 1584,
                'pid' => 166,
                'name' => '长清区',
                'type' => 3,
                'code' => 370113,
            ),
            84 => 
            array (
                'id' => 1585,
                'pid' => 166,
                'name' => '平阴县',
                'type' => 3,
                'code' => 370124,
            ),
            85 => 
            array (
                'id' => 1586,
                'pid' => 166,
                'name' => '济阳县',
                'type' => 3,
                'code' => 370125,
            ),
            86 => 
            array (
                'id' => 1587,
                'pid' => 166,
                'name' => '商河县',
                'type' => 3,
                'code' => 370126,
            ),
            87 => 
            array (
                'id' => 1588,
                'pid' => 166,
                'name' => '章丘市',
                'type' => 3,
                'code' => 370181,
            ),
            88 => 
            array (
                'id' => 1589,
                'pid' => 167,
                'name' => '市南区',
                'type' => 3,
                'code' => 370202,
            ),
            89 => 
            array (
                'id' => 1590,
                'pid' => 167,
                'name' => '市北区',
                'type' => 3,
                'code' => 370203,
            ),
            90 => 
            array (
                'id' => 1591,
                'pid' => 167,
                'name' => '黄岛区',
                'type' => 3,
                'code' => 370211,
            ),
            91 => 
            array (
                'id' => 1592,
                'pid' => 167,
                'name' => '崂山区',
                'type' => 3,
                'code' => 370212,
            ),
            92 => 
            array (
                'id' => 1593,
                'pid' => 167,
                'name' => '李沧区',
                'type' => 3,
                'code' => 370213,
            ),
            93 => 
            array (
                'id' => 1594,
                'pid' => 167,
                'name' => '城阳区',
                'type' => 3,
                'code' => 370214,
            ),
            94 => 
            array (
                'id' => 1595,
                'pid' => 167,
                'name' => '胶州市',
                'type' => 3,
                'code' => 370281,
            ),
            95 => 
            array (
                'id' => 1596,
                'pid' => 167,
                'name' => '即墨市',
                'type' => 3,
                'code' => 370282,
            ),
            96 => 
            array (
                'id' => 1597,
                'pid' => 167,
                'name' => '平度市',
                'type' => 3,
                'code' => 370283,
            ),
            97 => 
            array (
                'id' => 1598,
                'pid' => 167,
                'name' => '莱西市',
                'type' => 3,
                'code' => 370285,
            ),
            98 => 
            array (
                'id' => 1599,
                'pid' => 168,
                'name' => '淄川区',
                'type' => 3,
                'code' => 370302,
            ),
            99 => 
            array (
                'id' => 1600,
                'pid' => 168,
                'name' => '张店区',
                'type' => 3,
                'code' => 370303,
            ),
            100 => 
            array (
                'id' => 1601,
                'pid' => 168,
                'name' => '博山区',
                'type' => 3,
                'code' => 370304,
            ),
            101 => 
            array (
                'id' => 1602,
                'pid' => 168,
                'name' => '临淄区',
                'type' => 3,
                'code' => 370305,
            ),
            102 => 
            array (
                'id' => 1603,
                'pid' => 168,
                'name' => '周村区',
                'type' => 3,
                'code' => 370306,
            ),
            103 => 
            array (
                'id' => 1604,
                'pid' => 168,
                'name' => '桓台县',
                'type' => 3,
                'code' => 370321,
            ),
            104 => 
            array (
                'id' => 1605,
                'pid' => 168,
                'name' => '高青县',
                'type' => 3,
                'code' => 370322,
            ),
            105 => 
            array (
                'id' => 1606,
                'pid' => 168,
                'name' => '沂源县',
                'type' => 3,
                'code' => 370323,
            ),
            106 => 
            array (
                'id' => 1607,
                'pid' => 169,
                'name' => '市中区',
                'type' => 3,
                'code' => 370402,
            ),
            107 => 
            array (
                'id' => 1608,
                'pid' => 169,
                'name' => '薛城区',
                'type' => 3,
                'code' => 370403,
            ),
            108 => 
            array (
                'id' => 1609,
                'pid' => 169,
                'name' => '峄城区',
                'type' => 3,
                'code' => 370404,
            ),
            109 => 
            array (
                'id' => 1610,
                'pid' => 169,
                'name' => '台儿庄区',
                'type' => 3,
                'code' => 370405,
            ),
            110 => 
            array (
                'id' => 1611,
                'pid' => 169,
                'name' => '山亭区',
                'type' => 3,
                'code' => 370406,
            ),
            111 => 
            array (
                'id' => 1612,
                'pid' => 169,
                'name' => '滕州市',
                'type' => 3,
                'code' => 370481,
            ),
            112 => 
            array (
                'id' => 1613,
                'pid' => 170,
                'name' => '东营区',
                'type' => 3,
                'code' => 370502,
            ),
            113 => 
            array (
                'id' => 1614,
                'pid' => 170,
                'name' => '河口区',
                'type' => 3,
                'code' => 370503,
            ),
            114 => 
            array (
                'id' => 1615,
                'pid' => 170,
                'name' => '垦利区',
                'type' => 3,
                'code' => 370505,
            ),
            115 => 
            array (
                'id' => 1616,
                'pid' => 170,
                'name' => '利津县',
                'type' => 3,
                'code' => 370522,
            ),
            116 => 
            array (
                'id' => 1617,
                'pid' => 170,
                'name' => '广饶县',
                'type' => 3,
                'code' => 370523,
            ),
            117 => 
            array (
                'id' => 1618,
                'pid' => 171,
                'name' => '芝罘区',
                'type' => 3,
                'code' => 370602,
            ),
            118 => 
            array (
                'id' => 1619,
                'pid' => 171,
                'name' => '福山区',
                'type' => 3,
                'code' => 370611,
            ),
            119 => 
            array (
                'id' => 1620,
                'pid' => 171,
                'name' => '牟平区',
                'type' => 3,
                'code' => 370612,
            ),
            120 => 
            array (
                'id' => 1621,
                'pid' => 171,
                'name' => '莱山区',
                'type' => 3,
                'code' => 370613,
            ),
            121 => 
            array (
                'id' => 1622,
                'pid' => 171,
                'name' => '长岛县',
                'type' => 3,
                'code' => 370634,
            ),
            122 => 
            array (
                'id' => 1623,
                'pid' => 171,
                'name' => '龙口市',
                'type' => 3,
                'code' => 370681,
            ),
            123 => 
            array (
                'id' => 1624,
                'pid' => 171,
                'name' => '莱阳市',
                'type' => 3,
                'code' => 370682,
            ),
            124 => 
            array (
                'id' => 1625,
                'pid' => 171,
                'name' => '莱州市',
                'type' => 3,
                'code' => 370683,
            ),
            125 => 
            array (
                'id' => 1626,
                'pid' => 171,
                'name' => '蓬莱市',
                'type' => 3,
                'code' => 370684,
            ),
            126 => 
            array (
                'id' => 1627,
                'pid' => 171,
                'name' => '招远市',
                'type' => 3,
                'code' => 370685,
            ),
            127 => 
            array (
                'id' => 1628,
                'pid' => 171,
                'name' => '栖霞市',
                'type' => 3,
                'code' => 370686,
            ),
            128 => 
            array (
                'id' => 1629,
                'pid' => 171,
                'name' => '海阳市',
                'type' => 3,
                'code' => 370687,
            ),
            129 => 
            array (
                'id' => 1630,
                'pid' => 172,
                'name' => '潍城区',
                'type' => 3,
                'code' => 370702,
            ),
            130 => 
            array (
                'id' => 1631,
                'pid' => 172,
                'name' => '寒亭区',
                'type' => 3,
                'code' => 370703,
            ),
            131 => 
            array (
                'id' => 1632,
                'pid' => 172,
                'name' => '坊子区',
                'type' => 3,
                'code' => 370704,
            ),
            132 => 
            array (
                'id' => 1633,
                'pid' => 172,
                'name' => '奎文区',
                'type' => 3,
                'code' => 370705,
            ),
            133 => 
            array (
                'id' => 1634,
                'pid' => 172,
                'name' => '临朐县',
                'type' => 3,
                'code' => 370724,
            ),
            134 => 
            array (
                'id' => 1635,
                'pid' => 172,
                'name' => '昌乐县',
                'type' => 3,
                'code' => 370725,
            ),
            135 => 
            array (
                'id' => 1636,
                'pid' => 172,
                'name' => '青州市',
                'type' => 3,
                'code' => 370781,
            ),
            136 => 
            array (
                'id' => 1637,
                'pid' => 172,
                'name' => '诸城市',
                'type' => 3,
                'code' => 370782,
            ),
            137 => 
            array (
                'id' => 1638,
                'pid' => 172,
                'name' => '寿光市',
                'type' => 3,
                'code' => 370783,
            ),
            138 => 
            array (
                'id' => 1639,
                'pid' => 172,
                'name' => '安丘市',
                'type' => 3,
                'code' => 370784,
            ),
            139 => 
            array (
                'id' => 1640,
                'pid' => 172,
                'name' => '高密市',
                'type' => 3,
                'code' => 370785,
            ),
            140 => 
            array (
                'id' => 1641,
                'pid' => 172,
                'name' => '昌邑市',
                'type' => 3,
                'code' => 370786,
            ),
            141 => 
            array (
                'id' => 1642,
                'pid' => 173,
                'name' => '任城区',
                'type' => 3,
                'code' => 370811,
            ),
            142 => 
            array (
                'id' => 1643,
                'pid' => 173,
                'name' => '兖州区',
                'type' => 3,
                'code' => 370812,
            ),
            143 => 
            array (
                'id' => 1644,
                'pid' => 173,
                'name' => '微山县',
                'type' => 3,
                'code' => 370826,
            ),
            144 => 
            array (
                'id' => 1645,
                'pid' => 173,
                'name' => '鱼台县',
                'type' => 3,
                'code' => 370827,
            ),
            145 => 
            array (
                'id' => 1646,
                'pid' => 173,
                'name' => '金乡县',
                'type' => 3,
                'code' => 370828,
            ),
            146 => 
            array (
                'id' => 1647,
                'pid' => 173,
                'name' => '嘉祥县',
                'type' => 3,
                'code' => 370829,
            ),
            147 => 
            array (
                'id' => 1648,
                'pid' => 173,
                'name' => '汶上县',
                'type' => 3,
                'code' => 370830,
            ),
            148 => 
            array (
                'id' => 1649,
                'pid' => 173,
                'name' => '泗水县',
                'type' => 3,
                'code' => 370831,
            ),
            149 => 
            array (
                'id' => 1650,
                'pid' => 173,
                'name' => '梁山县',
                'type' => 3,
                'code' => 370832,
            ),
            150 => 
            array (
                'id' => 1651,
                'pid' => 173,
                'name' => '曲阜市',
                'type' => 3,
                'code' => 370881,
            ),
            151 => 
            array (
                'id' => 1652,
                'pid' => 173,
                'name' => '邹城市',
                'type' => 3,
                'code' => 370883,
            ),
            152 => 
            array (
                'id' => 1653,
                'pid' => 174,
                'name' => '泰山区',
                'type' => 3,
                'code' => 370902,
            ),
            153 => 
            array (
                'id' => 1654,
                'pid' => 174,
                'name' => '岱岳区',
                'type' => 3,
                'code' => 370911,
            ),
            154 => 
            array (
                'id' => 1655,
                'pid' => 174,
                'name' => '宁阳县',
                'type' => 3,
                'code' => 370921,
            ),
            155 => 
            array (
                'id' => 1656,
                'pid' => 174,
                'name' => '东平县',
                'type' => 3,
                'code' => 370923,
            ),
            156 => 
            array (
                'id' => 1657,
                'pid' => 174,
                'name' => '新泰市',
                'type' => 3,
                'code' => 370982,
            ),
            157 => 
            array (
                'id' => 1658,
                'pid' => 174,
                'name' => '肥城市',
                'type' => 3,
                'code' => 370983,
            ),
            158 => 
            array (
                'id' => 1659,
                'pid' => 175,
                'name' => '环翠区',
                'type' => 3,
                'code' => 371002,
            ),
            159 => 
            array (
                'id' => 1660,
                'pid' => 175,
                'name' => '文登区',
                'type' => 3,
                'code' => 371003,
            ),
            160 => 
            array (
                'id' => 1661,
                'pid' => 175,
                'name' => '荣成市',
                'type' => 3,
                'code' => 371082,
            ),
            161 => 
            array (
                'id' => 1662,
                'pid' => 175,
                'name' => '乳山市',
                'type' => 3,
                'code' => 371083,
            ),
            162 => 
            array (
                'id' => 1663,
                'pid' => 176,
                'name' => '东港区',
                'type' => 3,
                'code' => 371102,
            ),
            163 => 
            array (
                'id' => 1664,
                'pid' => 176,
                'name' => '岚山区',
                'type' => 3,
                'code' => 371103,
            ),
            164 => 
            array (
                'id' => 1665,
                'pid' => 176,
                'name' => '五莲县',
                'type' => 3,
                'code' => 371121,
            ),
            165 => 
            array (
                'id' => 1666,
                'pid' => 176,
                'name' => '莒县',
                'type' => 3,
                'code' => 371122,
            ),
            166 => 
            array (
                'id' => 1667,
                'pid' => 177,
                'name' => '莱城区',
                'type' => 3,
                'code' => 371202,
            ),
            167 => 
            array (
                'id' => 1668,
                'pid' => 177,
                'name' => '钢城区',
                'type' => 3,
                'code' => 371203,
            ),
            168 => 
            array (
                'id' => 1669,
                'pid' => 178,
                'name' => '兰山区',
                'type' => 3,
                'code' => 371302,
            ),
            169 => 
            array (
                'id' => 1670,
                'pid' => 178,
                'name' => '罗庄区',
                'type' => 3,
                'code' => 371311,
            ),
            170 => 
            array (
                'id' => 1671,
                'pid' => 178,
                'name' => '河东区',
                'type' => 3,
                'code' => 371312,
            ),
            171 => 
            array (
                'id' => 1672,
                'pid' => 178,
                'name' => '沂南县',
                'type' => 3,
                'code' => 371321,
            ),
            172 => 
            array (
                'id' => 1673,
                'pid' => 178,
                'name' => '郯城县',
                'type' => 3,
                'code' => 371322,
            ),
            173 => 
            array (
                'id' => 1674,
                'pid' => 178,
                'name' => '沂水县',
                'type' => 3,
                'code' => 371323,
            ),
            174 => 
            array (
                'id' => 1675,
                'pid' => 178,
                'name' => '兰陵县',
                'type' => 3,
                'code' => 371324,
            ),
            175 => 
            array (
                'id' => 1676,
                'pid' => 178,
                'name' => '费县',
                'type' => 3,
                'code' => 371325,
            ),
            176 => 
            array (
                'id' => 1677,
                'pid' => 178,
                'name' => '平邑县',
                'type' => 3,
                'code' => 371326,
            ),
            177 => 
            array (
                'id' => 1678,
                'pid' => 178,
                'name' => '莒南县',
                'type' => 3,
                'code' => 371327,
            ),
            178 => 
            array (
                'id' => 1679,
                'pid' => 178,
                'name' => '蒙阴县',
                'type' => 3,
                'code' => 371328,
            ),
            179 => 
            array (
                'id' => 1680,
                'pid' => 178,
                'name' => '临沭县',
                'type' => 3,
                'code' => 371329,
            ),
            180 => 
            array (
                'id' => 1681,
                'pid' => 179,
                'name' => '德城区',
                'type' => 3,
                'code' => 371402,
            ),
            181 => 
            array (
                'id' => 1682,
                'pid' => 179,
                'name' => '陵城区',
                'type' => 3,
                'code' => 371403,
            ),
            182 => 
            array (
                'id' => 1683,
                'pid' => 179,
                'name' => '宁津县',
                'type' => 3,
                'code' => 371422,
            ),
            183 => 
            array (
                'id' => 1684,
                'pid' => 179,
                'name' => '庆云县',
                'type' => 3,
                'code' => 371423,
            ),
            184 => 
            array (
                'id' => 1685,
                'pid' => 179,
                'name' => '临邑县',
                'type' => 3,
                'code' => 371424,
            ),
            185 => 
            array (
                'id' => 1686,
                'pid' => 179,
                'name' => '齐河县',
                'type' => 3,
                'code' => 371425,
            ),
            186 => 
            array (
                'id' => 1687,
                'pid' => 179,
                'name' => '平原县',
                'type' => 3,
                'code' => 371426,
            ),
            187 => 
            array (
                'id' => 1688,
                'pid' => 179,
                'name' => '夏津县',
                'type' => 3,
                'code' => 371427,
            ),
            188 => 
            array (
                'id' => 1689,
                'pid' => 179,
                'name' => '武城县',
                'type' => 3,
                'code' => 371428,
            ),
            189 => 
            array (
                'id' => 1690,
                'pid' => 179,
                'name' => '乐陵市',
                'type' => 3,
                'code' => 371481,
            ),
            190 => 
            array (
                'id' => 1691,
                'pid' => 179,
                'name' => '禹城市',
                'type' => 3,
                'code' => 371482,
            ),
            191 => 
            array (
                'id' => 1692,
                'pid' => 180,
                'name' => '东昌府区',
                'type' => 3,
                'code' => 371502,
            ),
            192 => 
            array (
                'id' => 1693,
                'pid' => 180,
                'name' => '阳谷县',
                'type' => 3,
                'code' => 371521,
            ),
            193 => 
            array (
                'id' => 1694,
                'pid' => 180,
                'name' => '莘县',
                'type' => 3,
                'code' => 371522,
            ),
            194 => 
            array (
                'id' => 1695,
                'pid' => 180,
                'name' => '茌平县',
                'type' => 3,
                'code' => 371523,
            ),
            195 => 
            array (
                'id' => 1696,
                'pid' => 180,
                'name' => '东阿县',
                'type' => 3,
                'code' => 371524,
            ),
            196 => 
            array (
                'id' => 1697,
                'pid' => 180,
                'name' => '冠县',
                'type' => 3,
                'code' => 371525,
            ),
            197 => 
            array (
                'id' => 1698,
                'pid' => 180,
                'name' => '高唐县',
                'type' => 3,
                'code' => 371526,
            ),
            198 => 
            array (
                'id' => 1699,
                'pid' => 180,
                'name' => '临清市',
                'type' => 3,
                'code' => 371581,
            ),
            199 => 
            array (
                'id' => 1700,
                'pid' => 181,
                'name' => '滨城区',
                'type' => 3,
                'code' => 371602,
            ),
            200 => 
            array (
                'id' => 1701,
                'pid' => 181,
                'name' => '沾化区',
                'type' => 3,
                'code' => 371603,
            ),
            201 => 
            array (
                'id' => 1702,
                'pid' => 181,
                'name' => '惠民县',
                'type' => 3,
                'code' => 371621,
            ),
            202 => 
            array (
                'id' => 1703,
                'pid' => 181,
                'name' => '阳信县',
                'type' => 3,
                'code' => 371622,
            ),
            203 => 
            array (
                'id' => 1704,
                'pid' => 181,
                'name' => '无棣县',
                'type' => 3,
                'code' => 371623,
            ),
            204 => 
            array (
                'id' => 1705,
                'pid' => 181,
                'name' => '博兴县',
                'type' => 3,
                'code' => 371625,
            ),
            205 => 
            array (
                'id' => 1706,
                'pid' => 181,
                'name' => '邹平县',
                'type' => 3,
                'code' => 371626,
            ),
            206 => 
            array (
                'id' => 1707,
                'pid' => 182,
                'name' => '牡丹区',
                'type' => 3,
                'code' => 371702,
            ),
            207 => 
            array (
                'id' => 1708,
                'pid' => 182,
                'name' => '定陶区',
                'type' => 3,
                'code' => 371703,
            ),
            208 => 
            array (
                'id' => 1709,
                'pid' => 182,
                'name' => '曹县',
                'type' => 3,
                'code' => 371721,
            ),
            209 => 
            array (
                'id' => 1710,
                'pid' => 182,
                'name' => '单县',
                'type' => 3,
                'code' => 371722,
            ),
            210 => 
            array (
                'id' => 1711,
                'pid' => 182,
                'name' => '成武县',
                'type' => 3,
                'code' => 371723,
            ),
            211 => 
            array (
                'id' => 1712,
                'pid' => 182,
                'name' => '巨野县',
                'type' => 3,
                'code' => 371724,
            ),
            212 => 
            array (
                'id' => 1713,
                'pid' => 182,
                'name' => '郓城县',
                'type' => 3,
                'code' => 371725,
            ),
            213 => 
            array (
                'id' => 1714,
                'pid' => 182,
                'name' => '鄄城县',
                'type' => 3,
                'code' => 371726,
            ),
            214 => 
            array (
                'id' => 1715,
                'pid' => 182,
                'name' => '东明县',
                'type' => 3,
                'code' => 371728,
            ),
            215 => 
            array (
                'id' => 1716,
                'pid' => 183,
                'name' => '中原区',
                'type' => 3,
                'code' => 410102,
            ),
            216 => 
            array (
                'id' => 1717,
                'pid' => 183,
                'name' => '二七区',
                'type' => 3,
                'code' => 410103,
            ),
            217 => 
            array (
                'id' => 1718,
                'pid' => 183,
                'name' => '管城回族区',
                'type' => 3,
                'code' => 410104,
            ),
            218 => 
            array (
                'id' => 1719,
                'pid' => 183,
                'name' => '金水区',
                'type' => 3,
                'code' => 410105,
            ),
            219 => 
            array (
                'id' => 1720,
                'pid' => 183,
                'name' => '上街区',
                'type' => 3,
                'code' => 410106,
            ),
            220 => 
            array (
                'id' => 1721,
                'pid' => 183,
                'name' => '惠济区',
                'type' => 3,
                'code' => 410108,
            ),
            221 => 
            array (
                'id' => 1722,
                'pid' => 183,
                'name' => '中牟县',
                'type' => 3,
                'code' => 410122,
            ),
            222 => 
            array (
                'id' => 1723,
                'pid' => 183,
                'name' => '巩义市',
                'type' => 3,
                'code' => 410181,
            ),
            223 => 
            array (
                'id' => 1724,
                'pid' => 183,
                'name' => '荥阳市',
                'type' => 3,
                'code' => 410182,
            ),
            224 => 
            array (
                'id' => 1725,
                'pid' => 183,
                'name' => '新密市',
                'type' => 3,
                'code' => 410183,
            ),
            225 => 
            array (
                'id' => 1726,
                'pid' => 183,
                'name' => '新郑市',
                'type' => 3,
                'code' => 410184,
            ),
            226 => 
            array (
                'id' => 1727,
                'pid' => 183,
                'name' => '登封市',
                'type' => 3,
                'code' => 410185,
            ),
            227 => 
            array (
                'id' => 1728,
                'pid' => 184,
                'name' => '龙亭区',
                'type' => 3,
                'code' => 410202,
            ),
            228 => 
            array (
                'id' => 1729,
                'pid' => 184,
                'name' => '顺河回族区',
                'type' => 3,
                'code' => 410203,
            ),
            229 => 
            array (
                'id' => 1730,
                'pid' => 184,
                'name' => '鼓楼区',
                'type' => 3,
                'code' => 410204,
            ),
            230 => 
            array (
                'id' => 1731,
                'pid' => 184,
                'name' => '禹王台区',
                'type' => 3,
                'code' => 410205,
            ),
            231 => 
            array (
                'id' => 1732,
                'pid' => 184,
                'name' => '金明区',
                'type' => 3,
                'code' => 410211,
            ),
            232 => 
            array (
                'id' => 1733,
                'pid' => 184,
                'name' => '祥符区',
                'type' => 3,
                'code' => 410212,
            ),
            233 => 
            array (
                'id' => 1734,
                'pid' => 184,
                'name' => '杞县',
                'type' => 3,
                'code' => 410221,
            ),
            234 => 
            array (
                'id' => 1735,
                'pid' => 184,
                'name' => '通许县',
                'type' => 3,
                'code' => 410222,
            ),
            235 => 
            array (
                'id' => 1736,
                'pid' => 184,
                'name' => '尉氏县',
                'type' => 3,
                'code' => 410223,
            ),
            236 => 
            array (
                'id' => 1737,
                'pid' => 184,
                'name' => '兰考县',
                'type' => 3,
                'code' => 410225,
            ),
            237 => 
            array (
                'id' => 1738,
                'pid' => 185,
                'name' => '老城区',
                'type' => 3,
                'code' => 410302,
            ),
            238 => 
            array (
                'id' => 1739,
                'pid' => 185,
                'name' => '西工区',
                'type' => 3,
                'code' => 410303,
            ),
            239 => 
            array (
                'id' => 1740,
                'pid' => 185,
                'name' => '瀍河回族区',
                'type' => 3,
                'code' => 410304,
            ),
            240 => 
            array (
                'id' => 1741,
                'pid' => 185,
                'name' => '涧西区',
                'type' => 3,
                'code' => 410305,
            ),
            241 => 
            array (
                'id' => 1742,
                'pid' => 185,
                'name' => '吉利区',
                'type' => 3,
                'code' => 410306,
            ),
            242 => 
            array (
                'id' => 1743,
                'pid' => 185,
                'name' => '洛龙区',
                'type' => 3,
                'code' => 410311,
            ),
            243 => 
            array (
                'id' => 1744,
                'pid' => 185,
                'name' => '孟津县',
                'type' => 3,
                'code' => 410322,
            ),
            244 => 
            array (
                'id' => 1745,
                'pid' => 185,
                'name' => '新安县',
                'type' => 3,
                'code' => 410323,
            ),
            245 => 
            array (
                'id' => 1746,
                'pid' => 185,
                'name' => '栾川县',
                'type' => 3,
                'code' => 410324,
            ),
            246 => 
            array (
                'id' => 1747,
                'pid' => 185,
                'name' => '嵩县',
                'type' => 3,
                'code' => 410325,
            ),
            247 => 
            array (
                'id' => 1748,
                'pid' => 185,
                'name' => '汝阳县',
                'type' => 3,
                'code' => 410326,
            ),
            248 => 
            array (
                'id' => 1749,
                'pid' => 185,
                'name' => '宜阳县',
                'type' => 3,
                'code' => 410327,
            ),
            249 => 
            array (
                'id' => 1750,
                'pid' => 185,
                'name' => '洛宁县',
                'type' => 3,
                'code' => 410328,
            ),
            250 => 
            array (
                'id' => 1751,
                'pid' => 185,
                'name' => '伊川县',
                'type' => 3,
                'code' => 410329,
            ),
            251 => 
            array (
                'id' => 1752,
                'pid' => 185,
                'name' => '偃师市',
                'type' => 3,
                'code' => 410381,
            ),
            252 => 
            array (
                'id' => 1753,
                'pid' => 186,
                'name' => '新华区',
                'type' => 3,
                'code' => 410402,
            ),
            253 => 
            array (
                'id' => 1754,
                'pid' => 186,
                'name' => '卫东区',
                'type' => 3,
                'code' => 410403,
            ),
            254 => 
            array (
                'id' => 1755,
                'pid' => 186,
                'name' => '石龙区',
                'type' => 3,
                'code' => 410404,
            ),
            255 => 
            array (
                'id' => 1756,
                'pid' => 186,
                'name' => '湛河区',
                'type' => 3,
                'code' => 410411,
            ),
            256 => 
            array (
                'id' => 1757,
                'pid' => 186,
                'name' => '宝丰县',
                'type' => 3,
                'code' => 410421,
            ),
            257 => 
            array (
                'id' => 1758,
                'pid' => 186,
                'name' => '叶县',
                'type' => 3,
                'code' => 410422,
            ),
            258 => 
            array (
                'id' => 1759,
                'pid' => 186,
                'name' => '鲁山县',
                'type' => 3,
                'code' => 410423,
            ),
            259 => 
            array (
                'id' => 1760,
                'pid' => 186,
                'name' => '郏县',
                'type' => 3,
                'code' => 410425,
            ),
            260 => 
            array (
                'id' => 1761,
                'pid' => 186,
                'name' => '舞钢市',
                'type' => 3,
                'code' => 410481,
            ),
            261 => 
            array (
                'id' => 1762,
                'pid' => 186,
                'name' => '汝州市',
                'type' => 3,
                'code' => 410482,
            ),
            262 => 
            array (
                'id' => 1763,
                'pid' => 187,
                'name' => '文峰区',
                'type' => 3,
                'code' => 410502,
            ),
            263 => 
            array (
                'id' => 1764,
                'pid' => 187,
                'name' => '北关区',
                'type' => 3,
                'code' => 410503,
            ),
            264 => 
            array (
                'id' => 1765,
                'pid' => 187,
                'name' => '殷都区',
                'type' => 3,
                'code' => 410505,
            ),
            265 => 
            array (
                'id' => 1766,
                'pid' => 187,
                'name' => '龙安区',
                'type' => 3,
                'code' => 410506,
            ),
            266 => 
            array (
                'id' => 1767,
                'pid' => 187,
                'name' => '安阳县',
                'type' => 3,
                'code' => 410522,
            ),
            267 => 
            array (
                'id' => 1768,
                'pid' => 187,
                'name' => '汤阴县',
                'type' => 3,
                'code' => 410523,
            ),
            268 => 
            array (
                'id' => 1769,
                'pid' => 187,
                'name' => '滑县',
                'type' => 3,
                'code' => 410526,
            ),
            269 => 
            array (
                'id' => 1770,
                'pid' => 187,
                'name' => '内黄县',
                'type' => 3,
                'code' => 410527,
            ),
            270 => 
            array (
                'id' => 1771,
                'pid' => 187,
                'name' => '林州市',
                'type' => 3,
                'code' => 410581,
            ),
            271 => 
            array (
                'id' => 1772,
                'pid' => 188,
                'name' => '鹤山区',
                'type' => 3,
                'code' => 410602,
            ),
            272 => 
            array (
                'id' => 1773,
                'pid' => 188,
                'name' => '山城区',
                'type' => 3,
                'code' => 410603,
            ),
            273 => 
            array (
                'id' => 1774,
                'pid' => 188,
                'name' => '淇滨区',
                'type' => 3,
                'code' => 410611,
            ),
            274 => 
            array (
                'id' => 1775,
                'pid' => 188,
                'name' => '浚县',
                'type' => 3,
                'code' => 410621,
            ),
            275 => 
            array (
                'id' => 1776,
                'pid' => 188,
                'name' => '淇县',
                'type' => 3,
                'code' => 410622,
            ),
            276 => 
            array (
                'id' => 1777,
                'pid' => 189,
                'name' => '红旗区',
                'type' => 3,
                'code' => 410702,
            ),
            277 => 
            array (
                'id' => 1778,
                'pid' => 189,
                'name' => '卫滨区',
                'type' => 3,
                'code' => 410703,
            ),
            278 => 
            array (
                'id' => 1779,
                'pid' => 189,
                'name' => '凤泉区',
                'type' => 3,
                'code' => 410704,
            ),
            279 => 
            array (
                'id' => 1780,
                'pid' => 189,
                'name' => '牧野区',
                'type' => 3,
                'code' => 410711,
            ),
            280 => 
            array (
                'id' => 1781,
                'pid' => 189,
                'name' => '新乡县',
                'type' => 3,
                'code' => 410721,
            ),
            281 => 
            array (
                'id' => 1782,
                'pid' => 189,
                'name' => '获嘉县',
                'type' => 3,
                'code' => 410724,
            ),
            282 => 
            array (
                'id' => 1783,
                'pid' => 189,
                'name' => '原阳县',
                'type' => 3,
                'code' => 410725,
            ),
            283 => 
            array (
                'id' => 1784,
                'pid' => 189,
                'name' => '延津县',
                'type' => 3,
                'code' => 410726,
            ),
            284 => 
            array (
                'id' => 1785,
                'pid' => 189,
                'name' => '封丘县',
                'type' => 3,
                'code' => 410727,
            ),
            285 => 
            array (
                'id' => 1786,
                'pid' => 189,
                'name' => '长垣县',
                'type' => 3,
                'code' => 410728,
            ),
            286 => 
            array (
                'id' => 1787,
                'pid' => 189,
                'name' => '卫辉市',
                'type' => 3,
                'code' => 410781,
            ),
            287 => 
            array (
                'id' => 1788,
                'pid' => 189,
                'name' => '辉县市',
                'type' => 3,
                'code' => 410782,
            ),
            288 => 
            array (
                'id' => 1789,
                'pid' => 190,
                'name' => '解放区',
                'type' => 3,
                'code' => 410802,
            ),
            289 => 
            array (
                'id' => 1790,
                'pid' => 190,
                'name' => '中站区',
                'type' => 3,
                'code' => 410803,
            ),
            290 => 
            array (
                'id' => 1791,
                'pid' => 190,
                'name' => '马村区',
                'type' => 3,
                'code' => 410804,
            ),
            291 => 
            array (
                'id' => 1792,
                'pid' => 190,
                'name' => '山阳区',
                'type' => 3,
                'code' => 410811,
            ),
            292 => 
            array (
                'id' => 1793,
                'pid' => 190,
                'name' => '修武县',
                'type' => 3,
                'code' => 410821,
            ),
            293 => 
            array (
                'id' => 1794,
                'pid' => 190,
                'name' => '博爱县',
                'type' => 3,
                'code' => 410822,
            ),
            294 => 
            array (
                'id' => 1795,
                'pid' => 190,
                'name' => '武陟县',
                'type' => 3,
                'code' => 410823,
            ),
            295 => 
            array (
                'id' => 1796,
                'pid' => 190,
                'name' => '温县',
                'type' => 3,
                'code' => 410825,
            ),
            296 => 
            array (
                'id' => 1797,
                'pid' => 190,
                'name' => '沁阳市',
                'type' => 3,
                'code' => 410882,
            ),
            297 => 
            array (
                'id' => 1798,
                'pid' => 190,
                'name' => '孟州市',
                'type' => 3,
                'code' => 410883,
            ),
            298 => 
            array (
                'id' => 1799,
                'pid' => 191,
                'name' => '华龙区',
                'type' => 3,
                'code' => 410902,
            ),
            299 => 
            array (
                'id' => 1800,
                'pid' => 191,
                'name' => '清丰县',
                'type' => 3,
                'code' => 410922,
            ),
            300 => 
            array (
                'id' => 1801,
                'pid' => 191,
                'name' => '南乐县',
                'type' => 3,
                'code' => 410923,
            ),
            301 => 
            array (
                'id' => 1802,
                'pid' => 191,
                'name' => '范县',
                'type' => 3,
                'code' => 410926,
            ),
            302 => 
            array (
                'id' => 1803,
                'pid' => 191,
                'name' => '台前县',
                'type' => 3,
                'code' => 410927,
            ),
            303 => 
            array (
                'id' => 1804,
                'pid' => 191,
                'name' => '濮阳县',
                'type' => 3,
                'code' => 410928,
            ),
            304 => 
            array (
                'id' => 1805,
                'pid' => 192,
                'name' => '魏都区',
                'type' => 3,
                'code' => 411002,
            ),
            305 => 
            array (
                'id' => 1806,
                'pid' => 192,
                'name' => '许昌县',
                'type' => 3,
                'code' => 411023,
            ),
            306 => 
            array (
                'id' => 1807,
                'pid' => 192,
                'name' => '鄢陵县',
                'type' => 3,
                'code' => 411024,
            ),
            307 => 
            array (
                'id' => 1808,
                'pid' => 192,
                'name' => '襄城县',
                'type' => 3,
                'code' => 411025,
            ),
            308 => 
            array (
                'id' => 1809,
                'pid' => 192,
                'name' => '禹州市',
                'type' => 3,
                'code' => 411081,
            ),
            309 => 
            array (
                'id' => 1810,
                'pid' => 192,
                'name' => '长葛市',
                'type' => 3,
                'code' => 411082,
            ),
            310 => 
            array (
                'id' => 1811,
                'pid' => 193,
                'name' => '源汇区',
                'type' => 3,
                'code' => 411102,
            ),
            311 => 
            array (
                'id' => 1812,
                'pid' => 193,
                'name' => '郾城区',
                'type' => 3,
                'code' => 411103,
            ),
            312 => 
            array (
                'id' => 1813,
                'pid' => 193,
                'name' => '召陵区',
                'type' => 3,
                'code' => 411104,
            ),
            313 => 
            array (
                'id' => 1814,
                'pid' => 193,
                'name' => '舞阳县',
                'type' => 3,
                'code' => 411121,
            ),
            314 => 
            array (
                'id' => 1815,
                'pid' => 193,
                'name' => '临颍县',
                'type' => 3,
                'code' => 411122,
            ),
            315 => 
            array (
                'id' => 1816,
                'pid' => 194,
                'name' => '湖滨区',
                'type' => 3,
                'code' => 411202,
            ),
            316 => 
            array (
                'id' => 1817,
                'pid' => 194,
                'name' => '陕州区',
                'type' => 3,
                'code' => 411203,
            ),
            317 => 
            array (
                'id' => 1818,
                'pid' => 194,
                'name' => '渑池县',
                'type' => 3,
                'code' => 411221,
            ),
            318 => 
            array (
                'id' => 1819,
                'pid' => 194,
                'name' => '卢氏县',
                'type' => 3,
                'code' => 411224,
            ),
            319 => 
            array (
                'id' => 1820,
                'pid' => 194,
                'name' => '义马市',
                'type' => 3,
                'code' => 411281,
            ),
            320 => 
            array (
                'id' => 1821,
                'pid' => 194,
                'name' => '灵宝市',
                'type' => 3,
                'code' => 411282,
            ),
            321 => 
            array (
                'id' => 1822,
                'pid' => 195,
                'name' => '宛城区',
                'type' => 3,
                'code' => 411302,
            ),
            322 => 
            array (
                'id' => 1823,
                'pid' => 195,
                'name' => '卧龙区',
                'type' => 3,
                'code' => 411303,
            ),
            323 => 
            array (
                'id' => 1824,
                'pid' => 195,
                'name' => '南召县',
                'type' => 3,
                'code' => 411321,
            ),
            324 => 
            array (
                'id' => 1825,
                'pid' => 195,
                'name' => '方城县',
                'type' => 3,
                'code' => 411322,
            ),
            325 => 
            array (
                'id' => 1826,
                'pid' => 195,
                'name' => '西峡县',
                'type' => 3,
                'code' => 411323,
            ),
            326 => 
            array (
                'id' => 1827,
                'pid' => 195,
                'name' => '镇平县',
                'type' => 3,
                'code' => 411324,
            ),
            327 => 
            array (
                'id' => 1828,
                'pid' => 195,
                'name' => '内乡县',
                'type' => 3,
                'code' => 411325,
            ),
            328 => 
            array (
                'id' => 1829,
                'pid' => 195,
                'name' => '淅川县',
                'type' => 3,
                'code' => 411326,
            ),
            329 => 
            array (
                'id' => 1830,
                'pid' => 195,
                'name' => '社旗县',
                'type' => 3,
                'code' => 411327,
            ),
            330 => 
            array (
                'id' => 1831,
                'pid' => 195,
                'name' => '唐河县',
                'type' => 3,
                'code' => 411328,
            ),
            331 => 
            array (
                'id' => 1832,
                'pid' => 195,
                'name' => '新野县',
                'type' => 3,
                'code' => 411329,
            ),
            332 => 
            array (
                'id' => 1833,
                'pid' => 195,
                'name' => '桐柏县',
                'type' => 3,
                'code' => 411330,
            ),
            333 => 
            array (
                'id' => 1834,
                'pid' => 195,
                'name' => '邓州市',
                'type' => 3,
                'code' => 411381,
            ),
            334 => 
            array (
                'id' => 1835,
                'pid' => 196,
                'name' => '梁园区',
                'type' => 3,
                'code' => 411402,
            ),
            335 => 
            array (
                'id' => 1836,
                'pid' => 196,
                'name' => '睢阳区',
                'type' => 3,
                'code' => 411403,
            ),
            336 => 
            array (
                'id' => 1837,
                'pid' => 196,
                'name' => '民权县',
                'type' => 3,
                'code' => 411421,
            ),
            337 => 
            array (
                'id' => 1838,
                'pid' => 196,
                'name' => '睢县',
                'type' => 3,
                'code' => 411422,
            ),
            338 => 
            array (
                'id' => 1839,
                'pid' => 196,
                'name' => '宁陵县',
                'type' => 3,
                'code' => 411423,
            ),
            339 => 
            array (
                'id' => 1840,
                'pid' => 196,
                'name' => '柘城县',
                'type' => 3,
                'code' => 411424,
            ),
            340 => 
            array (
                'id' => 1841,
                'pid' => 196,
                'name' => '虞城县',
                'type' => 3,
                'code' => 411425,
            ),
            341 => 
            array (
                'id' => 1842,
                'pid' => 196,
                'name' => '夏邑县',
                'type' => 3,
                'code' => 411426,
            ),
            342 => 
            array (
                'id' => 1843,
                'pid' => 196,
                'name' => '永城市',
                'type' => 3,
                'code' => 411481,
            ),
            343 => 
            array (
                'id' => 1844,
                'pid' => 197,
                'name' => '浉河区',
                'type' => 3,
                'code' => 411502,
            ),
            344 => 
            array (
                'id' => 1845,
                'pid' => 197,
                'name' => '平桥区',
                'type' => 3,
                'code' => 411503,
            ),
            345 => 
            array (
                'id' => 1846,
                'pid' => 197,
                'name' => '罗山县',
                'type' => 3,
                'code' => 411521,
            ),
            346 => 
            array (
                'id' => 1847,
                'pid' => 197,
                'name' => '光山县',
                'type' => 3,
                'code' => 411522,
            ),
            347 => 
            array (
                'id' => 1848,
                'pid' => 197,
                'name' => '新县',
                'type' => 3,
                'code' => 411523,
            ),
            348 => 
            array (
                'id' => 1849,
                'pid' => 197,
                'name' => '商城县',
                'type' => 3,
                'code' => 411524,
            ),
            349 => 
            array (
                'id' => 1850,
                'pid' => 197,
                'name' => '固始县',
                'type' => 3,
                'code' => 411525,
            ),
            350 => 
            array (
                'id' => 1851,
                'pid' => 197,
                'name' => '潢川县',
                'type' => 3,
                'code' => 411526,
            ),
            351 => 
            array (
                'id' => 1852,
                'pid' => 197,
                'name' => '淮滨县',
                'type' => 3,
                'code' => 411527,
            ),
            352 => 
            array (
                'id' => 1853,
                'pid' => 197,
                'name' => '息县',
                'type' => 3,
                'code' => 411528,
            ),
            353 => 
            array (
                'id' => 1854,
                'pid' => 198,
                'name' => '川汇区',
                'type' => 3,
                'code' => 411602,
            ),
            354 => 
            array (
                'id' => 1855,
                'pid' => 198,
                'name' => '扶沟县',
                'type' => 3,
                'code' => 411621,
            ),
            355 => 
            array (
                'id' => 1856,
                'pid' => 198,
                'name' => '西华县',
                'type' => 3,
                'code' => 411622,
            ),
            356 => 
            array (
                'id' => 1857,
                'pid' => 198,
                'name' => '商水县',
                'type' => 3,
                'code' => 411623,
            ),
            357 => 
            array (
                'id' => 1858,
                'pid' => 198,
                'name' => '沈丘县',
                'type' => 3,
                'code' => 411624,
            ),
            358 => 
            array (
                'id' => 1859,
                'pid' => 198,
                'name' => '郸城县',
                'type' => 3,
                'code' => 411625,
            ),
            359 => 
            array (
                'id' => 1860,
                'pid' => 198,
                'name' => '淮阳县',
                'type' => 3,
                'code' => 411626,
            ),
            360 => 
            array (
                'id' => 1861,
                'pid' => 198,
                'name' => '太康县',
                'type' => 3,
                'code' => 411627,
            ),
            361 => 
            array (
                'id' => 1862,
                'pid' => 198,
                'name' => '鹿邑县',
                'type' => 3,
                'code' => 411628,
            ),
            362 => 
            array (
                'id' => 1863,
                'pid' => 198,
                'name' => '项城市',
                'type' => 3,
                'code' => 411681,
            ),
            363 => 
            array (
                'id' => 1864,
                'pid' => 199,
                'name' => '驿城区',
                'type' => 3,
                'code' => 411702,
            ),
            364 => 
            array (
                'id' => 1865,
                'pid' => 199,
                'name' => '西平县',
                'type' => 3,
                'code' => 411721,
            ),
            365 => 
            array (
                'id' => 1866,
                'pid' => 199,
                'name' => '上蔡县',
                'type' => 3,
                'code' => 411722,
            ),
            366 => 
            array (
                'id' => 1867,
                'pid' => 199,
                'name' => '平舆县',
                'type' => 3,
                'code' => 411723,
            ),
            367 => 
            array (
                'id' => 1868,
                'pid' => 199,
                'name' => '正阳县',
                'type' => 3,
                'code' => 411724,
            ),
            368 => 
            array (
                'id' => 1869,
                'pid' => 199,
                'name' => '确山县',
                'type' => 3,
                'code' => 411725,
            ),
            369 => 
            array (
                'id' => 1870,
                'pid' => 199,
                'name' => '泌阳县',
                'type' => 3,
                'code' => 411726,
            ),
            370 => 
            array (
                'id' => 1871,
                'pid' => 199,
                'name' => '汝南县',
                'type' => 3,
                'code' => 411727,
            ),
            371 => 
            array (
                'id' => 1872,
                'pid' => 199,
                'name' => '遂平县',
                'type' => 3,
                'code' => 411728,
            ),
            372 => 
            array (
                'id' => 1873,
                'pid' => 199,
                'name' => '新蔡县',
                'type' => 3,
                'code' => 411729,
            ),
            373 => 
            array (
                'id' => 1874,
                'pid' => 200,
                'name' => '济源市',
                'type' => 3,
                'code' => 419001,
            ),
            374 => 
            array (
                'id' => 1875,
                'pid' => 201,
                'name' => '江岸区',
                'type' => 3,
                'code' => 420102,
            ),
            375 => 
            array (
                'id' => 1876,
                'pid' => 201,
                'name' => '江汉区',
                'type' => 3,
                'code' => 420103,
            ),
            376 => 
            array (
                'id' => 1877,
                'pid' => 201,
                'name' => '硚口区',
                'type' => 3,
                'code' => 420104,
            ),
            377 => 
            array (
                'id' => 1878,
                'pid' => 201,
                'name' => '汉阳区',
                'type' => 3,
                'code' => 420105,
            ),
            378 => 
            array (
                'id' => 1879,
                'pid' => 201,
                'name' => '武昌区',
                'type' => 3,
                'code' => 420106,
            ),
            379 => 
            array (
                'id' => 1880,
                'pid' => 201,
                'name' => '青山区',
                'type' => 3,
                'code' => 420107,
            ),
            380 => 
            array (
                'id' => 1881,
                'pid' => 201,
                'name' => '洪山区',
                'type' => 3,
                'code' => 420111,
            ),
            381 => 
            array (
                'id' => 1882,
                'pid' => 201,
                'name' => '东西湖区',
                'type' => 3,
                'code' => 420112,
            ),
            382 => 
            array (
                'id' => 1883,
                'pid' => 201,
                'name' => '汉南区',
                'type' => 3,
                'code' => 420113,
            ),
            383 => 
            array (
                'id' => 1884,
                'pid' => 201,
                'name' => '蔡甸区',
                'type' => 3,
                'code' => 420114,
            ),
            384 => 
            array (
                'id' => 1885,
                'pid' => 201,
                'name' => '江夏区',
                'type' => 3,
                'code' => 420115,
            ),
            385 => 
            array (
                'id' => 1886,
                'pid' => 201,
                'name' => '黄陂区',
                'type' => 3,
                'code' => 420116,
            ),
            386 => 
            array (
                'id' => 1887,
                'pid' => 201,
                'name' => '新洲区',
                'type' => 3,
                'code' => 420117,
            ),
            387 => 
            array (
                'id' => 1888,
                'pid' => 202,
                'name' => '黄石港区',
                'type' => 3,
                'code' => 420202,
            ),
            388 => 
            array (
                'id' => 1889,
                'pid' => 202,
                'name' => '西塞山区',
                'type' => 3,
                'code' => 420203,
            ),
            389 => 
            array (
                'id' => 1890,
                'pid' => 202,
                'name' => '下陆区',
                'type' => 3,
                'code' => 420204,
            ),
            390 => 
            array (
                'id' => 1891,
                'pid' => 202,
                'name' => '铁山区',
                'type' => 3,
                'code' => 420205,
            ),
            391 => 
            array (
                'id' => 1892,
                'pid' => 202,
                'name' => '阳新县',
                'type' => 3,
                'code' => 420222,
            ),
            392 => 
            array (
                'id' => 1893,
                'pid' => 202,
                'name' => '大冶市',
                'type' => 3,
                'code' => 420281,
            ),
            393 => 
            array (
                'id' => 1894,
                'pid' => 203,
                'name' => '茅箭区',
                'type' => 3,
                'code' => 420302,
            ),
            394 => 
            array (
                'id' => 1895,
                'pid' => 203,
                'name' => '张湾区',
                'type' => 3,
                'code' => 420303,
            ),
            395 => 
            array (
                'id' => 1896,
                'pid' => 203,
                'name' => '郧阳区',
                'type' => 3,
                'code' => 420304,
            ),
            396 => 
            array (
                'id' => 1897,
                'pid' => 203,
                'name' => '郧西县',
                'type' => 3,
                'code' => 420322,
            ),
            397 => 
            array (
                'id' => 1898,
                'pid' => 203,
                'name' => '竹山县',
                'type' => 3,
                'code' => 420323,
            ),
            398 => 
            array (
                'id' => 1899,
                'pid' => 203,
                'name' => '竹溪县',
                'type' => 3,
                'code' => 420324,
            ),
            399 => 
            array (
                'id' => 1900,
                'pid' => 203,
                'name' => '房县',
                'type' => 3,
                'code' => 420325,
            ),
            400 => 
            array (
                'id' => 1901,
                'pid' => 203,
                'name' => '丹江口市',
                'type' => 3,
                'code' => 420381,
            ),
            401 => 
            array (
                'id' => 1902,
                'pid' => 204,
                'name' => '西陵区',
                'type' => 3,
                'code' => 420502,
            ),
            402 => 
            array (
                'id' => 1903,
                'pid' => 204,
                'name' => '伍家岗区',
                'type' => 3,
                'code' => 420503,
            ),
            403 => 
            array (
                'id' => 1904,
                'pid' => 204,
                'name' => '点军区',
                'type' => 3,
                'code' => 420504,
            ),
            404 => 
            array (
                'id' => 1905,
                'pid' => 204,
                'name' => '猇亭区',
                'type' => 3,
                'code' => 420505,
            ),
            405 => 
            array (
                'id' => 1906,
                'pid' => 204,
                'name' => '夷陵区',
                'type' => 3,
                'code' => 420506,
            ),
            406 => 
            array (
                'id' => 1907,
                'pid' => 204,
                'name' => '远安县',
                'type' => 3,
                'code' => 420525,
            ),
            407 => 
            array (
                'id' => 1908,
                'pid' => 204,
                'name' => '兴山县',
                'type' => 3,
                'code' => 420526,
            ),
            408 => 
            array (
                'id' => 1909,
                'pid' => 204,
                'name' => '秭归县',
                'type' => 3,
                'code' => 420527,
            ),
            409 => 
            array (
                'id' => 1910,
                'pid' => 204,
                'name' => '长阳土家族自治县',
                'type' => 3,
                'code' => 420528,
            ),
            410 => 
            array (
                'id' => 1911,
                'pid' => 204,
                'name' => '五峰土家族自治县',
                'type' => 3,
                'code' => 420529,
            ),
            411 => 
            array (
                'id' => 1912,
                'pid' => 204,
                'name' => '宜都市',
                'type' => 3,
                'code' => 420581,
            ),
            412 => 
            array (
                'id' => 1913,
                'pid' => 204,
                'name' => '当阳市',
                'type' => 3,
                'code' => 420582,
            ),
            413 => 
            array (
                'id' => 1914,
                'pid' => 204,
                'name' => '枝江市',
                'type' => 3,
                'code' => 420583,
            ),
            414 => 
            array (
                'id' => 1915,
                'pid' => 205,
                'name' => '襄城区',
                'type' => 3,
                'code' => 420602,
            ),
            415 => 
            array (
                'id' => 1916,
                'pid' => 205,
                'name' => '樊城区',
                'type' => 3,
                'code' => 420606,
            ),
            416 => 
            array (
                'id' => 1917,
                'pid' => 205,
                'name' => '襄州区',
                'type' => 3,
                'code' => 420607,
            ),
            417 => 
            array (
                'id' => 1918,
                'pid' => 205,
                'name' => '南漳县',
                'type' => 3,
                'code' => 420624,
            ),
            418 => 
            array (
                'id' => 1919,
                'pid' => 205,
                'name' => '谷城县',
                'type' => 3,
                'code' => 420625,
            ),
            419 => 
            array (
                'id' => 1920,
                'pid' => 205,
                'name' => '保康县',
                'type' => 3,
                'code' => 420626,
            ),
            420 => 
            array (
                'id' => 1921,
                'pid' => 205,
                'name' => '老河口市',
                'type' => 3,
                'code' => 420682,
            ),
            421 => 
            array (
                'id' => 1922,
                'pid' => 205,
                'name' => '枣阳市',
                'type' => 3,
                'code' => 420683,
            ),
            422 => 
            array (
                'id' => 1923,
                'pid' => 205,
                'name' => '宜城市',
                'type' => 3,
                'code' => 420684,
            ),
            423 => 
            array (
                'id' => 1924,
                'pid' => 206,
                'name' => '梁子湖区',
                'type' => 3,
                'code' => 420702,
            ),
            424 => 
            array (
                'id' => 1925,
                'pid' => 206,
                'name' => '华容区',
                'type' => 3,
                'code' => 420703,
            ),
            425 => 
            array (
                'id' => 1926,
                'pid' => 206,
                'name' => '鄂城区',
                'type' => 3,
                'code' => 420704,
            ),
            426 => 
            array (
                'id' => 1927,
                'pid' => 207,
                'name' => '东宝区',
                'type' => 3,
                'code' => 420802,
            ),
            427 => 
            array (
                'id' => 1928,
                'pid' => 207,
                'name' => '掇刀区',
                'type' => 3,
                'code' => 420804,
            ),
            428 => 
            array (
                'id' => 1929,
                'pid' => 207,
                'name' => '京山县',
                'type' => 3,
                'code' => 420821,
            ),
            429 => 
            array (
                'id' => 1930,
                'pid' => 207,
                'name' => '沙洋县',
                'type' => 3,
                'code' => 420822,
            ),
            430 => 
            array (
                'id' => 1931,
                'pid' => 207,
                'name' => '钟祥市',
                'type' => 3,
                'code' => 420881,
            ),
            431 => 
            array (
                'id' => 1932,
                'pid' => 208,
                'name' => '孝南区',
                'type' => 3,
                'code' => 420902,
            ),
            432 => 
            array (
                'id' => 1933,
                'pid' => 208,
                'name' => '孝昌县',
                'type' => 3,
                'code' => 420921,
            ),
            433 => 
            array (
                'id' => 1934,
                'pid' => 208,
                'name' => '大悟县',
                'type' => 3,
                'code' => 420922,
            ),
            434 => 
            array (
                'id' => 1935,
                'pid' => 208,
                'name' => '云梦县',
                'type' => 3,
                'code' => 420923,
            ),
            435 => 
            array (
                'id' => 1936,
                'pid' => 208,
                'name' => '应城市',
                'type' => 3,
                'code' => 420981,
            ),
            436 => 
            array (
                'id' => 1937,
                'pid' => 208,
                'name' => '安陆市',
                'type' => 3,
                'code' => 420982,
            ),
            437 => 
            array (
                'id' => 1938,
                'pid' => 208,
                'name' => '汉川市',
                'type' => 3,
                'code' => 420984,
            ),
            438 => 
            array (
                'id' => 1939,
                'pid' => 209,
                'name' => '沙市区',
                'type' => 3,
                'code' => 421002,
            ),
            439 => 
            array (
                'id' => 1940,
                'pid' => 209,
                'name' => '荆州区',
                'type' => 3,
                'code' => 421003,
            ),
            440 => 
            array (
                'id' => 1941,
                'pid' => 209,
                'name' => '公安县',
                'type' => 3,
                'code' => 421022,
            ),
            441 => 
            array (
                'id' => 1942,
                'pid' => 209,
                'name' => '监利县',
                'type' => 3,
                'code' => 421023,
            ),
            442 => 
            array (
                'id' => 1943,
                'pid' => 209,
                'name' => '江陵县',
                'type' => 3,
                'code' => 421024,
            ),
            443 => 
            array (
                'id' => 1944,
                'pid' => 209,
                'name' => '石首市',
                'type' => 3,
                'code' => 421081,
            ),
            444 => 
            array (
                'id' => 1945,
                'pid' => 209,
                'name' => '洪湖市',
                'type' => 3,
                'code' => 421083,
            ),
            445 => 
            array (
                'id' => 1946,
                'pid' => 209,
                'name' => '松滋市',
                'type' => 3,
                'code' => 421087,
            ),
            446 => 
            array (
                'id' => 1947,
                'pid' => 210,
                'name' => '黄州区',
                'type' => 3,
                'code' => 421102,
            ),
            447 => 
            array (
                'id' => 1948,
                'pid' => 210,
                'name' => '团风县',
                'type' => 3,
                'code' => 421121,
            ),
            448 => 
            array (
                'id' => 1949,
                'pid' => 210,
                'name' => '红安县',
                'type' => 3,
                'code' => 421122,
            ),
            449 => 
            array (
                'id' => 1950,
                'pid' => 210,
                'name' => '罗田县',
                'type' => 3,
                'code' => 421123,
            ),
            450 => 
            array (
                'id' => 1951,
                'pid' => 210,
                'name' => '英山县',
                'type' => 3,
                'code' => 421124,
            ),
            451 => 
            array (
                'id' => 1952,
                'pid' => 210,
                'name' => '浠水县',
                'type' => 3,
                'code' => 421125,
            ),
            452 => 
            array (
                'id' => 1953,
                'pid' => 210,
                'name' => '蕲春县',
                'type' => 3,
                'code' => 421126,
            ),
            453 => 
            array (
                'id' => 1954,
                'pid' => 210,
                'name' => '黄梅县',
                'type' => 3,
                'code' => 421127,
            ),
            454 => 
            array (
                'id' => 1955,
                'pid' => 210,
                'name' => '麻城市',
                'type' => 3,
                'code' => 421181,
            ),
            455 => 
            array (
                'id' => 1956,
                'pid' => 210,
                'name' => '武穴市',
                'type' => 3,
                'code' => 421182,
            ),
            456 => 
            array (
                'id' => 1957,
                'pid' => 211,
                'name' => '咸安区',
                'type' => 3,
                'code' => 421202,
            ),
            457 => 
            array (
                'id' => 1958,
                'pid' => 211,
                'name' => '嘉鱼县',
                'type' => 3,
                'code' => 421221,
            ),
            458 => 
            array (
                'id' => 1959,
                'pid' => 211,
                'name' => '通城县',
                'type' => 3,
                'code' => 421222,
            ),
            459 => 
            array (
                'id' => 1960,
                'pid' => 211,
                'name' => '崇阳县',
                'type' => 3,
                'code' => 421223,
            ),
            460 => 
            array (
                'id' => 1961,
                'pid' => 211,
                'name' => '通山县',
                'type' => 3,
                'code' => 421224,
            ),
            461 => 
            array (
                'id' => 1962,
                'pid' => 211,
                'name' => '赤壁市',
                'type' => 3,
                'code' => 421281,
            ),
            462 => 
            array (
                'id' => 1963,
                'pid' => 212,
                'name' => '曾都区',
                'type' => 3,
                'code' => 421303,
            ),
            463 => 
            array (
                'id' => 1964,
                'pid' => 212,
                'name' => '随县',
                'type' => 3,
                'code' => 421321,
            ),
            464 => 
            array (
                'id' => 1965,
                'pid' => 212,
                'name' => '广水市',
                'type' => 3,
                'code' => 421381,
            ),
            465 => 
            array (
                'id' => 1966,
                'pid' => 213,
                'name' => '恩施市',
                'type' => 3,
                'code' => 422801,
            ),
            466 => 
            array (
                'id' => 1967,
                'pid' => 213,
                'name' => '利川市',
                'type' => 3,
                'code' => 422802,
            ),
            467 => 
            array (
                'id' => 1968,
                'pid' => 213,
                'name' => '建始县',
                'type' => 3,
                'code' => 422822,
            ),
            468 => 
            array (
                'id' => 1969,
                'pid' => 213,
                'name' => '巴东县',
                'type' => 3,
                'code' => 422823,
            ),
            469 => 
            array (
                'id' => 1970,
                'pid' => 213,
                'name' => '宣恩县',
                'type' => 3,
                'code' => 422825,
            ),
            470 => 
            array (
                'id' => 1971,
                'pid' => 213,
                'name' => '咸丰县',
                'type' => 3,
                'code' => 422826,
            ),
            471 => 
            array (
                'id' => 1972,
                'pid' => 213,
                'name' => '来凤县',
                'type' => 3,
                'code' => 422827,
            ),
            472 => 
            array (
                'id' => 1973,
                'pid' => 213,
                'name' => '鹤峰县',
                'type' => 3,
                'code' => 422828,
            ),
            473 => 
            array (
                'id' => 1974,
                'pid' => 214,
                'name' => '仙桃市',
                'type' => 3,
                'code' => 429004,
            ),
            474 => 
            array (
                'id' => 1975,
                'pid' => 214,
                'name' => '潜江市',
                'type' => 3,
                'code' => 429005,
            ),
            475 => 
            array (
                'id' => 1976,
                'pid' => 214,
                'name' => '天门市',
                'type' => 3,
                'code' => 429006,
            ),
            476 => 
            array (
                'id' => 1977,
                'pid' => 214,
                'name' => '神农架林区',
                'type' => 3,
                'code' => 429021,
            ),
            477 => 
            array (
                'id' => 1978,
                'pid' => 215,
                'name' => '芙蓉区',
                'type' => 3,
                'code' => 430102,
            ),
            478 => 
            array (
                'id' => 1979,
                'pid' => 215,
                'name' => '天心区',
                'type' => 3,
                'code' => 430103,
            ),
            479 => 
            array (
                'id' => 1980,
                'pid' => 215,
                'name' => '岳麓区',
                'type' => 3,
                'code' => 430104,
            ),
            480 => 
            array (
                'id' => 1981,
                'pid' => 215,
                'name' => '开福区',
                'type' => 3,
                'code' => 430105,
            ),
            481 => 
            array (
                'id' => 1982,
                'pid' => 215,
                'name' => '雨花区',
                'type' => 3,
                'code' => 430111,
            ),
            482 => 
            array (
                'id' => 1983,
                'pid' => 215,
                'name' => '望城区',
                'type' => 3,
                'code' => 430112,
            ),
            483 => 
            array (
                'id' => 1984,
                'pid' => 215,
                'name' => '长沙县',
                'type' => 3,
                'code' => 430121,
            ),
            484 => 
            array (
                'id' => 1985,
                'pid' => 215,
                'name' => '宁乡县',
                'type' => 3,
                'code' => 430124,
            ),
            485 => 
            array (
                'id' => 1986,
                'pid' => 215,
                'name' => '浏阳市',
                'type' => 3,
                'code' => 430181,
            ),
            486 => 
            array (
                'id' => 1987,
                'pid' => 216,
                'name' => '荷塘区',
                'type' => 3,
                'code' => 430202,
            ),
            487 => 
            array (
                'id' => 1988,
                'pid' => 216,
                'name' => '芦淞区',
                'type' => 3,
                'code' => 430203,
            ),
            488 => 
            array (
                'id' => 1989,
                'pid' => 216,
                'name' => '石峰区',
                'type' => 3,
                'code' => 430204,
            ),
            489 => 
            array (
                'id' => 1990,
                'pid' => 216,
                'name' => '天元区',
                'type' => 3,
                'code' => 430211,
            ),
            490 => 
            array (
                'id' => 1991,
                'pid' => 216,
                'name' => '株洲县',
                'type' => 3,
                'code' => 430221,
            ),
            491 => 
            array (
                'id' => 1992,
                'pid' => 216,
                'name' => '攸县',
                'type' => 3,
                'code' => 430223,
            ),
            492 => 
            array (
                'id' => 1993,
                'pid' => 216,
                'name' => '茶陵县',
                'type' => 3,
                'code' => 430224,
            ),
            493 => 
            array (
                'id' => 1994,
                'pid' => 216,
                'name' => '炎陵县',
                'type' => 3,
                'code' => 430225,
            ),
            494 => 
            array (
                'id' => 1995,
                'pid' => 216,
                'name' => '醴陵市',
                'type' => 3,
                'code' => 430281,
            ),
            495 => 
            array (
                'id' => 1996,
                'pid' => 217,
                'name' => '雨湖区',
                'type' => 3,
                'code' => 430302,
            ),
            496 => 
            array (
                'id' => 1997,
                'pid' => 217,
                'name' => '岳塘区',
                'type' => 3,
                'code' => 430304,
            ),
            497 => 
            array (
                'id' => 1998,
                'pid' => 217,
                'name' => '湘潭县',
                'type' => 3,
                'code' => 430321,
            ),
            498 => 
            array (
                'id' => 1999,
                'pid' => 217,
                'name' => '湘乡市',
                'type' => 3,
                'code' => 430381,
            ),
            499 => 
            array (
                'id' => 2000,
                'pid' => 217,
                'name' => '韶山市',
                'type' => 3,
                'code' => 430382,
            ),
        ));
        \DB::table('z_region')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'pid' => 218,
                'name' => '珠晖区',
                'type' => 3,
                'code' => 430405,
            ),
            1 => 
            array (
                'id' => 2002,
                'pid' => 218,
                'name' => '雁峰区',
                'type' => 3,
                'code' => 430406,
            ),
            2 => 
            array (
                'id' => 2003,
                'pid' => 218,
                'name' => '石鼓区',
                'type' => 3,
                'code' => 430407,
            ),
            3 => 
            array (
                'id' => 2004,
                'pid' => 218,
                'name' => '蒸湘区',
                'type' => 3,
                'code' => 430408,
            ),
            4 => 
            array (
                'id' => 2005,
                'pid' => 218,
                'name' => '南岳区',
                'type' => 3,
                'code' => 430412,
            ),
            5 => 
            array (
                'id' => 2006,
                'pid' => 218,
                'name' => '衡阳县',
                'type' => 3,
                'code' => 430421,
            ),
            6 => 
            array (
                'id' => 2007,
                'pid' => 218,
                'name' => '衡南县',
                'type' => 3,
                'code' => 430422,
            ),
            7 => 
            array (
                'id' => 2008,
                'pid' => 218,
                'name' => '衡山县',
                'type' => 3,
                'code' => 430423,
            ),
            8 => 
            array (
                'id' => 2009,
                'pid' => 218,
                'name' => '衡东县',
                'type' => 3,
                'code' => 430424,
            ),
            9 => 
            array (
                'id' => 2010,
                'pid' => 218,
                'name' => '祁东县',
                'type' => 3,
                'code' => 430426,
            ),
            10 => 
            array (
                'id' => 2011,
                'pid' => 218,
                'name' => '耒阳市',
                'type' => 3,
                'code' => 430481,
            ),
            11 => 
            array (
                'id' => 2012,
                'pid' => 218,
                'name' => '常宁市',
                'type' => 3,
                'code' => 430482,
            ),
            12 => 
            array (
                'id' => 2013,
                'pid' => 219,
                'name' => '双清区',
                'type' => 3,
                'code' => 430502,
            ),
            13 => 
            array (
                'id' => 2014,
                'pid' => 219,
                'name' => '大祥区',
                'type' => 3,
                'code' => 430503,
            ),
            14 => 
            array (
                'id' => 2015,
                'pid' => 219,
                'name' => '北塔区',
                'type' => 3,
                'code' => 430511,
            ),
            15 => 
            array (
                'id' => 2016,
                'pid' => 219,
                'name' => '邵东县',
                'type' => 3,
                'code' => 430521,
            ),
            16 => 
            array (
                'id' => 2017,
                'pid' => 219,
                'name' => '新邵县',
                'type' => 3,
                'code' => 430522,
            ),
            17 => 
            array (
                'id' => 2018,
                'pid' => 219,
                'name' => '邵阳县',
                'type' => 3,
                'code' => 430523,
            ),
            18 => 
            array (
                'id' => 2019,
                'pid' => 219,
                'name' => '隆回县',
                'type' => 3,
                'code' => 430524,
            ),
            19 => 
            array (
                'id' => 2020,
                'pid' => 219,
                'name' => '洞口县',
                'type' => 3,
                'code' => 430525,
            ),
            20 => 
            array (
                'id' => 2021,
                'pid' => 219,
                'name' => '绥宁县',
                'type' => 3,
                'code' => 430527,
            ),
            21 => 
            array (
                'id' => 2022,
                'pid' => 219,
                'name' => '新宁县',
                'type' => 3,
                'code' => 430528,
            ),
            22 => 
            array (
                'id' => 2023,
                'pid' => 219,
                'name' => '城步苗族自治县',
                'type' => 3,
                'code' => 430529,
            ),
            23 => 
            array (
                'id' => 2024,
                'pid' => 219,
                'name' => '武冈市',
                'type' => 3,
                'code' => 430581,
            ),
            24 => 
            array (
                'id' => 2025,
                'pid' => 220,
                'name' => '岳阳楼区',
                'type' => 3,
                'code' => 430602,
            ),
            25 => 
            array (
                'id' => 2026,
                'pid' => 220,
                'name' => '云溪区',
                'type' => 3,
                'code' => 430603,
            ),
            26 => 
            array (
                'id' => 2027,
                'pid' => 220,
                'name' => '君山区',
                'type' => 3,
                'code' => 430611,
            ),
            27 => 
            array (
                'id' => 2028,
                'pid' => 220,
                'name' => '岳阳县',
                'type' => 3,
                'code' => 430621,
            ),
            28 => 
            array (
                'id' => 2029,
                'pid' => 220,
                'name' => '华容县',
                'type' => 3,
                'code' => 430623,
            ),
            29 => 
            array (
                'id' => 2030,
                'pid' => 220,
                'name' => '湘阴县',
                'type' => 3,
                'code' => 430624,
            ),
            30 => 
            array (
                'id' => 2031,
                'pid' => 220,
                'name' => '平江县',
                'type' => 3,
                'code' => 430626,
            ),
            31 => 
            array (
                'id' => 2032,
                'pid' => 220,
                'name' => '汨罗市',
                'type' => 3,
                'code' => 430681,
            ),
            32 => 
            array (
                'id' => 2033,
                'pid' => 220,
                'name' => '临湘市',
                'type' => 3,
                'code' => 430682,
            ),
            33 => 
            array (
                'id' => 2034,
                'pid' => 221,
                'name' => '武陵区',
                'type' => 3,
                'code' => 430702,
            ),
            34 => 
            array (
                'id' => 2035,
                'pid' => 221,
                'name' => '鼎城区',
                'type' => 3,
                'code' => 430703,
            ),
            35 => 
            array (
                'id' => 2036,
                'pid' => 221,
                'name' => '安乡县',
                'type' => 3,
                'code' => 430721,
            ),
            36 => 
            array (
                'id' => 2037,
                'pid' => 221,
                'name' => '汉寿县',
                'type' => 3,
                'code' => 430722,
            ),
            37 => 
            array (
                'id' => 2038,
                'pid' => 221,
                'name' => '澧县',
                'type' => 3,
                'code' => 430723,
            ),
            38 => 
            array (
                'id' => 2039,
                'pid' => 221,
                'name' => '临澧县',
                'type' => 3,
                'code' => 430724,
            ),
            39 => 
            array (
                'id' => 2040,
                'pid' => 221,
                'name' => '桃源县',
                'type' => 3,
                'code' => 430725,
            ),
            40 => 
            array (
                'id' => 2041,
                'pid' => 221,
                'name' => '石门县',
                'type' => 3,
                'code' => 430726,
            ),
            41 => 
            array (
                'id' => 2042,
                'pid' => 221,
                'name' => '津市市',
                'type' => 3,
                'code' => 430781,
            ),
            42 => 
            array (
                'id' => 2043,
                'pid' => 222,
                'name' => '永定区',
                'type' => 3,
                'code' => 430802,
            ),
            43 => 
            array (
                'id' => 2044,
                'pid' => 222,
                'name' => '武陵源区',
                'type' => 3,
                'code' => 430811,
            ),
            44 => 
            array (
                'id' => 2045,
                'pid' => 222,
                'name' => '慈利县',
                'type' => 3,
                'code' => 430821,
            ),
            45 => 
            array (
                'id' => 2046,
                'pid' => 222,
                'name' => '桑植县',
                'type' => 3,
                'code' => 430822,
            ),
            46 => 
            array (
                'id' => 2047,
                'pid' => 223,
                'name' => '资阳区',
                'type' => 3,
                'code' => 430902,
            ),
            47 => 
            array (
                'id' => 2048,
                'pid' => 223,
                'name' => '赫山区',
                'type' => 3,
                'code' => 430903,
            ),
            48 => 
            array (
                'id' => 2049,
                'pid' => 223,
                'name' => '南县',
                'type' => 3,
                'code' => 430921,
            ),
            49 => 
            array (
                'id' => 2050,
                'pid' => 223,
                'name' => '桃江县',
                'type' => 3,
                'code' => 430922,
            ),
            50 => 
            array (
                'id' => 2051,
                'pid' => 223,
                'name' => '安化县',
                'type' => 3,
                'code' => 430923,
            ),
            51 => 
            array (
                'id' => 2052,
                'pid' => 223,
                'name' => '沅江市',
                'type' => 3,
                'code' => 430981,
            ),
            52 => 
            array (
                'id' => 2053,
                'pid' => 224,
                'name' => '北湖区',
                'type' => 3,
                'code' => 431002,
            ),
            53 => 
            array (
                'id' => 2054,
                'pid' => 224,
                'name' => '苏仙区',
                'type' => 3,
                'code' => 431003,
            ),
            54 => 
            array (
                'id' => 2055,
                'pid' => 224,
                'name' => '桂阳县',
                'type' => 3,
                'code' => 431021,
            ),
            55 => 
            array (
                'id' => 2056,
                'pid' => 224,
                'name' => '宜章县',
                'type' => 3,
                'code' => 431022,
            ),
            56 => 
            array (
                'id' => 2057,
                'pid' => 224,
                'name' => '永兴县',
                'type' => 3,
                'code' => 431023,
            ),
            57 => 
            array (
                'id' => 2058,
                'pid' => 224,
                'name' => '嘉禾县',
                'type' => 3,
                'code' => 431024,
            ),
            58 => 
            array (
                'id' => 2059,
                'pid' => 224,
                'name' => '临武县',
                'type' => 3,
                'code' => 431025,
            ),
            59 => 
            array (
                'id' => 2060,
                'pid' => 224,
                'name' => '汝城县',
                'type' => 3,
                'code' => 431026,
            ),
            60 => 
            array (
                'id' => 2061,
                'pid' => 224,
                'name' => '桂东县',
                'type' => 3,
                'code' => 431027,
            ),
            61 => 
            array (
                'id' => 2062,
                'pid' => 224,
                'name' => '安仁县',
                'type' => 3,
                'code' => 431028,
            ),
            62 => 
            array (
                'id' => 2063,
                'pid' => 224,
                'name' => '资兴市',
                'type' => 3,
                'code' => 431081,
            ),
            63 => 
            array (
                'id' => 2064,
                'pid' => 225,
                'name' => '零陵区',
                'type' => 3,
                'code' => 431102,
            ),
            64 => 
            array (
                'id' => 2065,
                'pid' => 225,
                'name' => '冷水滩区',
                'type' => 3,
                'code' => 431103,
            ),
            65 => 
            array (
                'id' => 2066,
                'pid' => 225,
                'name' => '祁阳县',
                'type' => 3,
                'code' => 431121,
            ),
            66 => 
            array (
                'id' => 2067,
                'pid' => 225,
                'name' => '东安县',
                'type' => 3,
                'code' => 431122,
            ),
            67 => 
            array (
                'id' => 2068,
                'pid' => 225,
                'name' => '双牌县',
                'type' => 3,
                'code' => 431123,
            ),
            68 => 
            array (
                'id' => 2069,
                'pid' => 225,
                'name' => '道县',
                'type' => 3,
                'code' => 431124,
            ),
            69 => 
            array (
                'id' => 2070,
                'pid' => 225,
                'name' => '江永县',
                'type' => 3,
                'code' => 431125,
            ),
            70 => 
            array (
                'id' => 2071,
                'pid' => 225,
                'name' => '宁远县',
                'type' => 3,
                'code' => 431126,
            ),
            71 => 
            array (
                'id' => 2072,
                'pid' => 225,
                'name' => '蓝山县',
                'type' => 3,
                'code' => 431127,
            ),
            72 => 
            array (
                'id' => 2073,
                'pid' => 225,
                'name' => '新田县',
                'type' => 3,
                'code' => 431128,
            ),
            73 => 
            array (
                'id' => 2074,
                'pid' => 225,
                'name' => '江华瑶族自治县',
                'type' => 3,
                'code' => 431129,
            ),
            74 => 
            array (
                'id' => 2075,
                'pid' => 226,
                'name' => '鹤城区',
                'type' => 3,
                'code' => 431202,
            ),
            75 => 
            array (
                'id' => 2076,
                'pid' => 226,
                'name' => '中方县',
                'type' => 3,
                'code' => 431221,
            ),
            76 => 
            array (
                'id' => 2077,
                'pid' => 226,
                'name' => '沅陵县',
                'type' => 3,
                'code' => 431222,
            ),
            77 => 
            array (
                'id' => 2078,
                'pid' => 226,
                'name' => '辰溪县',
                'type' => 3,
                'code' => 431223,
            ),
            78 => 
            array (
                'id' => 2079,
                'pid' => 226,
                'name' => '溆浦县',
                'type' => 3,
                'code' => 431224,
            ),
            79 => 
            array (
                'id' => 2080,
                'pid' => 226,
                'name' => '会同县',
                'type' => 3,
                'code' => 431225,
            ),
            80 => 
            array (
                'id' => 2081,
                'pid' => 226,
                'name' => '麻阳苗族自治县',
                'type' => 3,
                'code' => 431226,
            ),
            81 => 
            array (
                'id' => 2082,
                'pid' => 226,
                'name' => '新晃侗族自治县',
                'type' => 3,
                'code' => 431227,
            ),
            82 => 
            array (
                'id' => 2083,
                'pid' => 226,
                'name' => '芷江侗族自治县',
                'type' => 3,
                'code' => 431228,
            ),
            83 => 
            array (
                'id' => 2084,
                'pid' => 226,
                'name' => '靖州苗族侗族自治县',
                'type' => 3,
                'code' => 431229,
            ),
            84 => 
            array (
                'id' => 2085,
                'pid' => 226,
                'name' => '通道侗族自治县',
                'type' => 3,
                'code' => 431230,
            ),
            85 => 
            array (
                'id' => 2086,
                'pid' => 226,
                'name' => '洪江市',
                'type' => 3,
                'code' => 431281,
            ),
            86 => 
            array (
                'id' => 2087,
                'pid' => 227,
                'name' => '娄星区',
                'type' => 3,
                'code' => 431302,
            ),
            87 => 
            array (
                'id' => 2088,
                'pid' => 227,
                'name' => '双峰县',
                'type' => 3,
                'code' => 431321,
            ),
            88 => 
            array (
                'id' => 2089,
                'pid' => 227,
                'name' => '新化县',
                'type' => 3,
                'code' => 431322,
            ),
            89 => 
            array (
                'id' => 2090,
                'pid' => 227,
                'name' => '冷水江市',
                'type' => 3,
                'code' => 431381,
            ),
            90 => 
            array (
                'id' => 2091,
                'pid' => 227,
                'name' => '涟源市',
                'type' => 3,
                'code' => 431382,
            ),
            91 => 
            array (
                'id' => 2092,
                'pid' => 228,
                'name' => '吉首市',
                'type' => 3,
                'code' => 433101,
            ),
            92 => 
            array (
                'id' => 2093,
                'pid' => 228,
                'name' => '泸溪县',
                'type' => 3,
                'code' => 433122,
            ),
            93 => 
            array (
                'id' => 2094,
                'pid' => 228,
                'name' => '凤凰县',
                'type' => 3,
                'code' => 433123,
            ),
            94 => 
            array (
                'id' => 2095,
                'pid' => 228,
                'name' => '花垣县',
                'type' => 3,
                'code' => 433124,
            ),
            95 => 
            array (
                'id' => 2096,
                'pid' => 228,
                'name' => '保靖县',
                'type' => 3,
                'code' => 433125,
            ),
            96 => 
            array (
                'id' => 2097,
                'pid' => 228,
                'name' => '古丈县',
                'type' => 3,
                'code' => 433126,
            ),
            97 => 
            array (
                'id' => 2098,
                'pid' => 228,
                'name' => '永顺县',
                'type' => 3,
                'code' => 433127,
            ),
            98 => 
            array (
                'id' => 2099,
                'pid' => 228,
                'name' => '龙山县',
                'type' => 3,
                'code' => 433130,
            ),
            99 => 
            array (
                'id' => 2100,
                'pid' => 229,
                'name' => '荔湾区',
                'type' => 3,
                'code' => 440103,
            ),
            100 => 
            array (
                'id' => 2101,
                'pid' => 229,
                'name' => '越秀区',
                'type' => 3,
                'code' => 440104,
            ),
            101 => 
            array (
                'id' => 2102,
                'pid' => 229,
                'name' => '海珠区',
                'type' => 3,
                'code' => 440105,
            ),
            102 => 
            array (
                'id' => 2103,
                'pid' => 229,
                'name' => '天河区',
                'type' => 3,
                'code' => 440106,
            ),
            103 => 
            array (
                'id' => 2104,
                'pid' => 229,
                'name' => '白云区',
                'type' => 3,
                'code' => 440111,
            ),
            104 => 
            array (
                'id' => 2105,
                'pid' => 229,
                'name' => '黄埔区',
                'type' => 3,
                'code' => 440112,
            ),
            105 => 
            array (
                'id' => 2106,
                'pid' => 229,
                'name' => '番禺区',
                'type' => 3,
                'code' => 440113,
            ),
            106 => 
            array (
                'id' => 2107,
                'pid' => 229,
                'name' => '花都区',
                'type' => 3,
                'code' => 440114,
            ),
            107 => 
            array (
                'id' => 2108,
                'pid' => 229,
                'name' => '南沙区',
                'type' => 3,
                'code' => 440115,
            ),
            108 => 
            array (
                'id' => 2109,
                'pid' => 229,
                'name' => '从化区',
                'type' => 3,
                'code' => 440117,
            ),
            109 => 
            array (
                'id' => 2110,
                'pid' => 229,
                'name' => '增城区',
                'type' => 3,
                'code' => 440118,
            ),
            110 => 
            array (
                'id' => 2111,
                'pid' => 230,
                'name' => '武江区',
                'type' => 3,
                'code' => 440203,
            ),
            111 => 
            array (
                'id' => 2112,
                'pid' => 230,
                'name' => '浈江区',
                'type' => 3,
                'code' => 440204,
            ),
            112 => 
            array (
                'id' => 2113,
                'pid' => 230,
                'name' => '曲江区',
                'type' => 3,
                'code' => 440205,
            ),
            113 => 
            array (
                'id' => 2114,
                'pid' => 230,
                'name' => '始兴县',
                'type' => 3,
                'code' => 440222,
            ),
            114 => 
            array (
                'id' => 2115,
                'pid' => 230,
                'name' => '仁化县',
                'type' => 3,
                'code' => 440224,
            ),
            115 => 
            array (
                'id' => 2116,
                'pid' => 230,
                'name' => '翁源县',
                'type' => 3,
                'code' => 440229,
            ),
            116 => 
            array (
                'id' => 2117,
                'pid' => 230,
                'name' => '乳源瑶族自治县',
                'type' => 3,
                'code' => 440232,
            ),
            117 => 
            array (
                'id' => 2118,
                'pid' => 230,
                'name' => '新丰县',
                'type' => 3,
                'code' => 440233,
            ),
            118 => 
            array (
                'id' => 2119,
                'pid' => 230,
                'name' => '乐昌市',
                'type' => 3,
                'code' => 440281,
            ),
            119 => 
            array (
                'id' => 2120,
                'pid' => 230,
                'name' => '南雄市',
                'type' => 3,
                'code' => 440282,
            ),
            120 => 
            array (
                'id' => 2121,
                'pid' => 231,
                'name' => '罗湖区',
                'type' => 3,
                'code' => 440303,
            ),
            121 => 
            array (
                'id' => 2122,
                'pid' => 231,
                'name' => '福田区',
                'type' => 3,
                'code' => 440304,
            ),
            122 => 
            array (
                'id' => 2123,
                'pid' => 231,
                'name' => '南山区',
                'type' => 3,
                'code' => 440305,
            ),
            123 => 
            array (
                'id' => 2124,
                'pid' => 231,
                'name' => '宝安区',
                'type' => 3,
                'code' => 440306,
            ),
            124 => 
            array (
                'id' => 2125,
                'pid' => 231,
                'name' => '龙岗区',
                'type' => 3,
                'code' => 440307,
            ),
            125 => 
            array (
                'id' => 2126,
                'pid' => 231,
                'name' => '盐田区',
                'type' => 3,
                'code' => 440308,
            ),
            126 => 
            array (
                'id' => 2127,
                'pid' => 232,
                'name' => '香洲区',
                'type' => 3,
                'code' => 440402,
            ),
            127 => 
            array (
                'id' => 2128,
                'pid' => 232,
                'name' => '斗门区',
                'type' => 3,
                'code' => 440403,
            ),
            128 => 
            array (
                'id' => 2129,
                'pid' => 232,
                'name' => '金湾区',
                'type' => 3,
                'code' => 440404,
            ),
            129 => 
            array (
                'id' => 2130,
                'pid' => 233,
                'name' => '龙湖区',
                'type' => 3,
                'code' => 440507,
            ),
            130 => 
            array (
                'id' => 2131,
                'pid' => 233,
                'name' => '金平区',
                'type' => 3,
                'code' => 440511,
            ),
            131 => 
            array (
                'id' => 2132,
                'pid' => 233,
                'name' => '濠江区',
                'type' => 3,
                'code' => 440512,
            ),
            132 => 
            array (
                'id' => 2133,
                'pid' => 233,
                'name' => '潮阳区',
                'type' => 3,
                'code' => 440513,
            ),
            133 => 
            array (
                'id' => 2134,
                'pid' => 233,
                'name' => '潮南区',
                'type' => 3,
                'code' => 440514,
            ),
            134 => 
            array (
                'id' => 2135,
                'pid' => 233,
                'name' => '澄海区',
                'type' => 3,
                'code' => 440515,
            ),
            135 => 
            array (
                'id' => 2136,
                'pid' => 233,
                'name' => '南澳县',
                'type' => 3,
                'code' => 440523,
            ),
            136 => 
            array (
                'id' => 2137,
                'pid' => 234,
                'name' => '禅城区',
                'type' => 3,
                'code' => 440604,
            ),
            137 => 
            array (
                'id' => 2138,
                'pid' => 234,
                'name' => '南海区',
                'type' => 3,
                'code' => 440605,
            ),
            138 => 
            array (
                'id' => 2139,
                'pid' => 234,
                'name' => '顺德区',
                'type' => 3,
                'code' => 440606,
            ),
            139 => 
            array (
                'id' => 2140,
                'pid' => 234,
                'name' => '三水区',
                'type' => 3,
                'code' => 440607,
            ),
            140 => 
            array (
                'id' => 2141,
                'pid' => 234,
                'name' => '高明区',
                'type' => 3,
                'code' => 440608,
            ),
            141 => 
            array (
                'id' => 2142,
                'pid' => 235,
                'name' => '蓬江区',
                'type' => 3,
                'code' => 440703,
            ),
            142 => 
            array (
                'id' => 2143,
                'pid' => 235,
                'name' => '江海区',
                'type' => 3,
                'code' => 440704,
            ),
            143 => 
            array (
                'id' => 2144,
                'pid' => 235,
                'name' => '新会区',
                'type' => 3,
                'code' => 440705,
            ),
            144 => 
            array (
                'id' => 2145,
                'pid' => 235,
                'name' => '台山市',
                'type' => 3,
                'code' => 440781,
            ),
            145 => 
            array (
                'id' => 2146,
                'pid' => 235,
                'name' => '开平市',
                'type' => 3,
                'code' => 440783,
            ),
            146 => 
            array (
                'id' => 2147,
                'pid' => 235,
                'name' => '鹤山市',
                'type' => 3,
                'code' => 440784,
            ),
            147 => 
            array (
                'id' => 2148,
                'pid' => 235,
                'name' => '恩平市',
                'type' => 3,
                'code' => 440785,
            ),
            148 => 
            array (
                'id' => 2149,
                'pid' => 236,
                'name' => '赤坎区',
                'type' => 3,
                'code' => 440802,
            ),
            149 => 
            array (
                'id' => 2150,
                'pid' => 236,
                'name' => '霞山区',
                'type' => 3,
                'code' => 440803,
            ),
            150 => 
            array (
                'id' => 2151,
                'pid' => 236,
                'name' => '坡头区',
                'type' => 3,
                'code' => 440804,
            ),
            151 => 
            array (
                'id' => 2152,
                'pid' => 236,
                'name' => '麻章区',
                'type' => 3,
                'code' => 440811,
            ),
            152 => 
            array (
                'id' => 2153,
                'pid' => 236,
                'name' => '遂溪县',
                'type' => 3,
                'code' => 440823,
            ),
            153 => 
            array (
                'id' => 2154,
                'pid' => 236,
                'name' => '徐闻县',
                'type' => 3,
                'code' => 440825,
            ),
            154 => 
            array (
                'id' => 2155,
                'pid' => 236,
                'name' => '廉江市',
                'type' => 3,
                'code' => 440881,
            ),
            155 => 
            array (
                'id' => 2156,
                'pid' => 236,
                'name' => '雷州市',
                'type' => 3,
                'code' => 440882,
            ),
            156 => 
            array (
                'id' => 2157,
                'pid' => 236,
                'name' => '吴川市',
                'type' => 3,
                'code' => 440883,
            ),
            157 => 
            array (
                'id' => 2158,
                'pid' => 237,
                'name' => '茂南区',
                'type' => 3,
                'code' => 440902,
            ),
            158 => 
            array (
                'id' => 2159,
                'pid' => 237,
                'name' => '电白区',
                'type' => 3,
                'code' => 440904,
            ),
            159 => 
            array (
                'id' => 2160,
                'pid' => 237,
                'name' => '高州市',
                'type' => 3,
                'code' => 440981,
            ),
            160 => 
            array (
                'id' => 2161,
                'pid' => 237,
                'name' => '化州市',
                'type' => 3,
                'code' => 440982,
            ),
            161 => 
            array (
                'id' => 2162,
                'pid' => 237,
                'name' => '信宜市',
                'type' => 3,
                'code' => 440983,
            ),
            162 => 
            array (
                'id' => 2163,
                'pid' => 238,
                'name' => '端州区',
                'type' => 3,
                'code' => 441202,
            ),
            163 => 
            array (
                'id' => 2164,
                'pid' => 238,
                'name' => '鼎湖区',
                'type' => 3,
                'code' => 441203,
            ),
            164 => 
            array (
                'id' => 2165,
                'pid' => 238,
                'name' => '高要区',
                'type' => 3,
                'code' => 441204,
            ),
            165 => 
            array (
                'id' => 2166,
                'pid' => 238,
                'name' => '广宁县',
                'type' => 3,
                'code' => 441223,
            ),
            166 => 
            array (
                'id' => 2167,
                'pid' => 238,
                'name' => '怀集县',
                'type' => 3,
                'code' => 441224,
            ),
            167 => 
            array (
                'id' => 2168,
                'pid' => 238,
                'name' => '封开县',
                'type' => 3,
                'code' => 441225,
            ),
            168 => 
            array (
                'id' => 2169,
                'pid' => 238,
                'name' => '德庆县',
                'type' => 3,
                'code' => 441226,
            ),
            169 => 
            array (
                'id' => 2170,
                'pid' => 238,
                'name' => '四会市',
                'type' => 3,
                'code' => 441284,
            ),
            170 => 
            array (
                'id' => 2171,
                'pid' => 239,
                'name' => '惠城区',
                'type' => 3,
                'code' => 441302,
            ),
            171 => 
            array (
                'id' => 2172,
                'pid' => 239,
                'name' => '惠阳区',
                'type' => 3,
                'code' => 441303,
            ),
            172 => 
            array (
                'id' => 2173,
                'pid' => 239,
                'name' => '博罗县',
                'type' => 3,
                'code' => 441322,
            ),
            173 => 
            array (
                'id' => 2174,
                'pid' => 239,
                'name' => '惠东县',
                'type' => 3,
                'code' => 441323,
            ),
            174 => 
            array (
                'id' => 2175,
                'pid' => 239,
                'name' => '龙门县',
                'type' => 3,
                'code' => 441324,
            ),
            175 => 
            array (
                'id' => 2176,
                'pid' => 240,
                'name' => '梅江区',
                'type' => 3,
                'code' => 441402,
            ),
            176 => 
            array (
                'id' => 2177,
                'pid' => 240,
                'name' => '梅县区',
                'type' => 3,
                'code' => 441403,
            ),
            177 => 
            array (
                'id' => 2178,
                'pid' => 240,
                'name' => '大埔县',
                'type' => 3,
                'code' => 441422,
            ),
            178 => 
            array (
                'id' => 2179,
                'pid' => 240,
                'name' => '丰顺县',
                'type' => 3,
                'code' => 441423,
            ),
            179 => 
            array (
                'id' => 2180,
                'pid' => 240,
                'name' => '五华县',
                'type' => 3,
                'code' => 441424,
            ),
            180 => 
            array (
                'id' => 2181,
                'pid' => 240,
                'name' => '平远县',
                'type' => 3,
                'code' => 441426,
            ),
            181 => 
            array (
                'id' => 2182,
                'pid' => 240,
                'name' => '蕉岭县',
                'type' => 3,
                'code' => 441427,
            ),
            182 => 
            array (
                'id' => 2183,
                'pid' => 240,
                'name' => '兴宁市',
                'type' => 3,
                'code' => 441481,
            ),
            183 => 
            array (
                'id' => 2184,
                'pid' => 241,
                'name' => '城区',
                'type' => 3,
                'code' => 441502,
            ),
            184 => 
            array (
                'id' => 2185,
                'pid' => 241,
                'name' => '海丰县',
                'type' => 3,
                'code' => 441521,
            ),
            185 => 
            array (
                'id' => 2186,
                'pid' => 241,
                'name' => '陆河县',
                'type' => 3,
                'code' => 441523,
            ),
            186 => 
            array (
                'id' => 2187,
                'pid' => 241,
                'name' => '陆丰市',
                'type' => 3,
                'code' => 441581,
            ),
            187 => 
            array (
                'id' => 2188,
                'pid' => 242,
                'name' => '源城区',
                'type' => 3,
                'code' => 441602,
            ),
            188 => 
            array (
                'id' => 2189,
                'pid' => 242,
                'name' => '紫金县',
                'type' => 3,
                'code' => 441621,
            ),
            189 => 
            array (
                'id' => 2190,
                'pid' => 242,
                'name' => '龙川县',
                'type' => 3,
                'code' => 441622,
            ),
            190 => 
            array (
                'id' => 2191,
                'pid' => 242,
                'name' => '连平县',
                'type' => 3,
                'code' => 441623,
            ),
            191 => 
            array (
                'id' => 2192,
                'pid' => 242,
                'name' => '和平县',
                'type' => 3,
                'code' => 441624,
            ),
            192 => 
            array (
                'id' => 2193,
                'pid' => 242,
                'name' => '东源县',
                'type' => 3,
                'code' => 441625,
            ),
            193 => 
            array (
                'id' => 2194,
                'pid' => 243,
                'name' => '江城区',
                'type' => 3,
                'code' => 441702,
            ),
            194 => 
            array (
                'id' => 2195,
                'pid' => 243,
                'name' => '阳东区',
                'type' => 3,
                'code' => 441704,
            ),
            195 => 
            array (
                'id' => 2196,
                'pid' => 243,
                'name' => '阳西县',
                'type' => 3,
                'code' => 441721,
            ),
            196 => 
            array (
                'id' => 2197,
                'pid' => 243,
                'name' => '阳春市',
                'type' => 3,
                'code' => 441781,
            ),
            197 => 
            array (
                'id' => 2198,
                'pid' => 244,
                'name' => '清城区',
                'type' => 3,
                'code' => 441802,
            ),
            198 => 
            array (
                'id' => 2199,
                'pid' => 244,
                'name' => '清新区',
                'type' => 3,
                'code' => 441803,
            ),
            199 => 
            array (
                'id' => 2200,
                'pid' => 244,
                'name' => '佛冈县',
                'type' => 3,
                'code' => 441821,
            ),
            200 => 
            array (
                'id' => 2201,
                'pid' => 244,
                'name' => '阳山县',
                'type' => 3,
                'code' => 441823,
            ),
            201 => 
            array (
                'id' => 2202,
                'pid' => 244,
                'name' => '连山壮族瑶族自治县',
                'type' => 3,
                'code' => 441825,
            ),
            202 => 
            array (
                'id' => 2203,
                'pid' => 244,
                'name' => '连南瑶族自治县',
                'type' => 3,
                'code' => 441826,
            ),
            203 => 
            array (
                'id' => 2204,
                'pid' => 244,
                'name' => '英德市',
                'type' => 3,
                'code' => 441881,
            ),
            204 => 
            array (
                'id' => 2205,
                'pid' => 244,
                'name' => '连州市',
                'type' => 3,
                'code' => 441882,
            ),
            205 => 
            array (
                'id' => 2206,
                'pid' => 245,
                'name' => '东莞市',
                'type' => 3,
                'code' => 441900,
            ),
            206 => 
            array (
                'id' => 2207,
                'pid' => 246,
                'name' => '中山市',
                'type' => 3,
                'code' => 442000,
            ),
            207 => 
            array (
                'id' => 2208,
                'pid' => 247,
                'name' => '湘桥区',
                'type' => 3,
                'code' => 445102,
            ),
            208 => 
            array (
                'id' => 2209,
                'pid' => 247,
                'name' => '潮安区',
                'type' => 3,
                'code' => 445103,
            ),
            209 => 
            array (
                'id' => 2210,
                'pid' => 247,
                'name' => '饶平县',
                'type' => 3,
                'code' => 445122,
            ),
            210 => 
            array (
                'id' => 2211,
                'pid' => 248,
                'name' => '榕城区',
                'type' => 3,
                'code' => 445202,
            ),
            211 => 
            array (
                'id' => 2212,
                'pid' => 248,
                'name' => '揭东区',
                'type' => 3,
                'code' => 445203,
            ),
            212 => 
            array (
                'id' => 2213,
                'pid' => 248,
                'name' => '揭西县',
                'type' => 3,
                'code' => 445222,
            ),
            213 => 
            array (
                'id' => 2214,
                'pid' => 248,
                'name' => '惠来县',
                'type' => 3,
                'code' => 445224,
            ),
            214 => 
            array (
                'id' => 2215,
                'pid' => 248,
                'name' => '普宁市',
                'type' => 3,
                'code' => 445281,
            ),
            215 => 
            array (
                'id' => 2216,
                'pid' => 249,
                'name' => '云城区',
                'type' => 3,
                'code' => 445302,
            ),
            216 => 
            array (
                'id' => 2217,
                'pid' => 249,
                'name' => '云安区',
                'type' => 3,
                'code' => 445303,
            ),
            217 => 
            array (
                'id' => 2218,
                'pid' => 249,
                'name' => '新兴县',
                'type' => 3,
                'code' => 445321,
            ),
            218 => 
            array (
                'id' => 2219,
                'pid' => 249,
                'name' => '郁南县',
                'type' => 3,
                'code' => 445322,
            ),
            219 => 
            array (
                'id' => 2220,
                'pid' => 249,
                'name' => '罗定市',
                'type' => 3,
                'code' => 445381,
            ),
            220 => 
            array (
                'id' => 2221,
                'pid' => 250,
                'name' => '兴宁区',
                'type' => 3,
                'code' => 450102,
            ),
            221 => 
            array (
                'id' => 2222,
                'pid' => 250,
                'name' => '青秀区',
                'type' => 3,
                'code' => 450103,
            ),
            222 => 
            array (
                'id' => 2223,
                'pid' => 250,
                'name' => '江南区',
                'type' => 3,
                'code' => 450105,
            ),
            223 => 
            array (
                'id' => 2224,
                'pid' => 250,
                'name' => '西乡塘区',
                'type' => 3,
                'code' => 450107,
            ),
            224 => 
            array (
                'id' => 2225,
                'pid' => 250,
                'name' => '良庆区',
                'type' => 3,
                'code' => 450108,
            ),
            225 => 
            array (
                'id' => 2226,
                'pid' => 250,
                'name' => '邕宁区',
                'type' => 3,
                'code' => 450109,
            ),
            226 => 
            array (
                'id' => 2227,
                'pid' => 250,
                'name' => '武鸣区',
                'type' => 3,
                'code' => 450110,
            ),
            227 => 
            array (
                'id' => 2228,
                'pid' => 250,
                'name' => '隆安县',
                'type' => 3,
                'code' => 450123,
            ),
            228 => 
            array (
                'id' => 2229,
                'pid' => 250,
                'name' => '马山县',
                'type' => 3,
                'code' => 450124,
            ),
            229 => 
            array (
                'id' => 2230,
                'pid' => 250,
                'name' => '上林县',
                'type' => 3,
                'code' => 450125,
            ),
            230 => 
            array (
                'id' => 2231,
                'pid' => 250,
                'name' => '宾阳县',
                'type' => 3,
                'code' => 450126,
            ),
            231 => 
            array (
                'id' => 2232,
                'pid' => 250,
                'name' => '横县',
                'type' => 3,
                'code' => 450127,
            ),
            232 => 
            array (
                'id' => 2233,
                'pid' => 251,
                'name' => '城中区',
                'type' => 3,
                'code' => 450202,
            ),
            233 => 
            array (
                'id' => 2234,
                'pid' => 251,
                'name' => '鱼峰区',
                'type' => 3,
                'code' => 450203,
            ),
            234 => 
            array (
                'id' => 2235,
                'pid' => 251,
                'name' => '柳南区',
                'type' => 3,
                'code' => 450204,
            ),
            235 => 
            array (
                'id' => 2236,
                'pid' => 251,
                'name' => '柳北区',
                'type' => 3,
                'code' => 450205,
            ),
            236 => 
            array (
                'id' => 2237,
                'pid' => 251,
                'name' => '柳江区',
                'type' => 3,
                'code' => 450206,
            ),
            237 => 
            array (
                'id' => 2238,
                'pid' => 251,
                'name' => '柳城县',
                'type' => 3,
                'code' => 450222,
            ),
            238 => 
            array (
                'id' => 2239,
                'pid' => 251,
                'name' => '鹿寨县',
                'type' => 3,
                'code' => 450223,
            ),
            239 => 
            array (
                'id' => 2240,
                'pid' => 251,
                'name' => '融安县',
                'type' => 3,
                'code' => 450224,
            ),
            240 => 
            array (
                'id' => 2241,
                'pid' => 251,
                'name' => '融水苗族自治县',
                'type' => 3,
                'code' => 450225,
            ),
            241 => 
            array (
                'id' => 2242,
                'pid' => 251,
                'name' => '三江侗族自治县',
                'type' => 3,
                'code' => 450226,
            ),
            242 => 
            array (
                'id' => 2243,
                'pid' => 252,
                'name' => '秀峰区',
                'type' => 3,
                'code' => 450302,
            ),
            243 => 
            array (
                'id' => 2244,
                'pid' => 252,
                'name' => '叠彩区',
                'type' => 3,
                'code' => 450303,
            ),
            244 => 
            array (
                'id' => 2245,
                'pid' => 252,
                'name' => '象山区',
                'type' => 3,
                'code' => 450304,
            ),
            245 => 
            array (
                'id' => 2246,
                'pid' => 252,
                'name' => '七星区',
                'type' => 3,
                'code' => 450305,
            ),
            246 => 
            array (
                'id' => 2247,
                'pid' => 252,
                'name' => '雁山区',
                'type' => 3,
                'code' => 450311,
            ),
            247 => 
            array (
                'id' => 2248,
                'pid' => 252,
                'name' => '临桂区',
                'type' => 3,
                'code' => 450312,
            ),
            248 => 
            array (
                'id' => 2249,
                'pid' => 252,
                'name' => '阳朔县',
                'type' => 3,
                'code' => 450321,
            ),
            249 => 
            array (
                'id' => 2250,
                'pid' => 252,
                'name' => '灵川县',
                'type' => 3,
                'code' => 450323,
            ),
            250 => 
            array (
                'id' => 2251,
                'pid' => 252,
                'name' => '全州县',
                'type' => 3,
                'code' => 450324,
            ),
            251 => 
            array (
                'id' => 2252,
                'pid' => 252,
                'name' => '兴安县',
                'type' => 3,
                'code' => 450325,
            ),
            252 => 
            array (
                'id' => 2253,
                'pid' => 252,
                'name' => '永福县',
                'type' => 3,
                'code' => 450326,
            ),
            253 => 
            array (
                'id' => 2254,
                'pid' => 252,
                'name' => '灌阳县',
                'type' => 3,
                'code' => 450327,
            ),
            254 => 
            array (
                'id' => 2255,
                'pid' => 252,
                'name' => '龙胜各族自治县',
                'type' => 3,
                'code' => 450328,
            ),
            255 => 
            array (
                'id' => 2256,
                'pid' => 252,
                'name' => '资源县',
                'type' => 3,
                'code' => 450329,
            ),
            256 => 
            array (
                'id' => 2257,
                'pid' => 252,
                'name' => '平乐县',
                'type' => 3,
                'code' => 450330,
            ),
            257 => 
            array (
                'id' => 2258,
                'pid' => 252,
                'name' => '荔浦县',
                'type' => 3,
                'code' => 450331,
            ),
            258 => 
            array (
                'id' => 2259,
                'pid' => 252,
                'name' => '恭城瑶族自治县',
                'type' => 3,
                'code' => 450332,
            ),
            259 => 
            array (
                'id' => 2260,
                'pid' => 253,
                'name' => '万秀区',
                'type' => 3,
                'code' => 450403,
            ),
            260 => 
            array (
                'id' => 2261,
                'pid' => 253,
                'name' => '长洲区',
                'type' => 3,
                'code' => 450405,
            ),
            261 => 
            array (
                'id' => 2262,
                'pid' => 253,
                'name' => '龙圩区',
                'type' => 3,
                'code' => 450406,
            ),
            262 => 
            array (
                'id' => 2263,
                'pid' => 253,
                'name' => '苍梧县',
                'type' => 3,
                'code' => 450421,
            ),
            263 => 
            array (
                'id' => 2264,
                'pid' => 253,
                'name' => '藤县',
                'type' => 3,
                'code' => 450422,
            ),
            264 => 
            array (
                'id' => 2265,
                'pid' => 253,
                'name' => '蒙山县',
                'type' => 3,
                'code' => 450423,
            ),
            265 => 
            array (
                'id' => 2266,
                'pid' => 253,
                'name' => '岑溪市',
                'type' => 3,
                'code' => 450481,
            ),
            266 => 
            array (
                'id' => 2267,
                'pid' => 254,
                'name' => '海城区',
                'type' => 3,
                'code' => 450502,
            ),
            267 => 
            array (
                'id' => 2268,
                'pid' => 254,
                'name' => '银海区',
                'type' => 3,
                'code' => 450503,
            ),
            268 => 
            array (
                'id' => 2269,
                'pid' => 254,
                'name' => '铁山港区',
                'type' => 3,
                'code' => 450512,
            ),
            269 => 
            array (
                'id' => 2270,
                'pid' => 254,
                'name' => '合浦县',
                'type' => 3,
                'code' => 450521,
            ),
            270 => 
            array (
                'id' => 2271,
                'pid' => 255,
                'name' => '港口区',
                'type' => 3,
                'code' => 450602,
            ),
            271 => 
            array (
                'id' => 2272,
                'pid' => 255,
                'name' => '防城区',
                'type' => 3,
                'code' => 450603,
            ),
            272 => 
            array (
                'id' => 2273,
                'pid' => 255,
                'name' => '上思县',
                'type' => 3,
                'code' => 450621,
            ),
            273 => 
            array (
                'id' => 2274,
                'pid' => 255,
                'name' => '东兴市',
                'type' => 3,
                'code' => 450681,
            ),
            274 => 
            array (
                'id' => 2275,
                'pid' => 256,
                'name' => '钦南区',
                'type' => 3,
                'code' => 450702,
            ),
            275 => 
            array (
                'id' => 2276,
                'pid' => 256,
                'name' => '钦北区',
                'type' => 3,
                'code' => 450703,
            ),
            276 => 
            array (
                'id' => 2277,
                'pid' => 256,
                'name' => '灵山县',
                'type' => 3,
                'code' => 450721,
            ),
            277 => 
            array (
                'id' => 2278,
                'pid' => 256,
                'name' => '浦北县',
                'type' => 3,
                'code' => 450722,
            ),
            278 => 
            array (
                'id' => 2279,
                'pid' => 257,
                'name' => '港北区',
                'type' => 3,
                'code' => 450802,
            ),
            279 => 
            array (
                'id' => 2280,
                'pid' => 257,
                'name' => '港南区',
                'type' => 3,
                'code' => 450803,
            ),
            280 => 
            array (
                'id' => 2281,
                'pid' => 257,
                'name' => '覃塘区',
                'type' => 3,
                'code' => 450804,
            ),
            281 => 
            array (
                'id' => 2282,
                'pid' => 257,
                'name' => '平南县',
                'type' => 3,
                'code' => 450821,
            ),
            282 => 
            array (
                'id' => 2283,
                'pid' => 257,
                'name' => '桂平市',
                'type' => 3,
                'code' => 450881,
            ),
            283 => 
            array (
                'id' => 2284,
                'pid' => 258,
                'name' => '玉州区',
                'type' => 3,
                'code' => 450902,
            ),
            284 => 
            array (
                'id' => 2285,
                'pid' => 258,
                'name' => '福绵区',
                'type' => 3,
                'code' => 450903,
            ),
            285 => 
            array (
                'id' => 2286,
                'pid' => 258,
                'name' => '容县',
                'type' => 3,
                'code' => 450921,
            ),
            286 => 
            array (
                'id' => 2287,
                'pid' => 258,
                'name' => '陆川县',
                'type' => 3,
                'code' => 450922,
            ),
            287 => 
            array (
                'id' => 2288,
                'pid' => 258,
                'name' => '博白县',
                'type' => 3,
                'code' => 450923,
            ),
            288 => 
            array (
                'id' => 2289,
                'pid' => 258,
                'name' => '兴业县',
                'type' => 3,
                'code' => 450924,
            ),
            289 => 
            array (
                'id' => 2290,
                'pid' => 258,
                'name' => '北流市',
                'type' => 3,
                'code' => 450981,
            ),
            290 => 
            array (
                'id' => 2291,
                'pid' => 259,
                'name' => '右江区',
                'type' => 3,
                'code' => 451002,
            ),
            291 => 
            array (
                'id' => 2292,
                'pid' => 259,
                'name' => '田阳县',
                'type' => 3,
                'code' => 451021,
            ),
            292 => 
            array (
                'id' => 2293,
                'pid' => 259,
                'name' => '田东县',
                'type' => 3,
                'code' => 451022,
            ),
            293 => 
            array (
                'id' => 2294,
                'pid' => 259,
                'name' => '平果县',
                'type' => 3,
                'code' => 451023,
            ),
            294 => 
            array (
                'id' => 2295,
                'pid' => 259,
                'name' => '德保县',
                'type' => 3,
                'code' => 451024,
            ),
            295 => 
            array (
                'id' => 2296,
                'pid' => 259,
                'name' => '那坡县',
                'type' => 3,
                'code' => 451026,
            ),
            296 => 
            array (
                'id' => 2297,
                'pid' => 259,
                'name' => '凌云县',
                'type' => 3,
                'code' => 451027,
            ),
            297 => 
            array (
                'id' => 2298,
                'pid' => 259,
                'name' => '乐业县',
                'type' => 3,
                'code' => 451028,
            ),
            298 => 
            array (
                'id' => 2299,
                'pid' => 259,
                'name' => '田林县',
                'type' => 3,
                'code' => 451029,
            ),
            299 => 
            array (
                'id' => 2300,
                'pid' => 259,
                'name' => '西林县',
                'type' => 3,
                'code' => 451030,
            ),
            300 => 
            array (
                'id' => 2301,
                'pid' => 259,
                'name' => '隆林各族自治县',
                'type' => 3,
                'code' => 451031,
            ),
            301 => 
            array (
                'id' => 2302,
                'pid' => 259,
                'name' => '靖西市',
                'type' => 3,
                'code' => 451081,
            ),
            302 => 
            array (
                'id' => 2303,
                'pid' => 260,
                'name' => '八步区',
                'type' => 3,
                'code' => 451102,
            ),
            303 => 
            array (
                'id' => 2304,
                'pid' => 260,
                'name' => '平桂区',
                'type' => 3,
                'code' => 451103,
            ),
            304 => 
            array (
                'id' => 2305,
                'pid' => 260,
                'name' => '昭平县',
                'type' => 3,
                'code' => 451121,
            ),
            305 => 
            array (
                'id' => 2306,
                'pid' => 260,
                'name' => '钟山县',
                'type' => 3,
                'code' => 451122,
            ),
            306 => 
            array (
                'id' => 2307,
                'pid' => 260,
                'name' => '富川瑶族自治县',
                'type' => 3,
                'code' => 451123,
            ),
            307 => 
            array (
                'id' => 2308,
                'pid' => 261,
                'name' => '金城江区',
                'type' => 3,
                'code' => 451202,
            ),
            308 => 
            array (
                'id' => 2309,
                'pid' => 261,
                'name' => '南丹县',
                'type' => 3,
                'code' => 451221,
            ),
            309 => 
            array (
                'id' => 2310,
                'pid' => 261,
                'name' => '天峨县',
                'type' => 3,
                'code' => 451222,
            ),
            310 => 
            array (
                'id' => 2311,
                'pid' => 261,
                'name' => '凤山县',
                'type' => 3,
                'code' => 451223,
            ),
            311 => 
            array (
                'id' => 2312,
                'pid' => 261,
                'name' => '东兰县',
                'type' => 3,
                'code' => 451224,
            ),
            312 => 
            array (
                'id' => 2313,
                'pid' => 261,
                'name' => '罗城仫佬族自治县',
                'type' => 3,
                'code' => 451225,
            ),
            313 => 
            array (
                'id' => 2314,
                'pid' => 261,
                'name' => '环江毛南族自治县',
                'type' => 3,
                'code' => 451226,
            ),
            314 => 
            array (
                'id' => 2315,
                'pid' => 261,
                'name' => '巴马瑶族自治县',
                'type' => 3,
                'code' => 451227,
            ),
            315 => 
            array (
                'id' => 2316,
                'pid' => 261,
                'name' => '都安瑶族自治县',
                'type' => 3,
                'code' => 451228,
            ),
            316 => 
            array (
                'id' => 2317,
                'pid' => 261,
                'name' => '大化瑶族自治县',
                'type' => 3,
                'code' => 451229,
            ),
            317 => 
            array (
                'id' => 2318,
                'pid' => 261,
                'name' => '宜州市',
                'type' => 3,
                'code' => 451281,
            ),
            318 => 
            array (
                'id' => 2319,
                'pid' => 262,
                'name' => '兴宾区',
                'type' => 3,
                'code' => 451302,
            ),
            319 => 
            array (
                'id' => 2320,
                'pid' => 262,
                'name' => '忻城县',
                'type' => 3,
                'code' => 451321,
            ),
            320 => 
            array (
                'id' => 2321,
                'pid' => 262,
                'name' => '象州县',
                'type' => 3,
                'code' => 451322,
            ),
            321 => 
            array (
                'id' => 2322,
                'pid' => 262,
                'name' => '武宣县',
                'type' => 3,
                'code' => 451323,
            ),
            322 => 
            array (
                'id' => 2323,
                'pid' => 262,
                'name' => '金秀瑶族自治县',
                'type' => 3,
                'code' => 451324,
            ),
            323 => 
            array (
                'id' => 2324,
                'pid' => 262,
                'name' => '合山市',
                'type' => 3,
                'code' => 451381,
            ),
            324 => 
            array (
                'id' => 2325,
                'pid' => 263,
                'name' => '江州区',
                'type' => 3,
                'code' => 451402,
            ),
            325 => 
            array (
                'id' => 2326,
                'pid' => 263,
                'name' => '扶绥县',
                'type' => 3,
                'code' => 451421,
            ),
            326 => 
            array (
                'id' => 2327,
                'pid' => 263,
                'name' => '宁明县',
                'type' => 3,
                'code' => 451422,
            ),
            327 => 
            array (
                'id' => 2328,
                'pid' => 263,
                'name' => '龙州县',
                'type' => 3,
                'code' => 451423,
            ),
            328 => 
            array (
                'id' => 2329,
                'pid' => 263,
                'name' => '大新县',
                'type' => 3,
                'code' => 451424,
            ),
            329 => 
            array (
                'id' => 2330,
                'pid' => 263,
                'name' => '天等县',
                'type' => 3,
                'code' => 451425,
            ),
            330 => 
            array (
                'id' => 2331,
                'pid' => 263,
                'name' => '凭祥市',
                'type' => 3,
                'code' => 451481,
            ),
            331 => 
            array (
                'id' => 2332,
                'pid' => 264,
                'name' => '秀英区',
                'type' => 3,
                'code' => 460105,
            ),
            332 => 
            array (
                'id' => 2333,
                'pid' => 264,
                'name' => '龙华区',
                'type' => 3,
                'code' => 460106,
            ),
            333 => 
            array (
                'id' => 2334,
                'pid' => 264,
                'name' => '琼山区',
                'type' => 3,
                'code' => 460107,
            ),
            334 => 
            array (
                'id' => 2335,
                'pid' => 264,
                'name' => '美兰区',
                'type' => 3,
                'code' => 460108,
            ),
            335 => 
            array (
                'id' => 2336,
                'pid' => 265,
                'name' => '市辖区',
                'type' => 3,
                'code' => 460201,
            ),
            336 => 
            array (
                'id' => 2337,
                'pid' => 265,
                'name' => '海棠区',
                'type' => 3,
                'code' => 460202,
            ),
            337 => 
            array (
                'id' => 2338,
                'pid' => 265,
                'name' => '吉阳区',
                'type' => 3,
                'code' => 460203,
            ),
            338 => 
            array (
                'id' => 2339,
                'pid' => 265,
                'name' => '天涯区',
                'type' => 3,
                'code' => 460204,
            ),
            339 => 
            array (
                'id' => 2340,
                'pid' => 265,
                'name' => '崖州区',
                'type' => 3,
                'code' => 460205,
            ),
            340 => 
            array (
                'id' => 2341,
                'pid' => 266,
                'name' => '西沙群岛',
                'type' => 3,
                'code' => 460321,
            ),
            341 => 
            array (
                'id' => 2342,
                'pid' => 266,
                'name' => '南沙群岛',
                'type' => 3,
                'code' => 460322,
            ),
            342 => 
            array (
                'id' => 2343,
                'pid' => 266,
                'name' => '中沙群岛的岛礁及其海域',
                'type' => 3,
                'code' => 460323,
            ),
            343 => 
            array (
                'id' => 2344,
                'pid' => 267,
                'name' => '儋州市',
                'type' => 3,
                'code' => 460400,
            ),
            344 => 
            array (
                'id' => 2345,
                'pid' => 268,
                'name' => '五指山市',
                'type' => 3,
                'code' => 469001,
            ),
            345 => 
            array (
                'id' => 2346,
                'pid' => 268,
                'name' => '琼海市',
                'type' => 3,
                'code' => 469002,
            ),
            346 => 
            array (
                'id' => 2347,
                'pid' => 268,
                'name' => '文昌市',
                'type' => 3,
                'code' => 469005,
            ),
            347 => 
            array (
                'id' => 2348,
                'pid' => 268,
                'name' => '万宁市',
                'type' => 3,
                'code' => 469006,
            ),
            348 => 
            array (
                'id' => 2349,
                'pid' => 268,
                'name' => '东方市',
                'type' => 3,
                'code' => 469007,
            ),
            349 => 
            array (
                'id' => 2350,
                'pid' => 268,
                'name' => '定安县',
                'type' => 3,
                'code' => 469021,
            ),
            350 => 
            array (
                'id' => 2351,
                'pid' => 268,
                'name' => '屯昌县',
                'type' => 3,
                'code' => 469022,
            ),
            351 => 
            array (
                'id' => 2352,
                'pid' => 268,
                'name' => '澄迈县',
                'type' => 3,
                'code' => 469023,
            ),
            352 => 
            array (
                'id' => 2353,
                'pid' => 268,
                'name' => '临高县',
                'type' => 3,
                'code' => 469024,
            ),
            353 => 
            array (
                'id' => 2354,
                'pid' => 268,
                'name' => '白沙黎族自治县',
                'type' => 3,
                'code' => 469025,
            ),
            354 => 
            array (
                'id' => 2355,
                'pid' => 268,
                'name' => '昌江黎族自治县',
                'type' => 3,
                'code' => 469026,
            ),
            355 => 
            array (
                'id' => 2356,
                'pid' => 268,
                'name' => '乐东黎族自治县',
                'type' => 3,
                'code' => 469027,
            ),
            356 => 
            array (
                'id' => 2357,
                'pid' => 268,
                'name' => '陵水黎族自治县',
                'type' => 3,
                'code' => 469028,
            ),
            357 => 
            array (
                'id' => 2358,
                'pid' => 268,
                'name' => '保亭黎族苗族自治县',
                'type' => 3,
                'code' => 469029,
            ),
            358 => 
            array (
                'id' => 2359,
                'pid' => 268,
                'name' => '琼中黎族苗族自治县',
                'type' => 3,
                'code' => 469030,
            ),
            359 => 
            array (
                'id' => 2360,
                'pid' => 269,
                'name' => '万州区',
                'type' => 3,
                'code' => 500101,
            ),
            360 => 
            array (
                'id' => 2361,
                'pid' => 269,
                'name' => '涪陵区',
                'type' => 3,
                'code' => 500102,
            ),
            361 => 
            array (
                'id' => 2362,
                'pid' => 269,
                'name' => '渝中区',
                'type' => 3,
                'code' => 500103,
            ),
            362 => 
            array (
                'id' => 2363,
                'pid' => 269,
                'name' => '大渡口区',
                'type' => 3,
                'code' => 500104,
            ),
            363 => 
            array (
                'id' => 2364,
                'pid' => 269,
                'name' => '江北区',
                'type' => 3,
                'code' => 500105,
            ),
            364 => 
            array (
                'id' => 2365,
                'pid' => 269,
                'name' => '沙坪坝区',
                'type' => 3,
                'code' => 500106,
            ),
            365 => 
            array (
                'id' => 2366,
                'pid' => 269,
                'name' => '九龙坡区',
                'type' => 3,
                'code' => 500107,
            ),
            366 => 
            array (
                'id' => 2367,
                'pid' => 269,
                'name' => '南岸区',
                'type' => 3,
                'code' => 500108,
            ),
            367 => 
            array (
                'id' => 2368,
                'pid' => 269,
                'name' => '北碚区',
                'type' => 3,
                'code' => 500109,
            ),
            368 => 
            array (
                'id' => 2369,
                'pid' => 269,
                'name' => '綦江区',
                'type' => 3,
                'code' => 500110,
            ),
            369 => 
            array (
                'id' => 2370,
                'pid' => 269,
                'name' => '大足区',
                'type' => 3,
                'code' => 500111,
            ),
            370 => 
            array (
                'id' => 2371,
                'pid' => 269,
                'name' => '渝北区',
                'type' => 3,
                'code' => 500112,
            ),
            371 => 
            array (
                'id' => 2372,
                'pid' => 269,
                'name' => '巴南区',
                'type' => 3,
                'code' => 500113,
            ),
            372 => 
            array (
                'id' => 2373,
                'pid' => 269,
                'name' => '黔江区',
                'type' => 3,
                'code' => 500114,
            ),
            373 => 
            array (
                'id' => 2374,
                'pid' => 269,
                'name' => '长寿区',
                'type' => 3,
                'code' => 500115,
            ),
            374 => 
            array (
                'id' => 2375,
                'pid' => 269,
                'name' => '江津区',
                'type' => 3,
                'code' => 500116,
            ),
            375 => 
            array (
                'id' => 2376,
                'pid' => 269,
                'name' => '合川区',
                'type' => 3,
                'code' => 500117,
            ),
            376 => 
            array (
                'id' => 2377,
                'pid' => 269,
                'name' => '永川区',
                'type' => 3,
                'code' => 500118,
            ),
            377 => 
            array (
                'id' => 2378,
                'pid' => 269,
                'name' => '南川区',
                'type' => 3,
                'code' => 500119,
            ),
            378 => 
            array (
                'id' => 2379,
                'pid' => 269,
                'name' => '璧山区',
                'type' => 3,
                'code' => 500120,
            ),
            379 => 
            array (
                'id' => 2380,
                'pid' => 269,
                'name' => '铜梁区',
                'type' => 3,
                'code' => 500151,
            ),
            380 => 
            array (
                'id' => 2381,
                'pid' => 269,
                'name' => '潼南区',
                'type' => 3,
                'code' => 500152,
            ),
            381 => 
            array (
                'id' => 2382,
                'pid' => 269,
                'name' => '荣昌区',
                'type' => 3,
                'code' => 500153,
            ),
            382 => 
            array (
                'id' => 2383,
                'pid' => 269,
                'name' => '开州区',
                'type' => 3,
                'code' => 500154,
            ),
            383 => 
            array (
                'id' => 2384,
                'pid' => 270,
                'name' => '梁平县',
                'type' => 3,
                'code' => 500228,
            ),
            384 => 
            array (
                'id' => 2385,
                'pid' => 270,
                'name' => '城口县',
                'type' => 3,
                'code' => 500229,
            ),
            385 => 
            array (
                'id' => 2386,
                'pid' => 270,
                'name' => '丰都县',
                'type' => 3,
                'code' => 500230,
            ),
            386 => 
            array (
                'id' => 2387,
                'pid' => 270,
                'name' => '垫江县',
                'type' => 3,
                'code' => 500231,
            ),
            387 => 
            array (
                'id' => 2388,
                'pid' => 270,
                'name' => '武隆县',
                'type' => 3,
                'code' => 500232,
            ),
            388 => 
            array (
                'id' => 2389,
                'pid' => 270,
                'name' => '忠县',
                'type' => 3,
                'code' => 500233,
            ),
            389 => 
            array (
                'id' => 2390,
                'pid' => 270,
                'name' => '云阳县',
                'type' => 3,
                'code' => 500235,
            ),
            390 => 
            array (
                'id' => 2391,
                'pid' => 270,
                'name' => '奉节县',
                'type' => 3,
                'code' => 500236,
            ),
            391 => 
            array (
                'id' => 2392,
                'pid' => 270,
                'name' => '巫山县',
                'type' => 3,
                'code' => 500237,
            ),
            392 => 
            array (
                'id' => 2393,
                'pid' => 270,
                'name' => '巫溪县',
                'type' => 3,
                'code' => 500238,
            ),
            393 => 
            array (
                'id' => 2394,
                'pid' => 270,
                'name' => '石柱土家族自治县',
                'type' => 3,
                'code' => 500240,
            ),
            394 => 
            array (
                'id' => 2395,
                'pid' => 270,
                'name' => '秀山土家族苗族自治县',
                'type' => 3,
                'code' => 500241,
            ),
            395 => 
            array (
                'id' => 2396,
                'pid' => 270,
                'name' => '酉阳土家族苗族自治县',
                'type' => 3,
                'code' => 500242,
            ),
            396 => 
            array (
                'id' => 2397,
                'pid' => 270,
                'name' => '彭水苗族土家族自治县',
                'type' => 3,
                'code' => 500243,
            ),
            397 => 
            array (
                'id' => 2398,
                'pid' => 271,
                'name' => '锦江区',
                'type' => 3,
                'code' => 510104,
            ),
            398 => 
            array (
                'id' => 2399,
                'pid' => 271,
                'name' => '青羊区',
                'type' => 3,
                'code' => 510105,
            ),
            399 => 
            array (
                'id' => 2400,
                'pid' => 271,
                'name' => '金牛区',
                'type' => 3,
                'code' => 510106,
            ),
            400 => 
            array (
                'id' => 2401,
                'pid' => 271,
                'name' => '武侯区',
                'type' => 3,
                'code' => 510107,
            ),
            401 => 
            array (
                'id' => 2402,
                'pid' => 271,
                'name' => '成华区',
                'type' => 3,
                'code' => 510108,
            ),
            402 => 
            array (
                'id' => 2403,
                'pid' => 271,
                'name' => '龙泉驿区',
                'type' => 3,
                'code' => 510112,
            ),
            403 => 
            array (
                'id' => 2404,
                'pid' => 271,
                'name' => '青白江区',
                'type' => 3,
                'code' => 510113,
            ),
            404 => 
            array (
                'id' => 2405,
                'pid' => 271,
                'name' => '新都区',
                'type' => 3,
                'code' => 510114,
            ),
            405 => 
            array (
                'id' => 2406,
                'pid' => 271,
                'name' => '温江区',
                'type' => 3,
                'code' => 510115,
            ),
            406 => 
            array (
                'id' => 2407,
                'pid' => 271,
                'name' => '双流区',
                'type' => 3,
                'code' => 510116,
            ),
            407 => 
            array (
                'id' => 2408,
                'pid' => 271,
                'name' => '金堂县',
                'type' => 3,
                'code' => 510121,
            ),
            408 => 
            array (
                'id' => 2409,
                'pid' => 271,
                'name' => '郫县',
                'type' => 3,
                'code' => 510124,
            ),
            409 => 
            array (
                'id' => 2410,
                'pid' => 271,
                'name' => '大邑县',
                'type' => 3,
                'code' => 510129,
            ),
            410 => 
            array (
                'id' => 2411,
                'pid' => 271,
                'name' => '蒲江县',
                'type' => 3,
                'code' => 510131,
            ),
            411 => 
            array (
                'id' => 2412,
                'pid' => 271,
                'name' => '新津县',
                'type' => 3,
                'code' => 510132,
            ),
            412 => 
            array (
                'id' => 2413,
                'pid' => 271,
                'name' => '都江堰市',
                'type' => 3,
                'code' => 510181,
            ),
            413 => 
            array (
                'id' => 2414,
                'pid' => 271,
                'name' => '彭州市',
                'type' => 3,
                'code' => 510182,
            ),
            414 => 
            array (
                'id' => 2415,
                'pid' => 271,
                'name' => '邛崃市',
                'type' => 3,
                'code' => 510183,
            ),
            415 => 
            array (
                'id' => 2416,
                'pid' => 271,
                'name' => '崇州市',
                'type' => 3,
                'code' => 510184,
            ),
            416 => 
            array (
                'id' => 2417,
                'pid' => 271,
                'name' => '简阳市',
                'type' => 3,
                'code' => 510185,
            ),
            417 => 
            array (
                'id' => 2418,
                'pid' => 272,
                'name' => '自流井区',
                'type' => 3,
                'code' => 510302,
            ),
            418 => 
            array (
                'id' => 2419,
                'pid' => 272,
                'name' => '贡井区',
                'type' => 3,
                'code' => 510303,
            ),
            419 => 
            array (
                'id' => 2420,
                'pid' => 272,
                'name' => '大安区',
                'type' => 3,
                'code' => 510304,
            ),
            420 => 
            array (
                'id' => 2421,
                'pid' => 272,
                'name' => '沿滩区',
                'type' => 3,
                'code' => 510311,
            ),
            421 => 
            array (
                'id' => 2422,
                'pid' => 272,
                'name' => '荣县',
                'type' => 3,
                'code' => 510321,
            ),
            422 => 
            array (
                'id' => 2423,
                'pid' => 272,
                'name' => '富顺县',
                'type' => 3,
                'code' => 510322,
            ),
            423 => 
            array (
                'id' => 2424,
                'pid' => 273,
                'name' => '东区',
                'type' => 3,
                'code' => 510402,
            ),
            424 => 
            array (
                'id' => 2425,
                'pid' => 273,
                'name' => '西区',
                'type' => 3,
                'code' => 510403,
            ),
            425 => 
            array (
                'id' => 2426,
                'pid' => 273,
                'name' => '仁和区',
                'type' => 3,
                'code' => 510411,
            ),
            426 => 
            array (
                'id' => 2427,
                'pid' => 273,
                'name' => '米易县',
                'type' => 3,
                'code' => 510421,
            ),
            427 => 
            array (
                'id' => 2428,
                'pid' => 273,
                'name' => '盐边县',
                'type' => 3,
                'code' => 510422,
            ),
            428 => 
            array (
                'id' => 2429,
                'pid' => 274,
                'name' => '江阳区',
                'type' => 3,
                'code' => 510502,
            ),
            429 => 
            array (
                'id' => 2430,
                'pid' => 274,
                'name' => '纳溪区',
                'type' => 3,
                'code' => 510503,
            ),
            430 => 
            array (
                'id' => 2431,
                'pid' => 274,
                'name' => '龙马潭区',
                'type' => 3,
                'code' => 510504,
            ),
            431 => 
            array (
                'id' => 2432,
                'pid' => 274,
                'name' => '泸县',
                'type' => 3,
                'code' => 510521,
            ),
            432 => 
            array (
                'id' => 2433,
                'pid' => 274,
                'name' => '合江县',
                'type' => 3,
                'code' => 510522,
            ),
            433 => 
            array (
                'id' => 2434,
                'pid' => 274,
                'name' => '叙永县',
                'type' => 3,
                'code' => 510524,
            ),
            434 => 
            array (
                'id' => 2435,
                'pid' => 274,
                'name' => '古蔺县',
                'type' => 3,
                'code' => 510525,
            ),
            435 => 
            array (
                'id' => 2436,
                'pid' => 275,
                'name' => '旌阳区',
                'type' => 3,
                'code' => 510603,
            ),
            436 => 
            array (
                'id' => 2437,
                'pid' => 275,
                'name' => '中江县',
                'type' => 3,
                'code' => 510623,
            ),
            437 => 
            array (
                'id' => 2438,
                'pid' => 275,
                'name' => '罗江县',
                'type' => 3,
                'code' => 510626,
            ),
            438 => 
            array (
                'id' => 2439,
                'pid' => 275,
                'name' => '广汉市',
                'type' => 3,
                'code' => 510681,
            ),
            439 => 
            array (
                'id' => 2440,
                'pid' => 275,
                'name' => '什邡市',
                'type' => 3,
                'code' => 510682,
            ),
            440 => 
            array (
                'id' => 2441,
                'pid' => 275,
                'name' => '绵竹市',
                'type' => 3,
                'code' => 510683,
            ),
            441 => 
            array (
                'id' => 2442,
                'pid' => 276,
                'name' => '涪城区',
                'type' => 3,
                'code' => 510703,
            ),
            442 => 
            array (
                'id' => 2443,
                'pid' => 276,
                'name' => '游仙区',
                'type' => 3,
                'code' => 510704,
            ),
            443 => 
            array (
                'id' => 2444,
                'pid' => 276,
                'name' => '安州区',
                'type' => 3,
                'code' => 510705,
            ),
            444 => 
            array (
                'id' => 2445,
                'pid' => 276,
                'name' => '三台县',
                'type' => 3,
                'code' => 510722,
            ),
            445 => 
            array (
                'id' => 2446,
                'pid' => 276,
                'name' => '盐亭县',
                'type' => 3,
                'code' => 510723,
            ),
            446 => 
            array (
                'id' => 2447,
                'pid' => 276,
                'name' => '梓潼县',
                'type' => 3,
                'code' => 510725,
            ),
            447 => 
            array (
                'id' => 2448,
                'pid' => 276,
                'name' => '北川羌族自治县',
                'type' => 3,
                'code' => 510726,
            ),
            448 => 
            array (
                'id' => 2449,
                'pid' => 276,
                'name' => '平武县',
                'type' => 3,
                'code' => 510727,
            ),
            449 => 
            array (
                'id' => 2450,
                'pid' => 276,
                'name' => '江油市',
                'type' => 3,
                'code' => 510781,
            ),
            450 => 
            array (
                'id' => 2451,
                'pid' => 277,
                'name' => '利州区',
                'type' => 3,
                'code' => 510802,
            ),
            451 => 
            array (
                'id' => 2452,
                'pid' => 277,
                'name' => '昭化区',
                'type' => 3,
                'code' => 510811,
            ),
            452 => 
            array (
                'id' => 2453,
                'pid' => 277,
                'name' => '朝天区',
                'type' => 3,
                'code' => 510812,
            ),
            453 => 
            array (
                'id' => 2454,
                'pid' => 277,
                'name' => '旺苍县',
                'type' => 3,
                'code' => 510821,
            ),
            454 => 
            array (
                'id' => 2455,
                'pid' => 277,
                'name' => '青川县',
                'type' => 3,
                'code' => 510822,
            ),
            455 => 
            array (
                'id' => 2456,
                'pid' => 277,
                'name' => '剑阁县',
                'type' => 3,
                'code' => 510823,
            ),
            456 => 
            array (
                'id' => 2457,
                'pid' => 277,
                'name' => '苍溪县',
                'type' => 3,
                'code' => 510824,
            ),
            457 => 
            array (
                'id' => 2458,
                'pid' => 278,
                'name' => '船山区',
                'type' => 3,
                'code' => 510903,
            ),
            458 => 
            array (
                'id' => 2459,
                'pid' => 278,
                'name' => '安居区',
                'type' => 3,
                'code' => 510904,
            ),
            459 => 
            array (
                'id' => 2460,
                'pid' => 278,
                'name' => '蓬溪县',
                'type' => 3,
                'code' => 510921,
            ),
            460 => 
            array (
                'id' => 2461,
                'pid' => 278,
                'name' => '射洪县',
                'type' => 3,
                'code' => 510922,
            ),
            461 => 
            array (
                'id' => 2462,
                'pid' => 278,
                'name' => '大英县',
                'type' => 3,
                'code' => 510923,
            ),
            462 => 
            array (
                'id' => 2463,
                'pid' => 279,
                'name' => '市中区',
                'type' => 3,
                'code' => 511002,
            ),
            463 => 
            array (
                'id' => 2464,
                'pid' => 279,
                'name' => '东兴区',
                'type' => 3,
                'code' => 511011,
            ),
            464 => 
            array (
                'id' => 2465,
                'pid' => 279,
                'name' => '威远县',
                'type' => 3,
                'code' => 511024,
            ),
            465 => 
            array (
                'id' => 2466,
                'pid' => 279,
                'name' => '资中县',
                'type' => 3,
                'code' => 511025,
            ),
            466 => 
            array (
                'id' => 2467,
                'pid' => 279,
                'name' => '隆昌县',
                'type' => 3,
                'code' => 511028,
            ),
            467 => 
            array (
                'id' => 2468,
                'pid' => 280,
                'name' => '市中区',
                'type' => 3,
                'code' => 511102,
            ),
            468 => 
            array (
                'id' => 2469,
                'pid' => 280,
                'name' => '沙湾区',
                'type' => 3,
                'code' => 511111,
            ),
            469 => 
            array (
                'id' => 2470,
                'pid' => 280,
                'name' => '五通桥区',
                'type' => 3,
                'code' => 511112,
            ),
            470 => 
            array (
                'id' => 2471,
                'pid' => 280,
                'name' => '金口河区',
                'type' => 3,
                'code' => 511113,
            ),
            471 => 
            array (
                'id' => 2472,
                'pid' => 280,
                'name' => '犍为县',
                'type' => 3,
                'code' => 511123,
            ),
            472 => 
            array (
                'id' => 2473,
                'pid' => 280,
                'name' => '井研县',
                'type' => 3,
                'code' => 511124,
            ),
            473 => 
            array (
                'id' => 2474,
                'pid' => 280,
                'name' => '夹江县',
                'type' => 3,
                'code' => 511126,
            ),
            474 => 
            array (
                'id' => 2475,
                'pid' => 280,
                'name' => '沐川县',
                'type' => 3,
                'code' => 511129,
            ),
            475 => 
            array (
                'id' => 2476,
                'pid' => 280,
                'name' => '峨边彝族自治县',
                'type' => 3,
                'code' => 511132,
            ),
            476 => 
            array (
                'id' => 2477,
                'pid' => 280,
                'name' => '马边彝族自治县',
                'type' => 3,
                'code' => 511133,
            ),
            477 => 
            array (
                'id' => 2478,
                'pid' => 280,
                'name' => '峨眉山市',
                'type' => 3,
                'code' => 511181,
            ),
            478 => 
            array (
                'id' => 2479,
                'pid' => 281,
                'name' => '顺庆区',
                'type' => 3,
                'code' => 511302,
            ),
            479 => 
            array (
                'id' => 2480,
                'pid' => 281,
                'name' => '高坪区',
                'type' => 3,
                'code' => 511303,
            ),
            480 => 
            array (
                'id' => 2481,
                'pid' => 281,
                'name' => '嘉陵区',
                'type' => 3,
                'code' => 511304,
            ),
            481 => 
            array (
                'id' => 2482,
                'pid' => 281,
                'name' => '南部县',
                'type' => 3,
                'code' => 511321,
            ),
            482 => 
            array (
                'id' => 2483,
                'pid' => 281,
                'name' => '营山县',
                'type' => 3,
                'code' => 511322,
            ),
            483 => 
            array (
                'id' => 2484,
                'pid' => 281,
                'name' => '蓬安县',
                'type' => 3,
                'code' => 511323,
            ),
            484 => 
            array (
                'id' => 2485,
                'pid' => 281,
                'name' => '仪陇县',
                'type' => 3,
                'code' => 511324,
            ),
            485 => 
            array (
                'id' => 2486,
                'pid' => 281,
                'name' => '西充县',
                'type' => 3,
                'code' => 511325,
            ),
            486 => 
            array (
                'id' => 2487,
                'pid' => 281,
                'name' => '阆中市',
                'type' => 3,
                'code' => 511381,
            ),
            487 => 
            array (
                'id' => 2488,
                'pid' => 282,
                'name' => '东坡区',
                'type' => 3,
                'code' => 511402,
            ),
            488 => 
            array (
                'id' => 2489,
                'pid' => 282,
                'name' => '彭山区',
                'type' => 3,
                'code' => 511403,
            ),
            489 => 
            array (
                'id' => 2490,
                'pid' => 282,
                'name' => '仁寿县',
                'type' => 3,
                'code' => 511421,
            ),
            490 => 
            array (
                'id' => 2491,
                'pid' => 282,
                'name' => '洪雅县',
                'type' => 3,
                'code' => 511423,
            ),
            491 => 
            array (
                'id' => 2492,
                'pid' => 282,
                'name' => '丹棱县',
                'type' => 3,
                'code' => 511424,
            ),
            492 => 
            array (
                'id' => 2493,
                'pid' => 282,
                'name' => '青神县',
                'type' => 3,
                'code' => 511425,
            ),
            493 => 
            array (
                'id' => 2494,
                'pid' => 283,
                'name' => '翠屏区',
                'type' => 3,
                'code' => 511502,
            ),
            494 => 
            array (
                'id' => 2495,
                'pid' => 283,
                'name' => '南溪区',
                'type' => 3,
                'code' => 511503,
            ),
            495 => 
            array (
                'id' => 2496,
                'pid' => 283,
                'name' => '宜宾县',
                'type' => 3,
                'code' => 511521,
            ),
            496 => 
            array (
                'id' => 2497,
                'pid' => 283,
                'name' => '江安县',
                'type' => 3,
                'code' => 511523,
            ),
            497 => 
            array (
                'id' => 2498,
                'pid' => 283,
                'name' => '长宁县',
                'type' => 3,
                'code' => 511524,
            ),
            498 => 
            array (
                'id' => 2499,
                'pid' => 283,
                'name' => '高县',
                'type' => 3,
                'code' => 511525,
            ),
            499 => 
            array (
                'id' => 2500,
                'pid' => 283,
                'name' => '珙县',
                'type' => 3,
                'code' => 511526,
            ),
        ));
        \DB::table('z_region')->insert(array (
            0 => 
            array (
                'id' => 2501,
                'pid' => 283,
                'name' => '筠连县',
                'type' => 3,
                'code' => 511527,
            ),
            1 => 
            array (
                'id' => 2502,
                'pid' => 283,
                'name' => '兴文县',
                'type' => 3,
                'code' => 511528,
            ),
            2 => 
            array (
                'id' => 2503,
                'pid' => 283,
                'name' => '屏山县',
                'type' => 3,
                'code' => 511529,
            ),
            3 => 
            array (
                'id' => 2504,
                'pid' => 284,
                'name' => '广安区',
                'type' => 3,
                'code' => 511602,
            ),
            4 => 
            array (
                'id' => 2505,
                'pid' => 284,
                'name' => '前锋区',
                'type' => 3,
                'code' => 511603,
            ),
            5 => 
            array (
                'id' => 2506,
                'pid' => 284,
                'name' => '岳池县',
                'type' => 3,
                'code' => 511621,
            ),
            6 => 
            array (
                'id' => 2507,
                'pid' => 284,
                'name' => '武胜县',
                'type' => 3,
                'code' => 511622,
            ),
            7 => 
            array (
                'id' => 2508,
                'pid' => 284,
                'name' => '邻水县',
                'type' => 3,
                'code' => 511623,
            ),
            8 => 
            array (
                'id' => 2509,
                'pid' => 284,
                'name' => '华蓥市',
                'type' => 3,
                'code' => 511681,
            ),
            9 => 
            array (
                'id' => 2510,
                'pid' => 285,
                'name' => '通川区',
                'type' => 3,
                'code' => 511702,
            ),
            10 => 
            array (
                'id' => 2511,
                'pid' => 285,
                'name' => '达川区',
                'type' => 3,
                'code' => 511703,
            ),
            11 => 
            array (
                'id' => 2512,
                'pid' => 285,
                'name' => '宣汉县',
                'type' => 3,
                'code' => 511722,
            ),
            12 => 
            array (
                'id' => 2513,
                'pid' => 285,
                'name' => '开江县',
                'type' => 3,
                'code' => 511723,
            ),
            13 => 
            array (
                'id' => 2514,
                'pid' => 285,
                'name' => '大竹县',
                'type' => 3,
                'code' => 511724,
            ),
            14 => 
            array (
                'id' => 2515,
                'pid' => 285,
                'name' => '渠县',
                'type' => 3,
                'code' => 511725,
            ),
            15 => 
            array (
                'id' => 2516,
                'pid' => 285,
                'name' => '万源市',
                'type' => 3,
                'code' => 511781,
            ),
            16 => 
            array (
                'id' => 2517,
                'pid' => 286,
                'name' => '雨城区',
                'type' => 3,
                'code' => 511802,
            ),
            17 => 
            array (
                'id' => 2518,
                'pid' => 286,
                'name' => '名山区',
                'type' => 3,
                'code' => 511803,
            ),
            18 => 
            array (
                'id' => 2519,
                'pid' => 286,
                'name' => '荥经县',
                'type' => 3,
                'code' => 511822,
            ),
            19 => 
            array (
                'id' => 2520,
                'pid' => 286,
                'name' => '汉源县',
                'type' => 3,
                'code' => 511823,
            ),
            20 => 
            array (
                'id' => 2521,
                'pid' => 286,
                'name' => '石棉县',
                'type' => 3,
                'code' => 511824,
            ),
            21 => 
            array (
                'id' => 2522,
                'pid' => 286,
                'name' => '天全县',
                'type' => 3,
                'code' => 511825,
            ),
            22 => 
            array (
                'id' => 2523,
                'pid' => 286,
                'name' => '芦山县',
                'type' => 3,
                'code' => 511826,
            ),
            23 => 
            array (
                'id' => 2524,
                'pid' => 286,
                'name' => '宝兴县',
                'type' => 3,
                'code' => 511827,
            ),
            24 => 
            array (
                'id' => 2525,
                'pid' => 287,
                'name' => '巴州区',
                'type' => 3,
                'code' => 511902,
            ),
            25 => 
            array (
                'id' => 2526,
                'pid' => 287,
                'name' => '恩阳区',
                'type' => 3,
                'code' => 511903,
            ),
            26 => 
            array (
                'id' => 2527,
                'pid' => 287,
                'name' => '通江县',
                'type' => 3,
                'code' => 511921,
            ),
            27 => 
            array (
                'id' => 2528,
                'pid' => 287,
                'name' => '南江县',
                'type' => 3,
                'code' => 511922,
            ),
            28 => 
            array (
                'id' => 2529,
                'pid' => 287,
                'name' => '平昌县',
                'type' => 3,
                'code' => 511923,
            ),
            29 => 
            array (
                'id' => 2530,
                'pid' => 288,
                'name' => '雁江区',
                'type' => 3,
                'code' => 512002,
            ),
            30 => 
            array (
                'id' => 2531,
                'pid' => 288,
                'name' => '安岳县',
                'type' => 3,
                'code' => 512021,
            ),
            31 => 
            array (
                'id' => 2532,
                'pid' => 288,
                'name' => '乐至县',
                'type' => 3,
                'code' => 512022,
            ),
            32 => 
            array (
                'id' => 2533,
                'pid' => 289,
                'name' => '马尔康市',
                'type' => 3,
                'code' => 513201,
            ),
            33 => 
            array (
                'id' => 2534,
                'pid' => 289,
                'name' => '汶川县',
                'type' => 3,
                'code' => 513221,
            ),
            34 => 
            array (
                'id' => 2535,
                'pid' => 289,
                'name' => '理县',
                'type' => 3,
                'code' => 513222,
            ),
            35 => 
            array (
                'id' => 2536,
                'pid' => 289,
                'name' => '茂县',
                'type' => 3,
                'code' => 513223,
            ),
            36 => 
            array (
                'id' => 2537,
                'pid' => 289,
                'name' => '松潘县',
                'type' => 3,
                'code' => 513224,
            ),
            37 => 
            array (
                'id' => 2538,
                'pid' => 289,
                'name' => '九寨沟县',
                'type' => 3,
                'code' => 513225,
            ),
            38 => 
            array (
                'id' => 2539,
                'pid' => 289,
                'name' => '金川县',
                'type' => 3,
                'code' => 513226,
            ),
            39 => 
            array (
                'id' => 2540,
                'pid' => 289,
                'name' => '小金县',
                'type' => 3,
                'code' => 513227,
            ),
            40 => 
            array (
                'id' => 2541,
                'pid' => 289,
                'name' => '黑水县',
                'type' => 3,
                'code' => 513228,
            ),
            41 => 
            array (
                'id' => 2542,
                'pid' => 289,
                'name' => '壤塘县',
                'type' => 3,
                'code' => 513230,
            ),
            42 => 
            array (
                'id' => 2543,
                'pid' => 289,
                'name' => '阿坝县',
                'type' => 3,
                'code' => 513231,
            ),
            43 => 
            array (
                'id' => 2544,
                'pid' => 289,
                'name' => '若尔盖县',
                'type' => 3,
                'code' => 513232,
            ),
            44 => 
            array (
                'id' => 2545,
                'pid' => 289,
                'name' => '红原县',
                'type' => 3,
                'code' => 513233,
            ),
            45 => 
            array (
                'id' => 2546,
                'pid' => 290,
                'name' => '康定市',
                'type' => 3,
                'code' => 513301,
            ),
            46 => 
            array (
                'id' => 2547,
                'pid' => 290,
                'name' => '泸定县',
                'type' => 3,
                'code' => 513322,
            ),
            47 => 
            array (
                'id' => 2548,
                'pid' => 290,
                'name' => '丹巴县',
                'type' => 3,
                'code' => 513323,
            ),
            48 => 
            array (
                'id' => 2549,
                'pid' => 290,
                'name' => '九龙县',
                'type' => 3,
                'code' => 513324,
            ),
            49 => 
            array (
                'id' => 2550,
                'pid' => 290,
                'name' => '雅江县',
                'type' => 3,
                'code' => 513325,
            ),
            50 => 
            array (
                'id' => 2551,
                'pid' => 290,
                'name' => '道孚县',
                'type' => 3,
                'code' => 513326,
            ),
            51 => 
            array (
                'id' => 2552,
                'pid' => 290,
                'name' => '炉霍县',
                'type' => 3,
                'code' => 513327,
            ),
            52 => 
            array (
                'id' => 2553,
                'pid' => 290,
                'name' => '甘孜县',
                'type' => 3,
                'code' => 513328,
            ),
            53 => 
            array (
                'id' => 2554,
                'pid' => 290,
                'name' => '新龙县',
                'type' => 3,
                'code' => 513329,
            ),
            54 => 
            array (
                'id' => 2555,
                'pid' => 290,
                'name' => '德格县',
                'type' => 3,
                'code' => 513330,
            ),
            55 => 
            array (
                'id' => 2556,
                'pid' => 290,
                'name' => '白玉县',
                'type' => 3,
                'code' => 513331,
            ),
            56 => 
            array (
                'id' => 2557,
                'pid' => 290,
                'name' => '石渠县',
                'type' => 3,
                'code' => 513332,
            ),
            57 => 
            array (
                'id' => 2558,
                'pid' => 290,
                'name' => '色达县',
                'type' => 3,
                'code' => 513333,
            ),
            58 => 
            array (
                'id' => 2559,
                'pid' => 290,
                'name' => '理塘县',
                'type' => 3,
                'code' => 513334,
            ),
            59 => 
            array (
                'id' => 2560,
                'pid' => 290,
                'name' => '巴塘县',
                'type' => 3,
                'code' => 513335,
            ),
            60 => 
            array (
                'id' => 2561,
                'pid' => 290,
                'name' => '乡城县',
                'type' => 3,
                'code' => 513336,
            ),
            61 => 
            array (
                'id' => 2562,
                'pid' => 290,
                'name' => '稻城县',
                'type' => 3,
                'code' => 513337,
            ),
            62 => 
            array (
                'id' => 2563,
                'pid' => 290,
                'name' => '得荣县',
                'type' => 3,
                'code' => 513338,
            ),
            63 => 
            array (
                'id' => 2564,
                'pid' => 291,
                'name' => '西昌市',
                'type' => 3,
                'code' => 513401,
            ),
            64 => 
            array (
                'id' => 2565,
                'pid' => 291,
                'name' => '木里藏族自治县',
                'type' => 3,
                'code' => 513422,
            ),
            65 => 
            array (
                'id' => 2566,
                'pid' => 291,
                'name' => '盐源县',
                'type' => 3,
                'code' => 513423,
            ),
            66 => 
            array (
                'id' => 2567,
                'pid' => 291,
                'name' => '德昌县',
                'type' => 3,
                'code' => 513424,
            ),
            67 => 
            array (
                'id' => 2568,
                'pid' => 291,
                'name' => '会理县',
                'type' => 3,
                'code' => 513425,
            ),
            68 => 
            array (
                'id' => 2569,
                'pid' => 291,
                'name' => '会东县',
                'type' => 3,
                'code' => 513426,
            ),
            69 => 
            array (
                'id' => 2570,
                'pid' => 291,
                'name' => '宁南县',
                'type' => 3,
                'code' => 513427,
            ),
            70 => 
            array (
                'id' => 2571,
                'pid' => 291,
                'name' => '普格县',
                'type' => 3,
                'code' => 513428,
            ),
            71 => 
            array (
                'id' => 2572,
                'pid' => 291,
                'name' => '布拖县',
                'type' => 3,
                'code' => 513429,
            ),
            72 => 
            array (
                'id' => 2573,
                'pid' => 291,
                'name' => '金阳县',
                'type' => 3,
                'code' => 513430,
            ),
            73 => 
            array (
                'id' => 2574,
                'pid' => 291,
                'name' => '昭觉县',
                'type' => 3,
                'code' => 513431,
            ),
            74 => 
            array (
                'id' => 2575,
                'pid' => 291,
                'name' => '喜德县',
                'type' => 3,
                'code' => 513432,
            ),
            75 => 
            array (
                'id' => 2576,
                'pid' => 291,
                'name' => '冕宁县',
                'type' => 3,
                'code' => 513433,
            ),
            76 => 
            array (
                'id' => 2577,
                'pid' => 291,
                'name' => '越西县',
                'type' => 3,
                'code' => 513434,
            ),
            77 => 
            array (
                'id' => 2578,
                'pid' => 291,
                'name' => '甘洛县',
                'type' => 3,
                'code' => 513435,
            ),
            78 => 
            array (
                'id' => 2579,
                'pid' => 291,
                'name' => '美姑县',
                'type' => 3,
                'code' => 513436,
            ),
            79 => 
            array (
                'id' => 2580,
                'pid' => 291,
                'name' => '雷波县',
                'type' => 3,
                'code' => 513437,
            ),
            80 => 
            array (
                'id' => 2581,
                'pid' => 292,
                'name' => '南明区',
                'type' => 3,
                'code' => 520102,
            ),
            81 => 
            array (
                'id' => 2582,
                'pid' => 292,
                'name' => '云岩区',
                'type' => 3,
                'code' => 520103,
            ),
            82 => 
            array (
                'id' => 2583,
                'pid' => 292,
                'name' => '花溪区',
                'type' => 3,
                'code' => 520111,
            ),
            83 => 
            array (
                'id' => 2584,
                'pid' => 292,
                'name' => '乌当区',
                'type' => 3,
                'code' => 520112,
            ),
            84 => 
            array (
                'id' => 2585,
                'pid' => 292,
                'name' => '白云区',
                'type' => 3,
                'code' => 520113,
            ),
            85 => 
            array (
                'id' => 2586,
                'pid' => 292,
                'name' => '观山湖区',
                'type' => 3,
                'code' => 520115,
            ),
            86 => 
            array (
                'id' => 2587,
                'pid' => 292,
                'name' => '开阳县',
                'type' => 3,
                'code' => 520121,
            ),
            87 => 
            array (
                'id' => 2588,
                'pid' => 292,
                'name' => '息烽县',
                'type' => 3,
                'code' => 520122,
            ),
            88 => 
            array (
                'id' => 2589,
                'pid' => 292,
                'name' => '修文县',
                'type' => 3,
                'code' => 520123,
            ),
            89 => 
            array (
                'id' => 2590,
                'pid' => 292,
                'name' => '清镇市',
                'type' => 3,
                'code' => 520181,
            ),
            90 => 
            array (
                'id' => 2591,
                'pid' => 293,
                'name' => '钟山区',
                'type' => 3,
                'code' => 520201,
            ),
            91 => 
            array (
                'id' => 2592,
                'pid' => 293,
                'name' => '六枝特区',
                'type' => 3,
                'code' => 520203,
            ),
            92 => 
            array (
                'id' => 2593,
                'pid' => 293,
                'name' => '水城县',
                'type' => 3,
                'code' => 520221,
            ),
            93 => 
            array (
                'id' => 2594,
                'pid' => 293,
                'name' => '盘县',
                'type' => 3,
                'code' => 520222,
            ),
            94 => 
            array (
                'id' => 2595,
                'pid' => 294,
                'name' => '红花岗区',
                'type' => 3,
                'code' => 520302,
            ),
            95 => 
            array (
                'id' => 2596,
                'pid' => 294,
                'name' => '汇川区',
                'type' => 3,
                'code' => 520303,
            ),
            96 => 
            array (
                'id' => 2597,
                'pid' => 294,
                'name' => '播州区',
                'type' => 3,
                'code' => 520304,
            ),
            97 => 
            array (
                'id' => 2598,
                'pid' => 294,
                'name' => '桐梓县',
                'type' => 3,
                'code' => 520322,
            ),
            98 => 
            array (
                'id' => 2599,
                'pid' => 294,
                'name' => '绥阳县',
                'type' => 3,
                'code' => 520323,
            ),
            99 => 
            array (
                'id' => 2600,
                'pid' => 294,
                'name' => '正安县',
                'type' => 3,
                'code' => 520324,
            ),
            100 => 
            array (
                'id' => 2601,
                'pid' => 294,
                'name' => '道真仡佬族苗族自治县',
                'type' => 3,
                'code' => 520325,
            ),
            101 => 
            array (
                'id' => 2602,
                'pid' => 294,
                'name' => '务川仡佬族苗族自治县',
                'type' => 3,
                'code' => 520326,
            ),
            102 => 
            array (
                'id' => 2603,
                'pid' => 294,
                'name' => '凤冈县',
                'type' => 3,
                'code' => 520327,
            ),
            103 => 
            array (
                'id' => 2604,
                'pid' => 294,
                'name' => '湄潭县',
                'type' => 3,
                'code' => 520328,
            ),
            104 => 
            array (
                'id' => 2605,
                'pid' => 294,
                'name' => '余庆县',
                'type' => 3,
                'code' => 520329,
            ),
            105 => 
            array (
                'id' => 2606,
                'pid' => 294,
                'name' => '习水县',
                'type' => 3,
                'code' => 520330,
            ),
            106 => 
            array (
                'id' => 2607,
                'pid' => 294,
                'name' => '赤水市',
                'type' => 3,
                'code' => 520381,
            ),
            107 => 
            array (
                'id' => 2608,
                'pid' => 294,
                'name' => '仁怀市',
                'type' => 3,
                'code' => 520382,
            ),
            108 => 
            array (
                'id' => 2609,
                'pid' => 295,
                'name' => '西秀区',
                'type' => 3,
                'code' => 520402,
            ),
            109 => 
            array (
                'id' => 2610,
                'pid' => 295,
                'name' => '平坝区',
                'type' => 3,
                'code' => 520403,
            ),
            110 => 
            array (
                'id' => 2611,
                'pid' => 295,
                'name' => '普定县',
                'type' => 3,
                'code' => 520422,
            ),
            111 => 
            array (
                'id' => 2612,
                'pid' => 295,
                'name' => '镇宁布依族苗族自治县',
                'type' => 3,
                'code' => 520423,
            ),
            112 => 
            array (
                'id' => 2613,
                'pid' => 295,
                'name' => '关岭布依族苗族自治县',
                'type' => 3,
                'code' => 520424,
            ),
            113 => 
            array (
                'id' => 2614,
                'pid' => 295,
                'name' => '紫云苗族布依族自治县',
                'type' => 3,
                'code' => 520425,
            ),
            114 => 
            array (
                'id' => 2615,
                'pid' => 296,
                'name' => '七星关区',
                'type' => 3,
                'code' => 520502,
            ),
            115 => 
            array (
                'id' => 2616,
                'pid' => 296,
                'name' => '大方县',
                'type' => 3,
                'code' => 520521,
            ),
            116 => 
            array (
                'id' => 2617,
                'pid' => 296,
                'name' => '黔西县',
                'type' => 3,
                'code' => 520522,
            ),
            117 => 
            array (
                'id' => 2618,
                'pid' => 296,
                'name' => '金沙县',
                'type' => 3,
                'code' => 520523,
            ),
            118 => 
            array (
                'id' => 2619,
                'pid' => 296,
                'name' => '织金县',
                'type' => 3,
                'code' => 520524,
            ),
            119 => 
            array (
                'id' => 2620,
                'pid' => 296,
                'name' => '纳雍县',
                'type' => 3,
                'code' => 520525,
            ),
            120 => 
            array (
                'id' => 2621,
                'pid' => 296,
                'name' => '威宁彝族回族苗族自治县',
                'type' => 3,
                'code' => 520526,
            ),
            121 => 
            array (
                'id' => 2622,
                'pid' => 296,
                'name' => '赫章县',
                'type' => 3,
                'code' => 520527,
            ),
            122 => 
            array (
                'id' => 2623,
                'pid' => 297,
                'name' => '碧江区',
                'type' => 3,
                'code' => 520602,
            ),
            123 => 
            array (
                'id' => 2624,
                'pid' => 297,
                'name' => '万山区',
                'type' => 3,
                'code' => 520603,
            ),
            124 => 
            array (
                'id' => 2625,
                'pid' => 297,
                'name' => '江口县',
                'type' => 3,
                'code' => 520621,
            ),
            125 => 
            array (
                'id' => 2626,
                'pid' => 297,
                'name' => '玉屏侗族自治县',
                'type' => 3,
                'code' => 520622,
            ),
            126 => 
            array (
                'id' => 2627,
                'pid' => 297,
                'name' => '石阡县',
                'type' => 3,
                'code' => 520623,
            ),
            127 => 
            array (
                'id' => 2628,
                'pid' => 297,
                'name' => '思南县',
                'type' => 3,
                'code' => 520624,
            ),
            128 => 
            array (
                'id' => 2629,
                'pid' => 297,
                'name' => '印江土家族苗族自治县',
                'type' => 3,
                'code' => 520625,
            ),
            129 => 
            array (
                'id' => 2630,
                'pid' => 297,
                'name' => '德江县',
                'type' => 3,
                'code' => 520626,
            ),
            130 => 
            array (
                'id' => 2631,
                'pid' => 297,
                'name' => '沿河土家族自治县',
                'type' => 3,
                'code' => 520627,
            ),
            131 => 
            array (
                'id' => 2632,
                'pid' => 297,
                'name' => '松桃苗族自治县',
                'type' => 3,
                'code' => 520628,
            ),
            132 => 
            array (
                'id' => 2633,
                'pid' => 298,
                'name' => '兴义市',
                'type' => 3,
                'code' => 522301,
            ),
            133 => 
            array (
                'id' => 2634,
                'pid' => 298,
                'name' => '兴仁县',
                'type' => 3,
                'code' => 522322,
            ),
            134 => 
            array (
                'id' => 2635,
                'pid' => 298,
                'name' => '普安县',
                'type' => 3,
                'code' => 522323,
            ),
            135 => 
            array (
                'id' => 2636,
                'pid' => 298,
                'name' => '晴隆县',
                'type' => 3,
                'code' => 522324,
            ),
            136 => 
            array (
                'id' => 2637,
                'pid' => 298,
                'name' => '贞丰县',
                'type' => 3,
                'code' => 522325,
            ),
            137 => 
            array (
                'id' => 2638,
                'pid' => 298,
                'name' => '望谟县',
                'type' => 3,
                'code' => 522326,
            ),
            138 => 
            array (
                'id' => 2639,
                'pid' => 298,
                'name' => '册亨县',
                'type' => 3,
                'code' => 522327,
            ),
            139 => 
            array (
                'id' => 2640,
                'pid' => 298,
                'name' => '安龙县',
                'type' => 3,
                'code' => 522328,
            ),
            140 => 
            array (
                'id' => 2641,
                'pid' => 299,
                'name' => '凯里市',
                'type' => 3,
                'code' => 522601,
            ),
            141 => 
            array (
                'id' => 2642,
                'pid' => 299,
                'name' => '黄平县',
                'type' => 3,
                'code' => 522622,
            ),
            142 => 
            array (
                'id' => 2643,
                'pid' => 299,
                'name' => '施秉县',
                'type' => 3,
                'code' => 522623,
            ),
            143 => 
            array (
                'id' => 2644,
                'pid' => 299,
                'name' => '三穗县',
                'type' => 3,
                'code' => 522624,
            ),
            144 => 
            array (
                'id' => 2645,
                'pid' => 299,
                'name' => '镇远县',
                'type' => 3,
                'code' => 522625,
            ),
            145 => 
            array (
                'id' => 2646,
                'pid' => 299,
                'name' => '岑巩县',
                'type' => 3,
                'code' => 522626,
            ),
            146 => 
            array (
                'id' => 2647,
                'pid' => 299,
                'name' => '天柱县',
                'type' => 3,
                'code' => 522627,
            ),
            147 => 
            array (
                'id' => 2648,
                'pid' => 299,
                'name' => '锦屏县',
                'type' => 3,
                'code' => 522628,
            ),
            148 => 
            array (
                'id' => 2649,
                'pid' => 299,
                'name' => '剑河县',
                'type' => 3,
                'code' => 522629,
            ),
            149 => 
            array (
                'id' => 2650,
                'pid' => 299,
                'name' => '台江县',
                'type' => 3,
                'code' => 522630,
            ),
            150 => 
            array (
                'id' => 2651,
                'pid' => 299,
                'name' => '黎平县',
                'type' => 3,
                'code' => 522631,
            ),
            151 => 
            array (
                'id' => 2652,
                'pid' => 299,
                'name' => '榕江县',
                'type' => 3,
                'code' => 522632,
            ),
            152 => 
            array (
                'id' => 2653,
                'pid' => 299,
                'name' => '从江县',
                'type' => 3,
                'code' => 522633,
            ),
            153 => 
            array (
                'id' => 2654,
                'pid' => 299,
                'name' => '雷山县',
                'type' => 3,
                'code' => 522634,
            ),
            154 => 
            array (
                'id' => 2655,
                'pid' => 299,
                'name' => '麻江县',
                'type' => 3,
                'code' => 522635,
            ),
            155 => 
            array (
                'id' => 2656,
                'pid' => 299,
                'name' => '丹寨县',
                'type' => 3,
                'code' => 522636,
            ),
            156 => 
            array (
                'id' => 2657,
                'pid' => 300,
                'name' => '都匀市',
                'type' => 3,
                'code' => 522701,
            ),
            157 => 
            array (
                'id' => 2658,
                'pid' => 300,
                'name' => '福泉市',
                'type' => 3,
                'code' => 522702,
            ),
            158 => 
            array (
                'id' => 2659,
                'pid' => 300,
                'name' => '荔波县',
                'type' => 3,
                'code' => 522722,
            ),
            159 => 
            array (
                'id' => 2660,
                'pid' => 300,
                'name' => '贵定县',
                'type' => 3,
                'code' => 522723,
            ),
            160 => 
            array (
                'id' => 2661,
                'pid' => 300,
                'name' => '瓮安县',
                'type' => 3,
                'code' => 522725,
            ),
            161 => 
            array (
                'id' => 2662,
                'pid' => 300,
                'name' => '独山县',
                'type' => 3,
                'code' => 522726,
            ),
            162 => 
            array (
                'id' => 2663,
                'pid' => 300,
                'name' => '平塘县',
                'type' => 3,
                'code' => 522727,
            ),
            163 => 
            array (
                'id' => 2664,
                'pid' => 300,
                'name' => '罗甸县',
                'type' => 3,
                'code' => 522728,
            ),
            164 => 
            array (
                'id' => 2665,
                'pid' => 300,
                'name' => '长顺县',
                'type' => 3,
                'code' => 522729,
            ),
            165 => 
            array (
                'id' => 2666,
                'pid' => 300,
                'name' => '龙里县',
                'type' => 3,
                'code' => 522730,
            ),
            166 => 
            array (
                'id' => 2667,
                'pid' => 300,
                'name' => '惠水县',
                'type' => 3,
                'code' => 522731,
            ),
            167 => 
            array (
                'id' => 2668,
                'pid' => 300,
                'name' => '三都水族自治县',
                'type' => 3,
                'code' => 522732,
            ),
            168 => 
            array (
                'id' => 2669,
                'pid' => 301,
                'name' => '五华区',
                'type' => 3,
                'code' => 530102,
            ),
            169 => 
            array (
                'id' => 2670,
                'pid' => 301,
                'name' => '盘龙区',
                'type' => 3,
                'code' => 530103,
            ),
            170 => 
            array (
                'id' => 2671,
                'pid' => 301,
                'name' => '官渡区',
                'type' => 3,
                'code' => 530111,
            ),
            171 => 
            array (
                'id' => 2672,
                'pid' => 301,
                'name' => '西山区',
                'type' => 3,
                'code' => 530112,
            ),
            172 => 
            array (
                'id' => 2673,
                'pid' => 301,
                'name' => '东川区',
                'type' => 3,
                'code' => 530113,
            ),
            173 => 
            array (
                'id' => 2674,
                'pid' => 301,
                'name' => '呈贡区',
                'type' => 3,
                'code' => 530114,
            ),
            174 => 
            array (
                'id' => 2675,
                'pid' => 301,
                'name' => '晋宁县',
                'type' => 3,
                'code' => 530122,
            ),
            175 => 
            array (
                'id' => 2676,
                'pid' => 301,
                'name' => '富民县',
                'type' => 3,
                'code' => 530124,
            ),
            176 => 
            array (
                'id' => 2677,
                'pid' => 301,
                'name' => '宜良县',
                'type' => 3,
                'code' => 530125,
            ),
            177 => 
            array (
                'id' => 2678,
                'pid' => 301,
                'name' => '石林彝族自治县',
                'type' => 3,
                'code' => 530126,
            ),
            178 => 
            array (
                'id' => 2679,
                'pid' => 301,
                'name' => '嵩明县',
                'type' => 3,
                'code' => 530127,
            ),
            179 => 
            array (
                'id' => 2680,
                'pid' => 301,
                'name' => '禄劝彝族苗族自治县',
                'type' => 3,
                'code' => 530128,
            ),
            180 => 
            array (
                'id' => 2681,
                'pid' => 301,
                'name' => '寻甸回族彝族自治县',
                'type' => 3,
                'code' => 530129,
            ),
            181 => 
            array (
                'id' => 2682,
                'pid' => 301,
                'name' => '安宁市',
                'type' => 3,
                'code' => 530181,
            ),
            182 => 
            array (
                'id' => 2683,
                'pid' => 302,
                'name' => '麒麟区',
                'type' => 3,
                'code' => 530302,
            ),
            183 => 
            array (
                'id' => 2684,
                'pid' => 302,
                'name' => '沾益区',
                'type' => 3,
                'code' => 530303,
            ),
            184 => 
            array (
                'id' => 2685,
                'pid' => 302,
                'name' => '马龙县',
                'type' => 3,
                'code' => 530321,
            ),
            185 => 
            array (
                'id' => 2686,
                'pid' => 302,
                'name' => '陆良县',
                'type' => 3,
                'code' => 530322,
            ),
            186 => 
            array (
                'id' => 2687,
                'pid' => 302,
                'name' => '师宗县',
                'type' => 3,
                'code' => 530323,
            ),
            187 => 
            array (
                'id' => 2688,
                'pid' => 302,
                'name' => '罗平县',
                'type' => 3,
                'code' => 530324,
            ),
            188 => 
            array (
                'id' => 2689,
                'pid' => 302,
                'name' => '富源县',
                'type' => 3,
                'code' => 530325,
            ),
            189 => 
            array (
                'id' => 2690,
                'pid' => 302,
                'name' => '会泽县',
                'type' => 3,
                'code' => 530326,
            ),
            190 => 
            array (
                'id' => 2691,
                'pid' => 302,
                'name' => '宣威市',
                'type' => 3,
                'code' => 530381,
            ),
            191 => 
            array (
                'id' => 2692,
                'pid' => 303,
                'name' => '红塔区',
                'type' => 3,
                'code' => 530402,
            ),
            192 => 
            array (
                'id' => 2693,
                'pid' => 303,
                'name' => '江川区',
                'type' => 3,
                'code' => 530403,
            ),
            193 => 
            array (
                'id' => 2694,
                'pid' => 303,
                'name' => '澄江县',
                'type' => 3,
                'code' => 530422,
            ),
            194 => 
            array (
                'id' => 2695,
                'pid' => 303,
                'name' => '通海县',
                'type' => 3,
                'code' => 530423,
            ),
            195 => 
            array (
                'id' => 2696,
                'pid' => 303,
                'name' => '华宁县',
                'type' => 3,
                'code' => 530424,
            ),
            196 => 
            array (
                'id' => 2697,
                'pid' => 303,
                'name' => '易门县',
                'type' => 3,
                'code' => 530425,
            ),
            197 => 
            array (
                'id' => 2698,
                'pid' => 303,
                'name' => '峨山彝族自治县',
                'type' => 3,
                'code' => 530426,
            ),
            198 => 
            array (
                'id' => 2699,
                'pid' => 303,
                'name' => '新平彝族傣族自治县',
                'type' => 3,
                'code' => 530427,
            ),
            199 => 
            array (
                'id' => 2700,
                'pid' => 303,
                'name' => '元江哈尼族彝族傣族自治县',
                'type' => 3,
                'code' => 530428,
            ),
            200 => 
            array (
                'id' => 2701,
                'pid' => 304,
                'name' => '隆阳区',
                'type' => 3,
                'code' => 530502,
            ),
            201 => 
            array (
                'id' => 2702,
                'pid' => 304,
                'name' => '施甸县',
                'type' => 3,
                'code' => 530521,
            ),
            202 => 
            array (
                'id' => 2703,
                'pid' => 304,
                'name' => '龙陵县',
                'type' => 3,
                'code' => 530523,
            ),
            203 => 
            array (
                'id' => 2704,
                'pid' => 304,
                'name' => '昌宁县',
                'type' => 3,
                'code' => 530524,
            ),
            204 => 
            array (
                'id' => 2705,
                'pid' => 304,
                'name' => '腾冲市',
                'type' => 3,
                'code' => 530581,
            ),
            205 => 
            array (
                'id' => 2706,
                'pid' => 305,
                'name' => '昭阳区',
                'type' => 3,
                'code' => 530602,
            ),
            206 => 
            array (
                'id' => 2707,
                'pid' => 305,
                'name' => '鲁甸县',
                'type' => 3,
                'code' => 530621,
            ),
            207 => 
            array (
                'id' => 2708,
                'pid' => 305,
                'name' => '巧家县',
                'type' => 3,
                'code' => 530622,
            ),
            208 => 
            array (
                'id' => 2709,
                'pid' => 305,
                'name' => '盐津县',
                'type' => 3,
                'code' => 530623,
            ),
            209 => 
            array (
                'id' => 2710,
                'pid' => 305,
                'name' => '大关县',
                'type' => 3,
                'code' => 530624,
            ),
            210 => 
            array (
                'id' => 2711,
                'pid' => 305,
                'name' => '永善县',
                'type' => 3,
                'code' => 530625,
            ),
            211 => 
            array (
                'id' => 2712,
                'pid' => 305,
                'name' => '绥江县',
                'type' => 3,
                'code' => 530626,
            ),
            212 => 
            array (
                'id' => 2713,
                'pid' => 305,
                'name' => '镇雄县',
                'type' => 3,
                'code' => 530627,
            ),
            213 => 
            array (
                'id' => 2714,
                'pid' => 305,
                'name' => '彝良县',
                'type' => 3,
                'code' => 530628,
            ),
            214 => 
            array (
                'id' => 2715,
                'pid' => 305,
                'name' => '威信县',
                'type' => 3,
                'code' => 530629,
            ),
            215 => 
            array (
                'id' => 2716,
                'pid' => 305,
                'name' => '水富县',
                'type' => 3,
                'code' => 530630,
            ),
            216 => 
            array (
                'id' => 2717,
                'pid' => 306,
                'name' => '古城区',
                'type' => 3,
                'code' => 530702,
            ),
            217 => 
            array (
                'id' => 2718,
                'pid' => 306,
                'name' => '玉龙纳西族自治县',
                'type' => 3,
                'code' => 530721,
            ),
            218 => 
            array (
                'id' => 2719,
                'pid' => 306,
                'name' => '永胜县',
                'type' => 3,
                'code' => 530722,
            ),
            219 => 
            array (
                'id' => 2720,
                'pid' => 306,
                'name' => '华坪县',
                'type' => 3,
                'code' => 530723,
            ),
            220 => 
            array (
                'id' => 2721,
                'pid' => 306,
                'name' => '宁蒗彝族自治县',
                'type' => 3,
                'code' => 530724,
            ),
            221 => 
            array (
                'id' => 2722,
                'pid' => 307,
                'name' => '思茅区',
                'type' => 3,
                'code' => 530802,
            ),
            222 => 
            array (
                'id' => 2723,
                'pid' => 307,
                'name' => '宁洱哈尼族彝族自治县',
                'type' => 3,
                'code' => 530821,
            ),
            223 => 
            array (
                'id' => 2724,
                'pid' => 307,
                'name' => '墨江哈尼族自治县',
                'type' => 3,
                'code' => 530822,
            ),
            224 => 
            array (
                'id' => 2725,
                'pid' => 307,
                'name' => '景东彝族自治县',
                'type' => 3,
                'code' => 530823,
            ),
            225 => 
            array (
                'id' => 2726,
                'pid' => 307,
                'name' => '景谷傣族彝族自治县',
                'type' => 3,
                'code' => 530824,
            ),
            226 => 
            array (
                'id' => 2727,
                'pid' => 307,
                'name' => '镇沅彝族哈尼族拉祜族自治县',
                'type' => 3,
                'code' => 530825,
            ),
            227 => 
            array (
                'id' => 2728,
                'pid' => 307,
                'name' => '江城哈尼族彝族自治县',
                'type' => 3,
                'code' => 530826,
            ),
            228 => 
            array (
                'id' => 2729,
                'pid' => 307,
                'name' => '孟连傣族拉祜族佤族自治县',
                'type' => 3,
                'code' => 530827,
            ),
            229 => 
            array (
                'id' => 2730,
                'pid' => 307,
                'name' => '澜沧拉祜族自治县',
                'type' => 3,
                'code' => 530828,
            ),
            230 => 
            array (
                'id' => 2731,
                'pid' => 307,
                'name' => '西盟佤族自治县',
                'type' => 3,
                'code' => 530829,
            ),
            231 => 
            array (
                'id' => 2732,
                'pid' => 308,
                'name' => '临翔区',
                'type' => 3,
                'code' => 530902,
            ),
            232 => 
            array (
                'id' => 2733,
                'pid' => 308,
                'name' => '凤庆县',
                'type' => 3,
                'code' => 530921,
            ),
            233 => 
            array (
                'id' => 2734,
                'pid' => 308,
                'name' => '云县',
                'type' => 3,
                'code' => 530922,
            ),
            234 => 
            array (
                'id' => 2735,
                'pid' => 308,
                'name' => '永德县',
                'type' => 3,
                'code' => 530923,
            ),
            235 => 
            array (
                'id' => 2736,
                'pid' => 308,
                'name' => '镇康县',
                'type' => 3,
                'code' => 530924,
            ),
            236 => 
            array (
                'id' => 2737,
                'pid' => 308,
                'name' => '双江拉祜族佤族布朗族傣族自治县',
                'type' => 3,
                'code' => 530925,
            ),
            237 => 
            array (
                'id' => 2738,
                'pid' => 308,
                'name' => '耿马傣族佤族自治县',
                'type' => 3,
                'code' => 530926,
            ),
            238 => 
            array (
                'id' => 2739,
                'pid' => 308,
                'name' => '沧源佤族自治县',
                'type' => 3,
                'code' => 530927,
            ),
            239 => 
            array (
                'id' => 2740,
                'pid' => 309,
                'name' => '楚雄市',
                'type' => 3,
                'code' => 532301,
            ),
            240 => 
            array (
                'id' => 2741,
                'pid' => 309,
                'name' => '双柏县',
                'type' => 3,
                'code' => 532322,
            ),
            241 => 
            array (
                'id' => 2742,
                'pid' => 309,
                'name' => '牟定县',
                'type' => 3,
                'code' => 532323,
            ),
            242 => 
            array (
                'id' => 2743,
                'pid' => 309,
                'name' => '南华县',
                'type' => 3,
                'code' => 532324,
            ),
            243 => 
            array (
                'id' => 2744,
                'pid' => 309,
                'name' => '姚安县',
                'type' => 3,
                'code' => 532325,
            ),
            244 => 
            array (
                'id' => 2745,
                'pid' => 309,
                'name' => '大姚县',
                'type' => 3,
                'code' => 532326,
            ),
            245 => 
            array (
                'id' => 2746,
                'pid' => 309,
                'name' => '永仁县',
                'type' => 3,
                'code' => 532327,
            ),
            246 => 
            array (
                'id' => 2747,
                'pid' => 309,
                'name' => '元谋县',
                'type' => 3,
                'code' => 532328,
            ),
            247 => 
            array (
                'id' => 2748,
                'pid' => 309,
                'name' => '武定县',
                'type' => 3,
                'code' => 532329,
            ),
            248 => 
            array (
                'id' => 2749,
                'pid' => 309,
                'name' => '禄丰县',
                'type' => 3,
                'code' => 532331,
            ),
            249 => 
            array (
                'id' => 2750,
                'pid' => 310,
                'name' => '个旧市',
                'type' => 3,
                'code' => 532501,
            ),
            250 => 
            array (
                'id' => 2751,
                'pid' => 310,
                'name' => '开远市',
                'type' => 3,
                'code' => 532502,
            ),
            251 => 
            array (
                'id' => 2752,
                'pid' => 310,
                'name' => '蒙自市',
                'type' => 3,
                'code' => 532503,
            ),
            252 => 
            array (
                'id' => 2753,
                'pid' => 310,
                'name' => '弥勒市',
                'type' => 3,
                'code' => 532504,
            ),
            253 => 
            array (
                'id' => 2754,
                'pid' => 310,
                'name' => '屏边苗族自治县',
                'type' => 3,
                'code' => 532523,
            ),
            254 => 
            array (
                'id' => 2755,
                'pid' => 310,
                'name' => '建水县',
                'type' => 3,
                'code' => 532524,
            ),
            255 => 
            array (
                'id' => 2756,
                'pid' => 310,
                'name' => '石屏县',
                'type' => 3,
                'code' => 532525,
            ),
            256 => 
            array (
                'id' => 2757,
                'pid' => 310,
                'name' => '泸西县',
                'type' => 3,
                'code' => 532527,
            ),
            257 => 
            array (
                'id' => 2758,
                'pid' => 310,
                'name' => '元阳县',
                'type' => 3,
                'code' => 532528,
            ),
            258 => 
            array (
                'id' => 2759,
                'pid' => 310,
                'name' => '红河县',
                'type' => 3,
                'code' => 532529,
            ),
            259 => 
            array (
                'id' => 2760,
                'pid' => 310,
                'name' => '金平苗族瑶族傣族自治县',
                'type' => 3,
                'code' => 532530,
            ),
            260 => 
            array (
                'id' => 2761,
                'pid' => 310,
                'name' => '绿春县',
                'type' => 3,
                'code' => 532531,
            ),
            261 => 
            array (
                'id' => 2762,
                'pid' => 310,
                'name' => '河口瑶族自治县',
                'type' => 3,
                'code' => 532532,
            ),
            262 => 
            array (
                'id' => 2763,
                'pid' => 311,
                'name' => '文山市',
                'type' => 3,
                'code' => 532601,
            ),
            263 => 
            array (
                'id' => 2764,
                'pid' => 311,
                'name' => '砚山县',
                'type' => 3,
                'code' => 532622,
            ),
            264 => 
            array (
                'id' => 2765,
                'pid' => 311,
                'name' => '西畴县',
                'type' => 3,
                'code' => 532623,
            ),
            265 => 
            array (
                'id' => 2766,
                'pid' => 311,
                'name' => '麻栗坡县',
                'type' => 3,
                'code' => 532624,
            ),
            266 => 
            array (
                'id' => 2767,
                'pid' => 311,
                'name' => '马关县',
                'type' => 3,
                'code' => 532625,
            ),
            267 => 
            array (
                'id' => 2768,
                'pid' => 311,
                'name' => '丘北县',
                'type' => 3,
                'code' => 532626,
            ),
            268 => 
            array (
                'id' => 2769,
                'pid' => 311,
                'name' => '广南县',
                'type' => 3,
                'code' => 532627,
            ),
            269 => 
            array (
                'id' => 2770,
                'pid' => 311,
                'name' => '富宁县',
                'type' => 3,
                'code' => 532628,
            ),
            270 => 
            array (
                'id' => 2771,
                'pid' => 312,
                'name' => '景洪市',
                'type' => 3,
                'code' => 532801,
            ),
            271 => 
            array (
                'id' => 2772,
                'pid' => 312,
                'name' => '勐海县',
                'type' => 3,
                'code' => 532822,
            ),
            272 => 
            array (
                'id' => 2773,
                'pid' => 312,
                'name' => '勐腊县',
                'type' => 3,
                'code' => 532823,
            ),
            273 => 
            array (
                'id' => 2774,
                'pid' => 313,
                'name' => '大理市',
                'type' => 3,
                'code' => 532901,
            ),
            274 => 
            array (
                'id' => 2775,
                'pid' => 313,
                'name' => '漾濞彝族自治县',
                'type' => 3,
                'code' => 532922,
            ),
            275 => 
            array (
                'id' => 2776,
                'pid' => 313,
                'name' => '祥云县',
                'type' => 3,
                'code' => 532923,
            ),
            276 => 
            array (
                'id' => 2777,
                'pid' => 313,
                'name' => '宾川县',
                'type' => 3,
                'code' => 532924,
            ),
            277 => 
            array (
                'id' => 2778,
                'pid' => 313,
                'name' => '弥渡县',
                'type' => 3,
                'code' => 532925,
            ),
            278 => 
            array (
                'id' => 2779,
                'pid' => 313,
                'name' => '南涧彝族自治县',
                'type' => 3,
                'code' => 532926,
            ),
            279 => 
            array (
                'id' => 2780,
                'pid' => 313,
                'name' => '巍山彝族回族自治县',
                'type' => 3,
                'code' => 532927,
            ),
            280 => 
            array (
                'id' => 2781,
                'pid' => 313,
                'name' => '永平县',
                'type' => 3,
                'code' => 532928,
            ),
            281 => 
            array (
                'id' => 2782,
                'pid' => 313,
                'name' => '云龙县',
                'type' => 3,
                'code' => 532929,
            ),
            282 => 
            array (
                'id' => 2783,
                'pid' => 313,
                'name' => '洱源县',
                'type' => 3,
                'code' => 532930,
            ),
            283 => 
            array (
                'id' => 2784,
                'pid' => 313,
                'name' => '剑川县',
                'type' => 3,
                'code' => 532931,
            ),
            284 => 
            array (
                'id' => 2785,
                'pid' => 313,
                'name' => '鹤庆县',
                'type' => 3,
                'code' => 532932,
            ),
            285 => 
            array (
                'id' => 2786,
                'pid' => 314,
                'name' => '瑞丽市',
                'type' => 3,
                'code' => 533102,
            ),
            286 => 
            array (
                'id' => 2787,
                'pid' => 314,
                'name' => '芒市',
                'type' => 3,
                'code' => 533103,
            ),
            287 => 
            array (
                'id' => 2788,
                'pid' => 314,
                'name' => '梁河县',
                'type' => 3,
                'code' => 533122,
            ),
            288 => 
            array (
                'id' => 2789,
                'pid' => 314,
                'name' => '盈江县',
                'type' => 3,
                'code' => 533123,
            ),
            289 => 
            array (
                'id' => 2790,
                'pid' => 314,
                'name' => '陇川县',
                'type' => 3,
                'code' => 533124,
            ),
            290 => 
            array (
                'id' => 2791,
                'pid' => 315,
                'name' => '泸水市',
                'type' => 3,
                'code' => 533301,
            ),
            291 => 
            array (
                'id' => 2792,
                'pid' => 315,
                'name' => '福贡县',
                'type' => 3,
                'code' => 533323,
            ),
            292 => 
            array (
                'id' => 2793,
                'pid' => 315,
                'name' => '贡山独龙族怒族自治县',
                'type' => 3,
                'code' => 533324,
            ),
            293 => 
            array (
                'id' => 2794,
                'pid' => 315,
                'name' => '兰坪白族普米族自治县',
                'type' => 3,
                'code' => 533325,
            ),
            294 => 
            array (
                'id' => 2795,
                'pid' => 316,
                'name' => '香格里拉市',
                'type' => 3,
                'code' => 533401,
            ),
            295 => 
            array (
                'id' => 2796,
                'pid' => 316,
                'name' => '德钦县',
                'type' => 3,
                'code' => 533422,
            ),
            296 => 
            array (
                'id' => 2797,
                'pid' => 316,
                'name' => '维西傈僳族自治县',
                'type' => 3,
                'code' => 533423,
            ),
            297 => 
            array (
                'id' => 2798,
                'pid' => 317,
                'name' => '城关区',
                'type' => 3,
                'code' => 540102,
            ),
            298 => 
            array (
                'id' => 2799,
                'pid' => 317,
                'name' => '堆龙德庆区',
                'type' => 3,
                'code' => 540103,
            ),
            299 => 
            array (
                'id' => 2800,
                'pid' => 317,
                'name' => '林周县',
                'type' => 3,
                'code' => 540121,
            ),
            300 => 
            array (
                'id' => 2801,
                'pid' => 317,
                'name' => '当雄县',
                'type' => 3,
                'code' => 540122,
            ),
            301 => 
            array (
                'id' => 2802,
                'pid' => 317,
                'name' => '尼木县',
                'type' => 3,
                'code' => 540123,
            ),
            302 => 
            array (
                'id' => 2803,
                'pid' => 317,
                'name' => '曲水县',
                'type' => 3,
                'code' => 540124,
            ),
            303 => 
            array (
                'id' => 2804,
                'pid' => 317,
                'name' => '达孜县',
                'type' => 3,
                'code' => 540126,
            ),
            304 => 
            array (
                'id' => 2805,
                'pid' => 317,
                'name' => '墨竹工卡县',
                'type' => 3,
                'code' => 540127,
            ),
            305 => 
            array (
                'id' => 2806,
                'pid' => 318,
                'name' => '桑珠孜区',
                'type' => 3,
                'code' => 540202,
            ),
            306 => 
            array (
                'id' => 2807,
                'pid' => 318,
                'name' => '南木林县',
                'type' => 3,
                'code' => 540221,
            ),
            307 => 
            array (
                'id' => 2808,
                'pid' => 318,
                'name' => '江孜县',
                'type' => 3,
                'code' => 540222,
            ),
            308 => 
            array (
                'id' => 2809,
                'pid' => 318,
                'name' => '定日县',
                'type' => 3,
                'code' => 540223,
            ),
            309 => 
            array (
                'id' => 2810,
                'pid' => 318,
                'name' => '萨迦县',
                'type' => 3,
                'code' => 540224,
            ),
            310 => 
            array (
                'id' => 2811,
                'pid' => 318,
                'name' => '拉孜县',
                'type' => 3,
                'code' => 540225,
            ),
            311 => 
            array (
                'id' => 2812,
                'pid' => 318,
                'name' => '昂仁县',
                'type' => 3,
                'code' => 540226,
            ),
            312 => 
            array (
                'id' => 2813,
                'pid' => 318,
                'name' => '谢通门县',
                'type' => 3,
                'code' => 540227,
            ),
            313 => 
            array (
                'id' => 2814,
                'pid' => 318,
                'name' => '白朗县',
                'type' => 3,
                'code' => 540228,
            ),
            314 => 
            array (
                'id' => 2815,
                'pid' => 318,
                'name' => '仁布县',
                'type' => 3,
                'code' => 540229,
            ),
            315 => 
            array (
                'id' => 2816,
                'pid' => 318,
                'name' => '康马县',
                'type' => 3,
                'code' => 540230,
            ),
            316 => 
            array (
                'id' => 2817,
                'pid' => 318,
                'name' => '定结县',
                'type' => 3,
                'code' => 540231,
            ),
            317 => 
            array (
                'id' => 2818,
                'pid' => 318,
                'name' => '仲巴县',
                'type' => 3,
                'code' => 540232,
            ),
            318 => 
            array (
                'id' => 2819,
                'pid' => 318,
                'name' => '亚东县',
                'type' => 3,
                'code' => 540233,
            ),
            319 => 
            array (
                'id' => 2820,
                'pid' => 318,
                'name' => '吉隆县',
                'type' => 3,
                'code' => 540234,
            ),
            320 => 
            array (
                'id' => 2821,
                'pid' => 318,
                'name' => '聂拉木县',
                'type' => 3,
                'code' => 540235,
            ),
            321 => 
            array (
                'id' => 2822,
                'pid' => 318,
                'name' => '萨嘎县',
                'type' => 3,
                'code' => 540236,
            ),
            322 => 
            array (
                'id' => 2823,
                'pid' => 318,
                'name' => '岗巴县',
                'type' => 3,
                'code' => 540237,
            ),
            323 => 
            array (
                'id' => 2824,
                'pid' => 319,
                'name' => '卡若区',
                'type' => 3,
                'code' => 540302,
            ),
            324 => 
            array (
                'id' => 2825,
                'pid' => 319,
                'name' => '江达县',
                'type' => 3,
                'code' => 540321,
            ),
            325 => 
            array (
                'id' => 2826,
                'pid' => 319,
                'name' => '贡觉县',
                'type' => 3,
                'code' => 540322,
            ),
            326 => 
            array (
                'id' => 2827,
                'pid' => 319,
                'name' => '类乌齐县',
                'type' => 3,
                'code' => 540323,
            ),
            327 => 
            array (
                'id' => 2828,
                'pid' => 319,
                'name' => '丁青县',
                'type' => 3,
                'code' => 540324,
            ),
            328 => 
            array (
                'id' => 2829,
                'pid' => 319,
                'name' => '察雅县',
                'type' => 3,
                'code' => 540325,
            ),
            329 => 
            array (
                'id' => 2830,
                'pid' => 319,
                'name' => '八宿县',
                'type' => 3,
                'code' => 540326,
            ),
            330 => 
            array (
                'id' => 2831,
                'pid' => 319,
                'name' => '左贡县',
                'type' => 3,
                'code' => 540327,
            ),
            331 => 
            array (
                'id' => 2832,
                'pid' => 319,
                'name' => '芒康县',
                'type' => 3,
                'code' => 540328,
            ),
            332 => 
            array (
                'id' => 2833,
                'pid' => 319,
                'name' => '洛隆县',
                'type' => 3,
                'code' => 540329,
            ),
            333 => 
            array (
                'id' => 2834,
                'pid' => 319,
                'name' => '边坝县',
                'type' => 3,
                'code' => 540330,
            ),
            334 => 
            array (
                'id' => 2835,
                'pid' => 320,
                'name' => '巴宜区',
                'type' => 3,
                'code' => 540402,
            ),
            335 => 
            array (
                'id' => 2836,
                'pid' => 320,
                'name' => '工布江达县',
                'type' => 3,
                'code' => 540421,
            ),
            336 => 
            array (
                'id' => 2837,
                'pid' => 320,
                'name' => '米林县',
                'type' => 3,
                'code' => 540422,
            ),
            337 => 
            array (
                'id' => 2838,
                'pid' => 320,
                'name' => '墨脱县',
                'type' => 3,
                'code' => 540423,
            ),
            338 => 
            array (
                'id' => 2839,
                'pid' => 320,
                'name' => '波密县',
                'type' => 3,
                'code' => 540424,
            ),
            339 => 
            array (
                'id' => 2840,
                'pid' => 320,
                'name' => '察隅县',
                'type' => 3,
                'code' => 540425,
            ),
            340 => 
            array (
                'id' => 2841,
                'pid' => 320,
                'name' => '朗县',
                'type' => 3,
                'code' => 540426,
            ),
            341 => 
            array (
                'id' => 2842,
                'pid' => 321,
                'name' => '乃东区',
                'type' => 3,
                'code' => 540502,
            ),
            342 => 
            array (
                'id' => 2843,
                'pid' => 321,
                'name' => '扎囊县',
                'type' => 3,
                'code' => 540521,
            ),
            343 => 
            array (
                'id' => 2844,
                'pid' => 321,
                'name' => '贡嘎县',
                'type' => 3,
                'code' => 540522,
            ),
            344 => 
            array (
                'id' => 2845,
                'pid' => 321,
                'name' => '桑日县',
                'type' => 3,
                'code' => 540523,
            ),
            345 => 
            array (
                'id' => 2846,
                'pid' => 321,
                'name' => '琼结县',
                'type' => 3,
                'code' => 540524,
            ),
            346 => 
            array (
                'id' => 2847,
                'pid' => 321,
                'name' => '曲松县',
                'type' => 3,
                'code' => 540525,
            ),
            347 => 
            array (
                'id' => 2848,
                'pid' => 321,
                'name' => '措美县',
                'type' => 3,
                'code' => 540526,
            ),
            348 => 
            array (
                'id' => 2849,
                'pid' => 321,
                'name' => '洛扎县',
                'type' => 3,
                'code' => 540527,
            ),
            349 => 
            array (
                'id' => 2850,
                'pid' => 321,
                'name' => '加查县',
                'type' => 3,
                'code' => 540528,
            ),
            350 => 
            array (
                'id' => 2851,
                'pid' => 321,
                'name' => '隆子县',
                'type' => 3,
                'code' => 540529,
            ),
            351 => 
            array (
                'id' => 2852,
                'pid' => 321,
                'name' => '错那县',
                'type' => 3,
                'code' => 540530,
            ),
            352 => 
            array (
                'id' => 2853,
                'pid' => 321,
                'name' => '浪卡子县',
                'type' => 3,
                'code' => 540531,
            ),
            353 => 
            array (
                'id' => 2854,
                'pid' => 322,
                'name' => '那曲县',
                'type' => 3,
                'code' => 542421,
            ),
            354 => 
            array (
                'id' => 2855,
                'pid' => 322,
                'name' => '嘉黎县',
                'type' => 3,
                'code' => 542422,
            ),
            355 => 
            array (
                'id' => 2856,
                'pid' => 322,
                'name' => '比如县',
                'type' => 3,
                'code' => 542423,
            ),
            356 => 
            array (
                'id' => 2857,
                'pid' => 322,
                'name' => '聂荣县',
                'type' => 3,
                'code' => 542424,
            ),
            357 => 
            array (
                'id' => 2858,
                'pid' => 322,
                'name' => '安多县',
                'type' => 3,
                'code' => 542425,
            ),
            358 => 
            array (
                'id' => 2859,
                'pid' => 322,
                'name' => '申扎县',
                'type' => 3,
                'code' => 542426,
            ),
            359 => 
            array (
                'id' => 2860,
                'pid' => 322,
                'name' => '索县',
                'type' => 3,
                'code' => 542427,
            ),
            360 => 
            array (
                'id' => 2861,
                'pid' => 322,
                'name' => '班戈县',
                'type' => 3,
                'code' => 542428,
            ),
            361 => 
            array (
                'id' => 2862,
                'pid' => 322,
                'name' => '巴青县',
                'type' => 3,
                'code' => 542429,
            ),
            362 => 
            array (
                'id' => 2863,
                'pid' => 322,
                'name' => '尼玛县',
                'type' => 3,
                'code' => 542430,
            ),
            363 => 
            array (
                'id' => 2864,
                'pid' => 322,
                'name' => '双湖县',
                'type' => 3,
                'code' => 542431,
            ),
            364 => 
            array (
                'id' => 2865,
                'pid' => 323,
                'name' => '普兰县',
                'type' => 3,
                'code' => 542521,
            ),
            365 => 
            array (
                'id' => 2866,
                'pid' => 323,
                'name' => '札达县',
                'type' => 3,
                'code' => 542522,
            ),
            366 => 
            array (
                'id' => 2867,
                'pid' => 323,
                'name' => '噶尔县',
                'type' => 3,
                'code' => 542523,
            ),
            367 => 
            array (
                'id' => 2868,
                'pid' => 323,
                'name' => '日土县',
                'type' => 3,
                'code' => 542524,
            ),
            368 => 
            array (
                'id' => 2869,
                'pid' => 323,
                'name' => '革吉县',
                'type' => 3,
                'code' => 542525,
            ),
            369 => 
            array (
                'id' => 2870,
                'pid' => 323,
                'name' => '改则县',
                'type' => 3,
                'code' => 542526,
            ),
            370 => 
            array (
                'id' => 2871,
                'pid' => 323,
                'name' => '措勤县',
                'type' => 3,
                'code' => 542527,
            ),
            371 => 
            array (
                'id' => 2872,
                'pid' => 324,
                'name' => '新城区',
                'type' => 3,
                'code' => 610102,
            ),
            372 => 
            array (
                'id' => 2873,
                'pid' => 324,
                'name' => '碑林区',
                'type' => 3,
                'code' => 610103,
            ),
            373 => 
            array (
                'id' => 2874,
                'pid' => 324,
                'name' => '莲湖区',
                'type' => 3,
                'code' => 610104,
            ),
            374 => 
            array (
                'id' => 2875,
                'pid' => 324,
                'name' => '灞桥区',
                'type' => 3,
                'code' => 610111,
            ),
            375 => 
            array (
                'id' => 2876,
                'pid' => 324,
                'name' => '未央区',
                'type' => 3,
                'code' => 610112,
            ),
            376 => 
            array (
                'id' => 2877,
                'pid' => 324,
                'name' => '雁塔区',
                'type' => 3,
                'code' => 610113,
            ),
            377 => 
            array (
                'id' => 2878,
                'pid' => 324,
                'name' => '阎良区',
                'type' => 3,
                'code' => 610114,
            ),
            378 => 
            array (
                'id' => 2879,
                'pid' => 324,
                'name' => '临潼区',
                'type' => 3,
                'code' => 610115,
            ),
            379 => 
            array (
                'id' => 2880,
                'pid' => 324,
                'name' => '长安区',
                'type' => 3,
                'code' => 610116,
            ),
            380 => 
            array (
                'id' => 2881,
                'pid' => 324,
                'name' => '高陵区',
                'type' => 3,
                'code' => 610117,
            ),
            381 => 
            array (
                'id' => 2882,
                'pid' => 324,
                'name' => '蓝田县',
                'type' => 3,
                'code' => 610122,
            ),
            382 => 
            array (
                'id' => 2883,
                'pid' => 324,
                'name' => '周至县',
                'type' => 3,
                'code' => 610124,
            ),
            383 => 
            array (
                'id' => 2884,
                'pid' => 324,
                'name' => '户县',
                'type' => 3,
                'code' => 610125,
            ),
            384 => 
            array (
                'id' => 2885,
                'pid' => 325,
                'name' => '王益区',
                'type' => 3,
                'code' => 610202,
            ),
            385 => 
            array (
                'id' => 2886,
                'pid' => 325,
                'name' => '印台区',
                'type' => 3,
                'code' => 610203,
            ),
            386 => 
            array (
                'id' => 2887,
                'pid' => 325,
                'name' => '耀州区',
                'type' => 3,
                'code' => 610204,
            ),
            387 => 
            array (
                'id' => 2888,
                'pid' => 325,
                'name' => '宜君县',
                'type' => 3,
                'code' => 610222,
            ),
            388 => 
            array (
                'id' => 2889,
                'pid' => 326,
                'name' => '渭滨区',
                'type' => 3,
                'code' => 610302,
            ),
            389 => 
            array (
                'id' => 2890,
                'pid' => 326,
                'name' => '金台区',
                'type' => 3,
                'code' => 610303,
            ),
            390 => 
            array (
                'id' => 2891,
                'pid' => 326,
                'name' => '陈仓区',
                'type' => 3,
                'code' => 610304,
            ),
            391 => 
            array (
                'id' => 2892,
                'pid' => 326,
                'name' => '凤翔县',
                'type' => 3,
                'code' => 610322,
            ),
            392 => 
            array (
                'id' => 2893,
                'pid' => 326,
                'name' => '岐山县',
                'type' => 3,
                'code' => 610323,
            ),
            393 => 
            array (
                'id' => 2894,
                'pid' => 326,
                'name' => '扶风县',
                'type' => 3,
                'code' => 610324,
            ),
            394 => 
            array (
                'id' => 2895,
                'pid' => 326,
                'name' => '眉县',
                'type' => 3,
                'code' => 610326,
            ),
            395 => 
            array (
                'id' => 2896,
                'pid' => 326,
                'name' => '陇县',
                'type' => 3,
                'code' => 610327,
            ),
            396 => 
            array (
                'id' => 2897,
                'pid' => 326,
                'name' => '千阳县',
                'type' => 3,
                'code' => 610328,
            ),
            397 => 
            array (
                'id' => 2898,
                'pid' => 326,
                'name' => '麟游县',
                'type' => 3,
                'code' => 610329,
            ),
            398 => 
            array (
                'id' => 2899,
                'pid' => 326,
                'name' => '凤县',
                'type' => 3,
                'code' => 610330,
            ),
            399 => 
            array (
                'id' => 2900,
                'pid' => 326,
                'name' => '太白县',
                'type' => 3,
                'code' => 610331,
            ),
            400 => 
            array (
                'id' => 2901,
                'pid' => 327,
                'name' => '秦都区',
                'type' => 3,
                'code' => 610402,
            ),
            401 => 
            array (
                'id' => 2902,
                'pid' => 327,
                'name' => '杨陵区',
                'type' => 3,
                'code' => 610403,
            ),
            402 => 
            array (
                'id' => 2903,
                'pid' => 327,
                'name' => '渭城区',
                'type' => 3,
                'code' => 610404,
            ),
            403 => 
            array (
                'id' => 2904,
                'pid' => 327,
                'name' => '三原县',
                'type' => 3,
                'code' => 610422,
            ),
            404 => 
            array (
                'id' => 2905,
                'pid' => 327,
                'name' => '泾阳县',
                'type' => 3,
                'code' => 610423,
            ),
            405 => 
            array (
                'id' => 2906,
                'pid' => 327,
                'name' => '乾县',
                'type' => 3,
                'code' => 610424,
            ),
            406 => 
            array (
                'id' => 2907,
                'pid' => 327,
                'name' => '礼泉县',
                'type' => 3,
                'code' => 610425,
            ),
            407 => 
            array (
                'id' => 2908,
                'pid' => 327,
                'name' => '永寿县',
                'type' => 3,
                'code' => 610426,
            ),
            408 => 
            array (
                'id' => 2909,
                'pid' => 327,
                'name' => '彬县',
                'type' => 3,
                'code' => 610427,
            ),
            409 => 
            array (
                'id' => 2910,
                'pid' => 327,
                'name' => '长武县',
                'type' => 3,
                'code' => 610428,
            ),
            410 => 
            array (
                'id' => 2911,
                'pid' => 327,
                'name' => '旬邑县',
                'type' => 3,
                'code' => 610429,
            ),
            411 => 
            array (
                'id' => 2912,
                'pid' => 327,
                'name' => '淳化县',
                'type' => 3,
                'code' => 610430,
            ),
            412 => 
            array (
                'id' => 2913,
                'pid' => 327,
                'name' => '武功县',
                'type' => 3,
                'code' => 610431,
            ),
            413 => 
            array (
                'id' => 2914,
                'pid' => 327,
                'name' => '兴平市',
                'type' => 3,
                'code' => 610481,
            ),
            414 => 
            array (
                'id' => 2915,
                'pid' => 328,
                'name' => '临渭区',
                'type' => 3,
                'code' => 610502,
            ),
            415 => 
            array (
                'id' => 2916,
                'pid' => 328,
                'name' => '华州区',
                'type' => 3,
                'code' => 610503,
            ),
            416 => 
            array (
                'id' => 2917,
                'pid' => 328,
                'name' => '潼关县',
                'type' => 3,
                'code' => 610522,
            ),
            417 => 
            array (
                'id' => 2918,
                'pid' => 328,
                'name' => '大荔县',
                'type' => 3,
                'code' => 610523,
            ),
            418 => 
            array (
                'id' => 2919,
                'pid' => 328,
                'name' => '合阳县',
                'type' => 3,
                'code' => 610524,
            ),
            419 => 
            array (
                'id' => 2920,
                'pid' => 328,
                'name' => '澄城县',
                'type' => 3,
                'code' => 610525,
            ),
            420 => 
            array (
                'id' => 2921,
                'pid' => 328,
                'name' => '蒲城县',
                'type' => 3,
                'code' => 610526,
            ),
            421 => 
            array (
                'id' => 2922,
                'pid' => 328,
                'name' => '白水县',
                'type' => 3,
                'code' => 610527,
            ),
            422 => 
            array (
                'id' => 2923,
                'pid' => 328,
                'name' => '富平县',
                'type' => 3,
                'code' => 610528,
            ),
            423 => 
            array (
                'id' => 2924,
                'pid' => 328,
                'name' => '韩城市',
                'type' => 3,
                'code' => 610581,
            ),
            424 => 
            array (
                'id' => 2925,
                'pid' => 328,
                'name' => '华阴市',
                'type' => 3,
                'code' => 610582,
            ),
            425 => 
            array (
                'id' => 2926,
                'pid' => 329,
                'name' => '宝塔区',
                'type' => 3,
                'code' => 610602,
            ),
            426 => 
            array (
                'id' => 2927,
                'pid' => 329,
                'name' => '安塞区',
                'type' => 3,
                'code' => 610603,
            ),
            427 => 
            array (
                'id' => 2928,
                'pid' => 329,
                'name' => '延长县',
                'type' => 3,
                'code' => 610621,
            ),
            428 => 
            array (
                'id' => 2929,
                'pid' => 329,
                'name' => '延川县',
                'type' => 3,
                'code' => 610622,
            ),
            429 => 
            array (
                'id' => 2930,
                'pid' => 329,
                'name' => '子长县',
                'type' => 3,
                'code' => 610623,
            ),
            430 => 
            array (
                'id' => 2931,
                'pid' => 329,
                'name' => '志丹县',
                'type' => 3,
                'code' => 610625,
            ),
            431 => 
            array (
                'id' => 2932,
                'pid' => 329,
                'name' => '吴起县',
                'type' => 3,
                'code' => 610626,
            ),
            432 => 
            array (
                'id' => 2933,
                'pid' => 329,
                'name' => '甘泉县',
                'type' => 3,
                'code' => 610627,
            ),
            433 => 
            array (
                'id' => 2934,
                'pid' => 329,
                'name' => '富县',
                'type' => 3,
                'code' => 610628,
            ),
            434 => 
            array (
                'id' => 2935,
                'pid' => 329,
                'name' => '洛川县',
                'type' => 3,
                'code' => 610629,
            ),
            435 => 
            array (
                'id' => 2936,
                'pid' => 329,
                'name' => '宜川县',
                'type' => 3,
                'code' => 610630,
            ),
            436 => 
            array (
                'id' => 2937,
                'pid' => 329,
                'name' => '黄龙县',
                'type' => 3,
                'code' => 610631,
            ),
            437 => 
            array (
                'id' => 2938,
                'pid' => 329,
                'name' => '黄陵县',
                'type' => 3,
                'code' => 610632,
            ),
            438 => 
            array (
                'id' => 2939,
                'pid' => 330,
                'name' => '汉台区',
                'type' => 3,
                'code' => 610702,
            ),
            439 => 
            array (
                'id' => 2940,
                'pid' => 330,
                'name' => '南郑县',
                'type' => 3,
                'code' => 610721,
            ),
            440 => 
            array (
                'id' => 2941,
                'pid' => 330,
                'name' => '城固县',
                'type' => 3,
                'code' => 610722,
            ),
            441 => 
            array (
                'id' => 2942,
                'pid' => 330,
                'name' => '洋县',
                'type' => 3,
                'code' => 610723,
            ),
            442 => 
            array (
                'id' => 2943,
                'pid' => 330,
                'name' => '西乡县',
                'type' => 3,
                'code' => 610724,
            ),
            443 => 
            array (
                'id' => 2944,
                'pid' => 330,
                'name' => '勉县',
                'type' => 3,
                'code' => 610725,
            ),
            444 => 
            array (
                'id' => 2945,
                'pid' => 330,
                'name' => '宁强县',
                'type' => 3,
                'code' => 610726,
            ),
            445 => 
            array (
                'id' => 2946,
                'pid' => 330,
                'name' => '略阳县',
                'type' => 3,
                'code' => 610727,
            ),
            446 => 
            array (
                'id' => 2947,
                'pid' => 330,
                'name' => '镇巴县',
                'type' => 3,
                'code' => 610728,
            ),
            447 => 
            array (
                'id' => 2948,
                'pid' => 330,
                'name' => '留坝县',
                'type' => 3,
                'code' => 610729,
            ),
            448 => 
            array (
                'id' => 2949,
                'pid' => 330,
                'name' => '佛坪县',
                'type' => 3,
                'code' => 610730,
            ),
            449 => 
            array (
                'id' => 2950,
                'pid' => 331,
                'name' => '榆阳区',
                'type' => 3,
                'code' => 610802,
            ),
            450 => 
            array (
                'id' => 2951,
                'pid' => 331,
                'name' => '横山区',
                'type' => 3,
                'code' => 610803,
            ),
            451 => 
            array (
                'id' => 2952,
                'pid' => 331,
                'name' => '神木县',
                'type' => 3,
                'code' => 610821,
            ),
            452 => 
            array (
                'id' => 2953,
                'pid' => 331,
                'name' => '府谷县',
                'type' => 3,
                'code' => 610822,
            ),
            453 => 
            array (
                'id' => 2954,
                'pid' => 331,
                'name' => '靖边县',
                'type' => 3,
                'code' => 610824,
            ),
            454 => 
            array (
                'id' => 2955,
                'pid' => 331,
                'name' => '定边县',
                'type' => 3,
                'code' => 610825,
            ),
            455 => 
            array (
                'id' => 2956,
                'pid' => 331,
                'name' => '绥德县',
                'type' => 3,
                'code' => 610826,
            ),
            456 => 
            array (
                'id' => 2957,
                'pid' => 331,
                'name' => '米脂县',
                'type' => 3,
                'code' => 610827,
            ),
            457 => 
            array (
                'id' => 2958,
                'pid' => 331,
                'name' => '佳县',
                'type' => 3,
                'code' => 610828,
            ),
            458 => 
            array (
                'id' => 2959,
                'pid' => 331,
                'name' => '吴堡县',
                'type' => 3,
                'code' => 610829,
            ),
            459 => 
            array (
                'id' => 2960,
                'pid' => 331,
                'name' => '清涧县',
                'type' => 3,
                'code' => 610830,
            ),
            460 => 
            array (
                'id' => 2961,
                'pid' => 331,
                'name' => '子洲县',
                'type' => 3,
                'code' => 610831,
            ),
            461 => 
            array (
                'id' => 2962,
                'pid' => 332,
                'name' => '汉滨区',
                'type' => 3,
                'code' => 610902,
            ),
            462 => 
            array (
                'id' => 2963,
                'pid' => 332,
                'name' => '汉阴县',
                'type' => 3,
                'code' => 610921,
            ),
            463 => 
            array (
                'id' => 2964,
                'pid' => 332,
                'name' => '石泉县',
                'type' => 3,
                'code' => 610922,
            ),
            464 => 
            array (
                'id' => 2965,
                'pid' => 332,
                'name' => '宁陕县',
                'type' => 3,
                'code' => 610923,
            ),
            465 => 
            array (
                'id' => 2966,
                'pid' => 332,
                'name' => '紫阳县',
                'type' => 3,
                'code' => 610924,
            ),
            466 => 
            array (
                'id' => 2967,
                'pid' => 332,
                'name' => '岚皋县',
                'type' => 3,
                'code' => 610925,
            ),
            467 => 
            array (
                'id' => 2968,
                'pid' => 332,
                'name' => '平利县',
                'type' => 3,
                'code' => 610926,
            ),
            468 => 
            array (
                'id' => 2969,
                'pid' => 332,
                'name' => '镇坪县',
                'type' => 3,
                'code' => 610927,
            ),
            469 => 
            array (
                'id' => 2970,
                'pid' => 332,
                'name' => '旬阳县',
                'type' => 3,
                'code' => 610928,
            ),
            470 => 
            array (
                'id' => 2971,
                'pid' => 332,
                'name' => '白河县',
                'type' => 3,
                'code' => 610929,
            ),
            471 => 
            array (
                'id' => 2972,
                'pid' => 333,
                'name' => '商州区',
                'type' => 3,
                'code' => 611002,
            ),
            472 => 
            array (
                'id' => 2973,
                'pid' => 333,
                'name' => '洛南县',
                'type' => 3,
                'code' => 611021,
            ),
            473 => 
            array (
                'id' => 2974,
                'pid' => 333,
                'name' => '丹凤县',
                'type' => 3,
                'code' => 611022,
            ),
            474 => 
            array (
                'id' => 2975,
                'pid' => 333,
                'name' => '商南县',
                'type' => 3,
                'code' => 611023,
            ),
            475 => 
            array (
                'id' => 2976,
                'pid' => 333,
                'name' => '山阳县',
                'type' => 3,
                'code' => 611024,
            ),
            476 => 
            array (
                'id' => 2977,
                'pid' => 333,
                'name' => '镇安县',
                'type' => 3,
                'code' => 611025,
            ),
            477 => 
            array (
                'id' => 2978,
                'pid' => 333,
                'name' => '柞水县',
                'type' => 3,
                'code' => 611026,
            ),
            478 => 
            array (
                'id' => 2979,
                'pid' => 334,
                'name' => '城关区',
                'type' => 3,
                'code' => 620102,
            ),
            479 => 
            array (
                'id' => 2980,
                'pid' => 334,
                'name' => '七里河区',
                'type' => 3,
                'code' => 620103,
            ),
            480 => 
            array (
                'id' => 2981,
                'pid' => 334,
                'name' => '西固区',
                'type' => 3,
                'code' => 620104,
            ),
            481 => 
            array (
                'id' => 2982,
                'pid' => 334,
                'name' => '安宁区',
                'type' => 3,
                'code' => 620105,
            ),
            482 => 
            array (
                'id' => 2983,
                'pid' => 334,
                'name' => '红古区',
                'type' => 3,
                'code' => 620111,
            ),
            483 => 
            array (
                'id' => 2984,
                'pid' => 334,
                'name' => '永登县',
                'type' => 3,
                'code' => 620121,
            ),
            484 => 
            array (
                'id' => 2985,
                'pid' => 334,
                'name' => '皋兰县',
                'type' => 3,
                'code' => 620122,
            ),
            485 => 
            array (
                'id' => 2986,
                'pid' => 334,
                'name' => '榆中县',
                'type' => 3,
                'code' => 620123,
            ),
            486 => 
            array (
                'id' => 2987,
                'pid' => 335,
                'name' => '嘉峪关市',
                'type' => 3,
                'code' => 620201,
            ),
            487 => 
            array (
                'id' => 2988,
                'pid' => 336,
                'name' => '金川区',
                'type' => 3,
                'code' => 620302,
            ),
            488 => 
            array (
                'id' => 2989,
                'pid' => 336,
                'name' => '永昌县',
                'type' => 3,
                'code' => 620321,
            ),
            489 => 
            array (
                'id' => 2990,
                'pid' => 337,
                'name' => '白银区',
                'type' => 3,
                'code' => 620402,
            ),
            490 => 
            array (
                'id' => 2991,
                'pid' => 337,
                'name' => '平川区',
                'type' => 3,
                'code' => 620403,
            ),
            491 => 
            array (
                'id' => 2992,
                'pid' => 337,
                'name' => '靖远县',
                'type' => 3,
                'code' => 620421,
            ),
            492 => 
            array (
                'id' => 2993,
                'pid' => 337,
                'name' => '会宁县',
                'type' => 3,
                'code' => 620422,
            ),
            493 => 
            array (
                'id' => 2994,
                'pid' => 337,
                'name' => '景泰县',
                'type' => 3,
                'code' => 620423,
            ),
            494 => 
            array (
                'id' => 2995,
                'pid' => 338,
                'name' => '秦州区',
                'type' => 3,
                'code' => 620502,
            ),
            495 => 
            array (
                'id' => 2996,
                'pid' => 338,
                'name' => '麦积区',
                'type' => 3,
                'code' => 620503,
            ),
            496 => 
            array (
                'id' => 2997,
                'pid' => 338,
                'name' => '清水县',
                'type' => 3,
                'code' => 620521,
            ),
            497 => 
            array (
                'id' => 2998,
                'pid' => 338,
                'name' => '秦安县',
                'type' => 3,
                'code' => 620522,
            ),
            498 => 
            array (
                'id' => 2999,
                'pid' => 338,
                'name' => '甘谷县',
                'type' => 3,
                'code' => 620523,
            ),
            499 => 
            array (
                'id' => 3000,
                'pid' => 338,
                'name' => '武山县',
                'type' => 3,
                'code' => 620524,
            ),
        ));
        \DB::table('z_region')->insert(array (
            0 => 
            array (
                'id' => 3001,
                'pid' => 338,
                'name' => '张家川回族自治县',
                'type' => 3,
                'code' => 620525,
            ),
            1 => 
            array (
                'id' => 3002,
                'pid' => 339,
                'name' => '凉州区',
                'type' => 3,
                'code' => 620602,
            ),
            2 => 
            array (
                'id' => 3003,
                'pid' => 339,
                'name' => '民勤县',
                'type' => 3,
                'code' => 620621,
            ),
            3 => 
            array (
                'id' => 3004,
                'pid' => 339,
                'name' => '古浪县',
                'type' => 3,
                'code' => 620622,
            ),
            4 => 
            array (
                'id' => 3005,
                'pid' => 339,
                'name' => '天祝藏族自治县',
                'type' => 3,
                'code' => 620623,
            ),
            5 => 
            array (
                'id' => 3006,
                'pid' => 340,
                'name' => '甘州区',
                'type' => 3,
                'code' => 620702,
            ),
            6 => 
            array (
                'id' => 3007,
                'pid' => 340,
                'name' => '肃南裕固族自治县',
                'type' => 3,
                'code' => 620721,
            ),
            7 => 
            array (
                'id' => 3008,
                'pid' => 340,
                'name' => '民乐县',
                'type' => 3,
                'code' => 620722,
            ),
            8 => 
            array (
                'id' => 3009,
                'pid' => 340,
                'name' => '临泽县',
                'type' => 3,
                'code' => 620723,
            ),
            9 => 
            array (
                'id' => 3010,
                'pid' => 340,
                'name' => '高台县',
                'type' => 3,
                'code' => 620724,
            ),
            10 => 
            array (
                'id' => 3011,
                'pid' => 340,
                'name' => '山丹县',
                'type' => 3,
                'code' => 620725,
            ),
            11 => 
            array (
                'id' => 3012,
                'pid' => 341,
                'name' => '崆峒区',
                'type' => 3,
                'code' => 620802,
            ),
            12 => 
            array (
                'id' => 3013,
                'pid' => 341,
                'name' => '泾川县',
                'type' => 3,
                'code' => 620821,
            ),
            13 => 
            array (
                'id' => 3014,
                'pid' => 341,
                'name' => '灵台县',
                'type' => 3,
                'code' => 620822,
            ),
            14 => 
            array (
                'id' => 3015,
                'pid' => 341,
                'name' => '崇信县',
                'type' => 3,
                'code' => 620823,
            ),
            15 => 
            array (
                'id' => 3016,
                'pid' => 341,
                'name' => '华亭县',
                'type' => 3,
                'code' => 620824,
            ),
            16 => 
            array (
                'id' => 3017,
                'pid' => 341,
                'name' => '庄浪县',
                'type' => 3,
                'code' => 620825,
            ),
            17 => 
            array (
                'id' => 3018,
                'pid' => 341,
                'name' => '静宁县',
                'type' => 3,
                'code' => 620826,
            ),
            18 => 
            array (
                'id' => 3019,
                'pid' => 342,
                'name' => '肃州区',
                'type' => 3,
                'code' => 620902,
            ),
            19 => 
            array (
                'id' => 3020,
                'pid' => 342,
                'name' => '金塔县',
                'type' => 3,
                'code' => 620921,
            ),
            20 => 
            array (
                'id' => 3021,
                'pid' => 342,
                'name' => '瓜州县',
                'type' => 3,
                'code' => 620922,
            ),
            21 => 
            array (
                'id' => 3022,
                'pid' => 342,
                'name' => '肃北蒙古族自治县',
                'type' => 3,
                'code' => 620923,
            ),
            22 => 
            array (
                'id' => 3023,
                'pid' => 342,
                'name' => '阿克塞哈萨克族自治县',
                'type' => 3,
                'code' => 620924,
            ),
            23 => 
            array (
                'id' => 3024,
                'pid' => 342,
                'name' => '玉门市',
                'type' => 3,
                'code' => 620981,
            ),
            24 => 
            array (
                'id' => 3025,
                'pid' => 342,
                'name' => '敦煌市',
                'type' => 3,
                'code' => 620982,
            ),
            25 => 
            array (
                'id' => 3026,
                'pid' => 343,
                'name' => '西峰区',
                'type' => 3,
                'code' => 621002,
            ),
            26 => 
            array (
                'id' => 3027,
                'pid' => 343,
                'name' => '庆城县',
                'type' => 3,
                'code' => 621021,
            ),
            27 => 
            array (
                'id' => 3028,
                'pid' => 343,
                'name' => '环县',
                'type' => 3,
                'code' => 621022,
            ),
            28 => 
            array (
                'id' => 3029,
                'pid' => 343,
                'name' => '华池县',
                'type' => 3,
                'code' => 621023,
            ),
            29 => 
            array (
                'id' => 3030,
                'pid' => 343,
                'name' => '合水县',
                'type' => 3,
                'code' => 621024,
            ),
            30 => 
            array (
                'id' => 3031,
                'pid' => 343,
                'name' => '正宁县',
                'type' => 3,
                'code' => 621025,
            ),
            31 => 
            array (
                'id' => 3032,
                'pid' => 343,
                'name' => '宁县',
                'type' => 3,
                'code' => 621026,
            ),
            32 => 
            array (
                'id' => 3033,
                'pid' => 343,
                'name' => '镇原县',
                'type' => 3,
                'code' => 621027,
            ),
            33 => 
            array (
                'id' => 3034,
                'pid' => 344,
                'name' => '安定区',
                'type' => 3,
                'code' => 621102,
            ),
            34 => 
            array (
                'id' => 3035,
                'pid' => 344,
                'name' => '通渭县',
                'type' => 3,
                'code' => 621121,
            ),
            35 => 
            array (
                'id' => 3036,
                'pid' => 344,
                'name' => '陇西县',
                'type' => 3,
                'code' => 621122,
            ),
            36 => 
            array (
                'id' => 3037,
                'pid' => 344,
                'name' => '渭源县',
                'type' => 3,
                'code' => 621123,
            ),
            37 => 
            array (
                'id' => 3038,
                'pid' => 344,
                'name' => '临洮县',
                'type' => 3,
                'code' => 621124,
            ),
            38 => 
            array (
                'id' => 3039,
                'pid' => 344,
                'name' => '漳县',
                'type' => 3,
                'code' => 621125,
            ),
            39 => 
            array (
                'id' => 3040,
                'pid' => 344,
                'name' => '岷县',
                'type' => 3,
                'code' => 621126,
            ),
            40 => 
            array (
                'id' => 3041,
                'pid' => 345,
                'name' => '武都区',
                'type' => 3,
                'code' => 621202,
            ),
            41 => 
            array (
                'id' => 3042,
                'pid' => 345,
                'name' => '成县',
                'type' => 3,
                'code' => 621221,
            ),
            42 => 
            array (
                'id' => 3043,
                'pid' => 345,
                'name' => '文县',
                'type' => 3,
                'code' => 621222,
            ),
            43 => 
            array (
                'id' => 3044,
                'pid' => 345,
                'name' => '宕昌县',
                'type' => 3,
                'code' => 621223,
            ),
            44 => 
            array (
                'id' => 3045,
                'pid' => 345,
                'name' => '康县',
                'type' => 3,
                'code' => 621224,
            ),
            45 => 
            array (
                'id' => 3046,
                'pid' => 345,
                'name' => '西和县',
                'type' => 3,
                'code' => 621225,
            ),
            46 => 
            array (
                'id' => 3047,
                'pid' => 345,
                'name' => '礼县',
                'type' => 3,
                'code' => 621226,
            ),
            47 => 
            array (
                'id' => 3048,
                'pid' => 345,
                'name' => '徽县',
                'type' => 3,
                'code' => 621227,
            ),
            48 => 
            array (
                'id' => 3049,
                'pid' => 345,
                'name' => '两当县',
                'type' => 3,
                'code' => 621228,
            ),
            49 => 
            array (
                'id' => 3050,
                'pid' => 346,
                'name' => '临夏市',
                'type' => 3,
                'code' => 622901,
            ),
            50 => 
            array (
                'id' => 3051,
                'pid' => 346,
                'name' => '临夏县',
                'type' => 3,
                'code' => 622921,
            ),
            51 => 
            array (
                'id' => 3052,
                'pid' => 346,
                'name' => '康乐县',
                'type' => 3,
                'code' => 622922,
            ),
            52 => 
            array (
                'id' => 3053,
                'pid' => 346,
                'name' => '永靖县',
                'type' => 3,
                'code' => 622923,
            ),
            53 => 
            array (
                'id' => 3054,
                'pid' => 346,
                'name' => '广河县',
                'type' => 3,
                'code' => 622924,
            ),
            54 => 
            array (
                'id' => 3055,
                'pid' => 346,
                'name' => '和政县',
                'type' => 3,
                'code' => 622925,
            ),
            55 => 
            array (
                'id' => 3056,
                'pid' => 346,
                'name' => '东乡族自治县',
                'type' => 3,
                'code' => 622926,
            ),
            56 => 
            array (
                'id' => 3057,
                'pid' => 346,
                'name' => '积石山保安族东乡族撒拉族自治县',
                'type' => 3,
                'code' => 622927,
            ),
            57 => 
            array (
                'id' => 3058,
                'pid' => 347,
                'name' => '合作市',
                'type' => 3,
                'code' => 623001,
            ),
            58 => 
            array (
                'id' => 3059,
                'pid' => 347,
                'name' => '临潭县',
                'type' => 3,
                'code' => 623021,
            ),
            59 => 
            array (
                'id' => 3060,
                'pid' => 347,
                'name' => '卓尼县',
                'type' => 3,
                'code' => 623022,
            ),
            60 => 
            array (
                'id' => 3061,
                'pid' => 347,
                'name' => '舟曲县',
                'type' => 3,
                'code' => 623023,
            ),
            61 => 
            array (
                'id' => 3062,
                'pid' => 347,
                'name' => '迭部县',
                'type' => 3,
                'code' => 623024,
            ),
            62 => 
            array (
                'id' => 3063,
                'pid' => 347,
                'name' => '玛曲县',
                'type' => 3,
                'code' => 623025,
            ),
            63 => 
            array (
                'id' => 3064,
                'pid' => 347,
                'name' => '碌曲县',
                'type' => 3,
                'code' => 623026,
            ),
            64 => 
            array (
                'id' => 3065,
                'pid' => 347,
                'name' => '夏河县',
                'type' => 3,
                'code' => 623027,
            ),
            65 => 
            array (
                'id' => 3066,
                'pid' => 348,
                'name' => '城东区',
                'type' => 3,
                'code' => 630102,
            ),
            66 => 
            array (
                'id' => 3067,
                'pid' => 348,
                'name' => '城中区',
                'type' => 3,
                'code' => 630103,
            ),
            67 => 
            array (
                'id' => 3068,
                'pid' => 348,
                'name' => '城西区',
                'type' => 3,
                'code' => 630104,
            ),
            68 => 
            array (
                'id' => 3069,
                'pid' => 348,
                'name' => '城北区',
                'type' => 3,
                'code' => 630105,
            ),
            69 => 
            array (
                'id' => 3070,
                'pid' => 348,
                'name' => '大通回族土族自治县',
                'type' => 3,
                'code' => 630121,
            ),
            70 => 
            array (
                'id' => 3071,
                'pid' => 348,
                'name' => '湟中县',
                'type' => 3,
                'code' => 630122,
            ),
            71 => 
            array (
                'id' => 3072,
                'pid' => 348,
                'name' => '湟源县',
                'type' => 3,
                'code' => 630123,
            ),
            72 => 
            array (
                'id' => 3073,
                'pid' => 349,
                'name' => '乐都区',
                'type' => 3,
                'code' => 630202,
            ),
            73 => 
            array (
                'id' => 3074,
                'pid' => 349,
                'name' => '平安区',
                'type' => 3,
                'code' => 630203,
            ),
            74 => 
            array (
                'id' => 3075,
                'pid' => 349,
                'name' => '民和回族土族自治县',
                'type' => 3,
                'code' => 630222,
            ),
            75 => 
            array (
                'id' => 3076,
                'pid' => 349,
                'name' => '互助土族自治县',
                'type' => 3,
                'code' => 630223,
            ),
            76 => 
            array (
                'id' => 3077,
                'pid' => 349,
                'name' => '化隆回族自治县',
                'type' => 3,
                'code' => 630224,
            ),
            77 => 
            array (
                'id' => 3078,
                'pid' => 349,
                'name' => '循化撒拉族自治县',
                'type' => 3,
                'code' => 630225,
            ),
            78 => 
            array (
                'id' => 3079,
                'pid' => 350,
                'name' => '门源回族自治县',
                'type' => 3,
                'code' => 632221,
            ),
            79 => 
            array (
                'id' => 3080,
                'pid' => 350,
                'name' => '祁连县',
                'type' => 3,
                'code' => 632222,
            ),
            80 => 
            array (
                'id' => 3081,
                'pid' => 350,
                'name' => '海晏县',
                'type' => 3,
                'code' => 632223,
            ),
            81 => 
            array (
                'id' => 3082,
                'pid' => 350,
                'name' => '刚察县',
                'type' => 3,
                'code' => 632224,
            ),
            82 => 
            array (
                'id' => 3083,
                'pid' => 351,
                'name' => '同仁县',
                'type' => 3,
                'code' => 632321,
            ),
            83 => 
            array (
                'id' => 3084,
                'pid' => 351,
                'name' => '尖扎县',
                'type' => 3,
                'code' => 632322,
            ),
            84 => 
            array (
                'id' => 3085,
                'pid' => 351,
                'name' => '泽库县',
                'type' => 3,
                'code' => 632323,
            ),
            85 => 
            array (
                'id' => 3086,
                'pid' => 351,
                'name' => '河南蒙古族自治县',
                'type' => 3,
                'code' => 632324,
            ),
            86 => 
            array (
                'id' => 3087,
                'pid' => 352,
                'name' => '共和县',
                'type' => 3,
                'code' => 632521,
            ),
            87 => 
            array (
                'id' => 3088,
                'pid' => 352,
                'name' => '同德县',
                'type' => 3,
                'code' => 632522,
            ),
            88 => 
            array (
                'id' => 3089,
                'pid' => 352,
                'name' => '贵德县',
                'type' => 3,
                'code' => 632523,
            ),
            89 => 
            array (
                'id' => 3090,
                'pid' => 352,
                'name' => '兴海县',
                'type' => 3,
                'code' => 632524,
            ),
            90 => 
            array (
                'id' => 3091,
                'pid' => 352,
                'name' => '贵南县',
                'type' => 3,
                'code' => 632525,
            ),
            91 => 
            array (
                'id' => 3092,
                'pid' => 353,
                'name' => '玛沁县',
                'type' => 3,
                'code' => 632621,
            ),
            92 => 
            array (
                'id' => 3093,
                'pid' => 353,
                'name' => '班玛县',
                'type' => 3,
                'code' => 632622,
            ),
            93 => 
            array (
                'id' => 3094,
                'pid' => 353,
                'name' => '甘德县',
                'type' => 3,
                'code' => 632623,
            ),
            94 => 
            array (
                'id' => 3095,
                'pid' => 353,
                'name' => '达日县',
                'type' => 3,
                'code' => 632624,
            ),
            95 => 
            array (
                'id' => 3096,
                'pid' => 353,
                'name' => '久治县',
                'type' => 3,
                'code' => 632625,
            ),
            96 => 
            array (
                'id' => 3097,
                'pid' => 353,
                'name' => '玛多县',
                'type' => 3,
                'code' => 632626,
            ),
            97 => 
            array (
                'id' => 3098,
                'pid' => 354,
                'name' => '玉树市',
                'type' => 3,
                'code' => 632701,
            ),
            98 => 
            array (
                'id' => 3099,
                'pid' => 354,
                'name' => '杂多县',
                'type' => 3,
                'code' => 632722,
            ),
            99 => 
            array (
                'id' => 3100,
                'pid' => 354,
                'name' => '称多县',
                'type' => 3,
                'code' => 632723,
            ),
            100 => 
            array (
                'id' => 3101,
                'pid' => 354,
                'name' => '治多县',
                'type' => 3,
                'code' => 632724,
            ),
            101 => 
            array (
                'id' => 3102,
                'pid' => 354,
                'name' => '囊谦县',
                'type' => 3,
                'code' => 632725,
            ),
            102 => 
            array (
                'id' => 3103,
                'pid' => 354,
                'name' => '曲麻莱县',
                'type' => 3,
                'code' => 632726,
            ),
            103 => 
            array (
                'id' => 3104,
                'pid' => 355,
                'name' => '格尔木市',
                'type' => 3,
                'code' => 632801,
            ),
            104 => 
            array (
                'id' => 3105,
                'pid' => 355,
                'name' => '德令哈市',
                'type' => 3,
                'code' => 632802,
            ),
            105 => 
            array (
                'id' => 3106,
                'pid' => 355,
                'name' => '乌兰县',
                'type' => 3,
                'code' => 632821,
            ),
            106 => 
            array (
                'id' => 3107,
                'pid' => 355,
                'name' => '都兰县',
                'type' => 3,
                'code' => 632822,
            ),
            107 => 
            array (
                'id' => 3108,
                'pid' => 355,
                'name' => '天峻县',
                'type' => 3,
                'code' => 632823,
            ),
            108 => 
            array (
                'id' => 3109,
                'pid' => 356,
                'name' => '兴庆区',
                'type' => 3,
                'code' => 640104,
            ),
            109 => 
            array (
                'id' => 3110,
                'pid' => 356,
                'name' => '西夏区',
                'type' => 3,
                'code' => 640105,
            ),
            110 => 
            array (
                'id' => 3111,
                'pid' => 356,
                'name' => '金凤区',
                'type' => 3,
                'code' => 640106,
            ),
            111 => 
            array (
                'id' => 3112,
                'pid' => 356,
                'name' => '永宁县',
                'type' => 3,
                'code' => 640121,
            ),
            112 => 
            array (
                'id' => 3113,
                'pid' => 356,
                'name' => '贺兰县',
                'type' => 3,
                'code' => 640122,
            ),
            113 => 
            array (
                'id' => 3114,
                'pid' => 356,
                'name' => '灵武市',
                'type' => 3,
                'code' => 640181,
            ),
            114 => 
            array (
                'id' => 3115,
                'pid' => 357,
                'name' => '大武口区',
                'type' => 3,
                'code' => 640202,
            ),
            115 => 
            array (
                'id' => 3116,
                'pid' => 357,
                'name' => '惠农区',
                'type' => 3,
                'code' => 640205,
            ),
            116 => 
            array (
                'id' => 3117,
                'pid' => 357,
                'name' => '平罗县',
                'type' => 3,
                'code' => 640221,
            ),
            117 => 
            array (
                'id' => 3118,
                'pid' => 358,
                'name' => '利通区',
                'type' => 3,
                'code' => 640302,
            ),
            118 => 
            array (
                'id' => 3119,
                'pid' => 358,
                'name' => '红寺堡区',
                'type' => 3,
                'code' => 640303,
            ),
            119 => 
            array (
                'id' => 3120,
                'pid' => 358,
                'name' => '盐池县',
                'type' => 3,
                'code' => 640323,
            ),
            120 => 
            array (
                'id' => 3121,
                'pid' => 358,
                'name' => '同心县',
                'type' => 3,
                'code' => 640324,
            ),
            121 => 
            array (
                'id' => 3122,
                'pid' => 358,
                'name' => '青铜峡市',
                'type' => 3,
                'code' => 640381,
            ),
            122 => 
            array (
                'id' => 3123,
                'pid' => 359,
                'name' => '原州区',
                'type' => 3,
                'code' => 640402,
            ),
            123 => 
            array (
                'id' => 3124,
                'pid' => 359,
                'name' => '西吉县',
                'type' => 3,
                'code' => 640422,
            ),
            124 => 
            array (
                'id' => 3125,
                'pid' => 359,
                'name' => '隆德县',
                'type' => 3,
                'code' => 640423,
            ),
            125 => 
            array (
                'id' => 3126,
                'pid' => 359,
                'name' => '泾源县',
                'type' => 3,
                'code' => 640424,
            ),
            126 => 
            array (
                'id' => 3127,
                'pid' => 359,
                'name' => '彭阳县',
                'type' => 3,
                'code' => 640425,
            ),
            127 => 
            array (
                'id' => 3128,
                'pid' => 360,
                'name' => '沙坡头区',
                'type' => 3,
                'code' => 640502,
            ),
            128 => 
            array (
                'id' => 3129,
                'pid' => 360,
                'name' => '中宁县',
                'type' => 3,
                'code' => 640521,
            ),
            129 => 
            array (
                'id' => 3130,
                'pid' => 360,
                'name' => '海原县',
                'type' => 3,
                'code' => 640522,
            ),
            130 => 
            array (
                'id' => 3131,
                'pid' => 361,
                'name' => '天山区',
                'type' => 3,
                'code' => 650102,
            ),
            131 => 
            array (
                'id' => 3132,
                'pid' => 361,
                'name' => '沙依巴克区',
                'type' => 3,
                'code' => 650103,
            ),
            132 => 
            array (
                'id' => 3133,
                'pid' => 361,
                'name' => '新市区',
                'type' => 3,
                'code' => 650104,
            ),
            133 => 
            array (
                'id' => 3134,
                'pid' => 361,
                'name' => '水磨沟区',
                'type' => 3,
                'code' => 650105,
            ),
            134 => 
            array (
                'id' => 3135,
                'pid' => 361,
                'name' => '头屯河区',
                'type' => 3,
                'code' => 650106,
            ),
            135 => 
            array (
                'id' => 3136,
                'pid' => 361,
                'name' => '达坂城区',
                'type' => 3,
                'code' => 650107,
            ),
            136 => 
            array (
                'id' => 3137,
                'pid' => 361,
                'name' => '米东区',
                'type' => 3,
                'code' => 650109,
            ),
            137 => 
            array (
                'id' => 3138,
                'pid' => 361,
                'name' => '乌鲁木齐县',
                'type' => 3,
                'code' => 650121,
            ),
            138 => 
            array (
                'id' => 3139,
                'pid' => 362,
                'name' => '独山子区',
                'type' => 3,
                'code' => 650202,
            ),
            139 => 
            array (
                'id' => 3140,
                'pid' => 362,
                'name' => '克拉玛依区',
                'type' => 3,
                'code' => 650203,
            ),
            140 => 
            array (
                'id' => 3141,
                'pid' => 362,
                'name' => '白碱滩区',
                'type' => 3,
                'code' => 650204,
            ),
            141 => 
            array (
                'id' => 3142,
                'pid' => 362,
                'name' => '乌尔禾区',
                'type' => 3,
                'code' => 650205,
            ),
            142 => 
            array (
                'id' => 3143,
                'pid' => 363,
                'name' => '高昌区',
                'type' => 3,
                'code' => 650402,
            ),
            143 => 
            array (
                'id' => 3144,
                'pid' => 363,
                'name' => '鄯善县',
                'type' => 3,
                'code' => 650421,
            ),
            144 => 
            array (
                'id' => 3145,
                'pid' => 363,
                'name' => '托克逊县',
                'type' => 3,
                'code' => 650422,
            ),
            145 => 
            array (
                'id' => 3146,
                'pid' => 364,
                'name' => '伊州区',
                'type' => 3,
                'code' => 650502,
            ),
            146 => 
            array (
                'id' => 3147,
                'pid' => 364,
                'name' => '巴里坤哈萨克自治县',
                'type' => 3,
                'code' => 650521,
            ),
            147 => 
            array (
                'id' => 3148,
                'pid' => 364,
                'name' => '伊吾县',
                'type' => 3,
                'code' => 650522,
            ),
            148 => 
            array (
                'id' => 3149,
                'pid' => 365,
                'name' => '昌吉市',
                'type' => 3,
                'code' => 652301,
            ),
            149 => 
            array (
                'id' => 3150,
                'pid' => 365,
                'name' => '阜康市',
                'type' => 3,
                'code' => 652302,
            ),
            150 => 
            array (
                'id' => 3151,
                'pid' => 365,
                'name' => '呼图壁县',
                'type' => 3,
                'code' => 652323,
            ),
            151 => 
            array (
                'id' => 3152,
                'pid' => 365,
                'name' => '玛纳斯县',
                'type' => 3,
                'code' => 652324,
            ),
            152 => 
            array (
                'id' => 3153,
                'pid' => 365,
                'name' => '奇台县',
                'type' => 3,
                'code' => 652325,
            ),
            153 => 
            array (
                'id' => 3154,
                'pid' => 365,
                'name' => '吉木萨尔县',
                'type' => 3,
                'code' => 652327,
            ),
            154 => 
            array (
                'id' => 3155,
                'pid' => 365,
                'name' => '木垒哈萨克自治县',
                'type' => 3,
                'code' => 652328,
            ),
            155 => 
            array (
                'id' => 3156,
                'pid' => 366,
                'name' => '博乐市',
                'type' => 3,
                'code' => 652701,
            ),
            156 => 
            array (
                'id' => 3157,
                'pid' => 366,
                'name' => '阿拉山口市',
                'type' => 3,
                'code' => 652702,
            ),
            157 => 
            array (
                'id' => 3158,
                'pid' => 366,
                'name' => '精河县',
                'type' => 3,
                'code' => 652722,
            ),
            158 => 
            array (
                'id' => 3159,
                'pid' => 366,
                'name' => '温泉县',
                'type' => 3,
                'code' => 652723,
            ),
            159 => 
            array (
                'id' => 3160,
                'pid' => 367,
                'name' => '库尔勒市',
                'type' => 3,
                'code' => 652801,
            ),
            160 => 
            array (
                'id' => 3161,
                'pid' => 367,
                'name' => '轮台县',
                'type' => 3,
                'code' => 652822,
            ),
            161 => 
            array (
                'id' => 3162,
                'pid' => 367,
                'name' => '尉犁县',
                'type' => 3,
                'code' => 652823,
            ),
            162 => 
            array (
                'id' => 3163,
                'pid' => 367,
                'name' => '若羌县',
                'type' => 3,
                'code' => 652824,
            ),
            163 => 
            array (
                'id' => 3164,
                'pid' => 367,
                'name' => '且末县',
                'type' => 3,
                'code' => 652825,
            ),
            164 => 
            array (
                'id' => 3165,
                'pid' => 367,
                'name' => '焉耆回族自治县',
                'type' => 3,
                'code' => 652826,
            ),
            165 => 
            array (
                'id' => 3166,
                'pid' => 367,
                'name' => '和静县',
                'type' => 3,
                'code' => 652827,
            ),
            166 => 
            array (
                'id' => 3167,
                'pid' => 367,
                'name' => '和硕县',
                'type' => 3,
                'code' => 652828,
            ),
            167 => 
            array (
                'id' => 3168,
                'pid' => 367,
                'name' => '博湖县',
                'type' => 3,
                'code' => 652829,
            ),
            168 => 
            array (
                'id' => 3169,
                'pid' => 368,
                'name' => '阿克苏市',
                'type' => 3,
                'code' => 652901,
            ),
            169 => 
            array (
                'id' => 3170,
                'pid' => 368,
                'name' => '温宿县',
                'type' => 3,
                'code' => 652922,
            ),
            170 => 
            array (
                'id' => 3171,
                'pid' => 368,
                'name' => '库车县',
                'type' => 3,
                'code' => 652923,
            ),
            171 => 
            array (
                'id' => 3172,
                'pid' => 368,
                'name' => '沙雅县',
                'type' => 3,
                'code' => 652924,
            ),
            172 => 
            array (
                'id' => 3173,
                'pid' => 368,
                'name' => '新和县',
                'type' => 3,
                'code' => 652925,
            ),
            173 => 
            array (
                'id' => 3174,
                'pid' => 368,
                'name' => '拜城县',
                'type' => 3,
                'code' => 652926,
            ),
            174 => 
            array (
                'id' => 3175,
                'pid' => 368,
                'name' => '乌什县',
                'type' => 3,
                'code' => 652927,
            ),
            175 => 
            array (
                'id' => 3176,
                'pid' => 368,
                'name' => '阿瓦提县',
                'type' => 3,
                'code' => 652928,
            ),
            176 => 
            array (
                'id' => 3177,
                'pid' => 368,
                'name' => '柯坪县',
                'type' => 3,
                'code' => 652929,
            ),
            177 => 
            array (
                'id' => 3178,
                'pid' => 369,
                'name' => '阿图什市',
                'type' => 3,
                'code' => 653001,
            ),
            178 => 
            array (
                'id' => 3179,
                'pid' => 369,
                'name' => '阿克陶县',
                'type' => 3,
                'code' => 653022,
            ),
            179 => 
            array (
                'id' => 3180,
                'pid' => 369,
                'name' => '阿合奇县',
                'type' => 3,
                'code' => 653023,
            ),
            180 => 
            array (
                'id' => 3181,
                'pid' => 369,
                'name' => '乌恰县',
                'type' => 3,
                'code' => 653024,
            ),
            181 => 
            array (
                'id' => 3182,
                'pid' => 370,
                'name' => '喀什市',
                'type' => 3,
                'code' => 653101,
            ),
            182 => 
            array (
                'id' => 3183,
                'pid' => 370,
                'name' => '疏附县',
                'type' => 3,
                'code' => 653121,
            ),
            183 => 
            array (
                'id' => 3184,
                'pid' => 370,
                'name' => '疏勒县',
                'type' => 3,
                'code' => 653122,
            ),
            184 => 
            array (
                'id' => 3185,
                'pid' => 370,
                'name' => '英吉沙县',
                'type' => 3,
                'code' => 653123,
            ),
            185 => 
            array (
                'id' => 3186,
                'pid' => 370,
                'name' => '泽普县',
                'type' => 3,
                'code' => 653124,
            ),
            186 => 
            array (
                'id' => 3187,
                'pid' => 370,
                'name' => '莎车县',
                'type' => 3,
                'code' => 653125,
            ),
            187 => 
            array (
                'id' => 3188,
                'pid' => 370,
                'name' => '叶城县',
                'type' => 3,
                'code' => 653126,
            ),
            188 => 
            array (
                'id' => 3189,
                'pid' => 370,
                'name' => '麦盖提县',
                'type' => 3,
                'code' => 653127,
            ),
            189 => 
            array (
                'id' => 3190,
                'pid' => 370,
                'name' => '岳普湖县',
                'type' => 3,
                'code' => 653128,
            ),
            190 => 
            array (
                'id' => 3191,
                'pid' => 370,
                'name' => '伽师县',
                'type' => 3,
                'code' => 653129,
            ),
            191 => 
            array (
                'id' => 3192,
                'pid' => 370,
                'name' => '巴楚县',
                'type' => 3,
                'code' => 653130,
            ),
            192 => 
            array (
                'id' => 3193,
                'pid' => 370,
                'name' => '塔什库尔干塔吉克自治县',
                'type' => 3,
                'code' => 653131,
            ),
            193 => 
            array (
                'id' => 3194,
                'pid' => 371,
                'name' => '和田市',
                'type' => 3,
                'code' => 653201,
            ),
            194 => 
            array (
                'id' => 3195,
                'pid' => 371,
                'name' => '和田县',
                'type' => 3,
                'code' => 653221,
            ),
            195 => 
            array (
                'id' => 3196,
                'pid' => 371,
                'name' => '墨玉县',
                'type' => 3,
                'code' => 653222,
            ),
            196 => 
            array (
                'id' => 3197,
                'pid' => 371,
                'name' => '皮山县',
                'type' => 3,
                'code' => 653223,
            ),
            197 => 
            array (
                'id' => 3198,
                'pid' => 371,
                'name' => '洛浦县',
                'type' => 3,
                'code' => 653224,
            ),
            198 => 
            array (
                'id' => 3199,
                'pid' => 371,
                'name' => '策勒县',
                'type' => 3,
                'code' => 653225,
            ),
            199 => 
            array (
                'id' => 3200,
                'pid' => 371,
                'name' => '于田县',
                'type' => 3,
                'code' => 653226,
            ),
            200 => 
            array (
                'id' => 3201,
                'pid' => 371,
                'name' => '民丰县',
                'type' => 3,
                'code' => 653227,
            ),
            201 => 
            array (
                'id' => 3202,
                'pid' => 372,
                'name' => '伊宁市',
                'type' => 3,
                'code' => 654002,
            ),
            202 => 
            array (
                'id' => 3203,
                'pid' => 372,
                'name' => '奎屯市',
                'type' => 3,
                'code' => 654003,
            ),
            203 => 
            array (
                'id' => 3204,
                'pid' => 372,
                'name' => '霍尔果斯市',
                'type' => 3,
                'code' => 654004,
            ),
            204 => 
            array (
                'id' => 3205,
                'pid' => 372,
                'name' => '伊宁县',
                'type' => 3,
                'code' => 654021,
            ),
            205 => 
            array (
                'id' => 3206,
                'pid' => 372,
                'name' => '察布查尔锡伯自治县',
                'type' => 3,
                'code' => 654022,
            ),
            206 => 
            array (
                'id' => 3207,
                'pid' => 372,
                'name' => '霍城县',
                'type' => 3,
                'code' => 654023,
            ),
            207 => 
            array (
                'id' => 3208,
                'pid' => 372,
                'name' => '巩留县',
                'type' => 3,
                'code' => 654024,
            ),
            208 => 
            array (
                'id' => 3209,
                'pid' => 372,
                'name' => '新源县',
                'type' => 3,
                'code' => 654025,
            ),
            209 => 
            array (
                'id' => 3210,
                'pid' => 372,
                'name' => '昭苏县',
                'type' => 3,
                'code' => 654026,
            ),
            210 => 
            array (
                'id' => 3211,
                'pid' => 372,
                'name' => '特克斯县',
                'type' => 3,
                'code' => 654027,
            ),
            211 => 
            array (
                'id' => 3212,
                'pid' => 372,
                'name' => '尼勒克县',
                'type' => 3,
                'code' => 654028,
            ),
            212 => 
            array (
                'id' => 3213,
                'pid' => 373,
                'name' => '塔城市',
                'type' => 3,
                'code' => 654201,
            ),
            213 => 
            array (
                'id' => 3214,
                'pid' => 373,
                'name' => '乌苏市',
                'type' => 3,
                'code' => 654202,
            ),
            214 => 
            array (
                'id' => 3215,
                'pid' => 373,
                'name' => '额敏县',
                'type' => 3,
                'code' => 654221,
            ),
            215 => 
            array (
                'id' => 3216,
                'pid' => 373,
                'name' => '沙湾县',
                'type' => 3,
                'code' => 654223,
            ),
            216 => 
            array (
                'id' => 3217,
                'pid' => 373,
                'name' => '托里县',
                'type' => 3,
                'code' => 654224,
            ),
            217 => 
            array (
                'id' => 3218,
                'pid' => 373,
                'name' => '裕民县',
                'type' => 3,
                'code' => 654225,
            ),
            218 => 
            array (
                'id' => 3219,
                'pid' => 373,
                'name' => '和布克赛尔蒙古自治县',
                'type' => 3,
                'code' => 654226,
            ),
            219 => 
            array (
                'id' => 3220,
                'pid' => 374,
                'name' => '阿勒泰市',
                'type' => 3,
                'code' => 654301,
            ),
            220 => 
            array (
                'id' => 3221,
                'pid' => 374,
                'name' => '布尔津县',
                'type' => 3,
                'code' => 654321,
            ),
            221 => 
            array (
                'id' => 3222,
                'pid' => 374,
                'name' => '富蕴县',
                'type' => 3,
                'code' => 654322,
            ),
            222 => 
            array (
                'id' => 3223,
                'pid' => 374,
                'name' => '福海县',
                'type' => 3,
                'code' => 654323,
            ),
            223 => 
            array (
                'id' => 3224,
                'pid' => 374,
                'name' => '哈巴河县',
                'type' => 3,
                'code' => 654324,
            ),
            224 => 
            array (
                'id' => 3225,
                'pid' => 374,
                'name' => '青河县',
                'type' => 3,
                'code' => 654325,
            ),
            225 => 
            array (
                'id' => 3226,
                'pid' => 374,
                'name' => '吉木乃县',
                'type' => 3,
                'code' => 654326,
            ),
            226 => 
            array (
                'id' => 3227,
                'pid' => 375,
                'name' => '石河子市',
                'type' => 3,
                'code' => 659001,
            ),
            227 => 
            array (
                'id' => 3228,
                'pid' => 375,
                'name' => '阿拉尔市',
                'type' => 3,
                'code' => 659002,
            ),
            228 => 
            array (
                'id' => 3229,
                'pid' => 375,
                'name' => '图木舒克市',
                'type' => 3,
                'code' => 659003,
            ),
            229 => 
            array (
                'id' => 3230,
                'pid' => 375,
                'name' => '五家渠市',
                'type' => 3,
                'code' => 659004,
            ),
            230 => 
            array (
                'id' => 3231,
                'pid' => 375,
                'name' => '铁门关市',
                'type' => 3,
                'code' => 659006,
            ),
        ));
        
        
    }
}