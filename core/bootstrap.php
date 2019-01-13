<?php

function view($name, $data = [])
{
  [ 'users' => $users ] = $data;
  return require "views/$name.view.php";
}

function redirect($path)
{
  header("Location: /$path");
}

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
  Connection::make(App::get('config')['database'])
));