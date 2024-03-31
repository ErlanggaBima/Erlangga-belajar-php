<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing Produk</title>
    <link rel="stylesheet" href="css/produk.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Pricing</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <form method="post" action="./logout.php">
                            <button type="submit" class="btn btn-link nav-link logout-btn" name="logout">Logout</button>
                        </form>
                    </li>
                </ul>     
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Listing Produk</h1>
        <div class="row">
        <?php
            // Daftar produk (misalnya, dari database)
            $produk = array(
                array(
                    'nama' => 'Pasta Gigi Sensitive',
                    'deskripsi' => 'Pasta gigi sensitive adalah produk perawatan gigi yang dirancang khusus untuk orang-orang dengan gigi sensitif. Dengan formula yang lembut namun efektif, pasta gigi ini membantu mengurangi sensitivitas gigi terhadap rangsangan seperti makanan panas atau dingin. Diformulasikan dengan bahan-bahan yang menenangkan dan menguatkan enamel gigi, produk ini membantu menjaga kesehatan gigi dan gusi tanpa menyebabkan iritasi.',
                    'gambar' => 'image/Sensitive.jpeg',
                    'harga' => 35000
                ),
                array(
                    'nama' => 'Sabun Dettol',
                    'deskripsi' => 'Dettol membantu menjaga kebersihan dan kesehatan kulit Anda. Dengan aroma segar dan perlindungan yang tahan lama, sabun Dettol menjadi pilihan populer bagi banyak orang untuk menjaga kebersihan sehari-hari dan melindungi kulit dari infeksi.',
                    'gambar' => 'image/Sabun Batang.jpeg',
                    'harga' => 15000
                ),
                array(
                    'nama' => 'Pengharum Ruangan',
                    'deskripsi' => 'Produk yang dirancang untuk memberikan aroma menyenangkan dan menyegarkan di dalam suatu ruangan. Mereka tersedia dalam berbagai bentuk, termasuk lilin aromaterapi, pengharum udara aerosol, wewangian elektrik, atau bahkan pengharum ruangan yang ditanamkan ke dalam AC. Pengharum ruangan dapat mengubah suasana ruangan, menciptakan rasa nyaman, meningkatkan suasana hati, atau menghilangkan bau yang tidak diinginkan.',
                    'gambar' => 'image/Pengharum Ruangan.jpeg',
                    'harga' => 20000
                ),
                array(
                    'nama' => 'Pembersih Muka Nivea',
                    'deskripsi' => 'Perawatan kulit yang membersihkan kulit wajah secara menyeluruh tanpa membuatnya kering atau teriritasi. Diformulasikan dengan bahan lembut namun efektif, produk ini mengangkat kotoran, minyak, dan sisa makeup untuk menjaga kulit tetap bersih, segar, dan lembut. Gunakan secara rutin untuk hasil optimal.',
                    'gambar' => 'image/Nivea.jpeg',
                    'harga' => 37000
                ),
                array(
                    'nama' => 'Sampo Head & Shoulder',
                    'deskripsi' => 'Dirancang khusus untuk membersihkan kulit kepala dan mengatasi masalah ketombe, sampo ini mengandung bahan-bahan yang membantu mengurangi iritasi dan ketombe. Dengan penggunaan teratur, Head and Shoulders membantu menjaga kulit kepala tetap sehat dan rambut bebas ketombe, memberikan hasil yang bersih dan segar',
                    'gambar' => 'image/Headandshoulder.jpeg',
                    'harga' => 52000
                ),
                array(
                    'nama' => 'Kondisioner Pantene',
                    'deskripsi' => 'Dirancang untuk melembutkan, melembabkan, dan menghaluskan rambut, serta mengurangi kusut dan kerusakan. Kondisioner juga dapat memberikan nutrisi tambahan kepada rambut, menjadikannya lebih mudah diatur, dan meningkatkan kilau alami.',
                    'gambar' => 'image/kondisioner.jpeg',
                    'harga' => 55000
                )
            );

            // Menampilkan setiap produk
            foreach ($produk as $item) {
                echo '<div class="col-md-4">';
                echo '<div class="produk">';
                echo '<h2>' . $item['nama'] . '</h2>'; // Menampilkan nama produk
                echo '<img src="' . $item['gambar'] . '" alt="' . $item['nama'] . '" class="gambar">';
                echo '<div class="deskripsi-harga">';
                echo '<p>Harga: Rp' . $item['harga'] . '</p>';
                echo '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeskripsi_' . str_replace(' ', '', $item['nama']) . '">Deskripsi</button>';
                echo '</div>'; // Menutup tag deskripsi-harga
                echo '</div>'; // Menutup tag produk
                echo '</div>'; // Menutup tag col-md-4

                // Modal untuk deskripsi produk
                echo '<div class="modal fade" id="modalDeskripsi_' . str_replace(' ', '', $item['nama']) . '" tabindex="-1" aria-labelledby="modalDeskripsiLabel_' . str_replace(' ', '', $item['nama']) . '" aria-hidden="true">';
                echo '<div class="modal-dialog">';
                echo '<div class="modal-content">';
                echo '<div class="modal-header">';
                echo '<h5 class="modal-title" id="modalDeskripsiLabel_' . str_replace(' ', '', $item['nama']) . '">Deskripsi ' . $item['nama'] . '</h5>';
                echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                echo '</div>';
                echo '<div class="modal-body">';
                // Deskripsi produk
                echo '<p>' . $item['deskripsi'] . '</p>';
                echo '</div>';
                echo '<div class="modal-footer">';
                echo '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        ?>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
