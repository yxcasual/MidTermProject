<?php

namespace Tests\Unit;

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
}
