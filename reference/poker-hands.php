<?php
$toolName = "Poker Hands";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>
<article>
    <h1>Poker Hands</h1>
    <br>
    <h4>Royal Flush</h4>
    <div class="pokerHand">
        <img src="images/playingCards/AS.svg" alt="🂡">
        <img src="images/playingCards/KS.svg" alt="🂮">
        <img src="images/playingCards/QS.svg" alt="🂭">
        <img src="images/playingCards/JS.svg" alt="🂫">
        <img src="images/playingCards/10S.svg" alt="🂪">
    </div>
    <p>The highest ranking straight flush - 0.000154%</p>
    <hr>
    <h4>Straight Flush</h4>
    <div class="pokerHand">
        <img src="images/playingCards/2C.svg" alt="🃒">
        <img src="images/playingCards/3C.svg" alt="🃓">
        <img src="images/playingCards/4C.svg" alt="🃔">
        <img src="images/playingCards/5C.svg" alt="🃕">
        <img src="images/playingCards/6C.svg" alt="🃖">
    </div>
    <p>A straight where all of the cards are the same suit - 0.00139%</p>
    <hr>
    <h4>Four of a Kind</h4>
    <div class="pokerHand">
        <img src="images/playingCards/7H.svg" alt="🂷">
        <img src="images/playingCards/7S.svg" alt="🂧">
        <img src="images/playingCards/7D.svg" alt="🃇">
        <img src="images/playingCards/7C.svg" alt="🃗">
        <img src="images/playingCards/back.svg" alt="🂠">
    </div>
    <p>Four cards of the same rank - 0.0240%</p>
    <hr>
    <h4>Full House</h4>
    <div class="pokerHand">
        <img src="images/playingCards/4S.svg" alt="🂤">
        <img src="images/playingCards/4C.svg" alt="🃔">
        <img src="images/playingCards/4D.svg" alt="🃄">
        <img src="images/playingCards/3C.svg" alt="🃓">
        <img src="images/playingCards/3S.svg" alt="🂣">
    </div>
    <p>Three cards of the same rank + two cards of the same rank - 0.1441%</p>
    <hr>
    <h4>Flush</h4>
    <div class="pokerHand">
        <img src="images/playingCards/2S.svg" alt="🂢">
        <img src="images/playingCards/4S.svg" alt="🂤">
        <img src="images/playingCards/6S.svg" alt="🂦">
        <img src="images/playingCards/JS.svg" alt="🂫">
        <img src="images/playingCards/AS.svg" alt="🂡">
    </div>
    <p>5 cards of the same suit - 0.1965%</p>
    <hr>
    <h4>Straight</h4>
    <div class="pokerHand">
        <img src="images/playingCards/5H.svg" alt="🂵">
        <img src="images/playingCards/6S.svg" alt="🂦">
        <img src="images/playingCards/7H.svg" alt="🂷">
        <img src="images/playingCards/8D.svg" alt="🃈">
        <img src="images/playingCards/9H.svg" alt="🂹">
    </div>
    <p>5 cards of consecutive rank - 0.3925%</p>
    <hr>
    <h4>Three of a Kind</h4>
    <div class="pokerHand">
        <img src="images/playingCards/5H.svg" alt="🂵">
        <img src="images/playingCards/5D.svg" alt="🃅">
        <img src="images/playingCards/5S.svg" alt="🂥">
        <img src="images/playingCards/back.svg" alt="🂠">
        <img src="images/playingCards/back.svg" alt="🂠">
    </div>
    <p>3 cards of the same rank - 2.1128%</p>
    <hr>
    <h4>Two Pair</h4>
    <div class="pokerHand">
        <img src="images/playingCards/4S.svg" alt="🂤">
        <img src="images/playingCards/4C.svg" alt="🃔">
        <img src="images/playingCards/3C.svg" alt="🃓">
        <img src="images/playingCards/3S.svg" alt="🂣">
        <img src="images/playingCards/back.svg" alt="🂠">
    </div>
    <p>2 separate pairs  - 4.7539%</p>
    <hr>
    <h4>Pair</h4>
    <div class="pokerHand">
        <img src="images/playingCards/8S.svg" alt="🂨">
        <img src="images/playingCards/8H.svg" alt="🂸">
        <img src="images/playingCards/back.svg" alt="🂠">
        <img src="images/playingCards/back.svg" alt="🂠">
        <img src="images/playingCards/back.svg" alt="🂠">
    </div>
    <p>2 cards of the same rank - 42.2569%</p>
    <hr>
    <h4>High Card</h4>
    <div class="pokerHand">
        <img src="images/playingCards/AS.svg" alt="🂡">
        <img src="images/playingCards/back.svg" alt="🂠">
        <img src="images/playingCards/back.svg" alt="🂠">
        <img src="images/playingCards/back.svg" alt="🂠">
        <img src="images/playingCards/back.svg" alt="🂠">
    </div>
    <p>The highest ranking card present - 50.1177%</p>



    <style>
        .pokerHand > img{
            width: 4em;
        }
    <style>

</article>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
