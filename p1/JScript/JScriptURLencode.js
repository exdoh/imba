function urlEncode(strTemp)
{
   // strTemp = strTemp.replace(/%/gi,'%25');
    //strTemp = strTemp.replace(/'/gi,'%27');
    strTemp = strTemp.replace(/\+/gi,'%2B');
  //  strTemp = strTemp.replace(/=/gi,'%3D');
  //  strTemp = strTemp.replace(/?/gi,'%3F');
//    strTemp = strTemp.replace(/ /gi,'%20');
 //   strTemp = strTemp.replace(/,/gi,'%2C');
 //   strTemp = strTemp.replace(/&/gi,'%26');
    strTemp = strTemp.replace(/#/gi,'%23');
  //  strTemp = strTemp.replace(/\//gi,'%2F');
	return strTemp;
}