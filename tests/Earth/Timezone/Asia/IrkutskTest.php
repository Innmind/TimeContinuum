<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Earth\Timezone\Asia;

use Innmind\TimeContinuum\{
    Earth\Timezone\Asia\Irkutsk,
    Timezone,
};
use PHPUnit\Framework\TestCase;

class IrkutskTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Irkutsk;

        $this->assertInstanceOf(Timezone::class, $zone);
    }
}
