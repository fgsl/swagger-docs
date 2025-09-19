<?php

use Mock\Stub;
use OpenApi\Generator;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\CoversClass;

use function PHPUnit\Framework\assertStringContainsString;

#[CoversClass(Stub::class)]
class SwaggerTest extends TestCase
{
    public function testYAML()
    {
        $path = realpath(__DIR__ . '/../');

        $generator = new Generator();
        $openapi = $generator->generate([$path . DIRECTORY_SEPARATOR . 'src']);
        $yaml = $openapi->toYaml();
        assertStringContainsString('openapi:',$yaml);
    }
}