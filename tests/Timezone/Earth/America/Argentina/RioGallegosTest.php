<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America\Argentina;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Argentina\RioGallegos,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class RioGallegosTest extends TestCase
{
    public function testInterface()
    {
        $zone = new RioGallegos;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
