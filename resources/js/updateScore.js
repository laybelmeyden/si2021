import axios from 'axios'


axios
    .post('/api/score_update')
    .then(
        response => {
            const score_id = document.querySelectorAll('#score_id').forEach(e => e.value);
            const project_id = document.querySelectorAll('#project_id').forEach(e => e.value);
        }
    );