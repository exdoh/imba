<? include "Configuration/webConfig.php"; ?>
<? //@ini_set('display_errors', '0');?>
<?
/*****function list
    wlog(str)
	trans_log($str)
	FormatDateTime($ts, $namedformat)
function list*****/
function readFiles($fn){
   wlog("function readFile[".$fn."]");
   $str = "";
   if(trim($fn)!=""){
     if(is_file($fn)){
	    $fp    = fopen($fn, "a+");
        if(is_readable($fn))
	    $str = fread($fp,filesize($fn));
        fclose($fp);
	 }//if(is_file($path))
   }// if(trim($path)!="")
  
  return $str;
}

   function writeFile($fn,$data){
     
     if(is_file($fn))unlink($fn);
	 
     $fp    = fopen($fn, "a+");
       if(is_writable($fn))
         {
	       $str = $data;
	       fwrite($fp, $str);
         }
      fclose($fp);
   }
function wlog($str)
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

function trans_log($str)
{  
   if(!is_dir('Transaction_Log'))
   mkdir('Transaction_Log/', 0777);
   
   $fname = date("ymd");
   $fn    = "Transaction_Log/Transaction_Admin_" . $fname . ".log";
   $fp    = fopen($fn, "a+");
     if(is_writable($fn))
       {
	  $str = date("H:i:s") . " ([Login:".$_SESSION["login_name"]."][id:".$_SESSION["login_id"]."]) " . $str . "\r\n";
	  fwrite($fp, $str);
       }
   fclose($fp);
}

function FormatDateTime($ts, $namedformat)
{
  $DefDateFormat = str_replace("yyyy", "%Y", DEFAULT_DATE_FORMAT);
	$DefDateFormat = str_replace("mm", "%m", $DefDateFormat);
	$DefDateFormat = str_replace("dd", "%d", $DefDateFormat);
	if (is_numeric($ts)) // timestamp
	{
		switch (strlen($ts)) {
			case 14:
			    $patt = '/(\d{4})(\d{2})(\d{2})(\d{2})(\d{2})(\d{2})/';
			    break;
			case 12:
			    $patt = '/(\d{2})(\d{2})(\d{2})(\d{2})(\d{2})(\d{2})/';
			    break;
			case 10:
			    $patt = '/(\d{2})(\d{2})(\d{2})(\d{2})(\d{2})/';
			    break;
			case 8:
			    $patt = '/(\d{4})(\d{2})(\d{2})/';
			    break;
			case 6:
			    $patt = '/(\d{2})(\d{2})(\d{2})/';
			    break;
			case 4:
			    $patt = '/(\d{2})(\d{2})/';
			    break;
			case 2:
			    $patt = '/(\d{2})/';
			    break;
			default:
					return $ts;
		}		
		if ((isset($patt))&&(preg_match($patt, $ts, $matches)))
		{
			$year = $matches[1];
			$month = @$matches[2];
			$day = @$matches[3];
			$hour = @$matches[4];
			$min = @$matches[5];
			$sec = @$matches[6];
		}
		if (($namedformat==0)&&(strlen($ts)<10)) $namedformat = 2;
	}
	elseif (is_string($ts))
	{		
		if (preg_match('/(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})/', $ts, $matches)) // datetime
		{
			$year = $matches[1];
			$month = $matches[2];
			$day = $matches[3];
			$hour = $matches[4];
			$min = $matches[5];
			$sec = $matches[6];
		}
		elseif (preg_match('/(\d{4})-(\d{2})-(\d{2})/', $ts, $matches)) // date
		{
			$year = $matches[1];
			$month = $matches[2];
			$day = $matches[3];
			if ($namedformat==0) $namedformat = 2;
		}
		elseif (preg_match('/(^|\s)(\d{2}):(\d{2}):(\d{2})/', $ts, $matches)) // time
		{
			$hour = $matches[2];
			$min = $matches[3];
			$sec = $matches[4];
			if (($namedformat==0)||($namedformat==1)) $namedformat = 3;
			if ($namedformat==2) $namedformat = 4;
		}
		else
		{
			return $ts;
		}
	}
	else
	{
		return $ts;
	}
	if (!isset($year)) $year = 0; // dummy value for times
	if (!isset($month)) $month = 1;
	if (!isset($day)) $day = 1;	
	if (!isset($hour)) $hour = 0;
	if (!isset($min)) $min = 0;
	if (!isset($sec)) $sec = 0;
	$uts = @mktime($hour, $min, $sec, $month, $day, $year);
	if ($uts == -1) { // failed to convert
		$year = substr_replace("0000", $year, -1 * strlen($year));
		$month = substr_replace("00", $month, -1 * strlen($month));
		$day = substr_replace("00", $day, -1 * strlen($day));
		$hour = substr_replace("00", $hour, -1 * strlen($hour));
		$min = substr_replace("00", $min, -1 * strlen($min));
		$sec = substr_replace("00", $sec, -1 * strlen($sec));
		$DefDateFormat = str_replace("yyyy", $year, DEFAULT_DATE_FORMAT);
		$DefDateFormat = str_replace("mm", $month, $DefDateFormat);
		$DefDateFormat = str_replace("dd", $day, $DefDateFormat);
		switch ($namedformat) {
			case 0:
			    return $DefDateFormat." $hour:$min:$sec";
			    break;
			case 1://unsupported, return general date
			    return $DefDateFormat." $hour:$min:$sec";
			    break;
			case 2:
			    return $DefDateFormat;
			    break;
			case 3:
					if (intval($hour)==0)
						return "12:$min:$sec AM";
					elseif (intval($hour)>0 && intval($hour)<12)
						return "$hour:$min:$sec AM";
					elseif (intval($hour)==12)
						return "$hour:$min:$sec PM";
					elseif (intval($hour)>12 && intval($hour)<=23)
						return (intval($hour)-12).":$min:$sec PM";
					else
						return "$hour:$min:$sec";
			    break;
			case 4:
			    return "$hour:$min:$sec";
			    break;
			case 5:
			    return "$year/$month/$day";
			    break;
			case 6:
			    return "$month/$day/$year";
			    break;
			case 7:
			    return "$day/$month/$year";
			    break;
		}
	} else {
		switch ($namedformat) {
			case 0:
			    return strftime($DefDateFormat." %H:%M", $uts);
			    break;
			case 1:
			    return strftime("%A, %B %d, %Y", $uts);		
			    break;
			case 2:
			    return strftime($DefDateFormat, $uts);
			    break;
			case 3:
			    return strftime("%I:%M:%S %p", $uts);
			    break;
			case 4:
			    return  strftime("%H:%M", $uts);		    
			    break;
			case 5:
			    return strftime("%Y/%m/%d", $uts);
			    break;
			case 6:
			    return strftime("%m/%d/%Y", $uts);
			    break;
			case 7:
			    return strftime("%d/%m/%Y", $uts);
			    break;
		}
	}
}

function listFileName($folder){
   if ($handle = opendir($folder)) {
     // $arr = array();
       $i = 0;
       while (false !== ($file = readdir($handle))){
           if ($file != "." && $file != "..") {
             $arr[$i] = $file;
			 $i++;
           }
       }
       closedir($handle);
    }//end if
	return $arr;
} //end function


?>