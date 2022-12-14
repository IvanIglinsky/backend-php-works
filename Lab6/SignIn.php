<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
  fieldset {
    width: 300px;
    background: lightgray;
  }
  td b {
    float: right;
  }

  input {
    height: 25px;
  }
  label {
    text-align: right;
  }
  label input {
    background: yellow;
    width: 250px;
  }

</style>
<body>
<form action="SignIn(T1).php" method="post">
  <fieldset>
  <h3 style="margin:5px 0 5px 130px ">Sign In</h3>
  <table>
    <tr>
      <td><b>Логін:</b></td>
      <td><label><i>
        <input type="text" name="login">
      </i>
      </label></td>
    </tr>
    <tr>
      <td><b>Пароль:</b></td>
      <td><label><i>
        <input type="password" name="password" style="background: salmon">
      </i>
      </label></td>
    </tr>
    <tr>
      <td></td>
      <td>Не маєте акаунту?</td>
    </tr>
    <tr>
      <td></td>
      <td><a href="SignUp.php">Зареєструйтесь тут.</a></td>
    </tr>
    <tr>
      <td></td>
      <td>
        <input type="submit" value="Увійти" style="background:yellowgreen;"/>
        <input type="reset" value="Очистити" style="background: red;"/>
      </td>
    </tr>
  </table>
  </fieldset>
</form>
</body>
</html>