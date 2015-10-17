<?php
namespace SayHello;
class SayHello
{
    public static function world()
    {
        return 'Hello World, Composer!';
    }

    static function area($side){
        $surface_area = $side * $side;

         echo "The squares surface area is $surface_area units\n";
    }
}