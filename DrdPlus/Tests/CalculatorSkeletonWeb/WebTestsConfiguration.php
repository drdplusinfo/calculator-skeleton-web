<?php
declare(strict_types=1);

namespace DrdPlus\Tests\CalculatorSkeletonWeb;

class WebTestsConfiguration extends \DrdPlus\Tests\RulesSkeletonWeb\WebTestsConfiguration
{
    /**
     * @throws \DrdPlus\Tests\RulesSkeletonWeb\Exceptions\InvalidLocalUrl
     * @throws \DrdPlus\Tests\RulesSkeletonWeb\Exceptions\InvalidPublicUrl
     * @throws \DrdPlus\Tests\RulesSkeletonWeb\Exceptions\PublicUrlShouldUseHttps
     */
    public function __construct()
    {
        parent::__construct([
            self::HAS_TABLES => false,
            self::HAS_TABLE_OF_CONTENTS => false,
        ]);
    }
}