<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 関数定義
        function sort_2way(&$array, $order) {
            if ($order) {
                // 昇順ソート
                sort($array);
            } else {
                // 降順ソート
                rsort($array);
            }
        }
        
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];
        
        // 昇順ソート
        echo "昇順にソートします。<br>";
        sort_2way($nums, true);
        foreach ($nums as $num) {
            echo $num . "<br>";
        }
        
        // 降順ソート
        echo "降順にソートします。<br>";
        sort_2way($nums, false);
        foreach ($nums as $num) {
            echo $num . "<br>";
        }
        ?>
    </p>
</body>

</html>