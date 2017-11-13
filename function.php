<?php
	function get_categores ()
	{
		//$link - подключение в БД
		global $link;
		$sql = "SELECT * FROM Type_of_work";
		$result = mysqli_query($link, $sql);
		$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

		return $categories;
	}

	function get_works ($id)
	{
		global $link;

		$id = intval($id);
		if ($id == 0)
		{
			$sql = "SELECT * FROM Works ORDER BY RAND() LIMIT 8";	
		}
		else
		{
			$sql = "SELECT * FROM Works WHERE id_type=".$id." LIMIT 8";	
		}
		$result = mysqli_query($link, $sql);
		$works = mysqli_fetch_all($result, MYSQLI_ASSOC);

		return $works;
	}

?>