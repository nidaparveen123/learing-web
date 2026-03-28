<script>
const toggleBtn = document.getElementById("theme-toggle");

// Load saved theme
if (localStorage.getItem("theme") === "dark") {
  document.body.classList.add("dark");
}

toggleBtn.addEventListener("click", () => {
  document.body.classList.toggle("dark");

  if (document.body.classList.contains("dark")) {
    localStorage.setItem("theme", "dark");
  } else {
    localStorage.setItem("theme", "light");
  }
});

document.getElementById("signupForm").addEventListener("submit", function(e) {
  e.preventDefault(); // stop page reload

  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const contact = document.getElementById("contact").value;

  console.log(name, email, contact);

  // Send data to backend
  fetch("/signup", {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify({ name, email, contact })
  })
  .then(res => res.json())
  .then(data => {
    alert("Form submitted successfully!");
  })
  .catch(err => {
    alert("Error submitting form");
  });
});
</script>
