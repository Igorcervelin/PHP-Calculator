<?php
    class Calculator {
        public function __construct(){
          
        }

        public static function sum($n1, $n2){
            return $n1 + $n2;
        }

        public static function subtract($n1, $n2){
            return $n1 - $n2;
        }

        public static function multiply($n1, $n2){
            return $n1 * $n2;
        }

        public static function divide($n1, $n2){
            if($n2==0){
                return 'Não é possível dividir por zero.';
            }
            return $n1 / $n2;
        }
       
        public static function calculate($n1, $n2, $op){
            switch($op){
                case '+':
                    return Calculator::sum($n1, $n2);
                case '-':
                    return Calculator::subtract($n1, $n2);
                case '*':
                    return Calculator::multiply($n1, $n2);
                case '/':
                    return Calculator::divide($n1, $n2);
            }
        }      

    }
?>