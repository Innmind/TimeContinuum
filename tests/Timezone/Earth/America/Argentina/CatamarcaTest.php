<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America\Argentina;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Argentina\Catamarca,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class CatamarcaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Catamarca;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
