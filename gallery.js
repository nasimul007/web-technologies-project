function openTab(evt, tabName) {
   var i, tablinks;
   
   document.getElementById("Log_in").style.display = "none";
   document.getElementById("Register").style.display = "none";
   
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
	
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}



function closeTab(evt, tabName) {
    document.getElementById(tabName).style.display = "none";
	var tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
	document.getElementById("defaultOpen").click();
}