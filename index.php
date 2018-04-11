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
    //templateを指定
    $template = './template/index.html';

    //htmlを取り込む
    ob_start();
    require $template;
    $contents = ob_get_clean();

    //指定した内容を出力
    echo $contents;
}
