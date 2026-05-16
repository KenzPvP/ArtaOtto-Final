<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function handleContactForm(Request $request)
    {
        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'whatsapp'     => 'required|string|max:20',
            'email'        => 'required|email|max:255',
            'clinic'       => 'nullable|string|max:255',
            'profession'   => 'required|string|max:255',
            'inquiry_type' => 'required|string|max:255',
            'message'      => 'required|string|max:2000',
        ]);

        try {
            $adminEmail = 'admin@artaotto.com';

            Mail::to($adminEmail)->send(
                new ContactMessageMail(
                    $validated['name'],
                    $validated['email'],
                    $validated['whatsapp'],
                    $validated['clinic'] ?? '-',
                    $validated['profession'],
                    $validated['inquiry_type'],
                    $validated['message']
                )
            );

            return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim! Kami akan segera menghubungi Anda.');

        } catch (\Exception $e) {
            Log::error('Contact form email failed: ' . $e->getMessage());

            return redirect()->back()
                ->with('error', 'Maaf, terjadi kesalahan saat mengirim pesan. Silakan coba lagi nanti.')
                ->withInput();
        }
    }
}