<?php
include 'script-login.php';
include "conn/connect.php";
@$key_search = $_GET["s"];
if ($key_search) {
    $sql = "SELECT * FROM articles WHERE topic_name LIKE '%" . $key_search . "%' ORDER BY id DESC LIMIT 0,9";
    $q = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error($conn));
} else {
    $sql = "SELECT * FROM articles ORDER BY id DESC LIMIT 0,6 ";
    $q = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="th">

<head>
    <title>เว็บพนันบอล วางเดิมพันฟุตบอลโลก 2022 กีฬาออนไลน์ที่ดีที่สุด </title>
    <meta name="title" content="เว็บพนันบอล วางเดิมพันฟุตบอลโลก 2022 กีฬาออนไลน์ที่ดีที่สุด " />
    <meta name="description" content="เว็บพนันบอล เปิดให้บริการเดิมพัน กีฬาออนไลน์ที่ดีที่สุด การเดิมพันกีฬา เป็นสิ่งที่คนไทยชื่นชอบ  พนันบอลออนไลน์ เปิดรับแทงบอล เข้าใช้งานผ่านระบบ เครือข่ายอินเทอร์เน็ตได้ง่าย มีความสะดวกสบาย เนื่องจากไม่ต้องเดินทาง ใช้งานได้ทุกที่ ทุกเวลา ผ่านมือถือ แท็บเล็ต หรือคอมพิวเตอร์ " />

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-language" content="th" />
    <meta http-equiv="content-type" content="text/html;" charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="robots" content="index,follow" />
    <meta name="Author" content="เว็บพนันบอล ">
    <meta name="googlebots" content="all">
    <meta name="audience" content="all">
    <meta name="Rating" content="General">
    <meta name="distribution" content="Global">
    <meta name="allow-search" content="yes">

    <meta property="og:locale" content="th_TH" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="เว็บพนันบอล วางเดิมพันฟุตบอลโลก 2022 กีฬาออนไลน์ที่ดีที่สุด" />
    <meta property="og:description" content="เว็บพนันบอล เปิดให้บริการเดิมพัน กีฬาออนไลน์ที่ดีที่สุด การเดิมพันกีฬา เป็นสิ่งที่คนไทยชื่นชอบ  พนันบอลออนไลน์ เปิดรับแทงบอล เข้าใช้งานผ่านระบบ เครือข่ายอินเทอร์เน็ตได้ง่าย มีความสะดวกสบาย เนื่องจากไม่ต้องเดินทาง ใช้งานได้ทุกที่ ทุกเวลา ผ่านมือถือ แท็บเล็ต หรือคอมพิวเตอร์" />
    <meta property="og:url" content="http://xn--123-7ml3c5b.com/" />
    <meta property="og:site_name" content="เว็บพนันบอล" />
    <meta property="og:image" content="./img/logo-123ball.webp" />

    <meta property="twitter:url" content="http://xn--123-7ml3c5b.com/">
    <meta property="twitter:image" content="./img/logo-123ball.webp">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="เว็บพนันบอล วางเดิมพันฟุตบอลโลก 2022 กีฬาออนไลน์ที่ดีที่สุด" />
    <meta name="twitter:description" content="เว็บพนันบอล เปิดให้บริการเดิมพัน กีฬาออนไลน์ที่ดีที่สุด การเดิมพันกีฬา เป็นสิ่งที่คนไทยชื่นชอบ  พนันบอลออนไลน์ เปิดรับแทงบอล เข้าใช้งานผ่านระบบ เครือข่ายอินเทอร์เน็ตได้ง่าย มีความสะดวกสบาย เนื่องจากไม่ต้องเดินทาง ใช้งานได้ทุกที่ ทุกเวลา ผ่านมือถือ แท็บเล็ต หรือคอมพิวเตอร์" />
    <meta name="twitter:site" content="เว็บพนันบอล">
    <meta name="twitter:creator" content="เว็บพนันบอล">

    <link rel="canonical" href="http://xn--123-7ml3c5b.com/" />
    <link rel="alternate" href="http://xn--123-7ml3c5b.com/" hreflang="th-TH" />

    <link rel="shortcut icon" href="./favicon.webp" type="image/x-icon" />
    <link rel="icon" href="./favicon.webp" type="image/x-icon" />
    <link rel="apple-touch-icon" href="./favicon.webp" />

    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "url": "http://xn--123-7ml3c5b.com/",
            "logo": "http://xn--123-7ml3c5b.com/img/logo-123ball.webp"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebPage",
            "name": "เว็บพนันบอล",
            "speakable": {
                "@type": "SpeakableSpecification",
                "xPath": [
                    "/html/head/title",
                    "/html/head/meta[@name='description']/@content"
                ]
            },
            "url": "#/"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "url": "http://xn--123-7ml3c5b.com/",
            "name": "เว็บพนันบอล",
            "description": "เว็บพนันบอล วางเดิมพันฟุตบอลโลก 2022  กีฬาออนไลน์ที่ดีที่สุด",
            "potentialAction": [{
                "@type": "SearchAction",
                "target": {
                    "@type": "EntryPoint",
                    "urlTemplate": "http://xn--123-7ml3c5b.com/?s={search_term_string}"
                },
                "query-input": "required name=search_term_string"
            }]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "เว็บพนันบอล"
            }]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Store",
            "image": [
                "http://xn--123-7ml3c5b.com/img/logo-123ball.webp",
                "http://xn--123-7ml3c5b.com/img/banner-123ball.webp",
                "http://xn--123-7ml3c5b.com/img/123ball-img01.webp"
            ],
            "name": "เว็บพนันบอล",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "TH"
            },
            "url": "http://xn--123-7ml3c5b.com/",
            "priceRange": "฿฿฿",
            "telephone": "+6696-921-9245",
            "openingHoursSpecification": [{
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday",
                        "Saturday"
                    ],
                    "opens": "08:00",
                    "closes": "23:59"
                },
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": "Sunday",
                    "opens": "08:00",
                    "closes": "23:00"
                }
            ]

        }
    </script>
    <style>
        <?php
        include('bootstrap/bootstrap.css');
        include('css/style.css');
        ?>
    </style>
