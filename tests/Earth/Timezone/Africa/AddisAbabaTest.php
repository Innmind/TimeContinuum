<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\AddisAbaba,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class AddisAbabaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new AddisAbaba;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
