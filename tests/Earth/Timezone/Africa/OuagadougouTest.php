<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Africa;

use Innmind\TimeContinuum\{
    Earth\Timezone\Africa\Ouagadougou,
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
