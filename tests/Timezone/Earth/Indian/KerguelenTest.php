<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Indian;

use Innmind\TimeContinuum\{
    Timezone\Earth\Indian\Kerguelen,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class KerguelenTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kerguelen;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
