<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REST API Tesztelő</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        .result {
            margin-top: 20px;
        }

        pre {
            background: #e9ecef;
            padding: 15px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center">REST API Tesztelő</h1>
        <form id="apiTester">
            <div class="mb-3">
                <label for="method" class="form-label">HTTP Módszer</label>
                <select class="form-select" id="method" name="method" required>
                    <option value="GET">GET</option>
                    <option value="POST">POST</option>
                    <option value="PUT">PUT</option>
                    <option value="DELETE">DELETE</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="endpoint" class="form-label">REST API Endpoint</label>
                <input type="text" class="form-control" id="endpoint" name="endpoint" placeholder="Pl. /power_plants/1" required>
            </div>
            <div class="mb-3">
                <label for="payload" class="form-label">Adat (POST/PUT esetén)</label>
                <textarea class="form-control" id="payload" name="payload" placeholder='{"key": "value"}'></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Küldés</button>
        </form>

        <div class="result">
            <h3>Eredmény:</h3>
            <pre id="resultOutput">Nincs eredmény.</pre>
        </div>
    </div>

    <script>
        const form = document.getElementById('apiTester');
        const resultOutput = document.getElementById('resultOutput');

        form.addEventListener('submit', async (event) => {
            event.preventDefault();

            const method = document.getElementById('method').value;
            const endpoint = document.getElementById('endpoint').value;
            const payload = document.getElementById('payload').value;

            const url = `http://localhost:8000${endpoint}`; // Módosítsd az URL-t az API URL-jére!

            try {
                const options = {
                    method,
                    headers: { 'Content-Type': 'application/json' },
                };

                if (method === 'POST' || method === 'PUT') {
                    options.body = payload;
                }

                const response = await fetch(url, options);
                const result = await response.json();
                resultOutput.textContent = JSON.stringify(result, null, 2);
            } catch (error) {
                resultOutput.textContent = `Hiba: ${error.message}`;
            }
        });
    </script>
</body>

</html>
