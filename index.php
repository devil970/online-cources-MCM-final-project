<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Achivers Academy</title>
    <link rel="website icon" type="png"
    href="logo1.png">
  </head>
<body>
   <body onload="myFunction()" style="margin:0;">
  <div id="loader"></div>
  <div style="display:none;" id="myDiv" class="animate-bottom"> 

    <header> 
        
        <nav>
            <div class="logo"><a href="index.html"><img src="logo1.png" width="70" height="70"></a> </div>
            <div class="search-bar">
                <input type="text" placeholder="Search">
                <button type="submit">Search</button>
            </div>
            <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
            <ul class="main-nav">
                <li><a href="index.html">HOME</a></li>
                <li><a href="Cource.html">COURSES</a></li>
                <li class="registration">
                    <a href="register_form.php">REGISTRATION</a>
                    <li><a href="login_form.php">LOGIN</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="contact us.html">CONTACT</a></li>
                <li><a href="logout.php">logout</a></li>  
              </li>
            </ul>
        </nav> <br><br>
        </header>
         <div class="marquee-text">
         Free courses available. Check out our site. Starts 10-10-2023.
         </div> <br>
         <section>
            <div class="section">
              <div class="section1">
                <div class="img-slider">
                  <img src="slider images/1.jpg" alt="" class="img">
                  <img src="slider images/2.jpg" alt="" class="img">
                  <img src="slider images/3.jpg" alt="" class="img">
                  <img src="slider images/4.jpg" alt="" class="img">
                  <img src="slider images/5.jpg" alt="" class="img">
                </div></div></div></section><br><br><br>
                  
                <div class="mentor">
                 <div class="txt"> <h1><u><bold> OUR MENTORS</u></bold></h1>
                 </div>
                </div><br>
                <div class="section2">
                  <div class="container">
                    <div class="items">
                      <div class="img img1"><img src="mentor/1.jpg" alt=""></div>
                      <i  class="fa-brands fa-facebook"></i>
                      <i class="fa-brands fa-youtube"></i>
                      <i class="fa-brands fa-twitter"></i>
                      <i class="fa-brands fa-github"></i>          
                      <div class="name">Christina</div>
                      <div class="profession">Web Devloper</div>
                      <div class="descreption">EXP- 10 years<br><h5>Design and develop websites and web 
                        applications using a variety of programming languages.</h5>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                      </div>
                    </div>
                    <div class="items">
                      <div class="img img2"><img src="mentor/2.jpg" alt=""></div>
                      <i class="fa-brands fa-facebook"></i>
                      <i class="fa-brands fa-youtube"></i>
                      <i class="fa-brands fa-twitter"></i>
                      <i class="fa-brands fa-github"></i>
                      <div class="name">Elizabeth</div>
                      <div class="profession">Python Devloper</div>
                      <div class="descreption">EXP- 5 years.<br><h5>Develop and maintain Python applications
                        Debug and fix Python code.</h5>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                      </div>
                    </div>
                    <div class="items">
                      <div class="img img3"><img src="mentor/3.jpg" alt=""></div>
                      <i class="fa-brands fa-facebook"></i>
                      <i class="fa-brands fa-youtube"></i>
                      <i class="fa-brands fa-twitter"></i>
                      <i class="fa-brands fa-github"></i>
                      <div class="name">Jems</div>
                      <div class="profession">Java Devloper</div>
                      <div class="descreption">EXP- 6 years.<br><h5>Developing and maintaining web applications and android applications<!DOCTYPE html>
                        .</h5>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                      </div>
                    </div>
                    <div class="items">
                      <div class="img img1"><img src="mentor/4.jpg" alt=""></div>
                      <i class="fa-brands fa-facebook"></i>
                      <i class="fa-brands fa-youtube"></i>
                      <i class="fa-brands fa-twitter"></i>
                      <i class="fa-brands fa-github"></i>
                      <div class="name">Walter</div>
                      <div class="profession">Back-End Devloper </div>
                      <div class="descreption">EXP- 9 years.<br><h5>Developing and maintaining web applications using server-side programming languages .</h5>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                      </div>
                    </div>
                  </div>
                    <div class="mentor">
                      <div class="txt"> <h1><u><bold> CATEGORY</u></bold></h1>
                      </div>
                     </div>
                    <table id="table">
                      <td colspan="4">
                      </td>
                  </tr>
                  <tr>
                    <td>
                              <div class="div1">
                              <img src="icons/I1.jpeg" style="width: 50%;" />
                              <p>The Quick Brown Fox Jumps Over The Lazy Dog..</p>
                              <a href="Cource.html"><button class="btn btn1"> Computer Cource</button></a>
                              <br /><br />
                          </div>
                      </td>
                      <td>
                          <div class="div1">
                          <img src="icons/I2.png" style="width: 50%;" />
                          <p>The Quick Brown Fox Jumps Over The Lazy Dog..</p>
                          <button class="btn btn2">Coming Soon</button>
                          <br/><br/>
                          </di>        
                         </td>
                      <td>
                          <div class="div1">
                          <img src="icons/I3.png" style="width: 50%;" />
                          <p>The Quick Brown Fox Jumps Over The Lazy Dog..</p>
                          <button class="btn btn3">Coming Soon</button>
                          <br /><br />
                          </div>
                      </td>
                      <td>
                          <div class="div1">
                          <img src="icons/I4.png" style="width: 50%;" />
                          <p>The Quick Brown Fox Jumps Over The Lazy Dog..</p>
                          <button class="btn btn4">Coming Soon</button>
                          <br /><br />
                          </div>
                      </td>
                  </tr>
                  <tr>
              </table>

              <div class="mentor">
                <div class="txt"> <h1><u><bold> COMMENTS</u></bold></h1>
                </div>
              
            <section class="main">
                <div class="full-boxer">
                    <div class="comment-box">
                        <div class="box-top">
                            <div class="Profile">
                                <div class="profile-image">
                                    <img src="cmt/1.png">
                                </div>
                                <div class="Name">
                                    <strong>Rupali Lochana</strong>
                                    <span>@Rupali Lochana</span>
                                </div>
                            </div>
                        </div>
                        <div class="comment">
                            <p>
                              Achivers Academy has been a great platform to stay competitive in the digital transformation of the workplace by offering fresh, relevant, personalized on-demand learning content powered by a dynamic content marketplace.
                            </p>
                        </div>
                    </div>
        
                    <div class="comment-box">
                        <div class="box-top">
                            <div class="Profile">
                                <div class="profile-image">
                                    <img src="cmt/2.png">
                                </div>
                                <div class="Name">
                                    <strong>Jhon Dilwan</strong>
                                    <span>@jhon dilwan</span>
                                </div>
                            </div>
                        </div>
                        <div class="comment">
                            <p>
                              After joining Achivers Acadamy, my world completely changed since they trained me to develop an app from the scratch, which is a very important skill for a developer to possess. 
                            </p>
                        </div>
                    </div>
        
                    <div class="comment-box">
                        <div class="box-top">
                            <div class="Profile">
                                <div class="profile-image">
                                    <img src="cmt/3.jpg">
                                </div>
                                <div class="Name">
                                    <strong>Shilpa Dhengare</strong>
                                    <span>@Shilpa Dhengare</span>
                                </div>
                            </div>
                        </div>
                        <div class="comment">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                        </div>
                    </div>
        
                    <div class="comment-box">
                        <div class="box-top">
                            <div class="Profile">
                                <div class="profile-image">
                                    <img src="cmt/4.jpg">
                                </div>
                                <div class="Name">
                                    <strong>Suchit Shende</strong>
                                    <span>@Suchit Shende</span>
                                </div>
                            </div>
                        </div>
                        <div class="comment">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </p>
                        </div>
                    </div>
                </div>
            </section>









              <footer>   
                  <img src="logo1.png"width="70" height="70" alt="Achivers Acadamy"> 
                <div class="footer0">
                <h1>Achivers Acadamy</h1>
              </div>
                <div class="footer1 ">
                  Connect with us at<div class="social-media">
                    <a href="#">
                      <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="#">
                      <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                    <a href="#">
                      <ion-icon name="logo-youtube"></ion-icon>
                    </a>
                    <a href="#">
                      <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                    <a href="#">
                      <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                  </div>
                </div>
                <div class="footer2">
                  <div class="product">
                    <div class="heading">Products</div>
                    <div class="div">Sell your Products</div>
                    <div class="div">Advertise</div>
                    <div class="div">Pricing</div>
                    <div class="div">Product Buisness</div>
            
                  </div>
                  <div class="services">
                    <div class="heading">Services</div>
                    <div class="div">Return</div>
                    <div class="div">Cash Back</div>
                    <div class="div">Affiliate Marketing</div>
                    <div class="div">Others</div>
                  </div>
                  <div class="Company">
                    <div class="heading">Company</div>
                    <div class="div">Complaint</div>
                    <div class="div">Careers</div>
                    <div class="div">Affiliate Marketing</div>
                    <div class="div">Support</div>
                  </div>
                  <div class="Get Help">
                    <div class="heading">Get Help</div>
                    <div class="div">Help Center</div>
                    <div class="div">Privacy Policy</div>
                    <div class="div">Terms</div>
                    <div class="div">Login</div>
                  </div>
                </div>  
                <div class="footer3">Copyright © <h4>Achivers Acadamy</h4> 2023-2024</div>
                <script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/014b853a-877b-47b4-b5fe-875c4dacb00e/webchat/config.js" defer></script>
                <script>
                                var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
</footer>
              
              
        
      





















  </div>

</body>
</html>
