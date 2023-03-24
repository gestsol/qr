<script type="text/javascript">
    // javascript_to_php();
function javascript_to_php() {
    var jsVar1 = "Hello";
    var jsVar2 = "World";
  
    location.href = "test.php"+ "?w1=" + jsVar1 + "&w2=" + jsVar2;
   
}
</script>
 
<?php
// comprobar si tenemos los parametros w1 y w2 en la URL
if (isset($_GET["w1"]) && isset($_GET["w2"])) {
    // asignar w1 y w2 a dos variables
    $phpVar1 = $_GET["w1"];
    $phpVar2 = $_GET["w2"];
 
    // mostrar $phpVar1 y $phpVar2
    echo "<p>Parameters: " . $phpVar1 . " " . $phpVar2. "</p>";
} else {
    echo "<p>No parameters</p>";
}
?>