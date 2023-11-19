<?php
namespace App\Custom;

class Helper {

  protected $isAdmin;

  /**
   * makeClassName
   *
   * @param  string $type
   * @param  string $name
   * @param  string $subName
   * @return string
   */
  public static function makeClassName(string $type, string $name, string $subName = ''): string
  {
    $className = "App\\{$type}\\{$name}\\{$name}{$subName}";
    if(!class_exists($className)) {
      return false;
    }
    return $className;
  }
  
  /**
   * makeModelClassName
   *
   * @param  string $name
   * @param  string $subName
   * @return string
   */
  public static function makeModelClassName(string $name, string $subName = ''): string
  {
    return self::makeClassName('Models', $name, $subName);
  }
  
  /**
   * makeRepositoryClassName
   *
   * @param  mixed $name
   * @return string
   */
  public static function makeRepositoryClassName(string $name): string
  {
    return self::makeClassName('Models', $name, 'Repository');
  }
  
  /**
   * isAdminAccess
   *
   * @return bool
   */
  public static function isAdminAccess(): bool
  {
      if (! is_null(self::$isAdmin)) return self::$isAdmin;
      dd(auth()->user());
      self::$isAdmin = auth()->user()->detail->is_admin ?? false;
      return self::$isAdmin;
  }
  
  /**
   * resetAdminAccess
   *
   * @return void
   */
  public static function resetAdminAccess(): void
  {
    self::$isAdmin = null;
  }
  
  /**
   * getShortName
   *
   * @param  string $str
   * @return string
   */
  public static function getShortName(string $str): string
  {
    return class_basename($str);
  }
}