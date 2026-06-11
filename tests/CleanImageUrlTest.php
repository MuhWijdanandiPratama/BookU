<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/helpers.php';

use PHPUnit\Framework\TestCase;

final class CleanImageUrlTest extends TestCase
{
    public function testRemovesDynamicResizeSuffix(): void
    {
        $url = 'https://images.gr-assets.com/books/1234._SX98_.jpg';
        $expected = 'https://images.gr-assets.com/books/1234.jpg';
        $this->assertSame($expected, cleanImageUrl($url));
    }

    public function testRemovesLongerSuffix(): void
    {
        $url = 'https://images.gr-assets.com/books/photo._SY475_.jpg';
        $expected = 'https://images.gr-assets.com/books/photo.jpg';
        $this->assertSame($expected, cleanImageUrl($url));
    }

    public function testNoSuffixReturnsUnchanged(): void
    {
        $url = 'https://images.gr-assets.com/books/photo.jpg';
        $this->assertSame($url, cleanImageUrl($url));
    }

    public function testHandlesEmptyString(): void
    {
        $this->assertSame('', cleanImageUrl(''));
    }

    public function testCaseInsensitive(): void
    {
        $url = 'https://example.com/img._SX100_.JPG';
        $result = cleanImageUrl($url);
        $this->assertStringNotContainsString('._', $result);
    }

    public function testNoDoubleDotInResult(): void
    {
        $url = 'https://example.com/photo._RESIZE_.png';
        $result = cleanImageUrl($url);
        $this->assertStringNotContainsString('._', $result);
    }
}
