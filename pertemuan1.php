<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>cat lovers</title>
    <link rel="stylesheet" href="ubah.css">
  </head>
  <body>
    <main class="container">
      <section class="pertama">
        <h1>Selamat Datang di Komunitas Cat lovers</h1>
        <p class="deskripsi">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores ducimus
          nam ullam assumenda unde, sed animi magnam accusantium fugiat! Minima
          corporis recusandae nisi. Porro inventore ducimus sunt eligendi, ad rerum?
        </p>
      </section>
      <section class="jenis">
        <h2>ini list jenis kucing</h2>
        <ul>
          <li>
            <a
            href="">
            kucing garong
          </a>
          <p class="penjelasan">ini kucing garong sangat ganas</p>
        </li>
        <li>
          <a 
          href="">
          kucing anggora
        </a>
        <p class="penjelasan">kucing anggora bulunya bagus</p>
      </li>
        <li>
          <a 
          href="">
          kucing garfield
          </a>
          <p class="penjelasan">kucing ini berwarna oranye</p>
        </li>
      </ul>
      </section>
    <section class="join">
      <h2>Mari Join Komunitas</h2>
      <?php
        if (isset($_SESSION['login_error'])) {
          echo '<div class="error-message show">';
          echo htmlspecialchars($_SESSION['login_error']);
          echo '</div>';
          unset($_SESSION['login_error']);
        }
      ?>
      <form method="post" action="otw_login.php">
        <label for="nama" class="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <label for="password" class="password">Password:</label>
        <input type="password" id="password" name="password">
        <input type="submit" value="kirim">
      </form>
      <p>Belum memiliki akun? Silahkan register <a href="register.php">di sini</a>.</p>
    </section>
  </main>
  </body>
</html>
