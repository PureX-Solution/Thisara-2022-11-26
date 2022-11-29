
// Customer Management
const customer_management_input = document.getElementById('customer_management_input');
const customer_management_class_name = document.getElementsByClassName('customerClass');

customer_management_input.addEventListener('input', (event) => {
    let data = event.target.value;
    for(var x = 0; x < customer_management_class_name.length; x++){
        
        if(!customer_management_class_name[x].className.includes(data)){
            customer_management_class_name[x].style =  "display : none;";
        }else{
            customer_management_class_name[x].style =  "display : display;";
        }
    }

});

// Worker Management
const worker_management_input = document.getElementById('worker_management_input');
const worker_management_class_name = document.getElementsByClassName('workerClass');

worker_management_input.addEventListener('input', (event) => {
    let data1 = event.target.value;
    for(var x = 0; x < worker_management_class_name.length; x++){
        if(!worker_management_class_name[x].className.includes(data1)){
            worker_management_class_name[x].style =  "display : none;";
        }else{
            worker_management_class_name[x].style =  "display : display;";
        }
    }

});

// Equipment Management
const equipment_management_input = document.getElementById('equipment_management_input');
const equipment_management_class_name = document.getElementsByClassName('equipmentClass');

equipment_management_input.addEventListener('input', (event)=>{
    let data2 = event.target.value;

    for(var x = 0; x < equipment_management_class_name.length; x++){
        if(!equipment_management_class_name[x].className.includes(data2) && data2 != "all"){
            equipment_management_class_name[x].style =  "display : none;";
            
        }else{
            equipment_management_class_name[x].style =  "display : display;";
        }
    }
});

// Close Alert
function closeAlert(){
    document.getElementById("alert").style="display: none";
}

// Show Alert
function showAlert(arr){

    let fullCreate = ``;

    for(tag of arr){
        let create = `<tr><td>${tag[0]}</td><td>${tag[1]}</td></tr>`;
        
        fullCreate = fullCreate + create;
        
        document.getElementById("table").innerHTML = fullCreate;
    }

    document.getElementById("alert").style="display: flex";
}


