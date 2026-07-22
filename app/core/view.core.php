<?php
namespace App\Core;

class View {

    protected static $sections = [];
    protected static string $currentSection;
    protected static string $currentPage;
    protected static $shared = [];
   
    //link our controller to our view files(layout if neccessary)
    public static function views(string $url, array $data = [], $layoutOverride = null){
        self::$sections = [];

        $file   = __DIR__ . "/../view/$url.view.php";
        $folder = explode('/', $url)[0];

        if (!file_exists($file)) {
            die("File not found: $url");
        }

        $data = array_merge(self::$shared, $data);


        if ($layoutOverride === false) {
            extract($data);
            require $file;
            return;
        }

        // resolve which layout to use
        $layoutFile = $layoutOverride !== null
            ? __DIR__ . "/../view/layouts/$layoutOverride.view.php"
            : __DIR__ . "/../view/$folder/layout.view.php";

        if (!file_exists($layoutFile)) {
            die("Layout not found: $layoutFile");
        }


        (function(string $filePath, array $vars): void {
            extract($vars);
            require $filePath;
        })($file, $data);


        (function(string $filePath, array $vars): void {
            extract($vars);
            require $filePath;
        })($layoutFile, $data);
    }

    //shared layout
    public static function share(string $key, string $value){
        self::$shared[$key] = $value;
    }
    
    //Start Section
    public static function section(string $name, $data = []){
        self::$currentSection = $name;

        if (!empty($data)) {
            extract($data);
        }

        ob_start();
    }

    //EndSection
    public static function endSection(){
        self::$sections[self::$currentSection] = ob_get_clean();
    }

    //Render a section 
    public static function yield(string $name){
        echo self::$sections[$name] ?? "";
    }

    public static function getCurrentPage(){
        return self::$currentPage ?? '';
    }


}



