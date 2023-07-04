// submit form varaibles
let submit = document.querySelector("#submit_form");
let form = document.querySelector("#form");

// input tags variables
let institution_name = document.getElementById("institution_name");
let institution_website = document.getElementById("institution_website");
let license_number = document.getElementById("license_number");
let issue_date = document.getElementById("issue_date");
let institution_head = document.getElementById("institution_head");
let meli_code = document.getElementById("meli_code");
let phone_number = document.getElementById("phone_number");
let institution_address = document.getElementById("institution_address");
let state = document.getElementById("state");
let city = document.getElementById("city");
let institution_landline = document.getElementById("institution_landline");
let trusted_name = document.getElementById("trusted_name");
let birth_certificate = document.getElementById("birth_certificate");
let birth_location = document.getElementById("birth_location");
let day = document.getElementById("day");
let month = document.getElementById("month");
let year = document.getElementById("year");
let meli_code_second = document.getElementById("meli_code_second");
let religion = document.getElementById("religion");
let child_numbers = document.getElementById("child_numbers");
let phone_number_second = document.getElementById("phone_number_second");
let email = document.getElementById("email");
let whatsapp_number = document.getElementById("whatsapp_number");
let emergency_number = document.getElementById("emergency_number");
let job = document.getElementById("job");
let service_location = document.getElementById("service_location");
let month_income = document.getElementById("month_income");
let address = document.getElementById("address");
let agent_state = document.getElementById("agent_state");
let agent_city = document.getElementById("agent_city");
let agent_phone = document.getElementById("agent_phone");
let software = document.getElementById("software");
let mardomanim = document.getElementById("mardomanim");
let benefactor = document.getElementById("benefactor");
let benefactor_limit = document.getElementById("benefactor_limit");
let connetction_to_mardomanim = document.getElementById("connetction_to_mardomanim");
let how_many_years = document.getElementById("how_many_years");
let how_to_find = document.getElementById("how_to_find");
let subjects = document.getElementById("subjects");
let resources = document.getElementById("resources");
let how_much = document.getElementById("how_much");
let any_comments = document.getElementById("any_comments");
let first_person_name = document.getElementById("first_person_name");
let second_person_name = document.getElementById("second_person_name");
let first_person_phone = document.getElementById("first_person_phone");
let second_person_phone = document.getElementById("second_person_phone");
let first_person_job = document.getElementById("first_person_job");
let second_person_job = document.getElementById("second_person_job");
let first_person_address = document.getElementById("first_person_address");
let second_person_address = document.getElementById("second_person_address");
let first_person_relate = document.getElementById("first_person_relate");
let second_person_relate = document.getElementById("second_person_relate");
let person_name = document.getElementById("person_name");
let person_info = document.getElementById("person_info");
let institution_agent = document.getElementById("institution_agent");
let this_person = document.getElementById("this_person");
let in_date = document.getElementById("in_date");

// radio button for gender
let gender;
function onCheckGender(data) {
    if(data.checked) {
        gender = data.value;
    }
}

// radio button for marriage
let marriage;
function onCheckMarraige(data) {
    if(data.checked) {
        marriage = data.value;
    }
}

// radio button for web
let web;
function onCheckWeb(data) {
    if(data.checked) {
        web = data.value;
    }
}

// radio button for android
let android;
function onCheckAndroid(data) {
    if(data.checked) {
        android = data.value;
    }
}

// radio button for telegram
let telegram;
function onCheckTelegram(data) {
    if(data.checked) {
        telegram = data.value;
    }
}

let way;
function onCheckWay(data) {
    if(data.checked) {
        way = data.value;
    }
}

function showError(title, text, icon) {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })
      
      Toast.fire({
        icon: icon,
        title: title,
        text:text
      })
}

function isNumeric(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
}


// Empty Validation By Value
function emptyData(element) {
    if(element.value == "") {
        element.classList.add("red-border");
        return false;
    }
}

// Empty Validation By field
function emptyDataColor(element) {
    element.classList.add("red-border");
}

