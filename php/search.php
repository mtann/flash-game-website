<!--code for form search-->
<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST'){
echo "chua post";
}
else{
echo "post roi";
print_r(array_count_values($_POST));
//echo "".$count."";
$find = $_POST['box-search'];
echo "".$find."";
}
?>