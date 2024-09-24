function scrollTop() {
  window.scrollTo({ top: 0, behavior: "smooth" });
}

document.addEventListener("DOMContentLoaded", () => {
  const blocks = document.querySelectorAll(".scroll-effect");

  const handleScroll = () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    const windowHeight = window.innerHeight;

    blocks.forEach((block) => {
      const blockTop = block.getBoundingClientRect().top + scrollTop;
      if (scrollTop + windowHeight > blockTop + 50) {
        block.classList.add("visible");
      } else {
        block.classList.remove("visible");
      }
    });
  };

  window.addEventListener("scroll", handleScroll);
  handleScroll();
});