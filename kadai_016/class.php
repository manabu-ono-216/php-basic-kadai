<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <?php
  // Foodクラスの定義
  class Food {
      private $name;
      private $price;

      // コンストラクタ
      public function __construct($name, $price) {
          $this->name = $name;
          $this->price = $price;
      }

      // priceプロパティの値だけを出力
      public function show_price() {
          echo $this->price . "<br>";
      }
  }

  // Animalクラスの定義
  class Animal {
      private $name;
      private $height;
      private $weight;

      // コンストラクタ
      public function __construct($name, $height, $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
      }

      // heightプロパティの値だけを出力
      public function show_height() {
          echo $this->height . "<br>";
      }
  }

  // インスタンスの作成
  $food = new Food("potato", 250);
  $animal = new Animal("dog", 60, 5000);

  // インスタンスの出力
  echo "<pre>";
  print_r($food);
  echo "</pre>";

  echo "<pre>";
  print_r($animal);
  echo "</pre>";

  // メソッドの呼び出し
  $food->show_price();
  $animal->show_height();
  ?>
</body>

</html>
