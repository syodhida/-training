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


    //クッキーからログイン状態を判別する
    //↓クッキーの取得例
    $email = '';
    if(isset($_COOKIE["EMAIL"]))$email = $_COOKIE["EMAIL"];
    //issetで値の有無を確認し、有る場合のみ代入する処理

    $params['login_flag'] = 0;
    /*
    if(もしログイン中なら){
        $params['login_flag'] = 1;
    }
    */

    //templateを指定
    $template = './template/index.html';
    $contents = common::html_output($template,$params);

    //指定した内容を出力
    echo $contents;
}
