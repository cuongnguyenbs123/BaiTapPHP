<?php
require('./path/header.php');
function CheckNumber($n){
  $x=0;$y=0;
  $a=0;$b=0;
  $positivenumber=array();
  $negativenumber=array();
  for($i=0;$i<count($n);$i++)
  {
    if($n[$i]<0)
     {
       $negativenumber[$a]=$n[$i];
       $a++;
       $x++;
     } else  {
       $positivenumber[$b]=$n[$i];
       $b++;
       $y++;
     }
  }
   echo 'Số phần tử có giá trị âm là:' . $x .'<br> ';
   for($i=0;$i<count($negativenumber);$i++){
     echo $negativenumber[$i] .',';
   }
   echo '<br>';
   echo 'Số phần tử có giá trị dương là:' . $y .'<br>';
   for($i=0;$i<count($positivenumber);$i++){
    echo $positivenumber[$i] .',';
  }
}
if (isset($_POST['submit'])) {
    $n =explode(",", $_POST['n']);
}
?>
<body>
 <?php require('./path/nav.php');?>
 <div class="content">Đề bài: Khởi tạo một mảng số nguyên gồm 10 phần tử. Đếm và in ra các phần tử có giá trị âm, giá trị dương.
 <div>
    <form action="" method="POST">
                     <input type="text" name="n" placeholder="Nhập dãy n 10 phần tử">
                     <input type="submit" name='submit' value="Submit">
                    </form>
                    <br>
                    <?php if (isset($_POST['submit'])) {
                            echo CheckNumber($n);
                        }?>
 </div>          
</div>
</div>
 </div>          
</body>
<?php require('./path/footer.php');?>
</html>