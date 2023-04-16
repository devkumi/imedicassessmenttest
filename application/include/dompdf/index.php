<?php 

require_once 'autoload.inc.php';
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('<html>

<head>
    <meta http-equiv=Content-Type content="text/html; charset=UTF-8">
    <style type="text/css">
        span.cls_002 {
            font-family: Times, serif;
            font-size: 14.1px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            font-style: normal;
            text-decoration: none
        }
        
        div.cls_002 {
            font-family: Times, serif;
            font-size: 14.1px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            font-style: normal;
            text-decoration: none
        }
        
        span.cls_004 {
            font-family: "Calibri Bold", serif;
            font-size: 22.0px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            font-style: normal;
            text-decoration: none
        }
        
        div.cls_004 {
            font-family: "Calibri Bold", serif;
            font-size: 22.0px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            font-style: normal;
            text-decoration: none
        }
        
        span.cls_005 {
            font-family: Arial, serif;
            font-size: 11.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }
        
        div.cls_005 {
            font-family: Arial, serif;
            font-size: 11.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }
        
        span.cls_017 {
            font-family: Arial, serif;
            font-size: 11.1px;
            color: rgb(0, 0, 255);
            font-weight: normal;
            font-style: normal;
            text-decoration: underline
        }
        
        div.cls_017 {
            font-family: Arial, serif;
            font-size: 11.1px;
            color: rgb(0, 0, 255);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }
        
        span.cls_007 {
            font-family: Times, serif;
            font-size: 13.0px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            font-style: normal;
            text-decoration: none
        }
        
        div.cls_007 {
            font-family: Times, serif;
            font-size: 13.0px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            font-style: normal;
            text-decoration: none
        }
        
        span.cls_008 {
            font-family: Times, serif;
            font-size: 13.0px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }
        
        div.cls_008 {
            font-family: Times, serif;
            font-size: 13.0px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }
        
        span.cls_009 {
            font-family: Arial, serif;
            font-size: 13.0px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }
        
        div.cls_009 {
            font-family: Arial, serif;
            font-size: 13.0px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }
        
        span.cls_003 {
            font-family: "Calibri", serif;
            font-size: 11.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }
        
        div.cls_003 {
            font-family: "Calibri", serif;
            font-size: 11.1px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }
        
        span.cls_018 {
            font-family: "Calibri", serif;
            font-size: 11.1px;
            color: rgb(0, 0, 255);
            font-weight: normal;
            font-style: normal;
            text-decoration: underline
        }
        
        div.cls_018 {
            font-family: "Calibri", serif;
            font-size: 11.1px;
            color: rgb(0, 0, 255);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }
        
        span.cls_011 {
            font-family: Times, serif;
            font-size: 13.0px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: italic;
            text-decoration: none
        }
        
        div.cls_011 {
            font-family: Times, serif;
            font-size: 13.0px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: italic;
            text-decoration: none
        }
        
        span.cls_019 {
            font-family: Times, serif;
            font-size: 13.0px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            font-style: normal;
            text-decoration: underline
        }
        
        div.cls_019 {
            font-family: Times, serif;
            font-size: 13.0px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            font-style: normal;
            text-decoration: none
        }
        
        span.cls_014 {
            font-family: "Calibri Bold", serif;
            font-size: 18.1px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            font-style: normal;
            text-decoration: none
        }
        
        div.cls_014 {
            font-family: "Calibri Bold", serif;
            font-size: 18.1px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            font-style: normal;
            text-decoration: none
        }
        
        span.cls_020 {
            font-family: Times, serif;
            font-size: 12.5px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            font-style: normal;
            text-decoration: underline
        }
        
        div.cls_020 {
            font-family: Times, serif;
            font-size: 12.5px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            font-style: normal;
            text-decoration: none
        }
        
        span.cls_013 {
            font-family: Times, serif;
            font-size: 12.5px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            font-style: normal;
            text-decoration: none
        }
        
        div.cls_013 {
            font-family: Times, serif;
            font-size: 12.5px;
            color: rgb(0, 0, 0);
            font-weight: bold;
            font-style: normal;
            text-decoration: none
        }
        
        span.cls_015 {
            font-family: Times, serif;
            font-size: 12.5px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: italic;
            text-decoration: none
        }
        
        div.cls_015 {
            font-family: Times, serif;
            font-size: 12.5px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: italic;
            text-decoration: none
        }
        
        span.cls_016 {
            font-family: Times, serif;
            font-size: 12.5px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }
        
        .qrimg {
            width: 70px;
            height: 70px;
        }

        .pagebreak {
            page-break-before: always;
        }
        
        div.cls_016 {
            font-family: Times, serif;
            font-size: 12.5px;
            color: rgb(0, 0, 0);
            font-weight: normal;
            font-style: normal;
            text-decoration: none
        }
    </style>
    <script type="text/javascript" src="0840e050-aed5-11ec-abec-0cc47a792c0a_id_0840e050-aed5-11ec-abec-0cc47a792c0a_files/wz_jsgraphics.js"></script>
</head>

<body>

    <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;overflow:hidden">
    <div style="position:absolute;left:0px;top:0px">
    <img src="0840e050-aed5-11ec-abec-0cc47a792c0a_id_0840e050-aed5-11ec-abec-0cc47a792c0a_files/background1.jpg" width=595 height=841></div>
        <div style="position:absolute;left:0px;top:0px">
            <div style="position:absolute;left:20.09px;top:73.86px" class="cls_004">
                <img class="qrimg" src="0840e050-aed5-11ec-abec-0cc47a792c0a_id_0840e050-aed5-11ec-abec-0cc47a792c0a_files/CTT4870023.png">
            </div>
        </div>
        <div style="position:absolute;left:59.06px;top:25.84px" class="cls_002"><span class="cls_002">FORM A</span></div>

        <div style="position:absolute;left:100.09px;top:73.86px" class="cls_004"><span class="cls_004">Accra Girls’ Senior High School</span></div>

        <div style="position:absolute;left:113.30px;top:100.98px" class="cls_005"><span class="cls_005">Private Mail Bag, Achimota. Tel: 0303942281 Email: </span>
            <a HREF="mailto:agiss2005@gmail.com">agiss2005@gmail.com</a></span>
        </div>
        <div style="position:absolute;left:50.40px;top:150.90px" class="cls_007"><span class="cls_007">HEADMISTRESS: 777959</span></div>
        <div style="position:absolute;left:50.40px;top:177.78px" class="cls_008"><span class="cls_008">Our Ref: AGISS/ADMN/2022/2023</span></div>
        <div style="position:absolute;left:50.40px;top:205.02px" class="cls_008"><span class="cls_008">Your Ref:………………………</span></div>
        <div style="position:absolute;left:446.50px;top:205.02px" class="cls_008"><span class="cls_008">APRIL 2022</span></div>
        <div style="position:absolute;left:50.40px;top:232.17px" class="cls_008"><span class="cls_008">Dear Sir/Madam,</span></div>
        <div style="position:absolute;left:80.66px;top:259.77px" class="cls_007"><span class="cls_007">ADMISSION INTO SENIOR HIGH SCHOOL2022/2023 ACADEMIC YEAR</span></div>
        <div style="position:absolute;left:50.40px;top:286.89px" class="cls_007"><span class="cls_007">NAME OF CANDIDATE …………………………………………………………………</span></div>
        <div style="position:absolute;left:50.40px;top:314.13px" class="cls_007"><span class="cls_007">PROGRAM OFFERED ……………………………………………………………………</span></div>
        <div style="position:absolute;left:50.40px;top:341.01px" class="cls_008"><span class="cls_008">I am happy to inform you that your ward has been offered admission into Accra Girls’ Senior</span></div>
        <div style="position:absolute;left:50.40px;top:363.33px" class="cls_008"><span class="cls_008">High Scholl to pursue a 3-year Senior High School Program in …………………………….</span></div>
        <div style="position:absolute;left:50.40px;top:385.89px" class="cls_008"><span class="cls_008">and affiliated to Aryee House/Buckman House/Gibson House/Pink House.</span></div>
        <div style="position:absolute;left:50.40px;top:418.19px" class="cls_008"><span class="cls_008">Her continuous stay in the school will depend on good academic work, good conduct and strict</span></div>
        <div style="position:absolute;left:50.40px;top:435.47px" class="cls_008"><span class="cls_008">Observance of all the school Rules and Regulations</span></div>
        <div style="position:absolute;left:50.40px;top:489.83px" class="cls_008"><span class="cls_008">Kindly submit to Administration on the day of arrival the following:</span></div>
        <div style="position:absolute;left:68.42px;top:516.95px" class="cls_008"><span class="cls_008">1.</span><span class="cls_009"> </span><span class="cls_008"> A complete Personal Record Form </span><span class="cls_007">(Form D)</span></div>
        <div style="position:absolute;left:68.42px;top:539.39px" class="cls_008"><span class="cls_008">2.  A copy of your ward’s BECE Results Slip</span></div>
        <div style="position:absolute;left:68.42px;top:561.86px" class="cls_008"><span class="cls_008">3.  Placement Form endorsed by the head of the JHS attended.</span></div>
        <div style="position:absolute;left:68.42px;top:584.30px" class="cls_008"><span class="cls_008">4.  A photocopy of your ward’s valid (not expired) Health Insurance Card.</span></div>
        <div style="position:absolute;left:68.42px;top:606.74px" class="cls_008"><span class="cls_008">5.  A photocopy of your ward’s Birth Certificate</span></div>
        <div style="position:absolute;left:68.42px;top:629.18px" class="cls_008"><span class="cls_008">6.  Two (2) copies of recent Passport Size Photographs of your ward endorsed by the head</span></div>
        <div style="position:absolute;left:86.42px;top:646.34px" class="cls_008"><span class="cls_008">of the JHS attended</span></div>
        <div style="position:absolute;left:50.40px;top:673.58px" class="cls_008"><span class="cls_008">Kindly accept our congratulations on your ward’s success. We look forward to welcoming you</span></div>
        <div style="position:absolute;left:50.40px;top:690.74px" class="cls_008"><span class="cls_008">to AGISS, where we nurture ladies with vision and virtue.</span></div>
        <div style="position:absolute;left:374.47px;top:762.64px" class="cls_007"><span class="cls_007">(GIFTY ANDOH (MRS)</span></div>
        <div style="position:absolute;left:374.47px;top:750.64px" class="cls_007"><span class="cls_007">(GIFTY ANDOH (MRS)</span></div>
        <div style="position:absolute;left:390.67px;top:779.92px" class="cls_007"><span class="cls_007">HEADMISTRESS</span></div>
    </div>
    <div class="pagebreak"></div>
    <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;overflow:hidden">
        <div style="position:absolute;left:0px;top:0px">
            <img src="0840e050-aed5-11ec-abec-0cc47a792c0a_id_0840e050-aed5-11ec-abec-0cc47a792c0a_files/background2.jpg" width=595 height=841></div>
        <div style="position:absolute;left:71.06px;top:37.84px" class="cls_002"><span class="cls_002">FORM B</span></div>
        <div style="position:absolute;left:172.09px;top:100.74px" class="cls_004"><span class="cls_004">Accra Girls’ Senior High School</span></div>
        <div style="position:absolute;left:131.18px;top:128.10px" class="cls_003"><span class="cls_003">Private Mail Bag, Achimota. Tel: 0303942281 Email: </span>
            <A HREF="mailto:agiss2005@gmail.com">agiss2005@gmail.com</A> </span>
        </div>
        <div style="position:absolute;left:188.21px;top:180.42px" class="cls_007"><span class="cls_007">ADMISSION DECLARATION FORM</span></div>
        <div style="position:absolute;left:248.93px;top:207.66px" class="cls_007"><span class="cls_007">DECLARATION</span></div>
        <div style="position:absolute;left:66.38px;top:234.45px" class="cls_011"><span class="cls_011">(To be completed and returned to the Headmistress on the day the student is reporting to</span></div>
        <div style="position:absolute;left:278.57px;top:251.73px" class="cls_011"><span class="cls_011">school)</span></div>
        <div style="position:absolute;left:86.78px;top:268.89px" class="cls_011"><span class="cls_011">Parents and Guardians must take personal responsibility in completing this form</span></div>
        <div style="position:absolute;left:50.40px;top:313.65px" class="cls_019"><span class="cls_019">DELARATION BY STUDENT</span></div>
        <div style="position:absolute;left:50.40px;top:340.41px" class="cls_008"><span class="cls_008">I hereby declare, in the presence of my parents/guardians, that I shall respect the School</span></div>
        <div style="position:absolute;left:50.40px;top:357.69px" class="cls_008"><span class="cls_008">Authorities and abide by the School Rules and Regulations printed in the school Code of</span></div>
        <div style="position:absolute;left:50.40px;top:374.85px" class="cls_008"><span class="cls_008">Conduct and that any breach of the rules and regulations renders me liable to befitting</span></div>
        <div style="position:absolute;left:50.40px;top:392.01px" class="cls_008"><span class="cls_008">disciplinary action and that nobody whatsoever should plead on my behalf.</span></div>
        <div style="position:absolute;left:50.40px;top:419.27px" class="cls_008"><span class="cls_008">Name of Student …………………………………………………………………………………</span></div>
        <div style="position:absolute;left:50.40px;top:446.39px" class="cls_008"><span class="cls_008">Signature of Student ……………………………………… Date ………………………………</span></div>
        <div style="position:absolute;left:50.40px;top:500.87px" class="cls_008"><span class="cls_008">DECLARATION BY PARENT/GUARDIAN</span></div>
        <div style="position:absolute;left:68.42px;top:527.99px" class="cls_008"><span class="cls_008">1.  I declare that I have read and understood the school rules and regulations and agree to</span></div>
        <div style="position:absolute;left:86.42px;top:545.15px" class="cls_008"><span class="cls_008">all conditions therein. I therefore accept to ensure that my ward abides by all the rules</span></div>
        <div style="position:absolute;left:86.42px;top:562.46px" class="cls_008"><span class="cls_008">and regulations of the school.</span></div>
        <div style="position:absolute;left:68.42px;top:596.78px" class="cls_008"><span class="cls_008">2.  I will consent to any form of disciplinary action that will be taken against my ward as</span></div>
        <div style="position:absolute;left:86.42px;top:613.94px" class="cls_008"><span class="cls_008">far as such action is in conformity with the school’s code of conduct.</span></div>
        <div style="position:absolute;left:50.40px;top:668.42px" class="cls_008"><span class="cls_008">Name of Parent/Guardian ……………………………………………………………………….</span></div>
        <div style="position:absolute;left:50.40px;top:695.54px" class="cls_008"><span class="cls_008">Signature of Parent/Guardian………………………………   Date ……...……………………</span></div>
    </div>
    <div class="pagebreak"></div>
    <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;overflow:hidden">
        <div style="position:absolute;left:0px;top:0px">
            <img src="0840e050-aed5-11ec-abec-0cc47a792c0a_id_0840e050-aed5-11ec-abec-0cc47a792c0a_files/background3.jpg" width=595 height=841></div>
        <div style="position:absolute;left:71.18px;top:29.80px" class="cls_002"><span class="cls_002">FORM C</span></div>
        <div style="position:absolute;left:172.09px;top:100.74px" class="cls_004"><span class="cls_004">Accra Girls’ Senior High School</span></div>
        <div style="position:absolute;left:131.18px;top:128.10px" class="cls_003"><span class="cls_003">Private Mail Bag, Achimota. Tel: 0303942281 Email: </span>
            <A HREF="mailto:agiss2005@gmail.com">agiss2005@gmail.com</A> </span>
        </div>
        <div style="position:absolute;left:248.21px;top:206.94px" class="cls_007"><span class="cls_007">UNDERTAKING</span></div>
        <div style="position:absolute;left:50.40px;top:233.85px" class="cls_008"><span class="cls_008">This is to certify that I ………………………………………………………………………</span></div>
        <div style="position:absolute;left:50.40px;top:260.97px" class="cls_008"><span class="cls_008">Parent/Guardian of ………………………………………..…………………………… a</span></div>
        <div style="position:absolute;left:50.40px;top:283.41px" class="cls_008"><span class="cls_008">student of Accra Girls’ Senior High School, having carefully read through this document with</span></div>
        <div style="position:absolute;left:50.40px;top:305.85px" class="cls_008"><span class="cls_008">my ward and having accordingly advised, in the event of her inability to abide by any of the</span></div>
        <div style="position:absolute;left:50.40px;top:328.29px" class="cls_008"><span class="cls_008">School Rule and regulations, the school reserves the right to discipline her in accordance with</span></div>
        <div style="position:absolute;left:50.40px;top:350.85px" class="cls_008"><span class="cls_008">the laid down principles.</span></div>
        <div style="position:absolute;left:50.40px;top:410.39px" class="cls_008"><span class="cls_008">Parents/Guardians and students are being informed that the change of programs is limited</span></div>
        <div style="position:absolute;left:50.40px;top:432.83px" class="cls_007"><span class="cls_007">within a one month period after orientation.</span><span class="cls_008"> During the period, the student will be</span></div>
        <div style="position:absolute;left:50.40px;top:455.27px" class="cls_008"><span class="cls_008">permitted after doing a diagnostic test.</span></div>
        <div style="position:absolute;left:50.40px;top:515.15px" class="cls_007"><span class="cls_007">PARENT</span></div>
        <div style="position:absolute;left:302.47px;top:515.15px" class="cls_007"><span class="cls_007">STUDENT</span></div>
        <div style="position:absolute;left:50.40px;top:542.03px" class="cls_008"><span class="cls_008">Name…………………………………………….  Name ………………………………</span></div>
        <div style="position:absolute;left:50.40px;top:569.18px" class="cls_008"><span class="cls_008">Sign ……………………………………………...  Sign ….………………………………</span></div>
        <div style="position:absolute;left:50.40px;top:596.42px" class="cls_008"><span class="cls_008">Date ……………………………………………...  Date …………………………………</span></div>
        <div style="position:absolute;left:50.40px;top:650.78px" class="cls_008"><span class="cls_008">Your cooperation will be greatly appreciated.</span></div>
        <div style="position:absolute;left:50.40px;top:678.02px" class="cls_008"><span class="cls_008">Thank you</span></div>
    </div>
    <div class="pagebreak"></div>
    <div style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:841px;overflow:hidden">
        <div style="position:absolute;left:0px;top:0px">
            <img src="0840e050-aed5-11ec-abec-0cc47a792c0a_id_0840e050-aed5-11ec-abec-0cc47a792c0a_files/background4.jpg" width=595 height=841></div>
        <div style="position:absolute;left:69.50px;top:19.00px" class="cls_002"><span class="cls_002">FORM D</span></div>
        <div style="position:absolute;left:194.92px;top:48.64px" class="cls_014"><span class="cls_014">Accra Girls’ Senior High School</span></div>
        <div style="position:absolute;left:244.37px;top:70.74px" class="cls_020"><span class="cls_020">PERSONAL DATA</span></div>
        <div style="position:absolute;left:50.40px;top:96.78px" class="cls_013"><span class="cls_013">Enrolment Code………………………………… </span><span class="cls_015">(Refer to placement form)</span></div>
        <div style="position:absolute;left:233.57px;top:111.54px" class="cls_013"><span class="cls_013">STUDENT’S DETAILS</span></div>
        <div style="position:absolute;left:50.40px;top:139.98px" class="cls_016"><span class="cls_016">……………………………………………………………………………………………………..</span></div>
        <div style="position:absolute;left:86.42px;top:154.38px" class="cls_015"><span class="cls_015">Surname</span></div>
        <div style="position:absolute;left:266.45px;top:154.38px" class="cls_015"><span class="cls_015">First Name</span></div>
        <div style="position:absolute;left:410.47px;top:154.38px" class="cls_015"><span class="cls_015">Other Names</span></div>
        <div style="position:absolute;left:50.40px;top:178.62px" class="cls_016"><span class="cls_016">Date of Birth ……………………………</span></div>
        <div style="position:absolute;left:302.47px;top:178.62px" class="cls_016"><span class="cls_016">Mother Tongue .…………………………….</span></div>
        <div style="position:absolute;left:50.40px;top:200.22px" class="cls_016"><span class="cls_016">Country of Birth ………………………..   Religious Denomination……………………………</span></div>
        <div style="position:absolute;left:50.40px;top:221.82px" class="cls_016"><span class="cls_016">Nationality ……………………………… Home Town …………………………………………</span></div>
        <div style="position:absolute;left:50.40px;top:243.33px" class="cls_016"><span class="cls_016">Languages Spoken</span></div>
        <div style="position:absolute;left:158.42px;top:243.33px" class="cls_016"><span class="cls_016">1. ……………………….. 2. ………………………. 3. ……………………</span></div>
        <div style="position:absolute;left:50.40px;top:264.93px" class="cls_016"><span class="cls_016">JHS Attended and Address ………………………………………………………………………..</span></div>
        <div style="position:absolute;left:118.34px;top:286.53px" class="cls_013"><span class="cls_013">FATHER’S DETAILS</span><span class="cls_016">     Title: Mr./Rev/Dr/Prof/ Other…………….</span></div>
        <div style="position:absolute;left:50.40px;top:308.01px" class="cls_016"><span class="cls_016">……………………………………………………………………………………………………...</span></div>
        <div style="position:absolute;left:86.42px;top:322.41px" class="cls_015"><span class="cls_015">Surname</span></div>
        <div style="position:absolute;left:266.45px;top:322.41px" class="cls_015"><span class="cls_015">first name</span></div>
        <div style="position:absolute;left:410.47px;top:322.41px" class="cls_015"><span class="cls_015">other names</span></div>
        <div style="position:absolute;left:50.40px;top:344.01px" class="cls_016"><span class="cls_016">Occupation …………………………….   Postal Address …………………….…………………</span></div>
        <div style="position:absolute;left:50.40px;top:365.61px" class="cls_016"><span class="cls_016">Telephone Numbers ……………………………….  Email …………………………………</span></div>
        <div style="position:absolute;left:50.40px;top:387.09px" class="cls_016"><span class="cls_016">Residential Address ……………………………………………………. Nationality……………….</span></div>
        <div style="position:absolute;left:50.40px;top:408.71px" class="cls_016"><span class="cls_016">Religion ………………………….. Signature…………………………. Date ………………….</span></div>
        <div style="position:absolute;left:234.65px;top:425.63px" class="cls_013"><span class="cls_013">MOTHER’S DETAILS</span></div>
        <div style="position:absolute;left:50.40px;top:446.75px" class="cls_016"><span class="cls_016">……………………………………………………………………………………………………...</span></div>
        <div style="position:absolute;left:86.42px;top:461.15px" class="cls_015"><span class="cls_015">Surname</span></div>
        <div style="position:absolute;left:266.45px;top:461.15px" class="cls_015"><span class="cls_015">first name</span></div>
        <div style="position:absolute;left:410.47px;top:461.15px" class="cls_015"><span class="cls_015">other names</span></div>
        <div style="position:absolute;left:50.40px;top:482.75px" class="cls_016"><span class="cls_016">Occupation …………………………….   Postal Address …………………….…………………</span></div>
        <div style="position:absolute;left:50.40px;top:504.23px" class="cls_016"><span class="cls_016">Telephone Numbers ……………………………….  Email .……………………………………</span></div>
        <div style="position:absolute;left:50.40px;top:525.83px" class="cls_016"><span class="cls_016">Residential Address ……………………………………………………. Nationality……………….</span></div>
        <div style="position:absolute;left:50.40px;top:547.43px" class="cls_016"><span class="cls_016">Religion ………………………….. Signature…………………………. Date ………………….</span></div>
        <div style="position:absolute;left:228.77px;top:564.38px" class="cls_013"><span class="cls_013">GUARDIAN’S DETAILS</span></div>
        <div style="position:absolute;left:50.40px;top:585.50px" class="cls_016"><span class="cls_016">……………………………………………………………………………………………………...</span></div>
        <div style="position:absolute;left:86.42px;top:599.90px" class="cls_015"><span class="cls_015">Surname</span></div>
        <div style="position:absolute;left:266.45px;top:599.90px" class="cls_015"><span class="cls_015">first name</span></div>
        <div style="position:absolute;left:410.47px;top:599.90px" class="cls_015"><span class="cls_015">other names</span></div>
        <div style="position:absolute;left:50.40px;top:621.50px" class="cls_016"><span class="cls_016">Occupation …………………………….   Postal Address …………………….…………………</span></div>
        <div style="position:absolute;left:50.40px;top:642.98px" class="cls_016"><span class="cls_016">Telephone Numbers ……………………………….  Email ………………………………………</span></div>
        <div style="position:absolute;left:50.40px;top:664.58px" class="cls_016"><span class="cls_016">Residential Address ……………………………………………………. Nationality…………….</span></div>
        <div style="position:absolute;left:50.40px;top:686.18px" class="cls_016"><span class="cls_016">Religion ………………………….. Signature…………………………. Date ………………….</span></div>
        <div style="position:absolute;left:50.40px;top:729.64px" class="cls_020"><span class="cls_020">OFFICIAL USE ONLY</span></div>
        <div style="position:absolute;left:50.40px;top:750.88px" class="cls_016"><span class="cls_016">ADMISSION NUMBER …………………….HOUSE……………………..Boarder</span></div>
        <div style="position:absolute;left:494.98px;top:750.88px" class="cls_016"><span class="cls_016">Day</span></div>
        <div style="position:absolute;left:50.40px;top:771.88px" class="cls_016"><span class="cls_016">PROGRAMME………………………………………..   CLASS………………………….</span></div>
    </div>

</body>

</html>

</html>');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();







?>