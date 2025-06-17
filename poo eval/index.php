<?php
session_start();
?>
<style>
    form {
        display: flex;
        flex-direction: column;
        width: 300px;
        margin: 0 auto;
    }
</style>
<form action="result.php" method="post">    
    <select name="pet_select" id="">
        <option value="">Sélectionnez un animal</option>
        <option value="chien">Chien</option>
        <option value="chat">Chat</option>
        <option value="perroquet">Perroquet</option>
    </select>
    <input type="text" name="pet_name" placeholder="Nom de l'animal">
    <input type="text" name="pet_age" placeholder="Âge de l'animal">
    <input type="text" name="pet_weight" placeholder="Poids de l'animal">
    <input type="submit" value="Envoyer">
</form>
<?php
if(isset($_SESSION['post'])){
    echo '<pre>';
    print_r($_SESSION['post']);
    echo '</pre>';
}