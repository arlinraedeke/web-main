<?php
//Common Functions for use on all pages. (Typically loaded by boot.php)

/**
 * Sanitize a string by removing special characters and extra whitespace.
 * @param $str
 * @return string
 */
function sanitize($str){
  $str = preg_replace("/[^a-zA-Z0-9_ \-@\.\/']/", '', $str);
  return trim($str);
}

/**
 * Returns the name of the file running the current script.
 * @param $removeExt Optionally removes the file extension (default: true)
 * @return string filename
 */
function getCurrentPage($removeExt=true){
  $curPage = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);
  if ($removeExt && strrpos($curPage,'.') > 0){
    $curPage = substr($curPage,0,strrpos($curPage,'.'));
  }
  return $curPage;
}

/**
 * Returns the full url of the page that requested the current script.
 * Great when used with parse_url (http://php.net/manual/en/function.parse-url.php)
 * @return string url
 */
function getCurrentUrl(){
  $s = (@$_SERVER['HTTPS'] == "on")? 's' : '';
  $url = "http$s://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
  return $url;
}

/**
 * Returns the root directory of the current script.
 * Often used to resolve clean url resource loading issues
 * @return string path
 */
function getCurrentDir(){
    $thisdir = dirname($_SERVER['SCRIPT_NAME']);
    return ($thisdir == '/')? '': $thisdir;
}

/**
 * Returns the html and javascript to generate a mailto: link on page load
 * hopefully hiding it from bots and scrapers
 * @param string $email email address
 * @param string $linkText clickable text generated (optional, defaults to email)
 * @return string html + js
 */
function getSafeEmailLink($email,$linkText=''){
  if (!$email || $email == ''){
    return '';
  }
  //Handle optional linkText
  if ($linkText == ''){
    $linkText = $email;
  }
  //Assmble html + js
  $emailArr = str_split($email,3);
  $textArr = str_split($linkText,4);
  $html = "\n".'<script type="text/javascript">'."\n";
  $html .= 'var th = "ilto"; em = "'.implode('"+"', $emailArr).'"; tx = "'.implode('"+"', $textArr).'";'."\n";
  $html .= "document.write('<a ' + 'hr' + 'ef=\"ma'+th+':'+em+'\" rel=\"nofollow\">'+tx+'</a>');"."\n";
  $html .= '</script>'."\n";
  return $html;
}

/**
 * Returns a string $time in humanly quantifiable measure
 * For example, "yesterday, next week, 3 months ago"
 * @param DateTime $timestamp
 * @return string $time
 */
function getHumanReadableTimeDelta($timestamp){
  $now = time();
  $result = "now";
  //time is in the future
  if ($timestamp > $now){
    //TODO: Complete the future!
    return 'soon';
  }
  //time is in the past
  if ($timestamp < $now){
    $delta = $now - $timestamp;
    if ($delta < 60){
      return $delta . ' seconds ago';
    }
    if ($delta < 3600){
      return round($delta / 60, 0) . ' minutes ago';
    }
    if ($delta < 86400){
      return round($delta / 3600, 0) . ' hours ago';
    }
    if ($delta < 2592000){
      return round($delta / 86400, 0) . ' days ago';
    }
    if ($delta < 3888000){
      return 'a month ago';
    }
    if ($delta < 31104000){
      return round($delta / 2592000, 0) . ' months ago';
    }
    if ($delta < 33696000){
      return 'a year ago';
    }
    //highest we'll go...
    return 'over a year ago';
  }
  return $result;
}

/**
 * Converts DMS ( Degrees / minutes / seconds ) to decimal degrees
 * @param string $coord
 * @return float $coord
 */
function DMStoDec($coord){
  // 
  // to decimal format longitude / latitude
  $coord = trim($coord);
  $matches = array();
  //43[_][42'[73.7"]][N] where _ is the degree symbol: xB0|xC2
  if (preg_match('/(-?[\d\.]+)[\x{B0}\x{C2}]*(\s*([\d\.]+)\'(\s*([\d\.]+)")?)?([NSEW]?)/i',$coord,$matches)){
    $deg = $matches[1];
    $min = (array_key_exists(3,$matches) && $matches[3])? $matches[3]: 0;
    $sec = (array_key_exists(5,$matches) && $matches[5])? $matches[5]: 0;
    $dir = (array_key_exists(6,$matches) && $matches[6])? $matches[6]: '';
  } else {
    return 0.00;
  }

  $coord = $deg+((($min*60)+($sec))/3600);

  if ((($dir == 'S') || ($dir == 'W')) && ($coord > 0)){
    $coord = -$coord;
  }
  return floatval($coord);
}

?>
