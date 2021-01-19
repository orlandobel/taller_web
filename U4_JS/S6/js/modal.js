const modal = $("#myModal"); // == const modal = document.getElementById("myModal");

function showModal() {
    modal.css('top', 10, 'px');
}

function hideModal() {
    modal.css('top', -1000, 'px');
}