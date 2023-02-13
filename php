<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>My Video Website</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
      <h1>My Video Website</h1>
    </header>
    <nav>
      <ul>
        <li><a href="#login">Login</a></li>
        <li><a href="#signup">Sign Up</a></li>
      </ul>
    </nav>
    <main>
      <section id="login">
        <h2>Login</h2>
        <form>
          <input type="text" name="username" placeholder="Username">
          <input type="password" name="password" placeholder="Password">
          <input type="submit" value="Submit">
        </form>
      </section>
      <section id="signup">
        <h2>Sign Up</h2>
        <form>
          <input type="text" name="username" placeholder="Username">
          <input type="password" name="password" placeholder="Password">
          <input type="email" name="email" placeholder="Email">
          <input type="submit" value="Submit">
        </form>
      </section>
    </main>
    <script src="app.js"></script>
  </body>
</html>
