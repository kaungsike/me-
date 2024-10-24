<?php include("./template/header.php") ?>
<section>
    <div class="hero bg-base-200 h-[800px]">
        <div class="hero-content text-center">
            <?php

            echo "<pre>";

            $width = $_POST['width'];
            $breadth = $_POST['breadth'];

            if (empty($width) || empty($breadth)) {
                echo '<p>Need data</p>';
                die("Neet to fill data");
            }
            $area = $width * $breadth;
            $fileName = 'area-record.txt';

            if (!is_file($fileName)) {
                touch($fileName);
            }

            $fileString = fopen($fileName, 'a');

            fwrite($fileString, "$width * $breadth = $area \n");

            fclose($fileString);

            echo '<p class="text-5xl font-bold">' . $area . '</p>';

            ?>
           
        </div>
        <div class="mt-[120px] flex items-center justify-center gap-5">
        <a href="./area.php" class="btn w-full btn-neutral mt-5">Calculat Again</a>
        <a href="./area-records.php" class="btn w-full btn-neutral mt-5">Record</a>
        </div>
    </div>
</section>
<?php include("./template/footer.php") ?>