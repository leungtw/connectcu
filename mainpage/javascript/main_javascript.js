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
  if (document.getElementById('ta1').value != "")
  {
    strNumber = document.getElementById('txt1').value;
    iNumber = Number(strNumber);
    iNumber += 1;
    document.getElementById('txt1').value = String(iNumber);
  }

  vSort();
}
function vUpVote2()
{
  if (document.getElementById('ta2').value != "")
  {
    strNumber = document.getElementById('txt2').value;
    iNumber = Number(strNumber);
    iNumber += 1;
    document.getElementById('txt2').value = String(iNumber);
  }

  vSort();
}
function vUpVote3()
{
  if (document.getElementById('ta3').value != "")
  {
    strNumber = document.getElementById('txt3').value;
    iNumber = Number(strNumber);
    iNumber += 1;
    document.getElementById('txt3').value = String(iNumber);
  }

  vSort();
}
function vUpVote4()
{
  if (document.getElementById('ta4').value != "")
  {
    strNumber = document.getElementById('txt4').value;
    iNumber = Number(strNumber);
    iNumber += 1;
    document.getElementById('txt4').value = String(iNumber);
  }

  vSort();
}
function vUpVote5()
{
  if (document.getElementById('ta5').value != "")
  {
    strNumber = document.getElementById('txt5').value;
    iNumber = Number(strNumber);
    iNumber += 1;
    document.getElementById('txt5').value = String(iNumber);
  }

  vSort();
}
function vUpVote6()
{
  if (document.getElementById('ta6').value != "")
  {
    strNumber = document.getElementById('txt6').value;
    iNumber = Number(strNumber);
    iNumber += 1;
    document.getElementById('txt6').value = String(iNumber);
  }

  vSort();
}
function vUpVote7()
{
  if (document.getElementById('ta7').value != "")
  {
    strNumber = document.getElementById('txt7').value;
    iNumber = Number(strNumber);
    iNumber += 1;
    document.getElementById('txt7').value = String(iNumber);
  }

  vSort();
}
function vUpVote8()
{
  if (document.getElementById('ta8').value != "")
  {
    strNumber = document.getElementById('txt8').value;
    iNumber = Number(strNumber);
    iNumber += 1;
    document.getElementById('txt8').value = String(iNumber);
  }

  vSort();
}
function vUpVote9()
{
  if (document.getElementById('ta9').value != "")
  {
    strNumber = document.getElementById('txt9').value;
    iNumber = Number(strNumber);
    iNumber += 1;
    document.getElementById('txt9').value = String(iNumber);
  }

  vSort();
}
function vUpVote10()
{
  if (document.getElementById('ta10').value != "")
  {
    strNumber = document.getElementById('txt10').value;
    iNumber = Number(strNumber);
    iNumber += 1;
    document.getElementById('txt10').value = String(iNumber);
  }

  vSort();
}

//all of the functions for down arrow
function vDownVote1()
{
  if (document.getElementById('ta1').value != "")
  {
    strNumber = document.getElementById('txt1').value;
    iNumber = Number(strNumber);
    iNumber -= 1;
    document.getElementById('txt1').value = String(iNumber);
  }

  vSort();
}
function vDownVote2()
{
  if (document.getElementById('ta2').value != "")
  {
    strNumber = document.getElementById('txt2').value;
    iNumber = Number(strNumber);
    iNumber -= 1;
    document.getElementById('txt2').value = String(iNumber);
  }

  vSort();
}
function vDownVote3()
{
  if (document.getElementById('ta3').value != "")
  {
    strNumber = document.getElementById('txt3').value;
    iNumber = Number(strNumber);
    iNumber -= 1;
    document.getElementById('txt3').value = String(iNumber);
  }

  vSort();
}
function vDownVote4()
{
  if (document.getElementById('ta4').value != "")
  {
    strNumber = document.getElementById('txt4').value;
    iNumber = Number(strNumber);
    iNumber -= 1;
    document.getElementById('txt4').value = String(iNumber);
  }

  vSort();
}
function vDownVote5()
{
  if (document.getElementById('ta5').value != "")
  {
    strNumber = document.getElementById('txt5').value;
    iNumber = Number(strNumber);
    iNumber -= 1;
    document.getElementById('txt5').value = String(iNumber);
  }

  vSort();
}
function vDownVote6()
{
  if (document.getElementById('ta6').value != "")
  {
    strNumber = document.getElementById('txt6').value;
    iNumber = Number(strNumber);
    iNumber -= 1;
    document.getElementById('txt6').value = String(iNumber);
  }

  vSort();
}
function vDownVote7()
{
  if (document.getElementById('ta7').value != "")
  {
    strNumber = document.getElementById('txt7').value;
    iNumber = Number(strNumber);
    iNumber -= 1;
    document.getElementById('txt7').value = String(iNumber);
  }

  vSort();
}
function vDownVote8()
{
  if (document.getElementById('ta8').value != "")
  {
    strNumber = document.getElementById('txt8').value;
    iNumber = Number(strNumber);
    iNumber -= 1;
    document.getElementById('txt8').value = String(iNumber);
  }

  vSort();
}
function vDownVote9()
{
  if (document.getElementById('ta9').value != "")
  {
    strNumber = document.getElementById('txt9').value;
    iNumber = Number(strNumber);
    iNumber -= 1;
    document.getElementById('txt9').value = String(iNumber);
  }

  vSort();
}
function vDownVote10()
{
  if (document.getElementById('ta10').value != "")
  {
    strNumber = document.getElementById('txt10').value;
    iNumber = Number(strNumber);
    iNumber -= 1;
    document.getElementById('txt10').value = String(iNumber);
  }

  vSort();
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

  var divArray = ['form1', 'form2', 'form3', 'form4', 'form5', 'form6',
   'form7', 'form8', 'form9', 'form10',]

  var divArray2 = ['#form1', '#form2', '#form3', '#form4', '#form5', '#form6',
   '#form7', '#form8', '#form9', '#form10']

  //for loop to sort the data so that the highest amount of votes is on top of page
  for (i = 0; i < voteArray.length; i++)
  {
    var iMax = Number(voteArray[i].value);
    for (j = i + 1; j < voteArray.length; j++)
    {
      var iValue = Number(voteArray[j].value);
      if (iValue > iMax)
      {
        var tmp = divArray2[i].attributes;
        divArray[i].attributes = divArray[j].attributes;
        divArray[j].attributes = tmp;
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

        var i1 = $(divArray2[i]);
        var i2 = $(divArray2[j]);

        var clone1 = i1.clone();
        var clone2 = i2.clone();

        (i1).replaceWith((clone2));
        (i2).replaceWith((clone1));

        $(divArray2[i]).attr("id", divArray[j]);
        $(divArray2[j]).attr("id", divArray[i]);

      }
    }
  }

}

function vAddComments(divName)
{
  var newInput = document.createElement("input");
  newInput.type = "text";
  newInput.placeholder = "Enter Answer or Comment";
  newInput.style = "width: 75%; margin: 5px 0 5px 0";
  divName.appendChild(newInput);
}





