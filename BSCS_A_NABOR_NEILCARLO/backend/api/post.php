<?php
class Post{

    public function add_employee($employee){
        if ($employee !== null) {
        $employee->salary = 10000;
        return $employee;  
        }else{
            return "Error: Employee data is null.";
        }
        
    }
    
    public function add_job($param){
        return "My job is $param";
    }
}
?>