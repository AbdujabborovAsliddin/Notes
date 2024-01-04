<?php
require base_path("views/partials/header.php");
require base_path("views/partials/nav.php");
require base_path("views/partials/banner.php");
?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <p><?= htmlspecialchars($note['body']) ?></p>

            <footer class="mt-6 flex gap-5">

                <a class="py-2 px-5 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300" href="/note/edit?id=<?=$note['id']?>">Edit</a>
                <form method="post" action="/delete">
                    <input type="hidden" name="id" value="<?=$note['id']?>">
                    <button name="delete" type="submit" class="py-2 px-3 bg-gray-500 text-white rounded-md hover:bg-gray-600 focus:outline-none focus:ring focus:border-blue-300">Delete</button>
                </form>

            </footer>


        </div>
    </main>

<?php require base_path("views/partials/footer.php"); ?>