@if ($errors->any())
    <div class="alert alert-warning">
        @foreach ($errors->all() as $error)
            <ul>
                <li>
                    <p>{{ $error }}</p>
                </li>
            </ul>
        @endforeach
    </div>
@endif