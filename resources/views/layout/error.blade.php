@if(count($errors))

    <div class="form-group">
        <div class="alert alter-danger" role="alert">
        </div>
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>
@endif