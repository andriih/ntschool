<?php 
	require_once '../models/db.php';

	function fetch_all_articles()
	{
		$query = db_query('SELECT * FROM articles ORDER BY dt DESC');
   		return $query->fetchAll();
	}

	function fetch_one_article($id)
	{
		$query = db_query('SELECT * FROM articles WHERE id=:id',[
			'id' => $id
		]);
   	
   		return $query->fetch();
	}
?>	