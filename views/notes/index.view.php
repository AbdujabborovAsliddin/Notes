<?php
require base_path("views/partials/header.php");
require base_path("views/partials/nav.php");
require base_path("views/partials/banner.php");
?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">


        <p class="text-yellow-500 text-xl">
            <?php if (!empty($errors['body'])) {
                echo $errors['body'] . " :(";
            }
            ?>
        </p>

        <ul>
            <?php foreach ($notes as $note) : ?>
                <li class="list-none">
                    <a href="/note?id=<?= $note['id'] ?>" class="text-lg text-blue-500 hover:underline">
                        <?= htmlspecialchars($note['body']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <p>
            <a style="display: flex;" class="text-blue-600 hover:underline mt-6" href="/notes/create"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>Create Note...</a>
        </p>
    </div>
</main>

<?php require base_path("views/partials/footer.php"); ?>