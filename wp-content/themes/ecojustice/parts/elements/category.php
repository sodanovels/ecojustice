<?php 
$fields = get_field('catagory');
$cat = get_object_vars($fields);
$cat_name = $cat['name'];
echo $cat_name;
?>