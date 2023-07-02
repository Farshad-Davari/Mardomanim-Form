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
                            <input type="text" name="institution_name" class="form-control m-1 col-3 fs-14 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="نام موسسه">
                            <input type="text" name="institution_website" class="form-control m-1 fs-14 col-3 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="وب سایت موسسه">
                            <input type="text" name="license_number" class="form-control m-1 fs-14 col-3 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="شماره و مرجع مجوز">
                            <input type="text" name="issue_date" class="form-control m-1 fs-14 col-3 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="تاریخ صدور">
                        </div>
                    </td>
                    <td class="col-xl-6 col-12 col-6 col-lg-6">
                        <div class="col-xl-5 d-flex flex-column">
                            <div class="col-xl-12 d-flex flex-lg-row flex-column">
                                <input type="text" name="institution-head" class="form-control m-1 fs-14 col-xl-4 align-self-start" placeholder="نام و نام خانوادگی مسول موسسه">
                                <input type="text"  name="meli_code" class="form-control m-1 fs-14 col-xl-4 align-self-start" placeholder="کد ملی">
                            </div>
                            <div class="col-xl-12 d-flex flex-row">
                                <input type="text" name="phone_number" class="form-control m-1 align-self-lg-center fs-14 col-xl-4" placeholder="تلفن همراه">
                            </div>
                            <div class="col-xl-12 mt-5 d-flex flex-lg-row flex-column">
                                <input type="text" name="institution_address" class="form-control m-1 fs-14 col-xl-12" placeholder="نشانی دقیق موسسه">
                                <input type="text" name="state" class="form-control m-1 fs-14 col-xl-12" placeholder="استان">
                            </div>
                            <div class="col-xl-12 d-flex flex-lg-row flex-column">
                                <input type="text" name="city" class="form-control m-1 fs-14 col-xl-12" placeholder="شهر">
                                <input type="text" name="institution_landline" class="form-control m-1 fs-14 col-xl-12" placeholder="تلفن ثابت موسسه یا کد">
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
                            <input type="text" name="trusted_name" class="form-control m-1 fs-14 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="نام و نام خانوادگی نماینده/معتمد">
                            <!-- Sexuality -->
                            <div class="d-flex col-12 my-3 flex-row justify-content-start">
                                <label>جنسیت</label>
                                <div class="form-check ms-2">
                                    <input class="form-check-input" name="male" type="checkbox" value="">
                                    <label class="form-check-label me-4">
                                    مرد 
                                    </label>
                                </div>
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="checkbox" name="female" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label me-2" for="flexCheckChecked">
                                    زن
                                    </label>
                                </div>
                            </div>
                            <!-- id and birth location -->
                            <div class="d-flex col-12 flex-wrap flex-xl-nowrap col-xl-12 flex-row justify-content-start">
                                <input type="text" name="birth_certificate" class="form-control m-1 fs-14 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="شناسنامه ">
                                <input type="text" name="birth_location" class="form-control m-1 fs-14 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="محل تولد">
                            </div>
                            <!-- birth date -->
                            <div class="d-flex flex-wrap flex-xl-nowrap col-12 col-xl-10 col-lg-10 my-2 flex-row align-items-center justify-content-start">
                                <span class="col-4 p-0 m-0">تاریخ تولد</span>
                                <input type="text" name="day" class="form-control m-1 col-lg-2 fs-14 col-2 birthdate-input" placeholder="روز">
                                <input type="text" name="month" class="form-control m-1 col-lg-2 fs-14 col-2 birthdate-input" placeholder="ماه">
                                <input type="text" name="year" class="form-control m-1 col-lg-2 fs-14 col-2 birthdate-input" placeholder="سال">
                            </div>
                            <!-- meli code and relligion -->
                            <div class="d-flex col-12 flex-wrap flex-xl-nowrap col-xl-12 flex-row justify-content-start">
                                <input type="text" name="meli_code_second" class="form-control m-1 fs-14 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="کد ملی">
                                <input type="text" name="religion" class="form-control m-1 fs-14 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="مذهب">
                            </div>
                            <!--  -->
                            <div class="d-flex col-12 my-3 flex-row justify-content-start">
                                <label>وضعیت تاهل</label>
                                <div class="form-check ms-2">
                                    <input class="form-check-input" name="married" type="checkbox" value="">
                                    <label class="form-check-label me-4">
                                    متاهل 
                                    </label>
                                </div>
                                <div class="form-check ms-2">
                                    <input class="form-check-input" name="single" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label me-2" for="flexCheckChecked">
                                    مجرد
                                    </label>
                                </div>
                            </div>

                            <!-- Child Number and phone number -->
                            <div class="d-flex col-12 col-xl-12 flex-wrap flex-xl-nowrap flex-row justify-content-start">
                                <input type="text" name="child_numbers" class="form-control m-1 fs-14 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="تعداد فرزندان">
                                <input type="text" name="phone_number_second" class="form-control m-1 fs-14 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="تلفن همراه">
                            </div>
                            <!-- Email and Whatsapp -->
                            <div class="d-flex col-12 col-xl-12 flex-wrap flex-xl-nowrap flex-row justify-content-start">
                                <input type="text" name="email" class="form-control m-1 fs-14 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="ایمیل">
                                <input type="text" name="whatsapp_number" class="form-control m-1 fs-14 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="شماره واتس آپ">
                            </div>

                            <!-- Emergency and job -->
                            <div class="d-flex col-12 col-xl-12 flex-wrap flex-xl-nowrap flex-row justify-content-start">
                                <input type="text" name="emergency_number" class="form-control m-1 fs-14 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="تلفن یکی از بستگان برای مواقع اضطراری" style="font-size: 13px !important;">
                                <input type="text" name="job" class="form-control m-1 fs-14 col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12" placeholder="شغل">
                            </div>

                            <!-- Service and income -->
                            <div class="d-flex col-12 col-xl-12 flex-wrap flex-xl-nowrap flex-row justify-content-start">
                                <input type="text" name="service_location" class="form-control m-1 fs-14 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="محل خدمت">
                                <input type="text" name="month_income" class="form-control m-1 fs-14 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="میزان درآمد ماهانه">
                            </div>

                        </div>
                    </td>
                    <td class="col-xl-6 col-12 border-cus">
                        <div class="col-lg-12">
                            <div class="col-xl-12 d-flex flex-column border-bottom pb-3">
                                <div class="form-group">
                                    <textarea name="agent_address" id="address"  placeholder="نشانی دقیق محل سکونت نماینده/معتمد" class="form-control rounded" cols="30" rows="5"></textarea>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <input type="text" name="agent_state" class="form-control m-1 fs-14" placeholder="استان">
                                    <input type="text" name="agent_city" class="form-control m-1 fs-14" placeholder="شهر">
                                    <input type="text" name="agent_phone" class="form-control m-1 fs-14" placeholder="تلفن محل سکونت باکد">
                                </div>
                            </div>
                            <div class="col-xl-12 d-flex flex-column border-bottom pb-3">
                                <div class="d-flex flex-sm-row flex-lg-row flex-md-row col-12 my-3 flex-xl-row flex-lg-nowrap flex-wrap justify-content-start flex-column">
                                    <label class="ms-4">میزان آشنایی با اینترنت وب</label>
                                    <div class="form-check me-xl-4 me-md-2 me-sm-2">
                                        <input class="form-check-input" name="web" type="checkbox" value="professional">
                                        <label class="form-check-label">
                                          کاربر مسلط 
                                        </label>
                                    </div>
                                    <div class="form-check me-xl-4 me-md-2 me-sm-2">
                                        <input class="form-check-input" name="web" type="checkbox" value="regular" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                           کاربر معمولی
                                        </label>
                                    </div>
                                    <div class="form-check me-xl-4 me-md-2 me-sm-2">
                                        <input class="form-check-input" name="web" type="checkbox" value="beginner" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                           نا آشنا
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex flex-sm-row flex-lg-row flex-md-row col-12 my-3 flex-xl-row flex-lg-nowrap flex-wrap justify-content-start flex-column">
                                    <label class="ms-4">میزان آشنایی با اندروید/IOS</label>
                                    <div class="form-check me-xl-4 me-md-2 me-sm-2">
                                        <input class="form-check-input" name="android" type="checkbox" value="professional">
                                        <label class="form-check-label">
                                          کاربر مسلط 
                                        </label>
                                    </div>
                                    <div class="form-check me-xl-4 me-md-2 me-sm-2">
                                        <input class="form-check-input" name="android" type="checkbox" value="regular" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                           کاربر معمولی
                                        </label>
                                    </div>
                                    <div class="form-check me-xl-4 me-md-2 me-sm-2">
                                        <input class="form-check-input" name="android" type="checkbox" value="beginner id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                           نا آشنا
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex flex-sm-row flex-lg-row flex-md-row col-12 my-3 flex-xl-row flex-lg-nowrap flex-wrap justify-content-start flex-column">
                                    <label class="ms-4">میزان آشنایی با واتس اپ/تلگرام</label>
                                    <div class="form-check me-xl-4 me-md-2 me-sm-2">
                                        <input class="form-check-input" name="telegram" type="checkbox" value="professional">
                                        <label class="form-check-label">
                                          کاربر مسلط 
                                        </label>
                                    </div>
                                    <div class="form-check me-xl-4 me-md-2 me-sm-2">
                                        <input class="form-check-input" name="telegram" type="checkbox" value="regular id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                           کاربر معمولی
                                        </label>
                                    </div>
                                    <div class="form-check me-xl-4 me-md-2 me-sm-2">
                                        <input class="form-check-input" name="telegram" type="checkbox" value="beginner" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                           نا آشنا
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="d-flex justify-content-between">
                                    <input type="text" name="software" class="form-control m-1 fs-14" placeholder="یکی از نرم افزاهای ویرایش یا اسکن مسنتدات در موبایل را نام ببرید؟">
                                </div>
                                <div class="d-flex justify-content-between">
                                    <input type="text" name="mardomanim" class="form-control m-1 fs-14" placeholder="آیا اپ مردمانیم را براحتی نصب و ثبت نام انجام داده اید؟">
                                </div>
                                <div class="d-flex justify-content-between">
                                    <input type="text" name="benefactor" class="form-control m-1 fs-14" placeholder="با چند نیکوکار از نزدیک آشنایی دارید؟">
                                </div>
                                <div class="d-flex flex-sm-row flex-lg-row flex-md-row col-12 my-3 flex-xl-row flex-lg-nowrap flex-wrap justify-content-start flex-column">
                                    <label class="ms-4">راه ارتباطی با آنان چیست؟</label>
                                    <div class="form-check me-xl-4 me-md-2 me-sm-2">
                                        <input class="form-check-input" name="connection" type="checkbox" value="Whatsapp">
                                        <label class="form-check-label">
                                          گروه واتس آپی  
                                        </label>
                                    </div>
                                    <div class="form-check me-xl-4 me-md-2 me-sm-2">
                                        <input class="form-check-input" name="connection" type="checkbox" value="phone" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                           تلفن 
                                        </label>
                                    </div>
                                    <div class="form-check me-xl-4 me-md-2 me-sm-2">
                                        <input class="form-check-input" name="connection" type="checkbox" value="sms" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                           پیامک 
                                        </label>
                                    </div>
                                    <div class="form-check me-xl-4 me-md-2 me-sm-2">
                                        <input class="form-check-input" name="connection" type="checkbox" value="others" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                           سایر راهها 
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="d-flex justify-content-between">
                                    <input type="text" class="form-control m-1 fs-14" name="benefactor_limit" placeholder="آیا میتوانید حداقل ۱۰ نفر از نیکوکاران را در اپ عضو کنید؟">
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
                            <textarea name="connetction_to_mardomanim" id="address"  placeholder="از چه طریقی با مردمانیم مرتبط شدید؟" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea name="how_many_years" id="address"  placeholder="چند سال است فعالیت دارید؟ آیا شخصا نیازها را شناسایی و ممیزی میکنید و کار انجام میدهید یا عواملی دارید؟ توضیح دهید." class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea name="how_to_find" id="address"  placeholder="نیازمندان را چگونه پیدا میکنید؟ چه روشی برای ممیزی و صحت سنجی نیاز آنها دارید؟" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea name="subjects" id="address"  placeholder="زمینه های فعالیت شما /موسسه چیست؟" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea name="resources" id="address"  placeholder="در یک ماه اخیر چقدر منابع ریالی جذب کرده اید؟" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea name="how_much" id="address"  placeholder="در یک سال اخیر چقدر؟" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea name="any_comments" id="address"  placeholder="توضیحات دیگری دارید اضافه کنید:" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                        </div>
                        
                    </td>

                  </tr> 

                </tbody>
            </table>

            

            <table class="table table-striped c-font table-query" style="direction: rtl;">
                <div class="col-12 text-end m-0 p-0" style="background-color: #BFBFBF;">
                    <p class="text-black m-0 c-font fs-14 p-1" dir="rtl">نام دو نفر از معرفینی که شما را کاملا میشناسند اعلام نمایید.</p>
                </div>
                <thaed class="main-color text-center">
                    <th class="th-width2">نام شخص</th>
                    <th class="th-width2">تلفن همراه</th>
                    <th class="th-width2">شغل</th>
                    <th class="th-width2">نشانی</th>
                    <th class="th-width2">نسبت با شما</th>
                </thead>
                <tbody>
                    <td>
                        <div class="form-group">
                            <textarea name="first_person_name" id="address" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea name="second_person_name" id="address" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <textarea name="first_person_phone" id="address" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea name="second_person_phone" id="address" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <textarea name="first_person_job" id="address" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea name="second_person_job" id="address" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <textarea name="first_person_address" id="address" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea name="second_person_address" id="address" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <textarea name="first_person_relate" id="address" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea name="second_person_relate" id="address" class="form-control rounded mt-2" cols="20" rows="3"></textarea>
                        </div>
                    </td>
                </tbody>
            </table>

            <div class="d-flex flex-column" dir="rtl">
                    <!-- Emergency and job -->
                    <div class="d-flex col-12 col-xl-12 flex-wrap c-font flex-xl-nowrap flex-row justify-content-start">
                        <input type="text" name="first_person_name" class="form-control m-1 fs-14 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="نام شخص اول">
                        <input type="text" name="first_person_phone" class="form-control m-1 fs-14 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="تلفن همراه شخص اول">
                        <input type="text" name="first_person_address" class="form-control m-1 fs-14 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="نشانی شخص اول">
                        <input type="text" name="first_person_job" class="form-control m-1 fs-14 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="شغل شخص اول">
                        <input type="text"  name="first_person_relate" class="form-control m-1 fs-14 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12" placeholder="نسبت شخص اول با شما">
                    </div>
                    <div class="d-flex col-12 col-xl-12 flex-wrap mt-4 c-font flex-xl-nowrap flex-row justify-content-start">
                        <input type="text" name="second_person_name" class="form-control m-1 fs-14 col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12" placeholder="نام شخص دوم">
                        <input type="text" name="second_person_phone" class="form-control m-1 fs-14 col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12" placeholder="تلفن همراه شخص دوم">
                        <input type="text" name="second_person_address" class="form-control m-1 fs-14 col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12" placeholder="نشانی شخص دوم">
                        <input type="text" name="second_person_job" class="form-control m-1 fs-14 col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12" placeholder="شغل شخص دوم">
                        <input type="text" name="second_person_relate" class="form-control m-1 fs-14 col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12" placeholder="نسبت شخص دوم با شما">
                    </div>
            </div>

            <!-- Description Section -->
            <div class="col-12 d-flex flex-row  c-font align-items-center flex-wrap fs-14 mt-5 mt-lg-0 mt-xl-0 mt-md-0 mt-sm-0" dir="rtl">
                <span>بدینوسیله آقای/خانم</span>
                <div class="d-flex flex-row">
                    <input type="text" name="person_name" class="form-control m-1 fs-14">              
                </div>
                <span>با مشخصات فوق بمدت</span>
                <div class="d-flex flex-row">
                    <input type="text" name="person_info" class="form-control m-1 fs-14">              
                </div>
                <span>ماه بعنوان نماینده موسسه</span>
                <div class="d-flex flex-row">
                    <input type="text" name="institution_agent" class="form-control m-1 fs-14">              
                </div>
                <span>معرفی شده و فعالیتهای ایشان در سامانه مردمانیم تحت نظارت</span>
                <span class="mt-2"> و مسولیت آن تماما به عده این موسسه خواهد بود.</span>
            </div>

            <!-- Description 2 Section -->
            <div class="col-12 d-flex flex-row mt-4 c-font align-items-center flex-wrap fs-14" dir="rtl">
                <span>اینجانب</span>
                <div class="d-flex flex-row">
                    <input type="text" name="this_person" class="form-control m-1 fs-14">              
                </div>
                <span>در تاریخ</span>
                <div class="d-flex flex-row">
                    <input type="text"  name="in_date" class="form-control m-1 fs-14">              
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