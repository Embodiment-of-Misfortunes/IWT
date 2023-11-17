<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">


    <style>

        .popup {
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            display: none;
        }
        .popup-content {
            background-color: white;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888888;
            width: 50%;
            font-weight: bolder;
        }
        .popup-content button {
            display: block;
            margin: 0 auto;
        }
        .show {
            display: block;
        }
        h1 {
            color: green;
        }
    </style>

    <title>Home | Contact Managemnet</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

</head>
<body>
    <nav class="nav nav_top">
        <div class="logo">
        <style>
  .transparent-image {
    opacity: 0.7; /* 30% opacity (70% transparency) */
  }
</style>

<a href="home.php"><img src="logom.jpeg" height="60" width="45" class="transparent-image"></a>        </div>
        <div class="nav_side">
           <a href="home.php">Home</a>
            <a href="contact.php">ADD</a>
            <a class="nav-link" href="delete.php">DELETE</a>
            <a class="nav-link" href="edit.php">EDIT</a>
            <a class="nav-link" href="View.php">VIEW ALL</a>
            
           
            
        </div>
        
    </nav>

    
    <div class="slide">
        <div class="slide_container">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="item_img">
                        <img src="con1.png" alt="picture">
                            
                        </div>
                     </div>

                  <div class="item">
                    <div class="item_img">
                            <img src="con2.png" alt="picture">
                        </div>
                     </div>
                  <div class="item">
                    <div class="item_img">
                    <img src="con3.png" alt="picture">
                        </div>
                     </div>
                     <div class="item">
                    <div class="item_img">
                    <img src="con4.webp" alt="picture">
                        </div>
                     </div>
                     <div class="item">
                    <div class="item_img">
                    <img src="con5.webp" alt="picture">
                        </div>
                     </div>
                    

                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
        <div class="slide_con">
            <div class="slide_content">
                <!-- <h2>IT COMPANY -->
                    <br>
                    <!-- <span>PU</span> -->
                </h2>
            </div>
         </div>
    </div>
    <div class="right">
    <h3 style="color:green;margin-left:70px;">Contact Management</h3>
        <p style="color:Blablackck;margin-left:70px;">Contact Management is a global technology consulting and digital solutions company that enables enterprises across industries to reimagine business models, accelerate innovation, and maximize growth by harnessing digital technologies. As a digital transformation partner to more than 700 clients, MIT brings extensive domain and technology expertise to help drive superior competitive differentiation, customer experiences, and business outcomes in a converging world. Powered by 83,000+ talented and entrepreneurial professionals across more than 30 countries, MIT It — a Larsen & Toubro Group company — combines the industry-acclaimed strengths of erstwhile Larsen and Toubro Infotech and Mindtree in solving the most complex business challenges and delivering transformation at scale. For more information,<br> please visit-:<a href="https://www.mitcomapany.com">https://www.mitcomapany.com</a></p>
        

    </div>

    <h2 style="color:black;margin-left:70px;">Conatact Details</h2>
    <button id="myButton1"style="color:green;margin-left:70px;">
    <!-- Director of MIT -->
      </button>
    <div id="myPopup1" class="popup">
        <div class="popup-content">
            <h1 style="color:green;">
            <!-- Master of Computer Applications -->
              </h1>
            <!-- <p>The exorbitant growth and pervasive permeation of IT automation systems in the various domains viz. Business, E-Governance, Finance, Healthcare, Transportation, Education, etc. demands competent human resource who can be a value addition to the workforce of software engineers who develop these systems. In order to be able to develop modern day automation systems, these software engineers require competency in the fundamental computer science courses viz. data structures, algorithms, operating systems, DBMS, Web Technology, etc and competency in contemporary IT courses viz. Machine Learning, IoT, Cloud Computing, etc. Thus, the MCA programme is handcrafted to attribute such unique skill set to the course graduates to foster them as successful software engineers.</p> -->
            <button id="closePopup1">
                  Close
              </button>
        </div>
    </div>
 
    <script>
        myButton1.addEventListener("click", function () {
            myPopup1.classList.add("show");
        });
        closePopup1.addEventListener("click", function () {
            myPopup1.classList.remove("show");
        });
        window.addEventListener("click", function (event) {
            if (event.target == myPopup1) {
                myPopup1.classList.remove("show");
            }
        });
    </script>
       <br><br>



    



   
   
    <hr>
   
    
    <br><br>
    <h2 style="margin-left:70px;color:blue;">Infrastructure</h2><br>
    <p style="margin-left:70px;">The Department is located in the Science & Humanities Block II on the western side of the main campus very near to the Canteen. The department has the largest student intake among all the the departments of the University. There are four post graduate  and Ph.d. programmes. The department has four well-equipped computer laboratories namely-  General Computing Lab, Multimedia Lab, Grid Computing Lab and Research Lab, housing about 120 state-of-art computer systems with latest configurations, all connected to various servers running Operating Systems like MS Windows 2003, Red Hat Linux, Sun Solaris and Mac OS. Grid Computing and Cluster Computing have also been facilitated in the servers. All the faculty,class rooms and laboratories are connected to the campus-wide Intranet.  Access to Internet facility (64 Mbps link) is  also available. An enhanced multimedia lab of the department is equipped with state- of-art Apple machines with necessary software tools.</p>



    
    <div class="feed">
        <h2 style="color:black;">WRITE A ENQUERY</h2>
        <div class="feed_form" method="post">
        <form name="submit-googlesheet">
            <input type="text" name="Name" placeholder="Name"><br>
            <input type="email" name="Email" placeholder="Email ID"><br>
            <input type="text" name="Number" placeholder="Contact Number"><br>
            <textarea rows="5" cols="7" name="Review" placeholder="Write a Enquery"></textarea><br>
            <button type="submit">Submit</button>
        </form>
        </div>
    </div>
    <footer>
        <div class="footer_logo">
            <a href="homeE.php"><img src="logm.jpg" width="20"></a>
            <label for="" style="color:pink;">Contact Management</label>
        </div>
        <div class="pages">  
            <h3>Contact Management</h3>
            <a href="home.php">Home</a>|
            <a href="#">About us</a>|
            <a href="#">Jobs</a>
            <a href="#">Career</a>
            <a href="#">Research</a>
            <a href="#">Company Life</a>
            <a href="#">Discover</a>
            <a href="login.php">Logout</a>
        </div>
        <div class="social">
            <h3>Follow Us</h3>
            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
        <div class="contact">
            <h3>Contact Us</h3>
            <a href="https://api.WhatsApp.com/send?phone=+911231241241" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
            <a href="tel: +911231241241"><i class="fa fa-phone" aria-hidden="true"></i></a>
            <a href="mailto: jitianhou13@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
        </div>
        <hr>
        <p>Copyright &copy; 2023 LE. All rights reserved.</p>
    </footer>

 <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<script type="text/javascript">
    const scriptURL = 'https://script.google.com/macros/s/AKfycbzmY7HJmUEupsd8UBLj-aTxEsPcKQEWFYaxFA44IcIYrYCjanY1WcTF4zyKYXFQubtbTA/exec'
            const form = document.forms['submit-googlesheet']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => alert("Thanks you for your valuable feedback!"))
                .catch(error => console.error('Error!', error.message))
            })
          
           

</script>
</body>
</html>











