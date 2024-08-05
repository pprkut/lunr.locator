<?php

/**
 * PHPStan Method reflection
 *
 * SPDX-FileCopyrightText: Copyright 2022 Move Agency Group B.V., Zwolle, The Netherlands
 * SPDX-License-Identifier: MIT
 *
 * @see https://phpstan.org/developing-extensions/class-reflection-extensions
 */

namespace Lunr\Core\PHPStan;

use PHPStan\Reflection\ClassMemberReflection;
use PHPStan\Reflection\ClassReflection;
use PHPStan\Reflection\MethodReflection;
use PHPStan\Reflection\ParametersAcceptor;
use PHPStan\Reflection\TrivialParametersAcceptor;
use PHPStan\TrinaryLogic;
use PHPStan\Type\Type;

/**
 * Methodreflection for ConfigServiceLocator recipes
 */
class ConfigServiceLocatorRecipeReflection implements MethodReflection
{

    /**
     * The class that declared the method
     *
     * @var ClassReflection
     */
    private $declaringClass;

    /**
     * Name of the method
     *
     * @var string
     */
    private $name;

    /**
     * Construct a MethodReflection
     *
     * @param ClassReflection $declaringClass The class that declared the method
     * @param string          $name           Name of the method
     */
    public function __construct(ClassReflection $declaringClass, string $name)
    {
        $this->declaringClass = $declaringClass;
        $this->name           = $name;
    }

    /**
     * The class that declared the method
     * @return ClassReflection
     */
    public function getDeclaringClass(): ClassReflection
    {
        return $this->declaringClass;
    }

    /**
     * Is the method static
     * @return bool
     */
    public function isStatic(): bool
    {
        return FALSE;
    }

    /**
     * Is the method private
     * @return bool
     */
    public function isPrivate(): bool
    {
        return FALSE;
    }

    /**
     * Is the method public
     * @return bool
     */
    public function isPublic(): bool
    {
        return TRUE;
    }

    /**
     * Get the name of the method
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the method prototype
     * @return ClassMemberReflection
     */
    public function getPrototype(): ClassMemberReflection
    {
        return $this;
    }

    /**
     * Get the variants of the parameters to accept
     * @return ParametersAcceptor[]
     */
    public function getVariants(): array
    {
        return [
            new TrivialParametersAcceptor(),
        ];
    }

    /**
     * Get the doc comment for the method
     * @return string|null
     */
    public function getDocComment(): ?string
    {
        return NULL;
    }

    /**
     * Is the method deprecated
     * @return TrinaryLogic
     */
    public function isDeprecated(): TrinaryLogic
    {
        return TrinaryLogic::createNo();
    }

    /**
     * Get the description why the method is deprecated
     * @return string|null
     */
    public function getDeprecatedDescription(): ?string
    {
        return NULL;
    }

    /**
     * Is the method final
     * @return TrinaryLogic
     */
    public function isFinal(): TrinaryLogic
    {
        return TrinaryLogic::createNo();
    }

    /**
     * Is the method internal
     * @return TrinaryLogic
     */
    public function isInternal(): TrinaryLogic
    {
        return TrinaryLogic::createNo();
    }

    /**
     * Get the type of exceptions to throw
     * @return Type|null
     */
    public function getThrowType(): ?Type
    {
        return NULL;
    }

    /**
     * Does the method have side effects
     * @return TrinaryLogic
     */
    public function hasSideEffects(): TrinaryLogic
    {
        return TrinaryLogic::createNo();
    }

}

?>
