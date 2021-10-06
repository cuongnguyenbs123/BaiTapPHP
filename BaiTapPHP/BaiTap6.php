<?php
require('./path/header.php');
function Factorial($n)
{    
    if($n=="") return false;
    if ($n == 1)
        return 1;
        else if($n==0)
        return 0;

    return $n * Factorial($n - 1);
}
if (isset($_POST['submit'])) {
    $n = $_POST['n'];
}
?>
<body>
 <?php require('./path/nav.php');?>
 <div class="content">Đề bài: Viết hàm tính giá trị của n giai thừa (n! =n(n-1)!)
 <div>
                    <form action="" method="POST">
                        <input type="number" name="n" placeholder="Nhập n ..." id="n">
                        <input type="submit" name='submit' value="Submit" onclick="validate()">
                    </form>
                    <br>
                    <?php if (isset($_POST['submit'])) {
                            echo Factorial($n);
                        }?>
 </div>          
</div>
</div>
 </div>          
</body>
<?php require('./path/footer.php');?>
</html>
 </div>  
 <script>

    function validate() {
      var n1 = document.getElementById("n").value;
 
      if(n1=="") {
         alert("Không được để trống");
      }  
    
    }
</script> 
 