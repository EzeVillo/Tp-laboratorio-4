<?php
require "Header.php";

if ($this->msg != null) {
?>
    <p><?= $this->msg ?></p>
<?php
}
?>
<form action="" method="POST">
    <label for="id_solicitud_de_reparacion">Id solicitud de reparacion</label>
    <input type="text" id="id_solicitud_de_reparacion" name="id_solicitud_de_reparacion">
    <input type="submit">
</form>
<?php
require "Footer.php";
