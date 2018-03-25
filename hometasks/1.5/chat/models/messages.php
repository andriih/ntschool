 <?php 
	require_once 'db.php';
	
	function messages_all(){
		$query = db_query("SELECT * FROM messages ORDER BY dt DESC");
        return $query->fetchAll();
	}
	
	function messages_one($id){
        
        $query = db_query("SELECT * FROM messages WHERE id_message=:id",
        [
           'id' => $id
        ]);
    
            return $query->fetch();
	}
?>