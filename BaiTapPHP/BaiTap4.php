<?php
require('./path/header.php');
//  function Number4($n){
//    if($n==0){echo 'Bạn đã nhập đúng';}
//    else echo 'Bạn nhập sai hãy thử lại';
//  }
//  if (isset($_POST['submit'])) {
//     $n = $_POST['n'];
// }
?>
<body>
 <?php require('./path/nav.php');?>
 <div class="content">

    Đề bài: Viết chương trình nhập vào 1 số cho đến khi nhập vào số 0 thì dừng
    <div>
                    <form action="" method="POST">
                        <input type="number" name="n" placeholder="Nhập n ..." id="n" onkeyup="validate()" >
                        <input type="submit" name='submit' value="Submit" onclick="a()" >
                    </form>
                    <br>
                 
 </div>          
 </div>
</div>
</body>
<?php require('./path/footer.php');?>
</html>
<script>

    function validate() {
      var n1 = document.getElementById("n").value;
 
      if(n1.includes('0')) {
         alert("Chuỗi bạn nhập có ký tự 0");
      }
      
    }
    function a(){
      var n1 = document.getElementById("n").value;
      if(n1 ==""){
      alert("Bạn không được để trống dữ liệu");
    }
    }
</script>