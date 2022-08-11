var messageCount = 0;
var messageTimeout = 3000;
function displayError(errorMessage) {
  var messageObject = "<div class='alertbox' id='alertbox' style='text-align:center'" + messageCount + "'><span class='closebtn' id='closebtn'>&times;</span><strong ><font color='green;'>تمت الاضافة بنجاح !</font></strong></div>"
  document.getElementById("divMessageContainer").innerHTML += messageObject;
  var messageID = messageCount;
  setTimeout(function () { removeElement("alertbox" + messageID); }, messageTimeout);
  closeAlertbox();
}

function removeElement(id) {
  if (document.getElementById(id)) {
    return (elem = document.getElementById(id)).parentNode.removeChild(elem);
  }
}


function closeAlertbox() {
  var close = document.getElementsByClassName("closebtn");
  var i;
  for (i = 0; i < close.length; i++) {
    close[i].onclick = function () {
      var div = this.parentElement;
      div.style.opacity = "0";
      setTimeout(function () {
        div.style.display = "none";
      }, 10);
    }
  }
} 