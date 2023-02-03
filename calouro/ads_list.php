<div class="ads-list">
<?php
include_once 'connect.php';

$result = mysqli_query($connection, 'SELECT * FROM espaco ORDER BY id DESC LIMIT 0,5');

while ($row = $result->fetch_array()) {
    $id = $row['id'];
    $descricao = $row['descricao'];
    $obs = $row['obs'];

    $sql_images = "SELECT * FROM imagens WHERE espaco_id=$id";
    $result_images = mysqli_query($connection, $sql_images);

    $space_images = [];

    if ($result_images->num_rows > 0) {
        while ($row_images = $result_images->fetch_array()) {
            $space_images[] = $row_images['file_name'];
        }
    } else {
        $space_images[0] = 'demo.jpg';
    }

    echo "
      <div class='ads-card'>
      <div class='ads-title'>
        " .
        $id .
        ' - ' .
        $descricao .
        "
      </div>

      <div class='ads-image'>
        <img src='uploads/" .
        $space_images[0] .
        "'
      </div>

      <div class='ads-obs'>
      " .
        $obs .
        "
      </div>

      <div class='ads-buttons'>
        <div class='ads-details-button'>
          <button>Ver mais</button>
          <a class='ads-details-link' href='image_insert_form.php?espaco_id=$id' id=''>adicionar imagem</a>
        </div>
      </div>
      </div>
    ";
}
?>

</div>