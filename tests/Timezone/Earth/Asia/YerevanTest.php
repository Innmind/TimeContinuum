<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Yerevan,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class YerevanTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Yerevan;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
