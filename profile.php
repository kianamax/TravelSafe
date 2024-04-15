<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TravelSafe - User Profile</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    /* General Styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f0f8ff; /* Light blue background */
    }

    /* Sidebar Styles */
    .sidebar {
      width: 250px; /* Increased sidebar width */
      background-color: #388e3c; /* Blue sidebar */
      color: #fff;
      position: fixed;
      height: 100vh; /* Full viewport height for smooth scrolling */
      overflow-y: auto; /* Enable sidebar scrolling */
    }

    .sidebar a {
      display: block;
      color: #fff;
      padding: 16px;
      text-decoration: none;
      font-weight: bold; /* Bold text for better readability */
    }

    .sidebar a:hover {
      background-color: #2e602c; /* Darker blue hover color */
    }

    .sidebar .active {
      background-color: #2b5e2b; /* Slightly darker active color */
    }

    /* Main Content Styles */
    .main-content {
      margin-left: 250px; /* Adjusted margin for wider sidebar */
      padding: 20px;
    }

    .container {
      max-width: 800px;
    }

    /* Profile Box Styles */
    .profile-box {
      background-color: #fff; /* White profile box background */
      border: 1px solid #ddd;
      border-radius: 5px;
      padding: 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    }

    .profile-info {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .user-avatar img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      margin-right: 20px;
    }

    .profile-sections {
      display: flex;
      justify-content: space-between;
    }

    .section {
      flex-basis: 30%;
    }

    /* Additional Styles for Visual Appeal */
    h2 {
      color: #388e3c; /* Blue headings for consistency */
    }

    ul {
      list-style: none; /* Remove default bullet points */
      padding: 0;
      margin: 0;
    }

    li {
      margin-bottom: 10px; /* Spacing between list items */
    }

    .profile-info h3 {
      color: #333; /* Darker text for better contrast */
    }

    .profile-info p {
      color: #666; /* Lighter text for less emphasis */
    }

    /* Optional: Link Styling (Uncomment if desired) */
    /*
    .profile-info a {
      color: #388e3c;
      text-decoration: underline;
    }
    */
  </style>
</head>

<body>
  <div class="sidebar">
    <a href="#profile" class="active">Profile</a>
    <a href="#medical-records">Medical Records</a>
    <a href="#travel-history">Travel History</a>
    <a href="#health-recommendations">Health Recommendations</a>
  </div>

  <div class="main-content">
    <div class="container">
      <div class="profile-box" id="profile">
        <h2>User Profile</h2>
           <div class="profile-info">
          <div class="user-avatar">
            <img src="avatar.png" alt="User Avatar">
          </div>
          <div class="user-details">
            <h3>John Doe</h3>
            <p>Username: johndoe</p>
            <p>Email: johndoe@example.com</p>
            </div>
        </div>
      </div>

      <div class="profile-box" id="medical-records">
        <h2>Medical Records</h2>
        <div class="profile-sections">
          <div class="section">
            <h4>Medical Records</h4>
            <ul>
              <li>Vaccination Records</li>
              <li>Allergies</li>
              <li>Past Medical History</li>
              </ul>
          </div>
        </div>
      </div>

      <div class="profile-box" id="travel-history">
        <h2>Travel History</h2>
        <div class="profile-sections">
          <div class="section">
            <h4>Travel History</h4>
            <ul>
              <li>Paris, France (2023)</li>
              <li>Tokyo, Japan (2022)</li>
              <li>New York City, USA (2021)</li>
              </ul>
          </div>
        </div>
      </div>

      <div class="profile-box" id="health-recommendations">
        <h2>Health Recommendations</h2>
        <div class="profile-sections">
          <div class="section">
            <h4>Health Recommendations</h4>
            <ul>
              <li>Get a flu shot every year.</li>
              <li>Maintain a healthy diet and exercise routine.</li>
              <li>Consult your doctor before traveling to new regions.</li>
              </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Add JavaScript code here (optional)

    // Example: Smooth scrolling animation (optional)
    /*
    const sections = document.querySelectorAll('.profile-box');

    sections.forEach(section => {
      section.addEventListener('click', function() {
        const targetId = this.id;
        const targetElement = document.getElementById(targetId);
        const scrollY = targetElement.offsetTop;

        window.scrollTo({ top: scrollY, behavior: 'smooth' });
      });
    });
    */
  </script>
</body>

</html>
