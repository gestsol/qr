<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="html5-qrcode.min.js"></script>
    <title>Document</title>
</head>
<body>

<style>

</style>

<input id="file-input" name="subirFoto" capture="camera" type="file"/>

<div class="row">
  <div class="col">
    <div style="width:300px;" id="reader"></div>
  </div>
  <br>

</div>
<div class="col" style="padding:30px;">
    <h4>SCAN RESULT</h4>
    <div id="result">Result Here</div>
</div>


<script type="text/javascript">
function onScanSuccess(qrCodeMessage) {
    document.getElementById('result').innerHTML = '<span class="result">'+qrCodeMessage+'</span>';
}

function onScanError(errorMessage) {
  //handle scan error
}

var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess, onScanError);



</script>
</body>
</html>