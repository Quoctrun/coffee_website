<link rel="stylesheet" type="text/css" href="../view/css/purchase_history.css">
    <!--main section-->
    <main class="main">
        <div id="order-list" style="background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);"></div>
    </main>
    <script type="text/javascript" src="../view/js/purchase_history.js"></script>
    <script>
        // Save scroll position before navigating away
        window.addEventListener('beforeunload', () => {
            sessionStorage.setItem('scrollPosition', window.scrollY);
        });

        // Restore scroll position when the page loads
        window.addEventListener('DOMContentLoaded', () => {
            const scrollPosition = sessionStorage.getItem('scrollPosition');
            if (scrollPosition) {
                window.scrollTo(0, parseInt(scrollPosition, 10));
                sessionStorage.removeItem('scrollPosition'); // Clean up
            }
        });
    </script>
