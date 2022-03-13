<?php 
    require "base_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Kolektor Etra Data</title>
</head>
<body>

    <div class="top-header">
            <button class="header-btn-data">Database</button>
            <button class="header-btn-add">Add Database</button>
    </div>
    
    <div class="table-data-view">
        <div class="container">
            <div class="header-view">
                <h1>DATABASE</h1>
                <div class="filters">
                    <input id="input_src" class="input-search" type="search" placeholder="pretraga" aria-label="Search">
                </div>
            </div>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>ID</th>
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
                        <th>DELETE</th>
                    </tr>
                </thead>
                <tbody class="mainTable">
                    <tr>
                        <?php foreach($result as $info): ?>
                            <th><?php echo $info['id'] ?></th>
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
                            <th><a class="del-btn" href="delete.php?id=<?php echo $info['id'] ?>">X</a></th>
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
    <?php 
        require "user_script.php";
    ?>
    <script src="./script.js"></script>
</body>
</html>
