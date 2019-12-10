<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Atlantic;

use Innmind\TimeContinuum\{
    Earth\Timezone\Atlantic\Azores,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class AzoresTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Azores;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
