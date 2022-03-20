 <?php 
 
 function selectalldata($table)
 {
	   $select="SELECT * FROM $table";
   $select1=mysqli_query($GLOBALS['connect'],$select);
   return $select1;
 }
 
  function selectdatabyid($table,$id)
   {
   $select="SELECT * FROM $table where id= $id";
   $select1=mysqli_query($GLOBALS['connect'],$select);
   return mysqli_fetch_array($select1);

   }
 
 function insert($data,$table)
   {
        $columns = "";
		$values = "";
		
		foreach ($data as $column => $value) {
			
			$columns .= ($columns == "") ? "" : ", ";
			
			$columns .= $column;
			
			$values .= ($values == "") ? "" : ", ";
			$values .= $value;
		}
		
		//echo $columns;
		//echo $values;
		
	$insert=("INSERT INTO $table ($columns) VALUES ($values)");
	//echo $insert;
	mysqli_query($GLOBALS['connect'],$insert);
   }
   
   
    function update($data,$table,$where)
   {
	foreach ($data as $coloum => $value)
    {
    $update=("UPDATE $table SET $coloum = $value WHERE id= '$where'");
	//echo $update;
	mysqli_query($GLOBALS['connect'],$update);
    }
	return true;
   }
   
   function deletedata($table,$where)
   {
    $delete=("DELETE FROM $table WHERE id=$where");
	mysqli_query($GLOBALS['connect'],$delete) or die(mysqli_error());
	return true;
   }
   
   ?>