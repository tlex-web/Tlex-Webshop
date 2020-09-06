const nav = document.querySelector(".nav");

let scrollY;

const shrinkNav = (scrollPosition, delay) => {
	setTimeout(() => {
		if (scrollPosition > 0) {
			nav.style.height = "5vh";
		} else {
			nav.style.height = "10vh";
		}
	}, delay);
};

window.addEventListener("scroll", (e) => {
	scrollY = window.scrollY;

	shrinkNav(scrollY, 2000);
});
