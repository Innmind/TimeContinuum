<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\America;

use Innmind\TimeContinuum\{
    Timezone\Earth\America\Lima,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class LimaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Lima;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
