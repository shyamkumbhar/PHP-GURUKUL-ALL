

<?php

       $a =$_POST['num1'];
       $b =$_POST['num2'];
       $op =$_POST['op'];

       if($op==1){
              $c= $a+$b;
              echo "<br>sum is $c";

       }

       else if($op==2){
              $c= $a-$b;
              echo "<br>substraction is $c";

       }

       else if($op==3){
              $c= $a/$b;
             echo "<br>division is $c";

       }

       else if($op==4){
              $c= $a*$b;
             echo "<br>Multi is $c";

       }
       else {
             
             echo "invalid input";

       }

?>