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

// Delete button handler
const deleteButtons = document.querySelectorAll('.delete-btn');

deleteButtons.forEach(button => {
    button.addEventListener('click', function () {
        const card = this.closest('.card');
        const todoId = card.dataset.todoId;
        const todoTitle = card.querySelector('.card-title').innerText;

        if (confirm(`Apakah Anda yakin ingin menghapus "${todoTitle}"?`)) {
            const formData = new FormData();
            formData.append('id', todoId);

            fetch('./src/todolist-delete.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Remove card with animation
                    card.closest('.col').style.transition = 'opacity 0.3s';
                    card.closest('.col').style.opacity = '0';
                    setTimeout(() => {
                        card.closest('.col').remove();
                    }, 300);
                    alert(data.message);
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat menghapus todo');
            });
        }
    });
});