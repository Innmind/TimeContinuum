<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Atlantic;

use Innmind\TimeContinuum\Earth\Timezone;

/**
 * @psalm-immutable
 */
final class Canary extends Timezone
{
    public function __construct()
    {
        parent::__construct('Atlantic/Canary');
    }
}
