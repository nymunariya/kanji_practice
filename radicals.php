<?php 		
	require_once('includes.php'); 
	require_once('db_radicals.php'); 
	$radicalDeck = new radicalDeck;
	
	
	
	if( $_GET['nr'] ) $card_id = $_GET['nr'] - 1;
	else $card_id = rand(0,5);
	
	function choose_card( $num = "" ) {
		//global $cards_select;
		global $radicalDeck;
		
		$cards_list = "<select name=\"nr\">\n";//" . $num . "
		foreach( $radicalDeck->cards as $card ) {
			$cards_list .= "<option value=\"" . $card['id'] . "\"";
			if( $card['id'] == $num + 1 ) $cards_list .= " selected";
			$cards_list .= ">" . $card['id'] . " " . $card['kanji'] . "</option>\n";
		}
		
		$cards_list .= "</select>";
		
		return $cards_list;
	}

?>


<!DOCTYPE html>
	<html>
		<head>
	  	<meta charset="UTF-8" />
      <title>漢字の練習</title>
      		<link rel="stylesheet" href="kanji.css" />
      </head>
      <body>
      	<main>
      		<section id="body" class="full">
	  			<article id="nav">
					<h2>漢字の練習</h2>
						<p>
							<a href="kanji.php<?php echo $einstellungen; ?>" title="Kanji">漢字</a>
							<a href="radicals.php<?php echo $einstellungen; ?>" title="Radicals">部首</a>
							<a href="index.php<?php echo $einstellungen; ?>" title="Settings">設定</a>
							<a href="https://github.com/nymunariya/kanji_practice/">Github<br />Repository</a>
						</p>
						<?php toggle_all_form(); ?>
				</article>
				<article>
					<?php 
						if( $_GET['all'] != "" ) {
							foreach( $radicalDeck->cards as $card ) { 
								show_card( "radical", $card );
							}
						} else {
							show_card( "radical", $radicalDeck->cards[$card_id] );
						}
					?>
				</article>
				<article>
					<center><form action=""><?php echo choose_card($card_id); ?><input type="submit" value="Go" /></form>
					<form action=""><input type="submit" value="ランダム" title="randamu" /></form></center>
				</article>
			</section>
		</main>
	</body>
</html>
	  		
