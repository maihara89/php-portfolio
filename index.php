<!--<!DOCTYPE html>-->
<!--<html lang="ja">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <link rel="stylesheet" href="stylesheet.css">-->
<!--    <title>旅行グルメ投稿サイト</title>-->
<!--</head>-->
<!--<body>-->
<!--    <div class="top-name">-->
<!--        <h1>じゃらん</h1>-->
<!--    </div>-->

<!--    <div class="log-in">-->
<!--        <h2>ログインはこちらから</h2>-->
<!--        ID <input><br>-->
<!--        Password <input type="password"><br>-->
<!--        <input type="submit" value="ログイン">-->
<!--    </div>-->
    
<!--    <div class="log-in">-->
<!--        <h2>会員登録はこちら</h2>-->
<!--        <a href="signup.html">会員登録</a>-->
<!--    </div>-->
    
<!--</body>-->
<!--</html>-->

<?php

class Post {
        private $DB_HOST = "ip-172-31-15-49.us-east-2.compute.internal";
        private $DB_NAME = "phpPortfolio";
        private $DB_USER = "root";
        private $DB_PASSWORD = "";

    protected function db_access(){
            //phpがエラーを表示するように設定
            error_reporting(E_ALL & E_NOTICE);

            //データベースへの接続
            try {
                $dbh = new PDO('mysql:host'.$this->DB_HOST.';dbname'.$this->DB_NAME, $this->DB_USER, $this->DB_PASSWORD);
                return $dbh;
                }
                $dbh = null;
            } catch (PDOException $e) {
                echo "エラー!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function index(){
            $dbh = $this->db_access();

            $sql = 'SELECT * FROM profile';
            $stmt = $dbh->prepare($sql);

            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }

$postmodel = new Post();
$result = $postmodel->index();

var_dump($result);
