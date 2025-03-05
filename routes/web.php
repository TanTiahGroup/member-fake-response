<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/mix/api/FmaMemberPersonalData', function (Request $request) {
    return response()->json(
        [
        // "csrfToken" => "4f43f18f-9153-4195-b8da-a6d6080b0d9d", //GOLD
        // "httpStatus" => "OK",
        // "fanName" => "千葉　純一郎",
        // "fcRankName" => "Ｍ３",
        // "presentComming" => "3",
        // "necessaryPoint" => "146",
        // "nextFcRankName" => "Ｍ３",
        // "fanTypeCode" => "02",
        // "fanTypeName" => "ブラック",

        // "csrfToken" => "b1b6e5cd-b52d-49b3-86fe-f2819a1e2fa4", //JUNIOR
        // "httpStatus" => "OK",
        // "fanName" => "千葉　純一郎",
        // "fcRankName" => "Ｍ６",
        // "presentComming" => "0",
        // "necessaryPoint" => null,
        // "nextFcRankName" => "Ｍ６",
        // "fanTypeCode" => "04",
        // "fanTypeName" => "ジュニア",

        // "csrfToken" => "b1b6e5cd-b52d-49b3-86fe-f2819a1e2fa4", //ACADEMY
        // "httpStatus" => "OK",
        // "fanName" => "千葉　純一郎",
        // "fcRankName" => "Ｍ３",
        // "presentComming" => "4",
        // "necessaryPoint" => "146",
        // "nextFcRankName" => "Ｍ３",
        // "fanTypeCode" => "14",
        // "fanTypeName" => "アカデミー",

        "csrfToken" => "0a934f91-3487-4956-8a7b-5a22d6bd2db8", //REGULAR
        "httpStatus" => "OK",
        "fanName" => "福田　清志",
        "fcRankName" => "Ｍ６",
        "presentComming" => "0",
        "necessaryPoint" => null,
        "nextFcRankName" => "Ｍ６",
        "fanTypeCode" => "03",
        "fanTypeName" => "ホワイト",

        // "csrfToken" => "f291c967-ae2f-4784-873c-bb7bc7c92255", //FREE
        // "httpStatus"=> "OK",
        // "fanName"=> "千葉　純一郎",
        // "fcRankName"=>"Ｍ１",
        // "presentComming"=> "0",
        // "necessaryPoint"=> "1000",
        // "nextFcRankName"=> "Ｍ１",
        // "fanTypeCode"=> "09",
        // "fanTypeName"=> "フリー",

        "savingPointList" => [
            [
                "occurYear" => "2024",
                "point" => 483,
                "validDate" => "2026-01-31",
                "pointType" => "03",
                "pointTypeName" => "ステージポイント",
                "pointTypeShortName" => "ｽﾃｰｼﾞﾎﾟｲﾝﾄ",
                "pointUnit" => "Mpt"
            ],
            [
                "occurYear" => "2024",
                "point" => 483,
                "validDate" => "2026-01-31",
                "pointType" => "01",
                "pointTypeName" => "Ｍポイント",
                "pointTypeShortName" => "Mﾎﾟｲﾝﾄ",
                "pointUnit" => "Mpt"
            ],
            [
                "occurYear" => "2023",
                "point" => 50230,
                "validDate" => "2025-01-31",
                "pointType" => "03",
                "pointTypeName" => "ステージポイント",
                "pointTypeShortName" => "ｽﾃｰｼﾞﾎﾟｲﾝﾄ",
                "pointUnit" => "Mpt"
            ],
            [
                "occurYear" => "2023",
                "point" => 4230,
                "validDate" => "2025-01-31",
                "pointType" => "01",
                "pointTypeName" => "Ｍポイント",
                "pointTypeShortName" => "Mﾎﾟｲﾝﾄ",
                "pointUnit" => "Mpt"
            ]
        ],
        "amcNo" => "8933971492",
        "continueYear" => "3",
        "responceMessages" => []
    ]
);
});

Route::get('/mix/api/FmaMemberMessage', function (Request $request) {
    return response()->json([
        "csrfToken" => "bd5bed95-2830-4ed1-9a44-0d5507604dfc",
        "httpStatus" => "OK",
        "responceMessages" => [],
        "messageList" => [
            [
               "title" => "侍ジャパン強化試合の先行販売ご案内",
                "detail" => "2024年度ファンクラブ有料会員の皆さま向けに、2025年3月5日(水)と6日(木)に侍ジャパンが京セラドーム大阪で実施する「ラグザス 侍ジャパンシリーズ2025 日本vsオランダ」のWEB限定先行抽選販売を行います。\r\n\r\nTEAM26マイページ内に設置された先行販売特設サイトからお申し込みいただけます。\r\n\r\n先行抽選販売スケジュール\r\n\r\n申込期間：1月17日(金)10時00分～1月19日(日)23時59分\r\n当落確認：1月21日(火)15時00分～\r\n引換期間：1月25日(土)10時00分～\r\n\r\n一般販売は1月25日(土)10時00分～です。\r\n\r\n本大会の詳細は、侍ジャパンオフィシャルサイトをご覧ください。\r\n<A Href=\"https://www.japan-baseball.jp/\"target=\"_blank\">詳細はこちら</A>",
                "startTime" => "2025-01-17 10:00:00.0",
                "endTime" => "2025-10-19 23:59:00.0",
                "messageId" => "1336"
            ],
            [
                "title" => "<FONT color=\"red\">TEAM26会員規約一部変更(追加)のお知らせ</FONT>",
                 "detail" => "いつも応援ありがとうございます。\r\n球団公式ファンクラブ「TEAM26」では2025年度会員制度変更に伴い、会員規約の一部を改定します。\r\nなお、規約内容の変更の効力発生日は30日以上前を予告期間とし、施行日を2024年10月9日とします。\r\n\r\n<FONT color=\"red\"><A Href=\"https://www.marines.co.jp/news/detail/202400555211.html/\"target=\"_blank\">ニュースはこちら</A>\r\n<FONT color=\"red\"><A Href=\"https://www.marines.co.jp/fanclub2024/rule/\"target=\"_blank\">【新】会員規約はこちら</A>\r\n\r\n\r\n\r\nTEAM26事務局",
                 "startTime" => "2024-09-09 18:30:00.0",
                 "endTime" => "2025-10-19 23:59:00.0",
                 "messageId" => "1336"
             ],
        ],
        "personalMessageList" => []
    ]);
});

Route::get('/mix/api/FmaMemberRecTicket', function (Request $request) {
    // Lấy giá trị 'yearSel' từ query string
    $yearSel = $request->query('yearSel');

    // Kiểm tra xem giá trị 'yearSel' có phải là 2024 không (hoặc bất kỳ điều kiện nào bạn muốn)
    if ($yearSel == '2025') {
        return response()->json([
            "csrfToken" => "914fb9d0-6989-411e-bf93-a8f6b6793e8d",
            "httpStatus" => "OK",
            "responceMessages" => [],
            "recTicketList" => [
                [
                    "buyDate" => "2025/02/24",
                    "gameDate" => "2025/03/29",
                    "gameName" => "北海道日本ハムファイターズ",
                    "stadium" => "ZOZOマリンスタジアム",
                    "seatKind" => "内野指定席ＩＳ（３塁側）"
                ]
            ]
        ]);
    }

    // Nếu 'yearSel' không phải là 2024, trả về lỗi hoặc dữ liệu mặc định
    return response()->json([
        "httpStatus" => "Error",
        "message" => "Invalid yearSel"
    ]);
});

