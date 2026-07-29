<?php
namespace App\Model;

use App\Core\Model;

class portfolio extends Model {

    private string $file_path;


    public function __construct($file_path = "data/projects.json"){
        $this->file_path = $file_path;
    }

    public function get_data(){
        if (!file_exists($this->file_path)) {
            return []; 
        }else{
            $json = file_get_contents($this->file_path);
            return json_decode($json,true) ?? [];
        }
    }
}