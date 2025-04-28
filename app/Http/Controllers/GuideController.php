<?php

namespace App\Http\Controllers;

use App\Services\GuideNumberService;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    protected $guideNumberService;

    public function __construct(GuideNumberService $guideNumberService)
    {
        $this->guideNumberService = $guideNumberService;
    }

    public function generate(Request $request)
    {
        $validated = $request->validate([
            'type' => 'sometimes|string|max:20',
            'prefix' => 'sometimes|string|max:5',
            'digits' => 'sometimes|integer|min:3|max:8',
            'year' => 'sometimes|integer|digits:4'
        ]);

        $guideNumber = $this->guideNumberService->generate(
            $validated['type'] ?? 'default',
            $validated['prefix'] ?? 'G',
            $validated['digits'] ?? 4,
            $validated['year'] ?? null
        );

        return response()->json([
            'guide_number' => $guideNumber,
            'message' => 'Número de guía generado con éxito'
        ]);
    }
}
