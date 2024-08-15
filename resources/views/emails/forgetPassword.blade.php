<!DOCTYPE html>
<html lang="en-US">
  <head>
      <meta charset="utf-8" />
  </head>
  <body>
    <p>Hello {{ $data['name'] }}</p>
    <p>Forgot your password?</p> 
    <p>To reset your password please follow the link below:</p>
    <p> <a href="{{ $data['url'] }}" > Click Here</a> </p>
  </body>
</html>