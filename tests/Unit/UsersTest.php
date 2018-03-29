<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UsersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */


    public function testInsertUser()
    {
        $user= new User();
        $user->name='Yohann Chakola';
        $user->email=str_random(6).'@gmail.com';
        $user->password=bcrypt(str_random(8));


        $this->assertTrue($user->save());
    }
    public function testUpdateNameUser()
    {
        $user= User::inRandomOrder()->first();
        $user->name='Steve Smith';

        $this->assertTrue($user->save());
    }

    public function testDeleteUser()
    {
        $user= User::inRandomOrder()->first();
        $this->assertTrue($user->delete());
    }

    public function testCountUser()
    {
        $user= User::All();
        $userCount = $user->count();

        $this->assertEquals($userCount,50);
    }

}
