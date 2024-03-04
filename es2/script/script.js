document.addEventListener('DOMContentLoaded', (event) => {
    let aggiornaCheckbox = document.getElementById('aggiorna');
    let eliminaCheckbox = document.getElementById('elimina');
    let inputCheckbox = document.getElementById('inputCheckbox');

    aggiornaCheckbox.addEventListener('change', function() {
        inputCheckbox.disabled = !this.checked;
    });

    eliminaCheckbox.addEventListener('change', function() {
        inputCheckbox.disabled = true;
    });

let checkboxes = document.querySelectorAll("input[type='checkbox'][name='mycheckbox']");

checkboxes.forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        checkboxes.forEach(function(c) {
            if (c !== checkbox) c.checked = false;
        });
    });
})});