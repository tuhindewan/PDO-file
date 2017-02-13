<?php

// Search statement

	$statement = $db->prepare("select * from tbl_login where username=? and password=?");
	$statement->execute(array($_POST['username'],$password));

// Insert statement

	$statement = $db->prepare("insert into tbl_student (st_name,st_roll,st_age,st_email) values(?,?,?,?)");
	$statement->execute(array($_POST['st_name'],$_POST['st_roll'],$_POST['st_age'],$_POST['st_email']));
		
	$success_message = 'Data has been inserted successfully.';	


//	update statement

	$statement = $db->prepare("update tbl_student set st_name=?,st_roll=?,st_age=?,st_email=? where st_id=?");
	$statement->execute(array($_POST['st_name'],$_POST['st_roll'],$_POST['st_age'],$_POST['st_email'],$id));	
					
		
	$success_message = 'Data has been updated successfully.';
		


?>