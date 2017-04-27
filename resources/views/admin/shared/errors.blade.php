@if (count($errors) > 0)
    <b-notification type="is-danger" has-icon>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </b-notification>
@endif