<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Eirunepe,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class EirunepeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Eirunepe;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
