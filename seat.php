<!doctype html>
<html lang="zh" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select your favorite seats</title>
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <script src="js/modernizr-custom.js"></script>
</head>
<body>
    <header class="header">
        <?php 
            if (!isset($_GET['id'])) {
                exit(0);
            }
            $id = $_GET['id'];
            print "<div style='display:none' id=\"get_id\">$id</div>";
        ?>
    </header>
    <div class="container">
        <div class="cube">
            <div class="cube__side cube__side--front"></div>
            <div class="cube__side cube__side--back">
                <div class="screen">
                    <div class="video">
                        <video class="video-player" src="media/demo.mp4" preload="auto" poster="media/demo.jpg">
                        </video>
                        <button class="action action--play action--shown" aria-label="Play Video"></button>
                    </div>
                    <div class="intro intro--shown">
                        <div class="intro__side">
                            <h2 class="intro__title">
                                <!-- <span class="intro__up"> <em>presents</em></span> -->
                                <span class="intro__down">Furious 7 <span class="intro__partial"><em>by</em> Universal Picture</span></span>
                            </h2>
                        </div>
                        <div class="intro__side">
                            <button class="action action--seats">Select your favorite seats</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cube__side cube__side--left"></div>
            <div class="cube__side cube__side--right"></div>
            <div class="cube__side cube__side--top"></div>
            <div class="rows rows--large">
                <div class="row">
                    <div data-seat="A1" class="row__seat"></div>
                    <div data-seat="A2" class="row__seat"></div>
                    <div data-seat="A3" class="row__seat"></div>
                    <div data-seat="A4" class="row__seat"></div>
                    <div data-seat="A5" class="row__seat"></div>
                    <div data-seat="A6" class="row__seat"></div>
                    <div data-seat="A7" class="row__seat"></div>
                    <div data-seat="A8" class="row__seat"></div>
                    <div data-seat="A9" class="row__seat"></div>
                    <div data-seat="A10" class="row__seat"></div>
                    <div data-seat="A11" class="row__seat"></div>
                    <div data-seat="A12" class="row__seat"></div>
                    <div data-seat="A13" class="row__seat"></div>
                    <div data-seat="A14" class="row__seat"></div>
                    <div data-seat="A15" class="row__seat"></div>
                    <div data-seat="A16" class="row__seat"></div>
                    <div data-seat="A17" class="row__seat"></div>
                    <div data-seat="A18" class="row__seat"></div>
                </div>
                <div class="row">
                    <div data-seat="B1" class="row__seat"></div>
                    <div data-seat="B2" class="row__seat"></div>
                    <div data-seat="B3" class="row__seat"></div>
                    <div data-seat="B4" class="row__seat"></div>
                    <div data-seat="B5" class="row__seat"></div>
                    <div data-seat="B6" class="row__seat"></div>
                    <div data-seat="B7" class="row__seat"></div>
                    <div data-seat="B8" class="row__seat"></div>
                    <div data-seat="B9" class="row__seat"></div>
                    <div data-seat="B10" class="row__seat"></div>
                    <div data-seat="B11" class="row__seat"></div>
                    <div data-seat="B12" class="row__seat"></div>
                    <div data-seat="B13" class="row__seat"></div>
                    <div data-seat="B14" class="row__seat"></div>
                    <div data-seat="B15" class="row__seat"></div>
                    <div data-seat="B16" class="row__seat"></div>
                    <div data-seat="B17" class="row__seat"></div>
                    <div data-seat="B18" class="row__seat"></div>
                </div>
                <div class="row">
                    <div data-seat="C1" class="row__seat"></div>
                    <div data-seat="C2" class="row__seat"></div>
                    <div data-seat="C3" class="row__seat"></div>
                    <div data-seat="C4" class="row__seat"></div>
                    <div data-seat="C5" class="row__seat"></div>
                    <div data-seat="C6" class="row__seat"></div>
                    <div data-seat="C7" class="row__seat"></div>
                    <div data-seat="C8" class="row__seat"></div>
                    <div data-seat="C9" class="row__seat"></div>
                    <div data-seat="C10" class="row__seat"></div>
                    <div data-seat="C11" class="row__seat"></div>
                    <div data-seat="C12" class="row__seat"></div>
                    <div data-seat="C13" class="row__seat"></div>
                    <div data-seat="C14" class="row__seat"></div>
                    <div data-seat="C15" class="row__seat"></div>
                    <div data-seat="C16" class="row__seat"></div>
                    <div data-seat="C17" class="row__seat"></div>
                    <div data-seat="C18" class="row__seat"></div>
                </div>
                <div class="row">
                    <div data-seat="D1" class="row__seat"></div>
                    <div data-seat="D2" class="row__seat"></div>
                    <div data-seat="D3" class="row__seat"></div>
                    <div data-seat="D4" class="row__seat"></div>
                    <div data-seat="D5" class="row__seat"></div>
                    <div data-seat="D6" class="row__seat"></div>
                    <div data-seat="D7" class="row__seat"></div>
                    <div data-seat="D8" class="row__seat"></div>
                    <div data-seat="D9" class="row__seat"></div>
                    <div data-seat="D10" class="row__seat"></div>
                    <div data-seat="D11" class="row__seat"></div>
                    <div data-seat="D12" class="row__seat"></div>
                    <div data-seat="D13" class="row__seat"></div>
                    <div data-seat="D14" class="row__seat"></div>
                    <div data-seat="D15" class="row__seat"></div>
                    <div data-seat="D16" class="row__seat"></div>
                    <div data-seat="D17" class="row__seat"></div>
                    <div data-seat="D18" class="row__seat"></div>
                </div>
                <div class="row">
                    <div data-seat="E1" class="row__seat"></div>
                    <div data-seat="E2" class="row__seat"></div>
                    <div data-seat="E3" class="row__seat"></div>
                    <div data-seat="E4" class="row__seat"></div>
                    <div data-seat="E5" class="row__seat"></div>
                    <div data-seat="E6" class="row__seat"></div>
                    <div data-seat="E7" class="row__seat"></div>
                    <div data-seat="E8" class="row__seat"></div>
                    <div data-seat="E9" class="row__seat"></div>
                    <div data-seat="E10" class="row__seat"></div>
                    <div data-seat="E11" class="row__seat"></div>
                    <div data-seat="E12" class="row__seat"></div>
                    <div data-seat="E13" class="row__seat"></div>
                    <div data-seat="E14" class="row__seat"></div>
                    <div data-seat="E15" class="row__seat"></div>
                    <div data-seat="E16" class="row__seat"></div>
                    <div data-seat="E17" class="row__seat"></div>
                    <div data-seat="E18" class="row__seat"></div>
                </div>
                <div class="row">
                    <div data-seat="F1" class="row__seat"></div>
                    <div data-seat="F2" class="row__seat"></div>
                    <div data-seat="F3" class="row__seat"></div>
                    <div data-seat="F4" class="row__seat"></div>
                    <div data-seat="F5" class="row__seat"></div>
                    <div data-seat="F6" class="row__seat"></div>
                    <div data-seat="F7" class="row__seat"></div>
                    <div data-seat="F8" class="row__seat"></div>
                    <div data-seat="F9" class="row__seat"></div>
                    <div data-seat="F10" class="row__seat"></div>
                    <div data-seat="F11" class="row__seat"></div>
                    <div data-seat="F12" class="row__seat"></div>
                    <div data-seat="F13" class="row__seat"></div>
                    <div data-seat="F14" class="row__seat"></div>
                    <div data-seat="F15" class="row__seat"></div>
                    <div data-seat="F16" class="row__seat"></div>
                    <div data-seat="F17" class="row__seat"></div>
                    <div data-seat="F18" class="row__seat"></div>
                </div>
                <div class="row">
                    <div data-seat="G1" class="row__seat"></div>
                    <div data-seat="G2" class="row__seat"></div>
                    <div data-seat="G3" class="row__seat"></div>
                    <div data-seat="G4" class="row__seat"></div>
                    <div data-seat="G5" class="row__seat"></div>
                    <div data-seat="G6" class="row__seat"></div>
                    <div data-seat="G7" class="row__seat"></div>
                    <div data-seat="G8" class="row__seat"></div>
                    <div data-seat="G9" class="row__seat"></div>
                    <div data-seat="G10" class="row__seat"></div>
                    <div data-seat="G11" class="row__seat"></div>
                    <div data-seat="G12" class="row__seat"></div>
                    <div data-seat="G13" class="row__seat"></div>
                    <div data-seat="G14" class="row__seat"></div>
                    <div data-seat="G15" class="row__seat"></div>
                    <div data-seat="G16" class="row__seat"></div>
                    <div data-seat="G17" class="row__seat"></div>
                    <div data-seat="G18" class="row__seat"></div>
                </div>
                <div class="row">
                    <div data-seat="H1" class="row__seat"></div>
                    <div data-seat="H2" class="row__seat"></div>
                    <div data-seat="H3" class="row__seat"></div>
                    <div data-seat="H4" class="row__seat"></div>
                    <div data-seat="H5" class="row__seat"></div>
                    <div data-seat="H6" class="row__seat"></div>
                    <div data-seat="H7" class="row__seat"></div>
                    <div data-seat="H8" class="row__seat"></div>
                    <div data-seat="H9" class="row__seat"></div>
                    <div data-seat="H10" class="row__seat"></div>
                    <div data-seat="H11" class="row__seat"></div>
                    <div data-seat="H12" class="row__seat"></div>
                    <div data-seat="H13" class="row__seat"></div>
                    <div data-seat="H14" class="row__seat"></div>
                    <div data-seat="H15" class="row__seat"></div>
                    <div data-seat="H16" class="row__seat"></div>
                    <div data-seat="H17" class="row__seat"></div>
                    <div data-seat="H18" class="row__seat"></div>
                </div>
                <div class="row">
                    <div data-seat="I1" class="row__seat"></div>
                    <div data-seat="I2" class="row__seat"></div>
                    <div data-seat="I3" class="row__seat"></div>
                    <div data-seat="I4" class="row__seat"></div>
                    <div data-seat="I5" class="row__seat"></div>
                    <div data-seat="I6" class="row__seat"></div>
                    <div data-seat="I7" class="row__seat"></div>
                    <div data-seat="I8" class="row__seat"></div>
                    <div data-seat="I9" class="row__seat"></div>
                    <div data-seat="I10" class="row__seat"></div>
                    <div data-seat="I11" class="row__seat"></div>
                    <div data-seat="I12" class="row__seat"></div>
                    <div data-seat="I13" class="row__seat"></div>
                    <div data-seat="I14" class="row__seat"></div>
                    <div data-seat="I15" class="row__seat"></div>
                    <div data-seat="I16" class="row__seat"></div>
                    <div data-seat="I17" class="row__seat"></div>
                    <div data-seat="I18" class="row__seat"></div>
                </div>
                <div class="row">
                    <div data-seat="J1" class="row__seat"></div>
                    <div data-seat="J2" class="row__seat"></div>
                    <div data-seat="J3" class="row__seat"></div>
                    <div data-seat="J4" class="row__seat"></div>
                    <div data-seat="J5" class="row__seat"></div>
                    <div data-seat="J6" class="row__seat"></div>
                    <div data-seat="J7" class="row__seat"></div>
                    <div data-seat="J8" class="row__seat"></div>
                    <div data-seat="J9" class="row__seat"></div>
                    <div data-seat="J10" class="row__seat"></div>
                    <div data-seat="J11" class="row__seat"></div>
                    <div data-seat="J12" class="row__seat"></div>
                    <div data-seat="J13" class="row__seat"></div>
                    <div data-seat="J14" class="row__seat"></div>
                    <div data-seat="J15" class="row__seat"></div>
                    <div data-seat="J16" class="row__seat"></div>
                    <div data-seat="J17" class="row__seat"></div>
                    <div data-seat="J18" class="row__seat"></div>
                </div>
                <div class="row">
                    <div data-seat="K1" class="row__seat"></div>
                    <div data-seat="K2" class="row__seat"></div>
                    <div data-seat="K3" class="row__seat"></div>
                    <div data-seat="K4" class="row__seat"></div>
                    <div data-seat="K5" class="row__seat"></div>
                    <div data-seat="K6" class="row__seat"></div>
                    <div data-seat="K7" class="row__seat"></div>
                    <div data-seat="K8" class="row__seat"></div>
                    <div data-seat="K9" class="row__seat"></div>
                    <div data-seat="K10" class="row__seat"></div>
                    <div data-seat="K11" class="row__seat"></div>
                    <div data-seat="K12" class="row__seat"></div>
                    <div data-seat="K13" class="row__seat"></div>
                    <div data-seat="K14" class="row__seat"></div>
                    <div data-seat="K15" class="row__seat"></div>
                    <div data-seat="K16" class="row__seat"></div>
                    <div data-seat="K17" class="row__seat"></div>
                    <div data-seat="K18" class="row__seat"></div>
                </div>
                <div class="row">
                    <div data-seat="L1" class="row__seat"></div>
                    <div data-seat="L2" class="row__seat"></div>
                    <div data-seat="L3" class="row__seat"></div>
                    <div data-seat="L4" class="row__seat"></div>
                    <div data-seat="L5" class="row__seat"></div>
                    <div data-seat="L6" class="row__seat"></div>
                    <div data-seat="L7" class="row__seat"></div>
                    <div data-seat="L8" class="row__seat"></div>
                    <div data-seat="L9" class="row__seat"></div>
                    <div data-seat="L10" class="row__seat"></div>
                    <div data-seat="L11" class="row__seat"></div>
                    <div data-seat="L12" class="row__seat"></div>
                    <div data-seat="L13" class="row__seat"></div>
                    <div data-seat="L14" class="row__seat"></div>
                    <div data-seat="L15" class="row__seat"></div>
                    <div data-seat="L16" class="row__seat"></div>
                    <div data-seat="L17" class="row__seat"></div>
                    <div data-seat="L18" class="row__seat"></div>
                </div>
                <div class="row">
                    <div data-seat="M1" class="row__seat"></div>
                    <div data-seat="M2" class="row__seat"></div>
                    <div data-seat="M3" class="row__seat"></div>
                    <div data-seat="M4" class="row__seat"></div>
                    <div data-seat="M5" class="row__seat"></div>
                    <div data-seat="M6" class="row__seat"></div>
                    <div data-seat="M7" class="row__seat"></div>
                    <div data-seat="M8" class="row__seat"></div>
                    <div data-seat="M9" class="row__seat"></div>
                    <div data-seat="M10" class="row__seat"></div>
                    <div data-seat="M11" class="row__seat"></div>
                    <div data-seat="M12" class="row__seat"></div>
                    <div data-seat="M13" class="row__seat"></div>
                    <div data-seat="M14" class="row__seat"></div>
                    <div data-seat="M15" class="row__seat"></div>
                    <div data-seat="M16" class="row__seat"></div>
                    <div data-seat="M17" class="row__seat"></div>
                    <div data-seat="M18" class="row__seat"></div>
                </div>
                <div class="row">
                    <div data-seat="N1" class="row__seat"></div>
                    <div data-seat="N2" class="row__seat"></div>
                    <div data-seat="N3" class="row__seat"></div>
                    <div data-seat="N4" class="row__seat"></div>
                    <div data-seat="N5" class="row__seat"></div>
                    <div data-seat="N6" class="row__seat"></div>
                    <div data-seat="N7" class="row__seat"></div>
                    <div data-seat="N8" class="row__seat"></div>
                    <div data-seat="N9" class="row__seat"></div>
                    <div data-seat="N10" class="row__seat"></div>
                    <div data-seat="N11" class="row__seat"></div>
                    <div data-seat="N12" class="row__seat"></div>
                    <div data-seat="N13" class="row__seat"></div>
                    <div data-seat="N14" class="row__seat"></div>
                    <div data-seat="N15" class="row__seat"></div>
                    <div data-seat="N16" class="row__seat"></div>
                    <div data-seat="N17" class="row__seat"></div>
                    <div data-seat="N18" class="row__seat"></div>
                </div>
                <div class="row">
                    <div data-seat="O1" class="row__seat"></div>
                    <div data-seat="O2" class="row__seat"></div>
                    <div data-seat="O3" class="row__seat"></div>
                    <div data-seat="O4" class="row__seat"></div>
                    <div data-seat="O5" class="row__seat"></div>
                    <div data-seat="O6" class="row__seat"></div>
                    <div data-seat="O7" class="row__seat"></div>
                    <div data-seat="O8" class="row__seat"></div>
                    <div data-seat="O9" class="row__seat"></div>
                    <div data-seat="O10" class="row__seat"></div>
                    <div data-seat="O11" class="row__seat"></div>
                    <div data-seat="O12" class="row__seat"></div>
                    <div data-seat="O13" class="row__seat"></div>
                    <div data-seat="O14" class="row__seat"></div>
                    <div data-seat="O15" class="row__seat"></div>
                    <div data-seat="O16" class="row__seat"></div>
                    <div data-seat="O17" class="row__seat"></div>
                    <div data-seat="O18" class="row__seat"></div>
                </div>
                <div class="row">
                    <div data-seat="P1" class="row__seat"></div>
                    <div data-seat="P2" class="row__seat"></div>
                    <div data-seat="P3" class="row__seat"></div>
                    <div data-seat="P4" class="row__seat"></div>
                    <div data-seat="P5" class="row__seat"></div>
                    <div data-seat="P6" class="row__seat"></div>
                    <div data-seat="P7" class="row__seat"></div>
                    <div data-seat="P8" class="row__seat"></div>
                    <div data-seat="P9" class="row__seat"></div>
                    <div data-seat="P10" class="row__seat"></div>
                    <div data-seat="P11" class="row__seat"></div>
                    <div data-seat="P12" class="row__seat"></div>
                    <div data-seat="P13" class="row__seat"></div>
                    <div data-seat="P14" class="row__seat"></div>
                    <div data-seat="P15" class="row__seat"></div>
                    <div data-seat="P16" class="row__seat"></div>
                    <div data-seat="P17" class="row__seat"></div>
                    <div data-seat="P18" class="row__seat"></div>
                </div>
                <div class="row">
                    <div data-seat="Q1" class="row__seat"></div>
                    <div data-seat="Q2" class="row__seat"></div>
                    <div data-seat="Q3" class="row__seat"></div>
                    <div data-seat="Q4" class="row__seat"></div>
                    <div data-seat="Q5" class="row__seat"></div>
                    <div data-seat="Q6" class="row__seat"></div>
                    <div data-seat="Q7" class="row__seat"></div>
                    <div data-seat="Q8" class="row__seat"></div>
                    <div data-seat="Q9" class="row__seat"></div>
                    <div data-seat="Q10" class="row__seat"></div>
                    <div data-seat="Q11" class="row__seat"></div>
                    <div data-seat="Q12" class="row__seat"></div>
                    <div data-seat="Q13" class="row__seat"></div>
                    <div data-seat="Q14" class="row__seat"></div>
                    <div data-seat="Q15" class="row__seat"></div>
                    <div data-seat="Q16" class="row__seat"></div>
                    <div data-seat="Q17" class="row__seat"></div>
                    <div data-seat="Q18" class="row__seat"></div>
                </div>
                <div class="row">
                    <div data-seat="R1" class="row__seat"></div>
                    <div data-seat="R2" class="row__seat"></div>
                    <div data-seat="R3" class="row__seat"></div>
                    <div data-seat="R4" class="row__seat"></div>
                    <div data-seat="R5" class="row__seat"></div>
                    <div data-seat="R6" class="row__seat"></div>
                    <div data-seat="R7" class="row__seat"></div>
                    <div data-seat="R8" class="row__seat"></div>
                    <div data-seat="R9" class="row__seat"></div>
                    <div data-seat="R10" class="row__seat"></div>
                    <div data-seat="R11" class="row__seat"></div>
                    <div data-seat="R12" class="row__seat"></div>
                    <div data-seat="R13" class="row__seat"></div>
                    <div data-seat="R14" class="row__seat"></div>
                    <div data-seat="R15" class="row__seat"></div>
                    <div data-seat="R16" class="row__seat"></div>
                    <div data-seat="R17" class="row__seat"></div>
                    <div data-seat="R18" class="row__seat"></div>
                </div>
            </div>
            <!-- /rows -->
        </div><!-- /cube -->
    </div><!-- /container -->
    <div class="plan">
        <h3 class="plan__title">Seating Plan</h3>
        <div id="seats" class="rows rows--mini">
            <div class="row">
                <div id="A1" class="row__seat tooltip" data-tooltip="A1"></div>
                <div id="A2" class="row__seat tooltip" data-tooltip="A2"></div>
                <div id="A3" class="row__seat tooltip" data-tooltip="A3"></div>
                <div id="A4" class="row__seat tooltip" data-tooltip="A4"></div>
                <div id="A5" class="row__seat tooltip" data-tooltip="A5"></div>
                <div id="A6" class="row__seat tooltip" data-tooltip="A6"></div>
                <div id="A7" class="row__seat tooltip" data-tooltip="A7"></div>
                <div id="A8" class="row__seat tooltip" data-tooltip="A8"></div>
                <div id="A9" class="row__seat tooltip" data-tooltip="A9"></div>
                <div id="A10" class="row__seat tooltip" data-tooltip="A10"></div>
                <div id="A11" class="row__seat tooltip" data-tooltip="A11"></div>
                <div id="A12" class="row__seat tooltip" data-tooltip="A12"></div>
                <div id="A13" class="row__seat tooltip" data-tooltip="A13"></div>
                <div id="A14" class="row__seat tooltip" data-tooltip="A14"></div>
                <div id="A15" class="row__seat tooltip" data-tooltip="A15"></div>
                <div id="A16" class="row__seat tooltip" data-tooltip="A16"></div>
                <div id="A17" class="row__seat tooltip" data-tooltip="A17"></div>
                <div id="A18" class="row__seat tooltip" data-tooltip="A18"></div>
                </div>
                <div class="row">
                <div id="B1" class="row__seat tooltip" data-tooltip="B1"></div>
                <div id="B2" class="row__seat tooltip" data-tooltip="B2"></div>
                <div id="B3" class="row__seat tooltip" data-tooltip="B3"></div>
                <div id="B4" class="row__seat tooltip" data-tooltip="B4"></div>
                <div id="B5" class="row__seat tooltip" data-tooltip="B5"></div>
                <div id="B6" class="row__seat tooltip" data-tooltip="B6"></div>
                <div id="B7" class="row__seat tooltip" data-tooltip="B7"></div>
                <div id="B8" class="row__seat tooltip" data-tooltip="B8"></div>
                <div id="B9" class="row__seat tooltip" data-tooltip="B9"></div>
                <div id="B10" class="row__seat tooltip" data-tooltip="B10"></div>
                <div id="B11" class="row__seat tooltip" data-tooltip="B11"></div>
                <div id="B12" class="row__seat tooltip" data-tooltip="B12"></div>
                <div id="B13" class="row__seat tooltip" data-tooltip="B13"></div>
                <div id="B14" class="row__seat tooltip" data-tooltip="B14"></div>
                <div id="B15" class="row__seat tooltip" data-tooltip="B15"></div>
                <div id="B16" class="row__seat tooltip" data-tooltip="B16"></div>
                <div id="B17" class="row__seat tooltip" data-tooltip="B17"></div>
                <div id="B18" class="row__seat tooltip" data-tooltip="B18"></div>
                </div>
                <div class="row">
                <div id="C1" class="row__seat tooltip" data-tooltip="C1"></div>
                <div id="C2" class="row__seat tooltip" data-tooltip="C2"></div>
                <div id="C3" class="row__seat tooltip" data-tooltip="C3"></div>
                <div id="C4" class="row__seat tooltip" data-tooltip="C4"></div>
                <div id="C5" class="row__seat tooltip" data-tooltip="C5"></div>
                <div id="C6" class="row__seat tooltip" data-tooltip="C6"></div>
                <div id="C7" class="row__seat tooltip" data-tooltip="C7"></div>
                <div id="C8" class="row__seat tooltip" data-tooltip="C8"></div>
                <div id="C9" class="row__seat tooltip" data-tooltip="C9"></div>
                <div id="C10" class="row__seat tooltip" data-tooltip="C10"></div>
                <div id="C11" class="row__seat tooltip" data-tooltip="C11"></div>
                <div id="C12" class="row__seat tooltip" data-tooltip="C12"></div>
                <div id="C13" class="row__seat tooltip" data-tooltip="C13"></div>
                <div id="C14" class="row__seat tooltip" data-tooltip="C14"></div>
                <div id="C15" class="row__seat tooltip" data-tooltip="C15"></div>
                <div id="C16" class="row__seat tooltip" data-tooltip="C16"></div>
                <div id="C17" class="row__seat tooltip" data-tooltip="C17"></div>
                <div id="C18" class="row__seat tooltip" data-tooltip="C18"></div>
                </div>
                <div class="row">
                <div id="D1" class="row__seat tooltip" data-tooltip="D1"></div>
                <div id="D2" class="row__seat tooltip" data-tooltip="D2"></div>
                <div id="D3" class="row__seat tooltip" data-tooltip="D3"></div>
                <div id="D4" class="row__seat tooltip" data-tooltip="D4"></div>
                <div id="D5" class="row__seat tooltip" data-tooltip="D5"></div>
                <div id="D6" class="row__seat tooltip" data-tooltip="D6"></div>
                <div id="D7" class="row__seat tooltip" data-tooltip="D7"></div>
                <div id="D8" class="row__seat tooltip" data-tooltip="D8"></div>
                <div id="D9" class="row__seat tooltip" data-tooltip="D9"></div>
                <div id="D10" class="row__seat tooltip" data-tooltip="D10"></div>
                <div id="D11" class="row__seat tooltip" data-tooltip="D11"></div>
                <div id="D12" class="row__seat tooltip" data-tooltip="D12"></div>
                <div id="D13" class="row__seat tooltip" data-tooltip="D13"></div>
                <div id="D14" class="row__seat tooltip" data-tooltip="D14"></div>
                <div id="D15" class="row__seat tooltip" data-tooltip="D15"></div>
                <div id="D16" class="row__seat tooltip" data-tooltip="D16"></div>
                <div id="D17" class="row__seat tooltip" data-tooltip="D17"></div>
                <div id="D18" class="row__seat tooltip" data-tooltip="D18"></div>
                </div>
                <div class="row">
                <div id="E1" class="row__seat tooltip" data-tooltip="E1"></div>
                <div id="E2" class="row__seat tooltip" data-tooltip="E2"></div>
                <div id="E3" class="row__seat tooltip" data-tooltip="E3"></div>
                <div id="E4" class="row__seat tooltip" data-tooltip="E4"></div>
                <div id="E5" class="row__seat tooltip" data-tooltip="E5"></div>
                <div id="E6" class="row__seat tooltip" data-tooltip="E6"></div>
                <div id="E7" class="row__seat tooltip" data-tooltip="E7"></div>
                <div id="E8" class="row__seat tooltip" data-tooltip="E8"></div>
                <div id="E9" class="row__seat tooltip" data-tooltip="E9"></div>
                <div id="E10" class="row__seat tooltip" data-tooltip="E10"></div>
                <div id="E11" class="row__seat tooltip" data-tooltip="E11"></div>
                <div id="E12" class="row__seat tooltip" data-tooltip="E12"></div>
                <div id="E13" class="row__seat tooltip" data-tooltip="E13"></div>
                <div id="E14" class="row__seat tooltip" data-tooltip="E14"></div>
                <div id="E15" class="row__seat tooltip" data-tooltip="E15"></div>
                <div id="E16" class="row__seat tooltip" data-tooltip="E16"></div>
                <div id="E17" class="row__seat tooltip" data-tooltip="E17"></div>
                <div id="E18" class="row__seat tooltip" data-tooltip="E18"></div>
                </div>
                <div class="row">
                <div id="F1" class="row__seat tooltip" data-tooltip="F1"></div>
                <div id="F2" class="row__seat tooltip" data-tooltip="F2"></div>
                <div id="F3" class="row__seat tooltip" data-tooltip="F3"></div>
                <div id="F4" class="row__seat tooltip" data-tooltip="F4"></div>
                <div id="F5" class="row__seat tooltip" data-tooltip="F5"></div>
                <div id="F6" class="row__seat tooltip" data-tooltip="F6"></div>
                <div id="F7" class="row__seat tooltip" data-tooltip="F7"></div>
                <div id="F8" class="row__seat tooltip" data-tooltip="F8"></div>
                <div id="F9" class="row__seat tooltip" data-tooltip="F9"></div>
                <div id="F10" class="row__seat tooltip" data-tooltip="F10"></div>
                <div id="F11" class="row__seat tooltip" data-tooltip="F11"></div>
                <div id="F12" class="row__seat tooltip" data-tooltip="F12"></div>
                <div id="F13" class="row__seat tooltip" data-tooltip="F13"></div>
                <div id="F14" class="row__seat tooltip" data-tooltip="F14"></div>
                <div id="F15" class="row__seat tooltip" data-tooltip="F15"></div>
                <div id="F16" class="row__seat tooltip" data-tooltip="F16"></div>
                <div id="F17" class="row__seat tooltip" data-tooltip="F17"></div>
                <div id="F18" class="row__seat tooltip" data-tooltip="F18"></div>
                </div>
                <div class="row">
                <div id="G1" class="row__seat tooltip" data-tooltip="G1"></div>
                <div id="G2" class="row__seat tooltip" data-tooltip="G2"></div>
                <div id="G3" class="row__seat tooltip" data-tooltip="G3"></div>
                <div id="G4" class="row__seat tooltip" data-tooltip="G4"></div>
                <div id="G5" class="row__seat tooltip" data-tooltip="G5"></div>
                <div id="G6" class="row__seat tooltip" data-tooltip="G6"></div>
                <div id="G7" class="row__seat tooltip" data-tooltip="G7"></div>
                <div id="G8" class="row__seat tooltip" data-tooltip="G8"></div>
                <div id="G9" class="row__seat tooltip" data-tooltip="G9"></div>
                <div id="G10" class="row__seat tooltip" data-tooltip="G10"></div>
                <div id="G11" class="row__seat tooltip" data-tooltip="G11"></div>
                <div id="G12" class="row__seat tooltip" data-tooltip="G12"></div>
                <div id="G13" class="row__seat tooltip" data-tooltip="G13"></div>
                <div id="G14" class="row__seat tooltip" data-tooltip="G14"></div>
                <div id="G15" class="row__seat tooltip" data-tooltip="G15"></div>
                <div id="G16" class="row__seat tooltip" data-tooltip="G16"></div>
                <div id="G17" class="row__seat tooltip" data-tooltip="G17"></div>
                <div id="G18" class="row__seat tooltip" data-tooltip="G18"></div>
                </div>
                <div class="row">
                <div id="H1" class="row__seat tooltip" data-tooltip="H1"></div>
                <div id="H2" class="row__seat tooltip" data-tooltip="H2"></div>
                <div id="H3" class="row__seat tooltip" data-tooltip="H3"></div>
                <div id="H4" class="row__seat tooltip" data-tooltip="H4"></div>
                <div id="H5" class="row__seat tooltip" data-tooltip="H5"></div>
                <div id="H6" class="row__seat tooltip" data-tooltip="H6"></div>
                <div id="H7" class="row__seat tooltip" data-tooltip="H7"></div>
                <div id="H8" class="row__seat tooltip" data-tooltip="H8"></div>
                <div id="H9" class="row__seat tooltip" data-tooltip="H9"></div>
                <div id="H10" class="row__seat tooltip" data-tooltip="H10"></div>
                <div id="H11" class="row__seat tooltip" data-tooltip="H11"></div>
                <div id="H12" class="row__seat tooltip" data-tooltip="H12"></div>
                <div id="H13" class="row__seat tooltip" data-tooltip="H13"></div>
                <div id="H14" class="row__seat tooltip" data-tooltip="H14"></div>
                <div id="H15" class="row__seat tooltip" data-tooltip="H15"></div>
                <div id="H16" class="row__seat tooltip" data-tooltip="H16"></div>
                <div id="H17" class="row__seat tooltip" data-tooltip="H17"></div>
                <div id="H18" class="row__seat tooltip" data-tooltip="H18"></div>
                </div>
                <div class="row">
                <div id="I1" class="row__seat tooltip" data-tooltip="I1"></div>
                <div id="I2" class="row__seat tooltip" data-tooltip="I2"></div>
                <div id="I3" class="row__seat tooltip" data-tooltip="I3"></div>
                <div id="I4" class="row__seat tooltip" data-tooltip="I4"></div>
                <div id="I5" class="row__seat tooltip" data-tooltip="I5"></div>
                <div id="I6" class="row__seat tooltip" data-tooltip="I6"></div>
                <div id="I7" class="row__seat tooltip" data-tooltip="I7"></div>
                <div id="I8" class="row__seat tooltip" data-tooltip="I8"></div>
                <div id="I9" class="row__seat tooltip" data-tooltip="I9"></div>
                <div id="I10" class="row__seat tooltip" data-tooltip="I10"></div>
                <div id="I11" class="row__seat tooltip" data-tooltip="I11"></div>
                <div id="I12" class="row__seat tooltip" data-tooltip="I12"></div>
                <div id="I13" class="row__seat tooltip" data-tooltip="I13"></div>
                <div id="I14" class="row__seat tooltip" data-tooltip="I14"></div>
                <div id="I15" class="row__seat tooltip" data-tooltip="I15"></div>
                <div id="I16" class="row__seat tooltip" data-tooltip="I16"></div>
                <div id="I17" class="row__seat tooltip" data-tooltip="I17"></div>
                <div id="I18" class="row__seat tooltip" data-tooltip="I18"></div>
                </div>
                <div class="row">
                <div id="J1" class="row__seat tooltip" data-tooltip="J1"></div>
                <div id="J2" class="row__seat tooltip" data-tooltip="J2"></div>
                <div id="J3" class="row__seat tooltip" data-tooltip="J3"></div>
                <div id="J4" class="row__seat tooltip" data-tooltip="J4"></div>
                <div id="J5" class="row__seat tooltip" data-tooltip="J5"></div>
                <div id="J6" class="row__seat tooltip" data-tooltip="J6"></div>
                <div id="J7" class="row__seat tooltip" data-tooltip="J7"></div>
                <div id="J8" class="row__seat tooltip" data-tooltip="J8"></div>
                <div id="J9" class="row__seat tooltip" data-tooltip="J9"></div>
                <div id="J10" class="row__seat tooltip" data-tooltip="J10"></div>
                <div id="J11" class="row__seat tooltip" data-tooltip="J11"></div>
                <div id="J12" class="row__seat tooltip" data-tooltip="J12"></div>
                <div id="J13" class="row__seat tooltip" data-tooltip="J13"></div>
                <div id="J14" class="row__seat tooltip" data-tooltip="J14"></div>
                <div id="J15" class="row__seat tooltip" data-tooltip="J15"></div>
                <div id="J16" class="row__seat tooltip" data-tooltip="J16"></div>
                <div id="J17" class="row__seat tooltip" data-tooltip="J17"></div>
                <div id="J18" class="row__seat tooltip" data-tooltip="J18"></div>
                </div>
                <div class="row">
                <div id="K1" class="row__seat tooltip" data-tooltip="K1"></div>
                <div id="K2" class="row__seat tooltip" data-tooltip="K2"></div>
                <div id="K3" class="row__seat tooltip" data-tooltip="K3"></div>
                <div id="K4" class="row__seat tooltip" data-tooltip="K4"></div>
                <div id="K5" class="row__seat tooltip" data-tooltip="K5"></div>
                <div id="K6" class="row__seat tooltip" data-tooltip="K6"></div>
                <div id="K7" class="row__seat tooltip" data-tooltip="K7"></div>
                <div id="K8" class="row__seat tooltip" data-tooltip="K8"></div>
                <div id="K9" class="row__seat tooltip" data-tooltip="K9"></div>
                <div id="K10" class="row__seat tooltip" data-tooltip="K10"></div>
                <div id="K11" class="row__seat tooltip" data-tooltip="K11"></div>
                <div id="K12" class="row__seat tooltip" data-tooltip="K12"></div>
                <div id="K13" class="row__seat tooltip" data-tooltip="K13"></div>
                <div id="K14" class="row__seat tooltip" data-tooltip="K14"></div>
                <div id="K15" class="row__seat tooltip" data-tooltip="K15"></div>
                <div id="K16" class="row__seat tooltip" data-tooltip="K16"></div>
                <div id="K17" class="row__seat tooltip" data-tooltip="K17"></div>
                <div id="K18" class="row__seat tooltip" data-tooltip="K18"></div>
                </div>
                <div class="row">
                <div id="L1" class="row__seat tooltip" data-tooltip="L1"></div>
                <div id="L2" class="row__seat tooltip" data-tooltip="L2"></div>
                <div id="L3" class="row__seat tooltip" data-tooltip="L3"></div>
                <div id="L4" class="row__seat tooltip" data-tooltip="L4"></div>
                <div id="L5" class="row__seat tooltip" data-tooltip="L5"></div>
                <div id="L6" class="row__seat tooltip" data-tooltip="L6"></div>
                <div id="L7" class="row__seat tooltip" data-tooltip="L7"></div>
                <div id="L8" class="row__seat tooltip" data-tooltip="L8"></div>
                <div id="L9" class="row__seat tooltip" data-tooltip="L9"></div>
                <div id="L10" class="row__seat tooltip" data-tooltip="L10"></div>
                <div id="L11" class="row__seat tooltip" data-tooltip="L11"></div>
                <div id="L12" class="row__seat tooltip" data-tooltip="L12"></div>
                <div id="L13" class="row__seat tooltip" data-tooltip="L13"></div>
                <div id="L14" class="row__seat tooltip" data-tooltip="L14"></div>
                <div id="L15" class="row__seat tooltip" data-tooltip="L15"></div>
                <div id="L16" class="row__seat tooltip" data-tooltip="L16"></div>
                <div id="L17" class="row__seat tooltip" data-tooltip="L17"></div>
                <div id="L18" class="row__seat tooltip" data-tooltip="L18"></div>
                </div>
                <div class="row">
                <div id="M1" class="row__seat tooltip" data-tooltip="M1"></div>
                <div id="M2" class="row__seat tooltip" data-tooltip="M2"></div>
                <div id="M3" class="row__seat tooltip" data-tooltip="M3"></div>
                <div id="M4" class="row__seat tooltip" data-tooltip="M4"></div>
                <div id="M5" class="row__seat tooltip" data-tooltip="M5"></div>
                <div id="M6" class="row__seat tooltip" data-tooltip="M6"></div>
                <div id="M7" class="row__seat tooltip" data-tooltip="M7"></div>
                <div id="M8" class="row__seat tooltip" data-tooltip="M8"></div>
                <div id="M9" class="row__seat tooltip" data-tooltip="M9"></div>
                <div id="M10" class="row__seat tooltip" data-tooltip="M10"></div>
                <div id="M11" class="row__seat tooltip" data-tooltip="M11"></div>
                <div id="M12" class="row__seat tooltip" data-tooltip="M12"></div>
                <div id="M13" class="row__seat tooltip" data-tooltip="M13"></div>
                <div id="M14" class="row__seat tooltip" data-tooltip="M14"></div>
                <div id="M15" class="row__seat tooltip" data-tooltip="M15"></div>
                <div id="M16" class="row__seat tooltip" data-tooltip="M16"></div>
                <div id="M17" class="row__seat tooltip" data-tooltip="M17"></div>
                <div id="M18" class="row__seat tooltip" data-tooltip="M18"></div>
                </div>
                <div class="row">
                <div id="N1" class="row__seat tooltip" data-tooltip="N1"></div>
                <div id="N2" class="row__seat tooltip" data-tooltip="N2"></div>
                <div id="N3" class="row__seat tooltip" data-tooltip="N3"></div>
                <div id="N4" class="row__seat tooltip" data-tooltip="N4"></div>
                <div id="N5" class="row__seat tooltip" data-tooltip="N5"></div>
                <div id="N6" class="row__seat tooltip" data-tooltip="N6"></div>
                <div id="N7" class="row__seat tooltip" data-tooltip="N7"></div>
                <div id="N8" class="row__seat tooltip" data-tooltip="N8"></div>
                <div id="N9" class="row__seat tooltip" data-tooltip="N9"></div>
                <div id="N10" class="row__seat tooltip" data-tooltip="N10"></div>
                <div id="N11" class="row__seat tooltip" data-tooltip="N11"></div>
                <div id="N12" class="row__seat tooltip" data-tooltip="N12"></div>
                <div id="N13" class="row__seat tooltip" data-tooltip="N13"></div>
                <div id="N14" class="row__seat tooltip" data-tooltip="N14"></div>
                <div id="N15" class="row__seat tooltip" data-tooltip="N15"></div>
                <div id="N16" class="row__seat tooltip" data-tooltip="N16"></div>
                <div id="N17" class="row__seat tooltip" data-tooltip="N17"></div>
                <div id="N18" class="row__seat tooltip" data-tooltip="N18"></div>
                </div>
                <div class="row">
                <div id="O1" class="row__seat tooltip" data-tooltip="O1"></div>
                <div id="O2" class="row__seat tooltip" data-tooltip="O2"></div>
                <div id="O3" class="row__seat tooltip" data-tooltip="O3"></div>
                <div id="O4" class="row__seat tooltip" data-tooltip="O4"></div>
                <div id="O5" class="row__seat tooltip" data-tooltip="O5"></div>
                <div id="O6" class="row__seat tooltip" data-tooltip="O6"></div>
                <div id="O7" class="row__seat tooltip" data-tooltip="O7"></div>
                <div id="O8" class="row__seat tooltip" data-tooltip="O8"></div>
                <div id="O9" class="row__seat tooltip" data-tooltip="O9"></div>
                <div id="O10" class="row__seat tooltip" data-tooltip="O10"></div>
                <div id="O11" class="row__seat tooltip" data-tooltip="O11"></div>
                <div id="O12" class="row__seat tooltip" data-tooltip="O12"></div>
                <div id="O13" class="row__seat tooltip" data-tooltip="O13"></div>
                <div id="O14" class="row__seat tooltip" data-tooltip="O14"></div>
                <div id="O15" class="row__seat tooltip" data-tooltip="O15"></div>
                <div id="O16" class="row__seat tooltip" data-tooltip="O16"></div>
                <div id="O17" class="row__seat tooltip" data-tooltip="O17"></div>
                <div id="O18" class="row__seat tooltip" data-tooltip="O18"></div>
                </div>
                <div class="row">
                <div id="P1" class="row__seat tooltip" data-tooltip="P1"></div>
                <div id="P2" class="row__seat tooltip" data-tooltip="P2"></div>
                <div id="P3" class="row__seat tooltip" data-tooltip="P3"></div>
                <div id="P4" class="row__seat tooltip" data-tooltip="P4"></div>
                <div id="P5" class="row__seat tooltip" data-tooltip="P5"></div>
                <div id="P6" class="row__seat tooltip" data-tooltip="P6"></div>
                <div id="P7" class="row__seat tooltip" data-tooltip="P7"></div>
                <div id="P8" class="row__seat tooltip" data-tooltip="P8"></div>
                <div id="P9" class="row__seat tooltip" data-tooltip="P9"></div>
                <div id="P10" class="row__seat tooltip" data-tooltip="P10"></div>
                <div id="P11" class="row__seat tooltip" data-tooltip="P11"></div>
                <div id="P12" class="row__seat tooltip" data-tooltip="P12"></div>
                <div id="P13" class="row__seat tooltip" data-tooltip="P13"></div>
                <div id="P14" class="row__seat tooltip" data-tooltip="P14"></div>
                <div id="P15" class="row__seat tooltip" data-tooltip="P15"></div>
                <div id="P16" class="row__seat tooltip" data-tooltip="P16"></div>
                <div id="P17" class="row__seat tooltip" data-tooltip="P17"></div>
                <div id="P18" class="row__seat tooltip" data-tooltip="P18"></div>
                </div>
                <div class="row">
                <div id="Q1" class="row__seat tooltip" data-tooltip="Q1"></div>
                <div id="Q2" class="row__seat tooltip" data-tooltip="Q2"></div>
                <div id="Q3" class="row__seat tooltip" data-tooltip="Q3"></div>
                <div id="Q4" class="row__seat tooltip" data-tooltip="Q4"></div>
                <div id="Q5" class="row__seat tooltip" data-tooltip="Q5"></div>
                <div id="Q6" class="row__seat tooltip" data-tooltip="Q6"></div>
                <div id="Q7" class="row__seat tooltip" data-tooltip="Q7"></div>
                <div id="Q8" class="row__seat tooltip" data-tooltip="Q8"></div>
                <div id="Q9" class="row__seat tooltip" data-tooltip="Q9"></div>
                <div id="Q10" class="row__seat tooltip" data-tooltip="Q10"></div>
                <div id="Q11" class="row__seat tooltip" data-tooltip="Q11"></div>
                <div id="Q12" class="row__seat tooltip" data-tooltip="Q12"></div>
                <div id="Q13" class="row__seat tooltip" data-tooltip="Q13"></div>
                <div id="Q14" class="row__seat tooltip" data-tooltip="Q14"></div>
                <div id="Q15" class="row__seat tooltip" data-tooltip="Q15"></div>
                <div id="Q16" class="row__seat tooltip" data-tooltip="Q16"></div>
                <div id="Q17" class="row__seat tooltip" data-tooltip="Q17"></div>
                <div id="Q18" class="row__seat tooltip" data-tooltip="Q18"></div>
                </div>
                <div class="row">
                <div id="R1" class="row__seat tooltip" data-tooltip="R1"></div>
                <div id="R2" class="row__seat tooltip" data-tooltip="R2"></div>
                <div id="R3" class="row__seat tooltip" data-tooltip="R3"></div>
                <div id="R4" class="row__seat tooltip" data-tooltip="R4"></div>
                <div id="R5" class="row__seat tooltip" data-tooltip="R5"></div>
                <div id="R6" class="row__seat tooltip" data-tooltip="R6"></div>
                <div id="R7" class="row__seat tooltip" data-tooltip="R7"></div>
                <div id="R8" class="row__seat tooltip" data-tooltip="R8"></div>
                <div id="R9" class="row__seat tooltip" data-tooltip="R9"></div>
                <div id="R10" class="row__seat tooltip" data-tooltip="R10"></div>
                <div id="R11" class="row__seat tooltip" data-tooltip="R11"></div>
                <div id="R12" class="row__seat tooltip" data-tooltip="R12"></div>
                <div id="R13" class="row__seat tooltip" data-tooltip="R13"></div>
                <div id="R14" class="row__seat tooltip" data-tooltip="R14"></div>
                <div id="R15" class="row__seat tooltip" data-tooltip="R15"></div>
                <div id="R16" class="row__seat tooltip" data-tooltip="R16"></div>
                <div id="R17" class="row__seat tooltip" data-tooltip="R17"></div>
                <div id="R18" class="row__seat tooltip" data-tooltip="R18"></div>
                </div>

        </div>
        <!-- /rows -->
        <ul class="legend">
            <li class="legend__item legend__item--free">Available</li>
            <li class="legend__item legend__item--reserved">Sold</li>
            <li class="legend__item legend__item--selected">Selected</li>
        </ul>
        <button class="action action--buy">买　票</button>
    </div><!-- /plan -->
    <button class="action action--lookaround action--disabled" arial-label="Unlook View"></button>
    <script src="js/jQuery/jquery-2.1.1.js"></script>

    <script src="js/classie.js"></script>
    <script src="js/seat.js"></script>
</body>
</html>