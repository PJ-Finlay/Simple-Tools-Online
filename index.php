<?php include('php/header.php');?>
<article>
    <section id="mainSearchSection">
        <input id="mainSearch" type="search" placeholder="Search"></input>
    </section>
    <section class="linksSection">
        <h1>Tools</h1>
        <ul class="linksList">
            <li>
                <span>Finance</span>
                <ul>
                    <li><a href="tools/compound-interest-calculator">Compound Interest Calculator</a></li>
                </ul>
            </li>
            <li>
                <span>Health & Fitness</span>
                <ul>
                    <li><a href="tools/1-rep-max-calculator">1 Rep Max Calculator</a></li>
                    <li><a href="tools/bmi-calculator">BMI Calculator</a></li>
                    <li><a href="tools/rowing-weight-adjustment-calculator">Rowing Weight Adjustment Calculator</a></li>
                </ul>
            </li>
            <li>
                <span>Math & Science</span>
                <ul>
                    <li><a href="tools/binary-decimal-converter">Binary Decimal Converter</a></li>
                    <li><a href="tools/descriptive-statistics-calculator">Descriptive Statistics Calculator</a></li>
                    <li><a href="tools/number-base-converter">Number Base Converter</a></li>
                    <li><a href="tools/percent-change-calculator">Percent Change Calculator</a></li>
                    <li><a href="tools/quadratic-equation-solver">Quadratic Equation Solver</a></li>
                <span></ul>
            </li>
            <li>
                <span>Other</span>
                <ul>
                    <li><a href="tools/caesar-cipher-generator">Caesar Cipher Generator</a></li>
                    <li><a href="tools/notepad">Notepad</a></li>
                    <li><a href="tools/password-generator">Password Generator</a></li>
                    <li><a href="tools/random-number-generator">Random Number Generator</a></li>
                    <li><a href="tools/roman-numeral-converter">Roman Numeral Converter</a></li>
                    <li><a href="tools/tally-keeper">Tally Keeper</a></li>
                    <li><a href="tools/tip-calculator">Tip Calculator</a></li>
                </ul>
            </li>
            <li>
                <span>Time Tools</span>
                <ul>
                    <li><a href="tools/clock">Clock</a></li>
                    <li><a href="tools/time-calculator">Time Calculator</a></li>
                    <li><a href="tools/stopwatch">Stopwatch</a></li>
                </ul>
            </li>
            <li>
                <span>Text</span>
                <ul>
                    <li><a href="tools/capitalize-first-letter-of-every-word">Capitalize First Letter of Every Word</a></li>
                    <li><a href="tools/convert-to-lower-case">Convert to Lower Case</a></li>
                    <li><a href="tools/convert-to-sentence-case">Convert to Sentence Case</a></li>
                    <li><a href="tools/convert-to-upper-case">Convert to Upper Case</a></li>
                    <li><a href="tools/find-and-replace-text">Find and Replace Text</a></li>
                    <li><a href="tools/word-counter">Word Counter</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <section class="linksSection">
        <h1>Reference</h1>
        <ul class="linksList">
            <li>
                <span>Math & Science</span>
                <ul>
                    <li><a href="reference/periodic-table-of-elements">Periodic Table of Elements</a></li>
                </ul>
            </li>
            <li>
                <span>Other</span>
                <ul>
                    <li><a href="reference/morse-code">Morse Code</a></li>
                    <li><a href="reference/poker-hands">Poker Hands</a></li>
                </ul>
            </li>
            <li>
                <span>Technology</span>
                <ul>
                    <li><a href="reference/ansii-table">ANSII Table</a></li>
                    <li><a href="reference/resistor-color-code">Resistor Color Code</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <style>
    section{
        font-size: xx-large;
    }
    .linksList > li{
        margin-bottom: 1em;
        list-style-type: none;
        font-size: x-large;
    }
    .linksList > li > ul > li{
        list-style-type: disc;
        font-size: large;
        margin: .5em;
    }
    </style>
    <script>
    //Handle search
    var search = $("#mainSearch");
    search.on('keydown change input',function(){
        var links = $(".linksList > li > ul > li");
        var titles = $(".linksList > li > span,.linksSection > h1");
        titles.show();
        links.show();
        if(search.val().length > 0){
            titles.hide();
            links.each(function(){
                var title = $(this).text().toLowerCase();
                var searchKey = search.val().toLowerCase();
                if(!title.includes(searchKey)){
                    $(this).hide();
                }
            })
        }
    });
    </script>
</article>
<?php include('php/footer.php');?>
