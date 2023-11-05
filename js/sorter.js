const search = document.querySelector('.input-group input'),
    table_rows = document.querySelectorAll('tbody tr'),
    table_headings = document.querySelectorAll('thead th');

// 1. Searching for specific data of HTML table
search.addEventListener('input', searchTable);

function searchTable() {
    table_rows.forEach((row, i) => {
        let table_data = row.textContent.toLowerCase(),
            search_data = search.value.toLowerCase();

        row.classList.toggle('hide', table_data.indexOf(search_data) < 0);
        row.style.display = "none";
    })

    document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
        visible_row.style.display = "";
    });
}

function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  dir = "asc";

  // Remove the "active" class from all table headers
  var ths = table.querySelectorAll("th");
  for (var i = 0; i < ths.length; i++) {
      ths[i].classList.remove("active");
  }

  // Add the "active" class to the clicked table header
  ths[n].classList.add("active");

  // Update arrow symbols based on sorting direction
  for (var th of table.querySelectorAll("th")) {
      th.querySelector(".icon-arrow").style.transform = "rotate(0deg)";
  }
  table.querySelector("th:nth-child(" + (n + 1) + ") .icon-arrow").style.transform = dir === "asc" ? "rotate(180deg)" : "rotate(0deg)";

  // Rest of your sorting code remains the same
  // ...

}


function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  dir = "asc";

  // Toggle sorting direction when a column is clicked
  if (table.getAttribute("data-sort-col") == n) {
    if (dir === "asc") {
      dir = "desc";
    } else {
      dir = "asc";
    }
  } else {
    table.setAttribute("data-sort-col", n);
  }

  // Remove the "active" class from all table headers
  var ths = table.querySelectorAll("th");
  for (var i = 0; i < ths.length; i++) {
      ths[i].classList.remove("active");
  }

  // Add the "active" class to the clicked table header
  ths[n].classList.add("active");

  // Update arrow symbols based on sorting direction
  for (var th of table.querySelectorAll("th")) {
      th.querySelector(".icon-arrow").style.transform = "rotate(0deg)";
  }
  table.querySelector("th:nth-child(" + (n + 1) + ") .icon-arrow").style.transform = dir === "asc" ? "rotate(180deg)" : "rotate(0deg)";

  while (switching) {
    switching = false;
    rows = table.rows;

    for (i = 1; i < rows.length - 1; i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];

      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      switchcount++;
    } else {
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}


function sortMe(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  
  table = document.getElementById("his-table");
  switching = true;

  dir = "asc"; 
  
  while (switching) {

    switching = false;
    rows = table.rows;

    for (i = 1; i < (rows.length - 1); i++) {

      shouldSwitch = false;

      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];

      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {

          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {

      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      switchcount ++;      
    } else {
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}

var modal = document.getElementById("myModal");
var openButton = document.getElementById("openModal");
var closeButton = document.getElementById("closeModal");

// Open the modal when the open button is clicked
openButton.onclick = function() {
    modal.style.display = "block";
}

// Close the modal when the close button is clicked or when the background is clicked
closeButton.onclick = function() {
    modal.style.display = "none";
}

// Close the modal when the background is clicked
window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
}