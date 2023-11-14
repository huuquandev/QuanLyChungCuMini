const search = document.querySelector(".search-input-building input");
const selectedStatus = document.querySelector(".selected-status select");
table_rows = document.querySelectorAll("tbody tr");

search.addEventListener('input', searchTable);
selectedStatus.addEventListener('change', searchTable);

function searchTable() {
    table_rows.forEach((row, i) => {
        let table_data = row.textContent.toLowerCase();
        let search_data = search.value.toLowerCase();
        let status_data = selectedStatus.value.toLowerCase();

        // Kiểm tra xem dòng có chứa cả search_data và status_data hay không
        let shouldHide = table_data.indexOf(search_data) < 0 || (status_data !== "" && row.querySelector(".trangthai_toanha span b").textContent.toLowerCase() !== status_data);
        row.classList.toggle('hide', shouldHide);
        row.style.setProperty('--delay', i / 25 + 's');
    });

    document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
        visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
    });
}


function addcounty(citisName, citisId, searchId, inputValue, Select, selectedValue) {
    let citis = document.getElementById(citisId);
    citis.innerHTML = "";
    let array = citisName;  
    array.forEach(data => {
        let isSelected = data == selectedValue ? "selected" : "";
        let li = `<li onclick="updateName(this, '${searchId}', '${citisName}', '${citisId}', '${inputValue}', '${Select}')" class="${isSelected}">${data}</li>`;
        citis.insertAdjacentHTML("beforeend", li);
    });
}

function updateName(selectedLi, input, citisName, citisId, inputValue, Select){
    const SelectW = document.querySelector(Select);
    selectBtnSearch = SelectW.querySelector('.select-btn');
    let selectInputSearch = document.getElementById(input);
    let selectInput = document.getElementById(inputValue);
    selectInputSearch.value = "";
    let array = [];
    array = citisName.split(",");
    SelectW.classList.remove('active');
    selectBtnSearch.firstElementChild.innerText = selectedLi.innerText;
    selectInput.value = selectedLi.innerText;
    selectBtnSearch.style.background = "#FFF";
    selectBtnSearch.style.border = "1px solid #b3b3b3";
    addcounty(array, citisId, input, inputValue, Select, selectedLi.innerText);
    var event = new Event('change');
    selectInput.dispatchEvent(event);
    
}


