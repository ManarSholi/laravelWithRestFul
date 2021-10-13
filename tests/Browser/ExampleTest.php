<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

use App\Models\User;
use Laravel\Dusk\chrome;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        /*$user = factory(User::class)->create([
            'email' => 'taylor@laravel.com',
        ]);*/
/* 
        $this->browse(function($browser) use($user){
            $browser->visit('/login')
                    ->type('email', $user->email)
                    ->type('password', 'password')
                    ->press('login')
                    ->assertPathIs('/home')
        });*/
        /*$this->browse(function(){
            $first->loginAs(User::find(1))
            ->visit('/home')
            ->waitForText('Message');

            $second->loginAs(User::find(2))
                    ->visit('/home')
                    ->waitForText('Message')
                    ->type('message', 'Hey Taylor')
                    ->press('Send');
            $first->waitForText('Hey Taylor')
                    ->assertSee('Jeffrey Way');
        });
        */
        
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }
}