Route::get('/mix/api/FmaMemberFavorite', function (Request $request) {
    return response()->json([
        'csrfToken' => 'ffe5a3dc-880c-402d-8f98-2f50a6a78a52',
        'httpStatus' => 'OK',
        'favoriteNow1' => null,
        'favoriteNow2' => '9999997',
        'favoriteNow3' => '9999998',
        'favoriteNext1' => null,
        'favoriteNext2' => '9999997',
        'favoriteNext3' => '9999998',
        'playerList' => [
            [
              "playerCode"=> "9999998",
              "playerUniformNo"=> "－－",
              "playerName"=> "未選択",
              "playerNameRoma"=> null
            ],
            [
              "playerCode"=> "9999999",
              "playerUniformNo"=> "－－",
              "playerName"=> "未選択",
              "playerNameRoma"=> null
            ],
            [
              "playerCode"=> "2024168",
              "playerUniformNo"=> "41",
              "playerName"=> "ダラス・カイケル",
              "playerNameRoma"=> "KEUCHEL"
            ],
            [
              "playerCode"=> "2010023",
              "playerUniformNo"=> "0",
              "playerName"=> "荻野 貴司",
              "playerNameRoma"=> "T.OGINO"
            ],
            [
              "playerCode"=> "2022006",
              "playerUniformNo"=> "00",
              "playerName"=> "池田 来翔",
              "playerNameRoma"=> "IKEDA"
            ],
            [
              "playerCode"=> "2019081",
              "playerUniformNo"=> "1",
              "playerName"=> "藤原 恭大",
              "playerNameRoma"=> "FUJIWARA"
            ],
            [
              "playerCode"=> "2022102",
              "playerUniformNo"=> "2",
              "playerName"=> "松川 虎生",
              "playerNameRoma"=> "MATSUKAWA"
            ],
            [
              "playerCode"=> "2007027",
              "playerUniformNo"=> "3",
              "playerName"=> "角中 勝也",
              "playerNameRoma"=> "KAKUNAKA"
            ],
            [
              "playerCode"=> "2023063",
              "playerUniformNo"=> "4",
              "playerName"=> "友杉 篤輝",
              "playerNameRoma"=> "TOMOSUGI"
            ],
            [
              "playerCode"=> "2018099",
              "playerUniformNo"=> "5",
              "playerName"=> "安田 尚憲",
              "playerNameRoma"=> "YASUDA"
            ],
            [
              "playerCode"=> "2018087",
              "playerUniformNo"=> "7",
              "playerName"=> "藤岡 裕大",
              "playerNameRoma"=> "FUJIOKA"
            ],
            [
              "playerCode"=> "2015072",
              "playerUniformNo"=> "8",
              "playerName"=> "中村 奨吾",
              "playerNameRoma"=> "NAKAMURA"
            ],
            [
              "playerCode"=> "2011049",
              "playerUniformNo"=> "11",
              "playerName"=> "澤村 拓一",
              "playerNameRoma"=> "SAWAMURA"
            ],
            [
              "playerCode"=> "2016084",
              "playerUniformNo"=> "13",
              "playerName"=> "平沢 大河",
              "playerNameRoma"=> "HIRASAWA"
            ],
            [
              "playerCode"=> "2019020",
              "playerUniformNo"=> "14",
              "playerName"=> "小島 和哉",
              "playerNameRoma"=> "OJIMA"
            ],
            [
              "playerCode"=> "2011085",
              "playerUniformNo"=> "15",
              "playerName"=> "美馬 学",
              "playerNameRoma"=> "MIMA"
            ],
            [
              "playerCode"=> "2017063",
              "playerUniformNo"=> "16",
              "playerName"=> "種市 篤暉",
              "playerNameRoma"=> "TANEICHI"
            ],
            [
              "playerCode"=> "2020051",
              "playerUniformNo"=> "17",
              "playerName"=> "佐々木 朗希",
              "playerNameRoma"=> "R.SASAKI"
            ],
            [
              "playerCode"=> "2014066",
              "playerUniformNo"=> "18",
              "playerName"=> "二木 康太",
              "playerNameRoma"=> "FUTAKI"
            ],
            [
              "playerCode"=> "2008026",
              "playerUniformNo"=> "19",
              "playerName"=> "唐川 侑己",
              "playerNameRoma"=> "KARAKAWA"
            ],
            [
              "playerCode"=> "2016066",
              "playerUniformNo"=> "20",
              "playerName"=> "東條 大樹",
              "playerNameRoma"=> "TOJO"
            ],
            [
              "playerCode"=> "2022158",
              "playerUniformNo"=> "22",
              "playerName"=> "グレゴリー・ポランコ",
              "playerNameRoma"=> "POLANCO"
            ],
            [
              "playerCode"=> "2012005",
              "playerUniformNo"=> "23",
              "playerName"=> "石川 慎吾",
              "playerNameRoma"=> "S.ISHIKAWA"
            ],
            [
              "playerCode"=> "2019001",
              "playerUniformNo"=> "24",
              "playerName"=> "東妻 勇輔",
              "playerNameRoma"=> "AZUMA"
            ],
            [
              "playerCode"=> "2014020",
              "playerUniformNo"=> "25",
              "playerName"=> "岡 大海",
              "playerNameRoma"=> "OKA"
            ],
            [
              "playerCode"=> "2013047",
              "playerUniformNo"=> "27",
              "playerName"=> "田村 龍弘",
              "playerNameRoma"=> "TAMURA"
            ],
            [
              "playerCode"=> "2023024",
              "playerUniformNo"=> "28",
              "playerName"=> "菊地 吏玖",
              "playerNameRoma"=> "KIKUCHI"
            ],
            [
              "playerCode"=> "2009065",
              "playerUniformNo"=> "29",
              "playerName"=> "西野 勇士",
              "playerNameRoma"=> "NISHINO"
            ],
            [
              "playerCode"=> "2022087",
              "playerUniformNo"=> "30",
              "playerName"=> "廣畑 敦也",
              "playerNameRoma"=> "HIROHATA"
            ],
            [
              "playerCode"=> "2020053",
              "playerUniformNo"=> "32",
              "playerName"=> "佐藤 都志也",
              "playerNameRoma"=> "SATOH"
            ],
            [
              "playerCode"=> "2022116",
              "playerUniformNo"=> "33",
              "playerName"=> "八木 彬",
              "playerNameRoma"=> "YAGI"
            ],
            [
              "playerCode"=> "2023051",
              "playerUniformNo"=> "34",
              "playerName"=> "高野 脩汰",
              "playerNameRoma"=> "TAKANO"
            ],
            [
              "playerCode"=> "2023055",
              "playerUniformNo"=> "35",
              "playerName"=> "田中 晴也",
              "playerNameRoma"=> "TANAKA"
            ],
            [
              "playerCode"=> "2019037",
              "playerUniformNo"=> "36",
              "playerName"=> "坂本 光士郎",
              "playerNameRoma"=> "SAKAMOTO"
            ],
            [
              "playerCode"=> "2015022",
              "playerUniformNo"=> "37",
              "playerName"=> "小野 郁",
              "playerNameRoma"=> "F.ONO"
            ],
            [
              "playerCode"=> "2020060",
              "playerUniformNo"=> "38",
              "playerName"=> "髙部 瑛斗",
              "playerNameRoma"=> "TAKABE"
            ],
            [
              "playerCode"=> "2020024",
              "playerUniformNo"=> "39",
              "playerName"=> "大下 誠一郎",
              "playerNameRoma"=> "OHSHITA"
            ],
            [
              "playerCode"=> "2018074",
              "playerUniformNo"=> "40",
              "playerName"=> "西村 天裕",
              "playerNameRoma"=> "NISHIMURA"
            ],
            [
              "playerCode"=> "2017141",
              "playerUniformNo"=> "42",
              "playerName"=> "C.C.メルセデス",
              "playerNameRoma"=> "C.C.MERCEDES"
            ],
            [
              "playerCode"=> "2022003",
              "playerUniformNo"=> "43",
              "playerName"=> "秋山 正雲",
              "playerNameRoma"=> "AKIYAMA"
            ],
            [
              "playerCode"=> "2014010",
              "playerUniformNo"=> "44",
              "playerName"=> "井上 晴哉",
              "playerNameRoma"=> "INOUE"
            ],
            [
              "playerCode"=> "2020014",
              "playerUniformNo"=> "45",
              "playerName"=> "植田 将太",
              "playerNameRoma"=> "UEDA"
            ],
            [
              "playerCode"=> "2015014",
              "playerUniformNo"=> "46",
              "playerName"=> "岩下 大輝",
              "playerNameRoma"=> "IWASHITA"
            ],
            [
              "playerCode"=> "2021063",
              "playerUniformNo"=> "47",
              "playerName"=> "鈴木 昭汰",
              "playerNameRoma"=> "SUZUKI"
            ],
            [
              "playerCode"=> "2019065",
              "playerUniformNo"=> "48",
              "playerName"=> "中村 稔弥",
              "playerNameRoma"=> "T.NAKAMURA"
            ],
            [
              "playerCode"=> "2020100",
              "playerUniformNo"=> "49",
              "playerName"=> "本前 郁也",
              "playerNameRoma"=> "MOTOMAE"
            ],
            [
              "playerCode"=> "2019094",
              "playerUniformNo"=> "51",
              "playerName"=> "山口 航輝",
              "playerNameRoma"=> "YAMAGUCHI"
            ],
            [
              "playerCode"=> "2012083",
              "playerUniformNo"=> "52",
              "playerName"=> "益田 直也",
              "playerNameRoma"=> "MASUDA"
            ],
            [
              "playerCode"=> "2016026",
              "playerUniformNo"=> "55",
              "playerName"=> "柿沼 友哉",
              "playerNameRoma"=> "KAKINUMA"
            ],
            [
              "playerCode"=> "2021081",
              "playerUniformNo"=> "56",
              "playerName"=> "中森 俊介",
              "playerNameRoma"=> "NAKAMORI"
            ],
            [
              "playerCode"=> "2021030",
              "playerUniformNo"=> "57",
              "playerName"=> "小川 龍成",
              "playerNameRoma"=> "OGAWA"
            ],
            [
              "playerCode"=> "2020106",
              "playerUniformNo"=> "60",
              "playerName"=> "横山 陸人",
              "playerNameRoma"=> "YOKOYAMA"
            ],
            [
              "playerCode"=> "2021121",
              "playerUniformNo"=> "61",
              "playerName"=> "山本 大斗",
              "playerNameRoma"=> "D.YAMAMOTO"
            ],
            [
              "playerCode"=> "2018098",
              "playerUniformNo"=> "62",
              "playerName"=> "森 遼大朗",
              "playerNameRoma"=> "MORI"
            ],
            [
              "playerCode"=> "2018111",
              "playerUniformNo"=> "63",
              "playerName"=> "和田 康士朗",
              "playerNameRoma"=> "WADA"
            ],
            [
              "playerCode"=> "2017045",
              "playerUniformNo"=> "66",
              "playerName"=> "澤田 圭佑",
              "playerNameRoma"=> "SAWADA"
            ],
            [
              "playerCode"=> "2016063",
              "playerUniformNo"=> "67",
              "playerName"=> "茶谷 健太",
              "playerNameRoma"=> "CHATANI"
            ],
            [
              "playerCode"=> "2023021",
              "playerUniformNo"=> "68",
              "playerName"=> "金田 優太",
              "playerNameRoma"=> "KANEDA"
            ],
            [
              "playerCode"=> "2010035",
              "playerUniformNo"=> "92",
              "playerName"=> "国吉 佑樹",
              "playerNameRoma"=> "KUNIYOSHI"
            ],
            [
              "playerCode"=> "2022066",
              "playerUniformNo"=> "120",
              "playerName"=> "田中 楓基",
              "playerNameRoma"=> "F.TANAKA"
            ],
            [
              "playerCode"=> "2017071",
              "playerUniformNo"=> "121",
              "playerName"=> "土肥 星也",
              "playerNameRoma"=> "DOHI"
            ],
            [
              "playerCode"=> "2014007",
              "playerUniformNo"=> "12",
              "playerName"=> "石川 歩",
              "playerNameRoma"=> "ISHIKAWA"
            ],
            [
              "playerCode"=> "2021038",
              "playerUniformNo"=> "58",
              "playerName"=> "河村 説人",
              "playerNameRoma"=> "KAWAMURA"
            ],
            [
              "playerCode"=> "2019082",
              "playerUniformNo"=> "124",
              "playerName"=> "古谷 拓郎",
              "playerNameRoma"=> "FURUYA"
            ],
            [
              "playerCode"=> "2022073",
              "playerUniformNo"=> "125",
              "playerName"=> "永島田 輝斗",
              "playerNameRoma"=> "NAGASHIMADA"
            ],
            [
              "playerCode"=> "2022113",
              "playerUniformNo"=> "126",
              "playerName"=> "村山 亮介",
              "playerNameRoma"=> "MURAYAMA"
            ],
            [
              "playerCode"=> "2023119",
              "playerUniformNo"=> "127",
              "playerName"=> "吉川 悠斗",
              "playerNameRoma"=> "YOSHIKAWA"
            ],
            [
              "playerCode"=> "2023047",
              "playerUniformNo"=> "128",
              "playerName"=> "白濱 快起",
              "playerNameRoma"=> "SHIRAHAMA"
            ],
            [
              "playerCode"=> "2023018",
              "playerUniformNo"=> "129",
              "playerName"=> "勝又 琉偉",
              "playerNameRoma"=> "KATSUMATA"
            ],
            [
              "playerCode"=> "2023030",
              "playerUniformNo"=> "130",
              "playerName"=> "黒川 凱星",
              "playerNameRoma"=> "KUROKAWA"
            ],
            [
              "playerCode"=> "2018047",
              "playerUniformNo"=> "64",
              "playerName"=> "菅野 剛士",
              "playerNameRoma"=> "SUGANO"
            ],
            [
              "playerCode"=> "2009068",
              "playerUniformNo"=> "91",
              "playerName"=> "二保 旭",
              "playerNameRoma"=> "NIHO"
            ],
            [
              "playerCode"=> "2016110",
              "playerUniformNo"=> "93",
              "playerName"=> "吉田 凌",
              "playerNameRoma"=> "YOSHIDA"
            ],
            [
              "playerCode"=> "2016021",
              "playerUniformNo"=> "50",
              "playerName"=> "愛斗",
              "playerNameRoma"=> "AITO"
            ],
            [
              "playerCode"=> "2018125",
              "playerUniformNo"=> "99",
              "playerName"=> "ネフタリ・ソト",
              "playerNameRoma"=> "SOTO"
            ],
            [
              "playerCode"=> "2024019",
              "playerUniformNo"=> "31",
              "playerName"=> "大谷 輝龍",
              "playerNameRoma"=> "H.OHTANI"
            ],
            [
              "playerCode"=> "2024033",
              "playerUniformNo"=> "53",
              "playerName"=> "木村 優人",
              "playerNameRoma"=> "KIMURA"
            ],
            [
              "playerCode"=> "2024084",
              "playerUniformNo"=> "59",
              "playerName"=> "早坂 響",
              "playerNameRoma"=> "HAYASAKA"
            ],
            [
              "playerCode"=> "2024133",
              "playerUniformNo"=> "69",
              "playerName"=> "ジミー・コルデロ",
              "playerNameRoma"=> "CORDERO"
            ],
            [
              "playerCode"=> "2024063",
              "playerUniformNo"=> "133",
              "playerName"=> "武内 涼太",
              "playerNameRoma"=> "TAKEUCHI"
            ],
            [
              "playerCode"=> "2024072",
              "playerUniformNo"=> "65",
              "playerName"=> "寺地 隆成",
              "playerNameRoma"=> "TERACHI"
            ],
            [
              "playerCode"=> "2024074",
              "playerUniformNo"=> "137",
              "playerName"=> "富山 紘之進",
              "playerNameRoma"=> "TOMIYAMA"
            ],
            [
              "playerCode"=> "2024164",
              "playerUniformNo"=> "138",
              "playerName"=> "アンディ・マーティン",
              "playerNameRoma"=> "A.MARTIN"
            ],
            [
              "playerCode"=> "2024013",
              "playerUniformNo"=> "10",
              "playerName"=> "上田 希由翔",
              "playerNameRoma"=> "K.UEDA"
            ],
            [
              "playerCode"=> "2024102",
              "playerUniformNo"=> "134",
              "playerName"=> "松石 信八",
              "playerNameRoma"=> "MATSUISHI"
            ],
            [
              "playerCode"=> "2024035",
              "playerUniformNo"=> "135",
              "playerName"=> "髙野 光海",
              "playerNameRoma"=> "KOHNO"
            ],
            [
              "playerCode"=> "2024092",
              "playerUniformNo"=> "136",
              "playerName"=> "藤田 和樹",
              "playerNameRoma"=> "FUJITA"
            ]
          ]
    ]);
});

