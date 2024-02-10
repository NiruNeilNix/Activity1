<?php
class Get{

    public function get_employees(){
        $data = array(
            "id" => 199,
            "first_name" => "Neil Carlo",
            "last_name" => "Nabor",
            "hire_date" => date_create()
        );
        return $data;
    }

    public function get_jobs($param){
        return 'My job is ' . $param;
    }
}
?>