<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas Input</title>
</head>
<body>
<center>
  <br><br>
<h1>Data Nilai Siswa</h1>
<br>
      <form method ="POST" action = "">
            <table>
              <tr>
                <td>Jumlah Siswa</td>
                <td>:</td>
                <td><input type="number" name="jml" ></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td><br><input type="submit" name="proses" value="Proses"></td>
              </tr>
        </table>
      </form>
    <?php
      if (isset($_POST ['proses'])){
        $jml = $_POST ['jml'];


            for($i = 1; $i <= $jml; $i++){
              echo '<form action="data.php" method="POST">
              <table>
                <tr>
                  <td></td>
                  <td></td>
                  <td>Data Siswa Ke - '.$i.'</td>
                </tr>
                <tr>
                  <td>NIS</td>
                  <td>:</td>
                  <td><input type=text name=nis[] value=></td>
                </tr>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td><input type=text name=nama[] value=></td>
                </tr>
                <tr>
                  <td>Kelas</td>
                  <td>:</td>
                  <td><input type=text name=kelas[] value=></td>
                </tr>
                <tr>
                  <td>Bahasa Indonesia</td>
                  <td>:</td>
                  <td><input type=number name=bi[] value=></td>
                </tr>
                <tr>
                  <td>Bahasa Inggris</td>
                  <td>:</td>
                  <td><input type=number name=bin[] value=></td>
                </tr>
                <tr>
                  <td>Matematika</td>
                  <td>:</td>
                  <td><input type=number name=mtk[] value=></td>
                </tr>
                <tr>
                  <td>Produktif</td>
                  <td>:</td>
                  <td><input type=number name=pr[] value=></td>
                </tr>
                <tr>
                  <td>Rata rata</td>
                  <td>:<td>
                  <td><input typer=number name=pr[] value=></td>
                </tr>
                  <td>Grade</td>
                  <td>:<td>
                  <td><input typer=number name=pr[] value=></td>
                </tr>';

        {
          echo '<tr>
            <td></td>
            <td></td>
            <td><input type=submit name=simpan value="Simpan"</td>
            </tr>
          </table>
        </form>';
    }
?>
</center>
</body>
</html>