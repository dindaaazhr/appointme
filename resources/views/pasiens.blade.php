@auth
    @if (Auth::user()->email != 'adminappointme@health.co.id')
        <script>
            window.location = "{{ route('error.404') }}";
        </script>
    @endif
@endauth