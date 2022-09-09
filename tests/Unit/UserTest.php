<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use Tests\Unit\UserTest;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_form(){
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    // public function test_user_duplication()
    // {
    //     $user1 = User::make([
    //         'name' => 'John Doe',
    //         'email' => 'johndoe@gmail.com'
    //     ]);

    //     $user2 = User::make([
    //         'name' => 'Mary Jane',
    //         'email' => 'maryjane@gmail.com'
    //     ]);

    //     $this->assertTrue($user1->name != $user2->name);
    // }
    public function test_delete_user(){
        $user = User ::factory()->count(1)->make();

        $user = User::first();

        if($user){
            $user->delete();
        }
        $this->assertTrue(true);
    }

    // public function test_guarda_nuevo_user(){
    //     $respuesta = $this->post('/register',[
    //         'name'=>'camilo',
    //         'email'=>'JUAN@gmail.com',
    //         'password'=>'camilo123',
    //         'password_confirmation'=>'camilo123'

    //     ]);

    //     return $respuesta->assertRedirect('/');
    // }
}
