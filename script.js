// views
let tableDataView = document.querySelector('.table-data-view')
let inputAddDataBaseView = document.querySelector('.input-add-database-view')
let editAddDataBaseView = document.querySelector('.edit-add-database-view')
// buttons
let headerBtnData = document.querySelector('.header-btn-data')
let headerBtnAdd = document.querySelector('.header-btn-add')
let sendBtn = document.querySelector('.send-btn')
let editFormBtn = document.querySelector('.edit-btn-form')


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
