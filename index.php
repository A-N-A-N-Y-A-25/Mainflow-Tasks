<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing_Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
*{
    margin: 0;
    padding:0;
   box-sizing:border-box;
}

html,body{
    line-height:1.4;
    font-weight:300;
    font-family: "Roboto", sans-serif;
    
}
nav{
    height: 70px;
    background: #063247;
    box-shadow:0 3px 15px rgba(0,0,0,.4);
}
nav ul{
    float:right;
    margin-right:30px;
}
nav ul ul{
    position: absolute;
    top:85px;
    border-top: 3px solid#23dbdb;
    opacity: 0;
    visibility: hidden;
}
nav ul li{
    display:inline-block;
}
nav ul li a:hover,
nav ul li a.active{
    color:#23dbdb;
}
nav ul li:hover>ul{
    top:70px;
    opacity:1;
    visibility:visible;
    transition: .3s linear;
}
nav ul li a{
    color:white;
    display:block;
    padding: 0 15px;
    line-height: 70px;
    font-size: 20px;
    background: #063247;
    transition: .5s;
}
nav ul ul li {
    width:180px;
    display: list-item;
    position: relative;
    border: 1px solid#042331;
    border-top: none;

}
nav ul ul ul{
    border-top: none;
}
nav ul ul ul li{
    position: relative;
    top:-70px;
    left:150px;
}
nav ul ul li a{
    line-height:50px;
    /* font-size: 20px;; */
}
.hero_section{
    background-image: url(images/developer.png);
    min-height:100vh;
    background-position: center;
    background-size: cover;
    
}
.text_container{
    color: white;
    max-width: 900px;
    margin: 0 auto;
    padding-top:64px;
    padding-left: 60px;
}
.lg_text{
    font-size:72px;
    font-weight: 400;
}
.black_box{
    background-color: #000;
    padding:20px;

}
.black_box h2{
font-weight:300;
font-size:72px;
color:white;
text-align: center;

}
.black_box h2 span{
    font-weight:400;
    font-size:96px;
}
.work{
    display:grid;
    gap:20px;
    margin:20px 0px;
   max-width: 1100px;
   margin: 50px auto;;
    grid-template-columns: repeat(auto-fit,minmax(320px,1fr));
}
.card{
    max-width:320px;
    height:400px;
    border-radius:10px;
    box-shadow: 3px 5px 5px rgba(1, 1,1,0.2);
    transition: 0.2s ease-in-out;
}
.card:hover{
    transform: scale(1.04);
    box-shadow: 3px 5px 5px rgba(1, 1,1,0.3);
    transition: 0.2s ease-in-out;

}
.grid_item{
    display:flex;
    justify-content: center;
    align-items: center;
}
.card_contentainer{
    padding:20px;

}
.card_container h3{
    margin: 10px;
}
 .bottom_section{
    display: flex;
    text-wrap: wrap;
   padding:20px;
   width:100%;
   gap: 500px;;
   
} 
 .contact{
    background-color: rgb(14, 125, 129);
}
.about{
    background-color: rgb(119, 88, 10);
}
.contact, .about{
    min-height: 300px;
    padding: 32px;
    color: #fff;
    
    }
.contact p,.about p{
    margin-bottom: 20px;
    line-height: 1.6;
}
.contact h2,.about h2{
    font-size: 64px;
    font-weight:300;
}
footer{
    text-align: center;
    background-color: #000;
    color:#fff;
    text-transform: uppercase;
    padding:20px;
}  
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a class="active" href="index.html">Home</a></li>
            <li><a href="#">Work</a>
            <ul>
                <li>
                    <a href="webd.html">App Development</a>
                    <ul>
                        <li><a href="mwebd.html">more</a></li>
                    </ul>
                </li>
                <li>
                    <a href="webd.html">Web Development</a>
                    <ul>
                        <li><a href="mwebd.html">more</a></li>
                    </ul>
                </li>
                <li>
                    <a href="webd.html">UI UX Designer</a>
                    <ul>
                        <li><a href="mwebd.html">more</a></li>
                    </ul>
                </li>
            </ul>
            </li>
            <li><a class="active" href="contact.html">Contact</a></li>
            <li><a href="about.html">About</a></li>
        </ul>
    </nav>
   
    <section class="hero_section">
        <div class="text_container">
    <h1><span class="lg_text">Hi,</span>I am Ananya Gupta</h1>
    <H1 class="lg_text">FULL STACK DEVELOPER</H1>
    </div>
    </section>
    <section class="black_box">
 <h2>WORK, I CAN DO FOR <span>YOU</span></h2>
    </section>

    <section class="work">
        <div class="grid_item">
            <div class="card">
            
                <div class="image_container">
                    <img src="./images/mobile.png"alt="App Development"/>
                </div>
                <div class="card_container">
                    <h3>App Development</h3>
               
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto minus nam culpa atque, corrupti nemo?</p>
              </div>
            </div>
        </div>
        <div class="grid_item">
            <div class="card">
                <div class="image_container">
                    <img src="./images/web.png"alt="Web Development"/>
                </div>
                <div class="card_container">
                    <h3>Web Development</h3>
                
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto minus nam culpa atque, corrupti nemo?</p>
               </div>
            </div>
            </div>
        </div>
        <div class="grid_item">
            
        <div class="card">
            <div class="image_container">
                <img src="./images/uiux.png"alt="UI UX Design"/>
            </div>
            <div class="card_container">
                <h3>UI UX Design</h3>
            
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto minus nam culpa atque, corrupti nemo?</p>
          </div>
        </div>
        </div>
        </div>
<section class="bottom_section">
    <div class="contact">
        <h2>Contact Me</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus quod molestias ut dolores nihil voluptates.</p>
        <p>abc@landing.page</p>
    </div>
    <div class="about">
        <h2>About Me</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis voluptas placeat nisi sit totam inventore!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab dolore totam fuga! Reiciendis, saepe blanditiis.</p>
    </div>
</section>      
    </section>
    <div class="container">
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
    <footer>
        Task 2 by Ananya Gupta
    </footer>
</body>
</html>