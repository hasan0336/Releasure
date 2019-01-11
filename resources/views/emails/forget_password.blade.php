<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>

<body>
<h2>Hi <b>bbbbb</b></h2>
<br/>
By verifying your email address help us secure your Releasur account.
<a href="{{route('change_password',['user_id' => $user['email']])}}">Change Password</a>
</body>

</html>