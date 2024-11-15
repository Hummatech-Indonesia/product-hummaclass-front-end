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
        
        if (isset($response->json()['data']['user_course'])) {
            return redirect()->route('courses.course-lesson.index', $response->json()['data']['user_course']['sub_module_slug']);
        } else {
            $course = $response->json()['data']['course'];
            if (session('user')['roles'][0]['name'] == 'admin') {
                return redirect()->route('courses.course-lesson.index', $course['modules'][0]['sub_modules'][0]['slug']);
            }
            $courseId = $response->json()['data']['course']['id'];
            if (!$course['is_premium']) {
                $response = Http::withToken($token)
                    ->maxRedirects(5)
                    ->get(config('app.api_url') . "/api/transaction-create/course/$courseId");
                    // dd($response, $response->json());
                if (isset($response->json()['data'])) {
                    // $subModuleSlug = $response->json()['data']['course']['modules'][0]['sub_modules'][0]['slug'];
                    $testId = $response->json()['data']['test_id'];
                    return redirect()->route('pre.test.index', $testId);
                }
            } else {
                return view('user.pages.checkout.index', compact('slug'));
            }
        }
    }

    public function event($slug)
    {
        $token = session('hummaclass-token');
        $response = Http::withToken($token)
            ->maxRedirects(5)
            ->post(config('app.api_url') . '/api/user-events-check', ['event_slug' => $slug]);

        // dd($response->json());
        if ($response->json()['data']['user_event']) {
            return redirect()->route('events.show', $slug);
        } else {
            $event = $response->json()['data']['event'];
            $eventId = $response->json()['data']['event']['id'];
            $subModuleSlug = $response->json()['data']['event']['slug'];
            // dd($event, $eventId, $subModuleSlug);
            if ($event['price'] == 0) {
                $response = Http::withToken($token)
                    ->maxRedirects(5)
                    ->get(config('app.api_url') . "/api/transaction-create/event/$eventId");
                if ($response->json()['data']) {
                    return redirect()->route('events.show', $slug);
                }
            } else {
                return view('user.pages.checkout.index', compact('slug'));
            }
        }
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