Route::get('/mix/api/FmaMemberInfo', function () {
    return response()->json([
        "csrfToken" => "2673ec5d-6bb7-44fa-b70d-8ab2b30e655e",
        "httpStatus" => "OK",
        "amcNo" => "8933971492",
        "nameKana" => "フクダ キヨシ",
        "name" => "福田 清志",
        "sex" => "0",
        "sexName" => "男",
        "birthDateYear" => "1978",
        "birthDateMonth" => "11",
        "birthDateDate" => "29",
        "telNo1" => "03",
        "telNo2" => "5404",
        "telNo3" => "5624",
        "zipCode1" => "105",
        "zipCode2" => "0011",
        "address1" => "13",
        "address2" => "港区",
        "address3" => "芝公園",
        "address4" => "２丁目３番３号",
        "address5" => "ホットファクトリー寺田ビル６階",
        "delivFanNo" => "8933971492",
        "delivLastName" => "福田",
        "delivFirstName" => "清志",
        "delivTelNo1" => "03",
        "delivTelNo2" => "5404",
        "delivTelNo3" => "5624",
        "email" => "ml_team26@hot-factory.jp",
        "fanPassword" => "●●●●●●●●",
        "books" => "1",
        "booksName" => "希望する",
        "mailMagazine" => "0",
        "mailMagazineName" => "希望しない",
        "mailMagazine1Flag" => "0",
        "mailMagazine1FlagName" => "希望しない",
        "mailMagazine2Flag" => "0",
        "mailMagazine2FlagName" => "希望しない",
        "mailMagazine3Flag" => "0",
        "mailMagazine3FlagName" => "希望しない",
        "mailMagazine4Flag" => "0",
        "mailMagazine4FlagName" => "希望しない",
        "mailMagazine5Flag" => "0",
        "mailMagazine5FlagName" => "希望しない",
        "mailMagazine6Flag" => "0",
        "mailMagazine6FlagName" => "希望しない",
        "mailMagazine7Flag" => "0",
        "mailMagazine7FlagName" => "希望しない",
        "mailMagazine8Flag" => "0",
        "mailMagazine8FlagName" => "希望しない",
        "mailMagazine9Flag" => "0",
        "mailMagazine9FlagName" => "希望しない",
        "mailMagazine10Flag" => "0",
        "mailMagazine10FlagName" => "希望しない",
        "year1" => "2024",
        "fanType1" => "03",
        "fanType1Name" => "レギュラー",
        "goods1" => "10:53:59:65",
        "goods1Name" => "ラウンドショルダーバッグ<BR>一部指定席引換券　平日・一部休日使用可能1枚分<BR>スプリングチケット引換券　WEB利用<BR>TEAM26会員証（プラスチックカード）　発行しない",
        "delivMethod1Name" => "窓口引換",
        "delivFlag1" => "0",
        "delivFlag1Name" => "DM",
        "delivStatus1" => "0",
        "delivStatus1Name" => "出荷",
        "delivCode1" => "チクタク便0185952803761",
        "shipDate1" => "2024/02/22",
        "unusedWebExchangeCode1" => [
            [
                "name" => "スプリングチケット引換券　WEB利用",
                "codes" => ["7winkftg"],
                "codeBeanList" => null
            ],
            [
                "name" => "2023年度ステージUP特典繰越:一部指定席引換券(平日・一部休日)",
                "codes" => ["kwvv129427751", "puec372347560", "qctf644452087", "zdhs110034662"],
                "codeBeanList" => null
            ]
        ],
        "usedWebExchangeCode1" => null,
        "yearChk" => false,
        "windowExchangeFlag1" => null,
        "windowExchangeFlag2" => "",
        "windowExchangeDate1" => "",
        "windowExchangeDate2" => "",
        "year2" => "2025",
        "fanType2" => "03",
        "fanType2Name" => "ホワイト",
        "goods2" => "42:53:59:65",
        "goods2Name" => "　<BR>特典チケット引換券2枚分<BR>スプリングチケット引換券　WEB利用<BR>TEAM26会員証（プラスチックカード）　発行しない",
        "delivMethod2Name" => "郵送",
        "delivFlag2" => "0",
        "delivFlag2Name" => "DM",
        "delivStatus2" => "1",
        "delivStatus2Name" => "配送指示待",
        "delivCode2" => null,
        "shipDate2" => "",
        "unusedWebExchangeCode2" => [
            [
                "name" => "スプリングチケット引換券　WEB利用",
                "codes" => ["66gwtgeg"],
                "codeBeanList" => null
            ]
        ],
        "usedWebExchangeCode2" => null,
        "registState1" => "0",
        "registState2" => "0",
        "admissionMethod1" => "B",
        "admissionMethod2" => "V",
        "addressList1" => [
            ["label" => "都道府県を選択して下さい", "value" => ""],
            ["label" => "北海道", "value" => "01"],
            // Thêm các tỉnh khác ở đây
        ],
        "responceMessages" => []
    ]);
});

