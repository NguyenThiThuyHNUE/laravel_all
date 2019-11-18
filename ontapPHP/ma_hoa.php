<?php
function decode($encodedContent, $key)
{
  $str1=substr($encodedContent, 0,$key);
  $str2=substr($encodedContent, $key,strlen($encodedContent)-1);
    $str1new=strrev($str1);
    $str2new= strrev($str2);
  $str=$str1new.$str2new;
  return $str;

}
echo decode('margorpgnim',7)

?>