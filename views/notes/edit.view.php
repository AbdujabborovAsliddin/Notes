 <?php
require base_path("views/partials/header.php");
require base_path("views/partials/nav.php");
require base_path("views/partials/banner.php");

?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">



        <form method="POST" action="/note">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?=$note['id']?>">
            <div class="mb-2">
                <label for="body" class="flex block ml-1 mt-1 text-xl font-medium text-gray-600">Add Note <span>..</span> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                    </svg>
                </label>
                <textarea required id="comment" name="body" rows="4" class="mt-2 p-2 w-1/3 border rounded-md focus:outline-none focus:ring focus:border-blue-300"><?= $note['body']?></textarea>
            </div>
            <?php if (isset($errors['body'])) : ?>
                <p class="text-red-500 text-xs mb-3"><?= $errors['body'] ?></p>
            <?php endif; ?>

            <div class="flex items-center justify-start gap-5">


                <button type="submit" class="py-2 px-5 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">Save</button>
                <a href="/notes" class="py-2 px-3 bg-yellow-500 text-white rounded-md hover:bg-red-400 cursor-pointer focus:outline-none focus:ring focus:border-red-300">Cancel</a>


            </div>

        </form>



    </div>
</main>

<?php require base_path("views/partials/footer.php"); ?>