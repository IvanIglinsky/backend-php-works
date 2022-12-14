<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lab6</title>
  <style>
    fieldset {
      width: 300px;
      background: lightgray;
    }
    label {
      text-align: right;
    }

    textarea {
      height: 100px;
      width: 250px;
    }

    td b {
      float: right;
    }

    input {
      height: 25px;
    }


    input:nth-child(2) {
      background: red;
    }

    label input {
      background: yellow;
      width: 250px;
    }

    i input {
      background: salmon;
      width: 250px;
    }

    input {
      background: lightgreen;
    }

    div input {
      width: 10px;
      height: 10px;
      float: left;
    }


  </style>
</head>
<body>
<form action="SignUp(T1).php" method="post">
  <fieldset >
    <h3 style="margin:5px 0 5px 150px ">Sign Up</h3>
    <table>
      <tr>
        <td><b>E-mail:</b></td>
        <td><label>
          <input type="email" name="email">
        </label></td>
      </tr>
      <tr>
        <td><b>Login:</b></td>
        <td><label>
          <input type="text" name="login">
        </label></td>
      </tr>
      <tr>
        <td><b>Пароль:</b></td>
        <td><label><i>
          <input type="password" name="password">
        </i>
        </label></td>
      </tr>
      <tr>
        <td><b>Повторіть пароль:</b></td>
        <td><label><i>
          <input type="password" name="passwordTwo">
        </i>
        </label></td>
      </tr>
      <tr>
        <td><b>Ім'я:</b></td>
        <td><label>
          <input type="text" name="name">
        </label></td>
      </tr>
      <tr>
        <td><b>Прізвище:</b></td>
        <td><label>
          <input type="text" name="surname">
        </label></td>
      </tr>
      <tr>
        <td><b>По батькові:</b></td>
        <td><label>
          <input type="text" name="fname">
        </label></td>
      </tr>
      <tr>
        <td><b>Стать:</b></td>
        <td>
          <div style="display:inline-block">
            <label>
              <input type="radio" name="stat" value="Men"/>
            </label>
          </div>
          Чоловік
          <div style="display:inline-block">
            <label>
              <input type="radio" name="stat" value="Woman"/>
            </label>
          </div>
          Жінка
        </td>
      </tr>
      <tr>
        <td><b>Дата народження:</b></td>
        <td>
          <div style="display: inline-block;">
            <input type="date" style="width: 250px;height: 25px" name="dateBirt">
          </div>
        </td>
      </tr>
      <tr>
        <td><b>Країна:</b></td>
        <td><label>
          <input type="text" name="Country">
        </label></td>
      </tr>
      <tr>
      <tr>
        <td><b>Місто:</b></td>
        <td><label>
          <input type="text" name="city">
        </label></td>
      </tr>
      <tr>
        <td></td>
        <td>Маєте акаунт?</td>
      </tr>
      <tr>
        <td></td>
        <td><a href="SignIn.php">Увійдіть тут.</a></td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="submit" value="Зареєструватися"/>
          <input type="reset" value="Очистити"/>
        </td>
      </tr>
    </table>
  </fieldset>
</form>
</body>
</html>