<?php
if (isset($_GET['latest']) && $_GET['latest'] === 'true') {
    try {
        // SOAP kliens inicializálása
        $wsdl = "http://www.mnb.hu/arfolyamok.asmx?WSDL";
        $client = new SoapClient($wsdl);

        // SOAP lekérdezés a legfrissebb árfolyamokra
        $response = $client->GetCurrentExchangeRates();

        // XML válasz feldolgozása
        $xml = simplexml_load_string($response->GetCurrentExchangeRatesResult);
        $result = json_encode($xml);
        echo $result;

    } catch (Exception $e) {
        // Hibakezelés
        echo json_encode(["error" => $e->getMessage()]);
    }
    exit;
}

// Korábbi lekérdezésekhez tartozó kód...
