document.addEventListener("scroll", (event) => {
    let pos = window.scrollY;
    let header = document.getElementById('header-ctn');
    if (pos>50) {
        header.classList.add("active");
    }else{
        header.classList.remove("active");
    }
  });