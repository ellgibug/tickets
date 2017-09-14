@if(count($errors))
    @foreach($errors->all() as $error)
        <p class="text-center text-danger">{{ $error }}</p>
    @endforeach
@endif