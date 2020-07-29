@if(count($errors) > 0)

        <div id="error" class="errors">
            <div id="closeerr" class="close">&times;</div>
            <ul>
                @foreach($errors -> all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

@endif