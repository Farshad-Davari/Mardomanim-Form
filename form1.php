<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم یک</title>
    <!-- Reset Css -->
    <link rel="stylesheet" href="style/reset.css">
    <!-- Bootstrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Customized Css -->
    <link rel="stylesheet" href="style/sweetalert2.min.css">

    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    
    <!-- Navbar Section -->
    <header class="container-fluid" id="header">
      <div class="container-lg container-xl container-md py-4" style="background-color: #fff;">
          <div class="row d-flex flex-row justify-content-between align-items-center h-100 row-header">
              <a href="https://mardomanim.com/app/faq/" class="c-font" id="btn_top">سوالات متداول</a>
              <a href="https://mardomanim.com/" id="logo-header" class="d-flex justify-content-between align-items-center">
                  <div class="mx-2">
                      <img src="img/vector1.png" id="img-1" width="98" height="22">
                      <img src="img/vector2.png" id="img-2" width="98" height="14">
                  </div>
                  <div><img src="img/vector.png" id="img-3" width="55" height="56"></div>
              </a>
          </div>
      </div>
    </header>

    

    <!-- Main Container Section -->
    <form action="" method="POST" class="container-fluid" id="form">

        <!-- Top Section -->
        <div class="col mt-3 d-flex flex-column justify-content-center align-items-center" id="top">
            <h1 class="c-font fs-18 fw-bold main-color">فرم معتمدین مردمانیم</h1>
            <h3 class="c-font fs-14 main-color">نسخه ۱.۶- ۱۴۰۰/۰۵/۱۰</h3>
            <div id="error-list"></div>
        </div>

        

        <!-- Form Section -->
        <div class="container-fluid mx-xl-0 mx-auto p-0 m-0 col-xl-12 col-md-10" id="form-container">
            <table class="table table-light p-0 m-0 flex-lg-row flex-xl-row flex-column col-lg-12 c-font table-responsive" style="direction: rtl;">
                <tbody class="main-color">

                  <!-- institution info -->
                  <tr class="d-flex flex-xl-nowrap flex-lg-nowrap flex-wrap">
                    <th scope="row" colspan="0" class="vertic-align col-xl-2 p-4 th-width th-cus">مشخصات موسسه</th>
                    <td class="col-xl-6 col-12 col-lg-6 col-md-12 border-cus">
                        <div class="col-xl-4 col-lg-8 col-md-12 col-sm-12 d-flex flex-column align-items-center justify-content-center">
                            <input type="text" name="institution_name" class="form-control m-1 col-3 fs-14 col-lg-12 col-md-12 col-sm-12 col-12" id="institution_name" placeholder="نام موسسه">
                            <input type="text" name="institution_website" class="form-control m-1 fs-14 col-3 col-lg-12 col-md-12 col-sm-12 col-12" id="institution_website" placeholder="وب سایت موسسه">
                            <input type="text" name="license_number" class="form-control m-1 fs-14 col-3 col-lg-12 col-md-12 col-sm-12 col-12" id="license_number" placeholder="شماره و مرجع مجوز">
                            <input type="text" name="issue_date" class="form-control m-1 fs-14 col-3 col-lg-12 col-md-12 col-sm-12 col-12" id="issue_date" placeholder="تاریخ صدور">
                        </div>
                    </td>
                    <td class="col-xl-6 col-12 col-6 col-lg-6">
                        <div class="col-xl-5 d-flex flex-column">
                            <div class="col-xl-12 d-flex flex-lg-row flex-column">
                                <input type="text" name="institution_head" class="form-control m-1 fs-14 col-xl-4 align-self-start" id="institution_head" placeholder="نام و نام خانوادگی مسول موسسه">
                                <input type="text"  name="meli_code" class="form-control m-1 fs-14 col-xl-4 align-self-start" id="meli_code" placeholder="کد ملی">
                            </div>
                            <div class="col-xl-12 d-flex flex-row">
                                <input type="text" name="phone_number" class="form-control m-1 align-self-lg-center fs-14 col-xl-4" id="phone_number" placeholder="تلفن همراه">
                            </div>
                            <div class="col-xl-12 mt-5 d-flex flex-lg-row flex-column">
                                <input type="text" name="institution_address" class="form-control m-1 fs-14 col-xl-12" id="institution_address" placeholder="نشانی دقیق موسسه">
                                <input type="text" name="state" class="form-control m-1 fs-14 col-xl-12" id="state" placeholder="استان">
                            </div>
                            <div class="col-xl-12 d-flex flex-lg-row flex-column">
                                <input type="text" name="city" class="form-control m-1 fs-14 col-xl-12" id="city" placeholder="شهر">
                                <input type="text" name="institution_landline" class="form-control m-1 fs-14 col-xl-12" id="institution_landline" placeholder="تلفن ثابت موسسه یا کد">
                            </div>
                        </div>
                    </td>
                  </tr>

                  <!-- personal info -->
                  <tr class="d-flex flex-xl-nowrap flex-wrap col-xl-12">
                    <th scope="row" class="vertic-align p-4 th-width th-cus">مشخصات فردی نماینده/معتمد</th>
                    <td class="col-xl-6 col-12 border-cus">
                        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 d-flex flex-column align-items-center justify-content-center">
                            <!-- name and lastname -->
                            <input type="text" name="trusted_name" id="trusted_name" class="form-control m-1 fs-14 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="نام و نام خانوادگی نماینده/معتمد">
                            
                            <!-- Gender -->
                            <div class="d-flex col-12 my-3 flex-row justify-content-start">
                                <p class="mx-2">جنسیت</p>
                                <div class="form-check">
                                    <input class="form-check-input mx-2" type="radio" name="gender" id="flexRadioDefault1" value="male" onclick="onCheckGender(this)">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        مرد
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" checked value="female" onclick="onCheckGender(this)">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                         زن
                                    </label>
                                </div>
                            </div>
                           
                            <!-- id and birth location -->
                            <div class="d-flex col-12 flex-wrap flex-xl-nowrap col-xl-12 flex-row justify-content-start">
                                <input type="text" name="birth_certificate" id="birth_certificate" class="form-control m-1 fs-14 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="شناسنامه ">
                                <input type="text" name="birth_location" id="birth_location" class="form-control m-1 fs-14 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="محل تولد">
                            </div>
                            <!-- birth date -->
                            <div class="d-flex flex-wrap flex-xl-nowrap col-12 col-xl-10 col-lg-10 my-2 flex-row align-items-center justify-content-start">
                                <span class="col-4 p-0 m-0">تاریخ تولد</span>
                                <input type="text" name="day" id="day" class="form-control m-1 col-lg-2 fs-14 col-2 birthdate-input" placeholder="روز">
                                <input type="text" name="month" id="month" class="form-control m-1 col-lg-2 fs-14 col-2 birthdate-input" placeholder="ماه">
                                <input type="text" name="year" id="year" class="form-control m-1 col-lg-2 fs-14 col-2 birthdate-input" placeholder="سال">
                            </div>
                            <!-- meli code and relligion -->
                            <div class="d-flex col-12 flex-wrap flex-xl-nowrap col-xl-12 flex-row justify-content-start">
                                <input type="text" name="meli_code_second" id="meli_code_second" class="form-control m-1 fs-14 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="کد ملی">
                                <input type="text" name="religion" id="religion" class="form-control m-1 fs-14 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="مذهب">
                            </div>
                            <!-- Married Status -->
                            <div class="d-flex col-12 my-3 flex-row justify-content-start">
                                <p class="ms-2">وضعیت ازدواج</p>
                                <div class="form-check">
                                    <input class="form-check-input ms-2" type="radio" name="marriage" id="flexRadioDefault1" value="married" onclick="onCheckMarraige(this)">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        متاهل
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="marriage" id="flexRadioDefault2" checked value="single" onclick="onCheckMarraige(this)">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                         مجرد
                                    </label>
                                </div>
                            </div>

                            <!-- Child Number and phone number -->
                            <div class="d-flex col-12 col-xl-12 flex-wrap flex-xl-nowrap flex-row justify-content-start">
                                <input type="text" name="child_numbers" id="child_numbers" class="form-control m-1 fs-14 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="تعداد فرزندان">
                                <input type="text" name="phone_number_second" id="phone_number_second" class="form-control m-1 fs-14 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="تلفن همراه">
                            </div>
                            <!-- Email and Whatsapp -->
                            <div class="d-flex col-12 col-xl-12 flex-wrap flex-xl-nowrap flex-row justify-content-start">
                                <input type="text" name="email" id="email" class="form-control m-1 fs-14 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="ایمیل">
                                <input type="text" name="whatsapp_number" id="whatsapp_number" class="form-control m-1 fs-14 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="شماره واتس آپ">
                            </div>

                            <!-- Emergency and job -->
                            <div class="d-flex col-12 col-xl-12 flex-wrap flex-xl-nowrap flex-row justify-content-start">
                                <input type="text" name="emergency_number" id="emergency_number" class="form-control m-1 fs-14 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="تلفن یکی از بستگان برای مواقع اضطراری" style="font-size: 13px !important;">
                                <input type="text" name="job" id="job" class="form-control m-1 fs-14 col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12" placeholder="شغل">
                            </div>

                            <!-- Service and income -->
                            <div class="d-flex col-12 col-xl-12 flex-wrap flex-xl-nowrap flex-row justify-content-start">
                                <input type="text" name="service_location" id="service_location" class="form-control m-1 fs-14 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="محل خدمت">
                                <input type="text" name="month_income" id="month_income" class="form-control m-1 fs-14 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="میزان درآمد ماهانه">
                            </div>

                        </div>
                    </td>
                    <td class="col-xl-6 col-12 border-cus">
                        <div class="col-lg-12">
                            <div class="col-xl-12 d-flex flex-column border-bottom pb-3">
                                <div class="form-group">
                                    <textarea name="agent_address" id="address" placeholder="نشانی دقیق محل سکونت نماینده/معتمد" class="form-control rounded" cols="30" rows="5"></textarea>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <input type="text" name="agent_state" id="agent_state" class="form-control m-1 fs-14" placeholder="استان">
                                    <input type="text" name="agent_city" id="agent_city" class="form-control m-1 fs-14" placeholder="شهر">
                                    <input type="text" name="agent_phone" id="agent_phone" class="form-control m-1 fs-14" placeholder="تلفن محل سکونت باکد">
                                </div>
                            </div>
                            <div class="col-xl-12 d-flex flex-column border-bottom pb-3">
                                <div class="d-flex flex-sm-row flex-lg-row flex-md-row col-12 my-3 flex-xl-row flex-lg-nowrap flex-wrap justify-content-start flex-column">
                                    <div class="d-flex col-12 my-3 flex-row justify-content-start">
                                    <p class="">میزان آشنایی با اینترنت وب</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="web" id="flexRadioDefault1" value="professional" onclick="onCheckWeb(this)">
                                        <label class="form-check-label mx-2" for="flexRadioDefault1">
                                            کاربر مسلط
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="web" id="flexRadioDefault2" checked value="regular" onclick="onCheckWeb(this)">
                                        <label class="form-check-label mx-2" for="flexRadioDefault2">
                                                کاربر معمولی
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="web" id="flexRadioDefault2" checked value="beginner" onclick="onCheckWeb(this)">
                                        <label class="form-check-label mx-2" for="flexRadioDefault2">
                                                ناآشنا 
                                        </label>
                                    </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-sm-row flex-lg-row flex-md-row col-12 my-3 flex-xl-row flex-lg-nowrap flex-wrap justify-content-start flex-column">
                                    <div class="d-flex col-12 my-3 flex-row justify-content-start">
                                    <p class="">میزان آشنایی با اندروید/IOS</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="android" id="flexRadioDefault1" value="professional" onclick="onCheckAndroid(this)">
                                        <label class="form-check-label mx-2" for="flexRadioDefault1">
                                            کاربر مسلط
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="android" id="flexRadioDefault2" checked value="regular" onclick="onCheckAndroid(this)">
                                        <label class="form-check-label mx-2" for="flexRadioDefault2">
                                                کاربر معمولی
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="android" id="flexRadioDefault2" checked value="beginner" onclick="onCheckAndroid(this)">
                                        <label class="form-check-label mx-2" for="flexRadioDefault2">
                                                ناآشنا 
                                        </label>
                                    </div>
                                    </div>
                                </div>

                                <div class="d-flex flex-sm-row flex-lg-row flex-md-row col-12 my-3 flex-xl-row flex-lg-nowrap flex-wrap justify-content-start flex-column">
                                    <div class="d-flex col-12 my-3 flex-row justify-content-start">
                                    <p class="">میزان آشنایی با واتس آپ/تلگرام</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="whatsapp" id="flexRadioDefault1" value="professional" onclick="onCheckTelegram(this)">
                                        <label class="form-check-label mx-2" for="flexRadioDefault1">
                                            کاربر مسلط
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="whatsapp" id="flexRadioDefault2" checked value="regular" onclick="onCheckTelegram(this)">
                                        <label class="form-check-label mx-2" for="flexRadioDefault2">
                                                کاربر معمولی
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="whatsapp" id="flexRadioDefault2" checked value="beginner" onclick="onCheckTelegram(this)">
                                        <label class="form-check-label mx-2" for="flexRadioDefault2">
                                                ناآشنا 
                                        </label>
                                    </div>
                                    </div>
                                </div>
                            
                                
                                <div class="d-flex justify-content-between">
                                    <input type="text" name="software" id="software" class="form-control m-1 fs-14" placeholder="یکی از نرم افزاهای ویرایش یا اسکن مسنتدات در موبایل را نام ببرید؟">
                                </div>
                                <div class="d-flex justify-content-between">
                                    <input type="text" name="mardomanim" id="mardomanim" class="form-control m-1 fs-14" placeholder="آیا اپ مردمانیم را براحتی نصب و ثبت نام انجام داده اید؟">
                                </div>
                                <div class="d-flex justify-content-between">
                                    <input type="text" name="benefactor" id="benefactor" class="form-control m-1 fs-14" placeholder="با چند نیکوکار از نزدیک آشنایی دارید؟">
                                </div>
                        
                                <div class="d-flex flex-sm-row flex-lg-row flex-md-row col-12 my-3 flex-xl-row flex-lg-nowrap flex-wrap justify-content-start flex-column">
                                <div class="d-flex col-12 my-3 flex-row justify-content-start">
                                    <p class="">راه ارتباطی با آنان چیست؟</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="connection" id="flexRadioDefault1" value="Whatsapp" onclick="onCheckWay(this)">
                                        <label class="form-check-label mx-2" for="flexRadioDefault1">
                                            گروه واتس آپی 
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="connection" id="flexRadioDefault2" checked value="phone" onclick="onCheckWay(this)">
                                        <label class="form-check-label mx-2" for="flexRadioDefault2">
                                                تلفن 
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="connection" id="flexRadioDefault2" checked value="sms" onclick="onCheckWay(this)">
                                        <label class="form-check-label mx-2" for="flexRadioDefault2">
                                                پیامک 
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="connection" id="flexRadioDefault2" checked value="others" onclick="onCheckWay(this)">
                                        <label class="form-check-label mx-2" for="flexRadioDefault2">
                                                سایر راهها 
                                        </label>
                                    </div>
                                    </div>
                                </div>
                                
                                <div class="d-flex justify-content-between">
                                    <input type="text" class="form-control m-1 fs-14" id="benefactor_limit" name="benefactor_limit" placeholder="آیا میتوانید حداقل ۱۰ نفر از نیکوکاران را در اپ عضو کنید؟">
                                </div>
                            </div>
                        </div>
                    </td>
                  </tr>
                  
                  <!-- activities -->
                  <tr class="d-flex col-12 flex-column flex-lg-row flex-xl-row flex-xl-nowrap">
                    <th scope="row" class="vertic-align p-4 th-width th-cus">فعالیتها</th>
                    <td class="col-xl-12 col-12 border-cus" colspan="2">
                        <div class="form-group">
                            <textarea name="connetction_to_mardomanim" id="connetction_to_mardomanim" placeholder="از چه طریقی با مردمانیم مرتبط شدید؟" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea name="how_many_years" id="how_many_years"  placeholder="چند سال است فعالیت دارید؟ آیا شخصا نیازها را شناسایی و ممیزی میکنید و کار انجام میدهید یا عواملی دارید؟ توضیح دهید." class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea name="how_to_find" id="how_to_find"  placeholder="نیازمندان را چگونه پیدا میکنید؟ چه روشی برای ممیزی و صحت سنجی نیاز آنها دارید؟" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea name="subjects" id="subjects"  placeholder="زمینه های فعالیت شما /موسسه چیست؟" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea name="resources" id="resources"  placeholder="در یک ماه اخیر چقدر منابع ریالی جذب کرده اید؟" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea name="how_much" id="how_much"  placeholder="در یک سال اخیر چقدر؟" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea name="any_comments" id="any_comments"  placeholder="توضیحات دیگری دارید اضافه کنید:" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                        </div>
                        
                    </td>

                  </tr> 

                </tbody>
            </table>

            

            <div class="col-12 w-100 text-end m-0 p-0" style="background-color: #BFBFBF;">
                <p class="text-black m-0 c-font fs-14 p-1" dir="rtl">نام دو نفر از معرفینی که شما را کاملا میشناسند اعلام نمایید.</p>
            </div>
            <div class="row w-100">
                <table class="table table-striped w-100 col-12 d-none d-sm-block c-font " style="direction: rtl;">
                    <thead class="main-color  text-center" >
                        <tr >
                            <th class="th-width2">نام شخص</th>
                            <th class="th-width2">تلفن همراه</th>
                            <th class="th-width2">شغل</th>
                            <th class="th-width2">نشانی</th>
                            <th class="th-width2">نسبت با شما</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr>
                            <td>
                                <div class="form-group">
                                    <textarea name="first_person_name" id="first_person_name" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea name="second_person_name" id="second_person_name" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <textarea name="first_person_phone" id="first_person_phone" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea name="second_person_phone" id="second_person_phone" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <textarea name="first_person_job" id="first_person_job" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea name="second_person_job" id="second_person_job" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <textarea name="first_person_address" id="first_person_address" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea name="second_person_address" id="second_person_address" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <textarea name="first_person_relate" id="first_person_relate" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea name="second_person_relate" id="second_person_relate" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="d-flex flex-column" dir="rtl">
                    <!-- Emergency and job -->
                    <div class="d-flex col-12 col-xl-12 flex-wrap c-font flex-xl-nowrap flex-row justify-content-start">
                        <input type="text" name="first_person_name" id="first_person_name" class="form-control m-1 fs-14  d-sm-none col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="نام شخص اول">
                        <input type="text" name="first_person_phone" id="first_person_phone" class="form-control m-1 d-sm-none fs-14 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="تلفن همراه شخص اول">
                        <input type="text" name="first_person_address" id="first_person_address" class="form-control m-1 d-sm-none fs-14 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="نشانی شخص اول">
                        <input type="text" name="first_person_job" id="first_person_job" class="form-control m-1 d-sm-none fs-14 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="شغل شخص اول">
                        <input type="text"  name="first_person_relate" id="first_person_relate" class="form-control m-1 d-sm-none fs-14 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="نسبت شخص اول با شما">
                    </div>
                    <div class="d-flex col-12 col-xl-12 flex-wrap mt-4 c-font flex-xl-nowrap flex-row justify-content-start">
                        <input type="text" name="second_person_name" id="second_person_name" class="form-control m-1 d-sm-none fs-14 col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12" placeholder="نام شخص دوم">
                        <input type="text" name="second_person_phone" id="second_person_phone" class="form-control m-1 d-sm-none fs-14 col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12" placeholder="تلفن همراه شخص دوم">
                        <input type="text" name="second_person_address" id="second_person_address" class="form-control m-1 d-sm-none fs-14 col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12" placeholder="نشانی شخص دوم">
                        <input type="text" name="second_person_job" id="second_person_job" class="form-control m-1 d-sm-none fs-14 col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12" placeholder="شغل شخص دوم">
                        <input type="text" name="second_person_relate" id="second_person_relate" class="form-control m-1 d-sm-none fs-14 col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12" placeholder="نسبت شخص دوم با شما">
                    </div>
            </div>

            <!-- Description Section -->
            <div class="col-12 d-flex flex-row  c-font align-items-center flex-wrap fs-14 mt-5 mt-lg-0 mt-xl-0 mt-md-0 mt-sm-0" dir="rtl">
                <span>بدینوسیله آقای/خانم</span>
                <div class="d-flex flex-row">
                    <input type="text" name="person_name" id="person_name" class="form-control m-1 fs-14">              
                </div>
                <span>با مشخصات فوق بمدت</span>
                <div class="d-flex flex-row">
                    <input type="text" name="person_info" id="person_info" class="form-control m-1 fs-14">              
                </div>
                <span>ماه بعنوان نماینده موسسه</span>
                <div class="d-flex flex-row">
                    <input type="text" name="institution_agent" id="institution_agent" class="form-control m-1 fs-14">              
                </div>
                <span>معرفی شده و فعالیتهای ایشان در سامانه مردمانیم تحت نظارت</span>
                <span class="mt-2"> و مسولیت آن تماما به عده این موسسه خواهد بود.</span>
            </div>

            <!-- Description 2 Section -->
            <div class="col-12 d-flex flex-row mt-4 c-font align-items-center flex-wrap fs-14" dir="rtl">
                <span>اینجانب</span>
                <div class="d-flex flex-row">
                    <input type="text" name="this_person" id="this_person" class="form-control m-1 fs-14">              
                </div>
                <span>در تاریخ</span>
                <div class="d-flex flex-row">
                    <input type="text"  name="in_date" id="in_date" class="form-control m-1 fs-14">              
                </div>
                <span>با درستی و دقت کامل به سوالات این پرسشنامه پاسخ گفتم</span>
                <span> و نسبت به صحت پاسخهای داده شده خود را مسول میدانم.</span>
                <span>ضمنا تمامی شرایط همکاری با مردمانیم</span>
                <p>
                    <span>را مطالعه کرده و آنها را قبول دارم.</span>
                    <span>معرفی شده و فعالیتهای ایشان در سامانه مردمانیم تحت نظارت</span>
                    <span class="mt-2"> و مسولیت آن تماما به عده این موسسه خواهد بود.</span>
                </p>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <button class="btn btn-primary mx-auto c-font fs-18 px-4 py-2" id="submit_form">ارسال</button>
        </div>
    </form>

    <script src="js/sweetalert2.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>