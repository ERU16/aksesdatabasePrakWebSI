<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ubah.css">
    <title>Register</title>
</head>
<body>
    <main class="container">
        <section class="pertama">
            <h1>Registerasi komunitas Cat Lovers</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil commodi, quam officia, quae magnam labore nemo nostrum asperiores culpa animi minus totam libero vel. Autem ipsam itaque numquam eveniet magnam.
            </p>

        </section>
        <section class = "register">
            <h2>Form Register</h2>
            <form method="post" action="otw_register.php">
            <label for="nama" class="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
            <label for="email"class="email">Email:</label>
            <input type="email" id="email" name="email">
            <label for="password" class="password">Password:</label>
            <input type="password" id="password" name="password">
            <input type="submit" value="regist">
            </form>
            <p>sudah punya akun? login aja <a href="pertemuan1.php">di sini</a>.</p>
        </section>
    </main>
</body>
</html>