<?php

class DataAndGrade {
    
    public function DateFunction($Date,$Month,$Year){
        $FullDate = "$Date-$Month-$Year";
        return $FullDate;
    }
    
    public function gradeFunction($grade){
        return $grade;
    }  
    
}

?>