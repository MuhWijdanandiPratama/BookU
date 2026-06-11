<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/helpers.php';

use PHPUnit\Framework\TestCase;

final class FormatTanggalTest extends TestCase
{
    public function testStandardDate(): void
    {
        $this->assertSame('January 15, 2023', formatTanggal('2023-01-15'));
    }

    public function testLeapYearDate(): void
    {
        $this->assertSame('February 29, 2024', formatTanggal('2024-02-29'));
    }

    public function testEndOfYear(): void
    {
        $this->assertSame('December 31, 2022', formatTanggal('2022-12-31'));
    }

    public function testFirstDayOfYear(): void
    {
        $this->assertSame('January 01, 2000', formatTanggal('2000-01-01'));
    }

    public function testAlternativeDateFormat(): void
    {
        // strtotime also accepts 'd-M-Y'
        $this->assertSame('March 05, 2021', formatTanggal('05-Mar-2021'));
    }

    public function testDateWithSlashes(): void
    {
        // m/d/Y format
        $this->assertSame('July 04, 2020', formatTanggal('07/04/2020'));
    }
}
