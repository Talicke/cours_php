<?php
    function hashing ($password, $cost){
        $options = [
            'cost' => $cost,
        ];
        return password_hash($password, PASSWORD_BCRYPT, $options);
    }