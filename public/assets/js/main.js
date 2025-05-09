document.querySelectorAll(".checkbox-tarefa").forEach((checkbox) => {
    checkbox.addEventListener("change", () => {
        const idTarefa = checkbox.dataset.id;
        const TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch(`status/${idTarefa}`, {
            method: "PATCH",
            headers: {
                'content-Type': 'application/json',
                'X-CSRF-TOKEN': TOKEN

            }
        })
    });
});