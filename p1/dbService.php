<?  
  function db_wlog($str)
   {  
      if(!is_dir('Log'))
        mkdir('Log/', 0777);

      $fname = date("ymd");
      $fn    = "Log/Admin_" . $fname . ".log";
      $fp    = fopen($fn, "a+");
        if(is_writable($fn))
        {
		  $str = date("H:i:s")." [".$_SESSION["login_name"]."]  " . $str . "\r\n";
	      fwrite($fp, $str);
        }
       fclose($fp);
   }
   
  function connect($server,$user,$pass){
     //db_wlog("connect mysql [".$server." , ".$user." , ".$pass."]");
     $connected=mysql_connect($server,$user,$pass);
     if($connected == "")db_wlog('Can not connected DataBase[Server name : '.$server.' | username : '.$user.']');
     return $connected;
  }
  
  function selectDB($db,$con){
    $s_db = mysql_select_db($db,$con);
    if($s_db=="")db_wlog('Can not select DB Name['.$db.']');
	return $s_db;
  }
  
  function query($sql){
   $rs=mysql_query($sql);
   return $rs;
  }
  
  function execute($sql){
    $res = mysql_query($sql);
	return $res;
  }
  
  function loop($rs){
	return mysql_fetch_assoc($rs);
  }
   
  function field($row,$fn){
	return trim($row[$fn]);
  }
      
  function free($rs){
	 mysql_free_result($rs);
  }
  
  function close($con){
	mysql_close($con);
  }
  
  function to_sqlDateTime($rDate,$dbType){
   $ret = 'NULL';
   if($rDate!=''){
	$tmp_d = explode(' ',$rDate);
	$date = explode('/',$tmp_d[0]);
	$time = explode(':',$tmp_d[1]);
	settype($dbType,int);
	   switch ($dbType)
       {
          case 1 :     // oracle
                  $ret =  "TO_DATE('".date("d/m/Y H:i:s",mktime($time[0],$time[1],$time[2],$date[0],$date[1],$date[2]))."','DD/MM/YYYY HH24:MI:SS')";
		  break;
		  case 2 :      // sql server
                  $ret = "{ ts '".date("Y-m-d H:i:s",mktime($time[0],$time[1],$time[2],$date[0],$date[1],$date[2]))."' }";
		  break;
		  case 3 :      // access
                  $ret = "CDATE('".date("m, d Y H:i:s",mktime($time[0],$time[1],$time[2],$date[0],$date[1],$date[2]))."')";
		  break;
          case 4 :      // DB2
                 $ret = "'".date("Y-m-d H:i:s",mktime($time[0],$time[1],$time[2],$date[0],$date[1],$date[2]))."'";
		  break;
          case 5 :      // mysql
                  $ret = "'".date("Y-m-d H:i:s",mktime($time[0],$time[1],$time[2],$date[0],$date[1],$date[2]))."'";
		  break;
       } //end switch
	 }//end chk null
	
	return $ret;
  }
  
   function to_sqlDate($rDate,$dbType){
    $ret = "NULL";
	if($rDate!=''){
	$date = explode('/',$rDate);
	
	settype($dbType,int);
	   switch ($dbType)
       {
          case 1 :     // oracle
                  $ret =  "TO_DATE('".date("d/m/Y",mktime(0,0,1,$date[0],$date[1],$date[2]))."','DD/MM/YYYY')";
		  break;
		  case 2 :      // sql server
                  $ret = "{ d '".date("Y-m-d",mktime(0,0,1,$date[0],$date[1],$date[2]))."' }";
		  break;
		  case 3 :      // access
                  $ret = "CDATE('".date("m, d Y",mktime(0,0,1,$date[0],$date[1],$date[2]))."')";
		  break;
          case 4 :      // DB2
                 $ret = "'".date("Y-m-d",mktime(0,0,1,$date[0],$date[1],$date[2]))."'";
		  break;
          case 5 :      // mysql
                  $ret = "'".date("Y-m-d",mktime(0,0,1,$date[0],$date[1],$date[2]))."'";
		  break;
       } //end switch
	 }//end chk null
	return $ret;
  }
  function now_datetime(){	
	//$ret = date('H').'|'.date('i').'|'.date('s').'|'.date('m').'|'.date('d').'|'.date('Y').'|';
	$ret = date('m').'/'.date('d').'/'.date('Y').' '.date('H').':'.date('i').':'.date('s');
	return $ret;
  }
   function getFieldName($table,$dbtype){
      $ret = "";
	  settype($dbtype,int);
	    switch($dbtype){
	      case 1 :
		            $ret = "select distinct column_name from sys.all_tab_columns where table_name = upper('".$table."') order by column_name asc";
		  break;
		  case 2 :
		              $ret = "EXEC sp_columns @table_name = '".$table."'";
		  break;
	    } //end switch
	   return $ret;
   }
      function getTableName($dbtype){
      $ret = "";
	  settype($dbtype,int);
	    switch($dbtype){
	      case 1 :
		            $ret = "select distinct TNAME as table_name from tab where tabtype='TABLE' or tabtype='VIEW' order by TNAME";
		  break;
		  case 2 :
		              $ret = "EXEC sp_tables";
		  break;
	    } //end switch
	   return $ret;
   }
   function replace_str($str){
    // $str = str_replace("\'","''",$str);
	 return $str;
   }
     function genTopSql($dbtype,$num){
      $ret = "";
	  settype($dbtype,int);
	  settype($num,int);
	    switch($dbtype){
	      case 1 :
		            $ret = "TOP ".$num;
		  break;
		  case 2 :
		            $ret = "rownum <= ".$num;
		  break;
	    } //end switch
	   return $ret;
   }
 ?>