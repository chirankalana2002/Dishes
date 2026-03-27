document.addEventListener("DOMContentLoaded", function () {

  // =====================
  // FAQ TOGGLE
  // =====================
  const questions = document.querySelectorAll(".faq");

  questions.forEach(faq => {
    faq.addEventListener("click", function () {
      const answer = this.querySelector(".answer");

      if (answer.style.display === "block") {
        answer.style.display = "none";
      } else {
        answer.style.display = "block";
      }
    });
  });

  // =====================
  // STAR RATING
  // =====================
  const stars = document.querySelectorAll(".stars span");
  const result = document.getElementById("rating-result");

  stars.forEach(star => {
    star.addEventListener("click", function () {

      let rating = this.getAttribute("data-value");

      result.textContent = "You rated " + rating + " stars ⭐";

      stars.forEach(s => {
        if (s.getAttribute("data-value") <= rating) {
          s.style.color = "gold";
        } else {
          s.style.color = "#ccc";
        }
      });

    });
  });

});