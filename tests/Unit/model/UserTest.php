<?php 
declare(strict_types=1);

use App\model\User;
use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{
    public function testUserAgeCalculation(): void
    {
        $user = new User('Luiz Mesquita', new DateTime('1984-11-09'));
        expect($user->getAge())->toBe(39);
    }
}