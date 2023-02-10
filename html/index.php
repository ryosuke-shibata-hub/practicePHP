<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>My first PHP page</h1>
  <?php
    /*
        ECHO "Hello World!<br>";
        echo "Hello World!<br>";
        EcHo "Hello World!<br>";

        $color = "red";
        echo "My car is " . $color ."<br>";

        $hello = "Hello World";
        echo $hello . "今日は世界";
    ?>
  <br>
  <?php
        //変数
        $txt = "Hello world";
        $x = 5;
        $y = 10.5;

        $txt = "W3Schools.com";
        echo "I Love $txt!<br>";
        echo "I Love " . $txt . "!<br>";
        //↑出力内容は二つとも同じ同じ
        $x = 5;
        $y = 4;
        echo $x + $y;
    ?>
  <br>
  <!--変数のスコープ-->

  <?php
  /*
    $x = 5; // グローバルスコープ

    function myTest() {
    // この関数内で x を使用すると、エラーが発生する。
    //関数の外で宣言された変数(グローバルスコープ)は、関数の外でのみアクセスできます。

    echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();

    echo "<p>Variable x outside function is: $x</p>";
    ?>

  <?php
    function myTestTest()
    {
        $xx = 5;//ローカルスコープ
        echo "<p>Variable x inside function is: $xx</p>";
    }
    myTestTest();
    //グローバルスコープにはないためWarning: Undefined variableになる↓
    echo "<p>Variable x outside function is: $xx</p>";
    */

    //PHPグローバルキーワード

    // $x = 5;
    // $y = 10;
    /*
    function myTest()
    {
        global $x, $y;
        $y = $x + $y;
    }
    myTest();
    //出力結果は15
    echo $y;
    */
    /*function myTest()
    {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    myTest();
    echo $y;//出力結果は15
    */
    //PHP statisキーワード
    /*function myTest()
    {
        static $x = 0;
        echo $x;
        $x++;
    }
    myTest();
    myTest();
    myTest();*/
    ?>
  <!-- PHPの echo および print ステートメント -->

  <?php
  /*
    echo "<h2>PHP is FUN!</h2>";
    echo "Hello world!<br>";
    echo "Im about to learn PHP!<br>";
    echo "This ","string ","was ","made ","with multiple parameters.";

    $txt1 = "Learn PHP";
    $txt2 = "w3Schools.com";
    $x = 5;
    $y = 4;

    echo "<h2>" . $txt1 . "</h2>";
    echo "Study PHP at " . $txt2 . "<br>";
    echo $x + $y;
*/
    //PHP の print ステートメント
    // print "<h2>PHP is Fun!</h2>";
    // print "Hello world!<br>";
    // print "I'm about to learn PHP!";

    // $txt1 = "Learn PHP";
    // $txt2 = "w3Schools.com";
    // $x = 5;
    // $y = 4;

    // print "<h2>" . $txt1. "</h2>";
    // print "Study PHP at " . $txt2 . "<br>";
    // print $x + $y;
    ?>
  <!-- PHPデータ型 -->
  <?php
        // $x = "Hello world!";
        // $y = 'Hello world!';

        // echo $x;
        // echo "<br>";
        // echo $y;
    // $x = 5985;
    // var_dump($x);
    // $x = 10.365;
    // var_dump($x);
    // $cars = array("volvo","BMW","Toyota");
    // var_dump($cars);

    // PHPオブジェクト
    // class Car {
    //     public $color;
    //     public $model;
    //     public function __construct($color,$model)
    //     {
    //         $this->color = $color;
    //         $this->model = $model;
    //     }
    //     public function message()
    //     {
    //         return "My car is a " . $this->color . " " . $this->model . "!";
    //     }
    // }

    // $myCar = new Car("black", "Volvo");
    // echo $myCar->message();
    // echo "<br>";
    // $myCar = new Car("red","Toyota");
    // echo $myCar->message();
    // echo "<br>";
    // //PHP NULL値
    // $x = "Hello World!";
    // $x = null;
    // var_dump($x);
    ?>
  <!-- PHP文字列 -->
  <?php
  //文字の長さ
    echo strlen("Hello world!"); // outputs 12
    echo "<br>";
    //単語の数
    echo str_word_count("Hello world!"); // outputs 2
    echo "<br>";
    //文字列を反転させる
    echo strrev("Hello World");
    echo "<br>";
    //文字列の中のテキストを検索する
    //"Hello World"という文字列から"world"を検索して一致したらその文字列を返し、なかったらfalse
    echo strpos("Hello World", "World");
    echo "<br>";
    //文字列内のテキストを置換
    //第一引数に置換対象、第二引数に置換する文字列、第三引数に置換対象の文字列をセット
    echo str_replace("world", "Dolly", "Hello world!");
    echo "<br>"
    ?>
</body>
</html>
