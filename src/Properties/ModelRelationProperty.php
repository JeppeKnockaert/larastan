<?php

declare(strict_types=1);

/**
 * This file is part of Larastan.
 *
 * (c) Nuno Maduro <enunomaduro@gmail.com>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace NunoMaduro\Larastan\Properties;

use PHPStan\Type\Type;
use PHPStan\Reflection\ClassReflection;
use PHPStan\Reflection\PropertyReflection;

class ModelRelationProperty implements PropertyReflection
{
    /**
     * @var ClassReflection
     */
    private $declaringClass;

    /**
     * @var Type
     */
    private $type;

    /**
     * Property constructor.
     *
     * @param ClassReflection $declaringClass
     * @param mixed           $type
     */
    public function __construct(ClassReflection $declaringClass, $type)
    {
        $this->declaringClass = $declaringClass;
        $this->type = $type;
    }

    public function getDeclaringClass(): ClassReflection
    {
        return $this->declaringClass;
    }

    public function isStatic(): bool
    {
        return false;
    }

    public function isPrivate(): bool
    {
        return false;
    }

    public function isPublic(): bool
    {
        return true;
    }

    public function getType(): Type
    {
        return $this->type;
    }

    public function isReadable(): bool
    {
        return true;
    }

    public function isWritable(): bool
    {
        return false;
    }
}
