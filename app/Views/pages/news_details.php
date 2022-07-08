<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>


<!DOCTYPE html>
<html lang="en-US" class="no-js" data-wf-page="627b121d199192990a830f3c" data-wf-site="624de812dd74b622858823f2" lang="en">

<head>

    <script id="jquery-core" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>

</head>

<body>
    <style>
        /*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */
        
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        
        .w-embed:after,
        .w-embed:before {
            content: " ";
            display: table;
            grid-column-start: 1;
            grid-row-start: 1;
            grid-column-end: 2;
            grid-row-end: 2
        }
        
        .w-embed:after {
            clear: both
        }
        
        .w-slider {
            position: relative;
            height: 300px;
            text-align: center;
            background: #ddd;
            clear: both;
            -webkit-tap-highlight-color: transparent;
            tap-highlight-color: transparent
        }
        
        .w-slider-mask {
            position: relative;
            display: block;
            overflow: hidden;
            z-index: 1;
            left: 0;
            right: 0;
            height: 100%;
            white-space: nowrap
        }
        
        .w-slide {
            position: relative;
            display: inline-block;
            vertical-align: top;
            width: 100%;
            height: 100%;
            white-space: normal;
            text-align: left
        }
        
        .w-slider-nav {
            position: absolute;
            z-index: 2;
            top: auto;
            right: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            padding-top: 10px;
            height: 40px;
            text-align: center;
            -webkit-tap-highlight-color: transparent;
            tap-highlight-color: transparent
        }
        
        .w-slider-nav.w-round>div {
            border-radius: 100%
        }
        
        .w-slider-dot {
            position: relative;
            display: inline-block;
            width: 1em;
            height: 1em;
            background-color: rgba(255, 255, 255, 0.4);
            cursor: pointer;
            margin: 0 3px .5em;
            transition: background-color 100ms, color 100ms
        }
        
        .w-slider-dot.w-active {
            background-color: #fff
        }
        
        .w-slider-dot:focus {
            outline: none;
            box-shadow: 0 0 0 2px #fff
        }
        
        .w-slider-dot:focus.w-active {
            box-shadow: none
        }
        
        .w-slider-arrow-left,
        .w-slider-arrow-right {
            position: absolute;
            width: 80px;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            cursor: pointer;
            overflow: hidden;
            color: #fff;
            font-size: 40px;
            -webkit-tap-highlight-color: transparent;
            tap-highlight-color: transparent;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }
        
        .w-slider-arrow-left [class*=' w-icon-'],
        .w-slider-arrow-left [class^=w-icon-],
        .w-slider-arrow-right [class*=' w-icon-'],
        .w-slider-arrow-right [class^=w-icon-] {
            position: absolute
        }
        
        .w-slider-arrow-left:focus,
        .w-slider-arrow-right:focus {
            outline: 0
        }
        
        .w-slider-arrow-left {
            z-index: 3;
            right: auto
        }
        
        .w-slider-arrow-right {
            z-index: 4;
            left: auto
        }
        
        .w-icon-slider-left,
        .w-icon-slider-right {
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            width: 1em;
            height: 1em
        }
        
        @keyframes spin {
            0% {
                transform: rotate(0)
            }
            100% {
                transform: rotate(360deg)
            }
        }
        
        .wf-layout-layout {
            display: grid!important
        }
        
        .w-layout-grid {
            display: -ms-grid;
            display: grid;
            grid-auto-columns: 1fr;
            -ms-grid-columns: 1fr 1fr;
            grid-template-columns: 1fr 1fr;
            -ms-grid-rows: auto auto;
            grid-template-rows: auto auto;
            grid-row-gap: 16px;
            grid-column-gap: 16px
        }
        
        body {
            overflow: visible;
            background-color: #EE1549;
            font-family: 'VSCO Gothic', sans-serif;
            color: #fff;
            font-size: 1.7rem;
            line-height: 1.4
        }
        
        h1 {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 38px;
            line-height: 44px;
            font-weight: 500
        }
        
        h2 {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 32px;
            line-height: 36px;
            font-weight: 500
        }
        
        h3 {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 24px;
            line-height: 30px;
            font-weight: 700
        }
        
        h4 {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 18px;
            line-height: 24px;
            font-weight: 700
        }
        
        h5 {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 14px;
            line-height: 20px;
            font-weight: 700
        }
        
        h6 {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 2.8rem;
            line-height: 1.33;
            font-weight: 500
        }
        
        p {
            margin-bottom: 0
        }
        
        a {
            text-decoration: underline
        }
        
        img {
            display: inline-block;
            max-width: 100%;
            -o-object-fit: cover;
            object-fit: cover
        }
        
        .section {
            display: block;
            padding-right: 3.6rem;
            padding-left: 3.6rem;
            -o-object-fit: fill;
            object-fit: fill
        }
        
        .wrap {
            width: 100%;
            max-width: 128rem;
            margin-right: auto;
            margin-left: auto
        }
        
        .wrap.home__explore {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            padding-top: 12.4rem;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-justify-content: space-around;
            -ms-flex-pack: distribute;
            justify-content: space-around;
            -webkit-box-align: stretch;
            -webkit-align-items: stretch;
            -ms-flex-align: stretch;
            align-items: stretch
        }
        
        .wrap.home__slider-wrap {
            display: block;
            padding-top: 16.4rem;
            padding-bottom: 8.4rem;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: stretch;
            -webkit-align-items: stretch;
            -ms-flex-align: stretch;
            align-items: stretch
        }
        
        .text-p3 {
            font-size: 1.3rem;
            line-height: 1.3
        }
        
        .cc-50 {
            opacity: .5
        }
        
        .text-h5 {
            font-size: 1.5rem;
            font-weight: 500
        }
        
        .css-page-specific {
            display: none
        }
        
        .text-h3 {
            font-size: 2.1rem;
            line-height: 1.33;
            font-weight: 500
        }
        
        .cc-text-light-grey {
            color: #d0d0d0
        }
        
        .text-xxl {
            font-size: 7.2rem;
            line-height: 1.1;
            font-weight: 500
        }
        
        .text-xxl.home__explore-title-mobile {
            display: none
        }
        
        .cc-font-medium {
            font-weight: 500
        }
        
        .text-p1 {
            font-size: 1.7rem;
            line-height: 1.4
        }
        
        .text-p2 {
            color: #d0d0d0;
            font-size: 1.5rem;
            line-height: 1.4
        }
        
        .home__explore-content {
            width: 100%;
            max-width: 68rem;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            grid-column-gap: 0;
            grid-row-gap: 10rem;
            -ms-grid-columns: 1fr;
            grid-template-columns: 1fr;
            -ms-grid-rows: auto;
            grid-template-rows: auto
        }
        
        .home__explore-inner {
            -webkit-box-align: start;
            -webkit-align-items: start;
            -ms-flex-align: start;
            align-items: start;
            grid-column-gap: 8.4rem;
            grid-row-gap: 8.4rem;
            -ms-grid-columns: auto auto;
            grid-template-columns: auto auto;
            -ms-grid-rows: auto;
            grid-template-rows: auto
        }
        
        .home__explore-benefits-head {
            margin-bottom: 2rem;
            grid-column-gap: 0;
            grid-row-gap: .4rem;
            -ms-grid-columns: 1fr;
            grid-template-columns: 1fr
        }
        
        .home__explore-icon {
            margin-right: 1.2rem;
            margin-bottom: .1rem
        }
        
        .home__explore-download-wrap {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center
        }
        
        .text-h2 {
            font-size: 2.8rem;
            line-height: 1.28;
            font-weight: 500
        }
        
        .home__slider {
            height: auto;
            background-color: transparent
        }
        
        .home__slider-nav {
            position: static;
            left: 62.8rem;
            top: auto;
            right: auto;
            bottom: 9rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            height: 8px;
            padding-top: 0;
            padding-bottom: 0;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center
        }
        
        .home__slider-arrow {
            display: none
        }
        
        .home__slider-inner {
            width: 100%;
            max-width: 54.6rem;
            padding-left: 6rem;
            grid-column-gap: 0;
            grid-row-gap: 3.8rem;
            -ms-grid-columns: 1fr;
            grid-template-columns: 1fr
        }
        
        .home__slider-icon {
            width: auto;
            margin-bottom: 2.6rem;
            margin-left: .2rem
        }
        
        .home__slide-wrap {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center
        }
        
        .home__slider-title {
            max-width: 42rem
        }
        
        .home__slider-mask {
            margin-bottom: 3.6rem
        }
        
        .text-h1 {
            font-size: 3.6rem;
            line-height: 1.33;
            font-weight: 500
        }
        
        .text-h4 {
            font-size: 1.7rem;
            line-height: 1.4;
            font-weight: 500
        }
        
        .text-h6 {
            font-size: 1.3rem;
            line-height: 1.3;
            font-weight: 500
        }
        
        .home__explore-slider {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            width: 40rem;
            height: auto;
            margin-top: -3rem;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: stretch;
            -webkit-align-items: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            -webkit-box-flex: 0;
            -webkit-flex: 0 auto;
            -ms-flex: 0 auto;
            flex: 0 auto;
            background-color: transparent
        }
        
        .home__explore-mask {
            width: 100%;
            height: 100%
        }
        
        .home__explore-slide {
            position: relative;
            height: 100%;
            padding-bottom: 189.44099379%
        }
        
        .home__explore-slide-inner {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            height: 100%;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center
        }
        
        @media screen and (max-width:991px) {
            .section {
                padding-right: 2.8rem;
                padding-left: 2.8rem
            }
            .wrap {
                max-width: 68rem
            }
            .wrap.home__explore {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-align: center;
                -webkit-align-items: center;
                -ms-flex-align: center;
                align-items: center
            }
            .wrap.home__slider-wrap {
                padding-top: 10rem
            }
            .text-xxl {
                font-size: 5.4rem
            }
            .text-xxl.home__explore-title-mobile {
                display: block;
                text-align: center
            }
            .text-xxl.home__explore-title {
                display: none
            }
            .home__explore-content {
                max-width: 58rem;
                -webkit-box-ordinal-group: 2;
                -webkit-order: 1;
                -ms-flex-order: 1;
                order: 1
            }
            .home__explore-inner {
                grid-column-gap: 6.4rem;
                grid-row-gap: 8.4rem
            }
            .home__slider-nav {
                position: static;
                left: auto;
                right: auto;
                bottom: auto;
                width: 100%;
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center
            }
            .home__slider-inner {
                max-width: 58rem;
                margin-top: 2.4rem;
                padding-left: 0;
                justify-items: center;
                grid-row-gap: 2.4rem;
                -ms-grid-columns: auto;
                grid-template-columns: auto;
                text-align: center
            }
            .home__slider-icon {
                width: 2.4rem;
                margin-left: 0
            }
            .home__slide-wrap {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-align: center;
                -webkit-align-items: center;
                -ms-flex-align: center;
                align-items: center
            }
            .home__slider-title {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-align: center;
                -webkit-align-items: center;
                -ms-flex-align: center;
                align-items: center
            }
            .home__slider-mask {
                margin-bottom: 3.6rem
            }
            .nav__logo {
                margin-top: 0
            }
            .home__explore-slider {
                width: 100%;
                max-width: 33vh;
                margin-top: 6.4rem;
                margin-bottom: 8.4rem;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column
            }
            .home__explore-mask {
                margin-bottom: 2.4rem
            }
            .home__product-nav {
                position: static;
                left: auto;
                right: auto;
                bottom: auto;
                width: 100%;
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center
            }
        }
        
        @media screen and (max-width:767px) {
            .section {
                padding-right: 2rem;
                padding-left: 2rem
            }
            .wrap.home__explore {
                padding-bottom: 16.4rem;
                -webkit-box-align: center;
                -webkit-align-items: center;
                -ms-flex-align: center;
                align-items: center;
                text-align: center
            }
            .wrap.home__slider-wrap {
                padding-top: 8.4rem
            }
            .text-xxl {
                font-size: 4.6rem
            }
            .text-xxl.home__explore-title-mobile {
                margin-right: auto;
                margin-left: auto;
                text-align: center
            }
            .home__explore-content {
                max-width: 40rem;
                margin-right: auto;
                margin-left: auto;
                grid-column-gap: 0
            }
            .home__explore-inner {
                justify-items: center;
                grid-column-gap: 8.4rem;
                grid-row-gap: 4.8rem;
                -ms-grid-columns: auto;
                grid-template-columns: auto;
                text-align: center
            }
            .home__slider-icon {
                margin-bottom: 1.6rem
            }
            .home__explore-slider {
                margin-top: 2.4rem;
                margin-bottom: 6.4rem
            }
        }
        
        @media screen and (max-width:479px) {
            .wrap.home__explore {
                padding-bottom: 12.4rem;
                -webkit-box-align: start;
                -webkit-align-items: flex-start;
                -ms-flex-align: start;
                align-items: flex-start
            }
            .home__explore-content {
                max-width: none;
                text-align: left
            }
            .home__explore-inner {
                justify-items: stretch;
                -ms-grid-columns: auto;
                grid-template-columns: auto;
                text-align: left
            }
            .home__slider-inner {
                margin-top: 1.6rem;
                justify-items: start;
                text-align: left
            }
            .home__slider-title {
                -webkit-box-align: start;
                -webkit-align-items: flex-start;
                -ms-flex-align: start;
                align-items: flex-start
            }
            .home__slider-mask {
                margin-bottom: 3.6rem
            }
            .home__explore-slider {
                width: 100%;
                max-width: 23.5vh;
                margin-right: auto;
                margin-left: auto
            }
            .home__explore-slide-inner {
                width: 100%
            }
        }
    </style>
    <div class="css-page-specific w-embed">
        <style>
            /* footer */
            
            .ot-btn-override-footer {
                text-align: left;
                text-decoration: none !important;
                color: white !important;
                border: none !important;
                font-size: 13px !important;
                font-weight: 400 !important;
                padding: 0 !important;
                line-height: 1.2 !important;
            }
            
            .ot-btn-override-footer:hover,
            .ot-btn-override:focus {
                background: none !important;
                color: #C4C4C4;
            }
            
            .light-body .ot-btn-override-footer {
                color: #737373 !important;
            }
            /* --- Basics --- */
            /* Make the fonts nice! */
            /* Link's colored from parent */
            /* REM Magic */
            
            html {
                font-size: 62.5%;
            }
            
            @media screen and (max-width: 1240px) and (min-width: 1141px) {
                html {
                    font-size: 8.8px;
                }
            }
            
            @media screen and (max-width: 1140px) and (min-width: 992px) {
                html {
                    font-size: 8.2px;
                }
            }
            
            .w-nav-button {
                display: flex !important;
            }
            
            @media screen and (max-width: 368px) {
                .down__title-desc {
                    display: none;
                }
            }
            
            .home__stories-img {
                aspect-ratio: 4 / 3;
            }
            
            .text-h2.stories__feed-title {
                color: inherit;
            }
            /* slider */
            
            .w-slide {
                position: relative;
                display: inline-block;
                vertical-align: top;
                width: 100%;
                height: 100%;
                white-space: normal;
                text-align: left
            }
            
            .w-slider-dot {
                width: 16px;
                height: 8px;
                background: #7C7C7C;
                transition-property: width;
                transition-duration: 300ms;
                transition-timing-function: cubic-bezier(.455, .03, .515, .955);
                margin: 0;
            }
            
            .w-slider-nav.w-round>div {
                border-radius: 0px;
            }
            
            .w-slider-dot:first-child {
                margin-left: 0px !important;
            }
            
            .w-slider-dot.w-active {
                width: 16px;
                height: 8px;
                background-color: white;
                opacity: 1;
            }
            
            .w-slider-nav {
                height: auto;
                margin: 0;
                padding: 0;
            }
            
            @media only screen and (max-width: 1280px) and (min-width: 992px) {
                .home__wall-section {
                    font-size: 0.8rem;
                }
            }
            
            @media only screen and (min-height:1380px) {
                .home__wall-gradient {
                    display: block;
                }
                .home__wall-section {
                    overflow: hidden;
                }
            }
            
            .home__slide-video {
                aspect-ratio: 1052 / 1240;
            }
            
            @media only screen and (min-height: 1380px) {
                .home__wall-gradient {
                    display: block;
                }
                .home__wall-section {
                    overflow: hidden;
                }
            }
            
            @media only screen and (max-height: 780px) and (min-width: 992px) {
                .text-xl.home__hero-head {
                    font-size: 4.4rem;
                }
            }
            
            @media only screen and (max-height: 720px) and (min-width: 992px) {
                .home__hero-cover {
                    height: 108vh;
                    background-position: 0px 0px, 50% 15%;
                }
                .home__hero-title {
                    margin-bottom: 8rem;
                }
            }
            
            @media only screen and (min-height: 1440px) and (min-width: 992px) {
                .text-xl.home__hero-head {
                    font-size: 7.2rem;
                }
            }
        </style>
    </div>


    <div id="download" class="section">

        <div data-w-id="66d84c93-b745-a874-9a7b-3ff5e5d2385b" class="wrap home__explore">
            <div class="text-xxl home__explore-title-mobile">Cara Ternak Lele <br> Dengan Benar</div>
            <div class="w-layout-grid home__explore-content">

                <div class="text-xxl home__explore-title">Cara Ternak Lele <br> Dengan Benar</div>
                <div class="w-layout-grid home__explore-inner">
                    <div class="home__explore-benefits">
                        <div class="w-layout-grid home__explore-benefits-head">
                            <div class="text-h3">Cara Ternak Lele</div>
                            <div class="text-p2 cc-text-light-grey">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam eos laudantium nulla quaerat debitis, accusantium inventore error provident enim similique beatae odit a fuga architecto. Sed, non placeat? Eligendi, et! Lorem ipsum
                                dolor sit amet consectetur adipisicing elit. Praesentium itaque odio iste dolorum tenetur est provident, illo in libero ea fugiat aut quibusdam architecto accusantium vel quisquam iusto fuga! Nostrum.</div>
                        </div>
                        <div class="text-p2 cc-font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis dolorum consequatur veniam, quod minus aut rerum laboriosam unde accusamus culpa adipisci, voluptas voluptatibus assumenda enim doloribus tenetur dicta optio! Molestias
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex explicabo nobis iusto error quod inventore natus obcaecati nulla quos nisi, sed nihil fugiat quam quae, iste sunt repellat debitis? In?</div>
                    </div>
                </div>
            </div>

            <div data-delay="2000" data-animation="slide" class="home__explore-slider w-slider" data-autoplay="true" data-easing="ease-out-cubic" style="-webkit-transform:translate3d(null, 2.4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(null, 2.4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(null, 2.4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(null, 2.4rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                data-hide-arrows="false" data-disable-swipe="false" data-w-id="f2e1781d-b668-df25-38e3-6ae37d808d8b" data-autoplay-limit="0" data-nav-spacing="6" data-duration="650" data-infinite="true">
                <div class="home__explore-mask w-slider-mask">
                    <div class="home__explore-slide w-slide">
                        <div class="home__explore-slide-inner"><img width="400" loading="lazy" src="image/news icon.svg" class="home__explore-screen" /></div>
                    </div>
                    <div class="home__explore-slide w-slide">
                        <div class="home__explore-slide-inner"><img width="390" loading="lazy" src="image/logo.svg" class="home__explore-screen" /></div>
                    </div>
                    <div class="home__explore-slide w-slide">
                        <div class="home__explore-slide-inner"><img width="390" loading="lazy" src="image/Spray can.svg" class="home__explore-screen" /></div>
                    </div>
                    <div class="home__explore-slide w-slide">
                        <div class="home__explore-slide-inner"><img width="390" loading="lazy" src="image/arrow up.svg" class="home__explore-screen" /></div>
                    </div>
                </div>
                <div class="home__slider-arrow w-slider-arrow-left">
                    <div class="w-icon-slider-left"></div>
                </div>
                <div class="home__slider-arrow w-slider-arrow-right">
                    <div class="w-icon-slider-right"></div>
                </div>
                <div class="home__product-nav w-slider-nav w-round"></div>
            </div>
        </div>
    </div>

    <script src="js/imageanimation.js"></script>


</body>

</html>

<?= $this->endSection() ?>