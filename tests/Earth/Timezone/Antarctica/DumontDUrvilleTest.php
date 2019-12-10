<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Antarctica;

use Innmind\TimeContinuum\{
    Earth\Timezone\Antarctica\DumontDUrville,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class DumontDUrvilleTest extends TestCase
{
    public function testInterface()
    {
        $zone = new DumontDUrville;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
