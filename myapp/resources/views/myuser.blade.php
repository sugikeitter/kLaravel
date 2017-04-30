<html>
<head>
  <title>My User</title>
  <style>
    body { color: gray; }
    h1 { font-size: 18pt; font-weight: bold; }
    th { color: white; background: #999; }
    td { color: black; background: #eee; padding: 5px 10px; }
  </style>
</head>
<body>
  <h1>User</h1>
  <p>{{ $message }}</p>
  <form method="post" action="/myuser">
    <input type="submit" value="registration">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <table>
      <tr><th>ID</th><th>NAME</th><th>MAIL</th><th>AGE</th></tr>
      <tr>
        <td></td>
        <td><input type="text" name="name"></td>
        <td><input type="text" name="mail"></td>
        <td><input type="text" name="age"></td>
      </tr>
@foreach ($data as $val)
      <tr>
        <td><a href="/myuser/{{ $val->id }}/edit">{{ $val->id }}</a></td>
        <td>{{ $val->name }}</td>
        <td>{{ $val->mail }}</td>
        <td>{{ $val->age }}</td>
      </tr>
@endforeach
    </table>
  </form>
  <p>{{ $json_data }}</p>
</body>
