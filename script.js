$(document).ready(function() {
    // Simple client-side validation or effects
    $('#registrationForm').on('submit', function(e) {
        // We allow the form to submit naturally to process.php
        // But we can add some UI feedback here
        
        const btn = $(this).find('button');
        const originalText = btn.text();
        
        btn.text('Processing...').css('opacity', '0.8');
        
        // Validation example
        const phone = $('#phone').val();
        if(phone && phone.length < 10) {
            e.preventDefault();
            alert('Please enter a valid phone number');
            btn.text(originalText).css('opacity', '1');
        }
    });

    // Input focus effects (extra polish)
    $('input, select').focus(function() {
        $(this).parent().addClass('focused');
    }).blur(function() {
        $(this).parent().removeClass('focused');
    });
});
