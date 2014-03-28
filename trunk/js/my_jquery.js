$(document).ready(
	function() {
		$("button").click(
			function() {				
					$("embed").toggle(changeBtnName());
			}
		);
	}
	
);

function changeBtnName() {
		if ($("button").text() === "Show game")
			$("button").text("Hide game");
		else
			$("button").text("Show game");
	}