<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="input-group">
            <input type="text" name="kode_barang" id="kode" class="form-control" placeholder="Cari Kode Barang/ Barcode">
            <div class="input-group-append">
                <button class="btn btn-primary" id="btnsearch" type="button">Cari</button>
            </div>
        </div>
        <div id="qr-reader" width="600px"></div>
    </div>
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <script>
        const html5QrCode = new Html5Qrcode("qr-reader");
        const qrCodeSuccessCallback = (decodedText, decodedResult) => {
            /* handle success */
            console.log(`Scan result: ${decodedText}`, decodedResult);
            document.getElementById('kode').value=decodedText;
            // ...
            html5QrcodeScanner.clear();
        };
        const config = { fps: 10, qrbox: 250 };
        // Select front camera or fail with `OverconstrainedError`.
        
        /* kamera belakang */
        html5QrCode.start({
            facingMode: {
                exact: "environment"}
            }, config, qrCodeSuccessCallback);
        
        /* kamera depan */
        /* html5QrCode.start({
            facingMode: { exact: "user"}
        }, config, qrCodeSuccessCallback); */
    </script>
</body>
</html>