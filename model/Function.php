<?php

class DataAndGrade {
    
    public function DateFunction($Date,$Month,$Year){
        
        if($Date != "" && $Month != "" && $Year != ""){
            $FullDate = "$Date-$Month-$Year";
            return  $FullDate;
        }else{
            include "../alert/alertInputdate.js";
        }
    }
    
    public function gradeFunction($grade){
        if($grade >= 0){
            return $grade;
        }else{
            include "../alert/alertInputdate.js";

        }
    }  
    
}

?>