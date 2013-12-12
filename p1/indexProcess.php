<? // session_start();?>
<? include "Configuration/dbConfig.php"; ?>
<? include("dbService.php"); ?>
<? include("functionService.php");?>
<?
class indexProcess{
 ////////////////////////////////////////////////////////////////////////
  //get data
  function getData_news(){
     
	 global $ip;
	 global $username;
	 global $password;
	 global $db_name;
	 global $db_type;
	 
	$i = 0;
	$obj = array();
	$connected = connect($ip,$username,$password); 
	$db        = selectDB($db_name,$connected);
	$sql = "SELECT * FROM news order by news_id desc";
    wlog($sql);
  	$rs=query($sql);
   	 while($row = loop($rs)){
        $obj[$i]->id     = $row["news_id"];
		$obj[$i]->topic  = $row["topic"];
		$obj[$i]->file_path   = $row["file_path"];
		
		if($i==4)break;
		$i++;
		}//end while
	 free($rs);
	 close($connected); 		
	
	return $obj; 
}//end function get

 //get data
  function getData_events(){
     
	 global $ip;
	 global $username;
	 global $password;
	 global $db_name;
	 global $db_type;
	 
	$i = 0;
	$obj = array();
	$connected = connect($ip,$username,$password); 
	$db        = selectDB($db_name,$connected);
	$sql = "SELECT * FROM events order by events_id desc";
    wlog($sql);
  	$rs=query($sql);
   	 while($row = loop($rs)){
        $obj[$i]->id     = $row["events_id"];
		$obj[$i]->topic  = $row["topic"];
		$obj[$i]->file_path   = $row["file_path"];
		
		if($i==4)break;
         
		$i++;
		}//end while
	 free($rs);
	 close($connected); 		
	
	return $obj; 
}//end function get
/////////////////////////////////////////////////////////////////////////////////

 ///////////////////////////////////////////////////////////////////////////////
 //get data
  function getData_news_all(){
     
	 global $ip;
	 global $username;
	 global $password;
	 global $db_name;
	 global $db_type;
	 
	$i = 0;
	$obj = array();
	$connected = connect($ip,$username,$password); 
	$db        = selectDB($db_name,$connected);
	$sql = "SELECT * FROM news order by news_id desc";
    wlog($sql);
  	$rs=query($sql);
   	 while($row = loop($rs)){
        $obj[$i]->id     = $row["news_id"];
		$obj[$i]->topic  = $row["topic"];
		$obj[$i]->file_path   = $row["file_path"];

		$i++;
		}//end while
	 free($rs);
	 close($connected); 		
	
	return $obj; 
}//end function get

 //get data
  function getData_events_all(){
     
	 global $ip;
	 global $username;
	 global $password;
	 global $db_name;
	 global $db_type;
	 
	$i = 0;
	$obj = array();
	$connected = connect($ip,$username,$password); 
	$db        = selectDB($db_name,$connected);
	$sql = "SELECT * FROM events order by events_id desc";
    wlog($sql);
  	$rs=query($sql);
   	 while($row = loop($rs)){
        $obj[$i]->id     = $row["events_id"];
		$obj[$i]->topic  = $row["topic"];
		$obj[$i]->file_path   = $row["file_path"];

		$i++;
		}//end while
	 free($rs);
	 close($connected); 		
	
	return $obj; 
}//end function get
/////////////////////////////////////////////////////////////////////////////////////////////


 ///////////////////////////////////////////////////////////////////////////////
 //get data
  function searchData_news($txt){
     
	 global $ip;
	 global $username;
	 global $password;
	 global $db_name;
	 global $db_type;
	 
	$i = 0;
	$obj = array();
	$connected = connect($ip,$username,$password); 
	$db        = selectDB($db_name,$connected);
	$sql = "SELECT * FROM news where topic LIKE '%".$txt."%' order by news_id desc";
    wlog($sql);
  	$rs=query($sql);
   	 while($row = loop($rs)){
        $obj[$i]->id     = $row["news_id"];
		$obj[$i]->topic  = $row["topic"];
		$obj[$i]->file_path   = $row["file_path"];

		$i++;
		}//end while
	 free($rs);
	 close($connected); 		
	
	return $obj; 
}//end function get

 //get data
  function searchData_events($txt){
     
	 global $ip;
	 global $username;
	 global $password;
	 global $db_name;
	 global $db_type;
	 
	$i = 0;
	$obj = array();
	$connected = connect($ip,$username,$password); 
	$db        = selectDB($db_name,$connected);
	$sql = "SELECT * FROM events where topic LIKE '%".$txt."%' order by events_id desc";
    wlog($sql);
  	$rs=query($sql);
   	 while($row = loop($rs)){
        $obj[$i]->id     = $row["events_id"];
		$obj[$i]->topic  = $row["topic"];
		$obj[$i]->file_path   = $row["file_path"];

		$i++;
		}//end while
	 free($rs);
	 close($connected); 		
	
	return $obj; 
}//end function get
/////////////////////////////////////////////////////////////////////////////////////////////

}// end class skill process
?>