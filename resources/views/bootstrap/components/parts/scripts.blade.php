<script>
    window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
</script>
<script src="{{ asset('js/app.js') }}"></script>