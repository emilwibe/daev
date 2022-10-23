{
  const toggle80s = document.getElementById("toggle-mode-80s");
  const toggleDark = document.getElementById("mode-toggle-dark");

  if (toggle80s) {
    toggle80s.addEventListener(
      "click",
      function () {
        document.body.classList.remove("mode-dark");
        document.body.classList.toggle("mode-80s");

        if (document.body.classList.contains("mode-80s")) {
          localStorage.setItem("ew_daev_mode", "mode-80s");
        } else {
          localStorage.setItem("ew_daev_mode", "");
        }
      },
      false
    );
  }

  toggleDark.addEventListener(
    "click",
    function () {
      document.body.classList.toggle("mode-dark");
      document.body.classList.remove("mode-80s");

      if (document.body.classList.contains("mode-dark")) {
        localStorage.setItem("ew_daev_mode", "mode-dark");
      } else {
        localStorage.setItem("ew_daev_mode", "");
      }
    },
    false
  );
}
