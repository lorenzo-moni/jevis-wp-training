const showMenu = (toggleId, navId) => {
  const toggle = document.getElementById(toggleId);
  const nav = document.getElementById(navId);
  const header = nav.closest("header");

  toggle.addEventListener("click", () => {
    const scrollY = window.scrollY;
    nav.classList.toggle("show-menu");
    toggle.classList.toggle("show-icon");
    if (scrollY < 50) header.classList.toggle("transparent");
  });

  swup.hooks.on("content:replace", () => {
    nav.classList.remove("show-menu");
    toggle.classList.remove("show-icon");
  });
};

const handleResize = () => {
  const width = window.innerWidth;
  const featuredCards = document.querySelectorAll(
    ".experiences-grid .featured-card"
  );

  featuredCards.forEach((el) => {
    if (width <= 768) {
      el.className = "featured-card";
      el.classList.add("vertical");
    } else {
      el.classList = "featured-card";
      el.classList.add(el.dataset["cardType"]);
    }
  });
};

const handleScroll = (navId) => {
  const scrollY = window.scrollY;
  const nav = document.getElementById(navId);

  const header = document.querySelector("header");
  if (scrollY < 50 && !nav.classList.contains("show-menu")) {
    header.classList.add("transparent");
  } else {
    header.classList.remove("transparent");
  }
};

const handleCustomElements = () => {
  const buttons = document.querySelectorAll(".cta.has-arrow");

  buttons.forEach((el) => {
    const iconNode = document.createElement("i");
    iconNode.classList = "ri-arrow-right-s-line ri-xl";
    el.prepend(iconNode);
  });

  const heroCovers = document.querySelectorAll(".hero");
  heroCovers.forEach((el) => {
    const scrollArrowNode = document.createElement("div");
    scrollArrowNode.classList = "scroll-arrow";
    const iconNode = document.createElement("i");
    iconNode.classList = "ri-arrow-down-s-line ri-3x";

    scrollArrowNode.appendChild(iconNode);
    el.appendChild(scrollArrowNode);
  });
};

const options = {
  animateHistoryBrowsing: true,
  animationSelector: '[class*="transition-"]',
  containers: ["#swup"],
  cache: true,
  link_selector:
    'a[href^="/"]:not([data-no-swup]), a[href^="' +
    window.location.origin +
    '"]:not([data-no-swup])',
  skipPopStateHandling: function (event) {
    if (event.state && event.state.source == "swup") {
      return false;
    }
    return true;
  },
};

const swup = new Swup(options);

showMenu("main-nav-toggle", "main-nav-menu");

window.addEventListener("resize", handleResize);
handleResize();
window.addEventListener("scroll", () => handleScroll("main-nav-menu"));
handleScroll("main-nav-menu");

handleCustomElements();

swup.hooks.on("content:replace", () => {
  handleResize();
  handleCustomElements();
});
