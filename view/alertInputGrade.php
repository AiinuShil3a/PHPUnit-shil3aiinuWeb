<?php
if ($grade > 100 ) { ?>
    <script type="text/javascript">
        alert("คะแนนคุณเกินคะแนนเต็ม:คุณกรอก<?php echo  $rs2; ?>คะแนน");
        history.go(-1);
    </script>
<?php } elseif($grade < 0) { ?>
    <script type="text/javascript">
        alert("คะแนนคุณต่ำกว่าปกติ:คุณกรอก<?php echo  $rs2; ?>คะแนน");
        history.go(-1);
    </script>
<?php } ?>