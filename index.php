<?php 		
	require_once('includes.php'); 
	require_once('db_kanji.php'); 
	$kanjiDeck = new kanjiDeck;
	
	$card_id = rand(0,79);
	//$card_id = 0;
	
	function choose_card( $num = "" ) {
		//global $cards_select;
		global $kanjiDeck;
		$i = 0;
		
		$cards_list = "<select name=\"nr\">\n";//" . $num . "
		foreach( $kanjiDeck->cards as $card ) {
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
						<!--<?php toggle_all_form(); ?>-->
				</article>
				<article style="height: 400px;">
					<div class="cards" style="width: 300px; height: 300px;">
						<div class="card_img" style="width: 300px; background: none;">
							<form action="kanji.php">
								<input type="hidden" name="furigana" value="<?php echo $_GET['furigana']; ?>" />
								<input type="hidden" name="lang" value="<?php echo $_GET['lang']; ?>" />
								<input type="hidden" name="name" value="<?php echo $_GET['name']; ?>" />
								<ul>
									<li>教育漢字【きょういくかんじ】</li>
									<ul>
										<li><input type="checkbox" name="g1" checked />学年１【８０】</li>
										<li><input type="checkbox" name="g2" disabled  />学年２【１６０】</li>
										<li><input type="checkbox" name="g3" disabled  />学年３【２００】</li>
										<li><input type="checkbox" name="g4" disabled  />学年４【２０２】</li>
										<li><input type="checkbox" name="g5" disabled  />学年５【１９３】</li>
										<li><input type="checkbox" name="g6" disabled  />学年６【１９１】</li>
									</ul>
									<li>常用漢字【じょうようかんじ】</li>
									<ul>
										<li><input type="checkbox" name="ma" disabled  />Ａ【３１３】</li>
										<li><input type="checkbox" name="mb" disabled  />Ｂ【３１３】</li>
										<li><input type="checkbox" name="mc" disabled  />Ｃ【３１３】</li>
									</ul>
									<li><input type="checkbox" name="jinmeiyoukanji" disabled  />人名用漢字【じんめいようかんじ】(863)</li>
									<li>JLPT</li>
									<ul>
										<li><input type="checkbox" name="n5" checked />Ｎ５</li>
										<li><input type="checkbox" name="n4" disabled />Ｎ４</li>
										<li><input type="checkbox" name="n3" disabled />Ｎ３</li>
										<li><input type="checkbox" name="n2" disabled />Ｎ２</li>
										<li><input type="checkbox" name="n1" disabled />Ｎ１</li>
									</ul>
								</ul>
								<center><input type="submit" value="ランダム" title="randamu" /></center>
							</form>
							<!--<center><form action="kanji.php"><?php echo choose_card(); ?><input type="submit" value="Go" /></form></center>-->
						</div>
					</div>
					<div class="cards <?php echo $kanjiDeck->cards[$card_id]['group']; ?>">
						<div class="card_img">
							<form action="">
							<div class="class_holder <?php echo $kanjiDeck->cards[$card_id]['jlpt']; ?>"><span class="class"><?php echo $kanjiDeck->cards[$card_id]['group']; ?></span><span class="class2"><?php echo $kanjiDeck->cards[$card_id]['jlpt']; ?></span></div>
							<div class="id"><?php echo $kanjiDeck->cards[$card_id]['id']; ?></div>
							<div class="kanji">
									<ruby>
										<rb><?php echo $kanjiDeck->cards[$card_id]['kanji']; ?></rb>
										<rt class="furigana">
											<select name="furigana" title="furigana">
												<option value="kunyomi" <?php if( $_GET['furigana'] == "kunyomi" ) echo "selected"; ?>>訓読み</option>
												<option value="onyomi" <?php if( $_GET['furigana'] == "onyomi" ) echo "selected"; ?>>音読み</option>
												<option value="both" <?php if( $_GET['furigana'] == "both" ) echo "selected"; ?>>訓読みと音読み</option>
												<option value"none" <?php if( $_GET['furigana'] == "none" ) echo "selected"; ?>>無し</option>
											</select>
										</rt>
									</ruby>
							</div>
							<div class="forms"></div>
							<div class="name">
								<select name="meaning" title="meaning/translation">
									<option value="translation" <?php if( $_GET['meaning'] == "translation" ) echo "selected"; ?>>外国語</option>
									<option value="furigana" <?php if( $_GET['meaning'] == "furigana" ) echo "selected"; ?>>訓読みと音読み</option>
									<option value="none" <?php if( $_GET['meaning'] == "none" ) echo "selected"; ?>>無し</option>
								</select>
							</div>
							<div class="name">
								<select name="lang" title="language">
									<option value="de" <?php if( $_GET['lang'] == "de" ) echo "selected"; ?>>ドイツ語</option>
									<option value="en" <?php if( $_GET['lang'] == "en" ) echo "selected"; ?>>英語</option>
									<option value"none" <?php if( $_GET['lang'] == "none" ) echo "selected"; ?>>無し</option>
								</select>
							</div>
							<div class="info"></div>
							<center style="margin-top: 20px;"><input type="submit" value="保存" title="save" /></center>
							</form>
						</div>
					</div>
				</article>
				
				
				<article>
					<p>Since I wasn't happy with any of the resources online for learning Japanese/practicing for the <span title="Japanese-Language Proficiency Test">JLPT</span>, I decided to make digital flash cards.  Since I've been doing web programming on and off since the late 1990s, I might as well put my (now, arguably) rusty PHP skills to the test.</p>
					<p><b>This is the settings page.</b>  Options are available for language of the translations (between <span title="German">ドイツ語</span> and <span title="English">英語</span>, as well as <span title="neither/none">無し</span>), whether or not <span title="furigana">ふりがな</span> is wanted, and wether or not translations should be shown at all.  Be sure to save your settings before you move to the <a href="kanji.php<?php echo $einstellungen; ?>" title="Kanji">漢字</a> &amp; <a href="radicals.php<?php echo $einstellungen; ?>" title="Radicals">部首</a> pages.</p>
					<p>As the database is being filled out based on where I am learning Japanese &amp; Kanji, not all Kanji may be available yet. They should be added as I progress. At the moment, it is based on grade school levels, but I would like to add selections for the JLPT levels.</p>
					<p>These pages were made using PHP and HTML only.  Instead of a MySQL databate, PHP classes are used.  Instead of cookies (to save settings), _GET URL variables are used.</p>
					<p>Information has been collected from various websites, including: <a href="https://jlptstudy.net">jlptstudy.net</a>, <a href="https://de.wikipedia.org/">Wikipedia</a> (<a href="https://de.wikipedia.org/wiki/Kyōiku-Kanji">Kyōiku-Kanji (DE)</a>, <a href="https://en.wikipedia.org/wiki/List_of_kanji_radicals_by_frequency">List of Kanji radicals by frequency</a>), <a href="https://www.hadamitzky.de">www.hadamitzky.de</a>, and <a href="https://jisho.org">jisho.org</a>.</p>
					<p>As always, because I believe in OpenSource, everything should be available (soon) on Github, so that anyone can use what I made to make their own flash cards (for whatever) and improve upon it, as this will not be the prettiest nor best code. </p>
				</article>
			</section>
		</main>
	</body>
</html>
	  		
