<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Adatbázis kapcsolat
include_once 'database.php';

// Megyék lekérdezése
$megye_query = "SELECT * FROM megye";
$megye_result = mysqli_query($conn, $megye_query);

// Helyszínek lekérdezése
$helyszin_query = "SELECT * FROM helyszin";
$helyszin_result = mysqli_query($conn, $helyszin_query);

// Fejléc betöltése
include_once 'common/header.php';
?>
<link rel="stylesheet" type="text/css" href="assets/css/main.css">

<style>
    /* Globális háttér */
    html, body {
        margin: 0;
        padding: 0;
        background-color: #17283b;
        color: #ffffff;
    }

    header {
        background-color: #1b2f45;
        padding: 20px;
        text-align: center;
        font-size: 24px;
        color: #ffffff;
        font-weight: bold;
    }

    main {
        padding: 20px;
    }

    form {
        margin-bottom: 20px;
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-top: 20px;
    }

    .card {
        background-color: #1b2f45;
        color: white;
        border: 1px solid #56b8e6;
        border-radius: 10px;
        width: 48%;
        margin-bottom: 20px;
        padding: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .card h3 {
        background-color: #17283b;
        padding: 10px;
        border-radius: 5px;
        color: #ffffff;
        text-align: center;
    }

    .card p {
        margin: 5px 0;
        font-size: 14px;
    }

    .btn-primary {
        background-color: #56b8e6;
        border: none;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #3a8fb2;
    }
</style>

<main id="main" class="main">
    <header>
        Szélenergia - PDF Generálás
    </header>
    <section class="section">
        <div class="container">
            <h1 class="text-center">PDF Generálás - Szűrési Feltételek</h1>
            <form method="POST" action="pdf_generator.php" class="mt-4">
                <div class="row">
                    <div class="col-md-4">
                        <label for="megye">Megye:</label>
                        <input type="text" id="megye" name="megye" class="form-control" placeholder="Megye neve">
                    </div>
                    <div class="col-md-4">
                        <label for="helyszin">Helyszín:</label>
                        <input type="text" id="helyszin" name="helyszin" class="form-control" placeholder="Helyszín neve">
                    </div>
                    <div class="col-md-4">
                        <label for="teljesitmeny">Minimális Teljesítmény:</label>
                        <input type="number" id="teljesitmeny" name="teljesitmeny" class="form-control" placeholder="Teljesítmény (kW)">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn-primary">PDF Generálása</button>
                    </div>
                </div>
            </form>

            <!-- Kártyák megjelenítése -->
            <div class="card-container">
                <?php while ($row = mysqli_fetch_assoc($megye_result)) : ?>
                    <div class="card">
                        <h3>Megye ID: <?php echo $row['id']; ?></h3>
                        <p><strong>Megye:</strong> <?php echo $row['new'] ?? 'N/A'; ?></p>
                        <p><strong>Regió:</strong> <?php echo $row['regio']; ?></p>
                    </div>
                <?php endwhile; ?>

                <?php while ($row = mysqli_fetch_assoc($helyszin_result)) : ?>
                    <div class="card">
                        <h3>Helyszín ID: <?php echo $row['id']; ?></h3>
                        <p><strong>Helyszín:</strong> <?php echo $row['new'] ?? 'N/A'; ?></p>
                        <p><strong>Megye ID:</strong> <?php echo $row['megyeid']; ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
</main>

<?php
// Lábléc betöltése
include_once 'common/footer.php';
?>
