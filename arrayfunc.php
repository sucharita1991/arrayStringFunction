<?php

  $obj = new main();

  class main {

    public function __construct() {

      echo '<h1>Array Functions Demonstration</h1>';
      $array = array(1,2,3,4,5,6,7,8,9,10);
      arrayFunction :: printArray($array);
      arrayFunction :: searchArray($array,"4");
      arrayFunction :: sumArray($array);
      arrayFunction :: sliceArray($array,"2");
      arrayFunction :: reverseArray($array);
      arrayFunction :: popArray($array);
      arrayFunction :: valuesArray($array);
      arrayFunction :: countArray($array);
      arrayFunction :: shuffleArray($array);
      arrayFunction :: pushArray($array,"11","12");

      echo '<h1>String Functions Demonstration</h1>';
      $stringText = "My name is Sucharita Das";
      stringFunction :: printText($stringText);
      StringFunction :: substringFunction($stringText,8);
      StringFunction :: explodeFunction($stringText);
      StringFunction :: replaceFunction($stringText,"Das","Dey");
      StringFunction :: splitFunction($stringText);
      StringFunction :: shuffleFunction($stringText);
      StringFunction :: wordCountFunction($stringText);
      StringFunction :: stringCompareFunction("Sucharita","SUCHARITA");
      StringFunction :: stringPositionFunction($stringText,"s");
      StringFunction :: stringLengthFunction($stringText);
    }

  }

    class arrayFunction{
      public static function headPrint($funcName){
        echo '<hr>';
        echo '<h1>'.$funcName.' function demo</h1>';
      }

      public static function printArray($array) {
        arrayFunction :: headPrint("printArray");
        print_r($array);
      }
      public static function searchArray($array,$searchText) {
        arrayFunction :: headPrint("searchArray");
        echo array_search($searchText,$array);
      }
      public static function sumArray($array) {
        arrayFunction :: headPrint("sunArray");
        echo array_sum($array);
      }
      public static function sliceArray($array,$index) {
        arrayFunction :: headPrint("sliceArray");
        print_r(array_slice($array,$index));
      }
      public static function reverseArray($array) {
        arrayFunction :: headPrint("reverseArray");
        print_r(array_reverse($array));
      }
      public static function popArray($array) {
        arrayFunction :: headPrint("popArray");
        array_pop($array);
        print_r($array);
      }
      public static function valuesArray($array) {
        arrayFunction :: headPrint("valuesArray");
        print_r(array_values($array));
      }
      public static function countArray($array) {
        arrayFunction :: headPrint("countArray");
        echo count($array);
      }
      public static function shuffleArray($array) {
        arrayFunction :: headPrint("shuffleArray");
        shuffle($array);
        print_r($array);
      }
      public static function pushArray($array,$var1,$var2) {
        arrayFunction :: headPrint("pushArray");
        array_push($array,$var1,$var2);
        print_r($array);
      }

  }

  class stringFunction{

    public static function headPrintStr($funcName){
        echo '<hr>';
        echo '<h1>'.$funcName.' function demo</h1>';
    }
    public static function printText($text) {
      stringFunction :: headPrintStr("printText");
      print($text);
    }
    public static function substringFunction($text,$index) {
      stringFunction :: headPrintStr("substringFunction");
      echo substr($text,$index);
    }
    public static function explodeFunction($text) {
      stringFunction :: headPrintStr("explodeFunction");
      print_r (explode(" ",$text));
    }
    public static function replaceFunction($text,$old_word,$new_word) {
      stringFunction :: headPrintStr("replaceFunction");
      echo str_replace($old_word,$new_word,$text);
    }
    public static function splitFunction($text) {
      stringFunction :: headPrintStr("splitFunction");
      print_r(str_split($text));
    }
    public static function shuffleFunction($text) {
      stringFunction :: headPrintStr("shuffleFunction");
      echo str_shuffle($text);
    }
    public static function wordCountFunction($text) {
      stringFunction :: headPrintStr("wordCountFunction");
      echo str_word_count($text);
    }
    public static function stringCompareFunction($text1,$text2) {
      stringFunction :: headPrintStr("stringCompareFunction");
      echo strcasecmp($text1,$text2);
    }
    public static function stringPositionFunction($text,$stringText) {
      stringFunction :: headPrintStr("stringPositionFunction");
      echo stripos($text,$stringText);
    }
    public static function stringLengthFunction($text) {
      stringFunction :: headPrintStr("stringLengthFunction");
      echo strlen($text);
    }
  }

?>