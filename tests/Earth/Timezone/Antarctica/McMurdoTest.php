<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Antarctica;

use Innmind\TimeContinuum\{
    Earth\Timezone\Antarctica\McMurdo,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class McMurdoTest extends TestCase
{
    public function testInterface()
    {
        $zone = new McMurdo;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
