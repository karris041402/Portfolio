<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        text-decoration: none;
    }
    body{
        background: #ebfff9;
        font-family: 'Poppins', sans-serif;
    }

    #hero{
        height: 100vh;
        overflow-x: hidden;
    }

    .active{
        color: #00825a;
    }

    .menu-toggle {
        display: none;
        font-size: 24px;
        color: black;
        cursor: pointer;
    }

    header {
        display: flex;
        align-items: center;
        gap: 40px;
        background: white;
        padding: 20px 80px;
        animation: topIn 0.5s ease-in-out forwards;
        opacity: 0;
        animation-delay: 0.2s;
        box-shadow: 0 0 14px rgba(0, 0, 0, 0.2);

    }

    header nav {
        display: flex;
        flex: 1;
        align-items: center;
        gap: 40px;
        padding: 0;
        margin: 0;
    }

    header nav a {
        color: Black;
        opacity: 0.7;
        font-size: 15px;
    }

    header button{
        background-color: #28c796;
        border: none;
        outline: none;
        padding: 12px 22px;
        border-radius: 10px;
    }

    header button a {
        color: whitesmoke;
        font-size: 17px;
    }

    .container{
        display: grid;
        grid-template-columns: 1.2fr 1fr;
        position: relative;
        margin-top: 30px;
    }

    .portfolio-img{
        width: 87%;
        margin-top: 8px;
        margin-left: 5px;
        animation: imgIn 0.5s ease-in-out forwards;
        opacity: 0;
        animation-delay: 0.3s;
        filter: drop-shadow(0 -10px 15px rgba(0,0,0,0.2));
    }

    .left{
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 10px;
        height: auto;
        padding-left: 80px;
    }

    .container h3{
        font-size: 2.5rem;
        color: rgba(43, 58, 85, 0.9);
        animation: bottomIn 0.5s ease-in-out forwards;
        opacity: 0;
        animation-delay: 0.2s;
    }

    h3 span{
        color: #00825A;
    }

    .container h1{
        font-size: 3.3rem;
        color: rgba(43, 58, 85, 0.9);
        font-weight: 800;
        font-family: 'Arial Black', Gadget, sans-serif;
        animation: bottomIn 0.5s ease-in-out forwards;
        opacity: 0;
        animation-delay: 0.3s;
    }

    h1 span{
        color: #00825A;
    }

    .container p {
        font-size: 18px;
        line-height: 1.8;
        color: gray;
        margin-top: 10px;
        animation: bottomIn 0.5s ease-in-out forwards;
        opacity: 0;
        animation-delay: 0.4s;
    }

    .main-primary-button{
        display: flex;
        gap: 20px;
        margin-top: 20px;
        animation: bottomIn 0.5s ease-in-out forwards;
        opacity: 0;
        animation-delay: 0.5s;
    }

    .main-primary-button button{
        padding: 13px 23px;
        border: none;
        outline: none;
        border-radius: 12px;
        font-size: 22px;
        background-color: #28C796;
        color: whitesmoke;
        margin-bottom: 25px;
    }
    .main-primary-button .btn2{
        background-color: transparent;
        border: 1px solid #28C796 ;
        color: #28C796;
    }

    .social-icons{
        display: flex;
        gap: 20px;
        align-items: center;
    }

    .social-icons i{
        font-size: 18px;
        font-weight: 600;
        border: 2px solid rgba(43, 58, 85, 0.9);
        display: flex;
        align-items: center;
        justify-content: center;
        height: 20px;
        width: 20px;
        padding: 20px;
        border-radius: 25px;
        color: rgba(43, 58, 85, 0.9);
        animation: bottomIn 0.5s ease-in-out forwards;
        opacity: 0;
        animation-delay: 0.6s;
    }

    @keyframes bottomIn{
        from{
            transform: translateY(250px);
        }
        to{
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes topIn{
        from{
            transform: translateY(-100px);
        }
        to{
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes imgIn{
        from{
            transform: translateY(250px) scale(0.8);
        }
        to{
            transform: translateY(0) scale(1);
            opacity: 1;
        }
    }

    @media screen and (max-width: 550px) {
        header {
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            padding: 20px 20px;
            gap: 15px;
            position: sticky;
            top: 0;
            z-index: 99;
            box-shadow: 0 0 14px rgba(0, 0, 0, 0.2);
        }

        .menu-toggle {
            display: block;
        }

        header nav {
            flex-direction: column;
            align-items: center;
            gap: 10px;
            display: none;
            background-color: white;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            padding: 10px 0;
            z-index: 999;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
        }

        header nav.active {
            display: flex;
        }

        header button {
            display: none;
        }

        header img {
            width: 120px;
        }

        #hero{
            overflow-x: hidden;
        }

        .portfolio-img{
            width: 50%;
            border: 1px solid #28c796;
            border-radius: 100%;
            display: block;        
            margin: 0 auto;
        }

        .container{
            display: flex;
            flex-direction: column-reverse;
        }

        .container.push-down {
            margin-top: 150px; 
        }

        .left{
            margin-top: 20px;
            margin-left: -60px;
        }

        .container h3{
            font-size: 20px;
        }

        h3 span{
            color: #00825A;
        }

        .container h1{
            margin-left: -3px;
            font-size: 2.6rem;
            line-height: 50px;
        }

        h1 span{
            font-size: 2.6rem;
            letter-spacing: 7px;
        }

        .container p {
            font-size: 15px;
            margin-right: 14px;
            text-align: justify;
        }


        .main-primary-button button{
            padding: 10px 17px;
            font-size: 17px;
        }

        .social-icons{
            display: flex;
            gap: 15px;
        }

        .social-icons i{
            font-size: 15px;
            font-weight: 400;
            border: 2px solid rgba(43, 58, 85, 0.9);
            height: 10px;
            width: 10px;
            padding: 15px;
            border-radius: 100%;
            margin-bottom: 10px;
        }

    }

    @media screen and (max-width:320px) {
        .container h3{
            font-size: 20px;
        }

        h3 span{
            color: #00825A;
        }

        .container h1{
            margin-left: -3px;
            font-size: 2.1rem;
            line-height: 50px;
        }

        h1 span{
            font-size: 2.1rem;
            letter-spacing: 7px;
        }
    }

    footer{
        width: 100%;
        height: 100px;
        background-color: black;
        margin-top: -6px;
    }
</style>

<body>

    <section id="hero">
        <header>
            <img src="portfolio-logo.png" alt="Karris" width="150px" height="auto">
            <div class="menu-toggle" onclick="toggleMenu()">☰</div>
             <nav>
                <a href="" class="active">Home</a>
                <a href="">Blogs</a>
                <a href="">Contact</a>
                <a href="">Download Resume</a>
            </nav>
             <button><a href="#">Skills & Projects</a></button>
             
        </header>

        <div class="container">
            <div class="left">
                <h3>Hi, I’m <span>Harris</span>  Angkua!</h3>
                <h1>FULL STACK<span> DEVELOPER</span></h1>
                <p>I’m a 2nd year Computer Science student currently developing my skills to become a full-stack developer. I’m passionate about learning both front-end and back-end technologies to build real-world applications that solve real problems. My goal is to apply everything I learn into practical, impactful projects that showcase growth, creativity, and functionality.</p>
                <div class="main-primary-button">
                    <button class="btn1">Explore My Work</button>
                    <button class="btn2">Who I Am</button>
                </div>

                <div class="social-icons">
                    <i class="fab fa-facebook-f social-icon"></i>
                    <i class="fab fa-twitter social-icon"></i>
                    <i class="fab fa-instagram social-icon"></i>
                    <i class="fab fa-youtube social-icon"></i>
                </div>
            </div>

            <div class="right">
                <div class="img-wrap">
                    <img src="main_image.png" alt="" class="portfolio-img">
                </div>
            </div>
        </div>

        <footer>

        </footer>
    </section>
</body>

    <script>
        function toggleMenu() {
            const nav = document.querySelector('header nav');
            const container = document.querySelector('.container');

            nav.classList.toggle('active');
            container.classList.toggle('push-down');
        }
    </script>


</html>