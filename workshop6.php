<?php
$pdo = new PDO("mysql:host=localhost; dbname=blueshop; charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    
        <?php
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();
        
       while ($row = $stmt->fetch()) { ?>
                  ชื่อสมาชิก: <?= $row["name"] ?><br>
                  ที่อยู่ :<?= $row["address"] ?><br>
                  อีเมล์ :<?= $row["email"] ?> <br>
                  
                  <a href="workshop6_1.php?username=<?=$row["username"]?>" >ลบ</a>
                  <hr> 
                  
             
       <?php } ?>
    
</body>

</html>
