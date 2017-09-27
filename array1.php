<?php

  $obj = new main();
  global $htmlText;     //declaring global variable
  $htmlText='';
  class main {

    public function __construct() {

      global $htmlText;       //global variable to store the output of 20 functions as 1 HTML string
      $htmlText .='<h1>Array Functions Demonstration</h1>';      //concatenating the string in the  HTML file
      $array = array(1,2,3,4,5,6,7,8,9,10);
      arrayFunction :: printArray($array);          //call to other class static functions
      arrayFunction :: searchArray($array,"5");
      arrayFunction :: sumArray($array);
      arrayFunction :: sliceArray($array,"2");
      arrayFunction :: reverseArray($array);
      arrayFunction :: popArray($array);
      arrayFunction :: valuesArray($array);
      arrayFunction :: countArray($array);
      arrayFunction :: shuffleArray($array);
      arrayFunction :: pushArray($array,"11","12");

      $htmlText .="<hr>";
      $htmlText .='<h1>String Functions Demonstration</h1>';
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

      echo $htmlText;     //Final printing of the whole concatenated HTML string
    }

  }

  class printArrayHeaderFunction{     //separate class to use common functions

    public static function headPrint($funcName){        //function to print the name of the functions as headers
      global $htmlText;
      $htmlText .="<hr>";
      $htmlText .="<h3>'$funcName' function demo</h3>";
    }
    public static function printArrayFunction($array){    //custom function to concatenate the array output to the HTML string
      global $htmlText;
      foreach ($array as $key => $value) {
        $htmlText .= '['.$key.']=>'.$value.', ';
      }
    }
  }

  class arrayFunction{

    public static function printArray($array) {
      printArrayHeaderFunction :: headPrint("printArray");
      printArrayHeaderFunction :: printArrayFunction($array);
    }
    public static function searchArray($array,$searchText) {
      global $htmlText;
      printArrayHeaderFunction :: headPrint("searchArray");
      $htmlText .=array_search($searchText,$array);     //concatenating the output to the  HTML file 
    }
    public static function sumArray($array) {
      global $htmlText;
      printArrayHeaderFunction :: headPrint("sumArray");
      $htmlText .=array_sum($array);
    }
    public static function sliceArray($array,$index) {
      printArrayHeaderFunction :: headPrint("sliceArray");
      printArrayHeaderFunction :: printArrayFunction(array_slice($array,$index));
    }
    public static function reverseArray($array) {
      printArrayHeaderFunction :: headPrint("reverseArray");
      printArrayHeaderFunction :: printArrayFunction(array_reverse($array));
    }
    public static function popArray($array) {
      printArrayHeaderFunction :: headPrint("popArray");
      array_pop($array);
      printArrayHeaderFunction :: printArrayFunction($array);
    }
    public static function valuesArray($array) {
      printArrayHeaderFunction :: headPrint("valuesArray");
      printArrayHeaderFunction :: printArrayFunction(array_values($array));
    }
    public static function countArray($array) {
      global $htmlText;
      printArrayHeaderFunction :: headPrint("countArray");
      $htmlText .=count($array);
    }
    public static function shuffleArray($array) {
      printArrayHeaderFunction :: headPrint("shuffleArray");
      shuffle($array);
      printArrayHeaderFunction :: printArrayFunction($array);
    }
    public static function pushArray($array,$var1,$var2) {
      printArrayHeaderFunction :: headPrint("pushArray");
      array_push($array,$var1,$var2);
      printArrayHeaderFunction :: printArrayFunction($array);
    }
  }

  class stringFunction{

    public static function printText($text) {
      global $htmlText;
      printArrayHeaderFunction :: headPrint("printText");
      $htmlText .=$text;
    }
    public static function substringFunction($text,$index) {
      global $htmlText;
      printArrayHeaderFunction :: headPrint("substringFunction");
      $htmlText .=substr($text,$index);
    }
    public static function explodeFunction($text) {
      printArrayHeaderFunction :: headPrint("explodeFunction");
      printArrayHeaderFunction :: printArrayFunction(explode(" ",$text));
    }
    public static function replaceFunction($text,$old_word,$new_word) {
      global $htmlText;
      printArrayHeaderFunction :: headPrint("replaceFunction");
      $htmlText .=str_replace($old_word,$new_word,$text);
    }
    public static function splitFunction($text) {
      printArrayHeaderFunction :: headPrint("splitFunction");
      printArrayHeaderFunction :: printArrayFunction(str_split($text));
    }
    public static function shuffleFunction($text) {
      global $htmlText;
      printArrayHeaderFunction :: headPrint("shuffleFunction");
      $htmlText .=str_shuffle($text);
    }
    public static function wordCountFunction($text) {
      global $htmlText;
      printArrayHeaderFunction :: headPrint("wordCountFunction");
      $htmlText .=str_word_count($text);
    }
    public static function stringCompareFunction($text1,$text2) {
      global $htmlText;
      printArrayHeaderFunction :: headPrint("stringCompareFunction");
      $htmlText .=strcasecmp($text1,$text2);
    }
    public static function stringPositionFunction($text,$stringText) {
      global $htmlText;
      printArrayHeaderFunction :: headPrint("stringPositionFunction");
      $htmlText .=stripos($text,$stringText);
    }
    public static function stringLengthFunction($text) {
      global $htmlText;
      printArrayHeaderFunction :: headPrint("stringLengthFunction");
      $htmlText .=strlen($text);
    }
  }

?>