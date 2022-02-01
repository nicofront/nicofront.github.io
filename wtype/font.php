<!doctype html>
<html lang="en">

<head>
    <!-- 
    ********************************************************************            
    FoundryCore.tipografia.com.ar
    ********************************************************************
    -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Font | FoundryCore | A web solution for independent font foundries</title>

    <!-- PAGE STYLES -->
    <link href="assets/css/main.min.css" rel="stylesheet">

</head>

<body class="body-font">

    <header class="header" role="banner">
        <?php include('templating/navbar.php'); ?>

        <?php include('templating/navbar-mobile.php'); ?>
    </header>

    <main class="main">
        <!-- SECTION Font Tester -->
        <section id="tester" class="container js-tester">
            <div class="loadingLabel" hidden>LOADING</div>
            <div class="boxWrapper">
                <div class="testerControls" data-control="test-0" data-direction="">
                    <div class="controlWrapper">
                        <div class="row align-items-center">
                            <!-- ANCHOR FONTSTYLE COL -->
                            <div class="col-12 col-md-3 col-xl-2 mr-auto">
                                <div class="dropdown fontstyle-dropdown" data-page="typefaces/ars-descendiaan">
                                    <button class="btn btn-sm btn-transparent dropdown-toggle " type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Select Style
                                    </button>
                                    <div class="dropdown-menu fontStyle-selector" aria-labelledby="dropdownMenuButton">
                                        <button class="btn dropdown-item">
                                            Sans Serif Regular</button>
                                        <button class="btn dropdown-item">
                                            Sans Serif Regular Italic</button>
                                        <button class="btn dropdown-item">
                                            Sans Serif Bold</button>
                                        <button class="btn dropdown-item">
                                            Sans Serif Bold Italic</button>
                                    </div>
                                </div>
                            </div>

                            <!-- ANCHOR FEATURES COL -->
                            <div class="col-auto col-sm-3 col-lg-auto">
                                <div class="dropdown features-dropdown">
                                    <button class="btn btn-sm btn-transparent dropdown-toggle " type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Features
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <div class="featuresWrapper dropdown-wrapper">
                                            <h6 class="dropdown-header">Font features</h6>

                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input feat-check">
                                                <span class="custom-control-label" for="chbxTerms">
                                                    Standard Ligatures
                                                </span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input feat-check">
                                                <span class="custom-control-label" for="chbxTerms">
                                                    Stylistic set 04
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ANCHOR VARIATIONS COL -->
                            <div class="col-auto">
                                <div class="dropdown variations-dropdown">
                                    <button class="btn btn-sm btn-transparent dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon i-variations medium"></i> Font Variations
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <div class="axesMajorWrapper dropdown-wrapper">
                                            <div class="axisWrapper">
                                                <label>Optical Size <span class="valueLabel">144</span></label>
                                                <input type="range" class="custom-range varRange" min="9" value="144" step="1" max="144">
                                            </div>
                                            <div class="axisWrapper">
                                                <label>Weight <span class="valueLabel">400</span></label>
                                                <input type="range" class="custom-range varRange" min="100" value="300" step="10" max="900">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ANCHOR TEXT ALIGN COL -->
                            <div class="col-auto">
                                <div class="form-row align-items-center">
                                    <div class="col-auto">
                                        <button value="start" class="alignButton btn px-0">
                                            <i class="icon i-align-left medium"></i>
                                        </button>
                                    </div>
                                    <div class="col-auto">
                                        <button value="center" class="alignButton btn px-0">
                                            <i class="icon i-align-center medium"></i>
                                        </button>
                                    </div>
                                    <div class="col-auto">
                                        <button value="end" class="alignButton btn px-0">
                                            <i class="icon i-align-right medium"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- ANCHOR FONTSIZE COL -->
                            <div class="col-xl-2">
                                <div class="form-row align-items-center">
                                    <div class="col-auto">
                                        <i class="icon i-fontsize-less medium"></i>
                                    </div>
                                    <div class="col d-flex">
                                        <input type="range" class="fzRange custom-range custom-range-sm" min="12"
                                            max="400">
                                    </div>
                                    <div class="col-auto">
                                        <i class="icon i-fontsize-less medium"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- ANCHOR LINEHEIGHT COL -->
                            <div class="col-xl-2">
                                <div class="form-row align-items-center">
                                    <div class="col-auto">
                                        <i class="icon i-lead-less medium"></i>
                                    </div>
                                    <div class="col d-flex">
                                        <input type="range" class="lhRange custom-range custom-range-sm" min="0.7"
                                            value="1" step=".01" max="2">
                                    </div>
                                    <div class="col-auto">
                                        <i class="icon i-lead-more medium"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- ANCHOR fz/lh label COL -->
                            <div class="col-1 d-none d-xl-block ml-auto text-right">
                                <span class="fontSizeLabel">100px</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="testEl" contenteditable="true" spellcheck="false"
                    style="font-weight: 400" id="test-0">Lorem ipsum dolor</div>
            </div>
            <div class="boxWrapper">
                <div class="testerControls" data-control="test-0" data-direction="">
                    <div class="controlWrapper">
                        <div class="row align-items-center">
                            <!-- ANCHOR FONTSTYLE COL -->
                            <div class="col-12 col-md-3 col-xl-2 mr-auto">
                                <div class="dropdown fontstyle-dropdown" data-page="typefaces/ars-descendiaan">
                                    <button class="btn btn-sm btn-transparent dropdown-toggle " type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Select Style
                                    </button>
                                    <div class="dropdown-menu fontStyle-selector" aria-labelledby="dropdownMenuButton">
                                        <button class="btn dropdown-item">
                                            Sans Serif Regular</button>
                                        <button class="btn dropdown-item">
                                            Sans Serif Regular Italic</button>
                                        <button class="btn dropdown-item">
                                            Sans Serif Bold</button>
                                        <button class="btn dropdown-item">
                                            Sans Serif Bold Italic</button>
                                    </div>
                                </div>
                            </div>

                            <!-- ANCHOR FEATURES COL -->
                            <div class="col-auto col-sm-3 col-lg-auto">
                                <div class="dropdown features-dropdown">
                                    <button class="btn btn-sm btn-transparent dropdown-toggle " type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Features
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <div class="featuresWrapper dropdown-wrapper">
                                            <h6 class="dropdown-header">Font features</h6>

                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input feat-check">
                                                <span class="custom-control-label" for="chbxTerms">
                                                    Standard Ligatures
                                                </span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input feat-check">
                                                <span class="custom-control-label" for="chbxTerms">
                                                    Stylistic set 04
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ANCHOR VARIATIONS COL -->
                            <div class="col-auto">
                                <div class="dropdown variations-dropdown">
                                    <button class="btn btn-sm btn-transparent dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon i-variations medium"></i> Font Variations
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <div class="axesMajorWrapper dropdown-wrapper">
                                            <div class="axisWrapper">
                                                <label>Optical Size <span class="valueLabel">144</span></label>
                                                <input type="range" class="custom-range varRange" min="9" value="144" step="1" max="144">
                                            </div>
                                            <div class="axisWrapper">
                                                <label>Weight <span class="valueLabel">400</span></label>
                                                <input type="range" class="custom-range varRange" min="100" value="300" step="10" max="900">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ANCHOR TEXT ALIGN COL -->
                            <div class="col-auto">
                                <div class="form-row align-items-center">
                                    <div class="col-auto">
                                        <button value="start" class="alignButton btn px-0">
                                            <i class="icon i-align-left medium"></i>
                                        </button>
                                    </div>
                                    <div class="col-auto">
                                        <button value="center" class="alignButton btn px-0">
                                            <i class="icon i-align-center medium"></i>
                                        </button>
                                    </div>
                                    <div class="col-auto">
                                        <button value="end" class="alignButton btn px-0">
                                            <i class="icon i-align-right medium"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- ANCHOR FONTSIZE COL -->
                            <div class="col-xl-2">
                                <div class="form-row align-items-center">
                                    <div class="col-auto">
                                        <i class="icon i-fontsize-less medium"></i>
                                    </div>
                                    <div class="col d-flex">
                                        <input type="range" class="fzRange custom-range custom-range-sm" min="12"
                                            max="400">
                                    </div>
                                    <div class="col-auto">
                                        <i class="icon i-fontsize-less medium"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- ANCHOR LINEHEIGHT COL -->
                            <div class="col-xl-2">
                                <div class="form-row align-items-center">
                                    <div class="col-auto">
                                        <i class="icon i-lead-less medium"></i>
                                    </div>
                                    <div class="col d-flex">
                                        <input type="range" class="lhRange custom-range custom-range-sm" min="0.7"
                                            value="1" step=".01" max="2">
                                    </div>
                                    <div class="col-auto">
                                        <i class="icon i-lead-more medium"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- ANCHOR fz/lh label COL -->
                            <div class="col-1 d-none d-xl-block ml-auto text-right">
                                <span class="fontSizeLabel">100px</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="testEl" contenteditable="true" spellcheck="false"
                    style="font-weight: 400" id="test-0">Lorem ipsum dolor</div>
            </div>
            <div class="boxWrapper">
                <div class="testerControls" data-control="test-0" data-direction="">
                    <div class="controlWrapper">
                        <div class="row align-items-center">
                            <!-- ANCHOR FONTSTYLE COL -->
                            <div class="col-12 col-md-3 col-xl-2 mr-auto">
                                <div class="dropdown fontstyle-dropdown" data-page="typefaces/ars-descendiaan">
                                    <button class="btn btn-sm btn-transparent dropdown-toggle " type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Select Style
                                    </button>
                                    <div class="dropdown-menu fontStyle-selector" aria-labelledby="dropdownMenuButton">
                                        <button class="btn dropdown-item">
                                            Sans Serif Regular</button>
                                        <button class="btn dropdown-item">
                                            Sans Serif Regular Italic</button>
                                        <button class="btn dropdown-item">
                                            Sans Serif Bold</button>
                                        <button class="btn dropdown-item">
                                            Sans Serif Bold Italic</button>
                                    </div>
                                </div>
                            </div>

                            <!-- ANCHOR FEATURES COL -->
                            <div class="col-auto col-sm-3 col-lg-auto">
                                <div class="dropdown features-dropdown">
                                    <button class="btn btn-sm btn-transparent dropdown-toggle " type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Features
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <div class="featuresWrapper dropdown-wrapper">
                                            <h6 class="dropdown-header">Font features</h6>

                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input feat-check">
                                                <span class="custom-control-label" for="chbxTerms">
                                                    Standard Ligatures
                                                </span>
                                            </label>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input feat-check">
                                                <span class="custom-control-label" for="chbxTerms">
                                                    Stylistic set 04
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ANCHOR VARIATIONS COL -->
                            <div class="col-auto">
                                <div class="dropdown variations-dropdown">
                                    <button class="btn btn-sm btn-transparent dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon i-variations medium"></i> Font Variations
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <div class="axesMajorWrapper dropdown-wrapper">
                                            <div class="axisWrapper">
                                                <label>Optical Size <span class="valueLabel">144</span></label>
                                                <input type="range" class="custom-range varRange" min="9" value="144" step="1" max="144">
                                            </div>
                                            <div class="axisWrapper">
                                                <label>Weight <span class="valueLabel">400</span></label>
                                                <input type="range" class="custom-range varRange" min="100" value="300" step="10" max="900">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ANCHOR TEXT ALIGN COL -->
                            <div class="col-auto">
                                <div class="form-row align-items-center">
                                    <div class="col-auto">
                                        <button value="start" class="alignButton btn px-0">
                                            <i class="icon i-align-left medium"></i>
                                        </button>
                                    </div>
                                    <div class="col-auto">
                                        <button value="center" class="alignButton btn px-0">
                                            <i class="icon i-align-center medium"></i>
                                        </button>
                                    </div>
                                    <div class="col-auto">
                                        <button value="end" class="alignButton btn px-0">
                                            <i class="icon i-align-right medium"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- ANCHOR FONTSIZE COL -->
                            <div class="col-xl-2">
                                <div class="form-row align-items-center">
                                    <div class="col-auto">
                                        <i class="icon i-fontsize-less medium"></i>
                                    </div>
                                    <div class="col d-flex">
                                        <input type="range" class="fzRange custom-range custom-range-sm" min="12"
                                            max="400">
                                    </div>
                                    <div class="col-auto">
                                        <i class="icon i-fontsize-less medium"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- ANCHOR LINEHEIGHT COL -->
                            <div class="col-xl-2">
                                <div class="form-row align-items-center">
                                    <div class="col-auto">
                                        <i class="icon i-lead-less medium"></i>
                                    </div>
                                    <div class="col d-flex">
                                        <input type="range" class="lhRange custom-range custom-range-sm" min="0.7"
                                            value="1" step=".01" max="2">
                                    </div>
                                    <div class="col-auto">
                                        <i class="icon i-lead-more medium"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- ANCHOR fz/lh label COL -->
                            <div class="col-1 d-none d-xl-block ml-auto text-right">
                                <span class="fontSizeLabel">100px</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="testEl" contenteditable="true" spellcheck="false"
                    style="font-weight: 400" id="test-0">Lorem ipsum dolor</div>
            </div>
        </section>
        <!-- !SECTION Font Tester -->

        <!-- SECTION INFORMATION -->
        <section id="info" class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2>Sans Serif</h2>
                </div>
                <div class="col-md-5">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Turpis egestas pretium aenean pharetra. Orci eu lobortis
                        elementum nibh tellus molestie. Vulputate dignissim suspendisse in est. Vel pharetra vel turpis
                        nunc. Malesuada nunc vel risus commodo. Nisi vitae suscipit tellus mauris. Posuere morbi leo
                        urna molestie at elementum eu. Urna duis convallis convallis tellus. Urna molestie at elementum
                        eu. Nunc sed blandit libero volutpat.</p>
                </div>
                <div class="col">
                    <ul>
                        <li>Designer: <span class="designer">John Doe</span></li>
                        <li>Released: February 2021</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- !SECTION INFORMATION -->

        <hr>

        <!-- SECTION STYLE LIST -->
        <section id="styles" class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2>All styles</h2>
                </div>

                <div class="col">
                    <div class="styles__cluster">
                        <li class="styleElement w300 ">Light</li>
                        <li class="styleElement w300 italic">Light Italic</li>
                        <li class="styleElement w400 ">Regular</li>
                        <li class="styleElement w400 italic">Regular Italic</li>
                        <li class="styleElement w500 ">Medium</li>
                        <li class="styleElement w500 italic">Medium Italic</li>
                        <li class="styleElement w600 ">SemiBold</li>
                        <li class="styleElement w600 italic">SemiBold Italic</li>
                        <li class="styleElement w700 ">Bold</li>
                        <li class="styleElement w700 italic">Bold Italic</li>
                        <li class="styleElement w800 ">ExtraBold</li>
                        <li class="styleElement w800 italic">ExtraBold Italic</li>
                    </div>
                </div>
        </section>
        <!-- !SECTION STYLE LIST -->

        <hr>
        <section class="container js-glyphViewer">
            <div class="row">
                <div class="col-md-3">
                    <h2>Glyphs</h2>
                    
                </div>
                <div class="col">
                    <div id="glyphsFontSelect" class="dropdown fontstyleGlyphs-dropdown"
                    data-page="typefaces/ars-descendiaan">
                    <button class="btn btn-transparent dropdown-toggle " type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Select Style
                    </button>
                    <div class="dropdown-menu fontstyleGlyphs-select dropdown-menu-center"
                        aria-labelledby="dropdownMenuButton">
                        <h6 class="dropdown-header">Sans Serif</h6>
                        <button class="btn dropdown-item">Sans Serif Regular</button>
                        <button class="btn dropdown-item">Sans Serif Regular italic</button>
                        <button class="btn dropdown-item">Sans Serif Bold</button>
                        <button class="btn dropdown-item">Sans Serif Bold italic</button>
                    </div>
                </div>
                </div>
            </div>

            <div class="row">
                <div id="glyphZoom" class="col-md-3 clearfix d-inline-block">
                    <div id="glyphViewerContainer">
                    </div>
                </div>
                <div id="glyphset" class="col clearfix folded">
                    <div class="categoryWrapper" data-category="uppercase">
                        <h5>Uppercase</h5>
                        <div class="glyphsWrapper">
                            <div class="glyphWrapper" data-name="A" data-index="4">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                        </div>
                    </div>

                    <div class="categoryWrapper" data-category="lowercase">
                        <h5>Lowercase</h5>
                        <div class="glyphsWrapper">
                            <div class="glyphWrapper" data-name="A" data-index="4">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                        </div>
                    </div>

                    <div class="categoryWrapper" data-category="numerals">
                        <h5>Numerals</h5>
                        <div class="glyphsWrapper">
                            <div class="glyphWrapper" data-name="A" data-index="4">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                            <div class="glyphWrapper" data-name="B" data-index="5">
                                <svg style="width:100%; height:100%;" viewBox="0, 0, 1000, 1000"><path style="transform-origin: 50% 50%" transform="scale(0.7, -0.7) translate( 276, 163.25)" d=" M224 204Q185 204 152 223Q119 242 99.5 275Q80 308 80 347Q80 386 99.5 419Q119 452 152 471.5Q185 491 224 491Q263 491 296 471.5Q329 452 348.5 419Q368 386 368 347Q368 308 348.5 275Q329 242 296 223Q263 204 224 204Z"></path></svg>
                            </div>
                        </div>
                    </div>

            
                </div>
            </div>
        </section>

        <hr>

        <section id="buy">
            <div class="container">

                <div class="row mb-4">
                    <div class="col-lg-3">
                        <h4>1. Select License</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia tenetur sint qui itaque
                            molestiae, delectus doloremque.</p>
                    </div>

                    <div class="col-lg-4">
                        <h4>2. Select Fonts</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia tenetur sint qui itaque
                            molestiae, delectus doloremque.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 license-form-column">
                        <form class="form-buy" method="POST" id="productsForm" action="">
                            <h4 class="form-buy__heading">License type & Size</h4>
                            <div class="license-selects-wrapper">
                                <div class="license-box">
                                    <label>Desktop</label>
                                    <select name="license[desktop]" class="custom-select custom-select col-auto"
                                        autocomplete="off">
                                        <option data-m="0" value="desktop0">
                                            No Desktop License </option>
                                        <option data-m="1" value="desktop3">
                                            Up to 3 computers </option>
                                        <option data-m="3" value="desktop7">
                                            Up to 7 computers </option>
                                        <option data-m="4" value="desktop10">
                                            Up to 10 workstations </option>
                                        <option data-m="20" value="desktop5">
                                            Up to 40 workstation </option>
                                    </select>
                                </div>
                                <div class="license-box">
                                    <label>Web</label>
                                    <select name="license[web]" class="custom-select custom-select col-auto"
                                        autocomplete="off">
                                        <option data-m="0" value="web0">
                                            No Web license </option>
                                        <option data-m="1" value="web15">
                                            Up to 15k visitors </option>
                                        <option data-m="2" value="web50">
                                            Up to 50k visitors </option>
                                    </select>
                                </div>
                                <div class="license-box">
                                    <label>Apps and Ebooks</label>
                                    <select name="license[app]" class="custom-select custom-select col-auto"
                                        autocomplete="off">
                                        <option data-m="0" value="app0">
                                            No App License </option>
                                        <option data-m="4" value="app1">
                                            1 App or E-book </option>
                                        <option data-m="8" value="app5">
                                            5 App or E-book </option>
                                    </select>
                                </div>
                            </div>
                            <div class="total-submit-wrapper">
                                <div class="row">
                                    <h4 class="col-auto">TOTAL</h4>
                                    <h4 class="col text-right">U$D <span id="pricesum">100.00</span></h4>
                                </div>
                                <button id="add-button" disabled type="submit" class="btn btn-block btn-primary">Proceed to checkout</button>
                            </div>
                        </form>
                    </div>

                    <div class="col products-column" data-form="productsForm">
                        <div class="bundles">
                            <h4 class="form-buy__heading">Packages</h4>
                            <div class="products-wrapper">
                                <!-- Package Product Item -->
                                <div class="product-item bundle-item no-price"
                                    data-id=""
                                    data-value="" data-discount=""
                                    data-products="">

                                    <div class="form-row">
                                        <div class="product-title col">
                                            Sans Serif Complete Family</div>
                                        <div class="product-price-wrapper col-auto">
                                            <span class="product-price">U$D 30.00 </span>
                                        </div>
                                    </div>
                                    <div class="product-info-wrapper">
                                        Sans Serif Regular, Sans Serif Regular Italic, Sans Serif Bold, Sans Serif Bold Italic
                                    </div>
                                </div>
                                <!-- Package Product Item -->
                                <div class="product-item bundle-item no-price"
                                    data-id=""
                                    data-value="" data-discount=""
                                    data-products="">

                                    <div class="form-row">
                                        <div class="product-title col">
                                            Sans Serif Roman Family</div>
                                        <div class="product-price-wrapper col-auto">
                                            <span class="product-price">U$D 30.00 </span>
                                        </div>
                                    </div>
                                    <div class="product-info-wrapper">
                                        Sans Serif Regular, Sans Serif Bold
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="singleProducts" class="">
                            <h4 class="form-buy__heading">Single styles</h4>
                                <div class="products-wrapper">    
                                    <!-- Single Product Item -->
                                    <div class="product-item no-price"
                                        data-id=""
                                        data-value="" data-discount=""
                                        data-products="">

                                        <div class="form-row d-flex align-items-center">
                                            <div class="col-auto">
                                                <span class="product-sample w400">Aa</span>
                                            </div>

                                            <div class="col">
                                                <span class="product-title">Sans Serif Regular</span>
                                            </div>
                                            <div class="col-auto">
                                                <span class="product-price-wrapper">
                                                    <span class="product-price">U$D 30.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Product Item -->
                                    <div class="product-item no-price"
                                        data-id=""
                                        data-value="" data-discount=""
                                        data-products="">

                                        <div class="form-row d-flex align-items-center">
                                            <div class="col-auto">
                                                <span class="product-sample w400 italic">Aa</span>
                                            </div>

                                            <div class="col">
                                                <span class="product-title">Sans Serif Regular Italic</span>
                                            </div>
                                            <div class="col-auto">
                                                <span class="product-price-wrapper">
                                                    <span class="product-price">U$D 30.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Product Item -->
                                    <div class="product-item no-price"
                                        data-id=""
                                        data-value="" data-discount=""
                                        data-products="">

                                        <div class="form-row d-flex align-items-center">
                                            <div class="col-auto">
                                                <span class="product-sample w700">Aa</span>
                                            </div>

                                            <div class="col">
                                                <span class="product-title">Sans Serif Bold</span>
                                            </div>
                                            <div class="col-auto">
                                                <span class="product-price-wrapper">
                                                    <span class="product-price">U$D 30.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Product Item -->
                                    <div class="product-item no-price"
                                        data-id=""
                                        data-value="" data-discount=""
                                        data-products="">

                                        <div class="form-row d-flex align-items-center">
                                            <div class="col-auto">
                                                <span class="product-sample w700 italic">Aa</span>
                                            </div>

                                            <div class="col">
                                                <span class="product-title">Sans Serif Bold Italic</span>
                                            </div>
                                            <div class="col-auto">
                                                <span class="product-price-wrapper">
                                                    <span class="product-price">U$D 30.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <?php include('templating/footer.php'); ?>

</body>


<!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>

<!-- WEBFONTLOADER -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/webfont/1.6.28/webfontloader.js"
    integrity="sha256-4O4pS1SH31ZqrSO2A/2QJTVjTPqVe+jnYgOWUVr7EEc=" crossorigin="anonymous"></script>

<script src="./assets/js/app.min.js"></script>

</html>