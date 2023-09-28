<?php
include ("connectDB.php");
session_start();
?>
<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>YAZAR</th><th>BAŞLIK</th><th>İÇERİK</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

$stmt = $conn->prepare("SELECT dersad, dershoca, derskredi FROM dersler");
$stmt->execute();

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
	echo $v;
}

$conn = null;
echo "</table>";
?>

--------------------------------------------------------------------------------------------------------

<center>
<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>YAZAR</th><th>BAŞLIK</th><th>İÇERİK</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

$stmt = $conn->prepare("SELECT makaleyazar, makalebaslik, makaleicerik FROM makaleler");
$stmt->execute();

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
  echo $v;
}

$conn = null;
echo "</table>";
?>
</center>