<?php
use App\Models\User;
use Illuminate\Support\Facades\Auth;

//$access_token ="";
it('has user page', function () {
    $response = $this->get('/user');

    $response->assertStatus(200);
});

it('has register page', function () {
    $response = $this->post('api/register?name=manar3&email=manar3@mail.test&password=123456789');
    $response->assertStatus(200);
});
it('has login page', function () {
    $response = $this->post('api/login?email=manar3@mail.test&password=123456789');
    //$access_token = $response->json('access_token');
    //dd($access_token);
    $response->assertStatus(200);
});
it('has update page', function () {
    $response = $this->put('api/update/2?name=anwar2&email=anwar@mail.test&password=123456789');
    $body = '[
        "name" => "anwar",
        "email" => "anwar@mail.test",
        "password" => "12345678"
    ]';
    $response->assertStatus(200);
});
it('has delete function', function () {
    $response = $this->delete('api/delete/1');
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

/*
it('can calculate the info. about the user', function(User $user) {
    expect($user)->toBe("{$user->name} {$user->email} {$user->password}");
})->with([
    fn() => User::factory()->create(['name' => 'Nuno4', 'email' => 'Nuno4@mail.test','password' => '123456789']),
    fn() => User::factory()->create(['name' => 'Luke4', 'email' => 'Luke4@mail.test', 'password' => '123456789']),
    fn() => User::factory()->create(['name' => 'Freek4', 'email' => 'Freek4@mail.test','password' => '123456789']),
]);
*/
/*it('has emails', function ($name, $email) {
    expect($email)->not->toBeEmpty();
})->with([
    ['Nuno', 'enunomaduro@gmail.com'],
    ['Other', 'other@example.com']
]);*/

