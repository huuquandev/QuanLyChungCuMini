

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
        }else{
            selectBtnSearch1.firstElementChild.innerText = "Tỉnh thành";
            selectBtnSearch1.classList.remove('active');
            selectBtnSearch2.firstElementChild.innerText = "Quận huyện";
            selectBtnSearch2.classList.remove('active');
            selectBtnSearch3.firstElementChild.innerText = "Phương xã";
            selectBtnSearch3.classList.remove('active');           
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
function addforcanho(arrayName, citisId, searchId, inputValue, Select, selectedValue) {    
    let citis = document.getElementById(citisId);
    let selectInput = document.getElementById(inputValue);
    const SelectW = document.querySelector(Select);
    selectBtnSearch = SelectW.querySelector('.select-btn');
    citis.innerHTML = "";
    let name = arrayName;
    let jsonString = JSON.stringify(name);
    let escapedJsonString = jsonString.replace(/'/g, "&apos;").replace(/"/g, "&quot;");
    name.forEach(data => {
        if (data.ten == selectedValue) {
            selectBtnSearch.firstElementChild.innerText = data.ten;
            selectInput.value = data.id;
        }
        var isSelected = data.ten == selectedValue ? "selected" : "";

        let li = `<li onclick="updateforcanho(this, '${searchId}', '${escapedJsonString}', '${citisId}', '${inputValue}', '${Select}')" class="${isSelected}">${data.ten}</li>`;
        citis.insertAdjacentHTML("beforeend", li);
    });

}
function updateforcanho(selectedLi, input, arrayName, citisId, inputValue, Select){
    const SelectW = document.querySelector(Select);
    selectBtnSearch = SelectW.querySelector('.select-btn');
    let selectInputSearch = document.getElementById(input);
    let selectInput = document.getElementById(inputValue);
    selectInputSearch.value = "";
    let name = arrayName;
    let dataArray = JSON.parse(name);   
    SelectW.classList.remove('active');
    selectBtnSearch.firstElementChild.innerText = selectedLi.innerText;
    selectInput.value = selectedLi.innerText;
    selectBtnSearch.classList.add('active');
    selectBtnSearch.classList.remove('is-invalid');
            var closestFormGroup = selectBtnSearch.closest('.form-group'); 

            if (closestFormGroup) {
                var textDangerElement = closestFormGroup.querySelector('small.text-danger'); 

                if (textDangerElement) {
                    textDangerElement.textContent = ''; 
                    textDangerElement.style.display = 'none'; 
                }
            }
    addforcanho(dataArray, citisId, input, inputValue, Select, selectedLi.innerText);
    var event = new Event('change');
    selectInput.dispatchEvent(event);  
}
function initializeDropdownsToanha_Tang(btnSelectbuilding, inputbuilding, searchbuilding, idbuilding, 
                    btnSelectfloor, inputfloor, searchfloor, idfloor, buildingValue, floorValue) {
    const optionSelectbuilding = document.querySelector(btnSelectbuilding);
    const optionSelectfloor = document.querySelector(btnSelectfloor);
    building = optionSelectbuilding.querySelector(".select-btn");
    floor = optionSelectfloor.querySelector(".select-btn");
    var buildingId = document.getElementById(idbuilding);
    var buildinginput = document.getElementById(inputbuilding);
    var buildingSearch = document.getElementById(searchbuilding);

    var floorId = document.getElementById(idfloor);
    var floorinput = document.getElementById(inputfloor);
    var floorSearch = document.getElementById(searchfloor);
    var arrayNameFloor = [];
    $.ajax({
                url: "doc/main/commons/lay_all_toanha.php",
                type: "post",
                dataType: "json", 
            }).done(function(toanha){
              let arrayName = [];
              for (const b of toanha) {
                arrayName.push({ id: b.id_toanha, ten: b.ten_toanha });
                }
                addforcanho(arrayName, idbuilding, searchbuilding, inputbuilding, btnSelectbuilding, buildingValue);     
                buildingSearch.addEventListener('keyup', () => {
                        let searchedVal = buildingSearch.value.toLowerCase();
            
                        let filteredResults = arrayName.filter(databuilding => {
                            return databuilding.ten.toLowerCase().includes(searchedVal);
                        });
                        let arr = filteredResults.map(databuilding => `<li onclick="updateforcanho(this, '${buildingSearch}', '${arrayName}', '${idbuilding}', '${inputbuilding}', '${btnSelectbuilding}')">${databuilding.ten}</li>`).join("");
            
                        buildingId.innerHTML = arr ? arr: `<p class="text-center">Không có dữ liệu</p>`;
                    });        
            });

    building.addEventListener('click', () =>{
      optionSelectbuilding.classList.add('active');    
    });  
    buildinginput.addEventListener('change', function() {
        $.ajax({
            url: "doc/main/commons/lay_tang_by_toanha.php",
            type: "post",
            dataType: "json", 
            data: { idtoanha: buildinginput.value },
        }).done(function(tang) {
            let arrayName = [];
            for (const b of tang) {
                arrayName.push({ id: b.id_tang, ten: "Tầng " + b.ten_tang });
                arrayNameFloor.push({ id: b.id_tang, ten: "Tầng " + b.ten_tang });
            }
            addforcanho(arrayName, idfloor, searchfloor, inputfloor, btnSelectfloor, floorValue);
            floor.addEventListener('click', () => {
                optionSelectfloor.classList.add('active');  
                floorSearch.addEventListener('keyup', () => {
                    let searchedVal = floorSearch.value.toLowerCase();
                
                    let filteredResults = arrayName.filter(datafloor => {
                        return datafloor.ten.toLowerCase().includes(searchedVal);
                    });
                    let arr = filteredResults.map(datafloor => `<li onclick="updateforcanho(this, '${searchfloor}', '${arrayName}', '${idfloor}', '${inputfloor}', '${btnSelectfloor}')">${datafloor.ten}</li>`).join("");
                
                    floorId.innerHTML = arr ? arr : `<p class="text-center">Không có dữ liệu</p>`;
                });        
            });  
            floor.firstElementChild.innerText = "Chọn tầng";
            floor.classList.remove('active');
            });
    });
    if (buildingValue !== null && buildingValue !== '') {
        $.ajax({
            url: "doc/main/commons/lay_tang_by_toanha.php",
            type: "post",
            dataType: "json", 
            data: { idtoanha: buildinginput.value },
        }).done(function(tang) {
            let arrayName = [];
            for (const b of tang) {
                arrayName.push({ id: b.id_tang, ten: "Tầng " + b.ten_tang });
            }
            addforcanho(arrayName, idfloor, searchfloor, inputfloor, btnSelectfloor, floorValue);
            floor.addEventListener('click', () => {
                optionSelectfloor.classList.add('active');    
                floorSearch.addEventListener('keyup', () => {
                    let searchedVal = floorSearch.value.toLowerCase();
                
                    let filteredResults = arrayName.filter(datafloor => {
                        return datafloor.ten.toLowerCase().includes(searchedVal);
                    });
                    let arr = filteredResults.map(datafloor => `<li onclick="updateforcanho(this, '${searchfloor}', '${arrayName}', '${idbuilding}', '${inputbuilding}', '${btnSelectbuilding}')">${datafloor.ten}</li>`).join("");
                
                    floorId.innerHTML = arr ? arr : `<p class="text-center">Không có dữ liệu</p>`;
                });        
            });  
        });
    }
    $(document).on('click', function (event) {
        const isClicktoanha = optionSelectbuilding.contains(event.target);
        const isClicktang = optionSelectfloor.contains(event.target);

        if (!isClicktoanha) {
            optionSelectbuilding.classList.remove('active');   
        }if (!isClicktang) {
            optionSelectfloor.classList.remove('active');
        }
    });
}
function initializeDropdownsToanha_Phong_Taisan(btnSelectbuilding, inputbuilding, searchbuilding, idbuilding, 
                                                btnSelectfloor, inputfloor, searchfloor, idfloor, 
                                                btnSelectroom, inputroom, searchroom, idroom, 
                                                btnSelectDepot, inputDepot, searchDepot, idDepot, 
                                                buildingValue, roomValue, floorValue, DepotValue) {
    const optionSelectbuilding = document.querySelector(btnSelectbuilding);
    const optionSelectfloor = document.querySelector(btnSelectfloor);
    const optionSelectroom = document.querySelector(btnSelectroom);
    const optionSelectDepot = document.querySelector(btnSelectDepot);

    building = optionSelectbuilding.querySelector(".select-btn");
    floor = optionSelectfloor.querySelector(".select-btn");
    room = optionSelectroom.querySelector(".select-btn");
    Depot = optionSelectDepot.querySelector(".select-btn");

    var buildingId = document.getElementById(idbuilding);
    var buildinginput = document.getElementById(inputbuilding);
    var buildingSearch = document.getElementById(searchbuilding);

    var floorId = document.getElementById(idfloor);
    var floorinput = document.getElementById(inputfloor);
    var floorSearch = document.getElementById(searchfloor);

    var roomId = document.getElementById(idroom);
    var roominput = document.getElementById(inputroom);
    var roomSearch = document.getElementById(searchroom);                                                

    var DepotId = document.getElementById(idDepot);
    var Depotinput = document.getElementById(inputDepot);
    var DepotSearch = document.getElementById(searchDepot);

    $.ajax({
        url: "doc/main/commons/lay_all_toanha.php",
        type: "post",
        dataType: "json", 
        }).done(function(toanha){
        let arrayName = [];
        for (const b of toanha) {
            arrayName.push({ id: b.id_toanha, ten: b.ten_toanha });
        }
        addforcanho(arrayName, idbuilding, searchbuilding, inputbuilding, btnSelectbuilding, buildingValue);     
        buildingSearch.addEventListener('keyup', () => {
                let searchedVal = buildingSearch.value.toLowerCase();

                let filteredResults = arrayName.filter(databuilding => {
                    return databuilding.ten.toLowerCase().includes(searchedVal);
                });
                let arr = filteredResults.map(databuilding => `<li onclick="updateforcanho(this, '${buildingSearch}', '${arrayName}', '${idbuilding}', '${inputbuilding}', '${btnSelectbuilding}')">${databuilding.ten}</li>`).join("");

                buildingId.innerHTML = arr ? arr: `<p class="text-center">Không có dữ liệu</p>`;
            });        
    });

    building.addEventListener('click', () =>{
        optionSelectbuilding.classList.add('active');    
    });  
    buildinginput.addEventListener('change', function() {
        $.ajax({
            url: "doc/main/commons/lay_tang_by_toanha.php",
            type: "post",
            dataType: "json", 
            data: { idtoanha: buildinginput.value },
        }).done(function(tang) {
            let arrayName = [];
            for (const b of tang) {
                arrayName.push({ id: b.id_tang, ten: "Tầng " + b.ten_tang });
            }
            addforcanho(arrayName, idfloor, searchfloor, inputfloor, btnSelectfloor, floorValue);
            floor.addEventListener('click', () => {
                optionSelectfloor.classList.add('active');  
                floorSearch.addEventListener('keyup', () => {
                    let searchedVal = floorSearch.value.toLowerCase();
                
                    let filteredResults = arrayName.filter(datafloor => {
                        return datafloor.ten.toLowerCase().includes(searchedVal);
                    });
                    let arr = filteredResults.map(datafloor => `<li onclick="updateforcanho(this, '${searchfloor}', '${arrayName}', '${idfloor}', '${inputfloor}', '${btnSelectfloor}')">${datafloor.ten}</li>`).join("");
                
                    floorId.innerHTML = arr ? arr : `<p class="text-center">Không có dữ liệu</p>`;
                });        
            });  
            floor.firstElementChild.innerText = "Chọn tầng";
            floor.classList.remove('active');
            room.firstElementChild.innerText = "Chọn phòng";
            room.classList.remove('active');
            });
    });
    floorinput.addEventListener('change', function() {
        $.ajax({
            url: "doc/main/commons/lay_phong_by_tang.php",
            type: "post",
            dataType: "json", 
            data: { idtang: floorinput.value },
        }).done(function(phong) {
            let arrayName = [];
            for (const b of phong) {
                arrayName.push({ id: b.id_canho_phong, ten: b.ten_canho_phong });
            }
            addforcanho(arrayName, idroom, searchroom, inputroom, btnSelectroom, roomValue);
            room.addEventListener('click', () => {
                optionSelectroom.classList.add('active');  
                floorSearch.addEventListener('keyup', () => {
                    let searchedVal = floorSearch.value.toLowerCase();
                
                    let filteredResults = arrayName.filter(dataroom => {
                        return dataroom.ten.toLowerCase().includes(searchedVal);
                    });
                    let arr = filteredResults.map(dataroom => `<li onclick="updateforcanho(this, '${searchroom}', '${arrayName}', '${idroom}', '${inputroom}', '${btnSelectroom}')">${dataroom.ten}</li>`).join("");
                
                    roomId.innerHTML = arr ? arr : `<p class="text-center">Không có dữ liệu</p>`;
                });        
            });  
            room.firstElementChild.innerText = "Chọn phòng";
            room.classList.remove('active');
            });
    });
    // if (buildingValue !== null && buildingValue !== '') {
    //     $.ajax({
    //         url: "doc/main/commons/lay_tang_by_toanha.php",
    //         type: "post",
    //         dataType: "json", 
    //         data: { idtoanha: buildinginput.value },
    //     }).done(function(tang) {
    //         let arrayName = [];
    //         for (const b of tang) {
    //             arrayName.push({ id: b.id_tang, ten: "Tầng " + b.ten_tang });
    //         }
    //         addforcanho(arrayName, idfloor, searchfloor, inputfloor, btnSelectfloor, floorValue);
    //         floor.addEventListener('click', () => {
    //             optionSelectfloor.classList.add('active');    
    //             floorSearch.addEventListener('keyup', () => {
    //                 let searchedVal = floorSearch.value.toLowerCase();
                
    //                 let filteredResults = arrayName.filter(datafloor => {
    //                     return datafloor.ten.toLowerCase().includes(searchedVal);
    //                 });
    //                 let arr = filteredResults.map(datafloor => `<li onclick="updateforcanho(this, '${searchfloor}', '${arrayName}', '${idbuilding}', '${inputbuilding}', '${btnSelectbuilding}')">${datafloor.ten}</li>`).join("");
                
    //                 floorId.innerHTML = arr ? arr : `<p class="text-center">Không có dữ liệu</p>`;
    //             });        
    //         });  
    //     });
    // }
    $.ajax({
        url: "doc/main/commons/lay_kho.php",
        type: "post",
        dataType: "json", 
        }).done(function(kho){
        let arrayName = [];
        for (const b of kho) {
            arrayName.push({ id: b.id_kho, ten: b.ten_kho });
        }
        addforcanho(arrayName, idDepot, searchDepot, inputDepot, btnSelectDepot, DepotValue);     
        DepotSearch.addEventListener('keyup', () => {
                let searchedVal = DepotSearch.value.toLowerCase();

                let filteredResults = arrayName.filter(dataDepot => {
                    return dataDepot.ten.toLowerCase().includes(searchedVal);
                });
                let arr = filteredResults.map(dataDepot => `<li onclick="updateforcanho(this, '${DepotSearch}', '${arrayName}', '${idDepot}', '${inputDepot}', '${btnSelectDepot}')">${dataDepot.ten}</li>`).join("");

                DepotId.innerHTML = arr ? arr: `<p class="text-center">Không có dữ liệu</p>`;
            });        
    });
    Depot.addEventListener('click', () =>{
        optionSelectDepot.classList.add('active');    
    });  
    $(document).on('click', function (event) {
        const isClicktoanha = optionSelectbuilding.contains(event.target);
        const isClicktang = optionSelectfloor.contains(event.target);
        const isClickphong = optionSelectroom.contains(event.target);
        const isClickkho = optionSelectDepot.contains(event.target);

        if (!isClicktoanha) {
            optionSelectbuilding.classList.remove('active');   
        }if (!isClicktang) {
            optionSelectfloor.classList.remove('active');
        }if (!isClickkho) {
            optionSelectDepot.classList.remove('active');
        }if (!isClickphong) {
            optionSelectroom.classList.remove('active');
        }
    });
}
function initializeDropdownsToanha_Phong_baotri_suachua(btnSelectbuilding, inputbuilding, searchbuilding, idbuilding, 
                                                                    btnSelectfloor, inputfloor, searchfloor, idfloor, 
                                                                    btnSelectUser, inputUser, searchUser, idUser, 
                                                                    btnSelectLevel, inputLevel, searchLevel, idLevel, 
                                                                    buildingValue, floorValue, UserValue, LevelValue) {
    const optionSelectbuilding = document.querySelector(btnSelectbuilding);
    const optionSelectfloor = document.querySelector(btnSelectfloor);
    const optionSelectUser = document.querySelector(btnSelectUser);
    const optionSelectLevel = document.querySelector(btnSelectLevel);

    building = optionSelectbuilding.querySelector(".select-btn");
    floor = optionSelectfloor.querySelector(".select-btn");
    User = optionSelectUser.querySelector(".select-btn");
    level = optionSelectLevel.querySelector(".select-btn");

    var buildingId = document.getElementById(idbuilding);
    var buildinginput = document.getElementById(inputbuilding);
    var buildingSearch = document.getElementById(searchbuilding);

    var floorId = document.getElementById(idfloor);
    var floorinput = document.getElementById(inputfloor);
    var floorSearch = document.getElementById(searchfloor);

    var UserId = document.getElementById(idUser);
    var Userinput = document.getElementById(inputUser);
    var UserSearch = document.getElementById(searchUser);

    var LevelId = document.getElementById(idLevel);
    var Levelinput = document.getElementById(inputLevel);
    var LevelSearch = document.getElementById(searchLevel);
 
    $.ajax({
        url: "doc/main/commons/lay_all_toanha.php",
        type: "post",
        dataType: "json", 
        }).done(function(toanha){
        let arrayName = [];
        for (const b of toanha) {
            arrayName.push({ id: b.id_toanha, ten: b.ten_toanha });
        }
        addforcanho(arrayName, idbuilding, searchbuilding, inputbuilding, btnSelectbuilding, buildingValue);     
        buildingSearch.addEventListener('keyup', () => {
                let searchedVal = buildingSearch.value.toLowerCase();

                let filteredResults = arrayName.filter(databuilding => {
                    return databuilding.ten.toLowerCase().includes(searchedVal);
                });
                let arr = filteredResults.map(databuilding => `<li onclick="updateforcanho(this, '${buildingSearch}', '${arrayName}', '${idbuilding}', '${inputbuilding}', '${btnSelectbuilding}')">${databuilding.ten}</li>`).join("");

                buildingId.innerHTML = arr ? arr: `<p class="text-center">Không có dữ liệu</p>`;
        });        
    });

    building.addEventListener('click', () =>{
        optionSelectbuilding.classList.add('active');    
    });  
    buildinginput.addEventListener('change', function() {
        $.ajax({
        url: "doc/main/commons/lay_phong_by_toanha.php",
        type: "post",
        dataType: "json", 
        data: { idtoanha: buildinginput.value },
        }).done(function(tang) {
            let arrayName = [];
            for (const b of tang) {
                arrayName.push({ id: b.id_canho_phong, ten: b.ten_canho_phong });
            }
            console.log(arrayName);
            addforcanho(arrayName, idfloor, searchfloor, inputfloor, btnSelectfloor, floorValue);
            floor.addEventListener('click', () => {
                optionSelectfloor.classList.add('active');  
                floorSearch.addEventListener('keyup', () => {
                    let searchedVal = floorSearch.value.toLowerCase();

                    let filteredResults = arrayName.filter(datafloor => {
                        return datafloor.ten.toLowerCase().includes(searchedVal);
                    });
                    let arr = filteredResults.map(datafloor => `<li onclick="updateforcanho(this, '${searchfloor}', '${arrayName}', '${idfloor}', '${inputfloor}', '${btnSelectfloor}')">${datafloor.ten}</li>`).join("");

                    floorId.innerHTML = arr ? arr : `<p class="text-center">Không có dữ liệu</p>`;
                });        
            });  
        floor.firstElementChild.innerText = "Chọn phòng";
        floor.classList.remove('active');
    });
    });
    if (buildingValue !== null && buildingValue !== '') {
        $.ajax({
        url: "doc/main/commons/lay_phong_by_toanha.php",
        type: "post",
        dataType: "json", 
        data: { idtoanha: buildinginput.value },
        }).done(function(tang) {
            let arrayName = [];
            for (const b of tang) {
                arrayName.push({ id: b.id_canho_phong, ten: b.ten_canho_phong });
            }
            addforcanho(arrayName, idfloor, searchfloor, inputfloor, btnSelectfloor, floorValue);
            floor.addEventListener('click', () => {
            optionSelectfloor.classList.add('active');    
            floorSearch.addEventListener('keyup', () => {
                let searchedVal = floorSearch.value.toLowerCase();

                let filteredResults = arrayName.filter(datafloor => {
                    return datafloor.ten.toLowerCase().includes(searchedVal);
                });
                let arr = filteredResults.map(datafloor => `<li onclick="updateforcanho(this, '${searchfloor}', '${arrayName}', '${idbuilding}', '${inputbuilding}', '${btnSelectbuilding}')">${datafloor.ten}</li>`).join("");

                floorId.innerHTML = arr ? arr : `<p class="text-center">Không có dữ liệu</p>`;
            });        
        });  
    });
    }else{
        building.firstElementChild.innerText = "Chọn tòa nhà";
        building.classList.remove('active');
        floor.firstElementChild.innerText = "Chọn phòng";
        floor.classList.remove('active'); 
    }
    let arrayNameLevel = [
        { id: 1, ten: "Thấp" },
        { id: 2, ten: "Bình thường" },
        { id: 3, ten: "Gấp" }
      ];
      
    addforcanho(arrayNameLevel, idLevel, searchLevel, inputLevel, btnSelectLevel, LevelValue);
    LevelSearch.addEventListener('keyup', () => {
        let searchedVal = LevelSearch.value.toLowerCase();

        let filteredResults = arrayName.filter(dataLevel => {
            return dataLevel.ten.toLowerCase().includes(searchedVal);
        });
        let arr = filteredResults.map(dataLevel => `<li onclick="updateforcanho(this, '${LevelSearch}', '${arrayNameLevel}', '${idLevel}', '${inputLevel}', '${btnSelectLevel}')">${dataLevel.ten}</li>`).join("");

        LevelId.innerHTML = arr ? arr: `<p class="text-center">Không có dữ liệu</p>`;
    });    
    level.addEventListener('click', () =>{
        optionSelectLevel.classList.add('active');    
    });  
    $.ajax({
        url: "doc/main/commons/lay_nguoi_dung.php",
        type: "post",
        dataType: "json", 
        }).done(function(nguoidung){
        let arrayName = [];
        for (const b of nguoidung) {
            arrayName.push({ id: b.id_taikhoan, ten: b.ten_hien_thi });
        }
        addforcanho(arrayName, idUser, searchUser, inputUser, btnSelectUser, UserValue);     
        UserSearch.addEventListener('keyup', () => {
                let searchedVal = UserSearch.value.toLowerCase();

                let filteredResults = arrayName.filter(dataUser => {
                    return dataUser.ten.toLowerCase().includes(searchedVal);
                });
                let arr = filteredResults.map(dataUser => `<li onclick="updateforcanho(this, '${UserSearch}', '${arrayName}', '${idUser}', '${inputUser}', '${btnSelectUser}')">${dataUser.ten}</li>`).join("");

                UserId.innerHTML = arr ? arr: `<p class="text-center">Không có dữ liệu</p>`;
            });        
    });
    User.addEventListener('click', () =>{
        optionSelectUser.classList.add('active');    
    });  
    if(LevelValue === null && LevelValue === ''){
        level.firstElementChild.innerText = "Mức độ ưu tiên";
        level.classList.remove('active');    
    }
    if(UserValue === null && UserValue === ''){
        User.firstElementChild.innerText = "Chọn người thực hiện";
        User.classList.remove('active'); 
    }
    $(document).on('click', function (event) {
        const isClicktoanha = optionSelectbuilding.contains(event.target);
        const isClicktang = optionSelectfloor.contains(event.target);
        const isClickLevel = optionSelectLevel.contains(event.target);
        const isClickUser = optionSelectUser.contains(event.target);

        if (!isClicktoanha) {
            optionSelectbuilding.classList.remove('active');   
        }if (!isClicktang) {
            optionSelectfloor.classList.remove('active');
        }if (!isClickUser) {
            optionSelectUser.classList.remove('active');
        }if (!isClickLevel) {
            optionSelectLevel.classList.remove('active');
        }
    });
}
