<!DOCTYPE html>
<html lang="ckb" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>وێبسایتی پرۆفێشیناڵ</title>
    <!-- وێنۆچکەکانی Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* ==================== 1. Variables & Global Styles ==================== */
        :root {
            --bg-color: #f4f7f6;
            --card-bg: #ffffff;
            --text-color: #2c3e50;
            --primary-color: #3498db;
            --accent-color: #2ecc71;
            --border-color: #e0e0e0;
            --shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        [data-theme="dark"] {
            --bg-color: #1a1a2e;
            --card-bg: #16213e;
            --text-color: #e9ecef;
            --primary-color: #0f3460;
            --accent-color: #e94560;
            --border-color: #2a2a4a;
            --shadow: 0 4px 15px rgba(0,0,0,0.3);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            transition: background-color 0.3s, color 0.3s;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* ==================== 2. Navigation Bar ==================== */
        header {
            background-color: var(--card-bg);
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary-color);
        }

        .nav-links {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .btn {
            padding: 8px 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-primary { background-color: var(--primary-color); color: #fff; }
        .btn-accent { background-color: var(--accent-color); color: #fff; }
        .btn-theme { background: none; border: 1px solid var(--border-color); color: var(--text-color); }

        /* ==================== 3. Hero Section ==================== */
        .hero {
            text-align: center;
            padding: 60px 20px;
            background: linear-gradient(135deg, rgba(52, 152, 219, 0.1), rgba(46, 204, 113, 0.1));
            border-radius: 12px;
            margin: 20px 0;
        }

        .hero h1 { font-size: 2.2rem; margin-bottom: 15px; }
        .hero p { font-size: 1.1rem; color: #777; margin-bottom: 20px; }

        /* ==================== 4. Controls (Search & Filter) ==================== */
        .controls-section {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .search-box input {
            padding: 10px 15px;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            background-color: var(--card-bg);
            color: var(--text-color);
            width: 250px;
        }

        .filter-buttons button {
            padding: 8px 12px;
            margin-left: 5px;
            border: 1px solid var(--border-color);
            background-color: var(--card-bg);
            color: var(--text-color);
            border-radius: 4px;
            cursor: pointer;
        }

        .filter-buttons button.active {
            background-color: var(--primary-color);
            color: white;
        }

        /* ==================== 5. Content Cards Grid ==================== */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .card {
            background-color: var(--card-bg);
            border-radius: 8px;
            padding: 20px;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
        }

        .card h3 { margin-bottom: 10px; color: var(--primary-color); }

        /* ==================== 6. Modal (Login Popup) ==================== */
        .modal {
            display: none;
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background-color: rgba(0,0,0,0.5);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .modal-content {
            background-color: var(--card-bg);
            padding: 30px;
            border-radius: 8px;
            width: 320px;
            position: relative;
        }

        .close-btn {
            position: absolute;
            top: 10px; left: 15px;
            font-size: 1.2rem;
            cursor: pointer;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label { display: block; margin-bottom: 5px; }
        .input-group input, .input-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            background-color: var(--bg-color);
            color: var(--text-color);
        }

        /* ==================== 7. Contact Section ==================== */
        .contact-section {
            background-color: var(--card-bg);
            padding: 30px;
            border-radius: 8px;
            box-shadow: var(--shadow);
            margin-bottom: 40px;
        }

        footer {
            text-align: center;
            padding: 20px;
            border-top: 1px solid var(--border-color);
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <!-- Header Navigation -->
    <header>
        <div class="container nav">
            <div class="logo"><i class="fa-solid fa-code"></i> وێبسایتەکەم</div>
            <div class="nav-links">
                <button class="btn btn-theme" id="theme-toggle"><i class="fa-solid fa-moon"></i></button>
                <button class="btn btn-primary" onclick="openModal()">چوونەژوورەوە</button>
            </div>
        </div>
    </header>

    <div class="container">
        <!-- Hero Section -->
        <section class="hero">
            <h1>بەخێربێن بۆ وێبسایتی فەرمی</h1>
            <p>لێرەدا دەتوانیت تازەترین خزمەتگوزاری و بابەتەکان ببینیت بە شێوازێکی مۆدێرن.</p>
            <button class="btn btn-accent">دەستپێکردن</button>
        </section>

        <!-- Controls (Search & Filter) -->
        <div class="controls-section">
            <div class="search-box">
                <input type="text" id="searchInput" onkeyup="filterCards()" placeholder="بگەڕێ...">
            </div>
            <div class="filter-buttons">
                <button class="active" onclick="filterCategory('all')">هموو</button>
                <button onclick="filterCategory('tech')">تەکنۆلۆژیا</button>
                <button onclick="filterCategory('design')">دیزاین</button>
            </div>
        </div>

        <!-- Cards Grid -->
        <section class="grid-container" id="cardsContainer">
            <div class="card" data-category="tech">
                <h3>پەرەپێدانی وێب</h3>
                <p>درۆستکردنی وێبسایتی خێرا و گونجاو بۆ سەرجەم ئامێرەکان.</p>
            </div>
            <div class="card" data-category="design">
                <h3>دیزاینی UI/UX</h3>
                <p>داڕشتنی ڕوکاری سەرنجڕاکێش و ئاسان بۆ بەکارهێنەران.</p>
            </div>
            <div class="card" data-category="tech">
                <h3>ئەپڵیکەیشنی مۆبایل</h3>
                <p>دروستکردنی بەرنامەی پێشکەوتوو بۆ سیستەمی ئەندرۆید و iOS.</p>
            </div>
        </section>

        <!-- Contact & Feedback Section -->
        <section class="contact-section">
            <h2>پەیوەندیمان پێوە بکە / ناردنی بۆچوون</h2>
            <form id="contactForm" onsubmit="handleContact(event)">
                <div class="input-group">
                    <label>ناو:</label>
                    <input type="text" required placeholder="ناوت بنووسە">
                </div>
                <div class="input-group">
                    <label>پەیام یان بۆچوون:</label>
                    <textarea rows="4" required placeholder="پەیامەکەت لێرە بنووسە..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">ناردن</button>
            </form>
        </section>
    </div>

    <!-- Login Modal Box -->
    <div class="modal" id="loginModal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <h3 style="margin-bottom: 15px;">چوونەژوورەوە</h3>
            <form onsubmit="handleLogin(event)">
                <div class="input-group">
                    <label>ئیمەیڵ:</label>
                    <input type="email" required placeholder="user@example.com">
                </div>
                <div class="input-group">
                    <label>وشەی نهێنی:</label>
                    <input type="password" required placeholder="******">
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;">چوونەژوورەوە</button>
            </form>
        </div>
    </div>

    <footer>
        <p>© 2026 سەرجەم مافەکانی پارێزراوە بۆ وێبسایتەکەت</p>
    </footer>

    <!-- JavaScript Functions -->
    <script>
        // 1. Dark Mode / Light Mode Toggle
        const themeToggleBtn = document.getElementById('theme-toggle');
        themeToggleBtn.addEventListener('click', () => {
            const currentTheme = document.body.getAttribute('data-theme');
            if (currentTheme === 'dark') {
                document.body.removeAttribute('data-theme');
                themeToggleBtn.innerHTML = '<i class="fa-solid fa-moon"></i>';
            } else {
                document.body.setAttribute('data-theme', 'dark');
                themeToggleBtn.innerHTML = '<i class="fa-solid fa-sun"></i>';
            }
        });

        // 2. Search Functionality
        function filterCards() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const cards = document.querySelectorAll('.card');
            
            cards.forEach(card => {
                const title = card.querySelector('h3').innerText.toLowerCase();
                const text = card.querySelector('p').innerText.toLowerCase();
                if (title.includes(input) || text.includes(input)) {
                    card.style.display = "";
                } else {
                    card.style.display = "none";
                }
            });
        }

        // 3. Category Filter Functionality
        function filterCategory(category) {
            const cards = document.querySelectorAll('.card');
            const buttons = document.querySelectorAll('.filter-buttons button');
            
            buttons.forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');

            cards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    card.style.display = "";
                } else {
                    card.style.display = "none";
                }
            });
        }

        // 4. Modal Functions (Open/Close)
        function openModal() {
            document.getElementById('loginModal').style.display = 'flex';
        }
        function closeModal() {
            document.getElementById('loginModal').style.display = 'none';
        }

        // 5. Form Submissions
        function handleLogin(e) {
            e.preventDefault();
            alert("بە سەرکەوتوویی چوویته ژوورەوە!");
            closeModal();
        }

        function handleContact(e) {
            e.preventDefault();
            alert("پەیامەکەت بە سەرکەوتوویی گەیشت، سوپاس!");
            document.getElementById('contactForm').reset();
        }
    </script>
</body>
</html>
