<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\ElSalvador,
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
