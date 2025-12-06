<?php
namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email',
            'subject'=>'nullable|string|max:255',
            'message'=>'required|string',
        ]);

        $contact = Contact::create($data);

        // Simple mail: configure .env MAIL_* first
        Mail::send([], [], function($message) use ($data) {
            $message->to(config('mail.from.address'))
                    ->subject('Portfolio contact: ' . ($data['subject'] ?? $data['name']))
                    ->setBody("From: {$data['name']} ({$data['email']})\n\n".$data['message']);
        });

        return back()->with('success','Message sent successfully.');
    }
}
