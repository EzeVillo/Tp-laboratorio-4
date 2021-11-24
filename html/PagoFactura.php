<?php
require "Header.php";

if ($this->msg != null) {
?>
    <p><?= $this->msg ?></p>
<?php
}
?>
<form action="" method="POST">
    <label for="id_solicitud_de_reparacion">Id de la solicitud de reparacion</label>
    <input type="text" name="id_solicitud_de_reparacion" id="id_solicitud_de_reparacion" required="required">

    <label for="id_metodo_de_pago">Metodo de pago</label>
    <select name="id_metodo_de_pago" id="id_metodo_de_pago">
        <?php
        foreach ($this->Metodos_de_pago as $i) {
        ?>
            <option value="<?= $i["Id_metodo_de_pago"] ?>"><?= $i["Nombre"] ?></option>
        <?php
        }
        ?>
    </select>

    <label for="monto">Monto</label>
    <input type="text" name="monto" id="monto" required="required">

    <input type="submit">
</form>
<?php
require "Footer.php";
