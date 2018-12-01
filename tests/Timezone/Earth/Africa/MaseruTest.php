<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Maseru,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MaseruTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Maseru;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
