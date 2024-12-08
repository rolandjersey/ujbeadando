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
    ['name' => 'Elérhetőségek', 'url' => '/common/footer.php#contact'],
];

$query = "SELECT * FROM menu WHERE name = ? AND url = ?";
$stmt = $conn->prepare($query);


if (!$stmt) {
    die("SQL betöltési hiba: " . $conn->error);
}

$stmt->bind_param("ss", $item['name'], $item['url']);


foreach ($menu_items as $item) {
    $query = "SELECT * FROM menu WHERE name = ? AND url = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $item['name'], $item['url']);
    $stmt->execute();
    $result = $stmt->get_result();


    // Ha nem találja a menüpontot, akkor hozzáadja
    if ($result->num_rows === 0) {
        $insert_query = "INSERT INTO menu (name, url) VALUES (?, ?)";
        $insert_stmt = $conn->prepare($insert_query);
        $insert_stmt->bind_param("ss", $item['name'], $item['url']);
        $insert_stmt->execute();
    }
}
?>

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <h1 class="sitename">Szélerőművek</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <?php
                // Menü betöltése
                $query = "SELECT name, url FROM menu ORDER BY id ASC";
                $result = $conn->query($query);

                if ($result) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<li class="dropdown"><a href="' . htmlspecialchars($row['url']) . '">' . htmlspecialchars($row['name']) . '><i class="bi bi-chevron-down toggle-dropdown"></i></a></li>';
                    }
                }

                // Admin hozzáadása
                if (isset($_SESSION['felh_ID']) && $_SESSION['jogosultsag'] === 'admin') {
                    echo '<li class="dropdown"><a href="adminProjections.php">Admin></a><i class="bi bi-chevron-down toggle-dropdown"></li>';
                }
                ?>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>
