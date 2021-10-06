<?php
require('./path/header.php');
$s = 0;
function IsPrime($a)
{
    $count = 0;
    if ($a < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($a); $i++) {
        if ($a % $i == 0) {
            $count++;
        }
    }
    if ($count == 0) {
        return true;
    } else {
        return false;
    }
}
?>
<body>
 <?php require('./path/nav.php');?>
 <div class="content">Đề bài: Tính tổng các snt từ 1 -> 100
                <p class="text-center do">Giải</p>
                <div>Các số nguyên tố từ 1->100 là:
                    <?php
                    for ($i = 1; $i <= 100; $i++) {
                        if (IsPrime($i)) {
                            $s += $i;
                        }
                    }
                    echo $s;
                    ?>
                </div>
 </div>          
 </div>
</div>
</body>
<?php require('./path/footer.php');?>
</html>