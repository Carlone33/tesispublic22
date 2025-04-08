<?php

namespace App\Services;

use App\Models\GuideSequence;
use Illuminate\Support\Str;

class GuideNumberService
{
    public function generate(
        string $type = 'default',
        string $prefix = 'G',
        int $digits = 4,
        ?int $year = null
    ): string {
        $year = $year ?? now()->year;

        $sequence = GuideSequence::firstOrCreate(
            ['type' => $type, 'year' => $year],
            ['last_number' => 0]
        );

        $sequence->increment('last_number');

        return Str::upper($prefix)
            . $year
            . str_pad($sequence->last_number, $digits, '0', STR_PAD_LEFT);
    }
}
