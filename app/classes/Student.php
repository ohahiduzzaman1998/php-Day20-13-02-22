<?php


namespace App\classes;
use App\classes\User;
use App\classes\ExampleOne;
use App\classes\ExampleTwo;
use App\classes\Teacher;
use App\classes\Category;
class Student extends Teacher implements ExampleOne,ExampleTwo

{
    use Category;

    protected $country ='Bangladesh';

    public static $area = 'Farmgate';

    public function __construct()
    {

        //$this->name ='shehon';
       // $this->city ='Mirpur';
    }


    public function manage()
    {
        echo self::$area;
        //echo $this->add();
        //echo " Institute name is  $this->name  and city is  $this->city and country is $this->country ";
    }

    public function one()
    {
        // TODO: Implement one() method.
        echo 'hello one';
    }

    public function two()
    {
        // TODO: Implement two() method.
        echo 'hello two';
    }

    public function three()
    {
        // TODO: Implement three() method.
        echo 'hello three';
    }

    public function ten()
    {
        // TODO: Implement ten() method.
        echo 'hello ten';
    }

    public function ten1()
    {
        // TODO: Implement ten1() method.
        echo 'hello ten1';
    }

    public function test()
    {
        // TODO: Implement test() method.
        echo 'hello test';
    }
    public static function demo()
    {
        echo 'hello demo';
    }
}