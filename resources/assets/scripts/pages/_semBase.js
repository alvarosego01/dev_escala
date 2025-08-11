document.addEventListener("DOMContentLoaded", function () {
  var questions = document.querySelectorAll(".faq-question");
  questions.forEach(function (btn) {
    btn.addEventListener("click", function () {
      var answer = btn.nextElementSibling;
      var arrow = btn.querySelector(".faq-arrow");
      var svg = arrow ? arrow.querySelector("svg") : null;
      var isOpen = answer.style.display === "block";
      // Close all answers and reset arrows
      document.querySelectorAll(".faq-answer").forEach(function (a) {
        a.style.display = "none";
      });
      document.querySelectorAll(".faq-arrow").forEach(function (ar) {
        ar.style.transform = "rotate(0deg)";
      });
      // Toggle current
      if (!isOpen) {
        answer.style.display = "block";
        if (arrow) arrow.style.transform = "rotate(180deg)";
      } else {
        answer.style.display = "none";
        if (arrow) arrow.style.transform = "rotate(0deg)";
      }
    });
  });
});
