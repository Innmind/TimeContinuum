<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\CampoGrande,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class CampoGrandeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new CampoGrande;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
