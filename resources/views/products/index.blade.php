<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #8FBC8F;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        a {
            text-decoration: none;
            background-color: #e74c3c;
            color: #f9f9f9;
            margin-right: 10px;
            transition: color 0.3s ease;
            border: 1px solid #3498db;
            padding: 6px 12px;
            border-radius: 4px;
        }

        a:hover {
            color: #2980b9;
            background-color: #3498db;
            border-color: #2980b9;
        }

        table {
            background-color: #f2b3b3;
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #e74c3c;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        button {
            padding: 8px 16px;
            background-color: #e74c3c;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
    <h1>Daftar Produk</h1>

    <a href="{{ route('admin.products.create') }}">Buat Produk</a>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->nama }}</td>
                <td>{{ $product->deskripsi }}</td>
                <td>{{ $product->harga }}</td>

                    <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
