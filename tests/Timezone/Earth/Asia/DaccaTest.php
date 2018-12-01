<?php
declare(strict_types = 1);

namespace Tests\Innmind\TimeContinuum\Timezone\Earth\Asia;

use Innmind\TimeContinuum\{
    Timezone\Earth\Asia\Dacca,
    TimezoneInterface
};
use PHPUnit\Framework\TestCase;

class DaccaTest extends TestCase
{
    public function testInterface()
    {
        $zone = new Dacca;

        $this->assertInstanceOf(TimezoneInterface::class, $zone);
    }
}
