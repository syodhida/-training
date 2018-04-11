<?php

class user_data {
    function get_userdata(){
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
        return $params;
    }
}
