var checkboxes = document.querySelectorAll("table input[type = 'checkbox']");
var checkboxall = document.querySelector("table input[id = 'all']");
checkboxall.addEventListener('change', function () {
  if (checkboxall.checked == true) {
    checkboxes.forEach(function(checkbox){
      checkbox.checked = true;
    });
  } else {
    checkboxes.forEach(function(checkbox){
      checkbox.checked = false;
    });  
  } 
});
function validate() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password-field").value;
    //Đặt 1 Admin ảo để đăng nhập quản trị
    if (username == "admin" && password == "123456") {
        swal({
            title: "",
            text: "Xin chào",
            icon: "success",
            close: true,
            button: false,
          });
        window.location = "home.php";
        return true;    
    }
    //Nếu không nhập gì mà nhấn đăng nhập thì sẽ báo lỗi
    if (username == "" && password == "") {
        swal({
            title: "",
            text: "Bạn chưa điền đầy đủ thông tin đăng nhập...",
            icon: "error",
            close: true,
            button: "Thử lại",
          });
         
        return false;
       
    }
    //Nếu không nhập mật khẩu mà đúng tài khoản 
    if (username == "admin" && password == "") {
        swal({
            title: "",
            text: "Bạn chưa nhập mật khẩu...",
            icon: "warning",
            close: true,
            button: "Thử lại",
          });
        return false;
    }
    //Nếu không nhập tài khoản sẽ báo lỗi
    if (username == null || username == "") {
        swal({
            title: "",
            text: "Tài khoản đang để trống...",
            icon: "warning",
            close: true,
            button: "Thử lại",
          });
        return false;
    }
    //Nếu không nhập mật khẩu sẽ báo lỗi
    if (password == null || password == "") {
        swal({
            title: "",
            text: "Mật khẩu đang để trống...",
            icon: "warning",
            close: true,
            button: "Thử lại",
          });
        return false;
    }
    //Nếu trống toàn bộ thì báo lỗi
    else {
        swal({
            title: "",
            text: "Sai thông tin đăng nhập hãy kiểm tra lại...",
            icon: "error",
            close: true,
            button: "Thử lại",
          });
        return true;
    };
}

/*  PHẦN NỘI DUNG KHÔI PHỤC MẬT KHẨU   */

/* =========================================== */
/* =========================================== */
//  function validate() {
//      var email = document.getElementById("email").value;
//     if (email == null || email == "") {
//        swal("Bạn Chưa Nhập Email", "Vui Lòng Kiểm Tra", "warning");
//        return false;
//    }
//}
function RegexEmail(emailInputBox) {
    var emailStr = document.getElementById(emailInputBox).value;
    var emailRegexStr = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    var isvalid = emailRegexStr.test(emailStr);
    if (!isvalid) {
        swal({
            title: "",
            text: "Bạn vui lòng nhập đúng định dạng email...",
            icon: "error",
            close: true,
            button: "Thử lại",
          });
        
        emailInputBox.focus;
    } else {
        swal({
            title: "",
            text: "Chúng tôi vừa gửi cho bạn email hướng dẫn đặt lại mật khẩu vào địa chỉ cho bạn",
            icon: "success",
            close: true,
            button: "Đóng",
          });
        emailInputBox.focus;
        window.location = "#";

    }
}
function checksession() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password-field").value;
  //Đặt 1 Admin ảo để đăng nhập quản trị
  if (username == "admin" && password == "123456") {
      swal({
          title: "",
          text: "Xin chào Võ Trường",
          icon: "success",
          close: true,
          button: false,
        });
      window.location = "home.php";
  }
}
table_rows = document.querySelectorAll("tbody tr");

