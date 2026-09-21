<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Foxureulfa - Request accepted!</title>
    <meta property="og:title" content="Foxureulfa - Request accepted!" />
    <meta property="og:image" content="logo2.png" />
    
    <link rel="stylesheet" href="files/css/bootstrap.css" />
    <link rel="stylesheet" href="files/css/bootstrap-icons.css" />
    <link rel="stylesheet" href="files/css/btn.css" />
    
    

    <link rel="shortcut icon" href="logo2.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Viaoda+Libre&display=swap" rel="stylesheet" />


    <style>

           body{
             direction: ltr;
             font-family: 'Abel', sans-serif !important;
             font-size: 15px;
             margin: 0;
             padding: 0;
           }

           h1, h2, h3, h4, h5{
             margin: 0;
             padding: 0;
           }

           button{
             cursor: pointer;
           }

           button span{
             font-size:  inherit;
             line-height: 1.3;
           }
           .button-1 {
              align-items: center;
              background-color: #FFFFFF;
              border: 1px solid rgba(0, 0, 0, 0.1);
              border-radius: .25rem;
              box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
              box-sizing: border-box;
              color: rgba(0, 0, 0, 0.85);
              cursor: pointer;
              display: inline-flex;
              font-family: system-ui,-apple-system,system-ui,"Helvetica Neue",Helvetica,Arial,sans-serif;
              font-size: 16px;
              font-weight: 600;
              justify-content: center;
              line-height: 1.3;
              margin: 0;
              min-height: 3rem;
              padding: calc(.875rem - 1px) calc(1.5rem - 1px);
              position: relative;
              text-decoration: none;
              transition: all 250ms;
              user-select: none;
              -webkit-user-select: none;
              touch-action: manipulation;
              vertical-align: baseline;
              width: auto;
          }

          .button-1:hover,
          .button-1:focus {
              border-color: rgba(0, 0, 0, 0.15);
              box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
              color: rgba(0, 0, 0, 0.65);
          }

          .button-1:hover {
              transform: translateY(-1px);
          }

          .button-1:active {
              background-color: #F0F0F1;
              border-color: rgba(0, 0, 0, 0.15);
              box-shadow: rgba(0, 0, 0, 0.06) 0 2px 4px;
              color: rgba(0, 0, 0, 0.65);
              transform: translateY(0);
          }

          .button-2 {
              background: #FF4742;
              border: 1px solid #FF4742;
              border-radius: 6px;
              box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
              box-sizing: border-box;
              color: #FFFFFF;
              cursor: pointer;
              display: inline-block;
              font-family: nunito,roboto,proxima-nova,"proximasans-serif;
              font-size: 16px;
              font-weight: 800;
              line-height: 1.3;
              min-height: 40px;
              outline: 0;
              padding: 12px 14px;
              text-align: center;
              text-rendering: geometricprecision;
              text-transform: none;
              user-select: none;
              -webkit-user-select: none;
              touch-action: manipulation;
              vertical-align: middle;
          }

          .button-2:hover,
          .button-2:active {
              background-color: initial;
              background-position: 0 0;
              color: #FF4742;
          }

          .button-2:active {
              opacity: .5;
          }

          .button-3 {
              background-color: #c2fbd7;
              border-radius: 100px;
              box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset,rgba(44, 187, 99, .15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
              color: green;
              cursor: pointer;
              display: inline-block;
              font-family: CerebriSans-Regular,-apple-ssystem-ui,Roboto,sans-serif;
              padding: 14px;
              text-align: center;
              text-decoration: none;
              transition: all 250ms;
              border: 0;
              font-size: 16px;
              user-select: none;
              -webkit-user-select: none;
              touch-action: manipulation;
          }

          .button-3:hover {
              box-shadow: rgba(44,187,99,.35) 0 -25px 18px -14px inset,rgba(44,187,99,.25) 0 1px 2px,rgba(44,187,99,.25) 0 2px 4px,rgba(44,187,99,.25) 0 4px 8px,rgba(44,187,99,.25) 0 8px 16px,rgba(44,187,99,.25) 0 16px 32px;
              transform: scale(1.05) rotate(-1deg);
          }

            .button-4 {
            align-items: center;
            background-image: linear-gradient(144deg,#AF40FF, #5B42F3 50%,#00DDEB);
            border: 0;
            border-radius: 8px;
            box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
            box-sizing: border-box;
            color: #FFFFFF;
            display: flex;
            font-family: Phantomsans, sans-serif;
            font-size: 20px;
            justify-content: center;
            line-height: 1.3;
            max-width: 100%;
            min-width: 140px;
            padding: 14px;
            text-decoration: none;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            cursor: pointer;
            }

            .button-4:active,
            .button-4:hover {
            outline: 0;
            }

            .button-4 span {
            background-color: rgb(5, 6, 45);
            padding: 16px 24px;
            border-radius: 6px;
            width: 100%;
            height: 100%;
            transition: 300ms;
            }

            .button-4:hover span {
            background: none;
            }

            @media (min-width: 768px) {
            .button-4 {
                font-size: 24px;
                min-width: 196px;
            }
            }

          .button-5 {
              align-self: center;
              background-color: #fff;
              background-image: none;
              background-position: 0 90%;
              background-repeat: repeat no-repeat;
              background-size: 4px 3px;
              border-radius: 15px 225px 255px 15px 15px 255px 225px 15px;
              border-style: solid;
              border-width: 2px;
              box-shadow: rgba(0, 0, 0, .2) 15px 28px 25px -18px;
              box-sizing: border-box;
              color: #41403e;
              cursor: pointer;
              display: inline-block;
              font-family: Neucha, sans-serif;
              font-size: 1rem;
              line-height: 23px;
              outline: none;
              padding: .75rem;
              text-decoration: none;
              transition: all 235ms ease-in-out;
              border-bottom-left-radius: 15px 255px;
              border-bottom-right-radius: 225px 15px;
              border-top-left-radius: 255px 15px;
              border-top-right-radius: 15px 225px;
              user-select: none;
              -webkit-user-select: none;
              touch-action: manipulation;
          }


          .button-5:hover {
              box-shadow: rgba(0, 0, 0, .3) 2px 8px 8px -5px;
              transform: translate3d(0, 2px, 0);
          }

          .button-5:focus {
              box-shadow: rgba(0, 0, 0, .3) 2px 8px 4px -6px;
          }
           p{
             font-size:  inherit;
             margin-bottom: 18px;
           }

           a{
             text-decoration: none;
             font-size:  inherit;
           }

           img{
             display: block;
             max-width: 100%;
           }

           li{
             list-style: none;
           }

           ul{
             padding: 0;
             margin: 0;
           }

           .priv-bloks {
              word-break: break-all;
            }
            .priv-bloks p {
              padding: 14px 0;
            }
            .priv-bloks li {
              list-style: circle;
              margin: 0 14px;
              padding: 14px 0;
            }
           
           
         
           .section{
             padding-top: 79px;
             padding-bottom:  79px;
           }

           .title{
             text-align: center;
             font-size:  25px;
             font-weight: 600;
             line-height: 1.3;
             margin-bottom: 19px;
           }

           .subtitle{
             font-size: 22px;
             font-weight: 600;
             line-height: 1.3;
             margin-bottom:  14px;
             text-align: start;
           }

           .text{
             font-size:  17px;
             font-weight: 600;
             text-align: center;
             line-height: 1.3;
             margin-bottom: 18px;
           }


           .navbar{
             filter: contrast(0.8) opacity(0.97) saturate(0.4);;
             background-color: #3B0944;
           }

           .navbar-toggler {
               margin-left: auto;
               border: none;

           }

           .navbar-toggler:focus,
           .navbar-toggler:hover,
           .navbar-toggler:active{
              box-shadow: none;
           }

           .navbar-toggler svg{
            transition: fill 300ms cubic-bezier(0.075, 0.82, 0.165, 1);
           }

           .navbar-toggler svg:focus,
           .navbar-toggler svg:hover,
           .navbar-toggler svg:active{
             outline: none;
             fill:  #c3c723;
           }

           .nav-bg{
            filter: contrast(0.8) opacity(0.97) saturate(0.4) !important;
           }

           .nav-link {
             color: #fefdf8;
             text-transform: capitalize;
             padding-left: 14px;
             padding-right: 14px;
             transition: color 300ms cubic-bezier(0.075, 0.82, 0.165, 1);
           }

           .nav-link:hover,
           .nav-link:focus{
             color: #c3c723;
           }

           .logo{
             display: flex;
             gap: 14px;
             align-items: center;
             justify-content: center;
             margin-bottom: 30px;
             margin-top: 30px;
           }

           .logo img{
              max-width:  40px;
           }

           .logo h2{
             margin: 0;
             font-size:  25px;
             color: #fefdf8;
           }
           .pad-main {
            padding: 84px 0px;
           }
           .hero{
             margin-top: -100px;
             background-color: #3B0944;
             position: relative;
             padding-top: Calc(150px + 79px);
             padding-bottom: 79px;
             color: #fefdf8;
             filter: saturate(0.4);
           }

           .hero-box{
             display: flex;
             flex-direction: column;
             gap: 30px;
           }

           .hero-title-box{
             text-align: start;
           }

           .hero-title{
               font-size:  25px;
               font-weight: 600;
               line-height: 1.3;
               margin-bottom: 18px;
               text-align: center;
           }

           .hero-box-img{
             display: inline-block;
             overflow: hidden;
           }

           .hero-box-img img {
             transition: 1s;
             display: block;
           }
           .hero-box-img img:hover {
             transform: scale(1.2);
           }

           .btn-box{
             display: inline-block;
           }

           .services{
             background-color: #fefdf8;
           }

           .services-box{
             display: flex;
             gap: 24px;
             flex-direction: column;
           }

           .services-box-title p{
             margin-bottom: 47px;
           }

           .services-box-title h2{
             color:  #c3c723;
           }

           .services-list{
             display: flex;
             flex-direction: column;
             gap: 18px;
           }
           .services-item:first-child{
             border-bottom: 1px dashed grey;
             border-top: 1px dashed grey;
           }
           .services-item:last-child{
             border-bottom: 1px dashed grey;
             border-top: 1px dashed grey;
           }

           .services-item{
             padding-top: 6px;
             padding-bottom: 6px;
           }

           .services-item p{
             text-align: start;
             padding: 0;
           }

          .main-wrapper{
             display: flex;
             justify-content: center;
             align-items: center;

             width: 100%;
             background: radial-gradient(#c3c723 5%, transparent 20%) 0 0, radial-gradient(rgba(0,0,0,.1) 1%, transparent 1%) 50px 50px;
             background-size: 15px 15px;
           }
           .main-img {
            height: 529px;
            object-fit: contain;
            width: 100%;
           }
           .main-description p{
             font-size:  17px;
             line-height: 1.3;
             margin-bottom: 18px:
           }

           .price{
             font-size:  25px;
             color: #c3c723;
           }

            .solution{
              background-color: #3B0944;
              color: #fefdf8;
              filter: saturate(0.7);
            }

            .solution-list{
              display: flex;
              flex-direction: column;
              gap: 30px;
            }

            .solution-item h3{
              margin: 18px;
            }

            .wr-glr{
              position: relative;
              padding: 14px;
            }

            .solution-img-box{
              position: relative;
              bottom: 10px;
              left: -10px;
              z-index: 999;
              display: inline-block;
              overflow: hidden;
            }

            .solution-img-box img{
              transition: 1s;
              display: block;
              border-radius: 3px;
              object-fit: cover;
            }

           .solution-img-box img:hover {
             transform: scale(1.2);
           }

            .bg-box{
              background-color: #c3c723;
              position: relative;
              bottom: 10px;
              left: 0;
              border-radius: 3px;
            }

            .fl-box{
              display: flex;
              flex-wrap: wrap;
              flex-direction: column;
            }

            .questions{
              background-color: #fff;
            }

            .questions-list{
              display: flex;
              flex-direction: column;
              gap: 18px;
            }

            .questions-items{
              box-shadow: 0 7px 30px -10px rgba(150,170,180,0.5);
              padding: 18px;
              display: flex;
              flex-direction: column;
              align-items: center;
              text-align: start;
            }

            .questions-items img{
              width: 80px;
              height: 80px;
              margin-bottom: 18px;
              margin-top: 18px;
            }



          .contact-form{
              margin: 0 auto;
              text-align: start;
              padding: 24px;
            }

            .contact-wrapper{
              display: flex;
              flex-direction: column;
              margin-bottom: 6px;
            }
            .input-field-box--item{
              margin-top: 10px;
              display: block;
              width: 100%;
              padding:  14px;
              font-size: 1rem;
              font-weight: 400;
              line-height:1.3;
              color: #212529;
              background-color: #fff;
              background-clip: padding-box;
              border: 1px solid #ced4da;
              -webkit-appearance: none;
              -moz-appearance: none;
              appearance: none;
              border-radius: 0.25rem;
              transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
          }
          .textarea-field-box--item{
            margin-top: 10px;
              width: 100%;
              border: 1px solid #ced4da;
              border-radius: 0.25rem;
              padding:  14px;
          }
            .contact-input{
              padding:  14px;
            }

            .contact-text{
              margin: 0;
              text-align: start;
            }

            .contact-btn{
              margin-top:  18px;
              margin-bottom: 18px;
            }

            .form-box-reviews{
              background: radial-gradient(#c3c723 5%, transparent 20%) 0 0, radial-gradient(rgba(0,0,0,.1) 1%, transparent 1%) 50px 50px;
              background-size: 15px 15px;
              padding: 30px 15px;
           }

           .review-img{
            margin-right: 30px;
           }

           .review-box{
            background-color: #fff;
            padding: 15px;
            position: relative;
            margin-left: 30px;
            margin-top: -30px;
            box-shadow: 0px 50px 100px -20px rgba(50, 50, 93, 0.15), 0px 30px 60px -30px rgba(0, 0, 0, 0.2), inset 0px -2px 6px 0px rgba(10, 37, 64, 0.25);
            text-align: start;
           }

           .raiting{
             display: flex;
             gap: 6px;
             margin-bottom: 15px;
            }

            .raiting div{
              color: #c3c723;
           }

           .gallery-list{
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            grid-gap: 14px;
           }

           .gallery-list li{
              display: flex;
              justify-content: center;
              align-items: center;
           }

           .gallery-item{
              display: inline-block;
              overflow: hidden;
            }

            .gallery-item img{
              transition: 1s;
              display: block;
              border-radius: 3px;
              object-fit: cover;
              filter: saturate(0.4);
            }

           .gallery-item img:hover {
             transform: scale(1.2);
           }


           .gallery-item-one{
            grid-column-start: 1;
            grid-column-end: 6;
           }

           .gallery-item-second{
              grid-column-start: 1;
              grid-column-end: 3;
           }

            .gallery-item-third{
              grid-column-start: 3;
              grid-column-end: 7;
           }

           .gallery-item-four {
              grid-column-start: 1;
              grid-column-end: 7;
           }

            .gallery-item-five {
              grid-column-start: 2;
              grid-column-end: 6;
           }

           .gallery-item-six {
              grid-column-start: 1;
              grid-column-end: 3;
           }

           .gallery-item-seven {
              grid-column-start: 3;
              grid-column-end: 7;
           }

           .gallery-item-eight {
              grid-column-start: 2;
              grid-column-end: 6;
           }

           .form-check .form-check-input {
              float: inherit;
           }

          .footer{
            padding-bottom: 0;
          }

           .footer-logo{
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            margin-bottom: 24px;
           }

           .footer-logo img{
            width: 50px;
            margin-right:  6px;
           }

           .footer-map{
            margin-bottom: 20px;
           }

           .footer-map iframe{
            height: 350px;
           }

            .footer-contacts{
                padding: 30px;
             }

              .footer-list{
                list-style: none;
                margin: 0;
                padding: 0;
                text-align: start;
              }

              .footer-item{
                margin-bottom: 30px;
              }

              .footer-item a{
                text-decoration: none;
                color: inherit;
              }

              .footer:last-child{
                margin-bottom: 0;
              } 0 0 0;
                word-break: break-word;
                line-height: 1.5;
                opacity: 0.85;
              }

              .footer-called{
                color: #c3c723;
                margin-bottom: 2px;
              }

              .footer-privacy-wrapper{
                padding-top: 20px;
                padding-bottom: 20px;
                box-shadow: 0px 50px 100px -20px rgba(50, 50, 93, 0.15), 0px 30px 60px -30px rgba(0, 0, 0, 0.2), inset 0px -2px 6px 0px rgba(10, 37, 64, 0.25);
                margin-top: 18px;
              }

              .footer-privacy{
                color: #828080;
                display: flex;
                justify-content: center;
                align-items: center;
                text-decoration: none;
                margin-bottom: 30px;

                transition: color 300ms cubic-bezier(0.075, 0.82, 0.165, 1);
              }

              .footer-privacy:hover,
              .footer-privacy:focus{
                color: #c3c723;
              }



        
          @media (max-width: 767px){
            .main-img {
              height: auto;
            }
            .bg-box{
              min-width: 270px;
            }

           .contact-form{
              margin-bottom: 6px;
            }
          }

           @media (min-width: 768px){
           .section{
             padding-top: 84px;
             padding-bottom: 84px;
           }

           .title{
             font-size: 25px;
             margin-bottom: 24px;
           }

           .subtitle{
             font-size: 25px;
             line-height: 1.33;
             margin-bottom: 22px;
           }

           .logo img{
              max-width: 88;
           }

           .logo h2{
             font-size: 47px;
           }

           .hero{
             padding-top: Calc(150px + 79px);
             padding-bottom: 79px;
           }

            .hero-box{
             display: flex;
             flex-direction: row-reverse;
             gap: 30px;
           }

           .hero-title-box{
             text-align: start;
             flex: 1;
             min-height: 250px;
           }

           .hero-box-wr{
             flex: 1.5;
             position: relative;
           }
           .hero-box-img{
             height: 400px;
             display: inline-block;
             overflow: hidden;
             position: absolute;
             top: 0;
             left: 0;
             right: 0;
           }
           .services-box{
             margin-top: 30px;
           }

           .services-box-title{
             flex: 1;
           }

           .services-box-list{
             flex: 1;
           }

           .services-box-title p{
             font-size: 20px;
           }

            .solution-list{
              flex-direction: row;
            }

            .solution-item{
              flex: 1;
            }

            .solution-item:nth-child(even){
              margin-top: 70px;
            }

            .solution-item h3{
              font-weight: 400;
              font-size: 20px;
            }

            .solution-img-box img{
                min-height: 160px;
            }

            .questions-list{
              flex-direction: column-reverse;
            }


            .questions-items{
              flex: 1;
              padding: 24px;
              min-height: 360px;
            }

              .contact-form{
                padding: 34px;
              }

              .contact-wrapper{
                margin-bottom: 6px;
              }

              .contact-text{
                text-align: end;
                margin-right: 15px;
              }

          .gallery-item{
            height: 230px;
          }

          .gallery-item img{
            height: 100%;
            width: 100%;
          }

          .gallery-item-one{
            grid-column-start: 1;
            grid-column-end: 4;
           }

           .gallery-item-second{
              grid-column-start: 4;
              grid-column-end: 7;
           }

            .gallery-item-third{
              grid-column-start: 1;
              grid-column-end: 7;
           }

           .gallery-item-four {
              grid-column-start: 1;
              grid-column-end: 4;
           }

            .gallery-item-five {
              grid-column-start: 4;
              grid-column-end: 7;
           }

           .gallery-item-six {
              grid-column-start: 1;
              grid-column-end: 7;
           }

           .gallery-item-seven {
              grid-column-start: 1;
              grid-column-end: 4;
           }

           .gallery-item-eight {
              grid-column-start: 4;
              grid-column-end: 7;
           }

           .footer{
            padding-bottom: 0;
           }

           .footer-privacy{
            margin-bottom: 0;
           }

           .footer-privacy-wrapper{
                display: flex;
                justify-content: space-around;
                gap:  18px;
              }

              .footer-box{
                display: flex;
                flex-direction: row-reverse;
              }

              .footer-logo{
                flex: 1;
              }

              .footer-map{
                flex: 1;
              }
           }

           @media(min-width: 992px){
            .navbar{
             filter: saturate(0.4);
           }
           .hero-box-img{
             bottom: -120px;
           }

           .content-box{
             display: flex;
             gap: 47px;
             flex-direction: column-reverse;
           }

           .content-box > div{
             flex: 1;
           }

            .solution-img-box img{
                min-height: 260px;
            }

           .form-box{
              display: flex;
              justify-content: center;
              gap: 6px;
              flex-direction: row-reverse;
            }

            .form-box-reviews{
              flex: 1;
              width: 50%;
              margin: 0 auto;
            }


            .contact-form{
              flex: 1;
            }

            .review-box{
              display: flex;
              flex-direction:  column;
            }
           }

           @media(max-width: 991px){
           .content-box{
             flex-direction: column !important;
           }
           }

           @media(min-width: 1024px){
            .solution-item h3{
              font-size: 18px;
            }
           .hero{
             padding-top: Calc(50px + 124px);
             padding-bottom: Calc(200px - 124px);
           }
           .title{
             font-size:  37px;
             line-height: 1.33;
             margin-bottom: 30px;
           }

           .logo{
             margin-bottom: 47px;
           }

            .solution-img-box img{
                min-height: 270px;
            }

            .gallery-item-one{
            grid-column-start: 1;
            grid-column-end: 3;
           }

           .gallery-item-second{
              grid-column-start: 3;
              grid-column-end: 5;
           }

            .gallery-item-third{
              grid-column-start: 5;
              grid-column-end: 7;
           }

           .gallery-item-four {
              grid-column-start: 1;
              grid-column-end: 4;
           }

            .gallery-item-five {
              grid-column-start: 4;
              grid-column-end: 7;
           }

           .gallery-item-six {
              grid-column-start: 1;
              grid-column-end: 3;
           }

           .gallery-item-seven {
              grid-column-start: 3;
              grid-column-end: 5;
           }

           .gallery-item-eight {
              grid-column-start: 5;
              grid-column-end: 7;
           }

           }

           @media(min-width: 1400px){
            .solution-img-box img{
              min-height: 316px;
            }

            .contact-wrapper{
                grid-template-columns: 0.6fr 1.4fr;
              }
           }
    
.company-id{display:inline-block;margin-top:.7em;font-size:.82em;opacity:.72;letter-spacing:.04em;line-height:1.5;text-decoration:none;cursor:default;pointer-events:none;flex-shrink:0;max-width:100%;}.company-id-wrap{flex-shrink:0;max-width:100%;}
</style>
    
  </head>
  <body>

    
    <div class="header fixed-top">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid container">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="30"
              height="30"
              fill="#fefdf8"
              class="bi bi-justify"
              viewBox="0 0 16 16"
            >
              <path
                fill-rule="evenodd"
                d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"
              />
            </svg>
          </button>
          <div
            class="collapse navbar-collapse text-center"
            id="navbarSupportedContent"
          >
            <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
              <li>
                <a class="nav-link" href="./#home">Home</a>
              </li>
              <li>
                <a class="nav-link" href="./#about-us">About us</a>
              </li>
              <li>
                <a class="nav-link" href="./#services">Our Services</a>
              </li>
              
              
              
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="hero" id="home">
      <div class="container">
        <div class="logo">
          <img src="logo2.png" alt="" />
          <h2>Foxureulfa</h2>
        </div>
        <div class="hero-box">
          <div class="hero-title-box">
            <h3 class="hero-title">Engineered Sportswear for Peak Athletic Performance</h3>

            
          </div>
          <div class="hero-box-wr">
            <div class="hero-box-img">
              <img class="hero-img" src="assets/images/running-gear-display.webp" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>

    


<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-stockno-gallery{
		margin: 0px;
		padding: 0px;
		font-family: 'Barlow Semi Condensed', sans-serif;
		width: 100%;
		font-size: 17px;
		padding: 332px 0px;
	}
	.bodyClass1-stockno-gallery{
		background: #fefdf8;
		color: #ffffff;
	}
	.bodyClass2-stockno-gallery{
		background: #f6dfeb;
		color: #fff;
	}
	.bodyClass3-stockno-gallery{
		background: #fff;
		color: #111;
	}
	.wrapage-block-stockno-gallery{
		background-size: 100%;
		width: 100%;
	}
	.box_main-stockno-gallery{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-stockno-gallery h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-stockno-gallery p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-stockno-gallery{
		text-align: start;
	}
	.mainBlock-stockno-gallery ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-stockno-gallery ul>li span{
		font-weight: bold;
	}
	.mainBlock-stockno-gallery{
		max-width: 1059px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 20px;
	}
	.mainBlock-stockno-gallery .cBlock-stockno-gallery{
		text-align: start;
	}

	.bodyClass3-stockno-gallery .mainBlock-stockno-gallery{
		background: none;
		border-top: 2px solid #f6dfeb;
		border-bottom: 2px solid #f6dfeb;
	}
	.bodyClass2-stockno-gallery .mainBlock-stockno-gallery{
		background: #0C2233;
		color: #fff !important;
		box-shadow: 0px 0px 20px #0C2233;
	}
	.bodyClass2-stockno-gallery .mainBlock-stockno-gallery p{
		color: #fff !important;
	}
	.bodyClass1-stockno-gallery .mainBlock-stockno-gallery{
		background: #101D2D;
		color: #ffffff;
		border-left: 5px solid #310B0B;
	}
	.bodyClass1-stockno-gallery .mainBlock-stockno-gallery p{
		color: #ffffff !important;
	}
	.order-stockno-gallery{
		font-size: 19px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-stockno-gallery p{
			padding: 0px 15px;
		  }
		  .box_main-stockno-gallery h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-stockno-gallery{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-stockno-gallery{
			height: 100%;
		}
	}
</style>
<div class="bodyClass1-stockno-gallery" id="mainWrapp-stockno-gallery">


	<div class="wrapage-block-stockno-gallery">
		<div class="box_main-stockno-gallery">
			<div class="mainBlock-stockno-gallery">
				<p>We're truly grateful for your outreach and the confidence you've placed in us. Your support empowers our dedicated team to enhance the caliber of our offerings continually.</p>
<p>Remember, your insights, feedback, and suggestions are invaluable to our growth and evolution. If there's anything on your mind or if you require assistance, please feel free to reach out. Our commitment is to be readily available to assist you.</p>
<p class="cBlock-stockno-gallery">With heartfelt thanks and warm wishes!</p>
			</div>
		</div>
	</div>


</div>



    <div class="section footer catalogph__section">
      
      <div class="footer-privacy-wrapper">
        <a class="footer-privacy" href="Privacy.html" target="_blank">Privacy policy</a>
        <a class="footer-privacy" href="terms.html" target="_blank">Terms & Conditions</a>
        <a class="footer-privacy m-0" href="legal-disclaimer.html" target="_blank">Disclaimer</a>
                
      </div>
    </div>

   

    <script>
      document.addEventListener('DOMContentLoaded', function() {


    window.addEventListener('scroll', function() {
        let currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop;

        if (currentScrollPosition >= 80) {
            document.querySelector('.navbar').classList.add('nav-bg');
        } else {
            document.querySelector('.navbar').classList.remove('nav-bg');
        }
    });
    });

    document.addEventListener('DOMContentLoaded', function() {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarSupportedContent = document.getElementById('navbarSupportedContent');

    navbarToggler.addEventListener('click', function() {
        navbarSupportedContent.classList.toggle('show');
    });
    });
    </script>

    

</body>
</html>
