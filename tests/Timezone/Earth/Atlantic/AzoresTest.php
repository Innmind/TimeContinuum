<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Atlantic;

use Innmind\TimeContinuum\{
    Timezone\Earth\Atlantic\Azores,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class AzoresTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Azores;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
