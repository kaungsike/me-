<?php include("./template/header.php") ?>

<?php

$apis = json_decode(file_get_contents('http://forex.cbm.gov.mm/api/latest'))->rates;

?>
<section class="p-10">
    <div class="bg-base-200 h-[800px] p-5">
        <h3 class="text-3xl font-bold text-center mb-5">Exchange Calculator</h3>
        <form method="post" action="./exchange-process.php" class="w-full">
            <div class="flex items-center justify-center gap-5">
                <input name="amount" type="number" placeholder="Amount" class="w-full input input-bordered" />
            </div>
            <div class="w-full flex items-center justify-center gap-5 mt-5">
                <select name="from" class=" select select-bordered w-full">
                    <option disabled selected>From</option>

                    <?php foreach ($apis as $key => $value) : ?>
                        <option value="<?= $key ?>"><?= $key ?></option>
                    <?php endforeach; ?>
                </select>
                <select name="to" class="select select-bordered w-full">
                    <option disabled selected>to</option>
                    <?php foreach ($apis as $key => $value) : ?>
                        <option value="<?= $key ?>"><?= $key ?></option>

                    <?php endforeach; ?>
                </select>
            </div>

            <button class="btn w-full btn-neutral mt-5">Calculate</button>

        </form>
    </div>

</section>

<?php include("./template/footer.php") ?>