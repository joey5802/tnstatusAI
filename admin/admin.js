document.getElementById("submitButton").addEventListener("click", function() {
    var url = "http://localhost:8000" + document.getElementById("howudoingman").value;
    fetch(url).then(data => data.text()).then(data => {
        window.location.href = "index.html";
    });
});