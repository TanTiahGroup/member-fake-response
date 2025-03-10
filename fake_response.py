from mitmproxy import http
import json

def request(flow: http.HTTPFlow) -> None:
    # Fake response cho game_schedule
 from mitmproxy import http
import json

def response(flow: http.HTTPFlow) -> None:
    if "http://cms-api.pacific-league.jp/api/game_schedule/?team=1992001&year=2027" in flow.request.pretty_url:
        fake_data = [
            {
                "gameCode": "32680",
                "gameDate": "2025-03-04",
                "gameTime": "14:00:00",
                "gameNum": 1,
                "gameKind": 5,
                "gameLeague": "",
                "gameStadiumCode": "047016",
                "gameStadiumName": "北谷",
                "homeTeamCode": 2012001,
                "homeTeamName": "中日ドラゴンズ",
                "visitorTeamCode": 1992001,
                "visitorTeamName": "千葉ロッテマリーンズ",
                "visitorStartingPitcher": {},
                "homeStartingPitcher": {},
                "wether": "",
                "temperature": None,
                "wind": ""
            },
            {
                "gameCode": "32686",
                "gameDate": "2025-03-06",
                "gameTime": "13:00:00",
                "gameNum": 1,
                "gameKind": 5,
                "gameLeague": "",
                "gameStadiumCode": "047010",
                "gameStadiumName": "那覇",
                "homeTeamCode": 1992001,
                "homeTeamName": "読売ジャイアンツ",
                "visitorTeamCode": 1968001,
                "visitorTeamName": "千葉ロッテマリーンズ",
                "visitorStartingPitcher": {},
                "homeStartingPitcher": {},
                "wether": "",
                "temperature": None,
                "wind": ""
            },
             {
                "gameCode": "32686",
                "gameDate": "2025-03-07",
                "gameTime": "13:00:00",
                "gameNum": 1,
                "gameKind": 5,
                "gameLeague": "",
                "gameStadiumCode": "047010",
                "gameStadiumName": "那覇",
                "homeTeamCode": 1992001,
                "homeTeamName": "読売ジャイアンツ",
                "visitorTeamCode": 2005001,
                "visitorTeamName": "千葉ロッテマリーンズ",
                "visitorStartingPitcher": {},
                "homeStartingPitcher": {},
                "wether": "",
                "temperature": None,
                "wind": ""
            },
            {
                "gameCode": "32686",
                "gameDate": "2025-03-08",
                "gameTime": "13:00:00",
                "gameNum": 1,
                "gameKind": 5,
                "gameLeague": "",
                "gameStadiumCode": "047010",
                "gameStadiumName": "那覇",
                "homeTeamCode": 1992001,
                "homeTeamName": "読売ジャイアンツ",
                "visitorTeamCode": 2005001,
                "visitorTeamName": "千葉ロッテマリーンズ",
                "visitorStartingPitcher": {},
                "homeStartingPitcher": {},
                "wether": "",
                "temperature": None,
                "wind": ""
            },
             {
                "gameCode": "32686",
                "gameDate": "2025-03-09",
                "gameTime": "13:00:00",
                "gameNum": 1,
                "gameKind": 5,
                "gameLeague": "",
                "gameStadiumCode": "047010",
                "gameStadiumName": "那覇",
                "homeTeamCode": 1992001,
                "homeTeamName": "読売ジャイアンツ",
                "visitorTeamCode": 2005001,
                "visitorTeamName": "千葉ロッテマリーンズ",
                "visitorStartingPitcher": {},
                "homeStartingPitcher": {},
                "wether": "",
                "temperature": None,
                "wind": ""
            },
            {
                "gameCode": "32686",
                "gameDate": "2025-03-11",
                "gameTime": "13:00:00",
                "gameNum": 1,
                "gameKind": 5,
                "gameLeague": "",
                "gameStadiumCode": "047010",
                "gameStadiumName": "那覇",
                "homeTeamCode": 1992001,
                "homeTeamName": "読売ジャイアンツ",
                "visitorTeamCode": 2004001,
                "visitorTeamName": "千葉ロッテマリーンズ",
                "visitorStartingPitcher": {},
                "homeStartingPitcher": {},
                "wether": "",
                "temperature": None,
                "wind": ""
            },
             {
                "gameCode": "32686",
                "gameDate": "2025-03-12",
                "gameTime": "13:00:00",
                "gameNum": 1,
                "gameKind": 5,
                "gameLeague": "",
                "gameStadiumCode": "047010",
                "gameStadiumName": "那覇",
                "homeTeamCode": 1992001,
                "homeTeamName": "読売ジャイアンツ",
                "visitorTeamCode": 2004001,
                "visitorTeamName": "千葉ロッテマリーンズ",
                "visitorStartingPitcher": {},
                "homeStartingPitcher": {},
                "wether": "",
                "temperature": None,
                "wind": ""
            },
              {
                "gameCode": "32686",
                "gameDate": "2025-03-14",
                "gameTime": "13:00:00",
                "gameNum": 1,
                "gameKind": 5,
                "gameLeague": "",
                "gameStadiumCode": "047010",
                "gameStadiumName": "那覇",
                "homeTeamCode": 1968001,
                "homeTeamName": "読売ジャイアンツ",
                "visitorTeamCode": 1992001,
                "visitorTeamName": "千葉ロッテマリーンズ",
                "visitorStartingPitcher": {},
                "homeStartingPitcher": {},
                "wether": "",
                "temperature": None,
                "wind": ""
            },
              {
                "gameCode": "32686",
                "gameDate": "2025-03-15",
                "gameTime": "13:00:00",
                "gameNum": 1,
                "gameKind": 5,
                "gameLeague": "",
                "gameStadiumCode": "047010",
                "gameStadiumName": "那覇",
                "homeTeamCode": 1968001,
                "homeTeamName": "読売ジャイアンツ",
                "visitorTeamCode": 1992001,
                "visitorTeamName": "千葉ロッテマリーンズ",
                "visitorStartingPitcher": {},
                "homeStartingPitcher": {},
                "wether": "",
                "temperature": None,
                "wind": ""
            },
             {
                "gameCode": "32686",
                "gameDate": "2025-03-16",
                "gameTime": "13:00:00",
                "gameNum": 1,
                "gameKind": 5,
                "gameLeague": "",
                "gameStadiumCode": "047010",
                "gameStadiumName": "那覇",
                "homeTeamCode": 1968001,
                "homeTeamName": "読売ジャイアンツ",
                "visitorTeamCode": 1992001,
                "visitorTeamName": "千葉ロッテマリーンズ",
                "visitorStartingPitcher": {},
                "homeStartingPitcher": {},
                "wether": "",
                "temperature": None,
                "wind": ""
            },
             {
                "gameCode": "32686",
                "gameDate": "2025-03-18",
                "gameTime": "13:00:00",
                "gameNum": 1,
                "gameKind": 5,
                "gameLeague": "",
                "gameStadiumCode": "047010",
                "gameStadiumName": "那覇",
                "homeTeamCode": 1992001,
                "homeTeamName": "読売ジャイアンツ",
                "visitorTeamCode": 2005003,
                "visitorTeamName": "千葉ロッテマリーンズ",
                "visitorStartingPitcher": {},
                "homeStartingPitcher": {},
                "wether": "",
                "temperature": None,
                "wind": ""
            },
            {
                "gameCode": "32686",
                "gameDate": "2025-03-19",
                "gameTime": "13:00:00",
                "gameNum": 1,
                "gameKind": 5,
                "gameLeague": "",
                "gameStadiumCode": "047010",
                "gameStadiumName": "那覇",
                "homeTeamCode": 1992001,
                "homeTeamName": "読売ジャイアンツ",
                "visitorTeamCode": 2005003,
                "visitorTeamName": "千葉ロッテマリーンズ",
                "visitorStartingPitcher": {},
                "homeStartingPitcher": {},
                "wether": "",
                "temperature": None,
                "wind": ""
            }
        ]

        flow.response = http.Response.make(
            200,  # HTTP Status Code
            json.dumps(fake_data),  # Fake JSON response
            {"Content-Type": "application/json"}  # Response Headers
        )

    
    # Fake response cho news
    elif "http://cms-api.pacific-league.jp/api/news/?team=1992001" in flow.request.pretty_url:
        fake_data = [
            {
                "newsDate": "2025/3/30",
                "newsUrl": "https://www.marines.co.jp/news/detail/202500587475.html?_gl=1*5l01ek*_ga*MTAzOTE1ODg1My4xNzI5MTM3Mjc2*_ga_VDEHFZZJD4*MTczNzEwMDY5Ny4xNjEuMS4xNzM3MTAwOTI4LjYwLjAuMA..",
                "newsTitle": "ドキュメンタリー映画公開記念【入場者プレゼント】＜第2弾＞",
                "newsCategory": "アカデミー",
            },
            {
                "newsDate": "2025/3/30",
                "newsUrl": "https://www.marines.co.jp/news/detail/202500587475.html?_gl=1*5l01ek*_ga*MTAzOTE1ODg1My4xNzI5MTM3Mjc2*_ga_VDEHFZZJD4*MTczNzEwMDY5Ny4xNjEuMS4xNzM3MTAwOTI4LjYwLjAuMA..",
                "newsTitle": "【オンラインストア限定】1/17(金)2025ユニホームデザイン全選手展開グッズ受注販売開始",
                "newsCategory": "グッズ",
            },
                   {
                "newsDate": "2025/3/30",
                "newsUrl": "https://www.marines.co.jp/news/detail/202500587475.html?_gl=1*5l01ek*_ga*MTAzOTE1ODg1My4xNzI5MTM3Mjc2*_ga_VDEHFZZJD4*MTczNzEwMDY5Ny4xNjEuMS4xNzM3MTAwOTI4LjYwLjAuMA..",
                "newsTitle": "2025シーズン「パーソル パ・リーグ公式戦」開催球場・試合開始時間入り詳細日程発表",
                "newsCategory": "チーム",
            }
        ]  # Dữ liệu giả cho game_schedule
        flow.response = http.Response.make(
            200,  # Mã HTTP status code
            json.dumps(fake_data),  # Dữ liệu JSON giả
            {"Content-Type": "application/json"}  # Header Content-Type
        )