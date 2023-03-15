<?php declare(strict_types=1);
include "Function.php";
use PHPUnit\Framework\TestCase;
class FunctionTest extends TestCase {
    public function testDayc01(){
        $obj = new DataAndGrade();
        $this->assertEquals("20-2-2023",$obj->DateFunction("20","2","2023"));
    }

}

?> 