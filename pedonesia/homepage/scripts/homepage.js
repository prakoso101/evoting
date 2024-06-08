// JavaScript for interactive features

// Candidate data
const candidates = [
    {
      name: "Candidate 1",
      info: "Candidate 1 Introduction Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet suscipit lorem. ",
      imageSrc: "https://framerusercontent.com/images/emtBSXPkI3qjOgkLASwVDyGkzA.webp" // Replace with actual image source
    },
    {
      name: "Candidate 2",
      info: "Candidate 2 Introduction Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet suscipit lorem. ",
      imageSrc: "https://framerusercontent.com/images/l1T2CaTIMnweziMeJcuOdf5PVI.webp" // Replace with actual image source
    },
    {
      name: "Candidate 3",
      info: "Candidate 3 Introduction Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet suscipit lorem.",
      imageSrc: "https://framerusercontent.com/images/HnfYkXNPXs934JiulAf6fe3YPc.webp" // Replace with actual image source
    }
  ];
  
  // Function to display candidate information
  function displayCandidateInfo(index) {
    const candidate = candidates[index];
    const modal = document.getElementById("candidateModal");
    const candidateInfo = document.getElementById("candidateInfo");
  
    // Display candidate name, info, and image
    candidateInfo.innerHTML = `
      <h2>${candidate.name}</h2>
      <p>${candidate.info}</p>
      <img src="${candidate.imageSrc}" alt="${candidate.name}" style="max-width: 100%;">
    `;
  
    // Show modal
    modal.style.display = "block";
  }
  
  // Close modal when clicking on close button
  document.getElementsByClassName("close")[0].onclick = function() {
    const modal = document.getElementById("candidateModal");
    modal.style.display = "none";
  };
  
  // Close modal when clicking outside the modal
  window.onclick = function(event) {
    const modal = document.getElementById("candidateModal");
    if (event.target == modal) {
      modal.style.display = "none";
    }
  };
  
  // Call displayCandidateInfo function when clicking on candidate containers
  const candidateContainers = document.querySelectorAll(".container");
  candidateContainers.forEach((container, index) => {
    container.addEventListener("click", () => {
      displayCandidateInfo(index);
    });
  });
  
  // JavaScript for handling button click event to start voting
  document.querySelector('.start-voting-btn').addEventListener('click', function() {
      window.location.href = 'biodatapage.php';
  });
  