<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Montevideo,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MontevideoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Montevideo;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
