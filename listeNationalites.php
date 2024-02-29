<?php include "header.php";
include "connexionPdo.php";
$req=$monPdo->prepare("select * from nationalite");
$req->setFetchMode(PDO::FETCH_OBJ);
$req->execute();
$lesNationalites=$req->fetchAll();
?>

<main role="main">
<div class="container">
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">Numéro</th>
        <th scope="col">Libellé</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach($lesNationalites as $nationalite){
        echo "<tr>";
        echo "<td>$nationalite->num</td>";
        echo "<td>$nationalite->libelle</td>";
        echo "<td></td>";
        echo "</tr>";
    }
    ?>
    </tbody>
    </table>
    



</div>
</main>


<?php include "footer.php";
?>