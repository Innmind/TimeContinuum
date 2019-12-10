<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\CampoGrande,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class CampoGrandeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new CampoGrande;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
