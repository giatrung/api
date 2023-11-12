<?php

if (! function_exists('model')) {
  /**
   * モデル
   *
   * @return string|bool
   */
  function model(string $name) {
    $model = \Helper::makeModelClassName($name);
    return new $model;
  }
}

if (! function_exists('repo')) {
  function repo(string $name) {
    $repo = \Helper::makeRepositoryClassName($name);
    return new $repo;
  }
}