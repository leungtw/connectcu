function vPutValueIntoTextArea()
{
  //get string of users input for the question bar
  strInput = document.getElementById('txtInput').value;

  //get value out of drop down menu and put it into a string
  var subjectSelect = document.getElementById('idSubject');
  var selectedText = subjectSelect.options[subjectSelect.selectedIndex].text;

  var textArray = [document.getElementById('ta1'), document.getElementById('ta2'),
  document.getElementById('ta3'), document.getElementById('ta4'), document.getElementById('ta5'),
  document.getElementById('ta6'), document.getElementById('ta7'), document.getElementById('ta8'),
  document.getElementById('ta9'), document.getElementById('ta10')];

  var subjectArray = [document.getElementById('txtSubject1'), document.getElementById('txtSubject2'),
  document.getElementById('txtSubject3'), document.getElementById('txtSubject4'), document.getElementById('txtSubject5'),
  document.getElementById('txtSubject6'), document.getElementById('txtSubject7'), document.getElementById('txtSubject8'),
  document.getElementById('txtSubject9'), document.getElementById('txtSubject10')];

  bStop = false;
  var i = 0;
  while (i < textArray.length && bStop == false)
  {
    if (textArray[i].value == "")
    {
      bStop = true;
      textArray[i].value = strInput;
      subjectArray[i].value = selectedText;
    }
    i++;
  }


  document.getElementById('txtInput').value = "";



  return false;
}

//functions so when an arrow is clicked, it changes the vote
function vUpVote1()
{
  strNumber = document.getElementById('txt1').value;
  iNumber = Number(strNumber);
  iNumber += 1;
  document.getElementById('txt1').value = String(iNumber);
}
function vUpVote2()
{
  strNumber = document.getElementById('txt2').value;
  iNumber = Number(strNumber);
  iNumber += 1;
  document.getElementById('txt2').value = String(iNumber);
}
function vUpVote3()
{
  strNumber = document.getElementById('txt3').value;
  iNumber = Number(strNumber);
  iNumber += 1;
  document.getElementById('txt3').value = String(iNumber);
}
function vUpVote4()
{
  strNumber = document.getElementById('txt4').value;
  iNumber = Number(strNumber);
  iNumber += 1;
  document.getElementById('txt4').value = String(iNumber);
}
function vUpVote5()
{
  strNumber = document.getElementById('txt5').value;
  iNumber = Number(strNumber);
  iNumber += 1;
  document.getElementById('txt5').value = String(iNumber);
}
function vUpVote6()
{
  strNumber = document.getElementById('txt6').value;
  iNumber = Number(strNumber);
  iNumber += 1;
  document.getElementById('txt6').value = String(iNumber);
}
function vUpVote7()
{
  strNumber = document.getElementById('txt7').value;
  iNumber = Number(strNumber);
  iNumber += 1;
  document.getElementById('txt7').value = String(iNumber);
}
function vUpVote8()
{
  strNumber = document.getElementById('txt8').value;
  iNumber = Number(strNumber);
  iNumber += 1;
  document.getElementById('txt8').value = String(iNumber);
}
function vUpVote9()
{
  strNumber = document.getElementById('txt9').value;
  iNumber = Number(strNumber);
  iNumber += 1;
  document.getElementById('txt9').value = String(iNumber);
}
function vUpVote10()
{
  strNumber = document.getElementById('txt10').value;
  iNumber = Number(strNumber);
  iNumber += 1;
  document.getElementById('txt10').value = String(iNumber);
}

//all of the functions for down arrow
function vDownVote1()
{
  strNumber = document.getElementById('txt1').value;
  iNumber = Number(strNumber);
  iNumber -= 1;
  document.getElementById('txt1').value = String(iNumber);
}
function vDownVote2()
{
  strNumber = document.getElementById('txt2').value;
  iNumber = Number(strNumber);
  iNumber -= 1;
  document.getElementById('txt2').value = String(iNumber);
}
function vDownVote3()
{
  strNumber = document.getElementById('txt3').value;
  iNumber = Number(strNumber);
  iNumber -= 1;
  document.getElementById('txt3').value = String(iNumber);
}
function vDownVote4()
{
  strNumber = document.getElementById('txt4').value;
  iNumber = Number(strNumber);
  iNumber -= 1;
  document.getElementById('txt4').value = String(iNumber);
}
function vDownVote5()
{
  strNumber = document.getElementById('txt5').value;
  iNumber = Number(strNumber);
  iNumber -= 1;
  document.getElementById('txt5').value = String(iNumber);
}
function vDownVote6()
{
  strNumber = document.getElementById('txt6').value;
  iNumber = Number(strNumber);
  iNumber -= 1;
  document.getElementById('txt6').value = String(iNumber);
}
function vDownVote7()
{
  strNumber = document.getElementById('txt7').value;
  iNumber = Number(strNumber);
  iNumber -= 1;
  document.getElementById('txt7').value = String(iNumber);
}
function vDownVote8()
{
  strNumber = document.getElementById('txt8').value;
  iNumber = Number(strNumber);
  iNumber -= 1;
  document.getElementById('txt8').value = String(iNumber);
}
function vDownVote9()
{
  strNumber = document.getElementById('txt9').value;
  iNumber = Number(strNumber);
  iNumber -= 1;
  document.getElementById('txt9').value = String(iNumber);
}
function vDownVote10()
{
  strNumber = document.getElementById('txt10').value;
  iNumber = Number(strNumber);
  iNumber -= 1;
  document.getElementById('txt10').value = String(iNumber);
}
function vSort()
{
  var textArray = [document.getElementById('ta1'), document.getElementById('ta2'),
  document.getElementById('ta3'), document.getElementById('ta4'), document.getElementById('ta5'),
  document.getElementById('ta6'), document.getElementById('ta7'), document.getElementById('ta8'),
  document.getElementById('ta9'), document.getElementById('ta10')];

  var subjectArray = [document.getElementById('txtSubject1'), document.getElementById('txtSubject2'),
  document.getElementById('txtSubject3'), document.getElementById('txtSubject4'), document.getElementById('txtSubject5'),
  document.getElementById('txtSubject6'), document.getElementById('txtSubject7'), document.getElementById('txtSubject8'),
  document.getElementById('txtSubject9'), document.getElementById('txtSubject10')];

  var voteArray = [document.getElementById('txt1'), document.getElementById('txt2'),
  document.getElementById('txt3'), document.getElementById('txt4'), document.getElementById('txt5'),
  document.getElementById('txt6'), document.getElementById('txt7'), document.getElementById('txt8'),
  document.getElementById('txt9'), document.getElementById('txt10')];

  //for loop to sort the data so that the highest amount of votes is on top of page
  for (i = 0; i < voteArray.length - 1; i++)
  {
    var iMax = Number(voteArray[i].value);
    for (j = i + 1; j < voteArray.length; j++)
    {
      var iValue = Number(voteArray[j].value);
      if (iValue > iMax)
      {
        iMax = Number(voteArray[j].value);
        iValue = Number(voteArray[i].value);

        var tmpVote = voteArray[i].value;
        voteArray[i].value = String(voteArray[j].value);
        voteArray[j].value = String(tmpVote);

        var tmpText = textArray[i].value;
        textArray[i].value = String(textArray[j].value);
        textArray[j].value = String(tmpText);

        var tmpSubject = subjectArray[i].value;
        subjectArray[i].value = String(subjectArray[j].value);
        subjectArray[j].value = String(tmpSubject);
      }
    }
  }

}

