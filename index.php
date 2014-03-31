<?php
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/login.css" />
</head>
<body>
<div class="container">
<div class="header">
    <div class="logo_header">
            
    </div>
    <div class="signUp_header">
        <form name="login" action="php/login.php" method="post">
        <table>
        	<th colspan="2">
        		Login
        	</th>
        	<tr>
        		<td>UserName</td>
        		<td><input type="text" name="username" value="" /></td>
        	</tr>
        	<tr>
        		<td>Password</td>
        		<td><input type="password" name="pass" value="" /></td>
        	</tr>
        	<tr>
        		<td>
        			<input type="checkbox" name="remember" /> Remember me
        		</td>
                <td><a href="./php/fogot_pass.php">You forgot the password</a></td>
        	</tr>
        	<tr>
        		<td>
        			<input type="submit" value="Login" />
        		</td>
        		<td>
        			<a href="./php/register.php">Sign up</a>
        		</td>
        	</tr>
        </table>
        </form>        

    </div>
</div>
<div class="categories_game">
    <ul>
        <li><span>
                <img />
            </span>
            <a href="games/action.html" title="Action game" >Action</a>
        </li>
        <li><a href="games/strategy.html" title="Strategy game">Strategy</a></li>
        <li><a href="games/brain.html" title="Brain game">Brain</a></li>
        <li><a href="games/adventure.html" title="Adventure game">Adventure</a></li>
        <li><a href="games/speed.html" title="Speed game">Speed</a></li>
        <li><a href="games/classic.html" title="Classic game">Classic</a></li>
        <li><a href="games/other_game.html" title="Other good game">Other game</a></li>        
    </ul>
    <div class="boxsearch">
        <span class="search">
            <input type="text" placeholder="Search game"/>
            <input type="submit" name="submit_search" value="Search"/>
        </span>
    </div>
</div>
<div class="content">
<!--    <div class="game_container">
         <div class="box_gameplay"></div>
         <div class="vote_gameplay"></div>   
    </div>
    <div class="comment">
        
    </div>
-->  
</div>
<div class="footer"></div>
</div>
</body>
</html>