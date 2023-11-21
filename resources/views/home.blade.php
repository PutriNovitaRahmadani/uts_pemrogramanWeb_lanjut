<!DOCTYPE html>
<html>
<head>
    <title>Flower Shop - Home</title>
    <style>
        /* Reset style untuk elemen bawaan browser */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Gaya untuk tag <body> */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #DCDCDC;
            margin: 0;
            padding: 0;
        }

        /* Gaya untuk tag <header> */
        header {
            background-color: 	#8FBC8F;
            color: #fff;
            text-align: center;
            padding: 60px 0;
        }

        header h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        header p {
            font-size: 1.1em;
            margin-bottom: 30px;
        }

        header a {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            background-color: #FF0000;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        header a:hover {
            background-color: #555;
        }

        /* Gaya untuk tag <main> */
        main {
            padding: 40px;
        }

        /* Gaya untuk section produk unggulan */
        .featured-products {
            margin-bottom: 40px;
        }

        .featured-products h2 {
            font-size: 1.8em;
            margin-bottom: 20px;
        }

        .product {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
        }

        .product h3 {
            margin-bottom: 10px;
        }

        .product img {
            max-width: 100%;
            height: auto;
            margin-bottom: 15px;
        }

        .product p {
            margin-bottom: 10px;
        }

        .product a {
            display: inline-block;
            padding: 8px 16px;
            text-decoration: none;
            background-color: #f44336;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .product a:hover {
            background-color: #555;
        }

        /* Gaya untuk section tentang kami */
        .about-us {
            line-height: 1.6;
        }

        .about-us h2 {
            font-size: 1.8em;
            margin-bottom: 20px;
        }

        /* Gaya untuk tag <footer> */
        footer {
            text-align: center;
            background-color: #8FBC8F;
            color: #fff;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Floral Haven</h1>
        <p>Terima kasih telah datang di Floral Haven, di sini, kami menyajikan bunga-bunga segar untuk menghiasi momen spesial dalam hidup Anda.</p>
        <a href="{{ route('products') }}">Lihat Katalog Bunga Kami</a>
    </header>

    <main>
        <section class="featured-products">
            <h2>Produk Unggulan</h2>
            <!-- Tampilkan beberapa produk unggulan di sini -->
            <div class="product">
                <h3>Bunga Krisan</h3>
                <img src="https://th.bing.com/th/id/OIP.TOenQndfvw4-Qi20Ec8xlQHaEK?w=329&h=185&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="KRISAN">
                <p>Bunga yang tahan lama dan memiliki kelopak yang beragam. Tersedia dalam berbagai warna seperti putih, merah, kuning, dan ungu.</p>
                <p>Harga: $50.000</p>
                <a href="{{ route('products') }}">Lihat Detail</a>
            </div>
            <!-- Tambahkan produk lainnya jika diperlukan -->
        </section>

        <section class="about-us">
            <h2>Kenali Kami Lebih Dekat</h2>
            <p>Kami merupakan toko bunga lokal yang selalu berdedikasi untuk menghadirkan bunga-bunga berkualitas terbaik.</p>
            <p>Kami dengan senang hati menerima pesanan khusus untuk setiap momen spesial dalam hidup Anda. Percayakan kepada kami untuk menciptakan kesan yang tak terlupakan melalui rangkaian bunga yang istimewa.</p>

        </section>
    </main>

    <footer>
        <p>&copy; 2023 Floral Haven - Hak Cipta Dilindungi</p>
    </footer>
</body>
</html>
