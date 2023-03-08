<?php
        $Date = $_GET['Date'];
        $Month = $_GET['Month'];
        $Year = $_GET['Year'];
        $class = $_GET['class'];
        $grade = $_GET['grade'];
        $d_array = array(
        "Sunday" => "วันอาทิตย์",
        "Monday" => "วันจันทร์",
        "Tuesday" => "วันอังคาร",
        "Wednesday" => "วันพุธ",
        "Thursday" => "วันพฤหัสบดี",
        "Friday" => "วันศุกร์",
        "Saturday" => "วันเสาร์"
        );

        include_once 'Function.php';
        $obj = new DataAndGrade();
        $rs = $obj->DateFunction($Date,$Month,$Year);

        if($Date <= 31 && $Month <= 12 ){
            if($Month == 1){
                if($Date <= 31){
                    include "yourGrade.php";
                    include "../view/showHomepage.php";
                }else{
                    include "../view/alertInput.php";
                }
            }elseif($Month == 2){
                if($Year == 2020){
                    if($Date <= 29){
                        include "yourGrade.php";
                        include "../view/showHomepage.php";
                    }else{
                        include "../view/alertInput.php";
                    }
                }else{
                    if($Date <= 28){
                        include "yourGrade.php";
                        include "../view/showHomepage.php";
                    }else{
                        include "../view/alertInput.php";
                    }
                }
            }elseif($Month == 3){
                if($Date <= 31){
                    include "yourGrade.php";
                    include "../view/showHomepage.php";
                }else{
                    include "../view/alertInput.php";
                }
            }elseif($Month == 4){
                if($Date <= 30){
                    include "yourGrade.php";
                    include "../view/showHomepage.php";
                }else{
                    include "../view/alertInput.php";
                }
            }elseif($Month == 5){
                if($Date <= 31){
                    include "yourGrade.php";
                    include "../view/showHomepage.php";
                }else{
                    include "../view/alertInput.php";
                }            
            }elseif($Month == 6){
                if($Date <= 30){
                    include "yourGrade.php";
                    include "../view/showHomepage.php";
                }else{
                    include "../view/alertInput.php";
                }
            }elseif($Month == 7){
                if($Date <= 31){
                    include "yourGrade.php";
                    include "../view/showHomepage.php";
                }else{
                    include "../view/alertInput.php";
                }
            }elseif($Month == 8){
                if($Date <= 31){
                    include "yourGrade.php";
                    include "../view/showHomepage.php";
                }else{
                    include "../view/alertInput.php";
                }
            }elseif($Month == 9){
                if($Date <= 30){
                    include "yourGrade.php";
                    include "../view/showHomepage.php";
                }else{
                    include "../view/alertInput.php";
                }
            }elseif($Month == 10){
                if($Date <= 31){
                    include "yourGrade.php";
                    include "../view/showHomepage.php";
                }else{
                    include "../view/alertInput.php";
                }
            }elseif($Month == 11){
                if($Date <= 30){
                    include "yourGrade.php";
                    include "../view/showHomepage.php";
                }else{
                    include "../view/alertInput.php";
                }
            }elseif($Month == 12){
                if($Date <= 31){
                    include "yourGrade.php";
                    include "../view/showHomepage.php";
                }else{
                    include "../view/alertInput.php";
                }
            }
        }else{
            include "../view/alertInput.php";
        }
?>