document.addEventListener('DOMContentLoaded', () => {
    const candidateForm = document.getElementById('candidateForm');
    const candidateList = document.getElementById('candidateList');
    const resultsList = document.getElementById('resultsList');

    const candidates = [];
    const results = {};

    candidateForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const name = document.getElementById('candidateName').value;
        const description = document.getElementById('candidateDescription').value;

        const candidate = { name, description };
        candidates.push(candidate);
        results[name] = 0;

        updateCandidateList();
        candidateForm.reset();
    });

    function updateCandidateList() {
        candidateList.innerHTML = '';
        candidates.forEach((candidate, index) => {
            const candidateItem = document.createElement('div');
            candidateItem.className = 'candidate-item';
            candidateItem.innerHTML = `
                <span>${candidate.name}: ${candidate.description}</span>
                <button onclick="removeCandidate(${index})">Remove</button>
            `;
            candidateList.appendChild(candidateItem);
        });
    }

    window.removeCandidate = function(index) {
        const candidate = candidates[index];
        delete results[candidate.name];
        candidates.splice(index, 1);
        updateCandidateList();
    };

    // Function to update results (dummy implementation for now)
    function updateResults() {
        resultsList.innerHTML = '';
        for (const [name, votes] of Object.entries(results)) {
            const resultItem = document.createElement('div');
            resultItem.innerText = `${name}: ${votes} votes`;
            resultsList.appendChild(resultItem);
        }
    }

    // Mock voting results update (to be replaced with real voting data)
    setInterval(() => {
        candidates.forEach(candidate => {
            results[candidate.name] += Math.floor(Math.random() * 100) + 1;
        });
        updateResults();
    }, 5000);
});
