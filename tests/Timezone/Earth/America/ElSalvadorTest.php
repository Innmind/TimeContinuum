<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\ElSalvador,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ElSalvadorTest extends TestCase
{
    public function testInterface()
    {
        $zone = new ElSalvador;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
