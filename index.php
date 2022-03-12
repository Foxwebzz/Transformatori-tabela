<?php 
    require "base_connect.php";

    $numRang = range(1,16);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>

    <header class="header-bar">
        <div class="container">
            <button class="header-btn-data">Database</button>
            <button class="header-btn-add">Add Database</button>
        </div>
    </header>
    
    <div class="table-data-view">
        <div class="container">
            <h1>DATABASE</h1>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Broj ponude KEB</th>
                        <th>Broj ponude KEL (P)</th>
                        <th>Broj ponude KEL (T)</th>
                        <th>Snaga (kVA)</th>
                        <th>Primar (kV)</th>
                        <th>Sekundar (kV)</th>
                        <th>Regulacija</th>
                        <th>Sprega</th>
                        <th>uk (%)</th>
                        <th>Hladjenje</th>
                        <th>Zemlja</th>
                        <th>Kupac</th>
                        <th>Komercijalista</th>
                        <th>Datum</th>
                        <th>Projektant</th>
                        <th>Napomena</th>
                        <!-- <th>EDIT</th> -->
                    </tr>
                </thead>
                <tbody class="mainTable">
                    <tr>
                        <?php foreach($result as $info): ?>
                            <th><?php echo $info['brojPonudeKeb'] ?></th>
                            <th><?php echo $info['brojPonudeKelp'] ?></th>
                            <th><?php echo $info['brojPonudeKelt'] ?></th>
                            <th><?php echo $info['snaga'] ?></th>
                            <th><?php echo $info['primar'] ?></th>
                            <th><?php echo $info['sekundar'] ?></th>
                            <th><?php echo $info['regulacija'] ?></th>
                            <th><?php echo $info['sprega'] ?></th>
                            <th><?php echo $info['uk'] ?></th>
                            <th><?php echo $info['hladjenje'] ?></th>
                            <th><?php echo $info['zemlja'] ?></th>
                            <th><?php echo $info['kupac'] ?></th>
                            <th><?php echo $info['komercijalista'] ?></th>
                            <th><?php echo $info['datum'] ?></th>
                            <th><?php echo $info['projektant'] ?></th>
                            <th><?php echo $info['napomena'] ?></th>
                        </tr>
                        <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>


    <div class="input-add-database-view">
        <div class="container">
            <h1>ADD DATABASE</h1>
            <div class="all-inputs">
                <form  class="formaa-main" action="insert.php" method="post" style="flex-direction: column; display: flex;">
                
                    <input class="br-ponude-input" name="brojPonudeKeb" type="text" placeholder="Broj Ponude KEB">
                    <input class="br-ponude-kelp-input" name="brojPonudeKelp" type="text" placeholder="Broj Ponude KEL (P)">
                    <input class="br-ponude-kelt-input" name="brojPonudeKelt" type="text" placeholder="Broj Ponude KEL (T)">
                    <input class="snaga-input" name="snaga" type="text" placeholder="Snaga (kVA)">
                    <input class="primar-input" name="primar" type="text" placeholder="Primar (kV)">
                    <input class="sekundar-input" name="sekundar" type="text" placeholder="Sekundar (kV)">
                    <input class="regulacija-input" name="regulacija" type="text" placeholder="Regulacija">
                    <input class="sprega-input" name="sprega" type="text" placeholder="Sprega">
                    <input class="uk-input" name="uk" type="text" placeholder="uk(%)">
                    <input class="hladnjenje-input" name="hladjenje" type="text" placeholder="Hladjenje">
                    <input class="zemlja-input" name="zemlja" type="text" placeholder="Zemlja">
                    <input class="kupac-input" name="kupac" type="text" placeholder="Kupac">
                    <input class="komercijalista-input" name="komercijalista" type="text" placeholder="Komercijalista">
                    <input class="datum-input" name="datum" type="date" placeholder="Datum">
                    <input class="projektant-input" name="projektant" type="text" placeholder="Projektant">
                    <input class="napomena-input" name="napomena" type="text" placeholder="Napomena">
                    <button  class="send-btn">Send</button>

                </form>
            </div>
        </div>
    </div>


    <!-- <div class="edit-add-database-view">
        <div class="container">
            <h1>EDIT DATABASE</h1>
            <div class="all-inputs">
                <input class="ebr-ponude-input" type="text" placeholder="Broj Ponude KEB">
                <input class="ebr-ponude-kelp-input" type="text" placeholder="Broj Ponude KEL (P)">
                <input class="ebr-ponude-kelt-input" type="text" placeholder="Broj Ponude KEL (T)">
                <input class="esnaga-input" type="text" placeholder="Snaga (kVA)">
                <input class="eprimar-input" type="text" placeholder="Primar (kV)">
                <input class="esekundar-input" type="text" placeholder="Sekundar (kV)">
                <input class="eregulacija-input" type="text" placeholder="Regulacija">
                <input class="esprega-input" type="text" placeholder="Sprega">
                <input class="euk-input" type="text" placeholder="uk(%)">
                <input class="ehladnjenje-input" type="text" placeholder="Hladjenje">
                <input class="ezemlja-input" type="text" placeholder="Zemlja">
                <input class="ekupac-input" type="text" placeholder="Kupac">
                <input class="ekomercijalista-input" type="text" placeholder="Komercijalista">
                <input class="edatum-input" type="date" placeholder="Datum">
                <input class="eprojektant-input" type="text" placeholder="Projektant">
                <input class="enapomena-input" type="text" placeholder="Napomena">
                <button class="edit-btn-form">Edit</button>
            </div>
        </div>
    </div> -->

    <script src="./script.js"></script>
</body>
</html>