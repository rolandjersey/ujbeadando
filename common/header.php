<?php
session_start(); // Session indítása a jogosultság ellenőrzéshez
include_once 'database.php'; // Adatbázis kapcsolat

// Menüpontok definiálása
$menu_items = [
    ['name' => 'Főoldal', 'url' => 'index.php'],
    ['name' => 'SOAP-szerver', 'url' => 'soapSzerver.php'],
    ['name' => 'SOAP-kliens', 'url' => 'soapKliens.php'],
    ['name' => 'SOAP-MNB', 'url' => 'soapMnb.php'],
    ['name' => 'Restful-szerver', 'url' => 'restfulSzerver.php'],
    ['name' => 'Restful-kliens', 'url' => 'restfulKliens.php'],
    ['name' => 'PDF menü', 'url' => 'pdfMenu.php'],
    ['name' => 'Elérhetőségek', 'url' => 'footer.php#contact'],
];

// Menüpontok frissítése az adatbázisban
foreach ($menu_items as $item) {
    $query = "INSERT INTO menu (name, url) 
              VALUES (?, ?) 
              ON DUPLICATE KEY UPDATE name = VALUES(name), url = VALUES(url)";
    $stmt = $conn->prepare($query);

    if ($stmt) {
        $stmt->bind_param("ss", $item['name'], $item['url']);
        $stmt->execute();
        $stmt->close();
    } else {
        die("SQL hiba: " . $conn->error);
    }
}
?>

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="index.php" class="logo d-flex align-items-center">
            <h1 class="sitename">Szélerőművek</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul class="navbar-nav ml-auto">
                <?php
                // Az adatbázisban tárolt menüpontok betöltése
                $query = "SELECT name, url FROM menu ORDER BY id ASC";
                $result = $conn->query($query);

                if ($result) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<li class="nav-item"><a class="nav-link" href="' . htmlspecialchars($row['url']) . '">' . htmlspecialchars($row['name']) . '</a></li>';
                    }
                }

                // Admin menüpont dinamikus hozzáadása
                if (isset($_SESSION['felh_ID']) && $_SESSION['jogosultsag'] === 'admin') {
                    echo '<li class="nav-item"><a class="nav-link" href="adminProjections.php">Admin</a></li>';
                }
                ?>
            </ul>
            <button class="mobile-nav-toggle d-xl-none bi bi-list"></button>
        </nav>

    </div>
</header>
