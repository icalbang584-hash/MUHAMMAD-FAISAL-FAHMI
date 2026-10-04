<?php

$layanan = [
    [
        "nama" => "Paket Bore Up 63 free",
        "kategori" => "Bore Up",
        "harga" => 7000000,
        "slot" => 3
    ],
    [
        "nama" => "Paket Bore Up 70 free",
        "kategori" => "Bore Up",
        "harga" => 25000000,
        "slot" => 2
    ],
    [
        "nama" => "Porting & Polish",
        "kategori" => "Performance",
        "harga" => 850000,
        "slot" => 5
    ],
    [
        "nama" => "Mapping ECU (WAJIB ARACER)",
        "kategori" => "ECU",
        "harga" => 1200000,
        "slot" => 4
    ],
    [
        "nama" => "Dyno Test (PAKE DYNO MESIN JET TEMPUR RUSIA DI JAMIN BERAT)",
        "kategori" => "Testing",
        "harga" => 500000,
        "slot" => 6
    ],
    [
        "nama" => "Downsize FULL REQUEST",
        "kategori" => "Motorcycle Look",
        "harga" => 350000,
        "slot" => 0
    ]
];

$jumlahLayanan = count($layanan);

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>GHOMADE - Motor Performance Workshop</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<!-- =========================
     NAVBAR
========================= -->

<header>

    <nav class="navbar">

        <h2>GHOMADE</h2>

        <div class="menu">

            <a href="#">Home</a>

            <a href="#layanan">Layanan</a>

            <a href="#tentang">Tentang</a>

            <a href="#kontak">Kontak</a>

        </div>

    </nav>

</header>


<!-- =========================
     HERO
========================= -->

<section class="hero">

    <div class="hero-content">

        <p class="subtitle">
            MOTOR PERFORMANCE WORKSHOP
        </p>

        <h1>
            BORE UP MOTOR
            <br>
            TANPA CACICU
        </h1>

        <p>
            GHOMADE adalah bengkel spesialis
            bore-up dan performance motor untuk
            meningkatkan performa mesin dengan
            setting yang tepat.
        </p>

        <a href="#layanan" class="hero-button">
            Lihat Paket
        </a>

    </div>

</section>


<!-- =========================
     INFO LAYANAN
========================= -->

<section class="info">

    <p class="section-label">
        SERVICE MENU
    </p>

    <h2>
        Pilih Paket Performa
    </h2>

    <p>
        Tersedia
        <strong>
            <?php echo $jumlahLayanan; ?>
        </strong>
        layanan performance.
    </p>

</section>


<!-- =========================
     DAFTAR LAYANAN
========================= -->

<main id="layanan">

    <div class="service-grid">

        <?php foreach ($layanan as $service): ?>

            <article class="service-card">

                <span class="category">

                    <?php echo $service["kategori"]; ?>

                </span>


                <h3>

                    <?php echo $service["nama"]; ?>

                </h3>


                <!-- =========================
                     DISKON
                ========================= -->

                <?php if ($service["harga"] >= 1000000): ?>

                    <?php

                    $diskon = 10;

                    $hargaDiskon =
                        $service["harga"]
                        -
                        ($service["harga"] * $diskon / 100);

                    ?>


                    <p class="harga-normal">

                        Rp
                        <?php

                        echo number_format(
                            $service["harga"],
                            0,
                            ',',
                            '.'
                        );

                        ?>

                    </p>


                    <span class="badge">

                        PROMO <?php echo $diskon; ?>%

                    </span>


                    <h4>

                        Rp
                        <?php

                        echo number_format(
                            $hargaDiskon,
                            0,
                            ',',
                            '.'
                        );

                        ?>

                    </h4>


                <?php else: ?>


                    <h4>

                        Rp
                        <?php

                        echo number_format(
                            $service["harga"],
                            0,
                            ',',
                            '.'
                        );

                        ?>

                    </h4>


                <?php endif; ?>


                <!-- =========================
                     CEK SLOT
                ========================= -->

                <?php if ($service["slot"] > 0): ?>

                    <p class="tersedia">

                        ● Slot tersedia:
                        <?php echo $service["slot"]; ?>

                    </p>


                    <button>

                        Booking Sekarang

                    </button>


                <?php else: ?>


                    <p class="habis">

                        ● Slot penuh

                    </p>


                    <button disabled>

                        Booking Ditutup

                    </button>


                <?php endif; ?>


            </article>

        <?php endforeach; ?>

    </div>

</main>


<!-- =========================
     TENTANG GHOMADE
========================= -->

<section id="tentang" class="about">

    <p class="section-label">
        ABOUT US
    </p>

    <h2>
        GHOMADE
    </h2>

    <p>

        GHOMADE merupakan bengkel spesialis
        performance motor yang fokus pada
        bore-up, porting polish, ECU tuning,
        dan peningkatan performa mesin.

    </p>

</section>


<!-- =========================
     KONTAK
========================= -->

<section id="kontak" class="contact">

    <h2>
        Booking Service
    </h2>

    <p>

        Konsultasikan kebutuhan bore-up
        motor kamu dengan mekanik GHOMADE.

    </p>

    <button>

        Hubungi Bengkel

    </button>

</section>


<!-- =========================
     FOOTER
========================= -->

<footer>

    <p>
        © 2026 GHOMADE
    </p>

    <p>
        Performance • Precision • Power
    </p>

</footer>


</body>

</html>