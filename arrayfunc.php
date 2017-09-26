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

      public static function printArray($array) {
        echo '<h1>array print function</h1>';
        print_r($array);
        echo '<hr>';
      }
      public static function searchArray($array,$searchText) {
        echo '<h1>array search function</h1>';
        echo array_search($searchText,$array);
        echo '<hr>';
      }
      public static function sumArray($array) {
        echo '<h1>array sum function</h1>';
        echo array_sum($array);
        echo '<hr>';
      }
      public static function sliceArray($array,$index) {
        echo '<h1>array slice function</h1>';
        print_r(array_slice($array,$index));
        echo '<hr>';
      }
      public static function reverseArray($array) {
        echo '<h1>array reverse function</h1>';
        print_r(array_reverse($array));
        echo '<hr>';
      }
      public static function popArray($array) {
        echo '<h1>array pop function</h1>';
        array_pop($array);
        print_r($array);
        echo '<hr>';
      }
      public static function valuesArray($array) {
        echo '<h1>array values function</h1>';
        print_r(array_values($array));
        echo '<hr>';
      }
      public static function countArray($array) {
        echo '<h1>array count function</h1>';
        echo count($array);
        echo '<hr>';
      }
      public static function shuffleArray($array) {
        echo '<h1>array shuffle function</h1>';
        shuffle($array);
        print_r($array);
        echo '<hr>';
      }
      public static function pushArray($array,$var1,$var2) {
        echo '<h1>array push function</h1>';
        array_push($array,$var1,$var2);
        print_r($array);
        echo '<hr>';
      }

  }

  class stringFunction{

    public static function printText($text) {
      echo '<h1>print function demo </h1>';
      print($text);
      echo '<hr>';
    }
    public static function substringFunction($text,$index) {
      echo '<h1>substring function demo </h1>';
      echo substr($text,$index);
      echo '<hr>';
    }
    public static function explodeFunction($text) {
      echo '<h1>explode function demo </h1>';
      print_r (explode(" ",$text));
      echo '<hr>';
    }
    public static function replaceFunction($text,$old_word,$new_word) {
      echo '<h1>replace function demo </h1>';
      echo str_replace($old_word,$new_word,$text);
      echo '<hr>';
    }
    public static function splitFunction($text) {
      echo '<h1>split function demo </h1>';
      print_r(str_split($text));
      echo '<hr>';
    }
    public static function shuffleFunction($text) {
      echo '<h1>shuffle function demo </h1>';
      echo str_shuffle($text);
      echo '<hr>';
    }
    public static function wordCountFunction($text) {
      echo '<h1>word count function demo </h1>';
      echo str_word_count($text);
      echo '<hr>';
    }
    public static function stringCompareFunction($text1,$text2) {
      echo '<h1>string compare function demo </h1>';
      echo strcasecmp($text1,$text2);
      echo '<hr>';
    }
    public static function stringPositionFunction($text,$stringText) {
      echo '<h1>string position function demo </h1>';
      echo stripos($text,$stringText);
      echo '<hr>';
    }
    public static function stringLengthFunction($text) {
      echo '<h1>string length function demo </h1>';
      echo strlen($text);
      echo '<hr>';
    }
  }

?>