// Form Submit 
submit.addEventListener("click", (e) => {
    e.preventDefault(); 
    const formData = new FormData(form);
    formData.forEach((value, key) => {
        const element  = document.querySelector(`[name= ${key}]`);
        emptyData(element);
    })

    let cond = flase;

    // String Input Validation
    // institution_name
    if(isNumeric(institution_name.value)) {
        showError("ناموفق" ,"لطفا متن نام موسسه را به حروف وارد کنید", "error");
        emptyDataColor(institution_name);
    }

    // institution_head
    if(isNumeric(institution_head.value)) {
        showError("ناموفق" ,"لطفا متن نام و نام خانوادگی مسول موسسه را به حروف وارد کنید", "error");
        emptyDataColor(institution_head);
    }

    // state
    if(isNumeric(state.value)) {
        showError("ناموفق" ,"لطفا متن استان را به حروف وارد کنید", "error");
        emptyDataColor(state);
    }

    // city
    if(isNumeric(city.value)) {
        showError("ناموفق" ,"لطفا متن شهر را به حروف وارد کنید", "error");
        emptyDataColor(city);
    }

    // trusted_name
    if(isNumeric(trusted_name.value)) {
        showError("ناموفق" ,"لطفا متن نام و نام خانوادگی نماینده/معتمد را به حروف وارد کنید", "error");
        emptyDataColor(trusted_name);
    }

    // agent_city
    if(isNumeric(agent_city.value)) {
        showError("ناموفق" ,"لطفا متن شهر را به حروف وارد کنید", "error");
        emptyDataColor(agent_city);
    }

    // agent_state
    if(isNumeric(agent_state.value)) {
        showError("ناموفق" ,"لطفا متن استان را به حروف وارد کنید", "error");
        emptyDataColor(agent_state);
    }

       // birth_location
    if(isNumeric(birth_location.value)) {
        showError("ناموفق" ,"لطفا متن محل تولد را به حروف وارد کنید", "error");
        emptyDataColor(birth_location);
    }

    // religion
    if(isNumeric(religion.value)) {
        showError("ناموفق" ,"لطفا متن مذهب را به حروف وارد کنید", "error");
        emptyDataColor(religion);
    }

    // religion
    if(isNumeric(religion.value)) {
        showError("ناموفق" ,"لطفا متن مذهب را به حروف وارد کنید", "error");
        emptyDataColor(religion);
    }

     // service_location
    if(isNumeric(service_location.value)) {
        showError("ناموفق" ,"لطفا متن محل خدمت را به حروف وارد کنید", "error");
        emptyDataColor(service_location);
    }

    // job
    if(isNumeric(job.value)) {
        showError("ناموفق" ,"لطفا متن شغل را به حروف وارد کنید", "error");
        emptyDataColor(job);
    }

    
    // mardomanim
    if(isNumeric(mardomanim.value)) {
        showError("ناموفق" ,"لطفا متن آیا اپ مردمانیم... را به حروف وارد کنید", "error");
        emptyDataColor(mardomanim);
    }

    // benefactor_limit
    if(isNumeric(benefactor_limit.value)) {
        showError("ناموفق" ,"لطفا متن آیا میتوانید حداقل... را به حروف وارد کنید", "error");
        emptyDataColor(benefactor_limit);
    }

    
    
     // first and second person name
    if(isNumeric(first_person_name.value)) {
        showError("ناموفق" ,"لطفا متن نام شخص اول را به حروف وارد کنید", "error");
        emptyDataColor(first_person_name);
    }
    if(isNumeric(second_person_name.value)) {
        showError("ناموفق", "لطفا متن نام شخص دوم را به حروف وارد کنید", "error");
        emptyDataColor(second_person_name);
    }

    // first and second person job
    if(isNumeric(first_person_job.value)) {
        showError("ناموفق" ,"لطفا متن شغل شخص اول را به حروف وارد کنید", "error");
        emptyDataColor(first_person_job);
    }
    if(isNumeric(second_person_job.value)) {
        showError("ناموفق" ,"لطفا متن شغل شخص اول را به حروف وارد کنید", "error");
        emptyDataColor(second_person_address);
    }

    // fisrt and second perosn related
    if(isNumeric(first_person_relate.value)) {
        showError("ناموفق" ,"لطفا متن شغل شخص اول را به حروف وارد کنید", "error");
        emptyDataColor(first_person_relate);
    }
    if(isNumeric(second_person_relate.value)) {
        showError("ناموفق" ,"لطفا متن شغل شخص اول را به حروف وارد کنید", "error");
        emptyDataColor(second_person_relate);
    }

    // person_name
    if(isNumeric(person_name.value)) {
        showError("ناموفق", "لطفا متن بدینوسیله آقای/خانم را به حروف وارد کنید", "error");
        emptyDataColor(person_name);
    }

    // person_info
    if(isNumeric(person_info.value)) {
        showError("ناموفق", "لطفا متن با مشخصات فوق بمدت را به حروف وارد کنید", "error");
        emptyDataColor(person_info);
    }

    // institution_agent
    if(isNumeric(institution_agent.value)) {
        showError("ناموفق", "لطفا متن بعنوان نماینده موسسه را به حروف وارد کنید", "error");
        emptyDataColor(institution_agent);
    }

    // this_person
    if(isNumeric(this_person.value)) {
        showError("ناموفق", "لطفا متن اینجانب را به حروف وارد کنید", "error");
        emptyDataColor(this_person);
    }

    // Integer Input Validation
    // license_number
    if(!isNumeric(license_number.value)) {
        showError("ناموفق", "لطفا متن شماره و مرجع مجوز را به عدد وارد کنید", "error");
        emptyDataColor(license_number);
    }

    // meli_code
    if(!isNumeric(meli_code.value)) {
        showError("ناموفق", "لطفا متن کد ملی را به عدد وارد کنید", "error");
        emptyDataColor(meli_code);
    }

    // phone_number
    if(!isNumeric(phone_number.value)) {
        showError("ناموفق", "لطفا متن تلفن همراه را به عدد وارد کنید", "error");
        emptyDataColor(phone_number);
    }

    // institution_landline
    if(!isNumeric(institution_landline.value)) {
        showError("ناموفق", "لطفا متن تلفن ثابت موسسه یا کد را به عدد وارد کنید", "error");
        emptyDataColor(institution_landline);
    }

    // day
    if(!isNumeric(day.value)) {
        showError("ناموفق", "لطفا متن روز را به عدد وارد کنید", "error");
        emptyDataColor(day);
    }
    
    // month
    if(!isNumeric(month.value)) {
        showError("ناموفق", "لطفا متن ماه را به عدد وارد کنید", "error");
        emptyDataColor(month);
    }

    // year
    if(!isNumeric(year.value)) {
        showError("ناموفق", "لطفا متن سال را به عدد وارد کنید", "error");
        emptyDataColor(year);
    }

    // meli_code_second
    if(!isNumeric(meli_code_second.value)) {
        showError("ناموفق", "لطفا متن کد ملی نماینده را به عدد وارد کنید", "error");
        emptyDataColor(meli_code_second);
    }

    // child_numbers
    if(!isNumeric(child_numbers.value)) {
        showError("ناموفق", "لطفا متن تعداد فرزندان را به عدد وارد کنید", "error");
        emptyDataColor(child_numbers);
    }

    // phone_number_second
    if(!isNumeric(phone_number_second.value)) {
        showError("ناموفق", "لطفا متن تلفن همراه نماینده را به عدد وارد کنید", "error");
        emptyDataColor(phone_number_second);
    }

    // whatsapp_number
    if(!isNumeric(whatsapp_number.value)) {
        showError("ناموفق", "لطفا متن شماره واتس آپ را به عدد وارد کنید", "error");
        emptyDataColor(whatsapp_number);
    }

    // emergency_number
    if(!isNumeric(emergency_number.value)) {
        showError("ناموفق", "لطفا متن تلفن یکی از بستگان را به عدد وارد کنید", "error");
        emptyDataColor(emergency_number);
    }

    // month_income
    if(!isNumeric(month_income.value)) {
        showError("ناموفق", "لطفا متن میزان درآمد ماهیانه را به عدد وارد کنید", "error");
        emptyDataColor(month_income);
    }

    // agent_phone
    if(!isNumeric(agent_phone.value)) {
        showError("ناموفق", "لطفا متن تلفن محل سکونت با کد را به عدد وارد کنید", "error");
        emptyDataColor(agent_phone);
    }

    // first and second phone phone
    if(!isNumeric(first_person_phone.value)) {
        showError("ناموفق", "لطفا متن تلفن همراه شخص اول را به عدد وارد کنید", "error");
        emptyDataColor(first_person_phone);
    }

    if(!isNumeric(second_person_phone.value)) {
        showError("ناموفق", "لطفا متن تلفن همراه شخص دوم را به عدد وارد کنید", "error");
        emptyDataColor(second_person_phone);
    }

    // URL regex
    let expression = /[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)?/gi;
    let regex = new RegExp(expression);
    const myUrl = institution_website.value;
    if(!(myUrl.match(regex))) {
        showError("ناموفق", "لطفا وبسایت خود را به درستی وارد نمایید", "error");
    }
    
    // Delaying in submit form
    setTimeout(() => {
        form.submit();    
    }, 3500)
})

  