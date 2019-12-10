<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Qatar,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class QatarTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Qatar;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
