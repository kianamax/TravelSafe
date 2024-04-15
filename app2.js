const locationInput = document.getElementById('location');
const facilityList = document.getElementById('facility-list');
const facilityItems = document.getElementById('facility-items');

// Fetch medical facilities from the server
function fetchMedicalFacilities(location) {
    // Use fetch API to make a request to the server
    fetch(`fetch_facilities.php?location=${location}`)
        .then(response => response.json())
        .then(data => {
            if (data.message) {
                facilityItems.innerHTML = `<li class="list-group-item">${data.message}</li>`;
            } else {
                facilityItems.innerHTML = '';
                data.forEach(facility => {
                    const listItem = document.createElement('li');
                    listItem.classList.add('list-group-item');
                    listItem.innerHTML = `
                        <h3 class="text-lg font-bold">${facility.facility_name}</h3>
                        <p>${facility.address}</p>
                        <p>Phone: ${facility.phone}</p>
                    `;
                    facilityItems.appendChild(listItem);
                });
            }
            facilityList.classList.remove('hidden');
        })
        .catch(error => console.error('Error fetching medical facilities:', error));
}

// Add event listener to the location input
locationInput.addEventListener('input', () => {
    const location = locationInput.value.trim();
    if (location) {
        fetchMedicalFacilities(location);
    } else {
        facilityList.classList.add('hidden');
        facilityItems.innerHTML = '';
    }
});