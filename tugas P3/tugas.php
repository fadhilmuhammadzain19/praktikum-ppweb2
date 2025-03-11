<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Tugas 1 Data</title>
    <style>
        body {
            padding: 30px;
        }
    </style>
</head>
<body>
    <?php 
    $ns1 = ['id'=>1,'nim'=>'01101','nama'=>'Uulul','uts'=>80,'uas'=>70,'tugas'=>75]; 
    $ns2 = ['id'=>2,'nim'=>'01102','nama'=>'Satya','uts'=>90,'uas'=>94,'tugas'=>79]; 
    $ns3 = ['id'=>3,'nim'=>'01103','nama'=>'Eko','uts'=>70,'uas'=>82,'tugas'=>86]; 
    $ns4 = ['id'=>4,'nim'=>'01104','nama'=>'Rehan','uts'=>50,'uas'=>80,'tugas'=>67]; 

    $mhs = [$ns1, $ns2 , $ns3, $ns4]; 
    
    function grade($nilai)
    {
        if($nilai <= 100 ) { $grade = "A"; }
        if($nilai <  80 )  { $grade = "B"; }
        if($nilai <  70 )  { $grade = "C"; }
        if($nilai <  60 )  { $grade = "D"; }
        if($nilai <  50 )  { $grade = "E"; }

        return $grade;
    }

    ?>

    <h1>Daftar Nilai Mahasiswa</h1>
    <br>
    <table class="table table-striped table-dark" style="text-align: center;">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>UTS</th> 
                <th>UAS</th>
                <th>Tugas</th>
                <th>Nilai Akhir</th> 
                <th>Nilai Klkulasi</th> 
            </tr>
        </thead>
        <tbody style="text-align: center;">
            <?php 
                $nomer = 1;
                foreach ($mhs as $ns) {
                    echo '<tr>';
                    echo '<td>'.$nomer.'</td>'; 
                    echo '<td>'.$ns['nim'].'</td>'; 
                    echo '<td>'.$ns['nama'].'</td>'; 
                    echo '<td>'.$ns['uts'].'</td>'; 
                    echo '<td>'.$ns['uas'].'</td>'; 
                    echo '<td>'.$ns['tugas'].'</td>'; 
                    $nilai_akhir  = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3; 
                    echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>'; 
                    $nilai = ($ns['tugas']*0.1)+ ($ns['uts']*0.4)+ ($ns['uas']*0.5);
                    echo '<td>'.grade($nilai).'</td>';
                    echo '<tr/>'; 
                    $nomer++;
                }
            ?>
        </tbody>
    </table>
</body>
</html>