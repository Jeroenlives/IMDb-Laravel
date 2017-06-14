<script>
    window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
</script>
<script src="{{ asset('js/app.js') }}"></script>

<!-- Main Quill library -->
<script src="//cdn.quilljs.com/1.2.6/quill.js"></script>
<script src="//cdn.quilljs.com/1.2.6/quill.min.js"></script>

<!-- Theme included stylesheets -->
<link href="//cdn.quilljs.com/1.2.6/quill.snow.css" rel="stylesheet">
<link href="//cdn.quilljs.com/1.2.6/quill.bubble.css" rel="stylesheet">

<!-- Core build with no theme, formatting, non-essential modules -->
<link href="//cdn.quilljs.com/1.2.6/quill.core.css" rel="stylesheet">
<script src="//cdn.quilljs.com/1.2.6/quill.core.js"></script>