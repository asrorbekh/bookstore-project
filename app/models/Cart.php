<?php

class Cart extends Model
{
    public function addToCart($id)
    {
        $sql = '';
        $data=[
            ':name'=>$_POST['name']
        ];
        self::insert($sql,$data);
    }

    public function updateCart($id)
    {
        $sql = 'UPDATE cart SET name = :name';
        $data = [
            ''
        ];
        self::update($sql,$data);
    }

    public function removeFromCart($id)
    {
        $sql = '';
        $data = [

        ];
        self::update($sql,$data);
    }
}