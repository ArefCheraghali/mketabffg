<?php include 'template/header.php';
//if(!isset($_SESSION['loggedIn'])){
//       echo '<meta http-equiv="refresh" content="0; URL=login.php" />';
//}
?>

<div class="container  text-right">
    <form class="row row-content" method="post" action="grade.php">
        <div class="col-12 col-md-6">
            <div class="card bg-light mb-3">
                <div class="card-header">1 – کدام یک از گزینه های زیر از شعار های حزب نمی باشد؟</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                                <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                                <label for="question-1-answers-A">1) نادانی، توانایی است.</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                                <label for="question-1-answers-B">2) جنگ،صلح است.</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                                <label for="question-1-answers-C">3) دانایی، حماقت است.</label>
                        </li>

                        <li class="list-group-item">
                                <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                                <label for="question-1-answers-D">4) آزادی، بردگی است.</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card bg-light mb-3">
                <div class="card-header">2 – چرا فیلهای نمایش داده شده در سینما همگی جنگی هستند؟ </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                                <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                                <label for="question-2-answers-A">1) افزایش روحیه میهن پرستی میان اقشار جامعه</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                                <label for="question-2-answers-B">2) تاکید بر شعار جنگ صلح است</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                                <label for="question-2-answers-C">3) افزایش خشونت و ایجاد روحیه قهرمانی </label>
                        </li>

                        <li class="list-group-item">
                                <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                                <label for="question-2-answers-D">4) پیروزی های بی پایان آنها بر دشمنان</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card bg-light mb-3">
                <div class="card-header">3 – چه ویژگی درونی ای در اوبراین باعث کشش عمیقی در وینستون نسبت به او شده بود؟</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                                <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                                <label for="question-3-answers-A">1) تعجب و شگفتی از تضاد اطوار متمدن اوبراین با بدن ورزیده او</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                                <label for="question-3-answers-B">2) تیپ و قیافه متمدن و متفاوت نسبت به بقیه اعضا</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                                <label for="question-3-answers-C">3) نگاه نافذ او</label>
                        </li>

                        <li class="list-group-item">
                                <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                                <label for="question-3-answers-D">4) نحوه قدم برداشتن و حرکات بدنش</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card bg-light mb-3">
                <div class="card-header">4 – طبق گفته های نویسنده کدام جمله در مورد زبان نو "نادرست" است؟ </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                                <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                                <label for="question-4-answers-A">1) مشخصه اصلی این ادبیات حذف هرچه بیشتر کلمات غیرضروری است.</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                                <label for="question-4-answers-B">2) جایگزینی لغات غیر ضروری با با لغات تصنعی اما جدید در جهت هرچه بیشتر موافق حزب بودن.</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                                <label for="question-4-answers-C">3) کاهش بزه های فکری به طور کلی</label>
                        </li>

                        <li class="list-group-item">
                                <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                                <label for="question-4-answers-D">4) افزایش قابلیت پنهان کاری و فریب</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card bg-light mb-3">
                <div class="card-header">5  – دو هدف اصلی حزب عبارتند از : </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                                <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                                <label for="question-5-answers-A">1) فتح کره زمین و نابودی تام و تمام امکان اندیشه مستقل</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                                <label for="question-5-answers-B">2) نابودی طبقه کارگر و دستگیری اعضای انجمن برادری </label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                                <label for="question-5-answers-C">3) دستیابی به یک توافق پایدار با دوابر قدرت دیگر_ پایان جنگ </label>
                        </li>

                        <li class="list-group-item">
                                <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                                <label for="question-5-answers-D">4) هیچکدام</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card bg-light mb-3">
                <div class="card-header">6 –چه افرادی توسط مجله تایمز قهرمان کوچولو نامیده می شوند؟ </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                                <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                                <label for="question-6-answers-A">1) کودکان سرباز کشته شده در جنگ</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                                <label for="question-1-answers-B">2) کودکان ممتاز در درسهای مربوط به حزب</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                                <label for="question-6-answers-C">3) کودکانی که بزه فکری والدین خود را لو می دادند</label>
                        </li>

                        <li class="list-group-item">
                                <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                                <label for="question-6-answers-D">4) کودکان بااستعداد در مهارتهای حزب</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card bg-light mb-3">
                <div class="card-header">7 – فرق بزهکاران واقعی با زندانیان سیاسی در بازداشتگاه ها چه بود؟</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                                <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
                                <label for="question-7-answers-A">1) ساکت و ارام بودند</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                                <label for="question-7-answers-B">2) غذا و سیگار استفاده می کردند</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                                <label for="question-7-answers-C">3) بر سر تله اسکرین داد می زند</label>
                        </li>

                        <li class="list-group-item">
                                <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
                                <label for="question-7-answers-D">4) گزینه 2و3</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card bg-light mb-3">
                <div class="card-header">8 – حقیقت واقعی چیست؟</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                                <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
                                <label for="question-8-answers-A">1) آنچه حزب بگوید</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                                <label for="question-8-answers-B">2) دیدن واقعیت از دیدگاه عقل</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                                <label for="question-8-answers-C">3) دو به علاوه دو می شود سه</label>
                        </li>

                        <li class="list-group-item">
                                <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
                                <label for="question-8-answers-D">4) دو به علاوه دو می شود چهار</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card bg-light mb-3">
                <div class="card-header">9 – آرمان تنظیمی حزب چه بود؟</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                                <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
                                <label for="question-9-answers-A">1) چیزی غول آسا، ترسناک و درخشان</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                                <label for="question-9-answers-B">2) ملتی متحد از رزمندگان و متعصبین</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
                                <label for="question-9-answers-C">3) ملتی که تا ابدالآباد کار کنند، بجنگند و پیروز شوند و با دار آویخته شوند</label>
                        </li>

                        <li class="list-group-item">
                                <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
                                <label for="question-9-answers-D">4) همه موارد</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card bg-light mb-3">
                <div class="card-header">10 – جمله حیوانات و رنجبران با کدام گزینه مطابقت بیشتری دارد؟</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                                <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
                                <label for="question-10-answers-A">1) داشتن احساس سیاسی قوی برای رنجبران مطلوب نبود.</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                                <label for="question-10-answers-B">2) حب وطنی عمیق و ریشه دار برای رنجبران لازم بود.</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
                                <label for="question-10-answers-C">3) بپذیرند هرچه را حتی وقتی خلاف حرف حزب باشد.</label>
                        </li>

                        <li class="list-group-item">
                                <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
                                <label for="question-10-answers-D">4) در حاشیه شهر و نزدیک جنگل ها زندگی می کردند.</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card bg-light mb-3">
                <div class="card-header">11 – تعداد جملات صحیح را براساس گفته های کتاب مشخص کنید؟
                <br/>-	وزارت صلح به امور جنگها می پرداخت و وزارت فراوانی مسئول امور اقتصادی بود.
                <br/>-	وزارت عشق ساختمانی بدون پنجره در مرکز و مربوط امور برده داری و زندان بود.
                <br/>-	وزارت حقیقت به اخبار و سرگرمی و آموزش هنرهای زیبا مربوط بود.
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                                <input type="radio" name="question-11-answers" id="question-11-answers-A" value="A" />
                                <label for="question-11-answers-A">1) 1</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-11-answers" id="question-11-answers-B" value="B" />
                                <label for="question-11-answers-B">2) 2</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-11-answers" id="question-11-answers-C" value="C" />
                                <label for="question-11-answers-C">3) 0</label>
                        </li>

                        <li class="list-group-item">
                                <input type="radio" name="question-11-answers" id="question-11-answers-D" value="D" />
                                <label for="question-11-answers-D">4) 3</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card bg-light mb-3">
                <div class="card-header">12 – چرا جولیا وینستون را مجاب کرد تا علی رغم میلش بعضی از شب هارا به کار داوطلبانه نیمه وقت اسلحه سازی برای حزب بپردازد؟</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                                <input type="radio" name="question-12-answers" id="question-12-answers-A" value="A" />
                                <label for="question-12-answers-A">1) چون معتقد بود رعایت قوانین کوچک امکان شکست قوانین بزرگ را فراهم میسازد.</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-12-answers" id="question-12-answers-B" value="B" />
                                <label for="question-12-answers-B">2) جولیا از دوران کودکی معتقد بود که جنگ جدا از سایر مسائل است و یک مسئله ملی محسوب میشود.</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-12-answers" id="question-12-answers-C" value="C" />
                                <label for="question-12-answers-C">3) برای ادامه رابطه پنهانی شان نیاز به اسلحه ای برای دفاع از خود داشتند.</label>
                        </li>

                        <li class="list-group-item">
                                <input type="radio" name="question-12-answers" id="question-12-answers-D" value="D" />
                                <label for="question-12-answers-D">4) گزینه 1 و 3</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card bg-light mb-3">
                <div class="card-header">13 – هدف از انقلاب ایجاد یک ...........است.</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                                <input type="radio" name="question-13-answers" id="question-13-answers-A" value="A" />
                                <label for="question-13-answers-A">1) جامعه عادلانه</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-13-answers" id="question-13-answers-B" value="B" />
                                <label for="question-13-answers-B">2) حکومت دیکتاتوری</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-13-answers" id="question-13-answers-C" value="C" />
                                <label for="question-13-answers-C">3) حکومت مردمی</label>
                        </li>

                        <li class="list-group-item">
                                <input type="radio" name="question-13-answers" id="question-13-answers-D" value="D" />
                                <label for="question-13-answers-D">4) هیچکدام</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card bg-light mb-3">
                <div class="card-header">14 – بنابر عقیده وینستون، اگر امیدی باشد در.......نهفته است، زیرا امکان فروپاشی حزب از ......وجود نداشت و تنها نیاز بود که ......از قدرت خود آگاه شوند و آنگاه اگر تصمیم میگرفتند حزب تماما متلاشی میشد.</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                                <input type="radio" name="question-14-answers" id="question-14-answers-A" value="A" />
                                <label for="question-14-answers-A">1) رنجبران(طبقه کارگر) _ درون _ رنجبران</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-14-answers" id="question-14-answers-B" value="B" />
                                <label for="question-14-answers-B">2) نیروهای اوراسیه _ درون _ اعضای ناراضی حزب</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-14-answers" id="question-14-answers-C" value="C" />
                                <label for="question-14-answers-C">3) اعضای ناراضی حزب _ بیرون _ رنجبران</label>
                        </li>

                        <li class="list-group-item">
                                <input type="radio" name="question-14-answers" id="question-14-answers-D" value="D" />
                                <label for="question-14-answers-D">4) رنجبران _ درون _ اعضای ناراصی حزب </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card bg-light mb-3">
                <div class="card-header">15 – شعار حزب در رابطه با طبقه کارگر چه بود و چرا حزب از آن‌ها فقط انتظار کمی حب وطن پرستی داشت؟ </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                                <input type="radio" name="question-15-answers" id="question-15-answers-A" value="A" />
                                <label for="question-15-answers-A">1) کارگران و حیوانات آزادند _ تا درمواقع لزوم مقداری بیشتر کار کنند و یا جیره کمتری دریافت کنند.</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-15-answers" id="question-15-answers-B" value="B" />
                                <label for="question-15-answers-B">2) کارگران و حیوانات آزادند _ در جنگ از آن‌ها استفاده کنند.</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-15-answers" id="question-15-answers-C" value="C" />
                                <label for="question-15-answers-C">3) کارگران زیر بنای استعمار حزب را تشکیل میدهند _ تا در مواقع لزوم مقداری بیشتر کار کنند و یا جیره کمتری دریافت کنند.</label>
                        </li>

                        <li class="list-group-item">
                                <input type="radio" name="question-15-answers" id="question-15-answers-D" value="D" />
                                <label for="question-15-answers-D">4) کارگران زیر بنای استعمار حزب را تشکیل میدهند _ در جنگ از آن هااستفاده کنند.</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card bg-light mb-3">
                <div class="card-header">16 – تعداد جملات صحیح را براساس گفته های کتاب مشخص کنید؟
                <br/>- بین عفاف و همرنگی سیاسی پیوندی مستقیم و نزدیک برقرار بود.
                <br/>- سائقه جنسی برای حزب خطرناک بود و آنره به نفع خویش تغییر داده بود.
                <br/>- محرومیت جنسی موجب برانگیختن شور و هیجان می شود که امکان تبدیل آن به تب جنگ و رهبر پرستی مطلوب نماید.
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                                <input type="radio" name="question-16-answers" id="question-16-answers-A" value="A" />
                                <label for="question-16-answers-A">1) 1</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-16-answers" id="question-16-answers-B" value="B" />
                                <label for="question-16-answers-B">2) 2</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-16-answers" id="question-16-answers-C" value="C" />
                                <label for="question-16-answers-C">3) 3</label>
                        </li>

                        <li class="list-group-item">
                                <input type="radio" name="question-16-answers" id="question-16-answers-D" value="D" />
                                <label for="question-16-answers-D">4) 0</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card bg-light mb-3">
                <div class="card-header">17 – قدرت به معنی چیست ؟</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                                <input type="radio" name="question-17-answers" id="question-17-answers-A" value="A" />
                                <label for="question-17-answers-A">1) متلاشی کردن ذهن انسان</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-17-answers" id="question-17-answers-B" value="B" />
                                <label for="question-17-answers-B">2) توانمندی در ایجاد حکومت</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-17-answers" id="question-17-answers-C" value="C" />
                                <label for="question-17-answers-C">3) شکل دادن ذهن انسان به طور دلخواه</label>
                        </li>

                        <li class="list-group-item">
                                <input type="radio" name="question-17-answers" id="question-17-answers-D" value="D" />
                                <label for="question-17-answers-D">4) گزینه 1و3</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card bg-light mb-3">
                <div class="card-header">18 – از نظر وینستون خیانت واقعی به چه معناست ؟</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                                <input type="radio" name="question-18-answers" id="question-18-answers-A" value="A" />
                                <label for="question-18-answers-A">1) اینکه بتوانند او را از عشق به جولیا باز دارند.</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-18-answers" id="question-18-answers-B" value="B" />
                                <label for="question-18-answers-B">2) افراد بی گناه را به زور شکنجه لو دهد.</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-18-answers" id="question-18-answers-C" value="C" />
                                <label for="question-18-answers-C">3) با وجود تعهدش به اوبراین، از کار بر علیه حزب دست نگه دارد.</label>
                        </li>

                        <li class="list-group-item">
                                <input type="radio" name="question-18-answers" id="question-18-answers-D" value="D" />
                                <label for="question-18-answers-D">4) هیچکدام</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card bg-light mb-3">
                <div class="card-header">19 – اگر همه به یکسان از فراغت و امنیت بهره مند شوند و به عبارتی ثروت جنبه عمومی پیدا کند چه اتفاقی رخ میدهد ؟</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                                <input type="radio" name="question-19-answers" id="question-19-answers-A" value="A" />
                                <label for="question-19-answers-A">1) توده های گسترده مردم که به دلیل فقر عقب مانده بودند خیلی زود به سواد و اگاهی میرسند و متوجه میشوند که اقلیت ممتاز کار خاصی انجام نمیدهند و اقدام به نابودی ان ها میکنند.</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-19-answers" id="question-19-answers-B" value="B" />
                                <label for="question-19-answers-B">2) طبقه ثروتمند قبلی شروع به تضعیف سایرین میکند تا همچنان قدرت را در دست خویش نگه دارد.</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-19-answers" id="question-19-answers-C" value="C" />
                                <label for="question-19-answers-C">3) به دلیل یکسان شدن سطح رفاه ، دیگر شاهد جنگ و خونریزی نخواهیم بود مگر به دلایل مذهبی</label>
                        </li>

                        <li class="list-group-item">
                                <input type="radio" name="question-19-answers" id="question-19-answers-D" value="D" />
                                <label for="question-19-answers-D">4) همه موارد</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card bg-light mb-3">
                <div class="card-header">20 – از ابتدایی ترین حکومت ها تا اوایل قرن بیستم تاریخ همواره گواه بر این موضوع بوده است که طبقه متوسط با اعفال و یا همراه کردن طبقه فقیر درصدد سرنگونی طبقه حاکم برآمده و پس از به قدرت رسیدن خود مجددا به سرکوب طبقه فقیر میپردازد، دانشمندان در این باره به چه نکته ای رسیدند؟</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                                <input type="radio" name="question-20-answers" id="question-20-answers-A" value="A" />
                                <label for="question-20-answers-A">1) نابرابری قانون تغییر ناپذیر زندگی است.</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-20-answers" id="question-20-answers-B" value="B" />
                                <label for="question-20-answers-B">2) طبقه فقیر خود علاقه ای به قدرت ندارد.</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-20-answers" id="question-20-answers-C" value="C" />
                                <label for="question-20-answers-C">3) جهان برای رسیدن به برابری تنها یک راه دارد و آن نابودی تمامی دولت ها و حکومت هاست.</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-20-answers" id="question-20-answers-D" value="D" />
                                <label for="question-20-answers-D">4) اداره کشور با ترکیبی از قوانین کمونیستی و دموکراسی</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card bg-light mb-3">
                <div class="card-header">21 – در دنیایی که حزب به دنبال رسیدن به آن است. وفاداری فقط به .......درمیان خواهد بود.عشق جز عشق به ........نخواهد بود.و خنده ای جز خنده ........ نخواهید شنید.</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                                <input type="radio" name="question-21-answers" id="question-21-answers-A" value="A" />
                                <label for="question-21-answers-A">1) حزب _ ناظر کبیر _ پیروزی بر دشمن</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-21-answers" id="question-21-answers-B" value="B" />
                                <label for="question-21-answers-B">2) میهن _ فرزند _ شکنجه </label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-21-answers" id="question-21-answers-C" value="C" />
                                <label for="question-21-answers-C">3) میهن _ ناظر کبیر _ پیروزی بر دشمن</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-21-answers" id="question-21-answers-D" value="D" />
                                <label for="question-21-answers-D">4) حزب _ فرزند _ شکنجه</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card bg-light mb-3">
                <div class="card-header">22 – هدف “زبان جدید” بیانگر کدام حقیقت نمی‌باشد؟</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                                <input type="radio" name="question-22-answers" id="question-22-answers-A" value="A" />
                                <label for="question-22-answers-A">1) دامنه آگاهی همیشه کمی کوچکتر</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-22-answers" id="question-22-answers-B" value="B" />
                                <label for="question-22-answers-B">2) بهانه‌ای برای ارتکاب جرم اندیشه</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-22-answers" id="question-22-answers-C" value="C" />
                                <label for="question-22-answers-C">3) مهار واقعیت</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-22-answers" id="question-22-answers-D" value="D" />
                                <label for="question-22-answers-D">4) تنگ کردن حیطه اندیشه حزب</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card bg-light mb-3">
                <div class="card-header">23 –  در زبان جدید واژه خودزیستی به چه معنا بود؟</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                                <input type="radio" name="question-23-answers" id="question-23-answers-A" value="A" />
                                <label for="question-23-answers-A">1) فردگرایی و مردم گریزی</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-23-answers" id="question-23-answers-B" value="B" />
                                <label for="question-23-answers-B">2) اصلاح خود و رفاقت‌های زنگ‌زده</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-23-answers" id="question-23-answers-C" value="C" />
                                <label for="question-23-answers-C">3) فردگرایی و خانواده دوستی</label>
                        </li>
                        <li class="list-group-item">
                                <input type="radio" name="question-23-answers" id="question-23-answers-D" value="D" />
                                <label for="question-23-answers-D">4) توجه به خویشتن و دوری از شامگاه‌های دیرپا و پرهیاهو</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card bg-light mb-3">
                <div class="card-header">24 –  جمله ی " سلامت عقل جنبه آماری ندارد " به چه مفهوم است ؟ </div>
                <div class="card-body">
                    <textarea class="form-control" name="question-24-answers" id="question-24-answers-D" rows="3" maxlength="30" placeholder="پاسخ خود را در 2 یا 3 سطر بنویسید."></textarea>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card bg-light mb-3">
                <div class="card-header">25 – مفهوم 3 شعار حزب چیست؟</div>
                <div class="card-body">
                    <textarea class="form-control" name="question-25-answers" id="question-25-answers-D" rows="3" maxlength="120" placeholder="پاسخ خود را در 3 یا 4 سطر بنویسید."></textarea>
                </div>
            </div>
        </div>
            <div class="col-12 ">
                <button type="submit" class="btn btn-primary btn-lg btn-block">
                    پایان
                </button>
            </div>
    </form>
</div>

<?php include 'template/footer.php'; ?>