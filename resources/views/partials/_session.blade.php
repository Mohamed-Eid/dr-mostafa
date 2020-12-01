@if (session('success'))

    <script>
        swal("{{ session('success') }}", "", "success");
    </script>

@endif
