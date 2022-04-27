@auth
    {{ Auth::user() }}
@else
    User is not Logged In
@endauth