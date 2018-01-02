<?php declare(strict_types=1);

namespace Shopware\Api\Country\Event\Country;

use Shopware\Api\Country\Definition\CountryDefinition;
use Shopware\Api\Entity\Write\WrittenEvent;

class CountryWrittenEvent extends WrittenEvent
{
    public const NAME = 'country.written';

    public function getName(): string
    {
        return self::NAME;
    }

    public function getDefinition(): string
    {
        return CountryDefinition::class;
    }
}