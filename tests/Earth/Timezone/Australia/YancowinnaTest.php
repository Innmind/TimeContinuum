<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Australia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Australia\Yancowinna,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class YancowinnaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Yancowinna;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
