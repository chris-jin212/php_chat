<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Description" content="Rishta Pakistan is a free Pakistani marriage proposals service for local and overseas Pakistanis. It is a Pakistani Matrimonial online matchmaking site.">
        <meta name="keywords" content="Pakistani Rishta,Pakistani Rishtay,Pakistani Proposals, Pakistani matchmaking, pakistani matrimonial website, pakistani marriage proposals, shadi online, pakistani free rishtay, pakistani zaroorat-e-rishta, pakistani proposal for marriage, pakistani matrimony, zaroorat rishta in pakistan ">

        <!-- Global Site Tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106552795-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments)
            }
            ;
            gtag('js', new Date());

            gtag('config', 'UA-106552795-1');
        </script>
        <title>Rishta Pakistan - Free matchmaking proposals and rishtay for Pakistanis</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/business-casual.css" rel="stylesheet">

        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-3031792063178905",
                enable_page_level_ads: true
            });
        </script>


        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
        <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
        <script>
            window.addEventListener("load", function () {
                window.cookieconsent.initialise({
                    "palette": {
                        "popup": {
                            "background": "#000"
                        },
                        "button": {
                            "background": "#f1d600"
                        }
                    },
                    "position": "top",
                    "static": true
                })
            });
        </script>

        <script language="javascript" type="text/javascript" async>

            // Set up the image files to be used.

            var theImages = new Array(); // do not change this

            // To add more image files, continue with the
            // pattern below, adding to the array.
            // do not edit anything below this line

            var j = 0;
            var p = theImages.length;
            var preBuffer = new Array();

            for (i = 0; i < p; i++) {
                preBuffer[i] = new Image();
                preBuffer[i].src = theImages[i];
            }

            var whichImage = Math.round(Math.random() * (p - 1));

            function showImage() {
                document.write('<img src="' + theImages[whichImage] + '">');
            }

            function loadvalues() {
                enb('country');
                select_field('country', '');
                select_field('state', '');
                enb('state');
                select_field('city', '');
            }
        </script>
        <script language="javascript" src="Country_States_Cities_loc.js" type="text/javascript"></script>
    </head>



    <body id="index">
        <?php
        include_once("analyticstracking.php");
        include("header.php"); // Header
        include("navigation.php"); // Navigation 
        ?>
        <!-- Navigation and google adsense ends here -->
        <div class="container">
            <div class="row">
                <div class="box">
                    <div class="col-lg-12 text-center">
                        <div class="col-md-8">
                            <div id="carousel-example-generic">


                                <!-- Wrapper for slides -->
                                <div style="margin-bottom:10px">

                                    <a href="register.php"><img class="img-responsive img-full" src="images/six.jpg" alt=""></a>


                                </div>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="panel panel-info" >
                                <div class="panel-heading">
                                    <div class="panel-title">Search Members</div>
                                </div>
                                <div style="padding-top:10px" class="panel-body" >
                                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                                    <form class="form-inline" action="advsearch_results.php" method="get" name="MatriForm" id="MatriForm" onSubmit="return validate()" >
                                        <div style="margin-bottom: 5px" class="radio">
                                            <label class="radio-inline"><input type="radio" name="gender" class="forminput" value="Male" checked>Male</label>
                                            <label class="radio-inline"><input type="radio" name="gender" class="forminput" value="Female">Female</label>
                                        </div>
                                        <br/>
                                        <div style="margin-bottom: 10px" class="form-group">

                                            <label for="sel1">Age:</label>
                                            <select class="form-control" name="age1" id="age1">
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                                <option value="32">32</option>
                                                <option value="33">33</option>
                                                <option value="34">34</option>
                                                <option value="35">35</option>
                                                <option value="36">36</option>
                                                <option value="37">37</option>
                                                <option value="38">38</option>
                                                <option value="39">39</option>
                                                <option value="40">40</option>
                                                <option value="41">41</option>
                                                <option value="42">42</option>
                                                <option value="43">43</option>
                                                <option value="44">44</option>
                                                <option value="45">45</option>
                                                <option value="46">46</option>
                                                <option value="47">47</option>
                                                <option value="48">48</option>
                                                <option value="49">49</option>
                                            </select>
                                        </div>
                                        <div class="form-group" style="margin-bottom: 10px">
                                            <label for="sel1">to</label>
                                            <select class="form-control" name="age2" id="age2">
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                                <option value="32">32</option>
                                                <option value="33">33</option>
                                                <option value="34">34</option>
                                                <option value="35">35</option>
                                                <option value="36">36</option>
                                                <option value="37">37</option>
                                                <option value="38">38</option>
                                                <option value="39">39</option>
                                                <option value="40">40</option>
                                                <option value="41">41</option>
                                                <option value="42">42</option>
                                                <option value="43">43</option>
                                                <option value="44">44</option>
                                                <option value="45">45</option>
                                                <option value="46">46</option>
                                                <option value="47">47</option>
                                                <option value="48">48</option>
                                                <option value="49">49</option>
                                                <option value="50" selected>50</option>
                                            </select>
                                        </div>

                                        <div class="form-group" style="margin-bottom: 10px">
                                            <label for="sel1">Cast:</label>
                                            <select class="form-control" name="txtSubcaste" id="txtSubcaste">
                                                <option value="" selected>Any</option>
                                                <option value="Arain">Arain</option>
                                                <option value="Bangash">Bangash</option>
                                                <option value="Butt">Butt</option>
                                                <option value="Gujjar">Gujjar</option>
                                                <option value="Jatt">Jatt</option>
                                                <option value="Kamboh">Kamboh</option>
                                                <option value="Khokhar">Khokhar</option>
                                                <option value="Mughal">Mughal</option>
                                                <option value="Pathan">Pathan</option>
                                                <option value="Qureshi">Qureshi</option>
                                                <option value="Rajput">Rajput</option>
                                                <option value="Randhawa">Randhawa</option>
                                                <option value="Shaikh">Shaikh</option>
                                                <option value="Syed">Syed</option>
                                                <option value="Wirk">Wirk</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>

                                        <div class="form-group" style="margin-bottom: 10px">
                                            <label for="sel1">Country:</label>
                                            <select name="select_country" class="form-control"  id="select_country" onChange="javascript:enb('country');" runat="server">
                                                <option value="Any" selected>Any</option>
                                                <option value="albania">Albania</option>
                                                <option value="algeria">Algeria</option>
                                                <option value="american samoa">American samoa</option>
                                                <option value="andoria">Andoria</option>
                                                <option value="andorra">Andorra</option>
                                                <option value="angola">Angola</option>
                                                <option value="anguilla">Anguilla</option>
                                                <option value="anitgua">Anitgua</option>
                                                <option value="antigua">Antigua</option>
                                                <option value="argentina">Argentina</option>
                                                <option value="armenia">Armenia</option>
                                                <option value="aruba">Aruba</option>
                                                <option value="australia">Australia</option>
                                                <option value="austria">Austria</option>
                                                <option value="azerbaijan">Azerbaijan</option>
                                                <option value="azerbiajan">Azerbiajan</option>
                                                <option value="bahamas">Bahamas</option>
                                                <option value="bahrain">Bahrain</option>
                                                <option value="bangladesh">Bangladesh</option>
                                                <option value="barbados">Barbados</option>
                                                <option value="belarus">Belarus</option>
                                                <option value="belgium">Belgium</option>
                                                <option value="belize">Belize</option>
                                                <option value="benin">Benin</option>
                                                <option value="bermuda">Bermuda</option>
                                                <option value="bhutan">Bhutan</option>
                                                <option value="boliva">Boliva</option>
                                                <option value="bolivia">Bolivia</option>
                                                <option value="bonaire">Bonaire</option>
                                                <option value="bosnia &amp; herzegovina">Bosnia &amp; herzegovina</option>
                                                <option value="botswana">Botswana</option>
                                                <option value="brazil">Brazil</option>
                                                <option value="brunei">Brunei</option>
                                                <option value="bulgaria">Bulgaria</option>
                                                <option value="burkina faso">Burkina faso</option>
                                                <option value="burundi">Burundi</option>
                                                <option value="cambodia">Cambodia</option>
                                                <option value="cameroon">Cameroon</option>
                                                <option value="canada">Canada</option>
                                                <option value="canary islands the">Canary islands the</option>
                                                <option value="cape varde">Cape varde</option>
                                                <option value="cape verde">Cape verde</option>
                                                <option value="cayman islands">Cayman islands</option>
                                                <option value="central african republic">Central african republic</option>
                                                <option value="chad">Chad</option>
                                                <option value="chile">Chile</option>
                                                <option value="china">China</option>
                                                <option value="china, peoples rep">China, peoples rep</option>
                                                <option value="colombia">Colombia</option>
                                                <option value="columbia">Columbia</option>
                                                <option value="comoros">Comoros</option>
                                                <option value="congo">Congo</option>
                                                <option value="congo, the democratic rep of">Congo, the democratic rep of</option>
                                                <option value="cook islands">Cook islands</option>
                                                <option value="costa rica">Costa rica</option>
                                                <option value="croatia">Croatia</option>
                                                <option value="cuba">Cuba</option>
                                                <option value="curacao">Curacao</option>
                                                <option value="cyprus">Cyprus</option>
                                                <option value="czech republic">Czech republic</option>
                                                <option value="czech republic the">Czech republic the</option>
                                                <option value="denmark">Denmark</option>
                                                <option value="djibouti">Djibouti</option>
                                                <option value="dominica">Dominica</option>
                                                <option value="dominican republic">Dominican republic</option>
                                                <option value="ecuador">Ecuador</option>
                                                <option value="egypt">Egypt</option>
                                                <option value="el salvador">El salvador</option>
                                                <option value="equatorial guinea">Equatorial guinea</option>
                                                <option value="eritrea">Eritrea</option>
                                                <option value="estonia">Estonia</option>
                                                <option value="ethiopia">Ethiopia</option>
                                                <option value="falkland islands">Falkland islands</option>
                                                <option value="faroe islands">Faroe islands</option>
                                                <option value="faroer islands">Faroer islands</option>
                                                <option value="fiji">Fiji</option>
                                                <option value="finland">Finland</option>
                                                <option value="france">France</option>
                                                <option value="french guana">French guana</option>
                                                <option value="french guyana">French guyana</option>
                                                <option value="french polynesia">French polynesia</option>
                                                <option value="gabon">Gabon</option>
                                                <option value="gambia">Gambia</option>
                                                <option value="georgia">Georgia</option>
                                                <option value="germany">Germany</option>
                                                <option value="ghana">Ghana</option>
                                                <option value="gibraltar">Gibraltar</option>
                                                <option value="greece">Greece</option>
                                                <option value="greenland">Greenland</option>
                                                <option value="grenada">Grenada</option>
                                                <option value="guadeloupe">Guadeloupe</option>
                                                <option value="guadeluoupe">Guadeluoupe</option>
                                                <option value="guam">Guam</option>
                                                <option value="guatemala">Guatemala</option>
                                                <option value="guernsey">Guernsey</option>
                                                <option value="guinea">Guinea</option>
                                                <option value="guinea republic">Guinea republic</option>
                                                <option value="guinea-bissau">Guinea-bissau</option>
                                                <option value="guyana">Guyana</option>
                                                <option value="guyana (british)">Guyana (british)</option>
                                                <option value="haiti">Haiti</option>
                                                <option value="honduras">Honduras</option>
                                                <option value="hong kong">Hong kong</option>
                                                <option value="hungary">Hungary</option>
                                                <option value="iceland">Iceland</option>
                                                <option value="india">India</option>
                                                <option value="indonesia">Indonesia</option>
                                                <option value="iran">Iran</option>
                                                <option value="ireland">Ireland</option>
                                                <option value="ireland republic of">Ireland republic of</option>
                                                <option value="israel">Israel</option>
                                                <option value="italy">Italy</option>
                                                <option value="italy">Italy</option>
                                                <option value="ivory coast">Ivory coast</option>
                                                <option value="jamaica">Jamaica</option>
                                                <option value="japan">Japan</option>
                                                <option value="jersey">Jersey</option>
                                                <option value="jordan">Jordan</option>
                                                <option value="kazakhstan">Kazakhstan</option>
                                                <option value="kenya">Kenya</option>
                                                <option value="kiribati">Kiribati</option>
                                                <option value="korea, republic of">Korea, republic of</option>
                                                <option value="korea, south">Korea, south</option>
                                                <option value="korea,d.pr of">Korea,d.pr of</option>
                                                <option value="kuwait">Kuwait</option>
                                                <option value="kyrgyzstan">Kyrgyzstan</option>
                                                <option value="lao peoples democratic republic">Lao peoples democratic republic</option>
                                                <option value="laos">Laos</option>
                                                <option value="latvia">Latvia</option>
                                                <option value="lebanon">Lebanon</option>
                                                <option value="lesotho">Lesotho</option>
                                                <option value="liberia">Liberia</option>
                                                <option value="libya">Libya</option>
                                                <option value="liechtenstein">Liechtenstein</option>
                                                <option value="lithuania">Lithuania</option>
                                                <option value="luxembourg">Luxembourg</option>
                                                <option value="macao">Macao</option>
                                                <option value="macau">Macau</option>
                                                <option value="macedonia">Macedonia</option>
                                                <option value="macedonia republic of (fyrom)">Macedonia republic of (fyrom)</option>
                                                <option value="madagascar">Madagascar</option>
                                                <option value="malawi">Malawi</option>
                                                <option value="malaysia">Malaysia</option>
                                                <option value="maldives">Maldives</option>
                                                <option value="mali">Mali</option>
                                                <option value="malta">Malta</option>
                                                <option value="marinique">Marinique</option>
                                                <option value="marshall islands">Marshall islands</option>
                                                <option value="martinique">Martinique</option>
                                                <option value="mauritania">Mauritania</option>
                                                <option value="mauritiania">Mauritiania</option>
                                                <option value="mauritius">Mauritius</option>
                                                <option value="mexico">Mexico</option>
                                                <option value="micronesia">Micronesia</option>
                                                <option value="moldova">Moldova</option>
                                                <option value="moldova republic of">Moldova republic of</option>
                                                <option value="monaco">Monaco</option>
                                                <option value="mongolia">Mongolia</option>
                                                <option value="montserrat">Montserrat</option>
                                                <option value="morocco">Morocco</option>
                                                <option value="mozambique">Mozambique</option>
                                                <option value="myanmar">Myanmar</option>
                                                <option value="myanmar (burma)">Myanmar (burma)</option>
                                                <option value="namibia">Namibia</option>
                                                <option value="nauru republic of">Nauru republic of</option>
                                                <option value="nepal">Nepal</option>
                                                <option value="netherland antilles">Netherland antilles</option>
                                                <option value="netherlands">Netherlands</option>
                                                <option value="netherlands the">Netherlands the</option>
                                                <option value="nevis">Nevis</option>
                                                <option value="new caledonia">New caledonia</option>
                                                <option value="new zealand">New zealand</option>
                                                <option value="nicaragua">Nicaragua</option>
                                                <option value="niger">Niger</option>
                                                <option value="nigeria">Nigeria</option>
                                                <option value="niue">Niue</option>
                                                <option value="norway">Norway</option>
                                                <option value="oman">Oman</option>
                                                <option value="pakistan">Pakistan</option>
                                                <option value="palau">Palau</option>
                                                <option value="palestine authority">Palestine authority</option>
                                                <option value="panama">Panama</option>
                                                <option value="papua new guinea">Papua new guinea</option>
                                                <option value="paraguay">Paraguay</option>
                                                <option value="peru">Peru</option>
                                                <option value="peru">Peru</option>
                                                <option value="philippines">Philippines</option>
                                                <option value="poland">Poland</option>
                                                <option value="portugal">Portugal</option>
                                                <option value="puerto rico">Puerto rico</option>
                                                <option value="qatar">Qatar</option>
                                                <option value="reunion">Reunion</option>
                                                <option value="reunion island">Reunion island</option>
                                                <option value="romania">Romania</option>
                                                <option value="russia">Russia</option>
                                                <option value="russian federation">Russian federation</option>
                                                <option value="rwanda">Rwanda</option>
                                                <option value="saint lucia">Saint lucia</option>
                                                <option value="saint vincent">Saint vincent</option>
                                                <option value="saipan">Saipan</option>
                                                <option value="samoa">Samoa</option>
                                                <option value="sao tome &amp; principe">Sao tome &amp; principe</option>
                                                <option value="saudi arabia">Saudi arabia</option>
                                                <option value="saudia arabia">Saudia arabia</option>
                                                <option value="senegal">Senegal</option>
                                                <option value="seychelles">Seychelles</option>
                                                <option value="sierra leone">Sierra leone</option>
                                                <option value="singapore">Singapore</option>
                                                <option value="slovak republic">Slovak republic</option>
                                                <option value="slovakia">Slovakia</option>
                                                <option value="slovenia">Slovenia</option>
                                                <option value="solomon islands">Solomon islands</option>
                                                <option value="somalia">Somalia</option>
                                                <option value="south africa">South africa</option>
                                                <option value="spain">Spain</option>
                                                <option value="sri lanka">Sri lanka</option>
                                                <option value="st kitts and nevis">St kitts and nevis</option>
                                                <option value="st lucia">St lucia</option>
                                                <option value="st vincent">St vincent</option>
                                                <option value="st. barthelemy">St. barthelemy</option>
                                                <option value="st. eustatius">St. eustatius</option>
                                                <option value="st. kitts">St. kitts</option>
                                                <option value="st. maarten">St. maarten</option>
                                                <option value="sudan">Sudan</option>
                                                <option value="suriname">Suriname</option>
                                                <option value="swaziland">Swaziland</option>
                                                <option value="sweden">Sweden</option>
                                                <option value="switzerland">Switzerland</option>
                                                <option value="syria">Syria</option>
                                                <option value="tahiti">Tahiti</option>
                                                <option value="taiwan">Taiwan</option>
                                                <option value="tajikistan">Tajikistan</option>
                                                <option value="tanzania">Tanzania</option>
                                                <option value="thailand">Thailand</option>
                                                <option value="togo">Togo</option>
                                                <option value="tonga">Tonga</option>
                                                <option value="trinidad &amp; tobago">Trinidad &amp; tobago</option>
                                                <option value="trinidad and tobago">Trinidad and tobago</option>
                                                <option value="tunisia">Tunisia</option>
                                                <option value="turkey">Turkey</option>
                                                <option value="turkmenistan">Turkmenistan</option>
                                                <option value="turks &amp; caicos islands">Turks &amp; caicos islands</option>
                                                <option value="turks and caicos islands">Turks and caicos islands</option>
                                                <option value="tuvalu">Tuvalu</option>
                                                <option value="uganda">Uganda</option>
                                                <option value="ukraine">Ukraine</option>
                                                <option value="united arab emirates">United arab emirates</option>
                                                <option value="united kingdom">United kingdom</option>
                                                <option value="united states of america">United states of america</option>
                                                <option value="uruguay">Uruguay</option>
                                                <option value="uzbekistan">Uzbekistan</option>
                                                <option value="vanuatu">Vanuatu</option>
                                                <option value="vatican city">Vatican city</option>
                                                <option value="venezuela">Venezuela</option>
                                                <option value="vietnam">Vietnam</option>
                                                <option value="virgin island (gb)">Virgin island (gb)</option>
                                                <option value="virgin islands  british">Virgin islands british</option>
                                                <option value="virgin islands  us">Virgin islands us</option>
                                                <option value="virgin islands (usa)">Virgin islands (usa)</option>
                                                <option value="wallis &amp; futuna">Wallis &amp; futuna</option>
                                                <option value="yemen arab republic">Yemen arab republic</option>
                                                <option value="yugloslavia">Yugloslavia</option>
                                                <option value="zaire (dem rep of congo)">Zaire (dem rep of congo)</option>
                                                <option value="zambia">Zambia</option>
                                                <option value="zimbabwe">Zimbabwe</option>
                                                <option value="Others">Other</option>
                                            </select>
                                        </div>
                                        <input type="hidden" name="me"  value="" />
                                        <input type="hidden" name="height1"  value="" />
                                        <input type="hidden" name="height2"  value="" />
                                        <input type="hidden" name="religion"  value="" />
                                        <input type="hidden" name="caste"  value="" />
                                        <input type="hidden" name="language"  value="" />
                                        <input type="hidden" name="edu"  value="" />
                                        <input type="hidden" name="occu"  value="" />
                                        <input type="hidden" name="select_state"  value="Any" />
                                        <input type="hidden" name="select_city"  value="Any" />
                                        <input type="hidden" name="ddlSelectCountry"  value="" />
                                        <input type="hidden" name="ddlSelectState"  value="" />
                                        <input type="hidden" name="ddlSelectCity"  value="" />
                                        <input type="hidden" name="txtRes"  value="" />
                                        <button type="submit" class="btn btn-primary" onClick="return validate3();"/>Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <?php if (!isset($_SESSION["myusername"])) {
                            ?>
                            <!-- MEMBER NOT LOGGED IN -->
                            <div class="col-md-4">
                                <div class="panel panel-info" >
                                    <div class="panel-heading">
                                        <div class="text-center"><div class="panel-title">Login</div></div>
                                    </div>
                                    <div style="padding-top:5px" class="panel-body" >
                                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12">
                                        </div>
                                        <form action="memlogin_submit.php" method="post" name="form1" id="form1" class="form-horizontal" role="form">
                                            <div style="margin-bottom: 10px" class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input name="txtusername" class="form-control" type="text" Class="i" maxlength="50" placeholder = "Email Address"  />
                                            </div>
                                            <div style="margin-bottom: 10px" class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                <input name="txtpassword" class="form-control" type="password" Class="forminput" id="txtpassword" maxlength="50" placeholder = "Password" />
                                            </div>
                                            <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="forgotpassword.php">Forgot password?</a></div>
                                            <div style="margin-top:5px" class="form-group">
                                                <!-- Button -->
                                                <div class="col-sm-12">
                                                    <button name="Submit" type="submit" class="btn btn-primary btn-success btn-block">Login</button>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12 control">
                                                    <div style="border-top: 1px solid#888; padding-top:5px; font-size:85%" >
                                                        Don't have an account! <a href="register.php">Register Here</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="text-center">
                                    <h2 class="intro-text text-center text-danger">Marriage Proposals by <strong>Cast</strong></h2>
                                    <ul class="list-inline">
                                        <li><strong>Female Proposals by Cast: </strong><a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=Arain&language=&edu=&occu=&select_country=Any&select_state=Any&select_city=Any&ddlSelectCountry=&ddlSelectState=&ddlSelectCity=&txtRes=&Submit.x=47&Submit.y=10" target="_blank">Arain </a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=Jatt&language=&edu=&occu=&select_country=Any&select_state=Any&select_city=Any&ddlSelectCountry=&ddlSelectState=&ddlSelectCity=&txtRes=&Submit.x=25&Submit.y=13" target="_Blank">Jatt</a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=Syed&language=&edu=&occu=&select_country=Any&select_state=Any&select_city=Any&ddlSelectCountry=&ddlSelectState=&ddlSelectCity=&txtRes=&Submit.x=52&Submit.y=5" target="_blank" >Syed </a> | <a class="cell" class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=Gujjar&language=&edu=&occu=&select_country=Any&select_state=Any&select_city=Any&ddlSelectCountry=&ddlSelectState=&ddlSelectCity=&txtRes=&Submit.x=27&Submit.y=16" target="_blank">Gujjar</a> | <a class="cell" class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=Pathan&language=&edu=&occu=&select_country=Any&select_state=Any&select_city=Any&ddlSelectCountry=&ddlSelectState=&ddlSelectCity=&txtRes=&Submit.x=41&Submit.y=9" target="_blank" class="none style8">Pathan </a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=Rajput&language=&edu=&occu=&select_country=Any&select_state=Any&select_city=Any&ddlSelectCountry=&ddlSelectState=&ddlSelectCity=&txtRes=&Submit.x=41&Submit.y=9" target="_blank" class="none style8">Rajput </a> | <a class="cell" href="searchoption.php" title="RishtaPakistan  Matrimonial" target="_blank">More...</a><a href="#"></a></li>
                                        <li><strong>Male Proposals by Cast: </strong><a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=Arain&language=&edu=&occu=&select_country=Any&select_state=Any&select_city=Any&ddlSelectCountry=&ddlSelectState=&ddlSelectCity=&txtRes=&Submit.x=47&Submit.y=10" target="_blank">Arain </a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=Jatt&language=&edu=&occu=&select_country=Any&select_state=Any&select_city=Any&ddlSelectCountry=&ddlSelectState=&ddlSelectCity=&txtRes=&Submit.x=25&Submit.y=13" target="_Blank">Jatt</a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=Syed&language=&edu=&occu=&select_country=Any&select_state=Any&select_city=Any&ddlSelectCountry=&ddlSelectState=&ddlSelectCity=&txtRes=&Submit.x=52&Submit.y=5" target="_blank" >Syed </a> | <a class="cell" class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=Gujjar&language=&edu=&occu=&select_country=Any&select_state=Any&select_city=Any&ddlSelectCountry=&ddlSelectState=&ddlSelectCity=&txtRes=&Submit.x=27&Submit.y=16" target="_blank">Gujjar</a> | <a class="cell" class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=Pathan&language=&edu=&occu=&select_country=Any&select_state=Any&select_city=Any&ddlSelectCountry=&ddlSelectState=&ddlSelectCity=&txtRes=&Submit.x=41&Submit.y=9" target="_blank" class="none style8">Pathan </a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=Rajput&language=&edu=&occu=&select_country=Any&select_state=Any&select_city=Any&ddlSelectCountry=&ddlSelectState=&ddlSelectCity=&txtRes=&Submit.x=41&Submit.y=9" target="_blank" class="none style8">Rajput </a> | <a class="cell" href="searchoption.php" title="RishtaPakistan  Matrimonial" target="_blank">More...</a><a href="#"></a></li>
                                    </ul>
                                    <h2 class="intro-text text-center text-danger">Pakistani Rishtay by <strong>Cities</strong></h2>
                                    <ul class="list-inline">
                                        <li><strong>Female proposals by City: </strong><a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=pakistan&select_state=Punjab%28pakistan%29&select_city=Lahore&ddlSelectCountry=India&ddlSelectState=Punjab%28pakistan%29&ddlSelectCity=Lahore&txtRes=" target="_blank">Lahore</a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=pakistan&select_state=Sindh&select_city=Karachi&ddlSelectCountry=India&ddlSelectState=Sindh&ddlSelectCity=Karachi&txtRes=" target="_blank">Karachi</a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=pakistan&select_state=Khyber+Pakhtunkhwa&select_city=Peshawar&ddlSelectCountry=India&ddlSelectState=Khyber+Pakhtunkhwa&ddlSelectCity=Peshawar&txtRes=" target="_blank">Peshawar</a> | <a class="cell" class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=pakistan&select_state=Islamabad&select_city=Islamabad&ddlSelectCountry=India&ddlSelectState=Islamabad&ddlSelectCity=Islamabad&txtRes=" target="_blank">Islamabad</a> | <a class="cell" class="cell" href="searchoption.php" target="_blank" class="style8">More...</a><a href="#"></a></li>
                                        <li><strong>Male Proposals by City: </strong><a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=pakistan&select_state=Punjab%28pakistan%29&select_city=Lahore&ddlSelectCountry=India&ddlSelectState=Punjab%28pakistan%29&ddlSelectCity=Lahore&txtRes=" target="_blank">Lahore</a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=pakistan&select_state=Sindh&select_city=Karachi&ddlSelectCountry=India&ddlSelectState=Sindh&ddlSelectCity=Karachi&txtRes=" target="_blank">Karachi</a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=pakistan&select_state=Khyber+Pakhtunkhwa&select_city=Peshawar&ddlSelectCountry=India&ddlSelectState=Khyber+Pakhtunkhwa&ddlSelectCity=Peshawar&txtRes=" target="_blank">Peshawar</a> | <a class="cell" class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=pakistan&select_state=Islamabad&select_city=Islamabad&ddlSelectCountry=India&ddlSelectState=Islamabad&ddlSelectCity=Islamabad&txtRes=" target="_blank">Islamabad</a> | <a class="cell" class="cell" href="searchoption.php" target="_blank" class="style8">More...</a><a href="#"></a></li>
                                    </ul>
                                    <h2 class="intro-text text-center text-danger">Most Searched <strong>Countries</strong></h2>
                                    <ul class="list-inline">
                                        <li><strong>Female Proposals by Country: </strong><a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=united+arab+emirates&select_state=Any&select_city=Any&ddlSelectCountry=united+arab+emirates&ddlSelectState=&ddlSelectCity=&txtRes=" target="_Blank">UAE</a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=united+kingdom&select_state=Any&select_city=Any&ddlSelectCountry=united+kingdom&ddlSelectState=&ddlSelectCity=&txtRes=" target="_Blank">UK</a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=united+states+of+america&select_state=Any&select_city=Any&ddlSelectCountry=united+states+of+america&ddlSelectState=&ddlSelectCity=&txtRes=" target="_Blank">USA</a> |  <a class="cell" class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=saudia+arabia&select_state=Others&select_city=Others&text2=&text=&ddlSelectCountry=saudia+arabia&ddlSelectState=&ddlSelectCity=&txtRes=" target="_Blank">Saudi Arabia</a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=canada&select_state=Any&select_city=Any&ddlSelectCountry=united+kingdom&ddlSelectState=&ddlSelectCity=&txtRes=" target="_Blank">Canada</a> |<a class="cell" class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=australia&select_state=Others&select_city=Others&text2=&text=&ddlSelectCountry=australia&ddlSelectState=&ddlSelectCity=&txtRes=" target="_Blank">Australia</a> | <a class="cell" href="searchoption.php">More...</a></li>
                                        <li><strong>Male Proposals by Country: </strong><a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=united+arab+emirates&select_state=Any&select_city=Any&ddlSelectCountry=united+arab+emirates&ddlSelectState=&ddlSelectCity=&txtRes=" target="_Blank">UAE</a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=united+kingdom&select_state=Any&select_city=Any&ddlSelectCountry=united+kingdom&ddlSelectState=&ddlSelectCity=&txtRes=" target="_Blank">UK</a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=united+states+of+america&select_state=Any&select_city=Any&ddlSelectCountry=united+states+of+america&ddlSelectState=&ddlSelectCity=&txtRes=" target="_Blank">USA</a> | <a class="cell" class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=saudia+arabia&select_state=Others&select_city=Others&text2=&text=&ddlSelectCountry=saudia+arabia&ddlSelectState=&ddlSelectCity=&txtRes=" target="_Blank">Saudi Arabia</a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=canada&select_state=Any&select_city=Any&ddlSelectCountry=united+kingdom&ddlSelectState=&ddlSelectCity=&txtRes=" target="_Blank">Canada</a> |<a class="cell" class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=australia&select_state=Others&select_city=Others&text2=&text=&ddlSelectCountry=australia&ddlSelectState=&ddlSelectCity=&txtRes=" target="_Blank">Australia</a> | <a class="cell" href="searchoption.php">More...</a></li>
                                    </ul>
                                </div>
                            </div>


                            <?php
                        } else {
                            ?>
                            <!-- MEMBER LOGGED IN -->
                            <div class="col-lg-4">
                                <div class="panel panel-success">
                                    <div class="panel-heading"><strong><a href="mymatri.php">Account - <?php echo " " . $_SESSION['username']; ?></a></strong></div>
                                    <div class="panel-body">

                                        <?php include("accountinfo.php"); ?>

                                        <div style="margin-top:5px;">

                                            <b>My Profile Link</b>
                                            <br/>
                                            <a href="/viewprofile.php?id=<?php echo $_SESSION['username']; ?>">rishtapakistan.com/viewprofile.php?id=<?php echo $_SESSION['username']; ?></a>

                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-8">
                                <div class="text-center">
                                    <h2 class="intro-text text-center text-danger">Marriage Proposals by <strong>Cast</strong></h2>
                                    <ul class="list-inline">
                                        <li><strong>Female Proposals by Cast: </strong><a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=Arain&language=&edu=&occu=&select_country=Any&select_state=Any&select_city=Any&ddlSelectCountry=&ddlSelectState=&ddlSelectCity=&txtRes=&Submit.x=47&Submit.y=10" target="_blank">Arain </a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=Jatt&language=&edu=&occu=&select_country=Any&select_state=Any&select_city=Any&ddlSelectCountry=&ddlSelectState=&ddlSelectCity=&txtRes=&Submit.x=25&Submit.y=13" target="_Blank">Jatt</a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=Syed&language=&edu=&occu=&select_country=Any&select_state=Any&select_city=Any&ddlSelectCountry=&ddlSelectState=&ddlSelectCity=&txtRes=&Submit.x=52&Submit.y=5" target="_blank" >Syed </a> | <a class="cell" class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=Gujjar&language=&edu=&occu=&select_country=Any&select_state=Any&select_city=Any&ddlSelectCountry=&ddlSelectState=&ddlSelectCity=&txtRes=&Submit.x=27&Submit.y=16" target="_blank">Gujjar</a> | <a class="cell" class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=Pathan&language=&edu=&occu=&select_country=Any&select_state=Any&select_city=Any&ddlSelectCountry=&ddlSelectState=&ddlSelectCity=&txtRes=&Submit.x=41&Submit.y=9" target="_blank" class="none style8">Pathan </a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=Rajput&language=&edu=&occu=&select_country=Any&select_state=Any&select_city=Any&ddlSelectCountry=&ddlSelectState=&ddlSelectCity=&txtRes=&Submit.x=41&Submit.y=9" target="_blank" class="none style8">Rajput </a> | <a class="cell" href="searchoption.php" title="RishtaPakistan  Matrimonial" target="_blank">More...</a><a href="#"></a></li>
                                        <li><strong>Male Proposals by Cast: </strong><a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=Arain&language=&edu=&occu=&select_country=Any&select_state=Any&select_city=Any&ddlSelectCountry=&ddlSelectState=&ddlSelectCity=&txtRes=&Submit.x=47&Submit.y=10" target="_blank">Arain </a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=Jatt&language=&edu=&occu=&select_country=Any&select_state=Any&select_city=Any&ddlSelectCountry=&ddlSelectState=&ddlSelectCity=&txtRes=&Submit.x=25&Submit.y=13" target="_Blank">Jatt</a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=Syed&language=&edu=&occu=&select_country=Any&select_state=Any&select_city=Any&ddlSelectCountry=&ddlSelectState=&ddlSelectCity=&txtRes=&Submit.x=52&Submit.y=5" target="_blank" >Syed </a> | <a class="cell" class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=Gujjar&language=&edu=&occu=&select_country=Any&select_state=Any&select_city=Any&ddlSelectCountry=&ddlSelectState=&ddlSelectCity=&txtRes=&Submit.x=27&Submit.y=16" target="_blank">Gujjar</a> | <a class="cell" class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=Pathan&language=&edu=&occu=&select_country=Any&select_state=Any&select_city=Any&ddlSelectCountry=&ddlSelectState=&ddlSelectCity=&txtRes=&Submit.x=41&Submit.y=9" target="_blank" class="none style8">Pathan </a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=Rajput&language=&edu=&occu=&select_country=Any&select_state=Any&select_city=Any&ddlSelectCountry=&ddlSelectState=&ddlSelectCity=&txtRes=&Submit.x=41&Submit.y=9" target="_blank" class="none style8">Rajput </a> | <a class="cell" href="searchoption.php" title="RishtaPakistan  Matrimonial" target="_blank">More...</a><a href="#"></a></li>
                                    </ul>
                                    <h2 class="intro-text text-center text-danger">Pakistani Rishtay by <strong>Cities</strong></h2>
                                    <ul class="list-inline">
                                        <li><strong>Female proposals by City: </strong><a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=pakistan&select_state=Punjab%28pakistan%29&select_city=Lahore&ddlSelectCountry=India&ddlSelectState=Punjab%28pakistan%29&ddlSelectCity=Lahore&txtRes=" target="_blank">Lahore</a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=pakistan&select_state=Sindh&select_city=Karachi&ddlSelectCountry=India&ddlSelectState=Sindh&ddlSelectCity=Karachi&txtRes=" target="_blank">Karachi</a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=pakistan&select_state=Khyber+Pakhtunkhwa&select_city=Peshawar&ddlSelectCountry=India&ddlSelectState=Khyber+Pakhtunkhwa&ddlSelectCity=Peshawar&txtRes=" target="_blank">Peshawar</a> | <a class="cell" class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=pakistan&select_state=Islamabad&select_city=Islamabad&ddlSelectCountry=India&ddlSelectState=Islamabad&ddlSelectCity=Islamabad&txtRes=" target="_blank">Islamabad</a> | <a class="cell" class="cell" href="searchoption.php" target="_blank" class="style8">More...</a><a href="#"></a></li>
                                        <li><strong>Male Proposals by City: </strong><a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=pakistan&select_state=Punjab%28pakistan%29&select_city=Lahore&ddlSelectCountry=India&ddlSelectState=Punjab%28pakistan%29&ddlSelectCity=Lahore&txtRes=" target="_blank">Lahore</a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=pakistan&select_state=Sindh&select_city=Karachi&ddlSelectCountry=India&ddlSelectState=Sindh&ddlSelectCity=Karachi&txtRes=" target="_blank">Karachi</a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=pakistan&select_state=Khyber+Pakhtunkhwa&select_city=Peshawar&ddlSelectCountry=India&ddlSelectState=Khyber+Pakhtunkhwa&ddlSelectCity=Peshawar&txtRes=" target="_blank">Peshawar</a> | <a class="cell" class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=pakistan&select_state=Islamabad&select_city=Islamabad&ddlSelectCountry=India&ddlSelectState=Islamabad&ddlSelectCity=Islamabad&txtRes=" target="_blank">Islamabad</a> | <a class="cell" class="cell" href="searchoption.php" target="_blank" class="style8">More...</a><a href="#"></a></li>
                                    </ul>
                                    <h2 class="intro-text text-center text-danger">Most Searched <strong>Countries</strong></h2>
                                    <ul class="list-inline">
                                        <li><strong>Female Proposals by Country: </strong><a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=united+kingdom&select_state=Any&select_city=Any&ddlSelectCountry=united+kingdom&ddlSelectState=&ddlSelectCity=&txtRes=" target="_Blank">UK</a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=united+states+of+america&select_state=Any&select_city=Any&ddlSelectCountry=united+states+of+america&ddlSelectState=&ddlSelectCity=&txtRes=" target="_Blank">USA</a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=united+arab+emirates&select_state=Any&select_city=Any&ddlSelectCountry=united+arab+emirates&ddlSelectState=&ddlSelectCity=&txtRes=" target="_Blank">UAE</a> | <a class="cell" class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=australia&select_state=Others&select_city=Others&text2=&text=&ddlSelectCountry=australia&ddlSelectState=&ddlSelectCity=&txtRes=" target="_Blank">Australia</a> | <a class="cell" class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Female&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=saudia+arabia&select_state=Others&select_city=Others&text2=&text=&ddlSelectCountry=saudia+arabia&ddlSelectState=&ddlSelectCity=&txtRes=" target="_Blank">Saudi Arabia</a> | <a class="cell" href="searchoption.php">More...</a></li>
                                        <li><strong>Male Proposals by Country: </strong><a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=united+kingdom&select_state=Any&select_city=Any&ddlSelectCountry=united+kingdom&ddlSelectState=&ddlSelectCity=&txtRes=" target="_Blank">UK</a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=united+states+of+america&select_state=Any&select_city=Any&ddlSelectCountry=united+states+of+america&ddlSelectState=&ddlSelectCity=&txtRes=" target="_Blank">USA</a> | <a class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=united+arab+emirates&select_state=Any&select_city=Any&ddlSelectCountry=united+arab+emirates&ddlSelectState=&ddlSelectCity=&txtRes=" target="_Blank">UAE</a> | <a class="cell" class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=australia&select_state=Others&select_city=Others&text2=&text=&ddlSelectCountry=australia&ddlSelectState=&ddlSelectCity=&txtRes=" target="_Blank">Australia</a> | <a class="cell" class="cell" href="http://rishtapakistan.com/advsearch_results.php?gender=Male&ms=&age1=&age2=&height1=&height2=&religion=&caste=&txtSubcaste=&language=&edu=&occu=&select_country=saudia+arabia&select_state=Others&select_city=Others&text2=&text=&ddlSelectCountry=saudia+arabia&ddlSelectState=&ddlSelectCity=&txtRes=" target="_Blank">Saudi Arabia</a> | <a class="cell" href="searchoption.php">More...</a></li>
                                    </ul>
                                </div>
                            </div>
                        <?php } ?>


                    </div>
                </div>
            </div>
            <!--
                        <div class="row">
                            <div class="box">
                                <div class="col-lg-12 text-center">

                                    <div class="col-md-6">

                                        <hr>
                                        <h2 class="intro-text text-center"><strong>Search a member</strong> by ID</h2>
                                        <hr>

                                        <form action="id_search_submit.php" method="post" name="form" id="form" onSubmit="return validate()">
                                            <div class="col-md-10">
                                            <input name="txtID" class="form-control" id="txtID" maxlength="50" placeholder="Enter Full ID with RPAK">
                                            </div>
                                            <button class="btn btn-default btn-success" type="submit">Search</button>
                                        </form>

                                    </div>

                                    <div class="col-md-6">
                                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Responsive RishtaPakistan - ->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-3031792063178905"
                 data-ad-slot="6812311336"
                 data-ad-format="auto"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Responsive RishtaPakistan - ->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-3031792063178905"
                 data-ad-slot="6812311336"
                 data-ad-format="auto"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>

    </div>
