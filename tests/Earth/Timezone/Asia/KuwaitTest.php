<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Kuwait,
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