Route::get('/mix/api/FmaMemberWebExchange', function () {
    return response()->json([
        "csrfToken" => "3711801e-ae56-4867-8f35-ee77d82f983c",
        "httpStatus" => "OK",
        "usedExchangeCodeList" => [],
        "unUsedExchangeCodeList" => [
            [
                "name" => "スプリングチケット引換券　WEB利用",
                "codes" => [
                    "7winkftg"
                ],
                "codeBeanList" => [
                    [
                        "code" => "7winkftg",
                        "boundDate" => null,
                        "usedDate" => "2024/05/31"
                    ]
                ]
            ],
            [
                "name" => "2023年度ステージUP特典繰越:一部指定席引換券(平日・一部休日)",
                "codes" => [
                    "kwvv129427751",
                    "puec372347560",
                    "qctf644452087",
                    "zdhs110034662"
                ],
                "codeBeanList" => [
                    [
                        "code" => "kwvv129427751",
                        "boundDate" => null,
                        "usedDate" => null
                    ],
                    [
                        "code" => "puec372347560",
                        "boundDate" => null,
                        "usedDate" => null
                    ],
                    [
                        "code" => "qctf644452087",
                        "boundDate" => null,
                        "usedDate" => null
                    ],
                    [
                        "code" => "zdhs110034662",
                        "boundDate" => null,
                        "usedDate" => null
                    ]
                ]
            ]
        ],
        "responceMessages" => []
    ]);
});

Route::get('mix/api/FmaMemberRecComing', function (Request $request) {
    return '{
  "csrfToken": "01b6cfab-833e-491c-b740-42a7d861ef7d",
  "httpStatus": "OK",
  "wonrate": ".750",
  "homeCnt": 4,
  "recComingList": [
    {
      "gameDate": "2025/08/03",
      "gameName": "北海道日本ハムファイターズ",
      "stadium": "ZOZOマリンスタジアム",
      "seatKind": "",
      "gameResult": "○",
      "gameScoreNum": "ロ7",
      "gameOScoreNum": "5日",
      "officialSitePC": "",
      "startingPitcher": "西野勇士"
    },
    {
      "gameDate": "2025/07/24",
      "gameName": "福岡ソフトバンクホークス",
      "stadium": "ZOZOマリンスタジアム",
      "seatKind": "",
      "gameResult": "○",
      "gameScoreNum": "ロ2",
      "gameOScoreNum": "1ソ",
      "officialSitePC": "",
      "startingPitcher": "佐々木朗希"
    },
    {
      "gameDate": "2025/07/17",
      "gameName": "東北楽天ゴールデンイーグルス",
      "stadium": "ZOZOマリンスタジアム",
      "seatKind": "",
      "gameResult": "●",
      "gameScoreNum": "ロ2",
      "gameOScoreNum": "4楽",
      "officialSitePC": "",
      "startingPitcher": "種市篤暉"
    },
    {
      "gameDate": "2025/07/06",
      "gameName": "埼玉西武ライオンズ",
      "stadium": "東京ドーム",
      "seatKind": "",
      "gameResult": "○",
      "gameScoreNum": "ロ7",
      "gameOScoreNum": "6西",
      "officialSitePC": "",
      "startingPitcher": "小島和哉"
    }
  ],
  "responceMessages": []
}';
});

Route::get('mix/api/FmaMemberRecBadge', function (Request $request) {
  return '{
    "csrfToken": "0d96021c-9fe8-47d0-837e-2b84e2c29ac9",
    "httpStatus": "OK",
    "responceMessages": [],
    "badgeList": [
      {
        "gameDate": "2025/09/12",
        "badgeKind": "【ピンバッジ有】9/12THANKS DAY"
      },
      {
        "gameDate": "2025/06/26",
        "badgeKind": "【ピンバッジ】ALL FOR CHIBA"
      },
      {
        "gameDate": "2025/06/10",
        "badgeKind": "【後日お渡し】藤原恭大ボブルヘッド"
      },
      {
        "gameDate": "2025/02/16",
        "badgeKind": "有料継続年数ピンバッジ"
      }
    ]
  }';
});

Route::get('mix/api/FmaMemberRecPoint', function (Request $request) {
    // Dữ liệu trả về
    $response = [
        "csrfToken" => "f27f8f65-8784-4ef5-a68c-49a2c032af0f",
        "httpStatus" => "OK",
        "savingPointList" => [
            [
                "occurYear" => "2024",
                "point" => 483,
                "validDate" => "2026-01-31",
                "pointType" => "03",
                "pointTypeName" => "ステージポイント",
                "pointTypeShortName" => "ｽﾃｰｼﾞﾎﾟｲﾝﾄ",
                "pointUnit" => "Mpt"
            ],
            [
                "occurYear" => "2024",
                "point" => 483,
                "validDate" => "2026-01-31",
                "pointType" => "01",
                "pointTypeName" => "Ｍポイント",
                "pointTypeShortName" => "Mﾎﾟｲﾝﾄ",
                "pointUnit" => "Mpt"
            ],
            [
                "occurYear" => "2023",
                "point" => 50230,
                "validDate" => "2025-01-31",
                "pointType" => "03",
                "pointTypeName" => "ステージポイント",
                "pointTypeShortName" => "ｽﾃｰｼﾞﾎﾟｲﾝﾄ",
                "pointUnit" => "Mpt"
            ],
            [
                "occurYear" => "2023",
                "point" => 4230,
                "validDate" => "2025-01-31",
                "pointType" => "01",
                "pointTypeName" => "Ｍポイント",
                "pointTypeShortName" => "Mﾎﾟｲﾝﾄ",
                "pointUnit" => "Mpt"
            ]
        ],
        "histList" => [
            [
                "occurTime" => "2024/02/24",
                "pointCause" => "チケット購入",
                "point" => "+483",
                "pointDetail" => "試合日　　：2024/03/29\r\n購入日　　：2024/02/24\r\n購入種別　：前売り\r\n席種　　　：内野指定席ＩＳ（３塁側）\r\n数量　　　：2枚\r\n合計金額　：\\17,720",
                "occurYear" => "2024",
                "seqNo" => "28154955",
                "pointTypeName" => "Ｍポイント",
                "pointTypeUnit" => "Mpt",
                "pointType" => "01"
            ],
            [
                "occurTime" => "2024/02/14",
                "pointCause" => "ポイント交換",
                "point" => "-5000",
                "pointDetail" => "受注日　　　：2024/02/14\r\n合計金額　　：5000Mpt\r\n配送料　　　：着払い\r\n商品名\r\n　2023年入会特典グッズ　クルーネック スウェットシャツ　XOサイズ\r\n数量\r\n　1",
                "occurYear" => "2024",
                "seqNo" => "28123197",
                "pointTypeName" => "Ｍポイント",
                "pointTypeUnit" => "Mpt",
                "pointType" => "01"
            ],
            // Thêm các mục trong histList nếu cần
        ],
        "responceMessages" => []
    ];

    // Trả về dữ liệu dưới dạng JSON
    return response()->json($response);
});

