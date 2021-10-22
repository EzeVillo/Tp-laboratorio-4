<?php
require "Header.php";

if ($this->msg != null) {
?>
    <p><?= $this->msg ?></p>
<?php
}
?>
<form action="" method="POST">
    <label for="cliente">DNI del cliente</label>
    <select name="cliente" id="cliente">
        <?php
        foreach ($this->Clientes as $i) {
        ?>
            <option value="<?= $i["Id_cliente"] ?>"><?= $i["DNI"] ?></option>
        <?php
        }
        ?>
    </select>
    <label for="aparato">Id del aparato</label>
    <select name="aparato" id="aparato">
        <?php
        foreach ($this->Aparatos as $i) {
        ?>
            <option value="<?= $i["Id_aparato"] ?>"><?= $i["Id_aparato"] ?></option>
        <?php
        }
        ?>
    </select>
    <input type="submit">
</form>
<?php
require "Footer.php";
