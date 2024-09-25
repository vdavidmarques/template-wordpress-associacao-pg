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

document.addEventListener("DOMContentLoaded", function () {
  const cookieMessage = document.getElementById('cookie-message');
  const acceptButton = document.getElementById('accept-cookies');

  if (!cookieMessage) return;

  function acceptCookies() {
      document.cookie = "cookieAccepted=true; path=/; max-age=" + 60 * 60 * 24 * 30;
      localStorage.setItem('cookieAccepted', 'true');
      cookieMessage.style.display = 'none';
  }

  acceptButton.addEventListener('click', acceptCookies);
});