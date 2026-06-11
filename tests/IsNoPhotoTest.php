<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/helpers.php';

use PHPUnit\Framework\TestCase;

final class IsNoPhotoTest extends TestCase
{
    public function testDetectsNoPhoto(): void
    {
        $this->assertTrue(isNoPhoto('https://images.gr-assets.com/nophoto/book/111.jpg'));
    }

    public function testDetectsNoPhotoSubstring(): void
    {
        $this->assertTrue(isNoPhoto('https://example.com/images/nophoto_placeholder.png'));
    }

    public function testReturnsFalseForNormalUrl(): void
    {
        $this->assertFalse(isNoPhoto('https://images.gr-assets.com/books/12345.jpg'));
    }

    public function testReturnsFalseForEmptyString(): void
    {
        $this->assertFalse(isNoPhoto(''));
    }

    public function testCaseSensitive(): void
    {
        // 'nophoto' check in the original code is case-sensitive
        $this->assertFalse(isNoPhoto('https://example.com/NoPhoto.jpg'));
    }
}
