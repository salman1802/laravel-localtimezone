<script src="https://rawgit.com/moment/moment/2.6.0/min/moment.min.js"></script>
<script src="https://momentjs.com/downloads/moment-timezone-with-data.min.js"></script>
<script>
    function getUserTimezone() {
        return moment.tz.guess();
    }
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
