<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Earth\Timezone\Europe;

use Innmind\TimeContinuum\Earth\Timezone;

/**
 * @psalm-immutable
 */
final class Belgrade extends Timezone
{
    public function __construct()
    {
        parent::__construct('Europe/Belgrade');
    }
}
