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
    $id = '';

    if(isset($_COOKIE["ID"]))$id = $_COOKIE["ID"];
    //issetで値の有無を確認し、有る場合のみ代入する処理
    
    $params['login_flag'] = 0;

    //ユーザIDが存在する
    if($id != "" ){
        $params['login_flag'] = 1;
	
	//IDに対応するUsernameを格納
        $user_data = user_data::get_userdata();
	foreach ($user_data as $key => $value) {
		
		if($id == $value['ID']){
			$params['user_name'] = $value['user_name'];
		}
	}
    }

    //templateを指定
    $template = './template/index.html';
    $contents = common::html_output($template,$params);

    //指定した内容を出力
    echo $contents;
}
