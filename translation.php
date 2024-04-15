<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Translation Page</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Additional custom styles */
        .navbar-brand img {
            height: 10px;
            margin-right: 10px;
        }

        .navbar-brand {
            font-size: 1.5rem;
        }

        .navbar-nav .nav-link {
            padding: 0.5rem 1rem;
        }

        .navbar-nav .nav-link:hover {
            color: #fff;
            background-color: rgba(255,255,255,0.15);
        }

        /* Add top margin to the translation form */
        #translation-form {
            margin-top: 100px; /* Adjust this value as needed */
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                
                TravelSafe
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="display_advisories.php">Travel Health Advisory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="medical-facilities.php">Find Medical Facilities</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Translation Form -->
    <div class="container mt-5" id="translation-form">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h1 class="text-2xl font-bold mb-4">Translation Page</h1>
                    
                    <form>
                        <div class="mb-4">
                            <label for="original-text" class="block text-sm font-medium text-gray-700">Original Text</label>
                            <input type="text" id="original-text" name="original-text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="mb-4">
                            <label for="target-language" class="block text-sm font-medium text-gray-700">Target Language</label>
                            <select id="target-language" name="target-language" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                <option value="en">English</option>
                                <option value="fr">French</option>
                                <option value="es">Spanish</option>
                                <!-- Add more languages as needed -->
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="translated-text" class="block text-sm font-medium text-gray-700">Translated Text</label>
                            <textarea id="translated-text" name="translated-text" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" readonly></textarea>
                        </div>
                        <div>
                            <button type="button" id="translate-button" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:border-blue-800 focus:shadow-outline-blue disabled:opacity-25 transition ease-in-out duration-150">Translate</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const translateButton = document.getElementById("translate-button");

            translateButton.addEventListener("click", function (event) {
                event.preventDefault();
                const originalText = document.getElementById("original-text").value;
                const targetLanguage = document.getElementById("target-language").value;
                const translatedText = translateText(originalText, targetLanguage);
                document.getElementById("translated-text").value = translatedText;
            });

            function translateText(text, targetLanguage) {
                const translations = {
                    "en": {
                        "Where is the nearest restaurant?": "Where is the nearest restaurant?",
                        "How much does this cost?": "How much does this cost?",
                        "Can you recommend a good hotel?": "Can you recommend a good hotel?",
                        "I'm lost, can you help me?": "I'm lost, can you help me?",
                        "Where is the bathroom?": "Where is the bathroom?",
                        "Thank you very much!": "Thank you very much!",
                        "Excuse me, do you speak English?": "Excuse me, do you speak English?"
                    },
                    "fr": {
                        "Where is the nearest restaurant?": "Où est le restaurant le plus proche ?",
                        "How much does this cost?": "Combien ça coûte ?",
                        "Can you recommend a good hotel?": "Pouvez-vous recommander un bon hôtel ?",
                        "I'm lost, can you help me?": "Je suis perdu(e), pouvez-vous m'aider ?",
                        "Where is the bathroom?": "Où sont les toilettes ?",
                        "Thank you very much!": "Merci beaucoup !",
                        "Excuse me, do you speak English?": "Excusez-moi, parlez-vous anglais ?"
                    },
                    "es": {
                        "Where is the nearest restaurant?": "¿Dónde está el restaurante más cercano?",
                        "How much does this cost?": "¿Cuánto cuesta esto?",
                        "Can you recommend a good hotel?": "¿Puede recomendar un buen hotel?",
                        "I'm lost, can you help me?": "Estoy perdido/a, ¿me puede ayudar?",
                        "Where is the bathroom?": "¿Dónde está el baño?",
                        "Thank you very much!": "¡Muchas gracias!",
                        "Excuse me, do you speak English?": "Perdón, ¿habla inglés?"
                    }
                };

                return translations[targetLanguage][text] || text;
            }
        });
    </script>
</body>
</html>
