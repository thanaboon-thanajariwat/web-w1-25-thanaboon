<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="topbar">
    <div class="topbar-left">
        <span class="chip">BIT.2/4 · 25</span>
        <span class="topbar-name">ธนบูรณ์ ธนจริวัฒน์</span>
    </div>
    <a class="topbar-link" href="index.php">For Loop ↗</a>
</div>

<div class="hero">
    <div class="hero-badge">งานที่ 1 · การพัฒนาเว็บแอปพลิเคชัน</div>
    <?php echo "<h1>สูตรคูณ</h1>"; ?>
    <p>กรอกเลขแม่เพื่อแสดงตารางสูตรคูณ 1–12</p>
</div>

<div class="form-wrap">
    <div class="form-inner">
        <form action="" style="display:flex;gap:10px;width:100%">
            <input type="number" name="num" placeholder="เลขแม่สูตรคูณ เช่น 3, 7, 12 ...">
            <input type="submit" value="คำนวณ">
        </form>
    </div>
</div>

<?php if(isset($_GET["num"])): ?>
<?php $num = $_GET["num"]; ?>

<div class="result-wrap">
    <div class="result-card">
        <div class="result-head">
            <span class="result-head-title">ตารางสูตรคูณแม่</span>
            <span class="result-head-badge"><?php echo $num; ?></span>
        </div>
        <?php
            $i = 1;
            while($i <= 12){
                echo "<div class='result-row'>";
                echo "<span class='left'>" . $num . " × " . $i . " =</span>";
                echo "<span class='right'>" . $num * $i . "</span>";
                echo "</div>";
                $i++;
            }
        ?>
    </div>
</div>

<?php endif; ?>

<div class="footer">การพัฒนาเว็บแอปพลิเคชัน · BIT.2/4 · 2026</div>

</body>
</html>