</head>

<body>
    <header id="mainheader">
        <button class="open_navber_moblie" type="button" onclick="openNav()">&equiv;</button>
        <div class="card-fluid">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 text-center">
                        <div class="card-logo">
                            <a href="./">
                                <img data-src="./img/logo-123ball.webp" class="lazy img-fluid" width="206" height="235" alt="logo 123บอล">
                            </a>
                        </div>

                    </div>
                    <div class="col-lg-9">
                        <form method="POST" class="main-form-login" onSubmit="JavaScript:return fncSubmit();">
                            <input type="text" name="name" class="ipt-username" placeholder="Username/ชื่อผู้ใช้" required>
                            <input type="password" name="pass" class="ipt-password" placeholder="Password/รหัสผ่าน" required>
                            <button type="submit" name="create-post" class="btn-login"><img data-src="./img/login.webp" class="lazy img-fluid" width="86" height="58" alt="login"></button>
                            <input type="radio" id="savepass" name="fav_language" value="จำรหัสผ่าน">
                            <label for="savepass">จำรหัสผ่าน</label>
                            <label for="gotpass">ลืมรหัสผ่าน?</label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="mySidenav" class="sidenav-slide">
            <span class="closebtn" onclick="closeNav()">&times;</span>
            <div class="sidenav">
                <a href="./">หน้าแรก</a>
                <a href="./entrance/">ทางเข้า</a>
                <a href="./register/">สมัครสมาชิก</a>
                <a href="https://line.me/R/ti/p/%40607dcoex">สมัครผ่านไลน์</a>
            </div>
        </div>
    </header>
    <section class="banner ">
        <div class="container px-0">
            <img data-src="./img/banner-123ball.webp" class="lazy img-fluid" width="100%" height="100%" alt="123บอล เว็บพนันบอล">
        </div>
        <nav class="navlinks">
            <div class="container">
                <a href="./">เว็บพนันบอล</a>
                <a href="./entrance/">ทางเข้า</a>
                <a href="./register/">สมัครสมาชิก</a>
                <a href="https://line.me/R/ti/p/%40607dcoex">สมัครผ่านไลน์</a>
            </div>
        </nav>
    </section>
    <?php
    if (!$key_search) {
    ?>
        <article class="content container">
            <section class="main-site-section">
                <div class="container ">
                    <div class="row  pe-0">
                        <div class="col-lg-6  ">
                            <div class="text-center">
                                <img data-src="./img/123ball.webp" class="lazy img-fluid" width="362" height="230" alt="123บอล">
                            </div>
                            <h1 class="row-ab">เว็บพนันบอล</h1>
                            <p> <strong>เว็บพนันบอล</strong> เปิดให้บริการเดิมพัน กีฬาออนไลน์ที่ดีที่สุด การเดิมพันกีฬา เป็นสิ่งที่คนไทยชื่นชอบ กันมาเป็นระยะเวลานาน สาเหตุหลายคน ต่างชื่นชอบ และคลั่งไคล้ การดูกีฬาการแข่งขันฟุตบอล เป็นทุนเดิมอยู่แล้ว ยิ่งถ้าได้เชียร์ทีมกีฬา ที่ชื่นชอบส่วนตัว แถมยังได้นำเงินมาใช้เพิ่มเติม ทุกคนก็ล้วนอยากลงทุน ในการเดิมพัน แทงบอลกันแทบทั้งนั้น แถมการเดิมพัน ฟุตบอล ยังทำได้ไม่ยาก เพียงแค่ศึกษาเกม และราคาต่อรองนิดหน่อย ก็สามารถเริ่มต้นเอาชนะ ได้รับเงินรางวัลได้ การเดิมพันพนันบอลออนไลน์ ผ่านเว็บไซต์ ผู้เล่นจะต้องคาดการณ์ล่วงหน้า ว่าผลการแข่งขัน จะเป็นอย่างไร และวางเดิมพัน หากผลออกมาถูกต้อง ก็จะได้รับรางวัลไป อาศัยการคาดเดา ผลการแข่งขัน ของลีกต่างๆ จากทั่วทุกมุมโลก คล้ายกับการเดิมพัน แทงบอลผ่านโต๊ะ เพียงแต่พนันบอลออนไลน์ เปิดรับแทงบอล เข้าใช้งานผ่านระบบ เครือข่ายอินเทอร์เน็ตได้ง่าย มีความสะดวกสบาย เนื่องจากไม่ต้องเดินทาง ใช้งานได้ทุกที่ ทุกเวลา ผ่านมือถือ แท็บเล็ต หรือคอมพิวเตอร์ สะดวกในการติดตาม และวางเดิมพันการแข่งขันได้อย่างต่อเนื่อง เพิ่มเติมในส่วนของ โปรโมชั่นมากมาย ที่ท่านจะได้รับ เมื่อลงทะเบียน เริ่มต้นแทงบอลออนไลน์ </p>

                        </div>
                        <div class="col-lg-6  ">
                            <img data-src="./img/123ball-img01.webp" class="lazy img-fluid" width="944" height="884" alt="เว็บพนันบอล">
                        </div>
                    </div>
                </div>
            </section>
            <section class="site-secon-section  py-3">
                <div class="container ">
                    <h2 class="bg-main-text">เดิมพัน ฟุตบอล กีฬายอดฮิตอันดับ 1 ในเมืองไทย</h2>
                    <p> ฟุตบอล กีฬาการแข่งขันที่ได้รับความนิยม และถูกพูดถึงเป็นอย่างมาก โดยกีฬาการแข่งขันฟุตบอล จะเป็นประเภทการแข่งขัน ระหว่างผู้เล่น 2 ทีม แบ่งออกเป็นทีมละ 11 คน อาศัยลูกบอลเป็นตัวตัดสิน ว่าทีมใดจะเป็นผู้ชนะ หลังจากการทำคะแนน ด้วยการเตะลูกบอลเข้าสู่ประตู ของฝ่ายตรงข้าม ในสนามฟุตบอล เรียกได้ว่า ฟุตบอล เป็นกีฬาการแข่งขัน ที่ได้รับความนิยมมากที่สุดในโลก และเป็นที่นิยมในหมู่นักพนันมากที่สุด นักเดิมพันทั่วโลก ต่างให้ความสนใจ รวมไปถึงนักเดิมพัน ในประเทศไทยด้วยเช่นกัน เหตุผลหลักที่ทำให้ฟุตบอล เป็นเกมที่ได้รับความสนใจมากที่สุด เนื่องจากการติดตาม การแข่งขันฟุตบอล แถมเกมการแข่งขันยังเป็นเกมที่เข้าใจง่าย ดูสนุก มีแหล่งข้อมูลมากมาย ที่สามารถค้นหาได้ง่าย เพื่อนำมาวิเคราะห์ ประกอบการตัดสินใจ ในการวางเดิมพัน แถมยิ่งมีการพัฒนา เปิดให้บริการ <strong>เว็บพนันบอล</strong> ช่วยให้เข้าถึง เกมการแข่งขันฟุตบอล จากลีกทั่วโลก ที่คนไทยสามารถรับชม และร่วมเดิมพันได้อย่างง่ายดาย ส่งผลให้ฟุตบอล กลายเป็นกีฬาอันดับ 1 แบบไม่มีกีฬาชนิดใดเทียบได้ </p>
                </div>
            </section>
            <section class="site-secon-section  py-3">
                <div class="container  ">
                    <h2 class="bg-main-text">วิธีการอ่านอัตราจ่าย ราคาต่อรองบอล</h2>
                    <p>อัตราการต่อรอง สิ่งแรกที่นักพนันบอล จะต้องทำความเข้าใจ โดยเฉพาะการแทงบอลแฮนดิแคป หรือแทงแบบมีราคาต่อ รูปแบบการเดิมพันที่นิยม ของคนไทยส่วนใหญ่ ใช้แต้มต่อรอง จากผลรวมการทำประตู ในการคำนวณคะแนนของทั้งสองฝ่าย ทั้งทีมต่อ และทีมรอง เพื่อให้ทีมต่อ หรือทีมที่เก่งจะต่อรองให้ทีมรอง หรือทีมที่อ่อนกว่า </p>
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-md-10 col-lg-5 my-2">
                            <p class="clip-path"><strong><span>•</span> 0.00 หรือ 0 ( เสมอ)</strong> หมายความว่าไม่มีทีมไหนต่อ แทงทีมไหน ถ้าชนะ ได้ หากแพ้ ก็เสีย เสมอ ก็ยก</p>
                            <p class="clip-path"><strong><span>•</span> 0.25 หรือ 0-0.5 (เสมอควบครึ่ง)</strong> หมายความว่า แทงทีมต่อ ต้องชนะ เท่านั้นถึงจะได้เงิน หากเสมอจะเสียครึ่ง และ แพ้จะเสียเต็ม ส่วนแทงทีมรอง ชนะ ได้เต็ม, เสมอ ได้ครึ่ง, แพ้ เสียเต็ม</p>

                        </div>
                        <div class="col-sm-12 col-md-10 col-lg-2 my-2 text-center">
                            <img data-src="./img/soccer.webp" class="lazy img-fluid" width="322" height="331" alt="เว็บพนันบอล soccer">
                        </div>
                        <div class="col-sm-12 col-md-10 col-lg-5 my-2">
                            <p class="clip-path-right"><strong> 0.5 หรือ 0.50 (ครึ่งลูก)</strong><span>•</span> หมายความว่า แทงทีมต่อ ชนะ ได้เต็ม แพ้หรือเสมอ เสียเต็ม ส่วนแทงรอง ชนะหรือเสมอได้เต็ม แพ้เสียเต็ม</p>
                            <p class="clip-path-right"><strong>0.75 หรือ 0.5-1 (ครึ่งควบลูก)<span>•</span></strong> หมายความว่าแทงทีมต่อ ชนะห่าง 1 ลูก ได้ครึ่ง ชนะห่างมากกว่า 2 ลูกได้เต็ม เสมอหรือแพ้ เสียเต็ม ส่วนแทงรอง ชนะหรือเสมอได้เต็ม แพ้ห่าง 1 ลูกเสียครึ่ง แพ้มากกว่า 1 ลูกเสียเต็ม</p>
                        </div>
                        <div class="col-sm-12 col-md-10 col-lg-10 my-2">
                            <p class="clip"><strong>1.0 หรือ 1.00 (หนึ่งลูก)</strong> หมายความว่า แทงทีมต่อ ชนะห่าง 1 ลูก ยก ต้องชนะห่างมากกว่า 2 ลูก ได้เต็ม แพ้หรือเสมอ เสียเต็ม ส่วนแทงรอง ชนะหรือเสมอ ได้เต็ม แพ้ห่าง 1 ลูก ยก แพ้ห่างมากกว่า 2 ลูกเสียเต็ม</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="site-secon-section  py-3">
                <div class="container ">
                    <h2 class="bg-main-text">คำศัพท์ที่นิยมใช้ ในการแทงบอลออนไลน์</h2>
                    <p>คู่มือการวางเดิมพันเว็บไซต์ <strong>พนันบอล</strong> เปิดให้เลือกแทงทั้งในส่วนเต็มเวลา 90 นาที และครึ่งเวลาแรก 45 นาที คำศัพท์ที่นิยมใช้ ในการแทงบอลออนไลน์ ก็จะแบ่งออกเป็นรูปแบบ การเดิมพันแทงบอลต่างๆ ซึ่งเปิดให้แทงบอล ในรูปแบบที่หลากหลาย และวิธีการคำนวณอัตราการจ่าย ที่แตกต่างกัน โดยผู้เล่นทุกคนจะต้องศึกษา เพื่อให้การเดิมพันได้ผลสูงสุด </p>
                    <div class="row justify-content-center my-3">
                        <div class="col-lg-5 col-md-6 col-sm-12 my-2">
                            <p class="bg-gold mb-0">การแทงบอลระหว่างแข่ง (Live)</p>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12 my-2">
                            <p class="bg-gold mb-0">การแทงบอลสูง/ต่ำ (Over/Under)</p>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12 my-2">
                            <p class="bg-gold mb-0">แทงบอลทายผลประตูรวม (Total Goal)</p>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12 my-2">
                            <p class="bg-gold mb-0">การทายผลสกอร์ (Correct Score)</p>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12 my-2">
                            <p class="bg-gold mb-0">การแทงบอล1×2 (Money line)</p>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12 my-2">
                            <p class="bg-gold mb-0">การแทงบอลคู่/คี่ (Odd/Even)</p>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12 my-2">
                            <p class="bg-gold mb-0">ประตูแรก / ประตูสุดท้าย</p>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12 my-2">
                            <p class="bg-gold mb-0">แทงบอล ครึ่งเวลา เต็มเวลา</p>
                        </div>
                    </div>


                </div>
            </section>
            <section class="site-secon-section  py-3">
                <div class="container ">
                    <h2 class="bg-main-text">กติกา บอลสด หรือ เดิมพันในกีฬาสด (Live Betting)</h2>
                    <p>การวางเดิมพัน แทงบอลสด คือการวางเดิมพัน กีฬาการแข่งขัน ขณะกำลังเล่นอยู่ การเดิมพันประเภทนี้ จะช่วยสร้างความเร้าใจ และตื่นเต้นใ ห้กับนักเดิมพัน เป็นอย่างมาก เนื่องจากท่านต้องอาศัย หลักการวิเคราะห์เกม การแข่งขันตลอดเวล าโดยคำนึงถึงรายละเอียดมากมาย อาทิ การเปลี่ยนตัว อาการบาดเจ็บของผู้เล่น ใบเหลืองใบแดง ทั้งหมดล้วนมีผล ต่อการตัดสินใจ ในการเดิมพัน ส่วนของราคาการเดิมพัน แทงบอลสดนั้นนักเดิมพัน จะมีตัวเลือกมากมาย ให้เลือกตามความต้องการ และสามารถเปลี่ยนแปลงได้ตลอดเวลา โดยกีฬาที่นิยมเดิมพันแบบสด ก็จะมีมากมาย แต่ที่ได้รับความนิยมมากที่สุด ปัจจุบันคือรูปแบบ แทงบอลสด ได้รับความนิยมในหมู่ นักพนันบอลออนไลน์อย่างมาก นักพนันบอลสามารถเข้าแทงบอลออนไลน์ได้ทันที ในขณะที่บอลกำลัง มีการแข่งขัน ช่วยให้ดูการแข่งสนุกขึ้น และที่สำคัญพนันบอลสด ยังเป็นการแทงบอลที่ง่ายที่สุด ทำให้นักพนัน มีโอกาสชนะเดิมพันสูง เนื่องจากการดูบอลสดไปพร้อมๆ กับการแทงบอล แถมยังวิเคราะห์ เกมการแข่งขันได้ </p>
                </div>
            </section>
            <section class="site-secon-section  py-3">
                <div class="container ">
                    <h2 class="bg-main-text">วางเดิมพันฟุตบอลโลก 2022 ณ ประเทศ กาตาร์</h2>
                    <p>นับถอยหลังฟุตบอลโลก 2022 การรอคอยอันยาวนานนับ 4 ปี ใกล้สิ้นสุดลง เมื่อแฟนบอลจากทั่วทุกมุมโลก ต่างกำลังตื่นเต้น และให้ความสนใจ กับการแข่งขัน รอบสุดท้ายที่กาตาร์ ช่วงปลายปีที่จะถึงนี้ ตอนนี้ก็ประกาศรายชื่อ 32 ทีม ที่ผ่านเข้ารอบสุดท้าย กำลังเดินทางไปแข่งขัน ซึ่งถือว่าเป็นครั้งแรกที่ชาติตะวันออกกลาง จะได้เป็นเจ้าภาพ การแข่งขัน โดยมีเป้าหมายเพียงอย่างเดียว คือการคว้าแชมป์มาครอบครอง การจับฉลากแบ่งสาย สิ้นสุดลงเป็นที่เรียบร้อย ตารางการแข่งขันฟุตบอลโลก 2022 เริ่มการแข่งขันในช่วง 20 พฤศจิกายน โดยเจ้าภาพอย่างกาตาร์ จะลงเป็นคู่เปิดสนาม แน่นอนว่าการแข่งขัน ฟุตบอลทัวร์นาเมนต์ที่ยิ่งใหญ่ครั้งนี้ นอกจากจะให้ความสนุกสนาน และลุ้นเชียร์ทีมโปรดแล้ว แฟนบอลยังสามารถเพิ่มระดับ ของความตื่นเต้น รวมไปถึงความสนุกสนานอีกขั้น ด้วยการเดิมพัน และรับเงินรางวัลเพิ่มเติมได้อีกด้วย ตลาดการเดิมพันฟุตบอลโลก มีหลากหลายตลาดด้วยกัน อาทิ การแทงบอลสูงต่ำ ประตูรวม และอื่นๆ อย่างไรก็ดี การเดิมพันที่นิยมมากที่สุด ก็คงหนีไม่พ้น การเดิมพันทีมที่จะคว้าแชมป์โลก </p>
                    <img data-src="./img/123ball-img02.webp" class="lazy img-fluid" width="100%" height="100%" alt="วางเดิมพันฟุตบอลโลก 2022 ณ ประเทศ กาตาร์">
                </div>
            </section>
        </article>
        <article class="site-article pt-2">
            <div class="container"><br>
                <p class="str-news text-center  mb-0"><a href="./all-articles/">บทความ เว็บพนันบอล</a></p><br>
                <div class="row justify-content-center align-items-end ">
                    <?php
                    include_once './conn/connect.php';
                    $sql = "SELECT * FROM articles 
    ORDER BY id DESC  LIMIT 0,3 ";
                    $q = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error($conn));
                    while ($resuret = mysqli_fetch_array($q)) {
                        $d_topic = $resuret['topic_name'];
                        $d_dec = strip_tags(mb_substr($resuret['descripion'], 0, 100, 'utf-8'));
                        $img = $resuret['image_banner'];
                        $date = date("Y-m-d", strtotime($resuret['create_at']));
                        $view = $resuret['view'];
                        $seo_dec = $resuret['descripion_seo'];
                        $url_articles_seo = $resuret['url_articles_seo'];
                        $article_id = $resuret['id'];
                    ?>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="bg_articles my-2">
                                <a href="./view/<?php echo $url_articles_seo; ?>" class="article-link" rel="ugc">
                                    <figure class="news-articles-img">
                                        <div class="bg-img">
                                            <img class="lazy img-fluid zoom" data-src="./backend/uploads/article-img/<?php echo $img ?>" alt="<?php echo $d_topic ?>" width="100%" height="100%">
                                        </div>
                                    </figure>
                                    <div class="px-2">
                                        <strong class="news-articles-h4"><?php echo trim(strip_tags(mb_substr($d_topic, 0, 30, 'utf-8'))); ?></strong>
                                        <div class="d-flex flex-column  view_date">
                                            <span>
                                                โพสเมื่อ : <?php echo $date; ?>
                                            </span>
                                            <span>
                                                ผู้เข้าชม : <?php echo $view; ?>
                                            </span>
                                        </div>

                                        <p class="news-articles-p "><?php echo trim(strip_tags(mb_substr($seo_dec, 0, 120, 'utf-8'))); ?></p>
                                    </div>
                                </a>
                                <div class="card__footer">
                                    <div class="user">
                                        <div class="user__info">
                                            <p>TEGS :</p>
                                            <?php
                                            $sql_tag = "SELECT tag.tag_url as tag_url,tag.name as name FROM (tag
                                    left join tag_log on tag.id = tag_log.tag_id)
                                    where articles_id = $article_id ";
                                            $query_tag = mysqli_query($conn, $sql_tag) or die("Error in query: $sql " . mysqli_error($conn));
                                            while ($result_tag = $query_tag->fetch_assoc()) {
                                            ?>
                                                <a href="./tag/<?php echo $result_tag['tag_url']; ?>" style="text-decoration: none;">
                                                    <span class="tag tag-red"><?php echo $result_tag['name'] ?></span>
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </article>
    <?php
    } else {
    ?>
        <article class="article-container-card pt-2">
            <div class="container" style="background-color: #000000;">
                <div class="text-center ">
                    <br>
                    <p class="text-bold-search mb-0 ">
                        Search By : <?php echo $key_search; ?>
                    </p>
                    <br>
                </div>
                <div class="row justify-content-center align-items-end mt-2">
                    <?php
                    while ($resuret = mysqli_fetch_array($q)) {
                        $d_topic = $resuret['topic_name'];
                        $d_dec = strip_tags(mb_substr($resuret['descripion'], 0, 100, 'utf-8'));
                        $img = $resuret['image_banner'];
                        $date = date("Y-m-d", strtotime($resuret['create_at']));
                        $view = $resuret['view'];
                        $seo_dec = $resuret['descripion_seo'];
                        $url_articles_seo = $resuret['url_articles_seo'];
                        $article_id = $resuret['id'];
                    ?>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="bg_articles my-2">
                                <a href="./view/<?php echo $url_articles_seo; ?>" class="article-link" rel="ugc">
                                    <figure class="news-articles-img">
                                        <div class="bg-img">
                                            <img class="lazy img-fluid zoom" data-src="./backend/uploads/article-img/<?php echo $img ?>" alt="<?php echo $d_topic ?>" width="100%" height="100%">
                                        </div>
                                    </figure>
                                    <div class="px-2">
                                        <strong class="news-articles-h4"><?php echo trim(strip_tags(mb_substr($d_topic, 0, 30, 'utf-8'))); ?></strong>
                                        <div class="d-flex flex-column text-center view_date">
                                            <span>
                                                โพสเมื่อ : <?php echo $date; ?>
                                            </span>
                                            <span>
                                                ผู้เข้าชม : <?php echo $view; ?>
                                            </span>
                                        </div>

                                        <p class="news-articles-p "><?php echo trim(strip_tags(mb_substr($seo_dec, 0, 120, 'utf-8'))); ?></p>

                                    </div>
                                </a>
                                <div class="card__footer">
                                    <div class="user">
                                        <div class="user__info">
                                            <p>TEGS :</p>
                                            <?php
                                            $sql_tag = "SELECT tag.tag_url as tag_url,tag.name as name FROM (tag
                                    left join tag_log on tag.id = tag_log.tag_id)
                                    where articles_id = $article_id ";
                                            $query_tag = mysqli_query($conn, $sql_tag) or die("Error in query: $sql " . mysqli_error($conn));
                                            while ($result_tag = $query_tag->fetch_assoc()) {
                                            ?>
                                                <a href="./tag/<?php echo $result_tag['tag_url']; ?>" style="text-decoration: none;">
                                                    <span class="tag tag-red"><?php echo $result_tag['name'] ?></span>
                                                </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </article>
    <?php
    }
    ?>
    <footer class="site-footer">
        <div class="container px-0">
            <div class="hr-top"></div>
            <div class="row align-items-center  justify-content-between my-3 " style="  background-image: linear-gradient(to right,#7e0001,#be0000);">
                <div class="col-lg-2 col-md-6 col-sm-12 my-1 text-center">
                    <a href="./">
                        <img data-src="./img/logo-123ball.webp" class="lazy img-fluid" width="156" height="235" alt="logo 123บอล">
                    </a>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 my-1">
                    <a href="./" class="f-link">
                        <img data-src="./img/123ball-footimg01.webp" class="lazy img-fluid" width="80" height="136" alt="เว็บพนันบอล">
                        เว็บพนันบอล
                    </a>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 my-1">
                    <a href="./entrance/" class="f-link">
                        <img data-src="./img/123ball-footimg02.webp" class="lazy img-fluid" width="80" height="136" alt="ทางเข้า">
                        ทางเข้า
                    </a>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 my-1">
                    <img data-src="./img/123ball-footimg03.webp" class="lazy img-fluid" width="80" height="136" alt="สมัครสมาชิก">
                    <a href="./register/" class="f-link">
                        สมัครสมาชิก
                    </a>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 my-1 text-center">
                    <a href="./backend/login.php" class="f-link">
                        เข้าสู่ระบบ
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "80%";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0%";
        }
    </script>
    <!-- start lazyload -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var lazyloadImages;

            if ("IntersectionObserver" in window) {
                lazyloadImages = document.querySelectorAll(".lazy");
                var imageObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            var image = entry.target;
                            image.src = image.dataset.src;
                            image.classList.remove("lazy");
                            imageObserver.unobserve(image);
                        }
                    });
                });

                lazyloadImages.forEach(function(image) {
                    imageObserver.observe(image);
                });
            } else {
                var lazyloadThrottleTimeout;
                lazyloadImages = document.querySelectorAll(".lazy");

                function lazyload() {
                    if (lazyloadThrottleTimeout) {
                        clearTimeout(lazyloadThrottleTimeout);
                    }

                    lazyloadThrottleTimeout = setTimeout(function() {
                        var scrollTop = window.pageYOffset;
                        lazyloadImages.forEach(function(img) {
                            if (img.offsetTop < (window.innerHeight + scrollTop)) {
                                img.src = img.dataset.src;
                                img.classList.remove('lazy');
                            }
                        });
                        if (lazyloadImages.length == 0) {
                            document.removeEventListener("scroll", lazyload);
                            window.removeEventListener("resize", lazyload);
                            window.removeEventListener("orientationChange", lazyload);
                        }
                    }, 20);
                }

                document.addEventListener("scroll", lazyload);
                window.addEventListener("resize", lazyload);
                window.addEventListener("orientationChange", lazyload);
            }
        })
    </script>
    <!--end lazyload -->
</body>

</html>