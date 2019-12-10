<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Tehran,
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
