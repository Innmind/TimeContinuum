<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Indian;

use Innmind\TimeContinuum\Earth\Timezone;

/**
 * @psalm-immutable
 */
final class Mahe extends Timezone
{
    public function __construct()
    {
        parent::__construct('Indian/Mahe');
    }
}
