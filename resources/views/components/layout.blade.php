<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f4f7fb;
            color: #222;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
      
        header {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            padding: 20px 40px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav {
            max-width: 1200px;
            margin: auto;
        }

        nav ul {
            display: flex;
            justify-content: space-between;
            align-items: center;
            list-style: none;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-size: 18px;
            font-weight: bold;
            padding: 10px 18px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        nav ul li a:hover {
            background: rgba(255,255,255,0.2);
            transform: translateY(-2px);
        }

        .hero {
            background: linear-gradient(to right, rgba(30,60,114,0.9), rgba(42,82,152,0.85)),
                        url('https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1200&auto=format&fit=crop') center/cover;
            color: white;
            text-align: center;
            padding: 100px 20px;
        }

        .hero h1 {
            font-size: 55px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 20px;
            max-width: 700px;
            margin: auto;
            line-height: 1.7;
        }

        main {
            flex: 1;
            max-width: 1200px;
            width: 100%;
            margin: 50px auto;
            padding: 20px;
        }

        .content-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            transition: 0.3s ease;
        }

        .content-card:hover {
            transform: translateY(-5px);
        }

        footer {
            background: #111827;
            color: #ddd;
            text-align: center;
            padding: 25px;
            margin-top: auto;
        }

        footer p {
            font-size: 15px;
            letter-spacing: 0.5px;
        }

        @media(max-width: 768px) {
            nav ul {
                flex-direction: column;
                gap: 15px;
            }

            .hero h1 {
                font-size: 38px;
            }

            .hero p {
                font-size: 17px;
            }
        }
    </style>
</head>
<body>

<header style="
    background: linear-gradient(135deg, #1e3c72, #2a5298);
    padding: 18px 40px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.12);
    position: sticky;
    top: 0;
    z-index: 1000;
">
    <nav style="
        max-width: 1200px;
        margin: auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
    ">

        <!-- Logo -->
        <div>
            <a href="/people" style="
                text-decoration: none;
                color: white;
                font-size: 28px;
                font-weight: bold;
                letter-spacing: 1px;
            ">
                Laravel<span style="color:#ffd166;">Hub</span>
            </a>
        </div>

        <!-- Navigation Links -->
        <ul style="
            display: flex;
            align-items: center;
            gap: 18px;
            list-style: none;
        ">

            <li>
                <a href="/people" style="
                    text-decoration: none;
                    color: white;
                    font-size: 16px;
                    font-weight: 600;
                    padding: 10px 18px;
                    border-radius: 10px;
                    transition: all 0.3s ease;
                ">
                    People
                </a>
            </li>

            <li>
                <a href="/people/create" style="
                    text-decoration: none;
                    background: white;
                    color: #1e3c72;
                    font-size: 15px;
                    font-weight: bold;
                    padding: 12px 20px;
                    border-radius: 12px;
                    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                    transition: all 0.3s ease;
                ">
                    + Create Person
                </a>
            </li>

        </ul>
    </nav>
</header>

    <section class="hero">
        <h1>Welcome to My Laravel Website</h1>
        <p>
            Build modern, responsive, and dynamic web applications using Laravel and PHP.
            This layout provides a clean professional UI for your pages.
        </p>
    </section>

    <main>
        <div class="content-card">
            {{ $slot }}
        </div>
    </main>

    <footer>
        <p>&copy; 2026 My Website | Built with Laravel & PHP</p>
    </footer>

</body>
</html>
