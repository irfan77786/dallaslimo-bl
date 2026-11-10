<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\CorporateSupportMail;
use App\Mail\QuoteMail;
use App\Models\Contact;
use App\Models\CorporateSupport;
use App\Models\Quote;

class WebsiteController extends Controller
{
    public function aboutUs(Request $request)
    {
        $this->clearBookingSession($request);

        $seo = [
            'title' => 'About Us | Dallas Limo And Black Cars Service',
            'description' => 'Learn about Dallas Limo And Black Cars Service, Dallas–Fort Worth’s premier luxury black car & limousine service. Professional chauffeurs, premium fleet, DFW & Love Field coverage.',
            'keywords' => 'Black Car Service in Dallas, Executive Chauffeur Service DFW, Luxury Airport Transfer Love Field, DFW Car Service',
            'og_title' => 'About Us | Dallas Limo And Black Cars Service',
            'og_description' => 'Learn about Dallas Limo And Black Cars Service, Dallas–Fort Worth’s premier luxury black car & limousine service. Professional chauffeurs, premium fleet, DFW & Love Field coverage.',
            'og_image' => brand_logo_asset()
        ];

        return view('website.about', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => config('brand.logo'),
            'seo' => $seo
        ]);
    }

    public function fifaWorldCup2026CarServiceDallas(Request $request)
    {
        $this->clearBookingSession($request);

        $seo = [
            'title' => 'FIFA 2026 Car Service Dallas | Luxury Rides to AT&T Stadium',
            'description' => 'Experience premium car service for FIFA World Cup 2026 in Dallas. Luxury sedans, SUVs, and buses for seamless transfers to AT&T Stadium. Book your ride today!',
            'keywords' => 'FIFA World Cup 2026 Dallas car service, AT&T Stadium transportation, luxury car service Dallas',
            'og_title' => 'FIFA 2026 Car Service Dallas | Luxury Rides to AT&T Stadium',
            'og_description' => 'Experience premium car service for FIFA World Cup 2026 in Dallas. Luxury sedans, SUVs, and buses for seamless transfers to AT&T Stadium. Book your ride today!',
            'og_image' => asset('img/black-car-service-fifa-world-cup-banner.webp')
        ];

        return view('website.fifa-world-cup-2026-car-service-dallas', [
            'backgroundImage' => '/img/black-car-service-fifa-world-cup-banner.webp',
            'mobileImage' => config('brand.logo'),
            'seo' => $seo
        ]);
    }

    public function ourFleet(Request $request)
    {
        $this->clearBookingSession($request);

        $seo = [
            'title' => 'Dallas Black Car Service Fleet – Luxury Sedans, SUVs, Sprinter Vans',
            'description' => 'Discover our Dallas black car service fleet – luxury sedans, SUVs & Sprinter vans for business trips, airport transfers & group events.',
            'keywords' => 'Dallas black car service, luxury car service Dallas, airport car service Dallas',
            'og_title' => 'Dallas Black Car Service Fleet – Luxury Sedans, SUVs, Sprinter Vans',
            'og_description' => 'Discover our Dallas black car service fleet – luxury sedans, SUVs & Sprinter vans for business trips, airport transfers & group events.',
            'og_image' => brand_logo_asset()
        ];

        return view('website.our-fleet', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => config('brand.logo'),
            'seo' => $seo
        ]);
    }

    public function getAQuote(Request $request)
    {
        $this->clearBookingSession($request);

        $seo = [
            'title' => 'Get a Quote – Dallas Black Car and Limousine Service',
            'description' => 'Instantly receive a transparent quote for your luxury ride in Dallas. Choose from sedans, SUVs, or Sprinter vans for airport transfers, corporate events, and more.',
            'keywords' => 'Dallas black car service quote, luxury car service Dallas, airport transfer quote Dallas',
            'og_title' => 'Get a Quote – Dallas Black Car and Limousine Service',
            'og_description' => 'Instantly receive a transparent quote for your luxury ride in Dallas. Choose from sedans, SUVs, or Sprinter vans for airport transfers, corporate events, and more.',
            'og_image' => brand_logo_asset()
        ];

        return view('website.get-a-quote', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => config('brand.logo'),
            'seo' => $seo
        ]);
    }

    public function contactUs(Request $request)
    {
        $this->clearBookingSession($request);

        $seo = [
            'title' => 'Contact Dallas Black Car Service – Luxury Airport & Corporate Transportation',
            'description' => 'Reach Dallas Black Car Service for reliable black car rides, airport transfers, corporate travel, and group transportation. Call, email, or book online today!',
            'keywords' => 'Dallas black car service contact, luxury car service Dallas, airport car service Dallas',
            'og_title' => 'Contact Dallas Black Car Service – Luxury Airport & Corporate Transportation',
            'og_description' => 'Reach Dallas Black Car Service for reliable black car rides, airport transfers, corporate travel, and group transportation. Call, email, or book online today!',
            'og_image' => brand_logo_asset()
        ];

        return view('website.contact-us', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => config('brand.logo'),
            'seo' => $seo
        ]);
    }

    public function faqs(Request $request)
    {
        $this->clearBookingSession($request);

        $seo = [
            'title' => 'FAQs – Dallas Black Car Service',
            'description' => 'Frequently asked questions about Dallas black car service, airport transfers, and chauffeur transportation.',
            'keywords' => 'Dallas black car service FAQs, airport car service Dallas, chauffeur service Dallas',
            'og_title' => 'FAQs – Dallas Black Car Service',
            'og_description' => 'Frequently asked questions about Dallas black car service, airport transfers, and chauffeur transportation.',
            'og_image' => brand_logo_asset()
        ];

        return view('website.faqs', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => config('brand.logo'),
            'seo' => $seo
        ]);
    }

    public function contactUsPost(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|min:10',
            'sms_consent' => 'required|accepted',
        ]);

        try {
            $contactData = [
                'full_name' => $validated['full_name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'message' => $validated['message'],
                'sms_consent' => $validated['sms_consent'] ?? false,
            ];

            Contact::create($contactData);
        } catch (\Exception $e) {
            Log::error('Contact form save failed', [
                'error' => $e->getMessage(),
                'email' => $validated['email'] ?? null,
            ]);

            return redirect()->back()->withInput()->with('error', 'We could not send your message. Please try again or call us at +1 214-919-5377.');
        }

        $this->sendContactEmails($contactData);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function CancellationPolicy(Request $request)
    {
        $this->clearBookingSession($request);

        $seo = [
            'title' => 'Cancellation Policy – Dallas Black Car Service',
            'description' => 'Learn about our cancellation policy for Dallas black car service. Book your ride today and experience our transparent and flexible cancellation process.',
            'keywords' => 'Dallas black car service cancellation policy, luxury car service cancellation policy Dallas, airport car service cancellation policy Dallas',
            'og_title' => 'Cancellation Policy – Dallas Black Car Service',
            'og_description' => 'Learn about our cancellation policy for Dallas black car service. Book your ride today and experience our transparent and flexible cancellation process.',
            'og_image' => brand_logo_asset()
        ];

        return view('website.cancellation-policy', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => config('brand.logo'),
            'seo' => $seo
        ]);
    }

    public function TermsAndConditions(Request $request)
    {
        $this->clearBookingSession($request);

        $seo = [
            'title' => 'Terms and Conditions – Dallas Black Car Service',
            'description' => 'Review our terms and conditions for Dallas black car service. Understand your rights and obligations when using our services.',
            'keywords' => 'Dallas black car service terms and conditions, luxury car service terms and conditions Dallas, airport car service terms and conditions Dallas',
            'og_title' => 'Terms and Conditions – Dallas Black Car Service',
            'og_description' => 'Review our terms and conditions for Dallas black car service. Understand your rights and obligations when using our services.',
            'og_image' => brand_logo_asset()
        ];

        return view('website.terms-and-conditions', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => config('brand.logo'),
            'seo' => $seo
        ]);
    }

    public function PrivacyPolicy(Request $request)
    {
        $this->clearBookingSession($request);

        $seo = [
            'title' => 'Privacy Policy – Dallas Black Car Service',
            'description' => 'Review our privacy policy for Dallas black car service. Understand how we collect, use, and safeguard your personal information.',
            'keywords' => 'Dallas black car service privacy policy, luxury car service privacy policy Dallas, airport car service privacy policy Dallas',
            'og_title' => 'Privacy Policy – Dallas Black Car Service',
            'og_description' => 'Review our privacy policy for Dallas black car service. Understand how we collect, use, and safeguard your personal information.',
            'og_image' => brand_logo_asset()
        ];

        return view('website.privacy-policy', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => config('brand.logo'),
            'seo' => $seo
        ]);
    }

    public function corporateSupportPost(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|min:10',
        ]);

        try {
            $corporateData = [
                'full_name' => $validated['full_name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'message' => $validated['message'],
            ];

            CorporateSupport::create($corporateData);

            Mail::to($validated['email'])->send(new CorporateSupportMail($corporateData, false));

            foreach ($this->adminNotificationEmails() as $adminEmail) {
                Mail::to($adminEmail)->send(new CorporateSupportMail($corporateData, true));
            }

            return redirect()->back()->with('success', 'Your corporate support request has been sent successfully!');
        } catch (\Exception $e) {
            Log::error('Corporate support submission failed', [
                'error' => $e->getMessage(),
                'email' => $validated['email'] ?? null,
            ]);

            return redirect()->back()->withInput()->with('error', 'We could not send your request. Please try again or call us at +1 214-919-5377.');
        }
    }

    public function getAQuotePost(Request $request)
    {
        $validated = $request->validate([
            'vehicle_type' => 'required|string|max:255',
            'trip_type' => 'required|string|max:255',
            'number_of_passengers' => 'required|string|max:50',
            'trip_date' => 'required|date',
            'trip_time' => ['required', 'regex:/^\d{2}:\d{2}(:\d{2})?$/'],
            'pickup_address' => 'required|string|max:255',
            'dropoff_address' => 'required|string|max:255',
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'nullable|string|min:5',
        ]);

        $quoteData = [
            'vehicle_type' => $validated['vehicle_type'],
            'trip_type' => $validated['trip_type'],
            'number_of_passengers' => $validated['number_of_passengers'],
            'trip_date' => $validated['trip_date'],
            'trip_time' => substr($validated['trip_time'], 0, 5),
            'pickup_address' => $validated['pickup_address'],
            'dropoff_address' => $validated['dropoff_address'],
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'message' => $validated['message'] ?? null,
        ];

        try {
            $quote = Quote::create($quoteData);
            $quoteData['quote_number'] = $quote->quote_number;
        } catch (\Exception $e) {
            Log::error('Quote form save failed', [
                'error' => $e->getMessage(),
                'email' => $validated['email'] ?? null,
            ]);

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'We could not submit your quote request. Please try again or call us at +1 214-919-5377.');
        }

        $this->sendQuoteEmails($quoteData);

        return redirect()
            ->route('get_a_quote_thank_you')
            ->with('success', 'Your quote request has been sent successfully! We will send you a quote shortly.');
    }

    public function getAQuoteThankYou(Request $request)
    {
        $seo = [
            'title' => 'Thank You | Quote Request Received',
            'description' => 'Your quote request has been received. Dallas Limos and Black Car Service will respond shortly.',
            'keywords' => 'Dallas black car service quote thank you',
            'og_title' => 'Thank You | Quote Request Received',
            'og_description' => 'Your quote request has been received. Dallas Limos and Black Car Service will respond shortly.',
            'og_image' => brand_logo_asset(),
        ];

        return view('website.quote-thank-you', [
            'seo' => $seo,
        ]);
    }

    /**
     * Clear booking session data without wiping flash messages used by SweetAlert.
     */
    private function clearBookingSession(Request $request): void
    {
        if ($request->edit) {
            session(['edit' => 1]);
            return;
        }

        if (session()->has('success') || session()->has('error') || session()->has('errors')) {
            return;
        }

        session()->flush();
        $request->session()->regenerateToken();
    }

    /**
     * @param  array<string, mixed>  $quoteData
     */
    private function sendQuoteEmails(array $quoteData): void
    {
        try {
            Mail::to($quoteData['email'])->send(new QuoteMail($quoteData, false));

            foreach ($this->adminNotificationEmails() as $adminEmail) {
                Mail::to($adminEmail)->send(new QuoteMail($quoteData, true));
            }
        } catch (\Throwable $e) {
            Log::error('Quote email failed after save', [
                'error' => $e->getMessage(),
                'email' => $quoteData['email'] ?? null,
            ]);
        }
    }

    /**
     * @param  array<string, mixed>  $contactData
     */
    private function sendContactEmails(array $contactData): void
    {
        try {
            Mail::to($contactData['email'])->send(new ContactMail($contactData, false));

            foreach ($this->adminNotificationEmails() as $adminEmail) {
                Mail::to($adminEmail)->send(new ContactMail($contactData, true));
            }
        } catch (\Throwable $e) {
            Log::error('Contact email failed after save', [
                'error' => $e->getMessage(),
                'email' => $contactData['email'] ?? null,
            ]);
        }
    }

    /**
     * @return array<int, string>
     */
    private function adminNotificationEmails(): array
    {
        return array_values(array_unique(array_filter([
            config('mail.admin_email'),
            config('mail.secondary_email'),
            config('mail.from.address'),
        ])));
    }
}
