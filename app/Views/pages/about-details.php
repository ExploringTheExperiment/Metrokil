<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>One Page Wonder - Start Bootstrap Template</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->

   
    <style>
        *,
         ::after,
         ::before {
            box-sizing: border-box
        }
        
        @media (prefers-reduced-motion:no-preference) {
             :root {
                scroll-behavior: smooth
            }
        }
        
        body {
            margin: 0;
            font-family: var(--bs-body-font-family);
            font-size: var(--bs-body-font-size);
            font-weight: var(--bs-body-font-weight);
            line-height: var(--bs-body-line-height);
            color: var(--bs-body-color);
            text-align: var(--bs-body-text-align);
            background-color: var(--bs-body-bg);
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent
        }
        
        @media (min-width:1200px) {
            .h1,
            h1 {
                font-size: 2.5rem
            }
        }
        
        .h2,
        h2 {
            font-size: calc(1.325rem + .9vw)
        }
        
        @media (min-width:1200px) {
            .h2,
            h2 {
                font-size: 2rem
            }
        }
        
        .h3,
        h3 {
            font-size: calc(1.3rem + .6vw)
        }
        
        @media (min-width:1200px) {
            .h3,
            h3 {
                font-size: 1.75rem
            }
        }
        
        .h4,
        h4 {
            font-size: calc(1.275rem + .3vw)
        }
        
        @media (min-width:1200px) {
            .h4,
            h4 {
                font-size: 1.5rem
            }
        }
        
        .h5,
        h5 {
            font-size: 1.25rem
        }
        
        .h6,
        h6 {
            font-size: 1rem
        }
        
        p {
            margin-top: 0;
            margin-bottom: 1rem
        }
        
        b {
            font-weight: bolder
        }
        
        a {
            color: #ee0979;
            text-decoration: underline
        }
        
        a:hover {
            color: #be0761
        }
        
        a:not([href]):not([class]),
        a:not([href]):not([class]):hover {
            color: inherit;
            text-decoration: none
        }
        
        [role=button] {
            cursor: pointer
        }
        
        [list]::-webkit-calendar-picker-indicator {
            display: none
        }
        
        [type=button],
        [type=reset],
        [type=submit] {
            -webkit-appearance: button
        }
        
        [type=button]:not(:disabled),
        [type=reset]:not(:disabled),
        [type=submit]:not(:disabled) {
            cursor: pointer
        }
        
         ::-moz-focus-inner {
            padding: 0;
            border-style: none
        }
        
         ::-webkit-datetime-edit-day-field,
         ::-webkit-datetime-edit-fields-wrapper,
         ::-webkit-datetime-edit-hour-field,
         ::-webkit-datetime-edit-minute,
         ::-webkit-datetime-edit-month-field,
         ::-webkit-datetime-edit-text,
         ::-webkit-datetime-edit-year-field {
            padding: 0
        }
        
         ::-webkit-inner-spin-button {
            height: auto
        }
        
        [type=search] {
            outline-offset: -2px;
            -webkit-appearance: textfield
        }
        
         ::-webkit-search-decoration {
            -webkit-appearance: none
        }
        
         ::-webkit-color-swatch-wrapper {
            padding: 0
        }
        
         ::-webkit-file-upload-button {
            font: inherit
        }
        
         ::file-selector-button {
            font: inherit
        }
        
         ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button
        }
        
        [hidden] {
            display: none!important
        }
        
        .display-1 {
            font-size: calc(1.625rem + 4.5vw);
            font-weight: 300;
            line-height: 1.2
        }
        
        @media (min-width:1200px) {
            .display-1 {
                font-size: 5rem
            }
        }
        
        .display-2 {
            font-size: calc(1.575rem + 3.9vw);
            font-weight: 300;
            line-height: 1.2
        }
        
        @media (min-width:1200px) {
            .display-2 {
                font-size: 4.5rem
            }
        }
        
        .display-3 {
            font-size: calc(1.525rem + 3.3vw);
            font-weight: 300;
            line-height: 1.2
        }
        
        @media (min-width:1200px) {
            .display-3 {
                font-size: 4rem
            }
        }
        
        .display-4 {
            font-size: calc(1.475rem + 2.7vw);
            font-weight: 300;
            line-height: 1.2
        }
        
        @media (min-width:1200px) {
            .display-4 {
                font-size: 3.5rem
            }
        }
        
        .display-5 {
            font-size: calc(1.425rem + 2.1vw);
            font-weight: 300;
            line-height: 1.2
        }
        
        @media (min-width:1200px) {
            .display-5 {
                font-size: 3rem
            }
        }
        
        .display-6 {
            font-size: calc(1.375rem + 1.5vw);
            font-weight: 300;
            line-height: 1.2
        }
        
        @media (min-width:1200px) {
            .display-6 {
                font-size: 2.5rem
            }
        }
        
        .container-12b21vb,
        .container-12b21vb-lg {
            width: 100%;
            padding-right: var(--bs-gutter-x, .75rem);
            padding-left: var(--bs-gutter-x, .75rem);
            margin-right: auto;
            margin-left: auto
        }
        
        @media (min-width:576px) {
            .container-12b21vb {
                max-width: 540px
            }
        }
        
        @media (min-width:768px) {
            .container-12b21vb {
                max-width: 720px
            }
        }
        
        @media (min-width:992px) {
            .container-12b21vb,
            .container-12b21vb-lg {
                max-width: 960px
            }
        }
        
        @media (min-width:1200px) {
            .container-12b21vb,
            .container-12b21vb-lg {
                max-width: 1140px
            }
        }
        
        @media (min-width:1400px) {
            .container-12b21vb,
            .container-12b21vb-lg {
                max-width: 1320px
            }
        }
        
        .row {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(-1 * var(--bs-gutter-y));
            margin-right: calc(-.5 * var(--bs-gutter-x));
            margin-left: calc(-.5 * var(--bs-gutter-x))
        }
        
        .row>* {
            flex-shrink: 0;
            width: 100%;
            max-width: 100%;
            padding-right: calc(var(--bs-gutter-x) * .5);
            padding-left: calc(var(--bs-gutter-x) * .5);
            margin-top: var(--bs-gutter-y)
        }
        
        .col {
            flex: 1 0 0%
        }
        
        .col-1 {
            flex: 0 0 auto;
            width: 8.33333333%
        }
        
        .col-2 {
            flex: 0 0 auto;
            width: 16.66666667%
        }
        
        .col-3 {
            flex: 0 0 auto;
            width: 25%
        }
        
        .col-4 {
            flex: 0 0 auto;
            width: 33.33333333%
        }
        
        .col-5 {
            flex: 0 0 auto;
            width: 41.66666667%
        }
        
        .col-6 {
            flex: 0 0 auto;
            width: 50%
        }
        
        .col-7 {
            flex: 0 0 auto;
            width: 58.33333333%
        }
        
        .col-8 {
            flex: 0 0 auto;
            width: 66.66666667%
        }
        
        .col-9 {
            flex: 0 0 auto;
            width: 75%
        }
        
        .col-10 {
            flex: 0 0 auto;
            width: 83.33333333%
        }
        
        .col-11 {
            flex: 0 0 auto;
            width: 91.66666667%
        }
        
        .col-12 {
            flex: 0 0 auto;
            width: 100%
        }
        
        .gx-0 {
            --bs-gutter-x: 0
        }
        
        .gx-1 {
            --bs-gutter-x: 0.25rem
        }
        
        .gx-2 {
            --bs-gutter-x: 0.5rem
        }
        
        .gx-3 {
            --bs-gutter-x: 1rem
        }
        
        .gx-4 {
            --bs-gutter-x: 1.5rem
        }
        
        .gx-5-1287b {
            --bs-gutter-x: 3rem
        }
        
        @media (min-width:992px) {
            .col-lg {
                flex: 1 0 0%
            }
            .col-lg-1 {
                flex: 0 0 auto;
                width: 8.33333333%
            }
            .col-lg-2 {
                flex: 0 0 auto;
                width: 16.66666667%
            }
            .col-lg-3 {
                flex: 0 0 auto;
                width: 25%
            }
            .col-lg-4 {
                flex: 0 0 auto;
                width: 33.33333333%
            }
            .col-lg-5 {
                flex: 0 0 auto;
                width: 41.66666667%
            }
            .col-lg-6-1basnp90 {
                flex: 0 0 auto;
                width: 50%
            }
            .col-lg-7 {
                flex: 0 0 auto;
                width: 58.33333333%
            }
            .col-lg-8 {
                flex: 0 0 auto;
                width: 66.66666667%
            }
            .col-lg-9 {
                flex: 0 0 auto;
                width: 75%
            }
            .col-lg-10 {
                flex: 0 0 auto;
                width: 83.33333333%
            }
            .col-lg-11 {
                flex: 0 0 auto;
                width: 91.66666667%
            }
            .col-lg-12 {
                flex: 0 0 auto;
                width: 100%
            }
            .gx-lg-0 {
                --bs-gutter-x: 0
            }
            .gx-lg-1 {
                --bs-gutter-x: 0.25rem
            }
            .gx-lg-2 {
                --bs-gutter-x: 0.5rem
            }
            .gx-lg-3 {
                --bs-gutter-x: 1rem
            }
            .gx-lg-4 {
                --bs-gutter-x: 1.5rem
            }
            .gx-lg-5 {
                --bs-gutter-x: 3rem
            }
        }
        
        @-webkit-keyframes progress-bar-stripes {
            0% {
                background-position-x: 1rem
            }
        }
        
        @keyframes progress-bar-stripes {
            0% {
                background-position-x: 1rem
            }
        }
        
        @-webkit-keyframes spinner-border {
            to {
                transform: rotate(360deg)
            }
        }
        
        @keyframes spinner-border {
            to {
                transform: rotate(360deg)
            }
        }
        
        @-webkit-keyframes spinner-grow {
            0% {
                transform: scale(0)
            }
            50% {
                opacity: 1;
                transform: none
            }
        }
        
        @keyframes spinner-grow {
            0% {
                transform: scale(0)
            }
            50% {
                opacity: 1;
                transform: none
            }
        }
        
        @-webkit-keyframes placeholder-glow {
            50% {
                opacity: .2
            }
        }
        
        @keyframes placeholder-glow {
            50% {
                opacity: .2
            }
        }
        
        @-webkit-keyframes placeholder-wave {
            100% {
                -webkit-mask-position: -200% 0;
                mask-position: -200% 0
            }
        }
        
        @keyframes placeholder-wave {
            100% {
                -webkit-mask-position: -200% 0;
                mask-position: -200% 0
            }
        }
        
        .align-top {
            vertical-align: top!important
        }
        
        .align-text-top {
            vertical-align: text-top!important
        }
        
        .top-0 {
            top: 0!important
        }
        
        .top-50 {
            top: 50%!important
        }
        
        .top-100 {
            top: 100%!important
        }
        
        .h-25 {
            height: 25%!important
        }
        
        .h-50 {
            height: 50%!important
        }
        
        .h-75 {
            height: 75%!important
        }
        
        .h-100 {
            height: 100%!important
        }
        
        .align-items-center-18bbo02 {
            align-items: center!important
        }
        
        .align-content-center {
            align-content: center!important
        }
        
        .order-0 {
            order: 0!important
        }
        
        .order-1 {
            order: 1!important
        }
        
        .order-2 {
            order: 2!important
        }
        
        .order-3 {
            order: 3!important
        }
        
        .order-4 {
            order: 4!important
        }
        
        .order-5 {
            order: 5!important
        }
        
        .p-0 {
            padding: 0!important
        }
        
        .p-1 {
            padding: .25rem!important
        }
        
        .p-2 {
            padding: .5rem!important
        }
        
        .p-3 {
            padding: 1rem!important
        }
        
        .p-4 {
            padding: 1.5rem!important
        }
        
        .p-5-b12 {
            padding: 3rem!important
        }
        
        .px-0 {
            padding-right: 0!important;
            padding-left: 0!important
        }
        
        .px-1 {
            padding-right: .25rem!important;
            padding-left: .25rem!important
        }
        
        .px-2 {
            padding-right: .5rem!important;
            padding-left: .5rem!important
        }
        
        .px-3 {
            padding-right: 1rem!important;
            padding-left: 1rem!important
        }
        
        .px-4 {
            padding-right: 1.5rem!important;
            padding-left: 1.5rem!important
        }
        
        .px-47ba {
            padding-right: 3rem!important;
            padding-left: 3rem!important
        }
        
        .text-center-1281av9 {
            text-align: center!important
        }
        
        .white-text-1287haaf {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-white-rgb), var(--bs-text-opacity))!important
        }
        
        .text-body {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-body-color-rgb), var(--bs-text-opacity))!important
        }
        
        .white-text-1287haaf-50 {
            --bs-text-opacity: 1;
            color: rgba(255, 255, 255, .5)!important
        }
        
        @media (min-width:992px) {
            .align-items-lg-center {
                align-items: center!important
            }
            .align-content-lg-center {
                align-content: center!important
            }
            .order-lg-0 {
                order: 0!important
            }
            .order-ab21 {
                order: 1!important
            }
            .order-21na {
                order: 2!important
            }
            .order-lg-3 {
                order: 3!important
            }
            .order-lg-4 {
                order: 4!important
            }
            .order-lg-5 {
                order: 5!important
            }
            .p-lg-0 {
                padding: 0!important
            }
            .p-lg-1 {
                padding: .25rem!important
            }
            .p-lg-2 {
                padding: .5rem!important
            }
            .p-lg-3 {
                padding: 1rem!important
            }
            .p-lg-4 {
                padding: 1.5rem!important
            }
            .p-lg-5 {
                padding: 3rem!important
            }
            .px-lg-0 {
                padding-right: 0!important;
                padding-left: 0!important
            }
            .px-lg-1 {
                padding-right: .25rem!important;
                padding-left: .25rem!important
            }
            .px-lg-2 {
                padding-right: .5rem!important;
                padding-left: .5rem!important
            }
            .px-lg-3 {
                padding-right: 1rem!important;
                padding-left: 1rem!important
            }
            .px-lg-4 {
                padding-right: 1.5rem!important;
                padding-left: 1.5rem!important
            }
            .px-lg-5 {
                padding-right: 3rem!important;
                padding-left: 3rem!important
            }
            .text-lg-center {
                text-align: center!important
            }
        }
        
        html {
            scroll-padding-top: 67px
        }
        
        header.masthead-172b1a-n {
            position: relative;
            overflow: hidden;
            padding-top: calc(7rem + 72px);
            padding-bottom: 7rem;
            background: linear-gradient(0deg, #ff6a00 0, #ee0979 100%);
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover
        }
        
        header.masthead-172b1a-n .masthead-172b1a-n-content {
            z-index: 1;
            position: relative
        }
        
        @media (min-width:992px) {
            header.masthead-172b1a-n {
                padding-top: calc(10rem + 55px)
            }
        }
    </style>
    
    <style>
        .szier-12 {
            background: #fff;
            height: 100%;
            font-family: 'Helvetica Neue LT W01_41488878';
            font-size: 16px;
            line-height: 26px;
        }
        
        .the-arrow-16442 {
            width: 1px;
            transition: all 0.2s;
        }
        
        .the-arrow-16442.-left-12385 {
            position: absolute;
            top: 60%;
            left: 0;
        }
        
        .the-arrow-16442.-left-12385>.shaft-127329 {
            width: 0;
            background-color: #4c4c4c;
        }
        
        .the-arrow-16442.-left-12385>.shaft-127329:before,
        .the-arrow-16442.-left-12385>.shaft-127329:after {
            width: 0;
            background-color: #4c4c4c;
        }
        
        .the-arrow-16442.-left-12385>.shaft-127329:before {
            transform: rotate(0);
        }
        
        .the-arrow-16442.-left-12385>.shaft-127329:after {
            transform: rotate(0);
        }
        
        .the-arrow-16442.-right {
            top: 3px;
        }
        
        .the-arrow-16442.-right>.shaft-127329 {
            width: 1px;
            transition-delay: 0.2s;
        }
        
        .the-arrow-16442.-right>.shaft-127329:before,
        .the-arrow-16442.-right>.shaft-127329:after {
            width: 8px;
            transition-delay: 0.3s;
            transition: all 0.5s;
        }
        
        .the-arrow-16442.-right>.shaft-127329:before {
            transform: rotate(40deg);
        }
        
        .the-arrow-16442.-right>.shaft-127329:after {
            transform: rotate(-40deg);
        }
        
        .the-arrow-16442>.shaft-127329 {
            background-color: #4c4c4c;
            display: block;
            height: 1px;
            position: relative;
            transition: all 0.2s;
            transition-delay: 0;
            will-change: transform;
        }
        
        .the-arrow-16442>.shaft-127329:before,
        .the-arrow-16442>.shaft-127329:after {
            background-color: #4c4c4c;
            content: '';
            display: block;
            height: 1px;
            position: absolute;
            top: 0;
            right: 0;
            transition: all 0.2s;
            transition-delay: 0;
        }
        
        .the-arrow-16442>.shaft-127329:before {
            transform-origin: top right;
        }
        
        .the-arrow-16442>.shaft-127329:after {
            transform-origin: bottom right;
        }
        
        .animated-arrow-12864 {
            display: inline-block;
            color: #4c4c4c;
            font-size: 1.25em;
            font-style: italic;
            text-decoration: none;
            position: relative;
            transition: all 0.2s;
        }
        
        .animated-arrow-12864:hover {
            color: #808080;
        }
        
        .animated-arrow-12864:hover>.the-arrow-16442.-left-12385>.shaft-127329 {
            width: 64px;
            transition-delay: 0.1s;
            background-color: #808080;
        }
        
        .animated-arrow-12864:hover>.the-arrow-16442.-left-12385>.shaft-127329:before,
        .animated-arrow-12864:hover>.the-arrow-16442.-left-12385>.shaft-127329:after {
            width: 8px;
            transition-delay: 0.1s;
            background-color: #808080;
        }
        
        .animated-arrow-12864:hover>.the-arrow-16442.-left-12385>.shaft-127329:before {
            transform: rotate(40deg);
        }
        
        .animated-arrow-12864:hover>.the-arrow-16442.-left-12385>.shaft-127329:after {
            transform: rotate(-40deg);
        }
        
        .animated-arrow-12864:hover>.main-1251922254 {
            transform: translateX(17px);
            transform: translateX(80px);
        }
        
        .animated-arrow-12864:hover>.main-1251922254>.the-arrow-16442.-right>.shaft-127329 {
            width: 0;
            transform: translateX(200%);
            transition-delay: 0;
        }
        
        .animated-arrow-12864:hover>.main-1251922254>.the-arrow-16442.-right>.shaft-127329:before,
        .animated-arrow-12864:hover>.main-1251922254>.the-arrow-16442.-right>.shaft-127329:after {
            width: 0;
            transition-delay: 0;
            transition: all 0.1s;
        }
        
        .animated-arrow-12864:hover>.main-1251922254>.the-arrow-16442.-right>.shaft-127329:before {
            transform: rotate(0);
        }
        
        .animated-arrow-12864:hover>.main-1251922254>.the-arrow-16442.-right>.shaft-127329:after {
            transform: rotate(0);
        }
        
        .animated-arrow-12864>.main-1251922254 {
            display: flex;
            align-items: center;
            transition: all 0.2s;
        }
        
        .animated-arrow-12864>.main-1251922254>.text-19223 {
            margin: 0 16px 0 0;
            line-height: 1;
        }
        
        .animated-arrow-12864>.main-1251922254>.the-arrow-16442 {
            position: relative;
        }
        
        .padd-912bb2 {
            padding-top: 100px;
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->

    <!-- Header-->
    <header class="masthead-172b1a-n text-center-1281av9 white-text-1287haaf">
        <div class="masthead-172b1a-n-content">
            <div class="container-12b21vb px-47ba">
            </div>
        </div>

    </header>
    <!-- Content section 1-->
    <section id="scroll">
        <div class="container-12b21vb px-47ba">
            <div class="row gx-5-1287b align-items-center-18bbo02">
                <div class="col-lg-6-1basnp90 order-21na">
                    <div class="p-5-b12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                    </div>
                </div>
                <div class="col-lg-6-1basnp90 order-ab21">
                    <div class="p-5-b12">
                        <h1 class="display-4"> <b>About <br> Metrokil</b> </h1>
                        <div class="social-icons szier-12 padd-912bb2">
                            <a class="animated-arrow-12864 " href="/about">
                                <span class="the-arrow-16442 -left-12385 ">
                                    <span class="shaft-127329 "></span>
                                </span>
                                <span class="main-1251922254 ">
                                    <span class="text-19223 ">
                                      Back?
                                    </span>
                                <span class="the-arrow-16442 -right ">
                                      <span class="shaft-127329 "></span>
                                </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 2-->

</body>



<?= $this->endSection() ?>