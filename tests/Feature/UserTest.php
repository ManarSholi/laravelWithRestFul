<?php
use App\Models\User;
use Illuminate\Support\Facades\Auth;

$access_token ="";
it('has user page', function () {
    $response = $this->get('/user');

    $response->assertStatus(200);
});

it('has register page', function () {
    $response = $this->post('api/register?name=anwar&email=anwar@mail.test&password=12345678');
    $response->assertStatus(200);
});
it('has login page', function () use($access_token) {
    $response = $this->post('api/login?email=manar@mail.test&password=12345678');
    $access_token = $response->json('access_token');
    //dd($access_token);
    $response->assertStatus(200);
});
/*

it('has profile page', function () use($access_token) {
    $response = $this->get("api/profile");
    //.set('Authorization', 'bearer ' + $access_token)
    $response->assertStatus(200);

    //dd($access_token);
    //$body = "{'Token': $access_token}";
    //$response->json($body);
    //Auth::login($body, false);
});*/

/*it('can calculate the full name of a user', function(User $user) {
    expect($user->full_name)->toBe("{$user->name} {$user->email} {$user->password}");
})->with([
    fn() => User::factory()->create(['name' => 'Nuno', 'email' => 'Nuno@mail.test','password' => '123456789']),
    fn() => User::factory()->create(['name' => 'Luke', 'email' => 'Luke@mail.test', 'password' => 'Downing']),
    fn() => User::factory()->create(['name' => 'Freek', 'email' => 'Freek@mail.test','password' => 'Van Der Herten']),
]);*/

/*it('has emails', function ($name, $email) {
    expect($email)->not->toBeEmpty();
})->with([
    ['Nuno', 'enunomaduro@gmail.com'],
    ['Other', 'other@example.com']
]);*/

