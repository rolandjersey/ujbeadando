<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MNB Árfolyamok</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(45deg, #5dade2, #aed6f1);
            color: #333;
        }

        .market_section {
            padding: 3rem 0;
        }

        .market_taital {
            font-size: 2.5rem;
            text-align: center;
            font-weight: bold;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
        }

        h2 {
            color: #fff;
            margin-top: 2rem;
            border-bottom: 2px solid #fff;
            display: inline-block;
        }

        .form-group label {
            font-weight: bold;
            color: #fff;
        }

        .btn-primary {
            background-color: #2874a6;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #1b4f72;
            transform: scale(1.05);
        }

        #singleDayResult {
            margin-top: 1rem;
            color: #fff;
            font-size: 1.2rem;
            text-align: center;
        }

        table {
            background: #f8f9fa;
            border-radius: 8px;
            overflow: hidden;
        }

        table thead {
            background-color: #2874a6;
            color: #fff;
        }

        table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #ratesChart {
            margin-top: 2rem;
            padding: 1rem;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <header class="py-3 bg-primary text-white text-center">
        <h1>MNB Árfolyamok Lekérdezése</h1>
    </header>

    <div class="market_section">
        <div class="container">
            <h1 class="market_taital">MNB Árfolyamok Lekérdezése</h1>

            <!-- Adott nap árfolyamának lekérdezése -->
            <div class="card shadow-lg mt-4">
                <div class="card-body">
                    <h2>Adott nap árfolyama</h2>
                    <form id="singleDayForm">
                        <div class="form-group">
                            <label for="currencyDay">Devizapár (pl. EUR/HUF):</label>
                            <input type="text" id="currencyDay" name="currencyDay" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="singleDate">Dátum:</label>
                            <input type="date" id="singleDate" name="singleDate" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-3">Lekérdezés</button>
                    </form>
                    <p id="singleDayResult"></p>
                </div>
            </div>

            <!-- Egy hónap árfolyamainak lekérdezése -->
            <div class="card shadow-lg mt-4">
                <div class="card-body">
                    <h2>Egy hónap árfolyamai</h2>
                    <form id="monthlyForm">
                        <div class="form-group">
                            <label for="currencyMonth">Devizapár (pl. EUR/HUF):</label>
                            <input type="text" id="currencyMonth" name="currencyMonth" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="monthStartDate">Kezdő dátum:</label>
                            <input type="date" id="monthStartDate" name="monthStartDate" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="monthEndDate">Záró dátum:</label>
                            <input type="date" id="monthEndDate" name="monthEndDate" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-3">Lekérdezés</button>
                    </form>
                </div>
            </div>

            <div class="table-responsive mt-4">
                <h3>Eredmények</h3>
                <table class="table table-striped" id="ratesTable">
                    <thead>
                        <tr>
                            <th>Dátum</th>
                            <th>Árfolyam</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>

            <canvas id="ratesChart"></canvas>

            <!-- Napi legfrissebb árfolyamok -->
            <div class="table-responsive mt-4">
                <h3 class="text-white">Napi legfrissebb árfolyamok</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Devizapár</th>
                            <th>Árfolyam</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>EUR/HUF</td>
                            <td>379.12</td>
                        </tr>
                        <tr>
                            <td>USD/HUF</td>
                            <td>347.45</td>
                        </tr>
                        <tr>
                            <td>GBP/HUF</td>
                            <td>435.89</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer class="py-3 bg-primary text-white text-center">
        <p>&copy; 2024 MNB Árfolyam Lekérdezés. Minden jog fenntartva.</p>
    </footer>

    <script src="scripts.js"></script>

</body>

</html>
