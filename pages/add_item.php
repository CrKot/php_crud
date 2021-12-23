<?php
?>
<div>
    <?php require '../components/header.php'?>
    <section class="add-item">
        <div class="add-item__title">Save / Editor form</div>
        <div>
            <form action="/" method="POST">
                <input type="text" name="id" value="<?= $_GET['id'] ?? null ?>" style="display: none">
                <label>
                    Name
                    <input type="text" name="name" placeholder="name" value="<?= $_GET['name'] ?? '' ?>">
                </label>
                <label>
                    Phone
                    <input type="number" name="phone" placeholder="phone" value="<?= $_GET['phone'] ?? '' ?>">
                </label>
                <label>
                    Description
                    <textarea name="text" placeholder="description"><?= $_GET['text'] ?? '' ?></textarea>
                </label>
                <input class="btn btn-edit" type="submit">
            </form>
        </div>
    </section>
  <?php require '../components/footer.php'?>
</div>

