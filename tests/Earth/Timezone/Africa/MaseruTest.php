<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Maseru,
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
