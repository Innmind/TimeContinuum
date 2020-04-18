<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\Earth\Timezone;

/**
 * @psalm-immutable
 */
final class Monaco extends Timezone
{
    public function __construct()
    {
        parent::__construct('Europe/Monaco');
    }
}
