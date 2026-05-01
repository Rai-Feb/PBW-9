const detailButtons = document.querySelectorAll('.btn-detail');

detailButtons.forEach(button => {
    button.addEventListener('click', function () {
        document.getElementById('detailTitle').innerText = this.dataset.title;
        document.getElementById('detailDescription').innerText = this.dataset.description;
        document.getElementById('detailDeadline').innerText = this.dataset.deadline;
        document.getElementById('detailPriority').innerText = this.dataset.priority;
        document.getElementById('detailStatus').innerText = this.dataset.status;
    });
});