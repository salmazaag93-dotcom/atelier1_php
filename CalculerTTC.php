<?php
    function CalculerTTC($PrixHT,$Qte,$TVA){
        $Montant_TVA=$PrixHT*$Qte*($TVA/100);
        $Prix_TTC=$Montant_TVA+$PrixHT*$Qte;?>
        <table border=3>
        <tr>
        <th>prixht</th>
        <th>quantité</th>
        <th>total HT</th>
        <th>montant TVA</th>
        <th>total TTC</th>
        </tr>
        <tr>
        <td><?= $PrixHT ?></td>
        <td><?= $Qte ?></td>
        <td><?= $TVA ?></td>
        <td><?= $Montant_TVA ?></td>
        <td><?= $Prix_TTC ?></td></tr>
        </table>
   <?php } ?>
