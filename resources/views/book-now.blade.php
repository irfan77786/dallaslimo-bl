<script>
    // Function to format date as "Mon, Aug 11th, 2025"
    (function() {
        // Format "Sat, Aug 30th, 2025"
        function formatDate(date) {
            if (!date) return '';
            const d = new Date(date);
            if (isNaN(d.getTime())) return '';
            const options = {
                weekday: 'short',
                month: 'short',
                day: 'numeric',
                year: 'numeric'
            };
            const formatted = d.toLocaleDateString('en-US', options);
            const day = d.getDate();
            const suffix = (day % 10 > 3 || Math.floor(day % 100 / 10) === 1) ?
                'th' :
                (['', 'st', 'nd', 'rd'][day % 10] || 'th');
            return formatted.replace(day, day + suffix);
        }

        function initDateOverlays() {
            document.querySelectorAll('.ph-wrap').forEach(function(wrap) {
                const displayInput = wrap.querySelector('.date-display');
                const dateInput = wrap.querySelector('input[type="date"]');
                if (!displayInput || !dateInput) return;

                const sync = () => {
                    if (dateInput.value && String(dateInput.value).trim() !== '') {
                        wrap.classList.add('has-value');
                        displayInput.value = formatDate(dateInput.value);
                    } else {
                        wrap.classList.remove('has-value');
                        displayInput.value = '';
                    }
                };

                // Initial paint
                sync();

                // Keep display in sync
                dateInput.addEventListener('input', sync);
                dateInput.addEventListener('change', sync);
                dateInput.addEventListener('blur', sync);
            });
        }

        document.addEventListener('DOMContentLoaded', initDateOverlays);
    })();
    // Handle date input changes
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.ph-wrap').forEach(function(wrap) {
            const displayInput = wrap.querySelector('.date-display');
            const dateInput = wrap.querySelector('input[type="date"]');
            if (!displayInput || !dateInput) return;

            // Sync placeholder and formatted date
            const sync = () => {
                if (dateInput.value && String(dateInput.value).trim() !== '') {
                    wrap.classList.add('has-value');
                    displayInput.value = formatDate(dateInput.value);
                } else {
                    wrap.classList.remove('has-value');
                    displayInput.value = '';
                }
            };

            // Run on load
            sync();

            // Trigger date picker when clicking text input
            displayInput.addEventListener('click', () => {
                dateInput.showPicker(); // Opens the native date picker
            });

            // Update display input when date changes
            dateInput.addEventListener('input', sync);
            dateInput.addEventListener('change', sync);
            dateInput.addEventListener('blur', sync);
        });
    });
    // Toggle fake placeholder visibility based on value
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.ph-wrap').forEach(function(wrap) {
            const input = wrap.querySelector('input');
            if (!input) return;
            const sync = () => {
                if (input.value && String(input.value).trim() !== '') {
                    wrap.classList.add('has-value');
                } else {
                    wrap.classList.remove('has-value');
                }
            };
            sync();
            input.addEventListener('input', sync);
            input.addEventListener('change', sync);
            input.addEventListener('blur', sync);
        });
    });

    // 2-hour advance booking restriction
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof window.enforceBookingRestrictions === 'function') {
            window.enforceBookingRestrictions('pickup-date', 'pickup-time');
            window.enforceBookingRestrictions('pickup-date-hourly', 'pickup-time-hourly');
        }
    });
</script>
