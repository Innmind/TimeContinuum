<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Manila,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class ManilaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Manila;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
