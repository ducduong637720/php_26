<?php 
require_once('Connection.php');
class Model{
	// private $conn;
	// public function __construct()
	protected function select($table, $columns = '*'){
	if ($columns == '*') {
		 $query = "SELECT * FROM " .$table;
	}elseif (is_array($columns)){
		$sub_string = '';
         foreach ($columns as $i => $column) {
         	$sub_string .= $column;
         	if ($i +  1 != count($columns)) {
         		$sub_string .= ',';
         	}
         }
          $query = "SELECT " . $sub_string . " FROM " . $table;
	}else{
		exit();
	}
     
    $connection = new Connection();
    $conn = $connection->connect();
    $result = $conn->query($query);

    $data = array();

    while ($row = $result->fetch_assoc()) {
        $data[]= $row;
    }
    return $data;
}

    protected function insert($table, $data){
	$query = "INSERT INTO $table";
	$string_1 = '';
	$string_2 = '';

	$i = 0;

	foreach ($data as $column => $value) {
		$i++;

		$string_1 .= $column;
		if ($i != count($data)) {
			$string_1 .= ',';
		}
		$string_2 .= "'" . $value ."'";
		if ($i != count($data)) {
			$string_2 .= ',';
		}
	}
	$string = '('. $string_1 .')' . 'VALUE' . '('. $string_2 .')' ;
	$query .=  $string;
	  
    $connection = new Connection();
    $conn = $connection->connect();
	$status = $conn->query($query);
	return $status;
}

protected function getID ($table, $id){
		   $query ="SELECT * FROM $table WHERE id =".$id;
		   $connection = new Connection();
           $conn = $connection->connect();
		   $result = $conn->query($query);
		   $row = $result->fetch_assoc();
		   return $row;
  		}
// function delete($table, $id){
//    $query = "DELETE From " .$table ." WHERE id = " .$id;

//    $connection = new Connection();
//     $conn = $connection->connect();
//    $status = $conn->query($query);
//    return $status;
// }

 protected function update($table, $data, $id){
	$query = "UPDATE $table SET ";
	$string = '';
	$i = 0;
	foreach ($data as $column => $value) {
		$i++;
		$string .= $column . "=" . "'" . $value . "'";

		if ($i != count($data)) {
			$string .= ",";
		}
	}
	$query = $query . $string .  " WHERE id = " . $id;
	
	$connection = new Connection();
    $conn = $connection->connect();
	$status = $conn->query($query);
	return $status;
}
}
?>