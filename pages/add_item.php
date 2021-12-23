<?php
?>
<link rel="stylesheet" href="../css/index.css">
<body>
    <?php require '../components/header.php'?>
    <section class="add-item">
        <div class="add-item__title">Save / Editor form</div>
        <div>
            <form class="add-item__form" action="/" method="POST">
                <input type="text" name="id" value="<?= $_GET['id'] ?? null ?>" style="display: none">
                <span>Name</span>
                <input type="text" name="name" placeholder="name" value="<?= $_GET['name'] ?? '' ?>">
                <span>Phone</span>
                <input type="number" name="phone" placeholder="phone" value="<?= $_GET['phone'] ?? '' ?>">
                <span>Description</span>
                <textarea class="add-item__textarea" name="text" placeholder="description"><?= $_GET['text'] ?? '' ?></textarea>
                <input class="btn btn-edit" type="submit" value="send">
            </form>
        </div>
    </section>
  <?php require '../components/footer.php'?>
</body>

