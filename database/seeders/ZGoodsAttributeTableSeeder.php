<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ZGoodsAttributeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('z_goods_attribute')->delete();
        
        \DB::table('z_goods_attribute')->insert(array (
            0 => 
            array (
                'id' => 1,
                'goods_id' => 1006002,
                'attribute' => '材质',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'goods_id' => 1006002,
                'attribute' => '适用床尺寸',
                'value' => '1.5米+1.8米通用',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'goods_id' => 1006002,
                'attribute' => '件数',
                'value' => '4件',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'goods_id' => 1006002,
                'attribute' => '工艺',
                'value' => '刺绣',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'goods_id' => 1006002,
                'attribute' => '执行标准',
                'value' => 'GB18401-2010 B类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'goods_id' => 1006002,
                'attribute' => '产地',
                'value' => '中国',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'goods_id' => 1006002,
                'attribute' => '温馨提示',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'goods_id' => 1006007,
                'attribute' => '填充物重量',
                'value' => '2000g/2300g',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'goods_id' => 1006007,
                'attribute' => '尺寸',
                'value' => '200*230cm/220*240cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            9 => 
            array (
                'id' => 10,
                'goods_id' => 1006007,
                'attribute' => '面料',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'goods_id' => 1006007,
                'attribute' => '填充物',
                'value' => '100%羊毛',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            11 => 
            array (
                'id' => 12,
                'goods_id' => 1006007,
                'attribute' => '温馨提示',
                'value' => '1.经过碳化、清洗、梳理的天然羊毛被带会有少量味道，通风晾晒2-3天即可散去                     2.为减少羊毛漂白等化学用品的处理时间，部分羊毛可能未完全脱色，轻微泛黄属羊毛原色，为正常现象。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'goods_id' => 1006010,
                'attribute' => '填充物重量',
                'value' => '2000g/2300g',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'goods_id' => 1006010,
                'attribute' => '尺寸',
                'value' => '200*230cm/220*240cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'goods_id' => 1006010,
                'attribute' => '面料',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'goods_id' => 1006010,
                'attribute' => '填充物',
                'value' => '超细羊毛',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'goods_id' => 1006010,
                'attribute' => '温馨提示',
                'value' => '1.经过碳化、清洗、梳理的天然羊毛被带会有少量味道，通风晾晒2-3天即可散去                                        2.为减少羊毛漂白等化学用品的处理时间，部分羊毛可能未完全脱色，轻微泛黄属羊毛原色，为正常现象。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'goods_id' => 1006013,
                'attribute' => '尺寸',
                'value' => '200*230cm/ 220*240cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'goods_id' => 1006013,
                'attribute' => '面料',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'goods_id' => 1006013,
                'attribute' => '填充物',
                'value' => '100%双宫茧桑蚕丝',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'goods_id' => 1006013,
                'attribute' => '填充物重量',
                'value' => '0.5KG/1KG',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'goods_id' => 1006013,
                'attribute' => '温馨提示',
                'value' => '天然桑蚕丝具有正常蛋白味道，通风晾晒2-3天即可散去',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'goods_id' => 1006014,
                'attribute' => '尺寸',
                'value' => '200*230cm/ 220*240cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'goods_id' => 1006014,
                'attribute' => '面料',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'goods_id' => 1006014,
                'attribute' => '填充物',
                'value' => '100%双宫茧桑蚕丝',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'goods_id' => 1006014,
                'attribute' => '填充物重量',
                'value' => '0.5+1.5KG/1+2KG',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'goods_id' => 1006014,
                'attribute' => '温馨提示',
                'value' => '天然桑蚕丝具有正常蛋白味道，通风晾晒2-3天即可散去',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'goods_id' => 1009009,
                'attribute' => '尺寸',
                'value' => '200*230cm/220*240cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            28 => 
            array (
                'id' => 29,
                'goods_id' => 1009009,
                'attribute' => '填充成分',
                'value' => '白鹅绒',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            29 => 
            array (
                'id' => 30,
                'goods_id' => 1009009,
                'attribute' => '面料成分',
                'value' => '60%棉 40%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            30 => 
            array (
                'id' => 31,
                'goods_id' => 1009009,
                'attribute' => '填充物重量',
                'value' => '1500g/1700g',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            31 => 
            array (
                'id' => 32,
                'goods_id' => 1009009,
                'attribute' => '含绒量',
                'value' => '95%',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            32 => 
            array (
                'id' => 33,
                'goods_id' => 1009009,
                'attribute' => '工艺',
                'value' => '双层立衬',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            33 => 
            array (
                'id' => 34,
                'goods_id' => 1009012,
                'attribute' => '尺寸',
                'value' => '48*74cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            34 => 
            array (
                'id' => 35,
                'goods_id' => 1009012,
                'attribute' => '面料成分',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            35 => 
            array (
                'id' => 36,
                'goods_id' => 1009012,
                'attribute' => '填充成分',
                'value' => '100%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            36 => 
            array (
                'id' => 37,
                'goods_id' => 1009012,
                'attribute' => '重量',
                'value' => '1000g',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            37 => 
            array (
                'id' => 38,
                'goods_id' => 1009012,
                'attribute' => '产地',
                'value' => '中国',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            38 => 
            array (
                'id' => 39,
                'goods_id' => 1009012,
                'attribute' => '温馨提示',
                'value' => '枕芯类商品受身高、体型、睡眠习惯不同，产生不同的使用体验，建议多试睡几款枕头，挑选最适合的进行使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            39 => 
            array (
                'id' => 40,
                'goods_id' => 1009013,
                'attribute' => '尺寸',
                'value' => '48*74cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            40 => 
            array (
                'id' => 41,
                'goods_id' => 1009013,
                'attribute' => '面料成分',
                'value' => '70%高模量聚酯+30%聚酰胺',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            41 => 
            array (
                'id' => 42,
                'goods_id' => 1009013,
                'attribute' => '填充成分',
                'value' => '100%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            42 => 
            array (
                'id' => 43,
                'goods_id' => 1009013,
                'attribute' => '重量',
                'value' => '1000g',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            43 => 
            array (
                'id' => 44,
                'goods_id' => 1009013,
                'attribute' => '产地',
                'value' => '中国',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            44 => 
            array (
                'id' => 45,
                'goods_id' => 1009013,
                'attribute' => '温馨提示',
                'value' => '枕芯类商品受身高、体型、睡眠习惯不同，产生不同的使用体验，建议多试睡几款枕头，挑选最适合的进行使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            45 => 
            array (
                'id' => 46,
                'goods_id' => 1009024,
                'attribute' => '规格',
                'value' => '65*65*43cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            46 => 
            array (
                'id' => 47,
                'goods_id' => 1009024,
                'attribute' => '外套材质',
                'value' => '外套帆布：100%棉；外套弹力布：锦纶80%氨纶20%',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            47 => 
            array (
                'id' => 48,
                'goods_id' => 1009024,
                'attribute' => '内胆材质',
                'value' => '内胆面料：100%锦纶；填充物：聚苯乙烯（发泡粒子）',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            48 => 
            array (
                'id' => 49,
                'goods_id' => 1009024,
                'attribute' => '*温馨提示',
                'value' => '本品为人工填充粒子，重量难免会有误差，敬请谅解。同时产品在运输过程中受挤压，也可能会造成凹陷。储存时请避免重物挤压以引起泡沫粒子塌陷。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            49 => 
            array (
                'id' => 50,
                'goods_id' => 1010000,
                'attribute' => '材质',
                'value' => '100%羊毛',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            50 => 
            array (
                'id' => 51,
                'goods_id' => 1010000,
                'attribute' => '尺寸',
                'value' => '200*150cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            51 => 
            array (
                'id' => 52,
                'goods_id' => 1010000,
                'attribute' => '温馨提示',
                'value' => '1.羊毛毯采取传统机织工艺，纯天然织造的，直接接触皮肤会有轻微扎人。
2.初次使用时会有少量浮毛，建议干洗处理。
3.商品为纯羊毛织造而成，若有少量气味请通风2-3天去除。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            52 => 
            array (
                'id' => 53,
                'goods_id' => 1010001,
                'attribute' => '材质',
                'value' => '100%羊毛',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            53 => 
            array (
                'id' => 54,
                'goods_id' => 1010001,
                'attribute' => '规格',
                'value' => '200*150cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            54 => 
            array (
                'id' => 55,
                'goods_id' => 1010001,
                'attribute' => '温馨提示',
                'value' => '1.羊毛毯采取传统机织工艺，纯天然织造的，直接接触皮肤会有轻微扎人。
2.初次使用时会有少量浮毛，建议干洗处理。
3.商品为纯羊毛织造而成，若有少量气味请通风2-3天去除。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            55 => 
            array (
                'id' => 56,
                'goods_id' => 1011004,
                'attribute' => '面料成分',
                'value' => '100% 棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            56 => 
            array (
                'id' => 57,
                'goods_id' => 1011004,
                'attribute' => '安全技术',
                'value' => 'GB18401-2010 B类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            57 => 
            array (
                'id' => 58,
                'goods_id' => 1011004,
                'attribute' => '规格',
                'value' => '150×200cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            58 => 
            array (
                'id' => 59,
                'goods_id' => 1011004,
                'attribute' => '产品等级',
                'value' => '一等品',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            59 => 
            array (
                'id' => 60,
                'goods_id' => 1011004,
                'attribute' => '产地',
                'value' => '中国',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            60 => 
            array (
                'id' => 61,
                'goods_id' => 1011004,
                'attribute' => '重量',
                'value' => '1800g',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            61 => 
            array (
                'id' => 62,
                'goods_id' => 1011004,
                'attribute' => '温馨提示',
                'value' => '1.深色纯棉毛巾被在织造染色过程中，巾面更易产生微细的纤维浮绒，使用前建议用清水漂洗1-2次，即可去掉产品上的浮绒。
2.在洗涤时一定要注意不要与衣服混在一起机洗，强力的搓洗会引起掉毛或勾线现象。
3.纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            62 => 
            array (
                'id' => 63,
                'goods_id' => 1015007,
                'attribute' => '尺寸',
                'value' => '45cm*45cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            63 => 
            array (
                'id' => 64,
                'goods_id' => 1015007,
                'attribute' => '面料成份',
                'value' => '100%全棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            64 => 
            array (
                'id' => 65,
                'goods_id' => 1015007,
                'attribute' => '内芯面料',
                'value' => '100%全棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            65 => 
            array (
                'id' => 66,
                'goods_id' => 1015007,
                'attribute' => '填充物',
                'value' => '100%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            66 => 
            array (
                'id' => 67,
                'goods_id' => 1015007,
                'attribute' => '重量',
                'value' => '470g（内芯）',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            67 => 
            array (
                'id' => 68,
                'goods_id' => 1015007,
                'attribute' => '产地',
                'value' => '中国',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            68 => 
            array (
                'id' => 69,
                'goods_id' => 1019000,
                'attribute' => '填充成分',
                'value' => '聚醚型聚氨酯',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            69 => 
            array (
                'id' => 70,
                'goods_id' => 1019000,
                'attribute' => '面料成分',
                'value' => '100%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            70 => 
            array (
                'id' => 71,
                'goods_id' => 1019000,
                'attribute' => '尺寸',
                'value' => '50cm×30cm×9cm-7cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            71 => 
            array (
                'id' => 72,
                'goods_id' => 1019000,
                'attribute' => '颜色',
                'value' => '白色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            72 => 
            array (
                'id' => 73,
                'goods_id' => 1019000,
                'attribute' => '适用人数',
                'value' => '单人',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            73 => 
            array (
                'id' => 74,
                'goods_id' => 1019000,
                'attribute' => '温馨提示',
                'value' => '1.记忆绵产品为进口环保化学材质聚氨酯发泡而成，刚打开包装会有少量聚氨酯气体产生，拆除外套通风除味3-5天即可。                                                                                  2.枕芯类商品受身高、体型、睡眠习惯不同，产生不同的使用体验，建议多试睡几款枕头，挑选最适合的进行使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            74 => 
            array (
                'id' => 75,
                'goods_id' => 1019001,
                'attribute' => '填充成分',
                'value' => '聚醚型聚氨酯',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            75 => 
            array (
                'id' => 76,
                'goods_id' => 1019001,
                'attribute' => '面料成分',
                'value' => '100%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            76 => 
            array (
                'id' => 77,
                'goods_id' => 1019001,
                'attribute' => '尺寸',
                'value' => '50cm×30cm×10cm-6cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            77 => 
            array (
                'id' => 78,
                'goods_id' => 1019001,
                'attribute' => '颜色',
                'value' => '白色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            78 => 
            array (
                'id' => 79,
                'goods_id' => 1019001,
                'attribute' => '适用人数',
                'value' => '单人',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            79 => 
            array (
                'id' => 80,
                'goods_id' => 1019001,
                'attribute' => '温馨提示',
                'value' => '1.记忆绵产品为进口环保化学材质聚氨酯发泡而成，刚打开包装会有少量聚氨酯气体产生，拆除外套通风除味3-5天即可。 2.枕芯类商品受身高、体型、睡眠习惯不同，产生不同的使用体验，建议多试睡几款枕头，挑选最适合的进行使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            80 => 
            array (
                'id' => 81,
                'goods_id' => 1019002,
                'attribute' => '填充成分',
                'value' => '聚醚型聚氨酯',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            81 => 
            array (
                'id' => 82,
                'goods_id' => 1019002,
                'attribute' => '面料成分',
                'value' => '聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            82 => 
            array (
                'id' => 83,
                'goods_id' => 1019002,
                'attribute' => '尺寸',
                'value' => '135cm×36cm×10cm-7cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            83 => 
            array (
                'id' => 84,
                'goods_id' => 1019002,
                'attribute' => '颜色',
                'value' => '白色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            84 => 
            array (
                'id' => 85,
                'goods_id' => 1019002,
                'attribute' => '适用人数',
                'value' => '双人',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            85 => 
            array (
                'id' => 86,
                'goods_id' => 1019002,
                'attribute' => '温馨提示',
                'value' => '1.记忆绵产品为进口环保化学材质聚氨酯发泡而成，刚打开包装会有少量聚氨酯气体产生，拆除外套通风除味3-5天即可。 
2.枕芯类商品受身高、体型、睡眠习惯不同，产生不同的使用体验，建议多试睡几款枕头，挑选最适合的进行使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            86 => 
            array (
                'id' => 87,
                'goods_id' => 1019006,
                'attribute' => '面料成分',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            87 => 
            array (
                'id' => 88,
                'goods_id' => 1019006,
                'attribute' => '填充成分',
                'value' => '20% 夜交藤+80% 聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            88 => 
            array (
                'id' => 89,
                'goods_id' => 1019006,
                'attribute' => '尺寸',
                'value' => '48*74cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            89 => 
            array (
                'id' => 90,
                'goods_id' => 1019006,
                'attribute' => '颜色',
                'value' => '白色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            90 => 
            array (
                'id' => 91,
                'goods_id' => 1019006,
                'attribute' => '适用人数',
                'value' => '单人',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            91 => 
            array (
                'id' => 92,
                'goods_id' => 1019006,
                'attribute' => '温馨提示',
                'value' => '1.植物填充，遇梅雨季节需要通风、干燥保存。 
2.枕芯类商品受身高、体型、睡眠习惯不同，产生不同的使用体验，建议多试睡几款枕头，挑选最适合的进行使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            92 => 
            array (
                'id' => 93,
                'goods_id' => 1020000,
                'attribute' => '填充成分',
                'value' => '聚氨酯',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            93 => 
            array (
                'id' => 94,
                'goods_id' => 1020000,
                'attribute' => '面料成分',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            94 => 
            array (
                'id' => 95,
                'goods_id' => 1020000,
                'attribute' => '尺寸',
                'value' => '33cm×31cm×10cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            95 => 
            array (
                'id' => 96,
                'goods_id' => 1020000,
                'attribute' => '颜色',
                'value' => '灰色条纹/粉色条纹',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            96 => 
            array (
                'id' => 97,
                'goods_id' => 1021004,
                'attribute' => '材质',
                'value' => '100%羊毛',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            97 => 
            array (
                'id' => 98,
                'goods_id' => 1021004,
                'attribute' => '尺寸',
                'value' => '150*200cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            98 => 
            array (
                'id' => 99,
                'goods_id' => 1021004,
                'attribute' => '产品等级',
                'value' => '一等品',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            99 => 
            array (
                'id' => 100,
                'goods_id' => 1021004,
                'attribute' => '产地',
                'value' => '中国',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            100 => 
            array (
                'id' => 101,
                'goods_id' => 1021004,
                'attribute' => '温馨提示',
                'value' => '1.羊毛毯采取传统机织工艺，纯天然织造的，直接接触皮肤会有轻微扎人。
2.初次使用时会有少量浮毛，建议干洗处理。
3.商品为纯羊毛织造而成，若有少量气味请通风2-3天去除。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            101 => 
            array (
                'id' => 102,
                'goods_id' => 1021010,
                'attribute' => '材质',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            102 => 
            array (
                'id' => 103,
                'goods_id' => 1021010,
                'attribute' => '安全类别',
                'value' => 'GB18401-2010 B类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            103 => 
            array (
                'id' => 104,
                'goods_id' => 1021010,
                'attribute' => '产地',
                'value' => '江苏南通',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            104 => 
            array (
                'id' => 105,
                'goods_id' => 1021010,
                'attribute' => '根数',
                'value' => '200根',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            105 => 
            array (
                'id' => 106,
                'goods_id' => 1021010,
                'attribute' => '尺寸',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            106 => 
            array (
                'id' => 107,
                'goods_id' => 1021010,
                'attribute' => '温馨提示',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            107 => 
            array (
                'id' => 108,
                'goods_id' => 1022000,
                'attribute' => '材质',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            108 => 
            array (
                'id' => 109,
                'goods_id' => 1022000,
                'attribute' => '安全类别',
                'value' => 'GB18401-2010 B类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            109 => 
            array (
                'id' => 110,
                'goods_id' => 1022000,
                'attribute' => '产地',
                'value' => '中国山东',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            110 => 
            array (
                'id' => 111,
                'goods_id' => 1022000,
                'attribute' => '根数',
                'value' => '200根',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            111 => 
            array (
                'id' => 112,
                'goods_id' => 1022000,
                'attribute' => '尺寸',
                'value' => '被套200*230cm；床单245*250cm；枕套48*74cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            112 => 
            array (
                'id' => 113,
                'goods_id' => 1022000,
                'attribute' => '温馨提示',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            113 => 
            array (
                'id' => 114,
                'goods_id' => 1022001,
                'attribute' => '材质',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            114 => 
            array (
                'id' => 115,
                'goods_id' => 1022001,
                'attribute' => '安全类别',
                'value' => 'GB18401-2010 B类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            115 => 
            array (
                'id' => 116,
                'goods_id' => 1022001,
                'attribute' => '产地',
                'value' => '中国山东',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            116 => 
            array (
                'id' => 117,
                'goods_id' => 1022001,
                'attribute' => '根数',
                'value' => '200根',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            117 => 
            array (
                'id' => 118,
                'goods_id' => 1022001,
                'attribute' => '尺寸',
                'value' => '被套200*230cm；床单245*250cm；枕套48*74cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            118 => 
            array (
                'id' => 119,
                'goods_id' => 1022001,
                'attribute' => '温馨提示',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            119 => 
            array (
                'id' => 120,
                'goods_id' => 1023012,
                'attribute' => '材质',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            120 => 
            array (
                'id' => 121,
                'goods_id' => 1023012,
                'attribute' => '尺寸',
                'value' => '180*220cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            121 => 
            array (
                'id' => 122,
                'goods_id' => 1023012,
                'attribute' => '安全技术类别',
                'value' => 'GB18401-2010 B类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            122 => 
            array (
                'id' => 123,
                'goods_id' => 1023012,
                'attribute' => '产品等级',
                'value' => '一等品',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            123 => 
            array (
                'id' => 124,
                'goods_id' => 1023012,
                'attribute' => '重量',
                'value' => '1480g',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            124 => 
            array (
                'id' => 125,
                'goods_id' => 1023012,
                'attribute' => '温馨提示',
                'value' => '1.深色纯棉毛巾被在织造染色过程中，巾面更易产生微细的纤维浮绒，使用前建议用清水漂洗1-2次，即可去掉产品上的浮绒。
2.在洗涤时一定要注意不要与衣服混在一起机洗，强力的搓洗会引起掉毛或勾线现象。
3.纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            125 => 
            array (
                'id' => 126,
                'goods_id' => 1023032,
                'attribute' => '材质',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            126 => 
            array (
                'id' => 127,
                'goods_id' => 1023032,
                'attribute' => '安全类别',
                'value' => 'GB18401-2010 B类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            127 => 
            array (
                'id' => 128,
                'goods_id' => 1023032,
                'attribute' => '产地',
                'value' => '中国山东',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            128 => 
            array (
                'id' => 129,
                'goods_id' => 1023032,
                'attribute' => '根数',
                'value' => '200根',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            129 => 
            array (
                'id' => 130,
                'goods_id' => 1023032,
                'attribute' => '尺寸',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            130 => 
            array (
                'id' => 131,
                'goods_id' => 1023032,
                'attribute' => '工艺',
                'value' => '色织工艺',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            131 => 
            array (
                'id' => 132,
                'goods_id' => 1023032,
                'attribute' => '温馨提示',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            132 => 
            array (
                'id' => 133,
                'goods_id' => 1023034,
                'attribute' => '材质',
                'value' => '正面：100%棉  背面：15%棉  85%涤   底衬：100%涤',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            133 => 
            array (
                'id' => 134,
                'goods_id' => 1023034,
                'attribute' => '填充物',
                'value' => '70% 白鸭绒  30%白鸭绒片',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            134 => 
            array (
                'id' => 135,
                'goods_id' => 1023034,
                'attribute' => '克重',
                'value' => '250g',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            135 => 
            array (
                'id' => 136,
                'goods_id' => 1023034,
                'attribute' => '产地',
                'value' => '中国',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            136 => 
            array (
                'id' => 137,
                'goods_id' => 1023034,
                'attribute' => '安全类别',
                'value' => 'GB18401-2010 B类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            137 => 
            array (
                'id' => 138,
                'goods_id' => 1023034,
                'attribute' => '颜色',
                'value' => '水银灰/ 水蓝/ 水粉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            138 => 
            array (
                'id' => 139,
                'goods_id' => 1027004,
                'attribute' => '材质',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            139 => 
            array (
                'id' => 140,
                'goods_id' => 1027004,
                'attribute' => '尺寸',
                'value' => '150*200cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            140 => 
            array (
                'id' => 141,
                'goods_id' => 1027004,
                'attribute' => '产品等级',
                'value' => '一等品',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            141 => 
            array (
                'id' => 142,
                'goods_id' => 1027004,
                'attribute' => '颜色',
                'value' => '灰白格/粉白格',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            142 => 
            array (
                'id' => 143,
                'goods_id' => 1027004,
                'attribute' => '重量',
                'value' => '1136g',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            143 => 
            array (
                'id' => 144,
                'goods_id' => 1029005,
                'attribute' => '材质',
                'value' => '65% 天丝 35% 亚麻',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            144 => 
            array (
                'id' => 145,
                'goods_id' => 1029005,
                'attribute' => '尺寸',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            145 => 
            array (
                'id' => 146,
                'goods_id' => 1029005,
                'attribute' => '产地',
                'value' => '中国江苏',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            146 => 
            array (
                'id' => 147,
                'goods_id' => 1029005,
                'attribute' => '执行标准',
                'value' => 'GB/T 22844-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            147 => 
            array (
                'id' => 148,
                'goods_id' => 1029005,
                'attribute' => '颜色',
                'value' => '渐变紫 / 渐变绿',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            148 => 
            array (
                'id' => 149,
                'goods_id' => 1029005,
                'attribute' => '温馨提示',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            149 => 
            array (
                'id' => 150,
                'goods_id' => 1030001,
                'attribute' => '材质',
                'value' => '面纱：100%羊毛  底纱：55.7%棉  27.1%聚酯纤维  4.7%羊毛   12.5%其他',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            150 => 
            array (
                'id' => 151,
                'goods_id' => 1030001,
                'attribute' => '产地',
                'value' => '印度',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            151 => 
            array (
                'id' => 152,
                'goods_id' => 1030001,
                'attribute' => '执行标准',
                'value' => 'QB/T 2756-2005',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            152 => 
            array (
                'id' => 153,
                'goods_id' => 1030001,
                'attribute' => '尺寸',
                'value' => '160*230cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            153 => 
            array (
                'id' => 154,
                'goods_id' => 1030001,
                'attribute' => '工艺',
                'value' => '手工编织',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            154 => 
            array (
                'id' => 155,
                'goods_id' => 1030001,
                'attribute' => '温馨提示',
                'value' => '1：羊毛材质存在一点羊骚味实属正常情况，建议开窗通风，多散散味道即可。
2：羊毛地毯刚刚开始使用的时候多多少少都会有一点掉毛的情况，建议开始使用的时候用吸尘器多吸几次，之后掉毛的情况就会有改善。  
3：因为天然羊毛材质，所以脚感会有一点点刺，不属于产品质量问题。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            155 => 
            array (
                'id' => 156,
                'goods_id' => 1030002,
                'attribute' => '材质',
                'value' => '绒面：93%羊毛  7%腈纶 衬背：100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            156 => 
            array (
                'id' => 157,
                'goods_id' => 1030002,
                'attribute' => '产地',
                'value' => '印度',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            157 => 
            array (
                'id' => 158,
                'goods_id' => 1030002,
                'attribute' => '执行标准',
                'value' => 'GB/T 27729-2011',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            158 => 
            array (
                'id' => 159,
                'goods_id' => 1030002,
                'attribute' => '尺寸',
                'value' => '160*230cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            159 => 
            array (
                'id' => 160,
                'goods_id' => 1030002,
                'attribute' => '工艺',
                'value' => '手工枪刺',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            160 => 
            array (
                'id' => 161,
                'goods_id' => 1030002,
                'attribute' => '温馨提示',
                'value' => '1：羊毛材质存在一点羊骚味实属正常情况，建议开窗通风，多散散味道即可。
2：羊毛地毯刚刚开始使用的时候多多少少都会有一点掉毛的情况，建议开始使用的时候用吸尘器多吸几次，之后掉毛的情况就会有改善。  
3：因为天然羊毛材质，所以脚感会有一点点刺，不属于产品质量问题。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            161 => 
            array (
                'id' => 162,
                'goods_id' => 1030003,
                'attribute' => '材质',
                'value' => '面纱： 100%羊毛  底纱： 88.3%棉   11.7%其他',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            162 => 
            array (
                'id' => 163,
                'goods_id' => 1030003,
                'attribute' => '产地',
                'value' => '印度',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            163 => 
            array (
                'id' => 164,
                'goods_id' => 1030003,
                'attribute' => '执行标准',
                'value' => 'QB/T 2756-2005',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            164 => 
            array (
                'id' => 165,
                'goods_id' => 1030003,
                'attribute' => '尺寸',
                'value' => '160*230cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            165 => 
            array (
                'id' => 166,
                'goods_id' => 1030003,
                'attribute' => '工艺',
                'value' => '手工编织',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            166 => 
            array (
                'id' => 167,
                'goods_id' => 1030003,
                'attribute' => '温馨提示',
                'value' => '1：羊毛材质存在一点羊骚味实属正常情况，建议开窗通风，多散散味道即可。
2：羊毛地毯刚刚开始使用的时候多多少少都会有一点掉毛的情况，建议开始使用的时候用吸尘器多吸几次，之后掉毛的情况就会有改善。  
3：因为天然羊毛材质，所以脚感会有一点点刺，不属于产品质量问题。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            167 => 
            array (
                'id' => 168,
                'goods_id' => 1030004,
                'attribute' => '材质',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            168 => 
            array (
                'id' => 169,
                'goods_id' => 1030004,
                'attribute' => '执行标准',
                'value' => 'GB/T 22844-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            169 => 
            array (
                'id' => 170,
                'goods_id' => 1030004,
                'attribute' => '尺寸',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            170 => 
            array (
                'id' => 171,
                'goods_id' => 1030004,
                'attribute' => '产地',
                'value' => '中国山东',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            171 => 
            array (
                'id' => 172,
                'goods_id' => 1030004,
                'attribute' => '颜色',
                'value' => '蓝色/ 灰色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            172 => 
            array (
                'id' => 173,
                'goods_id' => 1030004,
                'attribute' => '温馨提示',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            173 => 
            array (
                'id' => 174,
                'goods_id' => 1030005,
                'attribute' => '材质',
                'value' => '100%亚麻',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            174 => 
            array (
                'id' => 175,
                'goods_id' => 1030005,
                'attribute' => '执行标准',
                'value' => 'GB/T 22844-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            175 => 
            array (
                'id' => 176,
                'goods_id' => 1030005,
                'attribute' => '产地',
                'value' => '中国山东',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            176 => 
            array (
                'id' => 177,
                'goods_id' => 1030005,
                'attribute' => '颜色',
                'value' => '橙色/ 灰色/ 黄色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            177 => 
            array (
                'id' => 178,
                'goods_id' => 1030005,
                'attribute' => '工艺',
                'value' => '水洗工艺',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            178 => 
            array (
                'id' => 179,
                'goods_id' => 1030005,
                'attribute' => '温馨提示',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            179 => 
            array (
                'id' => 180,
                'goods_id' => 1030005,
                'attribute' => '尺寸',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            180 => 
            array (
                'id' => 181,
                'goods_id' => 1030006,
                'attribute' => '材质',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            181 => 
            array (
                'id' => 182,
                'goods_id' => 1030006,
                'attribute' => '尺寸',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            182 => 
            array (
                'id' => 183,
                'goods_id' => 1030006,
                'attribute' => '产地',
                'value' => '中国山东',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            183 => 
            array (
                'id' => 184,
                'goods_id' => 1030006,
                'attribute' => '执行标准',
                'value' => 'GB18401-2010 B类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            184 => 
            array (
                'id' => 185,
                'goods_id' => 1030006,
                'attribute' => '颜色',
                'value' => '红色/ 黄色/ 蓝色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            185 => 
            array (
                'id' => 186,
                'goods_id' => 1030006,
                'attribute' => '温馨提示',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            186 => 
            array (
                'id' => 187,
                'goods_id' => 1035006,
                'attribute' => '材质',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            187 => 
            array (
                'id' => 188,
                'goods_id' => 1035006,
                'attribute' => '产地',
                'value' => '中国浙江',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            188 => 
            array (
                'id' => 189,
                'goods_id' => 1035006,
                'attribute' => '尺寸',
                'value' => '长61*宽43cm / 长86*宽53cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            189 => 
            array (
                'id' => 190,
                'goods_id' => 1035006,
                'attribute' => '工艺',
                'value' => '手工制作',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            190 => 
            array (
                'id' => 191,
                'goods_id' => 1035006,
                'attribute' => '执行标准',
                'value' => 'GB/T 26850-2011',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            191 => 
            array (
                'id' => 192,
                'goods_id' => 1035006,
                'attribute' => '温馨提示',
                'value' => '纯棉材质在织造染色过程中，表面不可避免会产生微细的纤维浮绒，使用前清水漂洗1-2次，即可去掉浮绒。不属于产品质量问题。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            192 => 
            array (
                'id' => 193,
                'goods_id' => 1036002,
                'attribute' => '面料成分',
                'value' => '100% 棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            193 => 
            array (
                'id' => 194,
                'goods_id' => 1036002,
                'attribute' => '填充物',
                'value' => '100% 高山苦荞麦壳',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            194 => 
            array (
                'id' => 195,
                'goods_id' => 1036002,
                'attribute' => '规格',
                'value' => '74×48cm±1cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            195 => 
            array (
                'id' => 196,
                'goods_id' => 1036002,
                'attribute' => '填充物重量',
                'value' => '3KG',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            196 => 
            array (
                'id' => 197,
                'goods_id' => 1036002,
                'attribute' => '温馨提示',
                'value' => '1.天然植物填充，遇梅雨季节需要干燥保存，如有少量飞虫产生，太阳下晒3小时即可去除。 
2.枕芯类商品受身高、体型、睡眠习惯不同，产生不同的使用体验，建议多试睡几款枕头，挑选最适合的进行使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            197 => 
            array (
                'id' => 198,
                'goods_id' => 1036013,
                'attribute' => '材质',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            198 => 
            array (
                'id' => 199,
                'goods_id' => 1036013,
                'attribute' => '尺寸',
                'value' => '150*200*25cm/ 180*200*25cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            199 => 
            array (
                'id' => 200,
                'goods_id' => 1036013,
                'attribute' => '执行标准',
                'value' => 'FZ/T 62028-2015',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            200 => 
            array (
                'id' => 201,
                'goods_id' => 1036013,
                'attribute' => '工艺',
                'value' => '双捻工艺',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            201 => 
            array (
                'id' => 202,
                'goods_id' => 1036013,
                'attribute' => '产地',
                'value' => '浙江 江苏',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            202 => 
            array (
                'id' => 203,
                'goods_id' => 1036013,
                'attribute' => '温馨提示',
                'value' => '1：针织棉面料因为工艺不可避免原因，使用一段时间后会出现起毛起球现象，使用去毛机修理一下即可。
2：因为针织的编织工艺，成品在使用过程中会有轻微的变型，不影响使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            203 => 
            array (
                'id' => 204,
                'goods_id' => 1036016,
                'attribute' => '材质',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            204 => 
            array (
                'id' => 205,
                'goods_id' => 1036016,
                'attribute' => '尺寸',
                'value' => '150*200cm/ 180*200cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            205 => 
            array (
                'id' => 206,
                'goods_id' => 1036016,
                'attribute' => '执行标准',
                'value' => 'GB/T 22797-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            206 => 
            array (
                'id' => 207,
                'goods_id' => 1036016,
                'attribute' => '工艺',
                'value' => '色织水洗工艺',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            207 => 
            array (
                'id' => 208,
                'goods_id' => 1036016,
                'attribute' => '温馨提示',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            208 => 
            array (
                'id' => 209,
                'goods_id' => 1037011,
                'attribute' => '规格',
                'value' => '1.5/1.8m*2m*5cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            209 => 
            array (
                'id' => 210,
                'goods_id' => 1037011,
                'attribute' => '外层面料',
                'value' => '100%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            210 => 
            array (
                'id' => 211,
                'goods_id' => 1037011,
                'attribute' => '里层面料',
                'value' => '100%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            211 => 
            array (
                'id' => 212,
                'goods_id' => 1037011,
                'attribute' => '内芯',
                'value' => '聚氨酯',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            212 => 
            array (
                'id' => 213,
                'goods_id' => 1037011,
                'attribute' => '温馨提示',
                'value' => '1.记忆绵产品为进口环保化学材质聚氨酯发泡而成，刚打开包装会有少量聚氨酯气体产生，拆除外套通风除味3-5天即可。
2.床垫商品受身高、体型、睡眠习惯不同，产生不同的使用体验，建议多试睡几款床垫，挑选最舒适的进行使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            213 => 
            array (
                'id' => 214,
                'goods_id' => 1037012,
                'attribute' => '填充物',
                'value' => '100%高山苦荞',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            214 => 
            array (
                'id' => 215,
                'goods_id' => 1037012,
                'attribute' => '尺寸',
                'value' => '40*8cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            215 => 
            array (
                'id' => 216,
                'goods_id' => 1037012,
                'attribute' => '外用面料',
                'value' => '45%麻45%棉10%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            216 => 
            array (
                'id' => 217,
                'goods_id' => 1037012,
                'attribute' => '温馨提示',
                'value' => '1.天然植物填充，遇梅雨季节需要干燥保存，如有少量飞虫产生，太阳下晒3小时即可去除。
2.枕芯类商品受身高、体型、睡眠习惯不同，产生不同的使用体验，建议多试睡几款枕头，挑选最适合的进行使用。
3.建议每次使用时间控制在15分钟以内。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            217 => 
            array (
                'id' => 218,
                'goods_id' => 1037012,
                'attribute' => '商品重量',
                'value' => '0.45kg+-0.05kg',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            218 => 
            array (
                'id' => 219,
                'goods_id' => 1039051,
                'attribute' => '规格',
                'value' => '33*24*14cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            219 => 
            array (
                'id' => 220,
                'goods_id' => 1039051,
                'attribute' => '外层面料',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            220 => 
            array (
                'id' => 221,
                'goods_id' => 1039051,
                'attribute' => '里层面料',
                'value' => '100%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            221 => 
            array (
                'id' => 222,
                'goods_id' => 1039051,
                'attribute' => '内芯',
                'value' => '聚氨酯',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            222 => 
            array (
                'id' => 223,
                'goods_id' => 1039051,
                'attribute' => '安全技术',
                'value' => 'GB 18401-2010 B类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            223 => 
            array (
                'id' => 224,
                'goods_id' => 1039051,
                'attribute' => '*温馨提示',
                'value' => '1,水洗时请将外套取下，用冷水洗涤后置于阴凉处阴干或烘干。不能同褪色衣物同洗，以防沾污、沾色。
2,外套洗后稍有缩水是正常现象，因是弹性织物，仅需四周拉一下长度即可。
3,记忆棉不可水洗，请经常保持产品干燥，定期通风（不可曝晒）。若不慎打湿，立即用干毛巾将水分吸干，置于通风处阴干或用冷吹风吹干即可。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            224 => 
            array (
                'id' => 225,
                'goods_id' => 1043005,
                'attribute' => '坐垫外层面料',
                'value' => '100%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            225 => 
            array (
                'id' => 226,
                'goods_id' => 1043005,
                'attribute' => '坐垫内芯材料',
                'value' => '聚氨酯',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            226 => 
            array (
                'id' => 227,
                'goods_id' => 1043005,
                'attribute' => '执行标准',
                'value' => 'GB/T22843-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            227 => 
            array (
                'id' => 228,
                'goods_id' => 1043005,
                'attribute' => '方形尺寸',
                'value' => '36*36*3cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            228 => 
            array (
                'id' => 229,
                'goods_id' => 1043005,
                'attribute' => '圆形尺寸',
                'value' => 'Φ34*3cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            229 => 
            array (
                'id' => 230,
                'goods_id' => 1043005,
                'attribute' => '坐垫套面料',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            230 => 
            array (
                'id' => 231,
                'goods_id' => 1043005,
                'attribute' => '*温馨提示',
                'value' => '1,水洗时请将外套取下，用冷水洗涤后置于阴凉处阴干或烘干。不能同褪色衣物同洗，以防沾污、沾色。
2,外套洗后稍有缩水是正常现象，因是弹性织物，仅需四周拉一下长度即可。
3,记忆棉不可水洗，请经常保持产品干燥，每隔一段时间用吸尘器清理内芯落尘或用手轻轻拍打内芯，放在通风阴凉处适当晾晒即可。。若不慎打湿，立即用干毛巾将水分吸干，置于通风处阴干或用冷吹风吹干即可。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            231 => 
            array (
                'id' => 232,
                'goods_id' => 1044012,
                'attribute' => '尺寸',
                'value' => '150*200cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            232 => 
            array (
                'id' => 233,
                'goods_id' => 1044012,
                'attribute' => '材质',
                'value' => '100%羊毛',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            233 => 
            array (
                'id' => 234,
                'goods_id' => 1044012,
                'attribute' => '产品等级',
                'value' => '一等品',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            234 => 
            array (
                'id' => 235,
                'goods_id' => 1044012,
                'attribute' => '安全及时',
                'value' => 'GB 18401-2010 B类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            235 => 
            array (
                'id' => 236,
                'goods_id' => 1044012,
                'attribute' => '温馨提示',
                'value' => '1.羊毛毯采取传统机织工艺，纯天然织造的，直接接触皮肤会有轻微扎人。
2.初次使用时会有少量浮毛，建议干洗处理。
3.商品为纯羊毛织造而成，若有少量气味请通风2-3天去除。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            236 => 
            array (
                'id' => 237,
                'goods_id' => 1046044,
                'attribute' => '材质',
                'value' => '100%美利奴羊毛',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            237 => 
            array (
                'id' => 238,
                'goods_id' => 1046044,
                'attribute' => '重量',
                'value' => '1260g',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            238 => 
            array (
                'id' => 239,
                'goods_id' => 1046044,
                'attribute' => '尺寸',
                'value' => '150*200cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            239 => 
            array (
                'id' => 240,
                'goods_id' => 1046044,
                'attribute' => '执行标准',
                'value' => 'FZ/T 61001-2006',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            240 => 
            array (
                'id' => 241,
                'goods_id' => 1046044,
                'attribute' => '产品等级',
                'value' => '一等品',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            241 => 
            array (
                'id' => 242,
                'goods_id' => 1048005,
                'attribute' => '面料',
                'value' => '100% 棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            242 => 
            array (
                'id' => 243,
                'goods_id' => 1048005,
                'attribute' => '尺寸',
                'value' => '45*45cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            243 => 
            array (
                'id' => 244,
                'goods_id' => 1048005,
                'attribute' => '产地',
                'value' => '中国江苏',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            244 => 
            array (
                'id' => 245,
                'goods_id' => 1048005,
                'attribute' => '颜色',
                'value' => '真朱红/ 薄缥蓝/ 枯野灰',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            245 => 
            array (
                'id' => 246,
                'goods_id' => 1048005,
                'attribute' => '执行标准',
                'value' => 'GB/T 22843-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            246 => 
            array (
                'id' => 247,
                'goods_id' => 1048005,
                'attribute' => '温馨提示',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            247 => 
            array (
                'id' => 248,
                'goods_id' => 1055012,
                'attribute' => '材质',
                'value' => '外壳：100% 纯棉  内充：100% 聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            248 => 
            array (
                'id' => 249,
                'goods_id' => 1055012,
                'attribute' => '克重',
                'value' => '600G/ 1400G',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            249 => 
            array (
                'id' => 250,
                'goods_id' => 1055012,
                'attribute' => '尺寸',
                'value' => '45*45cm / 66*66cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            250 => 
            array (
                'id' => 251,
                'goods_id' => 1055012,
                'attribute' => '产地',
                'value' => '中国江苏',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            251 => 
            array (
                'id' => 252,
                'goods_id' => 1055012,
                'attribute' => '执行标准',
                'value' => 'GB/T 22843-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            252 => 
            array (
                'id' => 253,
                'goods_id' => 1055016,
                'attribute' => '颜色',
                'value' => '珍珠粉/ 宝石蓝',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            253 => 
            array (
                'id' => 254,
                'goods_id' => 1055016,
                'attribute' => '尺寸',
                'value' => '45*45cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            254 => 
            array (
                'id' => 255,
                'goods_id' => 1055016,
                'attribute' => '材质',
                'value' => '主面料：100% 棉
填充：100% 聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            255 => 
            array (
                'id' => 256,
                'goods_id' => 1055016,
                'attribute' => '克重',
                'value' => '600G',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            256 => 
            array (
                'id' => 257,
                'goods_id' => 1055016,
                'attribute' => '执行标准',
                'value' => 'GB/T 22843-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            257 => 
            array (
                'id' => 258,
                'goods_id' => 1055016,
                'attribute' => '温馨提示',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            258 => 
            array (
                'id' => 259,
                'goods_id' => 1057036,
                'attribute' => '尺寸',
                'value' => '45*45cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            259 => 
            array (
                'id' => 260,
                'goods_id' => 1057036,
                'attribute' => '颜色',
                'value' => '灰紫/ 蓝色/ 灰色/ 咖色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            260 => 
            array (
                'id' => 261,
                'goods_id' => 1057036,
                'attribute' => '执行标准',
                'value' => 'GB/T 22843-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            261 => 
            array (
                'id' => 262,
                'goods_id' => 1057036,
                'attribute' => '填充克重',
                'value' => '600G',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            262 => 
            array (
                'id' => 263,
                'goods_id' => 1057036,
                'attribute' => '产地',
                'value' => '中国江苏',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            263 => 
            array (
                'id' => 264,
                'goods_id' => 1057036,
                'attribute' => '材质',
                'value' => '面料：100% 亚麻
内芯面料：100%棉
填充：100%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            264 => 
            array (
                'id' => 265,
                'goods_id' => 1057036,
                'attribute' => '温馨提示',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            265 => 
            array (
                'id' => 266,
                'goods_id' => 1064000,
                'attribute' => '尺寸',
                'value' => '38*38*30cm/60*55*20cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            266 => 
            array (
                'id' => 267,
                'goods_id' => 1064000,
                'attribute' => '产品标准',
                'value' => 'FZ/T 62011.3-2008',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            267 => 
            array (
                'id' => 268,
                'goods_id' => 1064000,
                'attribute' => '安全类别',
                'value' => 'GB 18401-2010 B类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            268 => 
            array (
                'id' => 269,
                'goods_id' => 1064000,
                'attribute' => '颜色',
                'value' => '米色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            269 => 
            array (
                'id' => 270,
                'goods_id' => 1064002,
                'attribute' => '尺寸',
                'value' => '40R/60R',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            270 => 
            array (
                'id' => 271,
                'goods_id' => 1064002,
                'attribute' => '产品标准',
                'value' => 'FZ/T 62011.3-2008',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            271 => 
            array (
                'id' => 272,
                'goods_id' => 1064002,
                'attribute' => '安全类别',
                'value' => 'GB 18401-2010 B类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            272 => 
            array (
                'id' => 273,
                'goods_id' => 1064002,
                'attribute' => '填充物重量',
                'value' => '110g',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            273 => 
            array (
                'id' => 274,
                'goods_id' => 1064002,
                'attribute' => '颜色',
                'value' => '蓝白',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            274 => 
            array (
                'id' => 275,
                'goods_id' => 1064003,
                'attribute' => '产品标准',
                'value' => 'FZ/T 62011.3-2008',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            275 => 
            array (
                'id' => 276,
                'goods_id' => 1064003,
                'attribute' => '安全类别',
                'value' => 'GB 18401-2010 B类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            276 => 
            array (
                'id' => 277,
                'goods_id' => 1064003,
                'attribute' => '尺寸',
                'value' => '29*19cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            277 => 
            array (
                'id' => 278,
                'goods_id' => 1064003,
                'attribute' => '颜色',
                'value' => '藏青色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            278 => 
            array (
                'id' => 279,
                'goods_id' => 1064004,
                'attribute' => '产品标准',
                'value' => 'FZ/T 62011.3-2008',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            279 => 
            array (
                'id' => 280,
                'goods_id' => 1064004,
                'attribute' => '安全类别',
                'value' => 'GB 18401-2010 B类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            280 => 
            array (
                'id' => 281,
                'goods_id' => 1064004,
                'attribute' => '规格',
                'value' => '32*32*32cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            281 => 
            array (
                'id' => 282,
                'goods_id' => 1064004,
                'attribute' => '颜色',
                'value' => '牛仔条纹',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            282 => 
            array (
                'id' => 283,
                'goods_id' => 1064006,
                'attribute' => '尺寸',
                'value' => '50x30x10-6cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            283 => 
            array (
                'id' => 284,
                'goods_id' => 1064006,
                'attribute' => '重量',
                'value' => '0.87kg',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            284 => 
            array (
                'id' => 285,
                'goods_id' => 1064006,
                'attribute' => '外层面料',
                'value' => '40%棉60%聚酯纤维（接触皮肤面全棉）',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            285 => 
            array (
                'id' => 286,
                'goods_id' => 1064006,
                'attribute' => '里层面料',
                'value' => '100%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            286 => 
            array (
                'id' => 287,
                'goods_id' => 1064006,
                'attribute' => '内芯',
                'value' => '聚氨酯',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            287 => 
            array (
                'id' => 288,
                'goods_id' => 1064007,
                'attribute' => '规格',
                'value' => '135x36x10-7cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            288 => 
            array (
                'id' => 289,
                'goods_id' => 1064007,
                'attribute' => '重量',
                'value' => '2.3kg',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            289 => 
            array (
                'id' => 290,
                'goods_id' => 1064007,
                'attribute' => '外层面料',
                'value' => '40%棉60%聚酯纤维（接触皮肤面全棉）',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            290 => 
            array (
                'id' => 291,
                'goods_id' => 1064007,
                'attribute' => '里层面料',
                'value' => '100%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            291 => 
            array (
                'id' => 292,
                'goods_id' => 1064007,
                'attribute' => '内芯',
                'value' => '聚氨酯',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            292 => 
            array (
                'id' => 293,
                'goods_id' => 1064021,
                'attribute' => '颜色',
                'value' => '本白',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            293 => 
            array (
                'id' => 294,
                'goods_id' => 1064021,
                'attribute' => '执行标准',
                'value' => 'GB 7000.11-2008',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            294 => 
            array (
                'id' => 295,
                'goods_id' => 1064021,
                'attribute' => '额定电压',
                'value' => '220-240V',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            295 => 
            array (
                'id' => 296,
                'goods_id' => 1064021,
                'attribute' => '型号',
                'value' => 'T710',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            296 => 
            array (
                'id' => 297,
                'goods_id' => 1064021,
                'attribute' => '温馨提示',
                'value' => '本产品不包含灯泡',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            297 => 
            array (
                'id' => 298,
                'goods_id' => 1064021,
                'attribute' => '产地',
                'value' => '中国中山',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            298 => 
            array (
                'id' => 299,
                'goods_id' => 1064022,
                'attribute' => '颜色',
                'value' => '本白',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            299 => 
            array (
                'id' => 300,
                'goods_id' => 1064022,
                'attribute' => '执行标准',
                'value' => 'GB 7000.11-2008',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            300 => 
            array (
                'id' => 301,
                'goods_id' => 1064022,
                'attribute' => '型号',
                'value' => 'F710',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            301 => 
            array (
                'id' => 302,
                'goods_id' => 1064022,
                'attribute' => '额定电压',
                'value' => '220-240V',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            302 => 
            array (
                'id' => 303,
                'goods_id' => 1064022,
                'attribute' => '温馨提示',
                'value' => '本产品不包含灯泡',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            303 => 
            array (
                'id' => 304,
                'goods_id' => 1064022,
                'attribute' => '产地',
                'value' => '中国中山',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            304 => 
            array (
                'id' => 305,
                'goods_id' => 1065004,
                'attribute' => '尺寸',
                'value' => '150*30cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            305 => 
            array (
                'id' => 306,
                'goods_id' => 1065004,
                'attribute' => '颜色',
                'value' => '原木色/ 棕色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            306 => 
            array (
                'id' => 307,
                'goods_id' => 1065004,
                'attribute' => '执行标准',
                'value' => 'GB/T 23148-2008',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            307 => 
            array (
                'id' => 308,
                'goods_id' => 1065004,
                'attribute' => '产地',
                'value' => '中国苏州',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            308 => 
            array (
                'id' => 309,
                'goods_id' => 1065004,
                'attribute' => '温馨提示',
                'value' => '原木色为水曲柳贴皮，棕色为胡桃木贴皮。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            309 => 
            array (
                'id' => 310,
                'goods_id' => 1065005,
                'attribute' => '尺寸',
                'value' => '150*28cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            310 => 
            array (
                'id' => 311,
                'goods_id' => 1065005,
                'attribute' => '颜色',
                'value' => '棕色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            311 => 
            array (
                'id' => 312,
                'goods_id' => 1065005,
                'attribute' => '执行标准',
                'value' => 'GB/T 23148-2008',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            312 => 
            array (
                'id' => 313,
                'goods_id' => 1065005,
                'attribute' => '产地',
                'value' => '中国江苏',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            313 => 
            array (
                'id' => 314,
                'goods_id' => 1068010,
                'attribute' => '填充物重量',
                'value' => '1300g/1560g',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            314 => 
            array (
                'id' => 315,
                'goods_id' => 1068010,
                'attribute' => '尺寸',
                'value' => '1.5*2m/1.8*2m',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            315 => 
            array (
                'id' => 316,
                'goods_id' => 1068010,
                'attribute' => '外层面料',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            316 => 
            array (
                'id' => 317,
                'goods_id' => 1068010,
                'attribute' => '填充物',
                'value' => '100%羊毛',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            317 => 
            array (
                'id' => 318,
                'goods_id' => 1068010,
                'attribute' => '执行标准',
                'value' => 'GB/T 22843-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            318 => 
            array (
                'id' => 319,
                'goods_id' => 1068010,
                'attribute' => '产品等级',
                'value' => '合格品',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            319 => 
            array (
                'id' => 320,
                'goods_id' => 1068010,
                'attribute' => '厚度',
                'value' => '3cm+-视商品干燥情况有少量浮动',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            320 => 
            array (
                'id' => 321,
                'goods_id' => 1068011,
                'attribute' => '填充物',
                'value' => '60%、90%驼绒/40%、10%驼毛',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            321 => 
            array (
                'id' => 322,
                'goods_id' => 1068011,
                'attribute' => '面料',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            322 => 
            array (
                'id' => 323,
                'goods_id' => 1068011,
                'attribute' => '尺寸',
                'value' => '200*230cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            323 => 
            array (
                'id' => 324,
                'goods_id' => 1068011,
                'attribute' => '填充物重量',
                'value' => '2000g',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            324 => 
            array (
                'id' => 325,
                'goods_id' => 1068012,
                'attribute' => '尺寸',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            325 => 
            array (
                'id' => 326,
                'goods_id' => 1068012,
                'attribute' => '颜色',
                'value' => '灰紫/ 浅咖色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            326 => 
            array (
                'id' => 327,
                'goods_id' => 1068012,
                'attribute' => '印染工艺',
                'value' => '色织工艺',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            327 => 
            array (
                'id' => 328,
                'goods_id' => 1068012,
                'attribute' => '执行标准',
                'value' => 'GB/T 22844-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            328 => 
            array (
                'id' => 329,
                'goods_id' => 1068012,
                'attribute' => '温馨提示',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。 严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            329 => 
            array (
                'id' => 330,
                'goods_id' => 1068012,
                'attribute' => '产地',
                'value' => '中国山东',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            330 => 
            array (
                'id' => 331,
                'goods_id' => 1068012,
                'attribute' => '材质',
                'value' => '面料：100%棉  填充物：65% 棉/ 35%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            331 => 
            array (
                'id' => 332,
                'goods_id' => 1071004,
                'attribute' => '尺寸',
                'value' => '48*38*13cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            332 => 
            array (
                'id' => 333,
                'goods_id' => 1071004,
                'attribute' => '配色',
                'value' => '黑红/白姜黄',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            333 => 
            array (
                'id' => 334,
                'goods_id' => 1071004,
                'attribute' => '材质',
                'value' => '聚丙烯树脂',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            334 => 
            array (
                'id' => 335,
                'goods_id' => 1071004,
                'attribute' => '执行标准',
                'value' => 'GB 9688-1988',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            335 => 
            array (
                'id' => 336,
                'goods_id' => 1071004,
                'attribute' => '产品等级',
                'value' => '合格品',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            336 => 
            array (
                'id' => 337,
                'goods_id' => 1071005,
                'attribute' => '尺寸',
                'value' => '185*160*100MM',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            337 => 
            array (
                'id' => 338,
                'goods_id' => 1071005,
                'attribute' => '材料',
                'value' => '聚丙烯树脂',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            338 => 
            array (
                'id' => 339,
                'goods_id' => 1071005,
                'attribute' => '执行标准',
                'value' => 'GB 9688-1988',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            339 => 
            array (
                'id' => 340,
                'goods_id' => 1071005,
                'attribute' => '产品等级',
                'value' => '合格品',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            340 => 
            array (
                'id' => 341,
                'goods_id' => 1071006,
                'attribute' => '规格',
                'value' => '200*60mm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            341 => 
            array (
                'id' => 342,
                'goods_id' => 1071006,
                'attribute' => '材料',
                'value' => '聚丙烯树脂',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            342 => 
            array (
                'id' => 343,
                'goods_id' => 1071006,
                'attribute' => '执行标准',
                'value' => 'GB 9688-1988',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            343 => 
            array (
                'id' => 344,
                'goods_id' => 1072000,
                'attribute' => '颜色',
                'value' => '象牙白/ 芥子黄/ 银铅色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            344 => 
            array (
                'id' => 345,
                'goods_id' => 1072000,
                'attribute' => '尺寸',
                'value' => '45*45cm/ 66*66cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            345 => 
            array (
                'id' => 346,
                'goods_id' => 1072000,
                'attribute' => '执行标准',
                'value' => 'GB/T 22843-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            346 => 
            array (
                'id' => 347,
                'goods_id' => 1072000,
                'attribute' => '工艺',
                'value' => '手工编织',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            347 => 
            array (
                'id' => 348,
                'goods_id' => 1072000,
                'attribute' => '产地',
                'value' => '中国山东',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            348 => 
            array (
                'id' => 349,
                'goods_id' => 1072000,
                'attribute' => '温馨提示',
                'value' => '此产品不含抱枕芯',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            349 => 
            array (
                'id' => 350,
                'goods_id' => 1072001,
                'attribute' => '颜色',
                'value' => '缥蓝色/ 薄灰色/ 象牙色/ 赤紫色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            350 => 
            array (
                'id' => 351,
                'goods_id' => 1072001,
                'attribute' => '尺寸',
                'value' => '45*45cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            351 => 
            array (
                'id' => 352,
                'goods_id' => 1072001,
                'attribute' => '执行标准',
                'value' => 'GB/T 22843-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            352 => 
            array (
                'id' => 353,
                'goods_id' => 1072001,
                'attribute' => '工艺',
                'value' => '色织水洗',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            353 => 
            array (
                'id' => 354,
                'goods_id' => 1072001,
                'attribute' => '产地',
                'value' => '中国山东',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            354 => 
            array (
                'id' => 355,
                'goods_id' => 1072001,
                'attribute' => '温馨提示',
                'value' => '此产品不含抱枕芯',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            355 => 
            array (
                'id' => 356,
                'goods_id' => 1075023,
                'attribute' => '规格',
                'value' => '48*74cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            356 => 
            array (
                'id' => 357,
                'goods_id' => 1075023,
                'attribute' => '填充物',
                'value' => '20%白鸭绒+80%白鹅毛片',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            357 => 
            array (
                'id' => 358,
                'goods_id' => 1075023,
                'attribute' => '填充物重量',
                'value' => '200g白鸭绒+800g白鹅毛片',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            358 => 
            array (
                'id' => 359,
                'goods_id' => 1075023,
                'attribute' => '面料',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            359 => 
            array (
                'id' => 360,
                'goods_id' => 1075023,
                'attribute' => '执行标准',
                'value' => 'QB/T 1194-2012',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            360 => 
            array (
                'id' => 361,
                'goods_id' => 1075024,
                'attribute' => '填充成分',
                'value' => '白鹅绒',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            361 => 
            array (
                'id' => 362,
                'goods_id' => 1075024,
                'attribute' => '含绒量',
                'value' => '95%',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            362 => 
            array (
                'id' => 363,
                'goods_id' => 1075024,
                'attribute' => '面料',
                'value' => '100%纯棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            363 => 
            array (
                'id' => 364,
                'goods_id' => 1075024,
                'attribute' => '面料参数',
                'value' => '120支 500根',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            364 => 
            array (
                'id' => 365,
                'goods_id' => 1075024,
                'attribute' => '填充物重量',
                'value' => '1500g/1700g',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            365 => 
            array (
                'id' => 366,
                'goods_id' => 1075024,
                'attribute' => '尺寸',
                'value' => '200*230cm/220*240cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            366 => 
            array (
                'id' => 367,
                'goods_id' => 1075024,
                'attribute' => '工艺',
                'value' => '双层立衬',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            367 => 
            array (
                'id' => 368,
                'goods_id' => 1081000,
                'attribute' => '尺寸',
                'value' => '35*45cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            368 => 
            array (
                'id' => 369,
                'goods_id' => 1081000,
                'attribute' => '执行标准',
                'value' => 'GB/T 22843-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            369 => 
            array (
                'id' => 370,
                'goods_id' => 1081000,
                'attribute' => '产地',
                'value' => '浙江杭州',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            370 => 
            array (
                'id' => 371,
                'goods_id' => 1081000,
                'attribute' => '材质',
                'value' => '100% 聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            371 => 
            array (
                'id' => 372,
                'goods_id' => 1081002,
                'attribute' => '尺寸',
                'value' => '45*45cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            372 => 
            array (
                'id' => 373,
                'goods_id' => 1081002,
                'attribute' => '执行标准',
                'value' => 'GB/T 22843-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            373 => 
            array (
                'id' => 374,
                'goods_id' => 1081002,
                'attribute' => '材质',
                'value' => '100% 聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            374 => 
            array (
                'id' => 375,
                'goods_id' => 1081002,
                'attribute' => '产地',
                'value' => '浙江杭州',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            375 => 
            array (
                'id' => 376,
                'goods_id' => 1083009,
                'attribute' => '鲜花',
                'value' => '厄瓜多尔玫瑰',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            376 => 
            array (
                'id' => 377,
                'goods_id' => 1083009,
                'attribute' => '朵数',
                'value' => '1朵',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            377 => 
            array (
                'id' => 378,
                'goods_id' => 1083009,
                'attribute' => '颜色',
                'value' => '妖姬蓝',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            378 => 
            array (
                'id' => 379,
                'goods_id' => 1083009,
                'attribute' => '尺寸',
                'value' => '17*17*12cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            379 => 
            array (
                'id' => 380,
                'goods_id' => 1083009,
                'attribute' => '花材种植地',
                'value' => '厄瓜多尔',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            380 => 
            array (
                'id' => 381,
                'goods_id' => 1083010,
                'attribute' => '鲜花主材',
                'value' => '奥斯汀玫瑰、泉水玫瑰、绣球',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            381 => 
            array (
                'id' => 382,
                'goods_id' => 1083010,
                'attribute' => '鲜花辅材',
                'value' => '棉毛苏叶、细爪草、褐色果、满天星',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            382 => 
            array (
                'id' => 383,
                'goods_id' => 1083010,
                'attribute' => '颜色',
                'value' => '柔情粉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            383 => 
            array (
                'id' => 384,
                'goods_id' => 1083010,
                'attribute' => '尺寸',
                'value' => '17*17*12cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            384 => 
            array (
                'id' => 385,
                'goods_id' => 1083010,
                'attribute' => '花材种植地',
                'value' => '日本',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            385 => 
            array (
                'id' => 386,
                'goods_id' => 1083010,
                'attribute' => '*温馨提示',
                'value' => '由于花材的季节性供应特点，个别配材会有所调整，且因花材批次不同会有一定微小色差，不会影响整体花盒效果。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            386 => 
            array (
                'id' => 387,
                'goods_id' => 1084001,
                'attribute' => '材质',
                'value' => '100%纯棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            387 => 
            array (
                'id' => 388,
                'goods_id' => 1084001,
                'attribute' => '尺寸',
                'value' => '150*200cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            388 => 
            array (
                'id' => 389,
                'goods_id' => 1084001,
                'attribute' => '产品标准',
                'value' => 'FZ/T 61001-2006',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            389 => 
            array (
                'id' => 390,
                'goods_id' => 1084001,
                'attribute' => '安全技术',
                'value' => 'GB18401-2010 B类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            390 => 
            array (
                'id' => 391,
                'goods_id' => 1084001,
                'attribute' => '温馨提示',
                'value' => '1.纯棉毯采取传统针织工艺，纯天然织造的，使用前建议清洗一遍去除少量浮尘。
2.商品为纯棉织造而成，若有少量气味请通风2-3天去除。
3.纯棉针织盖毯清洗数次之后，可能存在微量变形，建议干洗。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            391 => 
            array (
                'id' => 392,
                'goods_id' => 1084001,
                'attribute' => '重量',
                'value' => '1280g',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            392 => 
            array (
                'id' => 393,
                'goods_id' => 1084003,
                'attribute' => '材质',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            393 => 
            array (
                'id' => 394,
                'goods_id' => 1084003,
                'attribute' => '尺寸',
                'value' => '150*200cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            394 => 
            array (
                'id' => 395,
                'goods_id' => 1084003,
                'attribute' => '产品标准',
                'value' => 'FZ/T 61001-2006',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            395 => 
            array (
                'id' => 396,
                'goods_id' => 1084003,
                'attribute' => '安全技术',
                'value' => 'GB18401-2010 B类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            396 => 
            array (
                'id' => 397,
                'goods_id' => 1084003,
                'attribute' => '温馨提示',
                'value' => '1.纯棉毯采取传统针织工艺，纯天然织造的，使用前建议清洗一遍去除少量浮尘。
2.商品为纯棉织造而成，若有少量气味请通风2-3天去除。
3.纯棉针织盖毯清洗数次之后，可能存在微量变形，建议干洗。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            397 => 
            array (
                'id' => 398,
                'goods_id' => 1084003,
                'attribute' => '重量',
                'value' => '1115g',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            398 => 
            array (
                'id' => 399,
                'goods_id' => 1086015,
                'attribute' => '颜色',
                'value' => '本白/ 哑黑/ 姜黄',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            399 => 
            array (
                'id' => 400,
                'goods_id' => 1086015,
                'attribute' => '执行标准',
                'value' => 'GB 7000.11-2008',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            400 => 
            array (
                'id' => 401,
                'goods_id' => 1086015,
                'attribute' => '产地',
                'value' => '中国广东',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            401 => 
            array (
                'id' => 402,
                'goods_id' => 1086015,
                'attribute' => '型号',
                'value' => 'MT20290-1-130',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            402 => 
            array (
                'id' => 403,
                'goods_id' => 1086015,
                'attribute' => '温馨提示',
                'value' => '本产品不含灯泡',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            403 => 
            array (
                'id' => 404,
                'goods_id' => 1086023,
                'attribute' => '材质',
                'value' => '100%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            404 => 
            array (
                'id' => 405,
                'goods_id' => 1086023,
                'attribute' => '搭扣',
                'value' => '锌合金',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            405 => 
            array (
                'id' => 406,
                'goods_id' => 1086023,
                'attribute' => '拉带规格',
                'value' => '120cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            406 => 
            array (
                'id' => 407,
                'goods_id' => 1086023,
                'attribute' => '颈圈规格',
                'value' => '30-45cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            407 => 
            array (
                'id' => 408,
                'goods_id' => 1086024,
                'attribute' => '材质',
                'value' => '100%锦纶',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            408 => 
            array (
                'id' => 409,
                'goods_id' => 1086024,
                'attribute' => '搭扣',
                'value' => '锌合金',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            409 => 
            array (
                'id' => 410,
                'goods_id' => 1086024,
                'attribute' => '颈圈',
                'value' => '30-45cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            410 => 
            array (
                'id' => 411,
                'goods_id' => 1086024,
                'attribute' => '拉带',
                'value' => '120cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            411 => 
            array (
                'id' => 412,
                'goods_id' => 1086025,
                'attribute' => '材质',
                'value' => '100%锦纶',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            412 => 
            array (
                'id' => 413,
                'goods_id' => 1086025,
                'attribute' => '搭扣',
                'value' => '锌合金',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            413 => 
            array (
                'id' => 414,
                'goods_id' => 1086025,
                'attribute' => '拉带规格',
                'value' => '120cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            414 => 
            array (
                'id' => 415,
                'goods_id' => 1086025,
                'attribute' => '产品标准',
                'value' => 'FZ/T 63005-2010',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            415 => 
            array (
                'id' => 416,
                'goods_id' => 1086026,
                'attribute' => '材质',
                'value' => '100%锦纶',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            416 => 
            array (
                'id' => 417,
                'goods_id' => 1086026,
                'attribute' => '搭扣',
                'value' => '锌合金',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            417 => 
            array (
                'id' => 418,
                'goods_id' => 1086026,
                'attribute' => '颈圈尺寸',
                'value' => '30-45cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            418 => 
            array (
                'id' => 419,
                'goods_id' => 1086026,
                'attribute' => '拉带尺寸',
                'value' => '120cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            419 => 
            array (
                'id' => 420,
                'goods_id' => 1090004,
                'attribute' => '尺寸',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床笠：150*200*25cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床笠：180*200*25cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            420 => 
            array (
                'id' => 421,
                'goods_id' => 1090004,
                'attribute' => '颜色',
                'value' => '红色格子/ 蓝色格子/ 绿色格子/ 灰色格子',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            421 => 
            array (
                'id' => 422,
                'goods_id' => 1090004,
                'attribute' => '执行标准',
                'value' => 'GB/T 22844-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            422 => 
            array (
                'id' => 423,
                'goods_id' => 1090004,
                'attribute' => '工艺',
                'value' => '色织工艺',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            423 => 
            array (
                'id' => 424,
                'goods_id' => 1090004,
                'attribute' => '温馨提示',
                'value' => '1：纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。 严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。
2：不同批次面料和拉链稍有差异，请以实物为准。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            424 => 
            array (
                'id' => 425,
                'goods_id' => 1092024,
                'attribute' => '尺寸',
                'value' => '200*230cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            425 => 
            array (
                'id' => 426,
                'goods_id' => 1092024,
                'attribute' => '填充物',
                'value' => '100%桑蚕丝',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            426 => 
            array (
                'id' => 427,
                'goods_id' => 1092024,
                'attribute' => '填充物重量',
                'value' => '1500g',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            427 => 
            array (
                'id' => 428,
                'goods_id' => 1092024,
                'attribute' => '外套',
                'value' => '100%纯棉纱布',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            428 => 
            array (
                'id' => 429,
                'goods_id' => 1092024,
                'attribute' => '执行标准',
                'value' => 'GB/T 24252-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            429 => 
            array (
                'id' => 430,
                'goods_id' => 1092024,
                'attribute' => '安全技术类别',
                'value' => 'GB 18401-2010 B类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            430 => 
            array (
                'id' => 431,
                'goods_id' => 1092038,
                'attribute' => '尺寸',
                'value' => '470*128*13mm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            431 => 
            array (
                'id' => 432,
                'goods_id' => 1092038,
                'attribute' => '材质',
                'value' => '天然桐木',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            432 => 
            array (
                'id' => 433,
                'goods_id' => 1092038,
                'attribute' => '重量',
                'value' => '200g',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            433 => 
            array (
                'id' => 434,
                'goods_id' => 1092038,
                'attribute' => '颜色',
                'value' => 'GB/T 28495-2012',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            434 => 
            array (
                'id' => 435,
                'goods_id' => 1092039,
                'attribute' => '尺寸',
                'value' => '385mmX385mmX135mm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            435 => 
            array (
                'id' => 436,
                'goods_id' => 1092039,
                'attribute' => '重量',
                'value' => '950g',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            436 => 
            array (
                'id' => 437,
                'goods_id' => 1092039,
                'attribute' => '材质',
                'value' => '美卡瓦楞纸板',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            437 => 
            array (
                'id' => 438,
                'goods_id' => 1092039,
                'attribute' => '颜色',
                'value' => '本色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            438 => 
            array (
                'id' => 439,
                'goods_id' => 1093000,
                'attribute' => '材质',
                'value' => 'PU+PE（枝干）',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            439 => 
            array (
                'id' => 440,
                'goods_id' => 1093000,
                'attribute' => '颜色',
                'value' => '白色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            440 => 
            array (
                'id' => 441,
                'goods_id' => 1093000,
                'attribute' => '长度',
                'value' => '81cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            441 => 
            array (
                'id' => 442,
                'goods_id' => 1093000,
                'attribute' => '花草种类',
                'value' => '木棉花',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            442 => 
            array (
                'id' => 443,
                'goods_id' => 1093001,
                'attribute' => '材质',
                'value' => 'PU+PE（枝干）',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            443 => 
            array (
                'id' => 444,
                'goods_id' => 1093001,
                'attribute' => '颜色',
                'value' => '白色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            444 => 
            array (
                'id' => 445,
                'goods_id' => 1093001,
                'attribute' => '长度',
                'value' => '35cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            445 => 
            array (
                'id' => 446,
                'goods_id' => 1093001,
                'attribute' => '花草种类',
                'value' => '马蹄莲',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            446 => 
            array (
                'id' => 447,
                'goods_id' => 1093001,
                'attribute' => '数量',
                'value' => '一束（9朵）',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            447 => 
            array (
                'id' => 448,
                'goods_id' => 1093002,
                'attribute' => '材质',
                'value' => 'PU+玻璃',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            448 => 
            array (
                'id' => 449,
                'goods_id' => 1093002,
                'attribute' => '颜色',
                'value' => '白色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            449 => 
            array (
                'id' => 450,
                'goods_id' => 1093002,
                'attribute' => '长度',
                'value' => '33cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            450 => 
            array (
                'id' => 451,
                'goods_id' => 1093002,
                'attribute' => '花草种类',
                'value' => '木棉花',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            451 => 
            array (
                'id' => 452,
                'goods_id' => 1097004,
                'attribute' => '材质',
                'value' => '北美白橡木',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            452 => 
            array (
                'id' => 453,
                'goods_id' => 1097004,
                'attribute' => '涂漆',
                'value' => '环保涂漆',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            453 => 
            array (
                'id' => 454,
                'goods_id' => 1097004,
                'attribute' => '产品尺寸',
                'value' => '1400/1600*820*750mm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            454 => 
            array (
                'id' => 455,
                'goods_id' => 1097004,
                'attribute' => '安装方式',
                'value' => '需要组装',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            455 => 
            array (
                'id' => 456,
                'goods_id' => 1097005,
                'attribute' => '材质',
                'value' => '北美白橡木',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            456 => 
            array (
                'id' => 457,
                'goods_id' => 1097005,
                'attribute' => '涂漆',
                'value' => '环保涂漆',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            457 => 
            array (
                'id' => 458,
                'goods_id' => 1097005,
                'attribute' => '产品尺寸',
                'value' => '430*520*870mm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            458 => 
            array (
                'id' => 459,
                'goods_id' => 1097005,
                'attribute' => '安装方式',
                'value' => '无需组装',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            459 => 
            array (
                'id' => 460,
                'goods_id' => 1097006,
                'attribute' => '材质',
                'value' => '北美白橡木',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            460 => 
            array (
                'id' => 461,
                'goods_id' => 1097006,
                'attribute' => '涂漆',
                'value' => '环保涂漆',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            461 => 
            array (
                'id' => 462,
                'goods_id' => 1097006,
                'attribute' => '产品尺寸',
                'value' => '600*600*550mm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            462 => 
            array (
                'id' => 463,
                'goods_id' => 1097006,
                'attribute' => '安装方式',
                'value' => '需要组装',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            463 => 
            array (
                'id' => 464,
                'goods_id' => 1097007,
                'attribute' => '材质',
                'value' => '北美白橡木',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            464 => 
            array (
                'id' => 465,
                'goods_id' => 1097007,
                'attribute' => '涂漆',
                'value' => '环保涂漆',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            465 => 
            array (
                'id' => 466,
                'goods_id' => 1097007,
                'attribute' => '产品尺寸',
                'value' => '600*600*530/650mm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            466 => 
            array (
                'id' => 467,
                'goods_id' => 1097007,
                'attribute' => '安装方式',
                'value' => '需要组装',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            467 => 
            array (
                'id' => 468,
                'goods_id' => 1097009,
                'attribute' => '材质',
                'value' => '北美白橡木+抽屉背板桐木',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            468 => 
            array (
                'id' => 469,
                'goods_id' => 1097009,
                'attribute' => '涂漆',
                'value' => '环保涂漆',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            469 => 
            array (
                'id' => 470,
                'goods_id' => 1097009,
                'attribute' => '产品尺寸',
                'value' => '1000/1200*580*910mm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            470 => 
            array (
                'id' => 471,
                'goods_id' => 1097009,
                'attribute' => '安装方式',
                'value' => '需要组装',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            471 => 
            array (
                'id' => 472,
                'goods_id' => 1097011,
                'attribute' => '材质',
                'value' => '北美白橡木+床铺板松木',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            472 => 
            array (
                'id' => 473,
                'goods_id' => 1097011,
                'attribute' => '涂漆',
                'value' => '环保涂漆',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            473 => 
            array (
                'id' => 474,
                'goods_id' => 1097011,
                'attribute' => '产品尺寸',
                'value' => '2065*2188*1088mm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            474 => 
            array (
                'id' => 475,
                'goods_id' => 1097011,
                'attribute' => '安装方式',
                'value' => '需要组装',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            475 => 
            array (
                'id' => 476,
                'goods_id' => 1097012,
                'attribute' => '材质',
                'value' => '北美白橡木+抽屉背板桐木',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            476 => 
            array (
                'id' => 477,
                'goods_id' => 1097012,
                'attribute' => '涂漆',
                'value' => '环保涂漆',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            477 => 
            array (
                'id' => 478,
                'goods_id' => 1097012,
                'attribute' => '产品尺寸',
                'value' => '480*400*550mm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            478 => 
            array (
                'id' => 479,
                'goods_id' => 1097012,
                'attribute' => '安装方式',
                'value' => '需要组装',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            479 => 
            array (
                'id' => 480,
                'goods_id' => 1097013,
                'attribute' => '材质',
                'value' => '北美白橡木+抽屉背板桐木',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            480 => 
            array (
                'id' => 481,
                'goods_id' => 1097013,
                'attribute' => '涂漆',
                'value' => '环保涂漆',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            481 => 
            array (
                'id' => 482,
                'goods_id' => 1097013,
                'attribute' => '产品尺寸',
                'value' => '800*430*1100mm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            482 => 
            array (
                'id' => 483,
                'goods_id' => 1097013,
                'attribute' => '安装方式',
                'value' => '需要组装',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            483 => 
            array (
                'id' => 484,
                'goods_id' => 1097014,
                'attribute' => '材质',
                'value' => '北美白橡木+抽屉背板桐木',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            484 => 
            array (
                'id' => 485,
                'goods_id' => 1097014,
                'attribute' => '涂漆',
                'value' => '环保涂漆',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            485 => 
            array (
                'id' => 486,
                'goods_id' => 1097014,
                'attribute' => '产品尺寸',
                'value' => '860*400*1200mm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            486 => 
            array (
                'id' => 487,
                'goods_id' => 1097014,
                'attribute' => '安装方式',
                'value' => '需要组装',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            487 => 
            array (
                'id' => 488,
                'goods_id' => 1097016,
                'attribute' => '材质',
                'value' => '北美白橡木+抽屉背板桐木',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            488 => 
            array (
                'id' => 489,
                'goods_id' => 1097016,
                'attribute' => '涂漆',
                'value' => '环保涂漆',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            489 => 
            array (
                'id' => 490,
                'goods_id' => 1097016,
                'attribute' => '产品尺寸',
                'value' => '1800*450*525mm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            490 => 
            array (
                'id' => 491,
                'goods_id' => 1097016,
                'attribute' => '安装方式',
                'value' => '需要组装',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            491 => 
            array (
                'id' => 492,
                'goods_id' => 1097017,
                'attribute' => '材质',
                'value' => '北美白橡木+抽屉背板桐木',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            492 => 
            array (
                'id' => 493,
                'goods_id' => 1097017,
                'attribute' => '涂漆',
                'value' => '环保涂漆',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            493 => 
            array (
                'id' => 494,
                'goods_id' => 1097017,
                'attribute' => '产品尺寸',
                'value' => '1200*600*450mm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            494 => 
            array (
                'id' => 495,
                'goods_id' => 1097017,
                'attribute' => '安装方式',
                'value' => '需要组装',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            495 => 
            array (
                'id' => 496,
                'goods_id' => 1100000,
                'attribute' => '材质',
                'value' => '100% 棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            496 => 
            array (
                'id' => 497,
                'goods_id' => 1100000,
                'attribute' => '执行标准',
                'value' => 'GB/T 22796-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            497 => 
            array (
                'id' => 498,
                'goods_id' => 1100000,
                'attribute' => '颜色',
                'value' => '石板灰/ 烟褐色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            498 => 
            array (
                'id' => 499,
                'goods_id' => 1100000,
                'attribute' => '尺寸',
                'value' => '48*74cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            499 => 
            array (
                'id' => 500,
                'goods_id' => 1100000,
                'attribute' => '工艺',
                'value' => '水洗工艺',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
        ));
        \DB::table('z_goods_attribute')->insert(array (
            0 => 
            array (
                'id' => 501,
                'goods_id' => 1100000,
                'attribute' => '产地',
                'value' => '中国江苏',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            1 => 
            array (
                'id' => 502,
                'goods_id' => 1100000,
                'attribute' => '温馨提示',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            2 => 
            array (
                'id' => 503,
                'goods_id' => 1100001,
                'attribute' => '材质',
                'value' => '100% 棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            3 => 
            array (
                'id' => 504,
                'goods_id' => 1100001,
                'attribute' => '执行标准',
                'value' => 'GB/T 22797-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            4 => 
            array (
                'id' => 505,
                'goods_id' => 1100001,
                'attribute' => '颜色',
                'value' => '石板灰/ 烟褐色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            5 => 
            array (
                'id' => 506,
                'goods_id' => 1100001,
                'attribute' => '尺寸',
                'value' => '245*250cm/ 245*270cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            6 => 
            array (
                'id' => 507,
                'goods_id' => 1100001,
                'attribute' => '工艺',
                'value' => '水洗工艺',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            7 => 
            array (
                'id' => 508,
                'goods_id' => 1100001,
                'attribute' => '产地',
                'value' => '中国江苏',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            8 => 
            array (
                'id' => 509,
                'goods_id' => 1100001,
                'attribute' => '温馨提示',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            9 => 
            array (
                'id' => 510,
                'goods_id' => 1100002,
                'attribute' => '材质',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            10 => 
            array (
                'id' => 511,
                'goods_id' => 1100002,
                'attribute' => '执行标准',
                'value' => 'GB/T 22797-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            11 => 
            array (
                'id' => 512,
                'goods_id' => 1100002,
                'attribute' => '尺寸',
                'value' => '150*200*25cm/ 180*200*25cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            12 => 
            array (
                'id' => 513,
                'goods_id' => 1100002,
                'attribute' => '颜色',
                'value' => '石板灰/ 烟褐色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            13 => 
            array (
                'id' => 514,
                'goods_id' => 1100002,
                'attribute' => '产地',
                'value' => '中国江苏',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            14 => 
            array (
                'id' => 515,
                'goods_id' => 1100002,
                'attribute' => '工艺',
                'value' => '水洗工艺',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            15 => 
            array (
                'id' => 516,
                'goods_id' => 1100002,
                'attribute' => '温馨提示',
                'value' => '纺织品经历印染、织造等多道环节，产品初次拿到可能有些许味道，清水漂洗、晾干后味道即可散去。
严选面料全部经过国标检测认证，选用环保活性染料，请放心使用。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            16 => 
            array (
                'id' => 517,
                'goods_id' => 1108029,
                'attribute' => '规格尺寸',
                'value' => '290*260*380mm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            17 => 
            array (
                'id' => 518,
                'goods_id' => 1108029,
                'attribute' => '材料',
                'value' => '美耐皿树脂
硅胶
201不锈钢（奥氏体型）',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            18 => 
            array (
                'id' => 519,
                'goods_id' => 1108029,
                'attribute' => '执行标准',
                'value' => 'GB 9684-2011',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            19 => 
            array (
                'id' => 520,
                'goods_id' => 1108030,
                'attribute' => '尺寸',
                'value' => '177*88*51mm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            20 => 
            array (
                'id' => 521,
                'goods_id' => 1108030,
                'attribute' => '材料',
                'value' => '美耐皿树脂、聚碳酸酯（pc）',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            21 => 
            array (
                'id' => 522,
                'goods_id' => 1108030,
                'attribute' => '执行标准',
                'value' => 'QB 1999-1994',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            22 => 
            array (
                'id' => 523,
                'goods_id' => 1108031,
                'attribute' => '规格尺寸',
                'value' => 'S 145*133*75mm
M 187.4*172.5*97.4mm
L 232*213*122.2mm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            23 => 
            array (
                'id' => 524,
                'goods_id' => 1108031,
                'attribute' => '材料',
                'value' => '美耐皿树脂、201不锈钢（奥氏体型）',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            24 => 
            array (
                'id' => 525,
                'goods_id' => 1108031,
                'attribute' => '执行标准',
                'value' => 'GB 9684-2011',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            25 => 
            array (
                'id' => 526,
                'goods_id' => 1108032,
                'attribute' => '规格尺寸',
                'value' => 'S 128*88*55mm
M 150*100*72mm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            26 => 
            array (
                'id' => 527,
                'goods_id' => 1108032,
                'attribute' => '材料',
                'value' => '硅胶',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            27 => 
            array (
                'id' => 528,
                'goods_id' => 1108032,
                'attribute' => '执行标准',
                'value' => 'GB 4806.1-1994',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            28 => 
            array (
                'id' => 529,
                'goods_id' => 1109004,
                'attribute' => '尺寸',
                'value' => '10寸/12寸',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            29 => 
            array (
                'id' => 530,
                'goods_id' => 1109004,
                'attribute' => '机芯',
                'value' => '太阳机芯',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            30 => 
            array (
                'id' => 531,
                'goods_id' => 1109004,
                'attribute' => '材质',
                'value' => '水柳木/胡桃木',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            31 => 
            array (
                'id' => 532,
                'goods_id' => 1109004,
                'attribute' => '能源',
                'value' => '5号电池*1（本产品不含电池）',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            32 => 
            array (
                'id' => 533,
                'goods_id' => 1109005,
                'attribute' => '材质',
                'value' => '榉木',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            33 => 
            array (
                'id' => 534,
                'goods_id' => 1109005,
                'attribute' => '尺寸',
                'value' => '12*4.5*12cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            34 => 
            array (
                'id' => 535,
                'goods_id' => 1109005,
                'attribute' => '机芯类型',
                'value' => '扫秒机芯',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            35 => 
            array (
                'id' => 536,
                'goods_id' => 1109005,
                'attribute' => '颜色',
                'value' => '原木色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            36 => 
            array (
                'id' => 537,
                'goods_id' => 1109005,
                'attribute' => '能源',
                'value' => '5号电池*1',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            37 => 
            array (
                'id' => 538,
                'goods_id' => 1109008,
                'attribute' => '填充物',
                'value' => '颗粒海绵',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            38 => 
            array (
                'id' => 539,
                'goods_id' => 1109008,
                'attribute' => '框架材质',
                'value' => '国际标准钢管',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            39 => 
            array (
                'id' => 540,
                'goods_id' => 1109008,
                'attribute' => '面料成分',
                'value' => '15%亚麻+85%涤',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            40 => 
            array (
                'id' => 541,
                'goods_id' => 1109008,
                'attribute' => '颜色',
                'value' => '米白色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            41 => 
            array (
                'id' => 542,
                'goods_id' => 1109008,
                'attribute' => '是否组装',
                'value' => '组装【沙发脚】',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            42 => 
            array (
                'id' => 543,
                'goods_id' => 1109008,
                'attribute' => '产品尺寸',
                'value' => '2P:1300*930*930mm;   1P:680*930*930mm;    0.5P:670*450*380mm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            43 => 
            array (
                'id' => 544,
                'goods_id' => 1109034,
                'attribute' => '颜色',
                'value' => '象牙白',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            44 => 
            array (
                'id' => 545,
                'goods_id' => 1109034,
                'attribute' => '执行标准',
                'value' => 'GB/T22779-2008',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            45 => 
            array (
                'id' => 546,
                'goods_id' => 1109034,
                'attribute' => '尺寸',
                'value' => '9.8 x 3.05 x 5.8cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            46 => 
            array (
                'id' => 547,
                'goods_id' => 1110002,
                'attribute' => '材质',
                'value' => 'ABS树脂+PP树脂',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            47 => 
            array (
                'id' => 548,
                'goods_id' => 1110002,
                'attribute' => 'USB线长',
                'value' => '约1m',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            48 => 
            array (
                'id' => 549,
                'goods_id' => 1110002,
                'attribute' => '尺寸',
                'value' => '102mm*130mm*85mm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            49 => 
            array (
                'id' => 550,
                'goods_id' => 1110002,
                'attribute' => '颜色',
                'value' => '本白/冷灰/樱花粉/静谧蓝',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            50 => 
            array (
                'id' => 551,
                'goods_id' => 1110003,
                'attribute' => '材质',
                'value' => '100% 棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            51 => 
            array (
                'id' => 552,
                'goods_id' => 1110003,
                'attribute' => '尺寸',
                'value' => '1.5米床品（床笠款）： 被套 200*230cm/ 枕套：48*74cm*2/ 床笠：150*200*28cm
1.8米床品（床笠款）：被套 220*240cm/ 枕套：48*74cm*2/ 床笠：180*200*28cm
1.5米床品（床单款）： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品（床单款）：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            52 => 
            array (
                'id' => 553,
                'goods_id' => 1110003,
                'attribute' => '执行标准',
                'value' => 'GB/T22844-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            53 => 
            array (
                'id' => 554,
                'goods_id' => 1110003,
                'attribute' => '颜色',
                'value' => '烟草绿/ 木兰黄/ 深茶褐/ 丁子灰',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            54 => 
            array (
                'id' => 555,
                'goods_id' => 1110003,
                'attribute' => '产地',
                'value' => '中国江苏',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            55 => 
            array (
                'id' => 556,
                'goods_id' => 1110004,
                'attribute' => '材质',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            56 => 
            array (
                'id' => 557,
                'goods_id' => 1110004,
                'attribute' => '尺寸',
                'value' => '1.5米床品（床笠款）： 被套 200*230cm/ 枕套：48*74cm*2/ 床笠：150*200*28cm
1.8米床品（床笠款）：被套 220*240cm/ 枕套：48*74cm*2/ 床笠：180*200*28cm
1.5米床品（床单款）： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品（床单款）：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            57 => 
            array (
                'id' => 558,
                'goods_id' => 1110004,
                'attribute' => '执行标准',
                'value' => 'GB/T22844-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            58 => 
            array (
                'id' => 559,
                'goods_id' => 1110004,
                'attribute' => '颜色',
                'value' => '烟草绿/ 深茶褐/ 丁子灰/ 木兰黄/ 茶香粉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            59 => 
            array (
                'id' => 560,
                'goods_id' => 1110004,
                'attribute' => '产地',
                'value' => '中国江苏',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            60 => 
            array (
                'id' => 561,
                'goods_id' => 1110007,
                'attribute' => '材质',
                'value' => '100% 棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            61 => 
            array (
                'id' => 562,
                'goods_id' => 1110007,
                'attribute' => '尺寸',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床笠：150*200*28cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床笠：180*200*28cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            62 => 
            array (
                'id' => 563,
                'goods_id' => 1110007,
                'attribute' => '执行标准',
                'value' => 'GB/T 22844-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            63 => 
            array (
                'id' => 564,
                'goods_id' => 1110007,
                'attribute' => '印染工艺',
                'value' => '色织工艺',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            64 => 
            array (
                'id' => 565,
                'goods_id' => 1110007,
                'attribute' => '颜色',
                'value' => '松柏绿/ 枯茶褐/ 灰白/ 石竹咖',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            65 => 
            array (
                'id' => 566,
                'goods_id' => 1110007,
                'attribute' => '产地',
                'value' => '中国江苏',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            66 => 
            array (
                'id' => 567,
                'goods_id' => 1110008,
                'attribute' => '材质',
                'value' => '100% 棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            67 => 
            array (
                'id' => 568,
                'goods_id' => 1110008,
                'attribute' => '尺寸',
                'value' => '1.5M床：245*250cm
1.8M床：245*270cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            68 => 
            array (
                'id' => 569,
                'goods_id' => 1110008,
                'attribute' => '颜色',
                'value' => '天蓝色/ 烟草色/ 茶香粉/ 蜜橙/ 千岁绿/ 荧光绿/ 青蓝/ 伽罗色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            69 => 
            array (
                'id' => 570,
                'goods_id' => 1110008,
                'attribute' => '执行标准',
                'value' => 'GB 18401-2009 B类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            70 => 
            array (
                'id' => 571,
                'goods_id' => 1110008,
                'attribute' => '产地',
                'value' => '中国江苏',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            71 => 
            array (
                'id' => 572,
                'goods_id' => 1110013,
                'attribute' => '规格',
                'value' => 'S号 最长拉伸2.5m
M号 最长拉伸4m',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            72 => 
            array (
                'id' => 573,
                'goods_id' => 1110013,
                'attribute' => '承重范围',
                'value' => 's  15公斤以下
m  30公斤以下',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            73 => 
            array (
                'id' => 574,
                'goods_id' => 1110013,
                'attribute' => '材料',
                'value' => '塑胶（ABS TPR）
耐拉反光涤纶带
锌合金钩',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            74 => 
            array (
                'id' => 575,
                'goods_id' => 1110013,
                'attribute' => '执行标准',
                'value' => 'Q/PM002-2016',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            75 => 
            array (
                'id' => 576,
                'goods_id' => 1110013,
                'attribute' => '安全类别',
                'value' => '符合RoHs六项检测',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            76 => 
            array (
                'id' => 577,
                'goods_id' => 1110014,
                'attribute' => '规格',
                'value' => 'S号 最长拉绳2.5m
M号 最长拉伸4m',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            77 => 
            array (
                'id' => 578,
                'goods_id' => 1110014,
                'attribute' => '承重范围',
                'value' => '15-30kg',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            78 => 
            array (
                'id' => 579,
                'goods_id' => 1110014,
                'attribute' => '材质',
                'value' => '塑胶（ABS TPR）
耐拉反光涤纶带
锌合金钩',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            79 => 
            array (
                'id' => 580,
                'goods_id' => 1110014,
                'attribute' => '颜色',
                'value' => '日式木纹色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            80 => 
            array (
                'id' => 581,
                'goods_id' => 1110014,
                'attribute' => '执行标准',
                'value' => 'Q/PM002-2016',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            81 => 
            array (
                'id' => 582,
                'goods_id' => 1110014,
                'attribute' => '安全类别',
                'value' => '符合RoHs六项检测',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            82 => 
            array (
                'id' => 583,
                'goods_id' => 1110015,
                'attribute' => '规格',
                'value' => 'S号 最长拉绳2.5M',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            83 => 
            array (
                'id' => 584,
                'goods_id' => 1110015,
                'attribute' => '承重范围',
                'value' => 'S 10-15kg
M 15-30KG',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            84 => 
            array (
                'id' => 585,
                'goods_id' => 1110015,
                'attribute' => '材料',
                'value' => '塑胶（ABS TPR）
高强耐拉反光涤纶带
锌合金钩',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            85 => 
            array (
                'id' => 586,
                'goods_id' => 1110015,
                'attribute' => '颜色',
                'value' => '迷彩',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            86 => 
            array (
                'id' => 587,
                'goods_id' => 1110015,
                'attribute' => '执行标准',
                'value' => 'Q/PM002-2016',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            87 => 
            array (
                'id' => 588,
                'goods_id' => 1110015,
                'attribute' => '安全类别',
                'value' => '符合RoHs六项检测',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            88 => 
            array (
                'id' => 589,
                'goods_id' => 1110016,
                'attribute' => '尺寸',
                'value' => '188*98*30MM',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            89 => 
            array (
                'id' => 590,
                'goods_id' => 1110016,
                'attribute' => '材料',
                'value' => '塑胶（ABS PVC）硅胶',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            90 => 
            array (
                'id' => 591,
                'goods_id' => 1110016,
                'attribute' => '颜色',
                'value' => '蓝色/粉色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            91 => 
            array (
                'id' => 592,
                'goods_id' => 1110016,
                'attribute' => '执行标准',
                'value' => 'Q/PM001-2016',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            92 => 
            array (
                'id' => 593,
                'goods_id' => 1110016,
                'attribute' => '安全类别',
                'value' => '符合RoHs六项检测',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            93 => 
            array (
                'id' => 594,
                'goods_id' => 1110016,
                'attribute' => '产品等级',
                'value' => '合格品',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            94 => 
            array (
                'id' => 595,
                'goods_id' => 1110016,
                'attribute' => '温馨提示',
                'value' => '因宠物模特选择范围有限，故让小萨出镜，其实这款更适合猫咪和小狗用哦。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            95 => 
            array (
                'id' => 596,
                'goods_id' => 1110017,
                'attribute' => '规格',
                'value' => '小剪刀*1+中号理毛梳*1+针梳*1',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            96 => 
            array (
                'id' => 597,
                'goods_id' => 1110017,
                'attribute' => '材料',
                'value' => '合金钢、不锈钢针、塑胶（PP TPR）',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            97 => 
            array (
                'id' => 598,
                'goods_id' => 1110017,
                'attribute' => '颜色',
                'value' => '白黑',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            98 => 
            array (
                'id' => 599,
                'goods_id' => 1110017,
                'attribute' => '执行标准',
                'value' => 'Q/PM001-2016
Q/PM003-2016',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            99 => 
            array (
                'id' => 600,
                'goods_id' => 1110017,
                'attribute' => '安全类别',
                'value' => '符合RoHs六项检测',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            100 => 
            array (
                'id' => 601,
                'goods_id' => 1110018,
                'attribute' => '规格',
                'value' => '大剪刀*1+大号钢针梳*1+双排针梳*1',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            101 => 
            array (
                'id' => 602,
                'goods_id' => 1110018,
                'attribute' => '材料',
                'value' => '合金钢、不锈钢针、塑胶（PP TPR）',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            102 => 
            array (
                'id' => 603,
                'goods_id' => 1110018,
                'attribute' => '颜色',
                'value' => '白黑',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            103 => 
            array (
                'id' => 604,
                'goods_id' => 1110018,
                'attribute' => '执行标准',
                'value' => 'Q/PM001-2016
Q/PM003-2016',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            104 => 
            array (
                'id' => 605,
                'goods_id' => 1110018,
                'attribute' => '安全类别',
                'value' => '符合RoHs六项检测',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            105 => 
            array (
                'id' => 606,
                'goods_id' => 1110019,
                'attribute' => '规格',
                'value' => '宠物安全指甲剪+指甲锉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            106 => 
            array (
                'id' => 607,
                'goods_id' => 1110019,
                'attribute' => '材料',
                'value' => '合金钢 
塑胶（TPR）',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            107 => 
            array (
                'id' => 608,
                'goods_id' => 1110019,
                'attribute' => '执行标准',
                'value' => 'Q/PM003-2016',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            108 => 
            array (
                'id' => 609,
                'goods_id' => 1110019,
                'attribute' => '安全类别',
                'value' => '符合RoHs六项检测',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            109 => 
            array (
                'id' => 610,
                'goods_id' => 1115023,
                'attribute' => '尺寸',
                'value' => '200*230cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            110 => 
            array (
                'id' => 611,
                'goods_id' => 1115023,
                'attribute' => '填充物重量',
                'value' => '1500g',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            111 => 
            array (
                'id' => 612,
                'goods_id' => 1115023,
                'attribute' => '执行标准',
                'value' => 'GB/T 24252-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            112 => 
            array (
                'id' => 613,
                'goods_id' => 1115023,
                'attribute' => '填充物',
                'value' => '100%桑蚕丝',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            113 => 
            array (
                'id' => 614,
                'goods_id' => 1115023,
                'attribute' => '外套',
                'value' => '100%纯棉纱布',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            114 => 
            array (
                'id' => 615,
                'goods_id' => 1115023,
                'attribute' => '安全技术类别',
                'value' => 'GB 18401-2010 B类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            115 => 
            array (
                'id' => 616,
                'goods_id' => 1115028,
                'attribute' => '材质',
                'value' => '100% 棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            116 => 
            array (
                'id' => 617,
                'goods_id' => 1115028,
                'attribute' => '尺寸',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床笠：150*200*28cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床笠：180*200*28cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            117 => 
            array (
                'id' => 618,
                'goods_id' => 1115028,
                'attribute' => '执行标准',
                'value' => 'GB/T 22844-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            118 => 
            array (
                'id' => 619,
                'goods_id' => 1115028,
                'attribute' => '印染工艺',
                'value' => '色织工艺',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            119 => 
            array (
                'id' => 620,
                'goods_id' => 1115028,
                'attribute' => '颜色',
                'value' => '黑茶条纹/ 若绿条纹/ 缥蓝条纹/ 素麻条纹',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            120 => 
            array (
                'id' => 621,
                'goods_id' => 1115028,
                'attribute' => '产地',
                'value' => '中国江苏',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            121 => 
            array (
                'id' => 622,
                'goods_id' => 1115052,
                'attribute' => '尺寸',
                'value' => '直径50cm*高5cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            122 => 
            array (
                'id' => 623,
                'goods_id' => 1115052,
                'attribute' => '材质',
                'value' => '席面：蔺草/ 包边：65%聚酯纤维 35%棉 / 内芯：EPE',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            123 => 
            array (
                'id' => 624,
                'goods_id' => 1115052,
                'attribute' => '执行标准',
                'value' => 'QB/T 2934-2008',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            124 => 
            array (
                'id' => 625,
                'goods_id' => 1115052,
                'attribute' => '产地',
                'value' => '中国浙江',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            125 => 
            array (
                'id' => 626,
                'goods_id' => 1115053,
                'attribute' => '尺寸',
                'value' => '1.5米草席： 草席：150*195cm/ 枕套：48*74cm*2
1.8米草席：草席：180*200cm/ 枕套：枕套：48*74cm*2',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            126 => 
            array (
                'id' => 627,
                'goods_id' => 1115053,
                'attribute' => '材质',
                'value' => '席面：蔺草/  枕套面：蔺草/ 包边：65% 聚酯纤维  35% 棉/ 枕套背面：100% 聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            127 => 
            array (
                'id' => 628,
                'goods_id' => 1115053,
                'attribute' => '执行标准',
                'value' => 'QB/T 2934-2008',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            128 => 
            array (
                'id' => 629,
                'goods_id' => 1115053,
                'attribute' => '产地',
                'value' => '中国浙江',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            129 => 
            array (
                'id' => 630,
                'goods_id' => 1116030,
                'attribute' => '花材',
                'value' => '厄瓜多尔玫瑰',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            130 => 
            array (
                'id' => 631,
                'goods_id' => 1116030,
                'attribute' => '附加功能',
                'value' => '音乐盒',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            131 => 
            array (
                'id' => 632,
                'goods_id' => 1116030,
                'attribute' => '产品尺寸',
                'value' => '直径10.5cm*高17cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            132 => 
            array (
                'id' => 633,
                'goods_id' => 1116030,
                'attribute' => '颜色',
                'value' => '黑色花朵+粉色底座',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            133 => 
            array (
                'id' => 634,
                'goods_id' => 1116031,
                'attribute' => '花材',
                'value' => '厄瓜多尔玫瑰',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            134 => 
            array (
                'id' => 635,
                'goods_id' => 1116031,
                'attribute' => '附加功能',
                'value' => '音乐盒',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            135 => 
            array (
                'id' => 636,
                'goods_id' => 1116031,
                'attribute' => '产品尺寸',
                'value' => '直径10.5cm*高17cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            136 => 
            array (
                'id' => 637,
                'goods_id' => 1116031,
                'attribute' => '颜色',
                'value' => '渐变粉花朵+灰色底座',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            137 => 
            array (
                'id' => 638,
                'goods_id' => 1116032,
                'attribute' => '主体材质',
                'value' => '铝合金+布艺',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            138 => 
            array (
                'id' => 639,
                'goods_id' => 1116032,
                'attribute' => '填充物',
                'value' => '高回弹海绵',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            139 => 
            array (
                'id' => 640,
                'goods_id' => 1116032,
                'attribute' => '躺椅尺寸',
                'value' => '840*1250*1090mm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            140 => 
            array (
                'id' => 641,
                'goods_id' => 1116032,
                'attribute' => '脚蹬尺寸',
                'value' => '550*445*450mm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            141 => 
            array (
                'id' => 642,
                'goods_id' => 1116032,
                'attribute' => '安装方式',
                'value' => '自行组装',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            142 => 
            array (
                'id' => 643,
                'goods_id' => 1116032,
                'attribute' => '*特别提醒',
                'value' => '1.周六日暂无法发货，周末订单延至周一发货，请知悉！
2.本产品配送范围：江浙沪、安徽、山东、福建、江西、湖北、河南、北京、天津、湖南、河北、山西、陕西、重庆、四川、海南、广西、贵州、云南、广东、辽宁、甘肃、宁夏、青海、内蒙古、吉林、黑龙江、新疆、西藏（航空件）
3.本产品配送整件，不包安装，收到货物后，请自行按照产品说明书进行组装。如果组装时碰到无法解决的问题，可联系客服获取指导。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            143 => 
            array (
                'id' => 644,
                'goods_id' => 1116033,
                'attribute' => '椅身材质',
                'value' => '高弹力进口网布',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            144 => 
            array (
                'id' => 645,
                'goods_id' => 1116033,
                'attribute' => '扶手材质',
                'value' => 'PU',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            145 => 
            array (
                'id' => 646,
                'goods_id' => 1116033,
                'attribute' => '框架材质',
                'value' => '烤漆钢+工程塑料',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            146 => 
            array (
                'id' => 647,
                'goods_id' => 1116033,
                'attribute' => '椅轮',
                'value' => 'PA万向椅轮',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            147 => 
            array (
                'id' => 648,
                'goods_id' => 1116033,
                'attribute' => '气杆',
                'value' => '三弘气压杆',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            148 => 
            array (
                'id' => 649,
                'goods_id' => 1116033,
                'attribute' => '产品尺寸',
                'value' => '700*700*1160mm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            149 => 
            array (
                'id' => 650,
                'goods_id' => 1116033,
                'attribute' => '安装方式',
                'value' => '自行组装',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            150 => 
            array (
                'id' => 651,
                'goods_id' => 1116033,
                'attribute' => '*特别提醒',
                'value' => '1.周六日暂无法发货，周末订单延至周一发货，请知悉！
2.本产品配送范围：江浙沪、安徽、山东、福建、江西、湖北、河南、北京、天津、湖南、河北、山西、陕西、重庆、四川、海南、广西、贵州、云南、广东、辽宁、甘肃、宁夏、青海、内蒙古、吉林、黑龙江、新疆、西藏（航空件）
3.本产品配送整件，不包安装，收到货物后，请自行按照产品说明书进行组装。如果组装时碰到无法解决的问题，可联系客服获取指导。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            151 => 
            array (
                'id' => 652,
                'goods_id' => 1125016,
                'attribute' => '材质',
                'value' => '树脂',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            152 => 
            array (
                'id' => 653,
                'goods_id' => 1125016,
                'attribute' => '颜色',
                'value' => '黄色/蓝色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            153 => 
            array (
                'id' => 654,
                'goods_id' => 1125016,
                'attribute' => '尺寸',
                'value' => '129mm*96mm*302mm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            154 => 
            array (
                'id' => 655,
                'goods_id' => 1125016,
                'attribute' => '摆件类型',
                'value' => '收纳型桌面摆件',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            155 => 
            array (
                'id' => 656,
                'goods_id' => 1125017,
                'attribute' => '材质',
                'value' => '陶瓷',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            156 => 
            array (
                'id' => 657,
                'goods_id' => 1125017,
                'attribute' => '颜色',
                'value' => '粉色/哑黑',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            157 => 
            array (
                'id' => 658,
                'goods_id' => 1125017,
                'attribute' => '尺寸',
                'value' => '160mm*145mm*135mm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            158 => 
            array (
                'id' => 659,
                'goods_id' => 1125017,
                'attribute' => '摆件类型',
                'value' => '桌面摆件',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            159 => 
            array (
                'id' => 660,
                'goods_id' => 1127003,
                'attribute' => '执行标准',
                'value' => 'QB/T 1952.2-2011',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            160 => 
            array (
                'id' => 661,
                'goods_id' => 1127003,
                'attribute' => '弹簧结构特征',
                'value' => '独立袋装弹簧',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            161 => 
            array (
                'id' => 662,
                'goods_id' => 1127003,
                'attribute' => '使用场所',
                'value' => '卧室、榻榻米',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            162 => 
            array (
                'id' => 663,
                'goods_id' => 1127003,
                'attribute' => '主要原材料',
                'value' => '进口乳胶',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            163 => 
            array (
                'id' => 664,
                'goods_id' => 1127003,
                'attribute' => '辅料',
                'value' => '软硬质海绵',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            164 => 
            array (
                'id' => 665,
                'goods_id' => 1127003,
                'attribute' => '高度',
                'value' => '25cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            165 => 
            array (
                'id' => 666,
                'goods_id' => 1127003,
                'attribute' => '配送范围',
                'value' => '以客服回复可配送范围为准',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            166 => 
            array (
                'id' => 667,
                'goods_id' => 1127003,
                'attribute' => '重量',
                'value' => '150*200cm  54+-3kg
180*200cm   62+-3kg',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            167 => 
            array (
                'id' => 668,
                'goods_id' => 1127038,
                'attribute' => '材质',
                'value' => '100% 棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            168 => 
            array (
                'id' => 669,
                'goods_id' => 1127038,
                'attribute' => '尺寸',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            169 => 
            array (
                'id' => 670,
                'goods_id' => 1127038,
                'attribute' => '颜色',
                'value' => '星空蓝',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            170 => 
            array (
                'id' => 671,
                'goods_id' => 1127038,
                'attribute' => '执行标准',
                'value' => 'GB/T 22844-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            171 => 
            array (
                'id' => 672,
                'goods_id' => 1127038,
                'attribute' => '产地',
                'value' => '中国山东',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            172 => 
            array (
                'id' => 673,
                'goods_id' => 1127039,
                'attribute' => '材质',
                'value' => '100% 棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            173 => 
            array (
                'id' => 674,
                'goods_id' => 1127039,
                'attribute' => '尺寸',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            174 => 
            array (
                'id' => 675,
                'goods_id' => 1127039,
                'attribute' => '颜色',
                'value' => '青粉拼接',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            175 => 
            array (
                'id' => 676,
                'goods_id' => 1127039,
                'attribute' => '执行标准',
                'value' => 'GB/T 22844-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            176 => 
            array (
                'id' => 677,
                'goods_id' => 1127039,
                'attribute' => '产地',
                'value' => '中国山东',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            177 => 
            array (
                'id' => 678,
                'goods_id' => 1127052,
                'attribute' => '面料',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            178 => 
            array (
                'id' => 679,
                'goods_id' => 1127052,
                'attribute' => '填充物',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            179 => 
            array (
                'id' => 680,
                'goods_id' => 1127052,
                'attribute' => '执行标准',
                'value' => 'GB/T22796-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            180 => 
            array (
                'id' => 681,
                'goods_id' => 1127052,
                'attribute' => '安全技术类别',
                'value' => 'GB18401-2010 A类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            181 => 
            array (
                'id' => 682,
                'goods_id' => 1127052,
                'attribute' => '规格',
                'value' => '150*200cm/180*200cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            182 => 
            array (
                'id' => 683,
                'goods_id' => 1128002,
                'attribute' => '尺寸',
                'value' => '160*230cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            183 => 
            array (
                'id' => 684,
                'goods_id' => 1128002,
                'attribute' => '颜色',
                'value' => '青粉拼接',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            184 => 
            array (
                'id' => 685,
                'goods_id' => 1128002,
                'attribute' => '产地',
                'value' => '中国北京',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            185 => 
            array (
                'id' => 686,
                'goods_id' => 1128002,
                'attribute' => '材质',
                'value' => '绒面：100% 聚酯纤维 背面：52% 聚酯纤维/ 48% 棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            186 => 
            array (
                'id' => 687,
                'goods_id' => 1130037,
                'attribute' => '规格',
                'value' => '40*40*7cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            187 => 
            array (
                'id' => 688,
                'goods_id' => 1130037,
                'attribute' => '填充物',
                'value' => '100%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            188 => 
            array (
                'id' => 689,
                'goods_id' => 1130037,
                'attribute' => '填充物克重',
                'value' => '330g',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            189 => 
            array (
                'id' => 690,
                'goods_id' => 1130037,
                'attribute' => '面料',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            190 => 
            array (
                'id' => 691,
                'goods_id' => 1130037,
                'attribute' => '颜色',
                'value' => '米白/深褐',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            191 => 
            array (
                'id' => 692,
                'goods_id' => 1130037,
                'attribute' => '执行标准',
                'value' => 'GB/T 22843-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            192 => 
            array (
                'id' => 693,
                'goods_id' => 1130037,
                'attribute' => '安全技术类别',
                'value' => 'GB 18401-2010 B类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            193 => 
            array (
                'id' => 694,
                'goods_id' => 1130038,
                'attribute' => '填充物',
                'value' => '100%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            194 => 
            array (
                'id' => 695,
                'goods_id' => 1130038,
                'attribute' => '填充物重量',
                'value' => '340g/725g',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            195 => 
            array (
                'id' => 696,
                'goods_id' => 1130038,
                'attribute' => '面料',
                'value' => '100%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            196 => 
            array (
                'id' => 697,
                'goods_id' => 1130038,
                'attribute' => '执行标准',
                'value' => 'FZ/T 62011.3-2008',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            197 => 
            array (
                'id' => 698,
                'goods_id' => 1130038,
                'attribute' => '安全类别',
                'value' => 'GB 18401-2010 B类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            198 => 
            array (
                'id' => 699,
                'goods_id' => 1130038,
                'attribute' => '产品等级',
                'value' => '合格品',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            199 => 
            array (
                'id' => 700,
                'goods_id' => 1130039,
                'attribute' => '填充物',
                'value' => '100%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            200 => 
            array (
                'id' => 701,
                'goods_id' => 1130039,
                'attribute' => '面料',
                'value' => '100%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            201 => 
            array (
                'id' => 702,
                'goods_id' => 1130039,
                'attribute' => '填充物重量',
                'value' => '170g/250g',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            202 => 
            array (
                'id' => 703,
                'goods_id' => 1130039,
                'attribute' => '执行标准',
                'value' => 'FZ/T 62011.3-2008',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            203 => 
            array (
                'id' => 704,
                'goods_id' => 1130041,
                'attribute' => '规格',
                'value' => '45*45cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            204 => 
            array (
                'id' => 705,
                'goods_id' => 1130041,
                'attribute' => '重量',
                'value' => '0.4-0.6kg',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            205 => 
            array (
                'id' => 706,
                'goods_id' => 1130041,
                'attribute' => '材料',
                'value' => '面100%羊毛皮
衬100%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            206 => 
            array (
                'id' => 707,
                'goods_id' => 1130041,
                'attribute' => '执行标准',
                'value' => 'QB/T2972-2008',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            207 => 
            array (
                'id' => 708,
                'goods_id' => 1130042,
                'attribute' => '规格',
                'value' => '小号：90*50cm+-2
双拼：180*55cm+-2',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            208 => 
            array (
                'id' => 709,
                'goods_id' => 1130042,
                'attribute' => '重量',
                'value' => '小号：0.6-0.9kg
双拼：1.2-2kg',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            209 => 
            array (
                'id' => 710,
                'goods_id' => 1130042,
                'attribute' => '材料',
                'value' => '100%羊毛皮',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            210 => 
            array (
                'id' => 711,
                'goods_id' => 1130042,
                'attribute' => '执行标准',
                'value' => 'QB/T 2972-2008',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            211 => 
            array (
                'id' => 712,
                'goods_id' => 1130042,
                'attribute' => '产品等级',
                'value' => '一等品',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            212 => 
            array (
                'id' => 713,
                'goods_id' => 1130042,
                'attribute' => '备注',
                'value' => '黑色商品接触液体会有少量掉色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            213 => 
            array (
                'id' => 714,
                'goods_id' => 1130049,
                'attribute' => '面料',
                'value' => '65%莱赛尔（天丝）35%亚麻',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            214 => 
            array (
                'id' => 715,
                'goods_id' => 1130049,
                'attribute' => '填充物',
                'value' => '100%桑蚕丝',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            215 => 
            array (
                'id' => 716,
                'goods_id' => 1130049,
                'attribute' => '执行标准',
                'value' => 'GB/T 24252-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            216 => 
            array (
                'id' => 717,
                'goods_id' => 1130049,
                'attribute' => '安全类别',
                'value' => 'GB 18401-2010 B类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            217 => 
            array (
                'id' => 718,
                'goods_id' => 1130049,
                'attribute' => '产品等级',
                'value' => '合格品',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            218 => 
            array (
                'id' => 719,
                'goods_id' => 1130049,
                'attribute' => '填充物克重',
                'value' => '360g（小）/470g（大）',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            219 => 
            array (
                'id' => 720,
                'goods_id' => 1130056,
                'attribute' => '材质',
                'value' => '席面：头层牛皮革/ 枕套面：头层牛皮革/ 枕套背面：100%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            220 => 
            array (
                'id' => 721,
                'goods_id' => 1130056,
                'attribute' => '尺寸',
                'value' => '1.5米床：牛皮席：150x200cm/ 枕套：74x48cmx2
1.8米床：牛皮席：180x200cm/ 枕套：74x48cmx2',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            221 => 
            array (
                'id' => 722,
                'goods_id' => 1130056,
                'attribute' => '鞣制方式',
                'value' => '铬植结合鞣',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            222 => 
            array (
                'id' => 723,
                'goods_id' => 1130056,
                'attribute' => '颜色',
                'value' => '苋红色/ 象牙黄/ 橄榄棕/ 亮银灰',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            223 => 
            array (
                'id' => 724,
                'goods_id' => 1130056,
                'attribute' => '执行标准',
                'value' => 'QB/T 4204-2011',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            224 => 
            array (
                'id' => 725,
                'goods_id' => 1130056,
                'attribute' => '产地',
                'value' => '中国重庆',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            225 => 
            array (
                'id' => 726,
                'goods_id' => 1131017,
                'attribute' => '材质',
                'value' => '席面：毛竹
包边：100%棉
背面：100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            226 => 
            array (
                'id' => 727,
                'goods_id' => 1131017,
                'attribute' => '尺寸',
                'value' => '150x195cm/ 180x200cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            227 => 
            array (
                'id' => 728,
                'goods_id' => 1131017,
                'attribute' => '颜色',
                'value' => '抹茶色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            228 => 
            array (
                'id' => 729,
                'goods_id' => 1131017,
                'attribute' => '执行标准',
                'value' => 'LY/T 1843-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            229 => 
            array (
                'id' => 730,
                'goods_id' => 1131017,
                'attribute' => '产地',
                'value' => '中国浙江',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            230 => 
            array (
                'id' => 731,
                'goods_id' => 1134022,
                'attribute' => '材质',
                'value' => '绒面：100% 聚酯纤维
背面：TPR',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            231 => 
            array (
                'id' => 732,
                'goods_id' => 1134022,
                'attribute' => '颜色',
                'value' => '多色条纹',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            232 => 
            array (
                'id' => 733,
                'goods_id' => 1134022,
                'attribute' => '尺寸',
                'value' => '86*61cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            233 => 
            array (
                'id' => 734,
                'goods_id' => 1134022,
                'attribute' => '产地',
                'value' => '中国浙江',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            234 => 
            array (
                'id' => 735,
                'goods_id' => 1134022,
                'attribute' => '执行标准',
                'value' => 'QB/T 3000-2008',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            235 => 
            array (
                'id' => 736,
                'goods_id' => 1134030,
                'attribute' => '规格尺寸',
                'value' => '方形38*38*3cm
圆形 φ38*3cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            236 => 
            array (
                'id' => 737,
                'goods_id' => 1134030,
                'attribute' => '填充物重量',
                'value' => '方形：185g
圆形155g',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            237 => 
            array (
                'id' => 738,
                'goods_id' => 1134030,
                'attribute' => '面料',
                'value' => '100%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            238 => 
            array (
                'id' => 739,
                'goods_id' => 1134030,
                'attribute' => '执行标准',
                'value' => 'GB/T 22843-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            239 => 
            array (
                'id' => 740,
                'goods_id' => 1134030,
                'attribute' => '安全类别',
                'value' => 'GB18401-2010 B类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            240 => 
            array (
                'id' => 741,
                'goods_id' => 1134030,
                'attribute' => '产品等级',
                'value' => '合格品',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            241 => 
            array (
                'id' => 742,
                'goods_id' => 1134032,
                'attribute' => '规格尺寸',
                'value' => '方形：380*380*30mm
圆形：φ380*30mm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            242 => 
            array (
                'id' => 743,
                'goods_id' => 1134032,
                'attribute' => '填充物',
                'value' => '聚氨酯',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            243 => 
            array (
                'id' => 744,
                'goods_id' => 1134032,
                'attribute' => '填充物重量',
                'value' => '方形：185g
圆形：155g',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            244 => 
            array (
                'id' => 745,
                'goods_id' => 1134032,
                'attribute' => '面料',
                'value' => '100%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            245 => 
            array (
                'id' => 746,
                'goods_id' => 1134032,
                'attribute' => '执行标准',
                'value' => 'GB/T 22843-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            246 => 
            array (
                'id' => 747,
                'goods_id' => 1134032,
                'attribute' => '安全技术类别',
                'value' => 'GB18401-2010 B类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            247 => 
            array (
                'id' => 748,
                'goods_id' => 1134056,
                'attribute' => '材质',
                'value' => '70%棉，30%莫代尔',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            248 => 
            array (
                'id' => 749,
                'goods_id' => 1134056,
                'attribute' => '尺寸',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            249 => 
            array (
                'id' => 750,
                'goods_id' => 1134056,
                'attribute' => '颜色',
                'value' => '砖釉红/菡萏粉/浅豆绿/青丝灰',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            250 => 
            array (
                'id' => 751,
                'goods_id' => 1134056,
                'attribute' => '执行标准',
                'value' => 'GB/T 22844-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            251 => 
            array (
                'id' => 752,
                'goods_id' => 1134056,
                'attribute' => '产地',
                'value' => '中国江苏',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            252 => 
            array (
                'id' => 753,
                'goods_id' => 1135000,
                'attribute' => '材质',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            253 => 
            array (
                'id' => 754,
                'goods_id' => 1135000,
                'attribute' => '尺寸',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            254 => 
            array (
                'id' => 755,
                'goods_id' => 1135000,
                'attribute' => '颜色',
                'value' => '蒂芙尼蓝/ 墨黑/ 亮橙/ 浅灰',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            255 => 
            array (
                'id' => 756,
                'goods_id' => 1135000,
                'attribute' => '执行标准',
                'value' => 'GB/T 22844-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            256 => 
            array (
                'id' => 757,
                'goods_id' => 1135000,
                'attribute' => '产地',
                'value' => '中国江苏',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            257 => 
            array (
                'id' => 758,
                'goods_id' => 1135001,
                'attribute' => '材质',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            258 => 
            array (
                'id' => 759,
                'goods_id' => 1135001,
                'attribute' => '尺寸',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            259 => 
            array (
                'id' => 760,
                'goods_id' => 1135001,
                'attribute' => '颜色',
                'value' => '草绿色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            260 => 
            array (
                'id' => 761,
                'goods_id' => 1135001,
                'attribute' => '执行标准',
                'value' => 'GB/T 22844-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            261 => 
            array (
                'id' => 762,
                'goods_id' => 1135001,
                'attribute' => '产地',
                'value' => '中国江苏',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            262 => 
            array (
                'id' => 763,
                'goods_id' => 1135002,
                'attribute' => '材质',
                'value' => '100% 桑蚕丝',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            263 => 
            array (
                'id' => 764,
                'goods_id' => 1135002,
                'attribute' => '尺寸',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            264 => 
            array (
                'id' => 765,
                'goods_id' => 1135002,
                'attribute' => '颜色',
                'value' => '浅杏粉/ 玛瑙红/ 烟白灰',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            265 => 
            array (
                'id' => 766,
                'goods_id' => 1135002,
                'attribute' => '产地',
                'value' => '中国四川',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            266 => 
            array (
                'id' => 767,
                'goods_id' => 1135002,
                'attribute' => '执行标准',
                'value' => 'GB/T22796-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            267 => 
            array (
                'id' => 768,
                'goods_id' => 1135050,
                'attribute' => '产品材质',
                'value' => 'PP塑料',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            268 => 
            array (
                'id' => 769,
                'goods_id' => 1135050,
                'attribute' => '产品尺寸',
                'value' => '52*42*40cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            269 => 
            array (
                'id' => 770,
                'goods_id' => 1135050,
                'attribute' => '产品净重',
                'value' => '2.105kg',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            270 => 
            array (
                'id' => 771,
                'goods_id' => 1135050,
                'attribute' => '产品毛重',
                'value' => '3.215kg',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            271 => 
            array (
                'id' => 772,
                'goods_id' => 1135050,
                'attribute' => '执行标准',
                'value' => 'GB 9688-1988',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            272 => 
            array (
                'id' => 773,
                'goods_id' => 1135050,
                'attribute' => '配送范围',
                'value' => '请咨询客服',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            273 => 
            array (
                'id' => 774,
                'goods_id' => 1135051,
                'attribute' => '材质',
                'value' => '100% 聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            274 => 
            array (
                'id' => 775,
                'goods_id' => 1135051,
                'attribute' => '尺寸',
                'value' => '1.4 x 2.6M：适用于1.4M宽以下的窗户。
1.75 x 2.6M：适用于1.4M-1.75M宽的窗户。
2.25 x 2.6M：适用于1.75M-2.25M宽的窗户。
2.8 x 2.6M：适用于2.25M-2.8M宽的窗户。
3.5 x 2.6M：适用于2.8M-3.5M宽的窗户。
4.5 x 2.6M：适用于3.5M-4.5M宽的窗户。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            275 => 
            array (
                'id' => 776,
                'goods_id' => 1135051,
                'attribute' => '执行标准',
                'value' => 'GB/T 19817-2005',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            276 => 
            array (
                'id' => 777,
                'goods_id' => 1135051,
                'attribute' => '颜色',
                'value' => '米色/ 蓝灰/ 烟灰/ 咖色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            277 => 
            array (
                'id' => 778,
                'goods_id' => 1135051,
                'attribute' => '产地',
                'value' => '中国浙江',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            278 => 
            array (
                'id' => 779,
                'goods_id' => 1135051,
                'attribute' => '物理遮光率',
                'value' => '80%左右',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            279 => 
            array (
                'id' => 780,
                'goods_id' => 1135052,
                'attribute' => '材质',
                'value' => '36%黏胶纤维/  10%亚麻/ 54%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            280 => 
            array (
                'id' => 781,
                'goods_id' => 1135052,
                'attribute' => '颜色',
                'value' => '深卡其/ 米灰/ 灰蓝/ 粉橙',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            281 => 
            array (
                'id' => 782,
                'goods_id' => 1135052,
                'attribute' => '产地',
                'value' => '中国浙江',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            282 => 
            array (
                'id' => 783,
                'goods_id' => 1135052,
                'attribute' => '执行标准',
                'value' => 'GB/T 19817-2005',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            283 => 
            array (
                'id' => 784,
                'goods_id' => 1135052,
                'attribute' => '尺寸',
                'value' => '1.4 x 2.6M：适用于1.4M宽以下的窗户。
1.75 x 2.6M：适用于1.4M-1.75M宽的窗户。
2.25 x 2.6M：适用于1.75M-2.25M宽的窗户。
2.8 x 2.6M：适用于2.25M-2.8M宽的窗户。
3.5 x 2.6M：适用于2.8M-3.5M宽的窗户。
4.5 x 2.6M：适用于3.5M-4.5M宽的窗户。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            284 => 
            array (
                'id' => 785,
                'goods_id' => 1135052,
                'attribute' => '物理遮光率',
                'value' => '60%-70%左右',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            285 => 
            array (
                'id' => 786,
                'goods_id' => 1135053,
                'attribute' => '材质',
                'value' => '47%黏胶纤维/  53%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            286 => 
            array (
                'id' => 787,
                'goods_id' => 1135053,
                'attribute' => '尺寸',
                'value' => '1.4 x 2.6M：适用于1.4M宽以下的窗户。
1.75 x 2.6M：适用于1.4M-1.75M宽的窗户。
2.25 x 2.6M：适用于1.75M-2.25M宽的窗户。
2.8 x 2.6M：适用于2.25M-2.8M宽的窗户。
3.5 x 2.6M：适用于2.8M-3.5M宽的窗户。
4.5 x 2.6M：适用于3.5M-4.5M宽的窗户。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            287 => 
            array (
                'id' => 788,
                'goods_id' => 1135053,
                'attribute' => '颜色',
                'value' => '山岩灰',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            288 => 
            array (
                'id' => 789,
                'goods_id' => 1135053,
                'attribute' => '执行标准',
                'value' => 'GB/T 19817-2005',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            289 => 
            array (
                'id' => 790,
                'goods_id' => 1135053,
                'attribute' => '产地',
                'value' => '中国浙江',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            290 => 
            array (
                'id' => 791,
                'goods_id' => 1135053,
                'attribute' => '物理遮光率',
                'value' => '70-80%左右',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            291 => 
            array (
                'id' => 792,
                'goods_id' => 1135054,
                'attribute' => '材质',
                'value' => '36% 聚酯纤维 74% 粘胶纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            292 => 
            array (
                'id' => 793,
                'goods_id' => 1135054,
                'attribute' => '尺寸',
                'value' => '1.4 x 2.6M：适用于1.4M宽以下的窗户。
1.75 x 2.6M：适用于1.4M-1.75M宽的窗户。
2.25 x 2.6M：适用于1.75M-2.25M宽的窗户。
2.8 x 2.6M：适用于2.25M-2.8M宽的窗户。
3.5 x 2.6M：适用于2.8M-3.5M宽的窗户。
4.5 x 2.6M：适用于3.5M-4.5M宽的窗户。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            293 => 
            array (
                'id' => 794,
                'goods_id' => 1135054,
                'attribute' => '颜色',
                'value' => '蓝色/ 绿色/ 黄色/ 红色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            294 => 
            array (
                'id' => 795,
                'goods_id' => 1135054,
                'attribute' => '执行标准',
                'value' => 'GB/T 19817-2005',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            295 => 
            array (
                'id' => 796,
                'goods_id' => 1135054,
                'attribute' => '产地',
                'value' => '中国浙江',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            296 => 
            array (
                'id' => 797,
                'goods_id' => 1135054,
                'attribute' => '物理遮光性',
                'value' => '80%左右',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            297 => 
            array (
                'id' => 798,
                'goods_id' => 1135055,
                'attribute' => '材质',
                'value' => '52% 黏胶纤维  48%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            298 => 
            array (
                'id' => 799,
                'goods_id' => 1135055,
                'attribute' => '尺寸',
                'value' => '1.4 x 2.6M：适用于1.4M宽以下的窗户。
1.75 x 2.6M：适用于1.4M-1.75M宽的窗户。
2.25 x 2.6M：适用于1.75M-2.25M宽的窗户。
2.8 x 2.6M：适用于2.25M-2.8M宽的窗户。
3.5 x 2.6M：适用于2.8M-3.5M宽的窗户。
4.5 x 2.6M：适用于3.5M-4.5M宽的窗户。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            299 => 
            array (
                'id' => 800,
                'goods_id' => 1135055,
                'attribute' => '颜色',
                'value' => '米灰几何纹/ 橙灰几何纹/ 蓝灰几何纹',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            300 => 
            array (
                'id' => 801,
                'goods_id' => 1135055,
                'attribute' => '执行标准',
                'value' => 'GB/T 19817-2005',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            301 => 
            array (
                'id' => 802,
                'goods_id' => 1135055,
                'attribute' => '产地',
                'value' => '中国浙江',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            302 => 
            array (
                'id' => 803,
                'goods_id' => 1135055,
                'attribute' => '物理遮光率',
                'value' => '70%-80%左右',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            303 => 
            array (
                'id' => 804,
                'goods_id' => 1135056,
                'attribute' => '材质',
                'value' => '54% 黏胶纤维/ 46%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            304 => 
            array (
                'id' => 805,
                'goods_id' => 1135056,
                'attribute' => '尺寸',
                'value' => '1.4 x 2.6M：适用于1.4M宽以下的窗户。
1.75 x 2.6M：适用于1.4M-1.75M宽的窗户。
2.25 x 2.6M：适用于1.75M-2.25M宽的窗户。
2.8 x 2.6M：适用于2.25M-2.8M宽的窗户。
3.5 x 2.6M：适用于2.8M-3.5M宽的窗户。
4.5 x 2.6M：适用于3.5M-4.5M宽的窗户。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            305 => 
            array (
                'id' => 806,
                'goods_id' => 1135056,
                'attribute' => '执行标准',
                'value' => 'GB/T 19817-2005',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            306 => 
            array (
                'id' => 807,
                'goods_id' => 1135056,
                'attribute' => '颜色',
                'value' => '蓝条纹/ 粉条纹',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            307 => 
            array (
                'id' => 808,
                'goods_id' => 1135056,
                'attribute' => '产地',
                'value' => '中国浙江',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            308 => 
            array (
                'id' => 809,
                'goods_id' => 1135056,
                'attribute' => '物理遮光率',
                'value' => '60%-70%左右',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            309 => 
            array (
                'id' => 810,
                'goods_id' => 1135057,
                'attribute' => '材质',
                'value' => '100% 聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            310 => 
            array (
                'id' => 811,
                'goods_id' => 1135057,
                'attribute' => '尺寸',
                'value' => '1.4 x 2.6M：适用于1.4M宽以下的窗户。
1.75 x 2.6M：适用于1.4M-1.75M宽的窗户。
2.25 x 2.6M：适用于1.75M-2.25M宽的窗户。
2.8 x 2.6M：适用于2.25M-2.8M宽的窗户。
3.5 x 2.6M：适用于2.8M-3.5M宽的窗户。
4.5 x 2.6M：适用于3.5M-4.5M宽的窗户。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            311 => 
            array (
                'id' => 812,
                'goods_id' => 1135057,
                'attribute' => '执行标准',
                'value' => 'GB/T 19817-2005',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            312 => 
            array (
                'id' => 813,
                'goods_id' => 1135057,
                'attribute' => '颜色',
                'value' => '莹白',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            313 => 
            array (
                'id' => 814,
                'goods_id' => 1135057,
                'attribute' => '产地',
                'value' => '中国浙江',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            314 => 
            array (
                'id' => 815,
                'goods_id' => 1135058,
                'attribute' => '规格',
                'value' => '35*45cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            315 => 
            array (
                'id' => 816,
                'goods_id' => 1135058,
                'attribute' => '填充物',
                'value' => '聚苯乙烯泡沫粒子',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            316 => 
            array (
                'id' => 817,
                'goods_id' => 1135058,
                'attribute' => '填充物重量',
                'value' => '260g',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            317 => 
            array (
                'id' => 818,
                'goods_id' => 1135058,
                'attribute' => '面料',
                'value' => '100%棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            318 => 
            array (
                'id' => 819,
                'goods_id' => 1135058,
                'attribute' => '执行标准',
                'value' => 'GB/T 22843-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            319 => 
            array (
                'id' => 820,
                'goods_id' => 1135058,
                'attribute' => '安全技术类别',
                'value' => 'GB 8401-2010 B类',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            320 => 
            array (
                'id' => 821,
                'goods_id' => 1138000,
                'attribute' => '材质',
                'value' => '面料: 96% 涤纶 4%氨纶
填充物：100%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            321 => 
            array (
                'id' => 822,
                'goods_id' => 1138000,
                'attribute' => '尺寸',
                'value' => '直径40cm/ 直径55cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            322 => 
            array (
                'id' => 823,
                'goods_id' => 1138000,
                'attribute' => '执行标准',
                'value' => 'GB/T 22843-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            323 => 
            array (
                'id' => 824,
                'goods_id' => 1138000,
                'attribute' => '产地',
                'value' => '中国浙江',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            324 => 
            array (
                'id' => 825,
                'goods_id' => 1138000,
                'attribute' => '颜色',
                'value' => '天青色/ 松叶绿/ 珊瑚红/ 姜黄色/ 香芋粉/ 卡其色/ 深咖色/ 海军蓝',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            325 => 
            array (
                'id' => 826,
                'goods_id' => 1138001,
                'attribute' => '材质',
                'value' => '抱枕套：100%棉
抱枕芯外壳：100%棉
绣线：100%聚酯纤维
填充：100%聚酯纤维',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            326 => 
            array (
                'id' => 827,
                'goods_id' => 1138001,
                'attribute' => '颜色',
                'value' => '静谧蓝/ 古典金/ 动感绿/ 浪漫粉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            327 => 
            array (
                'id' => 828,
                'goods_id' => 1138001,
                'attribute' => '尺寸',
                'value' => '45 x 45cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            328 => 
            array (
                'id' => 829,
                'goods_id' => 1138001,
                'attribute' => '执行标准',
                'value' => 'GB/T 22843-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            329 => 
            array (
                'id' => 830,
                'goods_id' => 1138001,
                'attribute' => '产地',
                'value' => '中国山东',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            330 => 
            array (
                'id' => 831,
                'goods_id' => 1143015,
                'attribute' => '材质',
                'value' => '席面：蔺草/ 包边：100% 棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            331 => 
            array (
                'id' => 832,
                'goods_id' => 1143015,
                'attribute' => '执行标准',
                'value' => 'QB/T 2934-2008',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            332 => 
            array (
                'id' => 833,
                'goods_id' => 1143015,
                'attribute' => '产地',
                'value' => '中国浙江',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            333 => 
            array (
                'id' => 834,
                'goods_id' => 1143015,
                'attribute' => '颜色',
                'value' => '抹茶色',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            334 => 
            array (
                'id' => 835,
                'goods_id' => 1147045,
                'attribute' => '颜色',
                'value' => '灰黄条纹',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            335 => 
            array (
                'id' => 836,
                'goods_id' => 1147045,
                'attribute' => '尺寸',
                'value' => '160*230cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            336 => 
            array (
                'id' => 837,
                'goods_id' => 1147045,
                'attribute' => '材质',
                'value' => '绒面：100% 聚酯纤维 背面：52% 聚酯纤维/ 48% 棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            337 => 
            array (
                'id' => 838,
                'goods_id' => 1147045,
                'attribute' => '产地',
                'value' => '中国北京',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            338 => 
            array (
                'id' => 839,
                'goods_id' => 1147046,
                'attribute' => '颜色',
                'value' => '条纹粉间',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            339 => 
            array (
                'id' => 840,
                'goods_id' => 1147046,
                'attribute' => '尺寸',
                'value' => '160*230cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            340 => 
            array (
                'id' => 841,
                'goods_id' => 1147046,
                'attribute' => '材质',
                'value' => '绒面：100% 聚酯纤维 背面：52% 聚酯纤维/ 48% 棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            341 => 
            array (
                'id' => 842,
                'goods_id' => 1147046,
                'attribute' => '产地',
                'value' => '中国北京',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            342 => 
            array (
                'id' => 843,
                'goods_id' => 1147047,
                'attribute' => '尺寸',
                'value' => '160*230cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            343 => 
            array (
                'id' => 844,
                'goods_id' => 1147047,
                'attribute' => '材质',
                'value' => '绒面：100% 聚酯纤维 背面：52% 聚酯纤维/ 48% 棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            344 => 
            array (
                'id' => 845,
                'goods_id' => 1147047,
                'attribute' => '颜色',
                'value' => '蓝粉拼接',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            345 => 
            array (
                'id' => 846,
                'goods_id' => 1147047,
                'attribute' => '产地',
                'value' => '中国北京',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            346 => 
            array (
                'id' => 847,
                'goods_id' => 1147048,
                'attribute' => '尺寸',
                'value' => '160*230cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            347 => 
            array (
                'id' => 848,
                'goods_id' => 1147048,
                'attribute' => '颜色',
                'value' => '蓝灰格',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            348 => 
            array (
                'id' => 849,
                'goods_id' => 1147048,
                'attribute' => '材质',
                'value' => '绒面：100% 聚酯纤维 背面：52% 聚酯纤维/ 48% 棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            349 => 
            array (
                'id' => 850,
                'goods_id' => 1147048,
                'attribute' => '产地',
                'value' => '中国北京',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            350 => 
            array (
                'id' => 851,
                'goods_id' => 1151012,
                'attribute' => '材质',
                'value' => '100% 棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            351 => 
            array (
                'id' => 852,
                'goods_id' => 1151012,
                'attribute' => '尺寸',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            352 => 
            array (
                'id' => 853,
                'goods_id' => 1151012,
                'attribute' => '颜色',
                'value' => '素雅灰',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            353 => 
            array (
                'id' => 854,
                'goods_id' => 1151012,
                'attribute' => '执行标准',
                'value' => 'GB/T 22844-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            354 => 
            array (
                'id' => 855,
                'goods_id' => 1151012,
                'attribute' => '产地',
                'value' => '中国山东',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            355 => 
            array (
                'id' => 856,
                'goods_id' => 1151013,
                'attribute' => '材质',
                'value' => '100% 棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            356 => 
            array (
                'id' => 857,
                'goods_id' => 1151013,
                'attribute' => '尺寸',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            357 => 
            array (
                'id' => 858,
                'goods_id' => 1151013,
                'attribute' => '颜色',
                'value' => '胭脂粉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            358 => 
            array (
                'id' => 859,
                'goods_id' => 1151013,
                'attribute' => '执行标准',
                'value' => 'GB/T 22844-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            359 => 
            array (
                'id' => 860,
                'goods_id' => 1151013,
                'attribute' => '产地',
                'value' => '中国山东',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            360 => 
            array (
                'id' => 861,
                'goods_id' => 1152161,
                'attribute' => '材质',
                'value' => '12%长麻/ 12%竹浆纤维/ 76%莱赛尔',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            361 => 
            array (
                'id' => 862,
                'goods_id' => 1152161,
                'attribute' => '尺寸',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            362 => 
            array (
                'id' => 863,
                'goods_id' => 1152161,
                'attribute' => '产地',
                'value' => '中国江苏',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            363 => 
            array (
                'id' => 864,
                'goods_id' => 1152161,
                'attribute' => '执行标准',
                'value' => 'GB/T 22844-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            364 => 
            array (
                'id' => 865,
                'goods_id' => 1155000,
                'attribute' => '材质',
                'value' => '100% 棉',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            365 => 
            array (
                'id' => 866,
                'goods_id' => 1155000,
                'attribute' => '尺寸',
                'value' => '1.5米床品： 被套 200*230cm/ 枕套：48*74cm*2/ 床单：245*250cm
1.8米床品：被套 220*240cm/ 枕套：48*74cm*2/ 床单：245*270cm',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            366 => 
            array (
                'id' => 867,
                'goods_id' => 1155000,
                'attribute' => '颜色',
                'value' => '条纹绿格',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            367 => 
            array (
                'id' => 868,
                'goods_id' => 1155000,
                'attribute' => '执行标准',
                'value' => 'GB/T 22844-2009',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            368 => 
            array (
                'id' => 869,
                'goods_id' => 1155000,
                'attribute' => '产地',
                'value' => '中国山东',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            369 => 
            array (
                'id' => 870,
                'goods_id' => 1181000,
                'attribute' => '规格',
                'value' => '组合一：AB面独立弹簧床垫 进口乳胶150*200cm*1+可水洗抗菌防螨丝羽绒枕*2。
组合二：AB面独立弹簧床垫 进口乳胶180*200cm*1+可水洗抗菌防螨丝羽绒枕*2',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            370 => 
            array (
                'id' => 871,
                'goods_id' => 1181000,
                'attribute' => '重要提醒',
                'value' => '活动时间：5月8日0点-5月14日24点。
请在以上时间段内购买，其余时间均不可享受组合装优惠。',
                'add_time' => '2018-02-01 00:00:00',
                'update_time' => '2018-02-01 00:00:00',
                'deleted' => 0,
            ),
            371 => 
            array (
                'id' => 872,
                'goods_id' => 1006014,
                'attribute' => '尺寸',
                'value' => '200*230cm/ 220*240cm',
                'add_time' => '2018-10-26 21:27:13',
                'update_time' => '2018-10-26 21:27:13',
                'deleted' => 0,
            ),
            372 => 
            array (
                'id' => 873,
                'goods_id' => 1006014,
                'attribute' => '面料',
                'value' => '100%棉',
                'add_time' => '2018-10-26 21:27:13',
                'update_time' => '2018-10-26 21:27:13',
                'deleted' => 0,
            ),
            373 => 
            array (
                'id' => 874,
                'goods_id' => 1006014,
                'attribute' => '填充物',
                'value' => '100%双宫茧桑蚕丝',
                'add_time' => '2018-10-26 21:27:13',
                'update_time' => '2018-10-26 21:27:13',
                'deleted' => 0,
            ),
            374 => 
            array (
                'id' => 875,
                'goods_id' => 1006014,
                'attribute' => '填充物重量',
                'value' => '0.5+1.5KG/1+2KG',
                'add_time' => '2018-10-26 21:27:13',
                'update_time' => '2018-10-26 21:27:13',
                'deleted' => 0,
            ),
            375 => 
            array (
                'id' => 876,
                'goods_id' => 1006014,
                'attribute' => '温馨提示',
                'value' => '天然桑蚕丝具有正常蛋白味道，通风晾晒2-3天即可散去',
                'add_time' => '2018-10-26 21:27:13',
                'update_time' => '2018-10-26 21:27:13',
                'deleted' => 0,
            ),
        ));
        
        
    }
}