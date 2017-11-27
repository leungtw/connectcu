<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Get help from other students in the same class as you">
    <meta name="keywords" content="connect cu, study groups, get help with homework">
    <meta name="author" content="Group 2">
    <title>CUConnect | Science</title>
    <link rel="stylesheet" href="./css/Science_style.css">
    <script type="text/javascript" src="./javascript/main_javascript.js"> </script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1> <span class="highlight">CU</span>Connect </h1>
        </div>
        <nav>
          <ul>
            <li> <a href="index.php"> Home </a> </li>
            <li> <a href="math.php"> Math </a> </li>
            <li> <a href="computerscience.php"> Computer Science </a>  </li>
            <li class="current"> <a href="science.php"> Science </a>  </li>
            <li> <a href="english.php"> English </a>  </li>
            <li class="button_1"> <a href="Login.php" >Login</a> </li>
            <li class="button_1"> <a href="SignUp.php">Sign Up</a> </li>
          </ul>
        </nav>
      </div>
    </header>
    <section id="showcase">
      <div class="container">
        

      </div>
    </section>

    <section id="questionbar">
      <div class="container">
        <h1> Ask a question </h1>
        <form onsubmit="return false">
          <select name="Subject" id="idSubject">
            <option value="math"> Math </option>
            <option value="computerscience"> Computer Science </option>
            <option value="science"> Science </option>
            <option value="english"> English </option>
          </select>
          <input id="txtInput" type="text" placeholder="Enter Question">
          <button type="submit" class="button_1" onclick="return vPutValueIntoTextArea()"> Submit Question </button>
        </form>
      </div>
    </section>

    <section id="text_areas">
        <h1> Most Popular </h1>
        <div class="container" id="container1">
        <form>
          <input class="subject" type="text" id="txtSubject1" readonly="readonly" value="">
          <img class="up" id="up1" src="./img/uparrow.png" alt="Up Arrow" height="20" width="20" onclick="vUpVote1()">
          <img class="down" id="down1" src="./img/downarrow.png" alt="Up Arrow" height="20" width="20" onclick="vDownVote1()">
          <input class="vote" type="text" id="txt1" value="0">
        </form>
          <button class="accordion" value=""><output id="ta1"></output> </button>
          <div class="panel">
            <p>Answers and Comments</p>
            <form id="form1" onsubmit="return false">
              <div id="comments1">
                <input id="txtInput" name="myInputs1[]" type="text" placeholder="Enter Answer or Comment" style="width: 75%; margin: 0 0 5px 0">
              </div>
                <button type="submit" class="button_1" onclick="return vAddComments(comments1)" style="width: 10%; margin: 10px 0 10px 0"> Submit </button>
            </form>
          </div>
      </div>

      <div class="container" id="container2">
        <form>
          <input class="subject" type="text" id="txtSubject2" readonly="readonly" value="">
          <img class="up" id="up2" src="./img/uparrow.png" alt="Up Arrow" height="20" width="20" onclick="vUpVote2()">
          <img class="down" id="down2" src="./img/downarrow.png" alt="Up Arrow" height="20" width="20" onclick="vDownVote2()">
          <input class="vote" type="text" id="txt2" value="0">
        </form>
          <button class="accordion"><output id="ta2"></output></button>
          <div class="panel">
            <p>Answers and Comments</p>
            <form id="form2" onsubmit="return false">
              <div id="comments2">
                <input id="txtInput" name="myInputs2[]" type="text" placeholder="Enter Answer or Comment" style="width: 75%; margin: 0 0 5px 0">
              </div>
                <button type="submit" class="button_1" onclick="return vAddComments(comments2)" style="width: 10%; margin: 10px 0 10px 0"> Submit </button>
            </form>
          </div>
      </div>

      <div class="container" id="container3">
        <form>
          <input class="subject" type="text" id="txtSubject3" readonly="readonly" value="">
          <img class="up" id="up3" src="./img/uparrow.png" alt="Up Arrow" height="20" width="20" onclick="vUpVote3()">
          <img class="down" id="down3" src="./img/downarrow.png" alt="Up Arrow" height="20" width="20" onclick="vDownVote3()">
          <input class="vote" type="text" id="txt3" value="0">
        </form>
          <button class="accordion"><output id="ta3"></output></button>
          <div class="panel">
            <p>Answers and Comments</p>
            <form id="form3" onsubmit="return false">
              <div id="comments3">
                <input id="txtInput" name="myInputs3[]" type="text" placeholder="Enter Answer or Comment" style="width: 75%; margin: 0 0 5px 0">
              </div>
                <button type="submit" class="button_1" onclick="return vAddComments(comments3)" style="width: 10%; margin: 10px 0 10px 0"> Submit </button>
            </form>
          </div>
      </div>

      <div class="container" id="container4">
        <form>
          <input class="subject" type="text" id="txtSubject4" readonly="readonly" value="">
          <img class="up" id="up4" src="./img/uparrow.png" alt="Up Arrow" height="20" width="20" onclick="vUpVote4()">
          <img class="down" id="down4" src="./img/downarrow.png" alt="Up Arrow" height="20" width="20" onclick="vDownVote4()">
          <input class="vote" type="text" id="txt4" value="0">
        </form>
          <button class="accordion"><output id="ta4"></output></button>
          <div class="panel">
            <p>Answers and Comments</p>
            <form id="form4" onsubmit="return false">
              <div id="comments4">
                <input id="txtInput" name="myInputs4[]" type="text" placeholder="Enter Answer or Comment" style="width: 75%; margin: 0 0 5px 0">
              </div>
                <button type="submit" class="button_1" onclick="return vAddComments(comments4)" style="width: 10%; margin: 10px 0 10px 0"> Submit </button>
            </form>
          </div>
      </div>

      <div class="container" id="container5">
        <form>
          <input class="subject" type="text" id="txtSubject5" readonly="readonly" value="">
          <img class="up" id="up5" src="./img/uparrow.png" alt="Up Arrow" height="20" width="20" onclick="vUpVote5()">
          <img class="down" id="down5" src="./img/downarrow.png" alt="Up Arrow" height="20" width="20" onclick="vDownVote5()">
          <input class="vote" type="text" id="txt5" value="0">
        </form>
          <button class="accordion"><output id="ta5"></output></button>
          <div class="panel">
            <p>Answers and Comments</p>
            <form id="form5" onsubmit="return false">
              <div id="comments5">
                <input id="txtInput" name="myInputs5[]" type="text" placeholder="Enter Answer or Comment" style="width: 75%; margin: 0 0 5px 0">
              </div>
                <button type="submit" class="button_1" onclick="return vAddComments(comments5)" style="width: 10%; margin: 10px 0 10px 0"> Submit </button>
            </form>
          </div>
      </div>

      <div class="container" id="container"6>
        <form>
          <input class="subject" type="text" id="txtSubject6" readonly="readonly" value="">
          <img class="up" id="up6" src="./img/uparrow.png" alt="Up Arrow" height="20" width="20" onclick="vUpVote6()">
          <img class="down" id="down6" src="./img/downarrow.png" alt="Up Arrow" height="20" width="20" onclick="vDownVote6()">
          <input class="vote" type="text" id="txt6" value="0">
        </form>
          <button class="accordion"><output id="ta6"></output></button>
          <div class="panel">
            <p>Answers and Comments</p>
            <form id="form6" onsubmit="return false">
              <div id="comments6">
                <input id="txtInput" name="myInputs6[]" type="text" placeholder="Enter Answer or Comment" style="width: 75%; margin: 0 0 5px 0">
              </div>
                <button type="submit" class="button_1" onclick="return vAddComments(comments6)" style="width: 10%; margin: 10px 0 10px 0"> Submit </button>
            </form>
          </div>
      </div>

      <div class="container" id="container7">
        <form>
          <input class="subject" type="text" id="txtSubject7" readonly="readonly" value="">
          <img class="up" id="up7" src="./img/uparrow.png" alt="Up Arrow" height="20" width="20" onclick="vUpVote7()">
          <img class="down" id="down7" src="./img/downarrow.png" alt="Up Arrow" height="20" width="20" onclick="vDownVote7()">
          <input class="vote" type="text" id="txt7" value="0">
        </form>
          <button class="accordion"><output id="ta7"></output></button>
          <div class="panel">
            <p>Answers and Comments</p>
            <form id="form7" onsubmit="return false">
              <div id="comments7">
                <input id="txtInput" name="myInputs7[]" type="text" placeholder="Enter Answer or Comment" style="width: 75%; margin: 0 0 5px 0">
              </div>
                <button type="submit" class="button_1" onclick="return vAddComments(comments7)" style="width: 10%; margin: 10px 0 10px 0"> Submit </button>
            </form>
          </div>
      </div>

      <div class="container" id="container8">
        <form>
          <input class="subject" type="text" id="txtSubject8" readonly="readonly" value="">
          <img class="up" id="up8" src="./img/uparrow.png" alt="Up Arrow" height="20" width="20" onclick="vUpVote8()">
          <img class="down" id="down8" src="./img/downarrow.png" alt="Up Arrow" height="20" width="20" onclick="vDownVote8()">
          <input class="vote" type="text" id="txt8" value="0">
        </form>
          <button class="accordion"><output id="ta8"></output></button>
          <div class="panel">
            <p>Answers and Comments</p>
            <form id="form8" onsubmit="return false">
              <div id="comments8">
                <input id="txtInput" name="myInputs8[]" type="text" placeholder="Enter Answer or Comment" style="width: 75%; margin: 0 0 5px 0">
              </div>
                <button type="submit" class="button_1" onclick="return vAddComments(comments8)" style="width: 10%; margin: 10px 0 10px 0"> Submit </button>
            </form>
          </div>
      </div>

      <div class="container" id="container9">
        <form>
          <input class="subject" type="text" id="txtSubject9" readonly="readonly" value="">
          <img class="up" id="up9" src="./img/uparrow.png" alt="Up Arrow" height="20" width="20" onclick="vUpVote9()">
          <img class="down" id="down9" src="./img/downarrow.png" alt="Up Arrow" height="20" width="20" onclick="vDownVote9()">
          <input class="vote" type="text" id="txt9" value="0">
        </form>
          <button class="accordion"><output id="ta9"></output></button>
          <div class="panel">
            <p>Answers and Comments</p>
            <form id="form9" onsubmit="return false">
              <div id="comments9">
                <input id="txtInput" name="myInputs9[]" type="text" placeholder="Enter Answer or Comment" style="width: 75%; margin: 0 0 5px 0">
              </div>
                <button type="submit" class="button_1" onclick="return vAddComments(comments9)" style="width: 10%; margin: 10px 0 10px 0"> Submit </button>
            </form>
          </div>
      </div>

      <div class="container" id="container10">
        <form>
          <input class="subject" type="text" id="txtSubject10" readonly="readonly" value="">
          <img class="up" id="up10" src="./img/uparrow.png" alt="Up Arrow" height="20" width="20" onclick="vUpVote10()">
          <img class="down" id="down10" src="./img/downarrow.png" alt="Up Arrow" height="20" width="20" onclick="vDownVote10()">
          <input class="vote" type="text" id="txt10" value="0">
        </form>
          <button class="accordion"><output id="ta10"></output></button>
          <div class="panel">
            <p>Answers and Comments</p>
            <form id="form10" onsubmit="return false">
              <div id="comments10">
                <input id="txtInput" name="myInputs10[]" type="text" placeholder="Enter Answer or Comment" style="width: 75%; margin: 0 0 5px 0">
              </div>
                <button type="submit" class="button_1" onclick="return vAddComments(comments10)" style="width: 10%; margin: 10px 0 10px 0"> Submit </button>
            </form>
          </div>
      </div>

      </div>
    </section>

    <footer>
      <p> CUConnect, Copyright &copy; 2017 </p>
    </footer>



    <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        }
    }
    </script>



  </body>
</html>
