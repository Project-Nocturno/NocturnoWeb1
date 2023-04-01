<?php 
date_default_timezone_set('UTC');
$back1="bg-00h-6h.png";
$back2="bg-6h-9h-18h-00h.png";
$back3="bg-9h-18h.png";
$dates=[
    24 => $back1,
    1 => $back1,
    2 => $back1,
    3 => $back1,
    4 => $back1,
    5 => $back1,
    6 => $back1,
    7 => $back2,
    8 => $back2,
    9 => $back2,
    10 => $back3,
    11 => $back3,
    12 => $back3,
    13 => $back3,
    14 => $back3,
    15 => $back3,
    16 => $back3,
    17 => $back3,
    18 => $back3,
    19 => $back2,
    20 => $back2,
    21 => $back2,
    22 => $back2,
    23 => $back2
];
$background="../images/background/".$dates[(int) date("H")+1];
$html="background-image: url('$background');
background-position: top;
-webkit-font-smoothing:antialiased;
-moz-osx-font-smoothing:grayscale";
?>
@import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900&display=swap");

html{

    <?php echo $html; ?>
}

body{
  
  line-height:1;
  font-family: roboto,sans-serif;
}

.email, .password, .username{

    box-sizing: border-box;
    margin-top: 45px;
    width: 250px;
    border: 0;
    border-radius: .3em;
    padding: .7em 1em;    
    font-family: 'Open Sans', Sans-serif;
}

.connecte{

    box-sizing: border-box;
    margin-top: 25px;
    width: 150px;
    border: 0;
    border-radius: 8px;
    padding: .7em 1em;    
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-weight: bold;
}

.home-text{
  
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    color: white;
    font-size: 25px;
    margin-top: 30px;
}

.bloc-casier{

    margin: 80px;
    max-width: 1200px;
    min-width: 300px;
    background : #333333;
    min-height: 200px;
    border-radius: 8px;
}

.bloc-home{

    margin: 80px;
    max-width: 800px;
    min-width: 300px;
    background : #333;
    min-height: 330px;
    border-radius: 8px;
}

.bloc-signup{

    margin: 80px;
    max-width: 350px;
    min-width: 300px;
    background : #333;
    min-height: 440px;
    border-radius: 8px;
}

.bloc{

    margin: 80px;
    max-width: 350px;
    min-width: 300px;
    background : #333;
    min-height: 360px;
    border-radius: 8px;
}

.bloc-login{

    margin: 50px;
    height: 100px;
}

.login h1{

    font-size: 50px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    color: white;
    font-weight: bold;
    text-align: center;
    padding: 15px;
}

.bloc-casier h2 {
    font-size: 30px;
    font-family: "Poppins", sans-serif;
    color: white;
    font-weight: 700;
    text-align: center;
    padding: 15px;
}

.bloc-casier p {
    font-size: 18px;
    font-family: "Poppins", sans-serif;
    color: white;
    font-weight: 500;
    text-align: center;
    padding: 10px;
}

.logo {

    font-weight: bold;
    font-size: 30px; 
}

.site-header{

    position: relative;
    background-color: #333;
}


/* Change (Accueil, discord, casier, s'inscrire, se connecter) */
.site-header__wrapper{
    padding-top: 1rem;
    padding-bottom: 1rem;
    font-size: large;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}


@media (min-width: 800px){

    .site-header__wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 0;
        padding-bottom: 0; } 
}

@media (min-width: 600px){

    .nav__wrapper {
        display: flex; 
    }
}

@media (max-width: 599px){

    .nav__wrapper {

        position: absolute;
        top: 100%;
        right: 0;
        left: 0;
        z-index: -1;
        background-color: black;
        visibility: hidden;
        opacity: 0;
        transform: translateY(-100%);
        transition: transform 0.3s ease-out, opacity 0.3s ease-out; }
        .nav__wrapper.active {
          visibility: visible;
          opacity: 1;
          transform: translateY(0); }
}

.nav__item a{

    display: block;
    padding: 1.5rem 1rem;
}

