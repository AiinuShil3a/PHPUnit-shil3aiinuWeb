<?php

class DataAndGrade {
    
    public function DateFunction($Date,$Month,$Year){
        $YMD = "$Date-$Month-$Year";
        return $YMD;
    }
    
    public function gradeFunction($grade){
        return $grade;
    }  
    
}

?>