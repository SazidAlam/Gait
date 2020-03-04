function changeColor() {
    document.getElementsByClassName("sbtn")[0].style.color = "red";

    var newelement = document.createElement("div");
    newelement.id = "new"
    var x = "This is the review section"
    newelement.innerHTML = x;

    document.getElementById("banner").after(newelement);
 
  }
  