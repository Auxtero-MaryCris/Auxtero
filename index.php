<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mary Cris Portfolio </title> 

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" as="style">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        /* CSS Variables for the PINK Theme (Original) */
        :root {
            --primary-color: #E91E63;    /* Deep Rose Pink */
            --secondary-color: #880E4F;  /* Dark Raspberry/Burgundy */
            --background-light: #F8F4F9; /* Very Soft Pinkish-Neutral */
            --text-dark: #2C2C2C;        /* Near Black */
            --text-light: #fff;
            --accent-color: #FFC0CB;     /* Light Blush Pink for highlights */
            --shadow: 0 8px 20px rgba(0,0,0,0.15);
            font-size: 16px; 
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: var(--background-light);
            color: var(--text-dark);
            line-height: 1.6;
            /* Decorative Pink Dot Pattern */
            background-image: radial-gradient(var(--accent-color) 0.5px, transparent 0.5px);
            background-size: 15px 15px;
        }

        /* HEADER & NAVIGATION (MINIMAL SPACE) */
        header {
            background: var(--secondary-color);
            color: var(--text-light);
            padding: 8px 20px; 
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        header h1 { 
            margin-top: 0; 
            margin-bottom: 5px; 
            font-size: 1.8em; 
        }
        nav a {
            color: var(--text-light);
            margin: 0 12px;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease, border-bottom 0.3s ease;
            padding-bottom: 5px;
        }
        nav a:hover {
            color: var(--accent-color);
            border-bottom: 2px solid var(--accent-color);
        }

        /* GENERAL SECTION STYLING (UNIFORM BOX LOOK - Applied to all sections except the header/footer) */
        section {
            background: var(--text-light);
            margin: 30px auto;
            max-width: 1000px;
            box-shadow: var(--shadow);
            position: relative;
            
            /* BOX SHAPE & BORDERS (Same for all sections) */
            min-height: 350px; 
            border: 2px solid var(--primary-color); 
            outline: 4px solid var(--accent-color); 
            outline-offset: -8px; 
            
            /* Decorative Border Radius (Same for all sections) */
            border-top-left-radius: 30px; 
            border-bottom-right-radius: 30px;
        }
        
        /* HERO SECTION (Now inherits the main box style, just adjusting padding and internal elements) */
        .hero {
            text-align: center;
            /* Slightly more vertical padding than the default for a "Hero" feel */
            padding: 70px 20px; 
            overflow: hidden;
            /* Removed the border/radius overrides, letting it inherit from 'section' */
        }
        
        /* Decorative circle behind the image (Kept this unique hero decoration) */
        .hero::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 350px;
            height: 350px;
            border-radius: 50%;
            background: var(--accent-color);
            opacity: 0.3;
            z-index: 1;
        }
        .hero h2, .hero p, .hero img {
            position: relative; 
            z-index: 2;
        }
        .hero h2 { font-size: 2.2em; color: var(--primary-color); margin-bottom: 10px; }
        .hero p { font-size: 1.1em; color: #777; }
        .hero img {
            width: 250px;
            height: 250px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid var(--primary-color);
            margin-top: 30px;
            box-shadow: var(--shadow);
            transition: transform 0.3s ease;
        }
        .hero img:hover { transform: scale(1.03) rotate(2deg); }


        /* DECORATIVE H2 HEADINGS (Shadow Gradient) */
        section h2 {
            text-align: center;
            font-size: 2em;
            padding: 10px 0;
            margin: 0 auto 30px auto;
            width: fit-content;
            color: var(--secondary-color);
            font-weight: 700;
            /* Decorative Shadow and Underline */
            text-shadow: 1px 1px 0 var(--accent-color);
            border-bottom: 3px double var(--primary-color);
        }
        
        /* ABOUT SECTION (Now inherits all box styling from 'section') */
        .about {
            padding: 60px 20px;
        }
        .about p {
            text-align: center;
            max-width: 700px;
            margin: 0 auto;
        }

        /* CONTACT SECTION (Now inherits all box styling from 'section') */
        .contact {
            padding: 60px 20px;
        }
        .contact ul { list-style: none; padding: 0; max-width: 400px; margin: 0 auto; }
        .contact li {
            background: var(--background-light); margin-bottom: 15px; padding: 15px; border-radius: 8px;
            box-shadow: 0 1px 5px rgba(0,0,0,0.05); display: flex; gap: 10px;
            border-left: 5px solid var(--primary-color); align-items: center; 
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-left 0.3s ease;
        }
        .contact li:hover { transform: translateY(-4px); box-shadow: 0 5px 15px rgba(0,0,0,0.1); border-left: 5px solid var(--accent-color); }
        .contact strong { color: var(--primary-color); min-width: 60px; }
        .contact a, .contact span { color: var(--text-dark); text-decoration: none; }
        .contact a:hover { text-decoration: underline; color: var(--secondary-color); }

        /* GALLERY SECTION (Now inherits all box styling from 'section') */
        .gallery {
            padding: 60px 20px;
        }
        .gallery-container { display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; }
        .gallery-container img {
            width: 300px; 
            height: 200px; 
            object-fit: cover; 
            
            border-radius: 10px;
            transition: 0.4s ease; box-shadow: 0 6px 15px rgba(0,0,0,0.15);
            /* Retaining the unique inner image radius */
            border-top-left-radius: 30px; 
            border-bottom-right-radius: 30px;
        }
        .gallery-container img:hover { transform: scale(1.08); box-shadow: 0 10px 20px rgba(0,0,0,0.3); border: 3px solid var(--secondary-color); }

        /* FOOTER */
        footer {
            text-align: center; padding: 30px 20px; background: var(--secondary-color);
            color: var(--text-light); margin-top: 50px;
        }

        /* MEDIA QUERIES for Mobile Responsiveness */
        @media (max-width: 768px) {
            header { padding: 8px 10px; }
            header h1 { margin-bottom: 3px; }
            nav a { margin: 0 8px; font-size: 0.8em; }

            header h1 { font-size: 1.5em; }
            
            section { 
                margin: 20px 10px; 
                padding: 40px 15px;
                outline-offset: -5px; 
                min-height: 300px;
            }
            .hero { padding: 40px 15px; } /* Adjust Hero padding for mobile */
            .hero h2 { font-size: 1.8em; }
            .hero img { width: 180px; height: 180px; }

            .gallery-container { flex-direction: column; align-items: center; }
            .gallery-container img { 
                width: 90%; 
                max-width: 400px;
                height: 250px; 
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>My Portfolio</h1>
        <nav>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
            <a href="#photos">Photos</a>
        </nav>
    </header>
    
    <main> 
        <section id="home" class="hero">
            <h2>Hello, I'm Mary Cris Auxtero.</h2>
            <p> I don't just write code, I craft experiences.</p>
            <img src="https://scontent.fceb2-1.fna.fbcdn.net/v/t39.30808-6/502684941_1995008467696327_5572420184054044778_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeEm8PbWtPITuKw5F8GT9MipmNSdzf4wrGGY1J3N_jCsYU1s26V7jvioBvXNodEFpbYtqkT-II6dI0QHR3r5wunV&_nc_ohc=54ajhwMikSMQ7kNvwGxp_qw&_nc_oc=AdmS22W5fHAaWqiT5iZAKNYL1vfw5Y2CinUwC4jRQ3wnCVUwXIRlwuHK9-IBi9B4nNA&_nc_zt=23&_nc_ht=scontent.fceb2-1.fna&_nc_gid=4bQK7vmAy3IvYx9y6aak4Q&oh=00_AfkYzVkhwPTQRsS4VABEC1AjtlQnCCxUP27b3MVZkUo9Wg&oe=69414DB6" alt="Professional portrait of Mary Cris Auxtero"> 
        </section>

        <section id="about" class="about">
            <h2>About Me</h2>
            <p style="text-align: center;">Hello! I'm Mary Cris Auxtero, I'm from San Roque Talibon Bohol , I'm the third child of Mr. Herminio and Mercedita Auxtero.I'm 22 years old and I love watching Drama Series , listening to music , dancing and playing online games.I'm Fourth Year student currently taking Bachelor of Science and Informatio System. As a student, my life revolves around balancing academic demands.my hobbies helps me clear my mind and approach my studies with fresh focus. I am a highly motivated and organized individual, constantly eager to learn and apply new concepts.</p>
        </section>

        <section id="contact" class="contact">
            <h2>Contact Me</h2>
            <ul>
                <li>
                    <strong>Email:</strong> 
                    <a href="mailto:auxteromary8@gmail.com">auxteromary8@gmail.com</a>
                </li>
                <li>
                    <strong>Phone:</strong> 
                    <span>0936762360</span>
                </li>
                <li>
                    <strong>Location:</strong> 
                    <span>San Roque, Talibon, Bohol</span>
                </li>
            </ul>
        </section>

        <section id="photos" class="gallery">
            <h2>Photo Gallery</h2>
            <div class="gallery-container">
                <img src="https://scontent.fceb2-2.fna.fbcdn.net/v/t39.30808-6/506644885_2006473819883125_1304663954727898329_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeHw-P7nutR2r4src0Nbt8wKGv-YPCkFbwMa_5g8KQVvAwbT9QbUhAWrfIDPOoYkf_v5QUHhQbil5opbD9Zo1Kw-&_nc_ohc=aH53aOM_ulkQ7kNvwEJWy3x&_nc_oc=AdnNOEHYW4L7mkKP3-RtPlYMzOWhNTNUUV8ASmiB-vp9cG1e-ceMvDPkPuGbhTtaAKs&_nc_zt=23&_nc_ht=scontent.fceb2-2.fna&_nc_gid=MHurtOpIhg_hCxVtDG-BaA&oh=00_Afk4AQWGq46yvL7n_zj7Ja5UWBdX1dQJQl790ppBHx8ADQ&oe=69415713" alt="A phot of me that flexing">
                <img src="https://scontent.fceb6-1.fna.fbcdn.net/v/t39.30808-6/506628790_2006473843216456_5817152977013137157_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeE0dERZJ2QZi-DpGQuTJMEQh3yovWVqGwGHfKi9ZWobAf3BEbMMkfFUH-u_UYDdF53-WII7yXylYe1s39G5jU19&_nc_ohc=8ut7jjJNapsQ7kNvwE0SCVx&_nc_oc=AdkdiUb7dsju8_DdViF1fgRMcC8mO6Fm8RKF0mBBQs2xdK9mi8oHfq3neaSaCZ9dSug&_nc_zt=23&_nc_ht=scontent.fceb6-1.fna&_nc_gid=GOA4akWTw69STnbuHQs-jA&oh=00_Afk82nnlze6B9pv3YOQGl1huA_6NwRYA6J67H-2tlxJ-oQ&oe=6941302F" alt="A photo of me that i feel shy">
                <img src="https://scontent.fceb6-3.fna.fbcdn.net/v/t39.30808-6/507982472_2006473706549803_7650423305557826180_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeGQLgb_GX6b-wBjPH1XVzKGw6gdCg_f6VnDqB0KD9_pWQYt_uQ2nwLBPjn3rlf9uP7sFe3GJgZI46AXmM8Oxc-z&_nc_ohc=p-hug4lg80oQ7kNvwEqMvJe&_nc_oc=Adnqhn98Jt0bnzkxZW8E5b6tI6AvmPNL4M9hJhX9L-eWWYKyX7LF9AdS_Jp-e6YpS2o&_nc_zt=23&_nc_ht=scontent.fceb6-3.fna&_nc_gid=uBnvlbzRg0gt4SpUVPu0YA&oh=00_AfnMZ4P8LYxAQmnST7VaIJ2ExWB2D09DXcJ45uA9JgS8rg&oe=694161DF" alt="A photo of me that fierce face">
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Mary Cris Portfolio. Built with dedication.</p>
    </footer>

</body>
</html>