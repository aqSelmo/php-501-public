<?php

interface interfaceStrategy 
{
    public function sort($collection);
}

class Strategy implements interfaceStrategy
{
    private function bubbleSort($collection)
    {

    }

    public function sort($collection)
    {
        return $this->bubbleSort($collection);
    }
}

function sortCollection($collection, $key, $sorter)
{
    $sorter->sort($collection);
}

##############################################################

interface interfaceUser 
{
    public function saveTxt($usuario);
    public function saveSql($usuario);
}

class User implements interfaceUser
{
    private $nome;
    private $email;

    public function saveTxt($user)
    {
        if(!file_exists("user.txt")){
            $folder = fopen("user.txt", "w");
        }
        $content = serialize($user);
        fwrite($folder, $content);
        fclose($folder);
    }
    public function saveSql($user)
    {
        return "Dados inseridos! - " . serialize($user);
    }
}

$user = new User;
$user->saveTxt("Guilherme Falcão");