<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Matamoros,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class MatamorosTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Matamoros;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