Route::get('mix/api/CrmMemberVoteList', function () {
    return response()->json([
        'csrfToken' => 'c06f3efe-0c57-41ce-a6b6-76c7abfc2957',
        'httpStatus' => 'OK',
        'votableList' => null,
        'enqueteList' => [],
        'responceMessages' => [
            [
                'code' => '0010I',
                'message' => '現在受付中のアンケートはありません。(e-code=I710)'
            ]
        ]
    ]);
});

Route::get('mix/api/FmaMemberEventList', function () {
    return '{
  "csrfToken": "91dff776-b7e5-4db4-8bcd-5c4b2dc746e7",
  "httpStatus": "OK",
  "eventList": [
    {
      "csrfToken": null,
      "httpStatus": null,
      "eventId": "1809",
      "eventTime": "2024/12/31 23:59",
      "eventTitle": "テスト",
      "appKind": "終了",
      "joinPoint": 0,
      "startTime": "2024-11-25 00:00:00.0",
      "endTime": "2024-12-31 23:59:00.0",
      "place": "",
      "detail": "テスト",
      "responceMessages": []
    },
    {
      "csrfToken": null,
      "httpStatus": null,
      "eventId": "1808",
      "eventTime": "2024/12/31 23:59",
      "eventTitle": "テスト",
      "appKind": "終了",
      "joinPoint": 0,
      "startTime": "2024-11-25 00:00:00.0",
      "endTime": "2024-12-31 23:59:00.0",
      "place": "",
      "detail": "テスト",
      "responceMessages": []
    },
    {
      "csrfToken": null,
      "httpStatus": null,
      "eventId": "1807",
      "eventTime": "2024/12/31 23:59",
      "eventTitle": "テスト",
      "appKind": "終了",
      "joinPoint": 0,
      "startTime": "2024-11-25 00:00:00.0",
      "endTime": "2024-12-31 23:59:00.0",
      "place": "",
      "detail": "テスト",
      "responceMessages": []
    },
    {
      "csrfToken": null,
      "httpStatus": null,
      "eventId": "1624",
      "eventTime": "2024/05/31 10:00",
      "eventTitle": "【ｴﾝﾄﾘｰ】2024ｼｰｽﾞﾝ開幕記念ｽﾌﾟﾘﾝｸﾞｷｬﾝﾍﾟｰﾝ",
      "appKind": "終了",
      "joinPoint": 0,
      "startTime": "2024-03-09 11:00:00.0",
      "endTime": "2024-04-26 23:59:00.0",
      "place": "",
      "detail": "3月29日(金)～4月25日(木)の期間にご来場された方を対象に、「2024シーズン開幕記念 スプリングキャンペーン」を実施いたします。ぜひ、対象期間にZOZOマリンスタジアムでの熱い応援をよろしくお願いします。\r\n<b><u>■キャンペーン期間</b></u>\r\n3月29日(金)～4月25日(木)\r\n※期間内に雨天中止の試合が出た場合も、振替試合はキャンペーン対象となりません。\r\n\r\n<b><u>■参加条件</b></u>\r\nキャンペーン期間内に行われるZOZOマリン開催のマリーンズ主催公式戦で、2試合以上に来場登録をした方\r\n\r\n<b><u>■プレゼント賞品</b></u>\r\n選手サイン入りレプリカユニホーム：3名\r\n選手サイン入り試合球：5名\r\n選手サイン色紙：100名\r\n\r\n<b><u>■キャンペーンエントリー期間</b></u>\r\n3月9日(土)～4月26日(金)\r\n\r\n<b><u>■キャンペーン参加方法</b></u>\r\n①エントリー期間中に本イベントに応募を完了させる\r\n②対象期間中に2試合以上来場し、会員証(デジタル会員証含む)を提示したうえで来場登録(来場ポイント付与)を実施\r\n\r\n<b><u>■当選発表</b></u>\r\n当選発表は商品の発送をもって代えさせていただきます。当選の場合、5月下旬までにマイページに登録していただいた住所に発送します。\r\n\r\n<b><u>■注意事項</b></u>\r\n※有料会員・無料会員ともにエントリー出来ます。\r\n※2試合以上来場登録された場合でもエントリーがない場合は抽選対象外です。\r\n※エントリーされても2試合以上の来場登録がない場合は抽選対象外です。\r\n※選手のサインはお選びいただけません。また、当選後の返品・交換もできません。\r\n※サイン記入時の擦れや汚れがある場合があります。賞品到着後の返品、交換は出来ません。",
      "responceMessages": []
    },
    {
      "csrfToken": null,
      "httpStatus": null,
      "eventId": "1623",
      "eventTime": "2024/03/31 00:00",
      "eventTitle": "3/31 イニング間イベント『NATION of the FAN』挑戦者",
      "appKind": "準備中",
      "joinPoint": 0,
       "startTime": "2025-01-01 12:00:00.0",
      "endTime": "2025-12-30 23:59:00.0",
      "place": "",
      "detail": "3/29(金)～31(日)の北海道日本ハム戦は「2024 OPENING SERIES MARINES NATION」。\r\nファンの皆さまの 2024 シーズンにかける熱い想いを ZOZO マリンスタジアムに結集させる 3 日間です。\r\n\r\nそこで、「結集」にあたって誰が最も遠くから結集したのか、皆さまのご自宅から ZOZO マリンスタジアムまでの直線距離を競う「NATION of the FAN」を開催します！\r\n\r\n応募者の中から見事優勝に輝いた「最も遠くから結集した方」には、当日の 4 回表後にビジョンでご紹介＆豪華賞品をプレゼント！\r\n\r\n我こそは、という方は奮って応募ください。\r\n\r\n\r\n■日時\r\n　3/31(金)　北海道日本ハムファイターズ戦　4回表終了後\r\n　\r\n■場所\r\n　スタンド内\r\n　※ご自身のお席でご覧ください\r\n\r\n■応募期間\r\n　3月11日(月)まで\r\n \r\n■応募対象\r\n　当日の観戦チケットをお持ちの方で、ご自身のご住所を証明できるものをお持ちの方\r\n　※当日の観戦チケットはご自身でご準備をお願いします\r\n\r\n■当選人数\r\n　「最も遠くから結集した方」1名\r\n　※当選者ご本人のみご紹介します\r\n　\r\n■当選発表\r\n　当選された方にのみ 3月14日(水)までにご登録の電話番号にご連絡いたします。\r\n　※お電話がつながらなかった場合や、ご自身のご住所を証明できるものをお持ちでない場合、他の方を繰り上げ当選とする場合がございます。あらかじめご了承ください。\r\n \r\n■注意事項\r\n・当日の観戦チケットをお持ちではない方は本イベントへご参加できません。当日の観戦チケットはご自身でご準備をお願いします。また試合観戦のご招待はありません。\r\n・当選お一人につき、1名までのご紹介となります。\r\n・当選者の決定方法に関する個別のご質問にはお答えできません\r\n・イベントの模様を球団公式サイトおよび球団公式SNS等で使用する場合があります。\r\n・参加権利の譲渡や貸与(会員証を他人に貸し出すなどの行為)は一切禁止です。\r\n・天候などの理由により、予告なくイベントが中止、変更となる場合があります。中止となった場合の振替開催や代替イベントへの参加振替はありません。\r\n・その他、当日の参加方法等の詳細は、当選者にのみお知らせします。",
      "responceMessages": []
    },
    {
      "csrfToken": null,
      "httpStatus": null,
      "eventId": "1622",
      "eventTime": "2024/03/30 00:00",
      "eventTitle": "3/30 イニング間イベント『NATION of the FAN』挑戦者",
      "appKind": "締切り",
      "joinPoint": 0,
      "startTime": "2025-01-01 12:00:00.0",
      "endTime": "2025-12-30 23:59:00.0",
      "place": "",
      "detail": "3/29(金)～31(日)の北海道日本ハム戦は「2024 OPENING SERIES MARINES NATION」。\r\nファンの皆さまの 2024 シーズンにかける熱い想いを ZOZO マリンスタジアムに結集させる 3 日間です。\r\n\r\nそこで、「結集」にあたって誰が最も遠くから結集したのか、皆さまのご自宅から ZOZO マリンスタジアムまでの直線距離を競う「NATION of the FAN」を開催します！\r\n\r\n応募者の中から見事優勝に輝いた「最も遠くから結集した方」には、当日の 4 回表後にビジョンでご紹介＆豪華賞品をプレゼント！\r\n\r\n我こそは、という方は奮って応募ください。\r\n\r\n\r\n■日時\r\n　3/30(金)　北海道日本ハムファイターズ戦　4回表終了後\r\n　\r\n■場所\r\n　スタンド内\r\n　※ご自身のお席でご覧ください\r\n\r\n■応募期間\r\n　3月11日(月)まで\r\n \r\n■応募対象\r\n　当日の観戦チケットをお持ちの方で、ご自身のご住所を証明できるものをお持ちの方\r\n　※当日の観戦チケットはご自身でご準備をお願いします\r\n\r\n■当選人数\r\n　「最も遠くから結集した方」1名\r\n　※当選者ご本人のみご紹介します\r\n　\r\n■当選発表\r\n　当選された方にのみ 3月14日(水)までにご登録の電話番号にご連絡いたします。\r\n　※お電話がつながらなかった場合や、ご自身のご住所を証明できるものをお持ちでない場合、他の方を繰り上げ当選とする場合がございます。あらかじめご了承ください。\r\n \r\n■注意事項\r\n・当日の観戦チケットをお持ちではない方は本イベントへご参加できません。当日の観戦チケットはご自身でご準備をお願いします。また試合観戦のご招待はありません。\r\n・当選お一人につき、1名までのご紹介となります。\r\n・当選者の決定方法に関する個別のご質問にはお答えできません\r\n・イベントの模様を球団公式サイトおよび球団公式SNS等で使用する場合があります。\r\n・参加権利の譲渡や貸与(会員証を他人に貸し出すなどの行為)は一切禁止です。\r\n・天候などの理由により、予告なくイベントが中止、変更となる場合があります。中止となった場合の振替開催や代替イベントへの参加振替はありません。\r\n・その他、当日の参加方法等の詳細は、当選者にのみお知らせします。",
      "responceMessages": []
    },
    {
      "csrfToken": null,
      "httpStatus": null,
      "eventId": "1621",
      "eventTime": "2024/03/29 00:00",
      "eventTitle": "3/29 イニング間イベント『NATION of the FAN』挑戦者",
      "appKind": "申込済",
      "joinPoint": 0,
      "startTime": "2025-01-01 12:00:00.0",
      "endTime": "2025-12-30 23:59:00.0",
      "place": "",
      "detail": "3/29(金)～31(日)の北海道日本ハム戦は「2024 OPENING SERIES MARINES NATION」。\r\nファンの皆さまの 2024 シーズンにかける熱い想いを ZOZO マリンスタジアムに結集させる 3 日間です。\r\n\r\nそこで、「結集」にあたって誰が最も遠くから結集したのか、皆さまのご自宅から ZOZO マリンスタジアムまでの直線距離を競う「NATION of the FAN」を開催します！\r\n\r\n応募者の中から見事優勝に輝いた「最も遠くから結集した方」には、当日の 4 回表後にビジョンでご紹介＆豪華賞品をプレゼント！\r\n\r\n我こそは、という方は奮って応募ください。\r\n\r\n\r\n■日時\r\n　3/29(金)　北海道日本ハムファイターズ戦　4回表終了後\r\n　\r\n■場所\r\n　スタンド内\r\n　※ご自身のお席でご覧ください\r\n\r\n■応募期間\r\n　3月11日(月)まで\r\n \r\n■応募対象\r\n　当日の観戦チケットをお持ちの方で、ご自身のご住所を証明できるものをお持ちの方\r\n　※当日の観戦チケットはご自身でご準備をお願いします\r\n\r\n■当選人数\r\n　「最も遠くから結集した方」1名\r\n　※当選者ご本人のみご紹介します\r\n　\r\n■当選発表\r\n　当選された方にのみ 3月14日(水)までにご登録の電話番号にご連絡いたします。\r\n　※お電話がつながらなかった場合や、ご自身のご住所を証明できるものをお持ちでない場合、他の方を繰り上げ当選とする場合がございます。あらかじめご了承ください。\r\n \r\n■注意事項\r\n・当日の観戦チケットをお持ちではない方は本イベントへご参加できません。当日の観戦チケットはご自身でご準備をお願いします。また試合観戦のご招待はありません。\r\n・当選お一人につき、1名までのご紹介となります。\r\n・当選者の決定方法に関する個別のご質問にはお答えできません\r\n・イベントの模様を球団公式サイトおよび球団公式SNS等で使用する場合があります。\r\n・参加権利の譲渡や貸与(会員証を他人に貸し出すなどの行為)は一切禁止です。\r\n・天候などの理由により、予告なくイベントが中止、変更となる場合があります。中止となった場合の振替開催や代替イベントへの参加振替はありません。\r\n・その他、当日の参加方法等の詳細は、当選者にのみお知らせします。",
      "responceMessages": []
    }
  ],
  "savingPoint": 0,
  "responceMessages": []
}';
});

