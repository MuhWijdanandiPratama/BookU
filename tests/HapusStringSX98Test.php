<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/helpers.php';

use PHPUnit\Framework\TestCase;

final class HapusStringSX98Test extends TestCase
{
    public function testRemovesSX98Suffix(): void
    {
        $url = 'https://images.gr-assets.com/books/12345_SX98_.jpg';
        $expected = 'https://images.gr-assets.com/books/12345jpg';
        $this->assertSame($expected, hapusStringSX98($url));
    }

    public function testReturnsUrlUnchangedWhenNoSX98(): void
    {
        $url = 'https://images.gr-assets.com/books/12345.jpg';
        $this->assertSame($url, hapusStringSX98($url));
    }

    public function testReturnsUrlUnchangedForPng(): void
    {
        $url = 'https://example.com/image.png';
        $this->assertSame($url, hapusStringSX98($url));
    }

    public function testHandlesEmptyString(): void
    {
        $this->assertSame('', hapusStringSX98(''));
    }

    public function testHandlesMultipleSX98Occurrences(): void
    {
        // preg_replace replaces all occurrences
        $url = 'https://example.com/a_SX98_.jpgb_SX98_.jpg';
        $result = hapusStringSX98($url);
        $this->assertStringNotContainsString('_SX98_', $result);
    }

    public function testOnlySX98InJpgContext(): void
    {
        // _SX98_ without .jpg should NOT be removed
        $url = 'https://example.com/image_SX98_.png';
        $this->assertSame($url, hapusStringSX98($url));
    }
}
