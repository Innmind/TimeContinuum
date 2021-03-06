<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\{
    Earth\Timezone\Europe\IsleOfMan,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class IsleOfManTest extends TestCase
{
    public function testInterface()
    {
        $zone = new IsleOfMan;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
