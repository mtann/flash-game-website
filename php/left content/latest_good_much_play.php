<html>
	<head>
			
		<style type="text/css">
			
			.container1
			{
				float: left;
				width: 697px;
				border: 1px solid #DFDFDF;
				box-shadow: 0 0 5px #DFDFDF;
				margin-top:-20px;
			}
			.navcontainer1 ul
			{
				background-color: #fff;
				border-bottom:1px solid #DFDFDF;
				border-top:1px solid #DFDFDF;
				float:left;
				font-family:arial,helvetica,sans-serif;
				font-size:12px;
				margin:0pt;
				padding:0pt;
				width:100%;
			}
			.navcontainer1 ul li
			{
				display: inline;
				text-align: center;
			}
			.navcontainer1 ul li a:hover
			{
				background-color:#CCCCCC;
				color:#FFFFFF;
			}
			.navcontainer1 ul li a
			{
				border-right:1px solid #DFDFDF;
				background-color: #BBBBBB;
				font-weight: bold;
				color:#FFFFFF;
				float:left;
				padding:10px;
				text-decoration:none;
				width: 170px;
			}
			.navcontainer1 ul li a.current
			{
				border-right:1px solid #24BDE2;
				background-color: #24BDE2;
				font-weight: bold;
				color:#fff;
				float:left;
				padding:10px;
				text-decoration:none;
				width: 170px;
			}
			#tabcontent
			{
				min-height: 200px;
				padding-top: 80px;
				padding-left: 10px;
			}
			#preloader
			{
				position: absolute;
				top: 280px;
				left: 184px;
				z-index: 100;
				padding: 5px;
				text-align: center;
				background-color: #FFFFFF;
				border: 1px solid #000000;
			}
		</style>
		<script type="text/javascript" src="js/jquery-1.11.0.js"></script>
		<script type="text/javascript">			
			
			function loadTabContent(tabUrl, tid){
				//tabId = $(this).attr("id");
				tabId = "tab"+tid;
				jQuery("[id^=tab]").removeClass("current");
				jQuery("#"+tabId).addClass("current");
				$("#preloader").show();
				jQuery.ajax({
					url: tabUrl, 
					cache: false,
					success: function(message) {
						jQuery("#tabcontent").empty().append(message);
						$("#preloader").hide();
					}
				});
			}
			
			function myInit()
			{
				id_tab = document.getElementById("tab1");
				hr = id_tab.getAttribute("href");
				id_tab.setAttribute("href", "#");
				id_tab.setAttribute("onClick", "loadTabContent('"+hr+"', 1)");
			}
			
			jQuery(document).ready(function(){				
				
				$("#preloader").hide();	
				
				tabUrl = jQuery("#tab1").attr("href");
				//jQuery("[id^=tab]").removeClass("current");					
				//jQuery("#tab1").addClass("current");
				loadTabContent(tabUrl, 1);
				myInit();
				
				/*
				jQuery("[id^=tab]").click(function(){	
					
					// get tab id and tab url
					tabId = $(this).attr("id");	
					//alert(tabId);
					tabUrl = jQuery("#"+tabId).attr("href");
					//
					jQuery("[id^=tab]").removeClass("current");
					jQuery("#"+tabId).addClass("current");
					
					// load tab content
					//if(tabUrl!=NULL) {
					//alert(tabUrl);
					loadTabContent(tabUrl);
					//}
					
					return false;
				});	*/		

			});
			
		</script>
	</head>
	<body>
		<?php 
			//$type = $_GET['mod'];
			$type = "action";
			$matchtype = array(
				'action'=>"HÀNH ĐỘNG",
				'sport'=>"THỂ THAO",
				'girl'=>"BẠN GÁI",
				'brain'=>"TRÍ TUỆ",
				'adventure'=>"PHIÊU LƯU",
				'strategy'=>"CHIẾN THUẬT",
				'othergame'=>"KHÁC"
			);
		?>
		<div class="container1">
		
			<div class="navcontainer1">
				<ul>
					<li><a id="tab1" href="php/left content/tabsindex.php?id=1&mod=<?php echo $type ?>">GAME HAY NHẤT</a></li>
					<li><a id="tab2" onClick="loadTabContent('php/left content/tabsindex.php?id=2&mod=<?php echo $type ?>', 2)" href="#">CHƠI NHIỀU</a></li>
					<li><a id="tab3" onClick="loadTabContent('php/left content/tabsindex.php?id=3&mod=<?php echo $type ?>', 3)" href="#">BÌNH CHỌN NHIỀU</a></li>					
				</ul>
			</div>

			<div id="preloader">
				<img src="img/loading.gif" align="absmiddle"> Loading...				
			</div>
			
			<div id="tabcontent">
			 
			</div>
					
		</div>
	</body>
</html>