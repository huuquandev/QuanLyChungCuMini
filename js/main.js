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


// Khai báo các biến và thu thập các phần tử cần thiết
var tbody = document.querySelector('tbody');
var pageUl = document.querySelector('.pagination');
var itemshow = document.querySelector('#itemperpage');
var tr = tbody.querySelectorAll("tr");
var emtyBox = [];
var index = 1;
var itemParPage = 5;

for (let i = 0; i < tr.length; i++) {
  emtyBox.push(tr[i]);
}

itemshow.onchange = giveTrPerPage;

function giveTrPerPage() {
  itemParPage = Number(this.value);
  displayPage(itemParPage);
  pageGenerator(itemParPage);
  getElement(itemParPage);
}

function displayPage(limit) {
  tbody.innerHTML = '';
  for (let i = 0; i < limit; i++) {
    tbody.appendChild(emtyBox[i]);
  }
  const pageNum = pageUl.querySelectorAll('.list');
  pageNum.forEach(n => n.remove());
}

displayPage(itemParPage);

function pageGenerator(getem) {
  const num_of_tr = emtyBox.length;
  if (num_of_tr <= getem) {
    pageUl.style.display = 'none';
  } else {
    pageUl.style.display = 'flex';
    const num_of_page = Math.ceil(num_of_tr / getem);
    for (let i = 1; i <= num_of_page; i++) {
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

function pageRunner(page, item, lastPage, active) {
  pageUl.addEventListener('click', function(e) {
    if (e.target.tagName === 'A') {
      const page_num = e.target.getAttribute('data-page');
      const page_mover = e.target.getAttribute('id');

      if (page_num !== null) {
        index = parseInt(page_num);
      } else {
        if (page_mover === 'next') {
          index++;
        } else {
          index--;
        }
      }
      pageMaker(index, item, active);
    }
  });
}

var pageLi = pageUl.querySelectorAll('.list');
pageLi[0].classList.add("active");

pageRunner(pageLink, itemParPage, lastLink, pageLi);

function getElement(val) {
  let pagelink = pageUl.querySelectorAll('a');
  let lastpage = pagelink.length - 2;
  let pageli = pageUl.querySelectorAll('.list');
  pageli[0].classList.add("active");
  pageRunner(pagelink, val, lastpage, pageli);
}

function pageMaker(index, item_per_page, activePage) {
  const start = item_per_page * (index - 1);
  const end = start + item_per_page;
  const current_page = emtyBox.slice(start, end);

  tbody.innerHTML = '';
  for (let i = 0; i < current_page.length; i++) {
    let item = current_page[i];
    tbody.appendChild(item);
  }

  Array.from(activePage).forEach((e) => {
    e.classList.remove('active');
  });
  activePage[index - 1].classList.add('active');
}

  