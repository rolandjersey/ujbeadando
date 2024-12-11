<?php
// A JSON fájl, ahol az adatok tárolódnak
$dataFile = 'users.json';

// Ellenőrizzük, hogy a POST kérés érkezett-e
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['guest'])) {
        // Ha a felhasználó regisztráció nélkül lép tovább
        header('Location: welcome.php');
        exit;
    }

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $isAdmin = isset($_POST['isAdmin']) ? true : false;

    $errors = [];

    // Alapvető validációk
    if (empty($username)) {
        $errors[] = 'A felhasználónév nem lehet üres!';
    }

    if (empty($password)) {
        $errors[] = 'A jelszó nem lehet üres!';
    } elseif (strlen($password) < 6) {
        $errors[] = 'A jelszónak legalább 6 karakter hosszúnak kell lennie!';
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Az e-mail cím érvénytelen!';
    }

    // Ha nincs hiba, folytatjuk a feldolgozást
    if (empty($errors)) {
        // Adatok betöltése
        $users = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];

        // Ellenőrizzük, hogy a felhasználónév vagy email már létezik-e
        foreach ($users as $user) {
            if ($user['username'] === $username) {
                $errors[] = 'A felhasználónév már foglalt!';
                break;
            }
            if ($user['email'] === $email) {
                $errors[] = 'Az e-mail cím már regisztrálva van!';
                break;
            }
        }

        // Ha még mindig nincs hiba, mentjük az adatokat
        if (empty($errors)) {
            $users[] = [
                'username' => $username,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'email' => $email,
                'isAdmin' => $isAdmin
            ];

            file_put_contents($dataFile, json_encode($users, JSON_PRETTY_PRINT));
            echo '<p class="text-success text-center">Sikeres regisztráció!</p>';
        }
    }

    // Hibák megjelenítése
    if (!empty($errors)) {
        echo '<div class="alert alert-danger">';
        foreach ($errors as $error) {
            echo '<p>' . htmlspecialchars($error) . '</p>';
        }
        echo '</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regisztráció</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center text-primary mb-4">Regisztráció</h1>
        <div class="card mx-auto" style="max-width: 500px;">
            <div class="card-body">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="username" class="form-label">Felhasználónév:</label>
                        <input type="text" id="username" name="username" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Jelszó:</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" id="isAdmin" name="isAdmin" class="form-check-input">
                        <label for="isAdmin" class="form-check-label">Admin regisztráció</label>
                    </div>

                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary">Regisztráció</button>
                    </div>

                    <div class="d-grid">
                        <button type="submit" name="guest" class="btn btn-secondary">Regisztráció nélküli belépés</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <?php
    include_once 'common/footer.php';
    ?>

</body>
</html>
