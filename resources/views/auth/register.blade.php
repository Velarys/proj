<!-- resources/views/auth/register.blade.php -->

<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div>
        First Name
        <input type="text" name="firstname" value="{{ old('firstname') }}">
    </div>

       <div>
         Last Name
        <input type="text" name="lastname" value="{{ old('lastname') }}">
    </div>

     <div>
         Sex
        <input type="text" name="sex" value="{{ old('sex') }}">
    </div>

       <div>
         Birthdate
        <input type="date" name="birthdate" value="{{ old('birthdate') }}">
    </div>

    <div>
         Address
        <input type="text" name="address" value="{{ old('address') }}">
    </div>

    <div>
         Level of Education
        <input type="text" name="levelofeducation" value="{{ old('levelofeducation') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>