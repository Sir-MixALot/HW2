<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>HW(part2)</title>
    </head>
    <body>
        <div class="wrapper">
            <h1>Page <?=$page?></h1>
            <div>
                <?php foreach ($pageData as $item) {
                    echo "<div><p>$item</p></div>";
                    $s_count = explode(". ", $item);
                    
                    $x = count($s_count);
                    $w = implode(" ", $s_count);
                    $y = iconv_strlen($w);
                    $symbols = [".", ",", "\n"];
                    $new_item = str_replace($symbols, '', $item);
                    $w_count = explode(" ", $new_item);
                    $w_c = count($w_count);
                    echo "<div class='info'><p>Кол-во предложений в параграфе:$x</p></div>";
                    echo "<div class='info'><p>Кол-во слов в параграфе:$w_c</p></div>";
                    echo "<div class='info'><p>Кол-во символов в параграфе:$y</p></div>";

                    
                }
                ?>
            </div>
            <div class="links">
            <?php
            for ($i = 1; $i <= $pagesCount; $i++) {
                if ($i == $page) {
                    echo " $i ";
                } else {
            ?>
                <a href="index.php?page=<?=$i?>"><?=$i?></a> 
            <?php
                }
            }
            ?>
        </div>
        </div>
    </body>
</html>