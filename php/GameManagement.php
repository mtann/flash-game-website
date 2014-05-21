<?php
    session_start();
    require ("../config/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
    
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="../css/gamemanagement.css" />   
    <link rel="stylesheet" type="text/css" href="../css/main.css" />   
    <!--JAVASCRIPT-->
    <SCRIPT src="../js/jquery-1.11.0.js"></SCRIPT>
    <SCRIPT type="text/javascript" src="../js/gamemanagement.js"></SCRIPT>
</head>
<body>
	<div class="container">
  		<?php
	    	include("head2.php");
  		?>
  </div>
  <?php
    //List all game of 7 types: girl, action, brain, sport, strategy, adventure, othergame.
    include("database.php");
    echo "<div id=\"gametables\">";
    //game girl
    $game_detail_list = selectGamesOfCategory("girl");
    echo "<h2>Girl Games List</h2>";
    echo "<div id=\"gametables\">";
    echo "<table id=\"girltable\" class=\"gametable\">";
      echo "<th>";
        echo "Name";
      echo "</th>";

      echo "<th>";
        echo "Avatar";
      echo "</th>";

      echo "<th>";
        echo "Link";
      echo "</th>";

      echo "<th>";
        echo "Story";
      echo "</th>";

      echo "<th>";
        echo "Introduction";
      echo "</th>";

      echo "<th>";
        echo "Save";
      echo "</th>";

      echo "<th>";
        echo "Delete";
      echo "</th>";
    while ($game_detail = mysqli_fetch_array($game_detail_list)) {
        $gameid = $game_detail['id'];
        $gamename = $game_detail['name'];
        $avatar = $game_detail['avatar'];
        $link = $game_detail['link'];
        $story = $game_detail['story'];
        $introduction = $game_detail['introduction'];
        echo "<tr id=\"$gameid\">";
          echo "<td>";
            echo "<input type=\"text\" value=\"$gamename\" disabled id=\"$gamename\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" value=\"$avatar\" id=\"$gameid"."avatar\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" value=\"$link\" id=\"$gameid"."link\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" value=\"$story\" id=\"$gameid"."story\">";
          echo "</td>";
          echo "<td>";            	
			?> <input type="text" value='<?php echo htmlspecialchars($introduction);?>' id="<?=$gameid?>introduction"><?php			
          echo "</td>";
          echo "<td>";
            echo "<input type=\"button\" value=\"Save Changes\" onclick='savegamechanges(\"$gameid\")'>";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"checkbox\" onclick='deletegame(\"$gameid\")'>";
          echo "</td>";
        echo "</tr>";
    }
        echo "<tr>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newgirlname\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newgirlavatar\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newgirllink\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newgirlstory\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newgirlintroduction\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"button\" value=\"Save New Game\" onclick='addnewgame(\"girl\")'>";
          echo "</td>";
        echo "</tr>";
    echo "</table>";
    //game action
    $game_detail_list = selectGamesOfCategory("action");
    echo "<h2>Action Games List</h2>";
    echo "<table id=\"girltable\" class=\"gametable\">";
      echo "<th>";
        echo "Name";
      echo "</th>";

      echo "<th>";
        echo "Avatar";
      echo "</th>";

      echo "<th>";
        echo "Link";
      echo "</th>";

      echo "<th>";
        echo "Story";
      echo "</th>";

      echo "<th>";
        echo "Introduction";
      echo "</th>";

      echo "<th>";
        echo "Save";
      echo "</th>";

      echo "<th>";
        echo "Delete";
      echo "</th>";
    while ($game_detail = mysqli_fetch_array($game_detail_list)) {
      $gameid = $game_detail['id'];
        $gamename = $game_detail['name'];
        $avatar = $game_detail['avatar'];
        $link = $game_detail['link'];
        $story = $game_detail['story'];
        $introduction = $game_detail['introduction'];
        echo "<tr id=\"$gameid\">";
          echo "<td>";
            echo "<input type=\"text\" value=\"$gamename\" disabled id=\"$gamename\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" value=\"$avatar\" id=\"$gameid"."avatar\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" value=\"$link\" id=\"$gameid"."link\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" value=\"$story\" id=\"$gameid"."story\">";
          echo "</td>";
          echo "<td>";
            //echo "<input type=\"text\" value=\"$introduction\" id=\"$gameid"."introduction\">";
			?> <input type="text" value='<?php echo htmlspecialchars($introduction);?>' id="<?=$gameid?>introduction"><?php			
          echo "</td>";
          echo "<td>";
            echo "<input type=\"button\" value=\"Save Changes\" onclick='savegamechanges(\"$gameid\")'>";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"checkbox\" onclick='deletegame(\"$gameid\")'>";
          echo "</td>";
        echo "</tr>";
    }
        echo "<tr>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newactionname\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newactionavatar\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newactionlink\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newactionstory\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newactionintroduction\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"button\" value=\"Save New Game\" onclick='addnewgame(\"action\")'>";
          echo "</td>";
        echo "</tr>";
    echo "</table>";
    //game strategy
    $game_detail_list = selectGamesOfCategory("strategy");
    echo "<h2>Strategy Games List</h2>";
    echo "<div id=\"gametables\">";
    echo "<table id=\"girltable\" class=\"gametable\">";
      echo "<th>";
        echo "Name";
      echo "</th>";

      echo "<th>";
        echo "Avatar";
      echo "</th>";

      echo "<th>";
        echo "Link";
      echo "</th>";

      echo "<th>";
        echo "Story";
      echo "</th>";

      echo "<th>";
        echo "Introduction";
      echo "</th>";

      echo "<th>";
        echo "Save";
      echo "</th>";

      echo "<th>";
        echo "Delete";
      echo "</th>";
    while ($game_detail = mysqli_fetch_array($game_detail_list)) {
        $gameid = $game_detail['id'];
        $gamename = $game_detail['name'];
        $avatar = $game_detail['avatar'];
        $link = $game_detail['link'];
        $story = $game_detail['story'];
        $introduction = $game_detail['introduction'];
        echo "<tr id=\"$gameid\">";
          echo "<td>";
            echo "<input type=\"text\" value=\"$gamename\" disabled id=\"$gamename\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" value=\"$avatar\" id=\"$gameid"."avatar\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" value=\"$link\" id=\"$gameid"."link\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" value=\"$story\" id=\"$gameid"."story\">";
          echo "</td>";
          echo "<td>";
            //echo "<input type=\"text\" value=\"$introduction\" id=\"$gameid"."introduction\">";
			?> <input type="text" value='<?php echo htmlspecialchars($introduction);?>' id="<?=$gameid?>introduction"><?php			
          echo "</td>";
          echo "<td>";
            echo "<input type=\"button\" value=\"Save Changes\" onclick='savegamechanges(\"$gameid\")'>";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"checkbox\" onclick='deletegame(\"$gameid\")'>";
          echo "</td>";
        echo "</tr>";
    }
        echo "<tr>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newstrategyname\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newstrategyavatar\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newstrategylink\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newstrategystory\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newstrategyintroduction\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"button\" value=\"Save New Game\" onclick='addnewgame(\"strategy\")'>";
          echo "</td>";
        echo "</tr>";
    echo "</table>";
    //game adventure
    $game_detail_list = selectGamesOfCategory("adventure");
    echo "<h2>Adventure Games List</h2>";
    echo "<div id=\"gametables\">";
    echo "<table id=\"girltable\" class=\"gametable\">";
      echo "<th>";
        echo "Name";
      echo "</th>";

      echo "<th>";
        echo "Avatar";
      echo "</th>";

      echo "<th>";
        echo "Link";
      echo "</th>";

      echo "<th>";
        echo "Story";
      echo "</th>";

      echo "<th>";
        echo "Introduction";
      echo "</th>";

      echo "<th>";
        echo "Save";
      echo "</th>";

      echo "<th>";
        echo "Delete";
      echo "</th>";
    while ($game_detail = mysqli_fetch_array($game_detail_list)) {
        $gameid = $game_detail['id'];
        $gamename = $game_detail['name'];
        $avatar = $game_detail['avatar'];
        $link = $game_detail['link'];
        $story = $game_detail['story'];
        $introduction = $game_detail['introduction'];
        echo "<tr id=\"$gameid\">";
          echo "<td>";
            echo "<input type=\"text\" value=\"$gamename\" disabled id=\"$gamename\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" value=\"$avatar\" id=\"$gameid"."avatar\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" value=\"$link\" id=\"$gameid"."link\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" value=\"$story\" id=\"$gameid"."story\">";
          echo "</td>";
          echo "<td>";
            //echo "<input type=\"text\" value=\"$introduction\" id=\"$gameid"."introduction\">";
			?> <input type="text" value='<?php echo htmlspecialchars($introduction);?>' id="<?=$gameid?>introduction"><?php			
          echo "</td>";
          echo "<td>";
            echo "<input type=\"button\" value=\"Save Changes\" onclick='savegamechanges(\"$gameid\")'>";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"checkbox\" onclick='deletegame(\"$gameid\")'>";
          echo "</td>";
        echo "</tr>";
    }
        echo "<tr>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newadventurename\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newadventureavatar\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newadventurelink\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newadventurestory\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newadventureintroduction\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"button\" value=\"Save New Game\" onclick='addnewgame(\"adventure\")'>";
          echo "</td>";
        echo "</tr>";
    echo "</table>";
    //game sport
    $game_detail_list = selectGamesOfCategory("sport");
    echo "<h2>Sport Games List</h2>";
    echo "<div id=\"gametables\">";
    echo "<table id=\"girltable\" class=\"gametable\">";
      echo "<th>";
        echo "Name";
      echo "</th>";

      echo "<th>";
        echo "Avatar";
      echo "</th>";

      echo "<th>";
        echo "Link";
      echo "</th>";

      echo "<th>";
        echo "Story";
      echo "</th>";

      echo "<th>";
        echo "Introduction";
      echo "</th>";

      echo "<th>";
        echo "Save";
      echo "</th>";

      echo "<th>";
        echo "Delete";
      echo "</th>";
    while ($game_detail = mysqli_fetch_array($game_detail_list)) {
        $gameid = $game_detail['id'];
        $gamename = $game_detail['name'];
        $avatar = $game_detail['avatar'];
        $link = $game_detail['link'];
        $story = $game_detail['story'];
        $introduction = $game_detail['introduction'];
        echo "<tr id=\"$gameid\">";
          echo "<td>";
            echo "<input type=\"text\" value=\"$gamename\" disabled id=\"$gamename\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" value=\"$avatar\" id=\"$gameid"."avatar\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" value=\"$link\" id=\"$gameid"."link\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" value=\"$story\" id=\"$gameid"."story\">";
          echo "</td>";
          echo "<td>";
            //echo "<input type=\"text\" value=\"$introduction\" id=\"$gameid"."introduction\">";
			?> <input type="text" value='<?php echo htmlspecialchars($introduction);?>' id="<?=$gameid?>introduction"><?php			
          echo "</td>";
          echo "<td>";
            echo "<input type=\"button\" value=\"Save Changes\" onclick='savegamechanges(\"$gameid\")'>";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"checkbox\" onclick='deletegame(\"$gameid\")'>";
          echo "</td>";
        echo "</tr>";
    }
        echo "<tr>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newsportname\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newsportavatar\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newsportlink\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newsportstory\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newsportdiscription\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"button\" value=\"Save New Game\" onclick='addnewgame(\"sport\")'>";
          echo "</td>";
        echo "</tr>";
    echo "</table>";
    //game brain
    $game_detail_list = selectGamesOfCategory("brain");
    echo "<h2>Brain Games List</h2>";
    echo "<div id=\"gametables\">";
    echo "<table id=\"girltable\" class=\"gametable\">";
      echo "<th>";
        echo "Name";
      echo "</th>";

      echo "<th>";
        echo "Avatar";
      echo "</th>";

      echo "<th>";
        echo "Link";
      echo "</th>";

      echo "<th>";
        echo "Story";
      echo "</th>";

      echo "<th>";
        echo "Introduction";
      echo "</th>";

      echo "<th>";
        echo "Save";
      echo "</th>";

      echo "<th>";
        echo "Delete";
      echo "</th>";
    while ($game_detail = mysqli_fetch_array($game_detail_list)) {
        $gameid = $game_detail['id'];
        $gamename = $game_detail['name'];
        $avatar = $game_detail['avatar'];
        $link = $game_detail['link'];
        $story = $game_detail['story'];
        $introduction = $game_detail['introduction'];
        echo "<tr id=\"$gameid\">";
          echo "<td>";
            echo "<input type=\"text\" value=\"$gamename\" disabled id=\"$gamename\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" value=\"$avatar\" id=\"$gameid"."avatar\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" value=\"$link\" id=\"$gameid"."link\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" value=\"$story\" id=\"$gameid"."story\">";
          echo "</td>";
          echo "<td>";
            //echo "<input type=\"text\" value=\"$introduction\" id=\"$gameid"."introduction\">";
			?> <input type="text" value='<?php echo htmlspecialchars($introduction);?>' id="<?=$gameid?>introduction"><?php			
          echo "</td>";
          echo "<td>";
            echo "<input type=\"button\" value=\"Save Changes\" onclick='savegamechanges(\"$gameid\")'>";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"checkbox\" onclick='deletegame(\"$gameid\")'>";
          echo "</td>";
        echo "</tr>";
    }
        echo "<tr>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newbrainname\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newbrainavatar\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newbrainlink\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newbrainstory\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newbrainintroduction\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"button\" value=\"Save New Game\" onclick='addnewgame(\"brain\")'>";
          echo "</td>";
        echo "</tr>";
    echo "</table>";
	/*
	//bs: gameother
    $game_detail_list = selectGamesOfCategory("othergame");
    echo "<h2>Other Games List</h2>";
    echo "<div id=\"gametables\">";
    echo "<table id=\"girltable\" class=\"gametable\">";
      echo "<th>";
        echo "Name";
      echo "</th>";

      echo "<th>";
        echo "Avatar";
      echo "</th>";

      echo "<th>";
        echo "Link";
      echo "</th>";

      echo "<th>";
        echo "Story";
      echo "</th>";

      echo "<th>";
        echo "Introduction";
      echo "</th>";

      echo "<th>";
        echo "Save";
      echo "</th>";

      echo "<th>";
        echo "Delete";
      echo "</th>";
    while ($game_detail = mysqli_fetch_array($game_detail_list)) {
        $gameid = $game_detail['id'];
        $gamename = $game_detail['name'];
        $avatar = $game_detail['avatar'];
        $link = $game_detail['link'];
        $story = $game_detail['story'];
        $introduction = $game_detail['introduction'];
        echo "<tr id=\"$gameid\">";
          echo "<td>";
            echo "<input type=\"text\" value=\"$gamename\" disabled id=\"$gamename\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" value=\"$avatar\" id=\"$gameid"."avatar\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" value=\"$link\" id=\"$gameid"."link\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" value=\"$story\" id=\"$gameid"."story\">";
          echo "</td>";
          echo "<td>";
            //echo "<input type=\"text\" value=\"$introduction\" id=\"$gameid"."introduction\">";
			?> <input type="text" value='<?php echo htmlspecialchars($introduction);?>' id="<?=$gameid?>introduction"><?php			
          echo "</td>";
          echo "<td>";
            echo "<input type=\"button\" value=\"Save Changes\" onclick='savegamechanges(\"$gameid\")'>";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"checkbox\" onclick='deletegame(\"$gameid\")'>";
          echo "</td>";
        echo "</tr>";
    }
        echo "<tr>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newbrainname\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newbrainavatar\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newbrainlink\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newbrainstory\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"text\" id=\"newbrainintroduction\">";
          echo "</td>";
          echo "<td>";
            echo "<input type=\"button\" value=\"Save New Game\" onclick='addnewgame(\"othergame\")'>";
          echo "</td>";
        echo "</tr>";
    echo "</table>";
	*/
    echo "</div>";
  ?>
</body>
</html>