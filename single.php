<?php
$category = get_the_category();
$firstCategory = $category[0]->slug;


if (in_category($firstCategory)) {include (TEMPLATEPATH . '/single-'.$firstCategory.'.php');
}
else { include (TEMPLATEPATH . '/single-1.php');
}
?>