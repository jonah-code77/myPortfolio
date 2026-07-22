<?php
namespace App\Core;

class Component{
    //components
    public static function Render(string $name, array $data = []){
       
        $file =  __DIR__ . "/../view/components/$name.view.php";
        $paths = explode('/', $name);
        $folder = $paths[0];
        $url = $paths[1] ?? $name;
        $file = __DIR__ . ("/../view/components/$folder/$url.view.php");
        extract($data);
        if (file_exists($file)){
            
            require $file;
        } else {
            throw new \RuntimeException("Component [{$url}] not found.");
        }
    }
}