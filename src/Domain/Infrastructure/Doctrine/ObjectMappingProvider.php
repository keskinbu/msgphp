<?php

declare(strict_types=1);

namespace MsgPhp\Domain\Infrastructure\Doctrine;

/**
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
interface ObjectMappingProvider
{
    public const TYPE_EMBEDDED = 'embedded';
    public const TYPE_MANY_TO_MANY = 'manyToMany';
    public const TYPE_MANY_TO_ONE = 'manyToOne';
    public const TYPE_ONE_TO_MANY = 'oneToMany';
    public const TYPE_ONE_TO_ONE = 'oneToOne';

    /**
     * @return iterable<class-string, array>
     */
    public static function provideObjectMappings(MappingConfig $config): iterable;
}