function searchTable_tb_toanhoa() {
    let searchbuilding = document.querySelector(".search-input-building input");
    let selectedStatus = document.querySelector(".statustoanha .select-btn input");
    table_rows.forEach((row, i) => {
        if(selectedStatus.value == "Tất cả"){
            selectedStatus.value = "";      
        }
        let table_data = row.textContent.toLowerCase();
        let search_data = searchbuilding.value.toLowerCase();
        let status_data = selectedStatus.value.toLowerCase();
        // Kiểm tra xem dòng có chứa cả search_data và status_data hay không
        let shouldHide = table_data.indexOf(search_data) < 0 || 
        (status_data !== "" && row.querySelector(".trangthai_toanha span b").textContent.toLowerCase() !== status_data);
        row.classList.toggle('hide', shouldHide);
        row.style.setProperty('--delay', i / 25 + 's');
    });

    document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
        visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
    });
}
function searchTable_tb_can_phong() {
    const searchapartment = document.querySelector(".search-input-apartment input");
    const tb_toanha_selectedtoanha = document.querySelector(".toannhaOptionselect .select-btn input");
    const tb_toanha_selectedtang = document.querySelector(".tangOptionselect .select-btn input");
    const tb_toanha_selectedStatusthue = document.querySelector(".statusthueoption .select-btn input");
    const tb_toanha_selectedStatushoatdong = document.querySelector(".statushoatdongoption .select-btn input");

    table_rows.forEach((row, i) => {    
        if(tb_toanha_selectedtoanha.value == "Tất cả"){
            tb_toanha_selectedtoanha.value = "";      
        }
        if(tb_toanha_selectedtang.value == "Tất cả"){
            tb_toanha_selectedtang.value = "";      
        }
        if(tb_toanha_selectedStatusthue.value == "Tất cả"){
            tb_toanha_selectedStatusthue.value = "";      
        }
        if(tb_toanha_selectedStatushoatdong.value == "Tất cả"){
            tb_toanha_selectedStatushoatdong.value = "";      
        }
        let table_data = row.textContent.toLowerCase();
        let search_data = searchapartment.value.toLowerCase();
        let toanha_data = tb_toanha_selectedtoanha.value.toLowerCase();
        let tang_data = tb_toanha_selectedtang.value.toLowerCase();
        let statusthue_data = tb_toanha_selectedStatusthue.value.toLowerCase();
        let statushoatdong_data = tb_toanha_selectedStatushoatdong.value.toLowerCase();
        let ten_tang_span = row.querySelector(".ten_can_phong .ten_tang");
        let row_tang_data = ten_tang_span ? ten_tang_span.textContent.trim().toLowerCase() : "";
        if (row_tang_data === tang_data) {
            console.log("Có kết quả");
        }
        if(row.querySelector(".ten_tang").textContent.toLowerCase() == tang_data){
            console.log("có kết quả");
        }
        // Kiểm tra xem dòng có chứa cả search_data và status_data hay không
        let shouldHide = table_data.indexOf(search_data) < 0 || 
        (toanha_data !== "" && row.querySelector(".ten_can_phong .ten_toanha").textContent.toLowerCase() !== toanha_data) ||
        (tang_data !== "" && row_tang_data !== tang_data) ||
        (statusthue_data !== "" && row.querySelector(".trangthai_thue span b").textContent.toLowerCase() !== statusthue_data) ||
        (statushoatdong_data !== "" && row.querySelector(".trangthai_hoatdong span b").textContent.toLowerCase() !== statushoatdong_data);
        row.classList.toggle('hide', shouldHide);
        row.style.setProperty('--delay', i / 25 + 's');
    });

    document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
        visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
    });
    displayPage(itemParPage); // Hiển thị lại trang hiện tại
    pageGenerator(itemParPage); // Tạo lại phân trang
    getElement(itemParPage); // Lấy lại các phần tử trong trang
}
function searchTable_tb_baotri_suachua() {
  const searchapartment = document.getElementById("search-input-apartment");
  const tb_baotri_suachua_selectedtoanha = document.querySelector(".toannhaOptionselect .select-btn input");
  const tb_baotri_suachua_selectedphong  = document.querySelector(".phongOptionselect .select-btn input");
  const tb_baotri_suachua_selectedtoanha_text = document.querySelector(".toannhaOptionselect .select-btn span");
  const tb_baotri_suachua_selectedphong_text  = document.querySelector(".phongOptionselect .select-btn span");
  const tb_baotri_suachua_selectedstatus = document.querySelector(".statusOptionselect .select-btn input");
  const tb_baotri_suachua_searchstartDate = document.getElementById("startDate");
  const tb_baotri_suachua_searchoverdate = document.getElementById("overdate");

  table_rows.forEach((row, i) => {    
    if(tb_baotri_suachua_selectedstatus.value == "Tất cả"){
      tb_baotri_suachua_selectedstatus.value = "";      
    }
      let table_data = row.textContent.toLowerCase();
      let search_data = searchapartment.value.toLowerCase();
      let toanha_data = tb_baotri_suachua_selectedtoanha.value;
      let phong_data = tb_baotri_suachua_selectedphong.value;
      let status_data = tb_baotri_suachua_selectedstatus.value.toLowerCase();
      let start_date = tb_baotri_suachua_searchstartDate.value;
      let over_date = tb_baotri_suachua_searchoverdate.value;
      console.log(phong_data);
      if(toanha_data !== ""){
        toanha_data = tb_baotri_suachua_selectedtoanha_text.textContent.toLocaleLowerCase();
      }else{
        toanha_data = "";
      }
      if(phong_data !== ""){
        phong_data = tb_baotri_suachua_selectedphong_text.textContent.toLocaleLowerCase();     
      }else{
        phong_data = "";
      }
      let ngaybatdauText = row.querySelector(".ngayketthuc .ngaybatdau").value;
      let ngaybatdau = ngaybatdauText.split(" ")[0]; // Lấy phần ngày
      let ngayketthucText = row.querySelector(".ngayketthuc").textContent.trim();
      let ngaykethuc = ngayketthucText.split(" ")[0]; // Lấy phần ngày
      // Kiểm tra xem dòng có chứa cả search_data và status_data hay không
      let shouldHide = table_data.indexOf(search_data) < 0 ||
      (toanha_data !== "" && row.querySelector(".ten_toanha").textContent.toLowerCase() !== toanha_data) ||
      (phong_data !== "" && row.querySelector(".ten_phong").textContent.toLowerCase() !== phong_data) ||
      (start_date !== "" && ngaybatdau !== start_date) ||
      (over_date !== "" && ngaykethuc !== over_date);
      row.classList.toggle('hide', shouldHide);
      row.style.setProperty('--delay', i / 25 + 's');
  });

  document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
      visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
  });
}

