<?php 

if(!isset($_COOKIE["userid"]))// $_COOKIE is a variable and login is a cookie name 

	header("location:SignIn.php"); 

?>
<!DOCTYPE html>
<html>
<head>
    <title>Features</title>
    <link rel="stylesheet" href="Features(User).css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"> 
</head>
<script src="https://kit.fontawesome.com/cff205d073.js" crossorigin="anonymous"></script>

    <body> 
        
       <div class="MenuBar">
        
            <nav>
                
                <ul class="MenuTabs">
                   <li style="margin-top:25px;"><a style="font-size: 24px;" class="logo" href="Main.php">ARTC</a></li>
                    <li><a href="Landing_Page.php">Home</a></li>
                    <li class="Dropdown"><a href="Women_Menu(User).php">Women</a>
                      
                    <ul class="MenuUnderTabs">
                        
                        <div class="MenuContent">
                        <li><a href="Women_Shirt(User).php">Shirts</a></li>
                        <li><a href="Women_Pants(User).php">Pants</a></li>
                        <li><a href="Women_Dress(User).php">Dresses</a></li>
                        <li><a href="Women_Accessories(User).php">Accessories</a></li>
                        
                        </div>
                        
                        
                    </ul>
                    
                    </li>
                    <li class="Dropdown"><a href="Men_Menu(User).php">Men</a>
                      
                    <ul class="MenuUnderTabs">
                        
                        <div class="MenuContent">
                        <li><a href="Men_Shirt(User).php">Shirts</a></li>
                        <li><a href="Men_Pants(User).php">Pants</a></li>
                        <li><a href="Men_Accessories(User).php">Accessories</a></li>
                        </div>
                        
                    </ul>
                    
                    </li>
                    <li class="Dropdown"><a href="Girls_Menu(User).php">Girls</a>
                      
                    <ul class="MenuUnderTabs">
                        
                        <div class="MenuContent">
                        <li><a href="Girls_Shirt(User).php">Shirts</a></li>
                        <li><a href="Girls_Pants(User).php">Pants</a></li>
                        <li><a href="Girls_Dress(User).php">Dresses</a></li>
                        <li><a href="Girls_Accessories(User).php">Accessories</a></li>
                        </div>
                    </ul>
                    
                    </li>
                    <li class="Dropdown"><a href="Boys_Menu(User).php">Boys</a>
                      
                    <ul class="MenuUnderTabs">
                        
                        <div class="MenuContent">
                       <li><a href="Boys_Shirt(User).php">Shirts</a></li>
                        <li><a href="Boys_Pants(User).php">Pants</a></li>
                        <li><a href="Boys_Accessories(User).php">Accessories</a></li>
                        </div>
                    </ul>
                    
                    </li>
        
                    <li><a href="Blog(User).php">Blog</a></li>
                    <li><a href="Features(User).php">Features</a></li>
                    <li><a href="Contact(User).php">Contact</a></li>
                    <li><a href="Rating(User).php">Rating</a></li>
                    <li style="padding-left: 40px;"><a href="UserOrderList.php"><i class="far fa-clipboard fa-lg"></i></a></li>
                    <li><a href="cart.php"><i class="fas fa-shopping-cart fa-lg"></i></a></li>
                    <li><a href="EditProfile.php"><i class="far fa-user fa-lg"></i></a></li>
                    <li class="Sign"><a class="InUp" href="logoutFeatures.php">Sign Out</a></li>
                    
                </ul>
                
            </nav>
        
            
        </div>
        
        
        <div class="Container">
        
            <div class="Container-text">
                
                <p>Summer Collection</p>
                <h1>Featured Categories</h1>
                <p>Newest Trends from ARTC</p>
            
            </div>
        </div>
        
                
         <div  class="Container-images">
                
            <div>
                <div>
                    <img src="Images/Boys/Boy2.jpg" width="100%" height="100%">
                    <button class="imagebtn" style="font-size: 18px;"> Shop Now</button>
                </div>
                <div>
                    <img src="Images/Girls/Girl12.jpg" width="100%" height="100%">
                    <button class="imagebtn" style="font-size: 18px; right: 57%;"> Shop Now</button>
                </div>
                <div>
                    <img src="Images/Men/Man10.jpg" width="100%" height="100%">
                    <button class="imagebtn" style="font-size: 18px; right: 32%;"> Shop Now</button>
                </div>
                <div>
                    <img src="Images/Women/Woman14.jpg" width="100%" height="100%">
                    <button class="imagebtn" style="font-size: 18px; right: 7%;"> Shop Now</button>
                </div>
            </div>
        </div>
        
             <div  class="Container-images">
            
                    <img src="Images/Women/Woman15.jpg" width="100%" height="500px">
              
        </div>
    
           <div class="Container" style="margin-top= 50px;">
        
            <div class="Container-text">
                
                <p>Summer Collection</p>
                <h1>Featured Products</h1>
                <p>Newest Trends from ARTC</p>
            
            </div>
        </div>
        
        
            <div  class="Container-images">
            <div>
                <div>
                    <img src="Images/Girls/Girl11.jpg" width="100%" height="100%">
                    <button class="imagebtn" style="font-size: 18px; right: 57%;"> Shop Now</button>       
                </div>
                <div>
                    <img src="Images/Men/Man2.jpg" width="100%" height="100%">
                    <button class="imagebtn" style="font-size: 18px; right: 32%;"> Shop Now</button>
                    
                </div>
                 <div>
                    <img src="Images/Girls/Girl2.jpg" width="100%" height="100%">
                    <button class="imagebtn" style="font-size: 18px;"> Shop Now</button>
                </div>
                <div>
                    <img src="Images/Women/Woman12.jpg" width="100%" height="100%">
                    <button class="imagebtn" style="font-size: 18px; right: 7%;"> Shop Now</button>
                </div>
            </div>
        </div>
        
        
   <div class="bottom-nav">
            
            <div class="bottom-content">
                
                <div class="bottom-section-Blog" style="margin-right: 80px; margin-left: 20px;">
                    <h1 class="header">BLOG</h1>
                    <ul class="bottom-list">
                        <li><a href="#">"Location"</a></li>
                        <li><a href="#">"Phone"</a></li>
                        <li><a href="#">"Email"</a></li>
                    </ul>
                </div>     
                
                <div class="bottom-section-Myacc" style="margin-right: 80px;">
                     <h1 class="header">MY ACCOUNT </h1>
                    <ul class="bottom-list">
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">My Cart</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">Track Order</a></li>
                        <li><a href="#">User Info</a></li>
                    </ul>
                </div>     
                
                <div class="bottom-section-Info" style="margin-right: 80px;">
                 <h1 class="header">INFORMATION</h1>
                    <ul class="bottom-list">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">New Products</a></li>
                    </ul>
                </div>     
                
                <div class="bottom-section-Sup" style="margin-right: 90px;">
                                
                    <h1 class="header">SUPPORT</h1>
                    <ul class="bottom-list">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>     
                
                <div class="bottom-section-News" style="margin-right: 70px;">
                 <h1 class="header" style="text-align: left;">NEWSLETTER</h1>
          
                 <p>SUBSCRIBE TO OUR NEWSLETTER</p>
                    <div class="input-icon">
                        <i class="fas fa-envelope fa-2x"></i>
                        <input type="text">
                    </div>
                
                <span><i class="fas fa-phone"></i> &nbsp; +60 18-293 6294</span>
                <span><i class="fas fa-envelope"></i> &nbsp; info@artc.com</span>
                <div class="socials">
                    
                    <a href="#"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#"><i class="fab fa-youtube fa-lg"></i></a>
                </div>
                </div>     
            </div>
        
        </div>
       
        
    </body>


</html>