@foreach($users as $user)
    <p>{{ $user->name }}</p>
    <p>@useremail($myUserEmail)</p>
@endforeach