var tbody = document.querySelector('tbody');
var pageUl = document.querySelector('.pagination');
var itemshow = document.querySelector('#itemperpage')
var tr = tbody.querySelectorAll("tr");
var emtyBox = [];
var index = 1;
var itemParPage = 5;


for(let i = 0; i<tr.length; i++){
  emtyBox.push(tr[i]);
}

itemshow.onchange = giveTrPerPage;
function giveTrPerPage(){
  itemParPage = Number(this.value);
  displayPage(itemParPage);
  pageGenerator(itemParPage);
  getElement(itemParPage);
}
function displayPage(limit){
  tbody.innerHTML = '';
  for(let i = 0; i<limit; i++){
    tbody.appendChild(emtyBox[i]);
  }
  const pageNum = pageUl.querySelectorAll('.list');
  pageNum.forEach(n => n.remove());
}
displayPage(itemParPage)
function pageGenerator(getem){
    const num_of_tr = emtyBox.length;
    if(num_of_tr <= getem){
      pageUl.style.display = 'none';
    }else{
      pageUl.style.display = 'flex';
      const num_of_page = Math.ceil(num_of_tr/getem);
      for(let i=1; i<=num_of_page; i++){
        const li = document.createElement('li');
        li.className = 'list';
        const a = document.createElement('a');
        a.href = "#";
        a.innerText = i;
        a.setAttribute('data-page', i)
        li.appendChild(a);
        pageUl.insertBefore(li, pageUl.querySelector('.next'));
      }
    }
}
pageGenerator(itemParPage);

let pageLink = pageUl.querySelectorAll('a');
let lastLink = pageLink.length - 2;

function pageRuner(page, item, lastPage, active){
  for(button of page){
    button.onclick = e =>{
      const page_num = e.target.getAttribute("data-page");
      const page_mover = e.target.getAttribute("id");
      if(page_num != null){
        index = page_num;
      }else{
        if(page_mover === "next"){
          index++;
          if(index >= lastPage){
            index = lastPage;
          }
        }else{
          index--;
          if(index <= 1){
            index = 1;
          }
        }
      }
      pageMaker(index, item, active)
    }
  }
}
var pageLi = pageUl.querySelectorAll('.list');
pageLi[0].classList.add("active");

pageRuner(pageLink, itemParPage, lastPage, pageLi);

function getElement(val){
  let pagelink = pageUl.querySelectorAll('a');
  let lastpage = pagelink.length - 2;
  let pageli = pageUl.querySelectorAll('.list');
  pageli[0].classList.add("active");
  pageRuner(pagelink, val, lastpage, pageli);
}

function pageMaker(index, item_per_page, activePage){
  const start = item_per_page * index;
  const end = start + item_per_page;
  const current_page = emtyBox.slice((start - item_per_page), (end - item_per_page));
  tbody.innerHTML = '';
  for(let i = 0; i<current_page.length; i++){
    let item = current_page[i];
    tbody.appendChild(item);
  }
  Array.from(activePage).forEach((e) =>{
    e.classList.remove('active')
  });
  activePage[index - 1].classList.add('active');
}
