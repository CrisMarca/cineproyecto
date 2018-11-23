@if (count($errors) > 0)
    <div class="alert alert-danger">    	
        <ul>
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
@endif
