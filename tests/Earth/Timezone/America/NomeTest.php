<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\America;

use Innmind\TimeContinuum\{
    Earth\Timezone\America\Nome,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class NomeTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Nome;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
