<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Produk - Toko Mandiri</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f3f6fa;
            color: #333;
        }

        /* HEADER */
        header {
            background: linear-gradient(135deg, #0756a8, #0d6efd);
            color: white;
            padding: 20px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
        }

        header h2 {
            font-size: 24px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* BANNER */
        .banner {
            width: 86%;
            margin: 35px auto 25px;
            background: linear-gradient(135deg, #e31b23, #ff4148);
            color: white;
            padding: 35px;
            border-radius: 18px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12);
        }

        .banner h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .banner p {
            font-size: 16px;
        }

        /* CONTENT */
        .container {
            width: 86%;
            margin: auto;
        }

        .judul {
            margin-bottom: 18px;
        }

        .judul h2 {
            color: #0756a8;
            font-size: 24px;
            margin-bottom: 5px;
        }

        .judul p {
            color: #666;
        }

        /* TABLE */
        .table-wrapper {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.10);
            margin-bottom: 50px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #0756a8;
            color: white;
            padding: 17px 15px;
            text-align: left;
            font-size: 15px;
        }

        th:nth-child(2) {
            text-align: center;
        }

        td:nth-child(2) {
            text-align: center;
            width: 130px;
        }

        tr:hover {
            background: #f5f9ff;
        }

        /* FOTO PRODUK */
       .foto-produk {
        width: 90px;
        height: 90px;
        object-fit: contain;
        display: block;
        margin: auto;
        border-radius: 10px;
        background: white;
        }

        .kolom-no {
            text-align: center;
            font-weight: bold;
            color: #0756a8;
        }

        .nama-produk {
            font-weight: bold;
            color: #222;
        }

        .sku {
            color: #777;
            font-size: 14px;
        }

        .harga {
            color: #e31b23;
            font-weight: bold;
        }

        .stok {
            display: inline-block;
            background: #e8f7ee;
            color: #198754;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: bold;
        }

        /* FOOTER */
        footer {
            background: #073b73;
            color: white;
            text-align: center;
            padding: 25px;
            margin-top: 30px;
        }

        /* RESPONSIVE */
        @media (max-width: 800px) {
            .container,
            .banner {
                width: 94%;
            }

            table {
                min-width: 750px;
            }

            .table-wrapper {
                overflow-x: auto;
            }

            header {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <header>

        <h2>🛒 Toko Mandiri</h2>

        <nav>
            <a href="/">Dashboard</a>
            <a href="/produk-toko">Produk</a>
        </nav>

    </header>


    <!-- BANNER -->
    <section class="banner">

        <h1>Daftar Produk Toko Mandiri</h1>

        <p>
            Temukan berbagai kebutuhan sehari-hari
            dengan mudah dan praktis.
        </p>

    </section>


    <!-- CONTENT -->
    <main class="container">

        <div class="judul">

            <h2>Data Produk</h2>

            <p>
                Berikut merupakan daftar produk yang tersedia
                di Toko Mandiri.
            </p>

        </div>


        <!-- TABLE -->
        <div class="table-wrapper">

            <table>

                <thead>

                    <tr>

                        <th>No</th>

                        <th>Foto</th>

                        <th>Nama Produk</th>

                        <th>SKU</th>

                        <th>Harga</th>

                        <th>Stok</th>

                    </tr>

                </thead>


                <tbody>

                    @foreach ($produk as $index => $item)

                        <tr>

                            <td class="kolom-no">
                                {{ $index + 1 }}
                            </td>

                            <td>

                                @if ($item['sku'] == 'BR001')

                                    <img
                                        src="{{ asset('images/Beras.jpeg') }}"
                                        alt="{{ $item['nama'] }}"
                                        class="foto-produk"
                                    >

                                @elseif ($item['sku'] == 'MG001')

                                    <img
                                        src="{{ asset('images/Minyak.jpg') }}"
                                        alt="{{ $item['nama'] }}"
                                        class="foto-produk"
                                    >

                                @elseif ($item['sku'] == 'GL001')

                                    <img
                                        src="{{ asset('images/Gula.jpeg') }}"
                                        alt="{{ $item['nama'] }}"
                                        class="foto-produk"
                                    >

                                @elseif ($item['sku'] == 'TL001')

                                    <img
                                        src="{{ asset('images/Telur.jpeg') }}"
                                        alt="{{ $item['nama'] }}"
                                        class="foto-produk"
                                    >

                                @elseif ($item['sku'] == 'MI001')

                                    <img
                                        src="{{ asset('images/Mie.jpg') }}"
                                        alt="{{ $item['nama'] }}"
                                        class="foto-produk"
                                    >

                                @endif

                            </td>

                            <td class="nama-produk">
                                {{ $item['nama'] }}
                            </td>

                            <td class="sku">
                                {{ $item['sku'] }}
                            </td>

                            <td class="harga">
                                Rp{{ number_format($item['harga'], 0, ',', '.') }}
                            </td>

                            <td>

                                <span class="stok">
                                    Stok: {{ $item['stok'] }}
                                </span>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </main>


    <!-- FOOTER -->
    <footer>

        <p>
            &copy; 2026 Toko Mandiri - Sistem Point of Sale
        </p>

    </footer>

</body>

</html>