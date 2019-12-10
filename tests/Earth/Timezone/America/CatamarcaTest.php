<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Catamarca,
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
