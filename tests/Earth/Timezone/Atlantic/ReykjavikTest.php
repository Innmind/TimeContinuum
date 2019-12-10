<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Atlantic;

use Innmind\TimeContinuum\{
    Earth\Timezone\Atlantic\Reykjavik,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ReykjavikTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Reykjavik;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
