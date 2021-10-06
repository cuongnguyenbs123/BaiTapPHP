<?php
require('./path/header.php');
function Number7($n){
    if($n==0) return false;
   $x=array();
   $j=0;
    for($i=1;$i<=$n;$i++){
      if($n % $i==0){
          $x[$j]=$i;
          $j++;
      }
   
    } echo 'Các ước số của n là: ';
     for($a=0;$a<count($x);$a++){
         echo $x[$a] .',';
     }
  }
  if (isset($_POST['submit'])) {
     $n = $_POST['n'];
 }
?>
<body>
 <?php require('./path/nav.php');?>
 <div class="content">Đề bài :Liệt kê tất cả các “ước số” của số nguyên dương n
 <div>
                    <form action="" method="POST">
                        <input type="number" name="n" placeholder="Nhập n ..." id="n">
                        <input type="submit" name='submit' value="Submit" onclick="validate()">
                    </form>
                    <br>
                    <?php if (isset($_POST['submit'])) {
                            echo Number7($n);
                        }?>
 
</div>
</div>
 </div>          
</body>
<?php require('./path/footer.php');?>
</html>
<script>

    function validate() {
      var n1 = document.getElementById("n").value;
 
      if(n1=="") {
         alert("Không được để trống");
      }
      else if(n1<=0){
          alert("số n phải >0");
      }
    
    }
</script>