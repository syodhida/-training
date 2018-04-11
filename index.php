<?php

// --------------------------------------
// START
// --------------------------------------
try {

    main();

} catch (Exception $e) {
    echo $e;
}

function main(){
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

    //templateを指定
    $template = './template/index.html';
    $contents = html_output($template,$params);

    //指定した内容を出力
    echo $contents;
}

function html_output($template,$params){
    //htmlを取り込む
    ob_start();
    require $template;
    $contents = ob_get_clean();

    //出力内容を返す
    return $contents;
}
