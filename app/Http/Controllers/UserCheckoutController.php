<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class UserCheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($slug)
    {
        $token = session('hummaclass-token');
        $response = Http::withToken($token)
            ->maxRedirects(5)
            ->post(config('app.api_url') . '/api/user-courses-check', ['course_slug' => $slug]);

        if ($response->json()['data']['user_course']) {
            return redirect()->route('courses.course-lesson.index', $response->json()['data']['user_course']['sub_module_slug']);
        } else {
            // dd($response->json());
            $course = $response->json()['data']['course'];
            $courseId = $response->json()['data']['course']['id'];
            $subModuleSlug = $response->json()['data']['course']['modules'][0]['sub_modules'][0]['slug'];
            if (!$course['is_premium']) {
                $response = Http::withToken($token)
                    ->maxRedirects(5)
                    ->get(config('app.api_url') . "/api/transaction-create/course/$courseId");
                if ($response->json()['data']) {
                    return redirect()->route('courses.course-lesson.index', $subModuleSlug);
                }
            } else {
                return view('user.pages.checkout.index', compact('slug'));
            }
        }

        // if ($response->json()['data']['user_course']) {
        //     return redirect()->route('courses.course-lesson.index', $response->json()['data']['user_course']['sub_module_slug']);
        // } else {
        //     $response = Http::withToken($token)
        //     ->maxRedirects(5)
        //         ->get(config('app.api_url') . "/api/courses/$slug");
        //     $course = $response->json()['data'];
        //     $courseId = $response->json()['data']['id'];
        //     $subModuleSlug = $response->json()['data']['modules'][0]['sub_modules'][0]['slug'];
        //     if (!$course['is_premium']) {
        //         $response = Http::withToken($token)
        //             ->maxRedirects(5)
        //             ->get(config('app.api_url') . "/api/transaction-create/course/$courseId");
        //         if ($response->json()['data']) {
        //             return redirect()->route('courses.course-lesson.index', $subModuleSlug);
        //         }
        //     } else {
        //         return view('user.pages.checkout.index', compact('slug'));
        //     }
        // }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $reference)
    {
        // return view('user.pages.checkout.finish', compact('method', 'id'));
        return view('user.pages.checkout.detail', compact('reference'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function downloadInvoice(string $ref)
    {
        $response = Http::withToken(session('hummaclass-token'))
            ->get(config('app.api_url') . "/api/transaction/" . $ref . "/detail");
        $data = (object) $response->json()['data'];
        // $pdf = new PDF();
        $pdf = PDF::loadView('pdf.invoice', compact('data', 'ref'));
        // return $pdf->stream($ref . '.pdf', ['Attachment' => false]);
        return $pdf->download($ref . '.pdf');
    }
}
