<?php
	function subMenu($data, $id) {
		echo "<ul>";
		foreach ($data as $item) {
			if($item["parent_id"] == $id) {
				echo '<li><a href="">'.$item['category_name'].'</a>';
				echo '</li>';
			}
		}
		echo "</ul>";
	}
 ?>