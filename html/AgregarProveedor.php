<div class="Pregunta">
<?php
require "Header.php";

if ($this->msg != null) {
?>
    <p><?= $this->msg ?></p>
<?php
}
?>
<form action="" method="POST">
    <label for="nombre">Nombre del proveedor</label>
    <input type="text" name="nombre" id="nombre" minlength="2" maxlength="50" required="required">
    <input type="submit">
</form>
<?php
require "Footer.php";
?>
</div>