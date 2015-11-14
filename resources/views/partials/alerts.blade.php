
@if($errors->any())
<div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)
        <li>{!! $error !!}</li>
    @endforeach
    </ul>
</div>
@endif

@if(Session::has('success'))
<div class="alert alert-success">{!! Session::get('success') !!}</div>
<script type="text/javascript">
    sweetAlert("Atenção!", "teste", "error");
</script>
@endif
