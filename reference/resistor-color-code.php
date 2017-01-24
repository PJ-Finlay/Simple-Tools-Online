<?php
$toolName = "Resistor Color Code";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>
<article>
    <h1>Resistor Color Code</h1>
    <table>
        <tr>
            <th>Color</th>
            <th>1<sup>st</sup> band</th>
            <th>2<sup>nd</sup> band</th>
            <th>3<sup>rd</sup> band</th>
            <th>Multiplier</th>
            <th>Tolerance</th>
        </tr>
        <tr style="background-color:BlACK;color:WHITE">
              <td>Black</td>
              <td>0</td>
              <td>0</td>
              <td>0</td>
              <td>1Ω</td>
              <td></td>
          </tr>
       <tr style="background-color:BROWN">
              <td>Brown</td>
              <td>1</td>
              <td>1</td>
              <td>1</td>
              <td>10Ω</td>
              <td>±1%</td>
          </tr>
       <tr style="background-color:RED">
              <td>Red</td>
              <td>2</td>
              <td>2</td>
              <td>2</td>
              <td>100Ω</td>
              <td>±2%</td>
          </tr>
       <tr style="background-color:ORANGE">
              <td>Orange</td>
              <td>3</td>
              <td>3</td>
              <td>3</td>
              <td>1kΩ</td>
              <td></td>
          </tr>
       <tr style="background-color:YELLOW">
              <td>Yellow</td>
              <td>4</td>
              <td>4</td>
              <td>4</td>
              <td>10kΩ</td>
              <td></td>
          </tr>
       <tr style="background-color:GREEN">
              <td>Green</td>
              <td>5</td>
              <td>5</td>
              <td>5</td>
              <td>100kΩ</td>
              <td>±0.5%</td>
          </tr>
       <tr style="background-color:BLUE">
              <td>Blue</td>
              <td>6</td>
              <td>6</td>
              <td>6</td>
              <td>1MΩ</td>
              <td>±0.25%</td>
          </tr>
       <tr style="background-color:VIOLET">
              <td>Violet</td>
              <td>7</td>
              <td>7</td>
              <td>7</td>
              <td>10MΩ</td>
              <td>±0.1%</td>
          </tr>
       <tr style="background-color:GRAY">
              <td>Gray</td>
              <td>8</td>
              <td>8</td>
              <td>8</td>
              <td>100MΩ</td>
              <td>±0.05%</td>
          </tr>
       <tr style="background-color:WHITE">
              <td>White</td>
              <td>9</td>
              <td>9</td>
              <td>9</td>
              <td>1GΩ</td>
              <td></td>
          </tr>
       <tr style="background-color:GOLD">
              <td>Gold</td>
              <td></td>
              <td></td>
              <td></td>
              <td>100mΩ</td>
              <td>±5%</td>
          </tr>
       <tr style="background-color:SILVER">
              <td>Silver</td>
              <td></td>
              <td></td>
              <td></td>
              <td>10mΩ</td>
              <td>±10%</td>
          </tr>
    </table>
</article>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
