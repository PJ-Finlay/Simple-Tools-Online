<?php
$toolName = "Notepad";
$keywords = "no login, no log in";
include($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
?>
<article class="tool">
    <div class="toolDescription">
        Notepad text is saved in a <a href="https://en.wikipedia.org/wiki/HTTP_cookie" target="_blank">browser cookie</a> and can be accessed after the tab has been closed as long as cookies are not cleared.
    </div>
    <button id="save">Download</button>
    <button id="copy" data-clipboard-target="#text">Copy</button>
    |
    <input id="fileInput" type="file"></input>
    <br><br>
    <textarea id="text"></textarea>
    <style>
        #text{
            width: 90vw;
            height: 75vh;
        }
    </style>
    <script src="js/js-cookie.js"></script>
    <script src="js/clipboard.min.js"></script>
    <script src="js/file-saver.min.js"></script>
    <script>
    $(document).ready(function(){
        var $text = $("#text");

        //Manage saving to cookie
        var cookieName = "notebookTextCookie";
        function saveToCookie(){
            Cookies.set(cookieName,$text.val());
        }
        function loadFromCookie(){
            var value = Cookies.get(cookieName);
            if(value != undefined){
                $text.val(value);
            }else{
                $text.val('');
            }
        }
        loadFromCookie();
        $text.change(saveToCookie);

        //Manage Copy
        new Clipboard('#copy');

        //Manage File Open
        function loadFile(){
            var selectedFile = document.getElementById('fileInput').files[0];
            if(selectedFile.size <= 500000){
                var reader = new FileReader();
                reader.onload = function() {
                    var $text = $("#text");
                    $text.val(reader.result);
                    $text.change();
                }
                reader.readAsText(selectedFile); //Assumes UTF-8 encoding
            }else{
                alert("Files Must Be Under 500 kB");
            }
        }
        $("#fileInput").change(loadFile);


        //Manage File Save
        $("#save").click(function(){
            var blob = new Blob([$text.val()], {type: "text/plain;charset=utf-8"});
            saveAs(blob, "Notepad.txt");
        });


    });
    </script>
</article>
<?php include($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');?>
