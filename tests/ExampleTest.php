<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
     use DatabaseMigrations;
    public function testLoginpg()
    {
        $this->visit('/')
             ->click('Log In or Sign Up now')
             ->seePageIs('/login_index');
    }

     public function testProfilepg()
    {
        $this->visit('/')
             ->click('Profile')
             ->seePageIs('/profile');
    }
     public function testHomepg()
    {
        $this->visit('/')
             ->click('Home')
             ->seePageIs('/index');
    }

     
    public function checkloginsubmit(){
        $this->visit('/login_index')
            
            ->type('james','name')
            ->type('james@yahoo.com','email')
            ->type('1234','pass')
            ->press('login')
            ->seePageIs('/index');
        }
         public function checkdatabsesubmit(){
        $this->visit('/login_index')
            
            ->type('james','name')
            ->type('james@yahoo.com','email')
            ->type('1234','pass')
            ->press('login')
            ->seeInDatabase('profile', ['Email' => 'james@yahoo.com'])
            ->seeInDatabase('profile', ['Profile_name' => 'james'])
            ->seeInDatabase('profile', ['Password' => '1234'])
            ->seePageIs('/index');
        }
        public function checksession(){
        $this->visit('/login_index')
            
            ->type('james','name')
            ->type('james@yahoo.com','email')
            ->type('1234','pass')
            ->press('login')
            ->withSession(['name' => 'james'])
             ->seePageIs('/index')
             ->see('Welcome,james');
        }
}
