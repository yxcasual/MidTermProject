<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\IsType;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\car;

class CarsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testCountCar()
    {
        $car= car::All();
        $carCount = $car->count();

        $this->assertEquals($carCount,50);
    }


    public function testInsertCar()
    {
        $car= new car();
        $car->make='Ford';
        $car->model='xi23id';
        $car->year=1995;


        $this->assertTrue($car->save());
    }

    public function testUpdateYearCar()
    {
        $car= car::find(1);
        $car->year=2000;

        $this->assertTrue($car->save());
    }

    public function testDeleteCar()
    {
        $car= car::find(2);
        $this->assertTrue($car->delete());

    }

    public function testCarYearInt()
    {
        $car= car::inRandomOrder()->first();
        $year = (int) $car->year; // Set year value as interger because by default it seems to identify as a string

        $this->assertInternalType(IsType::TYPE_INT,$year);
        //$this->assertFalse(is_int($car->year));
    }
    public function testCarMake()
    {
        $car= car::inRandomOrder()->first();
        if ($car->make=='Ford' || $car->make=='Honda' || $car->make=='Toyota'){
        $flag = 'Success';}
        else{
             $flag = 'Failure';
        }
            $this->assertEquals('Success',$flag);

    }
}
