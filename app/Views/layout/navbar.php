<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap");
@import url("https://fonts.googleapis.com/css?family=Merriweather:900&display=swap");

#navbar {
    --duration: 1s;
    --nav-duration: calc(var(--duration) / 4);
    --ease: cubic-bezier(0.215, 0.61, 0.355, 1);
    --space: 1rem;
    --font-primary: "Helvetica", sans-serif;
    --font-heading: "Merriweather", serif;
    --font-size: 1.125rem;
    --line-height: 1.5;
}

a.effect-underline:after {
    content: "";
    position: absolute;
    left: 0;
    display: inline-block;
    height: 1em;
    width: 100%;
    border-bottom: 5px solid;
    margin-top: 10px;
    opacity: 0;
    -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
    transition: opacity 0.35s, transform 0.35s;
    -webkit-transform: scale(0, 1);
    transform: scale(0, 1);
}

a.effect-underline:hover:after {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
}

.main-navigation-float {
    display: inline-block;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px rgba(0, 0, 0, 0);
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
}

.main-navigation-float:hover,
.main-navigation-float:focus,
.main-navigation-float:active {
    -webkit-transform: translateY(-8px);
    transform: translateY(-8px);
}

.nav-logo {
    position: fixed;
    width: 80px;
    display: block;
    transition: top 0.3s;
    z-index: 1;
    transform: scale(0.8);
    margin-left: 12px;
}

.nav-logo2 {
    width: 160px;
    position: fixed;
    top: 0px;
    display: block;
    transition: top 0.5s;
    transform: scale(0.8);
}

.main-navigation-toggle {
    position: fixed;
    height: 1px;
    width: 1px;
    overflow: hidden;
    clip: rect(1px, 1px, 1px, 1px);
    white-space: nowrap;
}

.main-navigation-toggle+label {
    position: fixed;
    top: calc(var(--space) * 1.5);
    right: calc(var(--space) * 2);
    cursor: pointer;
    z-index: 2;
}

.icon--menu-toggle {
    margin-top: -12px;
    margin-right: 3px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    stroke-width: 6;
}

.icon-group {
    transform: translateX(0);
    transition: transform var(--nav-duration) var(--ease);
}

.icon--menu {
    stroke: #000;
}

.icon--close {
    stroke: #000;
    transform: translateX(-100%);
}

.main-navigation {
    color: #EE1549;
    position: fixed;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    width: 100%;
    height: 100%;
    transform: translateX(-100%);
    transition: transform var(--nav-duration);
    z-index: 1;
}

.main-navigation:after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgb(255, 255, 255);
    transform-origin: 0 50%;
    z-index: -1;
}

.main-navigation ul {
    font-size: 10vmin;
    font-family: var(--font-heading);
    width: 150%; 
}

.main-navigation li {
    --border-size: 1vmin;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
}

.main-navigation li:after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: var(--border-size);
    transform-origin: 0 50%;
    transform: translateX(-100%) skew(15deg);
}

.main-navigation a {
    display: inline-block;
    max-width: 600px;
    margin: 0 auto;
    color: #EE1549;
    line-height: 1;
    text-decoration: none;
    user-select: none;
    padding: var(--space) calc(var(--space) * 2) calc(var(--space) + var(--border-size) / 2);
    transform: translateY(100%);
    text-align: center;
}

.main-content {
    margin: 6rem auto;
    max-width: 70ch;
    padding: 0 calc(var(--space) * 2);
    transform: translateX(0);
    transition: transform calc(var(--nav-duration) * 2) var(--ease);
}

.main-content>*+* {
    margin-top: calc(var(--space) * var(--line-height));
}

.main-navigation-toggle:checked~label .icon--menu-toggle .icon-group {
    transform: translateX(100%);
}

.main-navigation-toggle:checked~.main-content {
    transform: translateX(10%);
}

.main-navigation-toggle:checked~.main-navigation {
    transition-duration: 0s;
    transform: translateX(0);
}

.main-navigation-toggle:checked~.main-navigation:after {
    animation: nav-bg var(--nav-duration) var(--ease) forwards;
}

.main-navigation-toggle:checked~.main-navigation li:after {
    animation: nav-line var(--duration) var(--ease) forwards;
}

.main-navigation-toggle:checked~.main-navigation a {
    animation: link-appear calc(var(--duration) * 1.5) var(--ease) forwards;
}

.main-navigation-toggle:checked~.main-navigation li:nth-child(1):after,
.main-navigation-toggle:checked~.main-navigation li:nth-child(1) a {
    animation-delay: calc((var(--duration) / 2) * 1 * 0.125);
}

.main-navigation-toggle:checked~.main-navigation li:nth-child(2):after,
.main-navigation-toggle:checked~.main-navigation li:nth-child(2) a {
    animation-delay: calc((var(--duration) / 2) * 2 * 0.125);
}

.main-navigation-toggle:checked~.main-navigation li:nth-child(3):after,
.main-navigation-toggle:checked~.main-navigation li:nth-child(3) a {
    animation-delay: calc((var(--duration) / 2) * 3 * 0.125);
}

.main-navigation-toggle:checked~.main-navigation li:nth-child(4):after,
.main-navigation-toggle:checked~.main-navigation li:nth-child(4) a {
    animation-delay: calc((var(--duration) / 2) * 4 * 0.125);
}

@keyframes nav-bg {
    from {
        transform: translateX(-100%) skewX(-15deg);
    }

    to {
        transform: translateX(0);
    }
}

@keyframes nav-line {
    0% {
        transform: scaleX(0);
        transform-origin: 0 50%;
    }

    35% {
        transform: scaleX(1.001);
        transform-origin: 0 50%;
    }

    65% {
        transform: scaleX(1.001);
        transform-origin: 100% 50%;
    }

    100% {
        transform: scaleX(0);
        transform-origin: 100% 50%;
    }
}

@keyframes link-appear {

    0%,
    25% {
        transform: translateY(100%);
    }

    50%,
    100% {
        transform: translateY(0);
    }
}
 </style>
 <section id="navbar">
   <div>
     <img src="../image/logonav.png" class="nav-logo">
     <input id="page-nav-toggle" class="main-navigation-toggle" type="checkbox" />
     <label for="page-nav-toggle">

       <svg class="icon--menu-toggle" viewBox="0 0 60 30">
         <g class="icon-group">
           <g class="icon--menu">
             <path d="M 6 0 L 54 0" />
             <path d="M 6 15 L 54 15" />
             <path d="M 6 30 L 54 30" />
           </g>
           <g class="icon--close">
             <path d="M 15 0 L 45 30" />
             <path d="M 15 30 L 45 0" />
           </g>
         </g>
       </svg>
     </label>

     <nav class="main-navigation">
      <img src="../image/logonav2.png" class="nav-logo2">
       <ul>
         <li><a class="effect-underline" href="/">Home</a></li>
         <li><a class="effect-underline" href="/about">About</a></li>
         <li><a class="effect-underline" href="/service">Service</a></li>
         <li><a class="effect-underline" href="/product">Product</a></li>
         <li><a class="effect-underline" href="/news">News</a></li>
         <li><a class="effect-underline" href="/search">Search</a></li>
       </ul>
     </nav>
   </div>
 </section>