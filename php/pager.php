<?php
	class Pager {
	
		// return the first row of selected page
		function findStart($limit) {
			if(!isset($_GET['page']) || $_GET['page'] == "1") {
				$start = 0;
				$_GET['page'] = 1;
			}
			else {
				$start = ($_GET['page'] - 1) * $limit;
			}
			
			return $start;
		}
		
		// return number needed pages
		function findPages($count, $limit) {
			$page = $count % $limit == 0 ? $count / $limit : floor($count / $limit) + 1;
			return $page;
		}
		
		// return page list
		function pageList($curpage, $pages) {
			$page_list = ""; 
		
			// print first page and link to previous page
			if($curpage != 1 && $curpage) {
				$page_list .= "<a href=\"".$_SERVER['PHP_SELF']."?page=1\" title=\"First page\"><< </a>";
			}
			
			if($curpage - 1 > 0) {
				$page_list .= "<a href=\"".$_SERVER['PHP_SELF']."?page=".($curpage - 1). "\" title=\"Previous page\">< </a>";
			}
			
			// print page list and format current page
			for($i = 1; $i <= $pages; $i++) {
				if($i == $curpage) {
					$page_list .="<b>".$i."</b>";
				}
				else {
					$page_list .= "<a href=\"".$_SERVER['PHP_SELF']."?page=".$i. "\" title=\"Page "."$i"."\">".$i."</a>";
				}
				$page_list .= " ";
			}
			
			// print link of next page and end page
			if($curpage + 1 <= $pages) {
				$page_list .= "<a href=\"".$_SERVER['PHP_SELF']."?page=".($curpage + 1). "\" title=\"Next page\">> </a>";
			}
			
			if($curpage != $pages && $pages !=0) {
				$page_list .= "<a href=\"".$_SERVER['PHP_SELF']."?page=".$pages."\" title=\"First page\">>> </a>";
			}
			
			return $page_list;
		}
	}
?>