Route::get('mix/api/FmaMemberPointExchange', function () {
    return response()->json([
        'csrfToken' => 'a00532bb-0904-444d-a3e5-40be36f08c66',
        'httpStatus' => 'OK',
        'exchangeGoodsList' => [
            [
                'key' => [
                    'year' => '0000',
                    'code' => '2407',
                ],
                'name' => '2024年入会特典グッズ　ホームベース型珪藻土マット',
                'point' => 5000,
                'amount' => 0,
                'delivFee' => 1500,
                'description' => null,
                'order' => 14,
                'maxNumOfExchange' => 5,
                'cannotSelectOtherAtSameTime' => false,
                'stock' => 1003,
            ],
            [
                'key' => [
                    'year' => '0000',
                    'code' => '2410',
                ],
                'name' => '2024年入会特典グッズ　ラウンドショルダーバッグ',
                'point' => 2000,
                'amount' => 0,
                'delivFee' => 1500,
                'description' => null,
                'order' => 14,
                'maxNumOfExchange' => 5,
                'cannotSelectOtherAtSameTime' => false,
                'stock' => 1123,
            ],
        ],
        'savingPoint' => 4713,
        'responceMessages' => [],
    ]);
});

Route::get('/mix/api/FmaMemberMission', function () {
    return '{"csrfToken":"15e63479-4aae-4ffb-8aa8-b6ac47fb8ad5","httpStatus":"OK","missionGroupList":[{"missionGroupId":"8","title":"2024年6月ミッション","detail":"<complete>全クリアで100MptとMコレ限定トレカをプレゼント！</complete>","type":"0","startDate":"20250101","endDate":"20251230","isComplete":false,"missionList":[{"missionId":"35","title":"期間中のZOZOマリンスタジアムでの飲食購入金額が3,000円(税込)以上","detail":"・ZOZOマリンスタジアム外周キッチンカー\r\n・ZOZOマリンスタジアム内飲食店\r\n※モバイルオーダー対象店舗「gateside DINER」含む\r\n・ZOZOマリンスタジアム内飲食ワゴン\r\n※飲食購入時にTEAM26会員証の提示が必ず必要となります。\r\n※上記記載の飲食売店の合算値でカウントします。（一部対象外の店舗がございます。予めご了承ください）\r\n※売り子販売は対象外となります。\r\n※値引きや割引後の税込価格、期間内の合算値でカウントします。\r\n※最新ステータスは翌々日以降に反映されます。\r\n※モバイルオーダー対象店舗「gateside DINER」については、2週間後以降に反映されます。","threshold":3000,"isComplete":false},{"missionId":"36","title":"期間中のマリーンズストアでのグッズ購入金額が7,000円(税込)以上","detail":"・マリーンズストア(海浜幕張駅前店/ミュージアム店/スタジアム店/メインエントランス店/サードベース店)が対象\r\n※グッズ購入時にTEAM26会員証の提示が必ず必要となります。\r\n※値引きや割引後の税込価格、期間内の合算値でカウントします。\r\n※上記記載のマリーンズストアの合算値でカウントします。\r\n※マリーンズオンラインストアでの購入は対象外となります。\r\n※最新ステータスは翌々日以降に反映されます。","threshold":7000,"isComplete":false},{"missionId":"37","title":"期間中のマイページログイン回数が5回以上","detail":"・1日1回までのカウント\r\n・ブラウザもしくはMARINES APP経由でのログインが対象\r\n・最新ステータスは翌々日以降に反映","threshold":5,"isComplete":true},{"missionId":"38","title":"6月1日(土)～30日(日)期間での試合の来場が3回以上","detail":"・ZOZOマリンスタジアムでの開催試合が対象\r\n・以下いずれかによる来場登録が必須\r\n\r\n1．QRチケット画面からマリーンズID認証（入力）した上で、入場時にQRチケット読み取りを実施\r\n2．外周TEAM26ブースまたは場内TEAM26ブースで会員証（デジタル会員証含む）と当日の観戦チケットを提示\r\n3．マリーンズストアスタジアム店・サードベース店でのグッズ購入時に会員証を提示　※球場外周のマリーンズストアや球場内ワゴンなど一部店舗は来場登録の対象外\r\n4．ZOZOマリンスタジアム内飲食店での飲食購入時に会員証を提示　※売り子販売は対象外\r\n・最新ステータスは翌々日以降に反映","threshold":3,"isComplete":false}]},{"missionGroupId":"6","title":"2024年4月ミッション","detail":"<complete>全クリアで100MptとMコレ限定トレカをプレゼント！</complete>","type":"0","startDate":"20240404","endDate":"20240430","isComplete":false,"missionList":[{"missionId":"26","title":"期間中のZOZOマリンスタジアムでの飲食購入金額が2,000円(税込)以上","detail":"・ZOZOマリンスタジアム外周キッチンカー\r\n・ZOZOマリンスタジアム内飲食店\r\n※モバイルオーダー対象店舗「gateside DINER」含む\r\n・ZOZOマリンスタジアム内飲食ワゴン\r\n※飲食購入時にTEAM26会員証の提示が必ず必要となります。\r\n※上記記載の飲食売店の合算値でカウントします。（一部対象外の店舗がございます。予めご了承ください）\r\n※売り子販売は対象外となります。\r\n※値引きや割引後の税込価格、期間内の合算値でカウントします。\r\n※最新ステータスは翌々日以降に反映されます。\r\n※モバイルオーダー対象店舗「gateside DINER」については、2週間後以降に反映されます。","threshold":2000,"isComplete":false},{"missionId":"27","title":"期間中のマリーンズストアでのグッズ購入金額が5,000円(税込)以上","detail":"・マリーンズストア(海浜幕張駅前店/ミュージアム店/スタジアム店/メインエントランス店/サードベース店)が対象\r\n※グッズ購入時にTEAM26会員証の提示が必ず必要となります。\r\n※値引きや割引後の税込価格、期間内の合算値でカウントします。\r\n※上記記載のマリーンズストアの合算値でカウントします。\r\n※マリーンズオンラインストアでの購入は対象外となります。\r\n※最新ステータスは翌々日以降に反映されます。","threshold":5000,"isComplete":false},{"missionId":"28","title":"お気に入り選手登録を1選手以上","detail":"・マイページ内、「会員情報」から「お気に入り選手登録」から1選手以上の登録をした方が対象\r\n・2024年度内で1度でも登録していたらクリア対象\r\n・最新ステータスは翌々日以降に反映","threshold":1,"isComplete":true},{"missionId":"29","title":"期間中のマイページログイン回数が5回以上","detail":"・1日1回までのカウント\r\n・ブラウザもしくはMARINES APP経由でのログインが対象\r\n・最新ステータスは翌々日以降に反映","threshold":5,"isComplete":true},{"missionId":"30","title":"4月5日(金)～29日(月・祝)期間での試合の来場が3回以上","detail":"・ZOZOマリンスタジアムでの開催試合が対象\r\n・以下いずれかによる来場登録が必須\r\n\r\n1．QRチケット画面からマリーンズID認証（入力）した上で、入場時にQRチケット読み取りを実施\r\n2．外周TEAM26ブースまたは場内TEAM26ブースで会員証（デジタル会員証含む）と当日の観戦チケットを提示\r\n3．マリーンズストアスタジアム店・サードベース店でのグッズ購入時に会員証を提示　※球場外周のマリーンズストアや球場内ワゴンなど一部店舗は来場登録の対象外\r\n4．ZOZOマリンスタジアム内飲食店での飲食購入時に会員証を提示　※売り子販売は対象外\r\n・最新ステータスは翌々日以降に反映","threshold":3,"isComplete":false}]},{"missionGroupId":"7","title":"2024年5月ミッション","detail":"<complete>全クリアで100MptとMコレ限定トレカをプレゼント！</complete>","type":"0","startDate":"20240501","endDate":"20240531","isComplete":false,"missionList":[{"missionId":"31","title":"期間中のZOZOマリンスタジアムでの飲食購入金額が3,000円(税込)以上","detail":"・ZOZOマリンスタジアム外周キッチンカー\r\n・ZOZOマリンスタジアム内飲食店\r\n※モバイルオーダー対象店舗「gateside DINER」含む\r\n・ZOZOマリンスタジアム内飲食ワゴン\r\n※飲食購入時にTEAM26会員証の提示が必ず必要となります。\r\n※上記記載の飲食売店の合算値でカウントします。（一部対象外の店舗がございます。予めご了承ください）\r\n※売り子販売は対象外となります。\r\n※値引きや割引後の税込価格、期間内の合算値でカウントします。\r\n※最新ステータスは翌々日以降に反映されます。\r\n※モバイルオーダー対象店舗「gateside DINER」については、2週間後以降に反映されます。","threshold":3000,"isComplete":false},{"missionId":"32","title":"期間中のマリーンズストアでのグッズ購入金額が6,000円(税込)以上","detail":"・マリーンズストア(海浜幕張駅前店/ミュージアム店/スタジアム店/メインエントランス店/サードベース店)が対象\r\n※グッズ購入時にTEAM26会員証の提示が必ず必要となります。\r\n※値引きや割引後の税込価格、期間内の合算値でカウントします。\r\n※上記記載のマリーンズストアの合算値でカウントします。\r\n※マリーンズオンラインストアでの購入は対象外となります。\r\n※最新ステータスは翌々日以降に反映されます。","threshold":6000,"isComplete":false},{"missionId":"33","title":"期間中のマイページログイン回数が5回以上","detail":"・1日1回までのカウント\r\n・ブラウザもしくはMARINES APP経由でのログインが対象\r\n・最新ステータスは翌々日以降に反映","threshold":5,"isComplete":true},{"missionId":"34","title":"5月6日(月・祝)～31日(金)期間での試合の来場が3回以上","detail":"・ZOZOマリンスタジアムでの開催試合が対象\r\n・以下いずれかによる来場登録が必須\r\n\r\n1．QRチケット画面からマリーンズID認証（入力）した上で、入場時にQRチケット読み取りを実施\r\n2．外周TEAM26ブースまたは場内TEAM26ブースで会員証（デジタル会員証含む）と当日の観戦チケットを提示\r\n3．マリーンズストアスタジアム店・サードベース店でのグッズ購入時に会員証を提示　※球場外周のマリーンズストアや球場内ワゴンなど一部店舗は来場登録の対象外\r\n4．ZOZOマリンスタジアム内飲食店での飲食購入時に会員証を提示　※売り子販売は対象外\r\n・最新ステータスは翌々日以降に反映","threshold":3,"isComplete":false}]},{"missionGroupId":"9","title":"2024年7月ミッション","detail":"<complete>全クリアで100MptとMコレ限定トレカをプレゼント！</complete>","type":"0","startDate":"20240701","endDate":"20240731","isComplete":false,"missionList":[{"missionId":"39","title":"期間中のZOZOマリンスタジアムでの飲食購入金額が4,500円(税込)以上","detail":"・ZOZOマリンスタジアム外周キッチンカー\r\n・ZOZOマリンスタジアム内飲食店\r\n※モバイルオーダー対象店舗「gateside DINER」含む\r\n・ZOZOマリンスタジアム内飲食ワゴン\r\n※飲食購入時にTEAM26会員証の提示が必ず必要となります。\r\n※上記記載の飲食売店の合算値でカウントします。（一部対象外の店舗がございます。予めご了承ください）\r\n※売り子販売は対象外となります。\r\n※値引きや割引後の税込価格、期間内の合算値でカウントします。\r\n※最新ステータスは翌々日以降に反映されます。\r\n※モバイルオーダー対象店舗「gateside DINER」については、2週間後以降に反映されます。","threshold":4500,"isComplete":false},{"missionId":"40","title":"期間中のマリーンズストアでのグッズ購入金額が9,000円(税込)以上","detail":"・マリーンズストア(海浜幕張駅前店/ミュージアム店/スタジアム店/メインエントランス店/サードベース店)が対象\r\n※グッズ購入時にTEAM26会員証の提示が必ず必要となります。\r\n※値引きや割引後の税込価格、期間内の合算値でカウントします。\r\n※上記記載のマリーンズストアの合算値でカウントします。\r\n※マリーンズオンラインストアでの購入は対象外となります。\r\n※最新ステータスは翌々日以降に反映されます。","threshold":9000,"isComplete":false},{"missionId":"41","title":"期間中のマイページログイン回数が5回以上","detail":"・1日1回までのカウント\r\n・ブラウザもしくはMARINES APP経由でのログインが対象\r\n・最新ステータスは翌々日以降に反映","threshold":5,"isComplete":true},{"missionId":"42","title":"7月1日(月)～31日(水)期間での試合の来場が3回以上","detail":"・ZOZOマリンスタジアムでの開催試合が対象\r\n・以下いずれかによる来場登録が必須\r\n\r\n1．QRチケット画面からマリーンズID認証（入力）した上で、入場時にQRチケット読み取りを実施\r\n2．外周TEAM26ブースまたは場内TEAM26ブースで会員証（デジタル会員証含む）と当日の観戦チケットを提示\r\n3．マリーンズストアスタジアム店・サードベース店でのグッズ購入時に会員証を提示　※球場外周のマリーンズストアや球場内ワゴンなど一部店舗は来場登録の対象外\r\n4．ZOZOマリンスタジアム内飲食店での飲食購入時に会員証を提示　※売り子販売は対象外\r\n・最新ステータスは翌々日以降に反映","threshold":3,"isComplete":false}]},{"missionGroupId":"11","title":"2024年9月ミッション","detail":"<complete>全クリアで100MptとMコレ限定トレカをプレゼント！</complete>","type":"0","startDate":"20240901","endDate":"20240930","isComplete":false,"missionList":[{"missionId":"47","title":"期間中のZOZOマリンスタジアムでの飲食購入金額が4,500円(税込)以上","detail":"・ZOZOマリンスタジアム外周キッチンカー\r\n・ZOZOマリンスタジアム内飲食店\r\n※モバイルオーダー対象店舗「gateside DINER」含む\r\n・ZOZOマリンスタジアム内飲食ワゴン\r\n※飲食購入時にTEAM26会員証の提示が必ず必要となります。\r\n※上記記載の飲食売店の合算値でカウントします。（一部対象外の店舗がございます。予めご了承ください）\r\n※売り子販売は対象外となります。\r\n※値引きや割引後の税込価格、期間内の合算値でカウントします。\r\n※最新ステータスは翌々日以降に反映されます。\r\n※モバイルオーダー対象店舗「gateside DINER」については、2週間後以降に反映されます。","threshold":4500,"isComplete":false},{"missionId":"48","title":"期間中のマリーンズストアでのグッズ購入金額が9,000円(税込)以上","detail":"・マリーンズストア(海浜幕張駅前店/ミュージアム店/スタジアム店/メインエントランス店/サードベース店)が対象\r\n※グッズ購入時にTEAM26会員証の提示が必ず必要となります。\r\n※値引きや割引後の税込価格、期間内の合算値でカウントします。\r\n※上記記載のマリーンズストアの合算値でカウントします。\r\n※マリーンズオンラインストアでの購入は対象外となります。\r\n※最新ステータスは翌々日以降に反映されます。","threshold":9000,"isComplete":false},{"missionId":"49","title":"期間中のマイページログイン回数が5回以上","detail":"・1日1回までのカウント\r\n・ブラウザもしくはMARINES APP経由でのログインが対象\r\n・最新ステータスは翌々日以降に反映","threshold":5,"isComplete":true},{"missionId":"50","title":"9月1日(日)～30日(月)期間での試合の来場が3回以上","detail":"・ZOZOマリンスタジアムでの開催試合が対象\r\n・以下いずれかによる来場登録が必須\r\n\r\n1．QRチケット画面からマリーンズID認証（入力）した上で、入場時にQRチケット読み取りを実施\r\n2．外周TEAM26ブースまたは場内TEAM26ブースで会員証（デジタル会員証含む）と当日の観戦チケットを提示\r\n3．マリーンズストアスタジアム店・サードベース店でのグッズ購入時に会員証を提示　※球場外周のマリーンズストアや球場内ワゴンなど一部店舗は来場登録の対象外\r\n4．ZOZOマリンスタジアム内飲食店での飲食購入時に会員証を提示　※売り子販売は対象外\r\n・最新ステータスは翌々日以降に反映","threshold":3,"isComplete":false}]},{"missionGroupId":"5","title":"2024年3月ミッション","detail":"<complete>全クリアで100Mpt、抽選で限定グッズが当たる！</complete>\r\n\r\n抽選で1名様に選手サイン入りボールをプレゼント","type":"0","startDate":"20240301","endDate":"20240331","isComplete":false,"missionList":[{"missionId":"22","title":"期間中のマイページログイン回数が5回以上","detail":"・1日1回までのカウント\r\n・ブラウザもしくはMARINES APP経由でのログインが対象\r\n・最新ステータスは翌々日以降に反映","threshold":5,"isComplete":true},{"missionId":"23","title":"お気に入り選手登録を1選手以上","detail":"・マイページ内、「会員情報」から「お気に入り選手登録」から1選手以上の登録をした方が対象\r\n・2024年度内で1度でも登録していたらクリア対象\r\n・最新ステータスは翌日以降に反映","threshold":1,"isComplete":true},{"missionId":"24","title":"期間中のZOZOマリンスタジアムでのグッズ購入金額が3,000円以上","detail":"・グッズ購入時にTEAM26会員証の提示が必須\r\n・値引きや割引後の税込価格、期間内の合算値でカウント\r\n・ZOZOマリンスタジアム内グッズ売店、海浜幕張駅店の合算値でカウント\r\n・マリーンズオンラインストアでの購入は対象外\r\n・最新ステータスは翌日以降に反映","threshold":3000,"isComplete":false},{"missionId":"25","title":"期間中のZOZOマリンスタジアムでの飲食購入金額が1,500円以上","detail":"・飲食購入時にTEAM26会員証の提示が必須\r\n・場内店舗・外周店舗・スポット販売店舗の合算値でカウント\r\n・売り子販売は対象外\r\n・値引きや割引後の税込価格、期間内の合算値でカウント\r\n・最新ステータスは翌日以降に反映","threshold":1500,"isComplete":false}]},{"missionGroupId":"10","title":"2024年8月ミッション","detail":"<complete>全クリアで100MptとMコレ限定トレカをプレゼント！</complete>","type":"0","startDate":"20240801","endDate":"20240831","isComplete":false,"missionList":[{"missionId":"43","title":"期間中のZOZOマリンスタジアムでの飲食購入金額が4,500円(税込)以上","detail":"・ZOZOマリンスタジアム外周キッチンカー\r\n・ZOZOマリンスタジアム内飲食店\r\n※モバイルオーダー対象店舗「gateside DINER」含む\r\n・ZOZOマリンスタジアム内飲食ワゴン\r\n※飲食購入時にTEAM26会員証の提示が必ず必要となります。\r\n※上記記載の飲食売店の合算値でカウントします。（一部対象外の店舗がございます。予めご了承ください）\r\n※売り子販売は対象外となります。\r\n※値引きや割引後の税込価格、期間内の合算値でカウントします。\r\n※最新ステータスは翌々日以降に反映されます。\r\n※モバイルオーダー対象店舗「gateside DINER」については、2週間後以降に反映されます。","threshold":4500,"isComplete":false},{"missionId":"44","title":"期間中のマリーンズストアでのグッズ購入金額が12,000円(税込)以上","detail":"・マリーンズストア(海浜幕張駅前店/ミュージアム店/スタジアム店/メインエントランス店/サードベース店)が対象\r\n※グッズ購入時にTEAM26会員証の提示が必ず必要となります。\r\n※値引きや割引後の税込価格、期間内の合算値でカウントします。\r\n※上記記載のマリーンズストアの合算値でカウントします。\r\n※マリーンズオンラインストアでの購入は対象外となります。\r\n※最新ステータスは翌々日以降に反映されます。","threshold":12000,"isComplete":false},{"missionId":"45","title":"期間中のマイページログイン回数が5回以上","detail":"・1日1回までのカウント\r\n・ブラウザもしくはMARINES APP経由でのログインが対象\r\n・最新ステータスは翌々日以降に反映","threshold":5,"isComplete":true},{"missionId":"46","title":"8月1日(木)～31日(土)期間での試合の来場が4回以上","detail":"・ZOZOマリンスタジアムでの開催試合が対象\r\n・以下いずれかによる来場登録が必須\r\n\r\n1．QRチケット画面からマリーンズID認証（入力）した上で、入場時にQRチケット読み取りを実施\r\n2．外周TEAM26ブースまたは場内TEAM26ブースで会員証（デジタル会員証含む）と当日の観戦チケットを提示\r\n3．マリーンズストアスタジアム店・サードベース店でのグッズ購入時に会員証を提示　※球場外周のマリーンズストアや球場内ワゴンなど一部店舗は来場登録の対象外\r\n4．ZOZOマリンスタジアム内飲食店での飲食購入時に会員証を提示　※売り子販売は対象外\r\n・最新ステータスは翌々日以降に反映","threshold":4,"isComplete":false}]},{"missionGroupId":"12","title":"2024年10月ミッション","detail":"<complete>全クリアで100MptとMコレ限定トレカをプレゼント！</complete>","type":"1","startDate":"20250101","endDate":"20251231","isComplete":false,"missionList":[{"missionId":"51","title":"期間中のマイページログイン回数が5回以上","detail":"・1日1回までのカウント\r\n・ブラウザもしくはMARINES APP経由でのログインが対象\r\n・最新ステータスは翌々日以降に反映","threshold":5,"isComplete":true},{"missionId":"53","title":"お気に入り選手登録を1名以上","detail":"・マイページ内、「会員情報」から「お気に入り選手登録」から1選手以上の登録をした方が対象\r\n・2024年度内で1度でも登録していたらクリア対象\r\n・最新ステータスは翌日以降に反映","threshold":1,"isComplete":true},{"missionId":"52","title":"期間中のマリーンズストアでのグッズ購入金額が3,000円(税込)以上","detail":"・マリーンズストア(海浜幕張駅前店/ミュージアム店/スタジアム店/メインエントランス店/サードベース店)が対象\r\n※グッズ購入時にTEAM26会員証の提示が必ず必要となります。\r\n※値引きや割引後の税込価格、期間内の合算値でカウントします。\r\n※上記記載のマリーンズストアの合算値でカウントします。\r\n※マリーンズオンラインストアでの購入は対象外となります。\r\n※最新ステータスは翌々日以降に反映されます。","threshold":3000,"isComplete":false}]}],"responceMessages":[]}';
});