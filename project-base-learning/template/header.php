<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./src/output.css">
</head>

<body>
    <main>

        <div class="drawer">
            <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
            <label for="my-drawer-3" aria-label="open sidebar" class="btn btn-square btn-ghost">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    class="inline-block h-6 w-6 stroke-current">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </label>

            <div class="drawer-side">
                <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
                <ul class="menu bg-base-200 min-h-full w-56 p-4">
                    <!-- Sidebar content here -->
                    <li><a href="../area.php">Area Calculator</a></li>
                    <li><a href="../exchange.php">Exchange Calculator</a></li>
                    <li><a href="../gallery.php">Gallery</a></li>
                </ul>
            </div>
        </div>

