<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class SubmissionTask extends Controller
{
    /**
     * Method downloadSubmissionTask
     *
     * @return mixed
     */
    function downloadSubmissionTask($id): mixed
    {
        $response = Http::withToken(session('hummaclass-token'))->get(config('app.api_url') . '/api/submission-tasks/download/' . $id);
        // if ($response->successful()) {
            $fileUri = $response->json()['data'];
            return response()->download($fileUri);
        // } else {
        //     return back()->with('error', $response->json()['meta']['message']);
        // }
    }
}
