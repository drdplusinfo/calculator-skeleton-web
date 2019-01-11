<?php
declare(strict_types=1);

namespace DrdPlus\Tests\CalculatorSkeletonWeb;

class WebTestsConfigurationTest extends AbstractContentTest
{
    /**
     * @test
     */
    public function Test_of_table_of_contents_is_disabled(): void
    {
        $testsConfiguration = $this->createTestsConfiguration();
        self::assertFalse($testsConfiguration->hasTableOfContents(), 'Test of table of contents should be disabled');
    }

    protected function createTestsConfiguration(): WebTestsConfiguration
    {
        $sutClass = static::getSutClass();

        return new $sutClass();
    }

    protected static function getSutClass(string $sutTestClass = null, string $regexp = '~(.+)Test$~'): string
    {
        return parent::getSutClass($sutTestClass, $regexp);
    }

    /**
     * @test
     */
    public function Test_of_tables_is_disabled(): void
    {
        $testsConfiguration = $this->createTestsConfiguration();
        self::assertFalse($testsConfiguration->hasTables(), 'Test of tables should be disabled');
    }

    /**
     * @test
     */
    public function Test_of_expected_table_ids_is_disabled(): void
    {
        $testsConfiguration = $this->createTestsConfiguration();
        self::assertSame([], $testsConfiguration->getSomeExpectedTableIds());
    }
}