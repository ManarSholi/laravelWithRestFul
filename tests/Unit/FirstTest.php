<?php
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;

use Tests\TestCase;

use PHPUnit\Framework\Constraint\Constraint;

uses(TestCase::class)->in('Feature');
uses(RefreshDatabase::class)->in('Unit');
//uses()->beforeEach(fn () => dump('foo'))->in('Regression');
/*
test('Test count', function(){
    $array = [1, 2, 3, 4];
    $this->assertCount(4, $array);
});
test('greater than 20', function(){
    $age = 25;
    expect($age)->toBeGreaterThan(20);
});
test('To match array', function(){
    $user = [
        'id'    => 1,
        'name'  => 'Nuno',
        'email' => 'enunomaduro@gmail.com',
    ];
    expect($user)->toMatchArray([
        'email' => 'enunomaduro@gmail.com',
        'name' => 'Nuno'
    ]);
});
test('object', function(){
    $user = new stdClass();
    $user->id = 1;
    $user->email = 'enunomaduro@gmail.com';
    $user->name = 'Nuno';
    expect($user)->toMatchObject([
        'email' => 'enunomaduro@gmail.com',
        'name' => 'Nuno'
    ]);
});
*/
/*beforeEach(function () {
    echo 'beforeEach ';
});*/
/*
test('foo', function () {
    echo 'test foo ';
});

test('bar', function () {
    echo 'test bar ';
});

beforeEach(function () {
    $this->hey = 'artisan';
});
it('has artisan', function () {
    echo $this->hey;
});
*/
/*test('points to the correct URL')
    ->expect(fn() => route('profile'))
    ->toBe('http://127.0.0.1:8000/api/profile');
*/


/*test('Check profile', function(){
    $response = $this->get('/profile');
    //$response->assertStatus(404);
    expect($response)->toBeJson();
});*/

/*test('valid URL', function(){
    class IsValidUrlConstraint extends \PHPUnit\Framework\Constraint\Constraint{
        public function toString(): string{
            return 'is a valid url';
        }
        protected function matches($other): bool{
            if (! is_string($other)) {
                return false;
            }
            return preg_match(
                Symfony\Component\Validator\Constraints\UrlValidator::PATTERN,
                $other
            ) > 0;
        }
    }
    expect('https://google.com')->toMatchConstraint(new IsValidUrlConstraint());
});*/
/*it('points to the correct URL')
    ->expect(fn() => route('profile'))
    ->toBe('http://127.0.0.1:8000/api/profile');
    */
/*test('user is in the db', function(){
    factory(App\Models\User::class)->create();
    $this->assertDatabaseHas('users', ['id' => 1]);
});*/
/*test('asserts true is true', function () {
    $this->assertTrue(true);

    expect(true)->toBeTrue();
});

it('asserts true is true', function () {
    $this->assertTrue(true);

    expect(true)->toBeTrue();
});

test('Hello', function(){
    $this->assertTrue(true);
    expect(true)->toBeTrue();
});
test('has home', function(){
    $this->assertTrue(true);
    dd(get_parent_class($this));
});*/
?>