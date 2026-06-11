<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/helpers.php';

use PHPUnit\Framework\TestCase;

final class IsDmcaBlockedTest extends TestCase
{
    private array $blocklist;

    protected function setUp(): void
    {
        // Subset of the real blocklist from dmcaRemover.php
        $this->blocklist = [
            'https', 'http', 'www.', '.com', '.org', '.net',
            'pdf', 'mp3', 'mp4',
            'porn', 'boobs',
            'B08G2XG7YH', 'B08G2RLYFT', '1600250300', '1451113412',
        ];
    }

    public function testBlocksHttpUrl(): void
    {
        $this->assertTrue(isDmcaBlocked('https://example.com', $this->blocklist));
    }

    public function testBlocksPdfExtension(): void
    {
        $this->assertTrue(isDmcaBlocked('mybook.pdf', $this->blocklist));
    }

    public function testBlocksSpecificAsin(): void
    {
        $this->assertTrue(isDmcaBlocked('B08G2XG7YH', $this->blocklist));
    }

    public function testBlocksOffensiveTerm(): void
    {
        $this->assertTrue(isDmcaBlocked('porn', $this->blocklist));
    }

    public function testAllowsNormalBookTitle(): void
    {
        $this->assertFalse(isDmcaBlocked('The Art of War', $this->blocklist));
    }

    public function testAllowsNumericIsbn(): void
    {
        $this->assertFalse(isDmcaBlocked('9780140449136', $this->blocklist));
    }

    public function testCaseInsensitiveBlocking(): void
    {
        $this->assertTrue(isDmcaBlocked('PDF', $this->blocklist));
        $this->assertTrue(isDmcaBlocked('Pdf', $this->blocklist));
    }

    public function testEmptyInputNotBlocked(): void
    {
        $this->assertFalse(isDmcaBlocked('', $this->blocklist));
    }

    public function testEmptyBlocklistAllowsEverything(): void
    {
        $this->assertFalse(isDmcaBlocked('https://example.com', []));
    }

    public function testBlocksSpecificIsbn(): void
    {
        $this->assertTrue(isDmcaBlocked('1451113412', $this->blocklist));
    }

    public function testPartialMatchBlocks(): void
    {
        // 'pdf' appears inside 'pdfbook'
        $this->assertTrue(isDmcaBlocked('pdfbook', $this->blocklist));
    }
}
