<?php
    // PHP演習PHP演習PHP演習PHP演習PHP演習PHP演習PHP演習PHP演習PHP演習PHP演習PHP演習PHP演習
    /*
        ECHO "Hello World!<br>";
        echo "Hello World!<br>";
        EcHo "Hello World!<br>";

        $color = "red";
        echo "My car is " . $color ."<br>";

        $hello = "Hello World";
        echo $hello . "今日は世界";

  <br>

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

  <br>
  <!--変数のスコープ-->

  /*
    $x = 5; // グローバルスコープ

    function myTest() {
    // この関数内で x を使用すると、エラーが発生する。
    //関数の外で宣言された変数(グローバルスコープ)は、関数の外でのみアクセスできます。

    echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();

    echo "<p>Variable x outside function is: $x</p>";


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

    // PHPの echo および print ステートメント

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

    // PHPデータ型
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

    // PHP文字列
  //文字の長さ
    // echo strlen("Hello world!"); // outputs 12
    // echo "<br>";
    // //単語の数
    // echo str_word_count("Hello world!"); // outputs 2
    // echo "<br>";
    // //文字列を反転させる
    // echo strrev("Hello World");
    // echo "<br>";
    // //文字列の中のテキストを検索する
    // //"Hello World"という文字列から"world"を検索して一致したらその文字列を返し、なかったらfalse
    // echo strpos("Hello World", "World");
    // echo "<br>";
    // //文字列内のテキストを置換
    // //第一引数に置換対象、第二引数に置換する文字列、第三引数に置換対象の文字列をセット
    // echo str_replace("world", "Dolly", "Hello world!");
    // echo "<br>"

    // echo "<br>";
    // $x = 5985;
    // var_dump(is_int($x));
    // $x = 59.85;
    // var_dump(is_int($x));
    // $x = 10.365;
    // var_dump(is_float($x));
    // $x = acos(8);
    // var_dump($x);
    // $x = 5985;
    // var_dump(is_numeric($x));
    // $x = "5985";
    // var_dump(is_numeric($x));
    // $x = "59.85" + 100;
    // var_dump(is_numeric($x));
    // $x = "hello";
    // var_dump(is_numeric($x));

    // //Cast float to int
    // //フロート型を整数にキャスト（変換）
    // $x = 23456.768;
    // $int_cast = (int)$x;
    // echo $int_cast;
    // echo "<br>";

    // //Cast string to int
    // //文字列型を整数にキャスト(変換)
    // $x = "23465.768";
    // $int_cast = (int)$x;
    // echo $int_cast;


    // PHP数学
    // // PHP pi()関数
    // //π関数
    // echo (pi());
    // echo "<br>";
    // //最大値最小値
    // echo (min(0,150,30,20,-8,-200));
    // echo "<br>";
    // echo (max(0,150,30,20,-8,-200));
    // echo "<br>";
    // // 数値の絶対値(正)を返す
    // echo (abs(-6.7));
    // echo "<br>";
    // // 数値の平方根を返す
    // echo (sqrt(64));
    // echo "<br>";
    // // 浮動小数点数を最も近い整数で返す
    // echo (round(0.60));
    // echo "<br>";
    // echo (round(0.49));
    // echo "<br>";
    // //乱数を生成する
    // echo (rand());
    // echo "<br>";
    // //乱数の最大値と最小値を設定する
    // echo(rand(10, 100));

    // echo "<br>"
    //PHP定数
    // 定数は変数に似ていますが、一度定義すると変更または未定義にすることができない。
    // 定数を作成するには、define()関数を使用する
    //基本構文
    // define(name, value, case-insensitive)
    // name : 定数の名前を指定します
    // value : 定数の値を指定します
    // case-insensitive : 定数名で大文字と小文字を区別しないかどうかを指定します。デフォルトは false
    //php8.0以降は大文字小文字を区別しない定義は削除された(case-insensitiveが削除された)
    // define("GREETING", "Welcome to W3schools.com!");
    // echo GREETING;
    // echo "<br>";
    // //PHP8.0以降はエラーが出るので使用できない↓
    // // define("GREETING", "Welcome to W3Schools.com!", true);
    // // echo greeting;
    // // PHP定数配列
    // define("cars",[
    //   "Alfa Romeo",
    //   "BMW",
    //   "Toyota"
    // ]);
    // echo cars[1];
    // echo "<br>";
    // //定数はグローバルなのでスクリプト全体で使用できる(関数の外からでも使用できる)
    // define("TEST", "Welcome to W3Schools.com!");

    // function myTest() {
    //   echo TEST;
    // }

    // myTest();

    // PHPオペレーター
    // 演算子は、変数と値に対して操作を実行するために使用される。
    //詳細は↓
    // https://www.w3schools.com/php/php_operators.asp


    // PHPの if...else...elseifステートメント

    // $t = date("H");
    // if ($t < "20") {
    //   echo "Have a good day!";
    // }
    // echo "<br>";
    // $t = date("H");
    // if ($t < "20") {
    //   echo "Have a good day!";
    // } else {
    //   echo "Have a good night!";
    // }
    // echo "<br>";
    // $t = date("H");
    // if ($t < "10") {
    //   echo "Have a good Morning!";
    // } elseif ($t < "20") {
    //   echo "Have a good day!";
    // } else {
    //   echo "Have a good night!";
    // }

    // PHP の switch ステートメント
    // $favcolor = "red";

    // switch ($favcolor) {
    //   case 'red':
    //     echo "Your favorite color is red!";
    //     break;
    //   case "blue";
    //     echo "Your favorite color is Bulue!";
    //     break;
    //   case "green";
    //     echo "Your favorite color is Green!";
    //     break;
    //   default:
    //     echo "your favorite color is neither red, blue, nor green!";
    //     break;
    // }

    // PHPループ

    // PHP while ループ
    // ループwhileは、指定された条件が true である限り、コード ブロックを実行します。
    // $x = 1;
    // while ($x <= 5) {
    //   echo "The number is: $x <br>";
    //   $x++;
    // }

    // $x = 0;
    // while ($x <= 100) {
    //   echo "The number is: $x <br>";
    //   $x+= 10;
    // }

    // // PHP do while ループ
    // // ループdo...whileは常にコード ブロックを 1 回実行し、条件をチェックして、指定された条件が真である間ループを繰り返します。
    // $x = 1;
    // do {
    //   echo "The number is: $x <br>";
    //   $x++;
    // } while ($x <= 5);

    // $x = 6;
    // // :ループでは、do...whileループ内でステートメントを実行した後に条件がテストされます。これは、do...while条件が false であっても、ループはそのステートメントを少なくとも 1 回実行することを意味します。以下の例を参照してください。
    // do {
    //   echo "The number is: $x <br>";
    //   $x++;
    // } while ($x <= 5);

    // // PHP forループ
    // // ループfor- コード ブロックを指定された回数だけループします。
    // for ($x = 0; $x <= 10; $x++) {
    //   echo "The number is: $x <br>";
    // }
    // for ($x = 0; $x <= 100; $x+=10) {
    //   echo "The number is: $x <br>";
    // }
    // // PHP foreachループ
    // // ループforeachは配列でのみ機能し、配列内の各キーと値のペアをループするために使用されます。
    // $colors = array("red", "green", "blue", "yellow");

    // foreach ($colors as $value) {
    //   echo "$value <br>";
    // }

    // // KeyとValueの両方を出力する
    // $age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

    // foreach ($age as $key => $value) {
    //   echo "$key = $value<br>";
    // }
    // // PHPブレーク アンド コンティニュー
    // // この例は、 x が4に等しい 場合にループから飛び出します。
    // for ($i=0; $i < 10; $i++) {
    //   if ($i == 4) {
    //     echo "おわり！<br>";
    //     break;
    //   }
    //   echo "The number is: $i<br>";
    // }
    // // この例では、値4をスキップします。
    // for ($i=0; $i < 10; $i++) {
    //   if ($i == 4) {
    //     echo "コンティニュー！<br>";
    //     continue;
    //   }
    //   echo "The number is: $i<br>";
    // }
    // // While ループでブレーク アンド コンティニュ
    // $x = 0;
    // while ($x <= 10) {
    //   if ($x == 4) {
    //     echo "おわり！<br>";
    //     break;
    //   }
    //   echo "The number is: $x<br>";
    //   $x++;
    // }

    // $x = 0;
    // while ($x < 10) {
    //   if ($x == 4) {
    //     $x++;
    //     echo "コンティニュー！<br>";
    //     continue;
    //   }
    //   echo "The number is: $x<br>";
    //   $x++;
    // }

    // PHP関数
    // function writeMsg()
    // {
    //   echo "Hello world<br>";
    // }
    // writeMsg();

    // // PHP 関数の引数
    // function familyName($fname)
    // {
    //   echo "$fname Refsnes.<br>";
    // }
    // familyName("Jani");
    // familyName("Hege");
    // familyName("Stale");
    // familyName("Kai Jim");
    // familyName("Borge");
    // // 2つの引数の時
    // function famileName_2($fname, $year)
    // {
    //   echo "$fname Refsnes. Born in $year <br>";
    // }
    // famileName_2("Hege","1975");
    // famileName_2("Stale","1978");
    // famileName_2("Kai Jim","1983");

    // ↓PHP 7 では、型宣言が追加されました。これにより、関数を宣言するときに予想されるデータ型を指定するオプションが提供され、宣言を追加するとstrict 、データ型が一致しない場合に「致命的なエラー」がスローされます。
    // function addNumbers(int $a, int $b) {
    //   return $a + $b;
    // }
    // echo addNumbers(5, "5 days");
    // ↓指定するには、strictを設定する必要がありますdeclare(strict_types=1);。これは、PHP ファイルの最初の行にある必要があります。
    // declare(strict_types=1);
    // function addNumbers(int $a, int $b)
    // {
    //   return $a + $b;
    // }
    // echo addNumbers(5, "5 days");
    // declare(strict_types=1); // strict requirement
    // function setHeight(int $minheight = 50) {
    //   echo "The height is : $minheight <br>";
    // }

    // setHeight(350);
    // setHeight(); // will use the default value of 50
    // setHeight(135);
    // setHeight(80);

    // function sum(int $x, int $y) {
    // $z = $x + $y;
    // return $z;
    // }

    // echo "5 + 10 = " . sum(5, 10) . "<br>";
    // echo "7 + 13 = " . sum(7, 13) . "<br>";
    // echo "2 + 4 = " . sum(2, 4);

    // function addNumbers(float $a, float $b) : int {
    // return (int)($a + $b);
    // }
    // echo addNumbers(1.2, 5.2);

    // function add_five(&$value) {
    // $value += 5;
    // }

    // $num = 2;
    // add_five($num);
    // echo $num;


    //PHP実践PHP実践PHP実践PHP実践PHP実践PHP実践PHP実践PHP実践PHP実践PHP実践PHP実践
    // PHP Date()関数
    // echo "Today is " . date("Y/m/d") . "<br>";
    // echo "Today is " . date("Y.m.d") . "<br>";
    // echo "Today is " . date("Y-m-d") . "<br>";
    // echo "Today is " . date("l") . "<br>";
    // echo "The time is " . date("h:i:sa") . "<br>";
    // date_default_timezone_set("Asia/Tokyo") . "<br>";
    // echo "The time is " . date("h:i:sa") . "<br>";

    // // mktime()で日付を作成
    // // mktime(hour, minute, second, month, day, year)
    // $d = mktime(11,14,54,8,12,2014);
    // echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";
    // // strtotime() を使用して文字列から日付を作成する
    // // strtotime(time, now)
    // $d = strtotime("10:30pm April 15 2014");
    // echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";

    // $d=strtotime("tomorrow");
    // echo date("Y-m-d h:i:sa", $d) . "<br>";

    // $d=strtotime("next Saturday");
    // echo date("Y-m-d h:i:sa", $d) . "<br>";

    // $d=strtotime("+3 Months");
    // echo date("Y-m-d h:i:sa", $d) . "<br>";

    // // その他の日付
    // //次の6週分の土曜日表示
    // $startdate = strtotime("Saturday");
    // $enddate = strtotime("+6 weeks", $startdate);

    // while ($startdate < $enddate) {
    // echo date("M d", $startdate) . "<br>";
    // $startdate = strtotime("+1 week", $startdate);
    // }
    // //今日から7/4日までの日数を出力
    // $d1=strtotime("July 04");
    // $d2=ceil(($d1-time())/60/60/24);->60秒60分24時間の指定
    // echo "There are " . $d2 ." days until 4th of July.";

    //PHPファイル処理関係
    // https://www.w3schools.com/php/php_file_open.asp

    //PHP Cookie
    // PHP で Cookie を作成する
    // setcookie(name, value, expire, path, domain, secure, httponly);

    // $cookie_name = "user";
    // $cookoe_value = "John Doe";
    // setcookie($cookie_name,$cookoe_value, time() + (86400 * 30), "/");//86400 = 1日　× 30日

    //Cookie を変更するには、次のsetcookie()関数を使用して Cookie を (再度) 設定します
    // Cookie を削除するには、setcookie()過去の有効期限を指定して関数を使用します。
    // setcookie("user", "", time() - 3600);

    // PHPセッション
    // session_start();







?>
<html>
<style>
table,
th,
td {
  border: 1px solid black;
  border-collapse: collapse;
}

th,
td {
  padding: 5px;
}
</style>
<body>
  <?php
    // //Cookie が有効になっているかどうかを確認する
    // if(count($_COOKIE) > 0) {
    // echo "Cookies are enabled.";
    // } else {
    // echo "Cookies are disabled.";
    // }
    // echo "<br>";
    // if (!isset($_COOKIE[$cookie_name])) {
    //     echo "Coookie named '" . $cookie_name . "'is not set!";
    // } else {
    //     echo "Coookie '" . $cookie_name . "' is set!<br>";
    //     echo "value is: " . $_COOKIE[$cookie_name];
    // }
    // echo "<br>";
    // //sessionをセットする
    // $_SESSION["favcolor"] = "Green";
    // $_SESSION["favanimal"] = "Cat";
    // echo "Session variables are set";
    //     echo "<br>";
    // // PHPフィルタ アドバンスト
    // //変数がINT型で1から200の間か確認する
    // $int = 122;
    // $min = 1;
    // $max = 200;

    // if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range" => $max))) === false) {
    //     echo ("Variable value is not within the legal range");
    // } else {
    //     echo("Variable value is within the legal range");
    // }
    // // 変数 $ip が有効な IPv6 アドレスであるかどうかを確認
    // $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
    // if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
    //     echo ("$ip is a valid IPv6 address");
    // } else {
    //     echo ("$ip is  not a valid IPv6 address");
    // }

    // // 変数 $url がクエリ文字列を含む URL であるかどうかを確認します。
    // $url = "https://www.w3schools.com";

    // if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
    // echo("$url is a valid URL with a query string");
    // } else {
    // echo("$url is not a valid URL with a query string");
    // }

    // // 文字列をサニタイズします。すべての HTML タグと、ASCII 値が 127 を超えるすべての文字を文字列から削除
    // $str = "<h1>Hello WorldÆØÅ!</h1>";
    // $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGHT);
    // echo $newstr;

    //PHPコールバック関数
    //配列内の全ての文字列の長さを計算
    // function my_callback($item)
    // {
    //     return strlen($item);
    // }

    // $strings = ["apple", "orange", "banana", "coconut"];
    // $length = array_map("my_callback",$strings);
    // print_r($length);
    // echo "<br>";
    // //PHP7以降は下の書き方もできる
    // $strings = ["apple", "orange", "banana", "coconut"];
    // $lengths = array_map( function($item) { return strlen($item); } , $strings);
    // print_r($lengths);
    // echo "<br>";
    // // ユーザー定義関数のコールバック
    // // ユーザー定義の関数とメソッドは、引数としてコールバック関数を取ることもできます。ユーザー定義の関数またはメソッド内でコールバック関数を使用するには、変数に括弧を追加して呼び出し、通常の関数と同様に引数を渡します。
    // function exclaim($str)
    // {
    //     return $str . "!";
    // }

    // function ask($str)
    // {
    //     return $str . "?";
    // }
    // //$formatコールバック関数の呼び出し
    // function printFormatted($str, $format)
    // {
    //     echo $format($str);
    // }

    // printFormatted("Hello world", "exclaim");
    // printFormatted("Hello world", "ask");

    // PHPとJSON
    // PHP - json_encode()
    //Jsonをエンコードする
    // $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
    // echo json_encode($age);
    // echo "<br>";
    // $cars = array("Volvo", "BMW", "Toyota");
    // echo json_encode($cars);
    // echo "<br>";
    // // PHP - json_decode()
    // //jsonをデコード
    // $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
    // var_dump(json_decode($jsonobj));
    // echo "<br>";
    // // json_decode ()関数は、デフォルトでオブジェクトを返します。json_decode ()関数には 2 番目のパラメーターがあり、true に設定すると、JSON オブジェクトは連想配列にデコードされます。
    // $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
    // var_dump(json_decode($jsonobj,true));
    // echo "<br>";
    // // PHP - デコードされた値へのアクセス
    // // オブジェクトと連想配列からデコードされた値にアクセスする方法
    // $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
    // $obj = json_decode($jsonobj);
    // echo $obj->Peter;
    // echo $obj->Ben;
    // echo $obj->Joe;

    // echo "<br>";
    // $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
    // $arr = json_decode($jsonobj, true);
    // echo $arr["Peter"];
    // echo $arr["Ben"];
    // echo $arr["Joe"];
    // echo "<br>";

    // // PHP - 値のループ
    // $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
    // $obj = json_decode($jsonobj);

    // foreach ($obj as $key => $value) {
    //     echo $key . "=>" . $value . "<br>";
    // }

    // $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
    // $arr = json_decode($jsonobj, true);

    // foreach($arr as $key => $value) {
    // echo $key . " => " . $value . "<br>";
    // }

    //PHPの例外
    // 例外のスロー
    // function divide($dividend, $divisor)
    // {
    //     if ($divisor == 0) {
    //         throw new Exception("Division by zero");
    //     }
    //     return $dividend;
    // }

    // echo divide(5, 0);

    //try catchで例外を処理する
    // function divided($dividend, $divisor)
    // {
    //     if ($divisor == 0) {
    //         throw new Exception("Division by zero");
    //     }
    //     return $dividend;
    // }
    // try {
    //     echo divided(5, 0);
    // } catch (Exception $e) {
    //     echo "unable to divide.";
    // }

    // このtry...catch...finallyステートメントは、例外をキャッチするために使用できます。finally例外がキャッチされたかどうかに関係なく、ブロック内のコードは 常に実行されます。が存在する場合 finally、catchブロックはオプションです。
    // function divide($dividend, $divisor) {
    // if($divisor == 0) {
    //     throw new Exception("Division by zero");
    // }
    // return $dividend / $divisor;
    // }

    // try {
    // echo divide(5, 0);
    // } catch(Exception $e) {
    // echo "Unable to divide. ";
    // } finally {
    // echo "Process complete.";
    // }

    //finallyは例外がキャッチされなかった場合でも文字列を出力します。
    // function divide($dividend, $divisor) {
    //     if($divisor == 0) {
    //         throw new Exception("Division by zero");
    //     }
    //     return $dividend / $divisor;
    //     }

    //     try {
    //     echo divide(5, 0);
    //     } finally {
    //     echo "Process complete.";
    //     }

    //スローされた例外に関する情報を出力する
    function divide($dividend, $divisor) {
    if($divisor == 0) {
        throw new Exception("Division by zero", 1);
    }
    return $dividend;
    }

    try {
    echo divide(5, 0);
    } catch(Exception $ex) {
    $code = $ex->getCode();
    $message = $ex->getMessage();
    $file = $ex->getFile();
    $line = $ex->getLine();
    echo "Exception thrown in $file on line $line: [Code $code] $message";
    }
    ?>
  <!-- PHPフィルター
    データの検証 = データが適切な形式であるかどうかを判断します。
    データのサニタイズ = データから不正な文字を削除します。 -->
  <!-- <table>
    <tr>
      <td>Filter Name</td>
      <td>Filter ID</td>
    </tr> -->
  <?php
        // foreach (filter_list() as $id => $filter) {
        //     echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
        // }
        // このfilter_var()関数は、データの検証とサニタイズの両方を行います。
        // このfilter_var()関数は、指定されたフィルターで単一の変数をフィルター処理します。次の 2 つのデータが必要です。
        // $str = "<h1>Hello World!</h1>";
        // $newstr = filter_var($str, FILTER_SANITIZE_STRING);
        // echo $newstr;
        // echo "<br>";
        // // $intが整数の場合は"Integer is vaild"が表示
        // $int = 100;
        // if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
        //     echo ("Integer is vaild");
        // } else {
        //     echo ("Integer is not valid");
        // }
        // echo "<br>";
        // // ↑で0が設定されている場合はこっちにする
        // $int = 0;
        // if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
        //     echo("Integer is valid");
        // } else {
        //     echo ("Integer is not valid");
        // }
        // echo "<br>";
        // //filter_varで有効なIPアドレスを検証する
        // $ip = "127.0.0.1";
        // if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
        //     echo ("$ip is a valid IP address");
        // } else {
        //     echo("$ip is not a valid address");
        // }
        // echo"<br>";
        // //filter_varでメールアドレスのサニタイズと検証
        // $email = "john.doe@example.com";
        // //メールから不正な文字を削除する
        // $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        // //メールのバリデート
        // if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        //     echo("$email is a valid email address");
        // } else {
        //     echo("$email is not a valid email address");
        // }
        // echo "<br>";
        // //filter_varでURLのサニタイズと検証
        // $url = "https://www.w3schools.com";

        // //URLから不正な文字を削除する
        // $url = filter_var($url, FILTER_SANITIZE_URL);

        // //URLのバリデート
        // if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
        // echo("$url is a valid URL");
        // } else {
        // echo("$url is not a valid URL");
        // }
        ?>
  </table>
</body>
</html>
