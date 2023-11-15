<?php
namespace App\Custom;

class Helper {
  public static function makeClassName(string $type, string $name, string $subName ='')
  {
    $className = "App\\{$type}\\{$name}\\{$name}{$subName}";
    if(!class_exists($className)) {
      return false;
    }
    return $className;
  }

  public static function makeModelClassName(string $name, string $subName ='') {
    return self::makeClassName('Models', $name, $subName);
  }

  public static function makeRepositoryClassName(string $name) {
    return self::makeClassName('Models', $name, 'Repository');
  }
}