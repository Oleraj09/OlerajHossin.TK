ScrollReveal({ reset: true });
ScrollReveal().reveal(".contents", {
    duration: 2000,
    origin: "left",
    distance: "300px",
    easing: "ease-in-out"
});
// ScrollReveal().reveal(".image", {
//     duration: 3000,
//     origin: "right",
//     distance: "200px",
//     easing: "ease-in-out"
// });
ScrollReveal().reveal(".image", {
    duration: 2000,
    origin: "bottom",
    distance: "100px",
    easing: "cubic-bezier(.37,.01,.74,1)",
    opacity: 0.3,
    scale: 0.5
  });