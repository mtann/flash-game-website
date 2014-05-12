<?php
	class Pager{
		// return first row of selected page
		// param: limit
		function findStart($limit) {
			if((!isset($_GET['page'])) || ($_GET['page'] == "1")) {
				$start = 0;
				$_GET['page'] = 1;
			}
			else {
				$start = ($_GET['page'] - 1) * linmit;
			}
			return $start;
		}
		
		// return needed pages
		// param: count, limit
		function findPages($count, $limit) {
			$page = (($count % $limit) == 0) ? $count / $limit : floor($count / $limit) + 1;
			return $page;
		}
		
		function pageList($curpage, $pages) {
			$page_list = "";
			if(($curpage =! 1) && $curpage) {
				$page_list .= "<a href=\"".$_SERVER['PHP_SELF'].
								"?page=1\" title=\"First page\"><<</a> ";
			}
			
			if(($curpage - 1) > 0) {
				$page_list .= "<a href=\"".$_SERVER['PHP_SELF'].
								"?page=".($curpage - 1)."\" title=\"Previous page\"><</a> ";
			}
			
			for($i = 1; $i <= $pages; $i++) {
				if($i == $curpage) {
					$page_list .= "<b>".$i."</b>";
				}
				else {
					$page_list .= "<a href=\"".$_SERVER['PHP_SELF'].
								"?page=".$i."\" title=\"Page ".$i."\">".$i."</a> ";
				}
				$page_list .= " ";
			}
			
			if(($curpage + 1) <= $pages) {
				$page_list .= "<a href=\"".$_SERVER['PHP_SELF'].
								"?page=".($curpage + 1)."\" title=\"Next page\">></a> ";
			}
			
			if(($curpage != $pages) && ($pages != 0)) {
				$page_list .= "<a href=\"".$_SERVER['PHP_SELF'].
								"?page=".$pages."\" title=\"Last page\">>></a> ";
			}
			
			$page_list .= "\n";
			
			return $page_list;
		}
		
		function nextPrev($curpage, $pages) {
			$next_prev = "";
			
			if(($curpage - 1) <= 0) {
				$next_prev .= "Previous page";
			}
			else {
				$next_prev .= "<a href=\"".$_SERVER['PHP_SELF'].
								"?page=".($curpage - 1)."\">Previous page</a> ";
			}
			
			$next_prev .= " | ";
			
			if(($curpage + 1) > $pages) {
				$next_prev .= "Next page";
			}
			else {
				$next_prev .= "<a href=\"".$_SERVER['PHP_SELF'].
								"?page=".($curpage + 1)."\">Next page</a> ";
			}
			
			return $next_prev;
		}
	}
?>