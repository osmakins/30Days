<?php
  $_fp = fopen("php://stdin", "r");
  /* Enter your code here. Read input from STDIN. Print output to STDOUT */

  $num1 = intval(trim(fgets($_fp)));

  function str_pos($st){
      $arr_str = str_split($st);
      return $arr_keys = array_keys($arr_str);
  }

  function filter($str){
      
      $postions = str_pos($str);
      $ev = [];
      $od = [];
      
      for($i=0; $i < strlen($str); $i++){
          if($postions[$i] % 2 == 0){
              array_push($ev, $str[$i]);
          }
          else{
              array_push($od, $str[$i]);
          }
      }

      print implode($ev)." ".implode($od)."\n";
  }

  while($num1){
      filter(strval(trim(fgets($_fp))));
      $num1--;
  }

?>
