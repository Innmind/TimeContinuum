<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\PortoAcre,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class PortoAcreTest extends TestCase
{
    public function testInterface()
    {
        $zone = new PortoAcre;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
