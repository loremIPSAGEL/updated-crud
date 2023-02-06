// for submit button
document.getElementById("agreement").onchange = function () {
  document.getElementById("submit").disabled = !this.checked;
};
