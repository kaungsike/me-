<?php include("./template/header.php") ?>
<section>
    <div class="hero bg-base-200 h-[800px]">
        <div class="hero-content text-center">
            <?php
            echo "<pre>";

            // print_r($_POST);

            $apis = json_decode(file_get_contents('http://forex.cbm.gov.mm/api/latest'))->rates;

            $amount = $_POST['amount'];
            $from = $_POST['from'];
            $to = $_POST['to'];

            $fromCurrency  = $apis->$from;
            $toCurrency  = $apis->$to;


            $fromRate = (float) str_replace(",", '', $fromCurrency);
            $toRate = (float) str_replace(",", '', $toCurrency);

            $result = round(($amount * $fromRate) / $toRate,3);

            $fileName = 'exchange-records.txt';

            if(!is_file($fileName)){
                touch($fileName);
            }

            $fileStream = fopen($fileName,'a');

            fwrite($fileStream,$amount.' '.$from.' = '.$result.' '.$to."\n");

            fclose($fileStream);

            echo '<p class="text-3xl font-bold">'.$result.' '. $to. '</p>';
            ?>

            

        </div>
        <div class="mt-[120px] flex items-center justify-center gap-5">
            <a href="./exchange.php" class="btn w-full btn-neutral mt-5">Calculat Again</a>
            <a href="./exchange-records.php" class="btn w-full btn-neutral mt-5">Record</a>
        </div>
    </div>
</section>
<?php include("./template/footer.php") ?>