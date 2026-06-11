<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .while-wrap { padding: 2.5rem 1.5rem; }
        .while-wrap h1 { font-size: 22px; font-weight: 500; color: #CECBF6; margin-bottom: 2rem; text-align: center; }
        .grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 14px; max-width: 900px; margin: 0 auto; }
        .card { background: #13111f; border: 0.5px solid #2a2640; border-radius: 16px; overflow: hidden; }
        .card-head { padding: 12px 16px; border-bottom: 0.5px solid #2a2640; display: flex; justify-content: space-between; align-items: center; }
        .card-title { font-size: 13px; color: #888780; }
        .badge { background: #534AB7; color: #EEEDFE; font-size: 11px; font-weight: 500; padding: 3px 10px; border-radius: 6px; }
        .row { display: flex; justify-content: space-between; padding: 9px 16px; border-bottom: 0.5px solid #0d0c14; font-size: 13px; color: #888780; }
        .row:last-child { border-bottom: none; }
        .row:hover { background: #1e1b30; }
        .val { color: #7F77DD; font-weight: 500; }
    </style>
</head>
<body>

<div class="while-wrap">
    <div style="text-align:center; margin-bottom:1.5rem;">
        <a href="index.php" style="font-size:12px; color:#7F77DD; text-decoration:none; border:0.5px solid #534AB7; padding:6px 16px; border-radius:8px; background:#1e1b30;">← กลับหน้าหลัก</a>
    </div>
    <h1>ธนบูรณ์ ธนจริวัฒน์ BIT.2/4 เลขที่ 25</h1>
    <div class="grid">
        <?php
            $n = 1;
            while($n <= 12){
                echo "<div class='card'>";
                echo "<div class='card-head'><span class='card-title'>สูตรคูณแม่</span><span class='badge'>" . $n . "</span></div>";

                $i = 1;
                while($i <= 12){
                    echo "<div class='row'><span>" . $n . "×" . $i . "=</span><span class='val'>" . $n * $i . "</span></div>";
                    $i++;
                }

                echo "</div>";
                $n++;
            }
        ?>
    </div>
</div>

</body>
</html>