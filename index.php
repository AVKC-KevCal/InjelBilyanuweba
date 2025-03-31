<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="./styles.css">
        
    </head> 
    <body>
        <div class="container">
            <div >
                <h1 class = "header_text">Hello Injel Cantik^^</h1>
                <h1 class = "header_text">Pwede ba tayo mag lawo po ml? HAHAHAHA</h1>
                <h1 class = "header_text">Puh lease?? HADUG!!^^</h1>
            </div>
            <div class="gif_container">
                <div class="tenor-gif-embed" data-postid="8753972" data-share-method="host" data-aspect-ratio="1.2585" data-width="100%"><a href="https://tenor.com/view/snoopy-please-do-gif-8753972">Snoopy Please Do GIF</a>from <a href="https://tenor.com/search/snoopy-gifs">Snoopy GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
            </div>
            <div class = "buttons">
                <button class="btn" id = "yesButton" onclick="nextPage()">Yes</button>
                <button class="btn" id="noButton" onmouseover="moveButton()" onclick="moveButton()">No</button>
                <script>
                    function nextPage() {
                        window.location.href = "yes.html";
                    }
                    
                    function moveButton() {
                        var x = Math.random() * (window.innerWidth - document.getElementById('noButton').offsetWidth) - 85;
                        var y = Math.random() * (window.innerHeight - document.getElementById('noButton').offsetHeight) - 48;
                        document.getElementById('noButton').style.left = `${x}px`;
                        document.getElementById('noButton').style.top = `${y}px`;
                    }
                </script> 
            </div>
        </div>
       
    </body> 
</html>
