<?php
require('./path/header.php');
?>
<body>
 <?php require('./path/nav.php');?>
 <div class="content">Đề bài:In các số lẻ và chẵn từ 1->50
 <p>Giải:</p>
 <p>Các số lẻ :   
    <?php
                        for ($i = 0; $i <= 50; $i++) {
                            if ($i % 2 != 0) {
                                echo $i . ", ";
                            }
                        }
                        ?>
                    </p>
                    <p>Dãy số chẵn:
                        <?php
                        for ($i = 0; $i <= 50; $i++) {
                            if ($i % 2 == 0) {
                                echo $i . ", ";
                            }
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
<?php require('./path/footer.php');?>
</html>