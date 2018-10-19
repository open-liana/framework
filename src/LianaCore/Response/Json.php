<?php
/**
 * Created by Arif Hidayat
 * on October 19, 2018
 */

namespace LianaCore\Response;


class Json
{
    public static function fromArray(array $array){
        return json_encode($array);
    }

    public static function toArray(string $json){
        return json_decode($json);
    }
}