<html>
<head>
  <title>My User Edit</title>
  <style>
    body { color: gray; }
    h1 { font-size: 18pt; font-weight: bold; }
    th { color: white; background: #999; }
    td { color: black; background: #eee; padding: 5px 10px; }
  </style>
</head>
<body>
  <h1>Edit user</h1>
  <p>{{ $message }}</p>
  <form method="post" action="/myuser/{{ $data->id }}">
    <input type="hidden" name="_method" value="put">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="update">
    <table>
      <tr><th>ID</th><th>NAME</th><th>MAIL</th><th>AGE</th></tr>
      <tr>
        <td>{{ $data->id }}</td>
        <td><input type="text" name="name" value={{ $data->name }}></td>
        <td><input type="text" name="mail" value={{ $data->mail }}></td>
        <td><input type="text" name="age" value={{ $data->age }}></td>
      </tr>
    </table>
  </form>
  <form method="post" action="/myuser/{{ $data->id }}">
    <input type="hidden" name="_method" value="delete">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="delete">
  </form>
  <p>{{ $json_data }}</p>
</body>
