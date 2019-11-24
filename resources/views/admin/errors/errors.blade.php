@if(count($errors) > 0)
    <ul class="list-group">
        @foreach($errors->all() as $error)
            {{ $error }}
        @endforeach
    </ul>   
@endif