<form action="{{ route('get-add-new-user') }}" method="post">
    @csrf
    <p><label>Name</label></p>
    <p><input type="text" name="name" value="{{ old('name') }}"/></p>
    @error('name')
        <p>{{ $message }}</p>
    @enderror
    <p><label>Email</label></p>
    <p><input type="text" name="email" value="{{ old('email') }}"/></p>
    @error('email')
        <p>{{ $message }}</p>
    @enderror
    <p><label>Password</label></p>
    <p><input type="text" name="password" /></p>
    @error('password')
        <p>{{ $message }}</p>
    @enderror
    <p><label>Confirm Password</label></p>
    <p><input type="text" name="conf_password" /></p>
    @error('conf_password')
        <p>{{ $message }}</p>
    @enderror
    <p><label>Age</label></p>
    <p><input type="text" name="age" value="{{ old('age') }}"/></p>
    @error('age')
        <p>{{ $message }}</p>
    @enderror
    <p><input type="submit" value="Add New User" /></p>
</form>