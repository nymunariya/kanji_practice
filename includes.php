<?php 
	$einstellungen = "?";
	
	if( $_GET['furigana'] != "" ) $einstellungen .= "furigana=" . $_GET['furigana'] . "&";
	if( $_GET['lang'] != "" ) $einstellungen .= "lang=" . $_GET['lang'] . "&";
	if( $_GET['meaning'] != "" ) $einstellungen .= "meaning=" . $_GET['meaning'] . "&";
	if( $_GET['all'] != "" ) $einstellungen .= "name=" . $_GET['all'] . "&";

	function toggle_all_form() {
		echo "<p><center><form action=\"\">";
		echo "<input type=\"hidden\" name=\"furigana\" value=\"" . $_GET['furigana'] . "\">";
		echo "<input type=\"hidden\" name=\"lang\" value=\"" . $_GET['lang'] . "\">";
		echo "<input type=\"hidden\" name=\"name\" value=\"" . $_GET['name'] . "\">";
		echo "<input type=\"hidden\" name=\"all\" value=\"";
		if( $_GET['all'] == "1" ) echo "0";
		else echo "1";
		echo "\">";
		echo "<input type=\"submit\" value=\""; 
		if( $_GET['all'] == "1" ) echo "一\" title=\"show single card\"";
		else echo "万\" title=\"show all cards\"";
		echo " /></form></center></p>";
	}
	
	function get_group( $group = "" ) {
		switch ($group) {
			case "group1":
				return "２５％";
				break;
			case "group2":
				return "５０％";
				break;
			case "group3":
				return "７５％";
				break;
			default:
				return "";
				break;
		}
	}
	
	function show_card( $type = "", $card = "" ) {
		if( $type == "radical" ) $furigana = $card['furigana'];
		else if( $type == "kanji" ) {
			switch ($_GET['furigana']) {
				case "kunyomi":
					if( $card['kunyomi'] != "" ) $furigana = $card['kunyomi'];
					break;
				case "onyomi":
					if( $card['onyomi'] != "" ) $furigana = $card['onyomi'];
					break;
				case "none":
					break;
				default:
					$furigana = $card['onyomi'];
					if( $card['kunyomi'] != "" && $card['onyomi'] != "" ) $furigana .= "<br />";
					$furigana .= $card['kunyomi'];
					break;
			}
		}
		
		switch( $_GET['meaning'] ) {
			case "furigana":
				$meaning = $furigana;
				break;
			case "none":
				$meaning = "";
				break;
			default:
				if( $_GET['lang'] != "en" ) $meaning = $card['DE'];
				else $meaning = $card['EN'];
				break;
		}
	
		
			if( $type == "kanji" ) $card_class = $card['group'];
			else if( $type == "radical" ) $card_class = get_group($card['group']);
			
		if( $_GET['all'] != "1" ) {
			echo "<div id=\"index_flip\">";
			echo "<div class=\"cardflip\" ontouchstart=\"this.classList.toggle('hover');\">";
			
			
			echo "<div class=\"cardsflip " . $card['group'] . "\">";
			echo "<div id=\"back\" class=\"card_img\">";
		} else {
			echo "<div class=\"cards " . $card['group'] . "\">";
			echo "<div class=\"card_img\">";
		}
		echo "<div class=\"class_holder " . $card['jlpt'] . "\">";
		echo "<span class=\"class\">" . $card_class . "</span>";
		if( $type == "kanji" ) echo "<span class=\"class2\">" . $card['jlpt'] . "</span>";
		echo "</div>";
		//if( $type == "kanji" )  echo "<div class=\"id\"><span title=\"" . $card['id'] . "\">" . $card['Striche'] . "</span></div>";
		//if( $type == "kanji" )  echo "<div class=\"id\">" . $card['Striche'] . "</div>";
		if( $type == "kanji" )  echo "<div class=\"id\">" . $card['id'] . "</div>";
		else if( $type == "radical" )  echo "<div class=\"id\">" . $card['id'] . "</div>";
		echo "<div class=\"kanji\"><ruby><rb>" . $card['kanji'] . "</rb><rt class=\"furigana\">";
		if( $_GET['furigana'] != "none" ) echo $furigana;
		echo "</rt></ruby></div>";
		if( $type == "radical" ) echo "<div class=\"forms\">" . $card['forms'] . "</div>";
		if( $type == "radical" ) echo "<div class=\"examples\">" . $card['examples'] . "</div>";
		
		echo "<div class=\"name\">" . $meaning . "</div>";
		echo "<div class=\"info\"></div>";
		echo "</div>";
		if( $_GET['all'] == "1" )	{
			echo "</div>";
			echo "</div>";
		} else {					
			echo "<div id=\"front\" class=\"card_img\">";
			echo "<div class=\"kanji\"><ruby><rb>" . $card['kanji'] . "</rb><rt class=\"furigana\">" . $furigana . "</rt></ruby></div>";
			if( $_GET['lang'] != "en" ) echo "<div class=\"name\">" . $card['DE'] . "</div>";
			else echo "<div class=\"name\">" . $card['EN'] . "</div>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
		}
		
	}

 ?>
