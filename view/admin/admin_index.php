<?php
    ini_set("display_errors",0);error_reporting(0);
?>
<div class="container">
     <h1>Gestion Utilisateurs</h1>
    <ul class="nav nav-tabs" id="myTab">
        <li><a href="#inactif" data-toggle="tab">Inactifs</a></li>
        <li><a href="#actif" data-toggle="tab">Actifs</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="inactif">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Pseudo</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inactifs as $key => $value) : ?>
                    <tr>
                        <td><?php echo $inactifs[$key]['pseudo'] ?></td>
                        <td><?php echo $inactifs[$key]['email'] ?></td>
                        <td><a href="authorize_admin.php?id=<?php echo $inactifs[$key]['id']; ?>" class="btn btn-success">Autoriser</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="tab-pane" id="actif">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Pseudo</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($actifs as $key => $value) : ?>
                    <tr>
                        <td><?php echo $actifs[$key]['pseudo'] ?></td>
                        <td><?php echo $actifs[$key]['email'] ?></td>
                        <td><?php if($actifs[$key]['group'] == 'admin') : ?>Admin<?php else : ?><a href="deauthorize_admin.php?id=<?php echo $actifs[$key]['id']; ?>" class="btn btn-danger">Désactiver</a><?php endif; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>