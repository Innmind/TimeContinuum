<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Abidjan,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AbidjanTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Abidjan;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
