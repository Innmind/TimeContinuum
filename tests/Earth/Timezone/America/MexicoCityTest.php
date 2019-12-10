<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\MexicoCity,
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
