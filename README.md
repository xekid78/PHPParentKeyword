# PHPParentKeyword
parentキーワード（super）

## 処理
parentキーワードを使って、JewelryBoxクラスから親クラスのコンストラクタの変数を出力。

## コード
```
<?php
class Greeting {
    function __construct() {
        $this->msg = "Hello";
        $this->target = "World";
    }

    function say_hello() {
        echo $this->msg." ".$this->target."\n";
    }
}

class Hello extends Greeting {
    function say_hello() {
        parent::say_hello();
        echo "WA HA HA HA\n";
    }
}

$hello = new Hello();
$hello->say_hello();
```

## 出力結果  
```
Hello World
WA HA HA HA
```
  
## 開発環境
| 開発ツール |  |
|:-|:-|
| OS | Windows10 |
| 仮想化ソフト | Oracle VM VirtualBox 5.2 |
| 構築ソフト | Vagrant 2.0.2 |
| 仮想化上OS | CentOS 6.9 |
| SSHクライアント | PuTTY 0.6.8 |
| FTPクライアント | Cyberduck 6.3.5 |
| エディタ | Atom 1.24.0 |
| 開発言語 | PHP 7.1.15 |
