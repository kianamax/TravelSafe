const countrySelect = document.getElementById('country');
const advisorySection = document.getElementById('advisory-section');
const advisoryContent = document.getElementById('advisory-content');

// Fetch health advisories from the server
function fetchHealthAdvisory(country) {
  // Use fetch API to make a request to the server
  fetch(`fetch_advisory.php?country=${country}`)
    .then(response => response.text())
    .then(data => {
      advisoryContent.innerHTML = data;
      advisorySection.classList.remove('hidden');
    })
    .catch(error => console.error('Error fetching health advisory:', error));
}

// Add event listener to the country select
countrySelect.addEventListener('change', () => {
  const selectedCountry = countrySelect.value;
  if (selectedCountry) {
    fetchHealthAdvisory(selectedCountry);
  } else {
    advisorySection.classList.add('hidden');
  }
});