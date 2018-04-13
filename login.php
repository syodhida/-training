<?php
include_once ( "./common/user_data.php" );
include_once ( "./common/common.php" );

// --------------------------------------
// START
// --------------------------------------
try {

    main();

} catch (Exception $e) {
    echo $e;
}

function main(){
    $template = '';
    $params = array();
    //初回表示フラグ
    $params["initial"] = 1;
    //POST送信された時は$_SERVER["REQUEST_METHOD"]がPOSTになる
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //ポスト送信されてきたときの処理

        //POST送信パラメータは$_POSTで取得できる
        var_dump($_POST);exit();

        //POST送信されているので初回ではない判定
        $params["initial"] = 0;
        //ユーザ情報を取得
        $user_data = user_data::get_userdata();
        //ログイン判定フラグ
        $login_flag = 0;
        //ログイン判定
        foreach ($user_data as $key => $value) {
            //該当ユーザが居た場合ログインフラグを1にする
            //該当ユーザのメールアドレスを取得する
        }

        //ログインの可否によって処理を分ける
        if($login_flag == 1){
            //クッキーにログイン情報をセットする
            //ID,emailとかをセットすると良い
            //クッキーのセット例
            setcookie("EMAIL", 'testemail_address', time()+(60*60*24*7) );
            //↑クッキーにEMAILという名前で文字列を挿入　有効期限1週間

            //ログイン成功時なのでトップページへリダイレクト
            header("Location:/");
            exit();
        }
    }
    //templateを指定
    $template = './template/login.html';
    $contents = common::html_output($template,$params);
    //$contents = html_output($template,$params);


    //指定した内容を出力
    echo $contents;
}
