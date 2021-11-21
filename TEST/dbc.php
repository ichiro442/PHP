<?php
// namespace Blog\Dbc;

Class Dbc{
    protected $table_name;
    // function __construct($table_name){
    //     $this->$table_name = $table_name;
    // }

    //関数一つひとつに機能のみをもたせる
    //1.データベースに接続
    //2.データを取得
    //3.カテゴリー名を表示

    //1.データベースに接続
    //引数 なし
    //返り値 検索結果を返す
    private function dbConnect(){
        $dsn = "mysql:dbname=blog;host=localhost;charset=utf8";
        $user = "table_h";
        $pass = "table";
        $option = [\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION];
        
        try{
            $dbh = new \PDO($dsn, $user, $pass, $option);
        }catch(PDOException $e){
            echo '接続失敗'. "<br />". $e->getMessage();
            exit(); 
        };
        return $dbh;
    }
    // var_dump($dbh);
    //2.データを取得
    //引数 なし
    //返り値 取得したデータ
    public function getAll(){
        $dbh = $this->dbConnect();
        // ①sql文の準備 
        $sql = "select * from  (string)$this->$table_name";//データの取得
        //②sqlの実行
        $stmt = $dbh->query($sql);
        //③sqlの結果を受け取る
            $result = $stmt->fetchall(\PDO::FETCH_ASSOC);
            // var_dump($result);
        return $result;
        $dbh = null; 
    }

    // 引数；$id
    // 返り値；$result

    public function getById($id){
        if(empty($id)){
            exit("IDが不正です。");
        }
        $dbh = $this->dbConnect();
        
        // var_dump($dbh);
        $stmt = $dbh->prepare("select * from $this->$table_name Where id = :id");
        $stmt->bindValue(':id', (int)$id, \PDO::PARAM_INT);
        
        $stmt->execute();
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        // var_dump($result);
        if(!$result){ 
            exit("ブログがありません。");
        }
        return $result;
    }


}
?>

