<?php
$toolName = "Poker Hands";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>
<article>
    <h1>Poker Hands</h1>
    <br>
    <h4>Royal Flush</h4>
    <div class="pokerHand">🂡🂮🂭🂫🂪</div>
    <p>The highest ranking straight flush - 0.000154%</p>
    <hr>
    <h4>Straight Flush</h4>
    <div class="pokerHand">🃒🃓🃔🃕🃖</div>
    <p>A straight where all of the cards are the same suit - 0.00139%</p>
    <hr>
    <h4>Four of a Kind</h4>
    <div class="pokerHand">🂷🂧🃇🃗🂠</div>
    <p>Four cards of the same rank - 0.0240%</p>
    <hr>
    <h4>Full House</h4>
    <div class="pokerHand">🂤🃔🃄🃓🂣</div>
    <p>Three cards of the same rank + two cards of the same rank - 0.1441%</p>
    <hr>
    <h4>Flush</h4>
    <div class="pokerHand">🂢🂤🂦🂫🂡</div>
    <p>5 cards of the same suit - 0.1965%</p>
    <hr>
    <h4>Straight</h4>
    <div class="pokerHand">🂵🂦🂷🃈🂹</div>
    <p>5 cards of consecutive rank - 0.3925%</p>
    <hr>
    <h4>Three of a Kind</h4>
    <div class="pokerHand">🂵🃅🂥🂠🂠</div>
    <p>3 cards of the same rank - 2.1128%</p>
    <hr>
    <h4>Two Pair</h4>
    <div class="pokerHand">🂤🃔🃓🂣🂠</div>
    <p>2 separate pairs  - 4.7539%</p>
    <hr>
    <h4>Pair</h4>
    <div class="pokerHand">🂨🂸🂠🂠🂠</div>
    <p>2 cards of the same rank - 42.2569%</p>
    <hr>
    <h4>High Card</h4>
    <div class="pokerHand">🂡🂠🂠🂠🂠</div>
    <p>The highest ranking card present - 50.1177%</p>



    <style>
        .pokerHand{
            font-size: 200%;
        }
    <style>

</article>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
