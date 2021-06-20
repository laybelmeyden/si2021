import axios from 'axios'

axios
    .post('/score_update')
    .then(
        response => {
            const score_id = document.querySelectorAll('#score_id')
            .forEach(e => console.log(e.value));
            const project_id = document.querySelectorAll('#project_id')
            .forEach(e => console.log(e.value));
        }
    );