const search = document.querySelector(".search-input-building input");
const selectedStatus = document.querySelector(".statustoanha .select-btn input");
table_rows = document.querySelectorAll("tbody tr");

search.addEventListener('input', searchTable);
selectedStatus.addEventListener('change', searchTable);

function searchTable() {
    table_rows.forEach((row, i) => {
        if(selectedStatus.value == "Tất cả"){
            selectedStatus.value = "";      
        }
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
    let selectInput = document.getElementById(inputValue);
    const SelectW = document.querySelector(Select);
    selectBtnSearch = SelectW.querySelector('.select-btn');
    citis.innerHTML = "";
    let array = citisName;  
    array.forEach(data => {
        if (data == selectedValue) {
            selectBtnSearch.firstElementChild.innerText = data;
            selectInput.value = data;
        }
        var isSelected = data == selectedValue ? "selected" : "";

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
    selectBtnSearch.classList.add('active');
    addcounty(array, citisId, input, inputValue, Select, selectedLi.innerText);
    var event = new Event('change');
    selectInput.dispatchEvent(event);  
}


function initializeDropdowns(citisId, districtId, wardId, citisSearch, districtSearch, wardSearch, 
        inputcitisId, inputdistrictId, inputwardId, citisSelect, districtSelect, wardSelect,
        citisIdValue, districtIdValue, wardIdValue) {
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
        let districtsName = [];
        let WardsName = [];
        for (const x of data) {
          citisName.push(x.Name);
        }
        addcounty(citisName, citisId, citisSearch, inputcitisId, citisSelect, citisIdValue);
        selectBtnSearch1.addEventListener('click', () =>{
            scitis.classList.add('active');    
            cSearch.addEventListener('keyup', () => {
                let searchedVal = cSearch.value.toLowerCase();
    
                let filteredResults = citisName.filter(datacitis => {
                    return datacitis.toLowerCase().includes(searchedVal);
                });
                let arr = filteredResults.map(datacitis => `<li onclick="updateName(this, '${citisSearch}', '${citisName}', '${citisId}', '${inputcitisId}', '${citisSelect}')">${datacitis}</li>`).join("");
    
                citis.innerHTML = arr ? arr: `<p class="text-center">Không có dữ liệu</p>`;
            });
        });         
        icitis.addEventListener('change', function() {
                districtsName = [];
                const result = data.filter(n => n.Name === this.value);
                // Tạo các tùy chọn cho select quận/huyện
                for (const k of result[0].Districts) {
                  districtsName.push(k.Name);
                }
                addcounty(districtsName, districtId, districtSearch, inputdistrictId, districtSelect, districtIdValue);
                selectBtnSearch2.addEventListener('click', () =>{
                    sdistrict.classList.add('active');   
                    dSearch.addEventListener('keyup', () => {
                        let searchedVal = dSearch.value.toLowerCase();
            
                        let filteredResults = districtsName.filter(datadistricts => {
                            return datadistricts.toLowerCase().includes(searchedVal);
                        });
                        let arr = filteredResults.map(datadistricts => `<li onclick="updateName(this, '${districtSearch}', '${districtsName}', '${districtId}', '${inputdistrictId}', '${districtSelect}')">${datadistricts}</li>`).join("");
            
                        districts.innerHTML = arr ? arr: `<p class="text-center">Không có dữ liệu</p>`;
                    });
                });
                selectBtnSearch2.firstElementChild.innerText = "Quận huyện";
                selectBtnSearch2.classList.remove('active');
                selectBtnSearch3.firstElementChild.innerText = "Phương xã";
                selectBtnSearch3.classList.remove('active'); 
        }); 
        
        idistricts.addEventListener('change', function() {
            WardsName = [];
            const dataCity = data.filter(n => n.Name === icitis.value);
            const dataWards = dataCity[0].Districts.filter(n => n.Name === this.value)[0].Wards;            
            // Tạo các tùy chọn cho select quận/huyện
            for (const w of dataWards) {
                WardsName.push(w.Name);
            }
            addcounty(WardsName, wardId, wardSearch, inputwardId, wardSelect, wardIdValue);
            selectBtnSearch3.addEventListener('click', () =>{
                sward.classList.add('active');   
                wSearch.addEventListener('keyup', () => {
                    let searchedVal = wSearch.value.toLowerCase();   
                    let filteredResults = WardsName.filter(datawards => {
                        return datawards.toLowerCase().includes(searchedVal);
                    });
                    let arr = filteredResults.map(datawards => `<li onclick="updateName(this, '${wardSearch}', '${WardsName}', '${wardId}', '${inputwardId}', '${wardSelect}')">${datawards}</li>`).join("");
        
                    wards.innerHTML = arr ? arr: `<p class="text-center">Không có dữ liệu</p>`;
                });
            });
            selectBtnSearch3.firstElementChild.innerText = "Phương xã";
            selectBtnSearch3.classList.remove('active');
        }); 
            // Kiểm tra nếu select tỉnh/thành phố đã có giá trị được chọn sẵn
        if (citisIdValue !== null && citisIdValue !== '') {
            const result = data.filter(n => n.Name === citisIdValue);
                // Tạo các tùy chọn cho select quận/huyện
                for (const k of result[0].Districts) {
                  districtsName.push(k.Name);
                }
                addcounty(districtsName, districtId, districtSearch, inputdistrictId, districtSelect, districtIdValue);
                selectBtnSearch2.addEventListener('click', () =>{
                    sdistrict.classList.add('active');   
                    dSearch.addEventListener('keyup', () => {
                        let searchedVal = dSearch.value.toLowerCase();
            
                        let filteredResults = districtsName.filter(datadistricts => {
                            return datadistricts.toLowerCase().includes(searchedVal);
                        });
                        let arr = filteredResults.map(datadistricts => `<li onclick="updateName(this, '${districtSearch}', '${districtsName}', '${districtId}', '${inputdistrictId}', '${districtSelect}')">${datadistricts}</li>`).join("");
            
                        sdistrict.innerHTML = arr ? arr: `<p class="text-center">Không có dữ liệu</p>`;
                    });
                });
            if (districtIdValue!== null && districtIdValue !== '') {
                const dataCity = data.filter(n => n.Name === citisIdValue);
                const dataWards = dataCity[0].Districts.filter(n => n.Name === districtIdValue)[0].Wards;            
                // Tạo các tùy chọn cho select quận/huyện
                for (const w of dataWards) {
                    WardsName.push(w.Name);
                }
                addcounty(WardsName, wardId, wardSearch, inputwardId, wardSelect, wardIdValue);
                selectBtnSearch3.addEventListener('click', () =>{
                    sward.classList.add('active');   
                    wSearch.addEventListener('keyup', () => {
                        let searchedVal = wSearch.value.toLowerCase();   
                        let filteredResults = WardsName.filter(datawards => {
                            return datawards.toLowerCase().includes(searchedVal);
                        });
                        let arr = filteredResults.map(datawards => `<li onclick="updateName(this, '${wardSearch}', '${WardsName}', '${wardId}', '${inputwardId}', '${wardSelect}')">${datawards}</li>`).join("");
            
                        sward.innerHTML = arr ? arr: `<p class="text-center">Không có dữ liệu</p>`;
                    });
                });
            }
        }
    }

    
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
