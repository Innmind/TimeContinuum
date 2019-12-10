<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Abidjan,
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
