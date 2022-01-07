let mainTable = document.querySelector('.mainTable')
// views
let tableDataView = document.querySelector('.table-data-view')
let inputAddDataBaseView = document.querySelector('.input-add-database-view')
let editAddDataBaseView = document.querySelector('.edit-add-database-view')
// buttons
let headerBtnData = document.querySelector('.header-btn-data')
let headerBtnAdd = document.querySelector('.header-btn-add')
let sendBtn = document.querySelector('.send-btn')
let editFormBtn = document.querySelector('.edit-btn-form')

// inputs
let brPonudeInput = document.querySelector('.br-ponude-input')
let brPonudeKelpInput = document.querySelector('.br-ponude-kelp-input')
let brPonudeKeltInput = document.querySelector('.br-ponude-kelt-input')
let snagaInput = document.querySelector('.snaga-input')
let primarInput = document.querySelector('.primar-input')
let sekundarInput = document.querySelector('.sekundar-input')
let regulacijaInput = document.querySelector('.regulacija-input')
let spregaInput = document.querySelector('.sprega-input')
let ukInput = document.querySelector('.uk-input')
let hladnjenjeInput = document.querySelector('.hladnjenje-input')
let zemljaInput = document.querySelector('.zemlja-input')
let kupacInput = document.querySelector('.kupac-input')
let komercijalistaInput = document.querySelector('.komercijalista-input')
let datumInput = document.querySelector('.datum-input')
let projektantInput = document.querySelector('.projektant-input')
let napomenaInput = document.querySelector('.napomena-input')
// edit inputs
let ebrPonudeInput = document.querySelector('.ebr-ponude-input')
let ebrPonudeKelpInput = document.querySelector('.ebr-ponude-kelp-input')
let ebrPonudeKeltInput = document.querySelector('.ebr-ponude-kelt-input')
let esnagaInput = document.querySelector('.esnaga-input')
let eprimarInput = document.querySelector('.eprimar-input')
let esekundarInput = document.querySelector('.esekundar-input')
let eregulacijaInput = document.querySelector('.eregulacija-input')
let espregaInput = document.querySelector('.esprega-input')
let eukInput = document.querySelector('.euk-input')
let ehladnjenjeInput = document.querySelector('.ehladnjenje-input')
let ezemljaInput = document.querySelector('.ezemlja-input')
let ekupacInput = document.querySelector('.ekupac-input')
let ekomercijalistaInput = document.querySelector('.ekomercijalista-input')
let edatumInput = document.querySelector('.edatum-input')
let eprojektantInput = document.querySelector('.eprojektant-input')
let enapomenaInput = document.querySelector('.enapomena-input')

let index = null

// display views
headerBtnData.addEventListener('click', displayDataView)
function displayDataView() {
    inputAddDataBaseView.style.display = "none"
    tableDataView.style.display = "block"
    editAddDataBaseView.style.display = "none"
}
headerBtnAdd.addEventListener('click', function() {
    tableDataView.style.display = "none"
    inputAddDataBaseView.style.display = "block"
    editAddDataBaseView.style.display = "none"
})

// editbtn
editFormBtn.addEventListener('click', changeData)

function displayEditFormView() {
    tableDataView.style.display = "none"
    inputAddDataBaseView.style.display = "none"
    editAddDataBaseView.style.display = "block"

    index = this.getAttribute("data-index");
    let currentData = db[index]

    ebrPonudeInput.value = currentData.brPonude
    ebrPonudeKelpInput.value = currentData.brPonudeKelp
    ebrPonudeKeltInput.value = currentData.brPonudeKelt
    esnagaInput.value = currentData.snaga
    eprimarInput.value = currentData.primar
    esekundarInput.value = currentData.sekundar
    eregulacijaInput.value = currentData.regulacija
    espregaInput.value = currentData.sprega
    eukInput.value = currentData.uk
    ehladnjenjeInput.value = currentData.hladnjenje
    ezemljaInput.value = currentData.zemlja
    ekupacInput.value = currentData.kupac
    ekomercijalistaInput.value = currentData.komercijalista
    edatumInput.value = currentData.datum
    eprojektantInput.value = currentData.projektant
    enapomenaInput.value = currentData.napomena
}

function changeData() {
    let chnagedData = {
        brPonude : ebrPonudeInput.value,
        brPonudeKelp : ebrPonudeKelpInput.value,
        brPonudeKelt : ebrPonudeKeltInput.value,
        snaga : esnagaInput.value,
        primar : eprimarInput.value,
        sekundar : esekundarInput.value,
        regulacija : eregulacijaInput.value,
        sprega : espregaInput.value,
        uk : eukInput.value,
        hladnjenje : ehladnjenjeInput.value,
        zemlja : ezemljaInput.value,
        kupac : ekupacInput.value,
        komercijalista : ekomercijalistaInput.value,
        datum : edatumInput.value,
        projektant : eprojektantInput.value,
        napomena : enapomenaInput.value
    }
    db[index] = chnagedData
    createTable()
    displayDataView()
}


sendBtn.addEventListener('click', function() {
    let newData = {
        brPonude : brPonudeInput.value,
        brPonudeKelp : brPonudeKelpInput.value,
        brPonudeKelt : brPonudeKeltInput.value,
        snaga : snagaInput.value,
        primar : primarInput.value,
        sekundar : sekundarInput.value,
        regulacija : regulacijaInput.value,
        sprega : spregaInput.value,
        uk : ukInput.value,
        hladnjenje : hladnjenjeInput.value,
        zemlja : zemljaInput.value,
        kupac : kupacInput.value,
        komercijalista : komercijalistaInput.value,
        datum : datumInput.value,
        projektant : projektantInput.value,
        napomena : napomenaInput.value
    }

    brPonudeInput.value = ""
    brPonudeKelpInput.value = ""
    brPonudeKeltInput.value = ""
    snagaInput.value = ""
    primarInput.value = ""
    sekundarInput.value = ""
    regulacijaInput.value = ""
    spregaInput.value = ""
    ukInput.value = ""
    hladnjenjeInput.value = ""
    zemljaInput.value = ""
    kupacInput.value = ""
    komercijalistaInput.value = ""
    datumInput.value = ""
    projektantInput.value = ""
    napomenaInput.value = ""

    db.push(newData)
    createTable()
    displayDataView()
})


function createTable() {
    let text = ""
    for (let i = 0; i < db.length; i++) {
        text += `
        <tr>
            <td>${db[i].brPonude}</td>
            <td>${db[i].brPonudeKelp}</td>
            <td>${db[i].brPonudeKelt}</td>
            <td>${db[i].snaga}</td>
            <td>${db[i].primar}</td>
            <td>${db[i].sekundar}</td>
            <td>${db[i].regulacija}</td>
            <td>${db[i].sprega}</td>
            <td>${db[i].uk}</td>
            <td>${db[i].hladnjenje}</td>
            <td>${db[i].zemlja}</td>
            <td>${db[i].kupac}</td>
            <td>${db[i].komercijalista}</td>
            <td>${db[i].datum}</td>
            <td>${db[i].projektant}</td>
            <td>${db[i].napomena}</td>
            <td class="edit-btn-body"><button class="edit-btn" data-index="${i}">Edit</button></td>
        </tr>
        `        
        mainTable.innerHTML = text
        let editBtns = document.querySelectorAll('.edit-btn')
        for (let i = 0; i < editBtns.length; i++) {
            editBtns[i].addEventListener('click', displayEditFormView)            
        }
    }
}

console.log("radi sve");