function initializeDropdowns(citisId, districtId, wardId, citisSearch, districtSearch, wardSearch, 
        inputcitisId, inputdistrictId, inputwardId, citisSelect, districtSelect, wardSelect, citisBtn, 
        districtBtn, wardBtn, citisIdValue, districtIdValue, wardIdValue) {
    // Lấy tham chiếu đến các phần tử select từ id
    var citis = document.getElementById(citisId);
    var districts = document.getElementById(districtId);
    var wards = document.getElementById(wardId);

    var cSearch = document.getElementById(citisSearch);
    var dSearch = document.getElementById(districtSearch);
    var wSearch = document.getElementById(wardSearch);

    var icitis = document.getElementById(inputcitisId);
    var idistricts = document.getElementById(inputdistrictId);
    var iwards = document.getElementById(inputwardId);

    const scitis = document.querySelector(citisSelect);
    const sdistrict = document.querySelector(districtSelect);
    const sward = document.querySelector(wardSelect);
            
    selectBtnSearch1 = scitis.querySelector(".select-btn");
    selectBtnSearch2 = sdistrict.querySelector(".select-btn");
    selectBtnSearch3 = sward.querySelector(".select-btn");

    // Tạo đối tượng Parameter chứa thông tin yêu cầu HTTP GET
    var Parameter = {
        url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
        method: "GET",
        responseType: "application/json",
    };

    // Gửi yêu cầu HTTP GET và nhận dữ liệu từ tệp JSON
    var promise = axios(Parameter);
    promise.then(function (result) {
        renderCity(result.data);
    });

    // Hàm renderCity để tạo các tùy chọn cho select tỉnh/thành phố
    function renderCity(data) {
        let citisName = [];
        for (const x of data) {
          citisName.push(x.Name);
        }
        addcounty(citisName, citisId, citisSearch, inputcitisId, citisSelect);
        selectBtnSearch1.addEventListener('click', () =>{
            scitis.classList.toggle('active');    
            cSearch.addEventListener('keyup', () => {
                let searchedVal = cSearch.value.toLowerCase();
    
                let filteredResults = citisName.filter(datacitis => {
                    return datacitis.toLowerCase().includes(searchedVal);
                });
                let arr = filteredResults.map(datacitis => `<li onclick="updateName(this, '${districtSearch}', '${citisName}', '${citisId}', '${inputcitisId}', '${citisSelect}')">${datacitis}</li>`).join("");
    
                citis.innerHTML = arr ? arr: `<p class="text-center">Không có dữ liệu</p>`;
            });
        });         

        icitis.addEventListener('change', function() {
                const result = data.filter(n => n.Name === this.value);
                let districtsName = [];
                // Tạo các tùy chọn cho select quận/huyện
                for (const k of result[0].Districts) {
                  districtsName.push(k.Name);
                }
                addcounty(districtsName, districtId, districtSearch, inputdistrictId, districtSelect);
            selectBtnSearch2.addEventListener('click', () =>{
                sdistrict.classList.toggle('active');   
                
                dSearch.addEventListener('keyup', () => {
                    let searchedVal = dSearch.value.toLowerCase();
        
                    let filteredResults = districtsName.filter(datacitis => {
                        return datacitis.toLowerCase().includes(searchedVal);
                    });
                    let arr = filteredResults.map(datadistricts => `<li onclick="updateName(this, '${citisSearch}', '${districtsName}', '${districtId}', '${inputdistrictId}', '${districtSelect}')">${datadistricts}</li>`).join("");
        
                    citis.innerHTML = arr ? arr: `<p class="text-center">Không có dữ liệu</p>`;
                });
            });
        }); 

        // // Xử lý khi select tỉnh/thành phố thay đổi
        // // Xử lý khi select quận/huyện thay đổi
        // districts.onchange = function () {
        //     const selectedDistrict = this.value;
        //     if (selectedDistrict !== '') {
        //         wards.length = 1;
        //         const dataCity = data.filter(n => n.Id === citis.value);
        //         const dataWards = dataCity[0].Districts.filter(n => n.Id === selectedDistrict)[0].Wards;
        //         // Tạo các tùy chọn cho select phường/xã
        //         for (const w of dataWards) {
        //             wards.options[wards.options.length] = new Option(w.Name, w.Id = w.Name);
        //             // if (w.Name == wardIdValue) {
        //             //     wards.value = wardIdValue;
        //             // }
        //         }
        //         wards.disabled = false;
        //     } else {
        //         wards.disabled = true;
        //         wards.innerHTML = '<option value="" hidden>Chọn phường xã</option>';
        //     }
        // };

        // // Kiểm tra nếu select tỉnh/thành phố đã có giá trị được chọn sẵn
        // if (citis.value !== null && citis.value !== '') {
        //     districts.disabled = false;
        //     const changeEvent = new Event('change');
        //     citis.dispatchEvent(changeEvent);
        //     const selectedDistrict = districts.value;

        //     if (selectedDistrict.value !== null && selectedDistrict.value !== '') {
        //         wards.disabled = false;
        //         // Gọi sự kiện onchange của quận/huyện để kích hoạt xử lý
        //         const changeEvent = new Event('change');
        //         districts.dispatchEvent(changeEvent);
        //     }
        // }
    }

    // // Xử lý sự kiện khi select tỉnh/thành phố thay đổi
    // citis.addEventListener('change', function () {
    //     var selectedProvince = this.value;
    //     if (selectedProvince !== "") {
    //         districts.disabled = false;
    //     } else {
    //         districts.disabled = true;
    //         districts.innerHTML = '<option value="" hidden>Chọn quận huyện</option>';
    //         wards.disabled = true;
    //         wards.innerHTML = '<option value="" hidden>Chọn phường xã</option>';
    //     }
    // });

    // // Xử lý sự kiện khi select quận/huyện thay đổi
    // districts.addEventListener('change', function () {
    //     var selectedDistrict = this.value;
    //     if (selectedDistrict !== "") {
    //         wards.disabled = false;
    //     } else {
    //         wards.disabled = true;
    //         wards.innerHTML = '<option value="" hidden>Chọn phường xã</option>>';
    //     }
    // });
    document.addEventListener('click', (event) => {
        const isClickscitis = scitis.contains(event.target);
        const isClicksdistrict = sdistrict.contains(event.target);
        const isClicksward = sward.contains(event.target);

        if (!isClickscitis) {
          scitis.classList.remove('active');
        }
        if(!isClicksdistrict){
            sdistrict.classList.remove('active');
        }
        if(!isClicksward){
            sward.classList.remove('active');
        }
    });
}
