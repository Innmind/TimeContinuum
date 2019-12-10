<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Baghdad,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BaghdadTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Baghdad;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
