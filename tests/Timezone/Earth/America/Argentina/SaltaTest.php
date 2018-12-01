<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America\Argentina;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Argentina\Salta,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class SaltaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Salta;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
