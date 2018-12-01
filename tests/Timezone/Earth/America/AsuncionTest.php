<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Asuncion,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AsuncionTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Asuncion;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
