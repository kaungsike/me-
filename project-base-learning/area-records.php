<?php include("./template/header.php") ?>

<section class="p-10">
    <div class="bg-base-200 h-[800px] p-5">
        <h3 class="text-3xl font-bold text-center mb-5">Your Records</h3>
        <div class="w-full border overflow-y-scroll bg-white h-[80%] flex flex-col items-center p-5">
            <?php

            $fileName =  'area-record.txt';

            if (!is_file($fileName)) {
                touch($fileName);
            }

            $records = fopen($fileName, 'r');

            while (!feof($records)) : ?>

                <p class="text-xl font-bold"><?= fgets($records); ?></p>

            <?php endwhile; ?>

        </div>
        <div class="flex items-center justify-center gap-5">
        <a href="./area.php" class="btn btn-neutral mt-5">Calculat Again</a>
        <!-- <a href="./area-records.php" class="btn  btn-neutral mt-5">Record</a> -->
        </div>



    </div>

</section>

<?php include("./template/footer.php") ?>