<?php
require('./path/header.php');
function Number10($n){
    if($n==0) return false;
    else if($n<0) return false;
    $gio=intdiv($n ,3600);
    $phut=(intdiv($n,60)-intdiv($n,3600)*60);
    echo 'Thời gian vừa nhập là ' . $gio .':' .$phut .':' .($n-$gio*3600-$phut*60) ;
  
}
if (isset($_POST['submit'])) {
    $n = $_POST['n'];
}
?>
<body>
 <?php require('./path/nav.php');?>
 <div class="content">Đề bài: Viết chương trình nhập vào một số giây sau đó in
      ra màn hình thời gian dưới dạng giờ:phút:giây 
      Ví dụ nhập vào 3769 giây thì in ra màn hình dưới dạng:01:02: 49
      <div>
                    <form action="" method="POST">
                        <input type="number" name="n" placeholder="Nhập n ..." id="n">
                        <input type="submit" name='submit' value="Submit" onclick="validate()">
                    </form>
                    <br>
                    <?php if (isset($_POST['submit'])) {
                            echo Number10($n);
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
      }
      else if(n1<=0){
          alert("thời gian phải >0");
      }
    
    }
</script>