<?php
	
	class kanjiDeck {
	
		//protected $cards = [];
		//protected $groups = [];
		
		//187
		//153
	
		public function __construct() {
			$this->cards = array(
		   			array (
				            "id" => "1",
				            "kanji" => "一",
				            "Striche" => "1",
				            "DE" => "eins",
				            "onyomi" => "イチ/イツ",
				            "kunyomi" => "ひと•つ",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array(
				            "id" => "2",
				            "kanji" => "二",
				            "Striche" => "2",
				            "DE" => "zwei",
				            "onyomi" => "ニ",
				            "kunyomi" => "ふた•つ",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "3",
				            "kanji" => "三",
				            "Striche" => "3",
				            "DE" => "drei",
				            "onyomi" => "サン",
				            "kunyomi" => "みっ•つ",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "4",
				            "kanji" => "四",
				            "Striche" => "5",
				            "DE" => "vier",
				            "onyomi" => "シ",
				            "kunyomi" => "よっ•つ",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "5",
				            "kanji" => "五",
				            "Striche" => "4",
				            "DE" => "fünf",
				            "onyomi" => "ゴ",
				            "kunyomi" => "いつ•つ",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "6",
				            "kanji" => "六",
				            "Striche" => "4",
				            "DE" => "sechs",
				            "onyomi" => "ロク",
				            "kunyomi" => "むっ•つ",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "7",
				            "kanji" => "七",
				            "Striche" => "2",
				            "DE" => "sieben",
				            "onyomi" => "シチ",
				            "kunyomi" => "なな•つ",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "8",
				            "kanji" => "八",
				            "Striche" => "2",
				            "DE" => "acht",
				            "onyomi" => "ハチ",
				            "kunyomi" => "やっ•つ",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "9",
				            "kanji" => "九",
				            "Striche" => "2",
				            "DE" => "neun",
				            "onyomi" => "キュウ/ク",
				            "kunyomi" => "ここの•つ",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "10",
				            "kanji" => "十",
				            "Striche" => "2",
				            "DE" => "zehn",
				            "onyomi" => "ジュウ/ジッ",
				            "kunyomi" => "とお",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "11",
				            "kanji" => "百",
				            "Striche" => "6",
				            "DE" => "hundert",
				            "onyomi" => "hyaku",
				            "kunyomi" => "momo",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "12",
				            "kanji" => "千",
				            "Striche" => "3",
				            "DE" => "tausend",
				            "onyomi" => "sen",
				            "kunyomi" => "chi",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "13",
				            "kanji" => "上",
				            "Striche" => "3",
				            "DE" => "oben",
				            "onyomi" => "jō",
				            "kunyomi" => "ue, kami, a-geru",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "14",
				            "kanji" => "下",
				            "Striche" => "3",
				            "DE" => "unten",
				            "onyomi" => "ka, ge",
				            "kunyomi" => "shita, sa-geru, kuda-saru",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "15",
				            "kanji" => "左",
				            "Striche" => "5",
				            "DE" => "links",
				            "onyomi" => "サ",
				            "kunyomi" => "ひだり",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "16",
				            "kanji" => "右",
				            "Striche" => "5",
				            "DE" => "rechts",
				            "onyomi" => "u, yū",
				            "kunyomi" => "migi",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "17",
				            "kanji" => "中",
				            "Striche" => "4",
				            "DE" => "innen, Mitte",
				            "onyomi" => "chū, jū",
				            "kunyomi" => "naka",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "18",
				            "kanji" => "大",
				            "Striche" => "3",
				            "DE" => "groß",
				            "onyomi" => "dai, tai",
				            "kunyomi" => "ō-kii",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "19",
				            "kanji" => "小",
				            "Striche" => "3",
				            "DE" => "klein",
				            "onyomi" => "shō",
				            "kunyomi" => "chii-sai, ko, o",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "20",
				            "kanji" => "月",
				            "Striche" => "4",
				            "DE" => "Monat; Mond",
				            "onyomi" => "gatsu, getsu",
				            "kunyomi" => "tsuki",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "21",
				            "kanji" => "日",
				            "Striche" => "4",
				            "DE" => "Tag; Sonne",
				            "onyomi" => "ニチ/ジツ",
				            "kunyomi" => "ひ",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "22",
				            "kanji" => "年",
				            "Striche" => "6",
				            "DE" => "Jahr",
				            "onyomi" => "nen",
				            "kunyomi" => "toshi",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "23",
				            "kanji" => "早",
				            "Striche" => "6",
				            "DE" => "früh; schnell",
				            "onyomi" => "sō, satsu",
				            "kunyomi" => "haya-i",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "24",
				            "kanji" => "木",
				            "Striche" => "4",
				            "DE" => "Baum; Holz",
				            "onyomi" => "moku, boku",
				            "kunyomi" => "ki",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "25",
				            "kanji" => "林",
				            "Striche" => "7",
				            "DE" => "Hain, Forst",
				            "onyomi" => "rin",
				            "kunyomi" => "hayashi",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "26",
				            "kanji" => "山",
				            "Striche" => "3",
				            "DE" => "Berg",
				            "onyomi" => "san, zan",
				            "kunyomi" => "yama",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "27",
				            "kanji" => "川",
				            "Striche" => "3",
				            "DE" => "Fluss",
				            "onyomi" => "sen",
				            "kunyomi" => "kawa",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "28",
				            "kanji" => "土",
				            "Striche" => "3",
				            "DE" => "Erde",
				            "onyomi" => "do, to",
				            "kunyomi" => "tsuchi",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "29",
				            "kanji" => "空",
				            "Striche" => "8",
				            "DE" => "Himmel (vgl. sky),",
				            "onyomi" => "kū",
				            "kunyomi" => "sora, a-ku, kara",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "30",
				            "kanji" => "田",
				            "Striche" => "5",
				            "DE" => "Reisfeld",
				            "onyomi" => "den",
				            "kunyomi" => "da, ta",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "31",
				            "kanji" => "天",
				            "Striche" => "4",
				            "DE" => "Himmel (vgl. heaven),",
				            "onyomi" => "ten",
				            "kunyomi" => "ame, ama",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "32",
				            "kanji" => "生",
				            "Striche" => "5",
				            "DE" => "Leben; roh",
				            "onyomi" => "sei, shō",
				            "kunyomi" => "i-kiru, u-mu, nama",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "33",
				            "kanji" => "花",
				            "Striche" => "7",
				            "DE" => "Blume",
				            "onyomi" => "ka",
				            "kunyomi" => "hana",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "34",
				            "kanji" => "草",
				            "Striche" => "9",
				            "DE" => "Gras",
				            "onyomi" => "sō",
				            "kunyomi" => "kusa",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "35",
				            "kanji" => "虫",
				            "Striche" => "6",
				            "DE" => "Insekt",
				            "onyomi" => "chū",
				            "kunyomi" => "mushi",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "36",
				            "kanji" => "犬",
				            "Striche" => "4",
				            "DE" => "Hund",
				            "onyomi" => "ken",
				            "kunyomi" => "inu",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "37",
				            "kanji" => "人",
				            "Striche" => "2",
				            "DE" => "Person, Mensch",
				            "onyomi" => "jin, nin",
				            "kunyomi" => "hito",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "38",
				            "kanji" => "名",
				            "Striche" => "6",
				            "DE" => "Name",
				            "onyomi" => "mei, myō",
				            "kunyomi" => "na",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "39",
				            "kanji" => "女",
				            "Striche" => "3",
				            "DE" => "Frau",
				            "onyomi" => "jo, nyo",
				            "kunyomi" => "on'na",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "40",
				            "kanji" => "男",
				            "Striche" => "7",
				            "DE" => "Mann",
				            "onyomi" => "dan, nan",
				            "kunyomi" => "otoko",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "41",
				            "kanji" => "子",
				            "Striche" => "3",
				            "DE" => "Kind",
				            "onyomi" => "shi, su",
				            "kunyomi" => "ko",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "42",
				            "kanji" => "目",
				            "Striche" => "5",
				            "DE" => "Auge",
				            "onyomi" => "moku",
				            "kunyomi" => "me",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "43",
				            "kanji" => "耳",
				            "Striche" => "6",
				            "DE" => "Ohr",
				            "onyomi" => "ji, ni",
				            "kunyomi" => "mimi",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "44",
				            "kanji" => "口",
				            "Striche" => "3",
				            "DE" => "Mund",
				            "onyomi" => "kō",
				            "kunyomi" => "kuchi",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "45",
				            "kanji" => "手",
				            "Striche" => "4",
				            "DE" => "Hand",
				            "onyomi" => "shu",
				            "kunyomi" => "te",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "46",
				            "kanji" => "足",
				            "Striche" => "7",
				            "DE" => "Fuß",
				            "onyomi" => "soku",
				            "kunyomi" => "ashi",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "47",
				            "kanji" => "見",
				            "Striche" => "7",
				            "DE" => "sehen",
				            "onyomi" => "ken, gen",
				            "kunyomi" => "mi-ru",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "48",
				            "kanji" => "音",
				            "Striche" => "9",
				            "DE" => "Ton, Geräusch",
				            "onyomi" => "on",
				            "kunyomi" => "ne, oto",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "49",
				            "kanji" => "力",
				            "Striche" => "2",
				            "DE" => "Kraft",
				            "onyomi" => "riki, ryoku",
				            "kunyomi" => "chikara",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "50",
				            "kanji" => "気",
				            "Striche" => "6",
				            "DE" => "Luft; Geist, Seele; Stimmung",
				            "onyomi" => "ki, ke",
				            "kunyomi" => "iki",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "51",
				            "kanji" => "円",
				            "Striche" => "4",
				            "DE" => "Yen; Kreis",
				            "onyomi" => "en",
				            "kunyomi" => "maru",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "52",
				            "kanji" => "入",
				            "Striche" => "2",
				            "DE" => "hineingehen",
				            "onyomi" => "nyū",
				            "kunyomi" => "hai-ru, i-ru",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "53",
				            "kanji" => "出",
				            "Striche" => "5",
				            "DE" => "herauskommen",
				            "onyomi" => "shutsu",
				            "kunyomi" => "de-ru",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "54",
				            "kanji" => "立",
				            "Striche" => "5",
				            "DE" => "aufstehen",
				            "onyomi" => "ritsu",
				            "kunyomi" => "ta-tsu",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "55",
				            "kanji" => "休",
				            "Striche" => "6",
				            "DE" => "ausruhen",
				            "onyomi" => "kyū",
				            "kunyomi" => "yasu-mu",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "56",
				            "kanji" => "先",
				            "Striche" => "6",
				            "DE" => "vorher; vorne",
				            "onyomi" => "sen",
				            "kunyomi" => "saki",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "57",
				            "kanji" => "夕",
				            "Striche" => "3",
				            "DE" => "Abend",
				            "onyomi" => "seki",
				            "kunyomi" => "yū",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "58",
				            "kanji" => "本",
				            "Striche" => "5",
				            "DE" => "Buch; Ursprung",
				            "onyomi" => "hon",
				            "kunyomi" => "moto",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "59",
				            "kanji" => "文",
				            "Striche" => "4",
				            "DE" => "Text",
				            "onyomi" => "bun, mon",
				            "kunyomi" => "fumi",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "60",
				            "kanji" => "字",
				            "Striche" => "6",
				            "DE" => "Schriftzeichen",
				            "onyomi" => "ji",
				            "kunyomi" => "aza",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "61",
				            "kanji" => "学",
				            "Striche" => "8",
				            "DE" => "lernen",
				            "onyomi" => "gaku",
				            "kunyomi" => "mana-bu",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "62",
				            "kanji" => "校",
				            "Striche" => "10",
				            "DE" => "Schule",
				            "onyomi" => "kō",
				            "kunyomi" => "",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "63",
				            "kanji" => "村",
				            "Striche" => "7",
				            "DE" => "Dorf",
				            "onyomi" => "son",
				            "kunyomi" => "mura",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "64",
				            "kanji" => "町",
				            "Striche" => "7",
				            "DE" => "Stadt",
				            "onyomi" => "chō",
				            "kunyomi" => "machi",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "65",
				            "kanji" => "森",
				            "Striche" => "11",
				            "DE" => "Wald",
				            "onyomi" => "shin",
				            "kunyomi" => "mori",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "66",
				            "kanji" => "正",
				            "Striche" => "5",
				            "DE" => "richtig, gerecht",
				            "onyomi" => "sei, shō",
				            "kunyomi" => "tada-shii, masa",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "67",
				            "kanji" => "水",
				            "Striche" => "4",
				            "DE" => "Wasser",
				            "onyomi" => "sui",
				            "kunyomi" => "mizu",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "68",
				            "kanji" => "火",
				            "Striche" => "4",
				            "DE" => "Feuer",
				            "onyomi" => "ka",
				            "kunyomi" => "hi",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "69",
				            "kanji" => "玉",
				            "Striche" => "5",
				            "DE" => "Edelstein",
				            "onyomi" => "gyoku",
				            "kunyomi" => "tama",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "70",
				            "kanji" => "王",
				            "Striche" => "4",
				            "DE" => "König",
				            "onyomi" => "ō",
				            "kunyomi" => "kimi",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "71",
				            "kanji" => "石",
				            "Striche" => "5",
				            "DE" => "Stein",
				            "onyomi" => "seki, koku",
				            "kunyomi" => "ishi",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "72",
				            "kanji" => "竹",
				            "Striche" => "6",
				            "DE" => "Bambus",
				            "onyomi" => "chiku",
				            "kunyomi" => "take",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "73",
				            "kanji" => "糸",
				            "Striche" => "6",
				            "DE" => "Faden",
				            "onyomi" => "shi",
				            "kunyomi" => "ito",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "74",
				            "kanji" => "貝",
				            "Striche" => "7",
				            "DE" => "Muschel",
				            "onyomi" => "bai",
				            "kunyomi" => "kai",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "75",
				            "kanji" => "車",
				            "Striche" => "7",
				            "DE" => "Fahrzeug",
				            "onyomi" => "sha",
				            "kunyomi" => "kuruma",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "76",
				            "kanji" => "金",
				            "Striche" => "8",
				            "DE" => "Gold; Geld",
				            "onyomi" => "kin",
				            "kunyomi" => "kane, kana",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "77",
				            "kanji" => "雨",
				            "Striche" => "8",
				            "DE" => "Regen",
				            "onyomi" => "u",
				            "kunyomi" => "ame, ama",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "78",
				            "kanji" => "赤",
				            "Striche" => "7",
				            "DE" => "rot",
				            "onyomi" => "seki",
				            "kunyomi" => "aka",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "79",
				            "kanji" => "青",
				            "Striche" => "8",
				            "DE" => "blau",
				            "onyomi" => "sei, shō",
				            "kunyomi" => "ao",
				            "group" => "学年１"
				        ),
				
				    array
				        (
				            "id" => "80",
				            "kanji" => "白",
				            "Striche" => "5",
				            "DE" => "weiß",
				            "onyomi" => "haku",
				            "kunyomi" => "shiro, shira",
				            "group" => "学年１"
				        )
		    
		    
		    
		    
		    );

		}
	}
?>
