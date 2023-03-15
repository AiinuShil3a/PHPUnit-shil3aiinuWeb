<?php
        c
        $rs2 = $obj->gradeFunction($grade);
        $gradeIs = "";
        $gradeCGT = "";
        if($grade < 0){
            include "../view/alertInputGrade.php";
        }elseif($grade <= 100){
            if($grade >= 80){
                $gradeIs = "A";
                $gradeCGT = "ยินดีด้วยคุณได้เกรดระดับดีเยี่ยม";
            }elseif($grade >= 75){
                $gradeIs = "B+";
                $gradeCGT = "ยินดีด้วยคุณได้เกรดระดับดีมาก";
            }elseif($grade >= 70){
                $gradeIs = "B";
                $gradeCGT = "ยินดีด้วยคุณได้เกรดระดับดี";
            }elseif($grade >= 65){
                $gradeIs = "C+";
                $gradeCGT = "ยินดีด้วยคุณได้เกรดระดับค่อนค้างดี";
            }elseif($grade >= 60){
                $gradeIs = "C";
                $gradeCGT = "ยินดีด้วยคุณได้เกรดระดับกลาง";
            }elseif($grade >= 55){
                $gradeIs = "D+";
                $gradeCGT = "ยินดีด้วยคุณได้ผ่านเกณฑ์ขั้นต่ำแล้ว";
            }elseif($grade >= 50){
                $gradeIs = "D";
                $gradeCGT = "ยินดีด้วยคุณได้ผ่านเกณฑ์ขั้นต่ำสุด";
            }else{
                $gradeIs = "E";
                $gradeCGT = "เสียใจด้วยคุณไม่ผ่านการทดสอบ";
            }
        }else{
            include "../alert/alertInputGrade.php";
        }
?>