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
  <form method="post" action="/myuser/{{ $data[0]->id }}">
    <input type="hidden" name="_method" value="put">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <input type="submit" value="update">
    <table>
      <tr><th>ID</th><th>NAME</th><th>MAIL</th><th>AGE</th></tr>
      <tr>
        <td>{{ $data[0]->id }}</td>
        <td><input type="text" name="name" value={{ $data[0]->name }}></td>
        <td><input type="text" name="mail" value={{ $data[0]->mail }}></td>
        <td><input type="text" name="age" value={{ $data[0]->age }}></td>
      </tr>
    </table>
  </form>
  <p>{{ $json_data }}</p>
</body>
