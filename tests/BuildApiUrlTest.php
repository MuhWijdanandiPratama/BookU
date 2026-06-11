<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/helpers.php';

use PHPUnit\Framework\TestCase;

final class BuildApiUrlTest extends TestCase
{
    private string $apiKey = 'testKey123';

    // --- buildBookApiUrl ---

    public function testBookApiUrlStructure(): void
    {
        $url = buildBookApiUrl('1524798649', $this->apiKey);
        $this->assertSame(
            'https://www.goodreads.com/book/isbn/1524798649?key=testKey123',
            $url
        );
    }

    public function testBookApiUrlWithAlphanumericAsin(): void
    {
        $url = buildBookApiUrl('B0BPNB19CL', $this->apiKey);
        $this->assertStringContainsString('B0BPNB19CL', $url);
    }

    public function testBookApiUrlEmptyAsin(): void
    {
        $url = buildBookApiUrl('', $this->apiKey);
        $this->assertSame(
            'https://www.goodreads.com/book/isbn/?key=testKey123',
            $url
        );
    }

    // --- buildSearchApiUrl ---

    public function testSearchApiUrlStructure(): void
    {
        $url = buildSearchApiUrl('J.K. Rowling', $this->apiKey);
        $this->assertSame(
            'https://www.goodreads.com/search?q=J.K.+Rowling&key=testKey123',
            $url
        );
    }

    public function testSearchApiUrlEmptyQuery(): void
    {
        $url = buildSearchApiUrl('', $this->apiKey);
        $this->assertSame(
            'https://www.goodreads.com/search?q=&key=testKey123',
            $url
        );
    }

    public function testSearchApiUrlEncodesSpecialChars(): void
    {
        $url = buildSearchApiUrl('Tom & Jerry', $this->apiKey);
        $this->assertSame(
            'https://www.goodreads.com/search?q=Tom+%26+Jerry&key=testKey123',
            $url
        );
    }

    public function testSearchApiUrlContainsKeyParam(): void
    {
        $url = buildSearchApiUrl('test', $this->apiKey);
        $this->assertStringContainsString('key=testKey123', $url);
    }

    public function testSearchApiUrlContainsQueryParam(): void
    {
        $url = buildSearchApiUrl('Stephen King', $this->apiKey);
        $this->assertStringContainsString('q=Stephen+King', $url);
    }
}
