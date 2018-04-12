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
    /*
    $params = array();
    $params[] = [
        'ID'        => '1',
        'user_name' => '秋谷　亮太',
        'job'       => 'programmer'
    ];
    $params[] = [
        'ID'        => '2',
        'user_name' => '吉田　忍',
        'job'       => 'programmer'
    ];
    $params[] = [
        'ID'        => '3',
        'user_name' => '田中　裕也',
        'job'       => 'lead programmer'
    ];
    */
    $params = user_data::get_userdata();

    //  foreachサンプル
    foreach ($params as $key => $value) {
        echo 'key:';
        var_dump($key);
        echo '<br>';
        echo 'value:';
        var_dump($value);
        echo '<br>';

        if($key == 0){
            echo '-------------<br>';
            echo '$valueのキーを手動指定もできる　$value["user_name"]:'.$value["user_name"]."<br>";
            echo '$keyが'.$key.'の$valueをさらにforeachで抽出<br>';
            foreach ($value as $k => $v) {
                echo 'key($k):';
                var_dump($k);
                echo '<br>';
                echo 'value($v):';
                var_dump($v);
                echo '<br>';
            }
            echo '-------------<br>';
        }
    }
    exit();

    //templateを指定
    $template = './template/index.html';
    $contents = common::html_output($template,$params);
    //$contents = html_output($template,$params);


    //指定した内容を出力
    echo $contents;
}

/*function html_output($template,$params){
    //htmlを取り込む
    ob_start();
    require $template;
    $contents = ob_get_clean();

    //出力内容を返す
    return $contents;
}*/
