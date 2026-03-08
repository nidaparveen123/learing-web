<script>
  const modal = document.getElementById("loginModal");
  const openBtn = document.getElementById("openLogin");
  const closeBtn = document.querySelector(".close");

  openBtn.onclick = () => modal.style.display = "flex";
  closeBtn.onclick = () => modal.style.display = "none";

  window.onclick = (e) => {
    if (e.target === modal) {
      modal.style.display = "none";
    }
  };



 

{/* const wrapper = document.getElementById("reviewsWrapper");

document.querySelector(".next").onclick = () => {
wrapper.scrollBy({ left: 300, behavior: 'smooth' });
}

document.querySelector(".prev").onclick = () => {
wrapper.scrollBy({ left: -300, behavior: 'smooth' });
} */}

</script>


