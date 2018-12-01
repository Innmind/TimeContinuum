<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Eirunepe,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class EirunepeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Eirunepe;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
