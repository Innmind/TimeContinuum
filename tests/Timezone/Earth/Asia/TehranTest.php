<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Tehran,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class TehranTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Tehran;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
