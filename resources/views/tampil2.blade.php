<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<center>
    <h2> Data Mahasiswa </h2>
    <hr />
    <table class="table table-striped" style='width:50%;'>
        <thead>
            <tr>
                <th scope="row">1</th>
                <td>NIM</td>
                <td>{{$data['nim']}}</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">2</th>
                <td>NAMA</td>
                <td>{{$data['nama']}}</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>ALAMAT</td>
                <td>{{$data['alamat']}}</td>
            </tr>
        </tbody>
    </table>
</center>
<hr />
<center>
    <h2>TABEL MAHASISWA</h2>
    <hr>
    <table class="table table-striped" style='width:80%;'>
        <thead class="table table-dark table-hover">
            <tr>
                <th scope="col">NIM</th>
                <th scope="col">NAMA</th>
                <th scope="col">ALAMAT</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($dataAll as $datax) {
                echo "<tr>";

                echo "<td>";
                echo $datax->nim;
                echo "</td>";

                echo "<td>";
                echo $datax->nama;
                echo "</td>";

                echo "<td>";
                echo $datax->alamat;
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</center>