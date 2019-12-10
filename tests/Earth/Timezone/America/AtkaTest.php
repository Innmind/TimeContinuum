<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Atka,
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
