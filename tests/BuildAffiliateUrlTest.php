<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/helpers.php';

use PHPUnit\Framework\TestCase;

final class BuildAffiliateUrlTest extends TestCase
{
    public function testBuildsUrlWithTitle(): void
    {
        $result = buildAffiliateUrl('The-Great-Gatsby');
        $this->assertSame(
            'https://www.5mno3.com/scripts/un981c6l?a_aid=9d66035e&a_bid=e86303d4The-Great-Gatsby',
            $result
        );
    }

    public function testEmptyTitle(): void
    {
        $result = buildAffiliateUrl('');
        $this->assertSame(
            'https://www.5mno3.com/scripts/un981c6l?a_aid=9d66035e&a_bid=e86303d4',
            $result
        );
    }

    public function testTitleWithSpaces(): void
    {
        $result = buildAffiliateUrl('Harry Potter');
        $this->assertStringContainsString('Harry Potter', $result);
    }

    public function testTitleWithSpecialCharacters(): void
    {
        $result = buildAffiliateUrl("Book's & More");
        $this->assertStringContainsString("Book's & More", $result);
    }

    public function testUrlStartsWithBaseUrl(): void
    {
        $result = buildAffiliateUrl('Anything');
        $this->assertStringStartsWith('https://www.5mno3.com/scripts/', $result);
    }
}
