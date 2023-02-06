document.getElementById("reg-form").addEventListener("load", showPage(1));

function showPage(pageNumber) {
  var pages = document.getElementsByClassName("page");
  for (var i = 0; i < pages.length; i++) {
    pages[i].style.display = "none";
  }
  document.getElementById("page" + pageNumber).style.display = "block";
}
