<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Atka,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AtkaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Atka;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
