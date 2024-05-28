// responsive sidebar function
document.addEventListener("DOMContentLoaded", function () {
  const sidebarToggle = document.querySelector("#sidebar-toggle");
  sidebarToggle.addEventListener("click", function () {
    document.querySelector("#sidebar").classList.toggle("collapsed");
    document.querySelector("#sidebar1").classList.toggle("collapsed");
  });

  // dark/light mode changer
  //   document.querySelector(".theme-toggle").addEventListener("click", () => {
  //     toggleLocalStorage();
  //     toggleRootClass();
  //   });

  //   function toggleRootClass() {
  //     const current = document.documentElement.getAttribute("data-bs-theme");
  //     const inverted = current == "dark" ? "light" : "dark";
  //     document.documentElement.setAttribute("data-bs-theme", inverted);
  //   }

  //   function toggleLocalStorage() {
  //     if (isLight()) {
  //       localStorage.removeItem("light");
  //     } else {
  //       localStorage.setItem("light", "set");
  //     }
  //   }

  //   function isLight() {
  //     return localStorage.getItem("light");
  //   }

  //   if (isLight()) {
  //     toggleRootClass();
  //   }
});

// data tables dashboard init
$(document).ready(function () {
  $("#myTable").DataTable();
});

// active link highlighting feature
// Get the current URL
// var url = window.location.href;

// // Select all sidebar links
// var links = document.querySelectorAll('.sidebar-link');

// // Loop through each link
// links.forEach(function(link) {
//     // Check if the link's href matches the current URL
//     if (link.href === url) {
//         // Add 'active' class to the parent <li> element
//         link.parentNode.classList.add('active');

//         // If the link has a parent with class 'collapse', show it
//         var collapseParent = link.closest('.collapse');
//         if (collapseParent) {
//             collapseParent.classList.add('show');
//         }
//     }
// });