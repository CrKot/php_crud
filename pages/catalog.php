<section>
  <?php
    require_once 'models/Model.php';
    use Model\Model;
    $Model = new Model;
    $items = $Model->getAll();

    if (!empty($_GET)) {
        $Model->delete($_GET['id']);
        header("Location: /index.php");
    }

    if (!empty($_POST)) {
        $_POST['id'] ?
          $Model->update($_POST['id'], $_POST['name'], $_POST['phone'], $_POST['text']) :
          $Model->save($_POST['name'], $_POST['phone'], $_POST['text']);
      $_POST = [];
      header("Location: /index.php");
    }
  ?>
    <section class="catalog">
        <?php foreach ($items as $item):
        ['id' => $id, 'name' => $name, 'phone' => $phone, 'text' => $text ] = $item;
        ?>
          <div class="catalog__cart">
              <span class="catalog__field-name">Name</span>
              <div>
                <?= $name ?>
              </div>
              <span class="catalog__field-name">Phone</span>
              <div>
                <?= $phone ?>
              </div>
              <span class="catalog__field-name">Text</span>
              <div>
                <?= $text ?>
              </div>
              <div class="catalog__btn-block">
                    <a class="btn btn-edit" href="/pages/add_item.php?<?= http_build_query($item) ?>">edit</a>
                    <a class="btn btn-delete" href="/?id=<?= $id ?>">delete</a>
              </div>
          </div>
      <?php endforeach; ?>
    </section>
</section>
