<?php

interface UserInterface
{
    public function insert(Array $user);

    public function update(Array $user);

    public function delete(Int $id);
   
}
