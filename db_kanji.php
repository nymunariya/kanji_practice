<?php
	
	class kanjiDeck {
	
		//protected $cards = [];
		//protected $groups = [];
		
		//https://jlptstudy.net/N5/?kanji-list
		
		//土気水火
	
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
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "3",
				            "kanji" => "三",
				            "Striche" => "3",
				            "DE" => "drei",
				            "onyomi" => "サン",
				            "kunyomi" => "みっ•つ",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "4",
				            "kanji" => "四",
				            "Striche" => "5",
				            "DE" => "vier",
				            "onyomi" => "シ",
				            "kunyomi" => "よっ•つ",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "5",
				            "kanji" => "五",
				            "Striche" => "4",
				            "DE" => "fünf",
				            "onyomi" => "ゴ",
				            "kunyomi" => "いつ•つ",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "6",
				            "kanji" => "六",
				            "Striche" => "4",
				            "DE" => "sechs",
				            "onyomi" => "ロク",
				            "kunyomi" => "むっ•つ",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "7",
				            "kanji" => "七",
				            "Striche" => "2",
				            "DE" => "sieben",
				            "onyomi" => "シチ",
				            "kunyomi" => "なな•つ",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "8",
				            "kanji" => "八",
				            "Striche" => "2",
				            "DE" => "acht",
				            "onyomi" => "ハチ",
				            "kunyomi" => "やっ•つ",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "9",
				            "kanji" => "九",
				            "Striche" => "2",
				            "DE" => "neun",
				            "onyomi" => "キュウ/ク",
				            "kunyomi" => "ここの•つ",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "10",
				            "kanji" => "十",
				            "Striche" => "2",
				            "DE" => "zehn",
				            "onyomi" => "ジュウ/ジッ",
				            "kunyomi" => "とお",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "11",
				            "kanji" => "百",
				            "Striche" => "6",
				            "DE" => "hundert",
				            "onyomi" => "ヒャク",
				            "kunyomi" => "もも",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "12",
				            "kanji" => "千",
				            "Striche" => "3",
				            "DE" => "tausend",
				            "onyomi" => "セン",
				            "kunyomi" => "ち",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "13",
				            "kanji" => "上",
				            "Striche" => "3",
				            "DE" => "oben",
				            "onyomi" => "ジョウ/ショウ",
				            "kunyomi" => "うえ",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "14",
				            "kanji" => "下",
				            "Striche" => "3",
				            "DE" => "unten",
				            "onyomi" => "カ/ゲ",
				            "kunyomi" => "した",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "15",
				            "kanji" => "左",
				            "Striche" => "5",
				            "DE" => "links",
				            "onyomi" => "サ",
				            "kunyomi" => "ひだり",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "16",
				            "kanji" => "右",
				            "Striche" => "5",
				            "DE" => "rechts",
				            "onyomi" => "ウ/ユウ",
				            "kunyomi" => "みぎ",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "17",
				            "kanji" => "中",
				            "Striche" => "4",
				            "DE" => "Inneres, Mitte",
				            "onyomi" => "チュウ/ジュウ",
				            "kunyomi" => "なか",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "18",
				            "kanji" => "大",
				            "Striche" => "3",
				            "DE" => "groß",
				            "onyomi" => "ダイ/タイ",
				            "kunyomi" => "おお•きい",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "19",
				            "kanji" => "小",
				            "Striche" => "3",
				            "DE" => "klein",
				            "onyomi" => "ショウ",
				            "kunyomi" => "ちい•さい",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "20",
				            "kanji" => "月",
				            "Striche" => "4",
				            "DE" => "Monat; Mond",
				            "onyomi" => "ゲツ/ガツ",
				            "kunyomi" => "つき",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "21",
				            "kanji" => "日",
				            "Striche" => "4",
				            "DE" => "Tag; Sonne",
				            "onyomi" => "ニチ/ジツ",
				            "kunyomi" => "ひ",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "22",
				            "kanji" => "年",
				            "Striche" => "6",
				            "DE" => "Jahr",
				            "onyomi" => "ネン",
				            "kunyomi" => "とし",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "23",
				            "kanji" => "早",
				            "Striche" => "6",
				            "DE" => "früh; schnell",
				            "onyomi" => "ソウ/サッ",
				            "kunyomi" => "はや•い",
				            "group" => "学年１",
				            "jlpt" => "Ｎ４"
				        ),
				
				    array
				        (
				            "id" => "24",
				            "kanji" => "木",
				            "Striche" => "4",
				            "DE" => "Baum; Holz",
				            "onyomi" => "ボク/モク",
				            "kunyomi" => "き",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "25",
				            "kanji" => "林",
				            "Striche" => "7",
				            "DE" => "Hain, Forst",
				            "onyomi" => "リン",
				            "kunyomi" => "はやし",
				            "group" => "学年１",
				            "jlpt" => "Ｎ２"
				        ),
				
				    array
				        (
				            "id" => "26",
				            "kanji" => "山",
				            "Striche" => "3",
				            "DE" => "Berg",
				            "onyomi" => "サン",
				            "kunyomi" => "やま",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "27",
				            "kanji" => "川",
				            "Striche" => "3",
				            "DE" => "Fluss",
				            "onyomi" => "セン",
				            "kunyomi" => "かわ",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "28",
				            "kanji" => "土",
				            "Striche" => "3",
				            "DE" => "Erde",
				            "onyomi" => "ド/ト",
				            "kunyomi" => "つち",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "29",
				            "kanji" => "空",
				            "Striche" => "8",
				            "DE" => "Himmel (vgl. sky),",
				            "onyomi" => "クウ",
				            "kunyomi" => "そら",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "30",
				            "kanji" => "田",
				            "Striche" => "5",
				            "DE" => "Reisfeld",
				            "onyomi" => "デン",
				            "kunyomi" => "た",
				            "group" => "学年１",
				            "jlpt" => "Ｎ４"
				        ),
				
				    array
				        (
				            "id" => "31",
				            "kanji" => "天",
				            "Striche" => "4",
				            "DE" => "Himmel (vgl. heaven),",
				            "onyomi" => "テン",
				            "kunyomi" => "あめ",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "32",
				            "kanji" => "生",
				            "Striche" => "5",
				            "DE" => "Leben; roh",
				            "onyomi" => "セイ/ショウ",
				            "kunyomi" => "い•きる",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "33",
				            "kanji" => "花",
				            "Striche" => "7",
				            "DE" => "Blume",
				            "onyomi" => "カ",
				            "kunyomi" => "はな",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "34",
				            "kanji" => "草",
				            "Striche" => "9",
				            "DE" => "Gras",
				            "onyomi" => "ソウ",
				            "kunyomi" => "くさ",
				            "group" => "学年１",
				            "jlpt" => "Ｎ３"
				        ),
				
				    array
				        (
				            "id" => "35",
				            "kanji" => "虫",
				            "Striche" => "6",
				            "DE" => "Insekt",
				            "onyomi" => "チュウ",
				            "kunyomi" => "むし",
				            "group" => "学年１",
				            "jlpt" => "Ｎ２"
				        ),
				
				    array
				        (
				            "id" => "36",
				            "kanji" => "犬",
				            "Striche" => "4",
				            "DE" => "Hund",
				            "onyomi" => "ケン",
				            "kunyomi" => "いぬ",
				            "group" => "学年１",
				            "jlpt" => "Ｎ４"
				        ),
				
				    array
				        (
				            "id" => "37",
				            "kanji" => "人",
				            "Striche" => "2",
				            "DE" => "Person, Mensch",
				            "onyomi" => "ジン/ニン",
				            "kunyomi" => "ひと",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "38",
				            "kanji" => "名",
				            "Striche" => "6",
				            "DE" => "Name",
				            "onyomi" => "メイ/ミョウ",
				            "kunyomi" => "な",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "39",
				            "kanji" => "女",
				            "Striche" => "3",
				            "DE" => "Frau",
				            "onyomi" => "ジョ/ニョ",
				            "kunyomi" => "おんな",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "40",
				            "kanji" => "男",
				            "Striche" => "7",
				            "DE" => "Mann",
				            "onyomi" => "ダン/ナン",
				            "kunyomi" => "おとこ",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "41",
				            "kanji" => "子",
				            "Striche" => "3",
				            "DE" => "Kind",
				            "onyomi" => "シ/ス",
				            "kunyomi" => "こ",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "42",
				            "kanji" => "目",
				            "Striche" => "5",
				            "DE" => "Auge",
				            "onyomi" => "モク/ボク",
				            "kunyomi" => "め",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "43",
				            "kanji" => "耳",
				            "Striche" => "6",
				            "DE" => "Ohr",
				            "onyomi" => "ジ",
				            "kunyomi" => "みみ",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "44",
				            "kanji" => "口",
				            "Striche" => "3",
				            "DE" => "Mund",
				            "onyomi" => "コウ/ク",
				            "kunyomi" => "くち",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "45",
				            "kanji" => "手",
				            "Striche" => "4",
				            "DE" => "Hand",
				            "onyomi" => "シュ",
				            "kunyomi" => "て",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "46",
				            "kanji" => "足",
				            "Striche" => "7",
				            "DE" => "Fuß",
				            "onyomi" => "ソク",
				            "kunyomi" => "あし",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "47",
				            "kanji" => "見",
				            "Striche" => "7",
				            "DE" => "sehen",
				            "onyomi" => "ケン",
				            "kunyomi" => "み•る",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "48",
				            "kanji" => "音",
				            "Striche" => "9",
				            "DE" => "Ton, Geräusch",
				            "onyomi" => "オン/イン",
				            "kunyomi" => "おと",
				            "group" => "学年１",
				            "jlpt" => "Ｎ４"
				        ),
				
				    array
				        (
				            "id" => "49",
				            "kanji" => "力",
				            "Striche" => "2",
				            "DE" => "Kraft",
				            "onyomi" => "リョク/リキ",
				            "kunyomi" => "ちから",
				            "group" => "学年１",
				            "jlpt" => "Ｎ４"
				        ),
				
				    array
				        (
				            "id" => "50",
				            "kanji" => "気",
				            "Striche" => "6",
				            "DE" => "Luft; Geist, Seele; Stimmung",
				            "onyomi" => "キ/ケ",
				            "kunyomi" => "-",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "51",
				            "kanji" => "円",
				            "Striche" => "4",
				            "DE" => "Yen; Kreis",
				            "onyomi" => "en",
				            "kunyomi" => "maru",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "52",
				            "kanji" => "入",
				            "Striche" => "2",
				            "DE" => "hineingehen",
				            "onyomi" => "nyū",
				            "kunyomi" => "hai-ru, i-ru",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "53",
				            "kanji" => "出",
				            "Striche" => "5",
				            "DE" => "herauskommen, verlassen",
				            "onyomi" => "shutsu",
				            "kunyomi" => "de-ru",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "54",
				            "kanji" => "立",
				            "Striche" => "5",
				            "DE" => "aufstehen",
				            "onyomi" => "ritsu",
				            "kunyomi" => "ta-tsu",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "55",
				            "kanji" => "休",
				            "Striche" => "6",
				            "DE" => "ausruhen",
				            "onyomi" => "kyū",
				            "kunyomi" => "yasu-mu",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "56",
				            "kanji" => "先",
				            "Striche" => "6",
				            "DE" => "vorher; vorne; Zukunft",
				            "onyomi" => "sen",
				            "kunyomi" => "saki",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "57",
				            "kanji" => "夕",
				            "Striche" => "3",
				            "DE" => "Abend",
				            "onyomi" => "seki",
				            "kunyomi" => "yū",
				            "group" => "学年１",
				            "jlpt" => "Ｎ４"
				        ),
				
				    array
				        (
				            "id" => "58",
				            "kanji" => "本",
				            "Striche" => "5",
				            "DE" => "Buch; Ursprung",
				            "onyomi" => "hon",
				            "kunyomi" => "moto",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "59",
				            "kanji" => "文",
				            "Striche" => "4",
				            "DE" => "Text",
				            "onyomi" => "bun, mon",
				            "kunyomi" => "fumi",
				            "group" => "学年１",
				            "jlpt" => "Ｎ４"
				        ),
				
				    array
				        (
				            "id" => "60",
				            "kanji" => "字",
				            "Striche" => "6",
				            "DE" => "Schriftzeichen",
				            "onyomi" => "ji",
				            "kunyomi" => "aza",
				            "group" => "学年１",
				            "jlpt" => "Ｎ４"
				        ),
				
				    array
				        (
				            "id" => "61",
				            "kanji" => "学",
				            "Striche" => "8",
				            "DE" => "lernen",
				            "onyomi" => "gaku",
				            "kunyomi" => "mana-bu",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "62",
				            "kanji" => "校",
				            "Striche" => "10",
				            "DE" => "Schule",
				            "onyomi" => "kō",
				            "kunyomi" => "",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "63",
				            "kanji" => "村",
				            "Striche" => "7",
				            "DE" => "Dorf",
				            "onyomi" => "son",
				            "kunyomi" => "mura",
				            "group" => "学年１",
				            "jlpt" => "Ｎ２"
				        ),
				
				    array
				        (
				            "id" => "64",
				            "kanji" => "町",
				            "Striche" => "7",
				            "DE" => "Stadt",
				            "onyomi" => "chō",
				            "kunyomi" => "machi",
				            "group" => "学年１",
				            "jlpt" => "Ｎ４"
				        ),
				
				    array
				        (
				            "id" => "65",
				            "kanji" => "森",
				            "Striche" => "11",
				            "DE" => "Wald",
				            "onyomi" => "shin",
				            "kunyomi" => "mori",
				            "group" => "学年１",
				            "jlpt" => "Ｎ２"
				        ),
				
				    array
				        (
				            "id" => "66",
				            "kanji" => "正",
				            "Striche" => "5",
				            "DE" => "richtig, gerecht",
				            "onyomi" => "sei, shō",
				            "kunyomi" => "tada-shii, masa",
				            "group" => "学年１",
				            "jlpt" => "Ｎ４"
				        ),
				
				    array
				        (
				            "id" => "67",
				            "kanji" => "水",
				            "Striche" => "4",
				            "DE" => "Wasser",
				            "onyomi" => "sui",
				            "kunyomi" => "mizu",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "68",
				            "kanji" => "火",
				            "Striche" => "4",
				            "DE" => "Feuer",
				            "onyomi" => "ka",
				            "kunyomi" => "hi",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "69",
				            "kanji" => "玉",
				            "Striche" => "5",
				            "DE" => "Edelstein",
				            "onyomi" => "gyoku",
				            "kunyomi" => "tama",
				            "group" => "学年１",
				            "jlpt" => "Ｎ２"
				        ),
				
				    array
				        (
				            "id" => "70",
				            "kanji" => "王",
				            "Striche" => "4",
				            "DE" => "König",
				            "onyomi" => "ō",
				            "kunyomi" => "kimi",
				            "group" => "学年１",
				            "jlpt" => "Ｎ３"
				        ),
				
				    array
				        (
				            "id" => "71",
				            "kanji" => "石",
				            "Striche" => "5",
				            "DE" => "Stein",
				            "onyomi" => "seki, koku",
				            "kunyomi" => "ishi",
				            "group" => "学年１",
				            "jlpt" => "Ｎ３"
				        ),
				
				    array
				        (
				            "id" => "72",
				            "kanji" => "竹",
				            "Striche" => "6",
				            "DE" => "Bambus",
				            "onyomi" => "chiku",
				            "kunyomi" => "take",
				            "group" => "学年１",
				            "jlpt" => "Ｎ２"
				        ),
				
				    array
				        (
				            "id" => "73",
				            "kanji" => "糸",
				            "Striche" => "6",
				            "DE" => "Faden",
				            "onyomi" => "shi",
				            "kunyomi" => "ito",
				            "group" => "学年１",
				            "jlpt" => "Ｎ２"
				        ),
				
				    array
				        (
				            "id" => "74",
				            "kanji" => "貝",
				            "Striche" => "7",
				            "DE" => "Muschel",
				            "onyomi" => "bai",
				            "kunyomi" => "kai",
				            "group" => "学年１",
				            "jlpt" => "Ｎ２"
				        ),
				
				    array
				        (
				            "id" => "75",
				            "kanji" => "車",
				            "Striche" => "7",
				            "DE" => "Fahrzeug",
				            "onyomi" => "sha",
				            "kunyomi" => "kuruma",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "76",
				            "kanji" => "金",
				            "Striche" => "8",
				            "DE" => "Gold; Geld",
				            "onyomi" => "kin",
				            "kunyomi" => "kane, kana",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "77",
				            "kanji" => "雨",
				            "Striche" => "8",
				            "DE" => "Regen",
				            "onyomi" => "u",
				            "kunyomi" => "ame, ama",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "78",
				            "kanji" => "赤",
				            "Striche" => "7",
				            "DE" => "rot",
				            "onyomi" => "seki",
				            "kunyomi" => "aka",
				            "group" => "学年１",
				            "jlpt" => "Ｎ４"
				        ),
				
				    array
				        (
				            "id" => "79",
				            "kanji" => "青",
				            "Striche" => "8",
				            "DE" => "blau",
				            "onyomi" => "sei, shō",
				            "kunyomi" => "ao",
				            "group" => "学年１",
				            "jlpt" => "Ｎ４"
				        ),
				
				    array
				        (
				            "id" => "80",
				            "kanji" => "白",
				            "Striche" => "5",
				            "DE" => "weiß",
				            "onyomi" => "haku",
				            "kunyomi" => "shiro, shira",
				            "group" => "学年１",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "82",
				            "kanji" => "多",
				            "Striche" => "6",
				            "DE" => "viel",
				            "EN" => "many, frequent, much",
				            "onyomi" => "タ",
				            "kunyomi" => "",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "83",
				            "kanji" => "少",
				            "Striche" => "4",
				            "DE" => "wenig, klein",
				            "EN" => "few, little",
				            "onyomi" => "ショウ",
				            "kunyomi" => "すく.ない, すこ.し",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "85",
				            "kanji" => "半",
				            "Striche" => "5",
				            "DE" => "halb, Mitte, ungrade Zahl",
				            "EN" => "half, middle, odd number",
				            "onyomi" => "ハン",
				            "kunyomi" => "なか.ば",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "90",
				            "kanji" => "長",
				            "Striche" => "8",
				            "DE" => "lang; Anführer",
				            "EN" => "long, leader, superior, senior",
				            "onyomi" => "チョウ",
				            "kunyomi" => "なが.い、 おさ",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "102",
				            "kanji" => "高",
				            "Striche" => "10",
				            "DE" => "hoch, teuer",
				            "EN" => "tall, high, expensive",
				            "onyomi" => "コウ",
				            "kunyomi" => "",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "105",
				            "kanji" => "母",
				            "Striche" => "5",
				            "DE" => "Mutter",
				            "EN" => "mother",
				            "onyomi" => "ボ",
				            "kunyomi" => "はは、 も",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "106",
				            "kanji" => "父",
				            "Striche" => "4",
				            "DE" => "Vater",
				            "EN" => "father",
				            "onyomi" => "フ",
				            "kunyomi" => "ちち",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "119",
				            "kanji" => "時",
				            "Striche" => "10",
				            "DE" => "Uhrzeit, Stunde",
				            "EN" => "time, hour",
				            "onyomi" => "ジ",
				            "kunyomi" => "とき、 -どき",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "112",
				            "kanji" => "友",
				            "Striche" => "4",
				            "DE" => "Freund",
				            "EN" => "friend",
				            "onyomi" => "ユウ",
				            "kunyomi" => "とも",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "124",
				            "kanji" => "分",
				            "Striche" => "4",
				            "DE" => "Minute; verstehen",
				            "EN" => "part, minute, segment, understand, know, chance",
				            "onyomi" => "ブン、 フン、 ブ",
				            "kunyomi" => "",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "125",
				            "kanji" => "週",
				            "Striche" => "11",
				            "DE" => "Woche",
				            "EN" => "week",
				            "onyomi" => "シュウ",
				            "kunyomi" => "",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "130",
				            "kanji" => "今",
				            "Striche" => "4",
				            "DE" => "jetzt",
				            "DE" => "now",
				            "onyomi" => "",
				            "kunyomi" => "",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "131",
				            "kanji" => "新",
				            "Striche" => "13",
				            "DE" => "neu",
				            "EN" => "new",
				            "onyomi" => "シン",
				            "kunyomi" => "",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "132",
				            "kanji" => "古",
				            "Striche" => "8",
				            "DE" => "alt",
				            "EN" => "old",
				            "onyomi" => "コ",
				            "kunyomi" => "",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "133",
				            "kanji" => "間",
				            "Striche" => "12",
				            "DE" => "Zwischenraum",
				            "EN" => "interval, space",
				            "onyomi" => "",
				            "kunyomi" => "",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "135",
				            "kanji" => "北",
				            "Striche" => "5",
				            "DE" => "Norden",
				            "EN" => "north",
				            "onyomi" => "ホク",
				            "kunyomi" => "きた",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "136",
				            "kanji" => "南",
				            "Striche" => "9",
				            "DE" => "Süden",
				            "EN" => "south",
				            "onyomi" => "ナン、 ナ",
				            "kunyomi" => "みなみ",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "137",
				            "kanji" => "東",
				            "Striche" => "8",
				            "DE" => "Ost",
				            "EN" => "East",
				            "onyomi" => "トウ",
				            "kunyomi" => "ひがし",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "138",
				            "kanji" => "西",
				            "Striche" => "6",
				            "DE" => "Westen, スペイン",
				            "EN" => "West, スペイン",
				            "onyomi" => "セイ、 サイ、 ス",
				            "kunyomi" => "にし",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "141",
				            "kanji" => "前",
				            "Striche" => "9",
				            "DE" => "vorher",
				            "EN" => "in front, before",
				            "onyomi" => "",
				            "kunyomi" => "",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "142",
				            "kanji" => "後",
				            "Striche" => "9",
				            "DE" => "nachher",
				            "EN" => "behind, back, later",
				            "onyomi" => "",
				            "kunyomi" => "",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "144",
				            "kanji" => "外",
				            "Striche" => "5",
				            "DE" => "außen",
				            "EN" => "outside",
				            "onyomi" => "",
				            "kunyomi" => "",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "147",
				            "kanji" => "国",
				            "Striche" => "8",
				            "DE" => "Land",
				            "EN" => "country",
				            "onyomi" => "コク",
				            "kunyomi" => "くに",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "168",
				            "kanji" => "道",
				            "Striche" => "12",
				            "DE" => "Straße, Distrikt, Lehre",
				            "EN" => "street, district, course, moral, teachings",
				            "onyomi" => "ドウ, トウ",
				            "kunyomi" => "みち",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "169",
				            "kanji" => "話",
				            "Striche" => "13",
				            "DE" => "reden",
				            "EN" => "tale, talk",
				            "onyomi" => "ワ",
				            "kunyomi" => "はな.す、 はなし",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "170",
				            "kanji" => "言",
				            "Striche" => "7",
				            "DE" => "sagen",
				            "EN" => "say",
				            "onyomi" => "ゲン, ゴン",
				            "kunyomi" => "い.う, こと",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "173",
				            "kanji" => "聞",
				            "Striche" => "14",
				            "DE" => "hören, fragen, zuhören",
				            "EN" => "hear, ask, listen",
				            "onyomi" => "ブン、 モン",
				            "kunyomi" => "き.く、 き.こえる",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "174",
				            "kanji" => "語",
				            "Striche" => "14",
				            "DE" => "Wort, Rede, Sprache",
				            "EN" => "word, speech, language",
				            "onyomi" => "ゴ",
				            "kunyomi" => "かた.る、 かた.らう",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "175",
				            "kanji" => "読",
				            "Striche" => "14",
				            "DE" => "lesen",
				            "EN" => "read",
				            "onyomi" => "ドク、 トク、 トウ",
				            "kunyomi" => "よ.む、 -よ.み",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "176",
				            "kanji" => "書",
				            "Striche" => "10",
				            "DE" => "schreiben",
				            "EN" => "write",
				            "onyomi" => "ショ",
				            "kunyomi" => "",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "193",
				            "kanji" => "食",
				            "Striche" => "9",
				            "DE" => "essen, Essen",
				            "EN" => "eat, food",
				            "onyomi" => "ショク、 ジキ",
				            "kunyomi" => "く.う、 く.らう、 た.べる、 は.む",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "207",
				            "kanji" => "来",
				            "Striche" => "7",
				            "DE" => "kommen",
				            "EN" => "come, due, next, cause, become",
				            "onyomi" => "",
				            "kunyomi" => "",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "208",
				            "kanji" => "行",
				            "Striche" => "6",
				            "DE" => "gehen",
				            "EN" => "going, journey",
				            "onyomi" => "ジ", //????
				            "kunyomi" => "とき、 -どき", ///????
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "214",
				            "kanji" => "店",
				            "Striche" => "8",
				            "DE" => "Laden",
				            "EN" => "store, shop",
				            "onyomi" => "テン",
				            "kunyomi" => "みせ、 たな",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "215",
				            "kanji" => "買",
				            "Striche" => "12",
				            "DE" => "kaufen",
				            "EN" => "buy",
				            "onyomi" => "バイ",
				            "kunyomi" => "か.う",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "217",
				            "kanji" => "午",
				            "Striche" => "4",
				            "DE" => "Mittag, 11-13 Uhr",
				            "EN" => "noon, sign of horse, 11am-1pm",
				            "onyomi" => "ゴ",
				            "kunyomi" => "うま",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "221",
				            "kanji" => "会",
				            "Striche" => "6",
				            "DE" => "treffen",
				            "EN" => "meeting, meet, party, association, interview, join",
				            "onyomi" => "カイ、 エ",
				            "kunyomi" => "",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "225",
				            "kanji" => "社",
				            "Striche" => "13",
				            "DE" => "Firma, Shrein",
				            "EN" => "company, firm, office, association, shrine",
				            "onyomi" => "シャ",
				            "kunyomi" => "やしろ",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "227",
				            "kanji" => "電",
				            "Striche" => "14",
				            "DE" => "Elektrizität",
				            "EN" => "electricity",
				            "onyomi" => "デン",
				            "kunyomi" => "",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "228",
				            "kanji" => "毎",
				            "Striche" => "6",
				            "DE" => "jeder",
				            "EN" => "every",
				            "onyomi" => "マイ",
				            "kunyomi" => "",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "240",
				            "kanji" => "何",
				            "Striche" => "7",
				            "DE" => "was",
				            "EN" => "what",
				            "onyomi" => "カ",
				            "kunyomi" => "",
				            "group" => "学年２",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "285",
				            "kanji" => "安",
				            "Striche" => "6",
				            "DE" => "billig, friedlich",
				            "EN" => "relax, cheap, low, quiet",
				            "onyomi" => "アン",
				            "kunyomi" => "",
				            "group" => "学年３",
				            "jlpt" => "Ｎ５"
				        ),
				/*
				    array
				        (
				            "id" => "322",
				            "kanji" => "旅",
				            "Striche" => "10",
				            "DE" => "Reise, reisen",
				            "EN" => "trip, travel",
				            "onyomi" => "リョ",
				            "kunyomi" => "旅",
				            "group" => "学年３",
				            "jlpt" => "Ｎ４"
				        ),*/
				
				    array
				        (
				            "id" => "437",
				            "kanji" => "飲",
				            "Striche" => "12",
				            "DE" => "trinken, rauchen, nehmen",
				            "EN" => "drink, smoke, take",
				            "onyomi" => "イン, オン",
				            "kunyomi" => "の.む, -の.み",
				            "group" => "学年３",
				            "jlpt" => "Ｎ５"
				        ),
				
				    array
				        (
				            "id" => "439",
				            "kanji" => "駅",
				            "Striche" => "12",
				            "DE" => "Bahnhof",
				            "EN" => "station",
				            "onyomi" => "エキ",
				            "kunyomi" => "",
				            "group" => "学年３",
				            "jlpt" => "Ｎ５"
				        )
		    );

		}
	}
?>
