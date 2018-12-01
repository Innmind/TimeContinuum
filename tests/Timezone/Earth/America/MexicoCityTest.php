<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\MexicoCity,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MexicoCityTest extends TestCase
{
    public function testInterface()
    {
        $zone = new MexicoCity;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
