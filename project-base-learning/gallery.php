<?php include("./template/header.php") ?>

<section class="p-10">
    <div class="bg-base-200 min-h-[800px] p-5">
        <h3 class="text-3xl font-bold text-center mb-5">Gallery</h3>
        <form enctype="multipart/form-data" method="post" action="./gallery-process.php" class="w-full">
            <div class="flex items-center justify-center gap-5">
                <input multiple name="photoes[]" type="file" class="file-input file-input-bordered w-full " />
            </div>

            <button class="btn w-full btn-neutral mt-5">Submit</button>

        </form>
        <div>
            <?php

            $photoes = scandir('photo');

            ?>

            <div class="grid grid-cols-2 gap-3 mt-5">
                <?php foreach ($photoes as $photo) : ?>
                    <img src="./photo/<?=$photo ?>" alt="">
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</section>

<?php include("./template/footer.php") ?>