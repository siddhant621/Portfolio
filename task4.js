document.addEventListener("DOMContentLoaded", function () {
  const scrollBtn = document.getElementById("scrollBtn");
  const progressBar = document.getElementById("progressBar"); 

  
  function toggleScrollBtn() {
    if (
      document.body.scrollTop > 20 ||
      document.documentElement.scrollTop > 20
    ) {
      scrollBtn.style.display = "block";
    } else {
      scrollBtn.style.display = "none";
    }
  }

  
  function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  }

  
  function updateScrollProgress() {
    const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;
    const scrollPercentage = (scrollPosition / scrollHeight) * 100;
    
    if (progressBar) {
      progressBar.style.width = `${scrollPercentage}%`;
    }
  }


  function debounce(func, delay) {
    let timeout;
    return function () {
      clearTimeout(timeout);
      timeout = setTimeout(func, delay);
    };
  }

  
  window.addEventListener("scroll", debounce(function () {
    toggleScrollBtn();
    updateScrollProgress();
  }, 50));

  scrollBtn.addEventListener("click", scrollToTop);

  
  toggleScrollBtn();
  updateScrollProgress();
});
