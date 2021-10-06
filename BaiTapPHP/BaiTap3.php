<?php
require('./path/header.php');
$s = 0;
function Factorial($n)
{
    if ($n == 1)
        return 1;
    return $n * Factorial($n - 1);
}

function sum($x, $n)
{
    global $s;
    for ($i = 1; $i <= $n; $i++) {
        $s += (pow($x, $i)) / Factorial($i);
    }
    return $s;
}

if (isset($_POST['submit'])) {
    $x = $_POST['x'];
    $n = $_POST['n'];
}
?>
<body>
 <?php require('./path/nav.php');?>
 <div class="content">
 <p class="bt"></p>
              
                <div class="ex">
                    Đề bài: Nhập vào x, n. Tính tổng biểu thức sau: <br />
                    <img src="./debai3.jpg" alt="">
                </div>
                <p class="text-center do">Giải</p>
                <div>
                    <form action="" method="POST" >
                        <input type="number" name="x" placeholder="Nhập x ..." id="num1">
                        <input type="number" name="n" placeholder="Nhập n ..." id="num2">
                        <input type="submit" name='submit' value="Submit" onclick="validate()">
                    </form>
                    <br>
                    <p>Tổng:
                        <?php if (isset($_POST['submit'])) {
                            echo sum($x, $n);
                        }
 ?>         
 </div>
</div>
</body>

</html>
<script>

    function validate() {
      var n1 = document.getElementById("num1").value;
      var n2 = document.getElementById("num2").value;
      if(n1 != "" && n2 != "") {
        if(n2 <=0) {
          alert("nhập n > 0");
        }
      }
     else  alert("Dữ liệu không được để trống");
    }
</script>