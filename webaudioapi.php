<?php 
    require_once('header.php');
    define('PAGE', 'Sound');
    include_once("analyticstracking.php"); 
    require_once("navbar.php");
?>
<body>
    <div id="wrap">

    <div class="container" style="max-width:1100px">
  
    <div class="page-header-custom">
        <h1 class="text-left"><span class="glyphicon glyphicon-headphones"></span> Oscilloscope</h1>
    </div>
    <br/>
    <div>
        <p class="lead">
    
            <div style="float: left; display: inline; width: 49%;">
                <canvas id='scope' width=400 height=200></canvas>
                <br>
                <canvas id='spectrum' width=400 height=200></canvas>
            </div>

            <div style="float: left; display: inline; width: 49%;">
                <button id="play" onClick='on()'>On</button>
                <button id='play' onclick='silence()'>Off</button>

                <br/><br/><br/>

                <div>
                    <label for='gain'>Gain</label>
                    <input id='gain' type='range' value='0.5' min='0.0' max='1.0' step='0.01' oninput='gainInp(value)' />
                    <output for='gain' id='gainVal'>0.5</output>
                </div>

                <div>
                    <label for='freq'>Freq</label>
                    <input id='freq' type='range' value='110' min='55' max='4400' step='10' oninput='freqInp(value)' />
                    <output for='freq' id='freqVal'>110</output>
                </div>

                <div>
                    <label for='shape'>Shape</label>
                    <input id='shape' type='range' value='2' min='1' max='4' step='1' oninput='shapeInp(value)' />
                    <output for='shape' id='shapeVal'>2</output>
                </div>
            </div>
        </p> 
    </div>
                
    </div><!--container-->

    <br/>
<script type="text/javascript" src="../js/oscilloscope.js"></script>