<script>

    let searchField = document.querySelector('#input_src');
    let mainTable = document.querySelector('.mainTable');
    

    searchField.addEventListener('input', function(e) {
        if (this.value.length > 2) {
            let term = this.value;
            let fakeForm = new FormData();
                fakeForm.append('info', term);
            let xml = new XMLHttpRequest();
            xml.open('POST', 'api.php');
            xml.onreadystatechange = function() {
                if (xml.readyState === 4 && xml.status === 200) {
                   displayProjektant(JSON.parse(xml.responseText));
                }
            }
            xml.send(fakeForm);
        }
    })

    function displayProjektant(data) {
        let text = "";
        data.forEach(vision => {
            text += `
                <tr>
                    <th>${vision.id}</th>
                    <th>${vision.brojPonudeKeb}</th>
                    <th>${vision.brojPonudeKelp}</th>
                    <th>${vision.brojPonudeKelt}</th>
                    <th>${vision.snaga}</th>
                    <th>${vision.primar}</th>
                    <th>${vision.sekundar}</th>
                    <th>${vision.regulacija}</th>
                    <th>${vision.sprega}</th>
                    <th>${vision.uk}</th>
                    <th>${vision.hladjenje}</th>
                    <th>${vision.zemlja}</th>
                    <th>${vision.kupac}</th>
                    <th>${vision.komercijalista}</th>
                    <th>${vision.datum}</th>
                    <th>${vision.projektant}</th>
                    <th>${vision.napomena}</th>
                    <th><a class="del-btn" href="delete.php?id=<?php echo $info['id'] ?>">X</a></th>
                </tr>
            `
        })
        mainTable.innerHTML = text;
        
    }
</script>