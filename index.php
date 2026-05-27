<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal Space</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #1e1e2f, #0f0f1a);
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .profile-container {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px;
            width: 90%;
            max-width: 450px;
            text-align: center;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
            animation: fadeIn 1.5s ease-in-out;
        }

        .avatar {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 4px solid #ff4b91;
            object-fit: cover;
            margin-bottom: 20px;
            box-shadow: 0 0 20px rgba(255, 75, 145, 0.5);
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 10px;
            letter-spacing: 1px;
            background: linear-gradient(45deg, #ff4b91, #ff7676);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .subtitle {
            font-size: 1.1rem;
            color: #b3b3cc;
            margin-bottom: 25px;
            height: 24px;
        }

        .bio {
            font-size: 0.95rem;
            line-height: 1.6;
            color: #d1d1e9;
            margin-bottom: 30px;
        }

        .social-links {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .social-btn {
            display: block;
            padding: 12px;
            text-decoration: none;
            color: #fff;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .social-btn:hover {
            background: #ff4b91;
            border-color: #ff4b91;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 75, 145, 0.4);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <div class="profile-container">
        <img src="https://via.placeholder.com/150" alt="Profile Picture" class="avatar">
        
        <h1>Welcome to My Space</h1>
        
        <div class="subtitle" id="typing-text"></div>
        
        <p class="bio">
            Hello! I am glad you stumbled upon my little corner of the internet. I love exploring new things, writing code, and sharing my creative journey.
        </p>

        <div class="social-links">
            <a href="https://github.com" target="_blank" class="social-btn">GitHub Portfolio</a>
            <a href="https://instagram.com" target="_blank" class="social-btn">Instagram Space</a>
            <a href="mailto:your-email@example.com" class="social-btn">Get In Touch</a>
        </div>
    </div>

    <script>
        // Simple Typing Effect Javascript
        const textArray = ["Student & Learner.", "Creative Explorer.", "Welcome to my page!"];
        let textNo = 0;
        let charIndex = 0;
        const typingSpeed = 100;
        const erasingSpeed = 50;
        const nextTextDelay = 2000; 
        const textElement = document.getElementById("typing-text");

        function type() {
            if (charIndex < textArray[textNo].length) {
                textElement.textContent += textArray[textNo].charAt(charIndex);
                charIndex++;
                setTimeout(type, typingSpeed);
            } else {
                setTimeout(erase, nextTextDelay);
            }
        }

        function erase() {
            if (charIndex > 0) {
                textElement.textContent = textArray[textNo].substring(0, charIndex - 1);
                charIndex--;
                setTimeout(erase, erasingSpeed);
            } else {
                textNo++;
                if (textNo >= textArray.length) textNo = 0;
                setTimeout(type, typingSpeed + 500);
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(type, nextTextDelay - 1000);
        });
    </script>
</body>
</html>
