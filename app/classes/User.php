<?php


namespace App\classes;


class User
{
    protected $user = [];

    public function getAllUser(){

        $this->user = [
            0=> [
                'name'      => "Khorshed",
                'mobile'    => '123456',
                'location'  => 'Lalbagh',
            ],
            1=> [
                'name'      => "Emon",
                'mobile'    => '6879800',
                'location'  => 'Malibagh',
            ]
        ];
        return $this->user;
    }
}