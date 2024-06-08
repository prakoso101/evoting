document.addEventListener('DOMContentLoaded', () => {
    const imageContainer = document.querySelector('.image-container');

    // Sample candidates data (to be replaced with actual data)
    const candidates = [
        { name: 'Candidate 1', image: 'https://framerusercontent.com/images/emtBSXPkI3qjOgkLASwVDyGkzA.webp', link: 'homepage.php' },
        { name: 'Candidate 2', image: 'https://framerusercontent.com/images/l1T2CaTIMnweziMeJcuOdf5PVI.webp', link: 'homepage.php' },
        { name: 'Candidate 3', image: 'https://framerusercontent.com/images/HnfYkXNPXs934JiulAf6fe3YPc.webp', link: 'homepage.php' }
    ];

    // Dynamically add candidates' images to the image container
    candidates.forEach(candidate => {
        const candidateLink = document.createElement('a');
        candidateLink.href = candidate.link;
        candidateLink.innerHTML = `<img src="${candidate.image}" alt="${candidate.name}">`;
        imageContainer.appendChild(candidateLink);
    });
});
