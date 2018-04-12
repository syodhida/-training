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
    
    //var_dump($_GET);

    //GETにてIDの取得
    $id = $_GET['ID'];

    //ユーザデータ取得
    $user_data = user_data::get_userdata();
    $output_user = [];
    //------------------------------------------------
    //ここで絞り込む

        foreach ($user_data as $key => $value) {

            if($id == $value['ID']){
        
		$output_user[] = [
			 'ID' => $value['ID'],
			 'user_name' => $value['user_name'],
			 'job' => $value['job']
		];
    	    }
    	}


    //------------------------------------------------
    //セット
    $params = $output_user;


    //templateを指定
    $template = './template/index.html';
    $contents = common::html_output($template,$params);
    //$contents = html_output($template,$params);


    //指定した内容を出力
    echo $contents;
}
