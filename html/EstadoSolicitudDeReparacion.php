<?php
require "Header.php";

if ($this->estado != null) {
?>
    <p><?= $this->estado ?></p>
<?php
} else {
?>
    <form action="" method="POST">
        <label for="id_solicitud_de_reparacion">Id de la solicitud de reparacion</label>
        <input type="text" name="id_solicitud_de_reparacion" id="id_solicitud_de_reparacion" required="required">
        <input type="submit">
    </form>
<?php
}
require "Footer.php";
