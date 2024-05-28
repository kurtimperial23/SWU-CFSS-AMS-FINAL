// responsive sidebar function
document.addEventListener("DOMContentLoaded", function () {
  const sidebarToggle = document.querySelector("#sidebar-toggle");
  sidebarToggle.addEventListener("click", function () {
    document.querySelector("#sidebar").classList.toggle("collapsed");
  });
});

//data table initialize
$(document).ready(function () {
  var dataTable = $(".table").DataTable({
    paging: false,
    responsive: false,
    stateSave: true,
    responsive: false,
    scrollX: true,
    autoWidth: true,
    columnDefs: [
      { className: "dt-body-left", targets: "_all" },
      { className: "dt-head-left", targets: "_all" },
    ],
    layout: {
      topEnd: "search",
      topStart: "info",
      bottomStart: null,
    },
    initComplete: function () {
      $(".table").addClass("table-bordered display nowrap");
    },
  });
  // so that the data tables head and body will be adjusted
  dataTable.columns.adjust();

  // Function to handle resizing of table head
  function handleResize() {
    var tableWrapperWidth = $(".table-wrapper").width();
    $(".dt-scroll-headInner").css("width", tableWrapperWidth);
  }
  // Call the handleResize function initially
  handleResize();

  // Call the handleResize function whenever the window is resized
  $(window).resize(function () {
    handleResize();
    dataTable.columns.adjust(); // Adjust the column widths on window resize
  });
});

// BOTH OF THESE COMMENTED OUT CODE THROWS AN ERROR , FIND A SOLUTION OF TURNAROUND FOR THAT
// school year modal
// document.addEventListener("DOMContentLoaded", function () {
//   var myModal = new bootstrap.Modal(
//     document.getElementById("schoolYearSelectConfirmation")
//   );
//   var schoolYearSpan = document.getElementById("schoolYearSpan");

//   document.querySelectorAll(".dropdown-item").forEach((item) => {
//     item.addEventListener("click", (event) => {
//       var schoolYear = event.target.getAttribute("data-school-year");
//       schoolYearSpan.textContent = schoolYear;
//       myModal.show();
//     });
//   });
// });

//calendar component
// document.addEventListener("DOMContentLoaded", function () {
//   var calendarEl = document.getElementById("calendar");

//   var calendar = new FullCalendar.Calendar(calendarEl, {
//     timeZone: "UTC",
//     headerToolbar: {
//       left: "prev,next today",
//       center: "title",
//       right: "dayGridMonth,timeGridWeek,timeGridDay,listMonth",
//     },
//     weekNumbers: true,
//     dayMaxEvents: true, // allow "more" link when too many events,
//     eventDidMount: function (info) {
//       info.el.style.color = "#000"; // Change event text color to black
//     },
//   });

//   calendar.render();
// });

//dashboard.php
function changeSemester(semester) {
  document.getElementById("semester-dropdown").innerText = semester;
}

//strand.php
function addSpecialization() {
  var specializationContainer = document.getElementById(
    "specializationsContainer"
  );
  var input = document.createElement("input");
  input.type = "text";
  input.className = "form-control mb-3";
  input.placeholder = "Enter Specialization Description";
  specializationContainer.appendChild(input);
}

function clearSpecializations() {
  var specializationContainer = document.getElementById(
    "specializationsContainer"
  );
  specializationContainer.innerHTML = ""; // Clear the contents of the container
}

