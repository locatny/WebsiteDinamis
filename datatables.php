<div class="container">
    <h1>DataTables Page</h1>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Image</th> <!-- Kolom untuk Gambar -->
                <th>Item Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Condition</th>
                <th>Date Added</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="img\Cardigan outfit.jpg" alt="Cardigan" class="img-thumbnail" style="max-width: 100px;"></td> <!-- Menampilkan Gambar Cardigan outfit -->
                <td>Cardigan Outfit</td>
                <td>Fashion</td>
                <td>$100</td>
                <td>Good</td>
                <td>2024/10/30</td>
            </tr>
            <tr>
                <td><img src="img\RajutKoket.jpg" alt="Rajut Cantik" class="img-thumbnail" style="max-width: 100px;"></td> <!-- Menampilkan Gambar Rajut Koket -->
                <td>Rajut Cantik</td>
                <td>Fashion</td>
                <td>$200</td>
                <td>Good</td>
                <td>2024/11/04</td>
            </tr>
            <tr>
                <td><img src="img\KaosSantai.jpg" alt="Rok Feminime" class="img-thumbnail" style="max-width: 100px;"></td> <!-- Menampilkan Gambar Kaos Santai -->
                <td>Kaos Santai</td>
                <td>t-shirt</td>
                <td>$50</td>
                <td>Like New</td>
                <td>2024/10/30</td>
            </tr>
            <tr>
            <td><img src="img\RokFeminime.jpg" alt="Rok Feminime" class="img-thumbnail" style="max-width: 100px;"></td> <!-- Menampilkan Gambar Rok Feminime -->
                <td>Rok Feminime</td>
                <td>Dress</td>
                <td>$120</td>
                <td>Like New</td>
                <td>2024/10/28</td>
            </tr>
        </tbody>
    </table>
</div>

<link href="https://cdn.datatables.net/1.13.0/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.0/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

