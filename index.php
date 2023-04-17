<!DOCTYPE html>
<html>
  <head>
    <title>Logowanie</title>
  </head>
  <body>
    <h1>Logowanie</h1>
    <form>
      <h3>Login: </h3><input type="text" id="username" name="username" required>
      <h3>Hasło: </h3><input type="password" id="password" name="password" required><br><br>
      <input type="submit" name='button' value="Zaloguj się">
    </form>
    
    <?php
    if (isset($_GET['button'])) {
        if($_GET['username'] === "admin") {
            if($_GET['password'] === "test") {
                echo "Zalogowano pomyślnie";
            }
            else {
                echo "Błędne hasło";
            }
        } else {
            echo"Błędny login";
        }
    }
    ?>
  </body>
</html>