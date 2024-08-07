<script>
    var timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
    document.addEventListener('DOMContentLoaded', function() {
        var timezone = getUserTimezone();
        fetch('{{ route('set-timezone') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ timezone: timezone })
        }).then(response => response.json())
        .then(data => console.log(data.message));
    });
</script>
