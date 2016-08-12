<!DOCTYPE html>
<html>
    <head>
        <title>Welcome To Simple Brains</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1">
        <style type="text/css">
            @import "style/cosmo.css";
            @import "style/zoomwall.css";
            @import "style/sty.css";
            *{
                font-family: "Comic Sans MS";
            }
            #menu_body{
                /*transition: all 1s ease-in-out;*/
                text-align: center;
                color: #222;
                padding: 10px;
                padding-bottom: 175px;
                background: rgba(0, 0, 0, 0.3);
            }
            #menu_body:hover{
                transition: all 1s ease-in-out;
                background: rgba(0, 0, 0, 0.4);
                color: #dddddd;
            }
            #menu_body p{
                visibility: visible;
                font-size: 160%;
            }
            #menu_body:hover p{
                visibility: hidden;
            }
            #menu_body ul li{
                list-style: none;
                display: inline;
            }
            .w1, 
            .w2, 
            .w3{
                transition: all 1s ease-in-out;
                //visibility: hidden;
                position: absolute;
                margin-left: -40%;
                visibility: hidden;
            }
            #menu_body:hover .w1{
                transform: translateX(0);
                transition: all 1s ease-in-out;
                z-index: 1;
                visibility: visible;
            }
            #menu_body:hover .w2{
                transform: translateX(117%);
                transition: all 1s ease-in-out;
                z-index: 2;
                visibility: visible;
            }
            #menu_body:hover .w3{
                transform: translateX(234%);
                transition: all 1s ease-in-out;
                z-index: 3;
                visibility: visible;
            }
        </style>
    </head>
    <body>
        <script type="text/javascript" src="<?=base_url();?>style/jquery-1.11.1.js"></script>
        <script type="text/javascript" src="<?=base_url();?>style/bootstrap.js"></script>
        <script type="text/javascript" src="<?=base_url();?>style/zoomwall.js"></script>
        <script type="text/javascript" src="<?=base_url();?>style/jquery-timeliner.js"></script>
        <script>
            window.onload = function() {
                zoomwall.create(document.getElementById('gallery'));
            };
        </script>
        <script type="text/javascript">
            /* Change Color To Navbar */
            $(window).scroll(function () {
                if ($(window).scrollTop() > 660) {
                    $("#navigation").css("background-color","rgba(0, 210, 255, 0.3)");
                } else {
                    $("#navigation").css("background-color","#222");
                }
            });
            /* Smooth Slide */
            $(function() {
                $('a[href*=#]:not([href=#])').click(function() {
                    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                            if (target.length) {
                                $('html,body').animate({
                                scrollTop: target.offset().top
                                }, 1000);
                                return false;
                            }
                    }
                });
            });
            /* Jquery Time Liner */
            $(function(){
                $().timelinr();
            });
        </script>
        <div class="container-fluid">
            <!-- INDEX -->
            <div id="home" class="panel-heading">
                <nav class="navbar navbar-default navbar-fixed-top" id="navigation">
                    <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="<?=base_url();?>images/logo.png" alt="Brand Image" width="100" />
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav" style="padding: 6px 0; ">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#work">Our Works</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#contact">Contact Us</a></li>
                        </ul>
                        <!--ul class="nav navbar-nav navbar-right">
                            <li><a href="https://www.facebook.com"><img width="30" src="images/social/Facebook.png" /></a></li>
                            <li><a href="https://www.twitter.com"><img width="30" src="images/social/Twitter.png" /></a></li>
                            <li><a href="https://www.github.com"><img width="30" src="images/social/Github.png" /></a></li>
                            <li><a href="https://www.rss.com"><img width="30" src="images/social/RSS.png" /></a></li>
                        </ul -->
                    </div>
                    </div>
                </nav>
                <br/><br/>
           </div><!-- End of panel-heading-->
            <!-- BODY INCLUDING WORK CONTACT N ABOUT -->
            <div class="container-fluid" style="background: #222;">
                
                <div id="timeline">
                    <ul id="dates">
                        <li><a href="#">Simple</a></li>
                        <li><a href="#">Respon</a></li>
                        <li><a href="#">Struct</a></li>
                        <li><a href="#">Free</a></li>
                    </ul>
                        <ul id="issues">
                            <li id="date1">
                                <img src="<?=base_url();?>images/simple2.png" />
                            <h1>Simple Design</h1>
                            <p>
                                Design Made Simple by Simple Brains,
                                imagine that you don't know how to train
                                troops and someone that are not your friend 
                                know how to train troops what are you doing?
                                for train troops, maybe you will run away
                                and doing nothing.
                            </p>
                            </li>
                            <li id="date2">
                                <img src="<?=base_url();?>images/respons.png" />
                            <h1>Responsive Design</h1>
                            <p>
                                Responsive are better than not responsive
                                but what do you think when your website can't
                                open in your device says smartphone or tablet's
                                what do you think? it isn't responsive? isn't it?
                                or? only one i know that your mobile device 
                                has no 'kuota'.
                            </p>
                            </li>
                            <li id="date3">
                                <img src="<?=base_url();?>images/structure.png" />
                            <h1>Structured Design</h1>
                            <p>
                                Do you know what is OOP? don't you, i think everybody
                                already know what is the meaning of OOP, oh..
                                you don't know what is the meaning of OOP, okay
                                i will explain, OOP is Okulasi Obligasi Pelegasi
                                hmm, maybe like that.
                            </p>
                            </li>
                            <li id="date4">
                                <img src="<?=base_url();?>images/free.png" />
                            <h1>Free Training</h1>
                            <p>
                                Why we says free training? do you know why?
                                if you don't know, you should read this, we says
                                free training because of something gonna missing
                                maybe something gonna missing but hmm is missing.
                            </p>
                            </li>
                        </ul>
                    <div id="grad_left"></div>
                        <div id="grad_right"></div>
                    </div>
                </div>
                <section id="menu_body" class="work clearfix">
                <center>
                <h1 id="work">Recently Work</h1>
                <hr/>
                <div>
                    <center><p>Pointer Here !</p></center>
                    <ul>
                        <li><img src="<?=base_url();?>images/recent/web1.png" width="23%" alt="gambar" class="w1"/></a></li>
                        <li><img src="<?=base_url();?>images/recent/web2.png" width="23%" alt="gambar" class="w2"/></a></li>
                        <li><img src="<?=base_url();?>images/recent/web3.png" width="23%" alt="gambar" class="w3"/></a></li>
                    </ul>
                </div>
                </center>
                </section>
            <!-- WORK -->
            </div>
            <div class="container">
            <br/>
            <section class="work clearfix"><center>
                <div class="container zoomwall" id="gallery">
                    <h1>Our Works</h1>
                    <hr/>
                        <img src="<?=base_url();?>images/work/web1.png" alt="gambar" />
                        <img src="<?=base_url();?>images/work/web2.png" alt="gambar" />
                        <img src="<?=base_url();?>images/work/web3.png" alt="gambar" />
                        <img src="<?=base_url();?>images/work/web4.png" alt="gambar" />
                        <img src="<?=base_url();?>images/work/web5.png" alt="gambar" />
                        <img src="<?=base_url();?>images/work/web6.png" alt="gambar" />
                        <img src="<?=base_url();?>images/work/web7.png" alt="gambar" />
                        <img src="<?=base_url();?>images/work/web8.png" alt="gambar" />
                        <img src="<?=base_url();?>images/work/web9.png" alt="gambar" />
                    </div></center>
                </section>
            
            <br/><br/>
            <!-- ABOUT -->
                <section id="about" class="work clearfix"><center>
                <h1>About Us</h1>
                <hr/>
                    <center><img src="<?=base_url();?>images/logo.png" width="90%" alt="logo" /></center>
                   <div style="background: rgba(0, 0, 0, 0.5); overflow: hidden; padding: 20px; border-radius: 10px;">
                       <!--div>
                           Kami adalah sekelompok orang yang bertujuan untuk membuat
                       sebuah aplikasi atau software yang berbasis web & desktop.
                       website yang kami buat merupakan template-template yang di
                       desain untuk personal, bisnis, pariwisata, sekolah, 
                       universitas, photographer dll.
                       </div--> 
                       <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <h3><strong>Gevin</strong> as Programmer, Networking</h3>
                            <img src="<?=base_url();?>images/Us/gevin.jpg" width="90%" alt="gambar" />
                        </div>
                        <div class="col-md-2">
                            <h3><strong>Jimbo</strong> as Programmer, Developer</h3>
                            <img src="<?=base_url();?>images/Us/jimbo.jpg" width="90%" alt="gambar" />
                        </div>
                        <div class="col-md-2">
                            <h3><strong>Bobby</strong> as Programmer, Database</h3>
                            <img src="<?=base_url();?>images/Us/nando.jpg" width="90%" alt="gambar" />
                        </div>
                        <div class="col-md-2">
                            <h3><strong>Steven</strong> as Programmer, Analyst</h3>
                            <img src="<?=base_url();?>images/Us/steven.jpg" width="90%" alt="gambar" />
                        </div>
                        <div class="col-md-2">
                            <h3><strong>Suandi</strong> as Tester, Publisher</h3>
                            <img src="<?=base_url();?>images/Us/wandi.jpg" width="90%" alt="gambar" />
                        </div>
                        <div class="col-md-1"></div>
                   </div></center>
                </section>
            
            <br/><br/>
            <!-- CONTACT -->
            
                <section id="contact" class="work clearfix"><center>
                    <h1>Contact Us</h1>
                    <hr/>
                    <p>
                        Please Send us a message.
                    </p>
                    <form action="<?=base_url();?>index.php/message/" method="get">
                    <table class="table table-responsive" style="width: 90%;">
                        <tr>
                            <td align="center"><input type="text" name="name" placeholder="Name" class="form-control" /></td>
                            <td align="center"><input type="email" name="email" placeholder="Email" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td align="center" colspan="2"><textarea name="message" placeholder="Your Message" class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <td align="center" colspan="2"><input type="submit" value="Send My Message" class="btn btn-default" /></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><?=$notif?></td>
                        </tr>
                    </table>
                    </form>
                    <!-- OR -->
                    <!--div id="contact_social" >
                        <h1>OR CONTACT</h1>
                        <ul>
                            <li><a href=""><img src="images/social/Facebook.png" alt="gambar" width="25" />With Facebook</a></li>
                            <li><a href=""><img src="images/social/Google.png" alt="gambar" width="25" />With Google</a></li>
                        </ul>
                    </div-->
                </center></section>
            
            </div><!-- End of panel body -->
            <div class="panel-footer">
                <small><center>copyright's &copy; 2011 Simple Brains.</center></small>
            </div>
    </body>
</html>
