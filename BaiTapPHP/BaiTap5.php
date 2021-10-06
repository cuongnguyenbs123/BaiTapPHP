<?php
require('./path/header.php');
 function FerfectCheck($n){
    if($n==0) return false;
    $sum = 0;
    for($i=1;$i<=$n/2;$i++){
        if($n%$i==0) 
            $sum+=$i;
    }
   
 
    if($sum==$n) echo 'Số bạn nhập là số hoàn hảo'; 
    
    else echo 'Số '.$n. ' không phải số hoàn hảo';
 }
 if (isset($_POST['submit'])) {
    $n = $_POST['n'];
}
?>
<body>
 <?php require('./path/nav.php');?>
 <div class="content">Đề bài: Sử dụng hàm kiểm tra xem một số có phải số hoàn hảo hay không
 <div>
                    <form action="" method="POST">
                        <input type="number" name="n" placeholder="Nhập n ..." id="n">
                        <input type="submit" name='submit' value="Submit" onclick="validate()">
                    </form>
                    <br>
                    <?php if (isset($_POST['submit'])) {
                            echo FerfectCheck($n);
                        }?>
 </div>          
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
      }  else if(n1<=0){
          alert("số n phải >0");
      }
    }
</script>