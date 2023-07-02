const submit = document.querySelector("#submit_form");
const form = document.querySelector("#form");

const institution_name = document.querySelector("[name= institution_name]");
const institution_website = document.querySelector("[name= institution_website]");
const license_number = document.querySelector("[name= license_number]");
const issue_date = document.querySelector("[name= issue_date]");
const institution_head = document.querySelector("[name= institution-head]");
const meli_code = document.querySelector("[name= meli_code]");
const phone_number = document.querySelector("[name= phone_number]");
const institution_address = document.querySelector("[name= institution_address]");
const state = document.querySelector("[name= state]");
const city = document.querySelector("[name= city]");
const institution_landline = document.querySelector("[name= institution_landline]");
const birth_location = document.querySelector("[name= birth_location]");
const agent_address = document.querySelector("[name= agent_address]");
const agent_state = document.querySelector("[name= agent_state]");
const agent_city = document.querySelector("[name= agent_city]");
const agent_phone = document.querySelector("[name= agent_phone]");
const trusted_name = document.querySelector("[name= trusted_name]");
const male = document.querySelector("[name= male]");
const female = document.querySelector("[name= female]");
const birth_certificate = document.querySelector("[name= birth_certificate]");
const day = document.querySelector("[name= day]");
const month = document.querySelector("[name= month]");
const year = document.querySelector("[name= year]");
const meli_code_second = document.querySelector("[name= meli_code_second]");
const religion = document.querySelector("[name= religion]");
const single = document.querySelector("[name= single]");
const child_numbers = document.querySelector("[name= child_numbers]");
const phone_number_second = document.querySelector("[name= phone_number_second]");
const email = document.querySelector("[name= email]");
const whatsapp_number = document.querySelector("[name= whatsapp_number]");
const emergency_number = document.querySelector("[name= emergency_number]");
const job = document.querySelector("[name= job]");
const service_location = document.querySelector("[name= service_location]");
const month_income = document.querySelector("[name= month_income]");
const web = document.querySelector("[name= web]");
const android = document.querySelector("[name= android]");
const telegram = document.querySelector("[name= telegram]");
const software = document.querySelector("[name= software]");
const benefactor = document.querySelector("[name= benefactor]");
const connection = document.querySelector("[name= connection]");
const connetction_to_mardomanim = document.querySelector("[name= connetction_to_mardomanim]");
const how_many_years = document.querySelector("[name= how_many_years]");
const how_to_find = document.querySelector("[name= how_to_find]");
const subjects = document.querySelector("[name= subjects]");
const resources = document.querySelector("[name= resources]");
const how_much = document.querySelector("[name= how_much]");
const any_comments = document.querySelector("[name= any_comments]");
const first_person_name = document.querySelector("[name= first_person_name]");
const second_person_name = document.querySelector("[name= second_person_name]");
const first_person_phone = document.querySelector("[name= first_person_phone]");
const second_person_phone = document.querySelector("[name= second_person_phone]");
const first_person_job = document.querySelector("[name= first_person_job]");
const second_person_job = document.querySelector("[name= second_person_job]");
const first_person_address = document.querySelector("[name= first_person_address]");
const second_person_address = document.querySelector("[name= second_person_address]");
const first_person_relate = document.querySelector("[name= first_person_relate]");
const second_person_relate = document.querySelector("[name= second_person_relate]");
const person_name = document.querySelector("[name= person_name]");
const person_info = document.querySelector("[name= person_info]");
const institution_agent = document.querySelector("[name= institution_agent]");
const this_person = document.querySelector("[name= this_person]");
const in_date = document.querySelector("[name= in_date]");
const mardomanim = document.querySelector("[name= mardomanim]");
const benefactor_limit = document.querySelector("[name= benefactor_limit]");



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

    
    
     // first_person_name
    if(isNumeric(first_person_name.value)) {
        showError("ناموفق" ,"لطفا متن نام شخص اول را به حروف وارد کنید", "error");
        emptyDataColor(first_person_name);
    }

    // first_person_job
    if(isNumeric(first_person_job.value)) {
        showError("ناموفق" ,"لطفا متن شغل شخص اول را به حروف وارد کنید", "error");
        emptyDataColor(first_person_job);
    }



    form.submit();
})

  