@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible">
            {{$error}}
        </div>
    @endforeach
@endif