<?php
require base_path("views/partials/header.php");
require base_path("views/partials/nav.php");
require base_path("views/partials/banner.php");
?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p><?= htmlspecialchars($note['body']) ?></p>

        <form method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?=$note['id']?>">
            <button class="text-red-500 text-xl mt-3 hover:underline">Delete</button>
        </form>
    </div>
</main>

<?php require base_path("views/partials/footer.php"); ?>