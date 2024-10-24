<?php include("./template/header.php") ?>

<section class="p-10">
    <div class="bg-base-200 h-[800px] p-5">
        <h3 class="text-3xl font-bold text-center mb-5">Area Calculator</h3>
        <form method="post" action="./area-process.php" class="w-full">
            <div class="flex items-center justify-center gap-5">
                <input required name="width" type="number" placeholder="Width" class="w-full input input-bordered" />
                <input required name="breadth" type="number" placeholder="Breadth" class="w-full input input-bordered" />
            </div>

            <button class="btn w-full btn-neutral mt-5">Calculate</button>

        </form>
    </div>

</section>

<?php include("./template/footer.php") ?>