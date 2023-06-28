const erorrs = document.querySelector("#errors");
const requiredString = document.createElement("span");
requiredString.textContent = "لین فیلد دارای کلملت نمانیسبس است"
const error_list = document.querySelector("#error-list");

const array_validation = {
    "institution_name":["string"]
}


function emptyData(element) {
    if(element.value == "") {
        element.classList.add("red-border");
        return false;
    }
    error_list.insertAdjacentElement('beforeend',requiredString)

}

function validate(element){

    if(array_validation[element.getAttribute("name")].indexOf(typeof(`${element.value}`)) !== -1){
        error_list.insertAdjacentElement('beforeend',requiredString)
    }
}


// class Validation {
//     empty(element) {
//         if(element.value == "") {
//             element.classList.add("red-border");
//             return false;
//         }
//     }

//     check_int_str(element) {

//     //     if(typeof(element.value) == "string") {
//     //         requiredString.textContent = "*متن وارد شده به حروف باشد."
//     //         console.log(element.nextElementSibling())
//     // }
// }
// }


const submit = document.querySelector("#submit_form");
const form = document.querySelector("#form");
submit.addEventListener("click", (e) => {
    e.preventDefault(); 
    const formData = new FormData(form);
    formData.forEach((value, key) => {
        const element  = document.querySelector(`[name= ${key}]`);
        emptyData(element)
        validate(element)
    })
})
