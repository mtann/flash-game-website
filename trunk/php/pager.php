<?php
	class Pager{
	
		var $params = "";
		var $id = "";
		var $tid = "1";
		
		function setId($tab) {
			$this->id = "id=\"".$tab;
		}
		
		function setParams($input) {
			$this->params = $input;
			$this->tid = substr($input, 3, 1);
		}
		
		// return first row of selected page
		// param: limit
		function findStart($limit) {
			if((!isset($_GET['my_page'])) || ($_GET['my_page'] == "1")) {
				$start = 0;
				$_GET['page'] = 1;
			}
			else {
				$start = ($_GET['my_page'] - 1) * $limit;
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
			
			if(($curpage != 1) ) {
				$page_list .= "<a ".$this->id."\"href='#' title=\"First page\" onClick=\"javascript:loadTabContent('".$_SERVER['PHP_SELF']."?".$this->params.
								"&my_page="."1"."', ".$this->tid.")\"><<</a> ";							
			}
			
			if(($curpage - 1) > 0) {
				$page_list .= "<a ".$this->id."\"href='#' title=\"Previous page\" onClick=\"javascript:loadTabContent('".$_SERVER['PHP_SELF']."?".$this->params.
								"&my_page=".($curpage - 1)."', ".$this->tid.")\"><</a> ";
			}
			
			for($i = 1; $i <= $pages; $i++) {
				if($i == $curpage) {
					$page_list .= "<b>".$i."</b>";
				}
				else {
					$page_list .= "<a ".$this->id.$i."\"href='#' title=\"Page ".$i."\" onClick=\"javascript:loadTabContent('".$_SERVER['PHP_SELF']."?".$this->params.
								"&my_page=".$i."', ".$this->tid.")\">".$i."</a> ";
				}
				$page_list .= " ";
			}
			
			if(($curpage + 1) <= $pages) {
				$page_list .= "<a ".$this->id."\"href='#' title=\"Next page\" onClick=\"javascript:loadTabContent('".$_SERVER['PHP_SELF']."?".$this->params.
								"&my_page=".($curpage + 1)."', ".$this->tid.")\">></a> ";
			}
			
			if(($curpage != $pages) && ($pages != 0)) {
				$page_list .= "<a ".$this->id."\"href='#' title=\"Last page\" onClick=\"javascript:loadTabContent('".$_SERVER['PHP_SELF']."?".$this->params.
								"&my_page=".$pages."', ".$this->tid.")\">>></a> ";
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
				$next_prev .= "<a ".$this->id." href=\"".$_SERVER['PHP_SELF']."?".$this->params.
								"&my_page=".($curpage - 1)."\">Previous page</a> ";
			}
			
			$next_prev .= " | ";
			
			if(($curpage + 1) > $pages) {
				$next_prev .= "Next page";
			}
			else {
				$next_prev .= "<a ".$this->id." href=\"".$_SERVER['PHP_SELF']."?".$this->params.
								"&my_page=".($curpage + 1)."\">Next page</a> ";
			}
			
			return $next_prev;
		}
	}
?>