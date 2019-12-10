<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Atlantic;

use Innmind\TimeContinuum\{
    Earth\Timezone\Atlantic\Bermuda,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class BermudaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Bermuda;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
