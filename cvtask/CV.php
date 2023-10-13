<?php
$name="Reham Afifi Yousef";
$phone="01007013193";
$email="dr.reham.yousef@gmail.com";
$photo="images/reham.jpg";

?>
<!DOCTYPE html>
<html>

<head>
    <title>Reham Afifi's cv</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>


    <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Roboto", sans-serif
    }
    </style>
</head>

<body class="w3-light-grey">

    <!-- Page Container -->
    <div class="w3-content w3-margin-top" style="max-width:1400px;">

        <!-- The Grid -->
        <div class="w3-row-padding">

            <!-- Left Column -->
            <div class="w3-third">

                <div class="w3-white w3-text-grey w3-card-4">
                    <div class="w3-display-container">
                        <img src=<?php echo $photo;?> style="width:100%" alt="Avatar">
                        <div class="w3-display-bottomleft w3-container w3-text-white">
                            <h2><?php echo $name?></h2>
                        </div>
                    </div>
                    <div class="w3-container">
                        <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>PHP/laravel
                            Developer</p>
                        <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Egypt, Cairo</p>
                        <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email?>
                        </p>
                        <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $phone?>
                        </p>
                        <hr>

                        <p class="w3-large"><b><i
                                    class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
                        <p>HTML</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:95%">95%</div>
                        </div>
                        <p>CSS</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:85%">
                                <div class="w3-center w3-text-white">85%</div>
                            </div>
                        </div>
                        <p>
                            Java Script
                        </p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">80%</div>
                        </div>
                        <p>Bootstrap</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:95%">95%</div>
                        </div>
                        <p>Mysql</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:60%">60%</div>
                        </div>
                        <p>PHP</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
                        </div>
                        <p>Laravel</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:65%">65%</div>
                        </div>

                        <br>

                        <p class="w3-large w3-text-theme"><b><i
                                    class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
                        <p>Arabic</p>
                        <div class="w3-light-grey w3-round-xlarge">
                            <div class="w3-round-xlarge w3-teal" style="height:24px;width:95%"></div>
                        </div>
                        <p>English</p>
                        <div class="w3-light-grey w3-round-xlarge">
                            <div class="w3-round-xlarge w3-teal" style="height:24px;width:85%"></div>
                        </div>
                        <br>
                    </div>
                </div>
                <br>

                <!-- End Left Column -->
            </div>

            <!-- Right Column -->
            <div class="w3-twothird">

                <div class="w3-container w3-card w3-white w3-margin-bottom">
                    <h2 class="w3-text-grey w3-padding-16"><i
                            class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience
                    </h2>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>NO Work Experience</b></h5>
                        <hr>
                    </div>
                </div>
                <div class="w3-container w3-card w3-white w3-margin-bottom">
                    <h2 class="w3-text-grey w3-padding-16"><i
                            class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Diploma</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2022</h6>
                        <p> Qualification of Math Teachers to teach
                            using English Language Grade: Excellent Faculty of Women, Ain Shams University </p><br>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Diploma</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2020</h6>
                        <p> Qualification of Math Teachers to teach Grade: Good Faculty of Education, AL-Azhar
                            University </p><br>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Diploma</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2015 - 2016</h6>
                        <p>Diploma in Scientific Computing and its Applications, Faculty of Science,

                            Ain Shams University
                            Total grade: Very Good
                            Courses: Algorithms and Datastructure, Operating System, Database, Java.
                            Project: E-Voting System
                            Built an electronic voting application that enables conducting election process
                            smoothly and quickly. Also it helps to reduce paper work and human resources.
                            System includes 2 modules (different User-Views application programs):
                            Voting module and Admin module. GUI is built with Java FX and the program is
                            linked to database built with SQL Server. Project Tools: SQL Server 2014,
                            NetBeans IDE v8.1 and Java platform JDK 8.
                            Grade: Excellent</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Bachelor's degree</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2009- 2012</h6>
                        <p>BSc of Computer Science and Maths, Faculty of Science, Zagazig University

                            Total grade: Good 71.73 % (75% in computer science courses)
                            Graduation project: Augmented Reality& 3D Visualization using 3DS Max
                            Design of different 3D shapes and link it to ARtoolkit
                            Grade: Excellent</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>General Secondary stage</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2007- 2009</h6>
                        <p> Gamal Abd El –Naser School, Zagazig, Sharkia.</p><br>
                    </div>

                </div>
                <!-- ????????????????? -->
                <div class="w3-container w3-card w3-white">
                    <h2 class="w3-text-grey w3-padding-16"><i
                            class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Cources</h2>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b> NTI Digital Egypt Youth Training </b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i> 2021</h6>
                        <p> Information Technology Web Design (HTML,
                            CSS, Bootstrap, JS) Score: 92% </p>
                        <hr>

                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b> NTI Digital Egypt Youth Training </b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i> Feb 2022</h6>
                        <p> Web Development using PHP, MySQL and Laravel Score: 100%
                        </p>
                        <hr>

                    </div>

                    <div class="w3-container">
                        <h5 class="w3-opacity"><b> NTI Digital Egypt Youth Training </b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i> May 2022</h6>
                        <p> Web
                            Development using NodeJS and Angular Score: 88%
                        </p>
                        <hr>

                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b> Egyfwd Udacity Nanodegree </b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i> 2021</h6>
                        <p>Web Development Challenger Track
                        </p>
                        <hr>

                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b> NajahNow-Zewail City</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>August-December
                            2022</h6>
                        <p> Web
                            Full Stack Diploma(PHP/LARAVEL)
                        </p>
                        <hr>

                    </div>
                    0
                </div>
            </div>
            <!-- End Right Column -->
        </div>

        <!-- End Grid -->
    </div>

    <!-- End Page Container -->
    </div>

    <footer class="w3-container w3-teal w3-center w3-margin-top">
        <p>Find me on social media.</p>
        <a href="https://web.facebook.com/?ref=tn_tnmn&_rdc=1&_rdr" target="_blank"> <i
                class="fa fa-facebook-official w3-hover-opacity"></i></a>
        <a href="https://www.linkedin.com/in/reham-afifi-24a61021a/" target="_blank"> <i
                class="fa fa-linkedin w3-hover-opacity"></i></a>
        <a href="https://github.com/RehamAfifi" target="_blank"><i class="fa fa-github w3-hover-opacity"
                aria-hidden="true"></i></a>

        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </footer>

</body>

</html>