{{-- FIFA World Cup 2026 event notice (payment Terms modal, emails) --}}
@php
    $fifaNoticeFooter = $fifaNoticeFooter ?? 'Complete FIFA 2026 (Dallas–Fort Worth) event terms are included in your attached booking PDF.';
@endphp
<div class="fifa-event-notice"
     role="note"
     aria-label="FIFA World Cup 2026 event notice"
     style="display:flex;gap:14px;align-items:flex-start;margin:0 0 1.25rem;padding:16px 18px;background-color:#faf6ef;border:1px solid #9a7738;border-radius:12px;">
    <div class="fifa-event-notice__icon" aria-hidden="true" style="flex-shrink:0;line-height:0;margin-top:2px;">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="11" fill="#9a7738"/>
            <path d="M12 7.25a1.1 1.1 0 1 0 0 2.2 1.1 1.1 0 0 0 0-2.2Zm-1 4.25a1 1 0 0 0 1 1v4.5a1 1 0 1 0 2 0v-4.5a1 1 0 0 0-1-1h-2Z" fill="#fff"/>
        </svg>
    </div>
    <div class="fifa-event-notice__content" style="flex:1;min-width:0;">
        <p class="fifa-event-notice__title" style="margin:0 0 10px;font-size:0.95rem;font-weight:700;line-height:1.4;color:#2c2418;">
            Important Event Notice – FIFA World Cup 2026 (June 13 – July 15, 2026):
        </p>
        <p class="fifa-event-notice__body" style="margin:0 0 10px;font-size:0.875rem;line-height:1.55;color:#3d3428;">
            <em style="font-style:italic;">If this booking falls within the FIFA World Cup 2026 event dates, all rates, fees, and minimums are subject to change without notice based on event demand, availability, and operational conditions. You acknowledge and agree that these rates are not guaranteed until final payment is made in accordance with our policy. By confirming this reservation, you expressly authorize any rate adjustments and agree that such changes are not a basis for refund, credit, cancellation, or chargeback.</em>
        </p>
        <p class="fifa-event-notice__footer" style="margin:0;font-size:0.8125rem;line-height:1.45;color:#4a4035;">{{ $fifaNoticeFooter }}</p>
    </div>
</div>
