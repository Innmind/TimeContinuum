<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Manila,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class ManilaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Manila;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