</div>
</div>
            -->
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center text-danger"><strong>Latest Registered proposals</strong>
                        </h2>
                        <hr>
                        <div class="row">
                            <div class="container">

                                <?php include("latest_mem.php"); ?>
                            </div>
                        </div>
                        <center>
                         <!--  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- Responsive RishtaPakistan -->
                          <!--  <ins class="adsbygoogle"
                                 style="display:block"
                                 data-ad-client="ca-pub-3031792063178905"
                                 data-ad-slot="6812311336"
                                 data-ad-format="auto"></ins>
                            <script>
                                            (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                            -->

                            <a href="latest_profiles.php"><button type="button" class="btn btn-danger btn-lg">More Recent Rishtay</button></a></center>
                    </div>
                </div>
            </div>
       <!-- test-->

            <div class="row">
                 <div class="box">
                <h2 class="text-center mt-0">How Does it Work?</h2>
                <hr class="divider my-4" />

                 
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fa fa-edit fa-4x" style="color:green;"></i>
                            <h2 class="h4 mb-2">Register a Profile</h2>
                            <p>Fill out basic info and register a free profile. Once your email is verified, admin will review and activate your profile.</p>
							<br>
							<a class="btn btn-primary" href="register.php">Register Now</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fa fa-search fa-4x" style="color:green;"></i>
                            <h2 class="h4 mb-2">Search Profiles</h2>
                            <p>Once approved, login your profile then search and filter the available proposals according to your requirements.</p>
							<br>
							<a class="btn btn-primary" href="searchoption.php">Search Now</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fa fa-envelope-o fa-4x" style="color:green;"></i>
                            <h2 class="h4 mb-2">Contact</h2>
                            <p>Login your profile and send them interests or messages for free, if you like them share your personal contact details.</p>
							<br>
							<a class="btn btn-primary" href="login.php">Login Now</a>
                        </div>
                    </div>

            </div>
        </div>
        
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <h3 class="text-danger">Asalaam-O-Alaikum</h3>
                        <p class="lead">RishtaPakistan.com is the best matrimonial website in Pakistan that provides free matrimoney service for Pakistanis and overseas Pakistanis. We do not charge any fee before or after at any point.</p>
                        <p class="lead">To find a suitable Pakistani Rishta you can register your marriage proposal. We know Shadi is an important decision of your life and Rishta Pakistan will help you to find one true match for you. RishtaPakistan.com is an online Matrimonial website where you can search suitable marriage proposal based on age, cast, country, city, height etc. This website is for marriage proposals for Pakistani anywhere in the world whether in Pakistan, United States, United Kingdom, United Arab Emirates, Australia, Canada or Saudia Arabia etc. We respect your privacy and do not share your email address or contact number.</p>
                        <p class="lead">Our matrimonial website works like an online marriage bureau but here its free and you contact others yourself. Once your profile is approved you can search or contact any registered proposal. You can search a proposal for your son, daughter or any relative.</p>
                        <p class="lead"> رشتہ پاکستان ویب سائٹ تمام پاکستانیوں کے لئے مفت سہولت فراہم کرتی ہے. چاہے آپ پاکستان میں رہتے ہیں یا پاکستان سے باہر آپ نہ صرف اپنا بلکہ اپنے کسی بھی دوست یا رشتے دار کا مفت اکاونٹ بنا سکتے ہیں. آپ سے کسی قسم کی کوئی فیس چارج نہیں کی جائے گی</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.container -->

        <footer>
            <?php include("footer.php"); ?>
        </footer>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Navigation JavaScript -->
        <script src="js/navigation.js"></script>

        <!-- Script to Activate the Carousel -->
        <script>
                                            $('.carousel').carousel({
                                                interval: 5000 //changes the speed
                                            })
        </script>

    </body>

</html>