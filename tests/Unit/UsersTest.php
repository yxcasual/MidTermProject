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
        $user->email='yc@gmail.com';
        $user->password='abc123';

        $this->assertTrue($user->save());
    }
}
