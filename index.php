<?php include('php/header.php');?>
<section>
    <h1 id="toolsHeading">Tools</h1>
    <ul id="toolsList">
        <li>Utility
            <ul>
                <li><a href="tools/tally-keeper">Tally Keeper</a></li>
                <li><a href="tools/word-counter">Word Counter</a></li>
            </ul>
      </li>
      <li>Health & Fitness
          <ul>
              <li><a href="tools/bmi-calculator">BMI Calculator</a></li>
              <li><a href="tools/rowing-weight-adjustment-calculator">Rowing Weight Adjustment Calculator</a></li>
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
