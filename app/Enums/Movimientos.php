<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Movimientos extends Enum
{
    public const RIGHT = 'right';
    public const LEFT = 'left';
    public const DOWN = 'down';
    public const MIN = 5;
    public const MAX = 7;
}
