<?php
if(isset($_GET['id'])){
    $user = $_GET['id'];
    
    $query = "SELECT `user`.`pseudo`, `user`.`mail`, `user`.`register_date`, `role`.`name`
    FROM `user`
    INNER JOIN `role` ON `user`.`id_role` = `role`.`id`
    WHERE `user`.`id` = :idUser";
    $queryStatement = $mysqlClient->prepare($query);
    $queryStatement->bindValue(':idUser', $user);
    $queryStatement->execute();
    $response = $queryStatement->fetch();

    if(!$response){
        redirectToRoute('eval-16-04/EvalPhp/');
    }

    require_once (__DIR__ . '/../Views/userProfile.view.php');
}else {
    require_once (__DIR__ . '/404Controller.php');
}
