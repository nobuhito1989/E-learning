<?php 
    

class Validation
{
    public function check_empty($data, $fields)
    {
        $msg = null;
        foreach($fields as $value){
            if(empty($data[$value])){ 
                $msg .= "$value field is empty <br>";
            }
        }
        return $msg;
    }


}
