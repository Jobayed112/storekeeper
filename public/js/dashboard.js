var dashboardToggleButton = document.getElementById("dashboard-menu-toggle");
var analyticsToggleButton = document.getElementById("analytics-menu-toggle");
var feedbackToggleButton = document.getElementById("feedback-menu-toggle");

var el = document.getElementById("wrapper");

dashboardToggleButton.onclick = function () {
    el.classList.toggle("toggled");
};

analyticsToggleButton.onclick = function () {
    el.classList.toggle("toggled");
};

feedbackToggleButton.onclick = function () {
    el.classList.toggle("toggled");
};


// Add click event listeners for the Dashboard and Analytics buttons
document.querySelector('.list-group-item[href="#dashboard-content-wrapper"]').addEventListener('click', function () {
    document.getElementById('dashboard-content-wrapper').style.display = 'block';
    document.getElementById('page-content-wrapper').style.display = 'none';
    document.getElementById('feedback-content-wrapper').style.display = 'none';
});

document.querySelector('.list-group-item[href="#page-content-wrapper"]').addEventListener('click', function () {
    document.getElementById('dashboard-content-wrapper').style.display = 'none';
    document.getElementById('page-content-wrapper').style.display = 'block';
    document.getElementById('feedback-content-wrapper').style.display = 'none';
});

document.querySelector('.list-group-item[href="#feedback-content-wrapper"]').addEventListener('click', function () {
    document.getElementById('dashboard-content-wrapper').style.display = 'none';
    document.getElementById('page-content-wrapper').style.display = 'none';
    document.getElementById('feedback-content-wrapper').style.display = 'block';
});
