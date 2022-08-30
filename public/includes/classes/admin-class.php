<?php

/**
 * 
 */
class Deletion
{
	public $tableName;
	private $id;
	private $tableIdColumn;
	public $referPage;
	function deleteColumn($tableName,$tableIdColumn,$referPage)
	{
	 
include('includes/connectionpage.php');
      
          
       $this->id=$id;
       $this->tableName=$tableName;
       $this->tableIdColumn=$tableIdColumn;
       $this->referPage=$referPage;
if(isset($_REQUEST['id']))
      {
$id=$_REQUEST['id'];
    $resultSelect="DELETE FROM $tableName WHERE $tableIdColumn='$id'";
  $stmt1=$con->query($resultSelect);
      header("location:".$referPage);
     
          }
        }
      }



    


?>