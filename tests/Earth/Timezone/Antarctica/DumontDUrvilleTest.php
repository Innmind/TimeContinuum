<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Antarctica;

use Innmind\TimeContinuum\{
    Earth\Timezone\Antarctica\DumontDUrville,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class DumontDUrvilleTest extends TestCase
{
    public function testInterface()
    {
        $zone = new DumontDUrville;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
