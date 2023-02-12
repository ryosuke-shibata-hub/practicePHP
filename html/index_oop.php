<?php
// PHPoop
// OOP はオブジェクト指向プログラミングの略です。
// PHP OOP - クラスとオブジェクト

//クラス
// class Fruit {
//     //プロパティ
//     public $name;
//     public $color;

//     //メソッド
//     function set_name($name)
//     {
//         $this->name = $name;
//     }
//     function get_name()
//     {
//         return $this->name;
//     }
//     function set_color($color) {
//         $this->color = $color;
//     }
//     function get_color() {
//         return $this->color;
//     }
// }

// //     //オブジェクトを定義する
// //     $apple = new Fruit();
// //     $apple->set_name('Apple');
// //     $apple->set_color('Red');

// //     echo $apple->get_name();
// //     echo "<br>";
// //     echo "Color: " . $apple->get_color();

// // PHP - $this キーワード
// // class Fruit {
// //     public $name;
// //     //クラス内 (set_name() メソッドを追加して $this を使用):
// //     // function set_name($name)
// //     // {
// //     //     $this->name = $name;
// //     // }
// // }

// // $apple = new Fruit();
// // // $apple->set_name("Apple");
// // // クラス外 (プロパティ値を直接変更):
// // $apple->name = "Apple";
// // echo $apple->name;

// // PHP-インスタンス
// $apple = new Fruit();
// var_dump($apple instanceof Fruit);

//PHP - __construct 関数
// class Fruit {
//   public $name;
//   public $color;

//   function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color;
//   }
//   function get_name() {
//     return $this->name;
//   }
//   function get_color() {
//     return $this->color;
//   }
// }

// $apple = new Fruit("Apple", "red");
// echo $apple->get_name();
// echo "<br>";
// echo $apple->get_color();

// PHP - 継承とは?
// class Fruit {
//     public $name;
//     public $color;
//     public function __construct($name, $color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     public function intro()
//     {
//         echo "The fruit is {$this->name} and the color is {$this->color}";
//     }
// }

// class Straweberry extends Fruit {
//     public function message()
//     {
//         echo "Am I a fruit or a berry?";
//     }
// }

// $strawberry = new Straweberry("Strawberry", "red");
// $strawberry->message();
// $strawberry->intro();

// PHP - 継承と Protected Access Modifier
// class Fruit {
//   public $name;
//   public $color;
//   public function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color;
//   }
//   protected function intro() {
//     echo "The fruit is {$this->name} and the color is {$this->color}.";
//   }
// }

// class Strawberry extends Fruit {
//   public function message() {
//     echo "Am I a fruit or a berry? ";
//     // Call protected method from within derived class - OK
//     $this -> intro();
//   }
// }

// $strawberry = new Strawberry("Strawberry", "red"); // OK. __construct() is public
// $strawberry->message();

// PHP - 継承されたメソッドのオーバーライド
// 継承されたメソッドは、子クラスでメソッドを再定義する (同じ名前を使用する) ことでオーバーライドできます。
// 以下の例を見てください。子クラス (Strawberry) の __construct() および intro() メソッドは、親クラス (Fruit) の __construct() および intro() メソッドをオーバーライドします。

class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}";
    }
}

class Strawberry extends Fruit {
    public $weight;
    public function __construct($name, $color, $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function intro()
    {
        echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
    }
}

$strawberry = new Strawberry("Strawberry", "red", 50);
$strawberry->intro();


?>
