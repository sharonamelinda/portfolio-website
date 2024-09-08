document.addEventListener('DOMContentLoaded', function () {
    // Handle submit form using AJAX
    document.getElementById('contact-form').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent page loading

        const form = event.target;
        const formData = new FormData(form);

        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.getElementById('hs-task-created-alert').classList.remove('hidden');
            } else {
                // error handling
                console.log('Form submission error: ', data.message);
            }
        })
        .catch(error => console.error('Error: ', error));
    });
});