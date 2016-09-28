<?php
declare(strict_types = 1);

namespace Innmind\TimeContinuum\Timezone;

use Innmind\TimeContinuum\TimezoneInterface;

final class Greenwich implements TimezoneInterface
{
    public function hours(): int
    {
        return 0;
    }

    public function minutes(): int
    {
        return 0;
    }

    public function __toString(): string
    {
        return 'Z';
    }
}
