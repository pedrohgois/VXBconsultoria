function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  if (window.innerWidth < 920) {
  document.getElementById("myNav").style.width = "0%";
  } else {
    return;
  }
}