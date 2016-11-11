<?php include('php/header.php');?>
<section>
    <h1 id="toolsHeading">Tools</h1>
    <ul id="toolsList">
        <li>
            Finance
            <ul>
                <li><a href="tools/compound-interest-calculator">Compound Interest Calculator</a></li>
            </ul>
        </li>
        <li>
            Health & Fitness
            <ul>
                <li><a href="tools/1-rep-max-calculator">1 Rep Max Calculator</a></li>
                <li><a href="tools/bmi-calculator">BMI Calculator</a></li>
                <li><a href="tools/rowing-weight-adjustment-calculator">Rowing Weight Adjustment Calculator</a></li>
            </ul>
        </li>
        <li>
            Math & Science
            <ul>
                <li><a href="tools/percent-change-calculator">Percent Change Calculator</a></li>
                <li><a href="tools/quadratic-equation-solver">Quadratic Equation Solver</a></li>
            </ul>
        </li>
        <li>
            Text
            <ul>
                <li><a href="tools/capitalize-first-letter-of-every-word">Capitalize First Letter of Every Word</a></li>
                <li><a href="tools/convert-to-lower-case">Convert to Lower Case</a></li>
                <li><a href="tools/convert-to-sentence-case">Convert to Sentence Case</a></li>
                <li><a href="tools/convert-to-upper-case">Convert to Upper Case</a></li>
                <li><a href="tools/find-and-replace-text">Find and Replace Text</a></li>
            </ul>
        </li>
        <li>
            Utility
            <ul>
                <li><a href="tools/random-number-generator">Random Number Generator</a></li>
                <li><a href="tools/tally-keeper">Tally Keeper</a></li>
                <li><a href="tools/time-calculator">Time Calculator</a></li>
                <li><a href="tools/tip-calculator">Tip Calculator</a></li>
                <li><a href="tools/word-counter">Word Counter</a></li>
            </ul>
        </li>
    </ul>
    <style>
    #toolsHeading{
        font-size: xx-large;
    }
    #toolsList > li{
        margin-bottom: 1em;
        list-style-type: none;
        font-size: x-large;
    }
    #toolsList > li > ul > li{
        list-style-type: disc;
        font-size: large;
        margin: .5em;
    }
    </style>
</section>
<?php include('php/footer.php');?>
