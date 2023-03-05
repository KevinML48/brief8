function add(id){
    var quantité = document.getElementById('prd_' + id ).value;
    location.href = "add.php?id=" + id + "&quantité=" + quantité; // ici on va venir recuperer la quantité
}