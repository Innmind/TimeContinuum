<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Kuwait,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class KuwaitTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Kuwait;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
