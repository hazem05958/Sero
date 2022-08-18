<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sero</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('cms/assets/favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('cms/css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('cms/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('cms/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('cms/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <style>
        ::-webkit-scrollbar{
             width: 10px;

        }
        ::-webkit-scrollbar-track {
            background:white;

        }
        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 50px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
        ::-webkit-scrollbar-thumb:active {
            background: #212375;
        }

    </style>


</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="{{ route("home") }}"><img src="{{asset('cms/assets/img/551).svg')}}" alt="" style="width: 65px; height: 65px;"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

                    <i class="fas fa-bars"></i>
                </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto d-flex justify-content-center align-content-center align-items-center">
                    <li class="nav-item"><a class="nav-link" href="{{ route("local") }}">{{ __('Tourism inside Saudi Arabia') }}
                    <li class="nav-item"><a class="nav-link" href="{{ route("b2c") }}">{{ __('Visit Saudi') }}</a></li>
                    <li class="nav-item">
                          <div class="dropdown">
                            {{-- <a class="dropdown-toggle text-decoration-none text-white" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{asset('cms/assets/img/en-US.png')}}" alt="" style="width: 25px; height: 25px; border-radius: 50%;"> En - English</a> --}}
                            <a class="dropdown-toggle text-decoration-none text-white" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">  {{ __('language') }}</a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <li>
                                            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                    @endforeach


                            </ul>
                          </div>
                    </li>

                    @if (Auth::guard('web')->id())
                    <div class="dropdown m-3">
                        {{-- <a class="dropdown-toggle text-decoration-none text-white" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{asset('cms/assets/img/en-US.png')}}" alt="" style="width: 25px; height: 25px; border-radius: 50%;"> En - English</a> --}}
                        <a class="dropdown-toggle text-decoration-none text-white" href="#" role="button"
                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
<<<<<<< HEAD
                            @if (auth('web')->user()->image !== '')
                            
=======
                            {{--  @if (auth('web')->user()->image == '')
                            <img src="{{ asset('storage/images/user.jpg') }}" alt="Logo" style="width: 25px; height: 25px; border-radius: 50%">

                            @else
>>>>>>> dc098fdea87efa7a724a3879560b4881b37a3f8d
                            <img src="{{ asset('storage/images/register/'.auth('web')->user()->image) }}" alt="Logo" style="width: 25px; height: 25px;">
                            @else
                            <img src="{{ asset('storage/images/userSolid.png') }}" alt="Logo" style="width: 25px; height: 25px; border-radius: 50%">

                            @endif  --}}
                            {{--  {{ auth('web')->user()->full_name }}  --}}
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li class="nav-item ">
                                <a href="{{ route('logout') }}" class="nav-link text-black">
                                    <i class="fas fa-sign-out-alt ml-2"></i>
                                         {{ __("Log Out") }}
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ route('profile_edit_user') }}" class="nav-link text-black">
                                    <i class="fas fa-user ml-2"></i>
                                        {{ __("Profile") }}
                                </a>
                            </li>
                        </ul>
                    </div>

                    @endif
            </div>
            </ul>
        </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">{{__('Welcome To')}} <span>{{ __('Sero') }}</span></h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">{{__("The journey of travel through three easy, easy and fast steps")}}</h2>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="about-section text-center" id="about">

    </section>
    <!-- Projects-->
    <section class="projects-section bg-light" id="projects">
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="{{ asset('cms/assets/img/WhatsApp Image 2022-06-19 at 4.08.40 PM.svg') }}" alt="..." /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>{{ __('About Us') }}</h4>
                        <p>{{ __("'Sero' is a step that started its journey from the era of the founder, may God rest his soul, whose first goal is to facilitate the matters of tourism and travel for travelers by providing multiple services at flexible prices.") }}</p>
                    </div>
                </div>
            </div>
            <!-- Project One Row-->
        </div>
    </section>
    <!-- <div id="popup">
        <div class="popup-row">
            <wego-sprite class="adult" height="48" width="48" tag="makalu-search-form" style="background-image: url(&quot;//assets.wego.com/image/sprite/c_pad,f_auto,fl_lossy/q_auto:low,w_48,h_48/v1595260035/makalu-search-form&quot;);">
            </wego-sprite>
            <div class="passenger-type-label">
                <span class="main">Adults</span>
                <span class="sub">&gt;12 years</span>
            </div>
            <div id="a1" class="stepper dec" blocked="1">-</div>
            <div class="count">1</div>
            <div id="a2" class="stepper inc" blocked="0">+</div>
        </div>
    </div> -->
    <!-- Project One Row-->
    <section class="services" id="services" style="margin-bottom: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="card1 card-1">
                        <h5>{{ __("Flights") }}</h5>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="card1 card-2">
                        <h5>{{ __("HOTELS") }}</h5>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="card1 card-3">
                        <h5>{{ __("TRANSPORT") }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 d-flex justify-content-center align-content-center align-items-center">
                <div class="col-sm-12 col-md-6 col-lg-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">{{ __("Email") }}</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a href="#!">info@sero.com.sa</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">{{ __("Address") }}</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">طريق الملك عبدالله الفرعي،المدينة المنورة </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">{{__("Phone")}}</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">+966920007075</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between flex-wrap mt-3">
                <div class="widget widget-links col-12 col-sm-12 col-md-6 col-lg-4 text-decoration-none" style="border: 1px solid transparent; border-radius: 5px;">
                    <h4 class="widget_title text-start" style="border-bottom: 2px solid white;">{{ __("Our services") }}</h4>
                    <ul dir="ltr" style="height: 150px; overflow: hidden;">
                        <li> {{ __("Get a visa from anywhere in the world within 24 hours") }}</li>
                        <li> {{__("Connecting travelers and hotels")}}</li>
                        <li> {{__("Providing ground services of all kinds (providing buses, metro tickets, transportation services)")}}</li>
                        <li> Book flights at the lowest prices with a group of airlines</li>
                        <li> Designing flexible and special packages to suit Umrah performers and pilgrims of all levels.</li>
                        <li> Providing reservations for all hotels around the world</li>
                    </ul>
                </div>

                <div dir="ltr" class="widget widget-links col-12 col-sm-12 col-md-6 col-lg-4" style="border: 1px solid transparent; border-radius: 5px;">
                    <h4 class="widget_title text-start" style="border-bottom: 2px solid white;">{{ __("Quick links") }}</h4>

                    <div class="widget-contact-list">
                        <ul dir="ltr">
                            <li>
                                <a href="index.html"> {{ __("Home") }}</a>
                            </li>
                            <li>
                                <a href="#about1"> {{__("About")}}</a>
                            </li>
                            <li>
                                <!-- link trigger modal -->
                                <a href="" data-bs-toggle="modal" data-bs-target="#Modal">{{ __("privacy policy") }}</a>

                                <!-- Modal -->
                                <div class="modal modal-fullscreen-lg-down fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="ModalLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-black">
                                                <div class=" p-5">
                                                    <h1 class="text-center p-3">Privacy Policy</h1>
                                                    <h3 class="text-danger">Sero com platform rules and policies</h3>
                                                    <p>Our company and all our systems are subject to the general system and policies of the country of origin, which is the Kingdom of Saudi Arabia. Currently, we accept online payments by using credit cards, which include “Visa and MasterCard” cards and can be debited through the currency available in the services via the platform, which can be in Saudi riyals or US dollars, In the event that you wish to usee the electronic payment method via the Internet, there must be a match and complete authorization and a match in the details in the customer ID and the ID of the card holder, which must be completely identical to make purchases</p>

                                                    <p>In cases of refund, only refundable amounts of transactions made on this electronic platform will be refunded to the original payment method through which the payment for the transactions was completed.</p>

                                                    <p>Some basic data related to delivery information, such as customer name, location, postal address and contact numbers, will be stored for the purposes of ensuring delivery. Other personally identifiable information will not be stored.</p>

                                                    <h3 class="text-danger">Cancellation fees
                                                    </h3>
                                                    <ul>
                                                        <li>If cancellation is made between 0 days – 24 days prior to the departure date, 100% of the reservations value will be deducted and will not be refunded in any way.</li>

                                                        <li>If the cancellation is made within a period of time between 25 to 60 days before the scheduled departure date, 50% of the reservation value will be deducted.</li>

                                                        <li>If the cancellation is made within a period of time equal to or greater than 61 days from the scheduled departure date, only 10% of the total value of the reservations will be charged.</li>
                                                        <li>In the event that the name of the data provided in the reservations does not match the data details in the passport, a fine of only 150 Saudi riyals will be required to change the name of the traveler if the change is possible</li>

                                                        <li>For hotels, the siro.com platform does not charge any special additional fees to provide cancellation services as an additional fee in addition to the cancellation fees charged by the hotel in its cancellation policy</li>
                                                    </ul>

                                                    <h3 class="text-danger">General Provisions</h3>

                                                    <p>Through our platform, you can book and travel to any specific destinations you wish, and these destinations may involve greater risks than others, whatever kind of risk, and you will have to bear all responsibility in terms of costs, consequences and full personal responsibility</p>

                                                    <p>sero com platform requests its travelers and all guests to consult the local authorities in their country or the country of travel, and to evaluate travel ban decisions, warnings, advertisements or all instructions issued by local authorities before booking travel to international or domestic destinations in general, certain regions and destinations Especially without any responsibility on the platform</p>

                                                    <p>By providing and selling travel and reservation services to certain countries or destinations, the siro com platform is not in any way responsible or liable for the warning or risks in those destinations, and the siro platform is not considered a guarantor or recommender of travel to these destinations, and the siro platform does not bear any responsibility for Damages, losses or delays that may result from failure to provide correct documents relating to travel, entry, exit or length of stay at those destinations</p>

                                                    <p>Sero Platform and its affiliates, agencies, or suppliers are not responsible in any way for errors, acts, omissions, representations, warranties, violations or negligence made by any airline, hotel or other service provider, and the platform is not responsible for Any personal injury, death, property damage, or any other damages, fees or expenses arising therefrom, Neither Sero nor any of the companies and agents it deals with or any of the service providers of the platform assume any responsibility and will not refund the money in the event of any delay, cancellation of reservation, increase in taxes, force majeure, strikes and riots, or any other actions Others are out of direct control, and the platform shall not be liable for any additional expenses, litigation, delay, redirection, or litigation to any parties or authorities</p>

                                                    <p>Sero Platform reserves its exclusive and complete rights and in its sole discretion to delete, change, limit or discontinue the Site or any material posted on it, and is under no obligation to take into account the needs of any user in connection therewith.</p>

                                                    <p>Sero Platform reserves all its exclusive rights to prevent or deny access to any user of this website or any part of it without prior notice.</p>

                                                    <p>By agreeing to the terms and conditions relating to any of the operations on this platform, you expressly and are bound to agree to be bound by the terms and conditions of purchase and services imposed by any provider or supplier of the service you choose to deal with, including, but not limited to, the payment of all amounts when due in accordance with to the restrictions and rules imposed by the provider or supplier of the services in relation to the availability of the services and the timely use of prices, products or services, and you acknowledge that there may be additional requirements from some suppliers and/or a third party In relation to a third party, the provision of the Service or participation in the Participation, and that you are fully aware that the terms, conditions, rules, and restrictions imposed on the Offer may result in the cancellation of your reservations, or that the Sero Platform debits your account for costs incurred by the Platform as a result of your stay</p>

                                                    <p>No waiver by Sero platform shall be deemed or enforceable in any of the terms and conditions and in any form whatsoever, as is binding, what is stated in writing on the site, or approved and signed by its authorized representative in accordance with the regulations and laws</p>

                                                    <p>All these terms and conditions shall be governed by and construed in accordance with the laws and regulations in force in the Kingdom of Saudi Arabia, and any dispute shall be subject to the exclusive jurisdiction of the appropriate and competent courts and judicial organs located in the Kingdom of Saudi Arabia.</p>

                                                    <h3 class="text-danger">Payment terms and conditions</h3>

                                                    <p>Neither the Sero platform nor its developer will and will not request, store or share any data related to customers' credit cards, login data for their bank accounts, or prepaid cards over the phone or e-mail and under any circumstances</p>

                                                    <p>In the event of a note on payments through our electronic payment gateway, our security team will contact you via e-mail from the following address info@sero.com.sa, and a photo of the credit card will be requested from the front and back on the CVV code For verification, please contact the secure email address: info@sero.com.sa</p>

                                                    <p>In the event that you receive any communication or email from another email address purporting to be sent to you by the Siro platform and requesting any personal or security data, please never reply to that email, and please forward such message to our specialized email which is info@sero.com.sa You will also have to delete, directly and immediately, this anonymous message</p>

                                                    <h3 class="text-danger">Payment for the services provided by the Sero platform can be paid through the following channels:</h3>

                                                    <ul>
                                                        <li>The electronic payment gateway page on our website</li>
                                                        <li>Electronic payment via the secure link on the domain of the Siro platform</li>
                                                        <li>Deposit cash into the Siro platform account at Alinma Bank according to the following IBAN data (IBAN SA1205000068203403610000)</li>
                                                    </ul>

                                                    <p>The user will be warned, and confirmed to agree that he will create electronic payments and that he will issue or create electronic payment instructions and that he will provide his card or credit card data or his or her bank data</p>

                                                    <p>The user is considered the legal user and authorized to use his credit card or bank account, and he is considered legally authorized to carry out payments, withdrawals and bank debits from his accounts in favor of these operations</p>

                                                    <p>The user fully bears all responsibility related to the need to ensure that he has provided the card or bank account details accurately and correctly</p>

                                                    <p>The user will authorize the debiting of the credit card or/and the bank account specified by him for payment in favor of the Sero platform</p>

                                                    <p>The user / customer bears all responsibility for providing sufficient cash balance in the credit card / or bank account that he will use during the payment process for the financial dues and invoices resulting from the services and reservations chosen by him, bearing in mind that all payments are inclusive of all fees related to</p>


                                                    <h3 class="text-danger">Visa Terms and Conditions</h3>

                                                    <p>Nationals of the Arabian Gulf [GCC countries] do not need to obtain a visa, and these terms and conditions relate to all other nationalities outside of the Gulf Cooperation Council countries</p>

                                                    <ul>
                                                        <li>Tourist visa is not valid for work or residence</li>

                                                        <li>The standard duration of a tourist visa is 90 days (unless the visa states otherwise on the sticker or printed visa document).</li>

                                                        <li>The tourist must not “default” or exceed the legal period of the visa, and violating this is considered a violation of the laws of the Kingdom of Saudi Arabia, and the violator will be subject to legal procedures and legal penalties, which may include, but are not limited to financial fines or even access to a ban on entering the Kingdom of Saudi Arabia in the future</li>

                                                        <li>A passport must be valid and valid for a period of no less than six months, and it must be capable of entering the Kingdom of Saudi Arabia and then the next destination. At least two blank pages must be available in the passport, corresponding to one another.</li>
                                                        <li>Al-Sayeh had to cooperate fully with the work team of the Sero platform to fill in and verify the data as follows</li>

                                                        <li>Al-Sayeh is responsible and accountable for the correctness and safety of all the data he submits to the platform, as well as the safety and authenticity of all documents that he will submit to the Siro platform team, including all documents and data that Al-Sayeh himself uploads on the Siro website</li>

                                                        <li>Tourist visa fees are not refundable or refundable in any way, in the event that the tourist decides to cancel a trip after the issuance of the visa reference number (MOVA), [issued after the success of the tourist visa application]</li>

                                                        <li>Sero platform or its team does not bear any legal responsibility or any complaints related to the customer’s violation of the terms, conditions and codes referred to above, and the policies and procedures related to them, and does not accept any kind of liability of any kind in this regard.</li>

                                                        <li>Visitors to the Kingdom of Saudi Arabia must obey the Islamic laws and regulations of the Kingdom and the controls, customs and traditions related to its civilization and society.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="widget widget-links col-12 col-sm-12 col-md-6 col-lg-4" style="border: 1px solid transparent; border-radius: 5px;">
                    <h4 class="widget_title text-start" style="border-bottom: 2px solid white;">{{ __("Social Media") }}</h4>
                    <div class="social d-flex justify-content-center" style="margin-left: auto; margin-right: auto;">
                        <a class="mx-2 " href="https://twitter.com/serovision1?s=21&t=ObGKxjr4RhzOnCC9EgP2mg"><i class="fab fa-twitter "></i></a>
                        <a class="mx-2 " href="https://www.facebook.com/profile.php?id=100082581573020"><i class="fab fa-facebook-f "></i></a>
                        <a class="mx-2 " href="https://www.instagram.com/serovision.1/"><i class="fab fa-instagram "></i></a>
                        <a class="mx-2 " href="https://wa.me/message/PTITBIUHHPWWJ1"><i class="fab fa-whatsapp "></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">{{ __("All rights reserved Privacy Policy") }} &copy; {{__("Sero 2022 - 2023")}}</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('cms/js/scripts.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
