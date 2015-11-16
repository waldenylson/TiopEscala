
@if (Session::has('success'))
    <script type="text/javascript">
        $(document).ready(function() {
            sweetAlert("Atenção!", "{!! Session::get('success') !!}", "success");
        });
    </script>
@endif
