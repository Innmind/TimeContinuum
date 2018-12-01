<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Africa;

use Innmind\TimeContinuum\{
    Timezone\Earth\Africa\Ouagadougou,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class OuagadougouTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Ouagadougou;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