.nav__acc a{

  display: block;
  padding: 1.5rem 2rem;
}

.nav__toggle{

    display: none;
}
  @media (max-width: 599px){

    .nav__toggle{

        display: block;
        position: absolute;
        right: 1rem;
        top: 1rem; }
}

@import "https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap";
      
.wrapper{
  
    max-width:1140px;
    padding-left:1rem;
    padding-right:1rem;
    margin-left:auto;
    margin-right:auto
}

:before*:after{
  
  box-sizing:border-box
}

.wrapper a{
  
    text-decoration: none;
    color:rgba(255, 255, 255, 1);
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

.wrapper a:hover {
  color:rgba(255, 255, 255, 0.7);
}

.bloc-home a{
  
  text-decoration: none;
  color:rgba(255, 255, 255, 1);
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

.bloc-home a:hover {
color:rgba(255, 255, 255, 0.7);
}

.sr-only{
  
    position:absolute;
    clip:rect(1px,1px,1px,1px);
    padding:0;border:0;height:1px;
    width:1px;overflow:hidden
}
  
.button{

    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    color:#fff;
    background-color:#2fa0f6;
    min-width:120px;
    padding:.5rem 1rem;
    border-radius:5px;
    text-align:center
}

.button svg{
  
    display:inline-block;
    vertical-align:middle;
    width:24px;
    height:24px;
    fill:#fff
}

.button span{
  
    display:none
}

@media(min-width:600px){
  
    .button span{display:initial}
}

.button--icon{

    min-width:initial;
    padding:.5rem
}

html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,.nav__wrapper,.nav__item,.nav__acc,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{
  
    margin:0;
    padding:0;
    border:0;
    font-size:100%;
    font:inherit;
    vertical-align:baseline
}

article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{
  
    display:block
}

ol,ul{
  
    list-style:none
}

blockquote,q{
  
    quotes:none
}

blockquote:before,blockquote:after,q:before,q:after{
  
    content:'';content:none
}

table{
  
    border-collapse:collapse;
    border-spacing:0
}

.itembox img {
    padding: 2px;
    margin: 2px;
}

.itembox h3 {
    text-align: center;
    text-decoration: none;
    font-size: 22px;
    filter: drop-shadow(0 0 6px #FFFFFF);
    color: white;
}
.itembox h1 {
    text-align: center;
    text-decoration: none;
}
.itembox {
    border: 8px solid var(--ext_color);
    background-color: var(--back_color);
    padding: 10px;
    margin: 20px;
}

.menu_ul {
    position: relative;
    display: flex;
    flex-direction: column;
    gap: 40px;
}
.menu_ul li {
    position: relative;
    list-style: none;
}
.menu_ul li a {
    display: inline;
    text-align: left;
    font-size: 80px;
    font-weight: 800;
    text-decoration: none;
    line-height: 1em;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: transparent;
    -webkit-text-stroke: 1px rgba(255, 255, 255, 0.5);
}
.menu_ul li a::before {
    content: attr(data-text);
    position: absolute;
    color: var(--clr);
    width: 0;
    overflow: hidden;
    transition: 1s;
    -webkit-text-stroke: 1px var(--clr);
}
.menu_ul li a:hover::before {
    width: 100%;
    filter: drop-shadow(0 0 25px var(--clr));
}
.full-screen-nav {
    font-family: "Poppins", sans-serif;
    text-align: left;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    transition: 0.5s ease-in-out;
    display: none;
    z-index: 2000;  
}
.open-nav {
    opacity: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 1;
    visibility: visible;
}
.backdrop {
    position: absolute;
    width: 100%;
    height: 330%;
    background: rgba(0, 0, 0, 0.8);
    cursor: pointer;
    animation: fadeIn 0.35s ease-in-out forwards;
}
.trigger {
    float: right;
    margin: 20px;
    z-index: 1000;
}
.locker {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    padding: 40px 0;
    font-family: "Poppins", sans-serif;
    font-weight: 700;
}