<?php


// Insert statement

	$statement = $db->prepare("insert into tbl_student (st_name,st_roll,st_age,st_email) values(?,?,?,?)");
	$statement->execute(array($_POST['st_name'],$_POST['st_roll'],$_POST['st_age'],$_POST['st_email']));
		
	$success_message = 'Data has been inserted successfully.';	


//	update statement

	$statement = $db->prepare("update tbl_student set st_name=?,st_roll=?,st_age=?,st_email=? where st_id=?");
	$statement->execute(array($_POST['st_name'],$_POST['st_roll'],$_POST['st_age'],$_POST['st_email'],$id));	
					
		
	$success_message = 'Data has been updated successfully.';

	//Search statement

		$statement = $db->prepare("SELECT * FROM tbl_category WHERE cat_name=?");
		$statement->execute(array($_POST['cat_name']));
		$total = $statement->rowCount();
		
		if($total>0) {
			throw new Exception("Category Name already exists.");
		}
		




		//foreach loop fetchAll function

		$statement = $db->prepare("SELECT * FROM tbl_category ORDER BY cat_name ASC");
	    $statement->execute();
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as $row)



		//Delete statement	


		if (isset($_REQUEST['id'])) {
	
			$id = $_REQUEST['id'];
			$statement = $db->prepare("DELETE FROM table_category WHERE cat_id=?");
			$statement->execute(array($id));
			
			$success_message2 = "Category Name has been deleted successfully.";
				}	

?>