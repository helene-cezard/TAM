const links = document.querySelectorAll(".navbar a");

icons.addEventListener("click", () => {
  header.classList.toggle("active");
  nav.classList.toggle("active");
  icons.classList.toggle("active");
  });

links.forEach((link) => {
  link.addEventListener("click", () => {
    header.classList.remove("active");
    nav.classList.remove("active");
    icons.classList.remove("active");
  });
});