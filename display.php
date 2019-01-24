<?php
include "phuong-trinh.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $phuongtrinh = new QuadraticEquation($a, $b, $c);
    $root1 = null;
    $root2 = null;
}

?>
<form>
    <h2> Giai phuong trinh bac 2</h2>
    <span><?php echo $a ?></span>
    <label>X^2 + </label>
    <span><?php echo $b ?></span>
    <label>X + </label>
    <span><?php echo $c ?></span>
    <label>= 0 </label><br>
    <br>
    <input type="submit" name="submit" value="Ket Qua">
    <span id="ketqua"> </span>
</form>
<?php
if ($a != 0) {
    if ($phuongtrinh->getDelta() > 0) {
        $root1 = $phuongtrinh->getRoot1();
        $root2 = $phuongtrinh->getRoot2();
        echo "Root1 is " . $root1 . "<br/>";
        echo "Root2 is " . $root2;
    } else if ($phuongtrinh->getDelta() == 0) {
        $root1 = $phuongtrinh->getExprience();
        echo "One Root la: " . $root1;
    } else if ($phuongtrinh->getDelta() < 0) {
        echo "Phuong trinh vo nghiem";
    }
} else {
    echo " ko phai la phuong trinh bac 2";
}
?>