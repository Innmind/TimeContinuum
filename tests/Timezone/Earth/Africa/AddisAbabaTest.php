<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\AddisAbaba,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AddisAbabaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new AddisAbaba;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
