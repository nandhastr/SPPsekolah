const box = document.getElementById("box");

box.addEventListener("mousemove", moveBox);

function moveBox(event) {
  const mouseX = event.clientX;
  const mouseY = event.clientY;

  box.style.left = mouseX + "px";
  box.style.top = mouseY + "px";
}
